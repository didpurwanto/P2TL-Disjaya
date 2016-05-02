
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Komentar menggunakan jQuery dan Ajax</title>
<link rel="Shortcut Icon" href="img/rplogo.ico" type="image/x-icon">
<link rel="stylesheet" href="css/style.css" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
//fungsi untuk memproses pengiriman komentar dengan jQuery
$(function() {
//proses setelah button submit di klik
$(".kirimkeun").click(function() {
//data yang terdapat pada input nama
var ngaran = $("#ngaran").val();
//data yang terdapat pada input email
var email = $("#email").val();
//data yang terdapat pada input komentar
var comment = $("#comment").val();
//memanggil semua data yang akan di eksekusi
var dataString = 'ngaran='+ ngaran + '&email=' + email + '&comment=' + comment;
//membuat validasi apabila terdapat input teks yang kosong
if(ngaran=='' || email=='' || comment=='')
{
alert('Tidak Boleh ada yang kosong');
}
else
{
//menampilkan loading sebelum komentar muncul
$("#flash").show();
$("#flash").fadeIn(400).html('<div style="margin-left:160px;"><img src="img/loading.gif" align="absmiddle">&nbsp;<span class="loading">Silahkan tunggu...</span></div>');
$.ajax({
//proses eksekusi data dengan method post
type: "POST",
//menentukan file dimana data yang terdapat pada input teks di eksekusi
url: "php/komentarajax.php",
data: dataString,
cache: false,
success: function(html){
//menampilkan data apabila data berhasil di eksekusi
$("ol#update").append(html);
$("ol#update li:last").fadeIn("slow");
//mengembalikan input teks menjadi kosong apabila data berhasil di eksekusi
document.getElementById('email').value='';
document.getElementById('ngaran').value='';
document.getElementById('comment').value='';
$("#ngaran").focus();
$("#flash").hide();
}
});
}
return false;
});



});


</script>
</head>

<body>
<div class="header">
<div class="header-inner clearfix">
<div class="pull-left">
<a href="http://www.rullypermana.com" target="_blank"><span style="color: #FFFFFF;"><strong>www.rullypermana.com</strong></span></a>
</div>

<div class="pull-right">
<p class="small-text no-margin"><a href="http://www.rullypermana.com/2013/11/membuat-komentar-menggunakan-jquery.html"><span style="color: #FFFFFF;">Membuat komentar menggunakan jquery</span></a></p>
</div>
</div>
</div>
<div class="container">
<div class="content">
<div id="main">
<ol id="update" class="timeline"></ol>
<div id="flash" align="left" ></div>
<form action="#" method="post" id="formurang">
<input type="text" name="ngaran" id="ngaran" placeholder="Nama Anda..." style="padding-left:8px"/>
<input type="text" name="email" id="email" placeholder="Email Anda..." style="padding-left:8px"/><br>
<textarea name="comment" id="comment" style="width:420px" placeholder="Komentar Anda..."></textarea><br />
<div style="margin-left:340px">
<button class="kirimkeun" id="buttonkomen" type="submit" onclick="$.('#formurang').submit();">Submit</button><br /><br />
</div>
</form>
</div>
</div>
<div class="page-footer">
<center><p><a href="http://www.rullypermana.com" target="_blank">www.rullypermana.com</a></strong></p></center>
</div>
</div>
</body>
</html>
