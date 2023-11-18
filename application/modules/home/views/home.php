<!-- Hero Area -->
<section class="heroarea clearfix" >
	<div class="container">
		<h1>Discover the Perfect Range of
		  <span class="typed-text"></span><span class="cursor">&nbsp;</span>
		</h1>

		<form action="<?php echo base_url(); ?>home/project_listing" method="get">
			<div class="heroform clearfix">
				<input class="form-control" type="text" name="location" placeholder="Search by Location, Project">
				<button type="submit" class="btn btn-seach">Search</button>
			</div> 
		</form>

		<ul>
			<li><a href="<?php echo base_url(); ?>home/project_listing?location=&category_id=1&project_status_id=">Shops/Showroom</a></li>
			<li><a href="<?php echo base_url(); ?>home/project_listing?location=&category_id=3&project_status_id=">Food Court</a></li>
			<li><a href="<?php echo base_url(); ?>home/project_listing?location=&category_id=2&project_status_id=">Office Space</a></li>
			
		</ul>
		
	</div>
</section>	
 
	
<!-- Exclusive Projects -->
<section class="ExclusiveProjects clearfix">
	<div class="container position-relative">
		<div class="main-title clearfix">
			<h2>Commercial Projects Highlights</h2>
			<p>Invest in our Most Recognized Commercial Properties and multiply your investment like never before.</p>
		</div>	
		<div class="slider exclusive-slider">
<?php if($exclusive_projects) { foreach($exclusive_projects as $ex_project){ ?>
			<div class="exclusiveIndent" style="background: url(<?php echo base_url(); ?>uploads/projects/<?php echo $ex_project->home_slider_image; ?>) center top no-repeat; background-size: cover;">
				<div class="exclusivebx clearfix">
					<h3><a href="#"><?php echo $ex_project->project_title; ?></a></h3>
					<div class="address-project mb-4"><span class="ti-pin-alt"></span> <?php echo $ex_project->address; ?></div>
<!--					<div class="property-price"><span>Upto</span>  1.27 Cr</div>-->
					<ul class="property-info list-unstyled d-flex">
						<li class="flex-fill property-bed"><i class="flaticon-checked"></i><span>Price- <br><?php echo $ex_project->price; ?></span></li>
						<li class="flex-fill property-bed"><i class="flaticon-checked"></i><span>Payment <br>Plan: <?php echo $ex_project->payment_plan; ?></span></li>
						<li class="flex-fill property-bed"><i class="flaticon-checked"></i><span>RERA No. <br> <?php echo $ex_project->rera_no; ?></span></li>
					</ul>
					<a href="<?php echo base_url(); ?>projects/<?php echo $ex_project->slug; ?>" class="btn btn-view">View detail</a>
					
				</div>
			</div>
<?php }} ?>
		</div>
	</div>
</section>	
	
<!-- Explore Commercial Properties -->
<section class="ExploreCommercial clearfix">
	<div class="container">
		<div class="main-title">
			<h2>Best Commercial Projects In Noida</h2>
			<p>Take a look at our projects gallery, including Food Court, Office Spaces, and Shops/Showrooms and make your investment decision with confidence.</p>
		</div>
		
		<div class="row">
		<div class="col-lg-4 col-md-4 col-12">
      <a href="<?php echo base_url(); ?>home/project_listing?location=&category_id=1&project_status_id=">
				<div class="properti_city">
				  <div class="thumb"><img class="img-fluid w100" src="<?php echo base_url(); ?>assets/images/shop-showroom.jpg" loading="lazy" alt="Food Court"></div>
				  <div class="overlay">
					<div class="details">
					  <div class="icon"><img src="<?php echo base_url(); ?>assets/images/category/CommercialBuildings.webp" alt="Commercial Buildings"></div>
					  <h4>Shops/Showroom</h4>
					</div>
				  </div>
				</div>
			</div>
      <div class="col-lg-4 col-md-4 col-12">
			<a href="<?php echo base_url(); ?>home/project_listing?location=&category_id=3&project_status_id=">
				<div class="properti_city">
				  <div class="thumb"><img class="img-fluid w100" src="<?php echo base_url(); ?>assets/images/food-court.jpg" loading="lazy" alt="Food Court"></div>
				  <div class="overlay">
					<div class="details">
					  <div class="icon"><img src="<?php echo base_url(); ?>assets/images/category/food-icon.webp" alt="Food Court"></div>
					  <h4>Food Court</h4>
					</div>
				</div>
      </div>
			</div></a>
			<div class="col-lg-4 col-md-4 col-12">
      <a href="<?php echo base_url(); ?>home/project_listing?location=&category_id=2&project_status_id=">
				<div class="properti_city">
				  <div class="thumb"><img class="img-fluid w100" src="<?php echo base_url(); ?>assets/images/co-working.jpg" loading="lazy" alt="Food Court"></div>
				  <div class="overlay">
					<div class="details">
					  <div class="icon"><img src="<?php echo base_url(); ?>assets/images/category/Co-workingSpace.webp" alt="Co-working Space"></div>
					  <h4>Office Space</h4>
					</div>
				  </div>
				</div></a>
			</div>

		</div></a>
	</div>
</section>	
	
<!-- Discover Our Featured Listings -->
<section class="DiscoverFeature clearfix">
	<div class="container">
		<div class="main-title clearfix">
			<h2>Exclusive and Featured Commercial Projects In Noida</h2>
			<p>Check out the top commercial property spaces in Noida and choose the best one to grow your investment.</p>
		</div>
		
		<div class="Feature-slider123 slider">
      <?php 
	 
	  if($featured_listing) { foreach($featured_listing as $fea_project) { 
        $pro_status = $this->common_model->getsingle('project_status', array('id' => $fea_project->project_status));
        ?>	
        <div>
      <div class="featurewrap clearfix">
					<div class="thumb">
						<a href="<?php echo base_url(); ?>projects/<?php echo $fea_project->slug; ?>"><img src="<?php echo base_url(); ?>uploads/projects/<?php echo $fea_project->project_image; ?>" class="img-fluid" alt=""/></a>
						<a href="#" class="thmb_cntnt"><?php if($pro_status) { echo $pro_status->project_status; } ?></a>
					</div>
				  <div class="details clearfix">
					    <div class="tc_content clearfix">
						  <h4><a href="<?php echo base_url(); ?>projects/<?php echo $fea_project->slug; ?>"><?php echo $fea_project->project_title; ?></a></h4>
						  <p class="notlong"><i class="ti-pin-alt"></i> <?php echo $fea_project->address; ?></p>
						  <ul class="prop_details mb0">
                <?php 
                   $cat_feat = $this->common_model->getsingle('categories', array('id' => $fea_project->category));
                ?>
								<li class="list-inline-item notlong"> <?php if($cat_feat){ echo $cat_feat->category;} ?></li>
								<li class="list-inline-item notlong"> Price - <?php echo $fea_project->price; ?></li>
								<li class="list-inline-item notlong"> <?php echo $fea_project->rera_no; ?></li>
							</ul>
						</div>
					<div class="fp_footer">
<!--
							<ul class="fp_meta w-100 mb-2">
								<li class="list-inline-item">
									<a href="property-detail.html">Rs.5000000/- onwards</a>
								</li>
							</ul>
-->
							<div class="fp_meta mb0 text-center">
								<a href="<?php echo base_url(); ?>projects/<?php echo $fea_project->slug; ?>" style="width:40%; padding:12px 10px; color:#fff; background-color:#ca353b; border-radius:5px; margin-top: 4px;">View Detail</a>
								<a href="javascript:void(0);" data-toggle="modal" data-target="#enquirePopup<?php echo $fea_project->id; ?>" style="width:42%; padding:12px 10px; color:#fff; background-color:#1e3d5a; border-radius:5px; margin-top: 4px;">Enquire Us</a>
						  </div>
						  
						</div>
						
				  </div>
				</div>
			</div>

	


      <?php }} ?>

			<div>
			
			</div>
		</div>
	</div>
</section>

<!-- Guaranteed Return Projects  -->
<section class="DiscoverFeature bglight clearfix">
	<div class="container">
		<div class="main-title clearfix">
			<h2>Guaranteed Monthly Return on Investment</h2>
			<p>Our guaranteed monthly return on investment will give you peace of mind while your money grows.</p>
		</div>
		
		<div class="Feature-slider slider">
			<?php if($guaranteed) { foreach($guaranteed as $gt) { 
			$prStatus = $this->common_model->getsingle('project_status', array('id' => $gt->project_status));
			?>	
		<div>
				<div class="featurewrap clearfix">
					<div class="thumb">
						<a href="<?php echo base_url(); ?>projects/<?php echo $gt->slug; ?>"><img src="<?php echo base_url(); ?>uploads/projects/<?php echo $gt->project_image; ?>" class="img-fluid" alt=""/></a>
						<a href="#" class="thmb_cntnt"><?php if($pro_status) { echo $pro_status->project_status; } ?></a>
					</div>
				   <div class="details clearfix">
					    <div class="tc_content clearfix">
						  <h4><a href="<?php echo base_url(); ?>projects/<?php echo $gt->slug; ?>"><?php echo $gt->project_title; ?></a></h4>
						  <p class="notlong"><i class="ti-pin-alt"></i> <?php echo $gt->address; ?></p>
						  <ul class="prop_details mb0">
						  <?php 
							$cat_feat2 = $this->common_model->getsingle('categories', array('id' => $gt->category));
							?>
								<li class="list-inline-item notlong"><?php if($cat_feat2){ echo $cat_feat2->category;} ?></li>
								<li class="list-inline-item notlong">  Price - <?php echo $gt->price; ?></li>
								<li class="list-inline-item notlong">  <?php echo $gt->rera_no; ?></li>
							</ul>
						</div>
					<div class="fp_footer">

							<div class="fp_meta mb0 text-center">
								<a href="<?php echo base_url(); ?>projects/<?php echo $gt->slug; ?>" style="width:40%; padding:12px 10px; color:#fff; background-color:#ca353b; border-radius:5px; margin-top: 4px;">View Detail</a>
								<a href="javascript:void(0);" data-toggle="modal" data-target="#enquire2Popup<?php echo $gt->id; ?>" style="width:42%; padding:12px 10px; color:#fff; background-color:#1e3d5a; border-radius:5px; margin-top: 4px;">Enquire Us</a>
						  </div>
						</div>
				  </div>
				</div>
			</div>
			<?php }} ?>
		</div>
	</div>
</section>

<!-- Connect With Your Property Investment Expert Now -->
<section class="ConnectProperty clearfix">
	<div class="container">
		<div class="container">
			<h2>Connect With Your Property Investment Expert Now</h2>
			<form action="<?php echo base_url(); ?>home" method="post">
			<div class="formConnect clearfix">
				<div class="row justify-content-center">
				<div class="col-lg-5 col-md-5 col-12">
					<div class="form-group">
					<input type="text" name="first_name" class="form-control" placeholder="First name* " required>
					</div>
				</div>
				<div class="col-lg-5 col-md-5 col-12">
					<div class="form-group">
					<input type="text" name="last_name" class="form-control" placeholder="Last name*" required>
					</div>
				</div>
				<div class="col-lg-5 col-md-5 col-12">
					<div class="form-group">
					<input type="email" name="email" class="form-control" placeholder="Email*" required>
					</div>
				</div>
				<div class="col-lg-5 col-md-5 col-12">
					<div class="form-group">
					<input type="tel" name="contact" minlength="10" maxlength="10" class="form-control" placeholder="Phone*" required>
					</div>
				</div>
				<div class="col-lg-10 col-md-10 col-12">
					<button type="submit" class="btn btn-submit">Submit</button>
				</div>
					
			</div>
			</div>
			</form>
		</div>
	</div>
</section>	

<?php if($featured_listing) { foreach($featured_listing as $fea_project) {  ?>
<!-- The Modal -->
<div class="modal fade" id="enquirePopup<?php echo $fea_project->id; ?>">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Connect With Your Property Investment Expert Now</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
		  <form action="<?php echo base_url(); ?>home" method="post">
			<div class="formConnect clearfix">

			<input type="hidden" name="project_id" value="<?php echo $fea_project->id; ?>">

					<div class="form-group">
						<input type="text" name="first_name" class="form-control" placeholder="First name* " required>
					</div>
					<div class="form-group">
						<input type="text" name="last_name" class="form-control" placeholder="Last name*" required>
					</div>
					<div class="form-group">
						<input type="email" name="email" class="form-control" placeholder="Email*" required>
					</div>
					<div class="form-group">
						<input type="tel" name="contact" minlength="10" maxlength="10" class="form-control" placeholder="Phone*" required>
					</div>
					<button type="submit" class="btn btn-submit">Submit</button>
				 
				</div>
					</form>
			</div>
    </div>
  </div>
</div>	
<?php }} ?>	


<?php if($guaranteed) { foreach($guaranteed as $gt) {  ?>
<!-- The Modal -->
<div class="modal fade" id="enquire2Popup<?php echo $gt->id; ?>">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Connect With Your Property Investment Expert Now</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
		  <form action="<?php echo base_url(); ?>home" method="post">
			<div class="formConnect clearfix">

			<input type="hidden" name="project_id" value="<?php echo $gt->id; ?>">

					<div class="form-group">
						<input type="text" name="first_name" class="form-control" placeholder="First name* " required>
					</div>
					<div class="form-group">
						<input type="text" name="last_name" class="form-control" placeholder="Last name*" required>
					</div>
					<div class="form-group">
						<input type="email" name="email" class="form-control" placeholder="Email*" required>
					</div>
					<div class="form-group">
						<input type="tel" name="contact" minlength="10" maxlength="10" class="form-control" placeholder="Phone*" required>
					</div>
					<button type="submit" class="btn btn-submit">Submit</button>
				 
				</div>
					</form>
			</div>
    </div>
  </div>
</div>	
<?php }} ?>	

<!-- Ready to Move in Commercial -->
<section class="start-partners home1 clearfix">
	<div class="container">
		<h3>Explore Range of Commercial projects In Noida With Monthly Return</h3>
		<p>Our guaranteed monthly return on investment will give you peace of mind while your money grows.</p>
		<div class="parner_reg_btn mt-4">
		<a class="btn" href="javascript:void(0);" data-toggle="modal" data-target="#callback">EXPLORE NOW</a>
		<!--<a href="<?php echo base_url();?>home/about" class="btn">EXPLORE NOW</a>--></div>
	</div>
</section> 

<!-- The Modal -->
<div class="modal fade" id="callback">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Connect With Your Property Investment Expert Now</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
		  <form action="<?php echo base_url(); ?>home" method="post">
			<div class="formConnect clearfix">

			
					<div class="form-group">
						<input type="text" name="first_name" class="form-control" placeholder="First name* " required>
					</div>
					<div class="form-group">
						<input type="text" name="last_name" class="form-control" placeholder="Last name*" required>
					</div>
					<div class="form-group">
						<input type="email" name="email" class="form-control" placeholder="Email*" required>
					</div>
					<div class="form-group">
						<input type="tel" name="contact" minlength="10" maxlength="10" class="form-control" placeholder="Phone*" required>
					</div>
					<button type="submit" class="btn btn-submit">Submit</button>
				 
				</div>
					</form>
			</div>
    </div>
  </div>
</div>	

	
	


	
