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

        <a id="btnAdd" title="Add New Device" class="btn btn-primary">Add Shop Timing</a>
      </div>
        <div class="">
          <div class="clearfix"></div>

          <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Devices</h2>
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
                        <th> Shitfting </th>
                        <th> Starting Time </th>
                        <th> Ending Tine</th>
                        <th> Shop</th>
                        <th> Action </th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php foreach ($select as $key) {?>
                        <tr><td><?php echo $key['shift'];?></td>
                        <td><?php echo $key['start_time'];?></td>
                        <td><?php echo $key['end_time'];?></td>
                        <td><?php echo $key['name'];?></td>
                        <td>
                       <?php //echo base_url('Devices/Edit/'.$key['id']);?>
                        <a value="<?php echo $key['id']; ?>" title="Edit" class="Edit btn btn-warning">Edit</a> 
                        <a class="btn btn-danger" onclick="return confirm('Are you sure?');" href="<?php echo base_url('Shop_timing/Delete/'.$key['id']);?>">Delete</a>
                        </td>
                        </tr>
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
        <h4 class="modal-title" id="formid">Add Shop timing</h4>
      </div>
      <div class="modal-body">
      <div class="" role="main">
        <div class="">

          <form  action="Shop_timing/ManageRec" method="POST"  data-parsley-validate class="form-horizontal form-label-left">
                  
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_content">
                  <br />
                    <input name="recId" type="hidden" value="<?php if(isset($id)){ echo $id; }?>">
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Shift Time <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      <select class="form-control" name="shift" id="shift">
                        <option value=""> Select Shifting </option>
                        <option> Morning  </option>
                        <option> Evening  </option>
                        <option> Night    </option>
                      </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Start Time <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="start_time" id="start_time" required class="form-control col-md-7 col-xs-12 time start">
                      </div>

                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> End Time <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="end_time" id="end_time" required class="form-control col-md-7 col-xs-12 time end">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Shop <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      <select class="form-control" name="shop" id="shop">
                      <option value=""> Selcet Shop </option>
                      <?php foreach ($shop as  $value) { 
                         ?>
                     <option value="<?php echo $value->shop_id?>"><?php echo $value->name ?></option>
                     <?php  } ?>
                      </select>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Save changes">
      </div>
      </form>
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
              var id=$(this).attr('value');
              $.ajax({
                url:'<?php echo base_url("Shop_timing/Edit") ?>',
                type:"GET",
                datatype:'JSON',
                data:{recid:id},
                success:function(data){
                  console.log(data);
                  var record=JSON.parse(data);
                  $("[name='recId']").val(record.id);
                  $("#shift").val(record.shift);
                  $("#start_time").val(record.start_time);
                  $("#end_time").val(record.end_time);
                  $("#shop").val(record.shops_id);
                  $("#form").modal();
                }
              });
            });


           


            $('#btnAdd').on('click', function () {
              $("[name='recId']").val('');
              $("#start_time").val('');
              $('#end_time').val('');
              $('#shop').val('');
            $('#form').modal()
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

