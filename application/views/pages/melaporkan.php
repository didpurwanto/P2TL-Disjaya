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
	<link href="<?php echo base_url("public/css/hidden.css")?>" rel="stylesheet" />
<script type="text/javascript" src="<?php echo base_url("public/js/hidden.js")?>"></script>
<script type="text/javascript" src="<?php echo base_url("public/js/hidden.js")?>"></script>

<script> 
	$(document).ready(function(){
	  $("#flip").click(function(){
		$("#panel").slideToggle("slow");
	  });
	});
</script>
 
<style> 
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

            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Menu ini digunakan untuk memasukkan dugaan laporan P2TL
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body" >
                            <form role="form" action="<? echo base_url('index.php/pages/inputLaporan')?>" method="POST">
                                        <div class="form-group">
                                            <label>ID Pelanggan</label>
                                            <input class="form-control" name="id_pelanggan">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Pelanggan</label>
                                            <input class="form-control" name="nama_pelanggan">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat Pelanggan</label>
                                            <input class="form-control"name="alamat_pelanggan">
                                        </div>
                                        <div class="form-group">
                                            <label for="dayaPelanggan">Daya Pelanggan</label>
                                            <select id="dayaPelanggan" class="form-control" name="daya_pelanggan">
                                            <option selected=\"true\" style=\"display:none;\">Pilih</option>
                                            <?
                                                foreach($daya as $rows){
                                                    echo "<option value='".$rows['DAYA']."'>".$rows['DAYA']."</option>";
                                                }
                                            ?>
                                            </select>
                                        </div>										
										<div class="form-group">
                                            <label for="unitPelanggan">Unit</label>
                                            <?
                                                echo "<select id=\"unitPelanggan\" class=\"form-control\" name=\"unit_pelanggan\"'>";
                                                echo "<option selected=\"true\" style=\"display:none;\">Pilih</option>";
                                                foreach($unit as $rows){
                                                    echo "<option value='".$rows['KDAREA']."'>".$rows['NAMA_AREA']."</option>";
                                                }
                                            ?>
                                            </select>
                                        </div>														
                                        <div class="form-group">
                                            <label for="tarifPelanggan">Tarif Pelanggan</label>
                                            <select id="tarifPelanggan" class="form-control" name="tarif_pelanggan">
                                            <option selected=\"true\" style=\"display:none;\">Pilih</option>
                                            <?
                                                foreach($tarif as $rows){
                                                    echo "<option value='".$rows['TARIF']."'>".$rows['TARIF']."</option>";
                                                }
                                            ?>
                                            </select>
                                        </div>
										<div class="form-group">
                                            <label>Indikasi / Keterangan</label>
                                            <textarea class="form-control" rows="3" name="indikasi"></textarea>
                                        </div>										
                                        <div class="form-group">
                                            <label for="dayaPelanggan">Prioritas Pemeriksaan</label>
                                            <?
                                                echo "<select id=\"prioritas\" class=\"form-control\" name=\"prioritas\"'>";
                                                echo "<option selected=\"true\" style=\"display:none;\">Pilih</option>";
                                                foreach($prioritas as $rows){
                                                    echo "<option value='".$rows['KODE_PRIORITAS']."'>".$rows['PRIORITAS']."</option>";
                                                }
                                            ?>
                                            </select>
                                        </div>	
										<button type="submit" class="btn btn-warning" onclick="notif()">Submit</button>
										
                                    </form>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
                
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Rekap Laporan
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                     <thead>
                                        <tr align="center" align="center">
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>ID Pelanggan</th>
                                            <th>Indikasi</th>
                                            <th>prioritas</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <?
                                        $i=1;
                                        foreach($result as $rows)
                                        {
                                            echo "<tbody>";
                                            echo "<tr class=\"odd gradeX\" align=\"center\">";
                                            echo "<td>".$i."</td>";
                                            $i = $i+1;
                                            echo "<td>".$rows['TANGGAL_MELAPOR']."</td>";
                                            echo "<td>".$rows['ID_PELANGGAN']."</td>";
                                            echo "<td>".$rows['INDIKASI_KETERANGAN']."</td>";
                                            echo "<td>".$rows['PRIORITAS']."</td>";
                                            echo "<td>".$rows['KODE_STATUS']."</td>";
                                            //echo "<td><a href=\"".base_url('index.php/pages/inputlap')."/".$rows['ID_LAPORAN']."\"> <font color=\"blue\">Proses</font></a></td>";
                                        }
                                    ?>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
				<!--div class="col-lg-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-clock-o fa-fw"></i> Perhatian
                        </div>
                        <div class="panel-body">
                            <a href="<?php echo base_url("index.php/pages/rekapLaporan")?>"><font color="blue"> Klik Disini untuk melihat rekap laporan </font></a>
                        </div>
                    </div>
                </div-->
                <!-- /.col-lg-4 -->

				<div class="col-lg-4" id="panel">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Peringatan
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <font color="red"> ID Pelanggan tidak ditemukan, silahkan isi data pelanggan dahulu! </font>
                        </div>
						<div class="panel-body">
						<div class="form-group">
                                            <label>Nama Pelanggan</label>
                                            <input class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat Pelanggan</label>
                                            <input class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="dayaPelanggan">Daya Pelanggan</label>
                                            <select id="dayaPelanggan" class="form-control">
                                            <option>120</option>
											<option>240</option>
											<option>360</option>
                                            </select>
                                        </div>										
										<div class="form-group">
                                            <label for="dayaPelanggan">Unit</label>
                                            <select id="dayaPelanggan" class="form-control">
                                            <option>Menteng</option>
											<option>Pasar Senen</option>
											<option>Kalideres</option>
                                            </select>
                                        </div>														
                                        <div class="form-group">
                                            <label for="dayaPelanggan">Tarif Pelanggan</label>
                                            <select id="dayaPelanggan" class="form-control">
                                            <option>1200</option>
											<option>2400</option>
											<option>3600</option>
                                            </select>
                                        </div>
										<button type="button" class="btn btn-warning">Gunakan Data</button>
						</div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>