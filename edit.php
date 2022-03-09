<?php 
include 'include/header.php';

if ($_GET['edit_id']) {
	$edit_id = $_GET['edit_id'];

	$sql = "select * from app_data where id = $edit_id";

	$result = $connection->query($sql);

	if ($result->num_rows) {
}

?>


<div class="container col-xl-12 col-xxl-12 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5 bg-box">
      <div class="col-md-3 mx-auto text-center text-white col-lg-3">
        <img src="image/online.svg" alt="Online" class="img-fluid">
        <h3>Welcome</h3>
        <p>Update the form</p>
        <br>
      </div>

      <div class="col-md-9 mx-auto text-center col-lg-9">        
        <form class="p-4 p-md-5 border rounded-3 bg-light" action="update.php" method="post">
          
          <!-- Row inside form Begins -->
          <div class="row g-2 pb-3">

          	<?php while ($record = $result->fetch_assoc()) { ?>
            <div class="col-md">
              <div class="form-floating">
                <input type="text" name="name" class="form-control" id="floatingName" value="<?php echo $record['name']; ?>" required>
                <label for="floatingName">Full Name</label>
              </div>
            </div>

            <div class="col-md">
              <div class="form-floating">
                <input type="email" name="email" class="form-control" id="floatingEmail" value="<?php echo $record['email']; ?>" required>
                <label for="floatingEmail">Email address</label>
              </div>
            </div>

          </div>
          <!-- Row inside form Ends-->

          <!-- Row inside form Begins -->
          <div class="row g-2 pb-3">

            <div class="col-md">
              <div class="form-floating">
                <input type="text" name="mobnum" class="form-control" id="floatingMobile" value="<?php echo $record['mobnum']; ?>" required>
                <label for="floatingMobile">Mobile Number</label>
              </div>
            </div>

            <div class="col-md">
              <div class="form-floating">
                <input type="text" name="qualify" class="form-control" id="floatingQualify" value="<?php echo $record['qualify']; ?>" required>
                <label for="floatingQualify">Qualification</label>
              </div>
            </div>

          </div>
          <!-- Row inside form Ends-->

          <!-- Row inside form Begins -->
          <div class="row g-2 pb-3">
            <div class="col-md-6">
              <div class="form-floating">
                <select class="form-select" id="floatingSelect" name="work" required>

                  	<option value="1" <?php if ($record['work'] == 1) { echo "selected"; } ?> >One Year</option>
                  	<option value="2" <?php if ($record['work'] == 2) { echo "selected"; } ?> >Two Year</option>
                  	<option value="3" <?php if ($record['work'] == 3) { echo "selected"; } ?> >More than Three years</option>

                </select>
                <label for="floatingSelect">Work Experience</label>
              </div>
              <input type="hidden" name="up_id" value="<?php echo $record['id']; ?>">
            </div>
          </div>
          <!-- Row inside form Ends-->
          <?php
			}
		}
		?>

          <div class="row g-2 pb-3">
            <div class="col-md-4 offset-md-8">
              <button class="btn btn-lg btn-success" type="submit" name="update">Update</button>
            </div>
          </div>
        </form>
    </div>
  </div>
  </div>

<?php include 'include/footer.php'; ?>