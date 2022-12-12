<?php

/* 
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
    - L'e-commerce vende prodotti per animali.
    - I prodotti sono categorizzati, le categorie sono Cani o Gatti.
    - I prodotti saranno oltre al cibo, anche giochi, cucce, etc.

Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
*/

class Product
{
    public $name;
    public $image;
    public $price;

    public function __construct(String $name, String $image, Int $price)
    {
        $this->name = $name;
        $this->image = $image;
        $this->price = $price;
    }
}

class CatProduct extends Product
{
    public $category_icon;
}

class DogProduct extends Product
{
    public $category_icon;
}

class Food
{
    public $type;
}

class Toys
{
    public $type;
}

class Kennel
{
    public $type;
}

class Pesticide
{
    public $type;
}
