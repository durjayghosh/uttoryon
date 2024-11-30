<?php 
class Ex_principal_model  extends CI_Model{

	function insert_ex_principal(){
				$this->load->library("form_validation");
				$this->form_validation->set_rules("name","Full Name","required|xss_clean");
				//$this->form_validation->set_rules("position","Position","required|xss_clean");
				$this->form_validation->set_rules("phone","Phone No.","required|xss_clean");

				if ($this->form_validation->run() == FALSE)
				{
					$this->load->view('super_admin/ex_principal');
				}
				else{
				//insert image
				$config['upload_path'] = 'uploads/ex_principal';
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
				'join_date' 		=>$this->input->post('join_date'),
				'ret_date' 			=>$this->input->post('ret_date'),
				'email' 			=>$this->input->post('email'),
				'phone' 			=>$this->input->post('phone')
				


			);
		//print_r($data);
		$this->db->insert('ex_principal', $data);
		echo "Insert Success";
		//$this->load->view('admin/notice',$data);
		redirect("super_admin/view_ex_principal");
						}		
	}

	function getData(){
		$query = $this->db->get("ex_principal");
		return $query->result();
	}

	function getonerow($id){
		$this->db->where('id',$id);
		$query= $this->db->get("ex_principal");
		return $query->row();
	}


	function update_ex_principal(){
		$id=$this->input->post('id');
		
		$this->load->library("form_validation");
				$this->form_validation->set_rules("name","Full Name","required|xss_clean");
				//$this->form_validation->set_rules("position","Position","required|xss_clean");
				$this->form_validation->set_rules("phone","Phone No.","required|xss_clean");
				

				if ($this->form_validation->run() == FALSE)
				{
					$this->load->view('super_admin/ex_principal');
				}
				else{
				$gb_image = $_FILES['image']['name'];
			
				if($gb_image!=""){
				//insert image
				$config['upload_path'] = 'uploads/ex-principal';
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
				'join_date' 		=>$this->input->post('join_date'),
				'ret_date' 			=>$this->input->post('ret_date'),
				'email' 			=>$this->input->post('email'),
				'phone' 			=>$this->input->post('phone')
				


			);
	 	$this->db->where('id',$id);
		$this->db->update('ex_principal', $data_image);
		redirect("super_admin/view_ex_principal");

		}

		else{
	  	$data = array(

				'name' 				=>$this->input->post('name'),
				'join_date' 		=>$this->input->post('join_date'),
				'ret_date' 			=>$this->input->post('ret_date'),
				'email' 			=>$this->input->post('email'),
				'phone' 			=>$this->input->post('phone')
				


			);
		
		$this->db->where('id',$id);
		$this->db->update('ex_principal', $data);
		redirect("super_admin/view_ex_principal?success=1");
		}
		
	}
	}


	/*Retiered Teachers*/

	function insert_ex_teacher(){
				$this->load->library("form_validation");
				$this->form_validation->set_rules("name","Full Name","required|xss_clean");
				//$this->form_validation->set_rules("position","Position","required|xss_clean");
				$this->form_validation->set_rules("phone","Phone No.","required|xss_clean");

				if ($this->form_validation->run() == FALSE)
				{
					//$this->load->view('super_admin/ex_teacher');
				}
				else{
				//insert image
				$config['upload_path'] = 'uploads/ex_teacher';
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
				'join_date' 		=>$this->input->post('join_date'),
				'ret_date' 			=>$this->input->post('ret_date'),
				'email' 			=>$this->input->post('email'),
				'phone' 			=>$this->input->post('phone')
				


			);
		//print_r($data);
		$this->db->insert('ex_teacher', $data);
		echo "Insert Success";
		//$this->load->view('admin/notice',$data);
		redirect("super_admin/view_ex_teacher");
						}		
	}

	function getData_ex_teacher(){
		$query = $this->db->get("ex_teacher");
		return $query->result();
	}

	function getonerow_ex_teacher($id){
		$this->db->where('id',$id);
		$query= $this->db->get("ex_teacher");
		return $query->row();
	}


	function update_ex_teacher(){
		$id=$this->input->post('id');
		
		$this->load->library("form_validation");
				$this->form_validation->set_rules("name","Full Name","required|xss_clean");
				//$this->form_validation->set_rules("position","Position","required|xss_clean");
				$this->form_validation->set_rules("phone","Phone No.","required|xss_clean");
				

				if ($this->form_validation->run() == FALSE)
				{
					$this->load->view('super_admin/ex_teacher');
				}
				else{
				$gb_image = $_FILES['image']['name'];
			
				if($gb_image!=""){
				//insert image
				$config['upload_path'] = 'uploads/ex_teacher';
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
				'join_date' 		=>$this->input->post('join_date'),
				'ret_date' 			=>$this->input->post('ret_date'),
				'email' 			=>$this->input->post('email'),
				'phone' 			=>$this->input->post('phone')
				


			);
	 	$this->db->where('id',$id);
		$this->db->update('ex_teacher', $data_image);
		redirect("super_admin/view_ex_teacher");

		}

		else{
	  	$data = array(

				'name' 				=>$this->input->post('name'),
				'join_date' 		=>$this->input->post('join_date'),
				'ret_date' 			=>$this->input->post('ret_date'),
				'email' 			=>$this->input->post('email'),
				'phone' 			=>$this->input->post('phone')
				


			);
		
		$this->db->where('id',$id);
		$this->db->update('ex_teacher', $data);
		redirect("super_admin/view_ex_teacher?success=1");
		}
		
	}
	}
}