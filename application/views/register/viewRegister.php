<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Log in | Register Smart location</title>  
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="<?= base_url('')?>">
      <img src="<?= base_url('assets/images/logo.png') ?>" alt="logosmartlocation" style="width:300px; height:50px">
    </a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

    <form action="../../index.html" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="password" id="password" type="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="passwordBaru" id="passwordBaru" type="password" class="form-control" placeholder="Retype password">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>      

      <div class="row">
        <div class="col-xs-8"></div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  
    <a href="<?php echo base_url(); ?>Login/index" class="text-center">I already have a membership</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<link href="<?= base_url('assets/css/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<link href="<?= base_url('assets/css/tema/css/AdminLTE.min.css') ?>" rel="stylesheet">  

<script src="<?= base_url('assets/js/jQuery/jQuery-2.2.0.min.js') ?>" rel="stylesheet"></script>
<script src="<?= base_url('assets/js/bootstrap/bootstrap.min.js') ?>" rel="stylesheet"></script>

<script type="text/javascript">
  window.onload = function () {
    document.getElementById("password").onchange = validatePassword;
    document.getElementById("passwordBaru").onchange = validatePassword;
     }
     function validatePassword(){
      var pass2=document.getElementById("passwordBaru").value;
      var pass1=document.getElementById("password").value;
      if(pass1!=pass2)
       document.getElementById("passwordBaru").setCustomValidity("Passwords Did not Match, Please Recheck your Passwords");
      else
      document.getElementById("passwordBaru").setCustomValidity('');
     }
</script>

</body>
</html>
