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
                            <i class="fa fa-bar-chart-o fa-fw"></i> Keterangan
                        </div>
                        <!-- /.panel-heading -->                        
						<div class="panel-body">
                                <table>
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
											<td>Keterangan</td>
											<td> :</td>
											<td><?echo $ket_olap_dua?></td>
										</tr>
										<tr>
											<th>ANEV</th>
											<td />
											<td />
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



                                    </tbody>
                                </table>
                        </div>
						
                        <!-- /.panel-body -->
						
						
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Input Data Surat Perjanjian Hutang
                        </div>
                        <!-- /.panel-heading -->                        
						<div class="panel-body">
							<form action="<?echo base_url('index.php/pages/insertsph')?>" method="post"enctype="multipart/form-data">
                                <table>
                                    <tbody>
                                        <tr>
                                            <th width="185px">ID Laporan</th>
											<td width="10px"> :</td>
                                            <td><input size="40px" class="form-control" disabled value="<?echo $id_lap?>"></td>
                                            <input type="hidden" name="id_lap" value="<?echo $id_lap?>">
                                        </tr>
										<tr> <td>&nbsp</td></tr>
                                        <tr>
                                            <th width="185px">Tanggal</th>
											<td width="10px"> :</td>
                                            <td>
												<input type="text" size="50px" width = "400px" id="tgl_lahir" name="tgl_lahir">
											</td>
                                        </tr>
										<tr> <td>&nbsp</td></tr>
										
                                        <tr>
                                            <th width="185px">TDT - PLN </th>
											<td width="10px"> :</td>
                                            <td><input size="40px" class="form-control"name="tdt_pln"></td>
                                        </tr>
										<tr> <td>&nbsp</td></tr>
                                        <tr>
                                            <th width="185px">TDT - Pelanggan</th>
											<td width="10px"> :</td>
                                            <td><input size="40px" class="form-control" name="tdt_pelanggan"></td>
                                        </tr>
										<tr> <td>&nbsp</td></tr>
                                        <tr>
											<th width="185px">Pelanggaran</th>
											<td width="10px"> :</font</td>
                                            <td>
												<select id="unitPelanggan" class="form-control" name="pinalti">
												<?
													foreach($pinalti as $rows)
													{
															echo "<option value='".$rows['KODE_PINALTI']."'>".$rows['KODE_PINALTI']."</option>";
													}
												?>												
											</select>
											</td>
										</tr>
										<tr> <td>&nbsp</td></tr
										<tr>
                                            <th width="185px">Jumlah TS (Rp)</th>
											<td width="10px"> :</td>
                                            <td><input size="40px" class="form-control" name="jumlah_ts"></td>
                                        </tr>
										<tr> <td>&nbsp</td></tr>
                                        <tr>
                                            <th width="185px">Kesimpulan Temuan</th>
											<td width="10px"> :</td>
                                            <td><textarea class="form-control" rows="3" name="kesimpulan_temuan"></textarea></td>
                                        </tr>
										<tr> <td>&nbsp</td></tr>
                                        <tr>
                                            <th width="185px">Kesimpulan</th>
											<td width="10px"> :</td>
                                            <td><textarea class="form-control" rows="3" name="kesimpulan"></textarea></td>
                                        </tr>
										<tr> <td>&nbsp</td></tr>			
										
										<tr>
                                            <th width="185px">Path File</th>
											<td width="10px"> :</td>
                                            <td><input type="file" name="userfile"></td>
                                        </tr>
										<tr> <td>&nbsp</td></tr>	
										<tr>
											<td>
												<button type="submit" class="btn btn-warning">Submit</button>
											</td>
										</tr>											
                                    </tbody>
                                </table>
                            </form>
                        </div>
						
                        <!-- /.panel-body -->
						
						
                    </div>
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