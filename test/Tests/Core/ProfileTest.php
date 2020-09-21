<?php
/**
 * Tests related to Profile snippet
 *
 * @package login
 * @subpackage test
 * @group Core
 * @group Profile
 */

class ProfileTest extends LoginTestCase
{
    /** @var LoginProfileController */
    public $controller;

    public function setUp()
    {
        parent::setUp();
        $this->controller = $this->login->loadController('Profile');
        $this->controller->setProperty('user', 1);
    }

    /**
     * Test the getUser method
     *
     * @param boolean $shouldPass
     * @param int $user The ID of the user to fetch
     * @dataProvider providerGetUser
     */
    public function testGetUser($shouldPass, $user = 1)
    {
        $this->controller->setProperty('user', $user);
        $user = $this->controller->getUser();
        if ($shouldPass) {
            $this->assertInstanceOf('modUser', $user);
        } else {
            $this->assertFalse($user);
        }
    }

    /**
     * @return array
     */
    public function providerGetUser()
    {
        return array(
            array(true, 1),
            array(false, 1032423432),
        );
    }

    /**
     * Test LoginProfileController::getProfile
     * @depends testGetUser
     */
    public function testGetProfile()
    {
        $this->controller->getUser();
        $profile = $this->controller->getProfile();
        $this->assertInstanceOf('modUserProfile', $profile);
    }

    /**
     * Ensure that the proper placeholders are set, and that the prefix option is respected
     *
     * @param string $prefix
     * @dataProvider providerSetToPlaceholders
     * @depends      testGetProfile
     * @depends      testGetUser
     */
    public function testSetToPlaceholders($prefix = '')
    {
        $this->controller->setProperty('prefix', $prefix);
        $this->controller->getUser();
        $this->controller->getProfile();
        $placeholders = $this->controller->setToPlaceholders();
        $this->assertNotEmpty($placeholders);

        $this->assertArrayHasKey($prefix . 'username', $this->modx->placeholders);
    }

    /**
     * @return array
     */
    public function providerSetToPlaceholders()
    {
        return array(
            array(''),
            array('up.'),
        );
    }

    /**
     * Test the getExtended method, ensuring it properly loads or does not load values
     *
     * @param boolean $shouldNotBeEmpty
     * @dataProvider providerGetExtended
     * @depends      testGetProfile
     * @depends      testGetUser
     */
    public function testGetExtended($shouldNotBeEmpty)
    {
        $this->controller->getUser();
        $this->controller->getProfile();
        $this->controller->profile->set('extended', array('test' => 1));
        $extended = $this->controller->getExtended();
        if ($shouldNotBeEmpty) {
            $this->assertInternalType('array', $extended);
            $this->assertNotEmpty($extended);
        } else {
            $this->assertEmpty($extended);
        }
    }

    /**
     * @return array
     */
    public function providerGetExtended()
    {
        return array(
            array(true),
        );
    }

    /**
     * Ensure the secure placeholders are being removed
     *
     * @depends testGetProfile
     * @depends testGetUser
     * @depends testSetToPlaceholders
     */
    public function testRemovePasswordPlaceholders()
    {
        $this->controller->getUser();
        $this->controller->getProfile();
        $phs = array('username' => 'test', 'password' => 'bad', 'cachepwd' => 2);
        $phs = $this->controller->removePasswordPlaceholders($phs);
        $this->assertArrayNotHasKey('password', $phs, 'removePasswordPlaceholders did not remove the password index.');
        $this->assertArrayNotHasKey('cachepwd', $phs, 'removePasswordPlaceholders did not remove the cachepwd index.');
    }
}