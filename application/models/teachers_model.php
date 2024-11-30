<?php
class Teachers_model  extends CI_Model{

	function insert_teachers(){
				$this->load->library("form_validation");
				$this->form_validation->set_rules("name","Full Name","required|xss_clean");
				$this->form_validation->set_rules("position","Position","required|xss_clean");
				$this->form_validation->set_rules("phone","Phone No.","required|xss_clean");

				if ($this->form_validation->run() == FALSE)
				{
					$this->load->view('super_admin/teachers');
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
		$query = $this->db->get("teacher");
		return $query->result();
	}

	function getData_mpo(){
		$this->db->where('mpo_status','Yes');
		$query = $this->db->get("teacher");
		return $query->result();
	}

	function getData_non_mpo(){
		$this->db->where('mpo_status','No');
		$query = $this->db->get("teacher");
		return $query->result();
	}

	function getonerow($id){
		$this->db->where('id',$id);
		$query= $this->db->get("teacher");
		return $query->row();
	}


	
}