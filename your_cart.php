<head>
<style>
	input{
		width: 50;
	}

	input.dai{
		width: 200;
	}
</style>
</head>
<h3>Các sản phẩm bạn đã mua:</h3>
<form action = "" method = 'get'>
<?php

	//require_once("shopping_cart.php");
	session_start();
	/*if(isset($_SESSION['listcart'])){
		echo "<pre>";
		print_r($_SESSION['listcart']);
	}
	*/
	$sl_moi = isset($_GET['sl_sua'])? $_GET['sl_sua'] : "";
	//echo "<pre>";
	//print_r($sl_moi);
	$i = 0;
	//session_destroy();
	//echo $sl_moi;
	if (!empty($sl_moi)){
		//echo "Khong roxng";
		foreach ($sl_moi as $key1 => $value1) {
			//echo $sl_moi[$i];
			//echo $value['quantity'];
			//$value['quantity'] = $sl_moi[$i++];
			//echo "key" . $key1;
			//echo $value1;
			$_SESSION['listcart'][$key1]['quantity'] = $value1;

		}

	}
	
	$totalCost = 0;
	//echo "<pre>";
	//print_r($_SESSION['listcart']);

	//echo "So luong moi la".$_GET['sl_sua'];
	if (!empty($_SESSION['listcart'] )){
		//echo "<pre>";
		//print_r($_SESSION['listcart']);oo
		$stt = 1;
		echo "<table border = 1>";
		echo "<th>STT</th>";
		echo "<th>Tên sản phẩm</th>";
		echo "<th>Số lượng</th>";
		echo "<th>Giá</th>";
		echo "<th>Thành tiền</th>";
		
		foreach ($_SESSION['listcart'] as $key => $value) {
			if(isset($value['pro_name']) && isset($value['pro_price']) && isset($value['quantity'])){
				echo "<tr>";
				echo "<td>" . $stt++ . "</td>";
				echo "<td>" . $value['pro_name'] . "</td>";
				echo "<td>";
				//echo "<form action = ""
				echo "<input type = 'text' name = 'sl_sua[]' value = '". $value['quantity']. "'>";
				 "</td>";
				echo "<td>" . $value['pro_price'] . "</td>";
				echo "<td>". $value['pro_price'] * $value['quantity'] . "</td>";
				echo "<td> <a href = deleteCart.php?id=" .$value['pro_id']. ">Xoá</a>";
				//echo "<td> <input class = 'dai' type = submit value = 'Xác nhận sửa số lượng'>";
				echo "</tr>";
				$totalCost += $value['pro_price'] * $value['quantity'];
			}
			
		}
		echo "</table>";
		echo "<td> <input class = 'dai' type = submit value = 'Xác nhận sửa số lượng'>";
		echo "<br/>Tổng số tiền phải thanh toán là: " . $totalCost;
		
	}else{
		echo "Bạn chưa mua sản phẩm nào!";
	}
	echo "<br/><br/><a href = 'index.php'>Tiếp tục mua hàng</a>";
	//session_destroy();
?>
<br/>

</form>
