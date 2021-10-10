<?php
/**
 * Login
 *
 * Copyright 2010 by Jason Coward <jason@modxcms.com> and Shaun McCormick
 * <shaun@modxcms.com>
 *
 * Login is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * Login is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Login; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package login
 */
/**
 * Forgot Password lexicon for Login
 *
 * @package login
 * @subpackage lexicon
 */
$_lang['login.email'] = 'Adres e-mail';
$_lang['login.forgot_password'] = 'Zapomniałem hasła';
$_lang['login.forgot_password_email_subject'] = 'Email odzyskiwania hasła';
$_lang['login.forgot_password_email_text'] = '<p>Witaj [[+username]],</p>
<p>aby aktywować nowe hasło, kliknij poniższy link:</p>
<p><a href="[[+confirmUrl]]">[[+confirmUrl]]</a></p>
<p>Jeśli się powiedzie, możesz użyć następującego hasła, aby się zalogować:</p>
<p><strong>Hasło:</strong> [[+password]]</p>
<p>Jeśli nie zażądałeś tej wiadomości, zignoruj ją.</p>
<p>Dzięki,<br />
<em>[[++site_name]] Administracja witryny</em></p>';
$_lang['login.or_forgot_username'] = 'A może zapomniałeś swojej nazwy użytkownika?';
$_lang['login.reset_password'] = 'Resetuj hasło';
$_lang['login.username'] = 'Nazwa użytkownika';
$_lang['login.user_err_nf_email'] = 'Jeśli użytkownik lub adres e-mail istnieje, wkrótce otrzymasz wiadomość e-mail.';
$_lang['login.user_err_nf_username'] = 'Jeśli użytkownik lub adres e-mail istnieje, wkrótce otrzymasz wiadomość e-mail.';
