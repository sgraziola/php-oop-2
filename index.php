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



$catBall = new Product("Palla Pong", "https://static.zoomalia.com/prod_img/13843/la_balle-22707.jpg", 59, new Category("cats"), new Type("Toy"));
$dogFood = new Product('Area Wild Manzo Salmone', 'https://www.area-dog.it/wp-content/uploads/2020/11/area-wild-manzo-salmone-1.jpg', 30, new Category("dogs"), new Type("Food"));
$dogKennel = new Product('Beltom Cuccia XL', 'http://www.cuccepercani.eu/wp-content/uploads/2015/06/cucce-per-cani-1.jpg', 130, new Category("dogs"), new Type("Kennel"));


$products = [$catBall, $dogFood, $dogKennel];
?>



<!doctype html>
<html lang="en">

<head>
    <title>Zoolean</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <h1 class="text-center my-5">ZOOLEAN</h1>
    <div class="container">
        <div class="row row-cols-3">
            <?php foreach ($products as $product) : ?>
                <div class="col">
                    <div class="card">
                        <img src='<?= $product->image ?>' alt='<?= $product->name ?>' />
                        <div class="card-body">
                            <h3 class="card-title"><?= $product->name ?></h3>
                            <p class="card-text">
                                Category:
                                <img width="50" src='<?= $product->category->icon ?>' alt="">
                            </p>
                            <p class="card-text">
                                Type: <?= $product->type->type ?>
                            </p>

                        </div>
                        <div class="card-footer">
                            <small>Prezzo: <?= $product->price ?></small>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>