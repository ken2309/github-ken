<?php
$ma = isset($_GET['id'])?$_GET['id']:'';
if ($ma=='') {
	header('location:category.php');exit;
}
include 'connect.php';

$sql="select * from loai where maloai= ? ";
$stm = $obj->prepare($sql);
$arr = array($ma);
$stm->execute($arr);


$row = $stm->fetch();//lay ra 1 dong
//print_r($row);
?>
<form action="category_sua2.php" method="post">
	<input type="text" name="ma" value="<?php echo $row['maloai'] ?>"><br> 
	<input type="text" name="ten" value="<?php echo $row['tenloai'] ?>"><br>
	<input type="submit" value="Sua">
</form>
<?php
