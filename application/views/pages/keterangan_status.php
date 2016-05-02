
                <div class="col-lg-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class=""></i> Keterangan Status

                        </div>
                        <!-- /.panel-heading -->
                        
						<div class="panel-body">
                            <table>
								<tr>
									<th width="50px"><u>KODE</u></th>
									<th width="10px"></th>
									<th width="400px"><u>KETERANGAN</u></th>
								</tr>
								<?
									foreach($keterangan as $rows)
									{
										echo "<tr>";
										echo "<td>".$rows['KODE_STATUS']."</td>";
										echo "<td> : </td>";
										echo "<td>".$rows['STATUS']."</td>";
										echo "</tr>";
									}
								?>
							</table>
                                
								
                        </div>
						
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
                
                <!-- /.col-lg-4 -->

            