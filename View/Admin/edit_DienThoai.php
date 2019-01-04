<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Điện thoại</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="admin.php?action=edit_dienthoai&id=<?php echo $id_DT ?>" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputName">Tên điện thoại</label>
                  <input type="text" class="form-control" placeholder="Enter name" name="Ten_DT" value="<?php echo $Ten_DT;?>">
                </div>
                <div class="form-group">
                  <label>Category</label>
                  <select class="form-control" name="id_thuonghieu">
                    <?php echo $thuonghieu;?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputUsername">Display</label>
                  <input type="text" class="form-control" placeholder="Enter price" name="Display" value="<?php echo $Display;?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputUsername">OS</label>
                  <input type="text" class="form-control" placeholder="Enter price" name="OS" value="<?php echo $OS;?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputUsername">CameraTruoc</label>
                  <input type="text" class="form-control" placeholder="Enter price" name="CameraTruoc" value="<?php echo $CameraTruoc;?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputUsername">CameraSau</label>
                  <input type="text" class="form-control" placeholder="Enter price" name="CameraSau" value="<?php echo $CameraSau;?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputUsername">RAM</label>
                  <input type="text" class="form-control" placeholder="Enter price" name="RAM" value="<?php echo $RAM;?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputUsername">ROM</label>
                  <input type="text" class="form-control" placeholder="Enter price" name="ROM" value="<?php echo $ROM;?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputUsername">CPU</label>
                  <input type="text" class="form-control" placeholder="Enter price" name="CPU" value="<?php echo $CPU;?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputUsername">Battery</label>
                  <input type="text" class="form-control" placeholder="Enter price" name="Battery" value="<?php echo $Battery;?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputUsername">Network</label>
                  <input type="text" class="form-control" placeholder="Enter price" name="Network" value="<?php echo $Network;?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputUsername">information</label>
                  <input type="text" class="form-control" placeholder="Enter price" name="information" value="<?php echo $information;?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputUsername">Gia</label>
                  <input type="number" class="form-control" placeholder="Enter price" name="Gia" value="<?php echo $Gia;?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputUsername">SoLuong</label>
                  <input type="numner" class="form-control" placeholder="Enter price" name="SoLuong" value="<?php echo $SoLuong;?>">
                </div>
                <img src="img/product
                /<?php echo $images; ?>">
                <div class="form-group">
                  <label for="exampleInputFile">Image</label>
                  <input type="file" id="exampleInputFile" name="images">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="edit_dienthoai">EDIT THÔNG SỐ</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>