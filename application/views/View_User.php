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
				<li class="active">Halaman User</li>
			</ol>
		</div><!--/.row-->
<div class="panel panel-default">
                        <div class="panel-heading">                            
                            <button class="mx-sm-3 btn btn-primary btn-lg" onclick="add_user()"> <i class="fa fa-plus fa-fw"></i> Tambah User </button>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="tabel_user">
                                <thead>
                                    <tr>
                                        <th class="center">NAMA</th>
                                        <th class="center">JABATAN</th>
                                        <th class="center">USER NAME</th>
                                        <th class="center">PASSWORD</th>
                                        <th class="center"></th>
                                        <th class="center"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($list as $b){ ?>
                                    <tr class="odd gradeX">
                                        <td class="center"><?php cetak($b->nama_user) ?></td>
                                        <td class="center"><?php cetak($b->jabatan) ?></td>
                                        <td class="center"><?php cetak($b->username) ?></td>
                                        <td class="center"><?php cetak($this->encrypt->decode($b->password)) ?></td>
                                        <td class="center">
                                            <button class="btn btn-primary" onclick="edit_data_user('<?php  cetak($b->username)?>')"> <i class="fa fa-edit fa-fw"></i> Edit</button>      
                                            
                                        </td>
                                        <td class="center">
                                        <button class="btn btn-danger" onclick="delete_user('<?php  cetak($b->username)?>')"> <i class="glyphicon glyphicon-trash"></i> Hapus</button>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                    
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
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
    
 <!-- Bootstrap modal -->
<div class="modal fade" id="modal_form_add" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">User Form</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form_user" name="form_user" class="form-horizontal">
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Nama</label>
                            <div class="col-md-9">
                                <input name="nama_user" placeholder="Nama" class="form-control" type="text" >
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Jabatan</label>
                            <div class="col-md-9">
                                <select name="jabatan" class="form-control">
                                    <option value="">--Pilih Jabatan--</option>
                                    <option value="Pemilik">Pemilik</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Karyawan">Karyawan</option>
                                </select>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label col-md-3">User Name</label>
                            <div class="col-md-9">
                                <input name="username" placeholder="User Name" class="form-control" type="text" >
                                <span class="help-block"></span>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label col-md-3">Password</label>
                            <div class="col-md-9">
                                <input name="password" placeholder="Password" class="form-control" type="password" >
                                <span class="help-block"></span>
                            </div>
                        </div>
                        
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save_user()" class="btn btn-primary"><i class="fa fa-save fa-fw"></i> Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->  
    
    
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
    
     
    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url();?>assets/template/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets/template/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/template/datatables-responsive/dataTables.responsive.js"></script>
    
    <script>
    $(document).ready(function() {
        $('#tabel_user').DataTable({
            responsive: true
        });
    });
    </script>
		
</body>
</html>