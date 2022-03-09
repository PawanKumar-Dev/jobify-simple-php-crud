<?php 
include 'include/connection.php';

$sql = "select * from app_data";

$result = $connection->query($sql);


if ($result->num_rows) {

	while ($record = $result->fetch_assoc()) {
		echo $record['name']."<br>";
		echo $record['email']."<br>";
		echo $record['mobnum']."<br>";
		echo $record['qualify']."<br>";
		echo $record['work']."<hr><br>";
	}
}

?>