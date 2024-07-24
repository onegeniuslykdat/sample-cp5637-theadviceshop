<?php

error_reporting(E_ALL);
session_start();
if(substr($_REQUEST['username'], 0, 2) != "jc") {
    echo "Invalid username";
    exit();
}
$_SESSION['username'] = $_REQUEST['username'];
$_SESSION['fname'] = $_REQUEST['fname'];
$_SESSION['lname'] = $_REQUEST['lname'];
//echo $_GET['page'];
header("Location: ".$_GET['page'].".php");
exit();