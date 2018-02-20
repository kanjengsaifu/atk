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
              <h3 class="box-title">Form Data Supplier</h3>
            </div>

            <?php 
              $code = "";
              if($this->uri->segment(3) == "edit"){
                $code = $rc->position_code;
              }else{
                $code = generate_code('supplier_id', 'supplier', 'SUP');
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

         <script type="text/javascript">
      function validasi_input(form){
          if (form.supplier_id.value == ""){
          alert("ID Supplier masih kosong!");
          form.supplier_id.focus();
          return (false);
        } if (form.nama_supplier.value == ""){
          alert("Nama Supplier masih kosong!");
          form.nama_supplier.focus();
          return (false);
        } if (form.alamat.value == ""){
          alert("Alamat masih kosong!");
          form.alamat.focus();
          return (false);
        } if (form.kota.value == ""){
          alert("Kota masih kosong!");
          form.kota.focus();
          return (false);
        } if (form.telepon.value == ""){
          alert("Telepon masih kosong!");
          form.telepon.focus();
          return (false);
        } if (form.fax.value == ""){
          alert("Fax masih kosong!");
          form.fax.focus();
          return (false);
        } if (form.email.value == ""){
          alert("Email masih kosong!");
          form.email.focus();
          return (false);
        } 
      return (true);
        }
</script>
            <!-- Validasi Tutup Save -->
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" onsubmit="return validasi_input(this)" action="<?php echo base_url()."index.php/supplier/c_supplier/do_add";?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputtext" class="col-sm-2 control-label">Supplier ID</label>
                  <div class="col-sm-10">
                    <input type="text" name="supplier_id" class="form-control" value="<?php echo $code; ?>" readonly="readonly">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputtext" class="col-sm-2 control-label">Nama Supplier</label>

                  <div class="col-sm-10">
                    <input type="text" name="nama_supplier" class="form-control" placeholder="Nama Supplier">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputtext" class="col-sm-2 control-label">Alamat</label>

                  <div class="col-sm-10">
                    <input type="text" name="alamat" class="form-control" placeholder="Alamat">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputtext" class="col-sm-2 control-label">Kota</label>

                  <div class="col-sm-10">
                    <input type="text" name="kota" class="form-control" placeholder="Kota">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputtext" class="col-sm-2 control-label">Telepon</label>

                  <div class="col-sm-10">
                    <input type="text" name="telepon" class="form-control" placeholder="Telepon" onkeypress="return hanyaAngka(event)">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputtext" class="col-sm-2 control-label">Fax</label>

                  <div class="col-sm-10">
                    <input type="text" name="fax" class="form-control" placeholder="Fax" onkeypress="return hanyaAngka(event)">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputtext" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="text" name="email" class="form-control" placeholder="Email">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info" onclick="return konfirmasi()">Save</button>
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
<script>
    function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))
 
        return false;
      return true;
    }
  </script>

  
  <div class="control-sidebar-bg"></div>
</div>

</body>
</html>
