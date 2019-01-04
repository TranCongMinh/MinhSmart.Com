<div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">List Product</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">ID</th>
                  <th >Thương hiệu</th>
                  <th>Tên điện thoại</th>
                  <th>Màn Hình</th>
                  <th>OS</th>
                  <th style="width: 10px">Camera Truoc</th>
                  <th style="width: 10px">CameraSau</th>
                  <th>RAM</th>
                  <th>ROM</th>
                  <th>CPU</th>
                  <th>Battery</th>
                  <th>Network</th>
                  <!-- <th>information</th> -->
                  <th>Gia</th>
                  <th>SoLuong</th>
                  <th>images</th>
                  <th style="width: 40px">Action</th>
                </tr>
                <?php while ($row = $list_dienthoai->fetch_assoc()) {
                    $id = $row['id_DT'];
                  ?>
                  <tr>
                    <td><?php echo $row['id_DT']?></td>
                    <td><?php echo $row['tenthuonghieu']?></td>
                    <td><?php echo $row['Ten_DT']?></td>
                    <td><?php echo $row['Display']?></td>
                    <td><?php echo $row['OS']?></td>
                    <td><?php echo $row['CameraTruoc']?></td>
                    <td><?php echo $row['CameraSau']?></td>
                    <td><?php echo $row['RAM']?></td>
                    <td><?php echo $row['ROM']?></td>
                    <td><?php echo $row['CPU']?></td>
                    <td><?php echo $row['Battery']?></td>
                    <td><?php echo $row['Network']?></td>
                    <!-- <td><?php //echo $row['information']?></td> -->
                    <td><?php echo $row['Gia']?></td>
                    <td><?php echo $row['SoLuong']?></td>
                    <td><img style="width: 150px; height: 150px;" src="<?php echo "img/product/".$row['images']?>"></td>
                    <td>
                    <a href="admin.php?action=edit_dienthoai&id=<?php echo $id;?>"><button type="button" class="btn btn-block btn-info">EDIT</button></a> 
                    <a href="admin.php?action=delete_dienthoai&id=<?php echo $id;?>"><button type="button" class="btn btn-block btn-danger">DELETE</button></a>
                    </td>
                  </tr>
                <?php }?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        <!-- /.col -->
      </div>
  </div>     