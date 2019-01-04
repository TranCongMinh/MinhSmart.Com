<?php 
	class Product_Model extends ConnectDB{
		
		function __construct(){
			$this->connect();
		}
	function themDienThoai($ten_DT,$id_thuonghieu,$Display, $OS,$CameraTruoc,$CameraSau,$RAM,$ROM,$CPU,$Battery,$Network,$information,$Gia,$SoLuong,$images){
			$sql = "INSERT INTO `dienthoai`( `Ten_DT`,`id_thuonghieu`,`Display`, `OS`, `CameraTruoc`, `CameraSau`, `RAM`, `ROM`, `CPU`, `Battery`, `Network`, `information`, `Gia`, `SoLuong`, `images`) VALUES ('$ten_DT','$id_thuonghieu','$Display','$OS','$CameraTruoc','$CameraSau','$RAM','$ROM','$CPU','$Battery','$Network','$information','$Gia','$SoLuong','$images')";
			return mysqli_query($this->conn, $sql);
		}
	function getListThuongHieu($id_thuonghieu = null) {
			$sql = "SELECT * FROM thuonghieu";
			$select = '';
			$result = mysqli_query($this->conn, $sql);
			while ($row = $result->fetch_assoc()) {
				$id_th = $row['id_thuonghieu'];
				$name = $row['tenthuonghieu'];
				$selected = ($id_th == $id_thuonghieu)?'selected':'';
				$select.="<option value='$id_th' $selected>$name</option>";
			}
			return $select;
		}
	function getListDienThoaiById($id_DT){
		$sql = "SELECT * FROM `dienthoai` WHERE id_DT = '$id_DT'";
		$result = mysqli_query($this->conn,$sql);
		return $result;

	}
	function getListDienThoai(){
			$sql = "SELECT * , thuonghieu.tenthuonghieu FROM `dienthoai` INNER JOIN thuonghieu ON dienthoai.id_thuonghieu = thuonghieu.id_thuonghieu";
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
	function suaDienThoai($id_DT,$Ten_DT_new,$id_thuonghieu_new,$Display_new, $OS_new,$CameraTruoc_new,$CameraSau_new,$RAM_new,$ROM_new,$CPU_new,$Battery_new,$Network_new,$information_new,$Gia_new,$SoLuong_new,$image_new){
			$sql = "UPDATE `dienthoai` SET `id_thuonghieu`='$id_thuonghieu_new',`Ten_DT`='$Ten_DT_new',`Display`='$Display_new',`OS`='$OS_new',`CameraTruoc`='$CameraTruoc_new',`CameraSau`='$CameraSau_new',`RAM`='$RAM_new',`ROM`='$ROM_new',`CPU`='$CPU_new',`Battery`='$Battery_new',`Network`='$Network_new',`information`='$information_new',`Gia`='$Gia_new',`SoLuong`='$SoLuong_new',`images`='$image_new' WHERE id_DT = '$id_DT'";
			return mysqli_query($this->conn, $sql);
		}
	function xoaDienThoai($id_DT){
		$sql = "DELETE FROM dienthoai WHERE id_DT = '$id_DT'";
			return mysqli_query($this->conn, $sql);
		}
	function getPhanTrang6($page){
			$sotrangchia = 8;
			$total = mysqli_num_rows($this->getListDienThoai());
			$from = ($page-1)*$sotrangchia;
			$sql = "SELECT * , thuonghieu.tenthuonghieu FROM `dienthoai` INNER JOIN thuonghieu ON dienthoai.id_thuonghieu = thuonghieu.id_thuonghieu LIMIT $from,$sotrangchia";
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}
	function getPhanTrang4($page){
			$sotrangchia = 4;
			$total = mysqli_num_rows($this->getListDienThoai());
			$from = ($page-1)*$sotrangchia;
			$sql = "SELECT * , thuonghieu.tenthuonghieu FROM `dienthoai` INNER JOIN thuonghieu ON dienthoai.id_thuonghieu = thuonghieu.id_thuonghieu LIMIT $from,$sotrangchia";
			$result = mysqli_query($this->conn, $sql);
			return $result;
		}

	function getSoTrang(){
			$sotrangchia = 5;
			$total = mysqli_num_rows($this->getListDienThoai());
			$currentPage = ceil($total/$sotrangchia);
			return $currentPage;
		}
	function getThuongHieu(){
		$sql = "SELECT * FROM THUONGHIEU";
		$result = mysqli_query($this->conn,$sql);
		return $result;
	}
	}

 ?>