<?php
namespace ninydev\Controllers;

use ninydev\Config\App;

class StudentController
{
    public function getForm(){

        $res = "<form action='". App::$serverUrl . "'>";
        $res.= "<input type='text' name='group' />";
        $res.= "<input type='submit' name='group' value='Get Group' />";
        $res.= "</form>";

        return $res;
    }

    public function buildRequest(){

    }

}