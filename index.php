
<?php
  include("sidebar.php");
  //include ('dbh.php');
  $email = $_SESSION['email'];

  $checkOTP= $mysqli->query("SELECT * FROM users WHERE email='$email' ");
  $newCheckOTP = $checkOTP->fetch_array();
  $otp = $newCheckOTP['otp'];
?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

      <?php include("topbar.php"); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4" >
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">OTP CODE</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <center><label class="h3">OTP CODE: <b><?php echo $otp; ?></b></label></center>
                    <br>
                    <br>
                    OTP Code will be displayed here. Click <a href="index.php">here</a> if the code does not shows up.
                </div>
              </div>
            </div>

          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">


            </div>

            <div class="col-lg-6 mb-4">


            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
      <?php include("footer.php"); ?>
</body>

</html>
