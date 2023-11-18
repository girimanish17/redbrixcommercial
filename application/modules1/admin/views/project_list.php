<div class="">

	  <div class="page-title">
		<div class="title_left">
		  <h3>Project List</h3>
		</div>
		
	  </div>
	  <div class="clearfix"></div>
	  <div class="col-md-12 col-sm-12 ">
	  <?php if($this->session->userdata('msg')) { ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <?php echo $this->session->flashdata('msg'); ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php } ?>
                        <?php if($this->session->userdata('msgError')) { ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <?php echo $this->session->flashdata('msgError'); ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php } ?>
                <div class="x_panel">
                  <div class="x_title">
                    <h2> <small></small></h2>
             
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                   
                    <table id="" class="table table-striped	text-center" style="">
                      <thead>
                        <tr>
                          <th class="text-center"></th>
                          <th class="text-center">Title</th>
                          <th class="text-center">Exclusive</th>
                          <th class="text-center">Featured</th>
                          <th class="text-center">Guaranteed Return</th>
                          <th class="text-center">Other Properties</th>
                          <th class="text-center">Action</th>
                        </tr>
                      </thead>
                      <tbody>
						<?php if($data) { foreach($data as $row) { 
                if($row->featured_listing == 1){ $featured = 'Yes';} else { $featured = 'No';}
                if($row->exclusive_projects == 1){ $exclusive = 'Yes';} else { $exclusive = 'No';}
                if($row->guaranteed_return_project == 1){ $guaranteed = 'Yes';} else { $guaranteed = 'No';}
                if($row->other_properties == 1){ $other = 'Yes';} else { $other = 'No';}
            ?>
							<tr>
                <td width="15%;"><a href="<?php echo base_url()?>uploads/projects/<?php echo $row->project_image; ?>" target="blank"><img src="<?php echo base_url()?>uploads/projects/<?php echo $row->project_image; ?>" alt="project image" width="130px;"></a></td>
                <td><?php echo $row->project_title; ?></td>
                <td><?php echo $exclusive; ?></td>
                <td><?php echo $featured; ?></td>
                <td><?php echo $guaranteed; ?></td>
                <td><?php echo $other; ?></td>
                <td>
                  <a href="<?php echo base_url(); ?>admin/edit_project/<?php echo $row->id ?>" class="btn btn-primary">Edit</a>
                  <a href="<?php echo base_url(); ?>admin/delete_project/<?php echo $row->id ?>" onclick="return confirm('Do you want to delete the project');" class="btn btn-danger">Delete</a>
                </td>
							</tr>
                        <?php }} ?>
                      </tbody>
                    </table>
					  <!-- pagination start -->
					  <div class="mr-10" style="float:right;">
                                        <?php if (isset($links)) { ?>
                                            <nav class="" aria-label="Page navigation example">
                                        <?php echo $links ?>
                                            </nav>
                                        <?php } ?>
                                    </div>
                                    <!-- pagination end  -->
                  </div>
                  </div>
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
