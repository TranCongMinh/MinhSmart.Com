<?php 
	include 'config/connectdb.php';
	include 'Model/Admin/Product_Model.php';
	include 'Model/Admin/Order_manager.php';
	include 'Model/Customer/Customer_Model.php';
	class Frontend_Controller{
		function handleRequest(){
			$action = isset($_GET['action'])?$_GET['action']:'home';
			switch ($action) {
				case 'home':
					if (isset($_GET['page'])) {
					$page = $_GET['page'];
						}	
						else $page = 1;
						$DienThoai = new Product_Model();
						$getDienThoai = $DienThoai->getPhanTrang6($page);
						$getDienThoaiSlide = $DienThoai->getPhanTrang4($page);
						$getDienThoaiView = $DienThoai->getPhanTrang4($page);
						$PhanTrang = new Product_Model();
						$chiaTrang = $PhanTrang->getSoTrang();
						include 'View/Front_end/shop-content.php';
					break;
				case 'xemdienthoai':
					$id_DT = $_GET['id_DT'];
					$DienThoai = new Product_Model();
					$getDienThoaiByid = $DienThoai->getListDienThoaiById($id_DT);
					include 'View/Front_end/product-detail.php';
					break;
				case 'add_cart':
					$cartModel = new Product_Model();

					
						$id_DT = isset($_GET['id_DT'])?$_GET['id_DT']:'';
						$soluongmua = isset($_POST['SoLuong'])?$_POST['SoLuong']:1;
						//$cartModel = new Product_Model();
						//$getDienThoaiByid = $cartModel->getListDienThoaiById($id_DT);
						//$_SESSION['add_cart']['id_DT'] = $id_DT;
						if ($id_DT == '') {
                       	if (isset($_SESSION['cart'])) {
                            //echo "Đã có hàng";
                            //var_dump($_SESSION['add_cart']);
                        }	else{
                            echo "Chưa có hàng";
                        }
                   				 }else{
                        			if (isset($_SESSION['cart'][$id_DT])) {
                            				$_SESSION['cart'][$id_DT]['soluongmua'] += 1; 
                       				 }else{
                       				 		
                            				//$_SESSION['add_cart'][$id_DT]['soluongmua'] = 1 ;
                            				$cartDeitail = $cartModel->getListDienThoaiById($id_DT);
                            				$row = mysqli_fetch_array($cartDeitail);
                            				$_SESSION['cart'][$row['id_DT']]=array(
                            					"id_product" => $row['id_DT'],
												"soluongmua" => $soluongmua,
												"images" => $row['images'],
												"tenDienThoai" => $row['Ten_DT'],
												"Gia" => $row['Gia']
							);
                            				
                            				
                            //$id_DT = $_SESSION['add_cart'][$id_DT];
                            // Dùng Seclect * Where In
                        }
                        //$_SESSION['add_cart'] = $cartModel->getCart($_SESSION['cart']);
                        //$_SESSION['add_cart'][$id_DT]['soluong']=1;
                        //echo "Đã có hàng";
                        //var_dump($_SESSION['add_cart']);

                    }	
                    	//$giohang = $_SESSION['add_cart'];
                    	
                    	//$id = $_SESSION['add_cart'][$id_DT];
                    	//$getDienThoaiByid = $cartModel->getListDienThoaiById($id_DT);
                    	//$row = mysqli_fetch_array($getDienThoaiByid);
                    	//$giohang = array($_SESSION['add_cart'][$id_DT]);
                    	//$giohang =  array("Ten_DT" => $row['Ten_DT'] , "giaSanPham" => $row['Gia'] );
                    	//header('Location: index.php?action=home');
						//include 'View/Front_end/cart.php';
					
					include 'View/Front_end/cart.php';
					break;
				case 'xoagiohang':
					unset($_SESSION['cart']);
					break;
				case 'xoahetgiohang':
					unset($_SESSION['add_cart']);
					break;
				case 'checkLoginCart':
					 if(!isset($_SESSION['NguoiDungLogin'])){
					 echo 'Mời bạn đăng nhập';
                     header('Location: index.php?action=login');}
                     	else {
                     		header('Location: index.php?action=checkout');
                     	};

                                      
					break;
				case 'checkout':
					// $errHD = array('DCNN' => "" ,'sdtNN' => "" );
					// if (isset($_POST['DCNN'])) {
					// 	$errHD['DCNN'] = "Bạn phải nhập địa chỉ";
					// }
					// if (isset($_POST['sdtNN'])) {
					// 	$errHD['sdtNN'] = "Bạn phải nhập số điện thoại";
					// }
					include 'View/Front_end/checkout.php';
					break;
				case 'hoadon':
					
				
					
					
					$id_ND = $_SESSION['idND'];
					$hotenNN = $_POST['hotenND'];
					$diachiNN = $_POST['DCNN'];
					$sdtNN = $_POST['sdtNN'];
					$TongTien = $_SESSION['tongdonhang'];
					$note = $_POST['Note'];
					$Customer_Model = new Order_manager();
					$isertHD = $Customer_Model->insert_order($id_ND,$hotenNN,$diachiNN,$sdtNN,$TongTien,$note);
					unset($_SESSION['cart']);
					include 'View/Front_end/HD-OK.php';
					break;
				case 'remove-cart':
					$id_DT = $_GET['id_DT'];
					unset($_SESSION['cart'][$id_DT]);
					include 'View/Front_end/cart.php';
					break;
				case 'update-cart':
					var_dump($_POST['update-cart']);
					var_dump($_POST['soluongtang']);
					include 'View/Front_end/cart.php';
					break;
				case 'register':

					if(isset($_SESSION['NguoiDungLogin'])){
								header("Location: index.php");
							}
					$err = array('TenDangNhap' => "" ,'MatKhau' => "" );
					
					$Check = true;
					$AddNguoiDung = new Customer_Model();
					if (isset($_POST['add_nguoidung'])) {
						$ten_kh = $_POST['name'];
						$tenDangNhap_kh = $_POST['username'];
						$matkhau_kh = $_POST['password'];
						$rematkhau_kh = $_POST['re-password'];
						$sdt = $_POST['sdt'];
						$email = $_POST['email'];
						$avatar = $_FILES['avatar'];
						$path = 'img/avatar/';
						$avatars = uniqid().$avatar['name'];// uniqid() để tạo chuỗi ID không trùng lặp
						move_uploaded_file($avatar['tmp_name'], $path.$avatars);
						//var_dump($tenDangNhap_kh);
						$kiemTraDangNhap = $AddNguoiDung->getTenKhachHang($tenDangNhap_kh);
						$row = mysqli_fetch_array($kiemTraDangNhap);
						
						if ($tenDangNhap_kh == $row['tendangnhap_ND']) {
							$err['TenDangNhap'] = "Tên đăng nhập đã tồn tại !!!";
							$Check = false;
						}
						//var_dump($matkhau_kh);
						//var_dump($rematkhau_kh);
						if ($matkhau_kh != $rematkhau_kh) {
							$err['MatKhau'] = "Mật khẩu bạn nhập không khớp";
							$Check = false;
						}
						if ($Check == true) {
							$matkhau_kh = md5($matkhau_kh);
							$DK_khachhang = $AddNguoiDung->Customer_Register($ten_kh,$tenDangNhap_kh,$matkhau_kh,$sdt,$email,$avatars);
							header("Location: index.php?action=Register-Ok");
						}
						
					}
					include 'View/Front_end/register.php';
					break;
				case 'Register-Ok':
					echo "Đăng kí thành công";
					break;
				case 'login':
					
					if (isset($_POST['NguoiDungLogin'])) {
							$ND_name = $_POST['usernameND'];
							$ND_matkhau = $_POST['matKhauND'];
							
						$Customer_Model = new Customer_Model();
						$checkLogin = $Customer_Model->checkLoginNguoiDung($ND_name,$ND_matkhau);
						if ($checkLogin->num_rows) {
							while ($row = mysqli_fetch_array($checkLogin)) {
								$_SESSION['NguoiDungLogin'] = $ND_name;
								$_SESSION['hotenND'] = $row['hoten_ND'];
								$_SESSION['avatarND']= $row['avatar'];
								$_SESSION['idND'] = $row['id_ND'];
							}header('Location: index.php?action=home');//Sai chỗ này

						}
						}else 	
						include 'View/Front_end/login.php';
						
					
					break;
					case 'logout':
						unset($_SESSION['NguoiDungLogin']);
						unset($_SESSION['hotenND']);
						unset($_SESSION['avatarND']);
						//echo "Đa dang xuat";
						header("Location: index.php");
						break;
				default:
					# code...
					break;
					case 'xoahetsession':
						session_destroy();
						break;
			}
		}
		function getHeader(){
			$headerModel = new Product_Model();
			$getListThuongHieu = $headerModel->getThuongHieu();
			return $getListThuongHieu;
		}
		function removesession(){
			unset($_SESSION['cart']);
		}

	}



 ?>