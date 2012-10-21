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