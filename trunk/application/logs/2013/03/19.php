<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-19 19:08:08 --- CRITICAL: ErrorException [ 2 ]: in_array() expects parameter 2 to be array, integer given ~ APPPATH\views\admin\mediachoose.php [ 69 ] in :
2013-03-19 19:08:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', 'C:\wamp\www\qvi...', 69, Array)
#1 C:\wamp\www\qvid\application\views\admin\mediachoose.php(69): in_array('13', 12, false)
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#3 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#4 C:\wamp\www\qvid\application\classes\Controller\admin\mediachoose.php(31): Kohana_View->render()
#5 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_MediaChoose->action_getpage()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_MediaChoose))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#11 {main} in :
2013-03-19 19:10:43 --- CRITICAL: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH\classes\Controller\admin\mediachoose.php [ 24 ] in :
2013-03-19 19:10:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-19 19:13:49 --- CRITICAL: ErrorException [ 2 ]: in_array() expects parameter 2 to be array, integer given ~ APPPATH\views\admin\mediachoose.php [ 69 ] in :
2013-03-19 19:13:49 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', 'C:\wamp\www\qvi...', 69, Array)
#1 C:\wamp\www\qvid\application\views\admin\mediachoose.php(69): in_array('13', 12, false)
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#3 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#4 C:\wamp\www\qvid\application\classes\Controller\admin\mediachoose.php(31): Kohana_View->render()
#5 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_MediaChoose->action_getpage()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_MediaChoose))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#11 {main} in :
2013-03-19 19:14:03 --- CRITICAL: ErrorException [ 2 ]: in_array() expects parameter 2 to be array, integer given ~ APPPATH\views\admin\mediachoose.php [ 69 ] in :
2013-03-19 19:14:03 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', 'C:\wamp\www\qvi...', 69, Array)
#1 C:\wamp\www\qvid\application\views\admin\mediachoose.php(69): in_array('2', 12, false)
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#3 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#4 C:\wamp\www\qvid\application\classes\Controller\admin\mediachoose.php(31): Kohana_View->render()
#5 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_MediaChoose->action_getpage()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_MediaChoose))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#11 {main} in :
2013-03-19 19:23:56 --- CRITICAL: ErrorException [ 2 ]: in_array() expects parameter 2 to be array, integer given ~ APPPATH\classes\Controller\admin\mediachoose.php [ 38 ] in :
2013-03-19 19:23:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', 'C:\wamp\www\qvi...', 38, Array)
#1 C:\wamp\www\qvid\application\classes\Controller\admin\mediachoose.php(38): in_array(Array, 12)
#2 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_MediaChoose->action_setpost()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_MediaChoose))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-03-19 19:24:31 --- CRITICAL: ErrorException [ 2 ]: in_array() expects parameter 2 to be array, integer given ~ APPPATH\classes\Controller\admin\mediachoose.php [ 38 ] in :
2013-03-19 19:24:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'in_array() expe...', 'C:\wamp\www\qvi...', 38, Array)
#1 C:\wamp\www\qvid\application\classes\Controller\admin\mediachoose.php(38): in_array(Array, 12)
#2 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_MediaChoose->action_setpost()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_MediaChoose))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#8 {main} in :