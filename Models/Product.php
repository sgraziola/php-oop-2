<?php

class Product
{
    public $name;
    public $image;
    public $price;
    public $category;
    public $type;

    public function __construct(String $name, String $image, Int $price, Category $category, Type $type)
    {
        $this->name = $name;
        $this->image = $image;
        $this->price = $price . ' $';
        $this->category = $category;
        $this->type = $type;
    }
}
