<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

 
class Site extends CI_Controller
{
    
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('crud_model');
        $this->load->database();
        /*cache control*/
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 2010 05:00:00 GMT");
    }
	
    
    public function index(){

    	$this->home();
    }

    public function single_page_sidebar(){

		$this->load->model("notice_model","notice");
		$this->load->model("news_model","news");
		$this->load->model("event_model","em");
		$this->load->model("site_links_model","site_links");
		$this->load->view('site/includes/single_page_sidebar');
	}
	 public function nnemodels(){

       $this->load->model("notice_model","notice");
		$this->load->model("news_model","news");
		$this->load->model("event_model","event");
		$this->load->model("site_links_model","site_links");
		$this->load->model("gallary_model","gm");
            
    }

	public function home(){

		//echo "Hello site";
		$this->load->model("gallary_model","gm");
		$this->load->model("home_banner_model","hbm");
		$this->load->model("page_model");
		$pagedata["results"] = $this->page_model->getData("principals-message");
		$this->load->model("notice_model","notice");
		$this->load->model("news_model","news");
		$this->load->model("event_model","event");
		$this->load->model("site_links_model","site_links");
		$data['page_title'] = 'Schoo Name';
		//$this->load->view('site/includes/header_links',$data);
		//$this->load->view('site/includes/top_menu');
		//$this->load->view('site/includes/home_slider');
		//$this->load->view('site/includes/home_content');

		$this->load->view('site/index',$pagedata);
		//$this->load->view('site/includes/footer');
	}

	public function mpo_corner(){

		//echo "Hello site";
		$this->nnemodels();
		$this->load->model("page_model");
		$pagedata["results"] = $this->page_model->getData("mpo_corner");
		$data['page_title'] = 'Schoo Name';
		$this->load->view('site/mpo_corner',$pagedata);
	}

	public function secretary_message(){
		$this->nnemodels();
		$this->load->model("page_model");
		$pagedata["results"] = $this->page_model->getData("secretary_message");
		$data['page_title'] = 'Secretary Message';
		$this->load->view('site/single_page',$pagedata);
	}

	public function principals_message(){
		$this->nnemodels();
		$this->load->model("page_model");
		$pagedata["results"] = $this->page_model->getData("principals-message");
		$data['page_title'] = 'School Name';
		$this->load->view('site/single_page',$pagedata);
	}

	public function sheikh_russel_digital_lab(){
		$this->nnemodels();
		//echo "Hello site";
		$this->load->model("page_model");
		$pagedata["results"] = $this->page_model->getData("sheikh_russel_digital_lab");
		$data['page_title'] = 'sheikh_russel_digital_lab';
		$this->load->view('site/single_page',$pagedata);
	}

	public function inst_information(){
		$this->nnemodels();
		//echo "Hello site";
		$this->load->model("page_model");
		$pagedata["results"] = $this->page_model->getData("inst_information");
		$data['page_title'] = 'Schoo Name';
		$this->load->view('site/single_page',$pagedata);
	}

	public function governing_body(){

		//echo "Hello site";
		$this->nnemodels();
		$this->load->model("governing_body_model","gbm");
		$data['page_title'] = 'Governing Body';
		$data['page_name'] = 'governing_body';

		$this->load->view('site/governing_body',$data);
	}

	public function empl_list(){
		$this->nnemodels();
		//echo "Hello site";
		$this->load->model("employee_model","emp_m");
		
		$data['page_title'] = 'Employee List';
		$data['page_name'] = 'empl_list';
		$this->load->view('site/employee_list',$data);
	}

	public function ret_principals(){
		$this->nnemodels();
		//echo "Hello site";
		$this->load->model("ex_principal_model","exp_m");
		
		$data['page_title'] = 'Retired Principals';
		$data['page_name'] = 'ret_principals';
		$this->load->view('site/retired_principals',$data);
	}

	public function ret_teacher(){
		$this->nnemodels();
		//echo "Hello site";
		$this->load->model("ex_principal_model","exp_m");
		
		$data['page_title'] = 'Retired Teachers';
		$data['page_name'] = 'ret_teacher';
		$this->load->view('site/retired_teacher',$data);
	}

	public function ret_head_and_teacher_list(){
		$this->nnemodels();
		//echo "Hello site";
		$this->load->model("ex_principal_model","exp_m");
		
		$data['page_title'] = 'Retired Head And Teachers List';
		$data['page_name'] = 'ret_head_and_teacher_list';
		$this->load->view('site/retired_head_and_teachers_list',$data);
	}



	public function teach_list(){
		$this->nnemodels();
		//echo "Hello site";
		$this->load->model("teachers_model","tech_m");
		
		$data['page_title'] = 'Teachers List';
		$data['page_name'] = 'teach_list';
		$this->load->view('site/teachers_list',$data);
	}

	public function teachers_employee_list(){
		$this->nnemodels();
		//echo "Hello site";
		$this->load->model("teachers_model","tech_m");
		$this->load->model("employee_model","emp_m");
		$data['page_title'] = 'Teachers and Employee List';
		$data['page_name'] = 'teach_employee_list';
		$this->load->view('site/teachers_employee_list',$data);
	}

	public function teacher_employee_mpo_list(){
		$this->nnemodels();
		//echo "Hello site";
		$this->load->model("teachers_model","tech_m");
		$this->load->model("employee_model","emp_m");
		$data['page_title'] = 'Teachers & Employee MPO List';
		$data['page_name'] = 'teacher_employee_mpo_list';
		$this->load->view('site/teacher_employee_mpo_list',$data);
	}

	public function teacher_employee_non_mpo_list(){
		$this->nnemodels();
		//echo "Hello site";
		$this->load->model("teachers_model","tech_m");
		$this->load->model("employee_model","emp_m");
		$data['page_title'] = 'Teachers & Employee NON-MPO List';
		$data['page_name'] = 'teacher_employee_non_mpo_list';
		$this->load->view('site/teacher_employee_non_mpo_list',$data);
	}


	public function srdl_photo_gallery(){
		$this->nnemodels();
		$this->load->model("srdl_model","srm");
		$data['page_title'] = 'SRDL Photo Gallery';
		$this->load->view('site/srdl_photo_gallery');
	}

	public function srdl_video_gallery(){
		$this->nnemodels();
		$this->load->model("srdl_video_model","srmv");
		$data['page_title'] = 'SRDL Video Gallery';
		$this->load->view('site/srdl_video_gallery');
	}

	public function srdl_instruction(){
		$this->nnemodels();
		//echo "Hello site";
		$this->load->model("page_model");
		$pagedata["results"] = $this->page_model->getData("srdl_instruction");
		$data['page_title'] = 'SRDL Instruction';
		$this->load->view('site/single_page',$pagedata);
	}

	public function srdl_others(){
		$this->nnemodels();
		//echo "Hello site";
		$this->load->model("page_model");
		$pagedata["results"] = $this->page_model->getData("srdl_others");
		$data['page_title'] = 'SRDL Others';
		$this->load->view('site/single_page',$pagedata);
	}
	

	public function photo_gallery(){
		$this->nnemodels();
		$this->load->model("gallary_model","gm");
		$data['page_title'] = 'Schoo Name';
		$this->load->view('site/gallery');
	}




	public function contact(){
		$this->nnemodels();
		$data['page_title'] = 'Schoo Name';
		$this->load->view('site/contact');
	}

	public function mandatory(){
		$this->nnemodels();
		//echo "Hello site";
		$this->load->model("page_model");
		$pagedata["results"] = $this->page_model->getData("mandatory");
		$data['page_title'] = 'Schoo Name';
		$this->load->view('site/single_page',$pagedata);
	}
	public function lesson_outline(){
		$this->nnemodels();
		//echo "Hello site";
		$this->load->model("page_model");
		$pagedata["results"] = $this->page_model->getData("lesson_outline");
		$data['page_title'] = 'Schoo Name';
		$this->load->view('site/single_page',$pagedata);	}

	public function dress(){
		$this->nnemodels();
		//echo "Hello site";
		$this->load->model("page_model");
		$pagedata["results"] = $this->page_model->getData("dress");
		$data['page_title'] = 'Schoo Name';
		$this->load->view('site/single_page',$pagedata);
	}

	public function entertainment(){
		$this->nnemodels();
		//echo "Hello site";
		$this->load->model("page_model");
		$pagedata["results"] = $this->page_model->getData("entertainment");
		$data['page_title'] = 'Schoo Name';
		$this->load->view('site/single_page',$pagedata);
	}

	public function routine(){
		$this->nnemodels();
		//echo "Hello site";
		$this->load->model("page_model");
		$pagedata["results"] = $this->page_model->getData("routine");
		$data['page_title'] = 'Schoo Name';
		$this->load->view('site/routine',$pagedata);
	}



	public function class_results(){
		$this->nnemodels();
		//echo "Hello site";
		$this->load->model("page_model");
		$pagedata["results"] = $this->page_model->getData("class_results");
		$data['page_title'] = 'Schoo Name';
		$this->load->view('site/single_page',$pagedata);
	}

	public function scholarship(){
		$this->nnemodels();
		//echo "Hello site";
		$this->load->model("page_model");
		$pagedata["results"] = $this->page_model->getData("scholarship");
		$data['page_title'] = 'Schoo Name';
		$this->load->view('site/single_page',$pagedata);
	}

	public function subjects(){
		$this->nnemodels();
		//echo "Hello site";
		$this->load->model("page_model");
		$pagedata["results"] = $this->page_model->getData("routine");
		$data['page_title'] = 'Schoo Name';
		$this->load->view('site/subjects',$pagedata);
	}

	public function rules(){
		$this->nnemodels();
		//echo "Hello site";
		$this->load->model("page_model");
		$pagedata["results"] = $this->page_model->getData("rules");
		$data['page_title'] = 'Schoo Name';
		$this->load->view('site/single_page',$pagedata);
	}

	public function admis_information(){
		$this->nnemodels();
		//echo "Hello site";
		$this->load->model("page_model");
		$pagedata["results"] = $this->page_model->getData("admis_information");
		$data['page_title'] = 'Schoo Name';
		$this->load->view('site/single_page',$pagedata);
	}

	public function online_admission(){
		$this->nnemodels();
		//echo "Hello site";
		$this->load->model("page_model");
		$pagedata["results"] = $this->page_model->getData("online_admission");
		$data['page_title'] = 'Schoo Name';
		$this->load->view('site/online_admission',$pagedata);
	}

    public function store_online_admission_form() {
        $this->load->library("form_validation");

        // Set form validation rules
        $this->form_validation->set_rules("class", "Class", "required|xss_clean");
        $this->form_validation->set_rules("roll_id", "Roll / ID", "required|xss_clean");
        $this->form_validation->set_rules("student_name_bangla", "Student Name (Bangla)", "required|xss_clean");
        $this->form_validation->set_rules("student_name_english", "Student Name (English)", "required|xss_clean");
        $this->form_validation->set_rules("birth_date", "Birth Date", "required|xss_clean");
        $this->form_validation->set_rules("religion", "Religion", "required|xss_clean");
        $this->form_validation->set_rules("mobile_no", "Mobile No", "required|xss_clean");
        $this->form_validation->set_rules("father_name_bangla", "Father Name (Bangla)", "required|xss_clean");
        $this->form_validation->set_rules("father_nid", "Father NID", "xss_clean");
        $this->form_validation->set_rules("father_mobile_no", "Father Mobile No", "xss_clean");
        $this->form_validation->set_rules("mother_name_bangla", "Mother Name (Bangla)", "required|xss_clean");
        $this->form_validation->set_rules("mother_nid", "Mother NID", "xss_clean");
        $this->form_validation->set_rules("mother_mobile_no", "Mother Mobile No", "xss_clean");
        $this->form_validation->set_rules("permanent_address", "Permanent Address", "required|xss_clean");
        $this->form_validation->set_rules("present_address", "Present Address", "xss_clean");

        if ($this->form_validation->run() == FALSE) {
            // Validation failed, redirect to the form with an error message
            redirect("admission/form/error");
        } else {
            // Prepare data for insertion
            $data = array(
                'class'                 => $this->input->post('class'),
                'roll_id'               => $this->input->post('roll_id'),
                'student_name_bangla'   => $this->input->post('student_name_bangla'),
                'student_name_english'  => $this->input->post('student_name_english'),
                'birth_date'            => $this->input->post('birth_date'),
                'religion'              => $this->input->post('religion'),
                'mobile_no'             => $this->input->post('mobile_no'),
                'father_name_bangla'    => $this->input->post('father_name_bangla'),
                'father_nid'            => $this->input->post('father_nid'),
                'father_mobile_no'      => $this->input->post('father_mobile_no'),
                'mother_name_bangla'    => $this->input->post('mother_name_bangla'),
                'mother_nid'            => $this->input->post('mother_nid'),
                'mother_mobile_no'      => $this->input->post('mother_mobile_no'),
                'permanent_address'     => $this->input->post('permanent_address'),
                'present_address'       => $this->input->post('present_address'),
                'created_date'          => date('Y-m-d H:i:s'),
            );

            // Insert data into the database
            $this->db->insert('admission_form', $data);

            // Redirect with success message
            redirect("site/online_admission");
        }
    }


	public function inst_resuls(){
		$this->nnemodels();
		//echo "Hello site";
		$this->load->model("page_model");
		$pagedata["results"] = $this->page_model->getData("inst_resuls");
		$data['page_title'] = 'Schoo Name';
		$this->load->view('site/single_page',$pagedata);
	}

	public function board_results(){
		$this->nnemodels();
		$this->load->model("page_model");
		$pagedata["results"] = $this->page_model->getData("mpo_corner");
		$data['page_title'] = 'Schoo Name';
		$this->load->view('site/board_result',$pagedata);
	}

	public function best_of_inst(){
		$this->nnemodels();
		//echo "Hello site";
		$this->load->model("page_model");
		$pagedata["results"] = $this->page_model->getData("best_of_inst");
		$data['page_title'] = 'Schoo Name';
		$this->load->view('site/single_page',$pagedata);
	}

	public function best_of_board(){
		$this->nnemodels();
		//echo "Hello site";
		$this->load->model("page_model");
		$pagedata["results"] = $this->page_model->getData("best_of_board");
		$data['page_title'] = 'Schoo Name';
		$this->load->view('site/single_page',$pagedata);
	}
	
	

	

	public function notice(){
		$this->nnemodels();
		//echo "Hello site";
		$this->load->model("notice_model","nm");
		$data['page_title'] = 'List Of Notices';
		$this->load->view('site/notice',$data);
	}

		public function news(){
		$this->nnemodels();
		//echo "Hello site";
		$this->load->model("news_model","news");
		$data['page_title'] = 'List Of News';
		$this->load->view('site/news',$data);
	}

		public function event(){
		$this->nnemodels();
		//echo "Hello site";
		$this->load->model("event_model","event");
		$data['page_title'] = 'List Of Events';
		$this->load->view('site/event',$data);
	}

	public function notice_single($post_id){
		$this->nnemodels();
		//echo "Hello site";
		$this->load->model("gallary_model","gm");
		$this->load->model("notice_model","ntm");
		$row = $this->ntm->getonerow($post_id);
		$data['r'] = $row;
		$data['page_title'] = 'Single Notice';
		$this->load->view('site/notice_single',$data);
	}

	public function news_single($post_id){
		$this->nnemodels();
		//echo "Hello site";
		$this->load->model("news_model","news");
		$row = $this->news->getonerow($post_id);
		$data['n'] = $row;
		$data['page_title'] = 'Single News';
		$this->load->view('site/news_single',$data);
	}

	public function event_single($post_id){
		$this->nnemodels();
		//echo "Hello site";
		$this->load->model("event_model","event");
		$row = $this->event->getonerow($post_id);
		$data['e'] = $row;
		$data['page_title'] = 'Single Events';
		$this->load->view('site/events_single',$data);
	}

    //Default function, redirects to logged in user area
    public function administrator()
    {
        
        if ($this->session->userdata('admin_login') == 1)
            redirect(base_url() . 'super_admin/dashboard', 'refresh');
			
        if ($this->session->userdata('teacher_login') == 1)
            redirect(base_url() . 'teacher/dashboard', 'refresh');
			
        if ($this->session->userdata('student_login') == 1)
            redirect(base_url() . 'student/dashboard', 'refresh');
			
        if ($this->session->userdata('parent_login') == 1)
            redirect(base_url() . 'parents/dashboard', 'refresh');
			
		 $this->load->view('super_admin/login');
        
    }

    
	//Ajax login function 
	function ajax_login()
	{
		$response = array();
		
		//Recieving post input of email, password from ajax request
		$email 		= $_POST["email"];
		$password 	= $_POST["password"];
		$response['submitted_data'] = $_POST;		
		
		//Validating login
		$login_status = $this->validate_login( $email ,  $password );
		$response['login_status'] = $login_status;
		if ($login_status == 'success') {
			//$response['redirect_url'] = '';
			redirect("site/administrator");
		}
		
		//Replying ajax request with validation response
		//echo json_encode($response);
		echo "<script>alert('Inavlid username/password')</script>";
		redirect(base_url() . 'site/administrator', 'refresh');
	}
    
    //Validating login from ajax request
    function validate_login($email	=	'' , $password	 =  '')
    {
		 $credential	=	array(	'email' => $email , 'password' => $password );
		 
		 
		 // Checking login credential for admin
        $query = $this->db->get_where('admin' , $credential);
        if ($query->num_rows() > 0) {
            $row = $query->row();
			  $this->session->set_userdata('admin_login', '1');
			  $this->session->set_userdata('admin_id', $row->admin_id);
			  $this->session->set_userdata('name', $row->name);
			  $this->session->set_userdata('login_type', 'admin');
			  return 'success';
		}
		 
		 // Checking login credential for teacher
        $query = $this->db->get_where('teacher' , $credential);
        if ($query->num_rows() > 0) {
            $row = $query->row();
			  $this->session->set_userdata('teacher_login', '1');
			  $this->session->set_userdata('teacher_id', $row->teacher_id);
			  $this->session->set_userdata('name', $row->name);
			  $this->session->set_userdata('login_type', 'teacher');
			  return 'success';
		}
		 
		 // Checking login credential for student
        $query = $this->db->get_where('student' , $credential);
        if ($query->num_rows() > 0) {
            $row = $query->row();
			  $this->session->set_userdata('student_login', '1');
			  $this->session->set_userdata('student_id', $row->student_id);
			  $this->session->set_userdata('name', $row->name);
			  $this->session->set_userdata('login_type', 'student');
			  return 'success';
		}
		 
		 // Checking login credential for parent
        $query = $this->db->get_where('parent' , $credential);
        if ($query->num_rows() > 0) {
            $row = $query->row();
			  $this->session->set_userdata('parent_login', '1');
			  $this->session->set_userdata('parent_id', $row->parent_id);
			  $this->session->set_userdata('name', $row->name);
			  $this->session->set_userdata('login_type', 'parent');
			  return 'success';
		}
		
		return 'invalid';

    }
    
    /***DEFAULT NOR FOUND PAGE*****/
    function four_zero_four()
    {
        $this->load->view('four_zero_four');
    }
    

	/***RESET AND SEND PASSWORD TO REQUESTED EMAIL****/
	function reset_password()
	{
		$account_type = $this->input->post('account_type');
		if ($account_type == "") {
			redirect(base_url(), 'refresh');
		}
		$email  = $this->input->post('email');
		$result = $this->email_model->password_reset_email($account_type, $email); //SEND EMAIL ACCOUNT OPENING EMAIL
		if ($result == true) {
			$this->session->set_flashdata('flash_message', get_phrase('password_sent'));
		} else if ($result == false) {
			$this->session->set_flashdata('flash_message', get_phrase('account_not_found'));
		}
		
		redirect(base_url(), 'refresh');		
	}
    /*******LOGOUT FUNCTION *******/
    function logout()
    {
        $this->session->unset_userdata();
        $this->session->sess_destroy();
        $this->session->set_flashdata('logout_notification', 'logged_out');
        redirect(base_url() , 'refresh');
    }
    
}