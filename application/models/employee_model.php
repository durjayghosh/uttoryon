<?php 
class Employee_model  extends CI_Model{

	function insert_employee(){
				$this->load->library("form_validation");
				$this->form_validation->set_rules("name","Full Name","required|xss_clean");
				$this->form_validation->set_rules("position","Position","required|xss_clean");
				$this->form_validation->set_rules("phone","Phone No.","required|xss_clean");

				if ($this->form_validation->run() == FALSE)
				{
					$this->load->view('super_admin/empoyee');
				}
				else{
				//insert image
				$config['upload_path'] = 'uploads/employee';
			    $config['allowed_types'] = 'gif|jpg|jpeg|png';
			    $config['max_size']         = '9000';
			    $config['encrypt_name']     = false;

			    $this->load->library('upload', $config);
			    $this->upload->initialize($config);
			    $this->upload->do_upload('image');

			    $file_data = $this->upload->data();

		//insert data to database

		$data = array(

				'name' 				=>$this->input->post('name'),
				'photo'				=> $_FILES['image']['name'],
				'position' 			=>$this->input->post('position'),
				'email' 			=>$this->input->post('email'),
				'mpo_status' 		=>$this->input->post('mpo_status'),
				'phone' 			=>$this->input->post('phone')
				


			);
		//print_r($data);
		$this->db->insert('employee', $data);
		echo "Insert Success";
		//$this->load->view('admin/notice',$data);
		redirect("super_admin/view_employee");
						}		
	}

	function getData(){
		$query = $this->db->get("employee");
		return $query->result();
	}

	function getData_mpo(){
		$this->db->where('mpo_status','Yes');
		$query = $this->db->get("employee");
		return $query->result();
	}

	function getData_non_mpo(){
		$this->db->where('mpo_status','No');
		$query = $this->db->get("employee");
		return $query->result();
	}

	function getonerow($id){
		$this->db->where('id',$id);
		$query= $this->db->get("employee");
		return $query->row();
	}


	function update_employee(){
		$id=$this->input->post('id');
		
		$this->load->library("form_validation");
				$this->form_validation->set_rules("name","Full Name","required|xss_clean");
				$this->form_validation->set_rules("position","Position","required|xss_clean");
				$this->form_validation->set_rules("phone","Phone No.","required|xss_clean");
				

				if ($this->form_validation->run() == FALSE)
				{
					$this->load->view('super_admin/employee');
				}
				else{
				$gb_image = $_FILES['image']['name'];
			
				if($gb_image!=""){
				//insert image
				$config['upload_path'] = 'uploads/employee';
			    $config['allowed_types'] = 'gif|jpg|jpeg|png';
			    $config['max_size']         = '9000';
			    $config['encrypt_name']     = false;

			    $this->load->library('upload', $config);
			    $this->upload->initialize($config);
			    $this->upload->do_upload('image');

			    $file_data = $this->upload->data();

	//print_r($file_data);
		//insert data to database

	 $data_image = array(

				'name' 				=>$this->input->post('name'),
				'photo'				=> $_FILES['image']['name'],
				'position' 			=>$this->input->post('position'),
				'email' 			=>$this->input->post('email'),
				'mpo_status' 		=>$this->input->post('mpo_status'),
				'phone' 			=>$this->input->post('phone')
				


			);
	 	$this->db->where('id',$id);
		$this->db->update('employee', $data_image);
		redirect("super_admin/view_employee");

		}

		else{
	  	$data = array(

				'name' 				=>$this->input->post('name'),
				'position' 			=>$this->input->post('position'),
				'email' 			=>$this->input->post('email'),
				'mpo_status' 		=>$this->input->post('mpo_status'),
				'phone' 			=>$this->input->post('phone')
				


			);
		
		$this->db->where('id',$id);
		$this->db->update('employee', $data);
		redirect("super_admin/view_employee");
		}
		
	}
	}
}