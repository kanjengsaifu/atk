<!DOCTYPE html>
<html>
<head>
<?php $this->load->view('backend/komponen/basic'); ?>
  <title>AdminLTE 2 | Barang Masuk</title>
  <!-- Tell the browser to be responsive to screen width -->
  
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<!-- Header -->
<?php $this->load->view('backend/komponen/header'); ?>
<!-- End Header -->

<!-- Side Bar -->
<?php $this->load->view('backend/komponen/sidebar'); ?>
<!-- End Side Bar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="col-sm-8">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form Data Barang Masuk</h3>
            </div>

            <?php 
    $code = "";
    if($this->uri->segment(3) == "edit"){
      $code = $rc->position_code;
    }else{
      $code = generate_code('kode_masuk', 'barang_masuk', 'BM');
    }
  ?>
            <!-- Validasi Save -->
    <script type="text/javascript" language="JavaScript">
         function konfirmasi()
         {
         tanya = confirm("Anda Yakin Data Sudah Benar?");
         if (tanya == true) return true;
         else return false;
         }</script>
            <!-- Validasi Tutup Save -->
       <!-- Validasi text -->     
  <script type="text/javascript">
      function validasi_input(form){
          if (form.kode_masuk.value == ""){
          alert("Kode Masuk masih kosong!");
          form.kode_masuk.focus();
          return (false);
        } if (form.produk_id.value == ""){
          alert("Produk ID masih kosong!");
          form.produk_id.focus();
          return (false);
        } if (form.tgl_masuk.value == ""){
          alert("Tanggal Masuk masih kosong!");
          form.tgl_masuk.focus();
          return (false);
        } if (form.unit.value == ""){
          alert("Unit masih kosong!");
          form.unit.focus();
          return (false);
        } if (form.jumlah.value == ""){
          alert("Jumlah masih kosong!");
          form.jumlah.focus();
          return (false);
        } 
      return (true);
        }
</script>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" onsubmit="return validasi_input(this)" action="<?php echo base_url()."index.php/transaksi/c_barang_masuk/do_add";?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputtext" class="col-sm-2 control-label">No Transaksi</label>
                  <div class="col-sm-10">
                    <input type="text" name="kode_masuk" class="form-control" value="<?php echo $code; ?>" readonly="readonly">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputtext" class="col-sm-2 control-label">Produk ID</label>

                  <div class="col-sm-10">
                  <select name="produk_id" id="produk_id" class="form-control">
                      <?php if(count($produk_id)){ ?>
                        <option value=''>--Select---</option>
                        <?php foreach($produk_id as $list){ ?>
                          <?php 
                            echo "<option value='".$list['produk_id']."'>".$list['produk_id']. '-' .$list['produk_nama']."</option>";
                          ?>
                        <?php } ?>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputtext" class="col-sm-2 control-label">Tanggal Masuk</label>
                  <div class="col-sm-10">
                  <div class="form-group">
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="tgl_masuk" class="form-control" id="datepicker">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
                    <!-- <input type="text" name="Tanggal Masuk" class="form-control" placeholder="Tanggal Masuk"> -->
                  <!-- </div> -->
                </div>
                <div class="form-group">
                  <label for="inputtext" class="col-sm-2 control-label">Unit</label>

                  <div class="col-sm-10">
                    <input type="text" name="unit" class="form-control" placeholder="Unit">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputtext" class="col-sm-2 control-label">Jumlah</label>

                  <div class="col-sm-10">
                    <input type="text" name="jumlah" class="form-control" placeholder="Jumlah" onkeypress="return hanyaAngka(event)">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info" onclick="return konfirmasi()" >Save</button>
                <button type="reset" class="btn btn-danger">Cancel</button>
              </div>

              <!-- /.box-footer -->
            </form>
          </div>
        </div>
    </section>
  </div>
  
<!-- Footer -->

<?php $this->load->view('backend/komponen/footer'); ?>

<!-- End Footer -->
  <div class="control-sidebar-bg"></div>
</div>
           <script>
    function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))
 
        return false;
      return true;
    }
  </script>

  <script> 
  $(function () {
    $('#datepicker').datepicker({
      autoclose: true
    });
  });
  </script>
</body>
</html>

