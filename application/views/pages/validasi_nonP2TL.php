<script type="text/javascript" src="<?php echo base_url('public/datepicker/jquery-1.3.2.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('public/datepicker/jquery-ui-1.7.2.custom.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('public/datepicker/tanggal.js')?>"></script>
<link type="text/css" rel="stylesheet" href="<?php echo base_url('public/datepicker/jquery-ui-1.7.2.custom.css')?>" />


<script type="text/javascript" src="<?php echo base_url('public/datepicker/jquery-ui-1.11.0.custom/external/jquery/jquery.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('public/datepicker/jquery-ui-1.11.0.custom/jquery-ui.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('public/datepicker/jquery-ui-1.11.0.custom/jquery-ui.min.js')?>"></script>

<link type="text/css" rel="stylesheet" href="<?php echo base_url('public/datepicker/jquery-ui-1.11.0.custom/jquery-ui.css')?>" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url('public/datepicker/jquery-ui-1.11.0.custom/jquery-ui.min.css')?>" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url('public/datepicker/jquery-ui-1.11.0.custom/jquery-ui.structure.css')?>" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url('public/datepicker/query-ui-1.11.0.custom/jquery-ui.structure.min.css')?>" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url('public/datepicker/jquery-ui-1.11.0.custom/jquery-ui.theme.css')?>" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url('public/datepicker/jquery-ui-1.11.0.custom/jquery-ui.theme.min.css')?>" />

<link href="<?php echo base_url("public/datetimepicker/sample/")?>./bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="<?php echo base_url("public/datetimepicket/sample/")?>../css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Rekap Data

                        </div>
                        <!-- /.panel-heading -->
                        
						<div class="panel-body">
                            
                                <table>
                                    <tbody>
                                        <tr>
                                            <th width="185px">Data Target Operasi P2TL</th>
											<td> :</td>
                                            <td><?echo $id_lap ?></td>
                                        </tr>
										<tr> <td>&nbsp</td></tr>
										<tr>
											<th>Tanggal Laporan</th>
											<td> :</td>
											<td><?echo $tanggal_melapor?></td>
										</tr>
										<tr> <td>&nbsp</td></tr>
										<tr>
											<th>ID Pelanggan</th>
											<td> :</td>
											<td><?echo $id_pelanggan?></td>
										</tr>
										<tr> <td>&nbsp</td></tr>
										<tr>
											<th>Nama Pelanggan</th>
											<td> :</td>
											<td><?echo $nama_pelanggan?></td>
										</tr>
										<tr> <td>&nbsp</td></tr>
										<tr>
											<th>Daya</th>
											<td> :</td>
											<td><?echo $daya_pelanggan?></td>
										</tr>
										<tr> <td>&nbsp</td></tr>
										<tr>
											<th>Unit</th>
											<td> :</td>
											<td><?echo $nama_area ?></td>
										</tr>
										<tr> <td>&nbsp</td></tr>
										<tr>
											<th>Indikasi Laporan</th>
											<td> :</td>
											<td><?echo $indikasi_keterangan ?></td>
										</tr>
										<tr> <td>&nbsp</td></tr>
										<tr>
											<th>Prioritas</th>
											<td> :</td>
											<td> <?echo $prioritas ?> </td>
										</tr>
										<tr> <td>&nbsp</td></tr>
										
									</tbody>
								</table>
								<br />							
								<table>
									<tbody>	
										<tr>
											<td />
											<form action="<?echo base_url('index.php/pages/nonp2tlDitolak')?>" method="POST">
												<input type="hidden" name="id_lap" value="<?echo $id_lap?>">
											<td><button type="submit" class="btn btn-danger"> Tidak </button></td>
											</form>
											<form action="<?echo base_url('index.php/pages/nonp2tlValid')?>" method="POST">
											<td width="10px">
												<input type="hidden" name="id_lap" value="<?echo $id_lap?>">
											<td><button type="submit" class="btn btn-success"> Valid </button></td>
											</form>
										</tr>
                                    </tbody>
                                </table>
                        </div>
						
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
                
                <!-- /.col-lg-4 -->

<script type="text/javascript" src="<?php echo base_url("public/datetimepicker/sample")?>/jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo base_url("public/datetimepicker/sample")?>/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url("public/datetimepicker")?>/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo base_url("public/datetimepicker")?>/js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1
    });
	$('.form_date').datetimepicker({
        language:  'id',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
	$('.form_time').datetimepicker({
        language:  'id',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 1,
		minView: 0,
		maxView: 1,
		forceParse: 0
    });
</script>