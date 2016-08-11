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

      </div>
        <div class="">
          <div class="clearfix"></div>

          <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Users</h2>
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
                        <th>Name</th>
                        <th>Phone</th>
                        <th>city</th>
                        <th>Postal Code</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($users as $user){ ?>
                        <tr>
                          <td><?= $user->first_name." ".$user->last_name ?></td>
                          <td><?= $user->phone ?></td>
                          <td><?= $user->city ?></td>
                          <td><?= $user->postal_code ?></td>
                          <td>
                            <a href="" class="btn btn-success">Assign Role</a>
                            <a href="" class="btn btn-danger">Delete</a>
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
        <h4 class="modal-title" id="formid">Add Shop</h4>
      </div>
      <div class="modal-body">
      <div class="" role="main">
        <div class="">
         
          <form  action="Shops/ManageRec" method="POST" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                  
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_content">
                  <br />
                    <input name="recId" type="hidden" value="<?php if(isset($id)){ echo $id; }?>">
                    <input name="picId" type="hidden" value="<?php if(isset($image_url)){ echo $image_url; }?>">
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Type<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="txtType" class="form-control">
                              <option value="">Select Type</option>
                              <option value="1">Shop</option>
                              <option value="2">Resturant</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Shop Name<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="txtShopName" id="txtShopName" required class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Laintitude<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="txtLaintitude" id="txtLaintitude" required class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Longtitude<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="txtLongtitude" id="txtLongtitude" required class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Address<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="txtAddress" id="txtAddress" required class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                   <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Country<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      <select name="txtCountry" class="form-control" id="txtCountry">
                      <option value="">Select Country</option>
                      <?php foreach ($country as $key) {?>

                     <option value="<?=$key['country_id']?>"><?= $key['country_name'] ?></option>
                     <?php } ?>
                         </select>
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">City<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      <select name="txtCity" class="form-control" id="txtCity">
                       <option value="">Select City</option>
                      <?php foreach ($city as $key) {?>

                     <option value="<?=$key['id']?>"><?= $key['cityName'] ?></option>
                     <?php } ?>
                    
                         </select>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Postal Code<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="txtPostal" id="txtPostal" required class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Phone<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="txtPhone" id="txtPhone" required class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="file" name="userfile" class="form-control col-md-7 col-xs-12" value="">
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
             $("[name='userfile']").change(function() {
                var name=$(this).val();
                $("#pic").val(name);
              });
            $("#btnAdd").click(function() {
               $("#formid").empty().text("Add Shop");
               $("[name='recId']").val('');
                  $("#txtShopName").val('');
                  $("#txtType").val('');
                  $("#txtLaintitude").val('');
                  $("#txtLongtitude").val('');
                  $("#txtAddress").val('');
                  $("#txtCity").val('');
                  $("#txtCountry").val('');
                  $("#txtPostal").val('');
                  $("#txtPhone").val('');
            });

            $(".Edit").on('click',function(){
              $("#formid").empty().text("Update Shop");

              var id=$(this).attr('value');
              $.ajax({
                url:'<?php echo base_url("Shops/Edit") ?>',
                type:"GET",
                datatype:'JSON',
                data:{recid:id},
                success:function(data){
                  console.log(data);
                  var record=JSON.parse(data);
                  $("[name='recId']").val(record.shop_id);
                  $("[name='picId']").val(record.image_url);
                  $("#txtShopName").val(record.name);
                  $("#txtType").val(record.type);
                  $("#txtLaintitude").val(record.latitude);
                  $("#txtLongtitude").val(record.longitude);
                  $("#txtAddress").val(record.address);
                  
                  $("#txtCountry").val(record.country);
                  $("#txtCity").val(record.city);
                  $("#txtPostal").val(record.postal_code);
                  $("#txtPhone").val(record.phone);
                  $("#form").modal();
                }
              });
            });

            $('#btnAdd').on('click', function () {
              $("#recId").val('');
              $("#txtShopName").val(record.name);
                  $("#txtType").val('');
                  $("#txtLaintitude").val('');
                  $("#txtLongtitude").val('');
                  $("#txtAddress").val('');
                  
                  $("#txtCountry").val('');
                  $("#txtCity").val('');
                  $("#txtPostal").val('');
                  $("#txtPhone").val('');
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

    $('#txtCountry').change(function(){
    var selected_value = $(this).val();
    $.ajax({
        url:'Shops/cityAjax',
        type:'POST',
        data:{
        id: selected_value
    },
        success:function(about_det){
            $('#txtCity').empty();
            $('#txtCity').append('<option> Select City </option>');
            $('#txtCity').append(about_det);
        }
    });
  });  
          TableManageButtons.init();
        </script>
      <?php $this->load->view("template/footer.php"); ?>

