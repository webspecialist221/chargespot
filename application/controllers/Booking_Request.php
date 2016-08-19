<?php 
/**
* 
*/
class Booking_Request extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Common_model','cm');
    $this->load->model('Devices_Shops','ds');
    $this->load->model('SearchOTP','so');
	}
	function index()
	{
       $this->load->view('Booking_Request/index');
	}
  
  function Assign()
  {
    $valid=$this->form_validation->run('Booking_Request_validation');
     if($valid == true)
     {
        $data = array('user_id'=>$this->input->post('userId'),'devices_id' =>$this->input->post('ddlDeviceId'));
        $res=$this->cm->insert('borrowed_devices',$data);
        if($res==true){
          $this->session->set_flashdata('success','Successfully assigned!');
        }
        else{
        $this->session->set_flashdata('er','An Error occure!'); 
        }
       redirect('Booking_Request');
    }

    else{
      $this->load->view('Booking_Request/index');
    }
  }

	function RetriveRecord()
	{
      $id=$_GET['recid'];
      if(!empty($id))
      {
      $where=$id;
      $res=$this->so->BookingRequest($where);
      echo json_encode($res);
    }
	}
  function GetDevice()
  {
   $id=$_GET['shopId'];
   if(!empty($id)){
      $where=$id;
      $res["run"]=$this->ds->devices_at_shop($where);
      $this->load->view("Booking_Request/Devices",$res);
   }
  }

	// function Delete($id)
	// {
 //        if(!empty($id)){
 //        	$where = array('id' => $id );
 //        	$res=$this->cm->delete('Booking_Request',$where);
 //        	if($res==true){
 //      		$this->session->set_flashdata('success','Successfully deleted!');
 //      	}
 //      	else{
 //      	$this->session->set_flashdata('er','An Error occure!');	
 //      	 }
 //        }
 //        redirect('Booking_Request');
	// }
}

?>