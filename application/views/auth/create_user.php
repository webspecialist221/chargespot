<?php $this->load->view("template/head.php"); ?>
<body class="nav-md">

  <div class="container body">


    <div class="main_container">

      <?php $this->load->view('template/sidebar.php'); ?>

      <!-- top navigation -->
      <?php $this->load->view('template/top_nav.php'); ?>
      <!-- /top navigation -->


      <!-- page content -->
      <div class="right_col" role="main" style="min-height:660px;">
        <!-- Message start       -->
        <?php if($this->session->flashdata('success')){ ?>
        <div class="row">
          <div class="col-md-12">
            <div class="alert alert-success alert-dismissible fade in" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
              </button>
              <strong><?= $this->session->flashdata('success');?></strong>
          </div>            
      </div>
  </div>

  <?php } elseif($this->session->flashdata('error')){ ?>
  <div class="row">
      <div class="col-md-12">
        <div class="alert alert-danger alert-dismissible fade in" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
          </button>
          <strong><?= $this->session->flashdata('error');?></strong>
      </div>      
  </div>
</div>
<?php  } elseif($this->session->flashdata('warning')){  ?>
<div class="row">
  <div class="col-md-12">
    <div class="alert alert-warning alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
      </button>
      <strong><?= $this->session->flashdata('warning');?></strong>
  </div>
</div>
</div>
<?php  } elseif($this->session->flashdata('info')){  ?>
<div class="row">
  <div class="col-md-12">
    <div class="alert alert-info alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
      </button>
      <strong><?= $this->session->flashdata('info');?></strong>
  </div>
</div>
</div>
<?php } ?>
<!-- Message End -->

<!-- Main Content Start -->
<div class="page-title">
  <div class="title_left">
    <h3><?= $title ?></h3>
</div>
</div>
<div class="clearfix"></div>
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Brands</h2>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <br/>

        <?php echo form_open_multipart('auth/create_user',['class'=>'form-horizontal form-label-left']); ?>
          <div class="form-group">
            <?php echo form_label('Country Name','country_id',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']); ?>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <?php echo form_dropdown('country_id',$option,$select,['id'=>'country_id','class'=>'chosen form-control col-md-7 col-xs-12','required'=>'required']); ?>
              <div style="color:red;"><?php echo form_error('country_id'); ?></div>
            </div>
          </div>

          <div class="form-group">
            <?php echo form_label('State Name','state_id',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']); ?>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <?php echo form_dropdown('state_id',$option1,$select1,['id'=>'state_id','class'=>'chosen form-control col-md-7 col-xs-12','required'=>'required']); ?>
              <div style="color:red;"><?php echo form_error('state_id'); ?></div>
            </div>
          </div>

        <div class="form-group">
            <?php echo form_label('Name','name',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']); ?>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <?php echo form_input('name',null,['id'=>'name','class'=>'form-control col-md-7 col-xs-12','required'=>'required']); ?>
              <div style="color:red;"><?php echo form_error('name'); ?></div>
          </div>
        </div>

  <div class="form-group">
    <?php echo form_label('Picture', 'brand_icon',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']); ?>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <?php echo form_upload('userfile', '',['id'=>'brand_icon','class'=>'form-control col-md-7 col-xs-12']); ?>
  </div>
</div>

<div class="form-group">
    <?php echo form_label('Email', 'email',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']); ?>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <?php echo form_input('email',null,['id'=>'email','class'=>'form-control col-md-7 col-xs-12']); ?>
  </div>
</div>

<div class="form-group">
    <?php echo form_label('Phone','phone',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']); ?>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <?php echo form_input('phone',null,['id'=>'phone','class'=>'form-control col-md-7 col-xs-12']); ?>
  </div>
</div>

<div class="form-group">
    <?php echo form_label('Address','address',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']); ?>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <?php echo form_input('address',null,['id'=>'address','class'=>'form-control col-md-7 col-xs-12']); ?>
  </div>
</div>

<div class="form-group">
    <?php echo form_label('City','city',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']); ?>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <?php echo form_input('city',null,['id'=>'city','class'=>'form-control col-md-7 col-xs-12']); ?>
  </div>
</div>

<div class="form-group">
    <?php echo form_label('Password','password',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']); ?>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <?php echo form_password('password',null,['id'=>'password','class'=>'form-control col-md-7 col-xs-12']); ?>
  </div>
</div>

<div class="form-group">
    <?php echo form_label('Confirm Password','password_confirm',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']); ?>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <?php echo form_password('password_confirm',null,['id'=>'password_confirm','class'=>'form-control col-md-7 col-xs-12']); ?>
  </div>
</div>

<div class="form-group">
    <?php echo form_label('Roles','groups',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']); ?>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <?= form_dropdown('groups', $listGroups, '1' ,['id'=>'password_confirm','class'=>'form-control col-md-7 col-xs-12']) ?></div>
</div>

<div class="ln_solid"></div>
<div class="form-group">
    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
      <button type="submit" class="btn btn-primary">Cancel</button>
      <?php if(!empty($record)) {?>
      <input type="hidden" name="id" value="<?= $record['brand_id'];?>">
      <button type="submit" class="btn btn-success">Update</button>
      <?php }else{ ?>
      <button type="submit" class="btn btn-success">Save</button>
      <?php } ?>
  </div>
</div>
<?php echo form_close(); ?>
</div>
</div>
</div>
</div>




<!-- Main Content end -->
</div>
      <!-- /page content -->

      <!-- footer content -->
      <?php $this->load->view("template/footer.php"); ?>