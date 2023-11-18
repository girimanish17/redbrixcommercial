<div class="">

	  <div class="page-title">
		<div class="title_left">
		  <h3>Add Project</h3>
		</div>
		
	  </div>
	  <div class="clearfix"></div>
	  <div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
		  <div class="x_panel">
			
			<div class="x_content">
			  <br />
			  <form  class="form-horizontal form-label-left" method="post" autocomplete="off" action="<?php echo base_url('admin/add_project'); ?>" enctype="multipart/form-data">

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Category <span class="required">*</span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
				  	<select class="form-control col-md-7 col-xs-12 <?php if(form_error('category')){ echo "parsley-error"; } ?>" id="pr_type" name="category">
						<option value="">Select Category</option>
						<?php if($category) { foreach($category as $row){  ?>
							<option <?php if(set_value('category') == $row->id) { echo 'selected'; } ?> value="<?php echo $row->id; ?>"><?php echo $row->category; ?></option>
						<?php }} ?>
					</select>
					<span style="color:red;"> <?php echo form_error('category'); ?></span>
				  </div>				  
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Project Title <span class="required">*</span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" autocomplete="off" id="title" name="project_title" value="<?php echo set_value('project_title'); ?>" placeholder="Add Project Title" class="form-control col-md-7 col-xs-12 <?php if(form_error('project_title')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('project_title'); ?></span>
				  </div>				  
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Project Status <span class="required">*</span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
						<select class="form-control col-md-7 col-xs-12 <?php if(form_error('project_status')){ echo "parsley-error"; } ?>" id="project_status" name="project_status">
						<option value="">Select Project Status</option>
						<?php if($project_status) { foreach($project_status as $row){  ?>
							<option <?php if(set_value('project_status') == $row->id) { echo 'selected'; } ?> value="<?php echo $row->id; ?>"><?php echo $row->project_status; ?></option>
						<?php }} ?>
					</select>
					<span style="color:red;"> <?php echo form_error('project_status'); ?></span>
				  </div>				  
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Project Type <span class="required">*</span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" autocomplete="off" id="project_type" name="project_type" value="<?php echo set_value('project_type'); ?>" placeholder="Add Project Type" class="form-control col-md-7 col-xs-12 <?php if(form_error('project_type')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('project_type'); ?></span>
				  </div>				  
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Project Price <span class="required">*</span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" autocomplete="off" id="price" name="price" value="<?php echo set_value('price'); ?>" placeholder="Add Project Price" class="form-control col-md-7 col-xs-12 <?php if(form_error('price')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('price'); ?></span>
				  </div>				  
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Payment Plan <span class="required">*</span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" autocomplete="off" id="payment_plan" name="payment_plan" value="<?php echo set_value('payment_plan'); ?>" placeholder="Add Payment Plan" class="form-control col-md-7 col-xs-12 <?php if(form_error('payment_plan')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('payment_plan'); ?></span>
				  </div>				  
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Rera Number <span class="required">*</span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" autocomplete="off" id="rera_no" name="rera_no" value="<?php echo set_value('rera_no'); ?>" placeholder="Add Rera Number" class="form-control col-md-7 col-xs-12 <?php if(form_error('rera_no')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('rera_no'); ?></span>
				  </div>				  
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Location <span class="required">*</span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" autocomplete="off" id="address" name="address" value="<?php echo set_value('address'); ?>" placeholder="Add Address" class="form-control col-md-7 col-xs-12 <?php if(form_error('address')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('address'); ?></span>
				  </div>				  
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Project Description <span class="required">*</span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<textarea id="project_description" autocomplete="off" placeholder="Add Project Description" class="form-control <?php if(form_error('project_description')){ echo "parsley-error"; } ?>" name="project_description" ><?php echo set_value('project_description'); ?></textarea>
					<span style="color:red;"> <?php echo form_error('project_description'); ?></span>
				  </div>
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Backgound Image <span class="required">*</span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="file" name="bg_image" value="" class="form-control col-md-7 col-xs-12 " required>
					<span style="color:red;"> <?php echo form_error('bg_image'); ?></span>
				  </div>
				</div>
				
				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Home Slider Image <span class="required">*</span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="file" name="home_slider_image" value="" class="form-control col-md-7 col-xs-12 " required>
					<span style="color:red;"> <?php echo form_error('home_slider_image'); ?></span>
				  </div>
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Project Image <span class="required">*</span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="file" name="project_image" value="" class="form-control col-md-7 col-xs-12 " required>
					<span style="color:red;"> <?php echo form_error('project_image'); ?></span>
				  </div>
				</div>
				
			
				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Exclusive Projects <span class="required"></span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="checkbox" id="exclusive_projects" name="exclusive_projects" <?php if(set_value('exclusive_projects') == 1){ echo 'checked'; } ?> value="1" style="margin-top:11px;">
				  </div>				  
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Featured Listings <span class="required"></span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="checkbox" id="featured_listing" name="featured_listing" <?php if(set_value('featured_listing') == 1){ echo 'checked'; } ?> value="1" style="margin-top:11px;">
				  </div>				  
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Guaranteed Return Projects <span class="required"></span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="checkbox" id="guaranteed_return_project" name="guaranteed_return_project" <?php if(set_value('guaranteed_return_project') == 1){ echo 'checked'; } ?> value="1" style="margin-top:11px;">
				  </div>				  
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Other Properties <span class="required"></span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="checkbox" id="other_properties" name="other_properties" <?php if(set_value('other_properties') == 1){ echo 'checked'; } ?> value="1" style="margin-top:11px;">
				  </div>				  
				</div>

				<hr>
				<h3>Retail 1</h3>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Retail 1 Title 
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" autocomplete="off" id="pr_title1" name="pr_title1" value="<?php echo set_value('pr_title1'); ?>" placeholder="Add Retail Title" class="form-control col-md-7 col-xs-12 <?php if(form_error('pr_title1')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('pr_title1'); ?></span>
				  </div>				  
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Retail 1 Size 
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" autocomplete="off" id="pr_size1" name="pr_size1" value="<?php echo set_value('pr_size1'); ?>" placeholder="Add Retail Size" class="form-control col-md-7 col-xs-12 <?php if(form_error('pr_size1')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('pr_size1'); ?></span>
				  </div>				  
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Retail 1 Price 
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" autocomplete="off" id="pr_price1" name="pr_price1" value="<?php echo set_value('pr_price1'); ?>" placeholder="Add Retail Price" class="form-control col-md-7 col-xs-12 <?php if(form_error('pr_price1')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('pr_price1'); ?></span>
				  </div>				  
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Retail 1 Type 
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<select class="form-control col-md-7 col-xs-12 <?php if(form_error('pr_type1')){ echo "parsley-error"; } ?>" id="pr_type1" name="pr_type1">
						<option value="">Select Type</option>
						<?php if($retail_type) { foreach($retail_type as $row){  ?>
							<option <?php if(set_value('pr_type1') == $row->id) { echo 'selected'; } ?> value="<?php echo $row->id; ?>"><?php echo $row->type; ?></option>
						<?php }} ?>
					</select>
					<span style="color:red;"> <?php echo form_error('pr_type1'); ?></span>
				  </div>				  
				</div>

				<hr>
				<h3>Retail 2</h3>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Retail 2 Title
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" autocomplete="off" id="pr_title2" name="pr_title2" value="<?php echo set_value('pr_title2'); ?>" placeholder="Add Retail Title" class="form-control col-md-7 col-xs-12 <?php if(form_error('pr_title2')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('pr_title2'); ?></span>
				  </div>				  
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Retail 2 Size  
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" autocomplete="off" id="pr_size2" name="pr_size2" value="<?php echo set_value('pr_size2'); ?>" placeholder="Add Retail Size" class="form-control col-md-7 col-xs-12 <?php if(form_error('pr_size2')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('pr_size2'); ?></span>
				  </div>				  
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Retail 2 Price  
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" autocomplete="off" id="pr_price2" name="pr_price2" value="<?php echo set_value('pr_price2'); ?>" placeholder="Add Retail Price" class="form-control col-md-7 col-xs-12 <?php if(form_error('pr_price2')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('pr_price2'); ?></span>
				  </div>				  
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Retail 2 Type  
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<select class="form-control col-md-7 col-xs-12 <?php if(form_error('pr_type2')){ echo "parsley-error"; } ?>" id="pr_type2" name="pr_type2">
						<option value="">Select Type</option>
						<?php if($retail_type) { foreach($retail_type as $row){  ?>
							<option <?php if(set_value('pr_type2') == $row->id) { echo 'selected'; } ?> value="<?php echo $row->id; ?>"><?php echo $row->type; ?></option>
						<?php }} ?>
					</select>
					<span style="color:red;"> <?php echo form_error('pr_type2'); ?></span>
				  </div>				  
				</div>

				<hr>
				<h3>Retail 3</h3>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Retail 3 Title  
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" autocomplete="off" id="pr_title3" name="pr_title3" value="<?php echo set_value('pr_title3'); ?>" placeholder="Add Retail Title" class="form-control col-md-7 col-xs-12 <?php if(form_error('pr_title3')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('pr_title3'); ?></span>
				  </div>				  
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Retail 3 Size  
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" autocomplete="off" id="pr_size3" name="pr_size3" value="<?php echo set_value('pr_size3'); ?>" placeholder="Add Retail Size" class="form-control col-md-7 col-xs-12 <?php if(form_error('pr_size3')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('pr_size3'); ?></span>
				  </div>				  
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Retail 3 Price  
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" autocomplete="off" id="pr_price3" name="pr_price3" value="<?php echo set_value('pr_price3'); ?>" placeholder="Add Retail Price" class="form-control col-md-7 col-xs-12 <?php if(form_error('pr_price3')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('pr_price3'); ?></span>
				  </div>				  
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Retail 3 Type  
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<select class="form-control col-md-7 col-xs-12 <?php if(form_error('pr_type3')){ echo "parsley-error"; } ?>" id="pr_type3" name="pr_type3">
						<option value="">Select Type</option>
						<?php if($retail_type) { foreach($retail_type as $row){  ?>
							<option <?php if(set_value('pr_type3') == $row->id) { echo 'selected'; } ?> value="<?php echo $row->id; ?>"><?php echo $row->type; ?></option>
						<?php }} ?>
					</select>
					<span style="color:red;"> <?php echo form_error('pr_type3'); ?></span>
				  </div>				  
				</div>
				
				<hr>
				<h3>Retail 4</h3>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Retail 4 Title  
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" autocomplete="off" id="pr_title4" name="pr_title4" value="<?php echo set_value('pr_title4'); ?>" placeholder="Add Retail Title" class="form-control col-md-7 col-xs-12 <?php if(form_error('pr_title4')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('pr_title4'); ?></span>
				  </div>				  
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Retail 4 Size  
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" autocomplete="off" id="pr_size4" name="pr_size4" value="<?php echo set_value('pr_size4'); ?>" placeholder="Add Retail Size" class="form-control col-md-7 col-xs-12 <?php if(form_error('pr_size4')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('pr_size4'); ?></span>
				  </div>				  
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Retail 4 Price  
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" autocomplete="off" id="pr_price4" name="pr_price4" value="<?php echo set_value('pr_price4'); ?>" placeholder="Add Retail Price" class="form-control col-md-7 col-xs-12 <?php if(form_error('pr_price4')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('pr_price4'); ?></span>
				  </div>				  
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Retail 4 Type  
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<select class="form-control col-md-7 col-xs-12 <?php if(form_error('pr_type4')){ echo "parsley-error"; } ?>" id="pr_type4" name="pr_type4">
						<option value="">Select Type</option>
						<?php if($retail_type) { foreach($retail_type as $row){  ?>
							<option <?php if(set_value('pr_type4') == $row->id) { echo 'selected'; } ?> value="<?php echo $row->id; ?>"><?php echo $row->type; ?></option>
						<?php }} ?>
					</select>
					<span style="color:red;"> <?php echo form_error('pr_type4'); ?></span>
				  </div>				  
				</div>

				<hr>
				<h3>Project Highlights</h3>
				
				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Project Highlights Point 1 <span class="required"></span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" autocomplete="off" id="ph_point1" name="ph_point[]" value="<?php if($ph_point_array[0]){ echo $ph_point_array[0];} ?>" placeholder="Add Point 1" class="form-control col-md-7 col-xs-12 <?php if(form_error('ph_point[]')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('ph_point[]'); ?></span>
				  </div>				  
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Project Highlights Point 2 <span class="required"></span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" autocomplete="off" id="ph_point2" name="ph_point[]" value="<?php if($ph_point_array[1]){ echo $ph_point_array[1];} ?>" placeholder="Add Point 2" class="form-control col-md-7 col-xs-12 <?php if(form_error('ph_point[]')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('ph_point[]'); ?></span>
				  </div>				  
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Project Highlights Point 3 <span class="required"></span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
				  <input type="text" autocomplete="off" id="ph_point2" name="ph_point[]" value="<?php if($ph_point_array[2]){ echo $ph_point_array[2];} ?>" placeholder="Add Point 3" class="form-control col-md-7 col-xs-12 <?php if(form_error('ph_point[]')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('ph_point[]'); ?></span>
				  </div>				  
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Project Highlights Point 4 <span class="required"></span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
				  <input type="text" autocomplete="off" id="ph_point2" name="ph_point[]" value="<?php if($ph_point_array[3]){ echo $ph_point_array[3];} ?>" placeholder="Add Point 4" class="form-control col-md-7 col-xs-12 <?php if(form_error('ph_point[]')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('ph_point[]'); ?></span>
				  </div>				  
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Project Highlights Point 5 <span class="required"></span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
				  <input type="text" autocomplete="off" id="ph_point2" name="ph_point[]" value="<?php if($ph_point_array[4]){ echo $ph_point_array[4];} ?>" placeholder="Add Point 5" class="form-control col-md-7 col-xs-12 <?php if(form_error('ph_point[]')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('ph_point[]'); ?></span>
				  </div>				  
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Project Highlights Point 6 <span class="required"></span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
				  <input type="text" autocomplete="off" id="ph_point2" name="ph_point[]" value="<?php if($ph_point_array[5]){ echo $ph_point_array[5];} ?>" placeholder="Add Point 6" class="form-control col-md-7 col-xs-12 <?php if(form_error('ph_point[]')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('ph_point[]'); ?></span>
				  </div>				  
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Project Highlights Point 7 <span class="required"></span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
				  <input type="text" autocomplete="off" id="ph_point2" name="ph_point[]" value="<?php if($ph_point_array[6]){ echo $ph_point_array[6];} ?>" placeholder="Add Point 7" class="form-control col-md-7 col-xs-12 <?php if(form_error('ph_point[]')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('ph_point[]'); ?></span>
				  </div>				  
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Project Highlights Image <span class="required">*</span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="file" name="highlight_bg_image" value="" class="form-control col-md-7 col-xs-12 " required>
					<span style="color:red;"> <?php echo form_error('highlight_bg_image'); ?></span>
				  </div>
				</div>

				<hr>
				<h3>Project Amenties</h3>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Project Amenties Point 1 <span class="required"></span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" autocomplete="off" id="pm_point1" name="pm_point[]" value="<?php if($pm_point_array[0]){ echo $pm_point_array[0];} ?>" placeholder="Add Point 1" class="form-control col-md-7 col-xs-12 <?php if(form_error('pm_point[]')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('pm_point[]'); ?></span>
				  </div>				  
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Project Amenties Point 2 <span class="required"></span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
				  <input type="text" autocomplete="off" id="pm_point1" name="pm_point[]" value="<?php if($pm_point_array[1]){ echo $pm_point_array[1];} ?>" placeholder="Add Point 2" class="form-control col-md-7 col-xs-12 <?php if(form_error('pm_point[]')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('pm_point[]'); ?></span>
				  </div>				  
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Project Amenties Point 3 <span class="required"></span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
				  <input type="text" autocomplete="off" id="pm_point1" name="pm_point[]" value="<?php if($pm_point_array[2]){ echo $pm_point_array[2];} ?>" placeholder="Add Point 3" class="form-control col-md-7 col-xs-12 <?php if(form_error('pm_point[]')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('pm_point[]'); ?></span>
				  </div>				  
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Project Amenties Point 4 <span class="required"></span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
				  <input type="text" autocomplete="off" id="pm_point1" name="pm_point[]" value="<?php if($pm_point_array[3]){ echo $pm_point_array[3];} ?>" placeholder="Add Point 4" class="form-control col-md-7 col-xs-12 <?php if(form_error('pm_point[]')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('pm_point[]'); ?></span>
				  </div>				  
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Project Amenties Point 5 <span class="required"></span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
				  <input type="text" autocomplete="off" id="pm_point1" name="pm_point[]" value="<?php if($pm_point_array[4]){ echo $pm_point_array[4];} ?>" placeholder="Add Point 5" class="form-control col-md-7 col-xs-12 <?php if(form_error('pm_point[]')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('pm_point[]'); ?></span>
				  </div>				  
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Project Amenties Point 6 <span class="required"></span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
				  <input type="text" autocomplete="off" id="pm_point1" name="pm_point[]" value="<?php if($pm_point_array[5]){ echo $pm_point_array[5];} ?>" placeholder="Add Point 6" class="form-control col-md-7 col-xs-12 <?php if(form_error('pm_point[]')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('pm_point[]'); ?></span>
				  </div>				  
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Project Amenties Point 7 <span class="required"></span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
				  <input type="text" autocomplete="off" id="pm_point1" name="pm_point[]" value="<?php if($pm_point_array[6]){ echo $pm_point_array[6];} ?>" placeholder="Add Point 7" class="form-control col-md-7 col-xs-12 <?php if(form_error('pm_point[]')){ echo "parsley-error"; } ?>">
					<span style="color:red;"> <?php echo form_error('pm_point[]'); ?></span>
				  </div>				  
				</div>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Project Amenties Image <span class="required">*</span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="file" name="amenties_bg_image" value="" class="form-control col-md-7 col-xs-12 " required>
					<span style="color:red;"> <?php echo form_error('amenties_bg_image'); ?></span>
				  </div>
				</div>
				
				
				<hr>
				<h3>Right Side Option</h3>

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Option 1 <span class="required"></span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" autocomplete="off" id="right_option1" name="right_option1" value="<?php echo set_value('right_option1'); ?>" placeholder="Option 1" class="form-control col-md-7 col-xs-12 ">
					<span style="color:red;"> <?php echo form_error('right_option1'); ?></span>
				  </div>				  
				</div>
				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Option 2 <span class="required"></span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" autocomplete="off" id="right_option2" name="right_option2" value="<?php echo set_value('right_option2'); ?>" placeholder="Option 2" class="form-control col-md-7 col-xs-12 ">
					<span style="color:red;"> <?php echo form_error('right_option2'); ?></span>
				  </div>				  
				</div>
				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Option 3 <span class="required"></span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" autocomplete="off" id="right_option3" name="right_option3" value="<?php echo set_value('right_option3'); ?>" placeholder="Option 3" class="form-control col-md-7 col-xs-12 ">
					<span style="color:red;"> <?php echo form_error('right_option3'); ?></span>
				  </div>				  
				</div>
				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Option 4 <span class="required"></span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" autocomplete="off" id="right_option4" name="right_option4" value="<?php echo set_value('right_option4'); ?>" placeholder="Option 4" class="form-control col-md-7 col-xs-12 ">
					<span style="color:red;"> <?php echo form_error('right_option4'); ?></span>
				  </div>				  
				</div>

				<div class="ln_solid"></div>
				<div class="form-group">
				  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">				
					<button type="submit" class="btn btn-success">Submit</button>
					<a href="<?php echo base_url() ?>admin/project_list" class="btn btn-danger">Back</a>
				  </div>
				</div>

			  </form>
			</div>
		  </div>
		</div>
	  </div>
		  
</div>
<script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>

  <!-- bootstrap progress js -->
  <script src="<?php echo base_url(); ?>js/progressbar/bootstrap-progressbar.min.js"></script>
  <script src="<?php echo base_url(); ?>js/nicescroll/jquery.nicescroll.min.js"></script>
  <!-- icheck -->
  <script src="<?php echo base_url(); ?>js/icheck/icheck.min.js"></script>
  <!-- tags -->
  <script src="<?php echo base_url(); ?>js/tags/jquery.tagsinput.min.js"></script>
  <!-- switchery -->
  <script src="<?php echo base_url(); ?>js/switchery/switchery.min.js"></script>
  <!-- daterangepicker -->
  <script type="text/javascript" src="<?php echo base_url(); ?>js/moment/moment.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>js/datepicker/daterangepicker.js"></script>
  <!-- richtext editor -->
  <script src="<?php echo base_url(); ?>js/editor/bootstrap-wysiwyg.js"></script>
  <script src="<?php echo base_url(); ?>js/editor/external/jquery.hotkeys.js"></script>
  <script src="<?php echo base_url(); ?>js/editor/external/google-code-prettify/prettify.js"></script>
  <!-- select2 -->
  <script src="<?php echo base_url(); ?>js/select/select2.full.js"></script>
  <!-- form validation -->
  <script type="text/javascript" src="<?php echo base_url(); ?>js/parsley/parsley.min.js"></script>
  <!-- textarea resize -->
  <script src="<?php echo base_url(); ?>js/textarea/autosize.min.js"></script>
  <script>
    autosize($('.resizable_textarea'));
  </script>
  <!-- Autocomplete -->
  <script type="text/javascript" src="<?php echo base_url(); ?>js/autocomplete/countries.js"></script>
  <script src="<?php echo base_url(); ?>js/autocomplete/jquery.autocomplete.js"></script>
  <!-- pace -->
  <script src="<?php echo base_url(); ?>js/pace/pace.min.js"></script>
  
  <script src="<?php echo base_url(); ?>js/custom.js"></script>
  <script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
        <script>
                window.onload = function() {
        CKEDITOR.replace('project_description');
    };
        </script>