<h3>Danh mục các mặt hàng</h3>
<?php
	//session_start();
	function __autoload($class_name){
		require_once("$class_name.php");
		//require_once()
	}
	//echo "<pre>";
	//print_r($_SESSION['listcart']);a
	//$_SESSION['listcart'] = array();
//	$_SESSION['list']
	/*
	require_once("config.php");
	require_once("database.php");
	require_once("product_class.php");
	require_once("shopping_cart.php");
	*/
	$obShop = new shopping_cart;

	echo "Số món hàng đã mua: <a href = your_cart.php>" . $obShop->totalCart() . "</a><br/><br/><hr>";
	$obProduct = new product_class();
	$list = $obProduct->listProduct();

	/*
	echo "<pre>";
	print_r($list);
	echo "</pre>";
	*/
	if(!empty($list)){
		$stt = 1;
		echo "<table border = 1>";
		echo "<th>STT</th>";
		echo "<th>Tên sản phẩm</th>";
		echo "<th>Giá sản phẩm</th>";
		echo "<th>Mua</th>";

		
		foreach ($list as $key => $value) {
			echo "<tr>";
			echo "<td>" . $stt++ . "</td>";
			echo "<td> " . $value['pro_name'] . "</td>";
			echo "<td>" . $value['pro_price'] . "</td>";
			echo "<td><a href = insertCart.php?id=".$value['pro_id'].">Mua hàng</a></td>";
			echo "</tr>";

		//echo "<hr>";
		}
	}
	

?>