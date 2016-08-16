<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-08-16 00:10:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: usuario ~ APPPATH/views/TemplateIndex.php [ 30 ] in /var/www/html/kohana-v3.3.5/application/views/TemplateIndex.php:30
2016-08-16 00:10:55 --- DEBUG: #0 /var/www/html/kohana-v3.3.5/application/views/TemplateIndex.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/html/k...', 30, Array)
#1 /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php(62): include('/var/www/html/k...')
#2 /var/www/html/kohana-v3.3.5/system/classes/Kohana/View.php(359): Kohana_View::capture('/var/www/html/k...', Array)
#3 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/html/kohana-v3.3.5/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/html/kohana-v3.3.5/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/html/kohana-v3.3.5/application/views/TemplateIndex.php:30