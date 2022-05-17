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
        //route /code/ajouter_un_article -> ./controler/controler_add_article.php
        case $path === "/code/accueil" : 
            include './controler/controler_accueil.php';
                break ;
        //route /code/ajouter_un_article -> ./controler/controler_add_article.php
        case $path === "/code/ajouter_un_article" : 
            include './controler/controler_add_article.php';
                break ;
        //route /code/ajouter_un_utilisateur -> ./controler/controler_add_user.php
        case $path === "/code/ajouter_un_utilisateur" : 
            include './controler/controler_utilisateur.php';
                break ;
        //route /code/connection -> ./controler/controler_connexion.php
        case $path === "/code/connection" : 
            include './controler/controler_connexion.php';
                break ;
        //route /code/connection -> ./controler/controler_update_compte.php
        case $path === "/code/modifier_le_compte" : 
            include './controler/controler_update_compte.php';
                break ;
        //route /code/deconnection -> ./controler/controler_deconnexion.php
        case $path === "/code/deconnection" : 
            include './controler/controler_deconnexion.php';
                break ;
        //route /code/deconnection -> ./controler/controler_inscription.php
        case $path === "/code/inscription" : 
            include './controler/controler_inscription.php';
                break ;
        //route /code/supprimer_article -> ./controler/controler_delete_article.php
        case $path === "/code/supprimer_article" : 
            include './controler/controler_delete_article.php';
                break ;
        //route /code/modifier_article -> ./controler/controler_modify_article.php
        case $path === "/code/modifier_article" : 
            include './controler/controler_modify_article.php';
                break ;
        //route /code/menu -> ./controler/controler_show_all_produit.php
        case $path === "/code/menu" : 
            include './controler/controler_show_all_produit.php';
                break ;
        //route /code/blog -> ./controler/controler_show_all_article.php
        case $path === "/code/blog" : 
            include './controler/controler_show_all_article.php';
                break ;
        //route /code/blog -> ./controler/controler_contact.php
        case $path === "/code/contact" : 
            include './controler/controler_contact.php';
                break ;
        //route en cas d'erreur
        case $path === "/code/erreur" : 
            include './controler/error.php';
                break ;
    }
?>