<?php

class Product
{
    public $name;
    public $image;
    public $price;
    public $category;

    public function __construct(String $name, String $image, float $price, Category $category)
    {
        $this->name = $name;
        $this->image = $image;
        $this->price = $price . ' $';
        $this->category = $category;
    }
}
