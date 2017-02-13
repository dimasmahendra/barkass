<div class="wrapper">   

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">    

    <!-- Main content -->
    <section class="content">     
      <div class="row">

      <?php if($this->session->flashdata('success')){?> 
        <div class="alert alert-success alert-dismissible"><i class="icon fa fa-check"></i>  
      <?php echo $this->session->flashdata('success')?> 
        </div><?php } ?>

      <?php if($this->session->flashdata('message')){?> 
        <div class="alert alert-danger alert-dismissible"><i class="icon fa fa-ban"></i>  
      <?php echo $this->session->flashdata('message')?> 
        </div><?php } ?>
              
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">            
          <div class="box-body chat" id="chat-box">          
             <img src="<?= base_url('assets/images/pct1.jpg') ?>" class="img-responsives" alt="logosmartlocation"> 
          </div>    
        </section>
        <!-- /.Left col -->
      </div>
    </section>
    <!-- /.content -->
  </div> 
</div>