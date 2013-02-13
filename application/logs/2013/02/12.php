<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-02-12 15:55:04 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\servsidebar.php [ 53 ] in C:\wamp\www\qvid\application\views\servsidebar.php:53
2013-02-12 15:55:04 --- DEBUG: #0 C:\wamp\www\qvid\application\views\servsidebar.php(53): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\qvi...', 53, Array)
#1 C:\wamp\www\qvid\application\views\servsecurity.php(83): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#3 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#4 C:\wamp\www\qvid\application\classes\Controller\servsecurity.php(10): Kohana_View->render()
#5 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Servsecurity->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Servsecurity))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\qvid\application\views\servsidebar.php:53
2013-02-12 15:57:12 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  ~ APPPATH\classes\helpers\db.php [ 56 ] in C:\wamp\www\qvid\application\classes\helpers\db.php:56
2013-02-12 15:57:12 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\helpers\db.php(56): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\qvi...', 56, Array)
#1 C:\wamp\www\qvid\application\views\blogreader.php(82): helpers_db::getMonthName(NULL)
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#3 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#4 C:\wamp\www\qvid\application\classes\Controller\blog.php(20): Kohana_View->render()
#5 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_read()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\qvid\application\classes\helpers\db.php:56