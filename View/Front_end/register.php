<!-- Register Account Start -->
        <div class="register-account ptb-100 ptb-sm-60">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="register-title">
                            <h3 class="mb-10">Đăng ký tài khoản</h3>
                            <p class="mb-10">Nếu đã có tài khoản vui lòng login</p>
                        </div>
                    </div>
                </div>
                <!-- Row End -->
                <div class="row">
                    <div class="col-sm-12">
                        <form class="form-register" action="index.php?action=register" method="post" enctype="multipart/form-data">
                            <fieldset>
                                <legend>Thông tin cá nhân</legend>
                                <div class="form-group d-md-flex align-items-md-center">
                                    <label class="control-label col-md-2" for="f-name"><span class="require">*</span>Họ tên</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" id="f-name" placeholder="Họ tên" value="<?php echo isset($_POST['name'])?$_POST['name']:"" ?>" name="name">
                                    </div>
                                </div>
                                <div class="form-group d-md-flex align-items-md-center">
                                    <label class="control-label col-md-2" for="l-name"><span class="require">*</span>Tên đăng nhập</label>
                                    <label for="exampleInputEmail1" style="color: red"><?php echo $err['TenDangNhap']; ?></label>
                                    <div class="col-md-10">
                                        <input type="text" name="username" value="<?php echo isset($_POST['username'])?$_POST['username']:""; ?>" class="form-control" id="l-name" placeholder="Tên đăng nhập">
                                    </div>
                                </div>
                                <div class="form-group d-md-flex align-items-md-center">
                                    <label class="control-label col-md-2" for="email"><span class="require">*</span>Địa chỉ email</label>
                                    <div class="col-md-10">
                                        <input type="email" class="form-control" id="email" placeholder="Enter you email address here..." value="<?php echo isset($_POST['email'])?$_POST['email']:""; ?>" name="email">
                                    </div>
                                </div>
                                <div class="form-group d-md-flex align-items-md-center">
                                    <label class="control-label col-md-2" for="number"><span class="require">*</span>Số điện thoại</label>
                                    <div class="col-md-10">
                                        <input type="number" class="form-control" id="number" placeholder="Telephone" value="<?php echo isset($_POST['sdt'])?$_POST['sdt']:""; ?>" name="sdt">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>Mật khẩu</legend>
                                <div class="form-group d-md-flex align-items-md-center">
                                    <label class="control-label col-md-2" for="pwd"><span class="require">*</span>Mật khẩu:</label>
                                    <div class="col-md-10">
                                        <input type="password" name="password" class="form-control" id="pwd" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group d-md-flex align-items-md-center">
                                    <label class="control-label col-md-2" for="pwd-confirm"><span class="require">*</span>Nhập lại mật khẩu</label>
                                    <label for="exampleInputEmail1" style="color: red"><?php echo $err['MatKhau']; ?></label>
                                    <div class="col-md-10">
                                        <input type="password" name="re-password" class="form-control" id="pwd-confirm" placeholder="Confirm password">
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-group">
                                <label for="exampleInputFile">Ảnh đại diện</label>
                                <input type="file" name="avatar">

                  
                                        </div>
                            <div class="terms">
                                <div class="float-md-right">
                                    
                                    
                                    <input type="submit" name="add_nguoidung" value="Continue" class="return-customer-btn">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Register Account End -->