<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
	<link rel="stylesheet" href="<?php echo base_url()."assets/bootstrap/css/bootstrap.min.css"; ?>" >
	<!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/dist/css/AdminLTE.min.css"; ?>">

  <style>
  	.loginbox{
  		margin: 180px auto;
  		width: 450px;
  		position: relative;
  		border-radius: 15px;
  		background: #fffffff;
  	}
  	body{
      background-color: rgb(209, 209, 209);
  	}

  </style>
</head>
<body>
          <!-- Horizontal Form -->
        <div class="box box-info loginbox">
            <div class="box-header with-border">
              <h3 class="box-title">Login Form | Saint-Gobain Abrasive Diamas</h3>
            </div>
            <?php 
              if(isset($_POST['masuk'])){
                $u = $this->input->post('user');
                $p = $this->input->post('password');

                $this->db_model->getLoginData($u, $p);
              }
            ?>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Username</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="user" placeholder="Username">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" name="masuk" class="btn btn-info pull-right" onClick='validTextbox();'>Sign in</button>
              </div>
              <!-- /.box-footer -->
            </form>
        </div>
          <!-- /.box -->
</body>
</html>
