<?php $user = $this->session->userdata('user'); ?>
<!DOCTYPE html>
<html>
<body>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Halaman Utama Sistem Informasi Permintaan dan Pendataan Alat ATK</li>
			</ol>
		</div><!--/.row-->
        <br>
       <div class="panel panel-default">
                        
                    <div class="panel-body">
                            <div style="text-align:center;">
                            <img height="150" width="150" src="<?php echo base_url();?>assets/Login/img/login.png">
                            </div>
                            <div style="text-align:center;">
                            <h1><b> Selamat Datang <?php cetak($user['nama_user']); ?></b></h1>
                           </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div style="text-align: center;">
                            <p>
                            Aplikasi ini dibuat untuk mempermudah dalam melakukan penjualan pada toko "Nama toko"
                            </p>
                            <br>
                            <p><b>Pengembang : </b></p>
                            <p>
                                 Al-Falaq Project
                            </p>
                            <p><b>Email : aemail470@gmail.com</p>
                           
                        </div>
                    </div>
           
        </div>
        
	</div>	<!--/.main-->
	
    
    <!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Pengaturan akun</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" name="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">User Name</label>
                            <div class="col-md-9">
                                <input name="username" placeholder="User Name" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Password</label>
                            <div class="col-md-9">
                                <input name="password" placeholder="Password" class="form-control" type="password">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save_update()" class="btn btn-primary"><i class="fa fa-edit fa-fw"></i> Ubah</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
    
	<script src="<?php echo base_url();?>assets/template/js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url();?>assets/template/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/template/js/chart.min.js"></script>
	<script src="<?php echo base_url();?>assets/template/js/chart-data.js"></script>
	<script src="<?php echo base_url();?>assets/template/js/easypiechart.js"></script>
	<script src="<?php echo base_url();?>assets/template/js/easypiechart-data.js"></script>
	<script src="<?php echo base_url();?>assets/template/js/bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url();?>assets/template/js/custom.js"></script>
	
    <script src="<?php echo base_url();?>assets/script/User-Setting.js"></script>
    <script src="<?php echo base_url();?>assets/script/User-manage.js"></script>
		
</body>
</html>