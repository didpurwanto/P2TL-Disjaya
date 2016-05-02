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
                <a class="navbar-brand" href="index.html">P2TL v1.0</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
               
                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Profil Anda</a>
                        </li>
                        
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url("index.php/pages/ganti_password")?>"><i class="fa fa-user fa-fw"></i> Ganti Password</a>
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
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?php echo base_url("index.php/spv/dashboard")?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li><a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Inputan <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
									<li>
										<a href="<?php echo base_url("index.php/spv/melaporkan")?>"><i class="fa fa-edit fa-fw"></i> Melaporkan</a>
									</li>
									<li>
										<a href="<?php echo base_url("index.php/spv/rekap_inputlap")?>"><i class="fa fa-edit fa-fw"></i> Input Lap 1</a>
									</li>
									<li>
										<a href="<?php echo base_url("index.php/spv/rekap_olahlap")?>"><i class="fa fa-edit fa-fw"></i> Olah Lap 2</a>
									</li>
									<li>
										<a href="<?php echo base_url("index.php/spv/rekap_cetak_nonp2tl")?>"><i class="fa fa-edit fa-fw"></i> Cetak TO Non P2TL</a>
									</li>
									<li>
										<a href="<?php echo base_url("index.php/pages/rekap_input_nonp2tl")?>"><i class="fa fa-edit fa-fw"></i> Input Hasil Non P2TL</a>
									</li>
									<li>
										<a href="<?php echo base_url("index.php/spv/rekap_cetakp2tl")?>"><i class="fa fa-edit fa-fw"></i> Cetak TO P2TL</a>
									</li>
									<li>
										<a href="<?php echo base_url("index.php/spv/rekap_input_p2tl")?>"><i class="fa fa-edit fa-fw"></i> Input Hasil P2TL</a>
									</li>
									<li>
										<a href="<?php echo base_url("index.php/spv/rekap_anev")?>"><i class="fa fa-edit fa-fw"></i> Input ANEV</a>
									</li>
									<li>
										<a href="<?php echo base_url("index.php/spv/rekap_sph")?>"><i class="fa fa-edit fa-fw"></i> Input SPH</a>
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
                                <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font">Didik Purwanto</strong> 
                                            <small class="pull-right text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 17/4/2014 10:46 AM
                                            </small>
                                        </div>
                                        <p>
                                            Iya, ini lagi diproses. Sabar om!
                                        </p>
                                    </div>
                                </li>
                                <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font">Fahmi Armand</strong> 
                                            <small class="pull-right text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 16/4/2014 10:46 AM
                                            </small>
                                        </div>
                                        <p>
                                            Buruan diproses ya om, penting nih!	
                                        </p>
                                    </div>
                                </li>
                                
                            </ul>
                        </div>
                        <!-- /.panel-body -->
                        <div class="panel-footer">
                            <div class="input-group">
                                <input id="btn-input" type="text" class="form-control input-sm" placeholder="Tulis komentar Anda disini . . ." />
                                <span class="input-group-btn">
                                    <button class="btn btn-warning btn-sm" id="btn-chat">
                                        Send
                                    </button>
                                </span>
                            </div>
                        </div>
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

    <script src="<?php echo base_url("public/js/jquery-1.10.2.js")?>"></script>
    <script src="<?php echo base_url("public/js/bootstrap.min.js")?>"></script>
    <script src="<?php echo base_url("public/js/plugins/metisMenu/jquery.metisMenu.js")?>"></script>
    <script src="<?php echo base_url("public/js/plugins/morris/raphael-2.1.0.min.js")?>"></script>
    <script src="<?php echo base_url("public/js/plugins/morris/morris.js")?>"></script>
    <script src="<?php echo base_url("public/js/sb-admin.js")?>"></script>
    <script src="<?php echo base_url("public/js/demo/dashboard-demo.js")?>"></script>

</body>
</html>
