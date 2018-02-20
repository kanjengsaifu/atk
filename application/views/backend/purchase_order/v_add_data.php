<!DOCTYPE html>
<html>
<head>
<?php $this->load->view('backend/komponen/basic'); ?>
  <title>AdminLTE 2 | PURCHASE ORDER</title>
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
              <h3 class="box-title">Form Data Purchase Order</h3>
            </div>
			
            <?php 
				$code = "";
				if($this->uri->segment(3) == "edit"){
				  $code = $rc->position_code;
				}else{
				  $code = generate_code('nomor_po', 'purchase_order', 'NO');
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
       <!-- Validasi text prod_id -->     
  <script type="text/javascript">
      function validasi_input(form){
          if (form.nomor_po.value == ""){
          alert("Nomor PO masih kosong!");
          form.nomor_po.focus();
          return (false);
        } if (form.supplier_id.value == ""){
          alert("Supplier ID masih kosong!");
          form.supplier_id.focus();
          return (false);
        } if (form.produk_id.value == ""){
          alert("Produk ID masih kosong!");
          form.produk_id.focus();
          return (false);
        } if (form.harga.value == ""){
          alert("Harga masih kosong!");
          form.harga.focus();
          return (false);
        } if (form.jumlah.value == ""){
          alert("Jumlah masih kosong!");
          form.jumlah.focus();
          return (false);
        } if (form.total.value == ""){
          alert("Total masih kosong!");
          form.total.focus();
          return (false);
        }
      return (true);
        }

</script>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" onsubmit="return validasi_input(this)" action="<?php echo base_url()."index.php/purchase_order/c_purchase_order/do_add";?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputtext" class="col-sm-2 control-label">Nomor PO</label>
                  <div class="col-sm-10">
                    <input type="text" name="nomor_po" class="form-control" value="<?php echo $code; ?>" readonly="readonly">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputtext" class="col-sm-2 control-label">Supplier ID</label>

                  <div class="col-sm-10">
                     <select name="supplier_id" id="supplier_id" class="form-control">
                      <?php if(count($supplier)){ ?>
                        <option value=''>--Select---</option>
                        <?php foreach($supplier as $list){ ?>
                          <?php 
                            echo "<option value='".$list['supplier_id']."'>".$list['supplier_id']."</option>";
                          ?>
                        <?php } ?>
                      <?php } ?>
                    </select>
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
                            echo "<option value='".$list['produk_id']."'>".$list['produk_id']."</option>";
                          ?>
                        <?php } ?>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="inputtext" class="col-sm-2 control-label">Harga</label>

                  <div class="col-sm-10">
                    <input type="text" id="harga" name="harga" class="form-control" placeholder="Harga" onkeypress="return hanyaAngka(event)" onkeyup="sum();">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputtext" class="col-sm-2 control-label">Jumlah</label>

                  <div class="col-sm-10">
                    <input type="text" id="jumlah_order" name="jumlah_order" class="form-control" placeholder="Jumlah Order" onkeypress="return hanyaAngka(event)" onkeyup="sum();">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputtext" class="col-sm-2 control-label">Total</label>

                  <div class="col-sm-10">
                    <input type="text" id="total" name="total" class="form-control" placeholder="Total" onkeypress="return hanyaAngka(event)">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info" >Save</button>
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
  function sum() {
      var txtFirstNumberValue = document.getElementById('harga').value;
      var txtSecondNumberValue = document.getElementById('jumlah_order').value;
      var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('total').value = result;
      }
}
</script>
</body>
</html>


