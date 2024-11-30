<?php 
class Page_model  extends CI_Model{

	function getData($page_name){
		$query = $this->db->get_where("pagedata", array("page_name"=>$page_name));
		return $query->result();
	}

	function getData_admin(){
		$query = $this->db->get("pagedata");
		return $query->result();
	}

	function getonerow($id){
		$this->db->where('id',$id);
		$query= $this->db->get("pagedata");
		return $query->row();
	}
}