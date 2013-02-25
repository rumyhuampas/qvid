<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-02-25 00:39:47 --- CRITICAL: Kohana_Exception [ 0 ]: The requested route does not exist: admininfomsg ~ SYSPATH\classes\Kohana\Route.php [ 106 ] in C:\wamp\www\qvid\application\classes\Controller\admin\users.php:36
2013-02-25 00:39:47 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\admin\users.php(36): Kohana_Route::get('admininfomsg')
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_new()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\admin\users.php:36
2013-02-25 00:43:56 --- CRITICAL: Kohana_Exception [ 0 ]: The requested route does not exist: admininfomsg ~ SYSPATH\classes\Kohana\Route.php [ 106 ] in C:\wamp\www\qvid\application\classes\Controller\admin\users.php:98
2013-02-25 00:43:56 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\admin\users.php(98): Kohana_Route::get('admininfomsg')
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\admin\users.php:98