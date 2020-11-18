<?php 

// DB Params
define('DB_HOST', "mysql");
define('DB_USER', $_ENV["DB_ROOT_USER"]);
define('DB_PWD', $_ENV["DB_ROOT_PWD"]);
define('DB_NAME', $_ENV["DB_NAME"]);

// App Root
define('APPROOT', dirname(dirname(__FILE__)));

// URL Root
define('URLROOT', $_ENV["URLROOT"]);

// Site Name
define('SITENAME', $_ENV["APPNAME"]);