<?php

/* 
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
    - L'e-commerce vende prodotti per animali.
    - I prodotti sono categorizzati, le categorie sono Cani o Gatti.
    - I prodotti saranno oltre al cibo, anche giochi, cucce, etc.

Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
*/

require __DIR__ . '/Models/Product.php';
require __DIR__ . '/Models/Category.php';
require __DIR__ . '/Models/Type.php';



$catBall = new Product("palla bong", "https://static.zoomalia.com/prod_img/13843/la_balle-22707.jpg", 59, new Category("cats"), new Type("toy"));
$dogFood = new Product('Area Wild Manzo Salmone', 'https://www.area-dog.it/wp-content/uploads/2020/11/area-wild-manzo-salmone-1.jpg', 30, new Category("dogs"), new Type("food"));
$dogKennel = new Product('Beltom Cuccia XL', 'http://www.cuccepercani.eu/wp-content/uploads/2015/06/cucce-per-cani-1.jpg', 130, new Category("dogs"), new Type("kennel"));
var_dump($catBall);
var_dump($dogFood);
var_dump($dogKennel);
