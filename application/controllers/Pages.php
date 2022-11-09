<?php

	class Pages extends CI_Controller {
		
		public function index($slug = NULL) {

			$data['post'] = $this->post_model->get_post($slug);

			if(empty($data['post'])) {
				show_404();
			}

			$this->load->view('templates/header');
			$this->load->view('pages/index', $data);
			$this->load->view('templates/footer');

		}

	}
