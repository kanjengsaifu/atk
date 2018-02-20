<!DOCTYPE html>
<html>
<head>
<?php $this->load->view('backend/komponen/basic'); ?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<title>AdminLTE 2 | Header</title>
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
        Supplier
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
                  <th>ID Supplier</th>
                  <th>Nama Supplier</th>
                  <th>Alamat</th>
                  <th>Kota</th>
                  <th>No Telp</th>
                  <th>Fax</th>
                  <th>Email</th>
                  <th>
                    <a href="<?php echo base_urL()."index.php/supplier/c_supplier/add_data";?>"> 
                    <button class="btn-sm btn btn-success">Tambah Data</button>
                    </a>
                  </th>
                </tr>
                </thead>

                <tbody>
                <?php $i = 1; foreach ($daftar as $row) { ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $row['supplier_id']; ?></td>
                  <td><?php echo $row['nama_supplier']; ?></td>
                  <td><?php echo $row['alamat']; ?></td>
                  <td><?php echo $row['kota']; ?></td>
                  <td><?php echo $row['telepon']; ?></td>                       
                  <td><?php echo $row['fax']; ?></td>
                  <td><?php echo $row['email']; ?></td>
                  <td align="center">
                    <a href="<?php echo base_url()."index.php/supplier/c_supplier/edit_data/".$row['supplier_id']; ?>"><button class="btn btn-info btn-sm">EDIT</button></a>
                    <a onclick="return konfirmasi()" href="<?php echo base_url()."index.php/supplier/c_supplier/do_delete/".$row['supplier_id']; ?>"><button class="btn btn-danger btn-sm">DELETE</button></a>
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
