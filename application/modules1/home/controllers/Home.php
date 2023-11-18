<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

   	public function __construct()
	{
		parent::__construct();
		 $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		date_default_timezone_set('Asia/Calcutta'); 
		$this->userid = $this->session->userdata('user_id');
		// $this->load->model(array('home/common_model'));
		
	}
	
	public function index($page = '')
	{

		$subs['email'] = $this->input->post('subcribe_email');
		$subs['date'] = date('Y-m-d');
		$this->common_model->insertData('subscribe', $subs);
		$data['msg'] = $this->session->flashdata('msg', 'Subscribed Successfully');

		$ins['project_id'] = $this->input->post('project_id');
		$ins['first_name'] = $this->input->post('first_name');
		$ins['last_name'] = $this->input->post('last_name');
		$ins['email'] = $this->input->post('email');
		$ins['contact'] = $this->input->post('contact');
		$ins['date'] = date('Y-m-d');

		$this->common_model->insertData('enquiry_project', $ins);
		$data['msg'] = $this->session->flashdata('msg', 'Enquiry Submitted Successfully');

		$data['msg'] = $this->session->flashdata('msg');
		$data['exclusive_projects'] = $this->common_model->getallwhere('projects', array('exclusive_projects'=> 1));
		$data['featured_listing'] = $this->common_model->getallwhere('projects', array('featured_listing'=> 1));
		$data['guaranteed'] = $this->common_model->getallwhere('projects', array('guaranteed_return_project'=> 1));
		$data['categories'] = $this->common_model->getallwhere('categories', array());
		// print_r($data['guaranteed']); die;

		$data['main_content'] = 'home';
		$this->load->view('includes/home_template',$data);
	}

	public function project_details($slug)
	{
		$data['pro_details'] = $pr = $this->common_model->getsingle('projects', array('slug' => $slug));
		$data['retails_pr'] = $this->common_model->getallwhere('project_retail', array('project_id'=> $pr->id));
		$data['pr_high'] = $this->common_model->getallwhere('project_highlights', array('project_id'=> $pr->id));
		$data['pr_amenties'] = $this->common_model->getallwhere('project_amenties', array('project_id'=> $pr->id));
		
		$data['main_content'] = 'project_details';
		$this->load->view('includes/home_template',$data);
	}

	public function project_listing()
	{
		$ins['project_id'] = $this->input->post('project_id');
		$ins['first_name'] = $this->input->post('first_name');
		$ins['last_name'] = $this->input->post('last_name');
		$ins['email'] = $this->input->post('email');
		$ins['contact'] = $this->input->post('contact');
		$ins['date'] = date('Y-m-d');

		$this->common_model->insertData('enquiry_project', $ins);
		$data['msg'] = $this->session->flashdata('msg', 'Enquiry Submitted Successfully');


		if($_GET['project_status_id']){
			$data['project_status_id'] = $project_status = $_GET['project_status_id'];
		}
		if($_GET['location']){
			$data['locationS'] = $location = $_GET['location'];
		}
		if($_GET['category_id']){
			$data['category_id'] = $category_id = $_GET['category_id'];
		}
		
		
		$data['featured_listing'] = $this->common_model->getAllwhere2(array('featured_listing'=> 1), $project_status, $location, $category_id);
		
		$data['other_properties'] = $this->common_model->getAllwhere2(array('other_properties'=> 1), $project_status, $location, $category_id);
		

		$data['prStatus'] = $this->common_model->getallwhere('project_status', array());
		$data['categories'] = $this->common_model->getallwhere('categories', array());

		$data['main_content'] = 'project_listing';
		$this->load->view('includes/home_template',$data);
	}

	public function blogs()
	{
		$data['blogs_details'] = $this->common_model->getallwhere('blogs', array());

		$data['main_content'] = 'blogs';
		$this->load->view('includes/home_template',$data);
	}

	public function blog_details($slug)
	{
		$data['blog_details'] = $blog_details = $this->common_model->getsingle('blogs',array('slug'=> $slug));

		$data['main_content'] = 'blog_details';
		$this->load->view('includes/home_template',$data);
	}


	public function about()
	{
		$data['msg'] = $this->session->flashdata('msg');
		
		$data['main_content'] = 'about_us';
		$this->load->view('includes/home_template',$data);
	}

	public function contact()
	{
		$ins['name'] = $this->input->post('name');
		$ins['contact'] = $this->input->post('contact');
		$ins['email'] = $this->input->post('email');
		$ins['address'] = $this->input->post('address');
		$ins['message'] = $this->input->post('message');
		$ins['date'] = date('Y-m-d');

		$this->common_model->insertData('enquiry_contact', $ins);
		$data['msg'] = $this->session->flashdata('msg', 'Enquiry Submitted Successfully');
		
		$data['main_content'] = 'contact_us';
		$this->load->view('includes/home_template',$data);
	}

}

?>	