﻿<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Penertiban Pemakaian Tenaga Listrik</title>

		<link href="<?php echo base_url("public/site/scripts/bootstrap/css/bootstrap.min.css")?>" rel="stylesheet">
		<link href="<?php echo base_url("public/site/scripts/bootstrap/css/bootstrap-responsive.min.css")?>" rel="stylesheet">
		<!-- Icons -->
		<link href="<?php echo base_url("public/site/scripts/icons/general/stylesheets/general_foundicons.css")?>" media="screen" rel="stylesheet" type="text/css" />  
		<link href="<?php echo base_url("public/site/scripts/icons/social/stylesheets/social_foundicons.css")?>" media="screen" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url("public/site/scripts/fontawesome/css/font-awesome.min.css")?>">
		<link href="<?php echo base_url("public/site/scripts/carousel/style.css")?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url("public/site/scripts/camera/css/camera.css")?>" rel="stylesheet" type="text/css" />

		<link href="http://fonts.googleapis.com/css?family=Syncopate" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Pontano+Sans" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet" type="text/css">

		<link href="<?php echo base_url("public/site/styles/custom.css")?>" rel="stylesheet" type="text/css" />
	</head>

	<body id="pageBody">

	<div id="divBoxed" class="container">
		<div class="transparent-bg" style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: -1;zoom: 1;"></div>
		<div class="divPanel notop nobottom">
				<div class="row-fluid">
					<div class="span12">
						<div id="divLogo" class="pull-left">
							<a href="index.html" id="divSiteTitle">PLN Disjaya</a><br />
							<a href="index.html" id="divTagLine">Penertiban Pemakaian Tenaga Listrik</a>
						</div>

						<div id="divMenuRight" class="pull-right">
						<div class="navbar">
							<button type="button" class="btn btn-navbar-highlight btn-large btn-primary" data-toggle="collapse" data-target=".nav-collapse">
								NAVIGATION <span class="icon-chevron-down icon-white"></span>
							</button>
							<div class="nav-collapse collapse">
								<ul class="nav nav-pills ddmenu">
									<li class="active"><a href="<?php echo base_url("index.php/pages/home")?>">Home</a></li>
									<li><a href="<?php echo base_url("index.php/pages/about")?>">Seputar P2TL</a></li>
									<li><a href="<?php echo base_url("index.php/pages/signin")?>">Sign In</a></li>
								</ul>
							</div>
						</div>
						</div>

					</div>
				</div>

				<div class="row-fluid">
				<div class="span12">

                <div id="headerSeparator"></div>

                <div class="camera_full_width">
                    <div id="camera_wrap">
                        <div data-src="<?php echo base_url("public/site/slider-images/1.jpg")?>" ><div class="camera_caption fadeFromBottom cap1">Wujudkan PLN yang bersih dan bersahabat</div></div>
						<div data-src="<?php echo base_url("public/site/slider-images/2.jpg")?>" ><div class="camera_caption fadeFromBottom cap2">PLN 123, Akses tanpa Batas Untuk Kita Semua</div></div>
						<div data-src="<?php echo base_url("public/site/slider-images/3.jpg")?>" ><div class="camera_caption fadeFromBottom cap3">layanan setiap saat</div></div>
						
                    </div>
                    <br style="clear:both"/><div style="margin-bottom:40px"></div>
                </div>               

                <div id="headerSeparator2"></div>

            </div>
			</div>
		</div>

		<div class="contentArea">
			<div class="divPanel notop page-content">
				<div class="row-fluid">
				<!--Edit Main Content Area here-->
					<div class="span12" id="divMain">
						<h1>Selamat Datang</h1>
						<p><strong>Penertiban Pemakaian Tenaga Listrik (P2TL) adalah penertiban pengguna tenaga listrik yang tidak sesuai dengan standar pemasangan dan SPJBTL. Sedangkan tujuannya adalah untuk menurunkan susut secara non teknis adalah susut yang bukan berasal dari material PLN, sehingga mampu diatasi dengan dilakukannya penertiban. Dengan diadakannya P2TL, seluruh kerugian dapat diminimalisir sekecil mungkin. Sehingga yang tersisa hanya susut teknis yang secara alami tidak dapat dihilangkan, namun bisa diminimalisir.
						</p>
						<br />                   
						<br />                 
					</div>
				<!--End Main Content-->
				</div>
				<div id="footerInnerSeparator"></div>
			</div>
		</div>

		<div id="footerOuterSeparator"></div>
		<div id="divFooter" class="footerArea">			
		</div>
	</div>
	<br /><br /><br />

	<script src="<?php echo base_url("public/js/demo/dashboard-demo.js")?>"></script>
	<script src="<?php echo base_url("public/site/scripts/jquery.min.js")?>" type="text/javascript"></script> 
	<script src="<?php echo base_url("public/site/scripts/bootstrap/js/bootstrap.min.js")?>" type="text/javascript"></script>
	<script src="<?php echo base_url("public/site/scripts/default.js")?>" type="text/javascript"></script>
	<script src="<?php echo base_url("public/site/scripts/carousel/jquery.carouFredSel-6.2.0-packed.js")?>" type="text/javascript"></script>
	<script type="text/javascript">$('#list_photos').carouFredSel({ responsive: true, width: '100%', scroll: 2, items: {width: 320,visible: {min: 2, max: 6}} });</script>
	<script src="<?php echo base_url("public/site/scripts/camera/scripts/camera.min.js")?>" type="text/javascript"></script>
	<script src="<?php echo base_url("public/site/scripts/easing/jquery.easing.1.3.js")?>" type="text/javascript"></script>
	<script type="text/javascript">function startCamera() {$('#camera_wrap').camera({ fx: 'scrollLeft', time: 2000, loader: 'none', playPause: false, navigation: true, height: '35%', pagination: true });}$(function(){startCamera()});</script>
	</body>
</html>