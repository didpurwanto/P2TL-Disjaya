<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Penertiban Pemakaian Tenaga Listrik</title>

		<link href="<?php echo base_url("public/site/scripts/bootstrap/css/bootstrap.min.css")?>" rel="stylesheet">
		<link href="<?php echo base_url("public/site/scripts/bootstrap/css/bootstrap-responsive.min.css")?>" rel="stylesheet">
		<link href="<?php echo base_url("public/site/scripts/icons/general/stylesheets/general_foundicons.css")?>" media="screen" rel="stylesheet" type="text/css" />  
		<link href="<?php echo base_url("public/site/scripts/icons/social/stylesheets/social_foundicons.css")?>" media="screen" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url("public/site/scripts/fontawesome/css/font-awesome.min.css")?>">
		<link href="<?php echo base_url("public/site/scripts/carousel/style.css")?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url("public/site/scripts/camera/css/camera.css")?>" rel="stylesheet" type="text/css" />
		 <link href="<?php echo base_url("public/css/bootstrap.min.css")?>" rel="stylesheet" />
		<link href="<?php echo base_url("public/font-awesome/css/font-awesome.css")?>" rel="stylesheet" />
		<link href="<?php echo base_url("public/css/plugins/morris/morris-0.4.3.min.css")?>" rel="stylesheet" />
		<link href="<?php echo base_url("public/css/plugins/timeline/timeline.css")?>" rel="stylesheet" />
		<link href="<?php echo base_url("public/css/sb-admin.css")?>" rel="stylesheet" media="all" />	
		<link href="http://fonts.googleapis.com/css?family=Syncopate" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Pontano+Sans" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url("public/site/styles/custom.css")?>" rel="stylesheet" type="text/css" />		
		<script src="<?php echo base_url('public/js/validation/jquery.min.js')?>"></script>
		
		<script>
		$(function(){
		alert("masuk");
			$('#frm').submit(function(){
				alert("lalalala");
				$.post($('#frm').attr('action'),$('#frm').serialize(),function(json){
					if(json.st==0){
						alert('asd asd ');
						$('#msg-container').html(json.msg );
						
					}
					else{
						alert("sukses");
						location.href = "<?php echo base_url('index.php/pages/dashboard')?>";
					}
 
				},'json');
				return false;
			});
		});
		</script>
	
	</head>


	<body id="pageBody">
<?php echo form_open('pages/validat', array('id'=>'frm')) ?>
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
								<li><a href="<?php echo base_url("index.php/pages/about")?>">P2TL</a></li>
								
                            </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row-fluid">
                <div class="span12">
                    <div id="contentInnerSeparator"></div>
                </div>
            </div>
    </div>

    <div class="contentArea">

        <div class="divPanel notop page-content">

            

            <div class="row-fluid">
                <div class="span8">

	        <p><b>Silahkan mengisikan data diri Anda pada kolom di bawah ini!</b></p>  
			<br />            
			<form>
				<table>
					<tr><div>
						<td width="100 px"> Username  </td>
						<td width="10 px">:</td>
						<td><input type="text" name="username" value="" size="30" /></div>
					</tr>
					
					<tr><div>
						<td> Nama  </td>
						<td>:</td>
						<td><input type="text" name="nama" value="" size="30" /></div>
					</tr>
					<tr><div>
						<td> Email  </td>
						<td>:</td>
						<td><input type="text" name="email" value="" size="30" /></div>
					</tr>
					<tr><div>
						<td> Password  </td>
						<td>:</td>
						<td><input type="password" name="password" value="" size="30" /></div>
					</tr>
					<tr><div>
						<td> Konfirmasi  </td>
						<td>:</td>
						<td><input type="password" name="konfirmasi" value="" size="30" /></div>
					</tr>
					
				</table>
				<table>
					<tr>
						<td ><div id="msg-container" class="col-lg-16"></td>
					</tr>
				</table>
				<br />
				
				 <?php echo form_submit('btn_submit','Daftar Sekarang')?>
			</form>
                </div>
                <div class="span4">
                    <img src="<?php echo base_url("public/site/images/CTPT.jpg")?>">
					<br />
                    <h2>Alamat</h2>
                        <address><strong>PLN Disjaya<br />
                        Jalan Mohammad Ikhwan Ridwan Rais No. 1 <br/>
						Jakarta Pusat<br />
                        City, State, Zip<br />
                        <abbr title="Phone">P:</abbr> (021) 3454000 – 3455000</address> 
                    <br />
                </div>
            </div>

            <div id="footerInnerSeparator"></div>
        </div>
    </div>

    <div id="footerOuterSeparator"></div>

    
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

	<?php echo form_close();?>

</body>
</html>