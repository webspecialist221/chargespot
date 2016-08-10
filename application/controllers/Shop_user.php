<?php 
/**
* 
*/
class Shop_user extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('common_model','cm');
	}
	public function index()
	{
    $res['shop_user']=$this->cm->user_shop_all('users_groups');
		$res['users']=$this->cm->user_shop('users_groups');
    $res['shop']=$this->cm->lists('shops');

		//$res['data']=$this->cm->shop_user('shops_user');

        $this->load->view('Shop_user/index',$res);
	}
	public 	function ManageRec()
	{
		 $valid=$this->form_validation->run(  'Shops_users_rules');

     if($valid ==true)
     	  {
     	  	 $rid=$this->input->post('recId');
            if(!empty($rid))
            {
                 $array=array(
                    // 'id'=> $this->input->post('country_id'),
                     'shops_id'=>$this->input->post('shops'),
                     'user_id'=>$this->input->post('users')
                   ); 
                  $recordid=array('shops_user_id'=>$rid);
      
     
     $res= $this->cm->update('shops_users',$array, $recordid);
     if($res==true){
       $this->session->set_flashdata('success','Successfully Updated!');
      }
     else{
  	         $this->session->set_flashdata('er','An Error occure!');
         }
            }
     	  

       else  {
       $array=array(
                    // 'id'=> $this->input->post('country_id'),
                     'shops_id'=>$this->input->post('shops'),
                     'user_id'=>$this->input->post('users')
                   ); 
      
            
     $res= $this->cm->insert('shops_users',$array);
     if($res==true){
       $this->session->set_flashdata('success','Successfully saved!');
      }
   else{
  	         $this->session->set_flashdata('er','An Error occure!');
         }
      }
      redirect('Shop_user');
    }
     else{
      $res['shop_user']=$this->cm->user_shop_all('users_groups');
      $this->load->view('Shop_user/index',$res);
    }
	}
	public function Edit()
	{
      $id=$_GET['recid'];
      $where=array('shops_user_id'=>$id);
      $res=$this->cm->record('shops_users',$where);
      echo json_encode($res);
	}
	public function delete($id)
	{
            if(!empty($id)){
        	$where = array('shops_user_id' => $id );
        	$res=$this->cm->delete('shops_users',$where);
        	if($res==true){
      		$this->session->set_flashdata('success','Successfully deleted!');
      	}
      	else{
      	$this->session->set_flashdata('er','An Error occure!');	
      	 }
        }
        redirect('Shop_user');
	}
}


?>