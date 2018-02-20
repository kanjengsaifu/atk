<?php
 defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  
  
  	  <link href="<?php echo base_url() ?>/assets/dist/css/style_login.css" rel="stylesheet" />
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <body>
  <?php
   // Cetak jika ada notifikasi
      if($this->session->flashdata('sukses')) {
           echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
      }
      ?>
      
      <?php echo form_open('login');?>
      
      <div align="center">
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Login</h1>
			</div>

			<div class="login-form">
				<div class="control-group">
				<input type="text" name="username" class="login-field" value="<?php echo set_value('username'); ?>" placeholder="username" id="login-name"/>
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>

				<div class="control-group">
				<input type="password" name="password" class="login-field" value="<?php echo set_value('password'); ?>" placeholder="password" id="login-pass">
				<label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>

				<a class="btn btn-primary btn-large btn-block" href="">login</a>
				<a class="login-link" href="">Lost your password?</a>
			</div>
		</div>
	</div>
</body>
  
  
</body>
</html>
