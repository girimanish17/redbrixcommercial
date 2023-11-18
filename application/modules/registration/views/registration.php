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
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/select2/dist/css/select2.min.css">
  
</head>
<script>
 function lookup(inputString) 
      {
	if(inputString.length < 2) 
        {
          $('.ac_results').hide();
        }
        else 
        {
         $.post("registration/search_intro", {queryString: ""+inputString+""}, function(data)
          {
          if(data.length >0) 
          {
          $('.ac_results').show();
          $('.ac_results').html(data);
          }
      });
   }
 }  
function ckfit(nm){
    $('#upper_id').val(nm);
    $('.ac_results').hide();
}
</script>
<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5 newform">
      <div class="card-header">Please Insert Registration Details</div>
      <div class="card-body">
	  <?php
	  if($_GET['introducer_id'])
	  {
		  $introducer_id_url 	= "?introducer_id=".$_GET['introducer_id'];
		  $introducer_id 		= $_GET['introducer_id'];
	  }else{
		  $introducer_id_url	= '';
		  $introducer_id 		= set_value('upper_id');
	  }
	  ?>
        <form action="<?php echo base_url('registration/'.$introducer_id_url); ?>" method="post">
		
			<div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
				<label for="full_name">Full Name</label>
				<input class="form-control" name="full_name" id="full_name" type="text" value="<?php  echo set_value('full_name'); ?>" placeholder="Enter Full Name">
				<span style="color:red;"><?php echo form_error('full_name'); ?></span>
              </div>
              <div class="col-md-6">
				<label for="mobile_no">Mobile Number</label>
				<input class="form-control" name="mobile_no" id="mobile_no" type="text" value="<?php  echo set_value('mobile_no'); ?>" placeholder="Enter Mobile Number">
				<span style="color:red;"><?php echo form_error('mobile_no'); ?></span>
              </div>
            </div>
          </div>
		  
		  <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
				<label for="exampleInputPassword1">Enter Password</label>
				<input class="form-control"name="pwd" id="exampleInputPassword1" value="<?php echo set_value('pwd'); ?>" type="password" placeholder="Enter Password">
				<span style="color:red;"><?php echo form_error('pwd'); ?></span>
              </div>
              <div class="col-md-6">
					<label for="exampleInputPassword1">Re Enter Password</label>
					<input class="form-control"name="rpwd" id="exampleInputPassword1" value="<?php echo set_value('rpwd'); ?>" type="password" placeholder="Re Enter Password">
					<span style="color:red;"><?php echo form_error('rpwd'); ?></span>
              </div>
            </div>
          </div>
		  
		  
		  <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
				<label for="exampleInputPassword1">Choose Your Project</label>
				<select  class="form-control select2" style="width: 100%;" name="plan">						
						<option <?php if(set_value('plan')=='pent_shirt'){ echo 'selected';} ?> value="pent_shirt" >Pent Shirt</option>
						<option <?php if(set_value('plan')=='safari_suit'){ echo 'selected';} ?> value="safari_suit" >Safari Suit</option>
						<option <?php if(set_value('plan')=='artificial_jewellery'){ echo 'selected';} ?> value="artificial_jewellery" >Artificial Jewellery</option>
				</select>
				<span style="color:red;"><?php echo form_error('plan'); ?></span>
              </div>
              <div class="col-md-6">
					<label for="exampleInputPassword1">Delivered Place</label>					
					<textarea class="form-control" placeholder="Enter Your Delivered Place" name="delivered_place" id="exampleInputName" type="text" aria-describedby="nameHelp" ><?php echo set_value('delivered_place'); ?></textarea>
					<span style="color:red;"><?php echo form_error('delivered_place'); ?></span>
              </div>
            </div>
          </div>
		  
		  
		  <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
					<label for="mobile_no">Introducer User ID (Optional)</label>
				<!--	<select  class="form-control select2" style="width: 100%;" name="upper_id">
						<option value="" >Select Introducer ID</option>
						<?php
					   //$sl='';
							//foreach($users as $u)
							//{
								//if($upper_id == $u->login_id){$sl = 'selected';}else{$sl='';}     
								//echo '<option value="'.$u->login_id.'" '.$sl.'>'.$u->login_id. ' ( '.$u->full_name.' ) '.'</option>';
							//} 
						?>
					</select> -->
					<input onkeyup="lookup(this.value);" onfocus="lookup(this.value);" class="form-control" name="upper_id" id="upper_id" type="text" value="<?php  echo $introducer_id; ?>" placeholder="Introducer User ID">
					<div style="display:none;" class="ac_results dropdown-list-data"></div>
					<!--<input class="form-control" name="upper_id" id="upper_id" type="text" value="<?php  echo set_value('upper_id'); ?>" placeholder="Introducer User ID"> -->
					<span style="color:red;"><?php echo form_error('upper_id'); ?></span>
              </div>
              <div class="col-md-6"> 
				<label>Profile Pic:</label>
                <input type="file" name="profile_pic" id="profile_pic" />
              </div>
            </div>
          </div>
				  
          <input type="submit" class="btn btn-primary btn-block" Value="Submit">
        </form>
        <div class="text-center">
        <!--  <a class="d-block small mt-3" href="register.html">Register an Account</a>-->          
		  <a class="d-block small" href="<?php echo base_url(); ?>">Back To Home Page</a>
		  <a class="d-block small" href="<?php echo base_url('login'); ?>">Already Member Login Here</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url(); ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url(); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Select2 -->
<script src="<?php echo base_url(); ?>bower_components/select2/dist/js/select2.full.min.js"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
  });
</script>
</body>

</html>
