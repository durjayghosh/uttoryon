<?php
class Notice_model  extends CI_Model{

	function insert_notice(){
				$this->load->library("form_validation");
				$this->form_validation->set_rules("post_title","Post Title","required|xss_clean");
				$this->form_validation->set_rules("post_author","Author Name","required|xss_clean");
				$this->form_validation->set_rules("post_content","Content","required|xss_clean");

				if ($this->form_validation->run() == FALSE)
				{
					$this->load->view('super_admin/notice');
				}
				else{
				
				//insert image
			    $config['upload_path'] = 'uploads/notice';
			    $config['allowed_types'] = 'pdf|doc|gif|jpg|jpeg|png';
			    $config['max_size']         = '15000000';
			    $config['encrypt_name']     = false;

			    $this->load->library('upload', $config);
			    $this->upload->initialize($config);
			    $this->upload->do_upload('attachment');

			    $file_data = $this->upload->data();

		//insert data to database

		$data = array(

				'post_title' 		=>$this->input->post('post_title'),
				'post_date' 		=>date('Y-m-d'),
				'cat_name' 			=>'Notice',
				'post_image'		=> $_FILES['attachment']['name'],
				'post_author' 		=>$this->input->post('post_author'),
				'post_keywords' 	=>$this->input->post('post_keywords'),
				'post_content' 		=>$this->input->post('post_content')
				


			);
		//print_r($data);
		$this->db->insert('posts', $data);
		echo "Insert Success";
		//$this->load->view('admin/notice',$data);
		redirect("super_admin/view_notices");

		

		


		}		
	}

	function getData(){
		$query = $this->db->get("posts");
		return $query->result();
	}

	function getonerow($post_id){
		$this->db->where('post_id',$post_id);
		$query= $this->db->get("posts");
		return $query->row();
	}


	function update_notice(){
		$this->load->library("form_validation");
				$this->form_validation->set_rules("post_title","Post Title","required|xss_clean");
				$this->form_validation->set_rules("post_author","Author Name","required|xss_clean");
				$this->form_validation->set_rules("post_content","Content","required|xss_clean");

				if ($this->form_validation->run() == FALSE)
				{
					$this->load->view('super_admin/notice');
				}

				else{
				
				$post_id=$this->input->post('post_id');

				$notice_file = $_FILES['attachment']['name'];
				if($notice_file!=""){
		//insert image
			    $config['upload_path'] = 'uploads/notice';
			    $config['allowed_types'] = 'pdf|doc|gif|jpg|jpeg|png';
			    $config['max_size']         = '15000000';
			    $config['encrypt_name']     = false;

			    $this->load->library('upload', $config);
			    $this->upload->do_upload('attachment');

			    $file_data = $this->upload->data();
		$data_image = array(

				'post_title' 		=>$this->input->post('post_title'),
				'post_date' 		=>date('Y-m-d'),
				'cat_name' 			=>'Notice',
				'post_image'		=> $_FILES['attachment']['name'],
				'post_author' 		=>$this->input->post('post_author'),
				'post_keywords' 	=>$this->input->post('post_keywords'),
				'post_content' 		=>$this->input->post('post_content')
				


			);
		$this->db->where('post_id',$post_id);
		$this->db->update('posts', $data_image);
		redirect("super_admin/view_notices");

		}
		else{
			$data = array(

				'post_title' 		=>$this->input->post('post_title'),
				'post_date' 		=>date('d-m-y'),
				'cat_name' 			=>'Notice',
				'post_author' 		=>$this->input->post('post_author'),
				'post_keywords' 	=>$this->input->post('post_keywords'),
				'post_content' 		=>$this->input->post('post_content')
				


			);
		//print_r($data);
		$this->db->where('post_id',$post_id);
		$this->db->update('posts', $data);
		echo "Insert Success";
		//$this->load->view('admin/notice',$data);
		redirect("super_admin/view_notices");

			} //else close for without image

		}


	}
}