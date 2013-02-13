<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-02-10 10:30:54 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Blog::action_read(), called in C:\wamp\www\qvid\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\blog.php [ 13 ] in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-10 10:30:54 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\blog.php(13): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\qvi...', 13, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_read()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-10 10:30:57 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Blog::action_read(), called in C:\wamp\www\qvid\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\blog.php [ 13 ] in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-10 10:30:57 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\blog.php(13): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\wamp\www\qvi...', 13, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_read()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\blog.php:13
2013-02-10 10:45:56 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  ~ APPPATH\classes\helpers\db.php [ 54 ] in C:\wamp\www\qvid\application\classes\helpers\db.php:54
2013-02-10 10:45:56 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\helpers\db.php(54): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\qvi...', 54, Array)
#1 C:\wamp\www\qvid\application\views\blogreader.php(72): helpers_db::getMonthName(NULL)
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#3 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#4 C:\wamp\www\qvid\application\classes\Controller\blog.php(19): Kohana_View->render()
#5 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_read()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\qvid\application\classes\helpers\db.php:54
2013-02-10 11:35:04 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  ~ APPPATH\classes\helpers\db.php [ 57 ] in C:\wamp\www\qvid\application\classes\helpers\db.php:57
2013-02-10 11:35:04 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\helpers\db.php(57): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\qvi...', 57, Array)
#1 C:\wamp\www\qvid\application\views\blogreader.php(73): helpers_db::getMonthName(NULL)
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#3 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#4 C:\wamp\www\qvid\application\classes\Controller\blog.php(19): Kohana_View->render()
#5 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_read()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\qvid\application\classes\helpers\db.php:57
2013-02-10 11:40:39 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::right_join() ~ APPPATH\classes\helpers\db.php [ 43 ] in :
2013-02-10 11:40:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-10 11:41:59 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::right_join() ~ APPPATH\classes\helpers\db.php [ 43 ] in :
2013-02-10 11:41:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-10 12:38:37 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'SELECT path from mediaresource where id=users.smallimage_id AS `userimage` FROM ' at line 1 [ SELECT `blogs`.`id`, DAY(blogs.createdAt) AS `day`, MONTH(blogs.createdAt) AS `month`, `blogs`.`title`, `blogs`.`tags`, `blogs`.`text`, `users`.`name` AS `username`, `users`.`description` AS `userdesc`, SELECT path from mediaresource where id=users.smallimage_id AS `userimage` FROM `blogs` JOIN `users` ON (`blogs`.`user_id` = `users`.`id`) WHERE `blogs`.`published` = 'T' AND `blogs`.`id` = 3 ORDER BY `blogs`.`createdAt` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-02-10 12:38:37 --- DEBUG: #0 C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `blogs`....', false, Array)
#1 C:\wamp\www\qvid\application\classes\helpers\db.php(46): Kohana_Database_Query->execute()
#2 C:\wamp\www\qvid\application\views\blogreader.php(35): helpers_db::getBlog(3)
#3 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#4 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#5 C:\wamp\www\qvid\application\classes\Controller\blog.php(19): Kohana_View->render()
#6 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_read()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-02-10 14:55:07 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'SELECT path FROM mediaresource WHERE id=pagedata.mediaresource_id AS `imagepath`' at line 1 [ SELECT `pagedata`.`name`, `pagedata`.`name2`, `pagedata`.`text`, SELECT path FROM mediaresource WHERE id=pagedata.mediaresource_id AS `imagepath` FROM `pagedata` JOIN `mediaresource` ON (`mediaresource`.`id` = `pagedata`.`resource_id`) WHERE (`pagedata`.`tag` = 'TEAMMEMBER') AND `pagedata`.`published` = 'T' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-02-10 14:55:07 --- DEBUG: #0 C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `pagedat...', false, Array)
#1 C:\wamp\www\qvid\application\classes\helpers\db.php(153): Kohana_Database_Query->execute()
#2 C:\wamp\www\qvid\application\views\team.php(38): helpers_db::getTeam()
#3 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#4 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#5 C:\wamp\www\qvid\application\classes\Controller\team.php(10): Kohana_View->render()
#6 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Team->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#9 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-02-10 14:55:29 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'SELECT path FROM mediaresource WHERE id=pagedata.resource_id AS `imagepath` FROM' at line 1 [ SELECT `pagedata`.`name`, `pagedata`.`name2`, `pagedata`.`text`, SELECT path FROM mediaresource WHERE id=pagedata.resource_id AS `imagepath` FROM `pagedata` JOIN `mediaresource` ON (`mediaresource`.`id` = `pagedata`.`resource_id`) WHERE (`pagedata`.`tag` = 'TEAMMEMBER') AND `pagedata`.`published` = 'T' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-02-10 14:55:29 --- DEBUG: #0 C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `pagedat...', false, Array)
#1 C:\wamp\www\qvid\application\classes\helpers\db.php(153): Kohana_Database_Query->execute()
#2 C:\wamp\www\qvid\application\views\team.php(38): helpers_db::getTeam()
#3 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#4 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#5 C:\wamp\www\qvid\application\classes\Controller\team.php(10): Kohana_View->render()
#6 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Team->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#9 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-02-10 14:56:13 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'SELECT path FROM mediaresource WHERE mediaresource.id=pagedata.resource_id AS `i' at line 1 [ SELECT `pagedata`.`name`, `pagedata`.`name2`, `pagedata`.`text`, SELECT path FROM mediaresource WHERE mediaresource.id=pagedata.resource_id AS `imagepath` FROM `pagedata` JOIN `mediaresource` ON (`mediaresource`.`id` = `pagedata`.`resource_id`) WHERE (`pagedata`.`tag` = 'TEAMMEMBER') AND `pagedata`.`published` = 'T' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-02-10 14:56:13 --- DEBUG: #0 C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `pagedat...', false, Array)
#1 C:\wamp\www\qvid\application\classes\helpers\db.php(153): Kohana_Database_Query->execute()
#2 C:\wamp\www\qvid\application\views\team.php(38): helpers_db::getTeam()
#3 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#4 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#5 C:\wamp\www\qvid\application\classes\Controller\team.php(10): Kohana_View->render()
#6 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Team->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Team))
#9 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-02-10 19:06:12 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-10 19:06:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-10 19:08:25 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-10 19:08:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-10 19:08:36 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-10 19:08:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-10 19:08:49 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-10 19:08:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-10 19:09:12 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-10 19:09:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-10 19:09:54 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-10 19:09:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-10 19:20:47 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-10 19:20:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-10 19:25:50 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-10 19:25:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-10 19:25:52 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-10 19:25:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-10 20:59:20 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-10 20:59:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-10 20:59:34 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-10 20:59:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-10 21:00:45 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-10 21:00:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-10 21:00:47 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-10 21:00:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-10 21:01:07 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-10 21:01:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-10 21:02:34 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-10 21:02:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-10 21:11:34 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-10 21:11:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-10 21:18:54 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-10 21:18:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-10 21:18:58 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-10 21:18:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-10 21:19:08 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-10 21:19:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-10 21:19:24 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-10 21:19:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-10 21:19:42 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-10 21:19:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-10 21:21:05 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-10 21:21:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-10 21:22:58 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-10 21:22:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-10 21:24:02 --- CRITICAL: ErrorException [ 1 ]: Can only throw objects ~ APPPATH\classes\Controller\blog.php [ 10 ] in :
2013-02-10 21:24:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :