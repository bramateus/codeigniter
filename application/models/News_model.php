<?php
/**
 * 
 */
class News_model extends CI_MODEL {
	



	public function get_news($uri = false) {

		if ($uri === false) {
		$query = $this->db->get('news');
		return $query->result_array();
		}

			else {
				$query = $this->db->get_where('news', array('uri' =>$uri));
				return $query->row_array();


			}


	}






}