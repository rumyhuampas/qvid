<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-02-26 19:21:26 --- CRITICAL: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ APPPATH\views\admin\login.php [ 38 ] in C:\wamp\www\qvid\application\views\admin\login.php:38
2013-02-26 19:21:26 --- DEBUG: #0 C:\wamp\www\qvid\application\views\admin\login.php(38): Kohana_Core::error_handler(2, 'include() [<a h...', 'C:\wamp\www\qvi...', 38, Array)
#1 C:\wamp\www\qvid\application\views\admin\login.php(38): include()
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#3 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#4 C:\wamp\www\qvid\application\classes\Controller\admin\login.php(10): Kohana_View->render()
#5 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Login->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\qvid\application\views\admin\login.php:38