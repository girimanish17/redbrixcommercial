<!-- Hero Area -->
<section class="inner-banner clearfix">
	<div class="container">
		<h1>Blogs</h1>
		<ul class="position-relative">
			<li><a href="<?php echo base_url(); ?>home/index">Home</a></li>
			<li><a href="<?php echo base_url();?>blogs">Blog</a></li>
			<li><?php if($blog_details) { echo $blog_details->title;} ?></li>
		</ul>
	</div>
</section> 
	
 
<section class="blog_post clearfix">
	<div class="container">
		<div class="row">
			<div id="sticky-anchor"></div>
			<div class="col-lg-8 col-md-8 col-12">
				<div class="main_blog_post_content clearfix">
					<div class="blog_single_post_heading">
   
				  <div class="contents">
					<div class="bsph_tag bgc-thm mb15" style="width: 200px;"></div>
					<ul>
                    <?php
                        if($blog_details->date){ 
                            $formattedDate = date("d F, Y", strtotime($blog_details->date));
                        }
                    ?>
					  <!-- <li class="list-inline-item"><a href="#"><span class="flaticon-user mr10"></span> Admin</a></li> -->
					  <li class="list-inline-item"><a href="#"><span class="flaticon-calendar mr10"></span> <?php if($formattedDate) { echo $formattedDate;} ?></a></li>
					  <li class="list-inline-item"><a href="#"><span class="flaticon-customer-reviews mr10"></span> 0</a></li>
					</ul>
					<h2 class="mb15"><?php if($blog_details) { echo $blog_details->title;} ?></h2>
				  </div>
				</div>
					<div class="mbp_thumb_post">
					  <div class="thumb"> <img class="w100 img-fluid" src="<?php echo base_url(); ?>uploads/blogs/<?php if($blog_details) { echo $blog_details->image;} ?>" alt="Top 5 Biggest Malls of Noida"> </div>
					  <div class="mt-4 mb-4">
                      <?php if($blog_details) { echo $blog_details->description;} ?>
					  </div>
					  <hr class="mt50 mb40">
					  <!-- <div class="bsp_tags pull-left fn-767 mt10 mb30-767">
									<ul class="mb0">
									  <li class="list-inline-item"><a href="#">Apertment</a></li>
									  <li class="list-inline-item"><a href="#">Real Estate</a></li>
									  <li class="list-inline-item"><a href="#">Business</a></li>
									  <li class="list-inline-item"><a href="#">Videos</a></li>
									</ul>
								  </div> --> 
					  <!--<ul class="blog_post_share text-right tal-767 mb0">--> 
					  <!--  <li class="list-inline-item"><a href="#"><span class="fa fa-facebook"></span>Share on Facebook</a></li>--> 
					  <!--  <li class="list-inline-item"><a href="#"><span class="fa fa-twitter"></span>Share on Twitter</a></li>--> 
					  <!--  <li class="list-inline-item"><a href="#"><span class="fa fa-pinterest"></span>Share on Pinterest</a></li>--> 
					  <!--</ul>--> 
					</div>
					
					
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<div class="terms_condition_widget">
				<h4 class="title mb10">Categories</h4>
				<div class="widget_list">
				  <ul class="list_details">
				<?php 
						$cate = $this->common_model->getallwhere('categories', array());
						foreach($cate as $c)
						{
							$count = $this->common_model->record_count('projects', array('category'=>$c->id));
							?>
						
					<li><a href="<?php echo base_url(); ?>home/project_listing?location=&category_id=<?php echo $c->id; ?>&project_status_id="><?php echo $c->category; ?> <span class="float-right"><?php echo $count; ?></span></a></li>
			<?php } ?>
					
				</div>
			  </div>
				
				
			</div>
		</div>
	</div>
</section>   