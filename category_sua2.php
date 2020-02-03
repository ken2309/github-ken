<?php
$ma = isset($_POST['ma'])?$_POST['ma']:'';
$ten = isset($_POST['ten'])?$_POST['ten']:'';
if ($ma=='') {
	header('location:category.php');exit;
}
include 'connect.php';

$sql="update loai set tenloai=? where maloai=?";
$stm = $obj->prepare($sql);
$arr = array($ten,$ma);
$stm->execute($arr);

header("location:category.php");exit;

