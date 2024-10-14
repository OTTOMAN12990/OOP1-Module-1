<?php

class Product

{

    public function __construct(
        public float $price,
        public string $name,
        public string $description,
        public string $category = "dranken",
        public int $rating = 3
    ) {
        $this->name = strtolower($name);
        $this->category = strtoupper($category);
    }
 
    public function setCategory(string $category): void
    {
        $this->category = strtoupper($category);
    }
 
    public function setRating(int $rating): void
    {
        $this->rating = $rating;
    }
 
    public function formatPrice(): string
    {
        return number_format($this->price, 2);
    }
 
    public function showSalesPrice(): string
    {
        $salesPrice = $this->price * 1.09;
        return number_format($salesPrice, 2);
    }
}


$game1 = new Product(
    price: 39.99,
    name: "God of war",
    description: "A Storymode game made by sony set in Nordic mythology."
);
 
$game2 = new Product(
    price: 69.99,
    name: "Spiderman",
    description: "A open world superhero game set in New York",
    category: "games"
);
 
$game3 = new Product(
    price: 0,
    name: "Fortnite",
    description: "A battle royale with much other things.",
    rating: 5
);


echo "Naam: " . $game1->name . "<br>";
echo "Beschrijving: " . $game1->description . "<br>";
echo "Categorie: " . $game1->category . "<br>";
echo "Rating: " . $game1->rating . "<br><br>";
 
echo "Naam: " . $game2->name . "<br>";
echo "Beschrijving: " . $game2->description . "<br>";
echo "Categorie: " . $game2->category . "<br>";
echo "Rating: " . $game2->rating . "<br><br>";
 
echo "Naam: " . $game3->name . "<br>";
echo "Beschrijving: " . $game3->description . "<br>";
echo "Categorie: " . $game3->category . "<br>";
echo "Rating: " . $game3->rating . "<br><br>";
 
$game1->name = "God of war ragnarok";
echo "Gewijzigde naam: " . $game1->name . "<br>";
 
echo "Verkoopprijs van " . $game1->name . ": €" . $game1->showSalesPrice() . "<br>";
echo "Verkoopprijs van " . $game2->name . ": €" . $game2->showSalesPrice() . "<br>";
echo "Verkoopprijs van " . $game3->name . ": €" . $game3->showSalesPrice() . "<br>";



?>