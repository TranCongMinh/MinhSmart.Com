<?php
	include 'config/connectdb.php';
	include 'Model/Admin/Admin_Model.php';
	include 'Model/Admin/Product_Model.php';
	include 'Model/Admin/Order_manager.php';

	/*
		* Kiem tra request tu view
	*/
	class Admin_Controller {
	function handleRequest(){
		$action = isset($_GET['action'])?$_GET['action']:'admin';
		switch ($action) {
			case 'NhanVienLogin':
				if (isset($_POST['NhanVienLogin'])) {
					$NV_name = $_POST['NV_name'];
					$NV_matkhau = $_POST['NV_matkhau'];
				}
				//var_dump($_POST['NhanVienlogin']);
				$nhanVienModel = new Admin_Model();
				$checkLogin = $nhanVienModel->checkLoginNhanVien($NV_name,$NV_matkhau);
				if ($checkLogin->num_rows) {
					while ($row = mysqli_fetch_array($checkLogin)){
						$_SESSION['NhanVienLogin'] = $NV_name;
						$_SESSION['hotenNV'] = $row['hoten_ND'];
						$_SESSION['avatarNV']= $row['avatar'];
						}header("Location: admin.php?action=list_nhanvien");
					}
					else {
								header("Location: NhanVienlogin.php");
							}
					break;
				
				case 'NhanVienLogout':
					unset($_SESSION['NhanVienLogin']);
					header("Location: NhanVienlogin.php");
					break;
				case 'list_nhanvien':
					if(!isset($_SESSION['NhanVienLogin'])){
								header("Location: NhanVienlogin.php");
							}
						$NhanVienModel = new Admin_Model();
						$list_nhanvien = $NhanVienModel->getlistNhanVien();
						include 'View/Admin/list_NhanVien.php';
					
					break;

				case 'add_nhanvien':
					if(!isset($_SESSION['NhanVienLogin'])){
								header("Location: NhanVienlogin.php");
							}
					$err = array('TenDangNhap' => "" ,'MatKhau' => "" );
					
					$Check = true;
					$AddNhanVien = new Admin_Model();
					if (isset($_POST['add_nhanvien'])) {
						$ten_NV = $_POST['name'];
						$tenDangNhap_NV = $_POST['username'];
						$matkhau_NV = $_POST['password'];
						$rematkhau_NV = $_POST['re-password'];
						$sdt = $_POST['sdt'];
						$email = $_POST['email'];
						$avatar = $_FILES['avatar'];
						$path = 'img/avatar/';
						$avatars = uniqid().$avatar['name'];// uniqid() để tạo chuỗi ID không trùng lặp
						move_uploaded_file($avatar['tmp_name'], $path.$avatars);
						//var_dump($tenDangNhap_NV);
						$kiemTraDangNhap = $AddNhanVien->getTenNhanVien($tenDangNhap_NV);
						$row = mysqli_fetch_array($kiemTraDangNhap);
						
						if ($tenDangNhap_NV == $row['tendangnhap_ND']) {
							$err['TenDangNhap'] = "Tên đăng nhập đã tồn tại !!!";
							$Check = false;
						}
						//var_dump($matkhau_NV);
						//var_dump($rematkhau_NV);
						if ($matkhau_NV != $rematkhau_NV) {
							$err['MatKhau'] = "Mật khẩu bạn nhập không khớp";
							$Check = false;
						}
						if ($Check == true) {
							$matkhau_NV = md5($matkhau_NV);
							$DK_nhanvien = $AddNhanVien->InsertNhanVien($ten_NV,$tenDangNhap_NV,$matkhau_NV,$sdt,$email,$avatars);
							header("Location: admin.php?action=list_nhanvien");
						}
						
					}
					
					include 'View/Admin/add_nhanvien.php';
					break;
					case 'delete_nhanvien':
					if(!isset($_SESSION['NhanVienLogin'])){
								header("Location: NhanVienlogin.php");
							}
					$id_NV = $_GET['id'];
					$AddNhanVien = new Admin_Model();
					$deleteNhanVien = $AddNhanVien->deleteNhanVien($id_NV);
					header("Location: admin.php?action=list_nhanvien");
					break;
				case 'list_dienthoai':
					if(!isset($_SESSION['NhanVienLogin'])){
								header("Location: NhanVienlogin.php");
							}
					$DienThoaiModel = new Product_Model();
					$list_dienthoai = $DienThoaiModel->getListDienThoai();
					include 'View/Admin/list_DienThoai.php';
					break;
				case 'add_dienthoai':
					if(!isset($_SESSION['NhanVienLogin'])){
								header("Location: NhanVienlogin.php");
							}
					$ThuongHieu_Model = new Product_Model();
					$thuonghieu = $ThuongHieu_Model->getListThuongHieu();
						if(isset($_POST['add_dienthoai'])) {
								$Ten_DT                	= $_POST['Ten_DT'];
							$id_thuonghieu          = $_POST['id_thuonghieu'];
											$Display 				= $_POST['Display'];
									$OS                		= $_POST['OS'];
							$CameraTruoc            = $_POST['CameraTruoc'];
											$CameraSau 				= $_POST['CameraSau'];
								$RAM                	= $_POST['RAM'];
									$ROM              		= $_POST['ROM'];
												$CPU 					= $_POST['CPU'];
							$Battery                = $_POST['Battery'];
								$Network              	= $_POST['Network'];
										$information 			= $_POST['information'];
								$Gia                	= $_POST['Gia'];
								$SoLuong               	= $_POST['SoLuong'];
							
							$image = $_FILES['images'];
							$path = 'img/product/';
							$images = uniqid().$image['name'];
							move_uploaded_file($image['tmp_name'], $path.$images);
							$DienThoaiModel = new Product_Model();
							$them_dienthoai = $DienThoaiModel->themDienThoai($Ten_DT,$id_thuonghieu,$Display ,$OS,$CameraTruoc,$CameraSau,$RAM,$ROM,$CPU,$Battery,$Network,$information,$Gia,$SoLuong,$images);
							header("Location: admin.php?action=list_dienthoai");
						}
						include 'view/Admin/add_DienThoai.php';
						break;
				case 'edit_dienthoai':
					if(!isset($_SESSION['NhanVienLogin'])){
								header("Location: NhanVienlogin.php");
							}
					$id_DT = $_GET['id'];
					$DienThoaiModel = new Product_Model();
					$list_dienthoai = $DienThoaiModel->getListDienThoaiById($id_DT);
					$ThuongHieu_Model = new Product_Model();
					$thuonghieu = $ThuongHieu_Model->getListThuongHieu();
					while ($row = mysqli_fetch_array($list_dienthoai)) {
						$id_DT = $row['id_DT'];
						$Ten_DT = $row['Ten_DT'];
						$id_thuonghieu = $row['id_thuonghieu'];
						$Display = $row['Display'];
						$OS = $row['OS'];
						$CameraTruoc = $row['CameraTruoc'];
						$CameraSau = $row['CameraSau'];
						$RAM = $row['RAM'];
						$ROM = $row['ROM'];
						$CPU = $row['CPU'];
						$Battery = $row['Battery'];
						$Network = $row['Network'];
						$information = $row['information'];
						$Gia = $row['Gia'];
						$SoLuong = $row['SoLuong'];
						$images = $row['images'];
					}
					if(isset($_POST['edit_dienthoai'])) {
								$Ten_DT_new                	= $_POST['Ten_DT'];
							$id_thuonghieu_new          = $_POST['id_thuonghieu'];
											$Display_new 				= $_POST['Display'];
									$OS_new                		= $_POST['OS'];
							$CameraTruoc_new            = $_POST['CameraTruoc'];
											$CameraSau_new 				= $_POST['CameraSau'];
								$RAM_new                	= $_POST['RAM'];
									$ROM_new              		= $_POST['ROM'];
												$CPU_new 					= $_POST['CPU'];
							$Battery_new                = $_POST['Battery'];
								$Network_new              	= $_POST['Network'];
										$information_new 			= $_POST['information'];
								$Gia_new                	= $_POST['Gia'];
								$SoLuong_new               	= $_POST['SoLuong'];
							$image_new = $images;
							if(!$_FILES['images']['error']){
								$image = $_FILES['images'];
								$path = 'img/product/';
								$image_new = uniqid().$image['name'];
								move_uploaded_file($image['tmp_name'], $path.$image_new);
								unlink('img/product/'.$images);
							}
							$DienThoaiModel = new Product_Model();
							$add_dienthoai = $DienThoaiModel->suaDienThoai($id_DT,$Ten_DT_new, $id_thuonghieu_new, $Display_new, $OS_new, $CameraTruoc_new,$CameraSau_new,$RAM_new,$ROM_new,$CPU_new,$Battery_new,$Network_new,$information_new,$Gia_new,$SoLuong_new,$image_new);
							header("Location: admin.php?action=list_dienthoai");
						}
					include 'View/Admin/edit_DienThoai.php';
					break;
				case 'delete_dienthoai':
					if(!isset($_SESSION['NhanVienLogin'])){
								header("Location: NhanVienlogin.php");
							}
					$id_DT = $_GET['id'];
					$DienThoaiModel = new Product_Model();
					$delete_dienthoai = $DienThoaiModel->xoaDienThoai($id_DT);
					header("Location: admin.php?action=list_dienthoai");
					break;
					default:
						break;
				case 'order_manager':
					if(!isset($_SESSION['NhanVienLogin'])){
								header("Location: NhanVienlogin.php");
							}
					$Order_manager = new order_manager();
					$list_order = $Order_manager->get_list_order();
					include 'view/Admin/order_manager.php';
					break;
			}
			
		}
		function uploadImage($imageUpload){
			$image = $imageUpload;
			$path = 'img/product';
			$imageName = uniqid().$image['name'];
			move_uploaded_file($image['tmp_name'], $path.$imageName);
			return $imageName;
		}
	}
?>