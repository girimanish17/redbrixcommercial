<div class="">

	  <div class="page-title">
		<div class="title_left">
		  <h3>Gallery</h3>
		</div>
		
	  </div>
	  <div class="clearfix"></div>
	  <div class="col-md-12 col-sm-12 ">
	 
                <div class="x_panel">
               
                  <div class="x_title">
                    <h2> <small></small></h2>
             
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                  <?php if($this->session->flashdata('msg')) : ?>
					<div class="alert alert-primary text-center"><h4>
						<?= $this->session->flashdata('msg'); ?>
            </h4>
					</div>
				<?php endif; ?>
        <?php if($this->session->flashdata('msgError')) : ?>
					<div class="alert alert-danger text-center"><h4>
						<?= $this->session->flashdata('msgError'); ?>
            </h4>
					</div>
				<?php endif; ?>
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                   
                    <table id="" class="table table-striped	text-center" style="">
                      <thead>
                        <tr>
                          <th class="text-center"></th>
                          <th class="text-center">Title</th>
                          <th class="text-center">Action</th>
                        </tr>
                      </thead>
                      <tbody>
						<?php if($data) { foreach($data as $row) { 
               $p = $this->common_model->getsingle('projects', array('id' => $row->project_id));
              ?>
							<tr>
							<td width="15%;"><a href="<?php echo base_url()?>uploads/gallery/<?php echo $row->image ?>" target="blank"><img src="<?php echo base_url()?>uploads/gallery/<?php echo $row->image ?>" alt="blog" width="130px;"></a></td>
							<td><?php if($p) { echo $p->project_title; } ?></td>
							<td>
								<a href="<?php echo base_url(); ?>admin/delete_gallery_image/<?php echo $row->id ?>" onclick="return confirm('Do you want to delete the image');" class="btn btn-danger">Delete</a>
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
