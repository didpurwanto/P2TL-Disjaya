<script type="text/javascript" src="<?php echo base_url('public/datepicker/jquery-1.3.2.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('public/datepicker/jquery-ui-1.7.2.custom.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('public/datepicker/tanggal.js')?>"></script>
<link type="text/css" rel="stylesheet" href="<?php echo base_url('public/datepicker/jquery-ui-1.7.2.custom.css')?>" />


<script type="text/javascript" src="<?php echo base_url('public/datepicker/jquery-ui-1.11.0.custom/external/jquery/jquery.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('public/datepicker/jquery-ui-1.11.0.custom/jquery-ui.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('public/datepicker/jquery-ui-1.11.0.custom/jquery-ui.min.js')?>"></script>

<link type="text/css" rel="stylesheet" href="<?php echo base_url('public/datepicker/jquery-ui-1.11.0.custom/jquery-ui.css')?>" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url('public/datepicker/jquery-ui-1.11.0.custom/jquery-ui.min.css')?>" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url('public/datepicker/jquery-ui-1.11.0.custom/jquery-ui.structure.css')?>" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url('public/datepicker/query-ui-1.11.0.custom/jquery-ui.structure.min.css')?>" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url('public/datepicker/jquery-ui-1.11.0.custom/jquery-ui.theme.css')?>" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url('public/datepicker/jquery-ui-1.11.0.custom/jquery-ui.theme.min.css')?>" />

<link href="<?php echo base_url("public/datetimepicker/sample/")?>./bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="<?php echo base_url("public/datetimepicket/sample/")?>../css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

   
                <div class="col-lg-7">
                    <div class="panel panel-default">
                        <div class="panel-heading">
							<i class="fa fa-bar-chart-o fa-fw"></i> Menu ini digunakan untuk memasukkan data olah laporan 1
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <form role="form">
                                        <div class="form-group">
                                            <label>ID Pelanggan</label>
                                            <input class="form-control" disabled value="<?echo $id_pel?>">
                                        </div>
                                        <div class="form-group" >
                                            <label>Nama Pelanggan</label>
                                            <input class="form-control" disabled value="<?echo $nama_pel?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat Pelanggan</label>
                                            <input class="form-control" disabled value="<?echo $alamat_pel?>"> 
                                        </div>
                                        <div class="form-group" >
                                            <label for="dayaPelanggan" >Daya Pelanggan</label>
                                            <select id="dayaPelanggan" class="form-control" disabled>
                                            <option selected><?echo $daya_pel?></option>>
                                            </select>
                                        </div>										
										<div class="form-group" >
                                            <label for="dayaPelanggan">Unit</label>
                                            <select id="dayaPelanggan" class="form-control" disabled>
                                            <option selected><?echo $unit_pel?></option>>
                                            </select>
                                        </div>														
                                        <div class="form-group" >
                                            <label for="dayaPelanggan">Tarif Pelanggan</label>
                                            <select id="dayaPelanggan" class="form-control" disabled>
                                            <option selected><?echo $tarif_pel?></option>
                                            </select>
                                        </div>								
										<div class="form-group" >
                                            <label>Tanggal Laporan</label>
                                            <input class="form-control" disabled value="<?echo $tanggal_pel?>">
                                        </div>	
                                    </form>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
							<h3>Tindakan SPV/Staff</h3>
                            Berikan tindakan berdasarkan data-data yang ada pada laporan
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <form role="form" action="<?echo base_url('index.php/pages/lap1')?>" method="POST">									
                                        <div class="form-group">
                                            <label for="dayaPelanggan">Tindakan</label>
                                            <select id="dayaPelanggan" class="form-control" name="tindakan">
                                            <option selected="true" style="display:none"> Pilih </option>
											<option value="a">Lanjutkan ke P2TL</option>
											<option value="b">Lanjutkan ke Non P2TL</option>
											<option value="c">Data tidak dapat dilengkapi</option>
                                            </select>
                                        </div>
										<div class="form-group">
                                            <label>Keterangan</label>
											<textarea class="form-control" rows="3" name="keterangan"></textarea>
                                            <input type="hidden" name="id_lap" value="<?echo $id_lap?>">
                                        </div>										
										
											
										<button type="submit" class="btn btn-warning">Submit</button>
                                    </form>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                
                <!-- /.col-lg-6 -->
            <script type="text/javascript" src="<?php echo base_url("public/datetimepicker/sample")?>/jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo base_url("public/datetimepicker/sample")?>/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url("public/datetimepicker")?>/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo base_url("public/datetimepicker")?>/js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
    });
    $('.form_date').datetimepicker({
        language:  'id',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
    $('.form_time').datetimepicker({
        language:  'id',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 1,
        minView: 0,
        maxView: 1,
        forceParse: 0
    });
</script>