<html>
	<head><title>Đơn hàng của bạn</title></head>
	<body>
		<div style="font-family:&quot;Arial&quot;,Helvetica Neue,Helvetica,sans-serif;line-height:18pt">
			<p>Xin chào <?php 
            $session = session();
				$name = $session->get('customer_name');
            echo $name
			?></p>
			<p>Cảm ơn Anh/chị đã đặt hàng tại <strong>MacStore</strong>!</p>
			<p>Đơn hàng của Anh/chị đã được tiếp nhận, chúng tôi sẽ nhanh chóng liên hệ với Anh/chị.</p>
			<div>
			<table style="width:100%;border-collapse:collapse">
				<thead>
					<tr>
						<th style="border-left:1px solid #d7d7d7;border-right:1px solid #d7d7d7;border-top:1px solid #d7d7d7;padding:5px 10px;text-align:left">
                     <strong>Thông tin người nhận</strong>
                  </th>
						
					</tr>
				</thead>
			<tbody>
				<tr>
					<td style="border-left:1px solid #d7d7d7;border-right:1px solid #d7d7d7;border-bottom:1px solid #d7d7d7;padding:5px 10px">
						<table style="width:100%">
							<tbody>
								<tr>
									<td>Họ tên:</td>
									<td><?= $session->get('customer_name')?></td>
								</tr>
								
								<tr>
									<td>Điện thoại:</td>
									<td><?= $session->get('customer_phone')?></td>
								</tr>
								
								<tr>
									<td>Email:</td>
									<td><?= $session->get('customer_email')?></td>
								</tr>
								
								<tr>
									<td>Địa chỉ:</td>
									<td><?= $session->get('customer_address')?></td>
								</tr>
								
							</tbody>
						</table>
					</td>

				</tr>

			</tbody>
		</table>
	</div>
	<div>
		<div style="font-size:18px;padding-top:10px"><strong>Thông tin đơn hàng</strong></div>
		
		<table style="width:100%;border-collapse:collapse">
			<thead>
				<tr style="border:1px solid #d7d7d7;background-color:#f8f8f8">
					<th style="padding:5px 10px;text-align:left"><strong>Sản phẩm</strong></th>
					<th style="text-align:center;padding:5px 10px"><strong>Số lượng</strong></th>
					<th style="padding:5px 10px;text-align:right"><strong>Tổng</strong></th>
				</tr>
			</thead>
			<tbody>
         <?php 
            $sum = 0;
            foreach($product as $val){
               $sum+=$val['total'];
         ?>
               <tr style="border:1px solid #d7d7d7">
						<td style="padding:5px 10px"><?php echo $val['name']; ?></td>
						<td style="text-align:center;padding:5px 10px"><?php echo $val['qty'] ?></td>
						<td style="padding:5px 10px;text-align:right"><?= price_format($val['price'] * $val['qty'])?> đ</td>
					</tr>
         <?php } ?>
				
				<tr style="border:1px solid #d7d7d7">
					<!-- <td colspan="2">&nbsp;</td>
					<td colspan="2"> -->
					<table style="width:100%">
						<tbody>
							<tr>
								<td><strong>Tổng tiền</strong></td>
								<td style="text-align:right"><?php echo number_format($sum) ?> VNĐ</td>
							</tr>
						</tbody>
					</table>
					</td>
				</tr>

			</tbody>
		</table>
	</div>
	<!-- <p>Để kiểm tra trạng thái đơn hàng, Anh/chị vui lòng:</p>
	<div style="font-size:18px">
		<a href="<?php echo base_url() ?>dang-nhap" style="padding:15px;background-color:#7fc142;color:#fff" target="_blank">Đăng nhập vào tài khoản</a>
	</div> -->
	&nbsp;
	<hr>
	<p style="text-align:right">Nếu Anh/chị có bất kỳ câu hỏi nào, xin liên hệ với chúng tôi tại <span style="color:#17a3dd"><a href="mailto:sale@macstorehaiphong.com" target="_blank">sale@macstorehaiphong.com</a></span></p>
	<p style="text-align:right"><i>Trân trọng,</i></p>
	<p style="text-align:right"><strong>Ban quản trị cửa hàng MacStore</strong></p><div class="yj6qo"></div><div class="adL">
	</div>
	</div>
	</body>
</html>