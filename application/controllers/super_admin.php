<?php
ob_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
require_once APPPATH . '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
class Super_admin extends CI_Controller
{
    
    
	function __construct()
	{
		parent::__construct();
		$this->load->database();
        //
		
       /*cache control*/
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');

		
    }
    public function nnemodels(){

       $this->load->model("notice_model","nm");
        $this->load->model("news_model","news");
        $this->load->model("event_model","em");
        $this->load->model("site_links_model","site_links");
            
    }
    
    /***default functin, redirects to login page if no admin logged in yet***/
    public function index()
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url() . 'site', 'refresh');
        if ($this->session->userdata('admin_login') == 1)
            redirect(base_url() . 'super_admin/dashboard', 'refresh');
    }
    
    /***ADMIN DASHBOARD***/
    function dashboard()
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        $this->nnemodels();
        $page_data['page_name']  = 'dashboard';
        $page_data['page_title'] = get_phrase('admin_dashboard');
        $this->load->view('super_admin/dashboard', $page_data);
    }

    function event_calendar()
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        $this->nnemodels();
        $page_data['page_name']  = 'event_calendar';
        $page_data['page_title'] = get_phrase('event_calendar');
        $page_data['notices']    = $this->db->get('noticeboard')->result_array();
        $this->load->view('super_admin/event_calendar', $page_data);
    }

    /***CMS ADMIN DASHBOARD***/
    public function layout(){

        $this->load->view('super_admin/includes/header_links');
        $this->load->view('super_admin/includes/main_menu');
        $this->load->view('super_admin/includes/menu_top_logo');
        $this->load->view('super_admin/includes/top_bar.php');
            
    }
     public function footer_layout(){

        $this->load->view('super_admin/includes/footer');
        $this->load->view('super_admin/includes/hidden_sidebar');
        $this->load->view('super_admin/includes/settings');
        $this->load->view('super_admin/includes/footer_js');
            
    }

    function cms_dashboard()
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        $page_data['page_name']  = 'cms_dashboard';
        $page_data['page_title'] = get_phrase('cms_dashboard');
        $this->layout();
        $this->load->view('super_admin/dashboard', $page_data);
    }

    public function view_pages(){
        $this->layout();
        $this->load->model("page_model","pm");
        //echo "Hello view_pages";
        $page_data['page_name']  = 'view_pages';
        $page_data['page_title'] = get_phrase('view_pages');
        $this->load->view('super_admin/cms/view_pages');
        $this->footer_layout();
        
    }

    public function sms_gateway(){
        $this->layout();
        $this->load->model("page_model","pm");
        //echo "Hello view_pages";
        $page_data['page_name']  = 'sms_gateway';
        $page_data['page_title'] = get_phrase('sms_gateway');
        $this->load->view('super_admin/sms_gateway');
        $this->footer_layout();
        
    }

    public function edit_page($id){
        $this->layout();
        $this->load->model("page_model","pm");
        $row = $this->pm->getonerow($id);
        $data['r'] = $row;
        $this->load->view('super_admin/cms/edit_page',$data);
        $this->footer_layout();
        
    }

    function update_page(){
        $id=$this->input->post('id');
        $data = array(

                'page_title' =>$this->input->post('page_title'),
                'content' =>$this->input->post('content')

            );
        $this->db->where('id',$id);
        $this->db->update('pagedata', $data);
        redirect("super_admin/view_pages");
    }

    function delete_page($id){
        $this->db->where('id',$id);
        $this->db->delete('pagedata');
        redirect("super_admin/view_pages");
    }

    function add_cat(){
        $this->load->model("cat_model","cm");
        $this->load->view('admin/add_cat');
    }

    function insert_cat(){
        $this->load->model("cat_model","cm");
        $this->cm->insert_cat();
    }
    
    function edit_cat($cat_id){
        $this->load->model("cat_model","cm");
        $row = $this->cm->getonerow($cat_id);
        $data['r'] = $row;
        $this->load->view('admin/edit_cat',$data);
        
    }

    function update_cat($cat_id){
        $this->load->model("cat_model","cm");
        $this->cm->update_cat();
    }

    function notice(){
        $this->layout();
        $this->load->library("form_validation");
        $this->load->view('super_admin/cms/notice');
        $this->footer_layout();
    }
    function insert_notice(){
            $this->layout();
            $this->load->model("notice_model","nm");
            $this->nm->insert_notice();
            $this->footer_layout();
        }
    function view_notices(){
        $this->layout();
        $this->load->model("notice_model","nm");
        $this->load->view('super_admin/cms/view_notices');
        $this->footer_layout();
    }

    function edit_notice($post_id){
        $this->layout();
        $this->load->model("notice_model","nm");
        $row = $this->nm->getonerow($post_id);
        $data['r'] = $row;
        $this->load->view('super_admin/cms/edit_notice',$data);
        $this->footer_layout();
    }

    function phpinfo(){
        phpinfo();
    }




    function update_notice(){
        $this->load->model("notice_model","nm");
        $this->nm->update_notice();
    }

    function delete_notice($post_id){
        $this->db->where('post_id',$post_id);
        $this->db->delete('posts');
        redirect("super_admin/view_notices");
    }

    function news(){
        $this->layout();
        $this->load->library("form_validation");
        $this->load->view('super_admin/cms/news');
        $this->footer_layout();
    }
    function insert_news(){
            $this->layout();
            $this->load->model("news_model","nm");
            $this->nm->insert_news();
            $this->footer_layout();
        }
    function view_newses(){
        $this->layout();
        $this->load->model("news_model","nm");
        $this->load->view('super_admin/cms/view_newses');
        $this->footer_layout();
    }

    function edit_news($post_id){
        $this->layout();
        $this->load->model("news_model","nm");
        $row = $this->nm->getonerow($post_id);
        $data['r'] = $row;
        $this->load->view('super_admin/cms/edit_news',$data);
        $this->footer_layout();
        
    }

    function update_news(){
        $this->load->model("news_model","nm");
        $this->nm->update_news();
    }

    function delete_news($post_id){
        $this->db->where('post_id',$post_id);
        $this->db->delete('news');
        redirect("super_admin/view_newses");
    }

    function event(){
        $this->layout();
        $this->load->library("form_validation");
        $this->load->view('super_admin/cms/event');
        $this->footer_layout();
    }
    function insert_event(){
            $this->load->model("event_model","nm");
            $this->nm->insert_event();
        }
    function view_events(){
        $this->layout();
        $this->load->model("event_model","nm");
        $this->load->view('super_admin/cms/view_events');
        $this->footer_layout();
    }

    function edit_event($post_id){
        $this->layout();
        $this->load->model("event_model","nm");
        $row = $this->nm->getonerow($post_id);
        $data['r'] = $row;
        $this->load->view('super_admin/cms/edit_event',$data);
        $this->footer_layout();
        
    }

    function update_event($post_id){
        $this->load->model("event_model","nm");
        $this->nm->update_event();
    }

    function delete_event($post_id){
        $this->db->where('post_id',$post_id);
        $this->db->delete('event');
        redirect("super_admin/view_events");
    }

    /*SRDL FUNCTIONS*/

    function srdl_photo_gallery()
    {
        $this->layout();
        $this->load->model("srdl_model","srm");
        $this->load->view('super_admin/cms/srdl_photo_gallery', array('error' => '' ));
        $this->footer_layout();
    }

    function srdl_photo_gallery_upload()
    {
        $this->layout();
        $this->load->model("srdl_model","srm");
        $this->srm->srdl_photo_gallery_upload();
        $this->footer_layout();
    }

    function edit_srdl_photo_gallery($id)
    {
        $this->layout();
        $id=$this->uri->segment(3);
        $this->load->model("srdl_model","srm");
        $row = $this->srm->srdl_photo_getonerow($id);
        $data['r'] = $row;
        $this->load->view('super_admin/cms/edit_srdl_photo_gallery',$data);
        $this->footer_layout();
    }


    function update_srdl_photo_gallery(){
        $this->load->model("srdl_model","srm");
        $this->srm->update_srdl_photo_gallery();
    }

    function delete_srdl_photo_gallery($id){
        $this->db->where('id',$id);
        $this->db->delete('srdl_photo_gallery');
        redirect("super_admin/srdl_photo_gallery");
    }


    /*SRDL FUNCTIONS*/


    /*SRDL VIDEO FUNCTIONS*/

    function srdl_video_gallery()
    {
        $this->layout();
        $this->load->model("srdl_video_model","srmv");
        $this->load->view('super_admin/cms/srdl_video_gallery', array('error' => '' ));
        $this->footer_layout();
    }

    function srdl_video_gallery_upload()
    {
        $this->layout();
        $this->load->model("srdl_video_model","srmv");
        $this->srmv->srdl_video_gallery_upload();
        $this->footer_layout();
    }

    function edit_srdl_video_gallery($id)
    {
        $this->layout();
        $id=$this->uri->segment(3);
        $this->load->model("srdl_video_model","srmv");
        $row = $this->srm->srdl_video_getonerow($id);
        $data['r'] = $row;
        $this->load->view('super_admin/cms/edit_srdl_video_gallery',$data);
        $this->footer_layout();
    }


    function update_srdl_video_gallery(){
        $this->load->model("srdl_video_model","srmv");
        $this->srm->update_srdl_video_gallery();
    }

    function delete_srdl_video_gallery($id){
        $this->db->where('id',$id);
        $file_name=$this->uri->segment(4);
        $this->db->delete('srdl_video_gallery');
        unlink(FCPATH.'uploads/srdl_video_gallary/'.$file_name);
        redirect("super_admin/srdl_video_gallery");
    }


    /*SRDL VIDEO FUNCTIONS*/

    function gallary_upload()
    {
        $this->layout();
        $this->load->model("gallary_model","gm");
        $this->load->view('super_admin/cms/gallary_upload', array('error' => '' ));
        $this->footer_layout();
    }

    function do_upload()
    {
        $this->layout();
        $this->load->model("gallary_model","gm");
        $this->gm->do_upload();
        $this->footer_layout();
    }

    function edit_title($id)
    {
        $this->layout();
        $id=$this->uri->segment(3);
        $this->load->model("gallary_model","gm");
        $row = $this->gm->getonerow($id);
        $data['r'] = $row;
        $this->load->view('super_admin/cms/edit_title',$data);
        $this->footer_layout();
    }


    function update_title($id){
        $this->load->model("gallary_model","gm");
        $this->gm->update_title();
    }

    function delete_image($id){
        $this->db->where('id',$id);
        $this->db->delete('photo_gallery');
        redirect("super_admin/gallary_upload");
    }

    /*Home Banner*/
    function home_banner()
    {
        $this->load->helper("form");
        $this->layout();
        $this->load->model("home_banner_model","hbm");
        $this->load->view('super_admin/cms/home_banner', array('error' => ' ' ));
        $this->footer_layout();
    }

    function do_hb_upload()
    {
        $this->layout();
        $this->load->model("home_banner_model","hbm");
        $this->hbm->do_upload();
        $this->footer_layout();
    }

    function edit_hb_title($id)
    {
        $this->load->helper("form");
        $this->layout();
        $this->load->model("home_banner_model","hbm");
        $row = $this->hbm->getonerow($id);
        $data['r'] = $row;
        $this->load->view('super_admin/cms/edit_hb_title',$data);
        $this->footer_layout();
    }


    function update_hb_title($id){
        $this->load->helper("form");
        $this->load->model("home_banner_model","hbm");
        $this->hbm->update_title();
    }

    function delete_hb_image($id){
        $this->load->helper("form");
        $this->db->where('id',$id);
        $this->db->delete('home_banner');
        redirect("super_admin/home_banner");
    }

    /*End of Home Banner*/

    function governing_body(){
        $this->layout();
        $this->load->library("form_validation");
        $this->load->view('super_admin/cms/governing_body');
        $this->footer_layout();
    }
    function insert_governing_body(){
            $this->layout();
            $this->load->model("governing_body_model","gbm");
            $this->gbm->insert_governing_body();
            $this->footer_layout();
        }
    function view_governing_body(){
        $this->layout();
        $this->load->model("governing_body_model","gbm");
        $this->load->view('super_admin/cms/view_governing_body');
        $this->footer_layout();
    }

    function edit_governing_body($id){
        $this->layout();
        $this->load->model("governing_body_model","gbm");
        $row = $this->gbm->getonerow($id);
        $data['r'] = $row;
        $this->load->view('super_admin/cms/edit_governing_body',$data);
        $this->footer_layout();
        
    }

    function update_governing_body(){
        $this->load->model("governing_body_model","gbm");
        $this->gbm->update_governing_body();
    }

    function delete_governing_body($id){
        $this->db->where('id',$id);
        $this->db->delete('governing_body');
        redirect("super_admin/view_governing_body");
    }

    /*insert employee*/
    function employee(){
        $this->layout();
        $this->load->library("form_validation");
        $this->load->view('super_admin/cms/employee');
        $this->footer_layout();
    }
    function insert_employee(){
            $this->layout();
            $this->load->model("employee_model","emp_m");
            $this->emp_m->insert_employee();
            $this->footer_layout();
        }
    function view_employee(){
        $this->layout();
        $this->load->model("employee_model","emp_m");
        $this->load->view('super_admin/cms/view_employee');
        $this->footer_layout();
    }

    function edit_employee($id){
        $this->layout();
        $this->load->model("employee_model","emp_m");
        $row = $this->emp_m->getonerow($id);
        $data['r'] = $row;
        $this->load->view('super_admin/cms/edit_employee',$data);
        $this->footer_layout();
        
    }

    function update_employee(){
        $this->load->model("employee_model","emp_m");
        $this->emp_m->update_employee();
    }

    function delete_employee($id){
        $this->db->where('id',$id);
        $this->db->delete('employee');
        redirect("super_admin/view_employee");
    }
    /*end of employe*/

    /*Ex-Principles*/
     function ex_principal(){
        $this->layout();
        $this->load->library("form_validation");
        $this->load->view('super_admin/cms/ex_principal');
        $this->footer_layout();
    }
    function insert_ex_principal(){
            $this->layout();
            $this->load->model("ex_principal_model","exp_m");
            $this->exp_m->insert_ex_principal();
            $this->footer_layout();
        }
    function view_ex_principal(){
        $this->layout();
        $this->load->model("ex_principal_model","exp_m");
        $this->load->view('super_admin/cms/view_ex_principal');
        $this->footer_layout();
    }

    function edit_ex_principal($id){
        $this->layout();
        $this->load->model("ex_principal_model","exp_m");
        $row = $this->exp_m->getonerow($id);
        $data['r'] = $row;
        $this->load->view('super_admin/cms/edit_ex_principal',$data);
        $this->footer_layout();
        
    }

    function update_ex_principal(){
        $this->load->model("ex_principal_model","exp_m");
        $this->exp_m->update_ex_principal();
    }

    function delete_ex_principal($id){
        $this->db->where('id',$id);
        $this->db->delete('ex_principal');
        redirect("super_admin/view_ex_principal");
    }
    /*End of ex-principles*/


    /*Ex-Teacher*/
     function ex_teacher(){
        $this->layout();
        $this->load->library("form_validation");
        $this->load->view('super_admin/cms/ex_teacher');
        $this->footer_layout();
    }
    function insert_ex_teacher(){
            $this->layout();
            $this->load->model("ex_principal_model","exp_m");
            $this->exp_m->insert_ex_teacher();
            $this->footer_layout();
        }
    function view_ex_teacher(){
        $this->layout();
        $this->load->model("ex_principal_model","exp_m");
        $this->load->view('super_admin/cms/view_ex_teacher');
        $this->footer_layout();
    }

    function edit_ex_teacher($id){
        $this->layout();
        $this->load->model("ex_principal_model","exp_m");
        $row = $this->exp_m->getonerow_ex_teacher($id);
        $data['r'] = $row;
        $this->load->view('super_admin/cms/edit_ex_teacher',$data);
        $this->footer_layout();
        
    }

    function update_ex_teacher(){
        $this->load->model("ex_principal_model","exp_m");
        $this->exp_m->update_ex_teacher();
    }

    function delete_ex_teacher($id){
        $this->db->where('id',$id);
        $this->db->delete('ex_teacher');
        redirect("super_admin/view_ex_teacher");
    }
    /*End of ex-teacher*/

    function site_links(){
        $this->layout();
        $this->load->model("site_links_model","site_links");
        $this->load->library("form_validation");
        $this->load->view('super_admin/cms/site_links');
        $this->footer_layout();
    }
    function insert_site_links(){
            $this->layout();
            $this->load->model("site_links_model","site_link");
            $this->site_link->insert_site_links();
            $this->footer_layout();
        }
    function view_site_links(){
        $this->layout();
        $this->load->model("site_links_model","site_links");
        $this->load->view('super_admin/cms/view_site_links');
        $this->footer_layout();
    }

    function edit_site_links($id){
        $this->layout();
        $this->load->model("site_links_model","site_links");
        $row = $this->site_links->getonerow($id);
        $data['r'] = $row;
        $this->load->view('super_admin/cms/edit_site_links',$data);
        $this->footer_layout();
        
    }

    function update_site_links($id){
        $this->load->model("site_links_model","site_links");
        $this->site_links->update_site_links();
    }

    function delete_site_links($id){
        $this->db->where('id',$id);
        $this->db->delete('site_links');
        redirect("super_admin/site_links");
    }
    
    
    /****MANAGE STUDENTS CLASSWISE*****/
	function student_add()
	{
		if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
			
		$this->layout();
        $page_data['page_name']  = 'student_add';
		$page_data['page_title'] = get_phrase('add_student');
		$this->load->view('backend/index', $page_data);
        $this->footer_layout();
	}
	
	function student_information($class_id = '')
	{
		if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
		$this->layout();	
		$page_data['page_name']  	= 'student_information';
		$page_data['page_title'] 	= get_phrase('student_information'). " - ".get_phrase('class')." : ".
											$this->crud_model->get_class_name($class_id);
		$page_data['class_id'] 	= $class_id;
		$this->load->view('backend/index', $page_data);
        $this->footer_layout();
	}
	
	function student_marksheet($class_id = '')
	{
		if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
		$this->layout();	
		$page_data['page_name']  = 'student_marksheet';
		$page_data['page_title'] 	= get_phrase('student_marksheet'). " - ".get_phrase('class')." : ".
											$this->crud_model->get_class_name($class_id);
		$page_data['class_id'] 	= $class_id;
		$this->load->view('backend/index', $page_data);
        $this->footer_layout();
	}
	
    function student($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('site', 'refresh');
        if ($param1 == 'create') {
            $data['religion']                   = "null";
            $data['blood_group']                   = "null";
            $data['phone']                   = "null";
            $data['transport_id']                   = 1;
            $data['dormitory_id']                   = 1;
            $data['dormitory_room_number']                   = 1;
            $data['name']                   = $this->input->post('name');
            $data['birthday']               = $this->input->post('birthday');
            $data['sex']                    = $this->input->post('sex');
            $data['address']                = $this->input->post('address');
            
            $data['email']                  = $this->input->post('email');
            $data['password']               = $this->input->post('password');
            $data['class_id']               = $this->input->post('class_id');
            $data['roll']                   = $this->input->post('roll');

            $data['stip_id']                = $this->input->post('stip_id');
            $data['board_reg']              = $this->input->post('board_reg');
            $data['board_roll']             = $this->input->post('board_roll');
            $data['prev_school']            = $this->input->post('prev_school');
            $data['prev_class']             = $this->input->post('prev_class');
            $data['prev_gpa']               = $this->input->post('prev_gpa');
            $data['thana']                  = $this->input->post('thana');
            $data['post_office']            = $this->input->post('post_office');
            $data['district']               = $this->input->post('district');
            $data['father_name']             = $this->input->post('father_name');
            $data['father_nid']             = $this->input->post('father_nid');
            $data['father_mobile']          = $this->input->post('father_mobile');
            $data['mother_name']             = $this->input->post('mother_name');
            $data['mother_nid']             = $this->input->post('mother_nid');
            $data['mother_mobile']          = $this->input->post('mother_mobile');
            
            $this->db->insert('student', $data);
            $student_id = $this->db->insert_id();
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/student_image/' . $student_id . '.jpg');
            //$this->email_model->account_opening_email('student', $data['email']); //SEND EMAIL ACCOUNT OPENING EMAIL
            redirect(base_url() . 'super_admin/student_information/' . $data['class_id'], 'refresh');
        }
        if ($param2 == 'do_update') {
            $data['religion']                   = "null";
            $data['blood_group']                   = "null";
             $data['phone']                   = "null";
             $data['transport_id']                   = 1;
             $data['dormitory_id']                   = 1;
             $data['dormitory_room_number']                   = 1;
            $data['name']        = $this->input->post('name');
            $data['birthday']    = $this->input->post('birthday');
            $data['sex']         = $this->input->post('sex');
            $data['address']     = $this->input->post('address');
           
            $data['email']       = $this->input->post('email');
            $data['class_id']    = $this->input->post('class_id');
            $data['roll']        = $this->input->post('roll');

            $data['stip_id']                = $this->input->post('stip_id');
            $data['board_reg']              = $this->input->post('board_reg');
            $data['board_roll']             = $this->input->post('board_roll');
            $data['prev_school']            = $this->input->post('prev_school');
            $data['prev_class']             = $this->input->post('prev_class');
            $data['prev_gpa']               = $this->input->post('prev_gpa');
            $data['thana']                  = $this->input->post('thana');
            $data['post_office']            = $this->input->post('post_office');
            $data['district']               = $this->input->post('district');
            $data['father_name']             = $this->input->post('father_name');
            $data['father_nid']             = $this->input->post('father_nid');
            $data['father_mobile']          = $this->input->post('father_mobile');
            $data['mother_name']             = $this->input->post('mother_name');
            $data['mother_nid']             = $this->input->post('mother_nid');
            $data['mother_mobile']          = $this->input->post('mother_mobile');
            
            
            $this->db->where('student_id', $param3);
            $this->db->update('student', $data);
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/student_image/' . $param3 . '.jpg');
            $this->crud_model->clear_cache();
            
            redirect(base_url() . 'super_admin/student_information/' . $param1, 'refresh');
        } 
		
        if ($param2 == 'delete') {
            $this->db->where('student_id', $param3);
            $this->db->delete('student');
            redirect(base_url() . 'super_admin/student_information/' . $param1, 'refresh');
        }
    }
     /****MANAGE PARENTS CLASSWISE*****/
    function parent($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('site', 'refresh');
        if ($param1 == 'create') {
            $data['name']        			= $this->input->post('name');
            $data['email']       			= $this->input->post('email');
            $data['password']    			= $this->input->post('password');
            $data['student_id']  			= $param2;
            $data['relation_with_student']  = $this->input->post('relation_with_student');
            $data['phone']       			= $this->input->post('phone');
            $data['address']     			= $this->input->post('address');
            $data['profession']  			= $this->input->post('profession');
            $this->db->insert('parent', $data);
            //$this->email_model->account_opening_email('parent', $data['email']); //SEND EMAIL ACCOUNT OPENING EMAIL
			
			 $class_id	=	$this->db->get_where('student', array('student_id'=>$data['student_id']))->row()->class_id;
            redirect(base_url() . 'super_admin/parent/' . $class_id , 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['name']        			= $this->input->post('name');
            $data['email']       			= $this->input->post('email');
			
			 if ($this->input->post('password') != "")
            		$data['password']    		=  $this->input->post('password');
            $data['relation_with_student']  = $this->input->post('relation_with_student');
            $data['phone']       			= $this->input->post('phone');
            $data['address']     			= $this->input->post('address');
            $data['profession']  			= $this->input->post('profession');
            
            $this->db->where('parent_id', $param2);
            $this->db->update('parent', $data);
            
            redirect(base_url() . 'super_admin/parent/' . $param3, 'refresh');
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('parent', array(
                'parent_id' => $param3
            ))->result_array();
        } 
        if ($param1 == 'delete') {
            $this->db->where('parent_id', $param2);
            $this->db->delete('parent');
            redirect(base_url() . 'super_admin/parent/' . $param3, 'refresh');
        }
        $page_data['class_id']   = $param1;
        $page_data['students']   = $this->db->get_where('student', array(
											'class_id' => $param1	))->result_array();
        $page_data['page_title'] 	= get_phrase('parent_information'). " - ".get_phrase('class')." : ".
											$this->crud_model->get_class_name($param1);
        $page_data['page_name']  = 'parent';
        $this->layout();
        $this->load->view('backend/index', $page_data);
        $this->footer_layout();
    }
	
    
    /****MANAGE TEACHERS*****/
    function teacher($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        if ($param1 == 'create') {
            $data['name']        = $this->input->post('name');
            $data['birthday']    = $this->input->post('birthday');
            $data['sex']         = $this->input->post('sex');
            $data['address']     = $this->input->post('address');
            $data['phone']       = $this->input->post('phone');
            $data['email']       = $this->input->post('email');
            $data['password']    = $this->input->post('password');

            $data['index_no']    = $this->input->post('index_no');
            $data['nid_no']      = $this->input->post('nid_no');
            $data['designation']    = $this->input->post('designation');
            $data['join_date']    = $this->input->post('join_date');
            $data['teach_subject']    = $this->input->post('teach_subject');
            $data['education']    = $this->input->post('education');
            $data['father_name']    = $this->input->post('father_name');
            $data['mother_name']    = $this->input->post('mother_name');
            $data['religion']        = "null";
            $data['blood_group']        = "null";
            $data['mpo_status']    = $this->input->post('mpo_status');


            $this->db->insert('teacher', $data);
            $teacher_id = $this->db->insert_id();
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/teacher_image/' . $teacher_id . '.jpg');
            //$this->email_model->account_opening_email('teacher', $data['email']); //SEND EMAIL ACCOUNT OPENING EMAIL
            redirect(base_url() . 'super_admin/teacher/', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['name']        = $this->input->post('name');
            $data['birthday']    = $this->input->post('birthday');
            $data['sex']         = $this->input->post('sex');
            $data['address']     = $this->input->post('address');
            $data['phone']       = $this->input->post('phone');
            $data['email']       = $this->input->post('email');
            $data['password']    = $this->input->post('password');

            $data['index_no']    = $this->input->post('index_no');
            $data['nid_no']      = $this->input->post('nid_no');
            $data['designation']    = $this->input->post('designation');
            $data['join_date']    = $this->input->post('join_date');
            $data['teach_subject']    = $this->input->post('teach_subject');
            $data['education']    = $this->input->post('education');
            $data['father_name']    = $this->input->post('father_name');
            $data['mother_name']    = $this->input->post('mother_name');
            $data['religion']        = "null";
            $data['blood_group']        = "null";
            $data['mpo_status']    = $this->input->post('mpo_status');
            //echo $param2;
            $this->db->where('teacher_id', $param2);
            $this->db->update('teacher', $data);
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/teacher_image/' . $param2 . '.jpg');
            redirect(base_url() . 'super_admin/teacher/', 'refresh');
        } else if ($param1 == 'personal_profile') {
            $page_data['personal_profile']   = true;
            $page_data['current_teacher_id'] = $param2;
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('teacher', array(
                'teacher_id' => $param2
            ))->result_array();
        }
        if ($param1 == 'delete') {
            $this->db->where('teacher_id', $param2);
            $this->db->delete('teacher');
            redirect(base_url() . 'super_admin/teacher/', 'refresh');
        }
        $page_data['teachers']   = $this->db->get('teacher')->result_array();
        $page_data['page_name']  = 'teacher';
        $page_data['page_title'] = get_phrase('manage_teacher');
        $this->layout();
        $this->load->view('backend/index', $page_data);
        $this->footer_layout();
    }
    function admission_list()
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        // Fetch data from the database
        $admission = $this->db->get('admission_form')->result_array();

        if (!empty($admission)) {
            $page_data['admission'] = $admission; // Pass data to view
        } else {
            $page_data['admission'] = []; // Default to an empty array
        }

        // Load necessary views
        $page_data['page_name'] = 'admission_list';
        $this->layout(); // Header layout
        $this->load->view('backend/admission', $page_data); // Main content view
        $this->footer_layout(); // Footer layout
    }


    function admission_delete($id) {
        $id  = $this->uri->segment(3);
        $this->db->where('id', $id);
        $this->db->delete('admission_form');
        $_SESSION['success'] = 'Deleted successfully.';
        redirect("super_admin/admission_list");
    }


//    function admission_list_export()
//    {
//        if ($this->session->userdata('admin_login') != 1)
//            redirect(base_url(), 'refresh');
//
//        // Fetch data from the 'admission_form' table
//        $admission_data = $this->db->get('admission_form')->result_array();
//
//        // Check if Excel export is requested
//        if ($this->input->get('export') == 'excel') {
//            $spreadsheet = new Spreadsheet();
//            $sheet = $spreadsheet->getActiveSheet();
//
//            // Set the headers for the Excel file based on the columns in your schema
//            $sheet->setCellValue('A1', 'ID');
//            $sheet->setCellValue('B1', 'Class');
//            $sheet->setCellValue('C1', 'Image');
//            $sheet->setCellValue('D1', 'Roll ID');
//            $sheet->setCellValue('E1', 'Student Name (Bangla)');
//            $sheet->setCellValue('F1', 'Student Name (English)');
//            $sheet->setCellValue('G1', 'Birth Date');
//            $sheet->setCellValue('H1', 'Online Birth Registration No');
//            $sheet->setCellValue('I1', 'Calculated Age');
//            $sheet->setCellValue('J1', 'Religion');
//            $sheet->setCellValue('K1', 'Mobile No');
//            $sheet->setCellValue('L1', 'Father Alive Status');
//            $sheet->setCellValue('M1', 'Father Name (Bangla)');
//            $sheet->setCellValue('N1', 'Father Name (English)');
//            $sheet->setCellValue('O1', 'Father NID');
//            $sheet->setCellValue('P1', 'Father Mobile No');
//            $sheet->setCellValue('Q1', 'Father Occupation');
//            $sheet->setCellValue('R1', 'Father Yearly Income');
//            $sheet->setCellValue('S1', 'Mother Alive Status');
//            $sheet->setCellValue('T1', 'Mother Name (Bangla)');
//            $sheet->setCellValue('U1', 'Mother Name (English)');
//            $sheet->setCellValue('V1', 'Mother NID');
//            $sheet->setCellValue('W1', 'Mother Mobile No');
//            $sheet->setCellValue('X1', 'Mother Occupation');
//            $sheet->setCellValue('Y1', 'Guardian Name');
//            $sheet->setCellValue('Z1', 'Guardian Name (English)');
//            $sheet->setCellValue('AA1', 'Guardian NID');
//            $sheet->setCellValue('AB1', 'Guardian Phone');
//            $sheet->setCellValue('AC1', 'Previous School Name');
//            $sheet->setCellValue('AD1', 'Previous School Registration No');
//            $sheet->setCellValue('AE1', 'Educational Year');
//            $sheet->setCellValue('AF1', 'Permanent Address Village');
//            $sheet->setCellValue('AG1', 'Permanent Address Post');
//            $sheet->setCellValue('AH1', 'Permanent Address Upojila');
//            $sheet->setCellValue('AI1', 'Permanent Address City');
//            $sheet->setCellValue('AJ1', 'Present Address Village');
//            $sheet->setCellValue('AK1', 'Present Address Post');
//            $sheet->setCellValue('AL1', 'Present Address Upojila');
//            $sheet->setCellValue('AM1', 'Present Address City');
//            $sheet->setCellValue('AN1', 'Created Date');
//
//            // Fill the data in the spreadsheet
//            $row = 2; // Start from row 2 to leave space for headers
//            foreach ($admission_data as $data) {
//                $sheet->setCellValue('A' . $row, $data['id']);
//                $sheet->setCellValue('B' . $row, $data['class']);
//                $sheet->setCellValue('C' . $row, $data['image']);
//                $sheet->setCellValue('D' . $row, $data['roll_id']);
//                $sheet->setCellValue('E' . $row, $data['student_name_bangla']);
//                $sheet->setCellValue('F' . $row, $data['student_name_english']);
//                $sheet->setCellValue('G' . $row, $data['birth_date']);
//                $sheet->setCellValue('H' . $row, $data['online_birth_registration_no']);
//                $sheet->setCellValue('I' . $row, $data['calculated_age_on_date']);
//                $sheet->setCellValue('J' . $row, $data['religion']);
//                $sheet->setCellValue('K' . $row, $data['mobile_no']);
//                $sheet->setCellValue('L' . $row, $data['father_alive_status']);
//                $sheet->setCellValue('M' . $row, $data['father_name_bangla']);
//                $sheet->setCellValue('N' . $row, $data['father_name_english']);
//                $sheet->setCellValue('O' . $row, $data['father_nid']);
//                $sheet->setCellValue('P' . $row, $data['father_mobile_no']);
//                $sheet->setCellValue('Q' . $row, $data['father_occupation']);
//                $sheet->setCellValue('R' . $row, $data['father_yealy_income']);
//                $sheet->setCellValue('S' . $row, $data['mother_alive_status']);
//                $sheet->setCellValue('T' . $row, $data['mother_name_bangla']);
//                $sheet->setCellValue('U' . $row, $data['mother_name_english']);
//                $sheet->setCellValue('V' . $row, $data['mother_nid']);
//                $sheet->setCellValue('W' . $row, $data['mother_mobile_no']);
//                $sheet->setCellValue('X' . $row, $data['mother_occupation']);
//                $sheet->setCellValue('Y' . $row, $data['guardian_name']);
//                $sheet->setCellValue('Z' . $row, $data['guardian_name_english']);
//                $sheet->setCellValue('AA' . $row, $data['guardian_nid']);
//                $sheet->setCellValue('AB' . $row, $data['guardian_phone']);
//                $sheet->setCellValue('AC' . $row, $data['previous_school_name']);
//                $sheet->setCellValue('AD' . $row, $data['previous_school_registration_no']);
//                $sheet->setCellValue('AE' . $row, $data['educational_year']);
//                $sheet->setCellValue('AF' . $row, $data['permanent_address_vilage']);
//                $sheet->setCellValue('AG' . $row, $data['permanent_address_post']);
//                $sheet->setCellValue('AH' . $row, $data['permanent_address_upozila']);
//                $sheet->setCellValue('AI' . $row, $data['permanent_address_city']);
//                $sheet->setCellValue('AJ' . $row, $data['present_address_vilage']);
//                $sheet->setCellValue('AK' . $row, $data['present_address_post']);
//                $sheet->setCellValue('AL' . $row, $data['present_address_upozila']);
//                $sheet->setCellValue('AM' . $row, $data['present_address_city']);
//                $sheet->setCellValue('AN' . $row, $data['created_date']);
//
//                $row++;
//            }
//
//            // Set the content type and filename for the export
//            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
//            header('Content-Disposition: attachment;filename="admission_list.xlsx"');
//            header('Cache-Control: max-age=0');
//
//            // Write the file to the output
//            $writer = new Xlsx($spreadsheet);
//            $writer->save('php://output');
//            exit; // Ensure no further output after the Excel file is generated
//        }
//
//
//
//    }

    function admission_list_export()
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');

        // Fetch data from the 'admission_form' table
        $admission_data = $this->db->get('admission_form')->result_array();

        // Check if Excel export is requested
        if ($this->input->get('export') == 'excel') {
            $spreadsheet = new Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();

            // Set the headers for the Excel file based on the columns in your schema
            $sheet->setCellValue('A1', 'ID');
            $sheet->setCellValue('B1', 'Class');
            $sheet->setCellValue('C1', 'Image');
            $sheet->setCellValue('D1', 'Roll ID');
            $sheet->setCellValue('E1', 'Educational Year');
            $sheet->setCellValue('F1', 'Student Name (Bangla)');
            $sheet->setCellValue('G1', 'Student Name (English)');
            $sheet->setCellValue('H1', 'Birth Date');
            $sheet->setCellValue('I1', 'Online Birth Registration No');
            $sheet->setCellValue('J1', 'Calculated Age');
            $sheet->setCellValue('K1', 'Religion');
            $sheet->setCellValue('L1', 'Mobile No');
            $sheet->setCellValue('M1', 'Father Alive Status');
            $sheet->setCellValue('N1', 'Father Name (Bangla)');
            $sheet->setCellValue('O1', 'Father Name (English)');
            $sheet->setCellValue('P1', 'Father NID');
            $sheet->setCellValue('Q1', 'Father Mobile No');
            $sheet->setCellValue('R1', 'Father Occupation');
            $sheet->setCellValue('S1', 'Father Yearly Income');
            $sheet->setCellValue('T1', 'Mother Alive Status');
            $sheet->setCellValue('U1', 'Mother Name (Bangla)');
            $sheet->setCellValue('V1', 'Mother Name (English)');
            $sheet->setCellValue('W1', 'Mother NID');
            $sheet->setCellValue('X1', 'Mother Mobile No');
            $sheet->setCellValue('Y1', 'Mother Occupation');
            $sheet->setCellValue('Z1', 'Guardian Name');
            $sheet->setCellValue('AA1', 'Guardian Name (English)');
            $sheet->setCellValue('AB1', 'Guardian NID');
            $sheet->setCellValue('AC1', 'Guardian Phone');
            $sheet->setCellValue('AD1', 'Previous School Name');
            $sheet->setCellValue('AE1', 'Previous School Registration No');
            $sheet->setCellValue('AF1', 'Educational Year');
            $sheet->setCellValue('AG1', 'Permanent Address Village');
            $sheet->setCellValue('AH1', 'Permanent Address Post');
            $sheet->setCellValue('AI1', 'Permanent Address Upojila');
            $sheet->setCellValue('AJ1', 'Permanent Address City');
            $sheet->setCellValue('AK1', 'Present Address Village');
            $sheet->setCellValue('AL1', 'Present Address Post');
            $sheet->setCellValue('AM1', 'Present Address Upojila');
            $sheet->setCellValue('AN1', 'Present Address City');
            $sheet->setCellValue('AO1', 'Created Date');

            // Fill the data in the spreadsheet
            $row = 2; // Start from row 2 to leave space for headers
            foreach ($admission_data as $data) {
                $sheet->setCellValue('A' . $row, $data['id']);
                $sheet->setCellValue('B' . $row, $data['class']);
                $sheet->setCellValue('C' . $row, $data['image']);
                $sheet->setCellValue('D' . $row, $data['roll_id']);
                $sheet->setCellValue('E' . $row, $data['recent_educational_year']);
                $sheet->setCellValue('F' . $row, $data['student_name_bangla']);
                $sheet->setCellValue('G' . $row, $data['student_name_english']);
                $sheet->setCellValue('H' . $row, $data['birth_date']);
                $sheet->setCellValue('I' . $row, $data['online_birth_registration_no']);
                $sheet->setCellValue('J' . $row, $data['calculated_age_on_date']);
                $sheet->setCellValue('K' . $row, $data['religion']);
                $sheet->setCellValue('L' . $row, $data['mobile_no']);
                $sheet->setCellValue('M' . $row, $data['father_alive_status']);
                $sheet->setCellValue('N' . $row, $data['father_name_bangla']);
                $sheet->setCellValue('O' . $row, $data['father_name_english']);
                $sheet->setCellValue('P' . $row, $data['father_nid']);
                $sheet->setCellValue('Q' . $row, $data['father_mobile_no']);
                $sheet->setCellValue('R' . $row, $data['father_occupation']);
                $sheet->setCellValue('S' . $row, $data['father_yealy_income']);
                $sheet->setCellValue('T' . $row, $data['mother_alive_status']);
                $sheet->setCellValue('U' . $row, $data['mother_name_bangla']);
                $sheet->setCellValue('V' . $row, $data['mother_name_english']);
                $sheet->setCellValue('W' . $row, $data['mother_nid']);
                $sheet->setCellValue('X' . $row, $data['mother_mobile_no']);
                $sheet->setCellValue('Y' . $row, $data['mother_occupation']);
                $sheet->setCellValue('Z' . $row, $data['guardian_name']);
                $sheet->setCellValue('AA' . $row, $data['guardian_name_english']);
                $sheet->setCellValue('AB' . $row, $data['guardian_nid']);
                $sheet->setCellValue('AC' . $row, $data['guardian_phone']);
                $sheet->setCellValue('AD' . $row, $data['previous_school_name']);
                $sheet->setCellValue('AE' . $row, $data['previous_school_registration_no']);
                $sheet->setCellValue('AF' . $row, $data['educational_year']);
                $sheet->setCellValue('AG' . $row, $data['permanent_address_vilage']);
                $sheet->setCellValue('AH' . $row, $data['permanent_address_post']);
                $sheet->setCellValue('AI' . $row, $data['permanent_address_upozila']);
                $sheet->setCellValue('AJ' . $row, $data['permanent_address_city']);
                $sheet->setCellValue('AK' . $row, $data['present_address_vilage']);
                $sheet->setCellValue('AL' . $row, $data['present_address_post']);
                $sheet->setCellValue('AM' . $row, $data['present_address_upozila']);
                $sheet->setCellValue('AN' . $row, $data['present_address_city']);
                $sheet->setCellValue('AO' . $row, $data['created_date']);

                $row++;
            }

            // Set the content type and filename for the export
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment;filename="admission_list.xlsx"');
            header('Cache-Control: max-age=0');

            // Write the file to the output
            $writer = new Xlsx($spreadsheet);
            $writer->save('php://output');
            exit; // Ensure no further output after the Excel file is generated
        }
    }



    /****MANAGE SUBJECTS*****/
    function subject($param1 = '', $param2 = '' , $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        if ($param1 == 'create') {
            $data['name']       = $this->input->post('name');
            $data['class_id']   = $this->input->post('class_id');
            $data['teacher_id'] = $this->input->post('teacher_id');
            $this->db->insert('subject', $data);
            redirect(base_url() . 'super_admin/subject/'.$data['class_id'], 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['name']       = $this->input->post('name');
            $data['class_id']   = $this->input->post('class_id');
            $data['teacher_id'] = $this->input->post('teacher_id');
            
            $this->db->where('subject_id', $param2);
            $this->db->update('subject', $data);
            redirect(base_url() . 'super_admin/subject/'.$data['class_id'], 'refresh');
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('subject', array(
                'subject_id' => $param2
            ))->result_array();
        }
        if ($param1 == 'delete') {
            $this->db->where('subject_id', $param2);
            $this->db->delete('subject');
            redirect(base_url() . 'super_admin/subject/'.$param3, 'refresh');
        }
		 $page_data['class_id']   = $param1;
        $page_data['subjects']   = $this->db->get_where('subject' , array('class_id' => $param1))->result_array();
        $page_data['page_name']  = 'subject';
        $page_data['page_title'] = get_phrase('manage_subject');
        $this->layout();
        $this->load->view('backend/index', $page_data);
        $this->footer_layout();
    }
    
    /****MANAGE CLASSES*****/
    function classes($param1 = '', $param2 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        if ($param1 == 'create') {
            $data['name']         = $this->input->post('name');
            $data['name_numeric'] = $this->input->post('name_numeric');
            $data['teacher_id']   = $this->input->post('teacher_id');
            $this->db->insert('class', $data);
            redirect(base_url() . 'super_admin/classes/', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['name']         = $this->input->post('name');
            $data['name_numeric'] = $this->input->post('name_numeric');
            $data['teacher_id']   = $this->input->post('teacher_id');
            
            $this->db->where('class_id', $param2);
            $this->db->update('class', $data);
            redirect(base_url() . 'super_admin/classes/', 'refresh');
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('class', array(
                'class_id' => $param2
            ))->result_array();
        }
        if ($param1 == 'delete') {
            $this->db->where('class_id', $param2);
            $this->db->delete('class');
            redirect(base_url() . 'super_admin/classes/', 'refresh');
        }
        $page_data['classes']    = $this->db->get('class')->result_array();
        $page_data['page_name']  = 'class';
        $page_data['page_title'] = get_phrase('manage_class');
        $this->layout();
        $this->load->view('backend/index', $page_data);
        $this->footer_layout();
    }
    
    /****MANAGE EXAMS*****/
    function exam($param1 = '', $param2 = '' , $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        if ($param1 == 'create') {
            $data['name']    = $this->input->post('name');
            $data['date']    = $this->input->post('date');
            $data['comment'] = $this->input->post('comment');
            $this->db->insert('exam', $data);
            redirect(base_url() . 'super_admin/exam/', 'refresh');
        }
        if ($param1 == 'edit' && $param2 == 'do_update') {
            $data['name']    = $this->input->post('name');
            $data['date']    = $this->input->post('date');
            $data['comment'] = $this->input->post('comment');
            
            $this->db->where('exam_id', $param3);
            $this->db->update('exam', $data);
            redirect(base_url() . 'super_admin/exam/', 'refresh');
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('exam', array(
                'exam_id' => $param2
            ))->result_array();
        }
        if ($param1 == 'delete') {
            $this->db->where('exam_id', $param2);
            $this->db->delete('exam');
            redirect(base_url() . 'super_admin/exam/', 'refresh');
        }
        $page_data['exams']      = $this->db->get('exam')->result_array();
        $page_data['page_name']  = 'exam';
        $page_data['page_title'] = get_phrase('manage_exam');
        $this->layout();
        $this->load->view('backend/index', $page_data);
        $this->footer_layout();
    }
    
    /****MANAGE EXAM MARKS*****/
    function marks($exam_id = '', $class_id = '', $subject_id = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        
        if ($this->input->post('operation') == 'selection') {
            $page_data['exam_id']    = $this->input->post('exam_id');
            $page_data['class_id']   = $this->input->post('class_id');
            $page_data['subject_id'] = $this->input->post('subject_id');
            
            if ($page_data['exam_id'] > 0 && $page_data['class_id'] > 0 && $page_data['subject_id'] > 0) {
                redirect(base_url() . 'super_admin/marks/' . $page_data['exam_id'] . '/' . $page_data['class_id'] . '/' . $page_data['subject_id'], 'refresh');
            } else {
                $this->session->set_flashdata('mark_message', 'Choose exam, class and subject');
                redirect(base_url() . 'super_admin/marks/', 'refresh');
            }
        }
        if ($this->input->post('operation') == 'update') {
            $data['mark_obtained'] = $this->input->post('mark_obtained');
            $data['attendance']    = $this->input->post('attendance');
            $data['comment']       = $this->input->post('comment');
            
            $this->db->where('mark_id', $this->input->post('mark_id'));
            $this->db->update('mark', $data);
            
            redirect(base_url() . 'super_admin/marks/' . $this->input->post('exam_id') . '/' . $this->input->post('class_id') . '/' . $this->input->post('subject_id'), 'refresh');
        }
        $page_data['exam_id']    = $exam_id;
        $page_data['class_id']   = $class_id;
        $page_data['subject_id'] = $subject_id;
        
        $page_data['page_info'] = 'Exam marks';
        
        $page_data['page_name']  = 'marks';
        $page_data['page_title'] = get_phrase('manage_exam_marks');
        $this->layout();
        $this->load->view('backend/index', $page_data);
        $this->footer_layout();
    }
    
    
    
    
    
    /****MANAGE GRADES*****/
    function grade($param1 = '', $param2 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        if ($param1 == 'create') {
            $data['name']        = $this->input->post('name');
            $data['grade_point'] = $this->input->post('grade_point');
            $data['mark_from']   = $this->input->post('mark_from');
            $data['mark_upto']   = $this->input->post('mark_upto');
            $data['comment']     = $this->input->post('comment');
            $this->db->insert('grade', $data);
            redirect(base_url() . 'super_admin/grade/', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['name']        = $this->input->post('name');
            $data['grade_point'] = $this->input->post('grade_point');
            $data['mark_from']   = $this->input->post('mark_from');
            $data['mark_upto']   = $this->input->post('mark_upto');
            $data['comment']     = $this->input->post('comment');
            
            $this->db->where('grade_id', $param2);
            $this->db->update('grade', $data);
            redirect(base_url() . 'super_admin/grade/', 'refresh');
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('grade', array(
                'grade_id' => $param2
            ))->result_array();
        }
        if ($param1 == 'delete') {
            $this->db->where('grade_id', $param2);
            $this->db->delete('grade');
            redirect(base_url() . 'super_admin/grade/', 'refresh');
        }
        $page_data['grades']     = $this->db->get('grade')->result_array();
        $page_data['page_name']  = 'grade';
        $page_data['page_title'] = get_phrase('manage_grade');
        $this->layout();
        $this->load->view('backend/index', $page_data);
        $this->footer_layout();
    }
    
    /**********MANAGING CLASS ROUTINE******************/
    function class_routine($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        if ($param1 == 'create') {
            $data['class_id']   = $this->input->post('class_id');
            $data['subject_id'] = $this->input->post('subject_id');
            $data['time_start'] = $this->input->post('time_start') + (12 * ($this->input->post('starting_ampm') - 1));
            $data['time_end']   = $this->input->post('time_end') + (12 * ($this->input->post('ending_ampm') - 1));
            $data['day']        = $this->input->post('day');
            $this->db->insert('class_routine', $data);
            redirect(base_url() . 'super_admin/class_routine/', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['class_id']   = $this->input->post('class_id');
            $data['subject_id'] = $this->input->post('subject_id');
            $data['time_start'] = $this->input->post('time_start') + (12 * ($this->input->post('starting_ampm') - 1));
            $data['time_end']   = $this->input->post('time_end') + (12 * ($this->input->post('ending_ampm') - 1));
            $data['day']        = $this->input->post('day');
            
            $this->db->where('class_routine_id', $param2);
            $this->db->update('class_routine', $data);
            redirect(base_url() . 'super_admin/class_routine/', 'refresh');
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('class_routine', array(
                'class_routine_id' => $param2
            ))->result_array();
        }
        if ($param1 == 'delete') {
            $this->db->where('class_routine_id', $param2);
            $this->db->delete('class_routine');
            redirect(base_url() . 'super_admin/class_routine/', 'refresh');
        }
        $page_data['page_name']  = 'class_routine';
        $page_data['page_title'] = get_phrase('manage_class_routine');
        $this->layout();
        $this->load->view('backend/index', $page_data);
        $this->footer_layout();
    }
	
	/****** DAILY ATTENDANCE *****************/
	function manage_attendance($date='',$month='',$year='',$class_id='')
	{
		if($this->session->userdata('admin_login')!=1)redirect('login' , 'refresh');
		
		if($_POST)
		{
			$verify_data	=	array(	'student_id' 		=> $this->input->post('student_id'),
										'date' 				=> $this->input->post('date'));
			$attendance = $this->db->get_where('attendance' , $verify_data)->row();
			$attendance_id		= $attendance->attendance_id;
			
			$this->db->where('attendance_id' , $attendance_id);
			$this->db->update('attendance' , array('status' => $this->input->post('status')));
			
			redirect(base_url() . 'super_admin/manage_attendance/'.$date.'/'.$month.'/'.$year.'/'.$class_id , 'refresh');
		}
		$page_data['date']			=	$date;
		$page_data['month']		=	$month;
		$page_data['year']			=	$year;
		$page_data['class_id']	=	$class_id;
		
		$page_data['page_name']		=	'manage_attendance';
		$page_data['page_title']		=	get_phrase('manage_daily_attendance');
        $this->layout();
		$this->load->view('backend/index', $page_data);
        $this->footer_layout();
	}
	function attendance_selector()
	{
		redirect(base_url() . 'super_admin/manage_attendance/'.$this->input->post('date').'/'.
					$this->input->post('month').'/'.
						$this->input->post('year').'/'.
							$this->input->post('class_id') , 'refresh');
	}
    /******MANAGE BILLING / INVOICES WITH STATUS*****/
    function invoice($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        
        if ($param1 == 'create') {
            $data['student_id']         = $this->input->post('student_id');
            $data['title']              = $this->input->post('title');
            $data['description']        = $this->input->post('description');
            $data['amount']             = $this->input->post('amount');
            $data['status']             = $this->input->post('status');
            $data['creation_timestamp'] = strtotime($this->input->post('date'));
            
            $this->db->insert('invoice', $data);
            redirect(base_url() . 'super_admin/invoice', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['student_id']         = $this->input->post('student_id');
            $data['title']              = $this->input->post('title');
            $data['description']        = $this->input->post('description');
            $data['amount']             = $this->input->post('amount');
            $data['status']             = $this->input->post('status');
            $data['creation_timestamp'] = strtotime($this->input->post('date'));
            
            $this->db->where('invoice_id', $param2);
            $this->db->update('invoice', $data);
            redirect(base_url() . 'super_admin/invoice', 'refresh');
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('invoice', array(
                'invoice_id' => $param2
            ))->result_array();
        }
        if ($param1 == 'delete') {
            $this->db->where('invoice_id', $param2);
            $this->db->delete('invoice');
            redirect(base_url() . 'super_admin/invoice', 'refresh');
        }
        $page_data['page_name']  = 'invoice';
        $page_data['page_title'] = get_phrase('manage_invoice/payment');
        $this->db->order_by('creation_timestamp', 'desc');
        $page_data['invoices'] = $this->db->get('invoice')->result_array();
        $this->layout();
        $this->load->view('backend/index', $page_data);
        $this->footer_layout();
    }
    /**********MANAGE LIBRARY / BOOKS********************/
    function book($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'create') {
            $data['name']        = $this->input->post('name');
            $data['description'] = $this->input->post('description');
            $data['price']       = $this->input->post('price');
            $data['author']      = $this->input->post('author');
            $data['class_id']    = $this->input->post('class_id');
            $data['status']      = $this->input->post('status');
            $this->db->insert('book', $data);
            redirect(base_url() . 'super_admin/book', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['name']        = $this->input->post('name');
            $data['description'] = $this->input->post('description');
            $data['price']       = $this->input->post('price');
            $data['author']      = $this->input->post('author');
            $data['class_id']    = $this->input->post('class_id');
            $data['status']      = $this->input->post('status');
            
            $this->db->where('book_id', $param2);
            $this->db->update('book', $data);
            redirect(base_url() . 'super_admin/book', 'refresh');
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('book', array(
                'book_id' => $param2
            ))->result_array();
        }
        if ($param1 == 'delete') {
            $this->db->where('book_id', $param2);
            $this->db->delete('book');
            redirect(base_url() . 'super_admin/book', 'refresh');
        }
        $page_data['books']      = $this->db->get('book')->result_array();
        $page_data['page_name']  = 'book';
        $page_data['page_title'] = get_phrase('manage_library_books');
        $this->layout();
        $this->load->view('backend/index', $page_data);
        $this->footer_layout();
        
    }
    /**********MANAGE TRANSPORT / VEHICLES / ROUTES********************/
    function transport($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'create') {
            $data['route_name']        = $this->input->post('route_name');
            $data['number_of_vehicle'] = $this->input->post('number_of_vehicle');
            $data['description']       = $this->input->post('description');
            $data['route_fare']        = $this->input->post('route_fare');
            $this->db->insert('transport', $data);
            redirect(base_url() . 'super_admin/transport', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['route_name']        = $this->input->post('route_name');
            $data['number_of_vehicle'] = $this->input->post('number_of_vehicle');
            $data['description']       = $this->input->post('description');
            $data['route_fare']        = $this->input->post('route_fare');
            
            $this->db->where('transport_id', $param2);
            $this->db->update('transport', $data);
            redirect(base_url() . 'super_admin/transport', 'refresh');
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('transport', array(
                'transport_id' => $param2
            ))->result_array();
        }
        if ($param1 == 'delete') {
            $this->db->where('transport_id', $param2);
            $this->db->delete('transport');
            redirect(base_url() . 'super_admin/transport', 'refresh');
        }
        $page_data['transports'] = $this->db->get('transport')->result_array();
        $page_data['page_name']  = 'transport';
        $page_data['page_title'] = get_phrase('manage_transport');
        $this->layout();
        $this->load->view('backend/index', $page_data);
        $this->footer_layout();
    }
    /**********MANAGE DORMITORY / HOSTELS / ROOMS ********************/
    function dormitory($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect('login', 'refresh');
        if ($param1 == 'create') {
            $data['name']           = $this->input->post('name');
            $data['number_of_room'] = $this->input->post('number_of_room');
            $data['description']    = $this->input->post('description');
            $this->db->insert('dormitory', $data);
            redirect(base_url() . 'super_admin/dormitory', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['name']           = $this->input->post('name');
            $data['number_of_room'] = $this->input->post('number_of_room');
            $data['description']    = $this->input->post('description');
            
            $this->db->where('dormitory_id', $param2);
            $this->db->update('dormitory', $data);
            redirect(base_url() . 'super_admin/dormitory', 'refresh');
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('dormitory', array(
                'dormitory_id' => $param2
            ))->result_array();
        }
        if ($param1 == 'delete') {
            $this->db->where('dormitory_id', $param2);
            $this->db->delete('dormitory');
            redirect(base_url() . 'super_admin/dormitory', 'refresh');
        }
        $page_data['dormitories'] = $this->db->get('dormitory')->result_array();
        $page_data['page_name']   = 'dormitory';
        $page_data['page_title']  = get_phrase('manage_dormitory');
        $this->layout();
        $this->load->view('backend/index', $page_data);
        $this->footer_layout();
        
    }
    
    /***MANAGE EVENT / NOTICEBOARD, WILL BE SEEN BY ALL ACCOUNTS DASHBOARD**/
    function noticeboard($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        
        if ($param1 == 'create') {
            $data['notice_title']     = $this->input->post('notice_title');
            $data['notice']           = $this->input->post('notice');
            $data['create_timestamp'] = strtotime($this->input->post('create_timestamp'));
            $this->db->insert('noticeboard', $data);
            redirect(base_url() . 'super_admin/event_calendar/', 'refresh');
        }
        if ($param1 == 'do_update') {
            $data['notice_title']     = $this->input->post('notice_title');
            $data['notice']           = $this->input->post('notice');
            $data['create_timestamp'] = strtotime($this->input->post('create_timestamp'));
            $this->db->where('notice_id', $param2);
            $this->db->update('noticeboard', $data);
            $this->session->set_flashdata('flash_message', get_phrase('notice_updated'));
            redirect(base_url() . 'super_admin/event_calendar/', 'refresh');
        } else if ($param1 == 'edit') {
            $page_data['edit_data'] = $this->db->get_where('noticeboard', array(
                'notice_id' => $param2
            ))->result_array();
        }
        if ($param1 == 'delete') {
            $this->db->where('notice_id', $param2);
            $this->db->delete('noticeboard');
            redirect(base_url() . 'super_admin/event_calendar/', 'refresh');
        }
        $page_data['page_name']  = 'noticeboard';
        $page_data['page_title'] = get_phrase('manage_noticeboard');
        $page_data['notices']    = $this->db->get('noticeboard')->result_array();
        $this->layout();
        $this->load->view('backend/index', $page_data);
        $this->footer_layout();
    }
    
    /*****SITE/SYSTEM SETTINGS*********/
    function system_settings($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url() . 'login', 'refresh');
        
        if ($param1 == 'do_update') {
			 
			 $data['description'] = $this->input->post('system_name');
			 $this->db->where('type' , 'system_name');
			 $this->db->update('settings' , $data);
			 
			 $data['description'] = $this->input->post('system_title');
			 $this->db->where('type' , 'system_title');
			 $this->db->update('settings' , $data);
			 
			 $data['description'] = $this->input->post('address');
			 $this->db->where('type' , 'address');
			 $this->db->update('settings' , $data);
			 
			 $data['description'] = $this->input->post('phone');
			 $this->db->where('type' , 'phone');
			 $this->db->update('settings' , $data);
			 
			 $data['description'] = $this->input->post('paypal_email');
			 $this->db->where('type' , 'paypal_email');
			 $this->db->update('settings' , $data);
			 
			 $data['description'] = $this->input->post('currency');
			 $this->db->where('type' , 'currency');
			 $this->db->update('settings' , $data);
			 
			 $data['description'] = $this->input->post('system_email');
			 $this->db->where('type' , 'system_email');
			 $this->db->update('settings' , $data);
			 
			 $data['description'] = $this->input->post('buyer');
			 $this->db->where('type' , 'buyer');
			 $this->db->update('settings' , $data);
			 
			 $data['description'] = $this->input->post('system_name');
			 $this->db->where('type' , 'system_name');
			 $this->db->update('settings' , $data);
			 
			 $data['description'] = $this->input->post('purchase_code');
			 $this->db->where('type' , 'purchase_code');
			 $this->db->update('settings' , $data);
			 
			 $data['description'] = $this->input->post('language');
			 $this->db->where('type' , 'language');
			 $this->db->update('settings' , $data);
			 
			 $data['description'] = $this->input->post('text_align');
			 $this->db->where('type' , 'text_align');
			 $this->db->update('settings' , $data);
			 
            redirect(base_url() . 'super_admin/system_settings/', 'refresh');
        }
        if ($param1 == 'upload_logo') {
            move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/logo.png');
            $this->session->set_flashdata('flash_message', get_phrase('settings_updated'));
            redirect(base_url() . 'super_admin/system_settings/', 'refresh');
        }
        $page_data['page_name']  = 'system_settings';
        $page_data['page_title'] = get_phrase('system_settings');
        $page_data['settings']   = $this->db->get('settings')->result_array();
        $this->layout();
        $this->load->view('backend/index', $page_data);
        $this->footer_layout();
    }



    /*****LANGUAGE SETTINGS*********/
    function manage_language($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'login', 'refresh');
		
		if ($param1 == 'edit_phrase') {
			$page_data['edit_profile'] 	= $param2;	
		}
		if ($param1 == 'update_phrase') {
			$language	=	$param2;
			$total_phrase	=	$this->input->post('total_phrase');
			for($i = 1 ; $i < $total_phrase ; $i++)
			{
				//$data[$language]	=	$this->input->post('phrase').$i;
				$this->db->where('phrase_id' , $i);
				$this->db->update('language' , array($language => $this->input->post('phrase'.$i)));
			}
			redirect(base_url() . 'super_admin/manage_language/edit_phrase/'.$language, 'refresh');
		}
		if ($param1 == 'do_update') {
			$language        = $this->input->post('language');
			$data[$language] = $this->input->post('phrase');
			$this->db->where('phrase_id', $param2);
			$this->db->update('language', $data);
			$this->session->set_flashdata('flash_message', get_phrase('settings_updated'));
			redirect(base_url() . 'super_admin/manage_language/', 'refresh');
		}
		if ($param1 == 'add_phrase') {
			$data['phrase'] = $this->input->post('phrase');
			$this->db->insert('language', $data);
			$this->session->set_flashdata('flash_message', get_phrase('settings_updated'));
			redirect(base_url() . 'super_admin/manage_language/', 'refresh');
		}
		if ($param1 == 'add_language') {
			$language = $this->input->post('language');
			$this->load->dbforge();
			$fields = array(
				$language => array(
					'type' => 'LONGTEXT'
				)
			);
			$this->dbforge->add_column('language', $fields);
			
			$this->session->set_flashdata('flash_message', get_phrase('settings_updated'));
			redirect(base_url() . 'super_admin/manage_language/', 'refresh');
		}
		if ($param1 == 'delete_language') {
			$language = $param2;
			$this->load->dbforge();
			$this->dbforge->drop_column('language', $language);
			$this->session->set_flashdata('flash_message', get_phrase('settings_updated'));
			
			redirect(base_url() . 'super_admin/manage_language/', 'refresh');
		}
		$page_data['page_name']        = 'manage_language';
		$page_data['page_title']       = get_phrase('manage_language');
		//$page_data['language_phrases'] = $this->db->get('language')->result_array();
        $this->layout();
		$this->load->view('backend/index', $page_data);	
        $this->footer_layout();
    }
    
    /*****BACKUP / RESTORE / DELETE DATA PAGE**********/
    function backup_restore($operation = '', $type = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url(), 'refresh');
        
        if ($operation == 'create') {
            $this->crud_model->create_backup($type);
        }
        if ($operation == 'restore') {
            $this->crud_model->restore_backup();
            $this->session->set_flashdata('backup_message', 'Backup Restored');
            redirect(base_url() . 'super_admin/backup_restore/', 'refresh');
        }
        if ($operation == 'delete') {
            $this->crud_model->truncate($type);
            $this->session->set_flashdata('backup_message', 'Data removed');
            redirect(base_url() . 'super_admin/backup_restore/', 'refresh');
        }
        
        $page_data['page_info']  = 'Create backup / restore from backup';
        $page_data['page_name']  = 'backup_restore';
        $page_data['page_title'] = get_phrase('manage_backup_restore');
        $this->layout();
        $this->load->view('backend/index', $page_data);
        $this->footer_layout();
    }
    
    /******MANAGE OWN PROFILE AND CHANGE PASSWORD***/
    function manage_profile($param1 = '', $param2 = '', $param3 = '')
    {
        if ($this->session->userdata('admin_login') != 1)
            redirect(base_url() . 'login', 'refresh');
        if ($param1 == 'update_profile_info') {
            $data['name']  = $this->input->post('name');
            $data['email'] = $this->input->post('email');
            
            $this->db->where('admin_id', $this->session->userdata('admin_id'));
            $this->db->update('admin', $data);
            $this->session->set_flashdata('flash_message', get_phrase('account_updated'));
            redirect(base_url() . 'super_admin/manage_profile/', 'refresh');
        }
        if ($param1 == 'change_password') {
            $data['password']             = $this->input->post('password');
            $data['new_password']         = $this->input->post('new_password');
            $data['confirm_new_password'] = $this->input->post('confirm_new_password');
            
            $current_password = $this->db->get_where('admin', array(
                'admin_id' => $this->session->userdata('admin_id')
            ))->row()->password;
            if ($current_password == $data['password'] && $data['new_password'] == $data['confirm_new_password']) {
                $this->db->where('admin_id', $this->session->userdata('admin_id'));
                $this->db->update('admin', array(
                    'password' => $data['new_password']
                ));
                $this->session->set_flashdata('flash_message', get_phrase('password_updated'));
            } else {
                $this->session->set_flashdata('flash_message', get_phrase('password_mismatch'));
            }
            redirect(base_url() . 'super_admin/manage_profile/', 'refresh');
        }
        $page_data['page_name']  = 'manage_profile';
        $page_data['page_title'] = get_phrase('manage_profile');
        $page_data['edit_data']  = $this->db->get_where('admin', array(
            'admin_id' => $this->session->userdata('admin_id')
        ))->result_array();
        $this->layout();
        $this->load->view('backend/index', $page_data);
        $this->footer_layout();
    }
    
}
