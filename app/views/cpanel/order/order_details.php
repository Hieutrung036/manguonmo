<h3 style="text-align: center ;">Liệt kê đơn hàng chi tiết</h3>

<table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Tên người đặt</th>
        <th>Email</th>
        <th>Số điện thoại</th>
        <th>Địa chỉ</th>
        <th>Ghi chú</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $i = 0;
    foreach($order_info as $key =>$ord){
        $i++;
    ?>
      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $ord['name'] ?></td>
        <td><?php echo $ord['email'] ?></td>
        <td><?php echo $ord['sodienthoai'] ?></td>
        <td><?php echo $ord['diachi'] ?></td>
        <td><?php echo $ord['noidung'] ?></td>

        <td><?php if($ord['order_status']==0) {echo 'đơn hàng mới';}else{echo 'đã xử lý';} ?></td>

        <td><a href="<?php echo BASE_URL ?>/order/order_details/<?php echo $ord['order_code']?>">Xem đơn hàng</a> || 
      </tr>
      <?php
   }
        ?>
        <form method="POST" action="<?php echo BASE_URL?>/order/order_confirm/<?php $ord ['order_code']?>">
        <tr>
            <td>
                <input type="submit" name"update_order" value = "Đã xử lý" class="btn btn-default">
            </td>
            <td cospan="6" >Tổng tiền: <?php echo number_format($total,0,',','.').'đ' ?></td>
        </tr>
        </form>
    </tbody>
  </table>
<table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Tên sản phẩm</th>
        <th>Hình ảnh</th>
        <th>Số lượng</th>
        <th>Đơn giá</th>
        <th>Thành tiền</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $i = 0;
    $total =0;
    foreach($order_details as $key =>$ord){
        $total += $ord['product_quantity']*$ord['price_product'];
        $i++;
    ?>
      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $ord['title_product'] ?></td>
        <td><img src="<?php echo BASE_URL ?>/public/uploads/product<?php echo $ord['image_product'] ?>" with="100" height="100"></td>
        <td><?php echo $ord['product_quantity'] ?></td>
        <td><?php echo number_format($order['price_product'],0,',','.').'đ' ?></td>
        <td><?php echo number_format($order['product_quantity']*$ord['price_product'],0,',','.').'đ' ?></td>
        <td><?php if($ord['order_status']==0) {echo 'đơn hàng mới';}else{echo 'đã xử lý';} ?></td>

        <td><a href="<?php echo BASE_URL ?>/order/order_details/<?php echo $ord['order_code']?>">Xem đơn hàng</a> || 
      </tr>
      <?php
   }
        ?>
        <tr>
            <td>
                <input type="submit" name"update_order" value = "Đã xử lý" class="btn btn-default">
            </td>
            <td cospan="6" >Tổng tiền: <?php echo number_format($total,0,',','.').'đ' ?></td>
        </tr>
    </tbody>
  </table>