<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Common_model extends CI_Model {

	public function lists($table) {
		$query=$this->db->get($table);
		return $query->result_array();
	}

	public function record($table, $where) {
		$this->db->where($where);
		$query = $this->db->get($table);
		return $query->row_array();
	}

	public function insert($table, $data) {
		$query=$this->db->insert($table,$data);
		$result=($query) ? true : false;
		return $result;
	}

	public function update($table, $data, $id) {
		$this->db->where($id);
	   $query=$this->db->update($table,$data);
		$result=($query) ? true : false;
		return $result;
	}

	public function delete($table,$where = '') {
		if(!empty($where))
		$this->db->where($where);
		$query=$this->db->delete($table);
		$result=($query) ? true : false;
		return $result;
	}
	
	public function get_permalink($table, $column_name, $name) {
		$this->db->select($column_name);
		$this->db->from($table);
		$this->db->where("$column_name = \"$name\"");
		$this->db->or_where("$column_name REGEXP \"$name-[0-9]+$\"");
		$this->db->order_by("CHAR_LENGTH($column_name)", "desc");
		$this->db->order_by("LOCATE('-', REVERSE($column_name)) DESC");
		$this->db->order_by("$column_name", "desc");
		$query = $this->db->get();
		if($query->num_fields() > 0) {
			return $query->row_array();
		} else {
			return false;
		}
	}
	public function get_all($table)
	{
		 $country= $this->db->get($table);
		return $country->result();
	}
	public function city_join()
	{

          $this->db->select('*');
          $this->db->from('city');
          $this->db->join('countries', 'city.country_id = countries.country_id');
 $query = $this->db->get();
 return $query->result_array();
	}
	public function shop_join()
	{
		
     $this->db->select('*');
     $this->db->from('shops');
     $this->db->join('countries', 'shops.country = countries.country_id');
     $this->db->join('city', 'shops.city=city.id');
 
$query = $this->db->get();
    return $query->result_array();
	}
	public function shop_join_one($id)
	{
		
     $this->db->select('*');
     $this->db->from('shops');
     $this->db->join('countries', 'shops.country = countries.country_id');
     $this->db->join('city', 'shops.city=city.id');
     $this->db->where('shops.shop_id',$id);
     $query = $this->db->get();
    return $query->row_array();
	}
	public function select_one($table,$ajax_id,$id){
			$this->db->where($ajax_id,$id);
			$query = $this->db->get($table);
			return $query->result_array();
		}
	public function user_shop()
	{
		$this->db->select('*');
		  $this->db->from('users_groups');
		  $this->db->join('users','users_groups.user_id=users.id');
		  $this->db->where(array('group_id'=>3));
		$query = $this->db->get();
		return $query->result_array();
		
	}
	public function user_shop_all()
	{
		$this->db->select('*');
		  $this->db->from('shops_users');
		  $this->db->join('users','shops_users.user_id=users.id');
		   $this->db->join('shops','shops_users.shops_id=shops.shop_id');
	$query = $this->db->get();
		return $query->result_array();
		
	}
}

?>