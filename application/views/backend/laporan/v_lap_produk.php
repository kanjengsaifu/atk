<!DOCTYPE html>
<html>
<head>
<?php $this->load->view('backend/komponen/basic'); ?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<title>AdminLTE 2 | LAPORAN PRODUK</title>
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
        LAPORAN PRODUK
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
            <a href="<?php echo base_url("index.php/laporan/c_lap_produk/cetak"); ?>"><button class="btn btn-success btn">Cetak Data</button></a>
              <table id="tbl_produk" class="table table-bordered table-striped tbl_produk">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Produk ID</th>
                  <th>Produk Nama</th>
                  <th>Nama Supplier</th>
                  <th>Unit</th>
                  <th>Jumlah</th>
                </tr>
                </thead>

                <tbody>
                <?php
                    ob_start();
                    if(!empty($produk)){
                        $no = 1;
                        foreach($produk as $data){
                            echo "<tr>";
                            echo "<td>".$no."</td>";
                            echo "<td>".$data->produk_id."</td>";
                            echo "<td>".$data->produk_nama."</td>";
                            echo "<td>".$data->nama_supplier."</td>";
                            echo "<td>".$data->unit."</td>";
                            echo "<td>".$data->jumlah."</td>";
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
