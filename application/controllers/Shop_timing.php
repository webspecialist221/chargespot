  <?php 
  class Shop_timing extends CI_Controller
  {
  	
  	function __construct()
  	{
  		parent::__construct();
      $this->load->model('shop_timing_model','shop');
  	}
  	function index()
  	{
      $data['select'] = $this->shop->select();
      $data['shop']   = $this->shop->get();
      $this->load->view('shop_timing/index',$data);
  	}

    function ManageRec()
    {
      $valid=$this->form_validation->run('shop_timing');
      if($valid ==true)
       {
        $rid=$this->input->post('recId');
        if(!empty($rid))
        {
           $data = array('shift' =>$this->input->post('shift'),
                         'start_time' =>$this->input->post('start_time'),
                         'end_time' =>$this->input->post('end_time'),
                         'shops_id' =>$this->input->post('shop')

            );
          $recordid=array('id'=>$rid);
          $res = $this->shop->update('shops_timings',$data,$recordid);
          if($res==true){
            $this->session->set_flashdata('success','Successfully updated!');
          }
          else{
          $this->session->set_flashdata('er','An Error occure!'); 
          }
          }
        else{

          $data = array('shift' =>$this->input->post('shift'),
                        'start_time' =>$this->input->post('start_time'),
                        'end_time' =>$this->input->post('end_time'),
                        'shops_id' =>$this->input->post('shop'));
          $res=$this->shop->insert('shops_timings',$data);
          if($res==true){
            $this->session->set_flashdata('success','Successfully saved!');
          }
          else{
          $this->session->set_flashdata('er','An Error occure!'); 
          }
        }
         redirect('Shop_timing');
       }
    else{
        $res['shop'] = $this->shop->get();
        $res['select']=$this->shop->select('shops_timings');
        $this->load->view('Shop_timing/index',$res);
      }
       
    }

    function Edit()
    {
        $id    = $_GET['recid'];
        $where = array('id'=>$id);
        $res   = $this->shop->record('shops_timings',$where);
        echo json_encode($res);
    }

    function Delete($id)
    {
          if(!empty($id)){
            $where = array('id' => $id );
            $res=$this->shop->delete('shops_timings',$where);
            if($res==true){
            $this->session->set_flashdata('success','Successfully deleted!');
            redirect('Shop_timing');
          }
     }
   }
  }
  ?>