<?php
include 'include/connection.php';
include 'include/logerror.php';

function purify($inputDT) {
	$inputDT = htmlspecialchars($inputDT);
	$inputDT = stripslashes($inputDT);
	$inputDT = trim($inputDT);
	return $inputDT;
}


if (isset($_POST['submit'])) {
	
	$name = purify($_POST['name']);
	$email = purify($_POST['email']);
	$mobnum = purify($_POST['mobnum']);
	$qualify = purify($_POST['qualify']);
	$work = purify($_POST['work']);


	$sql = "insert into app_data (name, email, mobnum, qualify, work) values ('$name', '$email', '$mobnum', '$qualify', $work);";

	$result = $connection->query($sql);

	if ($result) {
		$_SESSION['msg'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">
							  Data Inserted! <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>';
		
		header("Location: http://localhost/jobify/index.php");
		exit();
	} else {
		echo "Data Failed to be Inserted! ". $connection->error;
		logerror($connection->error);
	}

}

?>