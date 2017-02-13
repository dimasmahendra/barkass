<link href="<?= base_url('assets/css/datetimepicker/jquery.datetimepicker.css') ?>" rel="stylesheet"> 
  <div class="content-wrapper">
    <section class="content">
      <div class="row">        
        <div class="col-md-12">         
          
          <div class="box box-danger">
            <div class="box-header with-border">
              <div class="pull-right">
                <h2 class="box-title" style="font-size: 32px;"><b>Input Penitip Barang Baru</b></h2>
              </div>
            </div>
            <form id="tambahpenitip" class="form-horizontal" enctype="multipart/form-data" method="POST" action="<?php echo base_url(); ?>Penitip/tambahPenitipBarkas">
              <div class="box-body">
                <div class="box-body">                  
                  <div class="form-group">
                    <label class="control-label col-sm-2">No. KTP</label>
                    <div class="col-md-2">
                      <input type="text" class="form-control" id="noktp" name="noktp">
                    </div>                   
                  </div>
                </div>
                <div class="box-body">                  
                  <div class="form-group">
                    <label class="control-label col-sm-2">Nama Lengkap<br><small style="color: red">(Harus Sesuai dengan KTP)</small></label>
                    <div class="col-md-4">
                      <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                  </div>
                </div>
                <div class="box-body">                  
                  <div class="form-group">
                    <label class="control-label col-sm-2">Tempat & Tanggal Lahir</label>
                    <div class="col-md-2">
                      <input type="text" class="form-control" id="tempatlahir" name="tempatlahir">
                    </div>
                    <div class="col-md-2">
                      <input type="text" class="form-control" id="tanggallahir" name="tanggallahir">
                    </div>
                  </div>           
                </div>
                <div class="box-body">                  
                  <div class="form-group">
                    <label class="control-label col-sm-2">Jenis Kelamin</label>
                    <div class="col-md-3">
                      <div class="radio-inline">
                        <label>
                          <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="pria" checked>Laki-laki
                        </label>
                      </div>
                      <div class="radio-inline">
                        <label>
                          <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="wanita">Perempuan
                        </label>
                      </div>  
                    </div>
                  </div>
                </div>
                <div class="box-body">                  
                  <div class="form-group">                   
                    <label class="control-label col-sm-2">No. Telepon</label>
                    <div class="col-md-3">
                      <input type="text" class="form-control" id="telepon" name="telepon">
                    </div>
                    <label class="control-label col-sm-2">Pekerjaan</label>
                    <div class="col-md-2">
                      <input type="text" class="form-control" id="pekerjaan" name="pekerjaan">
                    </div>
                  </div>            
                </div>
                <div class="box-body">                  
                  <div class="form-group">
                    <label class="control-label col-sm-2">No. Rekening</label>
                    <div class="col-md-2">
                      <input type="text" class="form-control" id="rekening" name="rekening">
                    </div>                    
                  </div>
                </div>
                <div class="box-body">                  
                  <div class="form-group">
                    <label class="control-label col-sm-2">Email</label>
                    <div class="col-md-4">
                      <input type="text" class="form-control" id="email" name="email">
                    </div>
                  </div>
                </div>                                  
                <div class="box-body">                  
                  <div class="form-group">
                    <label class="control-label col-sm-2">Alamat<br><small style="color: red">(Harus Sesuai dengan KTP)</small></label>
                    <div class="col-md-7">
                      <input type="text" class="form-control" id="alamatktp" name="alamatktp">
                    </div>
                  </div>
                </div>
                <div class="box-body">                  
                  <div class="form-group">
                    <label class="control-label col-sm-2">Alamat Sekarang</label>
                    <div class="col-md-7">
                      <input type="text" class="form-control" id="alamatsekarang" name="alamatsekarang">
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