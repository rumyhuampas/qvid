<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-19 19:08:08 --- CRITICAL: ErrorException [ 2 ]: in_array() expects parameter 2 to be array, integer given ~ APPPATH\views\admin\mediachoose.php [ 69 ] in :
2013-03-19 19:08:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', 'C:\wamp\www\qvi...', 69, Array)
#1 C:\wamp\www\qvid\application\views\admin\mediachoose.php(69): in_array('13', 12, false)
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#3 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#4 C:\wamp\www\qvid\application\classes\Controller\admin\mediachoose.php(31): Kohana_View->render()
#5 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_MediaChoose->action_getpage()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_MediaChoose))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#11 {main} in :
2013-03-19 19:10:43 --- CRITICAL: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH\classes\Controller\admin\mediachoose.php [ 24 ] in :
2013-03-19 19:10:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-19 19:13:49 --- CRITICAL: ErrorException [ 2 ]: in_array() expects parameter 2 to be array, integer given ~ APPPATH\views\admin\mediachoose.php [ 69 ] in :
2013-03-19 19:13:49 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', 'C:\wamp\www\qvi...', 69, Array)
#1 C:\wamp\www\qvid\application\views\admin\mediachoose.php(69): in_array('13', 12, false)
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#3 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#4 C:\wamp\www\qvid\application\classes\Controller\admin\mediachoose.php(31): Kohana_View->render()
#5 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_MediaChoose->action_getpage()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_MediaChoose))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#11 {main} in :
2013-03-19 19:14:03 --- CRITICAL: ErrorException [ 2 ]: in_array() expects parameter 2 to be array, integer given ~ APPPATH\views\admin\mediachoose.php [ 69 ] in :
2013-03-19 19:14:03 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', 'C:\wamp\www\qvi...', 69, Array)
#1 C:\wamp\www\qvid\application\views\admin\mediachoose.php(69): in_array('2', 12, false)
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#3 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#4 C:\wamp\www\qvid\application\classes\Controller\admin\mediachoose.php(31): Kohana_View->render()
#5 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_MediaChoose->action_getpage()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_MediaChoose))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#11 {main} in :
2013-03-19 19:23:56 --- CRITICAL: ErrorException [ 2 ]: in_array() expects parameter 2 to be array, integer given ~ APPPATH\classes\Controller\admin\mediachoose.php [ 38 ] in :
2013-03-19 19:23:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', 'C:\wamp\www\qvi...', 38, Array)
#1 C:\wamp\www\qvid\application\classes\Controller\admin\mediachoose.php(38): in_array(Array, 12)
#2 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_MediaChoose->action_setpost()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_MediaChoose))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-03-19 19:24:31 --- CRITICAL: ErrorException [ 2 ]: in_array() expects parameter 2 to be array, integer given ~ APPPATH\classes\Controller\admin\mediachoose.php [ 38 ] in :
2013-03-19 19:24:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', 'C:\wamp\www\qvi...', 38, Array)
#1 C:\wamp\www\qvid\application\classes\Controller\admin\mediachoose.php(38): in_array(Array, 12)
#2 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_MediaChoose->action_setpost()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_MediaChoose))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-03-19 21:19:33 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: blogs ~ APPPATH\views\admin\blogs.php [ 32 ] in C:\wamp\www\qvid\application\views\admin\blogs.php:32
2013-03-19 21:19:33 --- DEBUG: #0 C:\wamp\www\qvid\application\views\admin\blogs.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 32, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\admin\blogs.php(23): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Blogs->action_getpage()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Blogs))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\admin\blogs.php:32
2013-03-19 21:21:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: media ~ APPPATH\views\admin\mediaresources.php [ 34 ] in C:\wamp\www\qvid\application\views\admin\mediaresources.php:34
2013-03-19 21:21:41 --- DEBUG: #0 C:\wamp\www\qvid\application\views\admin\mediaresources.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 34, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\admin\mediaresources.php(23): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_MediaResources->action_getpage()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_MediaResources))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\admin\mediaresources.php:34
2013-03-19 21:30:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: users ~ APPPATH\views\admin\users.php [ 32 ] in C:\wamp\www\qvid\application\views\admin\users.php:32
2013-03-19 21:30:26 --- DEBUG: #0 C:\wamp\www\qvid\application\views\admin\users.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 32, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\admin\users.php(25): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_getpage()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\admin\users.php:32
2013-03-19 21:33:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: team ~ APPPATH\views\admin\team.php [ 33 ] in C:\wamp\www\qvid\application\views\admin\team.php:33
2013-03-19 21:33:25 --- DEBUG: #0 C:\wamp\www\qvid\application\views\admin\team.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 33, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\admin\team.php(26): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Team->action_getpage()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Team))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\admin\team.php:33
2013-03-19 22:20:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: selecteditems ~ APPPATH\classes\Controller\admin\mediachoose.php [ 52 ] in C:\wamp\www\qvid\application\classes\Controller\admin\mediachoose.php:52
2013-03-19 22:20:03 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\admin\mediachoose.php(52): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 52, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_MediaChoose->action_removeselecteditem()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_MediaChoose))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\admin\mediachoose.php:52