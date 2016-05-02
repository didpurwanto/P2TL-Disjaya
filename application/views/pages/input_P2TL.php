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
                                            <td width="185px">Data Target Operasi P2TL</td>
                                        </tr>
										<tr>
											<td>Tanggal Laporan</td>
											<td> :</td>
											<td><?echo $tanggal?></td>
										</tr>
										
										<tr>
											<td>ID Pelanggan</td>
											<td> :</td>
											<td><?echo $id_pel?></td>
										</tr>
										
										<tr>
											<td>Nama Pelanggan</td>
											<td> :</td>
											<td><?echo $nama_pel?></td>
										</tr>
										<tr>
											<td>Daya</td>
											<td> :</td>
											<td><?echo $daya_pel?></td>
										</tr>
										<tr>
											<td>Unit</td>
											<td> :</td>
											<td><?echo $unit_pel?></td>
										</tr>
										<tr>
											<td>Indikasi Laporan</td>
											<td> :</td>
											<td><?echo $indikasi?></td>
										</tr>
										<tr>
											<td>Prioritas</td>
											<td> :</td>
											<td><?echo $prioritas?></td>
										</tr>
										<tr> <td>&nbsp</td></tr>
										<tr>
											<td><b>Change Log SPV</b></td>
										</tr>
										<tr> <td>&nbsp</td></tr>
										<tr>
											<td>Usulan Tindakan</td>
											<td> :</td>
											<td><?echo $tindakan1?></td>
										</tr>										
										<tr>
											<td>Keterangan</td>
											<td width="10px"> :</td>
											<td><?echo $ket1?></td>
										</tr>
										<tr> <td>&nbsp</td></tr>
										<tr>
											<td><b>Change Log ASMAN</b></td>
										</tr>
										<tr> <td>&nbsp</td></tr>
										<tr>
											<td>Usulan Tindakan</td>
											<td> :</td>
											<td><?echo $tindakan2?></td>
										</tr>										
										<tr>
											<td>Keterangan</td>
											<td width="10px"> :</td>
											<td><?echo $ket2?></td>
										</tr>
										<tr> <td>&nbsp</td></tr>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Input Data Hasil NON P2TL
                        </div>
                        <!-- /.panel-heading -->                        
						<div class="panel-body">
							<form action="<?echo base_url('index.php/pages/inputhasilp2tl')?>" method="POST" enctype="multipart/form-data">
                                <table>
                                    <tbody>
                                        <tr>
                                            <th width="185px">ID Laporan</th>
											<td width="10px"> :</td>
                                            <td><input size="40px" class="form-control" disabled value="<?echo $id_lap?>">
                                            	<input type="hidden" name="id_lap" value="<?echo $id_lap?>">
                                            </td>
                                        </tr>
										<tr> <td>&nbsp</td></tr>
										<tr>
                                            <th width="185px">Tanggal</th>
											<td width="10px"> :</td>
                                            <td width="200px">
												<input type="text" size="45px" width = "300px" id="tgl_lahir" name="tgl_lahir">
											</td>
                                        </tr>
										<tr> <td>&nbsp</td></tr>
										<tr>
											<td colspan="3">
												<font color="red">Silahkan Perbaiki Data Pelanggan Saat Ini</font>
											</td>
										</tr>
										<tr> <td>&nbsp</td></tr>
										<tr>
                                            <td width="185px"><font color="red">ID Pelanggan</font></td>
											<td width="10px"> :</font</td>
                                            <td><input size="40px" class="form-control" value="<?echo $id_pel?>" name="id_pel"></td>
                                        </tr>
										<tr> <td>&nbsp</td></tr>
										<tr>
											<td width="185px"><font color="red">Nama</font></td>
											<td width="10px"> :</font</td>
                                            <td><input size="40px" class="form-control" name="nama_pel" value="<?echo $nama_pel?>"></td>
										</tr>
										<tr> <td>&nbsp</td></tr>
										<tr>
											<td width="185px"><font color="red">Daya</font></td>
											<td width="10px"> :</font</td>
                                            <td>
												<select id="dayaPelanggan" class="form-control" name="daya_pel">
												<?
                                                foreach($daya as $rows){
                                                	if($rows['DAYA'] == $daya_pel)
                                                		echo "<option selected value='".$rows['DAYA']."'>".$rows['DAYA']."</option>";
                                                	else
                                                    	echo "<option value='".$rows['DAYA']."'>".$rows['DAYA']."</option>";
                                                }
                                            ?>
												</select>
											</td>
										</tr>
										<tr> <td>&nbsp</td></tr>
										<tr>
											<td width="185px"><font color="red">Unit</font></td>
											<td width="10px"> :</font</td>
                                            <td>
												<select id="unitPelanggan" class="form-control" name="unit_pel">
												<?
													foreach($unit as $rows)
													{
														if($unit_pel==$rows['NAMA_AREA'])
															echo "<option selected value='".$rows['KDAREA']."'>".$rows['NAMA_AREA']."</option>";
														else
															echo "<option value='".$rows['KDAREA']."'>".$rows['NAMA_AREA']."</option>";
													}
												?>
												</select>
											</td>
										</tr>
										<tr> <td>&nbsp</td></tr>
										<tr>
											<td width="185px"><font color="red">Tarif</font></td>
											<td width="10px"> :</font</td>
                                            <td>
												<select id="dayaPelanggan" class="form-control" name="tarif_pel">
												<?
                                                foreach($tarif as $rows){
                                                	if($rows['DAYA'] == $tarif_pel)
                                                		echo "<option selected value='".$rows['TARIF']."'>".$rows['TARIF']."</option>";
                                                	else
                                                    	echo "<option value='".$rows['TARIF']."'>".$rows['TARIF']."</option>";
                                                }
                                            ?>
												</select>
											</td>
										</tr>
										<tr> <td>&nbsp</td></tr>
										
                                        <tr>
                                            <th width="185px">Petugas 1</th>
											<td width="10px"> :</td>
                                            <td><input size="40px" class="form-control" name="petugas1"></td>
                                        </tr>
										<tr> <td>&nbsp</td></tr>
                                        <tr>
                                            <th width="185px">Petugas 2</th>
											<td width="10px"> :</td>
                                            <td><input size="40px" class="form-control" name="petugas2"></td>
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
										<tr> <td>&nbsp</td></tr>
										<tr>
                                            <th width="185px">Temuan P2TL</th>
											<td width="10px"> :</td>
                                            <td><textarea class="form-control" rows="3" name="hasil_temuan"></textarea></td>
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
                    </div>
                </div>


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