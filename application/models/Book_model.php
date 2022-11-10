<?php 

	class Book_model extends CI_Model {
		
		public function book_db_getdata() {
			$get_data = $this->db->get('books');
			if(count($get_data->result()) > 0) {
				return $get_data->result();
			} else {
				echo 'NO DATA FOUND';
			}
		}

		public function book_db_create($data) {
			$query = $this->db->insert('books', $data);
			return $query;

		}

		public function book_db_edit($data) {
			$this->db->where('id', $this->input->post('id'));
			$this->db->set('date_updated', 'NOW()', FALSE);
			$query = $this->db->update('books', $data);
			return $query;
		}

		public function book_db_delete($id) {
			return $this->db->delete('books', array('id' => $id));
		}

	}
