<?php $user = $this->session->userdata('user');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Permintaan dan Pendataan Alat ATK</title>
	<link href="<?php echo base_url();?>assets/template/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/template/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/template/css/datepicker3.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/template/css/styles.css" rel="stylesheet">

      <!-- DataTables CSS -->
    <link href="<?php echo base_url();?>assets/template/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url();?>assets/template/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a  href="">
                <img height="50px" src="<?php echo base_url();?>assets/template/images/" alt="" />
                </a>
                
                <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                         <li><a onclick="edit_user('<?php echo $user['id_user']; ?>')"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url();?>/Controller_Masuk/keluar"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                    
                <!-- /.dropdown -->
            </ul>
                
				
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="<?php echo base_url();?>/assets/template/images/user.png" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
                <div class="profile-usertitle-name"><b><?php echo $user['nama_user']; ?></b></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<ul class="nav menu">
			<li><a href="<?php echo base_url(); ?>de69812784f2c02044e61be7t84cfe52"><em class="fa fa-home">&nbsp;</em> Beranda</a></li>
            <?php if($user['hak_akses']=='Pemilik'){ ; ?>
			<li><a href="<?php echo base_url(); ?>b6cdac2ab744696e170350fe2e6f979f"><em class="fa fa-users">&nbsp;</em> User</a></li>
			<?php } ?>
            <?php if($user['hak_akses']=='Admin'){ ; ?>
            	<li><a href="<?php echo base_url(); ?>b8e02d83ede9831bf79fb654793d8021"><em class="fa fa-database fa-fw">&nbsp;</em> Data Barang</a></li>
            	<!-- <li><a href="<?php echo base_url(); ?>6a031c485889b7b03a0852cfaeabf7f2"><em class="fa fa-shopping-cart fa-fw">&nbsp;</em> Permintaan Barang</a></li>
            	<li><a href="<?php echo base_url(); ?>4419ecc30ef2367f60f853083eadafce"><em class="fa fa-info-circle fa-fw">&nbsp;</em> Status Permintaan</a></li> -->
			<?php } ?>

			<?php if($user['hak_akses']=='Karyawan'){ ; ?>
            	<li><a href="<?php echo base_url(); ?>05bc3787f7fb67472fe96b4fc985e472"><em class="fa fa-shopping-cart fa-fw">&nbsp;</em> Penjualan</a></li>
            	<!-- <li><a href="<?php echo base_url(); ?>b8e02d83ede9831bf79fb654793d8021"><em class="fa fa-database fa-fw">&nbsp;</em> Data Barang</a></li>
            	<li><a href="<?php echo base_url(); ?>80d22e374dbdeb59260fe3de024b281c"><em class="fa fa-history">&nbsp;</em> Riwayat Permintaan</a></li> -->
			<?php } ?>
            
		</ul>
	</div><!--/.sidebar-->

    </body>