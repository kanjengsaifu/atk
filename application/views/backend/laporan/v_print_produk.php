<html>
<head>
    <title>Cetak PDF</title>
</head>
<body>
<h1 style="text-align: center;">DATA PRODUK SAINT-GOBAIN BEKASI</h1>
<?php echo "Tanggal : ".date('d-m-Y'); ?>
<br><br>
<table border="0" width="100%">
<tr>
    <th>No</th>
    <th>Produk ID</th>
    <th>Produk Nama</th>
    <th>Nama Supplier</th>
    <th>Unit</th>
    <th>Jumlah</th>
</tr>
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
</table>
</body>
</html>