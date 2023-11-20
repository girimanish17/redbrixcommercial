<!-- Hero Area -->
<section class="propertybanner clearfix" style="background: url(<?php echo base_url() ?>uploads/projects/<?php if($pro_details){ echo $pro_details->bg_image; } ?>) center top no-repeat; background-size: cover; overflow: hidden;">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-6 col-md-6 col-12">
				<!--<h2><span class="bluebg"><?php if($pro_details){ echo $pro_details->project_title; } ?></span> <span class="redbg"><?php if($pro_details){ echo $pro_details->project_type; } ?></span></h2>
                <?php 
                     $ps = $this->common_model->getsingle('project_status', array('id' => $pro_details->project_status));
                ?>
				<div class="under-txt"><?php if($ps){ echo $ps->project_status;} ?></div>
				<div class="pricetag"><span>Price - <?php if($pro_details){echo $pro_details->price;} ?> | Payment Plan: <?php if($pro_details){echo $pro_details->payment_plan;} ?></span></div>
				<div class="under-txt">RERA No. - <?php if($pro_details){echo $pro_details->rera_no;} ?></div>
				<div class="pricetag"><span><?php if($pro_details){echo $pro_details->address;} ?></span></div>-->
			</div>
<!--
			<div class="col-lg-4 col-md-6 col-12">
				
				 
			</div>
-->
		</div> 
		
	</div>
	<form action="<?php echo base_url();?>home/project_details/<?php if($pro_details){ echo $pro_details->slug;} ?>" method="post">
				 <div class="propretyform clearfix">
					 <div class="formhead clearfix">
						 <h4>Let's Connect!</h4>
						 <h5>Send Us a Message</h5>
					 </div>
					<div class="row p-3">
					 <div class="col-lg-6 col-md-6 col-12 form-group"><input type="text" name="first_name" class="form-control" placeholder="First name* " required></div>
					 <div class="col-lg-6 col-md-6 col-12 form-group"><input type="text" name="last_name" class="form-control" placeholder="Last name*" required></div>
					 <div class="col-lg-6 col-md-6 col-12 form-group">
					 <input type="tel" name="contact" minlength="10" maxlength="10" class="form-control" placeholder="Phone*" required>
						</div>
					 <div class="col-lg-6 col-md-6 col-12 form-group">
					 <input type="email" name="email" class="form-control" placeholder="Email*" required>
						</div>
					 <div class="col-lg-12 col-md-12 col-12"><button type="submit" class="btn btn-submit">Submit</button></div>
					</div> 
				</div>
				</form>
</section>	
	
	
<!-- The Retail Gamechanger -->
<section class="RetailGamechanger clearfix">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-6 col-6 col-12">
				<h2><?php if($pro_details) { echo $pro_details->project_title;} ?></h2>
				<?php if($pro_details) { echo $pro_details->project_description;} ?>
				<button type="submit" data-toggle="modal" data-target="#enquirePopup" class="btn btn-visit mt-2 text-white">Schedule Site Visit</button>
			</div>
			<div class="col-lg-5 col-6 col-12">
				<ul>
					<?php if($pro_details->right_option1!=''){ ?>
					<li><span>
						<svg id="fi_2697432" enable-background="new 0 0 96 96" viewBox="0 0 96 96"  xmlns="http://www.w3.org/2000/svg"><path id="Shop_2_" d="m82 46v38c0 1.104-.896 2-2 2h-36v-30c0-1.104-.896-2-2-2h-16c-1.104 0-2 .896-2 2v30h-8c-1.104 0-2-.896-2-2v-38h.68c2.92 0 5.6-1.43 7.26-3.7.04.04.07.1.1.15 1.72 2.25 4.33 3.55 7.17 3.55h2.52c3.03 0 5.72-1.5 7.36-3.82.13.16.26.33.4.49 1.89 2.12 4.61 3.33 7.45 3.33h2.12c2.84 0 5.56-1.21 7.45-3.33.14-.16.27-.33.4-.49 1.64 2.32 4.33 3.82 7.36 3.82h2.52c2.84 0 5.45-1.3 7.17-3.55.03-.05.06-.11.1-.15 1.66 2.27 4.34 3.7 7.26 3.7zm-10 26v-16c0-1.104-.896-2-2-2h-14c-1.104 0-2 .896-2 2v16c0 1.104.896 2 2 2h14c1.104 0 2-.896 2-2zm-50.101-62c-1.581 0-3.013.931-3.655 2.375l-10.044 22.595c-.724 1.635-.549 3.43.48 4.898.968 1.38 2.609 2.132 4.294 2.132h1.706c2.24 0 4.22-1.51 4.82-3.66l4.63-16.69 3.24-11.65zm9.621 0-7.13 25.66c-.42 1.52-.11 3.11.84 4.37.95 1.25 2.4 1.97 3.98 1.97h2.52c2.56 0 4.69-1.91 4.97-4.45l3.07-27.55zm20.69 0h-8.42l-2.82 25.34c-.18 1.69.36 3.39 1.5 4.66 1.15 1.29 2.74 2 4.47 2h2.12c1.73 0 3.32-.71 4.47-2 1.14-1.27 1.68-2.97 1.5-4.66zm12.27 0h-8.25l3.07 27.55c.28 2.54 2.41 4.45 4.97 4.45h2.52c1.58 0 3.03-.72 3.98-1.97.95-1.26 1.26-2.85.84-4.37zm13.276 2.375c-.642-1.444-2.075-2.375-3.655-2.375h-5.471l3.24 11.65 4.63 16.69c.6 2.15 2.58 3.66 4.82 3.66h1.706c1.686 0 3.327-.752 4.294-2.132 1.03-1.468 1.204-3.264.48-4.898z"></path></svg>
						</span> <?php echo $pro_details->right_option1; ?>
					</li>
					
					<?php } ?>
					<?php if($pro_details->right_option2!=''){ ?>
					<li>
						<span><svg version="1.1" id="fi_942153" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<g>
	<g>
		<path d="M108.242,338.019H71.494c-5.522,0-10,4.478-10,10v36.748c0,5.522,4.478,10,10,10h36.748c5.522,0,10-4.478,10-10v-36.748
			C118.242,342.496,113.765,338.019,108.242,338.019z M98.242,374.767H81.494v-16.748h16.748V374.767z"></path>
	</g>
</g>
<g>
	<g>
		<path d="M189.7,338.019h-36.748c-5.522,0-10,4.478-10,10v36.748c0,5.522,4.478,10,10,10H189.7c5.522,0,10-4.478,10-10v-36.748
			C199.7,342.496,195.223,338.019,189.7,338.019z M179.7,374.767h-16.748v-16.748H179.7V374.767z"></path>
	</g>
</g>
<g>
	<g>
		<path d="M108.242,415.19H71.494c-5.522,0-10,4.478-10,10v36.748c0,5.522,4.478,10,10,10h36.748c5.522,0,10-4.478,10-10V425.19
			C118.242,419.667,113.765,415.19,108.242,415.19z M98.242,451.938H81.494V435.19h16.748V451.938z"></path>
	</g>
</g>
<g>
	<g>
		<path d="M189.7,415.19h-36.748c-5.522,0-10,4.478-10,10v36.748c0,5.522,4.478,10,10,10H189.7c5.522,0,10-4.478,10-10V425.19
			C199.7,419.667,195.223,415.19,189.7,415.19z M179.7,451.938h-16.748V435.19H179.7V451.938z"></path>
	</g>
</g>
<g>
	<g>
		<path d="M152,258.43c-1.87-1.86-4.44-2.93-7.07-2.93c-2.64,0-5.21,1.069-7.07,2.93c-1.869,1.86-2.93,4.44-2.93,7.07
			s1.061,5.21,2.93,7.069c1.86,1.86,4.44,2.931,7.07,2.931s5.2-1.07,7.07-2.931c1.859-1.859,2.93-4.439,2.93-7.069
			S153.86,260.29,152,258.43z"></path>
	</g>
</g>
<g>
	<g>
		<path d="M502,492h-10V237.938c0-5.522-4.478-10-10-10h-47.873V99.114c0-3.701-2.044-7.1-5.314-8.834l-168-89.114
			c-3.1-1.644-6.834-1.545-9.84,0.265c-3.007,1.809-4.846,5.061-4.846,8.569v102h-101.2c-5.522,0-10,4.478-10,10v103.722
			c0,5.522,4.478,10,10,10c5.522,0,10-4.478,10-10V132h136v39.938h-34.8c-5.522,0-10,4.478-10,10c0,5.522,4.478,10,10,10h34.8v36
			h-34.8c-5.522,0-10,4.478-10,10c0,5.522,4.478,10,10,10h34.8v36h-34.8c-5.522,0-10,4.478-10,10c0,5.522,4.478,10,10,10h34.8v36
			h-34.8c-5.522,0-10,4.478-10,10c0,5.522,4.478,10,10,10h34.8v36h-34.8c-5.522,0-10,4.478-10,10c0,5.522,4.478,10,10,10h34.8v36
			h-34.8c-5.522,0-10,4.478-10,10c0,5.522,4.478,10,10,10h34.8V492H240V308c0-5.522-4.478-10-10-10H30c-5.522,0-10,4.478-10,10v184
			H10c-5.522,0-10,4.478-10,10c0,5.522,4.478,10,10,10h492c5.522,0,10-4.478,10-10C512,496.478,507.523,492,502,492z M220,492H40
			V318h180V492z M344,237.938V492h-33.073V122c0-5.522-4.478-10-10-10h-34.8V26.624l148,78.506v122.808H354
			C348.478,227.938,344,232.416,344,237.938z M472,283.938h-54c-5.522,0-10,4.478-10,10c0,5.522,4.478,10,10,10h54v36h-54
			c-5.522,0-10,4.478-10,10c0,5.522,4.478,10,10,10h54v36h-54c-5.522,0-10,4.478-10,10c0,5.522,4.478,10,10,10h54v36h-30.333
			c-5.522,0-10,4.478-10,10c0,5.522,4.478,10,10,10H472V492H364V247.938h108V283.938z"></path>
	</g>
</g>
<g>
	<g>
		<path d="M403.399,454.871c-1.859-1.861-4.429-2.931-7.069-2.931c-2.63,0-5.21,1.07-7.07,2.931c-1.86,1.859-2.93,4.439-2.93,7.069
			s1.069,5.21,2.93,7.07c1.861,1.86,4.44,2.93,7.07,2.93c2.64,0,5.21-1.069,7.069-2.93c1.87-1.86,2.931-4.44,2.931-7.07
			C406.33,459.3,405.269,456.73,403.399,454.871z"></path>
	</g>
</g>
<g>
	<g>
		<path d="M344,113c-5.522,0-10,4.478-10,10v18.667c0,5.523,4.478,10,10,10c5.522,0,10-4.478,10-10V123
			C354,117.478,349.522,113,344,113z"></path>
	</g>
</g>
<g>
	<g>
		<path d="M344,171.937c-5.522,0-10,4.478-10,10v20.592c0,5.523,4.478,10,10,10c5.522,0,10-4.478,10-10v-20.592
			C354,176.415,349.522,171.937,344,171.937z"></path>
	</g>
</g>
<g>
	<g>
		<path d="M384,113c-5.522,0-10,4.478-10,10v18.667c0,5.523,4.478,10,10,10c5.522,0,10-4.478,10-10V123
			C394,117.478,389.522,113,384,113z"></path>
	</g>
</g>
<g>
	<g>
		<path d="M384,171.937c-5.522,0-10,4.478-10,10v20.592c0,5.523,4.478,10,10,10c5.522,0,10-4.478,10-10v-20.592
			C394,176.415,389.522,171.937,384,171.937z"></path>
	</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg></span> 
						<?php echo $pro_details->right_option2; ?>
						
					</li>
					<?php } ?>	
					<?php if($pro_details->right_option3!=''){ ?>	
					<li>
						<span><svg id="fi_6842281" enable-background="new 0 0 510 510" height="512" viewBox="0 0 510 510" width="512" xmlns="http://www.w3.org/2000/svg"><path id="XMLID_492_" d="m500 489.992h-10v-310c0-5.522-4.478-10-10-10h-40v-50c0-7.968-8.906-12.749-15.547-8.32l-44.453 29.635c0-22.256 0-77.038 0-111.311 0-4.32-2.774-8.152-6.879-9.5-79.048-25.97-158.528-28.674-236.582.118-3.93 1.449-6.539 5.193-6.539 9.382v111.311l-44.453-29.635c-6.626-4.422-15.547.338-15.547 8.32v50h-40c-5.522 0-10 4.478-10 10v310h-10c-5.523 0-10 4.477-10 10 0 5.522 4.477 10 10 10h490c5.522 0 10-4.478 10-10s-4.478-10-10-10zm-30-300v300h-30v-300zm-320-32.945c65.824-22.655 136.403-22.566 210 .258v39.114c-69.791-20.596-139.904-23.002-210-.443 0-11.595 0-21.2 0-38.929zm0 60c65.824-22.655 136.403-22.565 210 .258v39.114c-69.787-20.595-139.904-23.001-210-.443zm210-80.629c-69.787-20.595-139.905-23.004-210-.444v-38.931c65.824-22.655 136.403-22.566 210 .258zm-210 140.629c65.824-22.655 136.403-22.565 210 .258v39.114c-69.781-20.594-139.904-23.001-210-.443zm210-239.747v39.115c-70.055-20.674-140.183-22.914-210-.444v-38.924c65.824-22.655 136.402-22.57 210 .253zm-320 152.692h30v300h-30zm50-51.314 40 26.666v324.648h-40zm60 198.369c65.824-22.655 136.403-22.565 210 .258v152.687h-40v-110h10c5.522 0 10-4.478 10-10 0-5.523-4.478-10-10-10-19.364 0-132.151 0-150 0-5.523 0-10 4.477-10 10 0 5.522 4.477 10 10 10h10v110h-40zm60 42.945h35v110h-35zm55 110v-110h35v110zm115 0c0-14.012 0-309.292 0-324.648l40-26.666v351.315h-40z"></path></svg></span> 
						<?php echo $pro_details->right_option3; ?>
						
					</li>
					<?php } ?>
					<?php if($pro_details->right_option4!=''){ ?>	
					<li>
					
						<span><svg id="fi_2167375" enable-background="new 0 0 64 64" height="512" viewBox="0 0 64 64" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m52 19c3.859 0 7-3.14 7-7s-3.141-7-7-7-7 3.14-7 7 3.141 7 7 7zm0-12c2.757 0 5 2.243 5 5s-2.243 5-5 5-5-2.243-5-5 2.243-5 5-5z"></path><path d="m53 21h2v2h-2z"></path><path d="m49 21h2v2h-2z"></path><path d="m52 1c-6.065 0-11 4.935-11 11v.516c0 .162.023.322.03.484h-36.03v30.735l-4 7v2.265h3v10h24v-4h35v-46.484-.516c0-6.065-4.935-11-11-11zm-9 11c0-4.962 4.037-9 9-9s9 4.038 9 9v.516c0 1.461-.361 2.918-1.046 4.211l-7.37 13.92c-.23.435-.938.434-1.168 0l-7.37-13.921c-.685-1.292-1.046-2.748-1.046-4.21zm9 45h-4v-12h-15v-14h-14v12h-4v-12h-8v-4h8v-12h4v12h28.221l2.118 4h-12.339v10h24v4h-9zm-39-14h-6v-10h6zm26-4v-6h22v6zm15.661-8 2.118-4h4.221v4zm3.176-6 3.163-5.974v5.974zm-15.559-7.337 3.885 7.337h-25.163v-10h20.295c.214.924.539 1.823.983 2.663zm-29.278-2.663v10h-6v-10zm-6.42 30h18.84l3.429 6h-25.698zm11.42 16h-4v-4h4zm2 0v-6h-8v6h-6v-8h20v8zm8-8h3v-2.266l-4.42-7.734h-5.58v-10h10v14h15v10h-18zm26 4v-10h7v10z"></path><path d="m23 17h2v2h-2z"></path><path d="m27 17h12v2h-12z"></path><path d="m23 21h2v2h-2z"></path><path d="m27 21h12v2h-12z"></path></svg></span>
						<?php echo $pro_details->right_option4; ?>
					</li>
					<?php } ?>
				</ul>
				<button type="submit" data-toggle="modal" data-target="#enquirePopup" class="btn btn-download mt-4"> Download Brochure</button>
			</div>
		</div>
	</div>
</section> 
	
<!-- Shop -->
<section class="ShopWrap clearfix">
	<div class="container">
		<div class="row justify-content-center">
            <?php if($retails_pr) {foreach($retails_pr as $ret_pr) { 
                 $pr2 = $this->common_model->getsingle('retail_type', array('id' => $ret_pr->pr_type));
				 if($ret_pr->pr_title!=''){
                ?>
			<div class="col-lg-3 col-md-4 col-12">
				<div class="shopview clearfix">
					<h3><?php echo $ret_pr->pr_title; ?></h3>
					<p class="pricetxt"><?php echo $ret_pr->pr_price; ?></p>
					<div class="shopIndent">
				
					<p><span>Size: <?php echo $ret_pr->pr_size; ?></span><span>Type: <?php if($pr2){echo $pr2->type; } ?></span></p>
						</div>
				</div>
				
				
				
			</div>
			<?php  } }} ?>
		</div>
	</div>
</section> 	
<div class="main-title clearfix mt-3">
			<h2>Project's</h2>
			<h3>Highlights</h3>
		</div>
<section class="highlightwrap clearfix"  style="background: url(<?php echo base_url() ?>uploads/projects/<?php if($pro_details){ echo $pro_details->highlight_bg_image; } ?>) center 0 no-repeat; background-size: cover;">
	<div class="container">
		
		<div class="highbox">
			<ul>
                <?php if($pr_high){ foreach($pr_high as $high){ ?>
				<li><?php echo $high->ph_point;  ?></li>
                <?php }} ?>
			</ul>
		</div>
	</div>
</section>	
		<div class="main-title clearfix mt-3">
			<h2>Project</h2>
			<h3>Amenities</h3>
		</div>
<section class="ProjectAmenities clearfix"  style="background: url(<?php echo base_url() ?>uploads/projects/<?php if($pro_details){ echo $pro_details->amenties_bg_image; } ?>) center 0 no-repeat; background-size: 100%; text-align: center;">
	<div class="container">
	 
		
		
		<ul>
        <?php if($pr_amenties){ foreach($pr_amenties as $prm){ ?>
            <li><?php echo $prm->pm_points;  ?></li>
        <?php }} ?>
		</ul>
	</div>
</section>	
	
<div class="galleryview clearfix mt-3">
	<div class="container">
		 
		<div class="main-title clearfix mb-3">
			<h2>Gallery</h2>
			<h3><?php if($pro_details){ echo $pro_details->project_title; } ?></h3>
		</div>
		
		<div class="slider gallery-slider">
			<?php if($gallery) { foreach($gallery as $gal) { ?>
			<div><img src="<?php echo base_url(); ?>uploads/gallery/<?php echo $gal->image; ?>" class="img-fluid" alt="gallery"/></div>
			<?php }} ?>
		</div>
		
	</div>
</div>	
	

 
<!-- Connect With Your Property Investment Expert Now -->
<section class="ConnectProperty clearfix">
	<div class="container">
		<div class="container">
			<h2>Connect With Your Property Investment Expert Now</h2>
			
			<div class="formConnect clearfix">
				<div class="row justify-content-center">
				<div class="col-lg-5 col-md-5 col-12">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="First name*">
					</div>
				</div>
				<div class="col-lg-5 col-md-5 col-12">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Last name*">
					</div>
				</div>
				<div class="col-lg-5 col-md-5 col-12">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Email name*">
					</div>
				</div>
				<div class="col-lg-5 col-md-5 col-12">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Phone name*">
					</div>
				</div>
				<div class="col-lg-10 col-md-10 col-12">
					<button type="submit" class="btn btn-submit">Submit</button>
				</div>
					
			</div>
			</div>
			
		</div>
	</div>
</section>	
	

	
	
<!-- Ready to Move in Commercial -->
<section class="start-partners home1 clearfix">
	<div class="container">
		<h3>Explore Ready to Move in Commercial Projects in Noida</h3>
		<p>Explore Ready to Move in Commercial Properties for your End Use or Investment in Noida.</p>
		<div class="parner_reg_btn mt-4"><a href="javascript:void(0);" data-toggle="modal" data-target="#callback" class="btn">EXPLORE NOW</a></div>
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

	