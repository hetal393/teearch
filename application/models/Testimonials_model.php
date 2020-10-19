<?php
class Testimonials_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}

	public function get_Testimonials($slug = FALSE){
		if($slug == FALSE){
			$query = $this->db->get('testimonials');
			return $query->result_array();
		}

		$query = $this->db->get_where('testimonials', array('slug' => $slug));
		return $query->row_array();

	}
}