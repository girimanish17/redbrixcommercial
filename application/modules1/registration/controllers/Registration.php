<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

   function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Calcutta'); 
        $this->load->model('registration/common_model');
                
	}
	function accept_terms() {
    if (isset($_POST['accept_terms'])) return true;
    $this->form_validation->set_message('accept_terms', 'Please read and accept our terms and conditions.');
    return false;
}
        public function customAlpha($str) 
        {
            if (preg_match('/^[a-z ,]+$/i',$str))return true;            
                $this->form_validation->set_message('customAlpha', 'The Education Degree field may only contain alphabatic characters with space or comma');
            
            return false;
        }
         public function customjob($str) 
        {
            if (preg_match('/^[a-z ,]+$/i',$str))return true;
            
                $this->form_validation->set_message('customjob', 'The Job Designation field may only contain alphabatic characters with space or comma');
            
            return false;
        }
	/*
	//Registration Form
	public function index()
	{  
			$data['msg'] = $this->session->flashdata('msg');
			$data['states'] = $this->common_model->getAllrecord('states');	
			$data['banks'] = $this->common_model->getAllrecord('banks');
			
			$this->form_validation->set_rules('full_name', 'Full Name', 'trim|required|alpha_space');
			$this->form_validation->set_rules('father_name', 'Father Name', 'trim|required|alpha_space');
			$this->form_validation->set_rules('mobile_no', 'Mobile Number', 'trim|required|numeric|min_length[10]|max_length[10]');
			$this->form_validation->set_rules('gender', 'Gender', 'trim|required');
			$this->form_validation->set_rules('state', 'Select State', 'trim|required');
			$this->form_validation->set_rules('city', 'Select City', 'trim|required');
			$this->form_validation->set_rules('address', 'Enter Full Address', 'trim|required');
			
			$this->form_validation->set_rules('email', 'User Email', 'trim|required|valid_email|unique[users.email]');
			$this->form_validation->set_rules('pwd', 'Password', 'trim|required|min_length[5]');
			$this->form_validation->set_rules('rpwd', 'RE Enter Password', 'trim|required|matches[pwd]');
			$this->form_validation->set_rules('bank', 'Select Bank', 'trim|required');
			$this->form_validation->set_rules('account_no', 'Account Number', 'trim|required|numeric');
			$this->form_validation->set_rules('ifsc', 'IFSC Code', 'trim|required');
			
			
			$data['full_name'] 		= $full_name 	= $this->input->post('full_name',TRUE);
			$data['father_name'] 	= $father_name 	= $this->input->post('father_name',TRUE);
			$data['mobile_no'] 		= $mobile_no 	= $this->input->post('mobile_no',TRUE);
			$data['gender'] 		= $gender 		= $this->input->post('gender',TRUE);
            $data['state'] 			= $state 		= $this->input->post('state',TRUE);
			$data['city'] 			= $city 		= $this->input->post('city',TRUE);
			$data['address'] 		= $address 		= $this->input->post('address',TRUE);
			$data['email'] 			= $email 		= $this->input->post('email',TRUE);
			$data['pwd'] 			= $pwd 			= $this->input->post('pwd',TRUE);
			$data['bank'] 			= $bank 		= $this->input->post('bank',TRUE);
			$data['account_no'] 	= $account_no 	= $this->input->post('account_no',TRUE);
			$data['ifsc'] 			= $ifsc 		= $this->input->post('ifsc',TRUE);
			$data['upper_id'] 		= $upper_id 	= $this->input->post('upper_id',TRUE);
			
			if($upper_id!=''){
			$this->form_validation->set_rules('upper_id', 'Introducer User ID', 'trim|required|numeric|callback_chkuserid');
			}
			
            
			if($this->form_validation->run() == TRUE) 
                {
                  
                    //upload Profile image
                    $data['upload_path'] = 'users_images/img/';
                    $data['allowed_types'] = 'gif|jpg|png';
                    $data['max_size'] = '2048';
                    $data['max_width'] = '1024';
                    $data['max_height'] = '768';
                    $data['encrypt_name'] = true;

                    $this->load->library('upload', $data);
                    $uploadPics = '';
                    if ($this->upload->do_upload('profile_pic'))
                    {
                        $attachment_data = array('upload_data' => $this->upload->data());
                        $uploadPics = $attachment_data['upload_data']['file_name'];

                        //image resize
                        $data['image_library'] = 'gd2';
                        $data['source_image'] = 'users_images/img/' . $uploadPics;
                        $data['new_image'] = 'users_images/';
                        $data['overwrite'] = true;
                        $data['maintain_ratio'] = true;
                        $data['width'] = 250;
                        $data['height'] = 400;
                       //load image library
                        $this->load->library('image_lib', $data);
                        if (!$this->image_lib->resize())
                        { 
                            echo $this->image_lib->display_errors();
                        }
                    }
                    else
                    {
                        $data['errors'] = $this->upload->display_errors();
                    }
			                           
						$insertArray = array(
								'full_name' 	=> $full_name,
								'upper_id'	 	=> $upper_id,
								'father_name' 	=> $father_name,
								'mobile_no' 	=> $mobile_no,
								'gender' 		=> $gender,
								'state' 		=> $state,
								'city' 			=> $city,
								'address' 		=> $address,
								'email' 		=> $email,
								'password' 		=> md5($pwd),
								'bank' 			=> $bank,
								'account_no' 	=> $account_no,
								'ifsc' 			=> $ifsc,
								'profile_pic'	=> $uploadPics,
								'registration_date' => date('Y-m-d')
			            ); 
						
			$insert_id 	= $this->common_model->insertData('users',$insertArray);
			$user_id 	= 10000 + $insert_id;  
				$this->common_model->updatedownline($insert_id);
				if($upper_id!=''){
				$this->common_model->updatedclubline($upper_id);
				}
            $this->common_model->updateData('users',array('user_id'=>$user_id),array('id' => $insert_id));                                    
                                
                        
			$msg = 'Registration Successfully Your ID '.$user_id;
			$this->session->set_flashdata('msg',$msg);
			redirect('registration');
             			
		}
       
			$data['main_content'] = 'registration';
            $this->load->view('includes/template',$data);
		
	} */
	
	//Registration Form
	public function index()
	{  
			$data['msg'] = $this->session->flashdata('msg');
			
			$fields='login_id,id,full_name,user_id';
			$where=array('user_id !='=>'0');
			$data['users'] = $this->common_model->getAllwherenew('users',$where,$fields);
			
			$this->form_validation->set_rules('full_name', 'Full Name', 'trim|required|alpha_space');			
			$this->form_validation->set_rules('mobile_no', 'Mobile Number', 'trim|required|numeric|min_length[10]|max_length[10]');
			$this->form_validation->set_rules('pwd', 'Password', 'trim|required|min_length[5]');
			$this->form_validation->set_rules('rpwd', 'RE Enter Password', 'trim|required|matches[pwd]');
			$this->form_validation->set_rules('plan', 'Choose Your Project', 'trim');			
			$this->form_validation->set_rules('delivered_place', 'Delivered Place', 'trim');			
			
			
			$data['full_name'] 		= $full_name 	= $this->input->post('full_name',TRUE);			
			$data['mobile_no'] 		= $mobile_no 	= $this->input->post('mobile_no',TRUE);
			$data['pwd'] 			= $pwd 			= $this->input->post('pwd',TRUE);
			$data['upper_id'] 		= $upper_id 	= $this->input->post('upper_id',TRUE);
			$data['plan'] 			= $plan 		= $this->input->post('plan',TRUE);
			$data['delivered_place']= $delivered_place 	= $this->input->post('delivered_place',TRUE);
			
			if($upper_id!=''){
			$this->form_validation->set_rules('upper_id', 'Introducer User ID', 'trim|required|callback_chkuserid');
			$resultsssss = $this->common_model->getsingle('users',array('login_id'=>$upper_id));   
			$upper_id = $resultsssss->user_id;
			}
			
            
			if($this->form_validation->run() == TRUE) 
            {
					//upload Profile image
                    $data['upload_path'] = 'users_images/img/';
                    $data['allowed_types'] = 'gif|jpg|png';
                    $data['max_size'] = '20480000';
                    $data['max_width'] = '10240000';
                    $data['max_height'] = '7680000';
                    $data['encrypt_name'] = true;

                    $this->load->library('upload', $data);
                    $uploadPics = '';
                    if ($this->upload->do_upload('profile_pic'))
                    {
						$attachment_data = array('upload_data' => $this->upload->data());
						$uploadPics = $attachment_data['upload_data']['file_name'];

						//image resize
						$data['image_library'] = 'gd2';
						$data['source_image'] = 'users_images/img/' . $uploadPics;
						$data['new_image'] = 'users_images/';
						$data['overwrite'] = true;
						$data['maintain_ratio'] = true;
						$data['width'] = 250;
						$data['height'] = 400;
					   //load image library
						$this->load->library('image_lib', $data);
						if (!$this->image_lib->resize())
						{ 
							echo $this->image_lib->display_errors();
						}
                    }
                    else
                    {
                        $data['errors'] = $this->upload->display_errors();
                    }
					
				$insertArray = array(
						'full_name' 	=> $full_name,
						'upper_id'	 	=> $upper_id,								
						'mobile_no' 	=> $mobile_no,
						'password' 		=> md5($pwd),
						'password_name' => $pwd,
						'profile_pic'	=> $uploadPics,
						'plan'			=> $plan,
						'delivered_place'=> $delivered_place,
						'registration_date' => date('Y-m-d')
				); 
						
			$insert_id 	= $this->common_model->insertData('users',$insertArray);
			$user_id 	= 100+ $insert_id;  
		/*	$this->common_model->updatedownline($insert_id);
			if($upper_id!=''){
				$this->common_model->updatedclubline($upper_id);
				$uppids = $this->common_model->getsingle('users',array('user_id'=>$upper_id));
				$newupids = $upper_id.','.$uppids->upper_ids;
				$this->common_model->updateData('users',array('upper_ids'=>$newupids),array('id' => $insert_id));    
			} */
            $this->common_model->updateData('users',array('user_id'=>$user_id),array('id' => $insert_id));    
			$this->common_model->updateData('users',array('login_id'=>'SS000'.$user_id),array('id' => $insert_id));                                    
            
			
					//send message on mobile_no
					$apiKey = urlencode('fGl5QaDDlpg-ljwkQzBYBXAqkwu9H1FCuYFMCNsAoE');					
					// Message details
					$numbers = array($mobile_no);
					$sender = urlencode('TXTLCL');
					$message = rawurlencode('Welcome Stryde Bazaar Solution Pvt Ltd. Your Registration has been Successfully, Your Login Id is SS000'.$user_id.' and password is'.$pwd.' Contact For E-pin purchase Mobile Number : 8889880143 Contact only WhatsApp');

					$numbers = implode(',', $numbers);

					// Prepare data for POST request
					$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
				 
					// Send the POST request with cURL
					$ch = curl_init('https://api.textlocal.in/send/');
					curl_setopt($ch, CURLOPT_POST, true);
					curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
					$response = curl_exec($ch);
					curl_close($ch);
                        
			$msg = 'Registration Successfully Your ID '.$user_id;
			$this->session->set_flashdata('msg',$msg);
			redirect('login?id=SS000'.$user_id);
             			
		}
       
            $this->load->view('registration',$data);
		
	}
	
	function chkuserid($id)
	{
		$results = $this->common_model->getsingle('users',array('login_id'=>$id));                                    
		if(!$results)
		{
			$this->form_validation->set_message('chkuserid','This Introducer User ID Not exists our Database.');
			return false;
		}
		
		return true;
		
	}
	
    public function getCity()
	{
            
			$state = $_POST["state"];
			$this->load->model('common_model');
			$citiesData = $this->common_model->getAllwhere('cities',array('state_id'=> $state));
			$cities = '
						<label for="city">City</label>
							
						<select name="city" id="city-select" class="form-control">
						<option value="">Select</option>';
						if(!empty($citiesData))
						{
								foreach($citiesData as $city)
								{
										$cities .= '<option value="'.$city->id.'">'.$city->city_name.'</option>';
								} 
						}
			$cities .= '</select>';
			echo $cities;
		
			
	} 
	function search_intro()
        {
           
			$this->load->model('common_model');  
			$keyword = $this->input->post('queryString');  
			$result = $this->common_model->search_intro($keyword);
			$count = 1;
			if($result)
			{
				$output = '<ul>';
				foreach($result as $r)
				{
				if($count % 2 == 1)
				{
				$class = 'ac_even';
				}
				else
				{
				$class = 'ac_odd';
				}
				$name = str_replace($keyword, "<strong>".$keyword."</strong>", $r['full_name']);
				$output .= '<li class="'.$class.'" id="'.$r['login_id'].'" data-id="'.$r['id'].'" onclick="ckfit(this.id);" style="cursor:pointer;">';
				$output .= '<span class="name">';
				$output .= $name;
				$output .= ' </span></li>';
				$count = $count + 1;
				}
				$output .= '</ul>';
				
			}else{
				$output = '<ul>';
				$output .= '<li>No Match</li>';
				$output .= '</ul>';
			}
			echo $output;
            
        }
	
}
