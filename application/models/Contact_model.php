<?php
 class Contact_model extends CI_Model{
 	public function __construct(){
 		$this->load->database();
 	}

 	public function get_contacts($slug = FALSE){
 		if($slug === FALSE){
 			$query = $this->db->get('contact');
 			return $query->result_array();
 		}

 		$query = $this->db->get_where('contact', array('slug' => $slug));
 		return $query->row_array();

 	}

 	public function submit_details(){
		// $slug = url_title($this->input->post('name'));
		$data = array(
			'Name' => $this->input->post('inputName'),
			'email' => $this->input->post('inputEmail'),
			'message' => $this->input->post('inputMessage')
		);

		return $this->db->insert('contact', $data);
 	}
 }