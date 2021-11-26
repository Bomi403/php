<?php
try {
	$dsn = "mysql:host=localhost;dbname=qhal2364";
	$username ="qhal2364";
	$password = "wnstjs0929~";
	$db = new PDO($dsn, $username, $password);
	
	$sql = "INSERT INTO member (memId, memPw, memNm)
					VALUES('abcde', '12345', '이름')";
	$affectedRows = $db->exec($sql);
	echo $affectedRows;
	
} catch (PDOException $e) {
	echo $e->getMessage();
}