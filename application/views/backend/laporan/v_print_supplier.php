<html>
<head>
    <title>Cetak PDF</title>
</head>
<body>
<h1 style="text-align: center;">DATA SUPPLIER SAINT-GOBAIN BEKASI</h1>
<?php echo "Tanggal : ".date('d-m-Y'); ?>
<br><br>
<table border="0" width="100%">
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
</table>
</body>
</html>