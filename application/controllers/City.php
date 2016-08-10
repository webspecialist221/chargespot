<?php 
/**
* 
*/
class City extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('common_model','cm');
	}
	public function index()
	{
		$res['country']=$this->cm->get_all('countries');
		$res['data']=$this->cm->city_join('city');
        $this->load->view('City/index',$res);
	}
	public 	function ManageRec()
	{
		 $valid=$this->form_validation->run( 'City_form_rules');

     if($valid ==true)
     	  {
     	  	 $rid=$this->input->post('recId');
            if(!empty($rid))
            {
                 $array=array(
                    // 'id'=> $this->input->post('country_id'),
                     'country_id'=>$this->input->post('country'),
                     'cityName'=>$this->input->post('city')
                   ); 
                  $recordid=array('id'=>$rid);
      
     
     $res= $this->cm->update('city',$array, $recordid);
     if($res==true){
       $this->session->set_flashdata('success','Successfully Updated!');
      }
     else{
  	         $this->session->set_flashdata('er','An Error occure!');
         }
            }
     	  }

       else  {
       $array=array(
                    // 'id'=> $this->input->post('country_id'),
                     'country_id'=>$this->input->post('country'),
                     'cityName'=>$this->input->post('city')
                   ); 
      
     
     $res= $this->cm->insert('city',$array);
     if($res==true){
       $this->session->set_flashdata('success','Successfully saved!');
      }
   else{
  	         $this->session->set_flashdata('er','An Error occure!');
         }
      }
      redirect('City');
	}
	public function Edit()
	{
      $id=$_GET['recid'];
      $where=array('id'=>$id);
      $res=$this->cm->record('city',$where);
      echo json_encode($res);
	}
	public function delete($id)
	{
            if(!empty($id)){
        	$where = array('id' => $id );
        	$res=$this->cm->delete('city',$where);
        	if($res==true){
      		$this->session->set_flashdata('success','Successfully deleted!');
      	}
      	else{
      	$this->session->set_flashdata('er','An Error occure!');	
      	 }
        }
        redirect('City');
	}
}


?>