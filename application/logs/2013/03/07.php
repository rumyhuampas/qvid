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
2013-03-07 22:34:48 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_users' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-03-07 22:34:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-07 22:37:49 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::select() must be an array, object given, called in C:\wamp\www\qvid\application\views\admin\blogedit.php on line 37 and defined ~ SYSPATH\classes\Kohana\Form.php [ 252 ] in C:\wamp\www\qvid\system\classes\Kohana\Form.php:252
2013-03-07 22:37:49 --- DEBUG: #0 C:\wamp\www\qvid\system\classes\Kohana\Form.php(252): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\wamp\www\qvi...', 252, Array)
#1 C:\wamp\www\qvid\application\views\admin\blogedit.php(37): Kohana_Form::select('blogauthor', Object(Database_Query_Builder_Select))
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#3 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#4 C:\wamp\www\qvid\application\classes\Controller\admin\blogs.php(28): Kohana_View->render()
#5 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Blogs->action_new()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Blogs))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\qvid\system\classes\Kohana\Form.php:252
2013-03-07 22:38:52 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::select() must be an array, object given, called in C:\wamp\www\qvid\application\views\admin\blogedit.php on line 37 and defined ~ SYSPATH\classes\Kohana\Form.php [ 252 ] in C:\wamp\www\qvid\system\classes\Kohana\Form.php:252
2013-03-07 22:38:52 --- DEBUG: #0 C:\wamp\www\qvid\system\classes\Kohana\Form.php(252): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\wamp\www\qvi...', 252, Array)
#1 C:\wamp\www\qvid\application\views\admin\blogedit.php(37): Kohana_Form::select('blogauthor', Object(Database_MySQL_Result))
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#3 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#4 C:\wamp\www\qvid\application\classes\Controller\admin\blogs.php(28): Kohana_View->render()
#5 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Blogs->action_new()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Blogs))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\qvid\system\classes\Kohana\Form.php:252
2013-03-07 22:51:18 --- CRITICAL: View_Exception [ 0 ]: The requested view admin/blogsedit could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\qvid\system\classes\Kohana\View.php:137
2013-03-07 22:51:18 --- DEBUG: #0 C:\wamp\www\qvid\system\classes\Kohana\View.php(137): Kohana_View->set_filename('admin/blogsedit')
#1 C:\wamp\www\qvid\system\classes\Kohana\View.php(30): Kohana_View->__construct('admin/blogsedit', NULL)
#2 C:\wamp\www\qvid\application\classes\Controller\admin\blogs.php(48): Kohana_View::factory('admin/blogsedit')
#3 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Blogs->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Blogs))
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\qvid\system\classes\Kohana\View.php:137
2013-03-07 23:00:27 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'id, name' in 'field list' [ SELECT `id, name` FROM `users` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-03-07 23:00:27 --- DEBUG: #0 C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `id, nam...', false, Array)
#1 C:\wamp\www\qvid\application\classes\Controller\admin\blogs.php(54): Kohana_Database_Query->execute()
#2 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Blogs->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Blogs))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-03-07 23:22:03 --- CRITICAL: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`qvid`.`blogs`, CONSTRAINT `FK_blogs_users` FOREIGN KEY (`User_Id`) REFERENCES `users` (`Id`)) [ DELETE FROM `users` WHERE `Id` = '3' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-03-07 23:22:03 --- DEBUG: #0 C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(4, 'DELETE FROM `us...', false, Array)
#1 C:\wamp\www\qvid\modules\orm\classes\Kohana\ORM.php(1439): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\qvid\application\classes\Controller\admin\users.php(134): Kohana_ORM->delete()
#3 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_delete()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-03-07 23:50:44 --- CRITICAL: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`qvid`.`blogs`, CONSTRAINT `FK_blogs_users` FOREIGN KEY (`User_Id`) REFERENCES `users` (`Id`)) [ DELETE FROM `users` WHERE `Id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-03-07 23:50:44 --- DEBUG: #0 C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(4, 'DELETE FROM `us...', false, Array)
#1 C:\wamp\www\qvid\modules\orm\classes\Kohana\ORM.php(1439): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\qvid\application\classes\Controller\admin\users.php(136): Kohana_ORM->delete()
#3 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_delete()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-03-07 23:58:39 --- CRITICAL: Database_Exception [ 1451 ]: Cannot delete or update a parent row: a foreign key constraint fails (`qvid`.`blogs`, CONSTRAINT `FK_blogs_users` FOREIGN KEY (`User_Id`) REFERENCES `users` (`Id`)) [ DELETE FROM `users` WHERE `Id` = '3' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-03-07 23:58:39 --- DEBUG: #0 C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(4, 'DELETE FROM `us...', false, Array)
#1 C:\wamp\www\qvid\modules\orm\classes\Kohana\ORM.php(1439): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\qvid\application\classes\Controller\admin\users.php(141): Kohana_ORM->delete()
#3 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Users->action_delete()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Users))
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251