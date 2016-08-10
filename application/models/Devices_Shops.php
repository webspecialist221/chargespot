<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Devices_Shops extends CI_Model
{
	public function devices_lists()
	{
       $this->db->select('devices_at_shops.*,shops.*,devices.*');
       $this->db->from('devices_at_shops');
       $this->db->join('devices','devices_at_shops.devices_id=devices.id');
       $this->db->join('shops','devices_at_shops.shops_id=shops.shop_id');
       $res=$this->db->get();
       return $res->result_array();
	}
	public function single_device_list($id)
	{
       $this->db->select('devices_at_shops.*,shops.*,devices.*');
       $this->db->from('devices_at_shops');
       $this->db->join('devices','devices_at_shops.devices_id=devices.id');
       $this->db->join('shops','devices_at_shops.shops_id=shops.shop_id');
       $this->db->where('devices_at_shops.device_shop_id',$id);
       $res=$this->db->get();
       return $res->row_array();
	}
}






?>