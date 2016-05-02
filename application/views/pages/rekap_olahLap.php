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

	<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Rekap Data
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr align="center" align="center">
                                            <th>No</th>
                                            <th>Sejak</th>
                                            <th>ID Pelanggan</th>
                                            <th>Indikasi</th>
                                            <th>Prioritas</th>
											<th>Status</th>
											<th>Action</th>
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
                                            echo "<td><a href=\"".base_url('index.php/pages/olahLap')."/".$rows['ID_LAPORAN']."\"> <font color=\"blue\">Proses</font></a></td>";
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
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->