<link href="<?= base_url('assets/css/tabel/jquery.dataTables.min.css') ?>" rel="stylesheet">
<link href="<?= base_url('assets/css/tabel/select.dataTables.css') ?>" rel="stylesheet">

<script src="<?= base_url('assets/js/tabel/jquery.dataTables.min.js') ?>" rel="stylesheet"></script>
<script src="<?= base_url('assets/js/tabel/dataTables.bootstrap.min.js') ?>" rel="stylesheet"></script>
<script src="<?= base_url('assets/js/tabel/dataTables.select.js') ?>" rel="stylesheet"></script>

  <div class="modal fade" id="modalDetilPenitip" role="dialog">
	 <div class="modal-dialog">
		<div class="modal-content">
		  <div class="box box-widget widget-user-2">                
			 <div class="widget-user-header bg-green">
				<div class="pull-right">
					<a href ="#" id="linkproduk"><button id="tombollihatdetil" class="btn btn-primary btn-sm"><i class="fa fa-eye fa-lg"></i></button>
					</a>
					<a href ="#" class="edit" data-toggle="modal" data-target="#modalEditDetilPenitip">
					<button id="tombolSimpan" class="btn btn-warning btn-sm"><i class="fa fa-edit fa-lg"></i></button>
					</a>
					<a href ="#" id="link" onclick="return confirm('Apakah Anda yakin ingin menghapus Penitip ini?');"><button id="tombolHapus" class="btn btn-danger btn-sm"><i class="fa fa-trash-o fa-lg"></i></button>
					</a>					
				</div>
				<h3 name="nama"></h3>
				<h5 name="pekerjaan"></h5>
			 </div>
			 <div class="box-footer no-padding">
				<ul class="nav nav-stacked"></br>                      
					 <input type="hidden" id="id" name="id">
					 <div class="form-group">
						<label class="control-label col-sm-4">No. KTP </label>               
						  <div name="noktp"></div>                                     
					 </div>   
					 <div class="form-group">
						<label class="control-label col-sm-4">Rekening </label>                 
						  <div name="rekening"></div>                                
					 </div>      
					 <div class="form-group">
						<label class="control-label col-sm-4">Jenis Kelamin</label>               
						  <div name="jeniskelamin"></div>                                     
					 </div>     
					 <div class="form-group">
						<label class="control-label col-sm-4">Tempat & Tanggal Lahir</label>               
						  <div name="tempattanggal"></div>                                      
					 </div>
					 <div class="form-group">
						<label class="control-label col-sm-4">Alamat</label>               
						  <div name="alamatsekarang"></div>                                     
					 </div>
					 <div class="form-group">
						<label class="control-label col-sm-4">Alamat KTP</label>               
						  <div name="alamatktp"></div>                                     
					 </div>
					 <div class="form-group">
						<label class="control-label col-sm-4">Telepon</label>               
						  <div name="telepon"></div>                                     
					 </div>
					 <div class="form-group">
						<label class="control-label col-sm-4">Email</label>               
						  <div name="email"></div>                                     
					 </div>                        
				</ul>
			 </div>
		  </div>
		</div>    
	 </div>
  </div>

  <div class="modal fade" id="modalEditDetilPenitip" role="dialog">
	 <div class="modal-dialog">
		<div class="modal-content">
		  <div class="box box-widget widget-user-2">          
			 <div class="widget-user-header bg-green">
				<h3 name="nama"></h3>
				<h5 name="pekerjaan"></h5>
			 </div>
			 <div class="box-footer no-padding">
				<form name="formEditPenitip" id="formEditPenitip" class="form-horizontal" enctype="multipart/form-data" method="POST" action="<?php echo base_url(); ?>Penitip/updatePenitipBarkas">
					<ul class="nav nav-stacked">
					 <input type="hidden" id="idedit" name="idedit">   
					  <div class="box-body">
						 <div class="form-group">
							<label class="control-label col-sm-2">No. KTP </label>   
							  <div class="col-md-4">
								 <input type="text" class="form-control" id="noktpedit" name="noktpedit" required>                          
							  </div>
						 </div>
					  </div>
					  <div class="box-body">
						 <div class="form-group">
							<label class="control-label col-sm-2">Nama Lengkap</label>   
							  <div class="col-md-5">
								 <input type="text" class="form-control" id="namaedit" name="namaedit" required>
							  </div>
						 </div>
					  </div>
					  <div class="box-body">
						 <div class="form-group">
							<label class="control-label col-sm-2">Pekerjaan </label>   
							  <div class="col-md-4">
								 <input type="text" class="form-control" id="pekerjaanedit" name="pekerjaanedit" required>
							  </div>
						 </div>
					  </div>
					  <div class="box-body">
						 <div class="form-group">
							<label class="control-label col-sm-2">Rekening</label>   
							  <div class="col-md-4">
								 <input type="text" class="form-control" id="rekeningedit" name="rekeningedit" required>
							  </div>
						 </div>
					  </div>
					  <div class="box-body">
						 <div class="form-group">
							<label class="control-label col-sm-2">Jenis Kelamin</label>   
							  <div class="col-md-4">
								 <input type="text" class="form-control" id="jeniskelaminedit" name="jeniskelaminedit" required>
							  </div>
						 </div>
					  </div>
					  <div class="box-body">
						 <div class="form-group">
							<label class="control-label col-sm-2">Tempat Lahir </label>   
							  <div class="col-md-3">
								 <input type="text" class="form-control" id="tempatlahiredit" name="tempatlahiredit" required>
							  </div>
						 </div>
					  </div>
					  <div class="box-body">
						 <div class="form-group">
							<label class="control-label col-sm-2">Tanggal Lahir</label>   
							  <div class="col-md-3">
								 <input type="text" class="form-control" id="tanggallahiredit" name="tanggallahiredit" required>
							  </div>
						 </div>
					  </div>
					  <div class="box-body">
						 <div class="form-group">
							<label class="control-label col-sm-2">Alamat </label>   
							  <div class="col-md-10">
								 <input type="text" class="form-control" id="alamatsekarangedit" name="alamatsekarangedit" required>
							  </div>
						 </div>
					  </div>
					  <div class="box-body">
						 <div class="form-group">
							<label class="control-label col-sm-2">Alamat KTP</label>   
							  <div class="col-md-10">
								 <input type="text" class="form-control" id="alamatktpedit" name="alamatktpedit" required>
							  </div>
						 </div>
					  </div>
					  <div class="box-body">
						 <div class="form-group">
							<label class="control-label col-sm-2">Telepon</label>   
							  <div class="col-md-3">
								 <input type="text" class="form-control" id="teleponedit" name="teleponedit" required>
							  </div>
						 </div>
					  </div> 
					  <div class="box-body">
						 <div class="form-group">
							<label class="control-label col-sm-2">Email</label>   
							  <div class="col-md-6">
								 <input type="text" class="form-control" id="emailedit" name="emailedit" required>
							  </div>
						 </div>
					  </div>   
					</ul>
					<div class="modal-footer">                  
					<button class="btn btn-default" name="button" id="tombolReset" value="true" type="reset">Ulangi</button>
					<button href="#" id="tombolSimpan" type="submit" class="btn btn-primary">Simpan</button>            
				  </div>
			  </form>
			 </div>
		  </div>
		</div>    
	 </div>
  </div>

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
					 <h2 class="box-title" style="font-size: 32px;"><b>Daftar Penitip Barang</b></h2>
				  </div>
				</div>

				<div class="box-body">
				  <table id="tabelPenitip" class="display" cellspacing="0" width="100%">
					 <thead>
						<tr>
						  <th>No</th>                 
						  <th>Nama</th>              
						  <th>Telepon</th>
						  <th>Email</th> 
						  <th>Alamat</th> 
						  <th>Rekening</th> 
						</tr>
					 </thead>
					 <tbody>
						<?php
						 $no = 1;            
						 foreach ($result['data'] as $row)
						 { ?>
							<tr class="datatomodal" data-id = "<?php echo $row['id']?>" data-nama = "<?php echo $row['nama']?>" data-pekerjaan = "<?php echo $row['pekerjaan']?>" data-noktp = "<?php echo $row['noktp']?>" data-rekening = "<?php echo $row['rekening']?>" data-jeniskelamin = "<?php echo $row['jeniskelamin']?>" data-tempatlahir = "<?php echo $row['tempatlahir']?>" data-tanggallahir = "<?php echo $row['tanggallahir']?>" data-alamatsekarang = "<?php echo $row['alamatsekarang']?>" data-alamatktp = "<?php echo $row['alamatktp']?>" data-telepon = "<?php echo $row['telepon']?>" data-email = "<?php echo $row['email']?>">
							  <td><?php echo $no;$no++; ?></td>
							  <td><?php echo $row['nama']; ?></td> 
							  <td><?php echo $row['telepon']; ?></td>
							  <td><?php echo $row['email']; ?></td>
							  <td><?php echo $row['alamatsekarang']; ?></td>
							  <td><?php echo $row['rekening']; ?></td>
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

<script type="text/javascript">
$('.datatomodal').on('click',function(){
  $("#modalDetilPenitip").modal("show");  
  var id           	= $(this).data('id');
  var nama           = $(this).data('nama');
  var pekerjaan      = $(this).data('pekerjaan');
  var noktp          = $(this).data('noktp');
  var rekening       = $(this).data('rekening');
  var jeniskelamin   = $(this).data('jeniskelamin');
  var tempatlahir    = $(this).data('tempatlahir');
  var tanggallahir   = $(this).data('tanggallahir');
  var tempattanggal  = tempatlahir.concat(' / ',tanggallahir);
  var alamatsekarang = $(this).data('alamatsekarang');
  var alamatktp      = $(this).data('alamatktp');
  var telepon        = $(this).data('telepon');
  var email          = $(this).data('email');
  var link 			 = '<?= base_url('Penitip/hapusPenitip') ?>/' + id;
  var linkdetil 	 = '<?= base_url('Penitip/detilProdukPenitip') ?>/' + id;

  if (id) {
	 $('[name="id"]').val(id);
	 $('[name="nama"]').html(nama);
	 $('[name="pekerjaan"]').html(pekerjaan);
	 $('[name="noktp"]').html(noktp);
	 $('[name="rekening"]').html(rekening);
	 $('[name="jeniskelamin"]').html(jeniskelamin);
	 $('[name="tempattanggal"]').html(tempattanggal);
	 $('[name="alamatsekarang"]').html(alamatsekarang);
	 $('[name="alamatktp"]').html(alamatktp);
	 $('[name="telepon"]').html(telepon);
	 $('[name="email"]').html(email);
	 $("#link").attr("href", link);
	 $("#linkproduk").attr("href", linkdetil);
  }
  else{
	 alert('Data tidak ditemukan !!!');
  }
  
  $('.edit').click(function(){ 
	 var id           = $('[name="id"]').val();
	 var nama           = $('[name="nama"]').html();
	 var pekerjaan      = $('[name="pekerjaan"]').html();
	 var noktp          = $('[name="noktp"]').html();
	 var rekening       = $('[name="rekening"]').html();
	 var jeniskelamin   = $('[name="jeniskelamin"]').html();
	 var tempattanggal  = $('[name="tempattanggal"]').html(); 
	 var tanggallahir   = tempattanggal.substr(tempattanggal.indexOf("/") + 2);
	 var tempatlahir    = tempattanggal.substr(0, tempattanggal.indexOf("/"));    
	 var alamatsekarang = $('[name="alamatsekarang"]').html();
	 var alamatktp      = $('[name="alamatktp"]').html();
	 var telepon        = $('[name="telepon"]').html();
	 var email          = $('[name="email"]').html();

	 if (noktp) {
		$('[name="idedit"]').val(id);
		$('[name="namaedit"]').val(nama);
		$('[name="pekerjaanedit"]').val(pekerjaan);
		$('[name="noktpedit"]').val(noktp);
		$('[name="rekeningedit"]').val(rekening);
		$('[name="jeniskelaminedit"]').val(jeniskelamin);
		$('[name="tempatlahiredit"]').val(tempatlahir);
		$('[name="tanggallahiredit"]').val(tanggallahir);
		$('[name="alamatsekarangedit"]').val(alamatsekarang);
		$('[name="alamatktpedit"]').val(alamatktp);
		$('[name="teleponedit"]').val(telepon);
		$('[name="emailedit"]').val(email);
	 }
	 else{
		alert('Data tidak ditemukan !!!');
	 }
  });
});
</script>