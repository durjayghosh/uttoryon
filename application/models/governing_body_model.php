<?php 
class Governing_body_model  extends CI_Model{

	function insert_governing_body(){
				$this->load->library("form_validation");
				$this->form_validation->set_rules("name","Full Name","required|xss_clean");
				$this->form_validation->set_rules("position","Position","required|xss_clean");
				$this->form_validation->set_rules("phone","Phone No.","required|xss_clean");

				if ($this->form_validation->run() == FALSE)
				{
					$this->load->view('super_admin/governing_body');
				}
				else{
				//insert image
				$config['upload_path'] = 'uploads/governing_body';
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
				'phone' 			=>$this->input->post('phone')
				


			);
		//print_r($data);
		$this->db->insert('governing_body', $data);
		echo "Insert Success";
		//$this->load->view('admin/notice',$data);
		redirect("super_admin/view_governing_body");
						}		
	}

	function getData(){
		$query = $this->db->get("governing_body");
		return $query->result();
	}

	function getonerow($id){
		$this->db->where('id',$id);
		$query= $this->db->get("governing_body");
		return $query->row();
	}


	function update_governing_body(){
		$id=$this->input->post('id');
		
		$this->load->library("form_validation");
				$this->form_validation->set_rules("name","Full Name","required|xss_clean");
				$this->form_validation->set_rules("position","Position","required|xss_clean");
				$this->form_validation->set_rules("phone","Phone No.","required|xss_clean");
				

				if ($this->form_validation->run() == FALSE)
				{
					$this->load->view('super_admin/governing_body');
				}
				else{
				$gb_image = $_FILES['image']['name'];
			
				if($gb_image!=""){
				//insert image
				$config['upload_path'] = 'uploads/governing_body';
			    $config['allowed_types'] = 'gif|jpg|jpeg|png';
			    $config['max_size']         = '9000';
			    $config['encrypt_name']     = false;

			    $this->load->library('upload', $config);
			    $this->upload->initialize($config);
			    $this->upload->do_upload('image');

			    $file_data = $this->upload->data();

	print_r($file_data);
		//insert data to database

	 $data_image = array(

				'name' 				=>$this->input->post('name'),
				'photo'				=> $_FILES['image']['name'],
				'position' 			=>$this->input->post('position'),
				'email' 			=>$this->input->post('email'),
				'phone' 			=>$this->input->post('phone')
				


			);
	 	$this->db->where('id',$id);
		$this->db->update('governing_body', $data_image);
		redirect("super_admin/view_governing_body");

		}

		else{
	  	$data = array(

				'name' 				=>$this->input->post('name'),
				'position' 			=>$this->input->post('position'),
				'email' 			=>$this->input->post('email'),
				'phone' 			=>$this->input->post('phone')
				


			);
		
		$this->db->where('id',$id);
		$this->db->update('governing_body', $data);
		redirect("super_admin/view_governing_body");
		}
		
	}
	}
}