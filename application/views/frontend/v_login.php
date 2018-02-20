 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?><!DOCTYPE html>  
 <head>
    <link href="<?php echo base_url() ?>/assets/dist/css/style_login.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>/assets/css/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>/assets/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>/assets/css/custom-styles.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href="<?php echo base_url() ?>/assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
   <meta charset="UTF-8">
   <title>
      Login
   </title>
 </head>
 <body>

 <!-- <body style="background-color: red"> -->
      <h1 align="center"><font face="kristen-itc"> SAINT GOBAIN </font></h1>
      
      <?php
   // Cetak jika ada notifikasi
      if($this->session->flashdata('sukses')) {
           echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
      }
      ?>
      
      <?php echo form_open('login');?>
      
      <div align="center">

      <p></p>
      <p></p>
      
      <!-- <p align="center">Username</p> -->
      <input type="text" name="username" placeholder="username" value="<?php echo set_value('username'); ?>"/>
      <p> <?php echo form_error('username'); ?> </p>
      

      <!-- <p>Password</p> -->
      <input type="password" name="password" placeholder="password" value="<?php echo set_value('password'); ?>"/>
      <p> <?php echo form_error('password'); ?> </p>
 
      <p>
<!--            <input type="submit" name="btnSubmit" value="Login" /> -->
           <button type="submit" name="submit" class="btn btn-primary">LOGIN</button>
           <!-- <button type="reset" name="reset" class="btn btn-primary">CANCEL</button> -->
      </p>
 
      <?php echo form_close();?>
 
      <p>
           Buat Akun, Silakan klik <?php echo anchor(site_url().'/register','di sini..'); ?>
      </p>
      </div>
 </body>
 </html>