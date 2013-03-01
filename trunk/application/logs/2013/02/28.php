<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-02-28 00:36:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: b ~ APPPATH\views\admin\blogs.php [ 35 ] in C:\wamp\www\qvid\application\views\admin\blogs.php:35
2013-02-28 00:36:05 --- DEBUG: #0 C:\wamp\www\qvid\application\views\admin\blogs.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 35, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\admin\blogs.php(14): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Blogs->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Blogs))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\admin\blogs.php:35
2013-02-28 23:04:18 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\wamp\www\qvid\system\classes\Kohana\Cookie.php:115
2013-02-28 23:04:18 --- DEBUG: #0 C:\wamp\www\qvid\system\classes\Kohana\Cookie.php(115): Kohana_Cookie::salt('adminuser', '1')
#1 C:\wamp\www\qvid\application\classes\Controller\admin\login.php(29): Kohana_Cookie::set('adminuser', '1')
#2 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Login->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\qvid\system\classes\Kohana\Cookie.php:115
2013-02-28 23:09:11 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\admin\headertitle.php [ 21 ] in C:\wamp\www\qvid\application\views\admin\headertitle.php:21
2013-02-28 23:09:11 --- DEBUG: #0 C:\wamp\www\qvid\application\views\admin\headertitle.php(21): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\wamp\www\qvi...', 21, Array)
#1 C:\wamp\www\qvid\application\views\admin\basics.php(5): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#3 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#4 C:\wamp\www\qvid\application\classes\Controller\admin\basics.php(20): Kohana_View->render()
#5 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Basics->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Basics))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\qvid\application\views\admin\headertitle.php:21