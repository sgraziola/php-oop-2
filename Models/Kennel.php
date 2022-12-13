<?php
require_once __DIR__ . '/../Traits/Weight.php';
require_once __DIR__ . '/../Traits/Material.php';

class Kennel extends Product
{

    use Material;
    use Weight;
    public $usage;

    public function __construct(String $name, String $image, float $price, Category $category, String $usage, $weight, $unit)
    {
        $this->usage = $usage;
        $this->set_weight($weight, $unit);

        parent::__construct($name, $image, $price, $category);
    }
}
