<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Redbrix</title>
<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/images/favicon.png">

<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/themify-icons.css">
<link href="<?php echo base_url(); ?>assets/css/slick.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/css/flaticon.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet" type="text/css"/>
</head>

<body>

<!-- Header -->
<header>
  <nav class="navbar navbar-expand-md" style="background-color:white;">
  <div class="container">
	  <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt=""/> </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		<span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="collapsibleNavbar">
		<ul class="navbar-nav ml-auto" >
		  <li class="nav-item" ><a class="nav-link active" style="color:black;" href="<?php echo base_url(); ?>home">Home</a></li>
		  <li class="nav-item"><a class="nav-link" style="color:black;"  href="<?php echo base_url();?>home/about">About Us</a></li>
		  <!-- <li class="nav-item"><a class="nav-link" style="color:black;" href="<?php echo base_url(); ?>home/project_listing">Premium Projects</a></li> -->
		    <li class="nav-item dropdown dropdown">
				 <a class="nav-link dropdown-toggle" style="color:#000;" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Projects </a>
				   <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					  <li><a class="dropdown-item" href="<?php echo base_url(); ?>home/project_listing?location=&category_id=1&project_status_id=">Shops/Showroom</a></li>
					  <li><a class="dropdown-item" href="<?php echo base_url(); ?>home/project_listing?location=&category_id=3&project_status_id=">Food Court </a></li>
					   <li><a class="dropdown-item" href="<?php echo base_url(); ?>home/project_listing?location=&category_id=2&project_status_id=">Office Space</a></li>
					</ul>
				</li>
		  <li class="nav-item"><a class="nav-link" style="color:black;" href="<?php echo base_url();?>blogs">Blog</a></li>
		  <li class="nav-item"><a class="nav-link" style="color:black;" href="<?php echo base_url();?>home/contact">Contact Us</a></li>	
		</ul>
	  </div>
  </div>
</nav>	
</header>