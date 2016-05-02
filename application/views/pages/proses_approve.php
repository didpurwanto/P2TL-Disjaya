<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Penertiban Pemakaian Tenaga Listrik</title>

    <link href="<?php echo base_url("public/css/bootstrap.min.css")?>" rel="stylesheet" />
    <link href="<?php echo base_url("public/font-awesome/css/font-awesome.css")?>" rel="stylesheet" />
    <link href="<?php echo base_url("public/css/plugins/morris/morris-0.4.3.min.css")?>" rel="stylesheet" />
    <link href="<?php echo base_url("public/css/plugins/timeline/timeline.css")?>" rel="stylesheet" />
    <link href="<?php echo base_url("public/css/sb-admin.css")?>" rel="stylesheet" media="all" />
    <link href="<?php echo base_url("public/css/hidden.css")?>" rel="stylesheet" />

    
    <script src="<?php echo base_url("public/js/jquery-1.10.2.js")?>"></script>
    <script src="<?php echo base_url("public/js/bootstrap.min.js")?>"></script>
    <script src="<?php echo base_url("public/js/plugins/metisMenu/jquery.metisMenu.js")?>"></script>
    <script src="<?php echo base_url("public/js/plugins/morris/raphael-2.1.0.min.js")?>"></script>
    <script src="<?php echo base_url("public/js/plugins/morris/morris.js")?>"></script>
    <script src="<?php echo base_url("public/js/sb-admin.js")?>"></script>
    <script src="<?php echo base_url("public/js/demo/dashboard-demo.js")?>"></script>

</head>

<link href="<?php echo base_url("public/css/hidden.css")?>" rel="stylesheet" />
<script type="text/javascript" src="<?php echo base_url("public/js/hidden.js")?>"></script>
<script type="text/javascript" src="<?php echo base_url("public/js/hidden.js")?>"></script>
 <script type="text/javascript" src="<?php echo base_url('public/js/jquery-1.7.min.js')?>"></script>

<script type="text/javascript">
$(document).ready(function(){
      $("#pilih").change(function(){
        var x=$('#pilih option:selected').val();
        if(x==1)
        {
            $("#hilang").show();
            $('#button').hide();
        }
        else
        {
            $("#hilang").hide();
            $('#button').show();
        }
      });
    });
</script>

<script> 
	$(document).ready(function(){
	  $("#hak_akses").change(function(){
           $("#button").show();
	  });
	});
</script>
 
<style> 
    div.hidden {
    visibility: hidden;
}
	#panel,#flip
	{
	padding:5px;
	
	}
	#panel
	{
	padding:15px;
	display:none;
	}

</style>

<script>
	function notif()
	{
		//alert("Sukses!");
        window.parent.location.reload();
        if (window.opener != null && !window.opener.closed) {
                window.opener.location.href = "<?echo base_url('index.php/pages/dashboard')?>";
            }
        window.close();

	}
</script>

            <div class="row">
                <div class="col-lg-5">
                    <div class="panel panel-default">
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body" >
                            <form role="form" action="<?echo base_url('index.php/pages/approving')?>" method="POST">
                                        <div class="form-group">
                                            <label>Tanggal Daftar</label>
                                            <input class="form-control" name="tanggal" disabled value="<?echo $tanggal?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control" disabled value="<?echo $username?>">
                                            <input type="hidden" name="username" value="<?echo $username?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama_user" disabled value="<?echo $nama_user?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" name="email_user" disabled value="<?echo $email_user?>">
                                        </div>
                                        <div class="form-group" id="pilihan">
                                            <label for="dayaPelanggan">Approval</label>
                                            <select id="pilih" name="pilih" class="form-control">
                                            <option selected="true" style="display:none;">Pilih</option>    
                                            <option value="1">Disetujui</option>
                                            <option value="0">Ditolak</option>
                                            </select>
                                        </div>  
                                        <div  id="hilang" style="display: none;">
                                            <label for="dayaPelanggan">Privilege</label>
                                            <select name="hak_akses" id="hak_akses" class="form-control">
                                            <option selected="true" style="display:none;">Hak akses</option>    
                                            <option value='2'>Admin</option>
                                            <option value='1'>Supervisor</option>
                                            <option value='0'>Umum</option>
                                            </select>
                                        </div>  
											<br/>
										<button id="button" type="submit" class="btn btn-warning" onclick="notif()" style="display: none;">OK</button>
										
                                    </form>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
                
				

				
                </div>
            </div>