<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-02-04 15:48:14 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: [2002] No connection could be made because the target machine actively refused it.
 (trying to connect via tcp://localhost:3306) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\MySQL.php:171
2013-02-04 15:48:14 --- DEBUG: #0 C:\wamp\www\qvid\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'select b.id, da...', false, Array)
#2 C:\wamp\www\qvid\application\classes\Model\blog.php(20): Kohana_Database_Query->execute()
#3 C:\wamp\www\qvid\application\classes\Controller\blog.php(17): Model_Blog->getBlogs()
#4 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\MySQL.php:171