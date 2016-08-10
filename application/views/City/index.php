<?php $this->load->view("template/head.php"); ?>
<body class="nav-md">

  <div class="container body">


    <div class="main_container">

      <?php $this->load->view('template/sidebar.php'); ?>

      <!-- top navigation -->
      <?php $this->load->view('template/top_nav.php'); ?>
      <!-- /top navigation -->


      <!-- page content -->
    
      <div class="right_col" role="main" style="min-height:650px;">
       <div style="margin-top:6%;">  
      <?php $this->load->view('errors/errors_template') ?>
     </div>
      <div>
      <!-- href="<?php echo base_url('Devices/Add'); ?>" -->

        <a id="btnAdd"  title="Add New Device" class="btn btn-primary">Add New City</a>
      </div>
        <div class="">
          <div class="clearfix"></div>

          <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>City</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        
                        <th>Country</th>
                        <th>City</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($data as $key) {?>
                        <tr><td><?php echo $key['country_name'];?></td>
                        <td><?php echo $key['cityName'];?></td>
                        <td >
                       <?php //echo base_url('Devices/Edit/'.$key['id']);?>
                        <a value="<?php echo $key['id']; ?>" title="Edit" class="Edit btn btn-warning" >Edit</a> <a class="btn btn-danger" onclick="return confirm('Are you sure?');" href="<?php echo base_url('City/Delete/'.$key['id']);?>">Delete</a>
                        </td></tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
                </div>
              </div>
            </div>
      <!-- /page content -->
      <!-- Modal for insertion and updation -->
      <div class="modal fade" tabindex="-1" role="dialog" id="form" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="formid">Add City</h4>
      </div>
      <div class="modal-body">
      <div class="" role="main">
        <div class="">
           <?php echo form_open('City/ManageRec',['class'=>'form-horizontal form-label-left']); ?>
          
         <!--  <form  action="Devices/ManageRec" method="POST"  data-parsley-validate class="form-horizontal form-label-left"> -->
                  
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_content">
                  <br />
                    <input name="recId" type="hidden" value="<?php if(isset($id)){ echo $id; }?>">
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Country <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                       <?php 
                       $option['select']='Select Country';
                        foreach ($country as $value) {
                             $option[$value->country_id] =$value->country_name;
                        
                           }  ?>

                     <?php  echo form_dropdown('country', $option,'',['id'=>'country','required class'=>'form-control col-md-7 col-xs-12']);  ?>
                    </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ciry <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      <?= form_input(['name'=>'city','id'=>'city','required class'=>'form-control col-md-7 col-xs-12']); ?>
                       
                      </div>
                    </div>
                  
                </div>
              </div>
            </div>
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" name="submit" class="btn btn-primary" value="Save changes">
      </div>
      <?= form_close(); ?>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End of model -->
      <!-- footer content -->
        <script src="assets/js/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/js/datatables/dataTables.bootstrap.js"></script>
        <script src="assets/js/datatables/dataTables.buttons.min.js"></script>
        <script src="assets/js/datatables/buttons.bootstrap.min.js"></script>
        <script src="assets/js/datatables/jszip.min.js"></script>
        <script src="assets/js/datatables/pdfmake.min.js"></script>
        <script src="assets/js/datatables/vfs_fonts.js"></script>
        <script src="assets/js/datatables/buttons.html5.min.js"></script>
        <script src="assets/js/datatables/buttons.print.min.js"></script>
        <script src="assets/js/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="assets/js/datatables/dataTables.keyTable.min.js"></script>
        <script src="assets/js/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/js/datatables/responsive.bootstrap.min.js"></script>
        <script src="assets/js/datatables/dataTables.scroller.min.js"></script>
         <script>
          var handleDataTableButtons = function() {
              "use strict";
              0 !== $("#datatable-buttons").length && $("#datatable-buttons").DataTable({
                dom: "Bfrtip",
                buttons: [{
                  extend: "copy",
                  className: "btn-sm"
                }, {
                  extend: "csv",
                  className: "btn-sm"
                }, {
                  extend: "excel",
                  className: "btn-sm"
                }, {
                  extend: "pdf",
                  className: "btn-sm"
                }, {
                  extend: "print",
                  className: "btn-sm"
                }],
                responsive: !0
              })
            },
            TableManageButtons = function() {
              "use strict";
              return {
                init: function() {
                  handleDataTableButtons()
                }
              }
            }();
        </script>
        <script type="text/javascript">
          $(document).ready(function() {
            $(".Edit").on('click',function(){
                $('#formid').text('Update City');
              var id=$(this).attr('value');
              $.ajax({
                url:'<?php echo base_url("City/Edit") ?>',
                type:"GET",
                datatype:'JSON',
                data:{recid:id},
                success:function(data){
                  console.log(data);
                  var record=JSON.parse(data);
                  $("[name='recId']").val(record.id);
                  $("#country").val(record.country_id);
                  $("#city").val(record.cityName);
                  $("#form").modal();
                }
              });
            });
            $('#btnAdd').on('click', function () {
              $('#formid').text('Add City');
              $("#recId").val('');
            $('#form').modal();
             });
            $('#datatable').dataTable();
            $('#datatable-keytable').DataTable({
              keys: true
            });
            $('#datatable-responsive').DataTable();
            $('#datatable-scroller').DataTable({
              ajax: "js/datatables/json/scroller-demo.json",
              deferRender: true,
              scrollY: 380,
              scrollCollapse: true,
              scroller: true
            });
            var table = $('#datatable-fixed-header').DataTable({
              fixedHeader: true
            });
          });
          TableManageButtons.init();
        </script>
      <?php $this->load->view("template/footer.php"); ?>

