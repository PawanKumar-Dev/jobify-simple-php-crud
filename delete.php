<?php 
include 'include/connection.php';
include 'include/logerror.php';

if ($_GET['del_id']) {
	
	$del_id = $_GET['del_id'];

	$sql = "delete from app_data where id = $del_id";
	
	$result = $connection->query($sql);

	if ($result) {

		$_SESSION['msg'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">
							  Data Removed! <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>';

		header("Location: http://localhost/jobify/admin.php");
		exit();
	} else {
		echo "Data Failed to be deleted! ". $connection->error;
		logerror($connection->error);
	}
}

?>