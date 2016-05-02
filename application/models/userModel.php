<?
class UserModel extends CI_Model {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
	function select_data()
	{
		
	}
	function selectUser($username)
	{
		$sql = "SELECT email_user,username,kdarea,nama_user,hak_akses,password_user from \"USER\" where username ='".$username."' and status_user=1";
		//echo $sql;
		$query= $this->db->query($sql);
		return $query->result_array();
	}
	function selectUserDc($username)
	{
		$this->db_2 = $this->load->database('orcl2',TRUE);
		$sql = "SELECT username,nama_user,password_user from \"USER\" where username ='".$username."'";
		$query = $this->db_2->query($sql);
		return $query->result_array();
	}
	function selectUserApprove()
	{
		$sql="select tanggal_daftar,username,nama_user,email_user from \"USER\" where status_user=0";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	function selectUserPapprove($username)
	{
		$sql="select tanggal_daftar,username,nama_user,email_user from \"USER\" where username='".$username."'";
		$query=$this->db->query($sql);
		return $query->result_array();
	}
	function updateStatusUser($username,$hak_akses)
	{
		$sql="update \"USER\" set status_user=1,hak_akses='".$hak_akses."' where username='".$username."'";
		//echo $sql;
		$query=$this->db->query($sql);
	}
	function deleteUser($username)
	{
		$sql="delete from \"USER\" where username='".$username."'";
		//echo $sql;
		$query=$this->db->query($sql);
	}
	function insert_user($username,$nama,$email,$unit,$password,$date,$nip)
	{
		$sql="insert into \"USER\" (username,kdarea,nama_user,email_user,password_user,hak_akses,status_user,tanggal_daftar,nip) values('".$username."','".$nama."','".$email."','".$password."','0','0',TO_DATE('".$date."', 'YYYY-MM-DD HH24:MI:SS'),'".$nip."')";
		$query=$this->db->query($sql);
	}
	function updateUser($usn,$name,$email,$nip,$pswd)
	{
		$sql = "update \"USER\" set nama_user='".$name."',email_user='".$email."',password_user='".$pswd."',nip='".$nip."' where username='".$usn."'";
		$query=$this->db->query($sql);
	}
	function updatePass($username,$pass)
	{
		$sql = "update  \"USER\" set password_user='".$pass."' where username='".$username."'";
		//echo $sql;
		$query = $this->db->query($sql);
	}
}
?>