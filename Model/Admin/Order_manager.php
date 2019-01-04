<?php 
	/**
	 * 
	 */
	class Order_manager extends ConnectDB
	{
		function __construct(){
			$this->connect();
		}
		function insert_order($id_ND,$hotenNN,$diachiNN,$sdtNN,$TongTien,$note){
			$sql = "INSERT INTO `hoadon`(`id_ND`, `TenNN`, `DiaChiNN`, `SDTNN`, `Trangthai`, `TongTien`, `Ghichu`) VALUES ('$id_ND','$hotenNN','$diachiNN','$sdtNN',1,'$TongTien','$note')";
			$result_hd = mysqli_query($this->conn,$sql);
			$ma_HD = mysqli_insert_id($this->conn);
			return $ma_HD;
		}
		function insert_order_deital($ma_HD){
			for ($i=0; $i < sizeof($_SESSION['cart']); $i++) { 
				$sql = "";
			}
		}	
		function insert_dt_order($id_HD,$id_DT,$soluong,$dongia){
			$sql = "";
			$result = mysqli_query($this->conn,$sql);
		}
		function get_list_order(){
			$sql = "SELECT * FROM hoadon";
			return $result = mysqli_query($this->conn,$sql);
			
		}
	}
 ?>