<?php
class Home_banner_model  extends CI_Model{

	function do_upload()
	{
		
		 $image_path = realpath(APPPATH . '../uploads/home_banner');
		 $config['upload_path'] ='uploads/home_banner';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '512';
		$config['max_width']  = '1600';
		$config['max_height']  = '550';

		$this->load->library('upload', $config);
		 $this->upload->initialize($config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('super_admin/cms/home_banner', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$gallery_data = array(

				'image_title' 		=>$this->input->post('image_title'),
				'file_name'		=> $_FILES['userfile']['name'],
				'image_date' 		=>date('d-m-y')
				);
		//print_r($data);
		$this->db->insert('home_banner', $gallery_data);

			//$this->load->view('super_admin/cms/gallary_upload', $data);
			redirect("super_admin/home_banner");
		}
	}



	function getData(){
		$query = $this->db->get("home_banner");
		return $query->result();
	}

	function getonerow($id){
		$this->db->where('id',$id);
		$query= $this->db->get("home_banner");
		return $query->row();
	}

	function update_title($cat_id){
		$id=$this->input->post('id');
		$gallery_data = array(

				'image_title' 		=>$this->input->post('image_title')
				
				);
		$this->db->where('id',$id);
		$this->db->update('home_banner', $gallery_data);
		redirect("super_admin/home_banner");
	}
}