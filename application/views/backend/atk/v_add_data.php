<!DOCTYPE html>
<html>
<head>
<?php $this->load->view('backend/komponen/basic'); ?>
  <title>Saint-Gobain | ATK</title>
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

            <?php 
              $code = "";
              if($this->uri->segment(3) == "edit"){
                $code = $rc->position_code;
              }else{
                $code = generate_code('atk_id', 'atk', 'ATK');
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
          if (form.atk_id.value == ""){
          alert("ATK ID masih kosong!");
          form.atk_id.focus();
          return (false);
        } if (form.produk_id.value == ""){
          alert("Produk ID masih kosong!");
          form.produk_id.focus();
          return (false);
        } if (form.nomor_po.value == ""){
          alert("Nomor PO masih kosong!");
          form.nomor_po.focus();
          return (false);
        } if (form.unit.value == ""){
          alert("Unit masih kosong!");
          form.unit.focus();
          return (false);
        } if (form.stock.value == ""){
          alert("Stock masih kosong!");
          form.stock.focus();
          return (false);
        } 
      return (true);
        }
</script>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" onsubmit="return validasi_input(this)" action="<?php echo base_url()."index.php/atk/c_atk/do_add";?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputtext" class="col-sm-2 control-label">ATK ID</label>
                  <div class="col-sm-10">
                    <input type="text" name="atk_id" class="form-control" value="<?php echo $code; ?>" readonly="readonly">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputtext" class="col-sm-2 control-label">Produk ID</label>

                  <div class="col-sm-10">
                    <select name="produk_id" id="produk_id" class="form-control">
                      <?php if(count($produk)){ ?>
                        <option value=''>--Select---</option>
                        <?php foreach($produk as $list){ ?>
                          <?php 
                            echo "<option value='".$list['produk_id']."'>".$list['produk_id']. '-' .$list['produk_nama']."</option>";
                          ?>
                        <?php } ?>
                      <?php } ?>
                    </select>
                  </div>
                </div>


              <!-- Date In-->
              <!-- <div class="form-group">
                <label for="inputtext" class="col-sm-2 control-label">Tanggal Keluar</label>

                <div class="col-sm-10">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" name="tanggal_keluar" id="datepicker">
                </div> -->
                <!-- /.input group -->
              <!-- </div> -->
              <!-- /.form group -->

                <div class="form-group">
                  <label for="inputtext" class="col-sm-2 control-label">Unit</label>

                  <div class="col-sm-10">
                    <input type="text" name="unit" class="form-control" placeholder="Unit">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputtext" class="col-sm-2 control-label">Stock</label>

                  <div class="col-sm-10">
                    <input type="text" name="stock" class="form-control" placeholder="Stock" onkeypress="return hanyaAngka(event)">
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
//Date picker In
    $('#datepicker').datepicker({
      autoclose: true
    });
  });
</script>

</body>
</html>
