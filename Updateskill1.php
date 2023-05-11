<?php

error_reporting(0);
ob_start();
session_start();
header("Pragma: no-cache");
header("Cache: no-cahce");
include_once "connection/dbconfig.php"; //Connection

$a1 = $_POST['txt_name'];
$a2 = $_POST['txt_dob'];
$a3 = $_POST['txt_gndr'];
$a4 = $_POST['txt_phone'];
$a5 = $_POST['txt_adrs'];
$a6 = $_POST['txt_cntas'];
$a7 = $_POST['txt_eml'];
$a8 = $_POST['txskill'];
$a9 = $_POST['txtdis'];
$a10 = $_POST['txtexp'];

$query = "insert into addskill(a1,a2,a3,a4,a5,a6,a7,a8,a9,a10) values('$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10')";

$r = mysql_query($query);
$num = (int) $r;
if ($num > 0) {
    $_SESSION['MSG'] = "Your information has been successfully submited.!!";
} else {
    $_SESSION['MSG'] = "Your information has not been submited.!!";
}
header("location:AddSkill.php");
?>
