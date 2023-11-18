<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

   function __construct()
	{
		parent::__construct();
		$this->load->model('admin/common_model');
	}
	
	public function index()
	{ 
		if($this->session->userdata('id') !='')
		{
			if($this->session->userdata('role')=='admin')
			{
				redirect('admin');
			}else{					
				redirect('user');
			}	
		}
		$config['title'] = 'Login';
		$config['errors'] ='';
		$data['msg'] = $this->session->flashdata('msg');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]');
		
		$id = $this->input->post('email',TRUE);
		$password = ($this->input->post('password',TRUE));
		
		// if form validation true
		if($this->form_validation->run() == TRUE) 
		{
			// echo "hello"; die;
			$wheres = array('email'=>$id,'password'=>md5($password));

			// echo "<pre>"; print_r($wheres); die;
			$users = $this->common_model->getsingle('users',$wheres);
		// echo $this->db->last_query(); die;
			if($users)
			{
				// generate session
				$newdata = array( 	
				'id' => $users->id,
				'email' => $users->email,
				'name' => $users->name,				
				'role' => $users->role,
				'lgin' => TRUE,
				);	
				
				$this->session->set_userdata($newdata);
				$msg = 'Your Login Successfully';
				$this->session->set_flashdata('msg',$msg);
				if($users->role=='admin')
				{
					redirect('admin');
				}else{					
					redirect('user');
				}				
			}
			else
			{
				$config['errors'] =  'Wrong Email or Password. Please Try again.';
			}
		
		}
	
		//$config['main_content'] = 'login';
		$this->load->view('login',$config);
	
	}
	
	
	// logout 
	public function logout() 
	{
		$array_items = array('id' => '','name' => '', 'role'  => '','lgin' => '','email' => '');	
		
		$this->session->unset_userdata($array_items);$this->session->sess_destroy(); 
		$url = base_url('login');
		header("location:$url");
   }
	
}
