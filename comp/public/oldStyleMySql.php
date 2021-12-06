<?php

use ninydev\Config\DB;

require_once (__DIR__ ."/../vendor/autoload.php");



$mysqli = new mysqli(DB::$hostName, DB::$userName, DB::$password, DB::$database);
// Check connection
if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}




// CREATE
$sqlStr = 'INSERT INTO  posts (title, body) VALUES ("title", "body")';
$result = $mysqli->query($sqlStr);
var_dump($result);

// READ
$sqlStr = "SELECT * FROM post";
$result = $mysqli->query($sqlStr);
var_dump($result);

// UPDATE
$sqlStr = "UPDATE `posts` SET `title`='New Title' WHERE `id` = 1";
$result = $mysqli->query($sqlStr);
var_dump($result);


// DELETE
$sqlStr = "DELETE FROM `posts` WHERE `id` = 10";
$result = $mysqli->query($sqlStr);
var_dump($result);



