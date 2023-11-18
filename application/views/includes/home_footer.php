	
<!-- Footer Start -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-sm-5 col-md-3 col-lg-3 col-xl-3">
        <div class="footer_contact_widget">
          <h4>Contact Us</h4>
          <ul class="list-unstyled">
            <li class="text-white df"><span class="flaticon-map mr15"></span><a href="javascript:void(0);">  sector 132, Noida</a></li>
            <li class="text-white"><span class="flaticon-phone mr15"></span><a href="javascript:void(0);">+91 9876543215</a></li>
            <li class="text-white"><span class="flaticon-mail-inbox-app mr15"></span><a href="javascript:void(0);">info@redbrix.com</a></li>
          </ul>
        </div>
        <div class="footer_social_widget mt20">
          <ul class="mb0">
            <li class="list-inline-item"><a href="javascript:void(0);"><i class="ti-facebook"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void(0);"><i class="ti-twitter-alt"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void(0);"><i class="ti-instagram"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void(0);"><i class="ti-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="col-sm-4 col-md-2 col-lg-2 col-xl-2">
        <div class="footer_qlink_widget pl0">
          <h4>Lists by Category</h4>
          <ul class="list-unstyled">
			<li><a href="premium-property.html">Shops/Showroom</a></li>
			<li><a href="projects.html">Office Space</a></li>
			<li><a href="premium-property.html">Food Court</a></li>
		  </ul>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 col-lg-3 col-xl-3">
        <div class="footer_qlink_widget pl0">
          <h4>Quick Links</h4>
          <ul class="list-unstyled">
            <li><a href="<?php echo base_url(); ?>home/index">Home</a></li>
            <li><a href="<?php echo base_url();?>home/about">About Us</a></li>
		    <!-- <li><a href="<?php echo base_url(); ?>home/project_listing">Premium Projects</a></li> -->
		    <li><a href="<?php echo base_url(); ?>home/project_listing">Projects </a></li>
		    <li><a href="<?php echo base_url();?>blogs">Blog</a></li>
		    <li><a href="<?php echo base_url();?>home/contact">Contact Us</a></li>
          </ul>
        </div>
      </div>
      <div class="col-sm-7 col-md-3 col-lg-3 col-xl-3">
        <div class="footer_social_widget">
          <h4>Subscribe</h4>
          <p class="text-white mb30 hidden-sm">We don't send spam so don't worry.</p>
          <form id="<?php echo base_url();?>home" method="post" class="footer_mailchimp_form">
            <div class="form-row align-items-center">
              <div class="col-auto">
                <input type="email" class="form-control" name="subcribe_email" placeholder="Enter your email" required>
                <button type="submit" class="flaticon-email subscribe"></button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-12 disclaimerfooter">
        <h5>Disclaimer :-</h5>
        <p>Redbrix.com shall neither be responsible nor liable for any inaccuracy in the information provided here on the website, and therefore the customers are requested to independently validate the information from the respective developers before making their decisions related to projects or properties displayed here. Redbrix.com, the domain holder, its employees, agents and other representatives shall not be liable, in any way, for any decision or action taken, cost / expenses / losses incurred, by you.</p>
      </div>
    </div>
  </div>
</footer>
 
<!-- JavaScript	-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/popper.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/slick.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom.js"></script>  


<script>
$('.Feature-slider123').slick({
  dots: false,
  infinite: false,
  autoplay: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
</script>
	
</body>
</html>
