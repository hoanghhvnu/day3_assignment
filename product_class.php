<?php
	//require_once("database.php");
class product_class extends database{
	//protected $_pro_id;
	protected $_proname;
	protected $_proprice;
	protected $_table = "tbl_product";

	public function __construct()
    {
        $this->connect();   
    }

    public function  setName($value)
    {
        $this->_proname = $value;
    }
    
    public function  getName()
    {
        return  $this->_proname;
    }

    public function  setPrice($value)
    {
        $this->_proprice = $value;
    }
    
    public function  getPrice()
    {
        return  $this->_proprice;
    }


    public function getOnce($id)
    {
        $sql = "SELECT * FROM $this->_table WHERE pro_id='".$id."'";
        $this->query($sql);
        return $this->fetch();
    }

    public function listProduct()
    {
        $sql = "SELECT * FROM $this->_table";
        $this->query($sql);
        return $this->fetchAll();   
    }
}
?>