<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-10-20 22:50:32 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2012-10-20 22:50:32 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /mnt/hgfs/geo/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /mnt/hgfs/geo/system/classes/kohana/request.php(202): Kohana_Cookie::get('session')
#2 /mnt/hgfs/geo/index.php(108): Kohana_Request::factory()
#3 {main}
2012-10-20 22:50:51 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2012-10-20 22:50:51 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /mnt/hgfs/geo/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /mnt/hgfs/geo/system/classes/kohana/request.php(202): Kohana_Cookie::get('session')
#2 /mnt/hgfs/geo/index.php(108): Kohana_Request::factory()
#3 {main}
2012-10-20 22:57:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL welcome/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-10-20 22:57:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL welcome/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /mnt/hgfs/geo/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /mnt/hgfs/geo/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-20 23:16:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/home.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-20 23:16:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/home.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-20 23:18:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-20 23:18:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-20 23:18:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/home.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-20 23:18:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/home.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-20 23:19:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/home.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-20 23:19:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/home.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-20 23:19:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-20 23:19:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-20 23:19:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-20 23:19:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-20 23:19:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/home.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-20 23:19:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/home.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-20 23:19:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-20 23:19:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-20 23:19:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/home.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-20 23:19:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/home.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-20 23:19:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-20 23:19:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-20 23:19:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/home.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-20 23:19:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/home.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-20 23:19:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-20 23:19:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-20 23:19:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/home.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-20 23:19:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/home.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-20 23:19:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-20 23:19:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-20 23:19:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/home.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-20 23:19:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/home.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-20 23:20:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/home.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-20 23:20:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/home.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-20 23:20:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-20 23:20:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-20 23:21:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-20 23:21:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mnt/hgfs/geo/application//assets/css/home.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-20 23:21:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mnt/hgfs/geo/application//assets/css/home.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-20 23:21:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-20 23:21:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-20 23:21:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-20 23:21:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mnt/hgfs/geo/application//assets/css/home.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-20 23:21:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mnt/hgfs/geo/application//assets/css/home.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-20 23:21:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mnt/hgfs/geo/application//assets/css/home.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-20 23:21:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mnt/hgfs/geo/application//assets/css/home.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-20 23:21:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-20 23:21:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-20 23:23:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-20 23:23:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-20 23:24:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-20 23:24:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-20 23:24:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-20 23:24:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-20 23:24:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-20 23:24:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-20 23:24:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-20 23:24:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-20 23:24:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-20 23:24:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-20 23:25:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-20 23:25:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-20 23:25:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-20 23:25:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-20 23:25:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-20 23:25:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-20 23:25:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-20 23:25:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-20 23:25:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-20 23:25:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-20 23:35:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/libs/bootstrap/js/jquery.inview.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-20 23:35:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/libs/bootstrap/js/jquery.inview.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-20 23:35:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/libs/bootstrap/js/jquery.isotope.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-20 23:35:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/libs/bootstrap/js/jquery.isotope.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-20 23:36:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/libs/bootstrap/js/jquery.inview.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-20 23:36:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/libs/bootstrap/js/jquery.inview.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-20 23:36:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/libs/bootstrap/js/jquery.isotope.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-20 23:36:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/libs/bootstrap/js/jquery.isotope.min.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-20 23:38:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/libs/bootstrap/js/bootstrap.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-20 23:38:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/libs/bootstrap/js/bootstrap.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-20 23:38:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/libs/bootstrap/js/bootstrap.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-20 23:38:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/libs/bootstrap/js/bootstrap.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-20 23:38:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/libs/bootstrap/js/bootstrap.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2012-10-20 23:38:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/libs/bootstrap/js/bootstrap.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /mnt/hgfs/geo/index.php(109): Kohana_Request->execute()
#1 {main}