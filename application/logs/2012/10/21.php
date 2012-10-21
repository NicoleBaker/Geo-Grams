<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-10-21 08:39:50 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/model/instagram.php [ 10 ]
2012-10-21 08:39:50 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/model/instagram.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-21 08:40:22 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/model/instagram.php [ 10 ]
2012-10-21 08:40:22 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/model/instagram.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-21 08:40:43 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/model/instagram.php [ 11 ]
2012-10-21 08:40:43 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/model/instagram.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-21 08:43:53 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/model/instagram.php [ 16 ]
2012-10-21 08:43:53 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/model/instagram.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-21 08:46:26 --- ERROR: ErrorException [ 1 ]: Cannot access private property Model_Instagram::$key ~ APPPATH/classes/controller/home.php [ 8 ]
2012-10-21 08:46:26 --- STRACE: ErrorException [ 1 ]: Cannot access private property Model_Instagram::$key ~ APPPATH/classes/controller/home.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-21 08:47:32 --- ERROR: ErrorException [ 1 ]: Cannot access private property Model_Instagram::$key ~ APPPATH/classes/controller/home.php [ 8 ]
2012-10-21 08:47:32 --- STRACE: ErrorException [ 1 ]: Cannot access private property Model_Instagram::$key ~ APPPATH/classes/controller/home.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-21 08:47:47 --- ERROR: ErrorException [ 1 ]: Cannot access private property Model_Instagram::$key ~ APPPATH/classes/controller/home.php [ 8 ]
2012-10-21 08:47:47 --- STRACE: ErrorException [ 1 ]: Cannot access private property Model_Instagram::$key ~ APPPATH/classes/controller/home.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-21 08:53:40 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_PRIVATE ~ APPPATH/classes/model/instagram.php [ 7 ]
2012-10-21 08:53:40 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_PRIVATE ~ APPPATH/classes/model/instagram.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-21 09:04:03 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/model/instagram.php [ 43 ]
2012-10-21 09:04:03 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/model/instagram.php [ 43 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-21 09:07:24 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Instagram::serach_location() ~ APPPATH/classes/controller/home.php [ 8 ]
2012-10-21 09:07:24 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Instagram::serach_location() ~ APPPATH/classes/controller/home.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-21 09:10:56 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Model_Instagram::search_location(), called in /mnt/hgfs/geo/application/classes/controller/home.php on line 8 and defined ~ APPPATH/classes/model/instagram.php [ 46 ]
2012-10-21 09:10:56 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Model_Instagram::search_location(), called in /mnt/hgfs/geo/application/classes/controller/home.php on line 8 and defined ~ APPPATH/classes/model/instagram.php [ 46 ]
--
#0 /mnt/hgfs/geo/application/classes/model/instagram.php(46): Kohana_Core::error_handler(2, 'Missing argumen...', '/mnt/hgfs/geo/a...', 46, Array)
#1 /mnt/hgfs/geo/application/classes/controller/home.php(8): Model_Instagram->search_location()
#2 [internal function]: Controller_Home->action_index()
#3 /mnt/hgfs/geo/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#4 /mnt/hgfs/geo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /mnt/hgfs/geo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#7 {main}
2012-10-21 09:13:24 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Instagram::get_clinet_id() ~ APPPATH/classes/model/instagram.php [ 51 ]
2012-10-21 09:13:24 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Instagram::get_clinet_id() ~ APPPATH/classes/model/instagram.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-21 09:27:18 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/model/instagram.php [ 68 ]
2012-10-21 09:27:18 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/model/instagram.php [ 68 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-21 09:27:45 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$error_message ~ APPPATH/classes/model/instagram.php [ 79 ]
2012-10-21 09:27:45 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$error_message ~ APPPATH/classes/model/instagram.php [ 79 ]
--
#0 /mnt/hgfs/geo/application/classes/model/instagram.php(79): Kohana_Core::error_handler(8, 'Undefined prope...', '/mnt/hgfs/geo/a...', 79, Array)
#1 /mnt/hgfs/geo/application/classes/model/instagram.php(60): Model_Instagram->check_response(Object(stdClass))
#2 /mnt/hgfs/geo/application/classes/controller/home.php(8): Model_Instagram->search_location(Array)
#3 [internal function]: Controller_Home->action_index()
#4 /mnt/hgfs/geo/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#5 /mnt/hgfs/geo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /mnt/hgfs/geo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-21 09:28:43 --- ERROR: Instagram search_location code: 400 Type: OAuthParameterException Message: "client_id" or "access_token" URL parameter missing. This OAuth request requires either a "client_id" or "access_token" URL parameter.
2012-10-21 09:57:01 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH/classes/controller/home.php [ 10 ]
2012-10-21 09:57:01 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH/classes/controller/home.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-21 09:57:05 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$id ~ APPPATH/classes/controller/home.php [ 9 ]
2012-10-21 09:57:05 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$id ~ APPPATH/classes/controller/home.php [ 9 ]
--
#0 /mnt/hgfs/geo/application/classes/controller/home.php(9): Kohana_Core::error_handler(8, 'Undefined prope...', '/mnt/hgfs/geo/a...', 9, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /mnt/hgfs/geo/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /mnt/hgfs/geo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/geo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-21 09:58:38 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/controller/home.php [ 9 ]
2012-10-21 09:58:38 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/controller/home.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-21 10:01:22 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$id ~ APPPATH/classes/controller/home.php [ 9 ]
2012-10-21 10:01:22 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$id ~ APPPATH/classes/controller/home.php [ 9 ]
--
#0 /mnt/hgfs/geo/application/classes/controller/home.php(9): Kohana_Core::error_handler(8, 'Undefined prope...', '/mnt/hgfs/geo/a...', 9, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /mnt/hgfs/geo/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /mnt/hgfs/geo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/geo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-21 10:02:02 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/model/instagram.php [ 78 ]
2012-10-21 10:02:02 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/model/instagram.php [ 78 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-21 10:02:22 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/home.php [ 9 ]
2012-10-21 10:02:22 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/home.php [ 9 ]
--
#0 /mnt/hgfs/geo/application/classes/controller/home.php(9): Kohana_Core::error_handler(8, 'Trying to get p...', '/mnt/hgfs/geo/a...', 9, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /mnt/hgfs/geo/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /mnt/hgfs/geo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/geo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-21 10:02:35 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/home.php [ 9 ]
2012-10-21 10:02:35 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/home.php [ 9 ]
--
#0 /mnt/hgfs/geo/application/classes/controller/home.php(9): Kohana_Core::error_handler(8, 'Trying to get p...', '/mnt/hgfs/geo/a...', 9, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /mnt/hgfs/geo/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /mnt/hgfs/geo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/geo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-21 10:02:51 --- ERROR: Instagram search_location code: 400 Type: OAuthParameterException Message: "client_id" or "access_token" URL parameter missing. This OAuth request requires either a "client_id" or "access_token" URL parameter.
2012-10-21 10:03:15 --- ERROR: Instagram search_location code: 400 Type: APIInvalidParametersError Message: missing ll (lat,lng) or foursquare_id
2012-10-21 10:03:15 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/home.php [ 9 ]
2012-10-21 10:03:15 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/home.php [ 9 ]
--
#0 /mnt/hgfs/geo/application/classes/controller/home.php(9): Kohana_Core::error_handler(8, 'Trying to get p...', '/mnt/hgfs/geo/a...', 9, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /mnt/hgfs/geo/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /mnt/hgfs/geo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/geo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-21 10:03:22 --- ERROR: Instagram search_location code: 400 Type: OAuthParameterException Message: "client_id" or "access_token" URL parameter missing. This OAuth request requires either a "client_id" or "access_token" URL parameter.
2012-10-21 10:07:05 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/home.php [ 9 ]
2012-10-21 10:07:05 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/home.php [ 9 ]
--
#0 /mnt/hgfs/geo/application/classes/controller/home.php(9): Kohana_Core::error_handler(8, 'Trying to get p...', '/mnt/hgfs/geo/a...', 9, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /mnt/hgfs/geo/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#3 /mnt/hgfs/geo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/geo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-21 10:18:17 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ APPPATH/classes/model/instagram.php [ 110 ]
2012-10-21 10:18:17 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ APPPATH/classes/model/instagram.php [ 110 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-21 10:20:32 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::count() ~ APPPATH/classes/controller/home.php [ 13 ]
2012-10-21 10:20:32 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::count() ~ APPPATH/classes/controller/home.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-21 10:21:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: images ~ APPPATH/views/home.php [ 30 ]
2012-10-21 10:21:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: images ~ APPPATH/views/home.php [ 30 ]
--
#0 /mnt/hgfs/geo/application/views/home.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', '/mnt/hgfs/geo/a...', 30, Array)
#1 /mnt/hgfs/geo/system/classes/kohana/view.php(61): include('/mnt/hgfs/geo/a...')
#2 /mnt/hgfs/geo/system/classes/kohana/view.php(343): Kohana_View::capture('/mnt/hgfs/geo/a...', Array)
#3 /mnt/hgfs/geo/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /mnt/hgfs/geo/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /mnt/hgfs/geo/application/classes/controller/home.php(16): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Home->action_index()
#7 /mnt/hgfs/geo/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#8 /mnt/hgfs/geo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /mnt/hgfs/geo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#11 {main}
2012-10-21 10:27:22 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ',', expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH/views/home.php [ 31 ]
2012-10-21 10:27:22 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ',', expecting T_STRING or T_VARIABLE or '{' or '$' ~ APPPATH/views/home.php [ 31 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-21 10:29:21 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$imagesthumbanil ~ APPPATH/views/home.php [ 31 ]
2012-10-21 10:29:21 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$imagesthumbanil ~ APPPATH/views/home.php [ 31 ]
--
#0 /mnt/hgfs/geo/application/views/home.php(31): Kohana_Core::error_handler(8, 'Undefined prope...', '/mnt/hgfs/geo/a...', 31, Array)
#1 /mnt/hgfs/geo/system/classes/kohana/view.php(61): include('/mnt/hgfs/geo/a...')
#2 /mnt/hgfs/geo/system/classes/kohana/view.php(343): Kohana_View::capture('/mnt/hgfs/geo/a...', Array)
#3 /mnt/hgfs/geo/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /mnt/hgfs/geo/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /mnt/hgfs/geo/application/classes/controller/home.php(17): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Home->action_index()
#7 /mnt/hgfs/geo/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#8 /mnt/hgfs/geo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /mnt/hgfs/geo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#11 {main}
2012-10-21 10:29:43 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$thumbanil ~ APPPATH/views/home.php [ 31 ]
2012-10-21 10:29:43 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$thumbanil ~ APPPATH/views/home.php [ 31 ]
--
#0 /mnt/hgfs/geo/application/views/home.php(31): Kohana_Core::error_handler(8, 'Undefined prope...', '/mnt/hgfs/geo/a...', 31, Array)
#1 /mnt/hgfs/geo/system/classes/kohana/view.php(61): include('/mnt/hgfs/geo/a...')
#2 /mnt/hgfs/geo/system/classes/kohana/view.php(343): Kohana_View::capture('/mnt/hgfs/geo/a...', Array)
#3 /mnt/hgfs/geo/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /mnt/hgfs/geo/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /mnt/hgfs/geo/application/classes/controller/home.php(17): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Home->action_index()
#7 /mnt/hgfs/geo/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Home))
#8 /mnt/hgfs/geo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /mnt/hgfs/geo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#11 {main}
2012-10-21 10:54:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-21 10:54:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /mnt/hgfs/geo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/geo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-21 10:55:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-21 10:55:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /mnt/hgfs/geo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/geo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-21 10:55:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL welcome was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-21 10:55:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL welcome was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /mnt/hgfs/geo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/geo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-21 11:08:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL welcome was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-21 11:08:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL welcome was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /mnt/hgfs/geo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/geo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-21 11:08:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL base/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2012-10-21 11:08:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL base/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /mnt/hgfs/geo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/geo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-21 11:08:36 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_PRIVATE, expecting ',' or ';' ~ APPPATH/classes/model/foursquare.php [ 8 ]
2012-10-21 11:08:36 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_PRIVATE, expecting ',' or ';' ~ APPPATH/classes/model/foursquare.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-21 11:08:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: location_id ~ APPPATH/classes/controller/base.php [ 13 ]
2012-10-21 11:08:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: location_id ~ APPPATH/classes/controller/base.php [ 13 ]
--
#0 /mnt/hgfs/geo/application/classes/controller/base.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', '/mnt/hgfs/geo/a...', 13, Array)
#1 [internal function]: Controller_Base->action_index()
#2 /mnt/hgfs/geo/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Base))
#3 /mnt/hgfs/geo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/geo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-21 11:11:25 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Foursquare::$v ~ APPPATH/classes/model/foursquare.php [ 43 ]
2012-10-21 11:11:25 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Foursquare::$v ~ APPPATH/classes/model/foursquare.php [ 43 ]
--
#0 /mnt/hgfs/geo/application/classes/model/foursquare.php(43): Kohana_Core::error_handler(8, 'Undefined prope...', '/mnt/hgfs/geo/a...', 43, Array)
#1 /mnt/hgfs/geo/application/classes/model/foursquare.php(56): Model_Foursquare->get_path()
#2 /mnt/hgfs/geo/application/classes/controller/base.php(12): Model_Foursquare->search_venue(Array)
#3 [internal function]: Controller_Base->action_index()
#4 /mnt/hgfs/geo/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Base))
#5 /mnt/hgfs/geo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /mnt/hgfs/geo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#8 {main}
2012-10-21 11:19:19 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ELSE, expecting T_FUNCTION ~ APPPATH/classes/model/foursquare.php [ 85 ]
2012-10-21 11:19:19 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ELSE, expecting T_FUNCTION ~ APPPATH/classes/model/foursquare.php [ 85 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-10-21 11:20:52 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/base.php [ 12 ]
2012-10-21 11:20:52 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/base.php [ 12 ]
--
#0 /mnt/hgfs/geo/application/classes/controller/base.php(12): Kohana_Core::error_handler(8, 'Trying to get p...', '/mnt/hgfs/geo/a...', 12, Array)
#1 [internal function]: Controller_Base->action_index()
#2 /mnt/hgfs/geo/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Base))
#3 /mnt/hgfs/geo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /mnt/hgfs/geo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#6 {main}
2012-10-21 11:25:11 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/home.php [ 33 ]
2012-10-21 11:25:11 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/home.php [ 33 ]
--
#0 /mnt/hgfs/geo/application/views/home.php(33): Kohana_Core::error_handler(8, 'Trying to get p...', '/mnt/hgfs/geo/a...', 33, Array)
#1 /mnt/hgfs/geo/system/classes/kohana/view.php(61): include('/mnt/hgfs/geo/a...')
#2 /mnt/hgfs/geo/system/classes/kohana/view.php(343): Kohana_View::capture('/mnt/hgfs/geo/a...', Array)
#3 /mnt/hgfs/geo/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /mnt/hgfs/geo/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /mnt/hgfs/geo/application/classes/controller/base.php(27): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Base->action_index()
#7 /mnt/hgfs/geo/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Base))
#8 /mnt/hgfs/geo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /mnt/hgfs/geo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#11 {main}
2012-10-21 11:26:09 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/home.php [ 33 ]
2012-10-21 11:26:09 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/home.php [ 33 ]
--
#0 /mnt/hgfs/geo/application/views/home.php(33): Kohana_Core::error_handler(8, 'Trying to get p...', '/mnt/hgfs/geo/a...', 33, Array)
#1 /mnt/hgfs/geo/system/classes/kohana/view.php(61): include('/mnt/hgfs/geo/a...')
#2 /mnt/hgfs/geo/system/classes/kohana/view.php(343): Kohana_View::capture('/mnt/hgfs/geo/a...', Array)
#3 /mnt/hgfs/geo/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /mnt/hgfs/geo/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /mnt/hgfs/geo/application/classes/controller/base.php(27): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Base->action_index()
#7 /mnt/hgfs/geo/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Base))
#8 /mnt/hgfs/geo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /mnt/hgfs/geo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#11 {main}
2012-10-21 11:28:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-21 11:28:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /mnt/hgfs/geo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/geo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#3 {main}