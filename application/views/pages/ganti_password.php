<script>
	function notif()
	{
		alert("Pengisian data sukses!");
	}
</script>

            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Menu ini digunakan untuk merubah password Anda
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body" >
                            <form role="form" action="<?echo base_url('index.php/pages/gantipass')?>" method = "POST">
                                        			
										<div class="form-group">
                                            <label>Password Lama</label>
                                            <input class="form-control" type="password" name="password_lama">
                                        </div>	
										<div class="form-group">
                                            <label>Password Baru</label>
                                            <input class="form-control" type="password" name="password_baru">
                                        </div>	
										<div class="form-group">
                                            <label>Konfirmasi Password Baru</label>
                                            <input class="form-control" type="password" name="password_baruKonfirmasi">
                                        </div>	
										
										
											
										<button type="submit" class="btn btn-success" onclick="notif()">Update</button>
										
                                    </form>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
                
				

				
				
				
            </div>