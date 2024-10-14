<?php


class Product

{
    public $name;
    public $price;
 
    public function formatPrice()
    {
        return number_format($this->price, 2);
    }
 
    public function showSalesPrice()
    {
        $salesPrice = $this->price * 1.09;
        return number_format($salesPrice, 2);
    }
}

$game1 = new Product();
$game1->name = "God of war";
$game1->price = 40;
 
$game2 = new Product();
$game2->name = "Spiderman";
$game2->price = 50;
 
$game3 = new Product();
$game3->name = "GTA V";
$game3->price = 20;
 
 
echo "Product: " . $game1->name . "<br>";
echo "Prijs zonder BTW " . $game1->formatPrice() . " $ <br>";
echo "Prijs met BTW " . $game1->showSalesPrice() . " $<br><br>";
 
echo "Product: " . $game2->name . "<br>";
echo "Prijs zonder BTW " . $game2->formatPrice() . " $<br>";
echo "Prijs met BTW " . $game2->showSalesPrice() . " $<br><br>";
 
echo "Product: " . $game3->name . "<br>";
echo "Prijs zonder BTW " . $game3->formatPrice() . " $<br>";
echo "Prijs met BTW " . $game3->showSalesPrice() . " $<br><br>";


?>