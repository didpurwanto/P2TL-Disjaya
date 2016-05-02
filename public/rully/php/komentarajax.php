<?php
if($_POST){
//hasil data yang akan di eksekusi dari input teks
$ngaran  = $_POST['ngaran'];
$email  = $_POST['email'];
$comment = $_POST['comment'];

} 
?>
<!-- menampilkan hasil dari data yang dikirim tadi -->
<li class="box">
 <img src="img/noavatar.png" style="float:left; width:80px; height:80px; margin-right:20px"/>
 <span style="font-size:16px; color:#663399; font-weight:bold">
  <?php echo $ngaran;?>
 </span>
<?php echo $comment; ?>
</li>