<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Main extends CI_Controller {
	
	
	
	
    /**
     * called on while the first hit occurs.
     * it loads the homepage.
     */
    /******************************* start: dont change ***** just copy paste *********************** */
    public function index() {
        $this->load->model('news_model');
        $data['news'] = $this->news_model->getLastNews();
        $this->load->model('Information_model');
        $data['info'] = $this->Information_model->getInfo();
        $data['min_cgpa'] = $this->Information_model->getMinimunCGPAInfo();
        $this->load->view('home', $data);
    }

    public function noticeArchive() {
        $this->load->model('news_model');
        $data['news'] = $this->news_model->getAllNews();
        $this->load->view('noticeArchive', $data);
    }

    public function contact() {
        $data['msg'] = 'Write Down your Query and Mention your Name and Email ID:';
        $data['sender_id'] = $this->session->userdata('userid');
        $this->load->view('contact', $data);
    }

    public function information() {

        $this->load->model('Information_model');
        $data['info'] = $this->Information_model->getInfo();
        $data['min_cgpa'] = $this->Information_model->getMinimunCGPAInfo();
        $data['performance_info'] = $this->Information_model->getPerformanceInfo();
        $this->load->view('information', $data);
    }

    /******************************* End: dont change ***** just copy paste *********************** */

    /**
     * loads the login form.
     */
    public function login_panel() {
        $this->load->view('login_form');
    }

    /**
     * called on submitting the log in button.
     * takes input from form and logs a user in.
     */
    function login() {
        $userid = $this->input->post('userid');
        $pass = $this->input->post('pass');
        $this->load->model('main_model');
        $query = $this->main_model->get_student_info(array('id' => $userid), 'primary', 'pass');
        if ($query != null && $query->num_rows() > 0) {
            $row = $query->row();
            if ($pass == $row->pass) {
                $newdata = array('logged_in' => true, 'userid' => $userid);
                $this->session->set_userdata($newdata);
                // $this->application_form();
                redirect('main/application_form');
            } else {
                $data['incorrect'] = "Student ID/Passowrd Incorrect";
                $this->load->view('login_form', $data);
            }
        } else {
            $this->load->view('login_form');
        }
    }

    /**
     * logs out if currently any user is logged in.
     */
    function logout() {
        $is_logged_in = $this->session->userdata('logged_in');
        if ($is_logged_in) {
            $sess_destroy = $this->session->sess_destroy();
            redirect('main/index');
        }
    }

    /**
     * loads the appliation form if user is logged in.
     * if not logged int it redirects to the login page.
     */
    function application_form() {
        if ($this->session->userdata('logged_in')) {
            $data = $this->get_student_info();
            $this->load->model('main_model');
            $data['image_url'] = $this->main_model->send_image_url($this->session->userdata("userid"));
            $data['student_id'] = $this->session->userdata("userid");
//            $data['scholar_info'] = $this->main_model->send_scholarship_information($this->session->userdata("userid"))->row();
            //i am using my get_student_info method to retrieve scholarship names student has applied. 
            //anik
            $userid = $this->session->userdata('userid');
            $data['scholar_info'] = $this->main_model->get_student_info(array('id' => $userid), 'scholar_amount', array())->row();
            $request_pending = $this->requested_email();
            if ($request_pending != FALSE) {
                $data['pending_request'] = 'you have email address <strong>' . $request_pending . '</strong> yet to be activated. ' . anchor('main/email_varification_form', 'Activate Now');
            }
            $data['email'] = $this->current_email();
            $data = array_merge_recursive($data,$this->makeCaptcha());
            $this->load->view('application_form', $data);
        } else {
            redirect('main/login');
        }
        //redirect('main/login');
    }



    /**
     * a simple function for debuggin an array.
     * takes an array as input and ver_dumps the array.
     */
    function debug($array) {
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
    function submit_application() {
        // $this->debug($this->input->post());
        // return;
        //getting post data from post array.
        $data = $this->input->post();
        //loading form validatoin library.
        $this->load->library('form_validation');
        //setting validation rule for validating inputs.

        /* validation rules */
        $rules = array(
            /* name birth place and category field validation */
            array('field' => 'name', 'label' => 'Username', 'rules' => 'required|strtolower|min_length[3]'),
            array('field' => 'birth_place', 'label' => 'Place of Birth field', 'rules' => 'required'),
            array('field' => 'category', 'label' => 'Scholarship Category', 'rules' => 'required'),
            /* name birth place and category field validation */
           
            /* parents information */
            array('field' => 'father_name', 'label' => 'Father Name', 'rules' => 'required|strtolower|max_length[18]'),
            array('field' => 'father_profession', 'label' => 'Father profession', 'rules' => 'required|strtolower|max_length[18]'),
            array('field' => 'father_income', 'label' => 'father income', 'rules' => 'required|strtolower|max_length[18]'),
            array('field' => 'father_contact', 'label' => 'father contact', 'rules' => 'required|numeric|max_length[18]'),
            array('field' => 'mother_name', 'label' => 'mother Name', 'rules' => 'required|strtolower|max_length[18]'),
            array('field' => 'mother_profession', 'label' => 'mother profession', 'rules' => 'required|strtolower|max_length[18]'),
            array('field' => 'mother_income', 'label' => 'mother income', 'rules' => 'required|numeric|max_length[18]'),
            array('field' => 'mother_contact', 'label' => 'mother contact', 'rules' => 'required|numeric|max_length[18]'),
            /* parents information.. */


            /* guardian information .. */
            array('field' => 'gurdian_name', 'label' => 'gurdian Name', 'rules' => 'strtolower|max_length[18]'),
            array('field' => 'gurdian_profession', 'label' => 'gurdian profession', 'rules' => 'strtolower|max_length[18]'),
            array('field' => 'gurdian_income', 'label' => 'gurdian income', 'rules' => 'numeric|max_length[18]'),
            array('field' => 'gurdian_contact', 'label' => 'gurdian contact', 'rules' => 'numeric|max_length[18]'),
            /* gurdian information */



            /* sibling information validation .. */
            array('field' => 'sibling1_id', 'label' => 'student id', 'rules' => 'max_length[18]|numeric'),
            array('field' => 'sibling2_id', 'label' => 'student id', 'rules' => 'max_length[18]|numeric'),
            array('field' => 'sibling1_age', 'label' => 'sibling 1 age', 'rules' => 'max_length[3]|numeric'),
            array('field' => 'sibling2_age', 'label' => 'sibling 2 age', 'rules' => 'max_length[3]|numeric'),
            /* sibling infromation .. . */


            /* spouse information validation */
            array('field' => 'spouse_name', 'label' => 'name', 'rules' => 'min_length[5]'),
            array('field' => 'credit_completed', 'label' => 'credits completed', 'rules' => 'max_length[3]|required|numeric'),
            array('field' => 'spouse_id', 'label' => 'id', 'rules' => 'max_length[16]|integer'),
            /* spouse information validation */

            /* fixed asset field validation */
            array('field' => 'fixed_asset', 'label' => 'Fixed Asset', 'rules' => 'required'),
            /* fixed asset field */

            /* permanent address validation */
            array('field' => 'present_address', 'label' => 'Present address', 'rules' => 'required'),
            array('field' => 'permanent_village', 'label' => 'Village', 'rules' => 'required|strtolower|min_length[3]'),
            array('field' => 'permanent_po', 'label' => 'PO', 'rules' => 'required|strtolower|min_length[3]'),
            array('field' => 'permanent_ps', 'label' => 'PS', 'rules' => 'required|strtolower|min_length[3]'),
            array('field' => 'permanent_union', 'label' => 'Union', 'rules' => 'required|strtolower|min_length[3]'),
            array('field' => 'permanent_district', 'label' => 'District', 'rules' => 'required|strtolower|min_length[3]'),
            array('field' => 'permanent_loc_area', 'label' => 'Located area', 'rules' => 'required|strtolower|min_length[3]'),
            array('field' => 'permanent_loc_area', 'label' => 'Located area', 'rules' => 'required|strtolower|min_length[3]'),
            /* permanent address validation... */


            /* contact field validation */
            array('field' => 'contact1', 'label' => 'Field', 'rules' => 'required|numeric|integer|max_length[18]'),
            array('field' => 'contact2', 'label' => 'field', 'rules' => 'required|numeric|integer|max_length[18]'),
            array('field' => 'email', 'label' => 'Email address', 'rules' => 'required|valid_email|callback_uniqueemail'),
            /* contact field validation */


            /* education validatoin */
            array('field' => 'sa_year', 'label' => 'passing year', 'rules' => 'required|Integer|numeric|min_length[4]|max_length[4]'),
            array('field' => 'sa_school', 'label' => 'institute name', 'rules' => 'required'),
            array('field' => 'sa_group', 'label' => 'Group Name', 'rules' => 'required'),
            array('field' => 'sa_division', 'label' => 'division or class', 'rules' => 'max_length[10]'),
            array('field' => 'sa_grade', 'label' => 'grades', 'rules' => 'required|numeric'),
            array('field' => 'ho_year', 'label' => 'passing year', 'rules' => 'required|numeric|min_length[4]|max_length[4]'),
            array('field' => 'ho_college', 'label' => 'institute name', 'rules' => 'required'),
            array('field' => 'ho_division', 'label' => 'division or class', 'rules' => 'max_length[10]'),
            array('field' => 'ho_group', 'label' => 'Group Name', 'rules' => 'required'),
            array('field' => 'ho_grade', 'label' => 'grades', 'rules' => 'required|numeric'),
            array('field' => 'other', 'label' => 'other', 'rules' => 'max_length[6]'),
            /* education validatoin */



            /* credits validation */
            array('field' => 'studio_credit', 'label' => 'Completed credits', 'rules' => 'required|numeric|max_length[3]'),
            array('field' => 'lecture_credit', 'label' => 'lecture credits', 'rules' => 'required|numeric|max_length[3]'),
            array('field' => 'department_change', 'label' => 'Department Change', 'rules' => 'max_length[20]'),
            array('field' => 'dept', 'label' => 'Department', 'rules' => 'required|max_length[7]'),
            array('field' => 'retake', 'label' => 'retake', 'rules' => 'max_length[7]'),
            array('field' => 'cgpa', 'label' => 'cgpa', 'rules' => 'required|numeric|max_length[7]'),
            array('field' => 'credit_completed', 'label' => 'credits completed', 'rules' => 'required|numeric|max_length[7]'),
            array('field' => 'course_credit', 'label' => 'course credit', 'rules' => 'required|numeric|max_length[7]'),
            /* credits validatoin done. */


            /* statement and acceptance */
            array('field' => 'comment', 'label' => 'Statement', 'rules' => 'required|max_length[400]'),
            array('field' => 'accept', 'label' => 'accepting', 'rules' => 'required'),
            /* statement and acceptance */

            /* rules for reference */
            array('field' => 'ref_present_name', 'label' => 'Name', 'rules' => 'required|max_length[40]'),
            array('field' => 'ref_present_cell', 'label' => 'Cell no', 'rules' => 'required|numeric|max_length[20]'),
            array('field' => 'ref_present_address', 'label' => 'address', 'rules' => 'required|max_length[255]'),
            array('field' => 'ref_permanent_name', 'label' => 'Name', 'rules' => 'required|max_length[40]'),
            array('field' => 'ref_permanent_cell', 'label' => 'Cell no', 'rules' => 'required|numeric|max_length[20]'),
            array('field' => 'ref_permanent_address', 'label' => 'address', 'rules' => 'required|max_length[255]'),
            array('field' => 'sibling1_name', 'label' => 'Sibling Name', 'rules' => 'max_length[255]'),
            array('field' => 'sibling1_age', 'label' => 'Sibling age', 'rules' => 'max_length[3]|numeric'),
            array('field' => 'sibling1_status', 'label' => 'Sibling Status', 'rules' => 'max_length[16]'),
            array('field' => 'sibling1_id', 'label' => 'Sibling student ID of BRACU', 'rules' => 'max_length[20]|numeric'),
            array('field' => 'sibling2_name', 'label' => 'Sibling Name', 'rules' => 'max_length[255]'),
            array('field' => 'sibling2_age', 'label' => 'Sibling age', 'rules' => 'max_length[3]|numeric'),
            array('field' => 'sibling2_status', 'label' => 'Sibling Status', 'rules' => 'max_length[16]'),
            array('field' => 'sibling2_id', 'label' => 'Sibling student ID of BRACU', 'rules' => 'max_length[20]|numeric'),
            array('field' => 'spouse_id', 'label' => 'Spouse student ID of BRACU', 'rules' => 'min_length[8]|max_length[20]|numeric'),
            array('field' => 'employee_id', 'label' => "Your parent's Employee ID of BRAC", 'rules' => 'max_length[255]'),
            array('field' => 'captcha', 'label' => 'Captcha', 'rules' => 'trim|required|callback_check_captcha'),
        );
        /* rules for reference */



        /* if user apply for Bracu sibling scholarship then check if he/she has entered atleast one sibling ID */


        $exists = FALSE;
        if (isset($data['category'])) {
            $exists = TRUE;
        }
        $sibling_error = '';
        $spouse_error = '';
        $employee_error = '';

        if ($exists) {
            if (in_array('siblings', $data['category'])) {
                if (!$this->filled(array('sibling1_name', 'sibling1_age', 'sibling1_status', 'sibling1_id')) && !$this->filled(array('sibling2_name', 'sibling2_age', 'sibling2_status', 'sibling2_id'))) {
                    $sibling_error = "You have to submit at least ONE of your sibling's every information properly in order to 
                        successfully apply for Scholarship under 'Siblings Studying at BRACU' category";
                }
            }
            if (in_array('brac_employee', $data['category']) && $data['employee_id'] == '') {
                $employee_error = "you need to submit your parent's BRAC employee ID in order to apply under BRAC Employee Children scholarship category ";
            }

            if (in_array('spouse', $data['category']) && !$this->filled(array('spouse_name', 'spouse_id'))) {
                $spouse_error = "Your spouse's ID and Name is needed for Scholarship under Spouse Category";
            }
        }


        //setting the rules to form validation rule		
        $this->form_validation->set_rules($rules);
        //checking the inputs 
        if ($this->form_validation->run() == FALSE || $sibling_error != '' || $spouse_error != '' || $employee_error != '') {
            /* form has error */

            /* taking the post array */
            $data = $this->input->post();
// anik commented out				$data = $this->get_student_info();
            $this->load->model('main_model');
            $data['image_url'] = $this->main_model->send_image_url($this->session->userdata("userid"));
            $data['student_id'] = $this->session->userdata("userid");
            $data['scholar_info'] = $this->main_model->send_scholarship_information($this->session->userdata("userid"));
            $data['image_id'] = $this->session->userdata('userid');
            /* loading the view again */
            $data['sibling_error'] = $sibling_error;
            $data['spouse_error'] = $spouse_error;
            $data['employee_error'] = $employee_error;
            $SDF = TRUE;


            if (!isset($data['category'])) {
                $data['category'] = array();
            }

            $category['performance'] = (in_array('performance', $data['category']) ) ? -1 : 0;
            $category['merit'] = (in_array('merit', $data['category']) ) ? -1 : 0;
            $category['needbased'] = (in_array('needbased', $data['category']) ) ? -1 : 0;
            $category['spouse'] = (in_array('spouse', $data['category']) ) ? -1 : 0;
            $category['siblings'] = (in_array('siblings', $data['category']) ) ? -1 : 0;
            $category['brac_employee'] = (in_array('brac_employee', $data['category']) ) ? -1 : 0;
            $category['brac_ford'] = (in_array('brac_ford', $data['category']) ) ? -1 : 0;
            $category['phyic_challanged'] = (in_array('phyic_challanged', $data['category']) ) ? -1 : 0;
            $category['bracu_employee'] = (in_array('bracu_employee', $data['category']) ) ? -1 : 0;
            $category['freedom_fighter'] = (in_array('freedom_fighter', $data['category']) ) ? -1 : 0;
            $data['category'] = $category;
            $data = array_merge_recursive($data,$this->makeCaptcha());
            $this->load->view('application_form', $data);
        } else {
            // $this->debug();
            // return;
            //success....

            $this->load->model('main_model');
            $id = $this->session->userdata('userid');
            $data = $this->input->post();
            $primary = array(
                //category field yet to be take3n 
                'name' => $data['name'],
                'dd' => $data['dd'],
                'mm' => $data['mm'],
                'yy' => $data['yy'],
                'dept' => $data['dept'],
                'gender' => $data['gender'][0],
                'cgpa' => $data['cgpa'],
                'employee_id' => $data['employee_id'],
                'course_credit' => $data['course_credit'],
                'credit_completed' => $data['credit_completed'],
                'credit_required' => $data['credit_required'],
                'studio_credit' => $data['studio_credit'],
                'lecture_credit' => $data['lecture_credit'],
                'birth_place' => $data['birth_place'],
                'going_tarc' => $data['going_tarc'][0],
                'second_last_semester' => $data['second_last_semester'][0],
                'first_semester' => $data['first_semester'][0],
                'last_semester' => $data['last_semester'][0],
                'department_change' => $data['department_change'],
                'first_time_application' => $data['first_time_application'][0],
                'retake' => $data['retake'][0],
                'fail' => $data['fail'][0],
                'failing_reason' => $data['failing_reason'],
                'disciplinary' => $data['disciplinary'][0],
                'dis_reason' => $data['dis_reason'],
                'contact1' => $data['contact1'],
                'contact2' => $data['contact2'],
                    //'image_url'=>$data['image_url'],
//                'email' => $data['email'], //instead of putting it in the primary table. we'll be putting it in the email table . at the end of this function. //anik
            );


            $secondary = array(
                'father_name' => $data['father_name'],
                'father_profession' => $data['father_profession'],
                'father_income' => $data['father_income'],
                'father_contact' => $data['father_contact'],
                'father_contact' => $data['father_contact'],
                'mother_name' => $data['mother_name'],
                'mother_profession' => $data['mother_profession'],
                'mother_income' => $data['mother_income'],
                'mother_contact' => $data['mother_contact'],
                'mother_contact' => $data['mother_contact'],
                'guardian' => $data['guardian'],
                'guardian_profession' => $data['guardian_profession'],
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
                'sibling1_age' => $data['sibling1_age'],
                'sibling1_id' => $data['sibling1_id'],
                'sibling1_status' => $data['sibling1_status'],
                'sibling2_name' => $data['sibling2_name'],
                'sibling2_age' => $data['sibling2_age'],
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
                'ho_group' => $data['ho_group'],
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
            $schol_amount = array_fill_keys(array_keys($schol_amount), 0);




            //initially putting every field to 0. that would solve some issues. (anik).
            $schol_amount['spouse'] = 0;
            $schol_amount['performance'] = 0;
            $schol_amount['siblings'] = 0;
            $schol_amount['brac_ford'] = 0;
            $schol_amount['bracu_employee'] = 0;
            $schol_amount['phyic_challanged'] = 0;
            $schol_amount['brac_employee'] = 0;
            $schol_amount['needbased'] = 0;
            $schol_amount['merit'] = 0;
            $schol_amount['performance'] = 0;

            foreach ($data['category'] as $key) {
                //  echo '<script type="text/javascript">';
                //  echo 'alert("'.$key.'")';
                //  echo '</script>';
                
                $schol_amount[$key] = -1;
                if ($key == 'siblings') {
                	if (!$this->calculate_sibling($this->session->userdata('userid'), $data['sibling1_id'])) {
                        $schol_amount[$key] = 0;
                    } else {
                        $schol_amount[$key] = 50;
                    }
                }

                if ($key == 'spouse') {
                    if ($data['spouse_id'] == "") {
                        $schol_amount[$key] = 0;
                    } else {
                        if (!$this->calculate_sibling($this->session->userdata('userid'), $data['spouse_id'])) {
                            $schol_amount[$key] = 0;
                        } else {
                            $schol_amount[$key] = 50;
                        }
                    }
                }
                //echo $key;
            }


            if (in_array('performance', $data['category'])) {
                $id = $this->session->userdata('userid');
                $this->load->model('main_model');
                $cgpa = $data['cgpa'];
                $query = $this->main_model->get_student_info(
                        array(
                    'cgpa_from <=' => $cgpa,
                    'cgpa_to >=' => $cgpa), 'performance_table', 'amount');
                // echo $query-> row()-> amount;
                if ($query->num_rows() > 0) {
                    echo $query->row()->amount;
                    $schol_amount['performance'] = $query->row()->amount;
                }
            }
			
            $this->main_model->update_info($id, 'primary', $primary);
            $this->main_model->update_info($id, 'secondary', $secondary);
            $this->main_model->update_info($id, 'edu_back', $education);
            $this->main_model->update_info($id, 'scholar_amount', $schol_amount);
            $this->new_email($data['email'], $this->session->userdata('userid'));
            $this->photo_upload_form();
        }
    }

    public function uniqueemail($key) {
        $this->load->model('main_model');
        $query = $this->main_model->get_student_info(array('id !=' => $this->session->userdata('userid'), 'current_email' => $key), 'email', 'id');
        if ($query->num_rows() > 0) {
//            $this->load->library('form_validation');
//            $this->form_validation->set_messege('uniqueemail' , 'There is someone already using this email address. Try different one.');
//            echo $query->row()->id;
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function checkToken($str) {
        $this->load->model('main_model');
        $data['token'] = $this->main_model->getTokenRange();

        foreach ($data['token'] as $value) {
            $start = $value->start;
            $end = $value->end;
        }

        if (($start <= $str) && ($str <= $end)) {
            return TRUE;
        } else {
            $this->form_validation->set_message('checkToken', 'The %s field is not a valid Token');
            return FALSE;
        }
    }

    function calculate_sibling($myId, $sibId) {

//             if(strlen($sibId)<8 || $sibId='00000000')
//             {
//                 return FALSE;
//             }   

        $myId_1st2char = substr($myId, 0, 2);
        $sibId_1st2char = substr($sibId, 0, 2);

        echo $myId_1st2char . ' ' . $sibId_1st2char;

        if (intval($myId_1st2char) < intval($sibId_1st2char)) {
            return FALSE;
        } else if (intval($myId_1st2char) > intval($sibId_1st2char)) {
            return TRUE;
        } else {
            $myId_3rd = substr($myId, 2, 1);
            $sibId_3rd = substr($sibId, 2, 1);
            echo $myId_3rd . ' ' . $sibId_3rd;



            if ($myId_3rd == $sibId_3rd) {
                $myId_Last3 = intval(substr($myId, 5, 3));
                $sibId_Last3 = intval(substr($sibId, 5, 3));
                if ($myId_Last3 < $sibId_Last3) {
                    return FALSE;
                } else {
                    return TRUE;
                }
            }
            if ($myId_3rd == '1') {
                return FALSE;
            }
            if ($myId_3rd == '2') {
                return TRUE;
            }
            if ($myId_3rd == '3' && $sibId_3rd == '1') {
                return TRUE;
            } else {
                return FALSE;
            }
        }


        // die();
    }

    /**
     * takes student id from the session.
     * then returns all the infromation primary, secondary, education .. in an array
     */
    function get_student_info() {
        //getting user id from session.
        $userid = $this->session->userdata('userid');
        //crearting an array for the infromation to be returned.
        $information = array();
        //loading the model. main_model.
        $this->load->model('main_model');
        //getting information from primary table
        $userid = $this->session->userdata('userid');



        $primary_info = $this->main_model->get_student_info(array('id' => $userid), 'primary', array());

        if ($primary_info->num_rows() > 0) {
            //converting the result in an array.
            $primary_info = $primary_info->result_array();
            //getting the first row of the result.
            $primary_info = $primary_info[0];

            //putting the result in the information array.
            foreach ($primary_info as $key => $value) {
                $information[$key] = $value;
            }
        }

        $secondary_info = $this->main_model->get_student_info(array('id' => $userid), 'secondary', array());
        if ($secondary_info->num_rows() > 0) {
            $secondary_info = $secondary_info->result_array();
            $secondary_info = $secondary_info[0];
            foreach ($secondary_info as $key => $value) {
                $information[$key] = $value;
            }
        }

        $edu_info = $this->main_model->get_student_info(array('id' => $userid), 'edu_back', array());
        if ($edu_info->num_rows() > 0) {
            $edu_info = $edu_info->result_array();
            $edu_info = $edu_info[0];
            foreach ($edu_info as $key => $value) {
                $information[$key] = $value;
            }
        }


        $category = $this->main_model->get_student_info(array('id' => $userid), 'scholar_amount', array());
        $category = $category->result_array();
        $information['category'] = $category[0];
        return $information;
    }

    /* signup function called for student sign up
     * loads sign up view if user not logged in.
     * if logged in, it redirects the user to the application form page. */

    function signup() {
        /* if user is logged in it will be moved to application form */
        if ($this->session->userdata('logged_in')) {
            redirect('main/application_form');
        } else {
            /* user is not signed up */
            /* load the sign up form from view, with the captcha */
            $data = $this->makeCaptcha();
            $this->load->view('signup', $data);
        }
    }
    
    public function makeCaptcha(){
        $this->load->helper('captcha');
            $vals = array(
                'img_path' => './captcha/',
                'img_url' => base_url().'captcha/'
            );
            $cap = create_captcha($vals);
            $data = array(
                'captcha_time' => $cap['time'],
                'ip_address' => $this->input->ip_address(),
                'word' => $cap['word']
            );
            $this->session->set_userdata($data);
            
            $data['cap_img'] = $cap['image'];
            return $data;
    }
    
    

    
    
    /* called on submitting signup */
    function submit_signup() {
        // $this->debug($this->input->post());
        $data = $this->input->post();
        $this->load->model('main_model');

        $info = $this->main_model->get_student_info(array('id' => $data['id'], 'appID' => $data['appID']), 'primary', 'pass');
        if ($info->num_rows() > 0) {
            $data['exists'] = 'There is already an account of this ID or applicatoin ID';
            $this->load->view('signup', $data);
        } else {
            $this->load->library('form_validation');

            $rules = array(
                array('field' => 'id', 'label' => 'User ID', 'rules' => 'required|numeric'),
                array('field' => 'appID', 'label' => 'Applicant ID', 'rules' => 'required|numeric'),
                array('field' => 'password', 'label' => 'password', 'rules' => 'required'),
                array('field' => 'password2', 'label' => 'password confirmation ', 'rules' => 'required|matches[password]'),
                array('field' => 'email', 'label' => 'e-mail', 'rules' => 'required|valid_email'),
                array('field' => 'token', 'label' => 'token', 'rules' => 'required|callback_checkToken'),
                //captcha validation...
                // array('field' => 'captcha', 'label' => 'Captcha', 'rules' => 'trim|required|callback_check_captcha'),
            );
            
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == FALSE) {
                
                $this->load->view('signup' , $this->makeCaptcha());
                
            } else {
                $this->load->model('main_model');
                $this->main_model->createnewstudent('primary', array('id' => $data['id'], 'appID' => $data['appID'], 'email' => $data['email'], 'pass' => $data['password']));
                $this->main_model->createnewstudent('secondary', array('id' => $data['id']));
                $this->main_model->createnewstudent('edu_back', array('id' => $data['id']));
                $this->main_model->createnewstudent('scholar_amount', array('id' => $data['id']));
                // try{
                // $messege['body'] = 'You have been successefully registered to BRAC University Online scholarship program application program. Your password is '.$data['password'].' and id '.$data['id'];
                // $messege['subject'] = 'BRAC University online application regeistration';
                // $this->send_email($data['email'], $messege);
                // }catch(exception e){
                // }

                $warning = array
                    (
                    'uid' => '',
                    'id' => $data['id'],
                    'hit' => '0',
                    'remark' => ''
                );
                $this->main_model->createnewstudent('warning', $warning);
                $this->new_email($data['email'], $data['id']);
            }
        }
    }
    
    
    
    public function check_captcha() {
        $expiration = time() - 7200; // Two hour limit
        $cap = $this->input->post('captcha');
        if ($this->session->userdata('word') == $cap
                AND $this->session->userdata('ip_address') == $this->input->ip_address()
                AND $this->session->userdata('captcha_time') > $expiration) {
            return true;
        } else {
            $this->form_validation->set_message('check_captcha', 'The words You entered Did not match with one showed in the Image. Try again.');
            return false;
        }
    }
    

    /* loads the view of forgot password field */

    function forgotpassword() {
        $this->load->view('forgot');
    }

    /* called on pressing submit button of password requesting form */

    function send_pass() {
        $id = $this->input->post('id');
        $this->load->model('main_model');
        $query = $this->main_model->get_student_info(array('id' => $id), 'primary', array('email', 'pass'));
        if ($query->num_rows() > 0) {
            $pass = $query->row()->pass;
            $email_address = $query->row()->email;
            $data['subject'] = 'password recovery';
            $data['body'] = 'your password of brac university online scholarship applicatoin program is ' . $pass;

            if ($this->send_email($email_address, $data)) {
                echo "please check your email. your password has been sent to your email address.";
            } else {
                $data['errors'] = 'an error has been occured while sending you the password. please try again';
                $this->load->view('forgot', $data);
            }
        } else {
            $data['errors'] = 'ID not found. Please try again with your valid id ';
            $this->load->view('forgot', $data);
        }
    }

    /* takes an email address and a messege array containing head and body
     * then sends email to that addresss from the admin's mail address
     */

    function send_email($to, $messege) {
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'risul.karim@gmail.com',
            'smtp_pass' => 'Risul@063161945');

        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('scholarships@bracu.ac.bd', 'BRAC University Online Scholarship Application Management Team');
        $this->email->to($to);
        $this->email->subject($messege['subject']);
        $this->email->message($messege['body']);


        try {
            $this->email->send();
            return TRUE;
        } catch (Exception $e) {
            return FALSE;
        }
    }

    /**
     * loads the photo upload form for the user to upload their picture.
     */
    function photo_upload_form() {
        $this->load->view('upload_form');
    }





    function success($data) {
			$this->load->model('main_model');
			$scholarship_conditions = $this->main_model->get_student_info(array('id' => $this->session->userdata('userid')) 
			, 'scholar_amount' , 
			array('freedom_fighter' , 'brac_employee', 'bracu_employee' , 'performance' , 'merit'));
			
			$scholarship_conditions = $scholarship_conditions->row();
			
			$feedback = array();
			
			if($scholarship_conditions->performance != 0){
				$feedback ['performance'] = "Submit your Grade Sheet to the admission desk.";
			}
			
			if($scholarship_conditions->merit != 0){
				$feedback ['merit'] = "if you are applying for the first time in merit base category, submit your HSC and SSC or A level
					and O level Grade Sheet to the admission desk.";
			}
			
			if($scholarship_conditions->brac_employee != 0 || $scholarship_conditions->bracu_employee != 0 ){
				$feedback ['brac_employee'] = "Submit your parent's ID card copy to the Admission Desk.";
			}
			
			
			if($scholarship_conditions->freedom_fighter != 0){
				$feedback ['freedom_fighter'] = "submit your parent's freedom fighter's certificate to the admission desk.";
			}
			
		$data['feedback'] = $feedback;
        $this->load->view('success', $data);
    }




    function skip() {
        $data['title'] = 'upload successful';
        $data['messege'] = array(
            'heading' => 'Registration Process finished Sucessfully.',
            'body' =>
            'your scholarship form submission has been 
				done successfully. You will be notified about latest updates via 
				your mail address. Check your Mail for latest updates and information.<br/> <strong>Thank You</strong> <br/>'
        );

        $this->success($data);
    }
    
    

    /* funciton used for uploading files .. */

    function do_upload() {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '100';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';
        $config['file_name'] = $this->session->userdata('userid'); // <-- it is not working 

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload()) {
            $data = array('error' => $this->upload->display_errors());
            $this->load->view('upload_form', $data);
            return FALSE;
        } else {
            $data['title'] = 'Upload successful';
            $data['messege'] = array(
                'heading' => 'Processe Finished',
                'body' =>
                'your photo upload and scholarship form submission has been 
				done successfully. You will be notified about latest updates via 
				your mail address. Check your Mail for latest updates and information.<br/> <strong>Thank You</strong>'
            );
            $this->load->model('main_model');
            $image_data = $this->upload->data();
            //$iamge_url= base_url().'uploads/'.$this->session->userdata("userid").'.jpg';

            $iamge_ext = $image_data['file_ext'];
            $iamge_url = base_url() . 'uploads/' . $this->session->userdata("userid") . $iamge_ext;
            $img_data = array('image_url' => $iamge_url);
            $this->main_model->update_info($this->session->userdata("userid"), 'primary', $img_data);
			
			
			$this->success($data);
			
        }
    }


    function newemail() {
        echo $this->uniqueemail('ssss@hotmail.com');
    }

    /**
     * @author insane
     * creats a varification code against users's new email address.
     * sends user the varification
     * then asks user to enter the varification code.
     * if the email address is already in use it does nothing and simply returns.
     * if it already exists in the requested field.
     * It loads a page requesting for the varification code has been already sent to that email address.
     * If an ID is new that is not found in the ID list. Then function creates a new row with that ID.
     */
    private function new_email($email_add, $id) {
        $this->load->model('main_model');
        //variable used to detect if the request is being sent after signing up. value will be TRUE if it is after signing up.
        //default value is FALSE
        $first_time = FALSE;
        //checking if the id is new.
        $query = $this->main_model->get_student_info(array('id' => $id), 'email', 'id');
        if ($query->num_rows() == 0) {
            //the id is new. 
            //so insert the ID.
            $this->main_model->createnewstudent('email', array('id' => $id));
            $first_time = TRUE;
        }

        //check with current email address.
        $query = $this->main_model->get_student_info(array('id' => $id, 'current_email' => $email_add), 'email', 'id');
        if ($query->num_rows() > 0) {
            //this is email is currently in use. so do nothing and return.
            //echo 'already using';
            return;
        }

        //generating a varification ID.
        $varification = substr(str_shuffle(str_repeat('ABCDEF212312GHIJK0000000111111111111LMNOPQRSTUVWX4434234YZabcdefghijk324242lmnopqrstuvwxyz0123456789', 8)), 0, 8);
        $messege['subject'] = 'Email Varification';
        //finding out nam
        $name = '';
        $query = $this->main_model->get_student_info(array('id' => $id), 'primary', 'name');
        if ($query->num_rows() > 0) {
            $name = $query->row()->name;
        }

        //making the body
        $messege['body'] = 'Hi ' . $name . ',' . "\r\n";
        $messege['body'] = $messege['body'] . 'your Email varification code id ' . $varification . "\r\n";
        $messege['body'] = $messege['body'] . 'Use this to Activate your requested Email address' . "\r\n";
        //sending the email
        if (!$first_time)
            $this->send_email($email_add, $messege);
        //encrypt it
        $encrypted = md5($varification);
        //then insert into database
        $this->main_model->update_info($id, 'email', array('email_requested' => $email_add, 'varification' => $encrypted));

        // Now Showing the messege.
        //if the student signing up . then add signup success full messeges first.
        if ($first_time == TRUE) {
            $messege['body'] = 'You have been successefully registered to BRAC University Online scholarship program application program. Your password is ' . $this->main_model->get_student_info(array('id' => $id), 'primary', 'pass')->row()->pass . ' and id ' . $id
                    . "\r\n" . "\r\n" . 'The varification code to activate your email account is: ' . $varification . "\r\n" . 'Use this code to activate this email address after you log in.
                        ' . "\r\n" . " \r\n" . 'Thank You';

            $messege['subject'] = 'BRAC University online application regeistration';
            $this->send_email($email_add, $messege);
            $messege = array();
            $messege['heading'] = 'Registration Successful';
            $messege['body'] = 'Your registration has been successfully done. Please login with your ID and password To get the scholarship form.
						<br/>
						<strong> Thank You </strong><br/>';
            $data['messege'] = $messege;
            $this->load->view('success', $data);
            return;
        }
    }

    /**
     * @author Insane
     * if user has any requested email address pending. it renturns the email address . otherwise returns false;
     */
    private function requested_email() {
        $userid = $this->session->userdata('userid');
        $this->load->model('main_model');
        $query = $this->main_model->get_student_info(array('id' => $userid), 'email', 'email_requested');
        if ($query->num_rows() > 0) {
            return $query->row()->email_requested;
//            echo $query->row()->email_requested;
        } else {
            return FALSE;
        }
    }

    /**
     * @author Insane
     * if user has any current email address pending. it renturns the email address . otherwise returns '';
     */
    private function current_email() {
        $userid = $this->session->userdata('userid');
        $this->load->model('main_model');
        $query = $this->main_model->get_student_info(array('id' => $userid), 'email', 'current_email');
        if ($query->num_rows() > 0) {
            return $query->row()->current_email;
//            echo $query->row()->email_requested;
        } else {
            return '';
        }
    }

    /**
     * @author Insane
     * loads an application form with the give email address. 
     */
    function email_varification_form() {
        $messege['body'] = 'Please Enter the varification Code That has been last sent to your email address :<strong> ' . $this->requested_email() . '</strong> <br/>';
        $form = '
            <form name="email_varification" method="post" action="' . site_url('main/varify_email') . '"/><br/>';
        $form = $form . '<input type ="text" name="varification"/><br/><br/>';
        $form = $form . '<input type = "submit" name="submit" value="submit" />';
        $messege['body'] = $messege['body'] . $form;
        //now load the form and ask user to enter the varification code.
        $data['messege'] = $messege;
        //Loading the messege with appropriate Messege :-)
        $this->load->view('success', $data);
    }

    /**
     * @author Insane
     * 
     * called on submitting the email varification form.
     * takes the varification code and matches with databse's existing varification code and then set's user's requested email to current email if matches.
     * else shows error and promt form again to enter the messege again.
     */
    function varify_email() {
        //get the userid 
        $userid = $this->session->userdata('userid');
        //get the varification code form the form.
        $varification = $this->input->post('varification');
        $encrypted = md5($varification);
        //get the varification from database.
        $this->load->model('main_model');
        $query = $this->main_model->get_student_info(array('id' => $userid), 'email', 'varification');
        if ($query->num_rows() < 0) {
            echo 'no code to be varified';
            return;
        }

        $requested_email = $this->main_model->get_student_info(array('id' => $userid), 'email', 'email_requested')->row()->email_requested;
        $varification_db = $query->row()->varification;
        if ($encrypted == $varification_db) {
            //then varification code is correct;
            //setting requested email address the current one.
            $this->main_model->update_info($userid, 'email', array('current_email' => $requested_email, 'email_requested' => '', 'varification' => ''));
            //give user notification... that his email varification is correct and it will be his current email address.
            $data['title'] = 'Email  varification';
//            $messge['heading'] = 'Your Email Address has been activated';
            $data['myHead'] = 'Email Address has been activated';
            $messege['body'] = 'Your current email has been now set to <strong> ' . $requested_email . '</strong> From now, every updates and notification
                will be sent to this email address';
            $data['messege'] = $messege;
            $this->load->view('success', $data);
        } else {

            $data['title'] = 'Email Varification';
            $data['myHead'] = 'Wrong Code Inserted';
            $messege['body'] = 'The varification Code you inserted for :<strong> ' . $requested_email . '</strong> is a wrong Code. Please Submit the Correct one again, that
                has been already sent to this email account. or ' . anchor('main/newemail', 'or varify your email address again?') . '<br/>';
            $form = '
            <form name="email_varification" method="post" action="' . site_url('main/varify_email') . '"/><br/>';
            $form = $form . '<input type ="text" name="varification"/><br/><br/>';
            $form = $form . '<input type = "submit" name="submit" value="submit" />';
            $messege['body'] = $messege['body'] . $form;
            //now load the form and ask user to enter the varification code.
            $data['messege'] = $messege;
            $this->load->view('success', $data);
//            echo ' varification is incorrect';
        }
    }

    /**
     * @author Insane
     * 
     * returns TRUE if each field is not empty or else FALSE;
     */
    function filled($data = array()) {
        foreach ($data as $value) {
            if ($this->input->post($value) == '') {
                return FALSE;
            }
        }
        return TRUE;
    }

    function delete() {
        $id = '09101024';
        $this->load->model('main_model');
        $tablenames = array('primary', 'email', 'edu_back', 'warning', 'secondary', 'scholar_amount');
        $this->main_model->delete($id, $tablenames);
    }

    
}
