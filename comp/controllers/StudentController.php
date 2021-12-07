<?php
namespace ninydev\Controllers;

use ninydev\Config\App;
use ninydev\Config\DB;

class StudentController
{
    public function getForm(){

        $res = "<form action='". App::$serverUrl . "'>";
        $res.= "<input type='text' name='group' />";
        $res.= "<input type='submit' name='getAll' value='Get Group' />";
        $res.= "</form>";

        return $res;
    }

    public function buildResponse($data){
        if (!isset($data["getAll"])) {
            return "<h1> Нет команды на запрос</h1>";
        }

        $grpName = $data['group'];

        $sqlStr = "SELECT * FROM `students` 
            JOIN `groups` ON `students`.`group_id` = `groups`.`id`
            WHERE `groups`.`name` = \"$grpName\"";

        $result = DB::getInstance()->query($sqlStr);

        var_dump($result);
    }

}