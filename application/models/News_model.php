<?php
/**
 * 
 */
class News_model extends CI_MODEL {
	



	public function get_news($uri = false) {

		// if ($uri === false) {
		$query = $this->db->get('usu');




		return $query->result_array();



		// }

			// else {
			// 	$query = $this->db->get_where('usu', array('uri' =>$uri));
			// 	return $query->row_array();


			// }

	}

	public function get_number_usu() {

		// $query = $this->db->get('usu');
// SELECT COUNT(id_usu) AS NumberOfProducts FROM usu;

		return $this->db
                ->select("count(id_usu) as total")
                ->from("usu as usua")

                // ->limit(1)
                ->get()
                ->row_array();



	}






}