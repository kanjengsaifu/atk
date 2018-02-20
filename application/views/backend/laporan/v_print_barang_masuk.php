<html>
<head>
    <title>Cetak PDF</title>
</head>
<body>
<h1 style="text-align: center;">DATA BARANG MASUK SAINT-GOBAIN BEKASI</h1>
<?php echo "Tanggal : ".date('d-m-Y'); ?>
<br><br>
<table border="0" width="100%">
<tr>
    <th>No</th>
    <th>NO Transaksi</th>
    <th>Produk ID</th>
    <th>Tanggal Keluar</th>
    <th>Unit</th>
    <th>Jumlah</th>
</tr>
<?php
ob_start();
if(!empty($barang_masuk)){
    $no = 1;
    foreach($barang_masuk as $data){
        echo "<tr>";
        echo "<td>".$no."</td>";
        echo "<td>".$data->kode_masuk."</td>";
        echo "<td>".$data->produk_id."</td>";
        echo "<td>".$data->tgl_masuk."</td>";
        echo "<td>".$data->unit."</td>";
        echo "<td>".$data->jumlah."</td>";
        echo "</tr>";
        $no++;
    }
}
?>
</table>
</body>
</html>

