
<!DOCTYPE HTML>
<html>
	<head>
	<title>cetak non p2tl </title>
	</head>
		
<body>

<h1><center>SURAT  TUGAS</cemter></h1>

<br />


<script type="text/javascript">
    function printpage() {
        //Get the print button and put it into a variable
        var printButton = document.getElementById("printpagebutton");
        
        //Set the print button visibility to 'hidden' 
        printButton.style.visibility = 'hidden';
        
        //Print the page content
        window.print()
        //Set the print button to 'visible' again 
        //[Delete this line if you want it to stay hidden after printing]
        printButton.style.visibility = 'visible';
     	window.parent.location.reload();
        if (window.opener != null && !window.opener.closed) {
                window.opener.location.href = "<?echo base_url('index.php/pages/dashboard')?>";
            }
        window.close();
           
    }
</script>



<table>
	<tr>
		<td colspan="4">Yang bertanda tangan di bawah ini, Saya : </td>
	</tr>
	<tr>
		<td width="100 px">Nama</td>
		<td width="15 px">:</td>
		<td><label>....................</label></td>
	</tr>
	<tr>
		<td>NIK</td>
		<td>:</td>
		<td><label>.....................</label></td>
	</tr>
	<tr>
		<td>Jabatan</td>
		<td>:</td>
		<td><label>Asman / DM PLN DIsjaya</label></td>
	</tr>
	<tr>
		<td>Instansi</td>
		<td>:</td>
		<td><label>PLN Disjaya Jakarta Pusat</label></td>
	</tr>
	<tr>
		<td> &nbsp
		</td>
	</tr>
	<tr>
		<td colspan = "4">Menugaskan kepada : </td>
	</tr>
	<tr>
		<td width="100 px">Nama</td>
		<td width="15 px">:</td>
		<td><label>..................</label></td>
	</tr>
	<tr>
		<td>NIK</td>
		<td>:</td>
		<td><label>..................</label></td>
	</tr>
	<tr>
		<td>Jabatan</td>
		<td>:</td>
		<td><label>..................</label></td>
	</tr>
	<tr>
		<td>Unit Kerja</td>
		<td>:</td>
		<td><label>PLN Disjaya Jakarta Pusat</label></td>
	</tr>

	<tr>
		<td width="100 px">Nama</td>
		<td width="15 px">:</td>
		<td><label>..................</label></td>
	</tr>
	<tr>
		<td>NIK</td>
		<td>:</td>
		<td><label>..................</label></td>
	</tr>
	<tr>
		<td>Jabatan</td>
		<td>:</td>
		<td><label>..................</label></td>
	</tr>
	<tr>
		<td>Unit Kerja</td>
		<td>:</td>
		<td><label>PLN Disjaya Jakarta Pusat</label></td>
	</tr>
	<tr>
		<td colspan="5">
				Untuk melakukan tindakan P2TL kepada pelanggan yaitu:
		</td>	
	</tr>
		<tr>
		<td> &nbsp
		</td>
	</tr>
	<tr>
		<td width="100 px">Nama</td>
		<td width="15 px">:</td>
		<td><label><?echo $nama_pelanggan?></label></td>
	</tr>
	<tr>
		<td>ID Pelanggan</td>
		<td>:</td>
		<td><label><?echo $id_pelanggan?></label></td>
	</tr>
	<tr>
		<td>Daya</td>
		<td>:</td>
		<td><label><?echo $daya_pelanggan?></label></td>
	</tr>
	<tr>
		<td>Unit</td>
		<td>:</td>
		<td><label><?echo $nama_area?></label></td>
	</tr>
	<tr>
		<td>Indikasi</td>
		<td>:</td>
		<td colspan="10"><label><?echo $indikasi_keterangan?></label></td>
	</tr>
	</tr>
	
</table>
<br />
Surat Tugas ini dibuat dengan sebenar-benarnya sebagai surat tugas.

<br /><br />
Jakarta, 12/12/2014 <br />
Pimpinan Unit Kerja/Instansi :
<br /><br /><br />
...........................




<br />
<form action ="<? echo base_url('index.php/pages/cetaktononp2tl')?>" method="POST">
<input type="hidden" name="id_lap" value ="<?echo $id_lap?>">
<input align = "center " id="printpagebutton"  type="submit" value="Cetak Surat Tugas" onclick="printpage()"/>
<br />
<br />
</form>
</body>
</html>
