<?php 
class Srdl_video_model  extends CI_Model{

	function srdl_video_gallery_upload()
	{
		
		$image_path = realpath(APPPATH . '../uploads/srdl_video_gallary');
		$config['upload_path'] ='uploads/srdl_video_gallary';
		$config['allowed_types'] = 'mp4';
		//$config['max_size']	= '512';
		//$config['max_width']  = '1024';
		//$config['max_height']  = '768';
		$config['overwrite']        = FALSE;
		$config['remove_spaces']    = TRUE;

		$this->load->library('upload', $config);
		 $this->upload->initialize($config);

		if ( ! $this->upload->do_upload())
		{
			echo $error = array('error' => $this->upload->display_errors());
			print_r($error);
			echo "error";

			//$this->load->view('super_admin/cms/gallary_upload', $error);
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
		$this->db->insert('srdl_video_gallery', $gallery_data);

			$this->load->view('super_admin/cms/srdl_video_gallery', $data);
			redirect("super_admin/srdl_video_gallery");
		}
	}



	function srdl_video_getData(){
		
		$this->db->order_by("srdl_video_gallery.id", "desc"); 
		$query = $this->db->get("srdl_video_gallery");
		return $query->result();
	}

	function srdl_video_getonerow($id){
		$id=$this->uri->segment(3);
		$this->db->where('id',$id);
		$query= $this->db->get("srdl_video_gallery");
		return $query->row();
	}

	function update_srdl_video_gallery(){
		$id=$this->input->post('id');
		$gallery_data = array(

				'image_title' 		=>$this->input->post('image_title')
				
				);
		$this->db->where('id',$id);
		$this->db->update('srdl_video_gallery', $gallery_data);
		redirect("super_admin/srdl_video_gallery");
	}
}