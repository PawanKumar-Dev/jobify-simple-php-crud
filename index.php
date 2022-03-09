<?php include 'include/header.php'; ?>

  <div class="container col-xl-12 col-xxl-12 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5 bg-box">
      <div class="col-md-3 mx-auto text-center text-white col-lg-3">
        <img src="image/online.svg" alt="Online" class="img-fluid">
        <h3>Welcome</h3>
        <p>Fill the form correctly!</p>
        <a class="btn btn-md btn-danger" href="admin.php">Admin</a>
        <br>
      </div>

      <div class="col-md-9 mx-auto text-center col-lg-9">        
        <form class="p-4 p-md-5 border rounded-3 bg-light" action="upload.php" method="post">
          <?php
            if (!empty($_SESSION['msg'])) {
              echo $_SESSION['msg'];
            }
          ?>
          <!-- Row inside form Begins -->
          <div class="row g-2 pb-3">            
            <div class="col-md">
              <div class="form-floating">
                <input type="text" name="name" class="form-control" id="floatingName" placeholder="Full Name" required>
                <label for="floatingName">Full Name</label>
              </div>
            </div>

            <div class="col-md">
              <div class="form-floating">
                <input type="email" name="email" class="form-control" id="floatingEmail" placeholder="name@example.com" required>
                <label for="floatingEmail">Email address</label>
              </div>
            </div>

          </div>
          <!-- Row inside form Ends-->

          <!-- Row inside form Begins -->
          <div class="row g-2 pb-3">

            <div class="col-md">
              <div class="form-floating">
                <input type="text" name="mobnum" class="form-control" id="floatingMobile" placeholder="Mobile Number" required>
                <label for="floatingMobile">Mobile Number</label>
              </div>
            </div>

            <div class="col-md">
              <div class="form-floating">
                <input type="text" name="qualify" class="form-control" id="floatingQualify" placeholder="Qualification" required>
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
                  <option selected>Select your work experience</option>
                  <option value="1">One Year</option>
                  <option value="2">Two Year</option>
                  <option value="3">More than Three years</option>
                </select>
                <label for="floatingSelect">Work Experience</label>
              </div>
            </div>
          </div>
          <!-- Row inside form Ends-->

          <div class="row g-2 pb-3">
            <div class="col-md-4 offset-md-8">
              <button class="btn btn-lg btn-success" type="submit" name="submit">Submit</button>
            </div>
          </div>
        </form>
    </div>
  </div>
  </div>

<?php include 'include/footer.php'; ?>