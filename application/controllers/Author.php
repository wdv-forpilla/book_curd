<?php 

	class Author extends CI_Controller {

		public function author_ajax_fetchdata() {
			if($this->input->is_ajax_request()) {
				if($ajax_author_fetch = $this->author_model->author_db_get()) {
					$ajax_data = array('response', 'fetch_data', 'data' => $ajax_author_fetch);
					echo json_encode($ajax_data);
				} else {
					echo 'NO DATA FOUND';
				}
			} else {
				echo 'NO AJAX REQUEST FOUND';
			}
		}
		
		public function author_ajax_create() {
			if($this->input->is_ajax_request()) {
				$ajax_create = $this->input->post();
				if($this->author_model->author_db_create($ajax_create)) {
					//ERROR MESSAGE
					redirect('posts/view_2');
				} else {
					//ERROR MESSAGE
					redirect('posts/view_2');
				}
			} else {
				echo 'NO AJAX REQUEST FOUND';
			}
		}

		public function author_ajax_edit() {	
			if($this->input->is_ajax_request()) {
				$ajax_edit = $this->input->post();
				if($this->author_model->author_db_edit($ajax_edit)) {
					//ERROR MSSEAGE
					redirect('posts/view_2');
				} else {
					//ERROR MESSAGE
					redirect('posts/view_2');
				}
			} else {
				echo 'NO AJAX REQUEST FOUND';
			}
		}

		public function author_ajax_delete() {
			if($this->input->is_ajax_request()) {
				$ajax_delete = $this->input->post('ajax_del_me');
				if($this->author_model->author_db_delete($ajax_delete)) {
					//ERROR MESSAGE
					redirect('posts/view_2');
				} else {
					//ERROR MESSAGE
					redirect('posts/view_2');
				}
			} else {
				echo 'NO AJAX REQUEST FOUND';
			}
		}

	}
