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
	
	
	
	<h3>Selamat datang Bapak / Ibu pada Aplikasi P2TL</h3>
<p>Aplikasi ini masih dalam tahap pengembangan</p>
<br />

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Rekap Status Daerah Anda
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body" >
                            <form role="form">
										<table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr align="center" align="center">
                                            <th>No</th>
                                            <th>Status</th>
                                            <th> Area Anda : <?echo $asal?></th>
                                            <th>Total Disjaya</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <? 
                                            $i=1;
                                            foreach($rekap as $rows)
                                            {
                                                echo "<tr class=\"odd gradeX\">";
                                                echo "<td align = \"center\">".$i."</td>";
                                                $i=$i+1;
                                                echo "<td>".$rows['STATUS']."</td>";
                                                echo "<td align = \"center\">".$rows['JUMLAH_AREA']."</td>";
                                                echo "<td align = \"center\">".$rows['JUMLAH']."</td>";
                                                echo "</tr>";
                                            }
                                        ?>
                                    </tbody>
                               

											<!--?foreach($daerah as $rows)
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
                                	?>-->
										</table>
                                    
                                    </form>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    
                    <!-- /.panel -->
                </div>

                

                
                <!-- /.col-lg-8 -->				
				<!--div class="col-lg-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class=""></i> Total DISJAYA
                        </div>
                        <!-- /.panel-heading -->
                       
						<!--div class="panel-body">
						<div class="form-group">
                                <table>
                                	<!--?foreach($result as $rows)
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
						</div>
                        <!-- /.panel-body -->
                    <!--/div-->
                    <!-- /.panel -->
                </div>
            </div>