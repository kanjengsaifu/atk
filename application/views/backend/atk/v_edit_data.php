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
              <h3 class="box-title">Form Data ATK</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="<?php echo base_url()."index.php/atk/c_atk/do_edit";?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputtext" class="col-sm-2 control-label">ATK ID</label>
                  <div class="col-sm-10">
                    <input type="text" name="atk_id" class="form-control" value="<?php echo $atk_id; ?>" placeholder="ATK ID">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputtext" class="col-sm-2 control-label">Produk ID</label>

                  <div class="col-sm-10">
                    <input type="text" name="produk_id" class="form-control" value="<?php echo $produk_id; ?>" placeholder="Produk ID">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputtext" class="col-sm-2 control-label">Nomor PO</label>

                  <div class="col-sm-10">
                    <input type="text" name="nomor_po" class="form-control" value="<?php echo $nomor_po; ?>" placeholder="Nomor PO">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputtext" class="col-sm-2 control-label">Unit</label>

                  <div class="col-sm-10">
                    <input type="text" name="unit" class="form-control" value="<?php echo $unit; ?>" placeholder="Unit">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputtext" class="col-sm-2 control-label">Stock</label>

                  <div class="col-sm-10">
                    <input type="text" name="stock" class="form-control" value="<?php echo $stock; ?>" placeholder="Stock">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info">Update</button>
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
