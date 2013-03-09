<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-09 13:26:25 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'user.Resource_id' in 'where clause' [ SELECT (SELECT path FROM mediaresource WHERE mediaresource.id=user.Resource_id) AS `imagepath`, `pagedata`.`Id` AS `Id`, `pagedata`.`Name` AS `Name`, `pagedata`.`Name2` AS `Name2`, `pagedata`.`Text` AS `Text`, `pagedata`.`Resource_Id` AS `Resource_Id`, `pagedata`.`Tag` AS `Tag`, `pagedata`.`Published` AS `Published` FROM `pagedata` AS `pagedata` WHERE `tag` = 'TEAMMEMBER' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-03-09 13:26:25 --- DEBUG: #0 C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT (SELECT ...', 'Model_PageData', Array)
#1 C:\wamp\www\qvid\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\qvid\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\qvid\application\classes\Controller\admin\team.php(15): Kohana_ORM->find_all()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Team->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Team))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-03-09 14:22:08 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'pagedata.Image_id' in 'where clause' [ SELECT (SELECT path FROM mediaresource WHERE mediaresource.id=pagedata.Image_id) AS `imagepath`, `pagedata`.`Id` AS `Id`, `pagedata`.`Name` AS `Name`, `pagedata`.`Name2` AS `Name2`, `pagedata`.`Text` AS `Text`, `pagedata`.`Resource_Id` AS `Resource_Id`, `pagedata`.`Tag` AS `Tag`, `pagedata`.`Published` AS `Published` FROM `pagedata` AS `pagedata` WHERE `Id` = '9' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-03-09 14:22:08 --- DEBUG: #0 C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT (SELECT ...', false, Array)
#1 C:\wamp\www\qvid\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\qvid\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 C:\wamp\www\qvid\application\classes\Controller\admin\team.php(64): Kohana_ORM->find()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Team->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Team))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-03-09 14:23:52 --- CRITICAL: ErrorException [ 8 ]: Undefined index: tmid ~ APPPATH\classes\Controller\admin\team.php [ 69 ] in C:\wamp\www\qvid\application\classes\Controller\admin\team.php:69
2013-03-09 14:23:52 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\admin\team.php(69): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\qvi...', 69, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Team->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Team))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\admin\team.php:69
2013-03-09 14:24:52 --- CRITICAL: ErrorException [ 8 ]: Undefined index: tmid ~ APPPATH\classes\Controller\admin\team.php [ 69 ] in C:\wamp\www\qvid\application\classes\Controller\admin\team.php:69
2013-03-09 14:24:52 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\Controller\admin\team.php(69): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\qvi...', 69, Array)
#1 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Team->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Team))
#4 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\qvid\application\classes\Controller\admin\team.php:69
2013-03-09 20:19:11 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: images ~ APPPATH\views\admin\imagechoose.php [ 21 ] in C:\wamp\www\qvid\application\views\admin\imagechoose.php:21
2013-03-09 20:19:11 --- DEBUG: #0 C:\wamp\www\qvid\application\views\admin\imagechoose.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 21, Array)
#1 C:\wamp\www\qvid\application\views\admin\blogedit.php(77): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#3 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#4 C:\wamp\www\qvid\application\classes\Controller\admin\blogs.php(61): Kohana_View->render()
#5 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Admin_Blogs->action_edit()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Blogs))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\qvid\application\views\admin\imagechoose.php:21