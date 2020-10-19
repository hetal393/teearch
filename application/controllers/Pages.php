<?php 
class Pages extends CI_Controller{

	public function index($page = 'home'){
		if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
			show_404();
		}


		$data['title'] = ucfirst($page);
		$data['testimonials'] = $this->testimonials_model->get_Testimonials();
		// print_r($data['testimonials']);
		// $this->load->view('templates/header', $data);
		$this->load->view('pages/'.$page, $data);
		// $this->load->view('templates/footer', $data);

	}

	public function portfolioDetails(){
		$this->load->view('pages/portfolioDetails');
	}

	public function openContactModal(){
		$this->load->view('pages/contactModal');
	}
}
 ?>