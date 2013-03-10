<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-10 15:42:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: media ~ APPPATH\views\admin\blogedit.php [ 49 ] in C:\wamp\www\qvid\application\views\admin\blogedit.php:49
2013-03-10 15:42:01 --- DEBUG: #0 C:\wamp\www\qvid\application\views\admin\blogedit.php(49): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 49, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\admin\blogs.php(29): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Blogs->action_new()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Blogs))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\admin\blogedit.php:49