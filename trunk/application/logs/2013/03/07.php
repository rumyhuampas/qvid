<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-07 00:22:15 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`qvid`.`blogs`, CONSTRAINT `FK_blogs_users` FOREIGN KEY (`User_Id`) REFERENCES `users` (`Id`)) [ INSERT INTO `blogs` (`Title`, `Text`, `Tags`) VALUES ('Titulo', 'Texto', 'Tags') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-03-07 00:22:15 --- DEBUG: #0 C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `bl...', false, Array)
#1 C:\wamp\www\qvid\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\qvid\application\classes\Controller\admin\blogs.php(34): Kohana_ORM->create()
#3 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Blogs->action_new()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Blogs))
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251