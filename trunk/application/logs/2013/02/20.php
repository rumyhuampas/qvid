<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-02-20 02:07:08 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\header.php [ 98 ] in :
2013-02-20 02:07:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-20 02:07:09 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\views\header.php [ 98 ] in :
2013-02-20 02:07:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-20 02:18:59 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: searchfield ~ APPPATH\views\header.php [ 98 ] in C:\wamp\www\qvid\application\views\header.php:98
2013-02-20 02:18:59 --- DEBUG: #0 C:\wamp\www\qvid\application\views\header.php(98): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 98, Array)
#1 C:\wamp\www\qvid\application\views\contact.php(1): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#3 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#4 C:\wamp\www\qvid\application\classes\Controller\contact.php(10): Kohana_View->render()
#5 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Contact->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contact))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\qvid\application\views\header.php:98
2013-02-20 03:22:11 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: search ~ APPPATH\classes\Controller\search.php [ 14 ] in C:\wamp\www\qvid\application\classes\Controller\search.php:14
2013-02-20 03:22:11 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\search.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 14, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Search->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\search.php:14
2013-02-20 03:22:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: search ~ APPPATH\classes\Controller\search.php [ 14 ] in C:\wamp\www\qvid\application\classes\Controller\search.php:14
2013-02-20 03:22:20 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\search.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 14, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Search->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\search.php:14
2013-02-20 03:58:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: search ~ APPPATH\classes\Controller\search.php [ 14 ] in C:\wamp\www\qvid\application\classes\Controller\search.php:14
2013-02-20 03:58:03 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\search.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 14, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Search->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\search.php:14
2013-02-20 03:59:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: search ~ APPPATH\classes\Controller\search.php [ 14 ] in C:\wamp\www\qvid\application\classes\Controller\search.php:14
2013-02-20 03:59:21 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\search.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 14, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Search->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\search.php:14
2013-02-20 03:59:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: search ~ APPPATH\classes\Controller\search.php [ 14 ] in C:\wamp\www\qvid\application\classes\Controller\search.php:14
2013-02-20 03:59:22 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\search.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 14, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Search->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\search.php:14
2013-02-20 04:04:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: search ~ APPPATH\classes\Controller\search.php [ 14 ] in C:\wamp\www\qvid\application\classes\Controller\search.php:14
2013-02-20 04:04:42 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\search.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 14, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Search->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\search.php:14
2013-02-20 04:04:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: search ~ APPPATH\classes\Controller\search.php [ 14 ] in C:\wamp\www\qvid\application\classes\Controller\search.php:14
2013-02-20 04:04:43 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\search.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 14, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Search->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\search.php:14
2013-02-20 04:04:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: search ~ APPPATH\classes\Controller\search.php [ 14 ] in C:\wamp\www\qvid\application\classes\Controller\search.php:14
2013-02-20 04:04:53 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\search.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 14, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Search->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\search.php:14
2013-02-20 04:04:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: search ~ APPPATH\classes\Controller\search.php [ 14 ] in C:\wamp\www\qvid\application\classes\Controller\search.php:14
2013-02-20 04:04:54 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\search.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 14, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Search->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\search.php:14
2013-02-20 04:07:39 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Search::$input ~ APPPATH\classes\Controller\search.php [ 11 ] in C:\wamp\www\qvid\application\classes\Controller\search.php:11
2013-02-20 04:07:39 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\search.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\qvi...', 11, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Search->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\search.php:11
2013-02-20 04:07:43 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Search::$input ~ APPPATH\classes\Controller\search.php [ 11 ] in C:\wamp\www\qvid\application\classes\Controller\search.php:11
2013-02-20 04:07:43 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\search.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\qvi...', 11, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Search->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\search.php:11
2013-02-20 04:07:54 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Search::$input ~ APPPATH\classes\Controller\search.php [ 11 ] in C:\wamp\www\qvid\application\classes\Controller\search.php:11
2013-02-20 04:07:54 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\search.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\qvi...', 11, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Search->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\search.php:11
2013-02-20 04:07:55 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Search::$input ~ APPPATH\classes\Controller\search.php [ 11 ] in C:\wamp\www\qvid\application\classes\Controller\search.php:11
2013-02-20 04:07:55 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\search.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\qvi...', 11, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Search->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\search.php:11