<?php
    //inclusion de fichier principaux
    include_once 'config/config.php';
    include_once 'config/database.php';
    include_once 'functions/function.php';
    include_once 'classes/Autoloader.php';
    Autoloader::register();
    


    //definition de la page courante
    if(isset($_GET['page']) && !empty($_GET['page']))
        {
            $page = trim(strtolower($_GET['page']));
        }

    else{
        $page = 'home'; //default page
    }

    //all pages
    $allPages = scandir('controllers/');

    //verification de l'existence de la page
    if(in_array($page.'_controller.php', $allPages))
        {
            //inclusion de page
            include_once 'models/'.$page.'_model.php';
            include_once 'controllers/'.$page.'_controller.php';
            include_once 'views/'.$page.'_view.php';
        }

    else{
        //page introuvable
       header('location:404');
    }

    Database::disconnect();

?>