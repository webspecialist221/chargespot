<?php 
/**
* 
*/
class Device_Shop extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Common_model','cm');
    $this->load->model('Devices_Shops','ds');
	}
	function index()
	{
       $res['data']=$this->ds->devices_lists('devices_at_shops');
       $res['shops']=$this->cm->lists('shops');
       $res['devices']=$this->cm->lists('devices');
       $this->load->view('Devices_Shops/index',$res);
	}
	function ManageRec()
	{
    $valid=$this->form_validation->run('devices_at_shops_form_rules');

     if($valid ==true)
     {
      $rid=$this->input->post('recId');
      if(!empty($rid))
      {
         $data = array('devices_id' =>$this->input->post('ddDevice'),'shops_id'=>$this->input->post('ddShop'));
         $recordid=array('device_shop_id'=>$rid);
      	$res=$this->cm->update('devices_at_shops',$data,$recordid);
      	if($res==true){
      		$this->session->set_flashdata('success','Successfully updated!');
      	}
      	else{
      	$this->session->set_flashdata('er','An Error occure!');	
      	}
      }
      else{
      	$data = array('devices_id' =>$this->input->post('ddDevice'),'shops_id'=>$this->input->post('ddShop'));
      	$res=$this->cm->insert('devices_at_shops',$data);
      	if($res==true){
      		$this->session->set_flashdata('success','Successfully saved!');
      	}
      	else{
      	$this->session->set_flashdata('er','An Error occure!');	
      	}
      }
       redirect('Device_Shop');
    }

    else{
       $res['data']=$this->ds->devices_lists('devices_at_shops');
       $res['shops']=$this->ds->devices_lists('shops');
       $res['devices']=$this->ds->devices_lists('devices');
       $this->load->view('Device_Shop/index',$res);
    }
     
	}
	function Edit()
	{
      $id=$_GET['recid'];
      $res=$this->ds->single_device_list($id);
      echo json_encode($res);
	}
	function UpdateRec()
	{

	}
	function Delete($id)
	{
        if(!empty($id)){
        	$where = array('device_shop_id' => $id );
        	$res=$this->cm->delete('devices_at_shops',$where);
        	if($res==true){
      		$this->session->set_flashdata('success','Successfully deleted!');
      	}
      	else{
      	$this->session->set_flashdata('er','An Error occure!');	
      	 }
        }
        redirect('Device_Shop');
	}
}


 ?>