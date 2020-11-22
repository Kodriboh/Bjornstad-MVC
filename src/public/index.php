<?php 

require_once '../vendor/autoload.php';

$dotenv = \Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

require_once '../app/bootstrap.php';

// Init Core Library
$init = new Core;