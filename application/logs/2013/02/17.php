<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-02-17 18:02:18 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'blogs.createdAt' in 'field list' [ SELECT `blogs`.`id`, DAY(blogs.createdAt) AS `day`, MONTH(blogs.createdAt) AS `month`, `blogs`.`title`, `blogs`.`tags`, CONCAT(SUBSTRING(blogs.text, 1, 100), "...") AS `text`, `users`.`name` AS `username` FROM `blogs` JOIN `users` ON (`blogs`.`user_id` = `users`.`id`) WHERE `blogs`.`published` = 'T' ORDER BY `blogs`.`createdAt` DESC LIMIT 2 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-02-17 18:02:18 --- DEBUG: #0 C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `blogs`....', false, Array)
#1 C:\wamp\www\qvid\application\classes\helpers\db.php(30): Kohana_Database_Query->execute()
#2 C:\wamp\www\qvid\application\views\home.php(211): helpers_db::getBlogs(2, 100)
#3 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#4 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#5 C:\wamp\www\qvid\application\classes\Controller\home.php(10): Kohana_View->render()
#6 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-02-17 18:36:25 --- CRITICAL: Database_Exception [ 1103 ]: Incorrect table name '' [ SELECT `blogmedia`.`Id` AS `Id`, `blogmedia`.`Blog_Id` AS `Blog_Id`, `blogmedia`.`MediaResource_Id` AS `MediaResource_Id`, `blogmedia`.`Published` AS `Published` FROM `blogmedia` AS `blogmedia` JOIN `` ON () WHERE `Blog_Id` = '7' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-02-17 18:36:25 --- DEBUG: #0 C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `blogmed...', 'Model_BlogMedia', Array)
#1 C:\wamp\www\qvid\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\qvid\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\qvid\application\views\blog.php(19): Kohana_ORM->find_all()
#4 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#5 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#6 C:\wamp\www\qvid\application\classes\Controller\blog.php(33): Kohana_View->render()
#7 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_getuserblogs()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#13 {main} in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-02-17 18:40:50 --- CRITICAL: Database_Exception [ 1146 ]: Table 'qvid.blog_media' doesn't exist [ SELECT `mediaresource`.`path`, `mediaresource`.`filename`, `mediaresource`.`resource_type` FROM `blog_media` JOIN `mediaresource` ON (`mediaresource`.`Id` = `blog_media`.`mediaresource_id`) WHERE `blog_media`.`blog_id` = '7' AND `mediaresource`.`resource_type` = 'VIDEO' AND `blog_media`.`published` = 'T' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-02-17 18:40:50 --- DEBUG: #0 C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `mediare...', false, Array)
#1 C:\wamp\www\qvid\application\classes\helpers\db.php(96): Kohana_Database_Query->execute()
#2 C:\wamp\www\qvid\application\classes\helpers\db.php(105): helpers_db::getBlogResources('7', 'VIDEO')
#3 C:\wamp\www\qvid\application\views\blog.php(52): helpers_db::getBlogVideos('7')
#4 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#5 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#6 C:\wamp\www\qvid\application\classes\Controller\blog.php(33): Kohana_View->render()
#7 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_getuserblogs()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#13 {main} in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-02-17 18:42:14 --- CRITICAL: Database_Exception [ 1146 ]: Table 'qvid.blog_media' doesn't exist [ SELECT `mediaresource`.`path`, `mediaresource`.`filename`, `mediaresource`.`resource_type` FROM `blog_media` JOIN `mediaresource` ON (`mediaresource`.`Id` = `blogmedia`.`mediaresource_id`) WHERE `blogmedia`.`blog_id` = '7' AND `mediaresource`.`resource_type` = 'VIDEO' AND `blogmedia`.`published` = 'T' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-02-17 18:42:14 --- DEBUG: #0 C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `mediare...', false, Array)
#1 C:\wamp\www\qvid\application\classes\helpers\db.php(96): Kohana_Database_Query->execute()
#2 C:\wamp\www\qvid\application\classes\helpers\db.php(105): helpers_db::getBlogResources('7', 'VIDEO')
#3 C:\wamp\www\qvid\application\views\blog.php(52): helpers_db::getBlogVideos('7')
#4 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#5 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#6 C:\wamp\www\qvid\application\classes\Controller\blog.php(33): Kohana_View->render()
#7 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_getuserblogs()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#13 {main} in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-02-17 18:43:05 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_MediaResource as array ~ APPPATH\views\blog.php [ 29 ] in :
2013-02-17 18:43:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-17 18:49:22 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_MediaResource::count() ~ APPPATH\views\blog.php [ 55 ] in :
2013-02-17 18:49:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-17 19:05:44 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_MediaResource::count() ~ APPPATH\views\blog.php [ 55 ] in :
2013-02-17 19:05:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-17 19:26:37 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'blogmedia.published' in 'where clause' [ SELECT `blog`.`Id` AS `Id`, `blog`.`User_Id` AS `User_Id`, `blog`.`Title` AS `Title`, `blog`.`Text` AS `Text`, `blog`.`Tags` AS `Tags`, `blog`.`Created_At` AS `Created_At`, `blog`.`Modified_At` AS `Modified_At`, `blog`.`Published` AS `Published` FROM `blogs` AS `blog` WHERE `user_id` = '1' AND `blogmedia`.`published` = 'T' ORDER BY `created_at` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-02-17 19:26:37 --- DEBUG: #0 C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `blog`.`...', 'Model_Blog', Array)
#1 C:\wamp\www\qvid\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\qvid\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\qvid\application\classes\Controller\blog.php(33): Kohana_ORM->find_all()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_getuserblogs()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-02-17 19:27:20 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$Path ~ APPPATH\views\blog.php [ 59 ] in C:\wamp\www\qvid\application\views\blog.php:59
2013-02-17 19:27:20 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blog.php(59): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\qvi...', 59, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\blog.php(34): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_getuserblogs()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\blog.php:59
2013-02-17 19:48:42 --- CRITICAL: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\views\blog.php [ 68 ] in :
2013-02-17 19:48:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', 'C:\wamp\www\qvi...', 68, Array)
#1 C:\wamp\www\qvid\application\views\blog.php(68): date('d', '2013-02-16 00:5...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#3 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#4 C:\wamp\www\qvid\application\classes\Controller\blog.php(34): Kohana_View->render()
#5 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_getuserblogs()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#11 {main} in :
2013-02-17 19:55:05 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\views\blog.php [ 68 ] in :
2013-02-17 19:55:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-17 19:57:01 --- CRITICAL: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\views\blog.php [ 68 ] in :
2013-02-17 19:57:01 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', 'C:\wamp\www\qvi...', 68, Array)
#1 C:\wamp\www\qvid\application\views\blog.php(68): date('d', '2013-02-16 00:5...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#3 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#4 C:\wamp\www\qvid\application\classes\Controller\blog.php(34): Kohana_View->render()
#5 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_getuserblogs()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#11 {main} in :
2013-02-17 20:03:23 --- CRITICAL: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\views\blog.php [ 68 ] in :
2013-02-17 20:03:23 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', 'C:\wamp\www\qvi...', 68, Array)
#1 C:\wamp\www\qvid\application\views\blog.php(68): date('D', '2013-02-16 00:5...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#3 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#4 C:\wamp\www\qvid\application\classes\Controller\blog.php(34): Kohana_View->render()
#5 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_getuserblogs()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#11 {main} in :
2013-02-17 20:08:55 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant Date - assumed 'Date' ~ APPPATH\views\blog.php [ 68 ] in C:\wamp\www\qvid\application\views\blog.php:68
2013-02-17 20:08:55 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blog.php(68): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\wamp\www\qvi...', 68, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\blog.php(34): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_getuserblogs()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\blog.php:68
2013-02-17 20:09:13 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant Kohana_Date - assumed 'Kohana_Date' ~ APPPATH\views\blog.php [ 68 ] in C:\wamp\www\qvid\application\views\blog.php:68
2013-02-17 20:09:13 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blog.php(68): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\wamp\www\qvi...', 68, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\blog.php(34): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_getuserblogs()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\blog.php:68
2013-02-17 20:27:36 --- CRITICAL: Kohana_Exception [ 0 ]: The user_name property does not exist in the Model_Blog class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\qvid\modules\orm\classes\Kohana\ORM.php:600
2013-02-17 20:27:36 --- DEBUG: #0 C:\wamp\www\qvid\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('user_name')
#1 C:\wamp\www\qvid\application\views\blog.php(79): Kohana_ORM->__get('user_name')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#3 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#4 C:\wamp\www\qvid\application\classes\Controller\blog.php(12): Kohana_View->render()
#5 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\qvid\modules\orm\classes\Kohana\ORM.php:600
2013-02-17 20:27:49 --- CRITICAL: Kohana_Exception [ 0 ]: The Name property does not exist in the Model_Blog class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\qvid\modules\orm\classes\Kohana\ORM.php:600
2013-02-17 20:27:49 --- DEBUG: #0 C:\wamp\www\qvid\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('Name')
#1 C:\wamp\www\qvid\application\views\blog.php(79): Kohana_ORM->__get('Name')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#3 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#4 C:\wamp\www\qvid\application\classes\Controller\blog.php(12): Kohana_View->render()
#5 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\qvid\modules\orm\classes\Kohana\ORM.php:600
2013-02-17 20:27:57 --- CRITICAL: Kohana_Exception [ 0 ]: The Name property does not exist in the Model_Blog class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\qvid\modules\orm\classes\Kohana\ORM.php:600
2013-02-17 20:27:57 --- DEBUG: #0 C:\wamp\www\qvid\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('Name')
#1 C:\wamp\www\qvid\application\views\blog.php(79): Kohana_ORM->__get('Name')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#3 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#4 C:\wamp\www\qvid\application\classes\Controller\blog.php(12): Kohana_View->render()
#5 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\qvid\modules\orm\classes\Kohana\ORM.php:600
2013-02-17 20:42:12 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Blog as array ~ APPPATH\views\blogreader.php [ 19 ] in :
2013-02-17 20:42:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-17 20:46:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: b ~ APPPATH\views\blogreader.php [ 82 ] in C:\wamp\www\qvid\application\views\blogreader.php:82
2013-02-17 20:46:25 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blogreader.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 82, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\blog.php(22): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_read()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\blogreader.php:82
2013-02-17 20:46:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: b ~ APPPATH\views\blogreader.php [ 89 ] in C:\wamp\www\qvid\application\views\blogreader.php:89
2013-02-17 20:46:36 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blogreader.php(89): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 89, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\blog.php(22): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_read()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\blogreader.php:89
2013-02-17 20:51:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: b ~ APPPATH\views\blogreader.php [ 87 ] in C:\wamp\www\qvid\application\views\blogreader.php:87
2013-02-17 20:51:20 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blogreader.php(87): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 87, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\blog.php(22): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_read()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\blogreader.php:87
2013-02-17 20:53:31 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'blogmedia.published' in 'where clause' [ SELECT `mediaresource`.`Id` AS `Id`, `mediaresource`.`Path` AS `Path`, `mediaresource`.`Resource_Type` AS `Resource_Type`, `mediaresource`.`FileName` AS `FileName`, `mediaresource`.`Description` AS `Description`, `mediaresource`.`Created_At` AS `Created_At`, `mediaresource`.`Modified_At` AS `Modified_At`, `mediaresource`.`FileTag` AS `FileTag`, `mediaresource`.`Link` AS `Link` FROM `mediaresource` AS `mediaresource` WHERE `mediaresource`.`id` = '15' AND `blogmedia`.`published` = 'T' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-02-17 20:53:31 --- DEBUG: #0 C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `mediare...', 'Model_MediaReso...', Array)
#1 C:\wamp\www\qvid\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\qvid\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\qvid\application\views\blogreader.php(89): Kohana_ORM->find_all()
#4 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#5 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#6 C:\wamp\www\qvid\application\classes\Controller\blog.php(22): Kohana_View->render()
#7 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_read()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#13 {main} in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-02-17 20:54:17 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$Path ~ APPPATH\views\blogreader.php [ 90 ] in C:\wamp\www\qvid\application\views\blogreader.php:90
2013-02-17 20:54:17 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blogreader.php(90): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\qvi...', 90, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#3 C:\wamp\www\qvid\application\classes\Controller\blog.php(22): Kohana_View->render()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_read()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\application\views\blogreader.php:90
2013-02-17 20:58:31 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method helpers_db::getBlogs() ~ APPPATH\views\home.php [ 211 ] in :
2013-02-17 20:58:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-17 21:00:19 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method helpers_db::getBlogs() ~ APPPATH\views\home.php [ 211 ] in :
2013-02-17 21:00:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-17 21:07:49 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method helpers_db::getBlogs() ~ APPPATH\views\servsidebar.php [ 47 ] in :
2013-02-17 21:07:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :