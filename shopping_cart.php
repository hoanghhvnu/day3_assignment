<?php
	//require_once("config.php");
	//require_once("database.php");
	//require_once("product_class.php");
	session_start();
class shopping_cart{
	private $_pro_id;
	private $_pro_name;
	private $_pro_price;
	private $_quantity;
	//static $list_cart = array();a
	//private $_total_cart;

	public function setId($value){
		$this->_pro_id = $value;
	}	

	public function getId(){
		return $this->_pro_id;
	}

	public function setName($value){
		$this->_pro_name = $value;
	}	

	public function getName(){
		return $this->_pro_name;
	}

	public function setPrice($value){
		$this->_pro_price = $value;
	}	

	public function getPrice(){
		return $this->_pro_price;
	}

	public function setQuantity($value){
		$this->_quantity = $value;
	}	

	public function getQuantity(){
		return $this->_quantity;
	}

	public function getInfo(){
		$data = array();
		$data['pro_id'] = $this->getId();
		$data['pro_name'] = $this->getName();
		$data['pro_price'] = $this->getPrice();
		$data['quantity'] = $this->getQuantity();
		return $data;
	}
	public function insertCart(){
		$data = $this->getInfo();
		if ($data == null){
			return false;
		}
		if(isset($_SESSION['listcart'])){
			$_SESSION['listcart'][] = $data;
		}
		else{
			$_SESSION['listcart'][0] = $data;
		}
		
	}

	public function deleteCart($id){
		if(isset($_SESSION['listcart'][$id])){
			unset($_SESSION['listcart'][$id]);
		}
	}

	public function updateCart($id){
		$data = $this->getInfo();
		if ($data == null){
			return false;
		}
		$_SESSION['listcart'][$id] = $data;
	}

	public function totalCart(){
		$total = 0;
		if(isset($_SESSION['listcart'])){
			foreach ($_SESSION['listcart'] as $key => $value) {
			$total += $value['quantity'];
			}
		}
		
		return $total;
	}

	public function contentCart(){
		$data = array();
		foreach ($_SESSION['listcart'] as $key => $value) {
			$data[$key] = $value;

		}
		return $data;
	}
}
?>