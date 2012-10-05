<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of required
 *
 * @author Insane
 */
class Required extends CI_Controller{
    //put your code here
    
    public function load(){
        $this->load->view('test_form');
    }
    
    public function submit(){
        $this->load->library('form_validation');
        if($this->form_validation->requireone($this->input->post())){
            echo 'success';
        }else{
            echo 'false';
        }
    }
}

?>
