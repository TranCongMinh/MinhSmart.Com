<!-- TABLE: LATEST ORDERS -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Quản lí đơn hàng</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>Order ID</th>
                    <th>Khách mua </th>
                    
                    <th>Ngày Lập Đơn</th>

                    <th>Người nhận</th>
                    <th>SDT người nhận</th>
                    <th>Địa chỉ</th>
                    <th>Tổng Tiền</th>
                    <th>Ghi chú</th>
                    <th>Hành động</th>
                  </tr>
                  </thead>
                  <tbody>
                   
                  <tr>
                    <?php while ($row = $list_order->fetch_assoc()) {
                        $idHD = $row['Ma_HD'];
                     ?>
                    <td><a href="#"><?php echo $row['Ma_HD']; ?></a></td>
                    <td><?php echo $row['Ma_HD']; ?></td>
                   
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20"><?php echo $row['NgayLap']; ?></div>
                    </td>
                    <td><?php echo $row['TenNN']; ?></td>
                    <td><?php echo $row['SDTNN']; ?></td>
                    <td><?php echo $row['DiaChiNN']; ?></td>
                    <td><?php echo $row['TongTien']; ?></td>
                    <td><?php echo $row['Ghichu']; ?></td>
                    <td>
                    <a href="admin.php?action=chitietdonhang=<?php echo $idHD ?>"><button type="button" class="btn btn-block btn-danger">Xem chi tiết</button></a></td>
                    
                  </tr>
                  <?php } ?>
                  
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
              <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
            </div>
            <!-- /.box-footer -->
          </div>