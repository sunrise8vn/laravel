<!DOCTYPE html>
<html>
<head>
	<base href="{{asset('')}}">
	<style type="text/css">
		td {
		    wrap-text:true;
		}   
	</style>
</head>
<body>
	<table>
	    <thead>
	    <tr>
	        <th colspan="8" style="height: 80px; font-size: 14px; text-align: center; color: #0070c0;">
        		BẢNG MINH HỌA GỐC VÀ LÃI PHẢI TRẢ <br />
				SẢN PHẨM TRUYỀN THỐNG - THANH TOÁN GỐC LÃI  HÀNG THÁNG <br />
				(Áp dụng cho tất cả các dòng xe)
			</th>
		</tr>
		<tr>
			<th colspan="2" rowspan="2" style="width: 30px; font-size: 12px; font-weight: bold; font-family: 'Arial'; text-align: center;">
				CÓ THỂ THAY ĐỔI GIÁ TRỊ Ở CÁC Ô <br> 
				MÀU XANH BIỂN 
			</th>
			<th></th>
			<th></th>
			<th style="height: 19px; background-color: #fdff00; text-align: center; font-weight: bold;">Số tiền trả hàng tháng giảm dần</th>
		</tr>
		<tr>
			<th></th>
			<th style="height: 19px; background-color: #fb0000; color: #ffffff; text-align: center; font-weight: bold;">Kỳ</th>
			<th style="width: 16px; background-color: #fb0000; color: #ffffff; text-align: center; font-weight: bold;">Số trả định kỳ</th>
			<th style="width: 14px; background-color: #fb0000; color: #ffffff; text-align: center; font-weight: bold;">Lãi</th>
			<th style="width: 14px; background-color: #fb0000; color: #ffffff; text-align: center; font-weight: bold;">Gốc</th>
			<th style="width: 14px; background-color: #fb0000; color: #ffffff; text-align: center; font-weight: bold;">Dư nợ</th>
	    </tr>
	    <tr>
	    	<th style="width: 25px;">Giá mua xe, VND</th>
	    	<th style="width: 18px; background-color: #0112fb; color: #ffffff; text-align: right; font-weight: bold;"></th>
	    	<th style="width: 2px;"></th>
	    	<th style="background-color: #39a8d2;"></th>
	    	<th style="background-color: #fdff00;"></th>
	    	<th style="background-color: #fdff00;"></th>
	    	<th style="background-color: #fdff00;"></th>
	    	<th style="background-color: #fdff00; text-align: right;">=B6</th>
	    </tr>
	    <tr>
	    	<th>Trả trước</th>
	    	<th style=" text-align: right; font-weight: bold;"></th>
	    	<th></th>
	    	<th style="background-color: #39a8d2; text-align: center;">1</th>
	    	<th style="background-color: #fdff00; text-align: right;">=F5+G5</th>
	    	<th></th>
	    	<th style="background-color: #fdff00; text-align: right;">=B16</th>
	    	<th style="background-color: #fdff00; text-align: right;">=H4-G5</th>
	    </tr>
	    <tr>
	    	<th>Khoản tín dụng, VND</th>
	    	<th style="background-color: #0112fb; color: #ffffff; text-align: right; font-weight: bold;"></th>
	    	<th></th>
	    </tr>
	    <tr>
	    	<th>Thời hạn vay, tháng</th>
	    	<th style="background-color: #0112fb; color: #ffffff; text-align: right; font-weight: bold;"></th>
	    	<th></th>
	    </tr>
	    <tr>
	    	<th>Lãi suất vay năm</th>
	    	<th style="background-color: #0112fb; color: #ffffff; text-align: right; font-weight: bold;">6.99%</th>
	    	<th></th>
	    </tr>
	    <tr></tr>
	    <tr></tr>
	    <tr></tr>
	    <tr></tr>
	    <tr></tr>
	    <tr></tr>
	    <tr>
	    	<th colspan="2" style="font-weight: bold; text-align: center;">TÓM TẮT</th>
	    </tr>
	    <tr>
	    	<th>Trả gốc định kỳ, VND</th>
	    	<th style="background-color: #fdff00; text-align: right; font-weight: bold;">=ROUNDUP(B6/B7,0)</th>
	    </tr>
	    <tr>
	    	<th>Số trả định kỳ trung bình</th>
	    	<th style="background-color: #fdff00; text-align: right; font-weight: bold;">=ROUND(MAX(E5:E91)/B7,0)</th>
	    </tr>
	    <tr></tr>
	    <tr></tr>
	    <tr></tr>
	    <tr>
	    	<td style="font-size: 8px; font-weight: bold; color: #1f497d;">GHI CHÚ:</td>
	    </tr>
	    <tr>
	    	<td style="font-size: 7px; font-weight: bold; color: #1f497d;">1. Vui lòng đặt kiểu Date cho hệ thống là [English (Australia)]</td>
	    </tr>
	    <tr>
	    	<td style="font-size: 7px; font-weight: bold; color: #1f497d;">2. Các kết quả tính toán ở đây chỉ mang tính tham khảo và</td>
	    </tr>
	    <tr>
	    	<td style="font-size: 7px; font-weight: bold; color: #1f497d;">không phải là bảng chào cho vay của TFSVN. </td>
	    </tr>
	    <tr>
	    	<td style="font-size: 7px; font-weight: bold; color: #1f497d;">3. Kết quả tính toán có thể khác nhau ở các máy tính khác</td>
	    </tr>
	    <tr>
	    	<td style="font-size: 7px; font-weight: bold; color: #1f497d;">nhau, do các khác biệt trong các thuật toán và qui tắc làm</td>
	    </tr>
	    <tr>
	    	<td style="font-size: 7px; font-weight: bold; color: #1f497d;">tròn được áp dụng.</td>
	    </tr>
	    <tr>
	    	<td style="font-size: 7px; font-weight: bold; color: #1f497d;">4. Số tiền thanh toán cuối kỳ không bao gồm bất kỳ phí hay</td>
	    </tr>
	    <tr>
	    	<td style="font-size: 7px; font-weight: bold; color: #1f497d;">khoản phải trả nào khác. Phí và các khoản phải trả, nếu có,</td>
	    </tr>
	    <tr>
	    	<td style="font-size: 7px; font-weight: bold; color: #1f497d;">sẽ được xác định cho từng khoản tín dụng cụ thể.</td>
	    </tr>
	</table>
</body>
</html>

