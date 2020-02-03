<?php
$ma = isset($_POST['ma'])?$_POST['ma']:'';
$ten = isset($_POST['ten'])?$_POST['ten']:'';
if ($ma=='') {
	header('location:category.php');exit;
}
include 'connect.php';

$sql="INSERT INTO `loai` (`maloai`, `tenloai`) VALUES (?, ?)";
$stm = $obj->prepare($sql);
$arr = array($ma,$ten);
$stm->execute($arr);
header("location:category.php");exit;

