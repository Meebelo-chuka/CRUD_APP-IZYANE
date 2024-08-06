 <?php
$servername = "localhost";
$username = "";
$password = "";
$dbname = "crud_database";

$db_connect = new MySQLi ($servername, $username, $password, $dbname);

if ($db_connect->connect_error){
	die("Connection Failed: ". $db_connect->connect_error);
}
?>