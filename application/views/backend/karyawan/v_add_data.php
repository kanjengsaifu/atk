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

            <?php 
              $code = "";
              if($this->uri->segment(3) == "edit"){
                $code = $rc->position_code;
              }else{
                $code = generate_code('karyawan_id', 'karyawan', 'SGB-KRY');
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

       <!-- Validasi text prod_id -->     
  <script type="text/javascript">
      function validasi_input(form){
          if (form.karyawan_id.value == ""){
          alert("ID Karyawan masih kosong!");
          form.karyawan_id.focus();
          return (false);
        } if (form.nama_karyawan.value == ""){
          alert("Nama Karyawan masih kosong!");
          form.nama_karyawan.focus();
          return (false);
        } if (form.kd_divisi.value == ""){
          alert("Kode Divisi masih kosong!");
          form.kd_divisi.focus();
          return (false);
        } if (form.telepon.value == ""){
          alert("Telepon masih kosong!");
          form.telepon.focus();
          return (false);
        } if (form.alamat.value == ""){
          alert("Alamat masih kosong!");
          form.alamat.focus();
          return (false);
        } if (form.email.value == ""){
          alert("Email masih kosong!");
          form.email.focus();
          return (false);
        }
      return (true);
        }

</script>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" onsubmit="return validasi_input(this)" action="<?php echo base_url()."index.php/karyawan/c_karyawan/do_add";?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputtext" class="col-sm-2 control-label">Karyawan ID</label>
                  <div class="col-sm-10">
                    <input type="text" name="karyawan_id" class="form-control" value="<?php echo $code; ?>" readonly="readonly">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputtext" class="col-sm-2 control-label">Nama Karyawan</label>

                  <div class="col-sm-10">
                    <input type="text" name="nama_karyawan" class="form-control" placeholder="Nama Karyawan">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputtext" class="col-sm-2 control-label">Kode Divisi</label>
                
                  <div class="col-sm-10">
                    <select name="kd_divisi" id="kd_divisi" class="form-control">
                      <?php if(count($divisi)){ ?>
                        <option value=''>--Select---</option>
                        <?php foreach($divisi as $list){ ?>
                          <?php 
                            echo "<option value='".$list['kd_divisi']."'>".$list['kd_divisi']. '-' .$list['nama_divisi']."</option>";
                          ?>
                        <?php } ?>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputtext" class="col-sm-2 control-label">Telepon</label>

                  <div class="col-sm-10">
                    <input type="text" name="telepon" class="form-control" placeholder="Telepon" onkeypress="return hanyaAngka(event)">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputtext" class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-10">
                    <input type="text" name="alamat" class="form-control" placeholder="Alamat">
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

