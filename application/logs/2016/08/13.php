<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-08-13 10:03:36 --- EMERGENCY: View_Exception [ 0 ]: The requested view Login could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php:145
2016-08-13 10:03:36 --- DEBUG: #0 /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php(145): Kohana_View->set_filename('Login')
#1 /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php(30): Kohana_View->__construct('Login', NULL)
#2 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('Login')
#3 /var/www/html/kohana-v3.3.5/application/classes/Controller/Index.php(11): Kohana_Controller_Template->before()
#4 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Controller.php(69): Controller_Index->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/kohana-v3.3.5/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php:145
2016-08-13 10:03:55 --- EMERGENCY: View_Exception [ 0 ]: The requested view Login could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php:145
2016-08-13 10:03:55 --- DEBUG: #0 /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php(145): Kohana_View->set_filename('Login')
#1 /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php(30): Kohana_View->__construct('Login', NULL)
#2 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('Login')
#3 /var/www/html/kohana-v3.3.5/application/classes/Controller/Index.php(11): Kohana_Controller_Template->before()
#4 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Controller.php(69): Controller_Index->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/kohana-v3.3.5/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php:145
2016-08-13 10:06:11 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Index.php [ 26 ] in /var/www/html/kohana-v3.3.5/application/classes/Controller/Index.php:26
2016-08-13 10:06:11 --- DEBUG: #0 /var/www/html/kohana-v3.3.5/application/classes/Controller/Index.php(26): Kohana_Core::error_handler(2, 'Attempt to assi...', '/var/www/html/k...', 26, Array)
#1 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Controller.php(84): Controller_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/html/kohana-v3.3.5/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/html/kohana-v3.3.5/application/classes/Controller/Index.php:26
2016-08-13 10:06:11 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in file:line
2016-08-13 10:06:33 --- EMERGENCY: View_Exception [ 0 ]: The requested view Login could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php:145
2016-08-13 10:06:33 --- DEBUG: #0 /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php(145): Kohana_View->set_filename('Login')
#1 /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php(30): Kohana_View->__construct('Login', NULL)
#2 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('Login')
#3 /var/www/html/kohana-v3.3.5/application/classes/Controller/Index.php(11): Kohana_Controller_Template->before()
#4 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Controller.php(69): Controller_Index->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/kohana-v3.3.5/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php:145
2016-08-13 10:07:32 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function render() on string ~ SYSPATH/classes/Kohana/Controller/Template.php [ 44 ] in file:line
2016-08-13 10:07:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-13 10:08:20 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function render() on string ~ SYSPATH/classes/Kohana/Controller/Template.php [ 44 ] in file:line
2016-08-13 10:08:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-13 10:08:29 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function render() on string ~ SYSPATH/classes/Kohana/Controller/Template.php [ 44 ] in file:line
2016-08-13 10:08:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-13 10:08:30 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function render() on string ~ SYSPATH/classes/Kohana/Controller/Template.php [ 44 ] in file:line
2016-08-13 10:08:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-08-13 10:08:40 --- EMERGENCY: View_Exception [ 0 ]: The requested view Login could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php:145
2016-08-13 10:08:40 --- DEBUG: #0 /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php(145): Kohana_View->set_filename('Login')
#1 /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php(30): Kohana_View->__construct('Login', NULL)
#2 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('Login')
#3 /var/www/html/kohana-v3.3.5/application/classes/Controller/Index.php(11): Kohana_Controller_Template->before()
#4 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Controller.php(69): Controller_Index->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/kohana-v3.3.5/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php:145
2016-08-13 10:10:33 --- EMERGENCY: View_Exception [ 0 ]: The requested view Login could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php:145
2016-08-13 10:10:33 --- DEBUG: #0 /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php(145): Kohana_View->set_filename('Login')
#1 /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php(30): Kohana_View->__construct('Login', NULL)
#2 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('Login')
#3 /var/www/html/kohana-v3.3.5/application/classes/Controller/Index.php(11): Kohana_Controller_Template->before()
#4 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Controller.php(69): Controller_Index->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/kohana-v3.3.5/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php:145
2016-08-13 10:10:34 --- EMERGENCY: View_Exception [ 0 ]: The requested view Login could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php:145
2016-08-13 10:10:34 --- DEBUG: #0 /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php(145): Kohana_View->set_filename('Login')
#1 /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php(30): Kohana_View->__construct('Login', NULL)
#2 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('Login')
#3 /var/www/html/kohana-v3.3.5/application/classes/Controller/Index.php(11): Kohana_Controller_Template->before()
#4 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Controller.php(69): Controller_Index->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/kohana-v3.3.5/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php:145
2016-08-13 10:10:35 --- EMERGENCY: View_Exception [ 0 ]: The requested view Login could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php:145
2016-08-13 10:10:35 --- DEBUG: #0 /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php(145): Kohana_View->set_filename('Login')
#1 /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php(30): Kohana_View->__construct('Login', NULL)
#2 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('Login')
#3 /var/www/html/kohana-v3.3.5/application/classes/Controller/Index.php(11): Kohana_Controller_Template->before()
#4 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Controller.php(69): Controller_Index->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/kohana-v3.3.5/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php:145
2016-08-13 10:10:40 --- EMERGENCY: View_Exception [ 0 ]: The requested view Login could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php:145
2016-08-13 10:10:40 --- DEBUG: #0 /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php(145): Kohana_View->set_filename('Login')
#1 /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php(30): Kohana_View->__construct('Login', NULL)
#2 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('Login')
#3 /var/www/html/kohana-v3.3.5/application/classes/Controller/Index.php(11): Kohana_Controller_Template->before()
#4 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Controller.php(69): Controller_Index->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/kohana-v3.3.5/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php:145
2016-08-13 10:10:48 --- EMERGENCY: View_Exception [ 0 ]: The requested view Login could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php:145
2016-08-13 10:10:48 --- DEBUG: #0 /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php(145): Kohana_View->set_filename('Login')
#1 /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php(30): Kohana_View->__construct('Login', NULL)
#2 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('Login')
#3 /var/www/html/kohana-v3.3.5/application/classes/Controller/Index.php(11): Kohana_Controller_Template->before()
#4 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Controller.php(69): Controller_Index->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/kohana-v3.3.5/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php:145
2016-08-13 10:10:49 --- EMERGENCY: View_Exception [ 0 ]: The requested view Login could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php:145
2016-08-13 10:10:49 --- DEBUG: #0 /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php(145): Kohana_View->set_filename('Login')
#1 /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php(30): Kohana_View->__construct('Login', NULL)
#2 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('Login')
#3 /var/www/html/kohana-v3.3.5/application/classes/Controller/Index.php(11): Kohana_Controller_Template->before()
#4 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Controller.php(69): Controller_Index->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/kohana-v3.3.5/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php:145
2016-08-13 10:11:09 --- EMERGENCY: View_Exception [ 0 ]: The requested view Login could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php:145
2016-08-13 10:11:09 --- DEBUG: #0 /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php(145): Kohana_View->set_filename('Login')
#1 /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php(30): Kohana_View->__construct('Login', NULL)
#2 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('Login')
#3 /var/www/html/kohana-v3.3.5/application/classes/Controller/Index.php(11): Kohana_Controller_Template->before()
#4 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Controller.php(69): Controller_Index->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/kohana-v3.3.5/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php:145
2016-08-13 10:11:23 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in file:line
2016-08-13 10:11:41 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in file:line
2016-08-13 10:11:43 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in file:line
2016-08-13 10:12:47 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in file:line
2016-08-13 17:06:02 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in file:line
2016-08-13 17:06:12 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in file:line
2016-08-13 17:06:21 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in file:line