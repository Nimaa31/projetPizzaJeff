<?php
    include './model/model_produit.php';

    $pizza = new Produit(null,null,null,null,"pizza");

    $produits = $pizza->showProduitByCat($bdd);

    foreach($produits as $value){
        var_dump($value);
    }



?>