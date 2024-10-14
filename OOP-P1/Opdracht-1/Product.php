<?php
 
class Product 
{
    public $chaire;
    public $table;
    public $charger;
 
   
    public function setProduct($postChaire)
    {
        $this->chaire = ucfirst($postChaire);  
    }
 
   
    public function getTable()
    {
        return ucfirst($this->table);  
    }
}
 
 
$product = new Product();
 
 
$product->chaire = "relaxed";     
$product->table = "big";  
$product->charger = "acer";               
 
echo $product->getTable();  
echo "<br>";
 
 
echo $product->table;  
 
 
echo "<pre>";
var_dump($product);
?>