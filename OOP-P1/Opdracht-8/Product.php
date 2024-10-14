<?php

class Product

{

    public $name;
    public $price;
    public $category;
    public $description;
    public $rating;
 
    public function __construct($price, $name, $description, $category = "dranken", $rating = 3)
    {
        $this->price = $price;
        $this->name = strtolower($name);
        $this->description = $description;
        $this->category = strtoupper($category);
        $this->rating = $rating;
    }
 
    public function setCategory($category)
    {
        $this->category = strtoupper($category);
    }
 
    public function setRating($rating)
    {
        $this->rating = $rating;
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
    public function getProduct()
    {
        return [
            'name' => $this->name,
            'price' => $this->price,
            'category' => $this->category,
            'description' => $this->description,
            'rating' => $this->rating
        ];
    }
}
 
$game1 = new Product(
    39.99,
    "God of war",
    "A Storymode game made by sony set in Nordic mythology."
);
 
$game2 = new Product(
    69.99,
    "Spiderman",
    "A open world superhero game set in New York",
    "RPG"
);
 
$game3 = new Product(
    0,
    "Fortnite",
    "A battle royale with much other things.",
    "ACTION",
    5
);
 
function printProduct($product)
{
    $productDetails = $product->getProduct();
    echo "Naam: " . $productDetails['name'] . "<br>";
    echo "Prijs: €" . number_format($productDetails['price'], 2) . "<br>";
    echo "Categorie: " . $productDetails['category'] . "<br>";
    echo "Beschrijving: " . $productDetails['description'] . "<br>";
    echo "Rating: " . $productDetails['rating'] . "<br><br>";
}
 
printProduct($game1);
printProduct($game2);
printProduct($game3);



?>