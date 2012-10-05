<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	
	/**
	 * called on while the first hit occurs.
	 * it loads the homepage.
	 */
	
         
        /******************************* start: dont change ***** just copy paste ************************/ 
        public function index(){
		$this->load->model('news_model');
                $data['news']= $this->news_model->getLastNews();
                $this->load->view('home',$data);
	}
	
        
        public function noticeArchive()
        {
                $this->load->model('news_model');
                $data['news']= $this->news_model->getAllNews();
                $this->load->view('noticeArchive',$data);
        }
        
        public function contact()
        {
            
                $data['msg']='Send Email';
                $this->load->view('contact',$data);
        }
        
       /******************************* End: dont change ***** just copy paste ************************/ 
		
	/**
	 * loads the login form.
	 */
	public function login_panel(){
		$this->load->view('login_form');
	}
	
	
	/**
	 * called on submitting the log in button.
	 * takes input from form and logs a user in.
	 */
	function login(){
		
		$userid = $this->input->post('userid');
		$pass   = $this->input->post('pass');
		$this -> load -> model('main_model');
		$query = $this -> main_model -> get_student_info(array('id' => $userid),'primary','pass');
		if($query!=null && $query->num_rows()>0){
			$row = $query->row();
			if($pass == $row->pass){
				$newdata = array('logged_in' => true, 'userid'=>$userid);
				$this->session->set_userdata($newdata);
				// $this->application_form();
				redirect('main/application_form');
			}
		}else{
			$this->load->view('login_form');
		} 
		
	}
	
	
	/**
	 * logs out if currently any user is logged in.
	 */
	function logout(){
        $is_logged_in = $this->session->userdata('logged_in');
        if($is_logged_in){
	        $sess_destroy = $this->session->sess_destroy();
	        redirect('main/index');
       }
    }
	
	
	/**
	 * loads the appliation form if user is logged in.
	 * if not logged int it redirects to the login page.
	 */
	function application_form(){
		if($this->session->userdata('logged_in')){
			$data = $this->get_student_info();
			$this->load->view('application_form',$data);
		}else{
			redirect('main/login');
		}
	}
	
	
	/**
	 * a simple function for debuggin an array.
	 * takes an array as input and ver_dumps the array.
	 */
	function debug($array){
		echo "<pre>";
		var_dump($array);
		echo "<pre/>";
	}
	
	/**
	 * called on submitting the application form.
	 * takes all the inputs from application form.
	 * then validates the inputs.
	 * if all inputs are correct and accepted then inserts them in the primary, secondary and edu_back table.
	 * the table for each data is chosen according to the type of data.
	 */
	 function submit_application(){
	 	// $this->debug($this->input->post());
		// return;
	 	//getting post data from post array.
		$data = $this->input->post();
		//loading form validatoin library.
		$this->load->library('form_validation');
		//setting validation rule for validating inputs.
		
		/*validation rules */
		$rules = array(
			
			/*name birth place and category field validation */
		    array('field'   => 'name', 'label'   => 'Username','rules'   => 'required|strtolower|min_length[3]'),
		    array('field'   => 'birth_place', 'label'   => 'Place of Birth field','rules'   => 'required'),
		    array('field'   => 'category', 'label'=> 'Scholarship Category', 'rules'=> 'required' ),
		    /*name birth place and category field validation */
		    
			/*parents information*/
		    array('field'   => 'father_name', 'label'   => 'Father Name','rules'   => 'required|strtolower|max_length[18]'),
		    array('field'   => 'father_profession', 'label'   => 'Father profession','rules'   => 'required|strtolower|max_length[18]'),
		    array('field'   => 'father_income', 'label'   => 'father income' ,'rules'   => 'required|strtolower|max_length[18]'),
		    array('field'   => 'father_contact', 'label'   => 'father contact' ,'rules'   => 'required|numeric|max_length[18]'),
		    
			
		    array('field'   => 'mother_name', 'label'   => 'mother Name','rules'   => 'required|strtolower|max_length[18]'),
		    array('field'   => 'mother_profession', 'label'   => 'mother profession','rules'   => 'required|strtolower|max_length[18]'),
		    array('field'   => 'mother_income', 'label'   => 'mother income' ,'rules'   => 'required|numeric|max_length[18]'),
		    array('field'   => 'mother_contact', 'label'   => 'mother contact' ,'rules'   => 'required|numeric|max_length[18]'),
		    /*parents information..*/
		    
		    
		    /*guardian information ..*/
		    array('field'   => 'gurdian_name', 'label'   => 'gurdian Name','rules'   => 'strtolower|max_length[18]'),
		    array('field'   => 'gurdian_profession', 'label'   => 'gurdian profession','rules'   => 'strtolower|max_length[18]'),
		    array('field'   => 'gurdian_income', 'label'   => 'gurdian income' ,'rules'   => 'numeric|max_length[18]'),
		    array('field'   => 'gurdian_contact', 'label'   => 'gurdian contact' ,'rules'   => 'numeric|max_length[18]'),
		    /*gurdian information */
		   
		   
		   	/*sibling information validation ..*/
			array('field'   => 'sibling1_id', 'label'=> 'student id', 'rules'=> 'max_length[18]|numeric' ),
			array('field'   => 'sibling2_id', 'label'=> 'student id', 'rules'=> 'max_length[18]|numeric' ),
			array('field'   => 'sibling1_age', 'label'=> 'sibling 1 age', 'rules'=> 'max_length[3]|numeric' ),
			array('field'   => 'sibling2_age', 'label'=> 'sibling 2 age', 'rules'=> 'max_length[3]|numeric' ),
			/*sibling infromation .. .*/
			
			
			/* spouse information validation*/
			array('field'   => 'spouse_name', 'label'=> 'name', 'rules'=> 'min_length[5]' ),
			array('field'   => 'credit_completed', 'label'=> 'credits completed', 'rules'=> 'max_length[3]|required|numeric' ),
			array('field'   => 'spouse_id', 'label'=> 'id', 'rules'=> 'max_length[16]|numeric' ),
			/* spouse information validation */
		   
		   
		   
		    
		    
		    /*fixed asset field validation*/
		    array('field'   => 'fixed_asset', 'label'   => 'Fixed Asset' ,'rules'   => 'required'),
		    /*fixed asset field*/
			
			/*permanent address validation */
		    array('field'   => 'present_address', 'label'   => 'Present address' ,'rules'   => 'required'),
		    array('field'   => 'permanent_village', 'label'   => 'Village','rules'   => 'required|strtolower|min_length[3]'),
		    array('field'   => 'permanent_po', 'label'   => 'PO','rules'   => 'required|strtolower|min_length[3]'),
		    array('field'   => 'permanent_ps', 'label'   => 'PS','rules'   => 'required|strtolower|min_length[3]'),
		    array('field'   => 'permanent_union', 'label'   => 'Union','rules'   => 'required|strtolower|min_length[3]'),
		    array('field'   => 'permanent_district', 'label'   => 'District','rules'   => 'required|strtolower|min_length[3]'),
		    array('field'   => 'permanent_loc_area', 'label'   => 'Located area','rules'   => 'required|strtolower|min_length[3]'),
		    array('field'   => 'permanent_loc_area', 'label'   => 'Located area','rules'   => 'required|strtolower|min_length[3]'),
		    /*permanent address validation... */
		    
			
			/*contact field validation */ 
		    array('field'   => 'contact1', 'label'   => 'Field','rules'   => 'required|numeric|integer|max_length[18]'),
		    array('field'   => 'contact2', 'label'   => 'field','rules'   => 'required|numeric|integer|max_length[18]'),
		    array('field'   => 'email', 'label'   => 'Email address','rules'   => 'required|valid_email'),
		    /*contact field validation */
		    
			
			/*education validatoin */
		    array('field'   => 'sa_year', 'label'   => 'passing year','rules'   => 'required|Integer|numeric|min_length[4]|max_length[4]'),
		    array('field'   => 'sa_school', 'label'   => 'institute name','rules'   => 'required'),
		    array('field'   => 'sa_group', 'label'   => 'Group Name','rules'   => 'required'),
		    array('field'   => 'sa_division', 'label'   => 'division or class','rules'   => 'max_length[10]'),
		    array('field'   => 'sa_grade', 'label'   => 'grades','rules'   => 'required|numeric'),
		    
		    array('field'   => 'ho_year', 'label'   => 'passing year','rules'   => 'required|numeric|min_length[4]|max_length[4]'),
		    array('field'   => 'ho_college', 'label'   => 'institute name','rules'   => 'required'),
		    array('field'   => 'ho_division', 'label'   => 'division or class','rules'   => 'max_length[10]'),
		    array('field'   => 'ho_group', 'label'   => 'Group Name','rules'   => 'required'),
		    array('field'   => 'ho_grade', 'label'   => 'grades','rules'   => 'required|numeric'),
		    
			array('field'   => 'other', 'label'=> 'other', 'rules'=> 'max_length[6]'),
		    /*education validatoin */
			
			
		    
			/*credits validation*/
			array('field'   => 'studio_credit', 'label'   => 'Completed credits','rules'   => 'required|numeric|max_length[3]'),
			array('field'   => 'lecture_credit', 'label'   => 'lecture credits','rules'   => 'required|numeric|max_length[3]'),
			array('field'   => 'department_change', 'label'   => 'Department Change','rules'   => 'max_length[20]'),
			array('field'   => 'dept', 'label'   => 'Department','rules'   => 'required|max_length[7]'),
			array('field'   => 'retake', 'label'   => 'retake','rules'   => 'max_length[7]'),
			array('field'   => 'cgpa', 'label'   => 'cgpa','rules'   => 'required|numeric|max_length[7]'),
			array('field'   => 'credit_completed', 'label'   => 'credits completed','rules'   => 'required|numeric|max_length[7]'),
			array('field'   => 'course_credit', 'label'   => 'course credit','rules'   => 'required|numeric|max_length[7]'),
			/*credits validatoin done.*/

						
			/*statement and acceptance*/
			array('field'   => 'comment', 'label'   => 'Statement','rules'   => 'required|max_length[400]'),
			array('field'   => 'accept', 'label'=> 'accepting', 'rules'=> 'required' ),
			/*statement and acceptance*/
			
			/* rules for reference*/
			array('field'   => 'ref_present_name', 'label' => 'Name' , 'rules' => 'required|max_length[40]'),
			array('field'   => 'ref_present_cell', 'label' => 'Cell no' , 'rules' => 'required|numeric|max_length[20]'),
			array('field'   => 'ref_present_address', 'label' => 'address' , 'rules' => 'required|max_length[255]'),
			array('field'   => 'ref_permanent_name', 'label' => 'Name' , 'rules' => 'required|max_length[40]'),
			array('field'   => 'ref_permanent_cell', 'label' => 'Cell no' , 'rules' => 'required|numeric|max_length[20]'),
			array('field'   => 'ref_permanent_address', 'label' => 'address' , 'rules' => 'required|max_length[255]')
			);
			/* rules for reference*/
			
			
			
			
			//setting the rules to form validation rule		
			$this->form_validation->set_rules($rules);
			//checking the inputs 
			if($this->form_validation->run() == FALSE){
				/*form has error*/
				
				/*taking the post array*/
				$data = $this->input->post();
				
				/*loading the view again */
				$this->load->view('application_form',$data);
				
			}else{
				// $this->debug();
				// return;
				
				
				//success....
				
				$this->load->model('main_model');
				$id = $this->session->userdata('userid');
				$data = $this->input->post();
				
				$primary = array(
					//category field yet to be take3n 
					'name'=>$data['name'],
					'dd' => $data['dd'],
					'mm' => $data['mm'],
					'yy' => $data['yy'],
					'dept'=>$data['dept'],
					'gender' =>$data['gender'][0],
					'cgpa'=>$data['cgpa'],
					// 'employee_id' =>$data['employee_id'],
					'birth_place' =>$data['course_credit'],
					'going_tarc' =>$data['going_tarc'][0],
					'second_last_semester' =>$data['second_last_semester'][0],
					'first_semester' => $data['first_semester'][0],
					'last_semester' =>$data['last_semester'][0],
					'department_change' =>$data['department_change'],
					'first_time_application' =>$data['first_time_application'][0],
					'retake' =>$data['retake'][0],
					'fail' =>$data['fail'][0],
					'failing_reason' =>$data['failing_reason'],
					'disciplinary' =>$data['disciplinary'][0],
					'dis_reason' =>$data['dis_reason'],
					'contact1' =>$data['contact1'],
					'email' =>$data['email'],
				);
				
				
				$secondary = array(
					'father_name' => $data['father_name'],
					'father_profession'=> $data['father_profession'],
					'father_income' => $data['father_income'],
					'father_contact' => $data['father_contact'],
					'father_contact' => $data['father_contact'],
					'mother_name' => $data['mother_name'],
					'mother_profession'=> $data['mother_profession'],
					'mother_income' => $data['mother_income'],
					'mother_contact' => $data['mother_contact'],
					'mother_contact' => $data['mother_contact'],
					'guardian'=> $data['guardian'],
					'guardian_profession'=> $data['guardian_profession'],
					'guardian_income' => $data['guardian_income'],
					'guardian_contact' => $data['guardian_contact'],
					'fixed_asset' => $data['fixed_asset'],
					'present_address' => $data['present_address'],
					'permanent_village' => $data['permanent_village'],
					'permanent_loc_area' => $data['permanent_loc_area'],
					'permanent_district' => $data['permanent_district'],
					'permanent_union' => $data['permanent_union'],
					'permanent_ps' => $data['permanent_ps'],
					'permanent_po' => $data['permanent_po'],
					// 'permanent_address' => $data['permanent_address'],
					'award' => $data['award'],
					'co_cur_activity' => $data['co_cur_activity'],
					'ref_present_name' => $data['ref_present_name'],
					'ref_present_cell' => $data['ref_present_cell'],
					'ref_present_address' => $data['ref_present_address'],
					'ref_permanent_name' => $data['ref_permanent_name'],
					'ref_permanent_cell' => $data['ref_permanent_cell'],
					'ref_permanent_address' => $data['ref_permanent_address'],
					'sibling1_name' => $data['sibling1_name'],
					'sibling1_age'=> $data['sibling1_age'],
					'sibling1_id'=> $data['sibling1_id'],
					'sibling1_status' => $data['sibling1_status'],
					'sibling2_name' => $data['sibling2_name'],
					'sibling2_age'=> $data['sibling2_age'],
					'sibling2_status' => $data['sibling2_status'],
					'sibling2_id' => $data['sibling2_id'],
					'spouse_name' => $data['spouse_name'],
					'spouse_id' => $data['spouse_id'],
					'marital_status' => $data['marital_status'][0],
				);
				
				
				
				$education = array(
					'sa' => $data['sa'],
					'sa_year' => $data['sa_year'],
					'sa_group' => $data['sa_group'],
					'sa_school' => $data['sa_school'],
					'sa_division' => $data['sa_division'],
					'sa_grade' => $data['sa_grade'],
					'ho' => $data['ho'],
					'ho_year' => $data['ho_year'],
					'ho_division' => $data['ho_division'],
					'ho_college' => $data['ho_college'],
					'ho_grade' => $data['ho_grade'],
					'other' => $data['other'],
					'other_year' => $data['other_year'],
					'other_group' => $data['other_group'],
					'other_school' => $data['other_school'],
					'other_division' => $data['other_division'],
					'other_grade' => $data['other_grade'],
					'other_description' => $data['other_description'],
					'comment' => $data['comment'],
				);
				
				
				$schol_amount = array();
				foreach ($data['category'] as $key ) {
					$schol_amount[$key] = -1;
				}
										
				$this->main_model->update_info($id,'primary',$primary);	
				$this->main_model->update_info($id,'secondary',$secondary);
				$this->main_model->update_info($id,'edu_back',$education);
				$this->main_model->update_info($id,'scholar_amount',$schol_amount);
				$this->photo_upload_form();
			}
	}
	
	
	
	/**
	 * takes student id from the session.
	 * then returns all the infromation primary, secondary, education .. in an array
	 */
	function get_student_info(){
		//getting user id from session.
		$userid = $this->session->userdata('userid');
		//crearting an array for the infromation to be returned.
		$information = array();
		//loading the model. main_model.
		$this->load->model('main_model');
		//getting information from primary table
		$primary_info = $this->main_model->get_student_info( array ('id' => $userid),'primary',array());
		
		if($primary_info->num_rows()>0){
			//converting the result in an array.
			$primary_info = $primary_info->result_array();
			//getting the first row of the result.
			$primary_info = $primary_info[0];
			
			//putting the result in the information array.
			foreach ($primary_info as $key => $value) {
				$information[$key] = $value;
			}
		}
		
		$secondary_info = $this->main_model->get_student_info(array('id' => $userid),'secondary',array());
		if($secondary_info->num_rows()>0){
			$secondary_info = $secondary_info->result_array();
			$secondary_info = $secondary_info[0];
			foreach ($secondary_info as $key => $value) {
				$information[$key] = $value;
			}
		}
		
		$edu_info = $this->main_model->get_student_info(array('id' => $userid),'edu_back',array());
		if($edu_info->num_rows()>0){
			$edu_info = $edu_info->result_array();
			$edu_info = $edu_info[0];
			foreach ($edu_info as $key => $value) {
				$information[$key] = $value;
			}
		}
		return $information;
	}
	



	/*signup function called for student sign up
	 * loads sign up view if user not logged in.
	 * if logged in, it redirects the user to the application form page.*/
	
	function signup(){
		/*if user is logged in it will be moved to application form */
		if($this->session->userdata('logged_in')){
			redirect('main/application_form');
		}else{
			/*user is not signed up */
			/*load the sign up form from view*/
			$this->load->view('signup');
		}
	}

	
 /*called on submitting signup*/
		function submit_signup() {
			// $this->debug($this->input->post());
			$data = $this -> input -> post();
			$this -> load -> model('main_model');
			$info = $this -> main_model -> get_student_info(array('id' => $data['id']), 'primary', 'pass');
			if ($info -> num_rows() > 0) {
				$data['exists'] = 'There is already an account of this ID';
				$this -> load -> view('signup', $data);
			} else {
				$this -> load -> library('form_validation');
				$rules = array( array('field' => 'id', 'label' => 'user id', 'rules' => 'required|numeric'), array('field' => 'password', 'label' => 'password', 'rules' => 'required'), array('field' => 'password2', 'label' => 'password confirmation ', 'rules' => 'required|matches[password]'), array('field' => 'email', 'label' => 'email', 'rules' => 'required|valid_email'));
				$this -> form_validation -> set_rules($rules);
				if ($this -> form_validation -> run() == FALSE) {
					$this -> load -> view('signup');
				} else {
					$this -> load -> model('main_model');
					$this -> main_model -> createnewstudent('primary', array('id' => $data['id'], 'email' => $data['email'], 'pass' => $data['password']));
					$this -> main_model -> createnewstudent('secondary', array('id' => $data['id']));
					$this -> main_model -> createnewstudent('edu_back', array('id' => $data['id']));
					$this -> main_model -> createnewstudent('scholar_amount', array('id' => $data['id']));
					// try{
					// $messege['body'] = 'You have been successefully registered to BRAC University Online scholarship program application program. Your password is '.$data['password'].' and id '.$data['id'];
					// $messege['subject'] = 'BRAC University online application regeistration';
					// $this->send_email($data['email'], $messege);
					// }catch(exception e){
					// }

					$messege['body'] = 'You have been successefully registered to BRAC University Online scholarship program application program. Your password is ' . $data['password'] . ' and id ' . $data['id'];
					$messege['subject'] = 'BRAC University online application regeistration';
					if ($this -> send_email($data['email'], $messege)) {
						$data['title'] = 'Registration';
						$data['messege'] = array('heading' => 'Registration Successful', 'body' => 'Your registration has been successfully done.
						To apply for scholarship, please login and go to application form.
						Check your email. Your password and other information and instructions has been sent to your
						mail address.
						<br/>
						<strong> Thank You </strong>');
						$this -> load -> view('success', $data);
					}else{
						$data['title'] = 'Registration';
						$data['messege'] = array('heading' => 'Registration Successful', 'body' => 'Your registration has been successfully done.
						an Error has been occured in sending you mail. Please login with your ID and password To get the scholarship form.
						<br/>
						<strong> Thank You </strong>');
						$this -> load -> view('success', $data);
					}
				}
			}
		}



	/*loads the view of forgot password field */
	function forgotpassword(){
		$this->load->view('forgot');
	}
	
	
	/* called on pressing submit button of password requesting form*/
	function send_pass(){
		$id = $this->input->post('id');
		$this->load->model('main_model');
		$query = $this->main_model->get_student_info(array('id' => $id),'primary',array('email' , 'pass'));
		if($query->num_rows()>0){
			$pass =  $query->row()->pass;
			$email_address = $query->row()->email;
			$data['subject'] = 'password recovery';
			$data['body'] = 'your password of brac university online scholarship applicatoin program is '.$pass;
			
			if($this->send_email($email_address,$data)){
				echo "please check your email. your password has been sent to your email address.";
			}else{
				$data['errors'] = 'an error has been occured while sending you the password. please try again';
				$this->load->view('forgot',$data);
			}
		}else{
			$data['errors'] = 'ID not found. Please try again with your valid id ';
			$this->load->view('forgot', $data);
		}
	}
	
	
	
	/*takes an email address and a messege array containing head and body
	 * then sends email to that addresss from the admin's mail address
	 */
	function send_email($to, $messege){
		$config = Array(
            'protocol'=>'smtp',
            'smtp_host'=>'ssl://smtp.googlemail.com',
            'smtp_port'=>465,
            'smtp_user'=> 'stackoverflow789@gmail.com',
            'smtp_pass'=>'777RoundS' );
			
		$this->load->library('email',$config);
        $this->email->set_newline("\r\n");
        $this->email->from('stackoverflow789@gmail.com','BRAC University Online Scholarship Application Management Team');
        $this->email->to($to);
        $this->email->subject($messege['subject']);
        $this->email->message($messege['body']);
		
		
		try{
			$this->email->send();
			return TRUE;
		}catch(Exception $e){
			return FALSE;
		}
	}
	
	
	/**
	 * loads the photo upload form for the user to upload their picture.
	 */
	function photo_upload_form(){
		$this->load->view('upload_form');
	}
	



	/* funciton used for uploading files .. */
	function do_upload()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		//$config['file_name'] = $this->session->userdata('id'); // <-- it is not working 
		
               
                $config['file_name'] = 'trial'; // <-- it is not working
                
                
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload()){
			$data = array('error' => $this->upload->display_errors());
			$this->load->view('upload_form', $data);
			return FALSE;
		}else{
			$data['title'] = 'upload successful';
			$data['messege'] = array(
				'heading' => 'Success',
				'body' => 
				'your photo upload and scholarship form submission has been 
				done successfully. You will be notified about latest updates via 
				your mail address. Check your Mail for latest updates and information.<br/> <strong>Thank You</strong>'
			);
			$this->load->view('success', $data);
			return TRUE;
		}
	}
}