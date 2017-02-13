  <div class="content-wrapper">
	 <section class="content">
		<?php if($this->session->flashdata('success')){?> 
		  <div class="alert alert-success alert-dismissible"><i class="icon fa fa-check"></i>  
		<?php echo $this->session->flashdata('success')?> 
		  </div><?php } ?>

		<?php if($this->session->flashdata('message')){?> 
		  <div class="alert alert-danger alert-dismissible"><i class="icon fa fa-ban"></i>  
		<?php echo $this->session->flashdata('message')?> 
		  </div><?php } ?>
		  
		<div class="row">        
		  <div class="col-md-12">          
			 
			 <div class="box box-danger">
				<div class="box-header with-border">
				  <a class="btn-sm btn-primary" href ="<?= base_url('Penitip/index') ?>"><i class="fa fa-plus"></i>&nbsp Add</a>
				  <div class="pull-right">
					 <h2 class="box-title" style="font-size: 32px;"><b>Daftar Barang</b></h2>
				  </div>
				</div>

				<div class="box-body">
				  
				</div>                                  
			 </div>
		  </div>
		</div>  
	 </section>
  </div>