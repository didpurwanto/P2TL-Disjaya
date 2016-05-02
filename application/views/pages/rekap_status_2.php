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
                            <i class=""></i> 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body" >
                            <form role="form">
										<table align="center">
										<tr>
											<td width="80px">
												Pilih Unit
											</td>
											<td width="30px">
											:
											</td>
											<td width="250px">
												<?
                                                echo "<select id=\"unitPelanggan\" class=\"form-control\" name=\"unit_pelanggan\" onchange='Box2(this.value)'>";
                                                foreach($unit as $rows){
                                                	if($rows['KDAREA'] == $kdarea)
                                                		echo "<option selected value='".$rows['KDAREA']."'>".$rows['NAMA_AREA']."</option>";
                                                    else
                                                    	echo "<option value='".$rows['KDAREA']."'>".$rows['NAMA_AREA']."</option>";
                                                }
                                            ?>
                                            </select>
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
				
                <div class="col-lg-12" align = "center">
                    <div class="panel panel-primary">
           
                        <!-- /.panel-heading -->
                        <div class="panel-body" >
                            <form role="form">
										<table>
										<?foreach($result as $rows)
                                			{
		                                		echo "<tr>";
		                                		echo "<td width=\"200px\">";
		                                		echo $rows['STATUS'];
		                                		echo "</td>";
		                                		echo "<td width=\"30px\">:</td>";
		                                		echo "<td width=\"250px\">";
		                                		echo "<input class=\"form-control\" disabled value=".$rows['JUMLAH'].">";
		                                		echo "</td></tr>";
		                                		echo "<tr>
													<td>&nbsp</td>
												<tr>";
		                                	}
		                                	?>
										</table>
                                    
                                    </form>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
                
				
            </div>