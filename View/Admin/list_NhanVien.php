
<div class="row">
        <div class="col-md-8">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">List user</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">ID</th>
                  <th>Name</th>
                  <th>Username</th>
                  <th>Avatar</th>
                  <th style="width: 40px">Action</th>
                </tr>
                <?php while ($row = $list_nhanvien->fetch_assoc()) {
                    $id = $row['id_ND'];
                  ?>
                  <tr>
                    <td><?php echo $row['id_ND']?></td>
                    <td><?php echo $row['hoten_ND']?></td>
                    <td><?php echo $row['tendangnhap_ND']?></td>
                    <td><img src="<?php echo "img/avatar/".$row['avatar']?>"></td>
                    <td>
                    <a href="admin.php?action=edit_nhanvien&id=<?php echo $id;?>"><button type="button" class="btn btn-block btn-info">EDIT</button></a> 
                    <a href="admin.php?action=delete_nhanvien&id=<?php echo $id;?>"><button type="button" class="btn btn-block btn-danger">DELETE</button></a>
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