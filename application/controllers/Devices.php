<?php 
/**
* 
*/
class Devices extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Common_model','cm');
	}
	function index()
	{
       $res['data']=$this->cm->lists('devices');

       $this->load->view('Devices/index',$res);
	}
	function ManageRec()
	{
       $rid=$this->input->post('recId');
      if(!empty($rid))
      {
         $data = array('device_id' =>$this->input->post('txtDeviceId'));
         $recordid=array('id'=>$rid);
      	$res=$this->cm->update('devices',$data,$recordid);
      	if($res==true){
      		$this->session->set_flashdata('success','Successfully updated!');
      	}
      	else{
      	$this->session->set_flashdata('er','An Error occure!');	
      	}
      }
      else{
      	$data = array('device_id' =>$this->input->post('txtDeviceId'));
      	$res=$this->cm->insert('devices',$data);
      	if($res==true){
      		$this->session->set_flashdata('success','Successfully saved!');
      	}
      	else{
      	$this->session->set_flashdata('er','An Error occure!');	
      	}
      }
      redirect('Devices');
	}
	function Edit()
	{
      $id=$_GET['recid'];
      $where=array('id'=>$id);
      $res=$this->cm->record('devices',$where);
      echo json_encode($res);
	}
	function UpdateRec()
	{

	}
	function Delete($id)
	{
        if(!empty($id)){
        	$where = array('id' => $id );
        	$res=$this->cm->delete('devices',$where);
        	if($res==true){
      		$this->session->set_flashdata('success','Successfully deleted!');
      	}
      	else{
      	$this->session->set_flashdata('er','An Error occure!');	
      	 }
        }
        redirect('Devices');
	}
}


 ?>