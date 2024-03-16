<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include './src/DB.php';
include './src/Manager.php';



$fetch = Manager::allUsers();

print_r($fetch);