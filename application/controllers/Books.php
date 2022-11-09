<?php 

	class Books extends CI_Controller {

		//GET DATA FROM DATABASE
		public function books_ajax_fetchdata() {
			if($this->input->is_ajax_request()) {
				if($fetch_data = $this->book_model->book_db_getdata()) {
					$db_data = array('response', 'fetch_data', 'data' => $fetch_data);
					echo json_encode($db_data);
				} else {
					$db_data = array('response', 'NO:data_fetch', 'NO:fetch_data', 'NONE');
					echo json_encode($db_data);
				}
			} else {
				echo 'NO AJXA REQUEST FOUND';
			}
		}

		//INSERT DATA TO DATABASE
		public function books_ajax_create() {
			if($this->input->is_ajax_request()) {
				$ajax_create = $this->input->post();
				if($this->book_model->book_db_create($ajax_create)) {
					//ERROR MESSAGE HERE
					redirect('posts/view');
				} else {
					//ERROR MESSAGE HERE
					redirect('posts/view');
				}
			} else {
				echo 'NO AJAX REQUEST FOUND';
			}
		}

		//EDIT or UPDATE DATA FROM DATABASE
		public function books_ajax_edit() {
			if($this->input->is_ajax_request()) {
				$ajax_edit = $this->input->post();
				if($this->book_model->book_db_edit($ajax_edit)) {
					//ERROR MESSAGE
					redirect('posts/view');
				} else {
					//ERROR MESSAGE
					redirect('posts/view');
				}
			} else {
				echo 'NO AJAX REQUEST FOUND';
			}
		}

		//REMOVE DATA FROM DATABASE
		public function books_ajax_delete() {
			if($this->input->is_ajax_request()) {
				$ajax_delete = $this->input->post('ajax_del_id');
				if($this->book_model->book_db_delete($ajax_delete)) {
					//ERROR MESSAEG
					redirect('posts/view');
				} else {
					//ERROR MESSAGE
					redirect('posts/view');
				}
			} else {
				echo 'NO AJAX REQUEST FOUND';
			}
		}

	}
