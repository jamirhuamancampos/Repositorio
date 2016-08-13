<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-08-11 08:43:36 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /var/www/html/kohana-v3.3.5/modules/database/classes/Kohana/Database/MySQL.php:171
2016-08-11 08:43:36 --- DEBUG: #0 /var/www/html/kohana-v3.3.5/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /var/www/html/kohana-v3.3.5/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /var/www/html/kohana-v3.3.5/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('recursomodel')
#3 /var/www/html/kohana-v3.3.5/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /var/www/html/kohana-v3.3.5/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /var/www/html/kohana-v3.3.5/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /var/www/html/kohana-v3.3.5/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /var/www/html/kohana-v3.3.5/application/classes/Controller/Index.php(9): Kohana_ORM::factory('RecursoModel')
#8 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Controller.php(84): Controller_Index->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/html/kohana-v3.3.5/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/html/kohana-v3.3.5/modules/database/classes/Kohana/Database/MySQL.php:171
2016-08-11 08:43:40 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /var/www/html/kohana-v3.3.5/modules/database/classes/Kohana/Database/MySQL.php:171
2016-08-11 08:43:40 --- DEBUG: #0 /var/www/html/kohana-v3.3.5/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /var/www/html/kohana-v3.3.5/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /var/www/html/kohana-v3.3.5/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('recursomodel')
#3 /var/www/html/kohana-v3.3.5/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /var/www/html/kohana-v3.3.5/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /var/www/html/kohana-v3.3.5/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /var/www/html/kohana-v3.3.5/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /var/www/html/kohana-v3.3.5/application/classes/Controller/Index.php(9): Kohana_ORM::factory('RecursoModel')
#8 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Controller.php(84): Controller_Index->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/html/kohana-v3.3.5/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/html/kohana-v3.3.5/modules/database/classes/Kohana/Database/MySQL.php:171
2016-08-11 09:00:24 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'biblioteca.recursomodel' doesn't exist [ SHOW FULL COLUMNS FROM `recursomodel` ] ~ MODPATH/database/classes/Kohana/Database/MySQLi.php [ 171 ] in /var/www/html/kohana-v3.3.5/modules/database/classes/Kohana/Database/MySQLi.php:337
2016-08-11 09:00:24 --- DEBUG: #0 /var/www/html/kohana-v3.3.5/modules/database/classes/Kohana/Database/MySQLi.php(337): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/html/kohana-v3.3.5/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQLi->list_columns('recursomodel')
#2 /var/www/html/kohana-v3.3.5/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /var/www/html/kohana-v3.3.5/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /var/www/html/kohana-v3.3.5/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /var/www/html/kohana-v3.3.5/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#6 /var/www/html/kohana-v3.3.5/application/classes/Controller/Index.php(9): Kohana_ORM::factory('RecursoModel')
#7 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Controller.php(84): Controller_Index->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#10 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/html/kohana-v3.3.5/index.php(118): Kohana_Request->execute()
#13 {main} in /var/www/html/kohana-v3.3.5/modules/database/classes/Kohana/Database/MySQLi.php:337
2016-08-11 09:00:48 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_recurso' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2016-08-11 09:00:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-11 09:02:44 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_recurso' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2016-08-11 09:02:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-11 09:02:48 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_recurso' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2016-08-11 09:02:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-11 09:03:00 --- EMERGENCY: ErrorException [ 1 ]: Class 'html' not found ~ APPPATH/views/Index/Recurso.php [ 4 ] in file:line
2016-08-11 09:03:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-11 09:16:21 --- EMERGENCY: View_Exception [ 0 ]: The requested view index/editar could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php:145
2016-08-11 09:16:21 --- DEBUG: #0 /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php(145): Kohana_View->set_filename('index/editar')
#1 /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php(30): Kohana_View->__construct('index/editar', NULL)
#2 /var/www/html/kohana-v3.3.5/application/classes/Controller/Index.php(26): Kohana_View::factory('index/editar')
#3 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Controller.php(84): Controller_Index->action_formulario()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/kohana-v3.3.5/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php:145
2016-08-11 09:16:38 --- EMERGENCY: View_Exception [ 0 ]: The requested view index/editar could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php:145
2016-08-11 09:16:38 --- DEBUG: #0 /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php(145): Kohana_View->set_filename('index/editar')
#1 /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php(30): Kohana_View->__construct('index/editar', NULL)
#2 /var/www/html/kohana-v3.3.5/application/classes/Controller/Index.php(26): Kohana_View::factory('index/editar')
#3 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Controller.php(84): Controller_Index->action_formulario()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/kohana-v3.3.5/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php:145
2016-08-11 09:16:58 --- EMERGENCY: View_Exception [ 0 ]: The requested view Index/editar could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php:145
2016-08-11 09:16:58 --- DEBUG: #0 /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php(145): Kohana_View->set_filename('Index/editar')
#1 /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php(30): Kohana_View->__construct('Index/editar', NULL)
#2 /var/www/html/kohana-v3.3.5/application/classes/Controller/Index.php(26): Kohana_View::factory('Index/editar')
#3 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Controller.php(84): Controller_Index->action_formulario()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/kohana-v3.3.5/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php:145
2016-08-11 09:17:15 --- EMERGENCY: View_Exception [ 0 ]: The requested view Index/editar could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php:145
2016-08-11 09:17:15 --- DEBUG: #0 /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php(145): Kohana_View->set_filename('Index/editar')
#1 /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php(30): Kohana_View->__construct('Index/editar', NULL)
#2 /var/www/html/kohana-v3.3.5/application/classes/Controller/Index.php(26): Kohana_View::factory('Index/editar')
#3 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Controller.php(84): Controller_Index->action_formulario()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/kohana-v3.3.5/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php:145
2016-08-11 09:17:19 --- EMERGENCY: View_Exception [ 0 ]: The requested view Index/editar could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php:145
2016-08-11 09:17:19 --- DEBUG: #0 /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php(145): Kohana_View->set_filename('Index/editar')
#1 /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php(30): Kohana_View->__construct('Index/editar', NULL)
#2 /var/www/html/kohana-v3.3.5/application/classes/Controller/Index.php(26): Kohana_View::factory('Index/editar')
#3 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Controller.php(84): Controller_Index->action_formulario()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/html/kohana-v3.3.5/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php:145
2016-08-11 09:17:56 --- EMERGENCY: ErrorException [ 1 ]: Class 'form' not found ~ APPPATH/views/Index/Editar.php [ 2 ] in file:line
2016-08-11 09:17:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-11 09:18:43 --- EMERGENCY: ErrorException [ 1 ]: Class 'form' not found ~ APPPATH/views/Index/Editar.php [ 2 ] in file:line
2016-08-11 09:18:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-11 09:19:06 --- EMERGENCY: ErrorException [ 1 ]: Class 'form' not found ~ APPPATH/views/Index/Editar.php [ 2 ] in file:line
2016-08-11 09:19:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-11 09:19:41 --- EMERGENCY: ErrorException [ 1 ]: Class 'FORM' not found ~ APPPATH/views/Index/Editar.php [ 2 ] in file:line
2016-08-11 09:19:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-11 09:19:45 --- EMERGENCY: ErrorException [ 1 ]: Class 'FORM' not found ~ APPPATH/views/Index/Editar.php [ 2 ] in file:line
2016-08-11 09:19:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-11 09:23:23 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Index.php [ 34 ] in file:line
2016-08-11 09:23:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-11 09:24:27 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Index.php [ 34 ] in file:line
2016-08-11 09:24:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-11 12:11:27 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Index.php [ 34 ] in file:line
2016-08-11 12:11:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-11 19:04:02 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH/classes/Kohana/HTML.php [ 71 ] in /var/www/html/kohana-v3.3.5/system/classes/Kohana/HTML.php:71
2016-08-11 19:04:02 --- DEBUG: #0 /var/www/html/kohana-v3.3.5/system/classes/Kohana/HTML.php(71): Kohana_Core::error_handler(8, 'Array to string...', '/var/www/html/k...', 71, Array)
#1 /var/www/html/kohana-v3.3.5/system/classes/Kohana/HTML.php(338): Kohana_HTML::chars(Array)
#2 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Form.php(107): Kohana_HTML::attributes(Array)
#3 /var/www/html/kohana-v3.3.5/application/views/Index/Editar.php(12): Kohana_Form::input(Array)
#4 /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php(62): include('/var/www/html/k...')
#5 /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/k...', Array)
#6 /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php(236): Kohana_View->render()
#7 /var/www/html/kohana-v3.3.5/application/views/TemplateIndex.php(23): Kohana_View->__toString()
#8 /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php(62): include('/var/www/html/k...')
#9 /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/k...', Array)
#10 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#11 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#14 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#16 /var/www/html/kohana-v3.3.5/index.php(118): Kohana_Request->execute()
#17 {main} in /var/www/html/kohana-v3.3.5/system/classes/Kohana/HTML.php:71