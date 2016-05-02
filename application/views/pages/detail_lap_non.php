    <link href="<?php echo base_url("public/css/bootstrap.min.css")?>" rel="stylesheet" />
    <link href="<?php echo base_url("public/font-awesome/css/font-awesome.css")?>" rel="stylesheet" />
    <link href="<?php echo base_url("public/css/plugins/morris/morris-0.4.3.min.css")?>" rel="stylesheet" />
    <link href="<?php echo base_url("public/css/plugins/timeline/timeline.css")?>" rel="stylesheet" />
    <link href="<?php echo base_url("public/css/sb-admin.css")?>" rel="stylesheet" media="all" />


<div class="row">
</div>

				<div class="col-lg-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading"><label>Data Laporan dan Pemeriksaan </label>
                            <i class=""></i> 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body" >
                            <form role="form">
							<table align="center">
										<tr>
											<td width="200px">
												ID laporan
											</td>
											<td width="30px">
											:
											</td>
											<td width="250px">
												<label><?echo $id_lap_laporan?></label>
											</td>
										</tr>
										<tr>
											<td width="200px">
												ID Pelanggan
											</td>
											<td width="30px">
											:
											</td>
											<td width="250px">
												<label><?echo $id_pel_laporan?></label>
											</td>
										</tr>
										<tr>
											<td width="200px">
												Nama Pelanggan
											</td>
											<td width="30px">
											:
											</td>
											<td width="250px">
												<label><?echo $nama_pelanggan_laporan?></label>
											</td>
										</tr>
										<tr>
											<td width="200px">
												Daya
											</td>
											<td width="30px">
											:
											</td>
											<td width="250px">
												<label><?echo $daya_pelanggan?></label>
											</td>
										</tr>
										<tr>
											<td width="200px">
												Alamat
											</td>
											<td width="30px">
											:
											</td>
											<td width="250px">
												<label><?echo $alamat_pelanggan_laporan?></label>
											</td>
										</tr>
										<tr>
											<td width="200px">
												Unit
											</td>
											<td width="30px">
											:
											</td>
											<td width="250px">
												<label><?echo $unit_laporan?></label>
											</td>
										</tr>
										<tr>
											<td width="200px">
												Indikasi Laporan
											</td>
											<td width="30px">
											:
											</td>
											<td width="250px">
												<label><?echo $indikasi_laporan?></label>
											</td>
										</tr>
										<tr>
											<td width="200px">
												Pelapor
											</td>
											<td width="30px">
											:
											</td>
											<td width="250px">
												<label><?echo $pelapor ?></label>
											</td>
										</tr>
										<tr>
											<td width="200px">
												Tanggal Laporan
											</td>
											<td width="30px">
											:
											</td>
											<td width="250px">
												<label><?echo $tanggal_laporan?></label>
											</td>
										</tr>
										<tr>
											<td width="200px">
												Prioritas
											</td>
											<td width="30px">
											:
											</td>
											<td width="250px">
												<label><?echo $prioritas_laporan?></label>
											</td>
										</tr>
										<tr>
											<td width="200px">
												Status
											</td>
											<td width="30px">
											:
											</td>
											<td width="250px">
												<label><?echo $status_laporan?></label>
											</td>
										</tr>
									</table>
                                 </form>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <!-- /.panel -->
                </div>
            </div>
				
				
			<div class="col-lg-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading"><label>Rekap Cetak Non P2TL</label>
                            <i class=""></i> 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body" >
                            <form role="form">
							<table align="center">
										<tr>
											<td width="200px">
												Volume
											</td>
											<td width="30px">
											:
											</td>
											<td width="250px">
												<label><?echo $volume?></label>
											</td>
										</tr>
									</table>
                                 </form>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <!-- /.panel -->
                </div>
            </div>
				
				<div class="col-lg-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading"><label>Data Olah Lap </label>
                            <i class=""></i> 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body" >
                            <form role="form">
							<table align="center">
										<tr>
											<td width="200px">
												<b>Olah Lap SPV / Staff</b>
											</td>
										</tr>
										<tr>
											<td width="200px">
												Usulan Tindakan
											</td>
											<td width="30px">
											:
											</td>
											<td width="250px">
												<label><?echo $usulan_tindakan_spv?></label>
											</td>
										</tr>
										<tr>
											<td width="200px">
												Keterangan
											</td>
											<td width="30px">
											:
											</td>
											<td width="250px">
												<label><?echo $keterangan_spv?></label>
											</td>
										</tr>
										<tr>
											<td width="200px">
												Inputer
											</td>
											<td width="30px">
											:
											</td>
											<td width="250px">
												<label><?echo $inputer_spv?></label>
											</td>
										</tr>
										<tr>
											<td width="200px">
												Tanggal
											</td>
											<td width="30px">
											:
											</td>
											<td width="250px">
												<label><?echo $tanggal_spv?></label>
											</td>
										</tr>
										<tr>
											<td width="200px">
												<b>Olah Lap ASMAN</b>
											</td>
										</tr>
										<tr>
											<td width="200px">
												Usulan Tindakan
											</td>
											<td width="30px">
											:
											</td>
											<td width="250px">
												<label><?echo $usulan_tindakan_asman?></label>
											</td>
										</tr>
										<tr>
											<td width="200px">
												Keterangan
											</td>
											<td width="30px">
											:
											</td>
											<td width="250px">
												<label><?echo $keterangan_asman?></label>
											</td>
										</tr>
										<tr>
											<td width="200px">
												Inputer
											</td>
											<td width="30px">
											:
											</td>
											<td width="250px">
												<label><?echo $inputer_asman?></label>
											</td>
										</tr>
										<tr>
											<td width="200px">
												Tanggal
											</td>
											<td width="30px">
											:
											</td>
											<td width="250px">
												<label><?echo $tanggal_asman?></label>
											</td>
										</tr>
									</table>
                                 </form>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    
                    <!-- /.panel -->
                </div>
                </div>
				
				
				<div class="col-lg-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading"><label>Data Pemeriksaan Non P2TL </label>
                            <i class=""></i> 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body" >
                            <form role="form">
							<table align="center">
									
										<tr>
											<td width="200px">
												Petugas 1
											</td>
											<td width="30px">
											:
											</td>
											<td width="250px">
												<label><?echo $petugas1_nonp2tl?></label>
											</td>
										</tr>
										<tr>
											<td width="200px">
												Petugas 2
											</td>
											<td width="30px">
											:
											</td>
											<td width="250px">
												<label><?echo $petugas2_nonp2tl?></label>
											</td>
										</tr>
										<tr>
											<td width="200px">
												Kesimpulan
											</td>
											<td width="30px">
											:
											</td>
											<td width="250px">
												<label><?echo $kesimpulan_nonp2tl?></label>
											</td>
										</tr>
										
										<tr>
											<td width="200px">
												Inputer
											</td>
											<td width="30px">
											:
											</td>
											<td width="250px">
												<label><?echo $username_nonp2tl?></label>
											</td>
										</tr>
									
									</table>
                                 </form>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <!-- /.panel -->
                </div>
                </div>

                <div class="col-lg-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading"><label>Validasi Non P2TL </label>
                            <i class=""></i> 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body" >
                            <form role="form">
							<table align="center">
									
										<tr>
											<td width="200px">
												Tanggal Validasi
											</td>
											<td width="30px">
											:
											</td>
											<td width="250px">
												<label><?echo $tanggal_validasi_nonp2tl?></label>
											</td>
										</tr>
										
										<tr>
											<td width="200px">
												Keterangan
											</td>
											<td width="30px">
											:
											</td>
											<td width="250px">
												<label><?echo $keterangan_validasi_nonp2tl?></label>
											</td>
										</tr>
										
										<tr>
											<td width="200px">
												Inputer
											</td>
											<td width="30px">
											:
											</td>
											<td width="250px">
												<label><?echo $inputer_validasi_nonp2tl?></label>
											</td>
										</tr>
									
									</table>
                                 </form>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    </div>
                    </div>
                    <!-- /.panel -->
                    <!-- /.panel -->
  

				
				
			