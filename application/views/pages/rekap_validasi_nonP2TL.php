            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Rekap Data
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr align="center" align="center">
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>ID Pelanggan</th>
                                            <th>Hasil Temuan </th>
                                            <th>prioritas</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?
                                        $i=1;
                                        foreach($result as $rows)
                                        {
                                            echo "<tbody>";
                                            echo "<tr class=\"odd gradeX\" align=\"center\">";
                                            echo "<td>".$i."</td>";
                                            $i = $i+1;
                                            echo "<td>".$rows['TANGGAL_MELAPOR']."</td>";
                                            echo "<td>".$rows['ID_PELANGGAN']."</td>";
                                            echo "<td>".$rows['INDIKASI_KETERANGAN']."</td>";
                                            echo "<td>".$rows['PRIORITAS']."</td>";
                                            echo "<td>".$rows['KODE_STATUS']."</td>";
                                            echo "<td><a href=\"".base_url('index.php/pages/validasi_nonP2TL')."/".$rows['ID_LAPORAN']."\"> <font color=\"blue\">Proses</font></a></td>";
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