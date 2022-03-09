<?php include 'include/header.php'; 

$sql = "select * from app_data";
$result = $connection->query($sql);

if ($result->num_rows) {
	$cnt = 1;
?>


<div class="container col-xl-12 col-xxl-12 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5 bg-light admin-box">
    	<?php
            if (!empty($_SESSION['msg'])) {
              echo $_SESSION['msg'];
            }
        ?>
      	<div class="col-md-12 mx-auto text-center col-lg-12">
      		<div class="table-responsive">
	      		<table class="table table-striped table-hover table-bordered">			  
					<thead>
					    <tr>
					      <th scope="col">S.no</th>
					      <th scope="col">Name</th>
					      <th scope="col">Email</th>
					      <th scope="col">Mobile</th>
					      <th scope="col">Qualification</th>
					      <th scope="col">Work Exp</th>
					      <th scope="col">Applied at</th>
					      <th scope="col" colspan="2">Action</th>
					    </tr>
					</thead>

				  	<tbody>
				  		<?php while ($record = $result->fetch_assoc()) { ?>
					    <tr>
					      <th scope="row"><?php echo $cnt; ?>.</th>
					      <td><?php echo $record['name']; ?></td>
					      <td><?php echo $record['email']; ?></td>
					      <td><?php echo $record['mobnum']; ?></td>
					      <td><?php echo $record['qualify']; ?></td>
					      <td><?php echo $record['work']; ?> yrs</td>
					      <td><?php echo $record['data_entry_at']; ?></td>
					      <td>
					      	<a data-bs-toggle="tooltip" data-bs-placement="top" title="UPDATE" href="edit.php?edit_id=<?php echo $record['id']; ?>">
					      		<i class="fa fa-2x fa-pencil-square-o" aria-hidden="true"></i>
					      	</a>
					      </td>
					      
					      <td>
					      	<a data-bs-toggle="tooltip" data-bs-placement="top" title="DELETE" href="delete.php?del_id=<?php echo $record['id']; ?>">
					      		<i class="fa fa-2x fa-trash" aria-hidden="true"></i>
					      	</a>
					      </td>
					    </tr>
					    
					    <?php
					    	$cnt++;		
							}
						}
						?>
				  </tbody>
				</table>
			</div>
      	</div>
  	</div>
</div>

<?php include 'include/footer.php'; ?>