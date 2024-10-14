<?php

class Product

{
    public $name;
    public $price;
    public $category;
    public $description;
 
    public function __construct($name, $description)
    {
        $this->name = strtolower($name);
        $this->description = $description;
    }
 
    public function formatPrice()
    {
        return number_format($this->price, 2);
    }
 
    public function showSalesPrice()
    {
        $salesPrice = $this->price * 1.09;
        return number_format($salesPrice, 2);
    }
 
 
    public function setCategory($category)
    {
        $this->category = strtoupper($category);
    }
 
}


$game1 = new Product("God of war", "A Storymode game made by sony set in Nordic mythology");
$game1->price = 30;
$game1->setCategory("Storymode");
 
$game2 = new Product("Spiderman","A open world superhero game set in New York");
$game2->price = 70;
$game2->setCategory("Storymode");
 
$game3 = new Product("GTA V","A open world RPG with good story and difficult gameplay and with an online mode ");
$game3->price = 20;
$game3->setCategory("Storymode/online");
 
echo "Product: " . $game1->name . "<br>";
echo "Category: " . $game1->category . "<br>";
echo "Beschrijving: " . $game1->description . "<br>";
echo "Prijs zonder BTW " . $game1->formatPrice() . " $ <br>";
echo "Prijs met BTW " . $game1->showSalesPrice() . " $<br><br>";
 
echo "Product: " . $game2->name . "<br>";
echo "Category: " . $game2->category . "<br>";
echo "Beschrijving: " . $game2->description . "<br>";
echo "Prijs zonder BTW " . $game2->formatPrice() . " $<br>";
echo "Prijs met BTW " . $game2->showSalesPrice() . " $<br><br>";
 
echo "Product: " . $game3->name . "<br>";
echo "Category: " . $game3->category . "<br>";
echo "Beschrijving: " . $game3->description . "<br>";
echo "Prijs zonder BTW " . $game3->formatPrice() . " $<br>";
echo "Prijs met BTW " . $game3->showSalesPrice() . " $<br><br>";



?>