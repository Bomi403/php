<?php
try {
	$dsn = "mysql:host=localhost;dbname=qhal2364";
	$username ="qhal2364";
	$password = "wnstjs0929~";
	$db = new PDO($dsn, $username, $password);
	$sql = "SELECT * FROM member";
	$stmt = $db->query($sql);
	while($row = $stmt->fetch()) {
		echo"<pre>";
		print_r($row);
		echo"</pre>";
	}
	
} catch (PDOException $e) {
	echo $e->getMessage();
}