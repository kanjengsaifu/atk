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
                $code = generate_code('kd_divisi', 'divisi', 'DVS-');
              }
            ?>

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
          if (form.kd_divisi.value == ""){
          alert("Kode Divisi masih kosong!");
          form.kd_divisi.focus();
          return (false);
        } if (form.nama_divisi.value == ""){
          alert("Nama Divisi masih kosong!");
          form.nama_divisi.focus();
          return (false);
        } 
      return (true);
        }

</script>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" onsubmit="return validasi_input(this)" action="<?php echo base_url()."index.php/divisi/c_divisi/do_add";?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputtext" class="col-sm-2 control-label">Kode Divisi</label>
                  <div class="col-sm-10">
                    <input type="text" name="kd_divisi" class="form-control" value="<?php echo $code; ?>" readonly="readonly">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputtext" class="col-sm-2 control-label">Nama Divisi</label>

                  <div class="col-sm-10">
                    <input type="text" name="nama_divisi" class="form-control" placeholder="Nama Divisi">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info"  onclick="return konfirmasi()">Save</button>
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
</body>
</html>

