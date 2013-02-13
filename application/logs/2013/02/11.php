<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-02-11 06:27:20 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-11 06:27:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 06:38:44 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\View.php [ 137 ] in :
2013-02-11 06:38:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 06:38:49 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\View.php [ 137 ] in :
2013-02-11 06:38:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 06:38:55 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\View.php [ 137 ] in :
2013-02-11 06:38:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 06:38:56 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\View.php [ 137 ] in :
2013-02-11 06:38:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 06:39:06 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\View.php [ 137 ] in :
2013-02-11 06:39:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 06:39:07 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\View.php [ 137 ] in :
2013-02-11 06:39:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 06:39:25 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\View.php [ 137 ] in :
2013-02-11 06:39:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 06:39:26 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\View.php [ 137 ] in :
2013-02-11 06:39:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 06:39:30 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\View.php [ 137 ] in :
2013-02-11 06:39:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 06:39:31 --- CRITICAL: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ SYSPATH\classes\Kohana\View.php [ 137 ] in :
2013-02-11 06:39:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 06:43:37 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::site() ~ APPPATH\views\header.php [ 122 ] in :
2013-02-11 06:43:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 06:49:05 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\views\header.php [ 122 ] in :
2013-02-11 06:49:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 07:17:11 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH\views\header.php [ 122 ] in :
2013-02-11 07:17:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 07:17:18 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH\views\header.php [ 122 ] in :
2013-02-11 07:17:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 07:22:36 --- CRITICAL: ErrorException [ 2048 ]: Non-static method Controller_About::action_index() should not be called statically ~ APPPATH\views\header.php [ 122 ] in C:\wamp\www\qvid\application\views\header.php:122
2013-02-11 07:22:36 --- DEBUG: #0 C:\wamp\www\qvid\application\views\header.php(122): Kohana_Core::error_handler(2048, 'Non-static meth...', 'C:\wamp\www\qvi...', 122, Array)
#1 C:\wamp\www\qvid\application\views\header.php(122): Controller_About::action_index()
#2 C:\wamp\www\qvid\application\views\home.php(1): include('C:\wamp\www\qvi...')
#3 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#4 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#5 C:\wamp\www\qvid\application\classes\Controller\home.php(10): Kohana_View->render()
#6 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\qvid\application\views\header.php:122
2013-02-11 08:16:28 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-11 08:16:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 08:53:55 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-11 08:53:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 09:01:16 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-11 09:01:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 09:01:39 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-11 09:01:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 09:08:12 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-11 09:08:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 09:08:13 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-11 09:08:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 09:10:08 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-11 09:10:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 09:11:14 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-11 09:11:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 09:15:21 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-11 09:15:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 09:15:24 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-11 09:15:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 09:15:30 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-11 09:15:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 09:15:35 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-11 09:15:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 09:17:04 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-11 09:17:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 09:17:10 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-11 09:17:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 11:15:20 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-11 11:15:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 11:16:42 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-11 11:16:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 11:16:49 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-11 11:16:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 11:17:24 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-11 11:17:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 11:18:15 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-11 11:18:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 11:19:28 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-11 11:19:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 12:27:09 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-11 12:27:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 12:27:20 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-11 12:27:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 12:28:05 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-11 12:28:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 12:29:33 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-11 12:29:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 12:30:12 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-11 12:30:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 12:31:28 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-11 12:31:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 12:32:18 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-11 12:32:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 12:32:57 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-11 12:32:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 12:34:48 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-11 12:34:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 12:56:46 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-11 12:56:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 12:58:38 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-11 12:58:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 12:58:46 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-11 12:58:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 12:58:59 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-11 12:58:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 19:16:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\blog.php [ 19 ] in C:\wamp\www\qvid\application\classes\Controller\blog.php:19
2013-02-11 19:16:54 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\blog.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 19, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_read()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\blog.php:19
2013-02-11 19:17:13 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH\classes\Controller\blog.php [ 19 ] in :
2013-02-11 19:17:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 19:19:17 --- CRITICAL: ErrorException [ 2048 ]: Non-static method Kohana_Request::param() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\Controller\blog.php [ 19 ] in C:\wamp\www\qvid\application\classes\Controller\blog.php:19
2013-02-11 19:19:17 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\blog.php(19): Kohana_Core::error_handler(2048, 'Non-static meth...', 'C:\wamp\www\qvi...', 19, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_read()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\blog.php:19
2013-02-11 19:19:53 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  ~ APPPATH\classes\helpers\db.php [ 56 ] in C:\wamp\www\qvid\application\classes\helpers\db.php:56
2013-02-11 19:19:53 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\helpers\db.php(56): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\qvi...', 56, Array)
#1 C:\wamp\www\qvid\application\views\blogreader.php(73): helpers_db::getMonthName(NULL)
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
2013-02-11 19:23:19 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  ~ APPPATH\classes\helpers\db.php [ 56 ] in C:\wamp\www\qvid\application\classes\helpers\db.php:56
2013-02-11 19:23:19 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\helpers\db.php(56): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\qvi...', 56, Array)
#1 C:\wamp\www\qvid\application\views\blogreader.php(73): helpers_db::getMonthName(NULL)
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
2013-02-11 19:23:19 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  ~ APPPATH\classes\helpers\db.php [ 56 ] in C:\wamp\www\qvid\application\classes\helpers\db.php:56
2013-02-11 19:23:19 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\helpers\db.php(56): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\qvi...', 56, Array)
#1 C:\wamp\www\qvid\application\views\blogreader.php(73): helpers_db::getMonthName(NULL)
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
2013-02-11 19:38:38 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  ~ APPPATH\classes\helpers\db.php [ 56 ] in C:\wamp\www\qvid\application\classes\helpers\db.php:56
2013-02-11 19:38:38 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\helpers\db.php(56): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\qvi...', 56, Array)
#1 C:\wamp\www\qvid\application\views\blogreader.php(73): helpers_db::getMonthName(NULL)
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
2013-02-11 19:38:42 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  ~ APPPATH\classes\helpers\db.php [ 56 ] in C:\wamp\www\qvid\application\classes\helpers\db.php:56
2013-02-11 19:38:42 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\helpers\db.php(56): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\qvi...', 56, Array)
#1 C:\wamp\www\qvid\application\views\blogreader.php(73): helpers_db::getMonthName(NULL)
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
2013-02-11 19:41:20 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  ~ APPPATH\classes\helpers\db.php [ 56 ] in C:\wamp\www\qvid\application\classes\helpers\db.php:56
2013-02-11 19:41:20 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\helpers\db.php(56): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\qvi...', 56, Array)
#1 C:\wamp\www\qvid\application\views\blogreader.php(73): helpers_db::getMonthName(NULL)
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
2013-02-11 20:57:41 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'base' ~ APPPATH\views\header.php [ 93 ] in :
2013-02-11 20:57:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-11 20:57:41 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'base' ~ APPPATH\views\header.php [ 93 ] in :
2013-02-11 20:57:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :