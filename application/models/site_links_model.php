<?php 
class Site_links_model  extends CI_Model{

	function getData(){
		$query = $this->db->get("site_links");
		return $query->result();
	}

	function getonerow($id){
		$this->db->where('id',$id);
		$query= $this->db->get("site_links");
		return $query->row();
	}

	function insert_site_links(){
		$data = array(

				'site_name' =>$this->input->post('site_name'),
				'site_url' =>$this->input->post('site_url')
				

			);
		$this->db->insert('site_links', $data);
		redirect("admin/site_links");
	}

	function update_site_links($id){
		$id=$this->input->post('id');
		$data = array(

				'site_name' =>$this->input->post('site_name'),
				'site_url' =>$this->input->post('site_url')
				

			);
		$this->db->where('id',$id);
		$this->db->update('site_links', $data);
		redirect("super_admin/site_links");
	}
}