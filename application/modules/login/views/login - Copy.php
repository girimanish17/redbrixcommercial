<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Stride Solution</title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url(); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url(); ?>/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url(); ?>/css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Please Insert Login Details</div>
	  <?php echo $msg; ?>
      <div class="card-body">
        <form action="<?php echo base_url('login'); ?>" method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">ID</label>
            <input class="form-control" name="id" id="exampleInputEmail1" type="text" value="<?php if($_GET['id']){echo $_GET['id'];} echo set_value('id'); ?>" aria-describedby="emailHelp" placeholder="Enter Your ID">
            <span style="color:red;"><?php echo form_error('id'); ?></span>
		  </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control"name="password" id="exampleInputPassword1" value="<?php echo set_value('password'); ?>" type="password" placeholder="Password">
            <span style="color:red;"><?php echo form_error('password'); ?></span>
		  </div>
		  <span style="color:red;"><?php echo $errors; ?></span>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
          </div>
          <input type="submit" class="btn btn-primary btn-block" Value="Login">
        </form>
        <div class="text-center">
        <!--  <a class="d-block small mt-3" href="register.html">Register an Account</a>-->
          <a class="d-block small" href="#">Forgot Password?</a>
		  <a class="d-block small" href="<?php echo base_url('registration'); ?>">Signup Here</a>
		  <a class="d-block small" href="<?php echo base_url(); ?>">Back To Home Page</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url(); ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url(); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
