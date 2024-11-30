<?php 
class Accounting_model  extends CI_Model{

	function insert_account(){
				$this->load->library("form_validation");
				$this->form_validation->set_rules("ac_name","Account Name","required|xss_clean");
				$this->form_validation->set_rules("ac_balance","Starting Balance","required|xss_clean");

				//$this->form_validation->set_rules("position","Position","required|xss_clean");
				$this->form_validation->set_rules("ac_note","Account Note.","xss_clean");

				if ($this->form_validation->run() == FALSE)
				{
					redirect("accounting/add_account/error");
				}
				else{
				

		//insert data to database

		$data = array(

				'ac_name' 						=>$this->input->post('ac_name'),
				'starting_balance'				=>$this->input->post('ac_balance'),
				'current_balance' 				=>$this->input->post('ac_balance'),
				'ac_note' 						=>$this->input->post('ac_note'),
				'created_date' 					=>date('Y-m-d H:i:s')
				


			);
		//print_r($data);
		$this->db->insert('accounting_account', $data);
		echo "Insert Success";
		//$this->load->view('admin/notice',$data);
		redirect("accounting/add_account/");
						}		
	}

	function getData(){
		$query = $this->db->get("accounting_account");
		return $query->result();
	}

	function edit_account(){
		$aa_id=$this->uri->segment(3);
        $this->db->where('aa_id',$aa_id);
        $query= $this->db->get("accounting_account");
              
		return $query->result();
	}

	


	function update_account($aa_id){
		$aa_id=$this->input->post('aa_id');
		
		$this->load->library("form_validation");
				$this->form_validation->set_rules("ac_name","Account Name","required|xss_clean");
				$this->form_validation->set_rules("ac_balance","Starting Balance","required|xss_clean");
				$this->form_validation->set_rules("ac_note","Account Note.","xss_clean");
				

				if ($this->form_validation->run() == FALSE)
				{
					redirect("accounting/edit_account/error");
				}
				else{
		//print_r($file_data);
		//insert data to database

	 $data_image = array(

				'ac_name' 						=>$this->input->post('ac_name'),
				'starting_balance'				=>$this->input->post('ac_balance'),
				'ac_note' 						=>$this->input->post('ac_note'),
				'update_date' 					=>date('Y-m-d H:i:s')
			
			);

	 	$this->db->where('aa_id',$aa_id);
		$this->db->update('accounting_account', $data_image);
		echo "<script>swal({   title: 'Auto close alert!',   text: 'I will close in 2 seconds.',   timer: 2000,   showConfirmButton: false });";
		redirect("accounting/add_account/success");

		}

	
	}

	 function delete_account(){ 
		//delete data to database
			
		$aa_id = $this->uri->segment(3);
	    $this->db->where('aa_id',$aa_id);
	   	$this->db->delete('accounting_account');
        
		echo "Delete Success";
		redirect("accounting/add_account/del_success");
    }

    /*Chart of accounts Function*/

    function insert_chart_account(){
				$this->load->library("form_validation");
				$this->form_validation->set_rules("ca_category","Account Name","required|xss_clean");
				$this->form_validation->set_rules("ca_type","Account Type","required|xss_clean");

				if ($this->form_validation->run() == FALSE)
				{
					redirect("accounting/add_chart_account/error");
				}
				else{
				

		//insert data to database

		$data = array(

				'ca_category' 						=>$this->input->post('ca_category'),
				'ca_type'							=>$this->input->post('ca_type'),
				
				'created_date' 					=>date('Y-m-d H:i:s')
				


			);
		//print_r($data);
		$this->db->insert('chart_accounts', $data);
		echo "Insert Success";
		//$this->load->view('admin/notice',$data);
		redirect("accounting/add_chart_account/success");
						}		
	}

	function get_chart_account(){
		$query = $this->db->get("chart_accounts");
		return $query->result();
	}

	function edit_chart_account(){
		$ca_id=$this->uri->segment(3);
        $this->db->where('ca_id',$ca_id);
        $query= $this->db->get("chart_accounts");
              
		return $query->result();
	}

	


	function update_chart_account($ca_id){
		$ca_id=$this->input->post('ca_id');
		
		$this->load->library("form_validation");
				$this->form_validation->set_rules("ca_category","Account Name","required|xss_clean");
				$this->form_validation->set_rules("ca_type","Starting Balance","required|xss_clean");
				
				

				if ($this->form_validation->run() == FALSE)
				{
					redirect("accounting/edit_chart_account/error");
				}
				else{
		//print_r($file_data);
		//insert data to database

	 $data_image = array(

				'ca_category' 						=>$this->input->post('ca_category'),
				'ca_type'							=>$this->input->post('ca_type'),
				
				'update_date' 						=>date('Y-m-d H:i:s')
			
			);

	 	$this->db->where('ca_id',$ca_id);
		$this->db->update('chart_accounts', $data_image);
		echo "<script>swal({   title: 'Auto close alert!',   text: 'I will close in 2 seconds.',   timer: 2000,   showConfirmButton: false });";
		redirect("accounting/add_chart_account/success");

		}

	
	}

	 function delete_chart_account(){ 
		//delete data to database
			
		$ca_id = $this->uri->segment(3);
	    $this->db->where('ca_id',$ca_id);
	   	$this->db->delete('chart_accounts');
        
		echo "Delete Success";
		redirect("accounting/add_chart_account/del_success");
    }

    /*Chart of accounts Function*/


    /*Payment Method Function*/

    function insert_payment_method(){
				$this->load->library("form_validation");
				$this->form_validation->set_rules("payment_method","Payment Method Name","required|xss_clean");
				

				if ($this->form_validation->run() == FALSE)
				{
					redirect("accounting/add_payment_method/error");
				}
				else{
				

		//insert data to database

		$data = array(

				'payment_method' 						=>$this->input->post('payment_method'),
				'created_date' 							=>date('Y-m-d H:i:s')
						);
		//print_r($data);
		$this->db->insert('payment_methods', $data);
		echo "Insert Success";
		//$this->load->view('admin/notice',$data);
		redirect("accounting/add_payment_method/success");
						}		
	}

	function get_payment_method(){
		$query = $this->db->get("payment_methods");
		return $query->result();
	}

	function edit_payment_method(){
		$pm_id=$this->uri->segment(3);
        $this->db->where('pm_id',$pm_id);
        $query= $this->db->get("payment_methods");
              
		return $query->result();
	}

	


	function update_payment_method($pm_id){
		$pm_id=$this->input->post('pm_id');
		
		$this->load->library("form_validation");
				$this->form_validation->set_rules("payment_method","Payment Method  Name","required|xss_clean");
				
				if ($this->form_validation->run() == FALSE)
				{
					redirect("accounting/edit_payment_method/error");
				}
				else{
		//print_r($file_data);
		//insert data to database

	 $data_image = array(

				'payment_method' 						=>$this->input->post('payment_method'),
				'update_date' 							=>date('Y-m-d H:i:s')
			
			);

	 	$this->db->where('pm_id',$pm_id);
		$this->db->update('payment_methods', $data_image);
		echo "<script>swal({   title: 'Auto close alert!',   text: 'I will close in 2 seconds.',   timer: 2000,   showConfirmButton: false });";
		redirect("accounting/add_payment_method/success");

		}

	
	}

	 function delete_payment_method(){ 
		//delete data to database
			
		$pm_id = $this->uri->segment(3);
	    $this->db->where('pm_id',$pm_id);
	   	$this->db->delete('payment_methods');
        
		echo "Delete Success";
		redirect("accounting/add_payment_method/del_success");
    }

    /*Payment Method Function*/


    /*Income Function*/

    function insert_income(){
				$this->load->library("form_validation");
				$this->form_validation->set_rules("ac_name","Account Name","required|xss_clean");
				$this->form_validation->set_rules("income_date","Income Date","required|xss_clean");
				$this->form_validation->set_rules("income_type","Income Type","required|xss_clean");
				$this->form_validation->set_rules("income_amount","Income Amount","required|xss_clean");
				$this->form_validation->set_rules("payment_method","Payment Method Name","required|xss_clean");
				$this->form_validation->set_rules("income_ref","Income Referance","xss_clean");
				$this->form_validation->set_rules("income_note","Income Note","xss_clean");


				

				if ($this->form_validation->run() == FALSE)
				{
					redirect("accounting/add_income/error");
				}
				else{
				

		//insert data to database

		$data = array(

				'ac_name' 								=>$this->input->post('ac_name'),
				'income_date' 							=>$this->input->post('income_date'),
				'income_type' 							=>$this->input->post('income_type'),
				'income_amount' 						=>$this->input->post('income_amount'),
				'payment_method' 						=>$this->input->post('payment_method'),
				'income_ref' 							=>$this->input->post('income_ref'),
				'income_note' 							=>$this->input->post('income_note'),
				'created_date' 							=>date('Y-m-d H:i:s')
						);
		//print_r($data);
		$this->db->insert('accounting_income', $data);
		echo "Insert Success";
		//$this->load->view('admin/notice',$data);
		redirect("accounting/add_income/success");
						}		
	}

	function get_account(){
		$query = $this->db->get("accounting_account");
		return $query->result();
	}

	function get_income_type(){
		$this->db->where('ca_type','Income');
		$query = $this->db->get("chart_accounts");
		return $query->result();
	}


	function get_income(){
		$query = $this->db->get("accounting_income");
		return $query->result();
	}

	function edit_income(){
		$ai_id=$this->uri->segment(3);
        $this->db->where('ai_id',$ai_id);
        $query= $this->db->get("accounting_income");
              
		return $query->result();
	}

	


	function update_income($ai_id){
		$ai_id=$this->input->post('ai_id');
		
		$this->load->library("form_validation");
				$this->form_validation->set_rules("ac_name","Account Name","required|xss_clean");
				$this->form_validation->set_rules("income_date","Income Date","required|xss_clean");
				$this->form_validation->set_rules("income_type","Income Type","required|xss_clean");
				$this->form_validation->set_rules("income_amount","Income Amount","required|xss_clean");
				$this->form_validation->set_rules("payment_method","Payment Method Name","required|xss_clean");
				$this->form_validation->set_rules("income_ref","Income Referance","xss_clean");
				$this->form_validation->set_rules("income_note","Income Note","xss_clean");
				
				if ($this->form_validation->run() == FALSE)
				{
					redirect("accounting/edit_income/error");
				}
				else{
		//print_r($file_data);
		//insert data to database

	 $data_image = array(

				'ac_name' 								=>$this->input->post('ac_name'),
				'income_date' 							=>$this->input->post('income_date'),
				'income_type' 							=>$this->input->post('income_type'),
				'income_amount' 						=>$this->input->post('income_amount'),
				'payment_method' 						=>$this->input->post('payment_method'),
				'income_ref' 							=>$this->input->post('income_ref'),
				'income_note' 							=>$this->input->post('income_note'),
				'update_date' 							=>date('Y-m-d H:i:s')
			
			);

	 	$this->db->where('ai_id',$ai_id);
		$this->db->update('accounting_income', $data_image);
		echo "<script>swal({   title: 'Auto close alert!',   text: 'I will close in 2 seconds.',   timer: 2000,   showConfirmButton: false });";
		redirect("accounting/add_income/success");

		}

	
	}

	 function delete_income(){ 
		//delete data to database
			
		$ai_id = $this->uri->segment(3);
	    $this->db->where('ai_id',$ai_id);
	   	$this->db->delete('accounting_income');
        
		echo "Delete Success";
		redirect("accounting/add_income/del_success");
    }

    /*End of Income Function*/

     /*Expense Function*/

    function insert_expense(){
				$this->load->library("form_validation");
				$this->form_validation->set_rules("ac_name","Account Name","required|xss_clean");
				$this->form_validation->set_rules("expense_date","Income Date","required|xss_clean");
				$this->form_validation->set_rules("expense_type","expense Type","required|xss_clean");
				$this->form_validation->set_rules("expense_amount","expense Amount","required|xss_clean");
				$this->form_validation->set_rules("payment_method","Payment Method Name","required|xss_clean");
				$this->form_validation->set_rules("expense_ref","expense Referance","xss_clean");
				$this->form_validation->set_rules("expense_note","expense Note","xss_clean");


				

				if ($this->form_validation->run() == FALSE)
				{
					redirect("accounting/add_expense/error");
				}
				else{
				

		//insert data to database

		$data = array(

				'ac_name' 								=>$this->input->post('ac_name'),
				'expense_date' 							=>$this->input->post('expense_date'),
				'expense_type' 							=>$this->input->post('expense_type'),
				'expense_amount' 						=>$this->input->post('expense_amount'),
				'payment_method' 						=>$this->input->post('payment_method'),
				'expense_ref' 							=>$this->input->post('expense_ref'),
				'expense_note' 							=>$this->input->post('expense_note'),
				'created_date' 							=>date('Y-m-d H:i:s')
						);
		//print_r($data);
		$this->db->insert('accounting_expense', $data);
		echo "Insert Success";
		//$this->load->view('admin/notice',$data);
		redirect("accounting/add_expense/success");
						}		
	}

	

	function get_expense_type(){
		$this->db->where('ca_type','expense');
		$query = $this->db->get("chart_accounts");
		return $query->result();
	}


	function get_expense(){
		$query = $this->db->get("accounting_expense");
		return $query->result();
	}

	function edit_expense(){
		$ae_id=$this->uri->segment(3);
        $this->db->where('ae_id',$ae_id);
        $query= $this->db->get("accounting_expense");
              
		return $query->result();
	}

	


	function update_expense($ai_id){
		$ai_id=$this->input->post('ai_id');
		
		$this->load->library("form_validation");
				$this->form_validation->set_rules("ac_name","Account Name","required|xss_clean");
				$this->form_validation->set_rules("expense_date","expense Date","required|xss_clean");
				$this->form_validation->set_rules("expense_type","expense Type","required|xss_clean");
				$this->form_validation->set_rules("expense_amount","expense Amount","required|xss_clean");
				$this->form_validation->set_rules("payment_method","Payment Method Name","required|xss_clean");
				$this->form_validation->set_rules("expense_ref","expense Referance","xss_clean");
				$this->form_validation->set_rules("expense_note","expense Note","xss_clean");
				
				if ($this->form_validation->run() == FALSE)
				{
					redirect("accounting/edit_expense/error");
				}
				else{
		//print_r($file_data);
		//insert data to database

	 $data_image = array(

				'ac_name' 								=>$this->input->post('ac_name'),
				'expense_date' 							=>$this->input->post('expense_date'),
				'expense_type' 							=>$this->input->post('expense_type'),
				'expense_amount' 						=>$this->input->post('expense_amount'),
				'payment_method' 						=>$this->input->post('payment_method'),
				'expense_ref' 							=>$this->input->post('expense_ref'),
				'expense_note' 							=>$this->input->post('expense_note'),
				'update_date' 							=>date('Y-m-d H:i:s')
			
			);

	 	$this->db->where('ai_id',$ai_id);
		$this->db->update('accounting_expense', $data_image);
		echo "<script>swal({   title: 'Auto close alert!',   text: 'I will close in 2 seconds.',   timer: 2000,   showConfirmButton: false });";
		redirect("accounting/add_expense/success");

		}

	
	}

	 function delete_expense(){ 
		//delete data to database
			
		$ae_id = $this->uri->segment(3);
	    $this->db->where('ae_id',$ae_id);
	   	$this->db->delete('accounting_expense');
        
		echo "Delete Success";
		redirect("accounting/add_expense/del_success");
    }

    /*End of expense Function*/


    /*start reporting*/

    function total_income(){

    	  	$query = $this->db->select_sum('income_amount', 'total_income');
		    $query = $this->db->get('accounting_income');
		    $result = $query->result();

		    return $result[0]->total_income;
   
    }

    function total_starting_balance(){

    	  	$query = $this->db->select_sum('starting_balance', 'total_starting');
		    $query = $this->db->get('accounting_account');
		    $result = $query->result();

		    return $result[0]->total_starting;
   
    }

     function total_expense(){

    	  	$query = $this->db->select_sum('expense_amount', 'total_expense');
		    $query = $this->db->get('accounting_expense');
		    $result = $query->result();

		    return $result[0]->total_expense;
   
    }

     function get_income_search(){

     		$start_date=$this->input->get('start_date');
     		$end_date=$this->input->get('end_date');
     		$this->db->where('income_date >=', $start_date);
			$this->db->where('income_date <=', $end_date);

     		$query = $this->db->get("accounting_income");
			return $query->result();
			return $start_date;
			return $end_date;
   
    }

     function get_expense_search(){

     		$start_date=$this->input->get('start_date');
     		$end_date=$this->input->get('end_date');
     		$this->db->where('expense_date >=', $start_date);
			$this->db->where('expense_date <=', $end_date);

     		$query = $this->db->get("accounting_expense");
			return $query->result();
   
    }



    function total_income_search(){

    		$start_date=$this->input->get('start_date');
     		$end_date=$this->input->get('end_date');
     		$this->db->where('income_date >=', $start_date);
			$this->db->where('income_date <=', $end_date);

    	  	$query = $this->db->select_sum('income_amount', 'total_income');
		    $query = $this->db->get('accounting_income');
		    $result = $query->result();

		    return $result[0]->total_income;
   
    }

     function total_expense_search(){

     		$start_date=$this->input->get('start_date');
     		$end_date=$this->input->get('end_date');
     		$this->db->where('expense_date >=', $start_date);
			$this->db->where('expense_date <=', $end_date);

    	  	$query = $this->db->select_sum('expense_amount', 'total_expense');
		    $query = $this->db->get('accounting_expense');
		    $result = $query->result();

		    return $result[0]->total_expense;
   
    }


    /*End of Reporting*/



}