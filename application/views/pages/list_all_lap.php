            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
							List Semua Laporan
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr align="center" align="center">
                                            <th>ID Laporan</th>
                                            <th>ID Pelanggan</th>
                                            <th>Indikasi Temuan</th>
											
                                            <th>Pelapor</th>
											<th>Tanggal Laporan</th>
											
											<th>Komentar</th>
											<th>Detail</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?
                                            foreach($lap as $rows)
                                            {
                                                echo "<tr class=\"odd gradeX\" align=\"center\">";
                                                echo "<td>".$rows['ID_LAPORAN']."</td>";
                                                echo "<td>".$rows['ID_PELANGGAN']."</td>";
                                                echo "<td>".$rows['INDIKASI_KETERANGAN']."</td>";
                                           
                                                echo "<td>".$rows['USERNAME']."</td>";
                                                echo "<td>".$rows['TANGGAL_MELAPOR']."</td>";
                                                echo "<td><a href=\"javascript:void(0);\" onClick =\"PopupWindowCenter('".base_url('index.php/pages/komentar')."/".$rows['ID_LAPORAN']."', 'PopupWindowCenter',600,700)\">Komentar</a></td>";
                                                echo "<td><a href=\"javascript:void(0);\" onClick =\"PopupWindowCenter('".base_url('index.php/pages/detail_lap')."/".$rows['ID_LAPORAN']."', 'PopupWindowCenter',600,700)\">Detail</a></td>";
                                                echo "</tr>";
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
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			
			<script >
				function PopupWindowCenter(URL, title,w,h)
				{var left = (screen.width/2)-(w/2);
				var top = (screen.height/2)-(h/2);
				var newWin = window.open (URL, title, 'toolbar=no, location=no,directories=no, status=no, menubar=no, scrollbars=no, resizable=no,copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
				}
			</script>