<?php
    include './model/model_produit.php';

    $pizza = new Produit(null, null, null, null, "Pizza");

    $pizzas = $pizza->showProduitByCat($bdd);
    var_dump($pizzas);
    foreach($pizzas as $value){
        
        $card = '<div class=\'card\' id=\'card'.$value->id_prod.'\'style=vmax-width: 12rem;\'><img src=\''.$value->image_prod.'\' class=\'card-img-top\' alt=\'...\'><div class=\'card-body\'><h5 class=\'card-title\'>'.$value->nom_prod.'</h5></div></div>';
        echo $card;

        $cardVerso = '<img src=\''.$value->image_prod.'\' class=\'card-img-top\' alt=\'...\'><div class=\'card-body\'><h5 class=\'card-title\'>'.$value->nom_prod.'</h5></div>';
        $cardRecto = '<h5>Ingredient :</h5><p>'.$value->ingredient_prod.'</p><div class=\'card-body\'><h5>Prix : '.$value->prix_prod.'</h5></div>';
    }



    echo 'hello pizza';
?>