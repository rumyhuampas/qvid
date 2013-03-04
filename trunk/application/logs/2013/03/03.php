<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-03 21:56:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH\views\admin\mediaresources.php [ 45 ] in C:\wamp\www\qvid\application\views\admin\mediaresources.php:45
2013-03-03 21:56:52 --- DEBUG: #0 C:\wamp\www\qvid\application\views\admin\mediaresources.php(45): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 45, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\admin\mediaresources.php(14): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_MediaResources->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_MediaResources))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\admin\mediaresources.php:45