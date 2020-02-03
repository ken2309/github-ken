<?php
include 'connect.php';
$stm = $obj->query("select * from category");
$n = $stm->rowCount();// rowCount dung de dem so dong 
$data = $stm->fetchAll(PDO::FETCH_ASSOC);
//echo "$n";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Danh muc loai sach</title>
</head>
<body>
	<form action="category_insert.php" method="post">
		Ma loai <input type="text" name="ma"><br>
		Ten Loai <input type="text" name="ten"><br>
		<input type="submit" name="sm" value="Them">
	</form>
	<br>
	<table border="1">
		<tr>
			<td>STT</td>
			<td>Ma loai</td>
			<td>Ten loai</td>
			<td colspan="2">Thao tac</td>
		</tr>

		<?php
		foreach ($data as $key => $value) {
		?>
		<tr>
			<td><?php echo $key+1; ?></td>
			<td><?php echo $value['cat_id']; ?></td>
			<td><?php echo $value['cat_name']; ?></td>
			<td>
				<a href="category_sua.php?id=<?php echo $value['cat_id']; ?>">Sua</a>
			</td>
			<td>
				<a href="category_xoa.php?id=<?php echo $value['cat_id']; ?>">Xoa</a>
			</td>
		</tr>
	<?php
	}
	?>
	</table>
	
</body>
</html>
