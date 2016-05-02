
<html>
<head>
 
<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
 
<!-- jQuery -->
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
 
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
 
<script>
var ajax_datatable;
 
$(document).ready(function() {
    ajax_datatable = $('table#ajax_datatable').dataTable({
        "bServerSide": true,
            "sAjaxSource": "<?php echo base_url(); ?>test/ajax_datatable",
            "fnServerData": function(sSource,aoData,fnCallback)
            {
                    aoData.push({name: "field2", value: $('#field2').val() });
                $.ajax({
                    "dataType": 'json', 
                    "type": "POST", 
                    "url": sSource, 
                    "data": aoData, 
                    "success": fnCallback
                });
            }
    });
});
</script>
 
</head>
<body>
 
    <label for="field2">Field 2</label>
    <input name="field2" id="field2" type="text" />
    <button onclick="ajax_datatable.fnDraw();">Refresh datatable</button>    
 
    <table id="ajax_datatable">
        <thead>
            <tr>
                <th>Field 1</th>
                <th>Field 2</th>
                <th>Field 3</th>
            </tr>
        </thead>
    </table>
</body>
</html>