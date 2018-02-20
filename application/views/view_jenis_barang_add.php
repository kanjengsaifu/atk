<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(). "css/main_user.css"; ?>">

		<meta charset="UTF-8">
		<title>PAF DISTRO</title>

		<style type="text/css">
			body{
				margin-left: 0px;
				margin-right: 0px;
				margin-top: 0px;
				margin-bottom: 0px;
				background-color: #ebebeb;
			}
		</style>
	</head>

	<?php 
		$code = "";
		if($this->uri->segment(3) == "edit"){
			$code = $rc->position_code;
		}else{
			$code = generate_code('kode_dong', 'jenis_barang', 'BRG');
		}
	?>

	<body>
		<div id="container">
			<div id="header"></div>
			<div id="menu">
				<ul>
					<li><a href="#">HOME</a></li>
					<li><a href="#">MASTER</a>
						<ul>
							<li><a href="<?php echo base_url(). "index.php/controller_barang/index"; ?>">BARANG</a></li><br/>
							<li><a href="<?php echo base_url(). "index.php/controller_jenis_barang/index"; ?>">JENIS BARANG</a></li><br/>
							<li><a href="<?php echo base_url(). "index.php/controller_user/index"; ?>">USER</a></li>
						</ul>
					</li>
					<li><a href="#">TRANSAKSI</a></li>
					<li><a href="#">ABOUT</a></li>
				</ul>
			</div>
			<div id="sidebar"></div>
			<div id="content">
				<table border="0" align="center" style="border-collapse: collapse; font-family: monospace;">
				<h1 align="center" style="font-family: monospace;">FORM INPUT JENIS BARANG</h1>
					<form method="post" action="<?php echo base_url(). "index.php/controller_jenis_barang/do_add" ?>">
						<tr>
							<td width="100">ID</td>
							<td>
								<input type="text" name="id_jenis_barang" size="30" readonly="readonly">
							</td>
						</tr>

						<tr>
							<td width="100">NAMA JENIS</td>
							<td>
								<input type="text" name="nama_jenis" size="30">
							</td>
						</tr>

						<tr>
							<td width="100">KODE DONG</td>
							<td>
								<input type="text" name="kode_dong" placeholder="Kode Dong" value="<?php echo $code; ?>" readonly="readonly">
							</td>
						</tr>

						<tr>
							<td></td>
							<td>
								<input type="submit" name="input" value="INPUT">
								<input type="reset" name="cancel" value="CANCEL">
							</td>
						</tr>
					</form>
				</table>
			</div>
			<div id="footer"></div>
		</div>		
	</body>
</html>