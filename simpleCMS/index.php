<?php

require_once ("lib/buildTable.php");


require_once ("template/header.php");


$openPage = "index.php";
if (isset($_GET['openPage'])) $openPage = $_GET['openPage'];
if (isset($_POST['openPage'])) $openPage = $_POST['openPage'];
require_once ("pages/" . $openPage);


require_once ("template/footer.php");