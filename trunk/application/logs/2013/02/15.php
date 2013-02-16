<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-02-15 20:10:48 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'blog_media.resource_type' in 'where clause' [ SELECT `mediaresource`.`path`, `mediaresource`.`filename`, `mediaresource`.`resource_type` FROM `blog_media` JOIN `mediaresource` ON (`mediaresource`.`Id` = `blog_media`.`mediaresource_id`) WHERE `blog_media`.`blog_id` = '4' AND `blog_media`.`resource_type` = 'PICTURE' AND `blog_media`.`published` = 'T' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-02-15 20:10:48 --- DEBUG: #0 C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `mediare...', false, Array)
#1 C:\wamp\www\qvid\application\classes\helpers\db.php(66): Kohana_Database_Query->execute()
#2 C:\wamp\www\qvid\application\views\blog.php(39): helpers_db::getBlogPictures('4')
#3 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#4 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#5 C:\wamp\www\qvid\application\classes\Controller\blog.php(11): Kohana_View->render()
#6 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\qvid\modules\database\classes\Kohana\Database\Query.php:251
2013-02-15 20:18:08 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method helpers_db::getBlogResources() ~ APPPATH\views\blogreader.php [ 39 ] in :
2013-02-15 20:18:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-15 20:26:10 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ';' ~ APPPATH\views\blog.php [ 78 ] in :
2013-02-15 20:26:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-15 20:37:31 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function getBlogResources() ~ APPPATH\classes\helpers\db.php [ 60 ] in :
2013-02-15 20:37:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-15 20:37:40 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function getBlogResources() ~ APPPATH\classes\helpers\db.php [ 60 ] in :
2013-02-15 20:37:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-15 20:37:59 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function getBlogResources() ~ APPPATH\classes\helpers\db.php [ 60 ] in :
2013-02-15 20:37:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-15 20:38:43 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function getBlogResources() ~ APPPATH\classes\helpers\db.php [ 60 ] in :
2013-02-15 20:38:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-15 20:40:49 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function getBlogResources() ~ APPPATH\classes\helpers\db.php [ 71 ] in :
2013-02-15 20:40:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-15 20:41:08 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function getBlogResources() ~ APPPATH\classes\helpers\db.php [ 71 ] in :
2013-02-15 20:41:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-15 20:41:15 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function getBlogResources() ~ APPPATH\classes\helpers\db.php [ 71 ] in :
2013-02-15 20:41:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-15 20:41:51 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\helpers\db.php [ 71 ] in :
2013-02-15 20:41:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-02-15 21:49:20 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\blogsidebar.php [ 31 ] in C:\wamp\www\qvid\application\views\blogsidebar.php:31
2013-02-15 21:49:20 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blogsidebar.php(31): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\wamp\www\qvi...', 31, Array)
#1 C:\wamp\www\qvid\application\views\blog.php(126): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#3 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#4 C:\wamp\www\qvid\application\classes\Controller\blog.php(11): Kohana_View->render()
#5 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\qvid\application\views\blogsidebar.php:31
2013-02-15 21:50:38 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\blogsidebar.php [ 31 ] in C:\wamp\www\qvid\application\views\blogsidebar.php:31
2013-02-15 21:50:38 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blogsidebar.php(31): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\wamp\www\qvi...', 31, Array)
#1 C:\wamp\www\qvid\application\views\blog.php(126): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#3 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#4 C:\wamp\www\qvid\application\classes\Controller\blog.php(11): Kohana_View->render()
#5 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\qvid\application\views\blogsidebar.php:31
2013-02-15 21:54:53 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\blogsidebar.php [ 31 ] in C:\wamp\www\qvid\application\views\blogsidebar.php:31
2013-02-15 21:54:53 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blogsidebar.php(31): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\wamp\www\qvi...', 31, Array)
#1 C:\wamp\www\qvid\application\views\blog.php(126): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#3 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#4 C:\wamp\www\qvid\application\classes\Controller\blog.php(11): Kohana_View->render()
#5 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\qvid\application\views\blogsidebar.php:31
2013-02-15 21:55:11 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: count ~ APPPATH\classes\helpers\db.php [ 98 ] in C:\wamp\www\qvid\application\classes\helpers\db.php:98
2013-02-15 21:55:11 --- DEBUG: #0 C:\wamp\www\qvid\application\classes\helpers\db.php(98): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\qvi...', 98, Array)
#1 C:\wamp\www\qvid\application\views\blogsidebar.php(30): helpers_db::getTopTags()
#2 C:\wamp\www\qvid\application\views\blog.php(126): include('C:\wamp\www\qvi...')
#3 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#4 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#5 C:\wamp\www\qvid\application\classes\Controller\blog.php(11): Kohana_View->render()
#6 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#12 {main} in C:\wamp\www\qvid\application\classes\helpers\db.php:98
2013-02-15 21:55:18 --- CRITICAL: ErrorException [ 2 ]: array_keys() expects parameter 1 to be array, integer given ~ APPPATH\classes\helpers\db.php [ 98 ] in :
2013-02-15 21:55:18 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_keys() ex...', 'C:\wamp\www\qvi...', 98, Array)
#1 C:\wamp\www\qvid\application\classes\helpers\db.php(98): array_keys(3, Array)
#2 C:\wamp\www\qvid\application\views\blogsidebar.php(30): helpers_db::getTopTags()
#3 C:\wamp\www\qvid\application\views\blog.php(126): include('C:\wamp\www\qvi...')
#4 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#5 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#6 C:\wamp\www\qvid\application\classes\Controller\blog.php(11): Kohana_View->render()
#7 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#13 {main} in :
2013-02-15 21:56:02 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\blogsidebar.php [ 31 ] in C:\wamp\www\qvid\application\views\blogsidebar.php:31
2013-02-15 21:56:02 --- DEBUG: #0 C:\wamp\www\qvid\application\views\blogsidebar.php(31): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\wamp\www\qvi...', 31, Array)
#1 C:\wamp\www\qvid\application\views\blog.php(126): include('C:\wamp\www\qvi...')
#2 C:\wamp\www\qvid\system\classes\Kohana\View.php(61): include('C:\wamp\www\qvi...')
#3 C:\wamp\www\qvid\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\qvi...', Array)
#4 C:\wamp\www\qvid\application\classes\Controller\blog.php(11): Kohana_View->render()
#5 C:\wamp\www\qvid\system\classes\Kohana\Controller.php(84): Controller_Blog->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\qvid\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#8 C:\wamp\www\qvid\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\qvid\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\qvid\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\qvid\application\views\blogsidebar.php:31