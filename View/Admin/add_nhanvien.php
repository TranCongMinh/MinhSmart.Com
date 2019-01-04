
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Đăng kí nhân viên</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form action="admin.php?action=add_nhanvien" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Tên nhân viên</label>
                  <input type="text" class="form-control" value="<?php echo isset($_POST['name'])?$_POST['name']:"" ?>" name="name" placeholder="Enter name">

                  <!-- <div class="callout callout-danger">
                  <p>Trùng tên đăng nhập!<p>
                  </div> -->
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Tên đăng nhập</label>
                  <label for="exampleInputEmail1" style="color: red"><?php echo $err['TenDangNhap']; ?></label>
                  <input type="text" class="form-control" name="username" value="<?php echo isset($_POST['username'])?$_POST['username']:""; ?>" placeholder="Enter User name">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Mật khẩu</label>
                  <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nhập lại mật khẩu</label>
                  <label for="exampleInputEmail1" style="color: red"><?php echo $err['MatKhau']; ?></label>
                  <input type="password" class="form-control" name="re-password" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Số điện thoại</label>
                  <input type="bumber" class="form-control" value="<?php echo isset($_POST['sdt'])?$_POST['sdt']:""; ?>" name="sdt" placeholder="Enter SĐT">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="text" class="form-control" value="<?php echo isset($_POST['email'])?$_POST['email']:""; ?>" name="email" placeholder="Enter Email">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Ảnh đại diện</label>
                  <input type="file" name="avatar">

                  
                </div>
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="add_nhanvien">ADD USER</button>
              </div>
            </form>
          </div>