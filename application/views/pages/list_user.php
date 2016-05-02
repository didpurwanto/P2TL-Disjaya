<script >
    function PopupWindowCenter(URL, title,w,h)
    {var left = (screen.width/2)-(w/2);
    var top = (screen.height/2)-(h/2);
    var newWin = window.open (URL, title, 'toolbar=no, location=no,directories=no, status=no, menubar=no, scrollbars=no, resizable=no,copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
    }
</script>



            <div class="row">
                <div class="col-lg-10">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Menu ini digunakan untuk melihat user yang telah mendaftar ke sistem P2TL
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr align="center" align="center">
                                            <th>No</th>
											<th>Tangggal Daftar</th>
                                            <th>Username</th>
                                            <th>Nama</th>
                                            <th>Email</th>
											<th>Tindakan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?
                                        $i = 1;
                                        foreach($result as $rows)
                                        {
                                            echo "<tr class=\"odd gradeX\" align=\"center\">";
                                            echo "<td>".$i."</td>";
                                            $i=$i+1;
                                            echo "<td>".$rows['TANGGAL_DAFTAR']."</td>";
                                            echo "<td>".$rows['USERNAME']."</td>";
                                            echo "<td>".$rows['NAMA_USER']."</td>";
                                            echo "<td>".$rows['EMAIL_USER']."</td>";
                                            echo "<td><a href=\"javascript:void(0);\" onClick =\"PopupWindowCenter('".base_url('index.php/pages/proses_approve')."/".$rows['USERNAME']."', 'PopupWindowCenter',600,600)\">Proses</a></td>";
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
