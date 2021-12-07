<?php
require_once (__DIR__ ."/../vendor/autoload.php");

$c = new \ninydev\Controllers\StudentController();

echo $c->getForm();
echo $c->buildResponse($_GET);



//// # ninydev.Models.Entity.helloWorld();
//\ninydev\Models\Entity::helloWorld();
//
//// using ninydev.Models;
//// Entity.helloWorld();
//use ninydev\Models\Entity;
//Entity::helloWorld();
//
//
//
//
//// \ninydev\Controllers\EntityController::helloWorld();




