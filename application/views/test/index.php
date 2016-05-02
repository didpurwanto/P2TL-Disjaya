<html>
<head>
<script type="text/javascript" src="<? echo base_url('public/js/jquery.js');?>"></script>
<script type="text/javascript">
		$(document).ready(function(){
		  $("form").submit(function(){
		  	alert("test");
		    var user = {user:$("#user").val()};
		    var password = {password:$("#password").val()};
		    alert(password);
		    $.ajax({
		        type : "POST",
		        url : "<?php echo base_url('/index.php/welcome/login')?>",
		        data : penyulang,password,
		        success: function(msg){
		            $("#warning").text(msg);
		        }
		    });
		  });
		  
		});

</script>
<script type="text/javascript">
$('#change1').keyup(function(){
alert("test");
var l = $(this).val();
$('#warning').text(l);
//alert($('#change1').val())
});
</script>
</head>
<input type="text" id="change1"/><br/><br/>
	<form action="./" method="POST">
		<input type="text" name="user" id="user">
		<br>
		<input type="password" name="password" id="password">
		<br>
		<label id="warning"></label>
			<br>
		<input type="submit" name="submit" id="submit">
	</form>

</html>