<div class="row">
<script type="text/javascript">
			function Box2(idx) {
				//alert("masuk javascript");
				var URL = "<? echo base_url('index.php/pages/rekap_status')?>" + /*<?echo $merk."/".$kapasitas;?> +*/ "/" + idx;
				location.href = URL;
			}
</script>



<div class="col-lg-12">
	<div class="panel panel-primary">
		<div class="panel-heading">
			Rekap Laporan
		</div>
		<!-- /.panel-heading -->
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover" id="dataTables-example">
					 <thead align = "center">
						<tr align="center" align="center">
							<th>No</th>
							<th align = "center">Nama Area</th>
							<th>Jumlah Laporan</th>
							<th>Jumlah Laporan Belum Diproses</th>
							<th>Jumlah Laporan Tidak Lengkap</th>
							<th>Jumlah Kasus Non P2TL</th>
							<th>Jumlah Kasus P2TL</th>
							<th>A3</th>
							<th>A4</th>
							<th>A5</th>
							<th>A6</th>
							<th>A7</th>
							<th>A8</th>
						</tr>
					</thead>
					<tbody>
					
					<?php 
                            $i = 1;
							foreach($result as $rows)
                                        {
                                        	if($rows['NAMA_AREA'] == " .Semua Area.")
                                        	{
                                        	}
                                        	else
                                        	{
	                                            echo "<tbody>";
	                                            echo "<tr class=\"odd gradeX\" align=\"center\">";
	                                            
	                                            echo "<td>".$i."</td>";
	                                            $i++;
	                                            echo "<td>".$rows['NAMA_AREA']."</td>";
												echo "<td>".$rows['JUMLAH_LAPORAN']."</td>";
												echo "<td>".$rows['JUMLAH_LAPORAN_PROSES']."</td>";
	                                            echo "<td>".$rows['JUMLAH_LAPORAN_SALAH']."</td>";
	                                            echo "<td>".$rows['JUMLAH_NON_P2TL']."</td>";
	                                            echo "<td>".$rows['JUMLAH_P2TL']."</td>";
	                                            echo "<td>".$rows['A_3']."</td>";    
	                                            echo "<td>".$rows['A_4']."</td>";    
	                                            echo "<td>".$rows['A_5']."</td>";    
	                                            echo "<td>".$rows['A_6']."</td>";    
	                                            echo "<td>".$rows['A_7']."</td>";    
	                                            echo "<td>".$rows['A_8']."</td>";     
	                                            echo "</tr>";
	                                        }
	                                                              
                                        }
						?>
					</tbody>
					
				</table>
			</div>
			<!-- /.table-responsive -->
			
		</div>
		<!-- /.panel-body -->
	</div>
	<!-- /.panel -->
	</div>