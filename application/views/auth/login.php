<!DOCTYPE html>
<html lang="en">
<base href="<?= base_url();?>">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Gentallela Alela! | </title>

  <!-- Bootstrap core CSS -->

  <link href="assets/css/bootstrap.min.css" rel="stylesheet">

  <link href="assets/fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="assets/css/custom.css" rel="stylesheet">
  <link href="assets/css/icheck/flat/green.css" rel="stylesheet">


  <script src="assets/js/jquery.min.js"></script>

  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body style="background:#F7F7F7;">

  <div class="">
    <a class="hiddenanchor" id="toregister"></a>
    <a class="hiddenanchor" id="tologin"></a>

    <div id="wrapper">
      <div id="login" class="animate form">
        <section class="login_content">
           <?php echo form_open("auth/login"); ?>
            <h1>Login Form</h1>
            <div>
              <?php echo form_input($identity,'',['class'=>'form-control','placeholder'=>'Email']); ?>
            </div>
            <div>
              <?php echo form_input($password,'',['class'=>'form-control','placeholder'=>'Password']); ?>
            </div>

            <div>
               <label for="">Remember</label>
               <?php echo form_checkbox('remember', '1', FALSE,['class'=>'form_control']); ?>
            </div>
            <div>
              <!-- <a class="btn btn-default submit" href="index.html">Log in</a> -->
              <input type="submit" value="Login" class="btn btn-default submit">
              <a class="reset_pass" href="#">Lost your password?</a>
            </div>
            <div class="clearfix"></div>
            <div class="separator">

              <div class="clearfix"></div>
              <br />
              <div>
                <h1><i class="fa fa-paw" style="font-size: 26px;"></i> Gentelella Alela!</h1>

                <p>©2015 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
              </div>
            </div>
          <?php echo form_close(); ?>
          <!-- form -->
        </section>
        <!-- content -->
      </div>
    </div>
  </div>

</body>

</html>







































<!-- <div class='mainInfo'> -->

	<!-- <div class="pageTitle">Login</div>
    <div class="pageTitleBorder"></div>
	<p>Please login with your email address and password below.</p>

	<div id="infoMessage"><?php echo $message; ?></div>

    <?php echo form_open("auth/login"); ?>

      <p>
      	<label for="email">Email:</label>
      	<?php echo form_input($email); ?>
      </p>

      <p>
      	<label for="password">Password:</label>
      	<?php echo form_input($password); ?>
      </p>

      <p>
	      <label for="remember">Remember Me:</label>
	      <?php echo form_checkbox('remember', '1', FALSE); ?>
	  </p>


      <p><?php echo form_submit('submit', 'Login'); ?></p>


    <?php echo form_close(); ?>

</div> -->
