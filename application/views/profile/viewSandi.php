  <style type="text/css">
      hr.infowin {
      border: 0;
      border-bottom: solid 1px rgba(160, 160, 160, 0.3);
      margin-top: 0.1px;
      margin-bottom: 15px;
    }
  </style>

  
  <div class="content-wrapper">
    <section class="content">
      <div class="row">        
        <div class="col-md-12">

          <?php if($this->session->flashdata('success')){?> 
            <div class="alert alert-success alert-dismissible"><i class="icon fa fa-check"></i>  
          <?php echo $this->session->flashdata('success')?> 
            </div><?php } ?>

          <?php if($this->session->flashdata('message')){?> 
            <div class="alert alert-danger alert-dismissible"><i class="icon fa fa-ban"></i>  
          <?php echo $this->session->flashdata('message')?> 
            </div><?php } ?>

          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Ganti Password</h3>        
            </div>

            <form id="passwordForm" class="form-horizontal" method="POST" action="<?php echo base_url(); ?>Profile/updateSandi"> 
                              
              <input type="hidden" id="id_user" name="id_user" value="<?php echo $id_user?>">

              <div class="box-body">                  
                  <div class="form-group">
                    <br><label class="control-label col-sm-2" for="username">Password Lama</label>
                    <div class="col-md-3">
                      <input type="text" class="form-control" id="password" name="password">
                    </div>
                  </div>
              </div><hr class="infowin">              

              <div class="box-body">                  
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="password">Password Baru</label>
                    <div class="col-md-3"> 
                      <input type="text" class="form-control" id="passwordBaru" name="passwordBaru">
                    </div>
                  </div> 
              </div>

              <div class="box-body">                  
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="confirmPassword">Confirm Password</label>
                    <div class="col-md-3"> 
                      <input type="text" class="form-control" id="confirmPassword" name="confirmPassword">
                    </div>
                  </div> 
              </div>                             

              <div class="box-footer">                
                <div class="pull-right">
                  <button class="btn btn-default"><a href="<?php echo base_url(); ?>Dashboard/index">Cancel</a></button>
                  <button type="submit" id="submit" class="btn btn-success">Submit</button>
                </div>
              </div>
            </form>
                                   
          </div>
        </div>
      </div>  
    </section>
  </div> 

  
  <script>  
  $().ready(function() {
    $("#passwordForm").validate({
      rules: {
        password: {
          required: true,
          minlength: 5
        },
        confirmPassword: {
          required: true,
          minlength: 5,
          equalTo: "#passwordBaru"
        },
      },
      messages: {        
        password: {
          required: "Please provide a password",
          minlength: "Your password must be at least 5 characters long"
        },
        confirmPassword: {
          required: "Please provide a password",
          minlength: "Your password must be at least 5 characters long",
          equalTo: "Please enter the same password as above"
        },       
      }
    });       
  });

  </script>
