<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Penertiban Pemakaian Tenaga Listrik</title>

    <link href="<?php echo base_url("public/css/bootstrap.min.css")?>" rel="stylesheet" />
    <link href="<?php echo base_url("public/font-awesome/css/font-awesome.css")?>" rel="stylesheet" />
    <link href="<?php echo base_url("public/css/plugins/morris/morris-0.4.3.min.css")?>" rel="stylesheet" />
    <link href="<?php echo base_url("public/css/plugins/timeline/timeline.css")?>" rel="stylesheet" />
    <link href="<?php echo base_url("public/css/sb-admin.css")?>" rel="stylesheet" media="all" />

</head>

<body>

    <div id="wrapper">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?echo base_url('index.php/pages/dashboard')?>">P2TL v1.0</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
               
                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="<?php echo base_url("index.php/pages/ganti_password")?>"><i class="fa fa-user fa-fw"></i> Ganti Password</a>
                        </li>
                        
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url("index.php/pages/logout")?>"><i class="fa fa-sign-out fa-fw"></i> Sign Out</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
                     
                        <li>
                            <a href="<?php echo base_url("index.php/pages/dashboard")?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li><a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Inputan <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                    <li>
                                        <?if($this->session->userdata('hak_akses')>=0) echo '<a href="'.base_url("index.php/pages/melaporkan").'"><i class="fa fa-edit fa-fw"></i> Melaporkan</a>'?>
                                    </li>
                                    <li>
                                        <?if($this->session->userdata('hak_akses')>=1) echo '<a href="'.base_url("index.php/pages/rekap_inputlap").'"><i class="fa fa-edit fa-fw"></i> Input Lap 1</a>'?>
                                    </li>
                                    <li>
                                       <?if($this->session->userdata('hak_akses')>=2) echo '<a href="'.base_url("index.php/pages/rekap_olahlap").'"><i class="fa fa-edit fa-fw"></i> Olah Lap 2</a>'?>
                                    </li>
                                    <li>
                                       <?if($this->session->userdata('hak_akses')>=1) echo '<a href="'.base_url("index.php/pages/rekap_cetak_p2tl").'"><i class="fa fa-edit fa-fw"></i> Cetak TO P2TL</a>'?>
                                    </li>
                                    <li>
                                        <?if($this->session->userdata('hak_akses')>=1) echo '<a href="'.base_url("index.php/pages/rekap_input_p2tl").'"><i class="fa fa-edit fa-fw"></i> Input Hasil P2TL</a>'?>
                                    </li>
                                    <li>
                                        <?if($this->session->userdata('hak_akses')>=1) echo '<a href="'.base_url("index.php/pages/rekap_anev").'"><i class="fa fa-edit fa-fw"></i> Input ANEV</a>'?>
                                    </li>
                                    <li>
                                        <?if($this->session->userdata('hak_akses')>=1) echo '<a href="'.base_url("index.php/pages/rekap_sph").'"><i class="fa fa-edit fa-fw"></i> Input SPH</a>'?>
                                    </li>
                                    <li>
                                        <?if($this->session->userdata('hak_akses')>=2) echo '<a href="'.base_url("index.php/pages/rekap_validasi_sph").'"><i class="fa fa-edit fa-fw"></i> Pengesahan SPH</a>'?>
                                    </li>    
                                    <li>
                                        <?if($this->session->userdata('hak_akses')>=1) echo '<a href="'.base_url("index.php/pages/rekap_cetak_nonp2tl").'"><i class="fa fa-edit fa-fw"></i> Cetak Non P2TL</a>'?>
                                    </li>
                                    <li>
                                        <?if($this->session->userdata('hak_akses')>=1) echo '<a href="'.base_url("index.php/pages/rekap_input_nonp2tl").'"><i class="fa fa-edit fa-fw"></i> Input Hasil Non P2TL</a>'?>
                                    </li>
                                    <li>
                                        <?if($this->session->userdata('hak_akses')>=2) echo '<a href="'.base_url("index.php/pages/rekap_validasi_nonp2tl").'"><i class="fa fa-edit fa-fw"></i> Validasi Non P2TL</a>'?>
                                    </li>
                                    <li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li><a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Monitoring <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                    <li>
                                        <?if($this->session->userdata('hak_akses')>=1) echo '<a href="'.base_url("index.php/pages/list_all_lap").'"><i class="fa fa-edit fa-fw"></i> List Semua Laporan</a>'?>
                                    </li>
                                    <li>
                                        <?if($this->session->userdata('hak_akses')>=1) echo '<a href="'.base_url("index.php/pages/rekap_status").'"><i class="fa fa-edit fa-fw"></i> Rekap Status ALL</a>'?>
                                    </li>    
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li><a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Approval <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                    <li>
                                        <?if($this->session->userdata('hak_akses')>=2) echo '<a href="'.base_url("index.php/pages/list_user").'"><i class="fa fa-edit fa-fw"></i> List Antrian User</a>'?>
                                        
                                    </li>
                                    <!--li>
                                        <?//if($this->session->userdata('hak_akses')>=2) echo '<a href="'.base_url("index.php/pages/disapprove").'"><i class="fa fa-edit fa-fw"></i> List User Ditolak</a>'?>
                                        
                                    </li-->
                                    <!--li>
                                        <?//if($this->session->userdata('hak_akses')>=2) echo '<a href="'.base_url("index.php/pages/approve").'"><i class="fa fa-edit fa-fw"></i> List User</a>'?>
                                        
                                    </li-->                                   
                                    
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        

                        <li><a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Bantuan <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                    <li>
                                        <?if($this->session->userdata('hak_akses')>=1) echo '<a href="'.base_url("index.php/pages/keterangan").'"><i class="fa fa-edit fa-fw"></i> Keterangan Status</a>'?>
                                        
                                    </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        
                        
                        
                    </ul>
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">P2TL | Penertiban Pemakaian Tenaga Listrik</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			<div class="row">
			<?php $this->load->view($isi); ?>  <!--LOAD PTG-->
            <!-- /.row -->
			
			<div class="col-lg-5">
                    <div class="chat-panel panel panel-default">
					
                        <div class="panel-heading">
                            <i class="fa fa-comments fa-fw"></i>
                            Komentar
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						



						<ul class="chat">
                                
                            </ul>
                            <ul style ="list-style: none;"  id="update" class="chat">

                            <?
                            foreach ($komentar as $rows)
                            {
                                echo "<li class=\"left clearfix\">";
                                echo "<span class=\"chat-img pull-left\">";
                                    echo "<img src=\"http://placehold.it/50/55C1E7/fff\" alt=\"User Avatar\" class=\"img-circle\" />";
                                echo "</span>";
                                echo "<div class=\"chat-body clearfix\">";
                                    echo "<div class=\"header\">";
                                        echo "<strong class=\"primary-font\">&nbsp ".$rows['USERNAME']."</strong> ";
                                        echo "<small class=\"pull-right text-muted\">";
                                            echo "<i class=\"fa fa-clock-o fa-fw\"></i> ".$rows['TANGGAL_KOMENTAR']."";
                                        echo "</small>";
                                    echo "</div>";
                                    echo "<p>";
                                        
                                        echo $rows['ISI_KOMENTAR'];
                                    echo "</p>";
                                echo "</div>";
                            echo "</li>";
                            }
                            ?>
                            </ul>

							<div id="flash" align="center" ></div>
							<form action="#" method="post" id="formurang">
                            <input type = "hidden" value = "<?php echo $id_lap?>" id = "id_lap">  
							<textarea name="comment" id="comment" style="width:360px" placeholder="Komentar Anda..."></textarea><br />
							<br />
							<div style="margin-left:300px">
							<button class="btn btn-warning btn-sm" id="buttonkomen" type="submit" onclick="$.('#formurang').submit();">Submit</button><br /><br />
							</div>
							
					
							</form>
                        </div>
                        <!-- /.panel-body -->
                        
                        <!-- /.panel-footer -->
                    </div>
                    <!-- /.panel .chat-panel -->
                </div>
                <!-- /.col-lg-4 -->
			</div>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

	
    <script src="<?php echo base_url("public/js/bootstrap.min.js")?>"></script>
    <script src="<?php echo base_url("public/js/plugins/metisMenu/jquery.metisMenu.js")?>"></script> <!-- ok -->
	<script src="<?php echo base_url("public/js/plugins/morris/raphael-2.1.0.min.js")?>"></script>
    <script src="<?php echo base_url("public/js/plugins/morris/morris.js")?>"></script>
    <script src="<?php echo base_url("public/js/sb-admin.js")?>"></script>
	
	<script type="text/javascript">

	$(function() 
	{
		$("#buttonkomen").click(function() {
		var comment = $("#comment").val();
        var id_lap = $("#id_lap").val();
		var dataString = 'comment=' + comment + '&id_lap=' + id_lap;

		if(comment=='')
		{
			alert('Tidak Boleh ada yang kosong');
		}
		else
		{
			
			$.ajax(
			{
				type: "POST",
				url: "<?php echo base_url("index.php/pages/komentarajax")?>",
				data: dataString,
				cache: false,
				success: function(html)
				{
					$("ul#update").append(html);
					document.getElementById('comment').value='';
					
					$("#flash").hide();
				}
			});
		}
		return false;
	});



	});


	</script>
	
</body>
</html>

</body>

</html>
