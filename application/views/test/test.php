<html>
<script type="text/javascript" src="<? echo base_url('public/js/jquery.js');?>"></script>
<script type="text/javascript">
		//alert('masuk jquery');
		$(document).ready(function(){
		  //alert('masuk jquery');
		  $("#penyulang").change(function(){
		    alert('penyulang berganti');
		    var penyulang = {penyulang:$("#penyulang").val()};
		    //var url = "localhost/test/index.php/test/getGardu/";
		    //alert(penyulang);
		    //alert(url);
		    $.ajax({
		        type : "POST",
		        url : "localhost/P2TL/index.php/welcome/login",
		        data : penyulang,
		        success: function(msg){
		            $("#text").html(msg);
		        }
		    });
		  });
		  
		});

</script>
</head>

<td>
<select name='penyulang' id='penyulang'>
<option value='1' selected>fu</option>";
<option value='2' selected>fuu</option>";
<option value='3' selected>fuuu</option>";
</td>
<br><br><br><br>

<body>
<input type="text" name="text" id="text">
<button id="btn1">Show Text</button>
<button id="btn2">Show HTML</button>
</body>
</html>