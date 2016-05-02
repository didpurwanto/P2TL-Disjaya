	<?
class P2tlModel extends CI_Model {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    function getTindakan($kode_tindakan)
    {
    	$prioritas = array(array("KODE_TINDAKAN" => "a","TINDAKAN" => "Lanjutkan ke P2TL"),array("KODE_TINDAKAN" => "b","TINDAKAN" => "Lanjutkan ke Non P2TL"),array("KODE_TINDAKAN" => "c","TINDAKAN" => "Data tidak dapat dilengkapi"));
    	foreach($prioritas as $rows)
    	{
    		if($rows['KODE_TINDAKAN'] == $kode_tindakan)
    		{
    			return $rows['TINDAKAN'];
    		}
    	}
    }
    function selectTarif()
    {
    	$sql = "select * from tarif";
    	$query = $this->db->query($sql);
    	return $query->result_array();
    }
    function selectDaya()
    {
    	$sql = "select * from daya";
    	$query = $this->db->query($sql);
    	return $query->result_array();
    }
	function getRekapInputLap1()
	{
		$sql = "select * from laporan_terinput";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	function getRekapInputLap1_2($kdarea)
	{
		$sql = "select * from laporan_terinput where kdarea='".$kdarea."'";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	function getRekapInputLap2()
	{
		$sql = "select * from laporan_olahlap1";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	function getRekapInputLap2_2($kdarea)
	{
		$sql = "select * from laporan_olahlap1 where kdarea='".$kdarea."'";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	function getRekap_Cetak_nonp2tl()
	{
		$sql = "select * from laporan_nonp2tl_rekap";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	function getRekap_Cetak_nonp2tl_2($kdarea)
	{
		$sql = "select * from laporan_nonp2tl_rekap where kdarea='".$kdarea."'";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	function getRekap_Cetak_p2tl()
	{
		$sql = "select * from p2tl_rekap";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	function getRekap_Cetak_p2tl_2($kdarea)
	{
		$sql = "select * from p2tl_rekap where kdarea='".$kdarea."'";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	function getRekap_validasi_nonp2tl()
	{
		$sql = "select * from validasi_nonp2tl_rekap";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	function getRekap_validasi_nonp2tl_2($kdarea)
	{
		$sql = "select * from validasi_nonp2tl_rekap where kdarea='".$kdarea."'";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	function getRekap_input_p2tl()
	{
		$sql = "select * from input_p2tl_rekap";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	function getRekap_input_p2tl_2($kdarea)
	{
		$sql = "select * from input_p2tl_rekap where kdarea='".$kdarea."'";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	function getRekap_input_nonp2tl()
	{
		$sql = "select * from input_nonp2tl_rekap";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	function getRekap_input_nonp2tl_2($kdarea)
	{
		$sql = "select * from input_nonp2tl_rekap where kdarea='".$kdarea."'";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	function getRekap_anev()
	{
		$sql = "select * from anev_rekap";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	function getRekap_anev_2($kdarea)
	{
		$sql = "select * from anev_rekap where kdarea='".$kdarea."'";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	function getRekap_sph()
	{
		$sql = "select * from sph_rekap";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	function getRekap_sph_2($kdarea)
	{
		$sql = "select * from sph_rekap where kdarea='".$kdarea."'";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	function getRekap_validasi_sph()
	{
		$sql = "select * from validasi_sph_rekap";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	function getRekap_validasi_sph_2($kdarea)
	{
		$sql = "select * from validasi_sph_rekap where kdarea='".$kdarea."'";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	function select_unit()
	{
		$sql = "select * from unit";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	function select_pinalti()
	{
		$sql="select * from pinalti";
		$query= $this->db->query($sql);
		return $query->result_array();
	}
	function select_prioritas()
	{
		$sql ="select * from prioritas";
		$query=$this->db->query($sql);
		return $query->result_array();
	}
	function insertLaporan($username,$id_pel,$nama_pel,$alamat_pel,$daya_pel,$unit_pel,$tarif_pel,$indikasi,$prioritas,$date_insert)
	{
		$sql="INSERT INTO LAPORAN (KODE_PRIORITAS, KODE_STATUS, KDAREA, USERNAME, NAMA_PELANGGAN, ALAMAT_PELANGGAN, DAYA_PELANGGAN, TARIF_PELANGGAN, INDIKASI_KETERANGAN, TANGGAL_MELAPOR, ID_PELANGGAN) VALUES ('".$prioritas."', 'a_0', '".$unit_pel."', '".$username."', '".$nama_pel."', '".$alamat_pel."', '".$daya_pel."', '".$tarif_pel."', '".$indikasi."', TO_DATE('".$date_insert."', 'YYYY-MM-DD HH24:MI:SS'), '".$id_pel."')";
		$query=$this->db->query($sql);
	}
	function selectLaporan($id_lap)
	{
		$sql="select p.prioritas,l.username, l.kode_status, l.kdarea,l.ID_LAPORAN,l.ID_PELANGGAN,l.NAMA_PELANGGAN,l.TARIF_PELANGGAN,l.DAYA_PELANGGAN,l.ALAMAT_PELANGGAN,u.NAMA_AREA,to_char(l.tanggal_melapor, 'yyyy-mm-dd hh24:mi:ss') tanggal_melapor, l.INDIKASI_KETERANGAN, l.kode_prioritas from prioritas p,laporan l,unit u where l.id_laporan='".$id_lap."' AND l.kdarea=u.kdarea";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	function insertOlahLap1($tindakan,$keterangan,$date_insert,$username,$id_lap,$status)
	{
		$sql = "INSERT INTO OLAP_SATU(ID_LAPORAN,USERNAME,TANGGAL_OLAP_SATU,KETLAPSATU,TINDAKAN_OLAP_SATU) values('".$id_lap."','".$username."',TO_DATE('".$date_insert."', 'YYYY-MM-DD HH24:MI:SS'),'".$keterangan."','".$tindakan."')";
		$query=$this->db->query($sql);
		//update status laporan
		$sql= "update laporan set kode_status='".$status."' where id_laporan='".$id_lap."'";
		$query=$this->db->query($sql);
	}
	function insertOlahLap2($tindakan,$keterangan,$date_insert,$username,$id_lap,$status)
	{
		$sql = "INSERT INTO OLAP_DUA(ID_LAPORAN,USERNAME,TANGGAL_OLAP_DUA,KET_OLAP_DUA,TINDAKAN) values('".$id_lap."','".$username."',TO_DATE('".$date_insert."', 'YYYY-MM-DD HH24:MI:SS'),'".$keterangan."','".$tindakan."')";
		$query=$this->db->query($sql);
		//update status laporan
		$sql= "update laporan set kode_status='".$status."' where id_laporan='".$id_lap."'";
		$query=$this->db->query($sql);
	}
	function select_cetakp2tl($id_lap)
	{
		$sql = "select * from cetak_pptl where id_laporan='".$id_lap."'";
		$query=$this->db->query($sql);
		return $query->result_array();
	}
	function insert_cetakp2tl($username,$id_lap,$tanggal,$jumlah)
	{
		$sql="INSERT INTO cetak_pptl (USERNAME,ID_LAPORAN,TANGGAL_CETAK_PPTL,JUMLAH_CETAK_PPTL) values ('".$username."','".$id_lap."',TO_DATE('".$tanggal."', 'YYYY-MM-DD HH24:MI:SS'),'".$jumlah."')";
		$query=$this->db->query($sql);
		$sql= "update laporan set kode_status='a_4' where id_laporan='".$id_lap."'";
		$query=$this->db->query($sql);
	}
	function updateJumlahCetakP2tl($id_lap,$jumlah)
	{
		$sql = "update cetak_pptl set JUMLAH_CETAK_PPTL='".$jumlah."' where id_laporan='".$id_lap."'";
		$query=$this->db->query($sql);
	}
	function select_cetaknonp2tl($id_lap)
	{
		$sql = "select * from cetakto_nonpptl where id_laporan='".$id_lap."'";
		$query=$this->db->query($sql);
		return $query->result_array();
	}
	function insert_cetaknonp2tl($username,$id_lap,$tanggal,$jumlah)
	{
		$sql="INSERT INTO cetakto_nonpptl (USERNAME,ID_LAPORAN,TANGGAL_CETAK_NON_PPTL,JUMLAH_CETAK_NON_PPTL) values ('".$username."','".$id_lap."',TO_DATE('".$tanggal."', 'YYYY-MM-DD HH24:MI:SS'),'".$jumlah."')";
		$query=$this->db->query($sql);
		$sql= "update laporan set kode_status='c_4' where id_laporan='".$id_lap."'";
		$query=$this->db->query($sql);
	}
	function updateJumlahCetaknonP2tl($id_lap,$jumlah)
	{
		$sql = "update cetakto_nonpptl set JUMLAH_CETAK_NON_PPTL='".$jumlah."' where id_laporan='".$id_lap."'";
		$query=$this->db->query($sql);
	}
	function selectLaporanDetail($id_lap)
	{
		$sql="select p.prioritas,l.tarif_pelanggan,l.id_laporan,l.id_pelanggan,l.nama_pelanggan,l.alamat_pelanggan,l.daya_pelanggan,u.nama_area,to_char(l.tanggal_melapor, 'yyyy-mm-dd hh24:mi:ss') tanggal_melapor,l.kode_prioritas,l.indikasi_keterangan,os.tindakan_olap_satu,os.ketlapsatu,od.tindakan,od.ket_olap_dua from prioritas p,laporan l,olap_satu os,olap_dua od,unit u where l.id_laporan='".$id_lap."' and l.id_laporan=od.id_laporan and l.id_laporan=os.id_laporan and l.kdarea=u.kdarea and l.kode_prioritas = p.kode_prioritas";
		$query=$this->db->query($sql);
		return $query->result_array();
	}
	function updateLaporanPel($id_lap,$id_pel,$nama_pel,$tarif_pel,$daya_pel,$unit_pel)
	{
		$sql="update laporan set id_pelanggan='".$id_pel."',nama_pelanggan='".$nama_pel."',tarif_pelanggan='".$tarif_pel."',daya_pelanggan='".$daya_pel."',kdarea='".$unit_pel."' where id_laporan='".$id_lap."'";
		$query=$this->db->query($sql);
	}
	function insertHasilp2tl($username,$kode_pelanggaran,$id_lap,$tanggal_sekarang,$petugas1,$petugas2,$hasil_temuan,$kesimpulan,$path,$tanggal_p2tl)
	{
		$sql="insert into hasil_p2tl(username,kode_pelanggaran,id_laporan,tanggal_input_p2tl,petugas1_p2tl,petugas2_p2tl,kesimpulan,path_file_p2tl,tanggal_p2tl,hasil_temuan_p2tl) values ('".$username."','".$kode_pelanggaran	."','".$id_lap."',TO_DATE('".$tanggal_sekarang."', 'YYYY-MM-DD HH24:MI:SS'),'".$petugas1."','".$petugas2."','".$kesimpulan."','".$path."',TO_DATE('".$tanggal_p2tl."', 'YYYY-MM-DD HH24:MI:SS'),'".$hasil_temuan."')";
		$query=$this->db->query($sql);
		$sql= "update laporan set kode_status='a_5' where id_laporan='".$id_lap."'";
		$query=$this->db->query($sql);
	}
	function selectLaporanDetailnon($id_lap)
	{
		$sql="select p.prioritas,l.tarif_pelanggan,l.id_laporan,l.id_pelanggan,l.nama_pelanggan,l.alamat_pelanggan,l.daya_pelanggan,u.nama_area,to_char(l.tanggal_melapor, 'yyyy-mm-dd hh24:mi:ss') tanggal_melapor,l.kode_prioritas,l.indikasi_keterangan,os.tindakan_olap_satu,os.ketlapsatu,od.tindakan,od.ket_olap_dua from prioritas p,laporan l,olap_satu os,olap_dua od,unit u where l.id_laporan='".$id_lap."' and l.id_laporan=od.id_laporan and l.id_laporan=os.id_laporan and l.kdarea=u.kdarea";
		$query=$this->db->query($sql);
		return $query->result_array();
	}
	function insertHasilnonp2tl($username,$id_lap,$petugas1,$petugas2,$kesimpulan)
	{
		$sql="INSERT INTO HASIL_NON_P2TL (USERNAME, ID_LAPORAN, PETUGAS1_NON_P2TL, PETUGAS2_NON_P2TL, KESIMPULAN_NON_P2TL) VALUES ('".$username."', '".$id_lap."', '".$petugas1."', '".$petugas2."', '".$kesimpulan."')";
		$query=$this->db->query($sql);
		$sql= "update laporan set kode_status='c_5' where id_laporan='".$id_lap."'";
		$query=$this->db->query($sql);
	}

	function selectLapDetailAnev($id_lap)
	{
		$sql="select p.prioritas,l.kode_prioritas, l.indikasi_keterangan,to_char(hp.tanggal_p2tl, 'yyyy-mm-dd hh24:mi:ss') tanggal_p2tl,hp.petugas1_p2tl,hp.petugas2_p2tl,hp.hasil_temuan_p2tl,hp.kesimpulan,hp.username as usernamep2tl,to_char(hp.TANGGAL_INPUT_P2TL, 'yyyy-mm-dd hh24:mi:ss') TANGGAL_INPUT_P2TL,l.id_pelanggan,l.nama_pelanggan,l.daya_pelanggan,u.nama_area,l.alamat_pelanggan,l.username as usernameLap,to_char(l.tanggal_melapor, 'yyyy-mm-dd hh24:mi:ss') tanggal_melapor,os.username as usernameOlap1,os.ketlapsatu,os.tindakan_olap_satu,od.username usernameOlap2,od.ket_olap_dua,od.tindakan from prioritas p,laporan l,unit u,olap_satu os,olap_dua od,hasil_p2tl hp where l.id_laporan = '".$id_lap."' and l.id_laporan = os.id_laporan and l.id_laporan=hp.id_laporan and l.id_laporan=od.id_laporan and l.kdarea=u.kdarea";
		$query=$this->db->query($sql);
		return $query->result_array();
	}

	function selectLapDetailSph($id_lap)
	{
		$sql  = "select p.prioritas,an.tanggal_anev as tanggal_periksa ,an.petugas1_anev , an.petugas2_anev, an.hasil_temuan_anev, an.kesimpulan_anev, an.username as username_anev,  an.tanggal_input_anev , l.kode_prioritas, l.indikasi_keterangan,to_char(hp.tanggal_p2tl, 'yyyy-mm-dd hh24:mi:ss') tanggal_p2tl,hp.petugas1_p2tl,hp.petugas2_p2tl,hp.hasil_temuan_p2tl,hp.kesimpulan,hp.username as usernamep2tl,to_char(hp.TANGGAL_INPUT_P2TL, 'yyyy-mm-dd hh24:mi:ss') TANGGAL_INPUT_P2TL,l.id_pelanggan,l.nama_pelanggan,l.daya_pelanggan,u.nama_area,l.alamat_pelanggan,l.username as usernameLap,to_char(l.tanggal_melapor, 'yyyy-mm-dd hh24:mi:ss') tanggal_melapor,os.username as usernameOlap1,os.ketlapsatu,os.tindakan_olap_satu,od.username usernameOlap2,od.ket_olap_dua,od.tindakan from prioritas p,anev an, laporan l,unit u,olap_satu os,olap_dua od,hasil_p2tl hp where l.id_laporan = '".$id_lap."' and l.id_laporan = os.id_laporan and l.id_laporan=hp.id_laporan and l.id_laporan=od.id_laporan and l.kdarea=u.kdarea";
		$query=$this->db->query($sql);
		return $query->result_array();
	}
	function insertanev($id_lap,$petugas1,$petugas2,$username,$tanggal_anev,$tanggal_sekarang,$pinalti,$hasil_temuan,$kesimpulan)
	{
		$sql="insert into anev (username,kode_pelanggaran,id_laporan,tanggal_input_anev,tanggal_anev,petugas1_anev,petugas2_anev,kesimpulan_anev,hasil_temuan_anev) values('".$username."','".$pinalti."','".$id_lap."',TO_DATE('".$tanggal_sekarang."', 'YYYY-MM-DD HH24:MI:SS'),TO_DATE('".$tanggal_anev."', 'YYYY-MM-DD HH24:MI:SS'),'".$petugas1."','".$petugas2."','".$kesimpulan."','".$hasil_temuan."')";
		//echo $sql;
		$query=$this->db->query($sql);
		$sql= "update laporan set kode_status='a_6' where id_laporan='".$id_lap."'";
		$query=$this->db->query($sql);
	}
	function insertsph($username,$pinalti,$id_lap,$tanggal_sekarang,$tanggal_sph,$path,$jumlah_ts,$kesimpulan,$kesimpulan_temuan,$tdt_pln,$tdt_pelanggan)
	{
		$sql="INSERT INTO SPH (USERNAME, KODE_PELANGGARAN, ID_LAPORAN, TANGGAL_INPUT_SPH, TANGGAL_SPH, PATH_FILE_SPH, JUMLAH_TS, KESIMPULAN, KESIMPULAN_TEMUAN, TTD_PLN, TTD_PELANGGAN) VALUES ('".$username."', '".$pinalti."', '".$id_lap."', TO_DATE('".$tanggal_sekarang."', 'YYYY-MM-DD HH24:MI:SS'), TO_DATE('".$tanggal_sph."', 'YYYY-MM-DD HH24:MI:SS'), '".$path."', '".$jumlah_ts."', '".$kesimpulan."', '".$kesimpulan_temuan."', '".$tdt_pln."', '".$tdt_pelanggan."')";
		$query=$this->db->query($sql);
		$sql= "update laporan set kode_status='a_7' where id_laporan='".$id_lap."'";
		$query=$this->db->query($sql);
	}
	function insertvalidasinonp2tl($username,$id_lap,$keterangan,$validasi,$tanggal_sekarang)
	{
		$sql = "INSERT INTO VALIDASI_NON_PPTL(USERNAME,ID_LAPORAN,KET_NON_PPTL,TANGGAL_VALIDASI_NON_PPTL,VALIDASI) values('".$username."','".$id_lap."','".$keterangan."',TO_DATE('".$tanggal_sekarang."', 'YYYY-MM-DD HH24:MI:SS'),'".$validasi."')";
		$query=$this->db->query($sql);
		if($validasi==0)
			$sql="update laporan set kode_status='b_6' where id_laporan='".$id_lap."'";
		else
			$sql="update laporan set kode_status='b_6' where id_laporan='".$id_lap."'";
		$query=$this->db->query($sql);
	}

	function selectValidasiSPH($id_lap)
	{
		$sql  = "select p.prioritas,s.kesimpulan_temuan, s.kode_pelanggaran as kode_pelanggaran_sph, s.kesimpulan_temuan as kesimpulan_sph, s.id_sph, s.username as username_sph, s.id_laporan as id_laporan_sph, s.tanggal_input_sph, s.tanggal_sph, s.path_file_sph, s.jumlah_ts as jumlah_ts_sph, s.kesimpulan as kesimpulan_sph, s.ttd_pln, s.ttd_pelanggan, an.tanggal_anev as tanggal_periksa ,an.petugas1_anev , an.petugas2_anev, an.hasil_temuan_anev, an.kesimpulan_anev, an.username as username_anev,  an.tanggal_input_anev , l.kode_prioritas, l.indikasi_keterangan,to_char(hp.tanggal_p2tl, 'yyyy-mm-dd hh24:mi:ss') tanggal_p2tl,hp.petugas1_p2tl,hp.petugas2_p2tl,hp.hasil_temuan_p2tl,hp.kesimpulan,hp.username as usernamep2tl,to_char(hp.TANGGAL_INPUT_P2TL, 'yyyy-mm-dd hh24:mi:ss') TANGGAL_INPUT_P2TL,l.id_pelanggan,l.nama_pelanggan,l.daya_pelanggan,u.nama_area,l.alamat_pelanggan,l.username as usernameLap,to_char(l.tanggal_melapor, 'yyyy-mm-dd hh24:mi:ss') tanggal_melapor,os.username as usernameOlap1,os.ketlapsatu,os.tindakan_olap_satu,od.username usernameOlap2,od.ket_olap_dua,od.tindakan from prioritas p,sph s, anev an, laporan l,unit u,olap_satu os,olap_dua od,hasil_p2tl hp where l.id_laporan = '".$id_lap."' and l.id_laporan = os.id_laporan and l.id_laporan=hp.id_laporan and l.id_laporan=od.id_laporan and l.kdarea=u.kdarea";
		$query=$this->db->query($sql);
		return $query->result_array();
	}
	function insertvalidasisph($username,$id_lap,$keterangan,$validasi,$tanggal_sekarang)
	{
		$sql = "INSERT INTO PENGESAHAN_SPH(USERNAME,ID_LAPORAN,KET_SPH,TGL_PENGESAHAN,VALIDASI) values('".$username."','".$id_lap."','".$keterangan."',TO_DATE('".$tanggal_sekarang."', 'YYYY-MM-DD HH24:MI:SS'),'".$validasi."')";
		$query=$this->db->query($sql);
		if($validasi==0)
			$sql="update laporan set kode_status='a_8' where id_laporan='".$id_lap."'";
		else
			$sql="update laporan set kode_status='b_8' where id_laporan='".$id_lap."'";
		$query=$this->db->query($sql);
	}

	function select_status()
	{
		$sql="select * from status";
		$query=$this->db->query($sql);
		return $query->result_array();
	}

	function select_rekap_lap_all()
	{
		$sql = "select rs.status,rs.jumlah,tb.Jumlah_area from rekap_status_all rs,(select s.status,count(s.kode_status) as Jumlah_Area from
			(select s.status,l.kode_status from status s left join laporan l on s.kode_status=l.kode_status) s
			group by s.status)tb
			where tb.status = rs.status";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	function cariDaerah($kdarea)
	{
		$sql= "select nama_area from unit where kdarea='".$kdarea."'";
		$query=$this->db->query($sql);
		return $query->result_array();
	}
	function select_rekap_daerah($kdarea)
	{
		$sql="select rs.status,rs.jumlah,tb.Jumlah_area from rekap_status_all rs,(select s.status,count(s.kode_status) as Jumlah_Area from
			(select s.status,l.kode_status from status s left join laporan l on s.kode_status=l.kode_status and kdarea='".$kdarea."') s
			group by s.status)tb
			where tb.status = rs.status";
		$query=$this->db->query($sql);
		//echo $sql;
		return $query->result_array();
	}
	function select_status_lap($id_lap)
	{
		$sql="select kode_status from laporan where id_laporan='".$id_lap."'";
		$query=$this->db->query($sql);
		return $query->result_array();
	}
	function select_lap()
	{
		$sql = "select * from laporan";
		$query=$this->db->query($sql);
		return $query->result_array();
	}
	function select_data_olap1($id_lap)
	{
		$sql="select tindakan_olap_satu,ketlapsatu,username,to_char(TANGGAL_OLAP_SATU, 'yyyy-mm-dd hh24:mi:ss') TANGGAL_OLAP_SATU from olap_satu where id_laporan='".$id_lap."'";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	function select_data_olap2($id_lap)
	{
		$sql="select tindakan,ket_olap_dua,username,to_char(TANGGAL_OLAP_DUA, 'yyyy-mm-dd hh24:mi:ss') TANGGAL_OLAP_DUA from olap_dua where id_laporan='".$id_lap."'";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	function select_hasil_p2tl($id_lap)
	{
		$sql="select to_char(TANGGAL_INPUT_P2TL, 'yyyy-mm-dd hh24:mi:ss') TANGGAL_INPUT_P2TL,to_char(TANGGAL_P2TL, 'yyyy-mm-dd hh24:mi:ss') TANGGAL_P2TL,username,petugas1_p2tl,petugas2_p2tl,kesimpulan,kode_pelanggaran,hasil_temuan_p2tl from hasil_p2tl where id_laporan='".$id_lap."'";
		$query=$this->db->query($sql);
		return $query->result_array();
	}
	function select_anev($id_lap)
	{
		$sql="select username,to_char(TANGGAL_INPUT_ANEV, 'yyyy-mm-dd hh24:mi:ss') TANGGAL_INPUT_ANEV,to_char(TANGGAL_ANEV, 'yyyy-mm-dd hh24:mi:ss') TANGGAL_ANEV,petugas1_anev,petugas2_anev,KODE_PELANGGARAN,kesimpulan_anev,hasil_temuan_anev from anev where id_laporan='".$id_lap."'";
		$query=$this->db->query($sql);
		return $query->result_array();
	}
	function select_sph($id_lap)
	{
		$sql="select username,to_char(TANGGAL_INPUT_SPH, 'yyyy-mm-dd hh24:mi:ss') TANGGAL_INPUT_SPH,to_char(TANGGAL_SPH, 'yyyy-mm-dd hh24:mi:ss') TANGGAL_SPH,KODE_PELANGGARAN,JUMLAH_TS,KESIMPULAN,kesimpulan_temuan,ttd_pelanggan,ttd_pln from sph where id_laporan='".$id_lap."'";
		$query=$this->db->query($sql);
		return $query->result_array();
	}
	function select_validasi_sph($id_lap)
	{
		$sql="select username,to_char(TGL_PENGESAHAN, 'yyyy-mm-dd hh24:mi:ss') TGL_PENGESAHAN,ket_sph from PENGESAHAN_SPH where id_laporan='".$id_lap."'";
		$query=$this->db->query($sql);
		return $query->result_array();
	}
	function select_nonp2tl($id_lap)
	{
		$sql="select username,PETUGAS1_NON_P2TL,PETUGAS2_NON_P2TL,KESIMPULAN_NON_P2TL from HASIL_NON_P2TL where id_laporan='".$id_lap."'";
		$query=$this->db->query($sql);
		return $query->result_array();
	}
	function select_validasi_nonp2tl($id_lap)
	{
		$sql = "select username,to_char(TANGGAL_VALIDASI_NON_PPTL, 'yyyy-mm-dd hh24:mi:ss') TANGGAL_VALIDASI_NON_PPTL,KET_NON_PPTL from VALIDASI_NON_PPTL where id_laporan='".$id_lap."'";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	function insert_user($username,$nama,$email,$unit,$password,$date)
	{
		$sql = "insert into \"USER\" (username,nama_user,kdarea,email_user,password_user,tanggal_daftar,hak_akses, status_user) values ('".$username."', '". $nama."','".$unit."', '".$email."','".$password."',TO_DATE('".$date."', 'YYYY-MM-DD HH24:MI:SS'),'0','0')";
		$query = $this->db->query($sql);
		//return $sql;
	}
	function select_komentar($id_lap)
	{
		$sql = "select username,to_char(tanggal_komentar, 'yyyy-mm-dd hh24:mi:ss') tanggal_komentar,isi_komentar from komentar where id_laporan ='".$id_lap."' order by (tanggal_komentar)";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	function insert_komentar($id_lap,$username,$komen,$date)
	{
		$sql="INSERT INTO KOMENTAR (ID_LAPORAN, USERNAME, TANGGAL_KOMENTAR, ISI_KOMENTAR) VALUES ('".$id_lap."', '".$username."', TO_DATE('".$date."', 'YYYY-MM-DD HH24:MI:SS'), '".$komen."')";
		$query = $this->db->query($sql);
	}

	function selectfinalrekap()
	{
		$sql = "Select * from final_rekap_all";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
}
?>
