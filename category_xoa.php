<?php
$ma = isset($_GET['id'])?$_GET['id']:'';
if ($ma=='') {
	header('location:category.php');exit;
}
include 'connect.php';
//$sql="delete from loai where maloai='$ma' ";
//$obj->query($sql);//xoa
$sql="delete from loai where maloai= ? ";
$stm = $obj->prepare($sql);
$arr = array($ma);
$stm->execute($arr);
header("location:category.php");exit;
echo "Xoa loai co ma la $ma";
[33mcommit 2c9f00cf33c9a43cbb6b1bb5d225d224f9f1a34c[m[33m ([m[1;36mHEAD -> [m[1;32mmaster[m[33m, [m[1;31morigin/master[m[33m)[m
Author: ken2309 <nguyenquangkhai2319@gmail.com>
Date:   Mon Feb 3 17:38:19 2020 +0700

    add connect.php file

[33mcommit fdf365664e971d4ab9fb05fc3034dd72f74ea0b9[m
Author: ken2309 <nguyenquangkhai2319@gmail.com>
Date:   Mon Feb 3 17:11:59 2020 +0700

    add category.php file
