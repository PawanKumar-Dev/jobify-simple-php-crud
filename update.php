<?php
include 'include/connection.php';
include 'include/logerror.php';

function purify($inputDT) {
	$inputDT = htmlspecialchars($inputDT);
	$inputDT = stripslashes($inputDT);
	$inputDT = trim($inputDT);
	return $inputDT;
}


if (isset($_POST['update'])) {
	
	$name = purify($_POST['name']);
	$email = purify($_POST['email']);
	$mobnum = purify($_POST['mobnum']);
	$qualify = purify($_POST['qualify']);
	$work = purify($_POST['work']);
	$up_id = purify($_POST['up_id']);


	$sql = "update app_data set name = '$name', email = '$email', mobnum = '$mobnum', qualify = '$qualify', work = '$work' where id = '$up_id'";

	$result = $connection->query($sql);

	if ($result) {
		$_SESSION['msg'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">
							  Data Updated! <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>';

		header("Location: http://localhost/jobify/admin.php");
		exit();
	} else {
		echo "Data Failed to be updated! ". $connection->error;
		logerror($connection->error);
	}

}

?>