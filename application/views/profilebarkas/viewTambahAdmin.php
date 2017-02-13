<style type="text/css">
    label.error {
    color: red;
  }
</style>

<link href="<?= base_url('assets/css/peta.css') ?>" rel="stylesheet">

<div class="content-wrapper">
  <section class="content">
    <div class="row">        
      <div class="col-md-12">          
        
        <div class="box box-danger">
          <div class="box-header with-border">
            <h3 class="box-title">Tambah Admin Barkas</h3>
          </div>

          <div class="box-body">
              <div id="map"></div>
            </div>

          <form id="adminForm" class="form-horizontal" enctype="multipart/form-data" method="POST" action="<?php echo base_url(); ?>Admin/insertAdmin">
              
            <input type="hidden" name='lat' id='lat'>              
            <input type="hidden" name='lng' id='lng'>             

            <div class="box-body">                  
                <div class="form-group">
                  <label class="control-label col-sm-2" for="nama">Nama Barkas</label>
                  <div class="col-md-4">
                    <input type="text" class="form-control" id="nama" name="nama">
                  </div>
                </div>
            </div>

            <div class="box-body">                  
                <div class="form-group">
                <label class="control-label col-sm-2" for="alamat">Telepon</label>
                <div class="col-md-2"> 
                  <input type="text" class="form-control" id="telepon" name="telepon">
                </div>
              </div> 
            </div>

            <div class="box-body">                  
                <div class="form-group">
                  <label class="control-label col-sm-2" for="telepon">Email</label>
                  <div class="col-md-4"> 
                    <input type="text" class="form-control" id="email" name="email">
                  </div>
                </div> 
            </div>

            <div class="box-body">                  
                <div class="form-group">
                  <label class="control-label col-sm-2" for="telepon">Alamat</label>
                  <div class="col-md-6"> 
                    <input type="email" class="form-control" id="alamat" name="alamat">
                  </div>
                </div> 
            </div>

            <div class="box-body">                  
                <div class="form-group">
                  <label class="control-label col-sm-2" for="provinsi">Provinsi</label>
                  <div class="col-md-3"> 
                    <select name="prov" class="form-control" id="provinsi">
                      <option value="">- Pilih Provinsi -</option>
                      <?php foreach($hasil['data'] as $row){ ?>               
                          <option value="<?php echo $row['id'];?>"><?php echo $row['nama'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div> 
            </div>

            <div class="box-body">                  
                <div class="form-group">
                  <label class="control-label col-sm-2" for="kecamatan">Kabupaten / Kota</label>
                  <div class="col-md-3"> 
                    <select name="kab" class="form-control" id="kabupatenkota">
                      <option value="">- Pilih Kabupaten Kota-</option>
                    </select> 
                  </div>
                </div> 
            </div>

            <div class="box-body">                  
                <div class="form-group">
                  <label class="control-label col-sm-2" for="kecamatan">Kecamatan</label>
                  <div class="col-md-3"> 
                    <select name="kec" class="form-control" id="kecamatan">
                        <option value="">- Pilih Kecamatan -</option>
                    </select>
                  </div>
                </div> 
            </div>

            <div class="box-body">                  
                <div class="form-group">
                  <label class="control-label col-sm-2" for="kecamatan">Kelurahan</label>
                  <div class="col-md-3"> 
                    <select name="lurah" class="form-control" id="kelurahan">
                      <option value="">- Pilih Kelurahan-</option>
                    </select> 
                  </div>
                </div> 
            </div>   
              

            <div class="box-body">
              <div class="form-group">
                <label class="control-label col-sm-2" for="images">Foto</label>
                <div class="col-md-4">            
                  <input type="file" id="foto"  name="foto" class="form-control">                    
                </div>              
              </div>       
            </div>                

            <div class="box-footer">           
              <div class="pull-right">
                <button class="btn btn-default"><a href="<?php echo base_url(); ?>Dashboard/index" id="cancelInput">Cancel</a></button>
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
            </div> 
          </form>
        </div>        
      </div>
    </div>  
  </section>
</div>
<?php $this->load->view('viewFooter.php')?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYFBm0eKlEv6Y5OjYjwWJVCxWDX0xBrbY" type="text/javascript"></script>
<script>
  function initialize() {
    var my_position = new google.maps.LatLng("-2.195578", "117.1782418");
    var map = new google.maps.Map(document.getElementById('map'), {
      center: my_position,
      zoom: 5
    });
    var marker = new google.maps.Marker({
      position: my_position,
      map: map,
      draggable : true
    });
    // double click event
    google.maps.event.addListener(map, 'dblclick', function(e) {
      var positionDoubleclick = e.latLng;
      marker.setPosition(positionDoubleclick);
      updateMarkerPosition(marker.getPosition());
      // if you don't do this, the map will zoom in
      map.setOptions({disableDoubleClickZoom: true });              
    });

    google.maps.event.addListener(marker, 'drag', function() {
      updateMarkerPosition(marker.getPosition());
    });               
  } 

  function updateMarkerPosition(latLng) {
    document.getElementById('lat').value = [latLng.lat()];
    document.getElementById('lng').value = [latLng.lng()];
  }   

  google.maps.event.addDomListener(window, 'load', initialize);

  $(document).ready(function(){
  $("#provinsi").change(function (){
    var url = "<?php echo site_url('Admin/kabupatenkota');?>/"+$(this).val();
    $('#kabupatenkota').load(url);
    $('#kecamatan').html('<option value="">--Pilih Kecamatan--</option>');
    $('#kelurahan').html('<option value="">--Pilih Kelurahan--</option>');          
    return false;
  })
  $("#kabupatenkota").change(function (){
    var url = "<?php echo site_url('Admin/kecamatan');?>/"+$(this).val();
    $('#kecamatan').load(url);
    return false;
  })
  $("#kecamatan").change(function (){
    var url = "<?php echo site_url('Admin/kelurahan');?>/"+$(this).val();
    $('#kelurahan').load(url);
    return false;
  })
  });
</script>

<script type="text/javascript">
  $(document).ready(function() {
      $('#merchandForm')
          .bootstrapValidator({
              message: 'This value is not valid',
              feedbackIcons: {
                  valid: 'glyphicon glyphicon-ok',
                  invalid: 'glyphicon glyphicon-remove',
                  validating: 'glyphicon glyphicon-refresh'
              },
              fields: {
                  nama: {                        
                      validators: {
                          notEmpty: {
                              message: 'The name is required and can\'t be empty'
                          },                            
                      }
                  },
                  alamat: {
                      validators: {
                          notEmpty: {
                              message: 'The address is required'
                          }
                      }
                  },
                  telepon: {
                      validators: {
                          notEmpty: {
                              message: 'The phone number is required'
                          },
                          digits: {
                              message: 'The value can contain only digits'
                          }
                      }
                  },
                  email: {
                      validators: {
                          notEmpty: {
                              message: 'The email address is required and can\'t be empty'
                          },
                          emailAddress: {
                              message: 'The input is not a valid email address'
                          }
                      }
                  },
                  website: {
                      validators: {
                          uri: {
                              allowLocal: true,
                              message: 'The input is not a valid URL'
                          }
                      }
                  },
              }
          })          
  });
</script> 