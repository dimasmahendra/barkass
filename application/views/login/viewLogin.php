<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Log in | Login Merchand</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <style type="text/css">
    .inputGroupContainer .form-control-feedback {
      top: 0px !important;
      right: 10px !important;
  }
  </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?= base_url('')?>">
      <img src="<?= base_url('assets/images/logo.png') ?>" alt="logosmartlocation" style="width:300px; height:50px">
    </a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">   

  <?php if($this->session->flashdata('success')){?> 
    <div class="alert alert-success alert-dismissible"><i class="icon fa fa-check"></i>  
  <?php echo $this->session->flashdata('success')?> 
    </div><?php } ?>

    <?php if($this->session->flashdata('message')){?> 
        <div class="alert alert-danger">  
    <?php echo $this->session->flashdata('message')?> 
        </div><?php } ?>

    <form name="loginForm" id="loginForm" enctype="multipart/form-data" method="POST" action="<?php echo base_url(); ?>Login/loginAdmin">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" id="email" name="email" placeholder="Email Address" required>        
      </div>
      <div class="form-group has-feedback">
        <input name="password" id="password" type="password" class="form-control" placeholder="Password" required>       
      </div>
      <div class="form-group inputGroupContainer">
        <select class="form-control" id="level" name="level" required>
          <option value="">- Pilih Masuk Sebagai -</option>
          <option value="admin">Admin</option>
          <option value="gudang">Gudang</option>
        </select>
      </div>
      <div class="row">
        <div class="col-xs-8">          
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>    
  </div>
  <!-- /.login-box-body -->
</div>

<link href="<?= base_url('assets/css/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
<link href="<?= base_url('assets/css/bootstrap/css/bootstrapValidator.css') ?>" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<link href="<?= base_url('assets/css/tema/css/AdminLTE.min.css') ?>" rel="stylesheet">  

<script src="<?= base_url('assets/js/jQuery/jQuery-2.2.0.min.js') ?>" rel="stylesheet"></script>
<script src="<?= base_url('assets/js/bootstrap/bootstrap.min.js') ?>" rel="stylesheet"></script>
<script src="<?= base_url('assets/js/bootstrapValidator/bootstrapValidator.js') ?>" rel="stylesheet"></script>

<script type="text/javascript">
$(document).ready(function() {
    $('#loginForm')
        .bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                email: {
                        validators: {
                            notEmpty: {
                                message: 'The email address is required and can\'t be empty'
                            },
                            emailAddress: {
                                message: 'The input is not a valid email address'
                            }
                        }
                    },                
                password: {
                    validators: {
                        notEmpty: {
                            message: 'The password is required and can\'t be empty'
                        },                        
                    }
                },                                         
            }
        })        
});
</script>