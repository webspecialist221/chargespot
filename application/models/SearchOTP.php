<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class SearchOTP extends CI_Model
{
	public function BookingRequests()
	{
       $this->db->select('booking_requests.*,shops.*,users.first_name,users.last_name,users.first_name,users.id');
       $this->db->from('booking_requests');
       $this->db->join('users','booking_requests.user_id=users.id');
       $this->db->join('shops','booking_requests.shops_id=shops.shop_id');
       $res=$this->db->get();
       return $res->result_array();
	}
	public function BookingRequest($id)
	{
       $this->db->select('booking_requests.*,shops.*,users.first_name,users.last_name,users.first_name,users.id');
       $this->db->from('booking_requests');
       $this->db->join('users','booking_requests.user_id=users.id');
       $this->db->join('shops','booking_requests.shops_id=shops.shop_id');
       $this->db->where('booking_requests.otp',$id);
       $res=$this->db->get();
       return $res->row_array();
	}
}






?>