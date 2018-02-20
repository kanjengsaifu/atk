<!DOCTYPE html>
<html>
<head>
<?php $this->load->view('backend/komponen/basic'); ?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<title>AdminLTE 2 | PRODUK</title>
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
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        PRODUK
        <small>Control panel</small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- Validasi Delete -->
    <script type="text/javascript" language="JavaScript">
         function konfirmasi()
         {
         tanya = confirm("Anda Yakin Akan Menghapus Data ?");
         if (tanya == true) return true;
         else return false;
         }</script>
            <!-- Validasi Tutup Delete -->
            <!-- /.box-header -->
            <div class="box-body">
              <table id="tbl_produk" class="table table-bordered table-striped tbl_produk">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Produk ID</th>
                  <th>Produk Nama</th>
                  <th>Nama Supplier</th>
                  <th>Unit</th>
                  <th>Jumlah</th>
                  <th>
                    <a href="<?php echo base_urL()."index.php/produk/c_produk/add_data";?>"> 
                    <button class="btn-sm btn btn-success">Tambah Data</button>
                    </a>
                  </th>
                </tr>
                </thead>

                <tbody>
                <?php $i = 1; foreach ($daftar as $row) { ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $row['produk_id']; ?></td>
                  <td><?php echo $row['produk_nama']; ?></td>
                  <td><?php echo $row['nama_supplier']; ?></td>
                  <td><?php echo $row['unit']; ?></td>
                  <td><?php echo $row['jumlah']; ?></td>                       
                  <td>
                    <a href="<?php echo base_url()."index.php/produk/c_produk/edit_data/".$row['produk_id']; ?>"><button class="btn btn-info btn-sm">EDIT</button></a>
                    <a onclick="return konfirmasi()" href="<?php echo base_url()."index.php/produk/c_produk/do_delete/".$row['produk_id']; ?>"><button class="btn btn-danger btn-sm">DELETE</button></a>
                  </td>
                  
                </tr>
                <?php $i++; } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
    </section>
  </div>
  
<!-- Footer -->

<?php $this->load->view('backend/komponen/footer'); ?>

</body>
</html>
