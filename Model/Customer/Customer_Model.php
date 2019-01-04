<?php 
	class Customer_Model extends ConnectDB{
		public $conn;
		function __construct(){
			$this->connect();
		}
		function Customer_Register($ten_ND,$tenDangNhap_ND,$matkhau_ND,$sdt,$email,$avatars){
			$sql = "INSERT INTO `nguoidung`(`hoten_ND`, `tendangnhap_ND`, `matkhau_ND`, `quyen`, `SDT`, `Email`,`avatar`) VALUES ('$ten_ND', '$tenDangNhap_ND', '$matkhau_ND','2', '$sdt' ,'$email' ,'$avatars')";
			return mysqli_query($this->conn, $sql);
		}
		function getTenKhachHang($tenDangNhap_KH){
			$sql = "SELECT tendangnhap_ND FROM nguoidung WHERE tendangnhap_ND = '$tenDangNhap_KH'";
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
		function checkLoginNguoiDung($ND_name, $ND_matkhau) {
			$ND_matkhau = md5($ND_matkhau);
			$sql = "SELECT * FROM nguoidung WHERE tendangnhap_ND = '$ND_name'
			AND matkhau_ND = '$ND_matkhau' AND quyen = '2'";
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
	}
 ?>