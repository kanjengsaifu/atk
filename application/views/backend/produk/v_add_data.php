<!DOCTYPE html>
<html>
<head>
<?php $this->load->view('backend/komponen/basic'); ?>
  <title>AdminLTE 2 | Header</title>
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
              <h3 class="box-title">Form Data Produk</h3>
            </div>
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
          if (form.produk_id.value == ""){
          alert("Produk ID masih kosong!");
          form.produk_id.focus();
          return (false);
        } if (form.produk_nama.value == ""){
          alert("Produk Nama masih kosong!");
          form.produk_nama.focus();
          return (false);
        } if (form.nama_supplier.value == ""){
          alert("Nama Supplier masih kosong!");
          form.nama_supplier.focus();
          return (false);
        } if (form.unit.value == ""){
          alert("Unit masih kosong!");
          form.unit.focus();
          return (false);
        } if (form.jumlah.value == ""){
          alert("Unit masih kosong!");
          form.jumlah.focus();
          return (false);
        } 
      return (true);
        }
</script>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" onsubmit="return validasi_input(this)" action="<?php echo base_url()."index.php/produk/c_produk/do_add";?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputtext" class="col-sm-2 control-label">Produk ID</label>
                  <div class="col-sm-10">
                    <input type="text" name="produk_id" class="form-control" placeholder="Produk ID">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputtext" class="col-sm-2 control-label">Produk Nama</label>

                  <div class="col-sm-10">
                    <input type="text" name="produk_nama" class="form-control" placeholder="Produk Nama">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputtext" class="col-sm-2 control-label">Nama Supplier</label>

                  <div class="col-sm-10">
                    <select name="nama_supplier" id="nama_supplier" class="form-control">
                      <?php if(count($supplier)){ ?>
                        <option value=''>--Select---</option>
                        <?php foreach($supplier as $list){ ?>
                          <?php 
                            echo "<option value='".$list['nama_supplier']."'>".$list['nama_supplier']."</option>";
                          ?>
                        <?php } ?>
                      <?php } ?>
                    </select>
                  </div>
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
</body>
</html>

