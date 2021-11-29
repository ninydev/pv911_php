<?php

namespace MyFirstNameSpace;

class MyFirstClass
{
    private function Method(){

    }

    public function MethodPublic(){

    }

    static function MyFun(){
        echo "<br>Test Static<br>";
        print("Send" . "Test <br>");
    }


    public function __construct()
    {
        echo " Запустился конструктор ";
    }

    function __destruct() {
        print "Уничтожается " . __CLASS__  . "\n";
    }

}

