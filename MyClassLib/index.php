<?php

spl_autoload_register(function ($class_name) {
    echo "<br> Ищу класс " . $class_name ." </br>";
    //echo __DIR__ . "/" . $class_name . '.php <br>';
    require_once __DIR__ . "/" . $class_name . '.php';
});


$obj = new \Nykytin\Oleksandr\Hello();




//
//// require_once ("Child1.php");
//// require_once ("MyFirstClass.php");
//
//
//
//\MyFirstNameSpace\MyFirstClass::MyFun();
//
//$obj = new \MyFirstNameSpace\MyFirstClass();
//$c = new \MyFirstNameSpace\Child1();
