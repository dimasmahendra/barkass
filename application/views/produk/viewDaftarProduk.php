<link href="<?= base_url('assets/css/tabel/jquery.dataTables.min.css') ?>" rel="stylesheet">
<link href="<?= base_url('assets/css/tabel/select.dataTables.css') ?>" rel="stylesheet">

<script src="<?= base_url('assets/js/tabel/jquery.dataTables.min.js') ?>" rel="stylesheet"></script>
<script src="<?= base_url('assets/js/tabel/dataTables.bootstrap.min.js') ?>" rel="stylesheet"></script>
<script src="<?= base_url('assets/js/tabel/dataTables.select.js') ?>" rel="stylesheet"></script>

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
				  <a class="btn-sm btn-primary" href ="<?= base_url('Produk/index') ?>"><i class="fa fa-plus"></i>&nbsp Add</a>
				  <div class="pull-right">
					 <h2 class="box-title" style="font-size: 32px;"><b>Daftar Barang</b></h2>
				  </div>
				</div>

				<div class="box-body">
				  <table id="tabelPenitip" class="display" cellspacing="0" width="100%">
					 <thead>
						<tr>
						  <th>No</th>                 
						  <th>Nama Penitip</th>              
						  <th>No Penitip</th>              
						  <th>Nama Barang</th>
						  <th>Berat</th> 
						  <th>Harga Jual</th>
						  <th width="12%">Aksi</th>
						</tr>
					 </thead>
					 <tbody>
						<?php
						 $no = 1;            
						 foreach ($result['data'] as $row)
						 { ?>
							<tr>
							  <td><?php echo $no;$no++; ?></td>
							  <td><?php echo $row['namapenitip']; ?></td> 
							  <td><?php echo $row['unikid']; ?></td> 
							  <td><?php echo $row['nama']; ?></td>
							  <td><?php echo $row['berat']; ?></td>
							  <td><?php echo "Rp ".format_rupiah($row['hargajual']); ?></td>
							  <td>
							  	<a class="btn-sm btn-warning" href ="<?= base_url('Produk/editProduk') ?>/<?php echo $row['id']?>">Edit</a>
							  	<a class="btn-sm btn-danger" href ="<?= base_url('Produk/hapusProduk') ?>/<?php echo $row['id']?>">Hapus</a>
							  </td>
							</tr>
						<?php } ?>            
					 </tbody>              
				  </table>
				</div>                                  
			 </div>
		  </div>
		</div>  
	 </section>
  </div>

<script type="text/javascript">
  $(document).ready(function() {
	 var table = $('#tabelPenitip').DataTable();
 
	 $('#tabelPenitip tbody').on( 'click', 'tr', function () {
		  if ( $(this).hasClass('selected') ) {
				$(this).removeClass('selected');
		  }
		  else {
				table.$('tr.selected').removeClass('selected');
				$(this).addClass('selected');
		  }
	 } );
 
	 $('#hapus').click( function () {
		  table.row('.selected').remove().draw( false );
	 } );
} );
</script>