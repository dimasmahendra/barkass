<script src="<?= base_url('assets/js/angular/angular.min.js') ?>" rel="stylesheet"></script>

<div class="content-wrapper">
  <section class="content">
    <div class="row">        
      <div class="col-md-12">  
        <div class="box box-danger">
          <div class="box-header with-border">
            <div class="pull-right">
              <h2 class="box-title" style="font-size: 32px;"><b>Transaksi</b></h2>
            </div>
          </div>
          <form id="tambahpenitip" class="form-horizontal" enctype="multipart/form-data" method="POST" action="<?php echo base_url(); ?>Transaksi/tambahTransaksi">
            <div class="box-body">
              <div class="box-body">                  
                <div class="form-group">
                  <label class="control-label col-sm-2">Kode Barang</label>
                  <div class="col-md-3">
                    <input type="text" class="form-control" id="kodebarang" name="kodebarang">
                  </div>  
                  <button type="submit" class="btn btn-success">Simpan</button>                   
                </div>
              </div>
            </div>             
          </form>
        </div></br>
        <div class="box box-danger">
          <div class="box-header with-border">
            <div class="pull-right">
              <h2 class="box-title" style="font-size: 32px;"><b>Daftar Barang</b></h2>
            </div>
          </div>
          <form id="tambahpenitip" class="form-horizontal" enctype="multipart/form-data" method="POST" action="<?php echo base_url(); ?>Produk/tambahProduk">
            <div class="box-body">
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
                      <tr>
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
          </form>
        </div>
      </div>
    </div>  
  </section>
</div>
