  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url()."assets/dist/img/Logo_Saint-Gobain.png";?>" class="img-square" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>ATK TOOLS</p>
          
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">DATA</li>
        
        
        <!-- <li>
          <a href="<?php echo base_url()."index.php/produk/c_produk/index";?>">
            <i class="fa fa-fw fa-dropbox"></i> <span>Produk</span>
          </a>
        </li>
        <li>
          <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>Gudang</span>
          </a>
        </li> -->
        <li>
          <a href="<?php echo base_url()."index.php/c_user_dashboard/index";?>">
            <i class="fa fa-th"></i> <span>Home</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url()."index.php/c_user_about/index";?>">
            <i class="fa fa-th"></i> <span>About</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url()."index.php/karyawan/c_user_karyawan/index";?>">
            <i class="fa fa-th"></i> <span>Karyawan</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url()."index.php/divisi/c_user_divisi/index";?>">
            <i class="fa fa-th"></i> <span>Divisi</span>
          </a>
        </li>
        <!-- <li>
          <a href="<?php echo base_url()."index.php/supplier/c_supplier/index";?>">
            <i class="fa fa-th"></i> <span>Supplier</span>
          </a>
        </li> -->

        <!-- MASTER -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()."index.php/produk/c_user_produk/index";?>"><i class="fa fa-circle-o"></i> Produk</a></li>
            <li><a href="<?php echo base_url()."index.php/supplier/c_user_supplier/index";?>"><i class="fa fa-circle-o"></i> Supplier</a></li>
            <li><a href="<?php echo base_url()."index.php/atk/c_user_atk/index";?>"><i class="fa fa-circle-o"></i> ATK</a></li>
          </ul>
        </li>

       <!--  <li>
          <a href="<?php echo base_url()."logout";?>"
            <i class="fa fa-th"></i> <span>Logout</span>
          </a>
        </li> -->

        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Setting</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()."logout";?>"<i class="fa fa-circle-o"></i> Logout</a></li>
          </ul>
        </li>
              
      </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>