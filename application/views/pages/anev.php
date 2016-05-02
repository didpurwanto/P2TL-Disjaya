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
	
	

                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Keterangan
                        </div>
                        <!-- /.panel-heading -->                        
						<div class="panel-body">
						<!--center><h1>Form Pendaftaran</h1>
							<form method="post" action="tampil.php">
							<table>
							  <tr><td>Nama</td><td><input type="text" name="nama"></td></tr>
							  <tr><td>Alamat</td><td><input type="text" name="alamat"></td></tr>
							  <tr><td>Tgl Lahir</td><td><input type="text" id="tgl_lahir" name="tgl_lahir"></td></tr>
							  <tr><td></td><td><input type="submit" name="submit" value="Submit"></td></tr>
							  
							</table>

							</form>
							</center-->
								
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
										
                                    </tbody>
                                </table>
							
                        </div>
						
                        <!-- /.panel-body -->
						
						
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Input Data Analisa dan Evaluasi
                        </div>
                        <!-- /.panel-heading -->                        
						<div class="panel-body">
						<form method="post" action="<?php echo base_url('index.php/pages/insertanev')?>" enctype="multipart/form-data">
                                <table>
                                    <tbody>
                                        <tr>
                                            <th width="185px">ID Laporan</th>
											<td width="10px"> :</td>
                                            <td><input size="40px" value="<?echo $id_lap?>" class="form-control" disabled></td>
                                            <input type="hidden" value="<?echo $id_lap?>" name="id_lap">
											
                                        </tr>
										<tr> <td>&nbsp</td></tr>
                                        <tr>
                                            <th width="185px">Tanggal</th>
											<td width="10px"> :</td>
                                            <td width="200px">
												<input type="text" size="50px" width = "400px" id="tgl_lahir" name="tgl_lahir">
											</td>
                                        </tr>
										<tr> <td>&nbsp</td></tr>
										
                                        <tr>
                                            <th width="185px">Petugas Anev 1</th>
											<td width="10px"> :</td>
                                            <td><input size="40px" class="form-control" name="petugas1"></td>
                                        </tr>
										<tr> <td>&nbsp</td></tr>
                                        <tr>
                                            <th width="185px">Petugas Anev 2</th>
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
                                            <th width="185px">Hasil Temuan</th>
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
											<td>
												<input type="submit" name="submit" value="Submit">
											</td>
										</tr>	
                                    </tbody>
                                </table>
                            </form>
                        </div>
						</form>
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
