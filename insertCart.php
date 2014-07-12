<?php
	//require_once("product_class.php");
	//session_start();vwzs---/=[]
	/*
	function __autoload($class_name){
		require_once("$class_name.php");
		//require_once()
	}
	*/
	
	
	require_once("shopping_cart.php");
	require_once("config.php");
	require_once("database.php");
	require_once("product_class.php");
	
	
	//session_start();
	
	$id = isset($_GET['id']) ? $_GET['id'] : "";
	
	//echo  "id la" . $id;
	$quantity = 0;
	//echo "<pre>";
	//print_r($_SESSION['listcart']);a
	//session_destroy();
	$key_insert = 0;
	$update = false;

	foreach ($_SESSION['listcart'] as $key7 => $value7) {
		if($value7['pro_id'] == $id){
			$update = true;
			$quantity = $value7['quantity'];
			$key_insert = $key7;

		}
	}
	//echo $quantity;
	
	//$productInfo = product_class::getOnce($id);
	$obProduct = new product_class;
	$productInfo = $obProduct->getOnce($id);

	$objShop = new shopping_cart;
	$objShop->setId($id);
	$objShop->setName($productInfo['pro_name']);
	$objShop->setPrice($productInfo['pro_price']);
	$objShop->setQuantity(++$quantity);
	if($update){
		$objShop->updateCart($key_insert);
	} else{
		$objShop->insertCart();
	}
	
	header("location:index.php");
	/*
	echo "<pre>";
	print_r($productInfo);
	*/
?>