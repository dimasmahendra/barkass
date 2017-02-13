<link href="<?= base_url('assets/css/datetimepicker/jquery.datetimepicker.css') ?>" rel="stylesheet"> 
<style type="text/css">
  .input-group {
    width: 0;
}
</style>
  <div class="content-wrapper">
    <section class="content">
      <div class="row">        
        <div class="col-md-12">         
          
          <div class="box box-danger">
            <div class="box-header with-border">
              <div class="pull-right">
                <h2 class="box-title" style="font-size: 32px;"><b>Tambah Barang Baru</b></h2>
              </div>
            </div>
            <form id="tambahpenitip" class="form-horizontal" enctype="multipart/form-data" method="POST" action="<?php echo base_url(); ?>Produk/tambahProduk">
              <div class="box-body">
                <div class="box-body">                  
                  <div class="form-group">
                    <label class="control-label col-sm-2">Nama Penitip</label>
                    <div class="col-md-3">
                      <select name="penitip_id" class="form-control" id="penitip_id">
                          <option value="">- Pilih Penitip -</option>
                          <?php foreach($penitip['data'] as $row){ ?>               
                              <option value="<?php echo $row['id'];?>"><?php echo $row['nama'] ?></option>
                          <?php } ?>
                      </select>
                    </div>                   
                  </div>
                </div>
                <div class="box-body">                  
                  <div class="form-group">
                    <label class="control-label col-sm-2">Kategori<br></label>
                    <div class="col-md-3">
                      <select name="kategori_id" class="form-control" id="kategori_id">
                          <option value="">- Pilih Kategori -</option>
                          <?php foreach($kategori['data'] as $row){ ?>               
                              <option value="<?php echo $row['id'];?>"><?php echo $row['nama'] ?></option>
                          <?php } ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="box-body">                  
                  <div class="form-group">
                    <label class="control-label col-sm-2">Nama Barang</label>
                    <div class="col-md-3">
                      <input type="text" class="form-control" id="nama" name="nama">
                    </div>                    
                  </div>
                </div>
                <div class="box-body">                  
                  <div class="form-group">
                    <label class="control-label col-sm-2">Berat</label>
                    <div class="col-md-2">
                       <div class="input-group">                     
                          <input type="text" class="form-control" id="berat" name="berat">
                          <span class="input-group-addon">Kg</span>   
                        </div>                   
                    </div>                    
                  </div>
                </div>
                <div class="box-body">                  
                  <div class="form-group">
                    <label class="control-label col-sm-2">Harga Jual</label>
                    <div class="col-md-2">
                      <input type="text" class="form-control" id="hargajual" name="hargajual">
                    </div>                    
                  </div>
                </div>                       
                <div class="box-footer">           
                  <div class="pull-right">
                    <button class="btn btn-default"><a href="<?php echo base_url(); ?>Dashboard/index" id="cancelInput">Batal</a></button>
                    <button type="submit" class="btn btn-success">Simpan</button>
                  </div>
                </div>
              </div>             
            </form>
          </div></br>
        </div>
      </div>  
    </section>
  </div>
  <script src="<?= base_url('assets/js/datetimepicker/jquery.datetimepicker.full.js') ?>" rel="stylesheet"></script>
  <script type="text/javascript">
   $('#tanggallahir').datetimepicker({   
    timepicker:false,
    format:'Y-m-d',
    formatDate:'yy-mm-dd'  
  });
  </script>