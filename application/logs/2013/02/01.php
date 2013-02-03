<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-02-01 20:49:43 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model_Blog::$_db ~ APPPATH\classes\Model\blog.php [ 12 ] in C:\wamp\www\qvid\application\classes\Model\blog.php:12
2013-02-01 20:49:43 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Model\blog.php(12): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\qvi...', 12, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Model.php(26): Model_Blog->__construct()
#2 C:\wamp\www\qvid\application\classes\Controller\blog.php(7): Kohana_Model::factory('blog')
#3 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\qvid\application\classes\Model\blog.php:12
2013-02-01 20:50:01 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model_Blog::$_db ~ APPPATH\classes\Model\blog.php [ 8 ] in C:\wamp\www\qvid\application\classes\Model\blog.php:8
2013-02-01 20:50:01 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Model\blog.php(8): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\qvi...', 8, Array)
#1 C:\wamp\www\qvid\application\classes\Controller\blog.php(11): Model_Blog->getblogs()
#2 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\qvid\application\classes\Model\blog.php:8
2013-02-01 22:03:46 --- CRITICAL: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH\classes\Model\blog.php [ 7 ] in :
2013-02-01 22:03:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-01 22:22:44 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model_Blog::$db ~ APPPATH\classes\Model\blog.php [ 7 ] in C:\wamp\www\qvid\application\classes\Model\blog.php:7
2013-02-01 22:22:44 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Model\blog.php(7): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\qvi...', 7, Array)
#1 C:\wamp\www\qvid\application\classes\Controller\blog.php(11): Model_Blog->getblogs()
#2 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\qvid\application\classes\Model\blog.php:7
2013-02-01 22:25:32 --- CRITICAL: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH\classes\Model\blog.php [ 7 ] in :
2013-02-01 22:25:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-01 22:30:36 --- CRITICAL: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH\classes\Model\blog.php [ 7 ] in :
2013-02-01 22:30:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-01 22:31:58 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::execute() ~ APPPATH\classes\Model\blog.php [ 9 ] in :
2013-02-01 22:31:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-01 22:34:11 --- CRITICAL: ErrorException [ 8 ]: Undefined index: Created_At ~ APPPATH\views\blog.php [ 39 ] in C:\wamp\www\qvid\application\views\blog.php:39
2013-02-01 22:34:11 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blog.php(39): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\qvi...', 39, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\blog.php(12): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\blog.php:39