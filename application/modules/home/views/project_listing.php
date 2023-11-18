<!-- Hero Area -->
<section class="PropertyHero clearfix">
	<div class="container">
		<h1>Find The Best
		  <span class="typed-text"></span><span class="cursor">&nbsp;</span>
		</h1>	
		<form action="<?php echo base_url(); ?>home/project_listing" method="get">	
		<div class="propertyFrom clearfix">
			<div class="row justify-content-center">
				<div class="col-lg-4 col-md-4 col-12">
					<div class="form-group">
						<input class="form-control" name="location" value="<?php if($locationS){ echo $locationS; } ?>" placeholder="Location">
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<div class="form-group">
						<select class="form-control" name="project_status_id">
							<option value="">Project Status</option>
                            <?php if($prStatus) { foreach($prStatus as $prs){ ?>
                                <option <?php if($project_status_id == $prs->id) { echo "selected"; } ?>  value="<?php echo $prs->id ?>"><?php echo $prs->project_status; ?></option>
                            <?php }} ?>
						</select>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<div class="form-group">
						<select class="form-control" name="category_id">
							<option>Property Category</option>
                            <?php if($categories) { foreach($categories as $cat){ ?>
                                <option <?php if($category_id == $cat->id) { echo "selected"; } ?> value="<?php echo $cat->id ?>"><?php echo $cat->category; ?></option>
                            <?php }} ?>
						</select>
					</div>
				</div>
				<div class="col-lg-12 col-md-12 col-12 text-center">
					<button type="submit" class="btn mr-3">Search</button>
					<a href="<?php echo base_url(); ?>home/project_listing" class="btn btn-reset">Reset</a>
				</div>
			</div>
		</div>
							</form>
	</div>
</section>	
	
 
<!-- Discover Our Featured Listings -->
<section class="DiscoverFeature clearfix">
	<div class="container">
		<div class="main-title clearfix">
			<h2>Discover Our Featured Listings</h2>
			<p>Discover some of the most popular Commercial Properties in Noida based on user reviews, ratings &amp; Popularity.</p>
		</div>
		
		<div class="Feature-slider slider">
        <?php if($featured_listing) { foreach($featured_listing as $fea_project) { 
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
						  <p class="notlong"><i class="ti-pin-alt"></i><?php echo $fea_project->address; ?></p>
						  <ul class="prop_details mb0">
                          <?php 
                            $cat_feat = $this->common_model->getsingle('categories', array('id' => $fea_project->category));
                            ?>
								<li class="list-inline-item notlong"> <?php if($cat_feat){ echo $cat_feat->category;} ?></li>
								<li class="list-inline-item notlong">Price - <?php echo $fea_project->price; ?></li>
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

		</div>
		
		
		
		
		
	</div>
</section>
	
<!-- Guaranteed Return Projects  -->
<section class="DiscoverFeature bglight clearfix">
	<div class="container">
		<div class="main-title clearfix">
			<h2>Other Properties </h2>
			<p>Guaranteed some of the most popular Commercial Properties in Noida based on user reviews, ratings &amp; Popularity.</p>
		</div>
		<div class="Feature-slider slider">
        <?php if($other_properties) { foreach($other_properties as $otherP) { 
            $pro_other = $this->common_model->getsingle('project_status', array('id' => $otherP->project_status));
        ?>	
			<div>
				<div class="featurewrap clearfix">
					<div class="thumb">
						<a href="<?php echo base_url(); ?>projects/<?php echo $otherP->slug; ?>"><img src="<?php echo base_url(); ?>uploads/projects/<?php echo $otherP->project_image; ?>" class="img-fluid" alt=""/></a>
						<a href="#" class="thmb_cntnt"><?php if($pro_other) { echo $pro_other->project_status; } ?></a>
					</div>
				  <div class="details clearfix">
					    <div class="tc_content clearfix">
						  <h4><a href="<?php echo base_url(); ?>projects/<?php echo $otherP->slug; ?>"><?php echo $otherP->project_title; ?></a></h4>
						  <p class="notlong"><i class="ti-pin-alt"></i> <?php echo $otherP->address; ?></p>
                          <?php 
                            $cat_other = $this->common_model->getsingle('categories', array('id' => $otherP->category));
                            ?>
						  <ul class="prop_details mb0">
								<li class="list-inline-item notlong"><?php if($cat_other){ echo $cat_other->category;} ?></li>
								<li class="list-inline-item notlong"> Price - <?php echo $otherP->price; ?></li>
								<li class="list-inline-item notlong">  <?php echo $otherP->rera_no; ?></li>
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
								<a href="<?php echo base_url(); ?>projects/<?php echo $otherP->slug; ?>" style="width:40%; padding:12px 10px; color:#fff; background-color:#ca353b; border-radius:5px; margin-top: 4px;">View Detail</a>
								<a href="javascript:void(0);" data-toggle="modal" data-target="#enquire2Popup<?php echo $otherP->id; ?>" style="width:42%; padding:12px 10px; color:#fff; background-color:#1e3d5a; border-radius:5px; margin-top: 4px;">Enquire Us</a>
						  </div>
						</div>
				  </div>
					
				</div>
			</div>
            <?php }} ?>
		</div>
		
		
		
		
		
	</div>
</section>

<section class="aboutProperty clearfix">
	<div class="container">
		<h2>Buy Residential & Commercial Properties - Properties for Sale in India</h2>
		<p>You get a long period to pay the whole amount of your property approx. 3 to 4 years and in this much tenure your investment almost doubles. In a New launch builder provides all modern facilities, specification amenities, Payment Plans with assured return etc. thinking of the future so the property you'll buy will be one of its kind after possession. New launches are majorly in new developing sectors, so there you get the advantage of modern infrastructure compared to the existing locations. Due to the Corona Virus Impact on Real Estate demand, Builders started to offer cery attractive payment plans for the investors.</p>
	</div>
</section>
	
	
<!-- Ready to Move in Commercial -->
<section class="start-partners home1 clearfix">
	<div class="container">
		<h3>Explore Ready to Move in Commercial Projects in Noida</h3>
		<p>Explore Ready to Move in Commercial Properties for your End Use or Investment in Noida.</p>
		<div class="parner_reg_btn mt-4"><a  class="btn" href="javascript:void(0);" data-toggle="modal" data-target="#callback">EXPLORE NOW</a></div>
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
		  <form action="<?php echo base_url(); ?>home/project_listing" method="post">
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



<?php if($other_properties) { foreach($other_properties as $otherP) {  ?>
<!-- The Modal -->
<div class="modal fade" id="enquire2Popup<?php echo $otherP->id; ?>">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Connect With Your Property Investment Expert Now</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
		  <form action="<?php echo base_url(); ?>home/project_listing" method="post">
			<div class="formConnect clearfix">

			<input type="hidden" name="project_id" value="<?php echo $otherP->id; ?>">

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

	
	