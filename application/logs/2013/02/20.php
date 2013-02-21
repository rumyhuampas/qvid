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
2013-02-20 14:53:12 --- CRITICAL: View_Exception [ 0 ]: The requested view login could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\qvid\system\classes\Kohana\View.php:137
2013-02-20 14:53:12 --- DEBUG: #0 C:\wamp\www\qvid\system\classes\Kohana\View.php(137): Kohana_View->set_filename('login')
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(30): Kohana_View->__construct('login', NULL)
#2 C:\wamp\www\qvid\application\classes\Controller\admin\login.php(7): Kohana_View::factory('login')
#3 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Login->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\qvid\system\classes\Kohana\View.php:137
2013-02-20 14:53:31 --- CRITICAL: View_Exception [ 0 ]: The requested view login could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\qvid\system\classes\Kohana\View.php:137
2013-02-20 14:53:31 --- DEBUG: #0 C:\wamp\www\qvid\system\classes\Kohana\View.php(137): Kohana_View->set_filename('login')
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(30): Kohana_View->__construct('login', NULL)
#2 C:\wamp\www\qvid\application\classes\Controller\admin\login.php(7): Kohana_View::factory('login')
#3 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Login->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Login))
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\qvid\system\classes\Kohana\View.php:137
2013-02-20 22:49:08 --- CRITICAL: Database_Exception [ 1146 ]: Table 'qvid.blog' doesn't exist [ SELECT `user`.`Id` AS `Id`, `user`.`Name` AS `Name`, `user`.`Description` AS `Description`, `user`.`Image_Id` AS `Image_Id` FROM `users` AS `user` JOIN `blog` ON (`blogs`.`user_id` = `users`.`id`) GROUP BY `blogs`.`user_id` ORDER BY COUNT(blogs.user_id) DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-02-20 22:49:08 --- DEBUG: #0 C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', 'Model_User', Array)
#1 C:\wamp\www\qvid\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\qvid\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\qvid\application\views\blogsidebar.php(27): Kohana_ORM->find_all()
#4 C:\wamp\www\qvid\application\views\blog.php(112): include('C:\wamp\www\qvi...')
#5 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#6 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#7 C:\wamp\www\qvid\application\classes\Controller\blog.php(12): Kohana_View->render()
#8 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#11 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-02-20 22:49:20 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'users.id' in 'on clause' [ SELECT `user`.`Id` AS `Id`, `user`.`Name` AS `Name`, `user`.`Description` AS `Description`, `user`.`Image_Id` AS `Image_Id` FROM `users` AS `user` JOIN `blogs` ON (`blogs`.`user_id` = `users`.`id`) GROUP BY `blogs`.`user_id` ORDER BY COUNT(blogs.user_id) DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-02-20 22:49:20 --- DEBUG: #0 C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', 'Model_User', Array)
#1 C:\wamp\www\qvid\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\qvid\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\qvid\application\views\blogsidebar.php(27): Kohana_ORM->find_all()
#4 C:\wamp\www\qvid\application\views\blog.php(112): include('C:\wamp\www\qvi...')
#5 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#6 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#7 C:\wamp\www\qvid\application\classes\Controller\blog.php(12): Kohana_View->render()
#8 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#11 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-02-20 22:50:05 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ APPPATH\views\blogsidebar.php [ 34 ] in :
2013-02-20 22:50:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-20 23:09:50 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'blogs.user_id' in 'order clause' [ SELECT `user`.`Id` AS `Id`, `user`.`Name` AS `Name`, `user`.`Description` AS `Description`, `user`.`Image_Id` AS `Image_Id` FROM `users` AS `user` GROUP BY `blogs`.`user_id` ORDER BY COUNT(blogs.user_id) DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-02-20 23:09:50 --- DEBUG: #0 C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', 'Model_User', Array)
#1 C:\wamp\www\qvid\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\qvid\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\qvid\application\views\blogsidebar.php(26): Kohana_ORM->find_all()
#4 C:\wamp\www\qvid\application\views\blog.php(112): include('C:\wamp\www\qvi...')
#5 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#6 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#7 C:\wamp\www\qvid\application\classes\Controller\blog.php(12): Kohana_View->render()
#8 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#11 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-02-20 23:12:59 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'user_id' in 'order clause' [ SELECT `user`.`Id` AS `Id`, `user`.`Name` AS `Name`, `user`.`Description` AS `Description`, `user`.`Image_Id` AS `Image_Id` FROM `users` AS `user` GROUP BY `blogs`.`user_id` ORDER BY COUNT(user_id) DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-02-20 23:12:59 --- DEBUG: #0 C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', 'Model_User', Array)
#1 C:\wamp\www\qvid\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\qvid\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\qvid\application\views\blogsidebar.php(26): Kohana_ORM->find_all()
#4 C:\wamp\www\qvid\application\views\blog.php(112): include('C:\wamp\www\qvi...')
#5 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#6 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#7 C:\wamp\www\qvid\application\classes\Controller\blog.php(12): Kohana_View->render()
#8 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#11 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-02-20 23:23:20 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_MediaResource as array ~ APPPATH\views\home.php [ 17 ] in :
2013-02-20 23:23:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-20 23:43:10 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'Created_At' in 'order clause' [ SELECT `pagedata`.`Id` AS `Id`, `pagedata`.`Name` AS `Name`, `pagedata`.`Name2` AS `Name2`, `pagedata`.`Text` AS `Text`, `pagedata`.`Resource_Id` AS `Resource_Id`, `pagedata`.`Tag` AS `Tag`, `pagedata`.`Published` AS `Published` FROM `pagedata` AS `pagedata` WHERE `tag` = 'TESTIMONIAL' AND `published` = 'T' ORDER BY `Created_At` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-02-20 23:43:10 --- DEBUG: #0 C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `pagedat...', 'Model_PageData', Array)
#1 C:\wamp\www\qvid\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\qvid\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\qvid\application\classes\Controller\home.php(28): Kohana_ORM->find_all()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-02-20 23:57:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: offData ~ APPPATH\views\contact.php [ 45 ] in C:\wamp\www\qvid\application\views\contact.php:45
2013-02-20 23:57:12 --- DEBUG: #0 C:\wamp\www\qvid\application\views\contact.php(45): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 45, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\contact.php(10): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Contact->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contact))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\contact.php:45