<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-02-21 00:02:50 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method helpers_db::getTeam() ~ APPPATH\views\team.php [ 38 ] in :
2013-02-21 00:02:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-21 00:17:37 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method helpers_db::getOfficeData() ~ APPPATH\views\admin\header.php [ 62 ] in :
2013-02-21 00:17:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-21 00:19:19 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\admin\login.php [ 12 ] in :
2013-02-21 00:19:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-21 00:20:53 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\admin\login.php [ 12 ] in :
2013-02-21 00:20:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-21 00:23:43 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\admin\login.php [ 16 ] in :
2013-02-21 00:23:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-21 00:23:58 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH\classes\Controller\admin\login.php [ 16 ] in :
2013-02-21 00:23:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-21 18:09:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: menuid ~ APPPATH\views\admin\header.php [ 134 ] in C:\wamp\www\qvid\application\views\admin\header.php:134
2013-02-21 18:09:00 --- DEBUG: #0 C:\wamp\www\qvid\application\views\admin\header.php(134): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 134, Array)
#1 C:\wamp\www\qvid\application\views\admin\home.php(1): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#3 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#4 C:\wamp\www\qvid\application\classes\Controller\admin\home.php(9): Kohana_View->render()
#5 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Home))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\qvid\application\views\admin\header.php:134
2013-02-21 18:10:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: menuid ~ APPPATH\views\admin\header.php [ 134 ] in C:\wamp\www\qvid\application\views\admin\header.php:134
2013-02-21 18:10:24 --- DEBUG: #0 C:\wamp\www\qvid\application\views\admin\header.php(134): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 134, Array)
#1 C:\wamp\www\qvid\application\views\admin\login.php(1): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#3 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#4 C:\wamp\www\qvid\application\classes\Controller\admin\login.php(9): Kohana_View->render()
#5 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Login->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\qvid\application\views\admin\header.php:134
2013-02-21 19:12:19 --- CRITICAL: Kohana_Exception [ 0 ]: The ImageId property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\qvid\modules\orm\classes\Kohana\ORM.php:600
2013-02-21 19:12:19 --- DEBUG: #0 C:\wamp\www\qvid\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('ImageId')
#1 C:\wamp\www\qvid\application\views\admin\users.php(53): Kohana_ORM->__get('ImageId')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#3 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#4 C:\wamp\www\qvid\application\classes\Controller\admin\users.php(11): Kohana_View->render()
#5 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\qvid\modules\orm\classes\Kohana\ORM.php:600
2013-02-21 20:04:14 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ECHO, expecting ',' or ';' ~ APPPATH\views\admin\useredit.php [ 42 ] in :
2013-02-21 20:04:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-21 20:14:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ECHO, expecting ',' or ';' ~ APPPATH\views\admin\useredit.php [ 54 ] in :
2013-02-21 20:14:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-21 21:41:33 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Admin_Users::request() ~ APPPATH\classes\Controller\admin\users.php [ 28 ] in :
2013-02-21 21:41:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-21 21:56:00 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$Name ~ APPPATH\views\admin\useredit.php [ 64 ] in C:\wamp\www\qvid\application\views\admin\useredit.php:64
2013-02-21 21:56:00 --- DEBUG: #0 C:\wamp\www\qvid\application\views\admin\useredit.php(64): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\qvi...', 64, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\admin\users.php(40): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\admin\useredit.php:64
2013-02-21 21:57:26 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$Name ~ APPPATH\views\admin\useredit.php [ 64 ] in C:\wamp\www\qvid\application\views\admin\useredit.php:64
2013-02-21 21:57:26 --- DEBUG: #0 C:\wamp\www\qvid\application\views\admin\useredit.php(64): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\qvi...', 64, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\admin\users.php(40): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\admin\useredit.php:64
2013-02-21 21:59:31 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$Name ~ APPPATH\views\admin\useredit.php [ 64 ] in C:\wamp\www\qvid\application\views\admin\useredit.php:64
2013-02-21 21:59:31 --- DEBUG: #0 C:\wamp\www\qvid\application\views\admin\useredit.php(64): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\qvi...', 64, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\admin\users.php(40): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\admin\useredit.php:64
2013-02-21 22:02:22 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$Name ~ APPPATH\views\admin\useredit.php [ 64 ] in C:\wamp\www\qvid\application\views\admin\useredit.php:64
2013-02-21 22:02:22 --- DEBUG: #0 C:\wamp\www\qvid\application\views\admin\useredit.php(64): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\qvi...', 64, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\admin\users.php(40): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\admin\useredit.php:64
2013-02-21 22:04:46 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$Id ~ APPPATH\views\admin\useredit.php [ 60 ] in C:\wamp\www\qvid\application\views\admin\useredit.php:60
2013-02-21 22:04:46 --- DEBUG: #0 C:\wamp\www\qvid\application\views\admin\useredit.php(60): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\qvi...', 60, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\admin\users.php(40): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\admin\useredit.php:60
2013-02-21 22:28:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: userid ~ APPPATH\classes\Controller\admin\users.php [ 45 ] in C:\wamp\www\qvid\application\classes\Controller\admin\users.php:45
2013-02-21 22:28:12 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\admin\users.php(45): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 45, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\admin\users.php:45
2013-02-21 22:31:51 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\wamp\www\qvid\application\classes\Controller\admin\users.php:49
2013-02-21 22:31:51 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\admin\users.php(49): Kohana_ORM->update()
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\admin\users.php:49
2013-02-21 22:33:19 --- CRITICAL: ErrorException [ 8 ]: Undefined index: userid ~ APPPATH\classes\Controller\admin\users.php [ 45 ] in C:\wamp\www\qvid\application\classes\Controller\admin\users.php:45
2013-02-21 22:33:19 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\admin\users.php(45): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\qvi...', 45, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\admin\users.php:45
2013-02-21 22:35:23 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\wamp\www\qvid\application\classes\Controller\admin\users.php:49
2013-02-21 22:35:23 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\admin\users.php(49): Kohana_ORM->update()
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\admin\users.php:49
2013-02-21 22:38:36 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\wamp\www\qvid\application\classes\Controller\admin\users.php:49
2013-02-21 22:38:36 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\admin\users.php(49): Kohana_ORM->update()
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\admin\users.php:49
2013-02-21 22:39:43 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\wamp\www\qvid\application\classes\Controller\admin\users.php:49
2013-02-21 22:39:43 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\admin\users.php(49): Kohana_ORM->update()
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\admin\users.php:49
2013-02-21 22:44:09 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\wamp\www\qvid\application\classes\Controller\admin\users.php:50
2013-02-21 22:44:09 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\admin\users.php(50): Kohana_ORM->update()
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\admin\users.php:50
2013-02-21 22:47:08 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\wamp\www\qvid\application\classes\Controller\admin\users.php:53
2013-02-21 22:47:08 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\admin\users.php(53): Kohana_ORM->update()
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\admin\users.php:53
2013-02-21 22:51:33 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::load() ~ APPPATH\classes\Controller\admin\users.php [ 46 ] in :
2013-02-21 22:51:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-21 22:57:15 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\wamp\www\qvid\application\classes\Controller\admin\users.php:49
2013-02-21 22:57:15 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\admin\users.php(49): Kohana_ORM->update()
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\admin\users.php:49
2013-02-21 22:58:03 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\wamp\www\qvid\application\classes\Controller\admin\users.php:49
2013-02-21 22:58:03 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\admin\users.php(49): Kohana_ORM->update()
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\admin\users.php:49
2013-02-21 22:59:37 --- CRITICAL: ErrorException [ 8 ]: Undefined index: userid ~ APPPATH\classes\Controller\admin\users.php [ 56 ] in C:\wamp\www\qvid\application\classes\Controller\admin\users.php:56
2013-02-21 22:59:37 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\admin\users.php(56): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\qvi...', 56, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\admin\users.php:56