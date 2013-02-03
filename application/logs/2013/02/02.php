<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-02-02 09:14:13 --- CRITICAL: ErrorException [ 8 ]: Undefined index: CreatedAt ~ APPPATH\views\blog.php [ 39 ] in C:\wamp\www\qvid\application\views\blog.php:39
2013-02-02 09:14:13 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blog.php(39): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\qvi...', 39, Array)
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
2013-02-02 09:14:27 --- CRITICAL: ErrorException [ 8 ]: Undefined index: Title ~ APPPATH\views\blog.php [ 46 ] in C:\wamp\www\qvid\application\views\blog.php:46
2013-02-02 09:14:27 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blog.php(46): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\qvi...', 46, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\blog.php(12): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\blog.php:46
2013-02-02 09:48:17 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\blog.php [ 40 ] in :
2013-02-02 09:48:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-02 10:27:29 --- CRITICAL: ErrorException [ 1 ]: Call to a member function getMonthName() on a non-object ~ APPPATH\classes\Controller\blog.php [ 19 ] in :
2013-02-02 10:27:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-02 10:28:46 --- CRITICAL: ErrorException [ 1 ]: Call to a member function getMonthName() on a non-object ~ APPPATH\classes\Controller\blog.php [ 23 ] in :
2013-02-02 10:28:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-02 10:29:45 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Blog::$model ~ APPPATH\classes\Controller\blog.php [ 17 ] in C:\wamp\www\qvid\application\classes\Controller\blog.php:17
2013-02-02 10:29:45 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\blog.php(17): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\qvi...', 17, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_getMonthName()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\blog.php:17
2013-02-02 10:30:19 --- CRITICAL: ErrorException [ 1 ]: Call to a member function getMonthName() on a non-object ~ APPPATH\classes\Controller\blog.php [ 19 ] in :
2013-02-02 10:30:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-02 10:50:25 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Blog::$template ~ APPPATH\classes\Controller\blog.php [ 9 ] in C:\wamp\www\qvid\application\classes\Controller\blog.php:9
2013-02-02 10:50:25 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\blog.php(9): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\qvi...', 9, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(69): Controller_Blog->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\blog.php:9
2013-02-02 10:51:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: months ~ APPPATH\classes\Model\blog.php [ 32 ] in C:\wamp\www\qvid\application\classes\Model\blog.php:32
2013-02-02 10:51:29 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Model\blog.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 32, Array)
#1 C:\wamp\www\qvid\application\classes\Controller\blog.php(27): Model_Blog->getMonthName(2)
#2 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_getMonthName()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\qvid\application\classes\Model\blog.php:32
2013-02-02 10:54:37 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Blog::action_getMonthName(), called in C:\wamp\www\qvid\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\blog.php [ 22 ] in C:\wamp\www\qvid\application\classes\Controller\blog.php:22
2013-02-02 10:54:37 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\blog.php(22): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\qvi...', 22, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_getMonthName()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\blog.php:22
2013-02-02 10:54:44 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Blog::action_getMonthName(), called in C:\wamp\www\qvid\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\blog.php [ 22 ] in C:\wamp\www\qvid\application\classes\Controller\blog.php:22
2013-02-02 10:54:44 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\blog.php(22): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\qvi...', 22, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_getMonthName()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\blog.php:22
2013-02-02 10:54:51 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Blog::action_getMonthName(), called in C:\wamp\www\qvid\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\blog.php [ 22 ] in C:\wamp\www\qvid\application\classes\Controller\blog.php:22
2013-02-02 10:54:51 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\blog.php(22): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\qvi...', 22, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_getMonthName()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\blog.php:22
2013-02-02 10:55:20 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Blog::action_getMonthName(), called in C:\wamp\www\qvid\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\blog.php [ 22 ] in C:\wamp\www\qvid\application\classes\Controller\blog.php:22
2013-02-02 10:55:20 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\blog.php(22): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\qvi...', 22, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_getMonthName()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\blog.php:22
2013-02-02 10:56:11 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Blog::action_getMonthName(), called in C:\wamp\www\qvid\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\blog.php [ 22 ] in C:\wamp\www\qvid\application\classes\Controller\blog.php:22
2013-02-02 10:56:11 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\blog.php(22): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\qvi...', 22, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_getMonthName()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\blog.php:22
2013-02-02 10:56:22 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Blog::action_getMonthName(), called in C:\wamp\www\qvid\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\blog.php [ 22 ] in C:\wamp\www\qvid\application\classes\Controller\blog.php:22
2013-02-02 10:56:22 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\blog.php(22): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\qvi...', 22, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_getMonthName()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\blog.php:22
2013-02-02 11:11:09 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function alert() ~ APPPATH\classes\Model\blog.php [ 35 ] in :
2013-02-02 11:11:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-02 12:55:54 --- CRITICAL: ErrorException [ 8 ]: Undefined index: 2 ~ APPPATH\classes\Model\blog.php [ 35 ] in C:\wamp\www\qvid\application\classes\Model\blog.php:35
2013-02-02 12:55:54 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Model\blog.php(35): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\qvi...', 35, Array)
#1 C:\wamp\www\qvid\application\classes\Model\blog.php(28): Model_Blog->getMonthName('2')
#2 C:\wamp\www\qvid\application\classes\Controller\blog.php(18): Model_Blog->getblogs()
#3 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\qvid\application\classes\Model\blog.php:35
2013-02-02 13:06:00 --- CRITICAL: ErrorException [ 2 ]: count() expects at least 1 parameter, 0 given ~ APPPATH\classes\Model\blog.php [ 27 ] in :
2013-02-02 13:06:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'count() expects...', 'C:\wamp\www\qvi...', 27, Array)
#1 C:\wamp\www\qvid\application\classes\Model\blog.php(27): count()
#2 C:\wamp\www\qvid\application\classes\Controller\blog.php(18): Model_Blog->getblogs()
#3 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-02-02 14:07:31 --- CRITICAL: ErrorException [ 8 ]: Undefined index: Feb ~ APPPATH\classes\Model\blog.php [ 50 ] in C:\wamp\www\qvid\application\classes\Model\blog.php:50
2013-02-02 14:07:31 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Model\blog.php(50): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\qvi...', 50, Array)
#1 C:\wamp\www\qvid\application\classes\Model\blog.php(43): Model_Blog->getMonthName('Feb')
#2 C:\wamp\www\qvid\application\classes\Controller\blog.php(18): Model_Blog->getblogs()
#3 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\qvid\application\classes\Model\blog.php:50
2013-02-02 14:07:47 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\views\blog.php [ 47 ] in C:\wamp\www\qvid\application\views\blog.php:47
2013-02-02 14:07:47 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blog.php(47): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\qvi...', 47, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\blog.php(19): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\blog.php:47
2013-02-02 14:16:35 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Blog::$model ~ APPPATH\classes\Controller\blog.php [ 11 ] in C:\wamp\www\qvid\application\classes\Controller\blog.php:11
2013-02-02 14:16:35 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\blog.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\qvi...', 11, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\blog.php:11
2013-02-02 14:59:41 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\views\blog.php [ 49 ] in C:\wamp\www\qvid\application\views\blog.php:49
2013-02-02 14:59:41 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blog.php(49): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\qvi...', 49, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\blog.php(12): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\blog.php:49
2013-02-02 15:07:25 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'from blog b
					left join users u on  b.user_id=u.id
					order by b.createda' at line 11 [ select day(b.createdat) as day, 
					case
					when month(b.createdat)= 1 then 'Ene' when month(b.createdat)= 2 then 'Feb'
					when month(b.createdat)= 3 then 'Mar' when month(b.createdat)= 4 then 'Abr'
					when month(b.createdat)= 5 then 'May' when month(b.createdat)= 6 then 'Jun'
					when month(b.createdat)= 7 then 'Jul' when month(b.createdat)= 8 then 'Ago'
					when month(b.createdat)= 9 then 'Sep' when month(b.createdat)= 10 then 'Oct'
					when month(b.createdat)= 11 then 'Nov' when month(b.createdat)= 12 then 'Dic'
					end as month,
					b.title, b.tags, b.text, u.name username,
					from blog b
					left join users u on  b.user_id=u.id
					order by b.createdat desc ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-02-02 15:07:25 --- DEBUG: #0 C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select day(b.cr...', false, Array)
#1 C:\wamp\www\qvid\application\classes\Model\blog.php(20): Kohana_Database_Query->execute()
#2 C:\wamp\www\qvid\application\classes\Controller\blog.php(11): Model_Blog->getblogs()
#3 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-02-02 15:08:04 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'from blog b
					left join users u on b.user_id=u.id
					order by b.createdat' at line 11 [ select day(b.createdat) as day, 
					case
					when month(b.createdat)= 1 then 'Ene' when month(b.createdat)= 2 then 'Feb'
					when month(b.createdat)= 3 then 'Mar' when month(b.createdat)= 4 then 'Abr'
					when month(b.createdat)= 5 then 'May' when month(b.createdat)= 6 then 'Jun'
					when month(b.createdat)= 7 then 'Jul' when month(b.createdat)= 8 then 'Ago'
					when month(b.createdat)= 9 then 'Sep' when month(b.createdat)= 10 then 'Oct'
					when month(b.createdat)= 11 then 'Nov' when month(b.createdat)= 12 then 'Dic'
					end as month,
					b.title, b.tags, b.text, u.name username,
					from blog b
					left join users u on b.user_id=u.id
					order by b.createdat desc ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-02-02 15:08:04 --- DEBUG: #0 C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select day(b.cr...', false, Array)
#1 C:\wamp\www\qvid\application\classes\Model\blog.php(20): Kohana_Database_Query->execute()
#2 C:\wamp\www\qvid\application\classes\Controller\blog.php(11): Model_Blog->getblogs()
#3 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-02-02 18:39:55 --- CRITICAL: ErrorException [ 8 ]: Undefined index: Id ~ APPPATH\classes\Controller\blog.php [ 20 ] in C:\wamp\www\qvid\application\classes\Controller\blog.php:20
2013-02-02 18:39:55 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\blog.php(20): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\qvi...', 20, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\blog.php:20
2013-02-02 18:40:04 --- CRITICAL: ErrorException [ 8 ]: Undefined index: Id ~ APPPATH\classes\Controller\blog.php [ 20 ] in C:\wamp\www\qvid\application\classes\Controller\blog.php:20
2013-02-02 18:40:04 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\blog.php(20): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\qvi...', 20, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\blog.php:20
2013-02-02 18:40:13 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Controller\blog.php [ 20 ] in C:\wamp\www\qvid\application\classes\Controller\blog.php:20
2013-02-02 18:40:13 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\blog.php(20): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\qvi...', 20, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\blog.php:20
2013-02-02 18:40:35 --- CRITICAL: Database_Exception [ 1052 ]: Column 'id' in field list is ambiguous [ select id, day(b.createdat) as day, 
					case
					when month(b.createdat)= 1 then 'Ene' when month(b.createdat)= 2 then 'Feb'
					when month(b.createdat)= 3 then 'Mar' when month(b.createdat)= 4 then 'Abr'
					when month(b.createdat)= 5 then 'May' when month(b.createdat)= 6 then 'Jun'
					when month(b.createdat)= 7 then 'Jul' when month(b.createdat)= 8 then 'Ago'
					when month(b.createdat)= 9 then 'Sep' when month(b.createdat)= 10 then 'Oct'
					when month(b.createdat)= 11 then 'Nov' when month(b.createdat)= 12 then 'Dic'
					end as month,
					b.title, b.tags, b.text, u.name username
					from blog b
					left join users u on b.user_id=u.id
					order by b.createdat desc ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-02-02 18:40:35 --- DEBUG: #0 C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select id, day(...', false, Array)
#1 C:\wamp\www\qvid\application\classes\Model\blog.php(20): Kohana_Database_Query->execute()
#2 C:\wamp\www\qvid\application\classes\Controller\blog.php(17): Model_Blog->getBlogs()
#3 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-02-02 18:40:47 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: blogs ~ APPPATH\views\blog.php [ 35 ] in C:\wamp\www\qvid\application\views\blog.php:35
2013-02-02 18:40:47 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blog.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 35, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\blog.php(26): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\blog.php:35
2013-02-02 18:42:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: blogs ~ APPPATH\views\blog.php [ 35 ] in C:\wamp\www\qvid\application\views\blog.php:35
2013-02-02 18:42:27 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blog.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 35, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\blog.php(27): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\blog.php:35
2013-02-02 18:42:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: blogs ~ APPPATH\views\blog.php [ 35 ] in C:\wamp\www\qvid\application\views\blog.php:35
2013-02-02 18:42:30 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blog.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 35, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\blog.php(27): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\blog.php:35
2013-02-02 18:42:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: blogs ~ APPPATH\views\blog.php [ 35 ] in C:\wamp\www\qvid\application\views\blog.php:35
2013-02-02 18:42:45 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blog.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 35, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\blog.php(27): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\blog.php:35
2013-02-02 18:43:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: blogs ~ APPPATH\views\blog.php [ 35 ] in C:\wamp\www\qvid\application\views\blog.php:35
2013-02-02 18:43:12 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blog.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 35, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\blog.php(27): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\blog.php:35
2013-02-02 18:58:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: bImages ~ APPPATH\views\blog.php [ 41 ] in C:\wamp\www\qvid\application\views\blog.php:41
2013-02-02 18:58:24 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blog.php(41): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 41, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\blog.php(27): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\blog.php:41
2013-02-02 18:58:51 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: bImages ~ SYSPATH\classes\Kohana\View.php [ 171 ] in C:\wamp\www\qvid\application\classes\Controller\blog.php:23
2013-02-02 18:58:51 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\blog.php(23): Kohana_View->__get('bImages')
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\blog.php:23
2013-02-02 19:02:29 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: bImages ~ SYSPATH\classes\Kohana\View.php [ 171 ] in C:\wamp\www\qvid\application\classes\Controller\blog.php:23
2013-02-02 19:02:29 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\blog.php(23): Kohana_View->__get('bImages')
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\blog.php:23
2013-02-02 19:03:37 --- CRITICAL: ErrorException [ 8 ]: Undefined index: path ~ APPPATH\views\blog.php [ 41 ] in C:\wamp\www\qvid\application\views\blog.php:41
2013-02-02 19:03:37 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blog.php(41): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\qvi...', 41, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\blog.php(28): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\blog.php:41
2013-02-02 19:04:09 --- CRITICAL: ErrorException [ 8 ]: Undefined index: 3 ~ APPPATH\views\blog.php [ 41 ] in C:\wamp\www\qvid\application\views\blog.php:41
2013-02-02 19:04:09 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blog.php(41): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\qvi...', 41, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\blog.php(28): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\blog.php:41
2013-02-02 19:07:12 --- CRITICAL: ErrorException [ 1 ]: Call to a member function count() on a non-object ~ APPPATH\classes\Controller\blog.php [ 21 ] in :
2013-02-02 19:07:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-02 19:35:17 --- CRITICAL: ErrorException [ 1 ]: Call to a member function count() on a non-object ~ APPPATH\classes\Controller\blog.php [ 21 ] in :
2013-02-02 19:35:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-02 19:36:58 --- CRITICAL: ErrorException [ 8 ]: Undefined index: 3 ~ APPPATH\views\blog.php [ 41 ] in C:\wamp\www\qvid\application\views\blog.php:41
2013-02-02 19:36:58 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blog.php(41): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\qvi...', 41, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\blog.php(28): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\blog.php:41
2013-02-02 20:49:21 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant i - assumed 'i' ~ APPPATH\views\blog.php [ 41 ] in C:\wamp\www\qvid\application\views\blog.php:41
2013-02-02 20:49:21 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blog.php(41): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\wamp\www\qvi...', 41, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\blog.php(28): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\blog.php:41
2013-02-02 20:51:00 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant i - assumed 'i' ~ APPPATH\views\blog.php [ 41 ] in C:\wamp\www\qvid\application\views\blog.php:41
2013-02-02 20:51:00 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blog.php(41): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\wamp\www\qvi...', 41, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\blog.php(28): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\blog.php:41
2013-02-02 20:51:07 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant i - assumed 'i' ~ APPPATH\views\blog.php [ 41 ] in C:\wamp\www\qvid\application\views\blog.php:41
2013-02-02 20:51:07 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blog.php(41): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\wamp\www\qvi...', 41, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\blog.php(28): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\blog.php:41
2013-02-02 20:51:08 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant i - assumed 'i' ~ APPPATH\views\blog.php [ 41 ] in C:\wamp\www\qvid\application\views\blog.php:41
2013-02-02 20:51:08 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blog.php(41): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\wamp\www\qvi...', 41, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\blog.php(28): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\blog.php:41
2013-02-02 20:51:18 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant i - assumed 'i' ~ APPPATH\views\blog.php [ 41 ] in C:\wamp\www\qvid\application\views\blog.php:41
2013-02-02 20:51:18 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blog.php(41): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\wamp\www\qvi...', 41, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\blog.php(28): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\blog.php:41
2013-02-02 20:52:57 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant i - assumed 'i' ~ APPPATH\views\blog.php [ 42 ] in C:\wamp\www\qvid\application\views\blog.php:42
2013-02-02 20:52:57 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blog.php(42): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\wamp\www\qvi...', 42, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\blog.php(28): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\blog.php:42
2013-02-02 21:14:10 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\blog.php [ 51 ] in C:\wamp\www\qvid\application\views\blog.php:51
2013-02-02 21:14:10 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blog.php(51): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\qvi...', 51, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\blog.php(28): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\blog.php:51
2013-02-02 21:20:29 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\views\blog.php [ 51 ] in C:\wamp\www\qvid\application\views\blog.php:51
2013-02-02 21:20:29 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blog.php(51): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\qvi...', 51, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\blog.php(28): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\blog.php:51