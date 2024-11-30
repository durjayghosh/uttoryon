<?php 
class Event_model  extends CI_Model{

	function insert_event(){
				$this->load->library("form_validation");
				$this->form_validation->set_rules("post_title","Post Title","required|alpha|xss_clean");
				$this->form_validation->set_rules("post_author","Author Name","required|xss_clean");
				$this->form_validation->set_rules("post_content","Content","required|xss_clean");

				if ($this->form_validation->run() == FALSE)
				{
					$this->load->view('super_admin/event');
				}
				else{
				//insert image
			    $config['upload_path'] = 'uploads';
			    $config['allowed_types'] = 'gif|jpg|jpeg|png';
			    $config['max_size']         = '9000';
			    $config['encrypt_name']     = false;

			    $this->load->library('upload', $config);
			    $this->upload->do_upload('attachment');

			    $file_data = $this->upload->data();

		//insert data to database

		$data = array(

				'post_title' 		=>$this->input->post('post_title'),
				'post_date' 		=>date('d-m-y'),
				'cat_name' 			=>'Event',
				'post_image'		=> $_FILES['attachment']['name'],
				'post_author' 		=>$this->input->post('post_author'),
				'post_keywords' 	=>$this->input->post('post_keywords'),
				'post_content' 		=>$this->input->post('post_content')
				


			);
		//print_r($data);
		$this->db->insert('event', $data);
		echo "Insert Success";
		//$this->load->view('admin/notice',$data);
		redirect("super_admin/view_events");
						}		
	}

	function getData(){
		$query = $this->db->get("noticeboard");
		return $query->result();
	}

	function getonerow($post_id){
		$this->db->where('notice_id',$post_id);
		$query= $this->db->get("noticeboard");
		return $query->row();
	}


	function update_event($post_id){
		$post_id=$this->input->post('post_id');
		//insert image
			    $config['upload_path'] = 'uploads';
			    $config['allowed_types'] = 'gif|jpg|jpeg|png';
			    $config['max_size']         = '9000';
			    $config['encrypt_name']     = false;

			    $this->load->library('upload', $config);
			    $this->upload->do_upload('attachment');

			    $file_data = $this->upload->data();
		$data = array(

				'post_title' 		=>$this->input->post('post_title'),
				'post_date' 		=>date('d-m-y'),
				'cat_name' 			=>'Event',
				'post_image'		=> $_FILES['attachment']['name'],
				'post_author' 		=>$this->input->post('post_author'),
				'post_keywords' 	=>$this->input->post('post_keywords'),
				'post_content' 		=>$this->input->post('post_content')
				


			);
		$this->db->where('post_id',$post_id);
		$this->db->update('event', $data);
		redirect("super_admin/view_events");
	}
}