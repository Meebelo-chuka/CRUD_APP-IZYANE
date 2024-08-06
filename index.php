<?php
include 'db_conn.php';

$sql = "SELECT * FROM books";
$result = $db_connect->query($sql);
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CRUD Application</title>
</head>

<body>
	<h1>CRUD Book list</h1>
	<a href="create.php"> Add new book </a>
	<table border="1.5">
	<tr><th>ID</th>
		<th>Title</th>
		<th>Author</th>
		<th>Genre</th>
		</tr>
		
		<?php while ($row = $result->fetch_assoc()):?>
		<tr>
		<td>
			<?php echo $row ['id'];?>
			</td>
			<td>
			<?php echo $row ['title'];?>
			</td>
			<td>
			<?php echo $row ['author'];?>
			</td>
			<td>
			<?php echo $row ['genre'];?>
			</td>
			<a href="read.php?id=<?php echo $row['id']; ?>"> 
				View </a>
			<a href="update.php?id=<?php echo $row['id']; ?>"> 
				Edit </a>
			<a href="delete.php?id=<?php echo $row['id']; ?>"> 
				Delete </a>
		</td>
		</tr>
	<?php endwhile; ?>
	</table>
</body>
</html>
<?php
$db_connect->close();
?>