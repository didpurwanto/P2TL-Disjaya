<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Penertiban Pemakaian Tenaga Listrik</title>
<script type="text/javascript" src="<?php echo base_url("public/datepicker/jquery-1.3.2.min.js")?>"></script>
<script type="text/javascript" src="<?php echo base_url("public/datepicker/jquery-ui-1.7.2.custom.min.js")?>"></script>
<script type="text/javascript" src="<?php echo base_url("public/datepicker/tanggal.js")?>"></script>
<link type="text/css" rel="stylesheet" href="<?php echo base_url("public/datepicker/jquery-ui-1.7.2.custom.css")?>" />
<script type="text/javascript" src="<?php echo base_url("public/datepicker/jquery-ui-1.11.0.custom/external/jquery/jquery.js")?>"></script>
<script type="text/javascript" src="<?php echo base_url("public/datepicker/jquery-ui-1.11.0.custom/jquery-ui.js")?>"></script>
<script type="text/javascript" src="<?php echo base_url("public/datepicker/jquery-ui-1.11.0.custom/jquery-ui.min.js")?>"></script>
<link type="text/css" rel="stylesheet" href="<?php echo base_url("public/datepicker/jquery-ui-1.11.0.custom/jquery-ui.css")?>" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url("public/datepicker/jquery-ui-1.11.0.custom/jquery-ui.min.css")?>" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url("public/datepicker/jquery-ui-1.11.0.custom/jquery-ui.structure.css")?>" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url("public/datepicker/jquery-ui-1.11.0.custom/jquery-ui.structure.min.css")?>" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url("public/datepicker/jquery-ui-1.11.0.custom/jquery-ui.theme.css")?>" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url("public/datepicker/jquery-ui-1.11.0.custom/jquery-ui.theme.min.css")?>" />

    <link href="<?php echo base_url("public/css/bootstrap.min.css")?>" rel="stylesheet" />
    <link href="<?php echo base_url("public/font-awesome/css/font-awesome.css")?>" rel="stylesheet" />
    <link href="<?php echo base_url("public/css/plugins/morris/morris-0.4.3.min.css")?>" rel="stylesheet" />
    <link href="<?php echo base_url("public/css/plugins/timeline/timeline.css")?>" rel="stylesheet" />
    <link href="<?php echo base_url("public/css/sb-admin.css")?>" rel="stylesheet" media="all" />
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
						
						<!--<li><a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Monitoring <span class="fa arrow"></span></a>-->
                        <?if($this->session->userdata('hak_akses')>=1) echo '<li><a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Monitoring <span class="fa arrow"></span></a>'?>
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
						
						<!--<li><a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Approval <span class="fa arrow"></span></a>-->
                        <?if($this->session->userdata('hak_akses')>=2) echo '<li><a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Approval <span class="fa arrow"></span></a>'?>
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
						

						<!--<li><a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Bantuan <span class="fa arrow"></span></a>-->
                             <?if($this->session->userdata('hak_akses')>=1) echo '<li><a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Bantuan <span class="fa arrow"></span></a>'?>
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
                <div class="col-lg-12" id = "judul">
                    <h3 class="page-header">P2TL | Penertiban Pemakaian Tenaga Listrik</h3>
                </div>
				
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			<?php $this->load->view($isi); ?>  <!--LOAD PTG-->
            
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    
	
    <script src="<?php echo base_url("public/js/bootstrap.min.js")?>"></script>
    <script src="<?php echo base_url("public/js/plugins/metisMenu/jquery.metisMenu.js")?>"></script> <!-- ok -->
	<script src="<?php echo base_url("public/js/plugins/morris/raphael-2.1.0.min.js")?>"></script>
    <script src="<?php echo base_url("public/js/plugins/morris/morris.js")?>"></script>
    <script src="<?php echo base_url("public/js/sb-admin.js")?>"></script>    
    
</body>

</html>
