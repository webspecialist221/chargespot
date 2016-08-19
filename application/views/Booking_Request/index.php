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
          <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">Search Request</div>
            <div class="panel-body">
              <div class="form-horizontal">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">OTP</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtOTP" placeholder="OTP">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="button" id="btnSearch" class="btn btn-default">Search</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="Table">
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Requests</h2>
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
                      <th>Shop</th>
                      <th>Request by</th>
                      <th>Time</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
              </div>
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
        <h4 class="modal-title" id="formid">Add Device</h4>
      </div>
      <div class="modal-body">
      <div class="" role="main">
        <div class="">

          <form  action="Booking_Request/Assign" method="POST"  data-parsley-validate class="form-horizontal form-label-left">
                  
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_content">
                  <br />
                    <input name="userId" type="hidden" value="">
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Device ID <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="ddlDeviceId" required class="form-control col-md-7 col-xs-12">
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
</div>
</div>
</div>
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
    $("table tbody").on('click','button',function(){
    var id=$('.Edit').val();
    $.ajax({
      url:'<?php echo base_url("Booking_Request/GetDevice"); ?>',
      type:'GET',
      datatype:'JSON',
      data:{shopId:id},
      success:function(data){
        $('[name="ddlDeviceId"]').empty();
        $('[name="ddlDeviceId"]').append('<option value=""> Select Device </option>');
        $('[name="ddlDeviceId"]').append(data);
        $("#form").modal();
      }
    });
  });
  $("#btnSearch").on('click',function(){
  var id=$("#txtOTP").val();
  $.ajax({
  url:'<?php echo base_url("Booking_Request/RetriveRecord") ?>',
  type:"GET",
  datatype:'JSON',
  data:{recid:id},
  success:function(data){
  console.log(data);
  var record=JSON.parse(data);
  var status;
  var button;
    if(record.status==0)
    {
     status='<b style="color:green">Not Expired</b>';
     button="<button value='"+record.shops_id+"' class='Edit btn btn-primary'>Assign Device</button>";
    }
    else
    {
      status="<b style='color:red'>Expired</b>";
      button="<button value='' class='Edit btn btn-danger' disabled>Assign Device</button>";
    }
  $('table tbody').html("<tr><td>"+record.name+"</td><td>"+record.first_name+" "+record.last_name+"</td><td>"+record.req_time+"</td><td>"+status+"</td><td>"+button+"</td></tr>");
  $("[name='userId']").val(record.user_id);
  }
  });
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