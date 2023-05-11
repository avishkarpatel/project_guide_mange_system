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




$query = "update regestration set dob = '$a2', phone = '$a4' ,address = '$a5' ,contact_as = '$a6'  ,email = '$a7'  ,a8 = '$a8' ,a9 = '$a9' ,a10 = '$a10' where name='$a1'";
$r = mysql_query($query);

$num = (int) $r;

if ($num > 0) {
    header("location:AddSkill.php");
} else {

    header("location:AddSkill.php");
}
?>


