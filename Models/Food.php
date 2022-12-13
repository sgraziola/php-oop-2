<?php
require __DIR__ . '/../Traits/Weight.php';


class Food extends Product
{

    public $type;
    public $ingredients;
    use Weight;


    public function __construct(String $name, String $image, float $price, Category $category, String $type, String $ingredients)
    {
        $this->type = $type;
        $this->ingredients = $ingredients;

        parent::__construct($name, $image, $price, $category);
    }
}
