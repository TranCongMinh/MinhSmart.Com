<?php
	
	class Admin_Model extends ConnectDB{
		function __construct(){
			$this->connect();
		}
		function InsertNhanVien($ten_NV,$tenDangNhap_NV,$matkhau_NV,$sdt,$email,$avatars){
			$sql = "INSERT INTO `nguoidung`(`hoten_ND`, `tendangnhap_ND`, `matkhau_ND`, `quyen`, `SDT`, `Email`,`avatar`) VALUES ('$ten_NV', '$tenDangNhap_NV', '$matkhau_NV','1', '$sdt' ,'$email' ,'$avatars')";
			return mysqli_query($this->conn, $sql);
		}
		function InsertKhachHang($ten_KH,$tenDangNhap_KH,$matkhau_KH,$sdt,$email,$avatars){
			$sql = "INSERT INTO `nguoidung`(`hoten_ND`, `tendangnhap_ND`, `matkhau_ND`, `quyen`, `SDT`, `Email`,`avatar`) VALUES ('$ten_NV', '$tenDangNhap_NV', '$matkhau_NV','2', '$sdt' ,'$email' ,'$avatars')";
			return mysqli_query($this->conn, $sql);
		}
		function getTenNhanVien($tenDangNhap_NV){
			$sql = "SELECT tendangnhap_ND FROM nguoidung WHERE tendangnhap_ND = '$tenDangNhap_NV'";
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
		function getListNhanVien(){
			$sql = "SELECT * FROM nguoidung WHERE quyen = '1'";
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
		function deleteNhanVien($id_NV){
			$sql = "DELETE FROM nguoidung WHERE id_ND = '$id_NV'";
			return mysqli_query($this->conn, $sql);

		}
		function getInfoNhanVien($id) {
			$sql = "SELECT * FROM nguoidung WHERE id_ND = $id";
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
		function EditNhanVien($id, $name, $username,$avatar){
			$sql = "UPDATE nguoidung SET name = '$name', username = '$username' avatar = '$avatar' WHERE id_ND = $id";
			return mysqli_query($this->conn, $sql);
		}
		function checkLoginNhanVien($NV_name, $NV_matkhau) {
			$NV_matkhau = md5($NV_matkhau);
			$sql = "SELECT * FROM nguoidung WHERE tendangnhap_ND = '$NV_name'
			AND matkhau_ND = '$NV_matkhau' AND quyen = '1'";
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
	}
 ?>