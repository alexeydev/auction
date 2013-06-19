<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-06-19 00:09:48 --- CRITICAL: View_Exception [ 0 ]: The requested view welcome could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\test1.ru\www\kohana\system\classes\Kohana\View.php:137
2013-06-19 00:09:48 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\system\classes\Kohana\View.php(137): Kohana_View->set_filename('welcome')
#1 Z:\home\test1.ru\www\kohana\system\classes\Kohana\View.php(30): Kohana_View->__construct('welcome', NULL)
#2 Z:\home\test1.ru\www\kohana\application\classes\Controller\Welcome.php(7): Kohana_View::factory('welcome')
#3 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\kohana\system\classes\Kohana\View.php:137
2013-06-19 00:10:08 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Welcome.php [ 8 ] in Z:\home\test1.ru\www\kohana\application\classes\Controller\Welcome.php:8
2013-06-19 00:10:08 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\application\classes\Controller\Welcome.php(8): Kohana_Core::error_handler(2048, 'Creating defaul...', 'Z:\home\test1.r...', 8, Array)
#1 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\www\kohana\application\classes\Controller\Welcome.php:8
2013-06-19 00:11:34 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Welcome.php [ 8 ] in Z:\home\test1.ru\www\kohana\application\classes\Controller\Welcome.php:8
2013-06-19 00:11:34 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\application\classes\Controller\Welcome.php(8): Kohana_Core::error_handler(2048, 'Creating defaul...', 'Z:\home\test1.r...', 8, Array)
#1 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\www\kohana\application\classes\Controller\Welcome.php:8
2013-06-19 01:21:38 --- CRITICAL: ErrorException [ 8 ]: Undefined index: password1 ~ SYSPATH\classes\Kohana\Validation.php [ 102 ] in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php:102
2013-06-19 01:21:38 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php(102): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 102, Array)
#1 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Valid.php(548): Kohana_Validation->offsetGet('password1')
#2 [internal function]: Kohana_Valid::matches(Object(Validation), 'password', 'password1')
#3 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#4 Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php(20): Kohana_Validation->check()
#5 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_registration()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#8 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php:102
2013-06-19 01:22:24 --- CRITICAL: ErrorException [ 8 ]: Undefined index: password1 ~ SYSPATH\classes\Kohana\Validation.php [ 102 ] in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php:102
2013-06-19 01:22:24 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php(102): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 102, Array)
#1 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Valid.php(548): Kohana_Validation->offsetGet('password1')
#2 [internal function]: Kohana_Valid::matches(Object(Validation), 'password', 'password1')
#3 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#4 Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php(20): Kohana_Validation->check()
#5 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_registration()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#8 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php:102
2013-06-19 15:19:03 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in Z:\home\test1.ru\www\kohana\modules\orm\classes\Kohana\ORM.php:699
2013-06-19 15:19:03 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('name', 'vasya')
#1 Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php(23): Kohana_ORM->__set('name', 'vasya')
#2 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_registration()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\www\kohana\modules\orm\classes\Kohana\ORM.php:699
2013-06-19 15:19:56 --- CRITICAL: Database_Exception [ 1364 ]: Field 'login' doesn't have a default value [ INSERT INTO `users` () VALUES () ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\www\kohana\modules\database\classes\Kohana\Database\Query.php:251
2013-06-19 15:19:56 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\test1.ru\www\kohana\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php(25): Kohana_ORM->create()
#3 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_registration()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\kohana\modules\database\classes\Kohana\Database\Query.php:251
2013-06-19 15:20:13 --- CRITICAL: Database_Exception [ 1364 ]: Field 'login' doesn't have a default value [ INSERT INTO `users` () VALUES () ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\www\kohana\modules\database\classes\Kohana\Database\Query.php:251
2013-06-19 15:20:13 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\test1.ru\www\kohana\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php(25): Kohana_ORM->create()
#3 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_registration()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\kohana\modules\database\classes\Kohana\Database\Query.php:251
2013-06-19 15:21:08 --- CRITICAL: Database_Exception [ 1364 ]: Field 'login' doesn't have a default value [ INSERT INTO `users` () VALUES () ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\www\kohana\modules\database\classes\Kohana\Database\Query.php:251
2013-06-19 15:21:08 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\test1.ru\www\kohana\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\www\kohana\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php(25): Kohana_ORM->save()
#4 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_registration()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\www\kohana\modules\database\classes\Kohana\Database\Query.php:251
2013-06-19 15:21:33 --- CRITICAL: Database_Exception [ 1364 ]: Field 'login' doesn't have a default value [ INSERT INTO `users` () VALUES () ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\www\kohana\modules\database\classes\Kohana\Database\Query.php:251
2013-06-19 15:21:33 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\test1.ru\www\kohana\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\www\kohana\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php(25): Kohana_ORM->save()
#4 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_registration()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\www\kohana\modules\database\classes\Kohana\Database\Query.php:251
2013-06-19 15:22:35 --- CRITICAL: Database_Exception [ 1364 ]: Field 'login' doesn't have a default value [ INSERT INTO `users` () VALUES () ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\www\kohana\modules\database\classes\Kohana\Database\Query.php:251
2013-06-19 15:22:35 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\test1.ru\www\kohana\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\www\kohana\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php(26): Kohana_ORM->save()
#4 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_registration()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\www\kohana\modules\database\classes\Kohana\Database\Query.php:251
2013-06-19 15:23:17 --- CRITICAL: Database_Exception [ 1364 ]: Field 'login' doesn't have a default value [ INSERT INTO `users` () VALUES () ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\www\kohana\modules\database\classes\Kohana\Database\Query.php:251
2013-06-19 15:23:17 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\test1.ru\www\kohana\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\www\kohana\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php(26): Kohana_ORM->save()
#4 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_registration()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\www\kohana\modules\database\classes\Kohana\Database\Query.php:251
2013-06-19 15:23:19 --- CRITICAL: Database_Exception [ 1364 ]: Field 'login' doesn't have a default value [ INSERT INTO `users` () VALUES () ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\www\kohana\modules\database\classes\Kohana\Database\Query.php:251
2013-06-19 15:23:19 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\test1.ru\www\kohana\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\www\kohana\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php(26): Kohana_ORM->save()
#4 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_registration()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\www\kohana\modules\database\classes\Kohana\Database\Query.php:251
2013-06-19 15:23:19 --- CRITICAL: Database_Exception [ 1364 ]: Field 'login' doesn't have a default value [ INSERT INTO `users` () VALUES () ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\www\kohana\modules\database\classes\Kohana\Database\Query.php:251
2013-06-19 15:23:19 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\test1.ru\www\kohana\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\www\kohana\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php(26): Kohana_ORM->save()
#4 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_registration()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\www\kohana\modules\database\classes\Kohana\Database\Query.php:251
2013-06-19 15:23:26 --- CRITICAL: Database_Exception [ 1364 ]: Field 'login' doesn't have a default value [ INSERT INTO `users` () VALUES () ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\www\kohana\modules\database\classes\Kohana\Database\Query.php:251
2013-06-19 15:23:26 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\test1.ru\www\kohana\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\www\kohana\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php(26): Kohana_ORM->save()
#4 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_registration()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\www\kohana\modules\database\classes\Kohana\Database\Query.php:251
2013-06-19 15:23:48 --- CRITICAL: Database_Exception [ 1364 ]: Field 'login' doesn't have a default value [ INSERT INTO `users` () VALUES () ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\www\kohana\modules\database\classes\Kohana\Database\Query.php:251
2013-06-19 15:23:48 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\test1.ru\www\kohana\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php(26): Kohana_ORM->create()
#3 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_registration()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\kohana\modules\database\classes\Kohana\Database\Query.php:251
2013-06-19 15:30:42 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Index.php [ 26 ] in :
2013-06-19 15:30:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-19 15:35:28 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php:67
2013-06-19 15:35:28 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('XDEBUG_SESSION', NULL)
#1 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('XDEBUG_SESSION')
#2 Z:\home\test1.ru\www\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php:67
2013-06-19 15:35:41 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php:67
2013-06-19 15:35:41 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('XDEBUG_SESSION', NULL)
#1 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('XDEBUG_SESSION')
#2 Z:\home\test1.ru\www\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php:67
2013-06-19 15:35:44 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php:67
2013-06-19 15:35:44 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('XDEBUG_SESSION', NULL)
#1 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('XDEBUG_SESSION')
#2 Z:\home\test1.ru\www\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php:67
2013-06-19 15:35:44 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php:67
2013-06-19 15:35:44 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('XDEBUG_SESSION', NULL)
#1 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('XDEBUG_SESSION')
#2 Z:\home\test1.ru\www\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php:67
2013-06-19 15:35:44 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php:67
2013-06-19 15:35:44 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('XDEBUG_SESSION', NULL)
#1 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('XDEBUG_SESSION')
#2 Z:\home\test1.ru\www\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php:67
2013-06-19 15:35:45 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php:67
2013-06-19 15:35:45 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('XDEBUG_SESSION', NULL)
#1 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('XDEBUG_SESSION')
#2 Z:\home\test1.ru\www\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php:67
2013-06-19 15:35:45 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php:67
2013-06-19 15:35:45 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('XDEBUG_SESSION', NULL)
#1 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('XDEBUG_SESSION')
#2 Z:\home\test1.ru\www\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php:67
2013-06-19 15:35:56 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php:67
2013-06-19 15:35:56 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('XDEBUG_SESSION', NULL)
#1 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('XDEBUG_SESSION')
#2 Z:\home\test1.ru\www\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php:67
2013-06-19 15:35:56 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php:67
2013-06-19 15:35:56 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('XDEBUG_SESSION', NULL)
#1 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('XDEBUG_SESSION')
#2 Z:\home\test1.ru\www\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php:67
2013-06-19 15:36:00 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php:67
2013-06-19 15:36:00 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('XDEBUG_SESSION', NULL)
#1 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('XDEBUG_SESSION')
#2 Z:\home\test1.ru\www\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php:67
2013-06-19 15:36:17 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php:67
2013-06-19 15:36:17 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('XDEBUG_SESSION', NULL)
#1 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('XDEBUG_SESSION')
#2 Z:\home\test1.ru\www\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php:67
2013-06-19 15:36:17 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php:67
2013-06-19 15:36:17 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('XDEBUG_SESSION', NULL)
#1 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('XDEBUG_SESSION')
#2 Z:\home\test1.ru\www\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php:67
2013-06-19 15:36:18 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php:67
2013-06-19 15:36:18 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('XDEBUG_SESSION', NULL)
#1 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('XDEBUG_SESSION')
#2 Z:\home\test1.ru\www\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php:67
2013-06-19 15:36:18 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php:67
2013-06-19 15:36:18 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('XDEBUG_SESSION', NULL)
#1 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('XDEBUG_SESSION')
#2 Z:\home\test1.ru\www\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php:67
2013-06-19 15:36:37 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php:67
2013-06-19 15:36:37 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('XDEBUG_SESSION', NULL)
#1 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('XDEBUG_SESSION')
#2 Z:\home\test1.ru\www\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php:67
2013-06-19 15:36:44 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php:67
2013-06-19 15:36:44 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('XDEBUG_SESSION', NULL)
#1 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('XDEBUG_SESSION')
#2 Z:\home\test1.ru\www\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php:67
2013-06-19 15:37:05 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php:67
2013-06-19 15:37:05 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('XDEBUG_SESSION', NULL)
#1 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('XDEBUG_SESSION')
#2 Z:\home\test1.ru\www\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php:67
2013-06-19 15:37:06 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php:67
2013-06-19 15:37:06 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('XDEBUG_SESSION', NULL)
#1 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('XDEBUG_SESSION')
#2 Z:\home\test1.ru\www\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php:67
2013-06-19 15:37:20 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php:67
2013-06-19 15:37:20 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('XDEBUG_SESSION', NULL)
#1 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('XDEBUG_SESSION')
#2 Z:\home\test1.ru\www\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php:67
2013-06-19 16:06:53 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ SYSPATH\classes\Kohana\Validation.php [ 495 ] in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php:495
2013-06-19 16:06:53 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php(495): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 495, Array)
#1 Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php(44): Kohana_Validation->errors('')
#2 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_registration()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php:495
2013-06-19 16:07:31 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ SYSPATH\classes\Kohana\Validation.php [ 495 ] in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php:495
2013-06-19 16:07:31 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php(495): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 495, Array)
#1 Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php(44): Kohana_Validation->errors('message')
#2 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_registration()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php:495
2013-06-19 16:07:31 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ SYSPATH\classes\Kohana\Validation.php [ 495 ] in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php:495
2013-06-19 16:07:31 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php(495): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 495, Array)
#1 Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php(44): Kohana_Validation->errors('message')
#2 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_registration()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php:495
2013-06-19 16:12:58 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ SYSPATH\classes\Kohana\Validation.php [ 495 ] in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php:495
2013-06-19 16:12:58 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php(495): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 495, Array)
#1 Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php(44): Kohana_Validation->errors('forms/registrat...')
#2 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_registration()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php:495
2013-06-19 16:12:59 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ SYSPATH\classes\Kohana\Validation.php [ 495 ] in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php:495
2013-06-19 16:12:59 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php(495): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 495, Array)
#1 Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php(44): Kohana_Validation->errors('forms/registrat...')
#2 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_registration()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php:495
2013-06-19 16:13:00 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ SYSPATH\classes\Kohana\Validation.php [ 495 ] in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php:495
2013-06-19 16:13:00 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php(495): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 495, Array)
#1 Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php(44): Kohana_Validation->errors('forms/registrat...')
#2 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_registration()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php:495
2013-06-19 16:13:07 --- CRITICAL: ErrorException [ 8 ]: Undefined index: password ~ APPPATH\classes\Controller\Index.php [ 50 ] in Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php:50
2013-06-19 16:13:07 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php(50): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 50, Array)
#1 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_registration()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php:50
2013-06-19 16:13:32 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ SYSPATH\classes\Kohana\Validation.php [ 495 ] in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php:495
2013-06-19 16:13:32 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php(495): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 495, Array)
#1 Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php(44): Kohana_Validation->errors('forms/registrat...')
#2 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_registration()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php:495
2013-06-19 16:15:46 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ SYSPATH\classes\Kohana\Validation.php [ 495 ] in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php:495
2013-06-19 16:15:46 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php(495): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 495, Array)
#1 Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php(44): Kohana_Validation->errors('registration')
#2 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_registration()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php:495
2013-06-19 16:15:47 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ SYSPATH\classes\Kohana\Validation.php [ 495 ] in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php:495
2013-06-19 16:15:47 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php(495): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 495, Array)
#1 Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php(44): Kohana_Validation->errors('registration')
#2 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_registration()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php:495
2013-06-19 16:19:04 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ SYSPATH\classes\Kohana\Validation.php [ 495 ] in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php:495
2013-06-19 16:19:04 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php(495): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 495, Array)
#1 Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php(45): Kohana_Validation->errors('registration')
#2 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_registration()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php:495
2013-06-19 16:21:21 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ SYSPATH\classes\Kohana\Validation.php [ 495 ] in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php:495
2013-06-19 16:21:21 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php(495): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 495, Array)
#1 Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php(44): Kohana_Validation->errors('registration')
#2 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_registration()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php:495
2013-06-19 16:21:21 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ SYSPATH\classes\Kohana\Validation.php [ 495 ] in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php:495
2013-06-19 16:21:21 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php(495): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 495, Array)
#1 Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php(44): Kohana_Validation->errors('registration')
#2 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_registration()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php:495
2013-06-19 16:21:22 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ SYSPATH\classes\Kohana\Validation.php [ 495 ] in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php:495
2013-06-19 16:21:22 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php(495): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 495, Array)
#1 Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php(44): Kohana_Validation->errors('registration')
#2 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_registration()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php:495
2013-06-19 16:26:29 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ SYSPATH\classes\Kohana\Validation.php [ 495 ] in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php:495
2013-06-19 16:26:29 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php(495): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 495, Array)
#1 Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php(44): Kohana_Validation->errors('registration')
#2 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_registration()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php:495
2013-06-19 16:26:29 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ SYSPATH\classes\Kohana\Validation.php [ 495 ] in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php:495
2013-06-19 16:26:29 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php(495): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 495, Array)
#1 Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php(44): Kohana_Validation->errors('registration')
#2 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_registration()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php:495
2013-06-19 16:26:30 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ SYSPATH\classes\Kohana\Validation.php [ 495 ] in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php:495
2013-06-19 16:26:30 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php(495): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 495, Array)
#1 Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php(44): Kohana_Validation->errors('registration')
#2 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_registration()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php:495
2013-06-19 16:27:02 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ SYSPATH\classes\Kohana\Validation.php [ 495 ] in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php:495
2013-06-19 16:27:02 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php(495): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 495, Array)
#1 Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php(44): Kohana_Validation->errors('registration')
#2 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_registration()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php:495
2013-06-19 16:27:06 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ SYSPATH\classes\Kohana\Validation.php [ 495 ] in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php:495
2013-06-19 16:27:06 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php(495): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 495, Array)
#1 Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php(44): Kohana_Validation->errors('registration1')
#2 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_registration()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php:495
2013-06-19 16:27:06 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ SYSPATH\classes\Kohana\Validation.php [ 495 ] in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php:495
2013-06-19 16:27:06 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php(495): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 495, Array)
#1 Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php(44): Kohana_Validation->errors('registration1')
#2 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_registration()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php:495
2013-06-19 16:27:07 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ SYSPATH\classes\Kohana\Validation.php [ 495 ] in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php:495
2013-06-19 16:27:07 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php(495): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 495, Array)
#1 Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php(44): Kohana_Validation->errors('registration1')
#2 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_registration()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php:495
2013-06-19 16:29:20 --- CRITICAL: ErrorException [ 8 ]: Undefined index: confirm ~ SYSPATH\classes\Kohana\Validation.php [ 495 ] in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php:495
2013-06-19 16:29:20 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php(495): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\test1.r...', 495, Array)
#1 Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php(45): Kohana_Validation->errors('registration')
#2 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_registration()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Validation.php:495
2013-06-19 18:24:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: existUser ~ APPPATH\classes\Controller\Index.php [ 51 ] in Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php:51
2013-06-19 18:24:14 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 51, Array)
#1 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_registration()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php:51
2013-06-19 18:24:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: existUser ~ APPPATH\classes\Controller\Index.php [ 51 ] in Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php:51
2013-06-19 18:24:38 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 51, Array)
#1 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_registration()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php:51
2013-06-19 18:31:01 --- CRITICAL: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ APPPATH\classes\Controller\Index.php [ 56 ] in :
2013-06-19 18:31:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-19 18:31:54 --- CRITICAL: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ APPPATH\classes\Controller\Index.php [ 56 ] in :
2013-06-19 18:31:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-19 18:31:55 --- CRITICAL: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ APPPATH\classes\Controller\Index.php [ 56 ] in :
2013-06-19 18:31:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-19 18:32:07 --- CRITICAL: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ APPPATH\classes\Controller\Index.php [ 56 ] in :
2013-06-19 18:32:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-19 18:58:35 --- CRITICAL: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH\classes\Controller\Index.php [ 29 ] in :
2013-06-19 18:58:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-19 18:58:46 --- CRITICAL: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\Kohana\Auth.php [ 155 ] in Z:\home\test1.ru\www\kohana\modules\auth\classes\Kohana\Auth\File.php:40
2013-06-19 18:58:46 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\modules\auth\classes\Kohana\Auth\File.php(40): Kohana_Auth->hash('123')
#1 Z:\home\test1.ru\www\kohana\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_File->_login('vasya', '123', false)
#2 Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php(29): Kohana_Auth->login('vasya', '123', false)
#3 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\kohana\modules\auth\classes\Kohana\Auth\File.php:40
2013-06-19 19:02:03 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php:67
2013-06-19 19:02:03 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('session')
#2 Z:\home\test1.ru\www\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in Z:\home\test1.ru\www\kohana\system\classes\Kohana\Cookie.php:67
2013-06-19 19:02:51 --- CRITICAL: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\Kohana\Auth.php [ 155 ] in Z:\home\test1.ru\www\kohana\modules\auth\classes\Kohana\Auth\File.php:40
2013-06-19 19:02:51 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\modules\auth\classes\Kohana\Auth\File.php(40): Kohana_Auth->hash('123')
#1 Z:\home\test1.ru\www\kohana\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_File->_login('vasya', '123', false)
#2 Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php(29): Kohana_Auth->login('vasya', '123', false)
#3 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\kohana\modules\auth\classes\Kohana\Auth\File.php:40
2013-06-19 19:04:36 --- CRITICAL: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\Kohana\Auth.php [ 155 ] in Z:\home\test1.ru\www\kohana\modules\auth\classes\Kohana\Auth\File.php:40
2013-06-19 19:04:36 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\modules\auth\classes\Kohana\Auth\File.php(40): Kohana_Auth->hash('123')
#1 Z:\home\test1.ru\www\kohana\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_File->_login('vasya', '123', false)
#2 Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php(29): Kohana_Auth->login('vasya', '123', false)
#3 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\kohana\modules\auth\classes\Kohana\Auth\File.php:40
2013-06-19 19:04:37 --- CRITICAL: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\Kohana\Auth.php [ 155 ] in Z:\home\test1.ru\www\kohana\modules\auth\classes\Kohana\Auth\File.php:40
2013-06-19 19:04:37 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\modules\auth\classes\Kohana\Auth\File.php(40): Kohana_Auth->hash('123')
#1 Z:\home\test1.ru\www\kohana\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_File->_login('vasya', '123', false)
#2 Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php(29): Kohana_Auth->login('vasya', '123', false)
#3 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\kohana\modules\auth\classes\Kohana\Auth\File.php:40
2013-06-19 19:04:38 --- CRITICAL: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\Kohana\Auth.php [ 155 ] in Z:\home\test1.ru\www\kohana\modules\auth\classes\Kohana\Auth\File.php:40
2013-06-19 19:04:38 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\modules\auth\classes\Kohana\Auth\File.php(40): Kohana_Auth->hash('123')
#1 Z:\home\test1.ru\www\kohana\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_File->_login('vasya', '123', false)
#2 Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php(29): Kohana_Auth->login('vasya', '123', false)
#3 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\kohana\modules\auth\classes\Kohana\Auth\File.php:40
2013-06-19 19:04:38 --- CRITICAL: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\Kohana\Auth.php [ 155 ] in Z:\home\test1.ru\www\kohana\modules\auth\classes\Kohana\Auth\File.php:40
2013-06-19 19:04:38 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\modules\auth\classes\Kohana\Auth\File.php(40): Kohana_Auth->hash('123')
#1 Z:\home\test1.ru\www\kohana\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_File->_login('vasya', '123', false)
#2 Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php(29): Kohana_Auth->login('vasya', '123', false)
#3 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\kohana\modules\auth\classes\Kohana\Auth\File.php:40
2013-06-19 19:04:38 --- CRITICAL: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\Kohana\Auth.php [ 155 ] in Z:\home\test1.ru\www\kohana\modules\auth\classes\Kohana\Auth\File.php:40
2013-06-19 19:04:38 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\modules\auth\classes\Kohana\Auth\File.php(40): Kohana_Auth->hash('123')
#1 Z:\home\test1.ru\www\kohana\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_File->_login('vasya', '123', false)
#2 Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php(29): Kohana_Auth->login('vasya', '123', false)
#3 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\kohana\modules\auth\classes\Kohana\Auth\File.php:40
2013-06-19 19:06:28 --- CRITICAL: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\Kohana\Auth.php [ 155 ] in Z:\home\test1.ru\www\kohana\modules\auth\classes\Kohana\Auth\File.php:40
2013-06-19 19:06:28 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\modules\auth\classes\Kohana\Auth\File.php(40): Kohana_Auth->hash('123')
#1 Z:\home\test1.ru\www\kohana\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_File->_login('vasya', '123', false)
#2 Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php(29): Kohana_Auth->login('vasya', '123', false)
#3 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\kohana\modules\auth\classes\Kohana\Auth\File.php:40
2013-06-19 19:10:05 --- CRITICAL: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\Kohana\Auth.php [ 155 ] in Z:\home\test1.ru\www\kohana\modules\auth\classes\Kohana\Auth\File.php:40
2013-06-19 19:10:05 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\modules\auth\classes\Kohana\Auth\File.php(40): Kohana_Auth->hash('123')
#1 Z:\home\test1.ru\www\kohana\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_File->_login('vasya', '123', false)
#2 Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php(29): Kohana_Auth->login('vasya', '123', false)
#3 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\test1.ru\www\kohana\modules\auth\classes\Kohana\Auth\File.php:40
2013-06-19 19:11:38 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH\orm\classes\Kohana\Auth\ORM.php [ 76 ] in :
2013-06-19 19:11:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-19 19:35:32 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'login' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`logins` AS `logins`, `user`.`last_login` AS `last_login` FROM `users` AS `user` WHERE `login` = 'newuser' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\www\kohana\modules\database\classes\Kohana\Database\Query.php:251
2013-06-19 19:35:32 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 Z:\home\test1.ru\www\kohana\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\www\kohana\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php(52): Kohana_ORM->find()
#4 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_registration()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\www\kohana\modules\database\classes\Kohana\Database\Query.php:251
2013-06-19 20:14:50 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH\views\template.php [ 18 ] in :
2013-06-19 20:14:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-19 20:14:56 --- CRITICAL: ErrorException [ 2048 ]: Non-static method Kohana_Request::uri() should not be called statically ~ APPPATH\views\template.php [ 16 ] in Z:\home\test1.ru\www\kohana\application\views\template.php:16
2013-06-19 20:14:56 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\application\views\template.php(16): Kohana_Core::error_handler(2048, 'Non-static meth...', 'Z:\home\test1.r...', 16, Array)
#1 Z:\home\test1.ru\www\kohana\application\views\template.php(16): Kohana_Request::uri()
#2 Z:\home\test1.ru\www\kohana\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#3 Z:\home\test1.ru\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#4 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#8 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\test1.ru\www\kohana\application\views\template.php:16
2013-06-19 21:03:57 --- CRITICAL: Database_Exception [ 1406 ]: Data too long for column 'token' at row 1 [ INSERT INTO `user_tokens` (`user_id`, `user_agent`, `expires`, `token`, `created`) VALUES ('4', '68e44575b32fa10b9fbe313407ce3b851d5eb85e', 1372863837, 'afc6e92cea6dae8ef6332b159fbc290a4ff6b281', 1371654237) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\www\kohana\modules\database\classes\Kohana\Database\Query.php:251
2013-06-19 21:03:57 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\test1.ru\www\kohana\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\www\kohana\modules\orm\classes\Model\Auth\User\Token.php(63): Kohana_ORM->create(NULL)
#3 Z:\home\test1.ru\www\kohana\modules\orm\classes\Kohana\Auth\ORM.php(100): Model_Auth_User_Token->create()
#4 Z:\home\test1.ru\www\kohana\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_ORM->_login('test1', '123', true)
#5 Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php(24): Kohana_Auth->login('test1', '123', true)
#6 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#9 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in Z:\home\test1.ru\www\kohana\modules\database\classes\Kohana\Database\Query.php:251
2013-06-19 21:17:32 --- CRITICAL: Database_Exception [ 1364 ]: Field 'user_id' doesn't have a default value [ INSERT INTO `messages` (`body`) VALUES ('фвафыва') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\test1.ru\www\kohana\modules\database\classes\Kohana\Database\Query.php:251
2013-06-19 21:17:32 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `me...', false, Array)
#1 Z:\home\test1.ru\www\kohana\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\test1.ru\www\kohana\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\test1.ru\www\kohana\application\classes\Controller\Index.php(16): Kohana_ORM->save()
#4 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\test1.ru\www\kohana\modules\database\classes\Kohana\Database\Query.php:251
2013-06-19 21:29:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: messages ~ APPPATH\views\index.php [ 22 ] in Z:\home\test1.ru\www\kohana\application\views\index.php:22
2013-06-19 21:29:31 --- DEBUG: #0 Z:\home\test1.ru\www\kohana\application\views\index.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\test1.r...', 22, Array)
#1 Z:\home\test1.ru\www\kohana\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#2 Z:\home\test1.ru\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#3 Z:\home\test1.ru\www\kohana\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\test1.ru\www\kohana\application\views\template.php(30): Kohana_View->__toString()
#5 Z:\home\test1.ru\www\kohana\system\classes\Kohana\View.php(61): include('Z:\home\test1.r...')
#6 Z:\home\test1.ru\www\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\test1.r...', Array)
#7 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\test1.ru\www\kohana\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\test1.ru\www\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\test1.ru\www\kohana\application\views\index.php:22