<div class="">

	  <div class="page-title">
		<div class="title_left">
		  <h3>Add Gallery Image</h3>
		</div>
		
	  </div>
	  <div class="clearfix"></div>
	  <div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
		  <div class="x_panel">
			
			<div class="x_content">
			  <br />
			  <form  class="form-horizontal form-label-left" method="post" autocomplete="off" action="<?php echo base_url('admin/add_gallery_image'); ?>" enctype="multipart/form-data">

				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Project <span class="required">*</span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
				  <select class="form-control col-md-7 col-xs-12 <?php if(form_error('project_id')){ echo "parsley-error"; } ?>" id="project_id" name="project_id">
						<option value="">Select Project</option>
						<?php if($projects) { foreach($projects as $row){  ?>
							<option <?php if(set_value('project_id') == $row->id) { echo 'selected'; } ?> value="<?php echo $row->id; ?>"><?php echo $row->project_title; ?></option>
						<?php }} ?>
					</select>
					<span style="color:red;"> <?php echo form_error('project_id'); ?></span>
				  </div>				  
				</div>
				<div class="form-group">
				  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image <span class="required">*</span>
				  </label>
				  <div class="col-md-6 col-sm-6 col-xs-12">
					<input type="file" name="userfile[]" value="" class="form-control col-md-7 col-xs-12 " required multiple="multiple">
					<span style="color:red;"> <?php echo form_error('image'); ?></span>
				  </div>
				</div>
				
				
				<div class="ln_solid"></div>
				<div class="form-group">
				  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">				
					<button type="submit" class="btn btn-success">Submit</button>
					<a href="<?php echo base_url() ?>admin" class="btn btn-danger">Back</a>
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
        CKEDITOR.replace('description');
    };
        </script>