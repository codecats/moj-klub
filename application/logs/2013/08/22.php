<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-08-22 10:19:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: team ~ APPPATH/views/Header/Administration/Icon.php [ 20 ] in /home/t/www/moj-klub/application/views/Header/Administration/Icon.php:20
2013-08-22 10:19:40 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Header/Administration/Icon.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 20, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#3 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/t/www/moj-klub/application/views/Header/Menu/Top.php(35): Kohana_View->__toString()
#5 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#6 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#7 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /home/t/www/moj-klub/application/views/Header/Header.php(4): Kohana_View->__toString()
#9 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#10 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#11 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#12 /home/t/www/moj-klub/application/views/Template.php(38): Kohana_View->__toString()
#13 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#14 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#15 /home/t/www/moj-klub/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#16 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(116): Kohana_Controller_Template->after()
#17 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#18 [internal function]: Kohana_Controller->execute()
#19 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#20 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#21 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#22 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#23 {main} in /home/t/www/moj-klub/application/views/Header/Administration/Icon.php:20
2013-08-22 10:33:22 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Team as array ~ SYSPATH/classes/Kohana/Arr.php [ 277 ] in :
2013-08-22 10:33:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-22 10:34:18 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Automatic.php [ 116 ] in /home/t/www/moj-klub/application/classes/Controller/Automatic.php:116
2013-08-22 10:34:18 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(116): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/t/www/moj...', 116, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Automatic.php:116
2013-08-22 10:36:16 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ APPPATH/classes/Controller/Automatic.php [ 113 ] in :
2013-08-22 10:36:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-22 11:08:53 --- EMERGENCY: Zend\Permissions\Acl\Exception\InvalidArgumentException [ 0 ]: Resource 'gallery' not found ~ MODPATH/menu/classes/Zend/Permissions/Acl/Acl.php [ 292 ] in /home/t/www/moj-klub/modules/menu/classes/Zend/Permissions/Acl/Acl.php:573
2013-08-22 11:08:53 --- DEBUG: #0 /home/t/www/moj-klub/modules/menu/classes/Zend/Permissions/Acl/Acl.php(573): Zend\Permissions\Acl\Acl->getResource('gallery')
#1 /home/t/www/moj-klub/modules/menu/classes/Zend/Permissions/Acl/Acl.php(446): Zend\Permissions\Acl\Acl->setRule('OP_ADD', 'TYPE_DENY', 'tomek11', Array, NULL, NULL)
#2 /home/t/www/moj-klub/application/classes/Menu/Management.php(89): Zend\Permissions\Acl\Acl->deny('tomek11', Array)
#3 /home/t/www/moj-klub/application/classes/Manager/Management.php(26): Menu_Management->deny_permissions(Object(Model_Request), Object(Model_User))
#4 /home/t/www/moj-klub/application/classes/Manager/Management.php(71): Manager_Management->__initialize()
#5 /home/t/www/moj-klub/application/classes/Controller/Management.php(29): Manager_Management->set_objects(Array)
#6 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Management->action_consider_join()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Management))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#12 {main} in /home/t/www/moj-klub/modules/menu/classes/Zend/Permissions/Acl/Acl.php:573
2013-08-22 11:15:10 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-08-22 11:15:10 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/t/www/moj-klub/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(60): Kohana_Auth::instance()
#5 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Automatic->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#11 {main} in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-08-22 11:19:56 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-08-22 11:19:56 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/t/www/moj-klub/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(60): Kohana_Auth::instance()
#5 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Automatic->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Management))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#11 {main} in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-08-22 11:20:24 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-08-22 11:20:24 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/t/www/moj-klub/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(60): Kohana_Auth::instance()
#5 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Automatic->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Management))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#11 {main} in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-08-22 13:45:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: team ~ MODPATH/orm/classes/Kohana/ORM.php [ 1522 ] in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:1522
2013-08-22 13:45:06 --- DEBUG: #0 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1522): Kohana_Core::error_handler(8, 'Undefined index...', '/home/t/www/moj...', 1522, Array)
#1 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1465): Kohana_ORM->count_relations('team', NULL)
#2 /home/t/www/moj-klub/application/classes/Menu/Management.php(91): Kohana_ORM->has('team')
#3 /home/t/www/moj-klub/application/classes/Manager/Management.php(26): Menu_Management->deny_permissions(Object(Model_Request), Object(Model_User))
#4 /home/t/www/moj-klub/application/classes/Manager/Management.php(74): Manager_Management->__initialize()
#5 /home/t/www/moj-klub/application/classes/Controller/Management.php(32): Manager_Management->set_objects(Array)
#6 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Management->action_consider_join()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Management))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#12 {main} in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:1522
2013-08-22 14:16:48 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF), expecting '(' ~ APPPATH/classes/Menu/Management.php [ 108 ] in :
2013-08-22 14:16:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-22 15:16:27 --- EMERGENCY: Zend\Permissions\Acl\Exception\InvalidArgumentException [ 0 ]: Resource 'consider' not found ~ MODPATH/menu/classes/Zend/Permissions/Acl/Acl.php [ 292 ] in /home/t/www/moj-klub/modules/menu/classes/Zend/Permissions/Acl/Acl.php:573
2013-08-22 15:16:27 --- DEBUG: #0 /home/t/www/moj-klub/modules/menu/classes/Zend/Permissions/Acl/Acl.php(573): Zend\Permissions\Acl\Acl->getResource('consider')
#1 /home/t/www/moj-klub/modules/menu/classes/Zend/Permissions/Acl/Acl.php(446): Zend\Permissions\Acl\Acl->setRule('OP_ADD', 'TYPE_DENY', 'tomek11', 'consider', NULL, NULL)
#2 /home/t/www/moj-klub/application/classes/Menu/Management.php(118): Zend\Permissions\Acl\Acl->deny('tomek11', 'consider')
#3 /home/t/www/moj-klub/application/classes/Manager/Management.php(26): Menu_Management->deny_permissions(Object(Model_Request), Object(Model_User))
#4 /home/t/www/moj-klub/application/classes/Manager/Management.php(80): Manager_Management->__initialize()
#5 /home/t/www/moj-klub/application/classes/Controller/Management.php(30): Manager_Management->set_objects(Array)
#6 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Management->action_consider_join()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Management))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#12 {main} in /home/t/www/moj-klub/modules/menu/classes/Zend/Permissions/Acl/Acl.php:573
2013-08-22 15:31:49 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::set() ~ APPPATH/classes/Manager/Management.php [ 68 ] in :
2013-08-22 15:31:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-22 15:38:15 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::where() ~ APPPATH/classes/Manager/Management.php [ 70 ] in :
2013-08-22 15:38:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-22 15:39:00 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH/classes/Manager/Management.php [ 68 ] in :
2013-08-22 15:39:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-22 15:39:17 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::where() ~ APPPATH/classes/Manager/Management.php [ 70 ] in :
2013-08-22 15:39:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-22 15:39:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$date ~ APPPATH/classes/Manager/Management.php [ 68 ] in /home/t/www/moj-klub/application/classes/Manager/Management.php:68
2013-08-22 15:39:27 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Manager/Management.php(68): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/t/www/moj...', 68, Array)
#1 /home/t/www/moj-klub/application/classes/Manager/Management.php(40): Manager_Management->consider_accept()
#2 /home/t/www/moj-klub/application/classes/Controller/Management.php(32): Manager_Management->consider_result('accept')
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Management->action_consider_join()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Management))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/application/classes/Manager/Management.php:68
2013-08-22 15:40:00 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::where() ~ APPPATH/classes/Manager/Management.php [ 71 ] in :
2013-08-22 15:40:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-22 16:13:55 --- EMERGENCY: Zend\Permissions\Acl\Exception\InvalidArgumentException [ 0 ]: Resource 'send_join' not found ~ MODPATH/menu/classes/Zend/Permissions/Acl/Acl.php [ 292 ] in /home/t/www/moj-klub/modules/menu/classes/Zend/Permissions/Acl/Acl.php:573
2013-08-22 16:13:55 --- DEBUG: #0 /home/t/www/moj-klub/modules/menu/classes/Zend/Permissions/Acl/Acl.php(573): Zend\Permissions\Acl\Acl->getResource('send_join')
#1 /home/t/www/moj-klub/modules/menu/classes/Zend/Permissions/Acl/Acl.php(432): Zend\Permissions\Acl\Acl->setRule('OP_ADD', 'TYPE_ALLOW', 'player', Array, NULL, NULL)
#2 /home/t/www/moj-klub/application/classes/Menu/Management.php(127): Zend\Permissions\Acl\Acl->allow('player', Array)
#3 /home/t/www/moj-klub/application/classes/Manager/Management.php(26): Menu_Management->deny_permissions(Object(Model_Request), Object(Model_User))
#4 /home/t/www/moj-klub/application/classes/Manager/Management.php(96): Manager_Management->__initialize()
#5 /home/t/www/moj-klub/application/classes/Controller/Management.php(30): Manager_Management->set_objects(Array)
#6 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Management->action_consider_join()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Management))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#12 {main} in /home/t/www/moj-klub/modules/menu/classes/Zend/Permissions/Acl/Acl.php:573
2013-08-22 16:18:16 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::update() ~ APPPATH/classes/Manager/Management.php [ 81 ] in :
2013-08-22 16:18:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-22 20:33:10 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Menu_General::get_resource_by_user(), called in /home/t/www/moj-klub/application/classes/Controller/Management.php on line 83 and defined ~ APPPATH/classes/Menu/General.php [ 9 ] in /home/t/www/moj-klub/application/classes/Menu/General.php:9
2013-08-22 20:33:10 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Menu/General.php(9): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/t/www/moj...', 9, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Management.php(83): Menu_General->get_resource_by_user('manager')
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Management->action_requests()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Management))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/application/classes/Menu/General.php:9
2013-08-22 20:33:25 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Menu/General.php [ 12 ] in /home/t/www/moj-klub/application/classes/Menu/General.php:12
2013-08-22 20:33:25 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Menu/General.php(12): Kohana_Core::error_handler(8, 'Trying to get p...', '/home/t/www/moj...', 12, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Management.php(83): Menu_General->get_resource_by_user('manager', NULL)
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Management->action_requests()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Management))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/application/classes/Menu/General.php:12
2013-08-22 20:35:14 --- EMERGENCY: Zend\Permissions\Acl\Exception\InvalidArgumentException [ 0 ]: Role 'tomek11' not found ~ MODPATH/menu/classes/Zend/Permissions/Acl/Role/Registry.php [ 106 ] in /home/t/www/moj-klub/modules/menu/classes/Zend/Permissions/Acl/Acl.php:722
2013-08-22 20:35:14 --- DEBUG: #0 /home/t/www/moj-klub/modules/menu/classes/Zend/Permissions/Acl/Acl.php(722): Zend\Permissions\Acl\Role\Registry->get('tomek11')
#1 /home/t/www/moj-klub/modules/menu/classes/Zend/Acl.php(53): Zend\Permissions\Acl\Acl->isAllowed('tomek11', 'modification')
#2 /home/t/www/moj-klub/modules/menu/classes/Zend/Acl.php(26): Zend_Acl->get_resource_table('tomek11')
#3 /home/t/www/moj-klub/application/classes/Menu/General.php(13): Zend_Acl->get_resource_by_user('tomek11', NULL)
#4 /home/t/www/moj-klub/application/classes/Controller/Management.php(83): Menu_General->get_resource_by_user(Object(Model_User), NULL)
#5 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Management->action_requests()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Management))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#11 {main} in /home/t/www/moj-klub/modules/menu/classes/Zend/Permissions/Acl/Acl.php:722
2013-08-22 20:37:54 --- EMERGENCY: Zend\Permissions\Acl\Exception\InvalidArgumentException [ 0 ]: Role '' not found ~ MODPATH/menu/classes/Zend/Permissions/Acl/Role/Registry.php [ 106 ] in /home/t/www/moj-klub/modules/menu/classes/Zend/Permissions/Acl/Acl.php:722
2013-08-22 20:37:54 --- DEBUG: #0 /home/t/www/moj-klub/modules/menu/classes/Zend/Permissions/Acl/Acl.php(722): Zend\Permissions\Acl\Role\Registry->get(Object(Model_User))
#1 /home/t/www/moj-klub/modules/menu/classes/Zend/Acl.php(53): Zend\Permissions\Acl\Acl->isAllowed(Object(Model_User), 'modification')
#2 /home/t/www/moj-klub/modules/menu/classes/Zend/Acl.php(26): Zend_Acl->get_resource_table(Object(Model_User))
#3 /home/t/www/moj-klub/application/classes/Menu/General.php(13): Zend_Acl->get_resource_by_user(Object(Model_User), NULL)
#4 /home/t/www/moj-klub/application/classes/Menu/Request.php(61): Menu_General->get_resource_by_user(Object(Model_User), NULL)
#5 /home/t/www/moj-klub/application/classes/Controller/Management.php(83): Menu_Request->get_resource_by_user(Object(Model_User), NULL)
#6 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Management->action_requests()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Management))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#12 {main} in /home/t/www/moj-klub/modules/menu/classes/Zend/Permissions/Acl/Acl.php:722
2013-08-22 20:38:28 --- EMERGENCY: Zend\Permissions\Acl\Exception\InvalidArgumentException [ 0 ]: Role '1' not found ~ MODPATH/menu/classes/Zend/Permissions/Acl/Role/Registry.php [ 106 ] in /home/t/www/moj-klub/modules/menu/classes/Zend/Permissions/Acl/Acl.php:722
2013-08-22 20:38:28 --- DEBUG: #0 /home/t/www/moj-klub/modules/menu/classes/Zend/Permissions/Acl/Acl.php(722): Zend\Permissions\Acl\Role\Registry->get(Object(Model_User))
#1 /home/t/www/moj-klub/modules/menu/classes/Zend/Acl.php(53): Zend\Permissions\Acl\Acl->isAllowed(Object(Model_User), 'modification')
#2 /home/t/www/moj-klub/modules/menu/classes/Zend/Acl.php(26): Zend_Acl->get_resource_table(Object(Model_User))
#3 /home/t/www/moj-klub/application/classes/Menu/General.php(13): Zend_Acl->get_resource_by_user(Object(Model_User), NULL)
#4 /home/t/www/moj-klub/application/classes/Menu/Request.php(61): Menu_General->get_resource_by_user(Object(Model_User), NULL)
#5 /home/t/www/moj-klub/application/classes/Controller/Management.php(83): Menu_Request->get_resource_by_user(Object(Model_User), NULL)
#6 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Management->action_requests()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Management))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#12 {main} in /home/t/www/moj-klub/modules/menu/classes/Zend/Permissions/Acl/Acl.php:722
2013-08-22 20:45:16 --- EMERGENCY: Kohana_Exception [ 0 ]: The roles property does not exist in the Model_Request class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:600
2013-08-22 20:45:16 --- DEBUG: #0 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('roles')
#1 /home/t/www/moj-klub/application/classes/Menu/General.php(28): Kohana_ORM->__get('roles')
#2 /home/t/www/moj-klub/application/classes/Menu/Request.php(46): Menu_General->prepare_permissions(Object(Model_Request))
#3 /home/t/www/moj-klub/modules/menu/classes/Kohana/Menu.php(39): Menu_Request->prepare_permissions(Object(Model_Request))
#4 /home/t/www/moj-klub/modules/menu/classes/Kohana/Menu.php(27): Kohana_Menu->__construct(Object(Model_Request))
#5 /home/t/www/moj-klub/application/classes/Controller/Management.php(82): Kohana_Menu::factory('Request', Object(Model_Request))
#6 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Management->action_requests()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Management))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#12 {main} in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:600
2013-08-22 20:46:32 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Menu_Request::deny_permissions(), called in /home/t/www/moj-klub/application/classes/Controller/Management.php on line 83 and defined ~ APPPATH/classes/Menu/Request.php [ 48 ] in /home/t/www/moj-klub/application/classes/Menu/Request.php:48
2013-08-22 20:46:32 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Menu/Request.php(48): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/t/www/moj...', 48, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Management.php(83): Menu_Request->deny_permissions(Object(Model_Request))
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Management->action_requests()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Management))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/application/classes/Menu/Request.php:48
2013-08-22 22:25:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: request ~ APPPATH/views/Component/Request/Controls/Owner.php [ 9 ] in /home/t/www/moj-klub/application/views/Component/Request/Controls/Owner.php:9
2013-08-22 22:25:02 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Component/Request/Controls/Owner.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 9, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#3 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/t/www/moj-klub/application/views/Component/Request/Status/Unread.php(35): Kohana_View->__toString()
#5 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#6 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#7 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /home/t/www/moj-klub/application/views/Component/Request/Single.php(121): Kohana_View->__toString()
#9 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#10 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#11 /home/t/www/moj-klub/application/views/Component/Request/Menu.php(22): Kohana_View->render()
#12 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#13 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#14 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#15 /home/t/www/moj-klub/application/views/Container/Main.php(3): Kohana_View->__toString()
#16 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#17 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#18 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#19 /home/t/www/moj-klub/application/views/Template.php(43): Kohana_View->__toString()
#20 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#21 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#22 /home/t/www/moj-klub/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#23 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(119): Kohana_Controller_Template->after()
#24 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#25 [internal function]: Kohana_Controller->execute()
#26 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Management))
#27 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#28 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#29 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#30 {main} in /home/t/www/moj-klub/application/views/Component/Request/Controls/Owner.php:9
2013-08-22 22:50:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: time ~ APPPATH/views/Component/Request/Status/Refused.php [ 10 ] in /home/t/www/moj-klub/application/views/Component/Request/Status/Refused.php:10
2013-08-22 22:50:36 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Component/Request/Status/Refused.php(10): Kohana_Core::error_handler(8, 'Undefined index...', '/home/t/www/moj...', 10, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#3 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/t/www/moj-klub/application/views/Component/Request/Single.php(27): Kohana_View->__toString()
#5 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#6 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#7 /home/t/www/moj-klub/application/views/Component/Request/Menu.php(22): Kohana_View->render()
#8 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#9 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#10 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#11 /home/t/www/moj-klub/application/views/Container/Main.php(3): Kohana_View->__toString()
#12 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#13 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#14 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#15 /home/t/www/moj-klub/application/views/Template.php(43): Kohana_View->__toString()
#16 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#17 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#18 /home/t/www/moj-klub/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#19 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(119): Kohana_Controller_Template->after()
#20 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#21 [internal function]: Kohana_Controller->execute()
#22 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Management))
#23 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#24 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#25 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#26 {main} in /home/t/www/moj-klub/application/views/Component/Request/Status/Refused.php:10