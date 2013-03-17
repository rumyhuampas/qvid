<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-17 00:03:36 --- CRITICAL: ErrorException [ 8 ]: Undefined index: selecteditems ~ APPPATH\classes\Controller\admin\mediachoose.php [ 23 ] in C:\wamp\www\qvid\application\classes\Controller\admin\mediachoose.php:23
2013-03-17 00:03:36 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\admin\mediachoose.php(23): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\qvi...', 23, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_MediaChoose->action_getpage()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_MediaChoose))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\admin\mediachoose.php:23
2013-03-17 00:04:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: selecteditems ~ APPPATH\classes\Controller\admin\mediachoose.php [ 29 ] in C:\wamp\www\qvid\application\classes\Controller\admin\mediachoose.php:29
2013-03-17 00:04:26 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\admin\mediachoose.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 29, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_MediaChoose->action_getpage()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_MediaChoose))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\admin\mediachoose.php:29
2013-03-17 00:19:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: selecteditems ~ APPPATH\views\admin\mediachoose.php [ 69 ] in C:\wamp\www\qvid\application\views\admin\mediachoose.php:69
2013-03-17 00:19:54 --- DEBUG: #0 C:\wamp\www\qvid\application\views\admin\mediachoose.php(69): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 69, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\admin\mediachoose.php(30): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_MediaChoose->action_getpage()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_MediaChoose))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\admin\mediachoose.php:69
2013-03-17 00:24:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: selecteditems ~ APPPATH\views\admin\mediachoose.php [ 69 ] in C:\wamp\www\qvid\application\views\admin\mediachoose.php:69
2013-03-17 00:24:57 --- DEBUG: #0 C:\wamp\www\qvid\application\views\admin\mediachoose.php(69): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 69, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\admin\mediachoose.php(24): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_MediaChoose->action_getpage()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_MediaChoose))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\admin\mediachoose.php:69
2013-03-17 00:33:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: selecteditems ~ APPPATH\views\admin\mediachoose.php [ 69 ] in C:\wamp\www\qvid\application\views\admin\mediachoose.php:69
2013-03-17 00:33:10 --- DEBUG: #0 C:\wamp\www\qvid\application\views\admin\mediachoose.php(69): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 69, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\admin\mediachoose.php(31): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_MediaChoose->action_getpage()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_MediaChoose))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\admin\mediachoose.php:69