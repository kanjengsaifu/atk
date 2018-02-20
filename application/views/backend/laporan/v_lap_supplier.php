<!DOCTYPE html>
<html>
<head>
<?php $this->load->view('backend/komponen/basic'); ?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<title>AdminLTE 2 | LAPORAN SUPPLIER</title>
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
        LAPORAN SUPPLIER
        <small>Control panel</small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <a href="<?php echo base_url("index.php/laporan/c_lap_supplier/cetak"); ?>"><button class="btn btn-success btn">Cetak Data</button></a>
              <table id="tbl_produk" class="table table-bordered table-striped tbl_produk">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Supplier ID</th>
                  <th>Nama Supplier</th>
                  <th>Alamat</th>
                  <th>Kota</th>
                  <th>No Telp</th>
                  <th>Fax</th>
                  <th>Email</th>
                </tr>
                </thead>

                <tbody>
                <?php
                    ob_start();
                    if(!empty($supplier)){
                        $no = 1;
                        foreach($supplier as $data){
                            echo "<tr>";
                            echo "<td>".$no."</td>";
                            echo "<td>".$data->supplier_id."</td>";
                            echo "<td>".$data->nama_supplier."</td>";
                            echo "<td>".$data->alamat."</td>";
                            echo "<td>".$data->kota."</td>";
                            echo "<td>".$data->telepon."</td>";
                            echo "<td>".$data->fax."</td>";
                            echo "<td>".$data->email."</td>";
                            echo "</tr>";
                            $no++;
                        }
                    }
                    ?>
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
