<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-08 00:01:24 --- CRITICAL: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`qvid`.`blogs`, CONSTRAINT `FK_blogs_users` FOREIGN KEY (`User_Id`) REFERENCES `users` (`Id`)) [ DELETE FROM `users` WHERE `Id` = '3' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-03-08 00:01:24 --- DEBUG: #0 C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(4, 'DELETE FROM `us...', false, Array)
#1 C:\wamp\www\qvid\modules\orm\classes\Kohana\ORM.php(1439): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\qvid\application\classes\Controller\admin\users.php(141): Kohana_ORM->delete()
#3 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_delete()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-03-08 00:03:45 --- CRITICAL: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`qvid`.`blogs`, CONSTRAINT `FK_blogs_users` FOREIGN KEY (`User_Id`) REFERENCES `users` (`Id`)) [ DELETE FROM `users` WHERE `Id` = '3' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-03-08 00:03:45 --- DEBUG: #0 C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(4, 'DELETE FROM `us...', false, Array)
#1 C:\wamp\www\qvid\modules\orm\classes\Kohana\ORM.php(1439): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\qvid\application\classes\Controller\admin\users.php(141): Kohana_ORM->delete()
#3 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_delete()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-03-08 00:04:11 --- CRITICAL: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`qvid`.`blogs`, CONSTRAINT `FK_blogs_users` FOREIGN KEY (`User_Id`) REFERENCES `users` (`Id`)) [ DELETE FROM `users` WHERE `Id` = '3' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-03-08 00:04:11 --- DEBUG: #0 C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(4, 'DELETE FROM `us...', false, Array)
#1 C:\wamp\www\qvid\modules\orm\classes\Kohana\ORM.php(1439): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\qvid\application\classes\Controller\admin\users.php(142): Kohana_ORM->delete()
#3 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_delete()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-03-08 00:09:48 --- CRITICAL: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`qvid`.`blogs`, CONSTRAINT `FK_blogs_users` FOREIGN KEY (`User_Id`) REFERENCES `users` (`Id`)) [ DELETE FROM `users` WHERE `Id` = '3' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-03-08 00:09:48 --- DEBUG: #0 C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(4, 'DELETE FROM `us...', false, Array)
#1 C:\wamp\www\qvid\modules\orm\classes\Kohana\ORM.php(1439): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\qvid\application\classes\Controller\admin\users.php(143): Kohana_ORM->delete()
#3 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_delete()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251