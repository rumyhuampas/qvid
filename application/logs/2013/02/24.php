<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-02-24 23:29:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: infomsgtype ~ APPPATH\views\admin\headertitle.php [ 7 ] in C:\wamp\www\qvid\application\views\admin\headertitle.php:7
2013-02-24 23:29:54 --- DEBUG: #0 C:\wamp\www\qvid\application\views\admin\headertitle.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 7, Array)
#1 C:\wamp\www\qvid\application\views\admin\home.php(5): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#3 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#4 C:\wamp\www\qvid\application\classes\Controller\admin\home.php(12): Kohana_View->render()
#5 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Home))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\qvid\application\views\admin\headertitle.php:7
2013-02-24 23:38:35 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\wamp\www\qvid\application\classes\Controller\admin\users.php:61
2013-02-24 23:38:35 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\admin\users.php(61): Kohana_ORM->update()
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\admin\users.php:61
2013-02-24 23:49:01 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1354 ] in C:\wamp\www\qvid\application\classes\Controller\admin\users.php:61
2013-02-24 23:49:01 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\admin\users.php(61): Kohana_ORM->update()
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\admin\users.php:61