<?php

class Contact_control extends CI_Controller
{
   
    
    function send_email(){
        
            $email= $this->input->post('mail_text');
       
        
	     $config = Array(
            'protocol'=>'smtp',
            'smtp_host'=>'ssl://smtp.googlemail.com',
            'smtp_port'=>465,
            'smtp_user'=> 'risul.karim@gmail.com',
            'smtp_pass'=>'Risul@063161945' );
			
            $this->load->library('email',$config);
            $this->email->set_newline("\r\n");
            $this->email->from('risul.karim@gmail.com','Information Query');
            $this->email->to('risul.karim@gmail.com');
            $this->email->subject('Information Query');
            $this->email->message($email);
	
            $data['msg']='your mail has been sent';
            $this->load->view('contact',$data);
		
		try{
			$this->email->send();
			return TRUE;
		}catch(Exception $e){
			return FALSE;
		}
	}
}