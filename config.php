<?php
require 'environment.php';
$config = array();
if (ENVIRONMENT == 'development') {
    define("BASE_URL", "http://localhost/loja_virtual/");
    $config['dbname'] = 'testes';
    $config['dbhost'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
} else {
    define("BASE_URL", "http://www.site.com/");
    $config['dbname'] = 'dbname';
    $config['dbhost'] = 'dbhost';
    $config['dbuser'] = 'dbuser';
    $config['dbpass'] = 'dbbass';
}
global $db;
try {
    $db = new PDO("mysql:dbname=" . $config['dbname'] . ";host=" . $config['dbhost'], $config['dbuser'], $config['dbpass']);
} catch (PDOException $e) {
    echo "ERROR: " . $e->getMessage();
    exit;
}
