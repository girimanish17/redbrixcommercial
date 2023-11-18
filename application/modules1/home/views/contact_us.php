

<!-- Hero Area -->
<section class="inner-banner clearfix">
	<div class="container">
		<h1>Contact Us</h1>
		<ul class="position-relative">
			<li><a href="index.html">Home</a></li>
			<li>Contact Us</li>
		</ul>
	</div>
</section> 
	
 
 <section class="our-contact clearfix">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="main-title text-center">
            <h2>We're always eager to hear from you!</h2>
            <p>Our Commercial Property Experts will be happy to assist you</p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4 col-xl-3 pr0 pl0 plpr15-lg">
          <div class="contact_icon_box mb50">
            <div class="icon float-left"><span class="flaticon-map"></span></div>
            <div class="details">
              <h5 class="title">Address</h5>
              <p> B 418, logix technova,  sector 132, Noida   </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div class="contact_icon_box mb50">
            <div class="icon float-left"><span class="flaticon-phone"></span></div>
            <div class="details">
              <h5 class="title">Contact</h5>
              <p>Mobile: +91 7053707070<br>Mail: info@commercialnoida.com</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3 pr0 pl0 plpr15-lg">
          <div class="contact_icon_box mb50">
            <div class="icon float-left"><span class="flaticon-clock"></span></div>
            <div class="details">
              <h5 class="title">Hour of operation</h5>
              <p>Monday - Friday: 09:00 - 20:00<br>Sunday &amp; Saturday: 10:30 - 22:00</p>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
         <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14024.272209297087!2d77.3800379!3d28.5076002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd18bb0c701343309!2sLogix%20Technova!5e0!3m2!1sen!2sin!4v1672141788863!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-8">
            <span><?php if($msg){ echo $msg; } ?></span>
          <div class="form_grid mt100">
            <h2 class="text-center mb50">Send us an Enquiry </h2>
            <form action="<?php echo base_url(); ?>home/contact" method="post">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <input name="name" class="form-control" type="text" placeholder="Name" value="<?php echo set_value('name'); ?>" required>
                    <span class="text-danger"><?php echo form_error('name'); ?></span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input name="contact" class="form-control required email" type="tel" minlength="10" maxlength="10" placeholder="Contact Number" value="<?php echo set_value('contact'); ?>" required>
                    <span class="text-danger"><?php echo form_error('contact'); ?></span>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input name="email" class="form-control required email" type="email" placeholder="Email Id" value="<?php echo set_value('email'); ?>" required>
                    <span class="text-danger"><?php echo form_error('email'); ?></span>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input name="address" class="form-control" type="text" placeholder="Address" value="<?php echo set_value('address'); ?>" required>
                    <span class="text-danger"><?php echo form_error('address'); ?></span>
                  </div>
                </div>
                
                <div class="col-sm-12">
                  <div class="form-group">
                    <textarea name="message" class="form-control message" rows="6" placeholder="Enter Your Message" required><?php echo set_value('message'); ?></textarea>
                    <span class="text-danger"><?php echo form_error('message'); ?></span>
                  </div>
                  <div class="form-group mb0">
                    <input type="submit" name="EnquiryContact" class="btn btn-thm" value="SUBMIT">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
	
 