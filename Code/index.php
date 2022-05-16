<?php
    //session start
    session_start();
    //Analyse de l'URL avec parse_url() et retourne ses composants
    $url = parse_url($_SERVER['REQUEST_URI']);
    //test soit l'url a une route sinon on renvoi à la racine
    $path = isset($url['path']) ? $url['path'] : '/';
    /*------------------------------------------------
                        ROUTEUR
    ------------------------------------------------*/
    //test de la valeur $path dans l'URL et import de la ressource
    switch($path){
        //route /amin/projetJeff/Code/ajouter_un_article -> ./controler/controler_add_article.php
        case $path === "/amin/projetJeff/Code/accueil" : 
            include './controler/controler_accueil.php';
                break ;
        //route /amin/projetJeff/Code/ajouter_un_article -> ./controler/controler_add_article.php
        case $path === "/amin/projetJeff/Code/ajouter_un_article" : 
            include './controler/controler_add_article.php';
                break ;
        //route /amin/projetJeff/Code/ajouter_un_utilisateur -> ./controler/controler_add_user.php
        case $path === "/amin/projetJeff/Code/ajouter_un_utilisateur" : 
            include './controler/controler_utilisateur.php';
                break ;
        //route /amin/projetJeff/Code/connection -> ./controler/controler_connexion.php
        case $path === "/amin/projetJeff/Code/connection" : 
            include './controler/controler_connexion.php';
                break ;
        //route /amin/projetJeff/Code/deconnection -> ./controler/controler_deconnexion.php
        case $path === "/amin/projetJeff/Code/deconnection" : 
            include './controler/controler_deconnexion.php';
                break ;
        //route /amin/projetJeff/Code/supprimer_article -> ./controler/controler_delete_article.php
        case $path === "/amin/projetJeff/Code/supprimer_article" : 
            include './controler/controler_delete_article.php';
                break ;
        //route /amin/projetJeff/Code/modifier_article -> ./controler/controler_modify_article.php
        case $path === "/amin/projetJeff/Code/modifier_article" : 
            include './controler/controler_modify_article.php';
                break ;
        //route /amin/projetJeff/Code/menu -> ./controler/controler_catalogue.php
        case $path === "/amin/projetJeff/Code/menu" : 
            include './controler/controler_catalogue.php';
                break ;
        //route /amin/projetJeff/Code/blog -> ./controler/controler_show_all_article.php
        case $path === "/amin/projetJeff/Code/blog" : 
            include './controler/controler_show_all_article.php';
                break ;
        case $path === "/amin/projetJeff/Code/afficher_les_produits" : 
            include './controler/controler_show_all_produit.php';
                break ;
        //route en cas d'erreur
        case $path === "/amin/projetJeff/Code/erreur" : 
            include './controler/error.php';
                break ;
    }
?>