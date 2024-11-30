<?php 
class News_model  extends CI_Model{

	function insert_news(){
				$this->load->library("form_validation");
				$this->form_validation->set_rules("post_title","Post Title","required|xss_clean");
				$this->form_validation->set_rules("post_author","Author Name","required|xss_clean");
				$this->form_validation->set_rules("post_content","Content","required|xss_clean");

				if ($this->form_validation->run() == FALSE)
				{
					$this->load->view('super_admin/cms/news');
				}
				else{
				//insert image
			    $config['upload_path'] = 'uploads/news';
			    $config['allowed_types'] = 'gif|jpg|jpeg|png';
			    $config['max_size']         = '9000';
			    $config['encrypt_name']     = false;

			    $this->load->library('upload', $config);
			    $this->upload->initialize($config);
			    $this->upload->do_upload('attachment');

			    $file_data = $this->upload->data();

		//insert data to database

		$data = array(

				'post_title' 		=>$this->input->post('post_title'),
				'post_date' 		=>date('Y-m-d'),
				'cat_name' 			=>'News',
				'post_image'		=> $_FILES['attachment']['name'],
				'post_author' 		=>$this->input->post('post_author'),
				'post_keywords' 	=>$this->input->post('post_keywords'),
				'post_content' 		=>$this->input->post('post_content')
				


			);
		//print_r($data);
		$this->db->insert('news', $data);
		echo "Insert Success";
		//$this->load->view('admin/notice',$data);
		redirect("super_admin/view_newses");
						}		
	}

	function getData(){
		$query = $this->db->get("news");
		return $query->result();
	}

	function getonerow($post_id){
		$this->db->where('post_id',$post_id);
		$query= $this->db->get("news");
		return $query->row();
	}


	function update_news(){
		$post_id=$this->input->post('post_id');
		//insert image
			    $config['upload_path'] = 'uploads/news';
			    $config['allowed_types'] = 'gif|jpg|jpeg|png';
			    $config['max_size']         = '9000';
			    $config['encrypt_name']     = false;

			    $this->load->library('upload', $config);
			    $this->upload->initialize($config);
			    $this->upload->do_upload('attachment');

			    $file_data = $this->upload->data();
		$data = array(

				'post_title' 		=>$this->input->post('post_title'),
				'post_date' 		=>date('Y-m-d'),
				'cat_name' 			=>'News',
				'post_image'		=> $_FILES['attachment']['name'],
				'post_author' 		=>$this->input->post('post_author'),
				'post_keywords' 	=>$this->input->post('post_keywords'),
				'post_content' 		=>$this->input->post('post_content')
				


			);
		$this->db->where('post_id',$post_id);
		$this->db->update('news', $data);
		redirect("super_admin/view_newses");
	}
}