<?php
include 'db_conn.php';

if ($_SERVER['REQUEST_METHOD']=='POST'){
	$title = $_POST['title'];
	$author = $_POST['author'];
	$genre = $_POST['genre'];
	
	$sql = "INSERT INTO books (title, author, genre) VALUES('$title', '$author', '$genre')";
	if ($db_connect-> query($sql)===TRUE){
		header("Location: index.php");
	}
	else {
		echo "Error: " . $sql . $db_connect->error;
	}
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>