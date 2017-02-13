<link href="<?= base_url('assets/css/stylesss.css') ?>" rel="stylesheet">
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
			 	<div class="box-body">
					<section class="invoice">				  
				      <div class="row">
				        <div class="col-xs-12">
				          <h2 class="page-header">
				            <i class="fa fa-globe"></i> Informasi Barang Penitip
				            <small class="pull-right">Tanggal : <?php echo $tanggal; ?></small>
				          </h2>
				        </div>			
				      </div>
				      <div class="row invoice-info">
				        <div class="col-sm-5 invoice-col">
				          	<h3><strong><?php echo $result['data']['nama'];?></strong></h3>
				          	<table class="detilpenitip">
					        	<tr>
					        		<td><b>Jenis Kelamin </b></td>
					        		<td> <?php echo $result['data']['jeniskelamin'];?></td>
					        	</tr>
					        	<tr>
					        		<td><b>Tempat/Tgl Lahir </b></td>
					        		<td><?php echo $result['data']['tempatlahir'];?>/<?php echo $result['data']['tanggallahir'];?></td>
					        	</tr>
					        	<tr>
					        		<td><b>Alamat </b></td>
					        		<td><?php echo $result['data']['alamatsekarang'];?></td>
					        	</tr>
					        	<tr>
					        		<td><b>Alamat KTP </b></td>
					        		<td><?php echo $result['data']['alamatktp'];?></td>
					        	</tr>
					        	<tr>
					        		<td><b>Email </b></td>
					        		<td><?php echo $result['data']['email'];?></td>
					        	</tr>
					        	<tr>
					        		<td><b>Pekerjaan </b></td>
					        		<td><?php echo $result['data']['pekerjaan'];?></td>
					        	</tr>
					        </table>
				        </div>		
				        <div class="col-sm-4 invoice-col pull-right">
					        <table class="detilnomorpenitip">
					        	<tr>
					        		<td><b>No KTP </b></td>
					        		<td><?php echo $result['data']['noktp'];?></td>
					        	</tr>
					        	<tr>
					        		<td><b>No Rekening </b></td>
					        		<td><?php echo $result['data']['rekening'];?></td>
					        	</tr>
					        	<tr>
					        		<td><b>No Telepon </b></td>
					        		<td><?php echo $result['data']['telepon'];?></td>
					        	</tr>
					        </table>
		                </div> 
				      </div></br>
				      <div class="row">
				        <div class="col-xs-12 table-responsive">
				          <table class="table table-striped">
				            <thead>
				            <tr>
				              <th>No</th>
				              <th>Nama Barang</th>
				              <th>Berat</th>
				              <th>Harga Jual</th>
				              <th>Kategori</th>
				            </tr>
				            </thead>
				            <tbody>
								<?php
								 $no = 1;            
								 foreach ($result['data2'] as $row)
								 { ?>
									<tr>
									  <td><?php echo $no;$no++; ?></td>
									  <td><?php echo $row['nama']; ?></td> 
									  <td><?php echo $row['berat']; ?> kg</td>
									  <td><?php echo "Rp ".format_rupiah($row['hargajual']); ?></td>
									  <td><?php echo $row['namakategori']; ?></td>
									</tr>
								<?php } ?>            
							 </tbody>
				          </table>
				        </div>
				      </div>
				      <div class="row">
				        <div class="col-xs-6"></div>
				      </div>
				      <div class="row no-print">
				        <div class="col-xs-12"></div>
				      </div>
				    </section>
				</div>                                  
			 </div>
		  </div>
		</div>  
	 </section>
  </div>