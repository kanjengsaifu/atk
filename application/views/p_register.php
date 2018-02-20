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
              <h3 class="box-title">Form Registrasi</h3>
            </div>
       <!-- Validasi text prod_id -->     
<script type="text/javascript">
  
      function validasi_input(form){
          if (form.name.value == ""){
          alert("Nama masih kosong!");
          form.name.focus();
          return (false);
        } if (form.email.value == ""){
          alert("Email masih kosong!");
          form.email.focus();
          return (false);
        } if (form.username.value == ""){
          alert("Username masih kosong!");
          form.username.focus();
          return (false);
        } if (form.password.value == ""){
          alert("Password masih kosong!");
          form.password.focus();
          return (false);
        } if (form.status.value == ""){
          alert("Status masih kosong!");
          form.status.focus();
          return (false);
        } 
      return (true);
        }

</script>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" onsubmit="return validasi_input(this)" action="<?php echo base_url()."index.php/login2/do_add";?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputtext" class="col-sm-2 control-label">Nama Lengkap</label>
                  <div class="col-sm-10">
                    <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputtext" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="text" name="email" class="form-control" placeholder="Email" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputtext" class="col-sm-2 control-label">Username</label>

                  <div class="col-sm-10">
                    <input type="text" name="username" class="form-control" placeholder="Username" >
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputtext" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="text" name="password" class="form-control" placeholder="Password" >
                  </div>
                </div>
                  <div class="form-group">
                  <label for="inputtext" class="col-sm-2 control-label">Status</label>

                  <div class="col-sm-10">
                    <input type="text" name="status" class="form-control" placeholder="Status" >
                  </div>
                </div>
                </div>
              
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info" >Regist</button>
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

