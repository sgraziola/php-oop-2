<?php
require __DIR__ . '/../Models/Product.php';
require __DIR__ . '/../Models/Category.php';
require __DIR__ . '/../Models/Food.php';
require __DIR__ . '/../Models/Toy.php';
require __DIR__ . '/../Models/Kennel.php';





$catToy = new Toy("Trixie", "https://tcdn.storeden.com/gallery/5f9ebaca00f220921255a71c/file.jpg", 12.90, new Category("cats"), "Gioco in poliestere galleggiante. È perfetto per i giochi d'acqua in quanto rimane in superficie ed è facile da vedere ed afferrare. Con squittio.");
$dogFood = new Food('Monge - Bwild Grain Free', 'https://egress.storeden.net/gallery/5f199423be7ea0ffc7df8919/file.jpg', 17.70, new Category("dogs"), "Umido", "Carne di agnello (26%), fegato di suino, carne di pollo, olio di salmone, prodotti del lievito, zucca essiccata 2% (pari al 8,6% di zucca fresca), zucchine essiccate 2% (pari a 8,6% di zucchine fresche), sostanze minerali, patate, mirtillo nero fresco, mirtillo rosso fresco, lampone fresco, xilo-oligosaccaride (XOS 0,1%), yucca schidigera, spirulina (0,1%), glucosamina (0,019 %), solfato di condroitina (0,01%)");
$dogKennel = new Kennel('Cuccia Zeus 70', 'https://tcdn.storeden.com/gallery/62cfee42be7ea0211d063214/file.jpg', 79.00, new Category("dogs"), "Uso Esterno");


$products = [$catToy, $dogFood, $dogKennel];

try {
    $rabbits = new Category("rabbits");
    $rabbitsIcon = $rabbits->set_icon();
    echo $rabbitsIcon;
} catch (Exception $e) {
    echo $e->getMessage();
}
