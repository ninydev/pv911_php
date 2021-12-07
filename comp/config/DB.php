<?php

namespace ninydev\Config;



class DB
{
    static string $hostName = "localhost";
    static string $port = "3306";
    static string $userName = "root";
    static string $password = "";
    static string $database = "pv911";

    private static $dbInstance = null;
    public static function getInstance (){
        if (DB::$dbInstance == null) {
            DB::$dbInstance = new \mysqli(DB::$hostName, DB::$userName, DB::$password, DB::$database);
            if (DB::$dbInstance  -> connect_errno) {
                echo "Failed to connect to MySQL: " . DB::$dbInstance  -> connect_error;
                exit();
            }

        }
    return DB::$dbInstance;
    }
}


