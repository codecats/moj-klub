<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-07-08 10:25:55 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/Controller/Automatic.php [ 16 ] in :
2013-07-08 10:25:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-08 10:26:45 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/Controller/Automatic.php [ 16 ] in :
2013-07-08 10:26:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-08 10:53:51 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-08 10:53:51 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/t/www/moj-klub/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/t/www/moj-klub/modules/captcha/classes/Captcha.php(161): Kohana_Session::instance()
#3 /home/t/www/moj-klub/modules/captcha/classes/Controller/Captcha.php(38): Captcha->update_response_session()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Captcha->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Captcha))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-08 13:42:08 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: form_registrate ~ APPPATH/views/Component/Access/Registrate.php [ 4 ] in /home/t/www/moj-klub/application/views/Component/Access/Registrate.php:4
2013-07-08 13:42:08 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Component/Access/Registrate.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 4, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#3 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/t/www/moj-klub/application/views/Container/Main.php(3): Kohana_View->__toString()
#5 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#6 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#7 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /home/t/www/moj-klub/application/views/Template.php(17): Kohana_View->__toString()
#9 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#10 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#11 /home/t/www/moj-klub/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#12 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(29): Kohana_Controller_Template->after()
#13 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#14 [internal function]: Kohana_Controller->execute()
#15 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#16 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#18 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#19 {main} in /home/t/www/moj-klub/application/views/Component/Access/Registrate.php:4
2013-07-08 14:25:14 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ SYSPATH/classes/Kohana/Route.php [ 104 ] in /home/t/www/moj-klub/system/classes/Kohana/Route.php:104
2013-07-08 14:25:14 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Route.php(104): Kohana_Core::error_handler(2, 'Illegal offset ...', '/home/t/www/moj...', 104, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Route.php(212): Kohana_Route::get(Array)
#2 /home/t/www/moj-klub/application/views/Component/Info/Registrate/Success.php(22): Kohana_Route::url(Array)
#3 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#4 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#5 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(18): Kohana_View->render()
#6 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#12 {main} in /home/t/www/moj-klub/system/classes/Kohana/Route.php:104
2013-07-08 14:27:20 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type in isset or empty ~ SYSPATH/classes/Kohana/Route.php [ 104 ] in /home/t/www/moj-klub/system/classes/Kohana/Route.php:104
2013-07-08 14:27:20 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Route.php(104): Kohana_Core::error_handler(2, 'Illegal offset ...', '/home/t/www/moj...', 104, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Route.php(212): Kohana_Route::get(Array)
#2 /home/t/www/moj-klub/application/views/Component/Info/Registrate/Success.php(22): Kohana_Route::url(Array)
#3 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#4 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#5 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(18): Kohana_View->render()
#6 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#12 {main} in /home/t/www/moj-klub/system/classes/Kohana/Route.php:104
2013-07-08 14:49:26 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/Controller/Automatic.php [ 18 ] in :
2013-07-08 14:49:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-08 14:55:03 --- EMERGENCY: View_Exception [ 0 ]: The requested view Window/Modal/Login could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/t/www/moj-klub/system/classes/Kohana/View.php:137
2013-07-08 14:55:03 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/View.php(137): Kohana_View->set_filename('Window/Modal/Lo...')
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(30): Kohana_View->__construct('Window/Modal/Lo...', NULL)
#2 /home/t/www/moj-klub/application/classes/Controller/User.php(10): Kohana_View::factory('Window/Modal/Lo...')
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/system/classes/Kohana/View.php:137
2013-07-08 15:07:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH/classes/Controller/User.php [ 11 ] in /home/t/www/moj-klub/application/classes/Controller/User.php:11
2013-07-08 15:07:50 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/User.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 11, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/User.php:11
2013-07-08 15:09:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: form_registrate ~ APPPATH/views/Component/Access/Registrate.php [ 4 ] in /home/t/www/moj-klub/application/views/Component/Access/Registrate.php:4
2013-07-08 15:09:52 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Component/Access/Registrate.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 4, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#3 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(18): Kohana_View->render()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/application/views/Component/Access/Registrate.php:4