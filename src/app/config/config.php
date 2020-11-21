<?php 
// DotEnv must be required and enabled to use environment variables

// DB Params
define('DB_HOST', 'mysql');
define('DB_PORT', '3306');

define('DB_NAME', 'app_db');
define('DB_ROOT_USER', 'root');
define('DB_ROOT_PWD', 'root');

define('DB_USER', 'lmccann');
define('DB_PWD', '1234');


// App Root
define('APPROOT', dirname(dirname(__FILE__)));

// URL Root
define('URLROOT', 'http://localhost:8080');

// Site Name
define('SITENAME', 'Bjornstad');