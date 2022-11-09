<?php 

	class Posts extends CI_controller {

		public function __construct() {
			parent::__construct();

			$this->load->helper(array('url', 'form', 'text'));
			$this->load->library(array('form_validation', 'session'));
			$this->load->model(array('user_model', 'post_model'));
		}

		public function create() {
			if(!$this->session->userdata('logged_in')) {
				redirect('users/login');
			}

			$data['title'] = 'Add your Favorite Book To The List';

			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('author', 'Author', 'required');
			$this->form_validation->set_rules('date_of_publication', 'Date of Publication', 'required');
			$this->form_validation->set_rules('description', 'Description');

			if($this->form_validation->run() === FALSE) {
				$this->load->view('templates/header');
				$this->load->view('posts/create', $data);
				$this->load->view('templates/footer');
			} else {	
				$this->post_model->create_post();

				//CREATED POST MESSAGE
				$this->session->set_flashdata('created_post', 'Your favorite book is now on the list.');
				redirect('posts/view');
			}
		}

		public function view() {
			if(!$this->session->userdata('logged_in')) {
				redirect('users/login');
			}

			$data['title'] = 'List of Favorite Books';
			$data['books'] = $this->post_model->get_post();
			$data['user'] =$this->session->userdata('user');

			$this->load->view('templates/header');
			$this->load->view('posts/view', $data);
			$this->load->view('templates/footer');
		}

		public function view_2() {
			if(!$this->session->userdata('logged_in')) {
				redirect('users/login');
			}

			$data['title'] = 'List of Authors';

			$this->load->view('templates/header');
			$this->load->view('posts/view_2', $data);
			$this->load->view('templates/footer');
		}

		public function edit($slug = NULL) {
			if(!$this->session->userdata('logged_in')) {
				redirect('users/login');
			}
			
			$data['book'] = $this->post_model->get_post($slug);

			if(empty($data['book'])) {
				show_404();
			}

			$this->load->view('templates/header');
			$this->load->view('posts/edit', $data);
			$this->load->view('templates/footer');
		}

		public function update() {
			$this->session->set_flashdata('updated_post', 'Your post has been updated!');

			$this->post_model->update_post();
			redirect ('posts/view');
		}

		public function delete($id) {
			$this->post_model->delete_post($id);
			redirect ('posts/view');
		}

		//------------------------------------------------//
			//ENHANCEMENT INTIAL PART

			public function ajax_fetch_author() {
				if($this->input->is_ajax_request()) {
					if($ajax_fetch_author_db = $this->post_model->ajax_get_entry_author()) {
						$ajax_author_data = array('response' => 'success_fetch_author', 'ajax_fetch_author_data' => $ajax_fetch_author_db);
						echo json_encode($ajax_author_data);
					}
				} else {
					echo 'NO AJAX REQUEST FOUND';
				}
			}
			

			public function ajax_insert_author() {
				if($this->input->is_ajax_request()) {						
					$ajax_insert_author = $this->input->post();
					if($this->post_model->ajax_post_author_create($ajax_insert_author)) {
						redirect('posts/view');
					} else {
						redirect('posts/view');
					}	
				} else {
					echo 'NO AJAX REQUEST FOUND';
				}	
			}

			public function ajax_delete_author() {
				if($this->input->is_ajax_request()) {
					$ajax_delete_me = $this->input->post('ajax_del_me');
					if($this->post_model->ajax_author_delete($ajax_delete_me)) {
						//message here
						redirect('posts/view_2');
					} else {	
						redirect('posts/view_2');
					}
				} else {
					echo 'NO AJAX REQUEST FOUND';
				}
			}

			public function ajax_edit_author() {
				if($this->input->is_ajax_request()) {
					$ajax_author_edit = $this->input->post();
					if($this->post_model->ajax_author_edit($ajax_author_edit)) {
						redirect('posts/view_2');
					}else {
						//error
						redirect('posts/view_2');
					}
				} else {
					echo 'NO AJAX REQUEST FOUND';
				}
			}
		//------------------------------------------------//



	}
