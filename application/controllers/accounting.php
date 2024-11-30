<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class Accounting extends CI_Controller
{
    
    
    function __construct()
    {
        parent::__construct();
		$this->load->database();
        /*cache control*/
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    }
    
    /***default functin, redirects to login page if no admin logged in yet***/
    public function index()
    {
       if ($this->session->userdata('admin_login') != 1)
            redirect(base_url() . 'site', 'refresh');
        if ($this->session->userdata('admin_login') == 1)
            redirect(base_url() . 'accounting/dashboard', 'refresh');
    }

    public function nnemodels(){

       $this->load->model("notice_model","nm");
        $this->load->model("news_model","news");
        $this->load->model("event_model","em");
        $this->load->model("site_links_model","site_links");
            
    }

     public function layout(){

        $this->load->view('super_admin/includes/header_links');
        $this->load->view('super_admin/includes/main_menu');
        $this->load->view('super_admin/includes/menu_top_logo');
        $this->load->view('super_admin/includes/top_bar_student');
            
    }
     public function footer_layout(){

        $this->load->view('super_admin/includes/footer');
        //$this->load->view('super_admin/includes/hidden_sidebar');
        $this->load->view('super_admin/includes/settings');
        $this->load->view('super_admin/includes/footer_js');
            
    }
    
    /***ADMIN DASHBOARD***/
    function dashboard()
    {
       $this->layout();
       $this->load->view('accounting/dashboard');
       //echo "accounting dashboard";

        $this->footer_layout();
    }

    /*Main  Account Function*/

     function add_account()
    {
       $this->load->model("accounting_model","am");
       $this->layout();
       $this->load->view('accounting/add_account');
       //echo "accounting dashboard";

        $this->footer_layout();
    }

    function creat_account()
    {
       $this->load->model("accounting_model","am");
       $this->am->insert_account();
       $this->layout();
       $this->load->view('accounting/add_account');
       //echo "accounting dashboard";

        $this->footer_layout();
    }

     function edit_account()
    {
       $this->load->model("accounting_model","am");
       $this->layout();
       $this->load->view('accounting/edit_account');
       //echo "accounting dashboard";

        $this->footer_layout();
    }


    function update_account()
    {
       $this->load->model("accounting_model","am");
       $this->am->update_account();
       $this->layout();
       $this->load->view('accounting/edit_account');
       //echo "accounting dashboard";

        $this->footer_layout();
    }

      function delete_account()
    {
       $this->load->model("accounting_model","am");
       $this->am->delete_account();
      
    }

     /*End of Main  Account Function*/


      /*Main  Account Function*/

     function add_chart_account()
    {
       $this->load->model("accounting_model","am");
       $this->layout();
       $this->load->view('accounting/add_chart_account');
       //echo "accounting dashboard";

        $this->footer_layout();
    }

    function creat_chart_account()
    {
       $this->load->model("accounting_model","am");
       $this->am->insert_chart_account();
       $this->layout();
       $this->load->view('accounting/add_chart_account');
       //echo "accounting dashboard";

        $this->footer_layout();
    }

     function edit_chart_account()
    {
       $this->load->model("accounting_model","am");
       $this->layout();
       $this->load->view('accounting/edit_chart_account');
       //echo "accounting dashboard";

        $this->footer_layout();
    }


    function update_chart_account()
    {
       $this->load->model("accounting_model","am");
       $this->am->update_chart_account();
       $this->layout();
       $this->load->view('accounting/edit_chart_account');
       //echo "accounting dashboard";

        $this->footer_layout();
    }

      function delete_chart_account()
    {
       $this->load->model("accounting_model","am");
       $this->am->delete_chart_account();
      
    }

     /*End of Main  Account Function*/


      /*Main  Payment Method Function*/

     function add_payment_method()
    {
       $this->load->model("accounting_model","am");
       $this->layout();
       $this->load->view('accounting/add_payment_method');
       //echo "accounting dashboard";

        $this->footer_layout();
    }

    function creat_payment_method()
    {
       $this->load->model("accounting_model","am");
       $this->am->insert_payment_method();
       $this->layout();
       $this->load->view('accounting/add_payment_method');
       //echo "accounting dashboard";

        $this->footer_layout();
    }

     function edit_payment_method()
    {
       $this->load->model("accounting_model","am");
       $this->layout();
       $this->load->view('accounting/edit_payment_method');
       //echo "accounting dashboard";

        $this->footer_layout();
    }


    function update_payment_method()
    {
       $this->load->model("accounting_model","am");
       $this->am->update_payment_method();
       $this->layout();
       $this->load->view('accounting/edit_payment_method');
       //echo "accounting dashboard";

        $this->footer_layout();
    }

      function delete_payment_method()
    {
       $this->load->model("accounting_model","am");
       $this->am->delete_payment_method();
      
    }

     /*End of Main  Payment Method Function*/


      /*Main  Payment Method Function*/

     function add_income()
    {
       $this->load->model("accounting_model","am");
       $this->layout();
       $this->load->view('accounting/add_income');
       //echo "accounting dashboard";

        $this->footer_layout();
    }

    function creat_income()
    {
       $this->load->model("accounting_model","am");
       $this->am->insert_income();
       $this->layout();
       $this->load->view('accounting/add_income');
       //echo "accounting dashboard";

        $this->footer_layout();
    }

     function edit_income()
    {
       $this->load->model("accounting_model","am");
       $this->layout();
       $this->load->view('accounting/edit_income');
       //echo "accounting dashboard";

        $this->footer_layout();
    }


    function update_income()
    {
       $this->load->model("accounting_model","am");
       $this->am->update_income();
       $this->layout();
       $this->load->view('accounting/edit_income');
       //echo "accounting dashboard";

        $this->footer_layout();
    }

      function delete_income()
    {
       $this->load->model("accounting_model","am");
       $this->am->delete_income();
      
    }

     /*End of Income Function*/

     /*Main  Expense Function*/

     function add_expense()
    {
       $this->load->model("accounting_model","am");
       $this->layout();
       $this->load->view('accounting/add_expense');
       //echo "accounting dashboard";

        $this->footer_layout();
    }

    function creat_expense()
    {
       $this->load->model("accounting_model","am");
       $this->am->insert_expense();
       $this->layout();
       $this->load->view('accounting/add_expense');
       //echo "accounting dashboard";

        $this->footer_layout();
    }

     function edit_expense()
    {
       $this->load->model("accounting_model","am");
       $this->layout();
       $this->load->view('accounting/edit_expense');
       //echo "accounting dashboard";

        $this->footer_layout();
    }


    function update_expense()
    {
       $this->load->model("accounting_model","am");
       $this->am->update_expense();
       $this->layout();
       $this->load->view('accounting/edit_expense');
       //echo "accounting dashboard";

        $this->footer_layout();
    }

      function delete_expense()
    {
       $this->load->model("accounting_model","am");
       $this->am->delete_expense();
      
    }

     /*End of Income Function*/


     /*Reporting*/
      function income_expense()
    {
       $this->load->model("accounting_model","am");
       $this->layout();
       $this->load->view('accounting/income_expense');
       //echo "accounting dashboard";

        $this->footer_layout();
    }

      function income_expense_search()
    {
       
      
       $this->load->model("accounting_model","am");
       
       $this->layout();
       $this->load->view('accounting/income_expense_search');
       //echo "accounting dashboard";

        $this->footer_layout();
    }

    function income_report()
    {
       $this->load->model("accounting_model","am");
       $this->layout();
       $this->load->view('accounting/income_report');
       //echo "accounting dashboard";

        $this->footer_layout();
    }

      function income_report_search()
    {
       
      
       $this->load->model("accounting_model","am");
       
       $this->layout();
       $this->load->view('accounting/income_report_search');
       //echo "accounting dashboard";

        $this->footer_layout();
    }


    function expense_report()
    {
       $this->load->model("accounting_model","am");
       $this->layout();
       $this->load->view('accounting/expense_report');
       //echo "accounting dashboard";

        $this->footer_layout();
    }

      function expense_report_search()
    {
       
      
       $this->load->model("accounting_model","am");
       
       $this->layout();
       $this->load->view('accounting/expense_report_search');
       //echo "accounting dashboard";

        $this->footer_layout();
    }

    function balance_check()
    {
       
      
       $this->load->model("accounting_model","am");
       
       $this->layout();
       $this->load->view('accounting/balance_check');
       //echo "accounting dashboard";

        $this->footer_layout();
    }

     function balance_check_search()
    {
       
      
       $this->load->model("accounting_model","am");
       
       $this->layout();
       $this->load->view('accounting/balance_check_search');
       //echo "accounting dashboard";

        $this->footer_layout();
    }


     /*End of Reporting*/
    
    
    
}
