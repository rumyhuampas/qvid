<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-02-09 18:11:28 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in :
2013-02-09 18:11:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'C:\wamp\www\qvi...', 33, Array)
#1 C:\wamp\www\qvid\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #73, 'PHONE')
#2 C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('PHONE')
#3 C:\wamp\www\qvid\application\views\header.php(86): Kohana_Database_Result->offsetGet('PHONE')
#4 C:\wamp\www\qvid\application\views\home.php(1): include('C:\wamp\www\qvi...')
#5 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#6 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#7 C:\wamp\www\qvid\application\classes\Controller\home.php(10): Kohana_View->render()
#8 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#11 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#14 {main} in :
2013-02-09 18:27:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: phone ~ APPPATH\views\footer.php [ 25 ] in C:\wamp\www\qvid\application\views\footer.php:25
2013-02-09 18:27:32 --- DEBUG: #0 C:\wamp\www\qvid\application\views\footer.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 25, Array)
#1 C:\wamp\www\qvid\application\views\home.php(264): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#3 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#4 C:\wamp\www\qvid\application\classes\Controller\home.php(10): Kohana_View->render()
#5 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\qvid\application\views\footer.php:25
2013-02-09 19:04:29 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::open_where() ~ APPPATH\classes\helpers\db.php [ 115 ] in :
2013-02-09 19:04:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-09 19:04:54 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::open_where() ~ APPPATH\classes\helpers\db.php [ 115 ] in :
2013-02-09 19:04:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-09 19:05:05 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::close_where() ~ APPPATH\classes\helpers\db.php [ 121 ] in :
2013-02-09 19:05:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-09 19:17:05 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Blog::action_read(), called in C:\wamp\www\qvid\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\blog.php [ 13 ] in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-09 19:17:05 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\blog.php(13): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\qvi...', 13, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_read()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-09 19:17:10 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Blog::action_read(), called in C:\wamp\www\qvid\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\blog.php [ 13 ] in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-09 19:17:10 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\blog.php(13): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\qvi...', 13, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_read()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-09 19:17:22 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Blog::action_read(), called in C:\wamp\www\qvid\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\blog.php [ 13 ] in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-09 19:17:22 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\blog.php(13): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\qvi...', 13, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_read()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-09 19:17:26 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Blog::action_read(), called in C:\wamp\www\qvid\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\blog.php [ 13 ] in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-09 19:17:26 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\blog.php(13): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\qvi...', 13, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_read()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-09 19:17:30 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Blog::action_read(), called in C:\wamp\www\qvid\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\blog.php [ 13 ] in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-09 19:17:30 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\blog.php(13): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\qvi...', 13, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_read()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-09 19:17:36 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Blog::action_read(), called in C:\wamp\www\qvid\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\blog.php [ 13 ] in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-09 19:17:36 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\blog.php(13): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\qvi...', 13, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_read()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-09 19:17:42 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Blog::action_read(), called in C:\wamp\www\qvid\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\blog.php [ 13 ] in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-09 19:17:42 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\blog.php(13): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\qvi...', 13, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_read()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-09 19:25:33 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Blog::action_read(), called in C:\wamp\www\qvid\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\blog.php [ 13 ] in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-09 19:25:33 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\blog.php(13): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\qvi...', 13, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_read()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-09 19:25:50 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Blog::action_read(), called in C:\wamp\www\qvid\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\blog.php [ 13 ] in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-09 19:25:50 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\blog.php(13): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\qvi...', 13, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_read()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-09 19:26:05 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Blog::action_read(), called in C:\wamp\www\qvid\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\blog.php [ 13 ] in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-09 19:26:05 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\blog.php(13): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\qvi...', 13, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_read()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-09 20:59:36 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Blog::action_read(), called in C:\wamp\www\qvid\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\blog.php [ 13 ] in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-09 20:59:36 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\blog.php(13): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\qvi...', 13, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_read()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-09 20:59:44 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Blog::action_read(), called in C:\wamp\www\qvid\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\blog.php [ 13 ] in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-09 20:59:44 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\blog.php(13): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\qvi...', 13, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_read()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-09 20:59:59 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Blog::action_read(), called in C:\wamp\www\qvid\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\blog.php [ 13 ] in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-09 20:59:59 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\blog.php(13): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\qvi...', 13, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_read()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-09 21:02:56 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Blog::action_read(), called in C:\wamp\www\qvid\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\blog.php [ 13 ] in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-09 21:02:56 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\blog.php(13): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\qvi...', 13, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_read()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-09 21:03:58 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Blog::action_read(), called in C:\wamp\www\qvid\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\blog.php [ 13 ] in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-09 21:03:58 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\blog.php(13): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\qvi...', 13, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_read()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-09 21:06:18 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Blog::action_read(), called in C:\wamp\www\qvid\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\blog.php [ 13 ] in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-09 21:06:18 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\blog.php(13): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\qvi...', 13, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_read()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-09 21:06:28 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Blog::action_read(), called in C:\wamp\www\qvid\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\blog.php [ 13 ] in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-09 21:06:28 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\blog.php(13): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\qvi...', 13, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_read()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-09 21:06:58 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Blog::action_read(), called in C:\wamp\www\qvid\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\blog.php [ 13 ] in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-09 21:06:58 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\blog.php(13): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\qvi...', 13, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_read()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-09 21:08:30 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Blog::action_read(), called in C:\wamp\www\qvid\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\blog.php [ 13 ] in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-09 21:08:30 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\blog.php(13): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\qvi...', 13, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_read()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-09 21:08:59 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Blog::action_read(), called in C:\wamp\www\qvid\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\blog.php [ 13 ] in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-09 21:08:59 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\blog.php(13): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\qvi...', 13, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_read()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-09 21:09:26 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Blog::action_read(), called in C:\wamp\www\qvid\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\blog.php [ 13 ] in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-09 21:09:26 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\blog.php(13): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\qvi...', 13, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_read()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-09 21:14:31 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Blog::action_read(), called in C:\wamp\www\qvid\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\blog.php [ 13 ] in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-09 21:14:31 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\blog.php(13): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\qvi...', 13, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_read()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-09 21:15:15 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Blog::action_read(), called in C:\wamp\www\qvid\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\blog.php [ 13 ] in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-09 21:15:15 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\blog.php(13): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\qvi...', 13, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_read()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-09 21:15:34 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Blog::action_read(), called in C:\wamp\www\qvid\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\blog.php [ 13 ] in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-09 21:15:34 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\blog.php(13): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\qvi...', 13, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_read()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-09 21:28:25 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Blog::action_read(), called in C:\wamp\www\qvid\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\blog.php [ 13 ] in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-09 21:28:25 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\blog.php(13): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\qvi...', 13, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_read()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-09 23:04:33 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Blog::action_read(), called in C:\wamp\www\qvid\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\blog.php [ 13 ] in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-09 23:04:33 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\blog.php(13): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\qvi...', 13, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_read()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-09 23:05:34 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Blog::action_read(), called in C:\wamp\www\qvid\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\blog.php [ 13 ] in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-09 23:05:34 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\blog.php(13): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\qvi...', 13, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_read()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\blog.php:13