<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-02-16 11:11:02 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: [2002] No connection could be made because the target machine actively refused it.
 (trying to connect via tcp://localhost:3306) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\MySQL.php:430
2013-02-16 11:11:02 --- DEBUG: #0 C:\wamp\www\qvid\modules\database\classes\Kohana\Database\MySQL.php(430): Kohana_Database_MySQL->connect()
#1 C:\wamp\www\qvid\modules\database\classes\Kohana\Database.php(478): Kohana_Database_MySQL->escape('SLOGAN')
#2 C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query\Builder.php(116): Kohana_Database->quote('SLOGAN')
#3 C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query\Builder\Select.php(372): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_MySQL), Array)
#4 C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#5 C:\wamp\www\qvid\application\classes\helpers\db.php(158): Kohana_Database_Query->execute()
#6 C:\wamp\www\qvid\application\views\header.php(62): helpers_db::getOfficeData()
#7 C:\wamp\www\qvid\application\views\blog.php(1): include('C:\wamp\www\qvi...')
#8 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#9 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#10 C:\wamp\www\qvid\application\classes\Controller\blog.php(11): Kohana_View->render()
#11 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#14 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#17 {main} in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\MySQL.php:430
2013-02-16 12:04:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: userid ~ APPPATH\views\blog.php [ 18 ] in C:\wamp\www\qvid\application\views\blog.php:18
2013-02-16 12:04:55 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blog.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 18, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\blog.php(11): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\blog.php:18
2013-02-16 12:04:59 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: userid ~ APPPATH\views\blog.php [ 18 ] in C:\wamp\www\qvid\application\views\blog.php:18
2013-02-16 12:04:59 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blog.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 18, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\blog.php(11): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\blog.php:18
2013-02-16 12:05:48 --- CRITICAL: ErrorException [ 8 ]: Undefined index: userid ~ APPPATH\views\blogsidebar.php [ 24 ] in C:\wamp\www\qvid\application\views\blogsidebar.php:24
2013-02-16 12:05:48 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blogsidebar.php(24): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\qvi...', 24, Array)
#1 C:\wamp\www\qvid\application\views\blog.php(114): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#3 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#4 C:\wamp\www\qvid\application\classes\Controller\blog.php(11): Kohana_View->render()
#5 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\qvid\application\views\blogsidebar.php:24
2013-02-16 12:05:56 --- CRITICAL: ErrorException [ 8 ]: Undefined index: userid ~ APPPATH\views\blogsidebar.php [ 24 ] in C:\wamp\www\qvid\application\views\blogsidebar.php:24
2013-02-16 12:05:56 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blogsidebar.php(24): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\qvi...', 24, Array)
#1 C:\wamp\www\qvid\application\views\blog.php(114): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#3 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#4 C:\wamp\www\qvid\application\classes\Controller\blog.php(11): Kohana_View->render()
#5 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\qvid\application\views\blogsidebar.php:24
2013-02-16 12:06:53 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'blogs.userid' in 'where clause' [ SELECT `blogs`.`id`, DAY(blogs.createdAt) AS `day`, MONTH(blogs.createdAt) AS `month`, `blogs`.`title`, `blogs`.`tags`, `blogs`.`text`, `users`.`name` AS `username`, `users`.`description` AS `userdesc`, (SELECT path from mediaresource where id=users.image_id) AS `userimage` FROM `blogs` JOIN `users` ON (`blogs`.`user_id` = `users`.`id`) WHERE `blogs`.`published` = 'T' AND `blogs`.`userid` IS NULL ORDER BY `blogs`.`createdAt` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-02-16 12:06:53 --- DEBUG: #0 C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `blogs`....', false, Array)
#1 C:\wamp\www\qvid\application\classes\helpers\db.php(46): Kohana_Database_Query->execute()
#2 C:\wamp\www\qvid\application\views\blog.php(22): helpers_db::getUserBlogs(NULL)
#3 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#4 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#5 C:\wamp\www\qvid\application\classes\Controller\blog.php(29): Kohana_View->render()
#6 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_getUserBlogs()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-02-16 12:13:39 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 28 ] in :
2013-02-16 12:13:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-16 12:56:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: tag ~ APPPATH\views\blog.php [ 19 ] in C:\wamp\www\qvid\application\views\blog.php:19
2013-02-16 12:56:52 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blog.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 19, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\blog.php(12): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\blog.php:19
2013-02-16 12:57:18 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_Query_Builder_Where::and_where(), called in C:\wamp\www\qvid\application\classes\helpers\db.php on line 58 and defined ~ MODPATH\database\classes\Kohana\Database\Query\Builder\Where.php [ 43 ] in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query\Builder\Where.php:43
2013-02-16 12:57:18 --- DEBUG: #0 C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query\Builder\Where.php(43): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\qvi...', 43, Array)
#1 C:\wamp\www\qvid\application\classes\helpers\db.php(58): Kohana_Database_Query_Builder_Where->and_where(Object(Database_Expression))
#2 C:\wamp\www\qvid\application\views\blog.php(23): helpers_db::getTagBlogs('')
#3 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#4 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#5 C:\wamp\www\qvid\application\classes\Controller\blog.php(13): Kohana_View->render()
#6 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query\Builder\Where.php:43
2013-02-16 12:59:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: userid ~ APPPATH\views\blog.php [ 18 ] in C:\wamp\www\qvid\application\views\blog.php:18
2013-02-16 12:59:39 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blog.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 18, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\blog.php(44): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_gettagblogs()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\blog.php:18
2013-02-16 13:06:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: tag ~ APPPATH\classes\Controller\blog.php [ 45 ] in C:\wamp\www\qvid\application\classes\Controller\blog.php:45
2013-02-16 13:06:14 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\blog.php(45): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 45, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_gettagblogs()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\blog.php:45
2013-02-16 14:25:29 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\classes\helpers\db.php [ 54 ] in C:\wamp\www\qvid\application\classes\helpers\db.php:54
2013-02-16 14:25:29 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\helpers\db.php(54): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\qvi...', 54, Array)
#1 C:\wamp\www\qvid\application\classes\Controller\blog.php(32): helpers_db::getUserName('1')
#2 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_getuserblogs()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\qvid\application\classes\helpers\db.php:54
2013-02-16 15:10:31 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\qvid\modules\orm\classes\Kohana\ORM.php:600
2013-02-16 15:10:31 --- DEBUG: #0 C:\wamp\www\qvid\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('name')
#1 C:\wamp\www\qvid\application\classes\Controller\blog.php(32): Kohana_ORM->__get('name')
#2 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_getuserblogs()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\qvid\modules\orm\classes\Kohana\ORM.php:600
2013-02-16 15:37:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: blogs ~ APPPATH\views\blog.php [ 29 ] in C:\wamp\www\qvid\application\views\blog.php:29
2013-02-16 15:37:15 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blog.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 29, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\blog.php(48): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_gettagblogs()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\blog.php:29
2013-02-16 15:37:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: blogs ~ APPPATH\views\blog.php [ 29 ] in C:\wamp\www\qvid\application\views\blog.php:29
2013-02-16 15:37:24 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blog.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 29, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\blog.php(13): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\blog.php:29
2013-02-16 15:40:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: blogs ~ APPPATH\views\blog.php [ 29 ] in C:\wamp\www\qvid\application\views\blog.php:29
2013-02-16 15:40:21 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blog.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 29, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\blog.php(13): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\blog.php:29
2013-02-16 15:40:58 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: blogs ~ APPPATH\views\blog.php [ 29 ] in C:\wamp\www\qvid\application\views\blog.php:29
2013-02-16 15:40:58 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blog.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 29, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\blog.php(13): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\blog.php:29
2013-02-16 15:41:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: blogs ~ APPPATH\views\blog.php [ 29 ] in C:\wamp\www\qvid\application\views\blog.php:29
2013-02-16 15:41:03 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blog.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 29, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\blog.php(13): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\blog.php:29
2013-02-16 15:42:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: blogs ~ APPPATH\views\blog.php [ 29 ] in C:\wamp\www\qvid\application\views\blog.php:29
2013-02-16 15:42:12 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blog.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 29, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\blog.php(13): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\blog.php:29
2013-02-16 15:47:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: blogs ~ APPPATH\views\blog.php [ 29 ] in C:\wamp\www\qvid\application\views\blog.php:29
2013-02-16 15:47:00 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blog.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 29, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\blog.php(13): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\blog.php:29
2013-02-16 15:47:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: blogs ~ APPPATH\views\blog.php [ 29 ] in C:\wamp\www\qvid\application\views\blog.php:29
2013-02-16 15:47:40 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blog.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 29, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\blog.php(13): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\blog.php:29
2013-02-16 15:47:47 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: blogs ~ APPPATH\views\blog.php [ 29 ] in C:\wamp\www\qvid\application\views\blog.php:29
2013-02-16 15:47:47 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blog.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 29, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\blog.php(13): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\blog.php:29
2013-02-16 15:48:17 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH\classes\Controller\blog.php [ 34 ] in :
2013-02-16 15:48:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-16 15:48:33 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: blogs ~ APPPATH\views\blog.php [ 29 ] in C:\wamp\www\qvid\application\views\blog.php:29
2013-02-16 15:48:33 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blog.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 29, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\blog.php(13): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\blog.php:29
2013-02-16 15:49:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: blogs ~ APPPATH\views\blog.php [ 29 ] in C:\wamp\www\qvid\application\views\blog.php:29
2013-02-16 15:49:21 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blog.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 29, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\blog.php(13): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\blog.php:29
2013-02-16 15:49:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: blogs ~ APPPATH\views\blog.php [ 29 ] in C:\wamp\www\qvid\application\views\blog.php:29
2013-02-16 15:49:31 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blog.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 29, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\blog.php(13): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\blog.php:29
2013-02-16 15:52:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: blogs ~ APPPATH\views\blog.php [ 29 ] in C:\wamp\www\qvid\application\views\blog.php:29
2013-02-16 15:52:21 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blog.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 29, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\blog.php(13): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\blog.php:29
2013-02-16 15:55:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: blogs ~ APPPATH\views\blog.php [ 29 ] in C:\wamp\www\qvid\application\views\blog.php:29
2013-02-16 15:55:10 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blog.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 29, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\blog.php(13): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\blog.php:29
2013-02-16 15:55:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: blogs ~ APPPATH\views\blog.php [ 29 ] in C:\wamp\www\qvid\application\views\blog.php:29
2013-02-16 15:55:14 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blog.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 29, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\blog.php(13): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\blog.php:29
2013-02-16 15:55:35 --- CRITICAL: ErrorException [ 2 ]: Missing argument 3 for Kohana_ORM::where(), called in C:\wamp\www\qvid\application\classes\Controller\blog.php on line 34 and defined ~ MODPATH\orm\classes\Kohana\ORM.php [ 1846 ] in C:\wamp\www\qvid\modules\orm\classes\Kohana\ORM.php:1846
2013-02-16 15:55:35 --- DEBUG: #0 C:\wamp\www\qvid\modules\orm\classes\Kohana\ORM.php(1846): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\qvi...', 1846, Array)
#1 C:\wamp\www\qvid\application\classes\Controller\blog.php(34): Kohana_ORM->where('user_id', '1')
#2 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_getuserblogs()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\qvid\modules\orm\classes\Kohana\ORM.php:1846
2013-02-16 16:01:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: bMedia ~ APPPATH\views\blog.php [ 37 ] in C:\wamp\www\qvid\application\views\blog.php:37
2013-02-16 16:01:57 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blog.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 37, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\blog.php(34): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_getuserblogs()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\blog.php:37
2013-02-16 16:02:47 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Blog as array ~ APPPATH\views\blog.php [ 74 ] in :
2013-02-16 16:02:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-16 16:04:16 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\blog.php [ 74 ] in :
2013-02-16 16:04:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-16 16:04:58 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Blog as array ~ APPPATH\views\blog.php [ 89 ] in :
2013-02-16 16:04:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-16 16:05:08 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Blog as array ~ APPPATH\views\blog.php [ 62 ] in :
2013-02-16 16:05:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-16 16:12:45 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::order_by() ~ APPPATH\classes\Controller\blog.php [ 11 ] in :
2013-02-16 16:12:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :