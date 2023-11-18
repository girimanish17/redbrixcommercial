<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

   	public function __construct()
	{
		parent::__construct();
		 $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		date_default_timezone_set('Asia/Calcutta'); 
		$this->userid = $this->session->userdata('user_id');
		$this->load->model(array('admin/common_model'));
		
	}
	
	public function index($page = '')
	{
		if($this->session->userdata('id') !='')
		{	
			$data['msg'] = $this->session->flashdata('msg');
			
			$data['main_content'] = 'dashboard';
			$this->load->view('includes/admin_template',$data);
		}
		else
		{
			redirect('login');
		}
            
	}

	public function add_blog()
	{
		if($this->session->userdata('id') =='')
		{
			redirect('login');
		}

		$file_path =  'uploads/blogs';
		$config['upload_path']          =$file_path;
   		$config['allowed_types']        = '*';
   		$this->load->library('upload', $config);
		
		$this->form_validation->set_rules('title', 'Title', 'trim|required');
		$this->form_validation->set_rules('description', 'Description', 'trim|required');

		if($this->form_validation->run())
		{
			if($this->upload->do_upload('image'))
			{
				$image = $this->upload->data('file_name');
			}

			$title = $this->input->post('title');
			$slug = url_title($title, 'dash', TRUE);
			
			$checkSlug = $this->common_model->getsingle('blogs', array('slug' => $slug));
			
			if ($checkSlug) 
			{
				for ($i = 1; $i <= 99999; $i++) 
				{
					$rand = rand(11, 99);
					$newSlug = $slug . '-' . $rand;
					$checkNewSlug = $this->common_model->getsingle('blogs', array('slug' => $newSlug));
					if (!$checkNewSlug) {
						$slug = $newSlug;
						break; 
					}
				}
			}
			
			$insert['title'] = $this->input->post('title');
			$insert['image'] = $image;
			$insert['description'] = $this->input->post('description');
			$insert['slug'] = $slug;
			$insert['date'] = date('y-m-d h:i:s');

			$res = $this->common_model->insertData('blogs', $insert);
			if($res){
				$this->session->set_flashdata('msg', 'Blog added successfully.');
			} else {
				$this->session->set_flashdata('msgError', 'Blog failed to add.');
			}

			redirect('admin/blog_list');
		}

		$data['main_content'] = 'add_blog';
		$this->load->view('includes/admin_template',$data);
	}

	public function blog_list()
	{
		if($this->session->userdata('id') =='')
		{
			redirect('login');
		}

		$total_row = $this->common_model->record_count('blogs', array());
		$config = array();
		$config["base_url"] = base_url() ."/admin/blog_list";
		$config["total_rows"] = $total_row;
		$config["per_page"] = 10;		
		$config['num_links'] = 3;
		$config['uri_segment'] = 3;
		$config['use_page_numbers'] = false;
		$config['reuse_query_string'] = false;		 
		$config['full_tag_open'] = '<ul class="pagination pagination-sm">'; 
		$config['full_tag_close'] = '</ul>';
		$config['attributes'] = ['class' => 'page-link'];
		$config['first_link'] = false;
		$config['last_link'] = false;
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = 'Previous';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = 'Next';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
		$config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';
		$this->pagination->initialize($config);
		if($this->uri->segment(3)){
			$page = ($this->uri->segment(3)) ;
			$data['sno'] = $this->uri->segment(3)+1;
		}
		else{
			$page = 0;
			$data['sno'] = 1;
		}
		$data["links"] = $this->pagination->create_links(); 
		$data['data'] = $this->common_model->getAllwhere_pagination('blogs', $config['per_page'], $page, array(), 'id', 'desc');
		// echo "<pre>"; print_r($data['data']); die;
		$data['main_content'] = 'blog_list';
		$this->load->view('includes/admin_template',$data);
	}
	
	public function delete_blog($id)
	{
		if($this->session->userdata('id') =='')
		{
			redirect('login');
		}

		$this->common_model->deleteData('blogs', array('id' => $id));
		$this->session->set_flashdata('msg', 'Blog deleted successfully.');
		redirect('admin/blog_list');
	}

	public function edit_blog($id)
	{
		if($this->session->userdata('id') =='')
		{
			redirect('login');
		}

		$file_path =  'uploads/blogs';
		$config['upload_path']          =$file_path;
		$config['allowed_types']        = '*';
		$this->load->library('upload', $config);
		
		$data['data'] = $rec = $this->common_model->getsingle('blogs', array('id' => $id));
		$image = $old_image = $rec->image;
		$slug = $rec->slug;
		$old_title = $rec->title;

		$this->form_validation->set_rules('title', 'Title', 'trim|required');
		$this->form_validation->set_rules('description', 'Description', 'trim|required');

		if($this->form_validation->run())
		{
			if($this->upload->do_upload('image'))
			{
				$image = $this->upload->data('file_name');
				unlink('uploads/blogs/'.$old_image);
			}

			$title = $this->input->post('title');
			
			if($title != $old_title OR $slug == '')
			{
				$slug = url_title($title, 'dash', TRUE);
			
				$checkSlug = $this->common_model->getsingle('blogs', array('slug' => $slug));
				
				if ($checkSlug) 
				{
					for ($i = 1; $i <= 99999; $i++) 
					{
						$rand = rand(11, 99);
						$newSlug = $slug . '-' . $rand;
						$checkNewSlug = $this->common_model->getsingle('blogs', array('slug' => $newSlug));
						if (!$checkNewSlug) {
							$slug = $newSlug;
							break; 
						}
					}
				}
			}
			
			$insertUpd['title'] = $title;
			$insertUpd['image'] = $image;
			$insertUpd['description'] = $this->input->post('description');
			$insertUpd['slug'] = $slug;

			$res = $this->common_model->updateData('blogs', $insertUpd, array('id' => $id));
			$this->session->set_flashdata('msg', 'Blog updated successfully.');
			redirect('admin/blog_list');
		}

		$data['main_content'] = 'edit_blog';
		$this->load->view('includes/admin_template',$data);
	}

	public function add_project()
	{
		if($this->session->userdata('id') =='')
		{
			redirect('login');
		}

		$file_path =  'uploads/projects';
		$config['upload_path']          =$file_path;
		$config['allowed_types']        = '*';
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);

		$data['ph_point_array'] = $this->input->post('ph_point');
		$data['pm_point_array'] = $this->input->post('pm_point');
		
		$this->form_validation->set_rules('category', 'Category', 'trim|required');
		$this->form_validation->set_rules('project_title', 'Project Title', 'trim|required');
		$this->form_validation->set_rules('project_status', 'Project Status', 'trim|required');
		$this->form_validation->set_rules('project_type', 'Project Type', 'trim|required');
		$this->form_validation->set_rules('price', 'Project Price', 'trim|required');
		$this->form_validation->set_rules('payment_plan', 'Payment Plan', 'trim|required');
		$this->form_validation->set_rules('rera_no', 'Rera number', 'trim|required');
		$this->form_validation->set_rules('address', 'Location', 'trim|required');
		$this->form_validation->set_rules('project_description', 'Project description', 'trim|required');

		/*$this->form_validation->set_rules('pr_title1', 'Retail Title 1', 'trim|required');
		$this->form_validation->set_rules('pr_size1', 'Retail Size 1', 'trim|required');
		$this->form_validation->set_rules('pr_price1', 'Retail price 1', 'trim|required');
		$this->form_validation->set_rules('pr_type1', 'Retail type 1', 'trim|required');

		$this->form_validation->set_rules('pr_title2', 'Retail Title 2', 'trim|required');
		$this->form_validation->set_rules('pr_size2', 'Retail Size 2', 'trim|required');
		$this->form_validation->set_rules('pr_price2', 'Retail price 2', 'trim|required');
		$this->form_validation->set_rules('pr_type2', 'Retail type 2', 'trim|required');

		$this->form_validation->set_rules('pr_title3', 'Retail Title 3', 'trim|required');
		$this->form_validation->set_rules('pr_size3', 'Retail Size 3', 'trim|required');
		$this->form_validation->set_rules('pr_price3', 'Retail price 3', 'trim|required');
		$this->form_validation->set_rules('pr_type3', 'Retail type 3', 'trim|required');*/

		if($this->form_validation->run())
		{
			$rand = rand(111, 999);
			
			if($this->upload->do_upload('bg_image'))
			{
				$bg_image = $this->upload->data('file_name');
				

			}
			
			if($this->upload->do_upload('home_slider_image'))
			{
				$home_slider_image = $this->upload->data('file_name');
				

			}

			if($this->upload->do_upload('project_image'))
			{
				$project_image = $this->upload->data('file_name');
				
			}

			if($this->upload->do_upload('highlight_bg_image'))
			{
				$highlight_bg_image = $this->upload->data('file_name');
			}

			if($this->upload->do_upload('amenties_bg_image'))
			{
				$amenties_bg_image = $this->upload->data('file_name');
			}

			$project_title = $this->input->post('project_title');
			$slug = url_title($project_title, 'dash', TRUE);
			$checkSlug = $this->common_model->getsingle('projects', array('slug' => $slug));
			if ($checkSlug) 
			{
				for ($i = 1; $i <= 99999; $i++) 
				{
					$rand = rand(11, 99);
					$newSlug = $slug . '-' . $rand;
					$checkNewSlug = $this->common_model->getsingle('projects', array('slug' => $newSlug));
					if (!$checkNewSlug) {
						$slug = $newSlug;
						break; 
					}
				}
			}

			$Project_insert['category'] = $this->input->post('category');
			$Project_insert['project_title'] = $this->input->post('project_title');
			$Project_insert['project_status'] = $this->input->post('project_status');
			$Project_insert['project_type'] = $this->input->post('project_type');
			$Project_insert['price'] = $this->input->post('price');
			$Project_insert['payment_plan'] = $this->input->post('payment_plan');
			$Project_insert['rera_no'] = $this->input->post('rera_no');
			$Project_insert['address'] = $this->input->post('address');
			$Project_insert['project_description'] = $this->input->post('project_description');
			$Project_insert['bg_image'] = $bg_image;
			$Project_insert['home_slider_image'] = $home_slider_image;
			$Project_insert['project_image'] = $project_image;
			$Project_insert['highlight_bg_image'] = $highlight_bg_image;
			$Project_insert['amenties_bg_image'] = $amenties_bg_image;
			$Project_insert['exclusive_projects'] = $this->input->post('exclusive_projects');
			$Project_insert['featured_listing'] = $this->input->post('featured_listing');
			$Project_insert['guaranteed_return_project'] = $this->input->post('guaranteed_return_project');
			$Project_insert['other_properties'] = $this->input->post('other_properties');
			$Project_insert['slug'] = $slug;
			$Project_insert['date'] = date('Y-m-d');
			
			$Project_insert['right_option1'] = $this->input->post('right_option1');
			$Project_insert['right_option2'] = $this->input->post('right_option2');
			$Project_insert['right_option3'] = $this->input->post('right_option3');
			$Project_insert['right_option4'] = $this->input->post('right_option4');
			
			$project_id = $this->common_model->insertData('projects', $Project_insert);
			
			$insert_retail1['project_id'] = $project_id; 
			$insert_retail1['pr_title'] = $this->input->post('pr_title1'); 
			$insert_retail1['pr_size'] = $this->input->post('pr_size1'); 
			$insert_retail1['pr_price'] = $this->input->post('pr_price1'); 
			$insert_retail1['pr_type'] = $this->input->post('pr_type1'); 

			$this->common_model->insertData('project_retail', $insert_retail1);

			$insert_retail2['project_id'] = $project_id; 
			$insert_retail2['pr_title'] = $this->input->post('pr_title2'); 
			$insert_retail2['pr_size'] = $this->input->post('pr_size2'); 
			$insert_retail2['pr_price'] = $this->input->post('pr_price2'); 
			$insert_retail2['pr_type'] = $this->input->post('pr_type2'); 

			$this->common_model->insertData('project_retail', $insert_retail2);

			$insert_retail3['project_id'] = $project_id; 
			$insert_retail3['pr_title'] = $this->input->post('pr_title3'); 
			$insert_retail3['pr_size'] = $this->input->post('pr_size3'); 
			$insert_retail3['pr_price'] = $this->input->post('pr_price3'); 
			$insert_retail3['pr_type'] = $this->input->post('pr_type3'); 

			$this->common_model->insertData('project_retail', $insert_retail3);
			
			$insert_retail4['project_id'] = $project_id; 
			$insert_retail4['pr_title'] = $this->input->post('pr_title4'); 
			$insert_retail4['pr_size'] = $this->input->post('pr_size4'); 
			$insert_retail4['pr_price'] = $this->input->post('pr_price4'); 
			$insert_retail4['pr_type'] = $this->input->post('pr_type4'); 

			$this->common_model->insertData('project_retail', $insert_retail4);

			$ph_point = $this->input->post('ph_point');
			for ($i=0; $i < count($ph_point) ; $i++) { 
				$insert_ph['project_id'] = $project_id;;
				$insert_ph['ph_point'] = $ph_point[$i];

				$this->common_model->insertData('project_highlights', $insert_ph);
			}

			$pm_point = $this->input->post('pm_point');
			for ($i=0; $i < count($pm_point) ; $i++) { 
				$insert_pm['project_id'] = $project_id;;
				$insert_pm['pm_points'] = $pm_point[$i];

				$this->common_model->insertData('project_amenties', $insert_pm);
			}
			$this->session->set_flashdata('msg', 'Project addedd successfully.');
			redirect('admin/project_list');
		}

		$data['retail_type'] = $this->common_model->getAllwhere('retail_type', array());
		$data['category'] = $this->common_model->getAllwhere('categories', array());
		$data['project_status'] = $this->common_model->getAllwhere('project_status', array());
		
		$data['main_content'] = 'add_project';
		$this->load->view('includes/admin_template',$data);
	}

	public function project_list()
	{
		if($this->session->userdata('id') =='')
		{
			redirect('login');
		}

		$total_row = $this->common_model->record_count('projects', array());
		$config = array();
		$config["base_url"] = base_url() ."/admin/project_list";
		$config["total_rows"] = $total_row;
		$config["per_page"] = 10;		
		$config['num_links'] = 3;
		$config['uri_segment'] = 3;
		$config['use_page_numbers'] = false;
		$config['reuse_query_string'] = false;		 
		$config['full_tag_open'] = '<ul class="pagination pagination-sm">'; 
		$config['full_tag_close'] = '</ul>';
		$config['attributes'] = ['class' => 'page-link'];
		$config['first_link'] = false;
		$config['last_link'] = false;
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = 'Previous';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = 'Next';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
		$config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';
		$this->pagination->initialize($config);
		if($this->uri->segment(3)){
			$page = ($this->uri->segment(3)) ;
			$data['sno'] = $this->uri->segment(3)+1;
		}
		else{
			$page = 0;
			$data['sno'] = 1;
		}
		$data["links"] = $this->pagination->create_links(); 
		$data['data'] = $this->common_model->getAllwhere_pagination('projects', $config['per_page'], $page, array(), 'id', 'desc');

		$data['main_content'] = 'project_list';
		$this->load->view('includes/admin_template',$data);
	}
	
	public function delete_project($id)
	{
		if($this->session->userdata('id') =='')
		{
			redirect('login');
		}

		$this->common_model->deleteData('project_retail', array('project_id' => $id));
		$this->common_model->deleteData('project_amenties', array('project_id' => $id));
		$this->common_model->deleteData('project_highlights', array('project_id' => $id));
		$this->common_model->deleteData('projects', array('id' => $id));

		$this->session->set_flashdata('msg', 'Project deleted successfully.');
		redirect('admin/project_list');
	}

	public function edit_project($id)
	{
		if($this->session->userdata('id') =='')
		{
			redirect('login');
		}

		$file_path =  'uploads/projects';
		$config['upload_path']          =$file_path;
		$config['allowed_types']        = '*';
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);

		$data['retail_type'] = $this->common_model->getAllwhere('retail_type', array());
		$data['category'] = $this->common_model->getAllwhere('categories', array());
		$data['project_statusS'] = $this->common_model->getAllwhere('project_status', array());
		$data['data'] = $pr = $this->common_model->projectSingleDetails(array('projects.id' => $id));

		$bg_image = $old_bg_image = $pr->bg_image;
		$home_slider_image = $old_home_slider_image = $pr->home_slider_image;
		$project_image = $old_project_image = $pr->project_image;
		$highlight_bg_image = $old_highlight_bg_image = $pr->highlight_bg_image;
		$amenties_bg_image = $old_amenties_bg_image = $pr->amenties_bg_image;
		$slug = $pr->slug;
		$old_project_title = $pr->project_title;
		// echo $old_project_title; die;

		$this->form_validation->set_rules('category', 'Category', 'trim|required');
		$this->form_validation->set_rules('project_title', 'Project Title', 'trim|required');
		$this->form_validation->set_rules('project_status', 'Project Status', 'trim|required');
		$this->form_validation->set_rules('project_type', 'Project Type', 'trim|required');
		$this->form_validation->set_rules('price', 'Project Price', 'trim|required');
		$this->form_validation->set_rules('payment_plan', 'Payment Plan', 'trim|required');
		$this->form_validation->set_rules('rera_no', 'Rera number', 'trim|required');
		$this->form_validation->set_rules('address', 'Location', 'trim|required');
		$this->form_validation->set_rules('project_description', 'Project description', 'trim|required');

		/*$this->form_validation->set_rules('pr_title1', 'Retail Title 1', 'trim|required');
		$this->form_validation->set_rules('pr_size1', 'Retail Size 1', 'trim|required');
		$this->form_validation->set_rules('pr_price1', 'Retail price 1', 'trim|required');
		$this->form_validation->set_rules('pr_type1', 'Retail type 1', 'trim|required');

		$this->form_validation->set_rules('pr_title2', 'Retail Title 2', 'trim|required');
		$this->form_validation->set_rules('pr_size2', 'Retail Size 2', 'trim|required');
		$this->form_validation->set_rules('pr_price2', 'Retail price 2', 'trim|required');
		$this->form_validation->set_rules('pr_type2', 'Retail type 2', 'trim|required');

		$this->form_validation->set_rules('pr_title3', 'Retail Title 3', 'trim|required');
		$this->form_validation->set_rules('pr_size3', 'Retail Size 3', 'trim|required');
		$this->form_validation->set_rules('pr_price3', 'Retail price 3', 'trim|required');
		$this->form_validation->set_rules('pr_type3', 'Retail type 3', 'trim|required');*/

		if($this->form_validation->run())
		{
			
			//echo "<pre>"; print_r($this->input->post()); die;
			//$random = rand(111, 999);
			
			if($this->upload->do_upload('bg_image'))
			{
				$bg_image = $this->upload->data('file_name');
				
				//unlink('uploads/projects/'.$old_bg_image);
			}
			
			if($this->upload->do_upload('home_slider_image'))
			{
				$home_slider_image = $this->upload->data('file_name');
				
				//unlink('uploads/projects/'.$old_home_slider_image);
			}

			if($this->upload->do_upload('project_image'))
			{
				$project_image = $this->upload->data('file_name');
				unlink('uploads/projects/'.$old_project_image);
			}

			if($this->upload->do_upload('highlight_bg_image'))
			{
				$highlight_bg_image = $this->upload->data('file_name');
				unlink('uploads/projects/'.$old_highlight_bg_image);
			}

			if($this->upload->do_upload('amenties_bg_image'))
			{
				$amenties_bg_image = $this->upload->data('file_name');
				unlink('uploads/projects/'.$old_amenties_bg_image);
			}

			$project_title = $this->input->post('project_title');

			if($project_title != $old_project_title OR $slug == '')
			{
				$slug = url_title($project_title, 'dash', TRUE);
			
				$checkSlug = $this->common_model->getsingle('projects', array('slug' => $slug));
				
				if ($checkSlug) 
				{
					for ($i = 1; $i <= 99999; $i++) 
					{
						$rand = rand(11, 99);
						$newSlug = $slug . '-' . $rand;
						$checkNewSlug = $this->common_model->getsingle('projects', array('slug' => $newSlug));
						if (!$checkNewSlug) {
							$slug = $newSlug;
							break; 
						}
					}
				}
			}

			$Project_insertUPd['category'] = $this->input->post('category');
			$Project_insertUPd['project_title'] = $this->input->post('project_title');
			$Project_insertUPd['project_status'] = $this->input->post('project_status');
			$Project_insertUPd['project_type'] = $this->input->post('project_type');
			$Project_insertUPd['price'] = $this->input->post('price');
			$Project_insertUPd['payment_plan'] = $this->input->post('payment_plan');
			$Project_insertUPd['rera_no'] = $this->input->post('rera_no');
			$Project_insertUPd['address'] = $this->input->post('address');
			$Project_insertUPd['project_description'] = $this->input->post('project_description');
			$Project_insertUPd['bg_image'] = $bg_image;
			$Project_insertUPd['home_slider_image'] = $home_slider_image;
			$Project_insertUPd['project_image'] = $project_image;
			$Project_insertUPd['highlight_bg_image'] = $highlight_bg_image;
			$Project_insertUPd['amenties_bg_image'] = $amenties_bg_image;
			$Project_insertUPd['exclusive_projects'] = $this->input->post('exclusive_projects');
			$Project_insertUPd['featured_listing'] = $this->input->post('featured_listing');
			$Project_insertUPd['guaranteed_return_project'] = $this->input->post('guaranteed_return_project');
			$Project_insertUPd['other_properties'] = $this->input->post('other_properties');
			$Project_insertUPd['slug'] = $slug;
			
			
			$Project_insertUPd['right_option1'] = $this->input->post('right_option1');
			$Project_insertUPd['right_option2'] = $this->input->post('right_option2');
			$Project_insertUPd['right_option3'] = $this->input->post('right_option3');
			$Project_insertUPd['right_option4'] = $this->input->post('right_option4');

			$this->common_model->updateData('projects', $Project_insertUPd, array('id' => $id));

			$this->common_model->deleteData('project_retail', array('project_id' => $id));

			$insert_retail1_upd['project_id'] = $id; 
			$insert_retail1_upd['pr_title'] = $this->input->post('pr_title1'); 
			$insert_retail1_upd['pr_size'] = $this->input->post('pr_size1'); 
			$insert_retail1_upd['pr_price'] = $this->input->post('pr_price1'); 
			$insert_retail1_upd['pr_type'] = $this->input->post('pr_type1'); 

			$this->common_model->insertData('project_retail', $insert_retail1_upd);

			$insert_retail2_upd['project_id'] = $id; 
			$insert_retail2_upd['pr_title'] = $this->input->post('pr_title2'); 
			$insert_retail2_upd['pr_size'] = $this->input->post('pr_size2'); 
			$insert_retail2_upd['pr_price'] = $this->input->post('pr_price2'); 
			$insert_retail2_upd['pr_type'] = $this->input->post('pr_type2'); 

			$this->common_model->insertData('project_retail', $insert_retail2_upd);

			$insert_retail3_upd['project_id'] = $id; 
			$insert_retail3_upd['pr_title'] = $this->input->post('pr_title3'); 
			$insert_retail3_upd['pr_size'] = $this->input->post('pr_size3'); 
			$insert_retail3_upd['pr_price'] = $this->input->post('pr_price3'); 
			$insert_retail3_upd['pr_type'] = $this->input->post('pr_type3'); 

			$this->common_model->insertData('project_retail', $insert_retail3_upd);
			
			$insert_retail4['project_id'] = $id; 
			$insert_retail4['pr_title'] = $this->input->post('pr_title4'); 
			$insert_retail4['pr_size'] = $this->input->post('pr_size4'); 
			$insert_retail4['pr_price'] = $this->input->post('pr_price4'); 
			$insert_retail4['pr_type'] = $this->input->post('pr_type4'); 

			$this->common_model->insertData('project_retail', $insert_retail4);
			
			$this->common_model->deleteData('project_highlights', array('project_id' => $id));
			$data['ph_point_array'] = $ph_point = $this->input->post('ph_point');
			for ($i=0; $i < count($ph_point) ; $i++) { 
				$insert_ph_upd['project_id'] = $id;;
				$insert_ph_upd['ph_point'] = $ph_point[$i];

				$this->common_model->insertData('project_highlights', $insert_ph_upd);
			}

			$this->common_model->deleteData('project_amenties', array('project_id' => $id));
			$data['pm_point_array'] = $pm_point = $this->input->post('pm_point');
			for ($i=0; $i < count($pm_point) ; $i++) { 
				$insert_pm_upd['project_id'] = $id;;
				$insert_pm_upd['pm_points'] = $pm_point[$i];

				$this->common_model->insertData('project_amenties', $insert_pm_upd);
			}
			$this->session->set_flashdata('msg', 'Project updated successfully.');
			redirect('admin/project_list');
		}
		
		$data['main_content'] = 'edit_project';
		$this->load->view('includes/admin_template',$data);
	}

	public function contact_enquiry()
	{
		if($this->session->userdata('id') =='')
		{
			redirect('login');
		}

		$total_row = $this->common_model->record_count('enquiry_contact', array());
		$config = array();
		$config["base_url"] = base_url() ."/admin/contact_enquiry";
		$config["total_rows"] = $total_row;
		$config["per_page"] = 10;		
		$config['num_links'] = 3;
		$config['uri_segment'] = 3;
		$config['use_page_numbers'] = false;
		$config['reuse_query_string'] = false;		 
		$config['full_tag_open'] = '<ul class="pagination pagination-sm">'; 
		$config['full_tag_close'] = '</ul>';
		$config['attributes'] = ['class' => 'page-link'];
		$config['first_link'] = false;
		$config['last_link'] = false;
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = 'Previous';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = 'Next';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
		$config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';
		$this->pagination->initialize($config);
		if($this->uri->segment(3)){
			$page = ($this->uri->segment(3)) ;
			$data['sno'] = $this->uri->segment(3)+1;
		}
		else{
			$page = 0;
			$data['sno'] = 1;
		}
		$data["links"] = $this->pagination->create_links(); 
		$data['data'] = $this->common_model->getAllwhere_pagination('enquiry_contact', $config['per_page'], $page, array(), 'id', 'desc');
		
		$data['main_content'] = 'contact_enquiry';
		$this->load->view('includes/admin_template',$data);
	}

	public function project_enquiry()
	{
		if($this->session->userdata('id') =='')
		{
			redirect('login');
		}

		$total_row = $this->common_model->record_count('enquiry_project', array('project_id !=' => ''));
		$config = array();
		$config["base_url"] = base_url() ."/admin/project_enquiry";
		$config["total_rows"] = $total_row;
		$config["per_page"] = 10;		
		$config['num_links'] = 3;
		$config['uri_segment'] = 3;
		$config['use_page_numbers'] = false;
		$config['reuse_query_string'] = false;		 
		$config['full_tag_open'] = '<ul class="pagination pagination-sm">'; 
		$config['full_tag_close'] = '</ul>';
		$config['attributes'] = ['class' => 'page-link'];
		$config['first_link'] = false;
		$config['last_link'] = false;
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = 'Previous';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = 'Next';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
		$config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';
		$this->pagination->initialize($config);
		if($this->uri->segment(3)){
			$page = ($this->uri->segment(3)) ;
			$data['sno'] = $this->uri->segment(3)+1;
		}
		else{
			$page = 0;
			$data['sno'] = 1;
		}
		$data["links"] = $this->pagination->create_links(); 
		$data['data'] = $this->common_model->getAllwhere_pagination('enquiry_project', $config['per_page'], $page, array('project_id !=' => ''), 'id', 'desc');

		$data['main_content'] = 'project_enquiry';
		$this->load->view('includes/admin_template',$data);
	}

	public function enquiries()
	{
		if($this->session->userdata('id') =='')
		{
			redirect('login');
		}
		
		$total_row = $this->common_model->record_count('enquiry_project', array('project_id' => ''));
		$config = array();
		$config["base_url"] = base_url() ."/admin/enquiries";
		$config["total_rows"] = $total_row;
		$config["per_page"] = 10;		
		$config['num_links'] = 3;
		$config['uri_segment'] = 3;
		$config['use_page_numbers'] = false;
		$config['reuse_query_string'] = false;		 
		$config['full_tag_open'] = '<ul class="pagination pagination-sm">'; 
		$config['full_tag_close'] = '</ul>';
		$config['attributes'] = ['class' => 'page-link'];
		$config['first_link'] = false;
		$config['last_link'] = false;
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = 'Previous';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = 'Next';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
		$config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';
		$this->pagination->initialize($config);
		if($this->uri->segment(3)){
			$page = ($this->uri->segment(3)) ;
			$data['sno'] = $this->uri->segment(3)+1;
		}
		else{
			$page = 0;
			$data['sno'] = 1;
		}
		$data["links"] = $this->pagination->create_links(); 
		$data['data'] = $this->common_model->getAllwhere_pagination('enquiry_project', $config['per_page'], $page, array('project_id' => ''), 'id', 'desc');

		$data['main_content'] = 'enquiry';
		$this->load->view('includes/admin_template',$data);
	}

	public function subscribed_email()
	{
		if($this->session->userdata('id') =='')
		{
			redirect('login');
		}
		
		$total_row = $this->common_model->record_count('subscribe', array());
		$config = array();
		$config["base_url"] = base_url() ."/admin/subscribed_email";
		$config["total_rows"] = $total_row;
		$config["per_page"] = 10;		
		$config['num_links'] = 3;
		$config['uri_segment'] = 3;
		$config['use_page_numbers'] = false;
		$config['reuse_query_string'] = false;		 
		$config['full_tag_open'] = '<ul class="pagination pagination-sm">'; 
		$config['full_tag_close'] = '</ul>';
		$config['attributes'] = ['class' => 'page-link'];
		$config['first_link'] = false;
		$config['last_link'] = false;
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = 'Previous';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = 'Next';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
		$config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';
		$this->pagination->initialize($config);
		if($this->uri->segment(3)){
			$page = ($this->uri->segment(3)) ;
			$data['sno'] = $this->uri->segment(3)+1;
		}
		else{
			$page = 0;
			$data['sno'] = 1;
		}
		$data["links"] = $this->pagination->create_links(); 
		$data['data'] = $this->common_model->getAllwhere_pagination('subscribe', $config['per_page'], $page, array(), 'id', 'desc');

		$data['main_content'] = 'subscribed_email';
		$this->load->view('includes/admin_template',$data);
	}

	public function chkadminemail($email,$id='')
	{
		$chk = $this->common_model->getsingle('users', array('email'=>$email,'id !='=>$id));			
		if ($chk)
		{			
			$this->form_validation->set_message('chkadminemail', 'Email Address already exist.');
			return FALSE;
		} else {
			return TRUE;
		}
	}

	public function profile()
	{
		if($this->session->userdata('id') =='')
		{
			redirect('login');
		}
		
		$id = $this->session->userdata('id');
		$data['admin'] = $ad = $this->common_model->getsingle('users', array('id' => $id));
		$password = $ad->password;

		$password_input = $this->input->post('password');

		$this->form_validation->set_rules('email', 'Email ID', 'trim|required|valid_email|callback_chkadminemail['.$id.']');
		if($password_input){
			$this->form_validation->set_rules('password', 'New Password', 'trim|required|min_length[5]');
			$this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|matches[password]');
		}

		if($this->form_validation->run())
		{
			if($password_input){
				$password = md5($this->input->post('password'));
			}
			
			$prof['email'] = $this->input->post('email');
			$prof['password'] = $password;

			$this->common_model->updateData('users', $prof, array('id' => $id));
			$this->session->set_flashdata('msg', 'Profile Updated Successfully');
			redirect('admin/profile');
		}


		$data['main_content'] = 'profile';
		$this->load->view('includes/admin_template',$data);
	}
	
	public function add_gallery_image()
	{
		if($this->session->userdata('id') =='')
		{
			redirect('login');
		}
		
		$file_path =  'uploads/gallery';
		$config['upload_path']          =$file_path;
   		$config['allowed_types']        = '*';
   		$this->load->library('upload', $config);

		$this->form_validation->set_rules('project_id', 'Project', 'trim|required');

		if($this->form_validation->run())
		{
			$project_id = $this->input->post('project_id');
			$files = $_FILES;
			$cpt = count($_FILES['userfile']['name']);

			for($i=0; $i<$cpt; $i++)
			{           
				$_FILES['userfile']['name']= $files['userfile']['name'][$i];
				$_FILES['userfile']['type']= $files['userfile']['type'][$i];
				$_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
				$_FILES['userfile']['error']= $files['userfile']['error'][$i];
				$_FILES['userfile']['size']= $files['userfile']['size'][$i];    
				
				$this->upload->do_upload('userfile');
				$dataInfo = $this->upload->data();

				$ins['project_id'] = $project_id;
				$ins['image'] = $dataInfo['file_name'];

				$this->common_model->insertData('gallery', $ins);
			}
			
			$this->session->set_flashdata('msg', 'Gallery images added successfully.');
			redirect('admin/gallery_list');

		}

		$data['projects'] = $this->common_model->getAllwhere('projects', array());

		$data['main_content'] = 'add_gallery_image';
		$this->load->view('includes/admin_template',$data);
	}

	public function gallery_list()
	{
		if($this->session->userdata('id') =='')
		{
			redirect('login');
		}
		
		$total_row = $this->common_model->record_count('gallery', array());
		$config = array();
		$config["base_url"] = base_url() ."/admin/gallery_list";
		$config["total_rows"] = $total_row;
		$config["per_page"] = 10;		
		$config['num_links'] = 3;
		$config['uri_segment'] = 3;
		$config['use_page_numbers'] = false;
		$config['reuse_query_string'] = false;		 
		$config['full_tag_open'] = '<ul class="pagination pagination-sm">'; 
		$config['full_tag_close'] = '</ul>';
		$config['attributes'] = ['class' => 'page-link'];
		$config['first_link'] = false;
		$config['last_link'] = false;
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = 'Previous';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = 'Next';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
		$config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';
		$this->pagination->initialize($config);
		if($this->uri->segment(3)){
			$page = ($this->uri->segment(3)) ;
			$data['sno'] = $this->uri->segment(3)+1;
		}
		else{
			$page = 0;
			$data['sno'] = 1;
		}
		$data["links"] = $this->pagination->create_links(); 
		$data['data'] = $this->common_model->getAllwhere_pagination('gallery', $config['per_page'], $page, array(), 'id', 'desc');

		$data['main_content'] = 'gallery_list';
		$this->load->view('includes/admin_template',$data);
	}

	public function delete_gallery_image($id)
	{
		if($this->session->userdata('id') =='')
		{
			redirect('login');
		}

		$this->common_model->deleteData('gallery', array('id' => $id));

		$this->session->set_flashdata('msg', 'Gallery image deleted successfully.');
		redirect('admin/gallery_list');
	}
	
	public function edit_home_banner()
	{
		$id=1;
		if($this->session->userdata('id') =='')
		{
			redirect('login');
		}

		$file_path =  'uploads/home';
		$config['upload_path']          =$file_path;
		$config['allowed_types']        = '*';
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);
		
		$data['data'] = $rec = $this->common_model->getsingle('home_section', array('id' => $id));
		$image = $old_video = $rec->video;
		

		$this->form_validation->set_rules('title', 'Title', 'trim|required');
		
		if($this->form_validation->run())
		{
			if($this->upload->do_upload('video'))
			{
				$video = $this->upload->data('file_name');
				unlink('uploads/home/'.$old_video);
			}

			$insertUpd['video'] = $video;
			
			$insertUpd['date'] = date('Y-m-d');

			$res = $this->common_model->updateData('home_section', $insertUpd, array('id' => $id));
			$this->session->set_flashdata('msg', 'Home banner updated successfully.');
			redirect('admin/edit_home_banner');
		}

		$data['main_content'] = 'edit_home_banner';
		$this->load->view('includes/admin_template',$data);
	}
	
	public function delete_list($id,$page)
	{
		if($this->session->userdata('id') =='')
		{
			redirect('login');
		}
		if($page == 'contact'){
			$this->common_model->deleteData('contactus', array('id' => $id));
			$this->session->set_flashdata('msg', 'Contact Detail deleted successfully.');
			redirect('admin/contactUs_list');
		}
		if($page == 'pEnquiry'){
			$this->common_model->deleteData('enquiry_project', array('id' => $id));
			$this->session->set_flashdata('msg', 'Enquiry Detail deleted successfully.');
			redirect('admin/project_enquiry');
		}
		if($page == 'enquiry'){
			$this->common_model->deleteData('enquiry_project', array('id' => $id));
			$this->session->set_flashdata('msg', 'Enquiry Detail deleted successfully.');
			redirect('admin/enquiries');
		}
		if($page == 'subscribe'){
			$this->common_model->deleteData('subscribe', array('id' => $id));
			$this->session->set_flashdata('msg', 'Subscribe Detail deleted successfully.');
			redirect('admin/subscribed_email');
		}

		
	}
}	

?>	