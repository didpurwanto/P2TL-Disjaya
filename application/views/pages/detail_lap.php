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
                        <div class="panel-heading"><label>Rekap Cetak P2TL</label>
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
                        <div class="panel-heading"><label>Data Pemeriksaan P2TL </label>
                            <i class=""></i> 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body" >
                            <form role="form">
							<table align="center">
										<tr>
											<td width="200px">
												Tanggal Periksa
											</td>
											<td width="30px">
											:
											</td>
											<td width="250px">
												<label><?echo $tanggal_P2TL?></label>
											</td>
										</tr>
										<tr>
											<td width="200px">
												Petugas 1
											</td>
											<td width="30px">
											:
											</td>
											<td width="250px">
												<label><?echo $petugas1_P2TL?></label>
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
												<label><?echo $petugas2_P2TL?></label>
											</td>
										</tr>
										
										<tr>
											<td width="200px">
												Kode Pelanggaran
											</td>
											<td width="30px">
											:
											</td>
											<td width="250px">
												<label><?echo $kode_pelanggaran_P2TL?></label>
											</td>
										</tr>
										
										<tr>
											<td width="200px">
												Hasil Temuan
											</td>
											<td width="30px">
											:
											</td>
											<td width="250px">
												<label><?echo $hasil_temuan_p2tl?></label>
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
												<label><?echo $kesimpulan_P2TL?></label>
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
												<label><?echo $inputer_P2TL?></label>
											</td>
										</tr>
										<tr>
											<td width="200px">
												Tanggal Input
											</td>
											<td width="30px">
											:
											</td>
											<td width="250px">
												<label><?echo $tanggal_input_P2TL?></label>
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
                        <div class="panel-heading"><label>Data ANEV</label>
                            <i class=""></i> 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body" >
                            <form role="form">
							<table align="center">
										<tr>
											<td width="200px">
												Tanggal ANEV
											</td>
											<td width="30px">
											:
											</td>
											<td width="250px">
												<label><?echo $tanggal_anev?></label>
											</td>
										</tr>
										<tr>
											<td width="200px">
												Petugas 1
											</td>
											<td width="30px">
											:
											</td>
											<td width="250px">
												<label><?echo $petugas1_anev?></label>
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
												<label><?echo $petugas2_anev?></label>
											</td>
										</tr>
										
										<tr>
											<td width="200px">
												Kode Pelanggaran
											</td>
											<td width="30px">
											:
											</td>
											<td width="250px">
												<label><?echo $kode_pelanggaran_anev?></label>
											</td>
										</tr>
										<tr>
											<td width="200px">
												Temuan
											</td>
											<td width="30px">
											:
											</td>
											<td width="250px">
												<label><?echo $temuan_anev?></label>
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
												<label><?echo $kesimpulan_anev?></label>
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
												<label><?echo $inputer_anev?></label>
											</td>
										</tr>
										<tr>
											<td width="200px">
												Tanggal Input
											</td>
											<td width="30px">
											:
											</td>
											<td width="250px">
												<label><?echo $tanggal_input_anev?></label>
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
                        <div class="panel-heading"><label>Data SPH</label>
                            <i class=""></i> 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body" >
                            <form role="form">
							<table align="center">
										<tr>
											<td width="200px">
												Tanggal SPH
											</td>
											<td width="30px">
											:
											</td>
											<td width="250px">
												<label><?echo $tanggal_sph?></label>
											</td>
										</tr>
										<tr>
											<td width="200px">
												Petugas
											</td>
											<td width="30px">
											:
											</td>
											<td width="250px">
												<label><?echo $petugas_sph?></label>
											</td>
										</tr>
										<tr>
											<td width="200px">
												Pelanggan
											</td>
											<td width="30px">
											:
											</td>
											<td width="250px">
												<label><?echo $pelanggan_sph?></label>
											</td>
										</tr>
										<tr>
											<td width="200px">
												Kode Pelanggaran
											</td>
											<td width="30px">
											:
											</td>
											<td width="250px">
												<label><?echo $pelanggaran_sph?></label>
											</td>
										</tr>

										<tr>
											<td width="200px">
												Jumlah TS
											</td>
											<td width="30px">
											:
											</td>
											<td width="250px">
												<label><?echo $jumlah_ts?></label>
											</td>
										</tr>
										<tr>
											<td width="200px">
												Kesimpulan Temuan
											</td>
											<td width="30px">
											:
											</td>
											<td width="250px">
												<label><?echo $kesimpulan_temuan?></label>
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
												<label><?echo $kesimpulan_sph?></label>
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
												<label><?echo $inputer_sph?></label>
											</td>
										</tr>
										<tr>
											<td width="200px">
												Tanggal Input
											</td>
											<td width="30px">
											:
											</td>
											<td width="250px">
												<label><?echo $tanggal_input_sph?></label>
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
                        <div class="panel-heading"><label>Validasi Data SPH</label>
                            <i class=""></i> 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body" >
                            <form role="form">
							<table align="center">
										<tr>
											<td width="200px">
												Tanggal Validasi SPH
											</td>
											<td width="30px">
											:
											</td>
											<td width="250px">
												<label><?echo $tanggal_validasi_sph?></label>
											</td>
										</tr>
								
										<tr>
											<td width="200px">
												Keterangan SPH
											</td>
											<td width="30px">
											:
											</td>
											<td width="250px">
												<label><?echo $keterangan_validasi_sph?></label>
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
												<label><?echo $inputer_validasi_sph?></label>
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

