<?php

class Product

{
    public $name;
    public $price;
    public $category;
 
    public function formatPrice()
    {
        return number_format($this->price, 2);
    }
 
    public function showSalesPrice()
    {
        $salesPrice = $this->price * 1.09;
        return number_format($salesPrice, 2);
    }
 
    public function setName($name)
    {
        $this->name = strtolower($name);
    }
 
    public function setCategory($category)
    {
        $this->category = strtoupper($category);
    }
 
}


$game1 = new Product();
$game1->setName("God of war");
$game1->price = 30;
$game1->setCategory("Storymode");
 
$game2 = new Product();
$game2->setName("Spiderman");
$game2->price = 70;
$game2->setCategory("Storymode");
 
$game3 = new Product();
$game3->setName("GTA V");
$game3->price = 20;
$game3->setCategory("Story/Online");
 
echo "Product: " . $game1->name . "<br>";
echo "Category: " . $game1->category . "<br>";
echo "Prijs zonder BTW " . $game1->formatPrice() . " $ <br>";
echo "Prijs met BTW " . $game1->showSalesPrice() . " $<br><br>";
 
echo "Product: " . $game2->name . "<br>";
echo "Category: " . $game2->category . "<br>";
echo "Prijs zonder BTW " . $game2->formatPrice() . " $<br>";
echo "Prijs met BTW " . $game2->showSalesPrice() . " $<br><br>";
 
echo "Product: " . $game3->name . "<br>";
echo "Category: " . $game3->category . "<br>";
echo "Prijs zonder BTW " . $game3->formatPrice() . " $<br>";
echo "Prijs met BTW " . $game3->showSalesPrice() . " $<br><br>";


?>