<?php 

	class Users extends CI_Controller {

		public function login() {

			if($this->session->userdata('logged_in')) {
				redirect('users/login');
			}

			$data['title'] = 'Log-in';

			$this->form_validation->set_rules('email', 'Email Address', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if($this->form_validation->run() === FALSE) {
				$this->load->view('templates/header');
				$this->load->view('users/login', $data);
				$this->load->view('templates/footer');

			} else {
				$useremail = $this->input->post('email');
				$password = md5($this->input->post('password'));

				$user_id = $this->user_model->login($useremail, $password);

				if($user_id) {	

					$user_data = array(
						'user_id' => $user_id,
						'email' => $useremail,
						'logged_in' => true
					);

					$this->session->set_userdata($user_data);

					$this->session->set_flashdata('loggedin_user', 'You are successfully logged-in!');	
					redirect('posts/view');				
				} else {
					$this->session->set_flashdata('loggedin_fail', 'Log-in failed in valid credentials.');
					redirect('users/login');
				}	

			}
		}

		public function logout() {

			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('user_id');
			$this->session->unset_userdata('email');

			$this->session->set_flashdata('loggedout_user', 'You are now loggedout!');
			redirect('users/login');

		}

		public function register() {
			$data['title'] = 'Register';
			$post_email = $this->input->post('email');
			$post_password = $this->input->post('password');
			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_email_duplicate_checker');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('confirm_password', 'Confirm_Password', 'matches[password]');

			if($this->form_validation->run() === FALSE) {
				$this->load->view('templates/header');
				$this->load->view('users/register', $data);
				$this->load->view('templates/footer');
			} else {
				//PASSWORD ENCRYTIPN
				$data_enc['email'] = $post_email;
				$data_enc['password'] = $post_password;
				$this->user_model->register($data_enc);
				//SET MESSAGE FOR REGISTRATION
				$this->session->set_flashdata('user_registered','You are now registered!');
				redirect('users/login');
			
			}
		}

			public function email_duplicate_checker($post_email) {		
				$this->form_validation->set_message('email_duplicate_checker', 'Email Address already saved in our database');
				if($this->user_model->check_duplication_email($post_email)) {
					return true;
				} else {
					return false;
				}			
			}

	}
