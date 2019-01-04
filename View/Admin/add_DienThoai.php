<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Thêm điện thoại</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="admin.php?action=add_dienthoai" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Tên điện thoại</label>
                  <input type="text" class="form-control" name="Ten_DT" placeholder="Enter Product Name">
                </div>
                <label>Thương hiệu</label>
                <select class="form-control" name="id_thuonghieu">
                    <?php echo $thuonghieu;?>
                  </select>
                <div class="form-group">
                  <label for="exampleInputPassword1">Display</label>
                  <input type="text" class="form-control" name="Display" placeholder="Display">
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">OS</label>
                  <input type="text" class="form-control" name="OS" placeholder="OS">
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">CameraTruoc</label>
                  <input type="text" class="form-control" name="CameraTruoc" placeholder="CameraTruoc">
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">CameraSau</label>
                  <input type="text" class="form-control" name="CameraSau" placeholder="CameraSau">
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">RAM</label>
                  <input type="text" class="form-control" name="RAM" placeholder="RAM">
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">ROM</label>
                  <input type="text" class="form-control" name="ROM" placeholder="ROM">
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">CPU</label>
                  <input type="text" class="form-control" name="CPU" placeholder="CPU">
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Battery</label>
                  <input type="text" class="form-control" name="Battery" placeholder="Battery">
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Network</label>
                  <input type="text" class="form-control" name="Network" placeholder="Network">
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">information</label>
                  <input type="text" class="form-control" name="information" placeholder="information">
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Gia</label>
                  <input type="text" class="form-control" name="Gia" placeholder="Gia">
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">SoLuong</label>
                  <input type="number" class="form-control" name="SoLuong" placeholder="SoLuong">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile" >File input</label>
                  <input type="file" id="exampleInputFile" name="images">

                  
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="add_dienthoai">Thêm điện thoại</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>