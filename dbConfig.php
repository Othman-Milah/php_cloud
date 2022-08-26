<?php

//include configuration file
require_once 'config.php';

//create database connection
$db = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

//CHECK CONNECTION
if($db->connect_error){
    die('connection failed '. $db->connect_error);
}