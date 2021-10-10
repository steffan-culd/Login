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
 * Properties lexicon for Login
 *
 * @package login
 * @subpackage lexicon
 */
/* ForgotPassword snippet */
$_lang['prop_forgotpassword.emailtpl_desc'] = 'Шаблон подтверждающего email-сообщения.';
$_lang['prop_forgotpassword.emailtpltype_desc'] = 'Тип шаблона (tpl) для свойства emailTpl. По умолчанию - Чанк.';
$_lang['prop_forgotpassword.senttpl_desc'] = 'Шаблон сообщения, показывающегося, когда email был успешно отправлен.';
$_lang['prop_forgotpassword.senttpltype_desc'] = 'Шаблон для свойства sentTpl. По умолчанию это чанк.';
$_lang['prop_forgotpassword.tpl_desc'] = 'Шаблон формы забытого пароля.';
$_lang['prop_forgotpassword.tpltype_desc'] = 'Шаблон для свойства tpl. По умолчанию это чанк.';
$_lang['prop_forgotpassword.errtpl_desc'] = 'Шаблон для обертки сообщения об ошибках.';
$_lang['prop_forgotpassword.errtpltype_desc'] = 'Шаблон, используемый для errTpl.';
$_lang['prop_forgotpassword.emailsubject_desc'] = 'Тема для забытого пароля электронной почты.';
$_lang['prop_forgotpassword.emailtplalt_desc'] = '(Необязательно) Шаблон с альтернативой в виде простого текста для подтверждения электронного письма.';
$_lang['prop_forgotpassword.resetresourceid_desc'] = 'Ресурс с направлением пользователей для подтверждения в электронном письме, где находится фрагмент кода ResetPassword.';
/* Login snippet */
$_lang['prop_login.actionkey_desc'] = 'Переменная REQUEST, которая указывает, какое действие предпринять.';
$_lang['prop_login.loginkey_desc'] = 'Ключ действия входа.';
$_lang['prop_login.logoutkey_desc'] = 'Ключ действия выхода.';
$_lang['prop_login.loginviaemail_desc'] = 'Включение входа через имя пользователя или адрес электронной почты.';
$_lang['prop_login.tpltype_desc'] = 'Тип tpls, который предоставляется для формы входа и выхода.';
$_lang['prop_login.logintpl_desc'] = 'Форма входа tpl.';
$_lang['prop_login.logouttpl_desc'] = 'Выход tpl.';
$_lang['prop_login.prehooks_desc'] = 'Какие скрипты нужно запустить, если они есть, перед тем, как пользователь войдет в систему или выйдет из нее. Это может быть список хуков, разделенных запятыми, и если первый хук выполнить не получится, все последующие также не сработают. Хук, также, может являться именем сниппета, который будет выполнять этот снимет.';
$_lang['prop_login.posthooks_desc'] = 'Какие скрипты нужно запустить, если они есть, после того, как пользователь войдет в систему или выйдет из нее. Это может быть список хуков, разделенных запятыми, и если первый хук выполнить не получится, все последующие также не сработают. Хук, также, может являться именем сниппета, который будет выполнять этот сниппет.';
$_lang['prop_login.errtpl_desc'] = 'Ошибка tpl.';
$_lang['prop_login.errtpltype_desc'] = 'Тип ошибки tpl.';
$_lang['prop_login.loginresourceid_desc'] = 'Ресурс для перенаправления пользователей на успешный вход в систему. Значение 0 перенаправит на себя.';
$_lang['prop_login.loginresourceparams_desc'] = 'Массив JSON параметров для добавления в URL при перенаправлении на авторизацию. Пример: {"test":123}';
$_lang['prop_login.logoutresourceid_desc'] = 'ID ресурса для перенаправления пользователей на успешный выход из системы. Значение 0 перенаправит на себя.';
$_lang['prop_login.logoutresourceparams_desc'] = 'Массив JSON параметров для добавления в URL при перенаправлении на разавторизацию. Пример: {"test":123}';
$_lang['prop_login.loginmsg_desc'] = 'Необязательное сообщение для авторизации. Если пустое, будет использоваться строка словаря для входа.';
$_lang['prop_login.logoutmsg_desc'] = 'Необязательное сообщение для разавторизации. Если пустое, будет использоваться строка словаря для выхода.';
$_lang['prop_login.redirecttoprior_desc'] = 'Если установлено значение "Да", при успешном входе перенаправляется на страницу,с которой был осуществлен переход (HTTP_REFER).';
$_lang['prop_login.redirecttoonfailedauth_desc'] = 'Если установлено ненулевое число, то пользователь будет перенаправлен на эту страницу, если его попытка авторизации не удалась.';
$_lang['prop_login.remembermekey_desc'] = 'Необязательно. Имя поля переключателя "Запомнить меня", чтобы сохранить состояние авторизации. По умолчанию `rememberme`.';
$_lang['prop_login.contexts_desc'] = '(Экспериментально) Список контекстов для авторизации, разделенных запятыми. По умолчанию текущий контекст, если явно не задан.';
$_lang['prop_login.toplaceholder_desc'] = 'Если указано, вывод сниппета будет устанавливаться на плейсхолдер этого имени вместо непосредственного вывода возвращаемого содержимого.';
/* Profile snippet */
$_lang['prop_profile.prefix_desc'] = 'Строка префикса всех плейсхолдеров для полей, которые будут установлены сниппетом.';
$_lang['prop_profile.user_desc'] = 'Необязательно. ID пользователя или имя пользователя. Если установлено, будет использовать этот пользователь, а не текущий авторизованный.';
$_lang['prop_profile.useextended_desc'] = 'Установить или нет дополнительные поля в форме для передачи в расширенные поля профиля. Это может быть полезно для хранения дополнительных полей пользователя.';
/* Register snippet */
$_lang['prop_register.submitvar_desc'] = 'Значение имени переменной, которую нужно проверить, чтобы выполнить регистрацию. Если пусто или указано как "нет", сниппет Register будет обрабатывать форму по всем POST запросам.';
$_lang['prop_register.usergroups_desc'] = 'Необязательно. Разделенный запятыми список названий групп пользователей или идентификаторов для добавления нового зарегистрированного пользователя.';
$_lang['prop_register.usergroupsfield_desc'] = 'Имя поля для указания "Групп(ы) пользователей" для автоматического добавления нового пользователя. Используется только если это значение не пустое.';
$_lang['prop_register.submittedresourceid_desc'] = 'Если указан, будет перенаправлен на указанный ресурс после того, как пользователь заполнит форму регистрации.';
$_lang['prop_register.usernamefield_desc'] = 'Поле для имени нового пользователя.';
$_lang['prop_register.passwordfield_desc'] = 'Поле для пароля нового пользователя.';
$_lang['prop_register.emailfield_desc'] = 'Имя поля для адреса электронной почты нового пользователя.';
$_lang['prop_register.successMsg_desc'] = 'Необязательно. Если не перенаправлять пользователя с помощью параметра subittedResourceId, вместо этого будет показано это сообщение.';
$_lang['prop_register.persistparams_desc'] = 'Необязательный массив параметров JSON, который сохраняется в процессе регистрации. Полезно при использовании переадресации после ConfirmRegister для перенаправления на другую страницу (например, для корзины).';
$_lang['prop_register.prehooks_desc'] = 'Какие скрипты нужно запустить, если они есть, перед прохождением формой валидации. Это может быть список хуков, разделенных запятыми, и если первый хук выполнить не получится, все последующие также не сработают. Хук также может являться именем сниппета, который будет выполнять этот сниппет.';
$_lang['prop_register.posthooks_desc'] = 'Какие скрипты нужно запустить, если они есть, после того, как пользователь будет зарегистрирован. Это может быть список хуков, разделенных запятыми, и если первый хук выполнить не получится, все последующие также не сработают. Хук также может являться именем сниппета, который будет выполнять этот сниппет.';
$_lang['prop_register.useextended_desc'] = 'Установить или нет дополнительные поля в форме для передачи в расширенные поля профиля. Это может быть полезно для хранения дополнительных полей пользователя.';
$_lang['prop_register.excludeextended_desc'] = 'Список полей, разделенных запятыми, для исключения их из расширенных полей.';
$_lang['prop_register.activation_desc'] = 'Требуется ли активация для правильной регистрации. Если "Да", пользователи не будут отмечены активными до тех пор, пока они не активируют свою учетную запись. По умолчанию значение "Да". Будет работать только если форма регистрации приходит по электронной почте.';
$_lang['prop_register.activationttl_desc'] = 'Количество минут до истечения срока действия письма активации. По умолчанию - 3 часа.';
$_lang['prop_register.activationresourceid_desc'] = 'Идентификатор ресурса, в котором расположен сниппет активации ConfirmRegister.';
$_lang['prop_register.activationemail_desc'] = 'Если установлено, то вместо адреса нового пользователя активационные письма будут высланы на этот адрес.';
$_lang['prop_register.activationemailsubject_desc'] = 'Тема письма для активации.';
$_lang['prop_register.activationemailtpltype_desc'] = 'Тип tpl для письма активации.';
$_lang['prop_register.activationemailtpl_desc'] = 'Tpl письма активации.';
$_lang['prop_register.activationemailtplalt_desc'] = '(Необязательно) Простой альтернативный текст для письма активации.';
$_lang['prop_register.moderatedresourceid_desc'] = 'Если prehook устанавливает пользователя модерируемым, то отправить пользователя в этот ресурс вместо значения submittedResourceId. Оставьте пустым, чтобы пропустить.';
$_lang['prop_register.placeholderprefix_desc'] = 'Префикс для всех плейсхолдеров, установленных этим сниппетом.';
$_lang['prop_register.recaptchaHeight_desc'] = 'Если `recaptcha` установлен как preHook, это значение установит ширину для виджета reCaptcha.';
$_lang['prop_register.recaptchaTheme_desc'] = 'Если `recaptcha` установлен как preHook, это значение выберет тему для виджета reCaptcha.';
$_lang['prop_register.recaptchaWidth_desc'] = 'Если `recaptcha` установлен как preHook, это установит ширину для виджета reCaptcha.';
$_lang['prop_register.mathminrange_desc'] = 'Если значение «math» установлено в качестве preHook, здесь минимальный диапазон для каждого числа в уравнении.';
$_lang['prop_register.mathmaxrange_desc'] = 'Если значение «math» установлено в качестве preHook, здесь минимальный диапазон для каждого числа в уравнении.';
$_lang['prop_register.mathfield_desc'] = 'Если «math» установлен как preHook, здесь имя поля ввода для ответа.';
$_lang['prop_register.mathop1field_desc'] = 'Если значение «math» установлено в качестве preHook, здесь минимальный диапазон для каждого числа в уравнении.';
$_lang['prop_register.mathop2field_desc'] = 'Если значение «math» установлено в качестве preHook, здесь имя поля для второго числа в уравнении.';
$_lang['prop_register.mathoperatorfield_desc'] = 'Если значение «math» установлено в качестве preHook, здесь имя поля оператора в уравнении.';
$_lang['prop_register.validatepassword_desc'] = 'Проверять или нет отправленный пароль при регистрации. Рекомендуется оставить значение "Да", если вы не генерируете свой пароль в хуке.';
$_lang['prop_register.generatepassword_desc'] = 'Если установлено значение "Да", то сниппет регистрации сгенерирует случайный пароль для пользователя, перезаписывая любой передаваемый пароль. Полезно для автоматической генерации паролей.';
$_lang['prop_register.trimpassword_desc'] = 'Если выбрано «Да», будет удалены пробелы в переданном при регистрации пароле.';
$_lang['prop_register.ensurePasswordStrength_desc'] = 'Если установлено значение "Да", пользователю будет отображаться статус надежности вводимого при регистрации пароля. Надежный пароль тот, в котором содержаться комбинации числовых и буквенных значений с различным регистром, а также различные, допустимые, знаки.';
$_lang['prop_register.passwordWordSeparator_desc'] = 'Если для параметра "Надежность пароля" (PasswordStrength) установлено "Да", что будет разделителем между словами при подсчете количества слов в пароле.';
$_lang['prop_register.minimumStrongPasswordWordCount_desc'] = 'Если параметр ensurePasswordStrength установлен в "Да", если предоставленный пароль имеет так много слов, то он будет считаться надежным паролем.';
$_lang['prop_register.maximumPossibleStrongerPasswords_desc'] = 'Если ensurePasswordStrength установлен в "Да", то это максимальное количество предложений, которые Register может найти, чтобы рассмотреть предоставленный пароль как "сильный". Чем выше это число, тем мягче проверка, чем ниже - она ужесточается.';
$_lang['prop_register.ensurePasswordStrengthSuggestions_desc'] = 'Если параметр ensurePasswordStrength установлен в "Да", и пароль не проходит проверку надежности, Register предоставит указанное количество предложений пользователю по поводу их пароля.';
$_lang['prop_register.allowedfields_desc'] = 'Если указано, будут ограничены поля, которые разрешены для нового пользователя списком, разделённым запятыми. Также ограничивает расширенные поля.';
$_lang['prop_register.removeexpiredregistrations_desc'] = 'Если включено, то будут удалены зарегистрированные пользователи, у которых истек неиспользованный запрос на активацию и они никогда не активировались. Рекомендуется оставлять это для предотвращения спама.';
$_lang['prop_register.preservefieldsafterregister_desc'] = 'Если указано "Да", данные полей регистрации будут сохранены после успешной регистрации. Для сброса данных установите значение false.';
$_lang['prop_register.redirectUnsetDefaultParam_desc'] = 'Если указано "Да", дефолтные параметры будут удалены из ссылок перенаправления.';
$_lang['opt_register.chunk'] = 'Чанк';
$_lang['opt_register.file'] = 'Файл';
$_lang['opt_register.inline'] = 'Встроенный';
$_lang['opt_register.embedded'] = 'Встроенное';
$_lang['opt_register.blackglass'] = 'Чёрное Стекло';
$_lang['opt_register.clean'] = 'Чистый';
$_lang['opt_register.red'] = 'Красный';
$_lang['opt_register.white'] = 'Белый';
$_lang['opt_register.asc'] = 'По возрастанию';
$_lang['opt_register.desc'] = 'По убыванию';
/* ConfirmRegister snippet */
$_lang['prop_confirmregister.redirectto_desc'] = 'Необязательно. Перенаправить на этот ресурс после успешного подтверждения.';
$_lang['prop_confirmregister.redirectparams_desc'] = 'Необязательно. Набор параметров в формате JSON для передачи при перенаправлении с помощью redirectTo.';
$_lang['prop_confirmregister.redirectUnsetDefaultParam_desc'] = 'Если значение верно, дефолтные параметры будут удалены из ссылок перенаправления.';
$_lang['prop_confirmregister.authenticate_desc'] = 'Авторизовать и войти в текущий контекст, после подтверждения регистрации. По умолчанию значение "TRUE".';
$_lang['prop_confirmregister.authenticatecontexts_desc'] = 'Необязательно. Список контекстов, разделенных запятыми, для авторизации. По умолчанию указан текущий контекст.';
$_lang['prop_confirmregister.errorpage_desc'] = 'Необязательно. Если установлено, сработает перенаправление пользователя на страницу пользовательских ошибок, если пользователь пытается получить доступ к странице подтверждения регистрации в обход (или с ошибками) валидации.';
$_lang['prop_confirmregister.activepage_desc'] = 'Необязательно. Если установлено, сработает перенаправление пользователя на страницу "Документ не найден", если пользователь с уже активированным аккаунтом пытается получить доступ к странице подтверждения регистрации.';
/* ResetPassword snippet */
$_lang['prop_resetpassword.tpl_desc'] = 'Сообщение о сбросе пароля - чанк.';
$_lang['prop_resetpassword.tpltype_desc'] = 'Тип предоставляемого tpl. Чанк по умолчанию.';
$_lang['prop_resetpassword.loginresourceid_desc'] = 'Ресурс для редиректа пользователей в случае успешного подтверждения.';
/* UpdateProfile snippet */
$_lang['prop_updateprofile.allowedextendedfields_desc'] = 'Необязательно. Если установлено, то дополнительные поля при обновлении профиля будут ограничены именами полей в этом списке, разделённом запятыми.';
$_lang['prop_updateprofile.allowedfields_desc'] = 'Необязательно. Если установлено, то дополнительные поля будут ограничены именами полей в этом списке, разделённом запятыми.';
$_lang['prop_updateprofile.emailfield_desc'] = 'Имя поля для электронной почты в форме.';
$_lang['prop_updateprofile.excludeextended_desc'] = 'Список полей, разделенных запятыми, для исключения их из расширенных полей.';
$_lang['prop_updateprofile.placeholderprefix_desc'] = 'Префикс для всех плейсхолдеров, установленных этим сниппетом.';
$_lang['prop_updateprofile.posthooks_desc'] = 'Какие скрипты нужно запустить, если они есть, после того, как пользователь будет зарегистрирован. Это может быть список хуков, разделенных запятыми, и если первый хук выполнить не получится, все последующие также не сработают. Хук также может являться именем сниппета, который будет выполнять этот сниппет.';
$_lang['prop_updateprofile.prehooks_desc'] = 'Какие скрипты нужно запустить, если они есть, перед тем, как пользователь войдет в систему или выйдет из нее. Это может быть список хуков, разделенных запятыми, и если первый хук выполнить не получится, все последующие также не сработают. Хук также может являться именем сниппета, который будет выполнять этот сниппет.';
$_lang['prop_updateprofile.redirecttologin_desc'] = 'Если пользователь не авторизован и имеет доступ к этому ресурсу, перенаправляем его на страницу "Доступ запрещен".';
$_lang['prop_updateprofile.reloadonsuccess_desc'] = 'Если выбрано, страница будет перенаправляться на себя с помощью GET параметра, чтобы предотвратить повторные отправки данных. Если нет, будет просто создан плейсхолдер об успешном завершении.';
$_lang['prop_updateprofile.submitvar_desc'] = 'Значение имени переменной, которую нужно проверить, чтобы выполнить обновление профиля. Если пусто или указано как "нет", сниппет UpdateProfile будет обрабатывать форму по всем POST запросам.';
$_lang['prop_updateprofile.syncusername_desc'] = 'Если задать имя столбца профиля, UpdateProfile попытается синхронизировать имя пользователя с этим полем после успешного сохранения.';
$_lang['prop_updateprofile.useextended_desc'] = 'Установить или нет дополнительные поля в форме для передачи в расширенные поля профиля. Это может быть полезно для хранения дополнительных полей пользователя.';
$_lang['prop_updateprofile.user_desc'] = 'Необязательно. Если указано, то вместо активного пользователя будет загружен пользователь с указанным ID или именем пользователя.';
/* ChangePassword snippet */
$_lang['prop_changepassword.submitvar_desc'] = 'Значение имени переменной, которую нужно проверить, чтобы выполнить смену пароля. Если пусто или указано как "нет", сниппет ChangePassword будет обрабатывать форму по всем POST запросам.';
$_lang['prop_changepassword.fieldoldpassword_desc'] = 'Имя поля со старым паролем.';
$_lang['prop_changepassword.fieldnewpassword_desc'] = 'Имя поля с новым паролем.';
$_lang['prop_changepassword.fieldconfirmnewpassword_desc'] = 'Необязательно. Если задано, имя поля подтверждения пароля будет сравниваться с новым полем пароля.';
$_lang['prop_changepassword.prehooks_desc'] = 'Какие скрипты нужно запустить, если они есть, после того, как форма пройдет валидацию, но перед сохранением данных. Это может быть список хуков, разделенных запятыми, и если первый хук выполнить не получится, все последующие также не сработают. Хук также может являться именем сниппета, который будет выполнять этот сниппет.';
$_lang['prop_changepassword.posthooks_desc'] = 'Какие скрипты нужно запустить, если они есть, после того, как пользователь будет зарегистрирован. Это может быть список хуков, разделенных запятыми, и если первый хук выполнить не получится, все последующие также не сработают. Хук также может являться именем сниппета, который будет выполнять этот сниппет.';
$_lang['prop_changepassword.redirecttologin_desc'] = 'Если пользователь не авторизован и имеет доступ к этому ресурсу, перенаправляем его на страницу "Доступ запрещен".';
$_lang['prop_changepassword.reloadonsuccess_desc'] = 'Если выбрано, страница будет перенаправляться на себя с помощью GET параметра, чтобы предотвратить повторные отправки данных. Если нет, будет просто создан плейсхолдер об успешном завершении.';
$_lang['prop_changepassword.successmessage_desc'] = 'Если reloadOnSuccess установлен в "нет", вывести это сообщение в плейсхолдере [prefix].successMessage placeholder.';
$_lang['prop_changepassword.placeholderprefix_desc'] = 'Префикс для всех плейсхолдеров, установленных этим сниппетом.';
/* isLoggedIn snippet */
$_lang['prop_isloggedin.contexts_desc'] = 'Список контекстов, разделенных запятыми, для проверки статуса аутентификации. Если не установлено, будет использоваться текущий контекст по умолчанию.';
$_lang['prop_isloggedin.redirectto_desc'] = 'Идентификатор ресурса для перенаправления если пользователь не авторизован. По умолчанию будет отправлен на страницу "Доступ запрещен".';
$_lang['prop_isloggedin.redirectparams_desc'] = 'Если используется redirectTo, JSON объект REQUEST параметров будет передан вместе с перенаправлением.';
/* ActiveUsers snippet */
$_lang['prop_activeusers.tpl'] = 'Чанк, используемый для вывода каждого активного пользователя.';
$_lang['prop_activeusers.tplType'] = 'Тип предоставляемого tpl. Чанк по умолчанию.';
$_lang['prop_activeusers.sortBy'] = 'Поле сортировки по пользователям.';
$_lang['prop_activeusers.sortDir'] = 'Направление сортировки для пользователей.';
$_lang['prop_activeusers.limit'] = 'Количество отображаемых пользователей.';
$_lang['prop_activeusers.offset'] = 'Смещение от начала списка отображаемых пользователей.';
$_lang['prop_activeusers.classKey'] = 'Ключ класса, используемый при поиске пользователей. По умолчанию modUser. Вы можете указать имя класса, расширяющее modUser, если хотите.';
$_lang['prop_activeusers.placeholderprefix_desc'] = 'Префикс для всех плейсхолдеров, установленных этим сниппетом.';
$_lang['prop_activeusers.toplaceholder_desc'] = 'Если указано, вывод сниппета будет устанавливаться на плейсхолдер этого имени вместо непосредственного вывода возвращаемого содержимого.';
