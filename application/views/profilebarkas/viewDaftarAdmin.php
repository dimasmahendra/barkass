<link href="<?= base_url('assets/css/tabel/jquery.dataTables.min.css') ?>" rel="stylesheet">
<link href="<?= base_url('assets/css/tabel/select.dataTables.css') ?>" rel="stylesheet">

<script src="<?= base_url('assets/js/jQuery/jquery-2.2.0.min.js') ?>" rel="stylesheet"></script>
<script src="<?= base_url('assets/js/tabel/jquery.dataTables.min.js') ?>" rel="stylesheet"></script>
<script src="<?= base_url('assets/js/tabel/dataTables.bootstrap.min.js') ?>" rel="stylesheet"></script>
<script src="<?= base_url('assets/js/tabel/dataTables.select.js') ?>" rel="stylesheet"></script>

  <div class="content-wrapper">
    <section class="content">
      <div class="row">        
        <div class="col-md-12">          
          
          <div class="box box-danger">
            <div class="box-header with-border">
              <a class="btn-sm btn-primary" href ="<?= base_url('Admin/index') ?>"><i class="fa fa-plus"></i>&nbsp Add</a>
              <div class="pull-right">
                <h2 class="box-title" style="font-size: 32px;"><b>Daftar Admin</b></h2>
              </div>
            </div>

            <div class="box-body">
              <table id="tabelAdminBarkas" class="display" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Level</th>  
                    <th>Email Admin</th>
                    <th>Nama Toko</th>
                    <th>Telepon</th>                              
                    <th>Aksi</th>                  
                  </tr>
                </thead>
                <tbody>
                    <?php
                      $no = 1;            
                      foreach ($result['data'] as $row)
                      { ?>
                            <tr>
                                <td><?php echo $no;$no++; ?></td>
                                <td><?php echo $row['level']; ?></td> 
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['nama']; ?></td>
                                <td><?php echo $row['telepon']; ?></td>
                                <td>                               
                                 <a class="btn-sm btn-primary" href ="<?= base_url('Admin/ubahAdminKoperasi') ?>/<?php echo $row['id']?>">
                                 Edit</a>
                                 &nbsp;
                                 <a class="btn-sm btn-danger" href ="<?= base_url('Admin/hapusAdmin') ?>/<?php echo $row['id']?>" onclick="return confirm('Apakah Anda yakin ingin menghapus Admin ini?');">
                                 Hapus</a> 
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
    var table = $('#tabelAdminBarkas').DataTable();
 
    $('#tabelAdminBarkas tbody').on( 'click', 'tr', function () {
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