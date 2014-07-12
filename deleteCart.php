<?php
	session_start();
	$id = isset($_GET['id']) ? $_GET['id'] : "";
	$keydel;
	if ($id){
		foreach ($_SESSION['listcart'] as $key => $value) {
			if($value['pro_id'] == $id){
				$keydel = $key;
			}
		}
		unset($_SESSION['listcart'][$keydel]);
	}
	//session_destroy();
	header('location:your_cart.php');
?>