<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-05 21:07:54 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: [2002] No connection could be made because the target machine actively refused it.
 (trying to connect via tcp://localhost:3306) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\MySQL.php:171
2013-03-05 21:07:54 --- DEBUG: #0 C:\wamp\www\qvid\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\wamp\www\qvid\modules\database\classes\Kohana\Database\MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\wamp\www\qvid\modules\orm\classes\Kohana\ORM.php(1665): Kohana_Database_MySQL->list_columns('mediaresource')
#3 C:\wamp\www\qvid\modules\orm\classes\Kohana\ORM.php(441): Kohana_ORM->list_columns()
#4 C:\wamp\www\qvid\modules\orm\classes\Kohana\ORM.php(386): Kohana_ORM->reload_columns()
#5 C:\wamp\www\qvid\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\wamp\www\qvid\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\wamp\www\qvid\application\classes\Controller\home.php(10): Kohana_ORM::factory('mediaresource')
#8 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Home->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#11 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\MySQL.php:171
2013-03-05 21:44:35 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ECHO, expecting ',' or ';' ~ APPPATH\views\admin\useredit.php [ 42 ] in :
2013-03-05 21:44:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :