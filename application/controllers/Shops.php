<?php 
/**
* 
*/
class Shops extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Common_model','cm');
	}
	function index()
	{
       $res['data']=$this->cm->shop_join('shops');
       $res['country']=$this->cm->lists('countries');
      // $res['city']=$this->cm->lists('city');

       $this->load->view('shops/index',$res);
	}
	function ManageRec()
	{
    $valid=$this->form_validation->run('Shops_form_rules');

     if($valid ==true)
     {
      $rid=$this->input->post('recId');
      if(!empty($rid))
      {
         
        if(!empty($_FILES['userfile']['name']))
        {
          $config['upload_path'] = './images/shop_images';
          $config['allowed_types'] = 'jpeg|jpg|gif|png';
          $config['max_size'] = '0';
          $config['max_width']  = '';
          $config['max_height']  = '';
          $this->load->library('upload', $config);

          if (!$this->upload->do_upload())
          {
                $data['error'] = array('error' => $this->upload->display_errors());
               $this->load->view('Shops/index',$data);
          }
           else
          {
             $img = array('upload_data' => $this->upload->data());
          }

        }
        else
        {
           $img=$this->input->post('picId');
        }


        /*===========================================*/
        if(!empty($img['upload_data']['file_name']))
        {
         unlink('images/shop_images/'.$this->input->post('picId'));
         $data = array(
            'name' =>$this->input->post('txtShopName'),
            'latitude' =>$this->input->post('txtLaintitude'),
            'longitude' =>$this->input->post('txtLongtitude'),
            'image_url' =>$img['upload_data']['file_name'],
            'address' =>$this->input->post('txtAddress'),
            'city' =>$this->input->post('txtCity'),
            'country' =>$this->input->post('txtCountry'),
            'postal_code' =>$this->input->post('txtPostal'),
            'phone' =>$this->input->post('txtPhone'),
            'type' =>$this->input->post('txtType')
          );
        }
        else{
          $data = array(
            'name' =>$this->input->post('txtShopName'),
            'latitude' =>$this->input->post('txtLaintitude'),
            'longitude' =>$this->input->post('txtLongtitude'),
            'image_url' =>$img,
            'address' =>$this->input->post('txtAddress'),
            'city' =>$this->input->post('txtCity'),
            'country' =>$this->input->post('txtCountry'),
            'postal_code' =>$this->input->post('txtPostal'),
            'phone' =>$this->input->post('txtPhone'),
            'type' =>$this->input->post('txtType')
          );
        }

         $recordid=array('shop_id'=>$rid);
      	$res=$this->cm->update('shops',$data,$recordid);
      	if($res==true){
      		$this->session->set_flashdata('success','Successfully updated!');
      	}
      	else{
      	$this->session->set_flashdata('er','An Error occure!');	
      	}
      }
      else{

        if(!empty($_FILES['userfile']['name']))
        {
          $config['upload_path'] = './images/shop_images';
          $config['allowed_types'] = 'jpeg|jpg|gif|png';
          $config['max_size'] = '0';
          $config['max_width']  = '';
          $config['max_height']  = '';
          $this->load->library('upload', $config);

          if (!$this->upload->do_upload())
          {
                $data['error'] = array('error' => $this->upload->display_errors());
               $this->load->view('Shops/index',$data);
          }
           else
          {
             $img = array('upload_data' => $this->upload->data());
          }

        }
        else
        {
           $img='';
        }


        /*===========================================*/
        if(!empty($img['upload_data']['file_name']))
        {
      	$data = array(
            'name' =>$this->input->post('txtShopName'),
            'latitude' =>$this->input->post('txtLaintitude'),
            'longitude' =>$this->input->post('txtLongtitude'),
            'image_url' =>$img['upload_data']['file_name'],
            'address' =>$this->input->post('txtAddress'),
            'city' =>$this->input->post('txtCity'),
            'country' =>$this->input->post('txtCountry'),
            'postal_code' =>$this->input->post('txtPostal'),
            'phone' =>$this->input->post('txtPhone'),
            'type' =>$this->input->post('txtType')
          );
        }
        else{
          $data = array(
            'name' =>$this->input->post('txtShopName'),
            'latitude' =>$this->input->post('txtLaintitude'),
            'longitude' =>$this->input->post('txtLongtitude'),
            'image_url' =>$img,
            'address' =>$this->input->post('txtAddress'),
            'city' =>$this->input->post('txtCity'),
            'country' =>$this->input->post('txtCountry'),
            'postal_code' =>$this->input->post('txtPostal'),
            'phone' =>$this->input->post('txtPhone'),
            'type' =>$this->input->post('txtType')
          );
        }
        // print_r($data);die();
        $res=$this->cm->insert('shops',$data);
      	if($res==true){
      		$this->session->set_flashdata('success','Successfully saved!');
      	}
      	else{
      	$this->session->set_flashdata('er','An Error occure!');	
      	}
      
    }
       redirect('shops');
    }

    else{
      $res['data']=$this->cm->lists('shops');
      $this->load->view('shops/index',$res);
    }
     
	}
	function Edit()
	{
      $id=$_GET['recid'];
     // $where=array('id'=>$id);
      $res=$this->cm->shop_join_one($id);
      echo json_encode($res);
	}
	function UpdateRec()
	{

	}
	function Delete($id)
	{
        if(!empty($id)){
        	$where = array('shop_id' => $id );
          $pic=$this->cm->record('shops',$where);
          if(!empty($pic['image_url']))
          unlink('images/shop_images/'.$pic['image_url']);
        	$res=$this->cm->delete('shops',$where);
        	if($res==true){
      		$this->session->set_flashdata('success','Successfully deleted!');
      	}
      	else{
      	$this->session->set_flashdata('er','An Error occure!');	
      	 }
        }
        redirect('shops');
	}
   public function cityAjax(){
      $id =$this->input->post('id');
      $run['run'] = $this->cm->select_one('city','country_id',$id);
      $this->load->view('Shops/city',$run);
    }
}


 ?>