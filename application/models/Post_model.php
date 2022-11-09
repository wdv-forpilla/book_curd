<?php 

	class Post_model extends CI_Model {
		
		public function create_post() {
			$data = array(
				'name' => $this->input->post('name'),
				'author' => $this->input->post('author'),
				'date_of_publication' => $this->input->post('date_of_publication'),
				'description' => $this->input->post('description')
			);

			$this->db->insert('books', $data);
		}

		public function get_post($slug = FALSE) {
			if($slug === FALSE) {
				$this->db->order_by('books.id', 'DESC');
				$query = $this->db->get('books');
				return $query->result_array();
			}

			$query = $this->db->get_where('books', array('id' => $slug));
			return $query->row_array();
		}


		public function update_post() {

			$data = array (
				'author' => $this->input->post('author'),
				'name' => $this->input->post('name'),
				'date_of_publication' => $this->input->post('date_of_publication'),
				'description' => $this->input->post('description')
			);

			$this->db->where('id', $this->input->post('id'));
			
			//TIME STAMP UPDATED
			$this->db->set('updated_at', 'NOW()', FALSE);
			return $this->db->update('books', $data);
		}

		public function delete_post($id) {
			$this->db->where('id', $id);
			$this->db->delete('books');
			return true;
		}

		//------------------------------------------------//
			//AJAX 
	

				public function ajax_get_entry_author() {
					$query_author = $this->db->get('author');
					if(count($query_author->result()) > 0) {
						return $query_author->result();
					} else {
						echo 'NO DATA FOUND';
					}
				}

		

				public function ajax_post_author_create($data) {
					$query_author = $this->db->insert('author', $data);
					return $query_author;
				}

			

				public function ajax_author_delete($id) {
					return $this->db->delete('author', array('id' => $id));
				}

		

				public function ajax_author_edit($data) {
					$this->db->where('id', $this->input->post('id'));
					$this->db->set('update_datetime', 'NOW()', FALSE);
					$query = $this->db->update('author', $data);
					return $query;

				}
		//------------------------------------------------//

	}
