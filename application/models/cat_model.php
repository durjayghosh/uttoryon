<?php 
class Cat_model  extends CI_Model{

	function getData(){
		$query = $this->db->get("category");
		return $query->result();
	}

	function getonerow($cat_id){
		$this->db->where('cat_id',$cat_id);
		$query= $this->db->get("category");
		return $query->row();
	}

	function insert_cat(){
		$data = array(

				'cat_name' =>$this->input->post('cat_name')
				

			);
		$this->db->insert('category', $data);
		redirect("admin/add_cat");
	}

	function update_cat($cat_id){
		$cat_id=$this->input->post('cat_id');
		$data = array(

				'cat_name' =>$this->input->post('cat_name')
				

			);
		$this->db->where('cat_id',$cat_id);
		$this->db->update('category', $data);
		redirect("admin/add_cat");
	}
}