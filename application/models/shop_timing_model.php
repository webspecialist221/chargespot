<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shop_timing_Model extends CI_Model {
  public function insert($table,$data){
    $query = $this->db->insert($table,$data);
    return $query;
  }
  public function get(){
  	$this->db->select('*');
  	$this->db->from('shops');
  	$query = $this->db->get();
  	return $query->result();
  }

    public function select(){
  	$this->db->select('*');
  	$this->db->from('shops_timings');
  	$this->db->join('shops','shops_timings.shops_id=shops.shop_id');
  	$query = $this->db->get();
  	return $query->result_array();
  }
  public function record($table, $where) {
		$this->db->where($where);
		$query = $this->db->get($table);
		return $query->row_array();
	}

		public function delete($table,$where = '') {
		if(!empty($where))
		$this->db->where($where);
		$query=$this->db->delete($table);
		$result=($query) ? true : false;
		return $result;
	}

	public function update($table, $data, $id) {
		$this->db->where($id);
	   $query=$this->db->update($table,$data);
		$result=($query) ? true : false;
		return $result;
	}

	public function lists($table) {
		$query=$this->db->get($table);
		return $query->result_array();
	}
}

?>