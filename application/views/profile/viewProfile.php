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
            <h3 class="box-title">Profile Merchand</h3>        
          </div>            

          <form id="userForm" class="form-horizontal" method="POST" action="<?php echo base_url(); ?>Profile/updateProfile"> 
                              
              <input type="hidden" id="id_user" name="id_user" value="<?php echo $id_user?>">
              <div class="box-body">                  
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="username">Username</label>
                    <div class="col-md-3">
                      <input type="text" class="form-control" id="username" name="username" value="<?php echo $username; ?>">
                    </div>
                  </div>
              </div>

              <div class="box-body">                  
                  <div class="form-group">
                  <label class="control-label col-sm-2" for="email">Email</label>
                  <div class="col-md-3"> 
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
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
  $.validator.addMethod(
    "regex",
    function(value, element, regexp) {
      var re = new RegExp(regexp);
      return this.optional(element) || re.test(value);
    },
    "Hanya Alfabet, Angka, underscore dan titik."
  );
  $().ready(function() {
    $("#userForm").validate({
      rules: {
        username:  {
          required: true,
          minlength: 3,
          regex: "^[a-zA-Z0-9_\.]+$"
        },
        email: {
          required: true,
          email: true
        },
      }
    });       
  });
  </script>

