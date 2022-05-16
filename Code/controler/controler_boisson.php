<?php
    $boisson = new Produit(null, null, null, null, 'Boisson');
    $tab = $boisson -> showProduitByCat($bdd);

    
    echo '<div class=\'container-card\'>';
    foreach($tab as $value){
        $card ='<div class=\'card\' id=\'card'.$value->id_prod.'\'style=\'max-width: 12rem;\'><img src=\''.$value->image_prod.'\' class=\'card-img-top\' alt=\'...\'><div class=\'card-body\'><h5 class=\'card-title\'>'.$value->nom_prod.'</h5></div></div>';
        echo $card;
        $cardVerso = '<img src=\''.$value->image_prod.'\' class=\'card-img-top\' alt=\'...\'><div class=\'card-body\'><h5 class=\'card-title\'>'.$value->nom_prod.'</h5></div>';
        $cardRecto ='<h5></h5><p>'.$value->ingredient_prod.'</p><div class=\'card-body\'><h5>Prix : '.$value->prix_prod.'</h5></div>';

        echo
        '<script>
            let card'.$value->id_prod.' = document.body.querySelector("#card'.$value->id_prod.'");
            switchCard(card'.$value->id_prod.',"'.$cardVerso.'", "'.$cardRecto.'");
        </script>';
    }
    echo '</div>';
?>