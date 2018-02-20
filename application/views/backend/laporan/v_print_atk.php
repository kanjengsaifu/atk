<html>
<head>
    <title>Cetak PDF</title>
</head>
<body>
<h1 style="text-align: center;">DATA ATK SAINT-GOBAIN BEKASI</h1>
<?php echo "Tanggal : ".date('d-m-Y'); ?>
<br><br>
<table border="0" width="100%">
<tr>
    <th>No</th>
    <th>ATK ID</th>
    <th>Produk ID</th>
    <th>Nomor PO</th>
    <th>Unit</th>
    <th>Stock</th>
</tr>
<?php
ob_start();
if(!empty($atk)){
    $no = 1;
    foreach($atk as $data){
        echo "<tr>";
        echo "<td>".$no."</td>";
        echo "<td>".$data->atk_id."</td>";
        echo "<td>".$data->produk_id."</td>";
        echo "<td>".$data->nomor_po."</td>";
        echo "<td>".$data->unit."</td>";
        echo "<td>".$data->stock."</td>";
        echo "</tr>";
        $no++;
    }
}
?>
</table>
</body>
</html>