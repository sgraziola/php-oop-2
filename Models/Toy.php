<?php
require_once __DIR__ . '/../Traits/Weight.php';
require_once __DIR__ . '/../Traits/Material.php';

class Toy extends Product
{

    use Material;
    use Weight;
    public $description;


    public function __construct(String $name, String $image, float $price, Category $category, String $description)
    {
        $this->description = $description;

        parent::__construct($name, $image, $price, $category);
    }
}
