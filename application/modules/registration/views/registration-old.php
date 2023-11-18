<div class="content-wrapper">
    <div class="container">
	
		<div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">REGISTRATION FORM</h4>  
				<h5><?php echo $msg; ?></h5>
            </div>

        </div>
		<form role="form" action="<?php echo base_url('registration'); ?>" method="post" enctype="multipart/form-data">
		 <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           PERSONAL INFORMATION
                        </div>
                        <div class="panel-body">
                            
                                    <div class="form-group <?php if(form_error('full_name')){ echo 'has-error' ;} ?>">
                                            <label <?php if(form_error('full_name')){ echo 'class="control-label"' ;} ?>>Full Name</label>
                                            <input <?php if(form_error('full_name')){ echo 'id="error"' ;} ?> placeholder="Enter User Name" class="form-control" type="text" name="full_name" value="<?php echo set_value('full_name'); ?>" />											
											<span style="color:red;"><?php echo form_error('full_name'); ?></span>
									</div>
									<div class="form-group <?php if(form_error('father_name')){ echo 'has-error' ;} ?>">
                                            <label <?php if(form_error('father_name')){ echo 'class="control-label"' ;} ?>>Father Name</label>
                                            <input <?php if(form_error('father_name')){ echo 'id="error"' ;} ?> placeholder="Enter Father Name" class="form-control" type="text" name="father_name" value="<?php echo set_value('father_name'); ?>" />											
											<span style="color:red;"><?php echo form_error('father_name'); ?></span>
									</div>
									<div class="form-group <?php if(form_error('mobile_no')){ echo 'has-error' ;} ?>">
                                            <label <?php if(form_error('mobile_no')){ echo 'class="control-label"' ;} ?>>Mobile Number</label>
                                            <input <?php if(form_error('mobile_no')){ echo 'id="error"' ;} ?> placeholder="Enter Mobile Number" class="form-control" type="text" name="mobile_no" value="<?php echo set_value('mobile_no'); ?>" />											
											<span style="color:red;"><?php echo form_error('mobile_no'); ?></span>
									</div>
									<div class="form-group">
                                            <label>Gender</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="gender" id="optionsRadios1" value="Male" <?php if($gender == 'Male'){ echo 'checked';}else if($gender == ''){ echo 'checked';} ?> >Male
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="gender" id="optionsRadios2" value="Female" <?php if($gender == 'Female'){ echo 'checked';} ?>>Female
                                                </label>
                                            </div>
										</div>
										
									<div class="form-group <?php if(form_error('state')){ echo 'has-error' ;} ?>">
                                            <label <?php if(form_error('state')){ echo 'class="control-label"' ;} ?>>State</label>
                                            <select name="state" class="form-control state" <?php if(form_error('state')){ echo 'id="error"' ;} ?>>											
                                                <option value="" >Select State</option>
                                                <?php
                                               //$sl='';
													foreach($states as $st)
													{
													   if($state == $st->id){$sl = 'selected';}else{ $sl=''; } 
														echo '<option value="'.$st->id.'" '.$sl.'>'.$st->name.'</option>';
													} 
												?>
                                            </select>
											<span style="color:red;"><?php echo form_error('state'); ?></span>
                                        </div>
									<div class="form-group <?php if(form_error('city')){ echo 'has-error' ;} ?>" id="city">
									  <?php if($city!='' or $state!=''){
										  $citiesDa = $this->common_model->getAllwhere('cities',array('state_id'=> $state));
										  ?>
                                            <label <?php if(form_error('city')){ echo 'class="control-label"' ;} ?>>City</label>
                                            <select name="city" class="form-control" <?php if(form_error('city')){ echo 'id="error"' ;} ?>>
												<option value="">Select</option>
													<?php
													  //$sl='';
														foreach($citiesDa as $ct)
														{
														    if($city == $ct->id){$sl = 'selected';}else{ $sl=''; } 
															echo '<option value="'.$ct->id.'" '.$sl.'>'.$ct->city_name.'</option>';
														} 
													?>																
											</select>
											<span style="color:red;"><?php echo form_error('city'); ?></span>
									  <?php } ?>
                                        </div>
									
                                        <div class="form-group <?php if(form_error('address')){ echo 'has-error' ;} ?>">
                                            <label <?php if(form_error('address')){ echo 'class="control-label"' ;} ?>>Full Address</label>
                                            <textarea name="address" placeholder="Enter Full Address" class="form-control" rows="3" <?php if(form_error('address')){ echo 'id="error"' ;} ?> ><?php echo set_value('address'); ?></textarea>
											<span style="color:red;"><?php echo form_error('address'); ?></span>
										</div>
										
										<div class="form-group">
                                            <label>Profile Pic:</label>
                                            <input type="file" name="profile_pic" id="profile_pic" />
                                        </div>
                                  
                            </div>
                        </div>
                            </div>
			<div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-danger">
                        <div class="panel-heading">
                           LOGIN &  BANK DETAILS & INTRODUCER DETAIS
                        </div>
							<div class="panel-body">
                                								
                                 <div class="form-group <?php if(form_error('email')){ echo 'has-error' ;} ?>">
                                            <label <?php if(form_error('email')){ echo 'class="control-label"' ;} ?>>User Email</label>
                                            <input <?php if(form_error('email')){ echo 'id="error"' ;} ?> placeholder="Enter User Email" class="form-control" type="text" name="email" value="<?php echo set_value('email'); ?>" />
											<span style="color:red;"><?php echo form_error('email'); ?></span>
                                        </div>
								<div class="form-group <?php if(form_error('pwd')){ echo 'has-error' ;} ?>">
                                            <label <?php if(form_error('pwd')){ echo 'class="control-label"' ;} ?>>Enter Password</label>
                                            <input <?php if(form_error('pwd')){ echo 'id="error"' ;} ?> placeholder="Enter Password" class="form-control" type="password" name="pwd" value="<?php echo set_value('pwd'); ?>" />
											<span style="color:red;"><?php echo form_error('pwd'); ?></span>
                                        </div>
                                <div class="form-group <?php if(form_error('rpwd')){ echo 'has-error' ;} ?>">
                                            <label <?php if(form_error('rpwd')){ echo 'class="control-label"' ;} ?>>Re Enter Password </label>
                                            <input <?php if(form_error('rpwd')){ echo 'id="error"' ;} ?> placeholder="Re Enter Password" class="form-control"  type="password" name="rpwd" value="<?php echo set_value('rpwd'); ?>" />
											<span style="color:red;"><?php echo form_error('rpwd'); ?></span>
                                        </div>
								
										<div class="panel-heading">
											BANK DETAILS
										</div>
										
								<div class="form-group <?php if(form_error('bank')){ echo 'has-error' ;} ?>">
                                            <label <?php if(form_error('bank')){ echo 'class="control-label"' ;} ?>>Select Bank</label>
                                            <select <?php if(form_error('bank')){ echo 'id="error"' ;} ?> class="form-control" name="bank">
                                                <option value="" >Select Bank</option>
                                                <?php
                                               //$sl='';
													foreach($banks as $b)
													{
														if($bank == $b->id){$sl = 'selected';}else{$sl='';}     
														echo '<option value="'.$b->id.'" '.$sl.'>'.$b->bank_name.'</option>';
													} 
												?>
                                            </select>
											<span style="color:red;"><?php echo form_error('bank'); ?></span>
                                        </div>
								<div class="form-group <?php if(form_error('account_no')){ echo 'has-error' ;} ?>">
                                            <label <?php if(form_error('account_no')){ echo 'class="control-label"' ;} ?>>Account Number</label>
                                            <input <?php if(form_error('account_no')){ echo 'id="error"' ;} ?> placeholder="Enter Account Number" class="form-control" type="text" name="account_no" value="<?php echo set_value('account_no'); ?>" />
											<span style="color:red;"><?php echo form_error('account_no'); ?></span>
                                        </div>
								<div class="form-group <?php if(form_error('ifsc')){ echo 'has-error' ;} ?>">
                                            <label <?php if(form_error('ifsc')){ echo 'class="control-label"' ;} ?>>IFSC Code</label>
                                            <input <?php if(form_error('ifsc')){ echo 'id="error"' ;} ?> placeholder="Enter IFSC Code" class="form-control" type="text" name="ifsc" value="<?php echo set_value('ifsc'); ?>" />
											<span style="color:red;"><?php echo form_error('ifsc'); ?></span>
                                        </div>
										
								<div class="panel-heading">
											INTRODUCER DETAILS ( Optional )
								</div>
								<div class="form-group <?php if(form_error('upper_id')){ echo 'has-error' ;} ?>">
                                            <label <?php if(form_error('upper_id')){ echo 'class="control-label"' ;} ?>>Introducer User ID</label>
                                            <input <?php if(form_error('upper_id')){ echo 'id="error"' ;} ?> placeholder="Enter User ID" class="form-control" type="text" name="upper_id" value="<?php echo set_value('upper_id'); ?>" />
											<span style="color:red;"><?php echo form_error('upper_id'); ?></span>
                                </div>								
                                 
                            </div>
							
							
                        </div>
                </div>
        </div>
		
		<div class="row pad-botm">
            <div class="col-md-12">
                <button type="submit" class="btn btn-info">Registration</button>
            </div>

        </div>
		</form>
		
        
    </div>
</div>

  <script type="text/javascript">  
  
$(document).ready(function(){
    $("select.state").change(function(){
        var selectedState = $(".state option:selected").val();        
        $.ajax({
            type: "POST",
			url : '<?php echo site_url();?>registration/getCity',
            data: { state : selectedState } 
        }).done(function(data){
            $("#city").html(data);
        });
        
    });
	
});
</script>