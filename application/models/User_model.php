<?php 

	class User_model extends CI_Model {

		public function __construct() {
			$this->load->database();
		}

		public function register($data_enc1) {
			$data = array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('password'))
			);
			return $this->db->insert('users', $data);
		}
		
			public function check_duplication_email($post_email) {
				$query = $this->db->get_where('users', array('email' => $post_email));
				if(empty($query->row_array())) {
					return true;
				} else {
					return false;
				}

			}

		public function login($useremail, $password) {
			$this->db->where('email', $useremail);
			$this->db->where('password', $password);
			$result = $this->db->get('users');
			if($result->num_rows() == 1) { 
				return $result->row(0)->id;
			} else {
				return false;
			}
		}

	}
