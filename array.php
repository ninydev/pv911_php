<?php

$arr = [];
$arr1 = ["key" => "val"];
$arr2 = array("key" => "val");

$arr["key"] = "val";

class A{
    public $a = 10;
}
$obj = new A;
$arr["class"] = $obj;

$fr = array("апельсин", "банан");

$arr["arr"] = $fr;

// array_push($arr, "element 0");
// array_push($arr, "element 1");

// $arr["key2"] = "val2";

// array_push($arr, "element 2");
// array_push($arr, "element 3");
$arr[55] = 5;
$arr[] = "element 55";
$arr[4] = 54.5;
$arr[] = "element 55+";
echo ("Оригинал:\n");
print_r($arr);
//
//if(isset ($arr[50])) {
//    echo "50 доступен";
//} else {
//    echo "50 -";
//}

//if( is_array($arr)) { echo " Это Массив \n";}
//$arr = 1;
//if(is_iterable($arr)) {echo "Он итерируемый \n";}
//
// var_dump($arr);

// Плохой вариант обхода массива - допутим только если ключи - это точно числа
//for($i = 0; $i < sizeof($arr); $i++){
//    echo "\n" .  $i ." " . $arr[$i];
//}

//foreach ($arr as $key => $value) {
//    echo "\n" .  $key ." " . $value;
//}



//array_pop($arr);
//
//print_r($arr);
//
//array_shift($arr);
//print_r($arr);

