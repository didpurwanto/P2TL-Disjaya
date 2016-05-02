<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Penertiban Pemakaian Tenaga Listrik</title>

    <link href="<?php echo base_url("public/css/bootstrap.min.css")?>" rel="stylesheet" />
    <link href="<?php echo base_url("public/font-awesome/css/font-awesome.css")?>" rel="stylesheet" />
    <link href="<?php echo base_url("public/css/plugins/morris/morris-0.4.3.min.css")?>" rel="stylesheet" />
    <link href="<?php echo base_url("public/css/plugins/timeline/timeline.css")?>" rel="stylesheet" />
    <link href="<?php echo base_url("public/css/sb-admin.css")?>" rel="stylesheet" media="all" />

</head>

<body>

    <div id="wrapper">
    <!-- /.row -->
			
			<div class="col-lg-5">
                    <div class="chat-panel panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-comments fa-fw"></i>
                            Komentar
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <ul class="chat">
                                <?
                            foreach ($komentar as $rows)
                            {
                                echo "<li class=\"left clearfix\">";
                                echo "<span class=\"chat-img pull-left\">";
                                    echo "<img src=\"http://placehold.it/50/55C1E7/fff\" alt=\"User Avatar\" class=\"img-circle\" />";
                                echo "</span>";
                                echo "<div class=\"chat-body clearfix\">";
                                    echo "<div class=\"header\">";
                                        echo "<strong class=\"primary-font\">&nbsp ".$rows['USERNAME']."</strong> ";
                                        echo "<small class=\"pull-right text-muted\">";
                                            echo "<i class=\"fa fa-clock-o fa-fw\"></i> ".$rows['TANGGAL_KOMENTAR']."";
                                        echo "</small>";
                                    echo "</div>";
                                    echo "<p>";
                                        
                                        echo $rows['ISI_KOMENTAR'];
                                    echo "</p>";
                                echo "</div>";
                            echo "</li>";
                            }
                            ?>
                                
                            </ul>
                        </div>
                        <!-- /.panel-body -->
                        
                        <!-- /.panel-footer -->
                    </div>
                    <!-- /.panel .chat-panel -->
                </div>
                <!-- /.col-lg-4 -->
			</div>
			
			
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <script src="<?php echo base_url("public/js/jquery-1.10.2.js")?>"></script>
    <script src="<?php echo base_url("public/js/bootstrap.min.js")?>"></script>
    <script src="<?php echo base_url("public/js/plugins/metisMenu/jquery.metisMenu.js")?>"></script>
    <script src="<?php echo base_url("public/js/plugins/morris/raphael-2.1.0.min.js")?>"></script>
    <script src="<?php echo base_url("public/js/plugins/morris/morris.js")?>"></script>
    <script src="<?php echo base_url("public/js/sb-admin.js")?>"></script>
    <script src="<?php echo base_url("public/js/demo/dashboard-demo.js")?>"></script>

</body>
</html>
