<?php
    /*-----------------------------------
                IMPORTS
    -----------------------------------*/
    //import de la BDD 
    include './utils/connectBdd.php';
    //import du model

    //import de la vue du menu
    include './view/view_menu_connecte.html';
    include './view/view_catalogue.php';

    //import de model
    include './model/model_produit.php';



    if(isset($_POST['menu'])){
        include './controler/controler_menu.php';
    }elseif(isset($_POST['pizza'])){
        include './controler/controler_pizza.php';
    }elseif(isset($_POST['boisson'])){
        include './controler/controler_boisson.php';
    }elseif(isset($_POST['sauce'])){
        include './controler/controler_sauce.php';
    }elseif(isset($_POST['dessert'])){
        include './controler/controler_dessert.php';
    }else{
        include './controler/controler_pizza.php';
    }
    
    
    // import du footer 
    include './view/view_footer.php';


?>