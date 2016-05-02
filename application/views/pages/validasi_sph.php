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
                                        <tbody>
                                        <tr>
                                            <th width="200px">Data Target Operasi P2TL TO</th>
											<th> :</th>
                                            <th><?echo $id_lap?></th>
                                        </tr>
										<tr>
											<td>Tanggal Periksa</td>
											<td> :</td>
											<td><?echo $tanggal_periksa?></td>
										</tr>
										
										<tr>
											<td>Petugas 1</td>
											<td> :</td>
											<td><?echo $petugas1?></td>
										</tr>
										<tr>
											<td>Petugas 2</td>
											<td> :</td>
											<td><?echo $petugas2?></td>
										</tr>										
										<tr>
											<td>Hasil Temuan</td>
											<td> :</td>
											<td><?echo $hasil_temuan_p2tl?></td>
										</tr>
										
										<tr>
											<td>Kesimpulan</td>
											<td> :</td>
											<td><?echo $kesimpulan?></td>
										</tr>
										<tr>
											<td>Inputer</td>
											<td> :</td>
											<td><?echo $usernamep2tl?></td>
										</tr>	
										<tr>
											<td>Tanggal Input</td>
											<td> :</td>
											<td><?echo $tanggal_input_p2tl?></td>
										</tr>										
										<tr>
                                            <th width="200px">Data Target Operasi P2TL</th>
											<th></th>
                                            <th></th>
                                        </tr>
										<tr>
											<td>Tanggal Laporan</td>
											<td width="10px"> :</td>
											<td><?echo $tanggal_melapor?></td>
										</tr>	
										<tr>
											<td>ID Pelanggan</td>
											<td> :</td>
											<td><?echo $id_pelanggan?></td>
										</tr>
										<tr>
											<td>Nama Pelanggan</td>
											<td> :</td>
											<td><?echo $nama_pelanggan?></td>
										</tr>
										<tr>
											<td>Daya</td>
											<td> :</td>
											<td><?echo $daya_pelanggan?></td>
										</tr>
										<tr>
											<td>Unit</td>
											<td> :</td>
											<td><?echo $nama_area?></td>
										</tr>
										<tr>
											<td>Alamat</td>
											<td> :</td>
											<td><?echo $alamat_pelanggan?></td>
										</tr>
										<tr>
											<td>Indikasi Laporan</td>
											<td> :</td>
											<td><?echo $indikasi?></td>	
										</tr>
										<tr>
											<td>Prioritas</td>
											<td> :</td>
											<td><?echo $kode_prioritas?></td>
										</tr>
										<tr>
											<th>Change Log SPV/Staff</th>
										</tr>
										<tr>
											<td>SPV</td>
											<td> :</td>
											<td><?echo $usernameolap1?></td>
										</tr>
										<tr>
											<td>Usulan Tindakan</td>
											<td> :</td>
											<td><?echo $tindakan_olap_satu?></td>
										</tr>
										<tr>
											<td>Keterangan</td>
											<td> :</td>
											<td><?echo $ketlapsatu?></td>
										</tr>
										
										<tr>
											<th>Change Log Asman</th>
											<td />
											<td />
										</tr>
										<tr>
											<td>Asman</td>
											<td> :</td>
											<td><?echo $usernameolap2?></td>
										</tr>
										<tr>
											<td>Usulan Tindakan</td>
											<td> :</td>
											<td><?echo $tindakan?></td>
										</tr>
										
										<tr>
											<td>Tanggal Periksa</td>
											<td> :</td>
											<td><?echo $tanggal_periksa?></td>
										</tr>
										<tr>
											<td>Petugas 1 Anev</td>
											<td> :</td>
											<td><?echo $petugas1_anev?></td>
										</tr>
										<tr>
											<td>Petugas 2 Anev</td>
											<td> :</td>
											<td><?echo $petugas2_anev?></td>
										</tr>
										<tr>
											<td>Temuan</td>
											<td> :</td>
											<td><?echo $temuan?></td>
										</tr>
										<tr>
											<td>Kesimpulan Anev</td>
											<td> :</td>
											<td><?echo $kesimpulan_anev?></td>
										</tr>
										<tr>
											<td>Inputer Anev</td>
											<td> :</td>
											<td><?echo $username_anev?></td>
										</tr>
										<tr>
											<td>Tanggal Input Anev</td>
											<td> :</td>
											<td><?echo $tanggal_input_anev?></td>
										</tr>
										<tr>
											<th>Data Hasil SPH</th>
											<th>:</th>
											<th>40</th>
										</tr>

										<tr>
											<td>Tanggal Input SPH</td>
											<td> :</td>
											<td><?echo $tanggal_input_sph?></td>
										</tr>
										<tr>
											<td>Tanggal SPH</td>
											<td> :</td>
											<td><?echo $tanggal_sph?></td>
										</tr>
										<tr>
											<td>TTD - PLN</td>
											<td> :</td>
											<td><?echo $ttd_pln?></td>
										</tr>
										<tr>
											<td>TTD - Pelanggan </td>
											<td> :</td>
											<td><?echo $ttd_pelanggan?></td>
										</tr>
										<tr>
											<td>Path File SPH </td>
											<td> :</td>
											<td><?echo $path_file_sph?></td>
										</tr>
										<tr>
											<td>Jumlah TS SPH </td>
											<td> :</td>
											<td><?echo $jumlah_ts_sph?></td>
										</tr>
										<tr>
											<td>Pelanggaran </td>
											<td> :</td>
											<td><?echo $kode_pelanggaran_sph?></td>
										</tr>
										<tr>
											<td>Kesimpulan Temuan </td>
											<td> :</td>
											<td><?echo $kesimpulan_temuan?></td>
										</tr>
										<tr>
											<td>Kesimpulan SPH </td>
											<td> :</td>
											<td><?echo $kesimpulan_sph?></td>
										</tr>



									</tbody>
								</table>
								<br />
								<table>
									<tbody>	
										<tr>
											<td />
											<form action="<?echo base_url('index.php/pages/p2tlDitolak')?>" method="POST">
												<input type="hidden" name="id_lap" value="<?echo $id_lap?>">
											<td><button type="submit" class="btn btn-danger"> Tidak </button></td>
											</form>
											<form action="<?echo base_url('index.php/pages/p2tlValid')?>" method="POST">
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