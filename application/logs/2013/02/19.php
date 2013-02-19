<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-02-19 01:07:55 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Blog::open_where() ~ APPPATH\classes\Controller\search.php [ 11 ] in :
2013-02-19 01:07:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-19 01:08:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: blogTitle ~ APPPATH\views\blogheader.php [ 6 ] in C:\wamp\www\qvid\application\views\blogheader.php:6
2013-02-19 01:08:31 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blogheader.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 6, Array)
#1 C:\wamp\www\qvid\application\views\blog.php(8): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#3 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#4 C:\wamp\www\qvid\application\classes\Controller\search.php(16): Kohana_View->render()
#5 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Search->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\qvid\application\views\blogheader.php:6