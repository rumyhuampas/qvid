<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-02-22 00:03:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: infomsg ~ APPPATH\views\admin\headertitle.php [ 7 ] in C:\wamp\www\qvid\application\views\admin\headertitle.php:7
2013-02-22 00:03:48 --- DEBUG: #0 C:\wamp\www\qvid\application\views\admin\headertitle.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 7, Array)
#1 C:\wamp\www\qvid\application\views\admin\home.php(5): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#3 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#4 C:\wamp\www\qvid\application\classes\Controller\admin\home.php(11): Kohana_View->render()
#5 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Home))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\qvid\application\views\admin\headertitle.php:7
2013-02-22 00:20:05 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Admin_Users::request() ~ APPPATH\classes\Controller\admin\users.php [ 9 ] in :
2013-02-22 00:20:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-22 00:21:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: infomsg ~ APPPATH\classes\Controller\admin\users.php [ 34 ] in C:\wamp\www\qvid\application\classes\Controller\admin\users.php:34
2013-02-22 00:21:57 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\admin\users.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 34, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_new()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\admin\users.php:34
2013-02-22 00:22:32 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH\classes\Kohana\Route.php [ 556 ] in :
2013-02-22 00:22:32 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', 'C:\wamp\www\qvi...', 556, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Route.php(556): str_replace('<id>', 'Array', '/<id>')
#2 C:\wamp\www\qvid\application\classes\Controller\admin\users.php(34): Kohana_Route->uri(Array)
#3 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_new()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-02-22 00:23:56 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH\classes\Kohana\Route.php [ 556 ] in :
2013-02-22 00:23:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', 'C:\wamp\www\qvi...', 556, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Route.php(556): str_replace('<id>', 'Array', '/<id>')
#2 C:\wamp\www\qvid\application\classes\Controller\admin\users.php(34): Kohana_Route->uri(Array)
#3 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_new()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-02-22 00:25:00 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH\classes\Kohana\Route.php [ 556 ] in :
2013-02-22 00:25:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', 'C:\wamp\www\qvi...', 556, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Route.php(556): str_replace('<id>', 'Array', '/<id>')
#2 C:\wamp\www\qvid\application\classes\Controller\admin\users.php(37): Kohana_Route->uri(Array)
#3 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_new()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-02-22 00:31:18 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH\classes\Kohana\Route.php [ 556 ] in :
2013-02-22 00:31:18 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', 'C:\wamp\www\qvi...', 556, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Route.php(556): str_replace('<id>', 'Array', '/<id>')
#2 C:\wamp\www\qvid\application\classes\Controller\admin\users.php(34): Kohana_Route->uri(Array)
#3 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_new()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-02-22 00:31:44 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH\classes\Kohana\Route.php [ 556 ] in :
2013-02-22 00:31:44 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', 'C:\wamp\www\qvi...', 556, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Route.php(556): str_replace('<id>', 'Array', '/<id>')
#2 C:\wamp\www\qvid\application\classes\Controller\admin\users.php(34): Kohana_Route->uri(Array)
#3 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_new()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#9 {main} in :