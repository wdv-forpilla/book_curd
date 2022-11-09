<?php 

	class Author_model extends CI_Model {
		
		public function author_db_get() {
			$query = $this->db->get('author');
			if(count($query->result()) > 0) {
				return $query->result();
			}
		}

		public function author_db_create($data) {
			$query = $this->db->insert('author', $data);
			return $query;
		}

		public function author_db_edit($data) {
			$this->db->where('id', $this->input->post('id'));
			$this->db->set('update_datetime', 'NOW()', FALSE);
			$query = $this->db->update('author', $data);
			return $query;
		}

		public function author_db_delete($id) {
			return $this->db->delete('author', array('id' => $id));
		}
	}
