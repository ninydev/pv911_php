<?php

use ninydev\Config\DB;

require_once (__DIR__ ."/../vendor/autoload.php");



$mysqli = new mysqli(DB::$hostName, DB::$userName, DB::$password, DB::$database);
