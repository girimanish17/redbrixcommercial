<!-- Hero Area -->
<section class="inner-banner clearfix">
	<div class="container">
		<h1>Blogs</h1>
		<ul class="position-relative">
			<li><a href="index.html">Home</a></li>
			<li>Blog</li>
		</ul>
	</div>
</section> 
	
 
<section class="OurBlog clearfix">
    <div class="container">
       
          <div class="blog-txt">Noida city is now developing as a new commercial hub in Delhi/NCR. Due to Noida's Infrastructure and Planning, investors and corporates are seeing a good future in Noida. Noida and Greater Noida &amp; Yamuna authorities properly planned these cities to overcome connectivity and Traffic Jam issues.</div>
		
      
       <div class="row">
          <?php if($blogs_details) { foreach($blogs_details as $blogs) { ?>
       <div class="col-lg-4 col-md-4 col-12">
		    <div class="feat_property clearfix">
				  <div class="thumb">
			    <img src="<?php echo base_url() ?>uploads/blogs/<?php echo $blogs->image; ?>" class="img-fluid" alt="blogs"/> </div>
			  <div class="details clearfix">
					  <div class="tc_content">
						<div class="bp_meta">
						  <ul>
							<!-- <li class="list-inline-item"><a href="javascript:void(0);"><span class="flaticon-user fz15 mr10"></span> Admin</a></li> -->
							<li class="list-inline-item"><a href="javascript:void(0);"><span class="flaticon-calendar fz15 mr10"></span> <?php echo $blogs->date; ?> </a></li>
						  </ul>
						</div>
						<h4><?php echo $blogs->title; ?></h4>
						<a class="read_more_btn" href="<?php echo base_url() ?>blogs/<?php echo $blogs->slug; ?>">READ MORE</a> </div>
				  </div>
			  </div>
		   </div>
		 <?php }} ?>
      </div>
    </div>
  </section>  