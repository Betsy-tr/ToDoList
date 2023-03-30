<?php

include("config.php") ;
include($dir_common."/db.php") ;

// var_dump($_GET) ;
// var_dump($_POST) ;

switch ($_GET['mod']) { // Gestion du mode d'arrivé en GET
    case 'add': // Ajouter une tache en base de données 
    // Création de ma requête
    $sql = "INSERT INTO taches(tache , etat) VALUES ('".$_POST['tache']."' ,'n')" ; 

    // Exécution de ma requête   
    $mysqli->query($sql) ; 
        break;
    case 'upd':// Modifier une tache en base de données ;
    $sql ="UPDATE taches SET etat='o' WHERE id=". $_GET['id'] ; // Met à jour la colonne etat
    $mysqli->query($sql) ;
        break;
    case 'del': // Supprimer une tache en base de données

    $sql ='DELETE FROM taches WHERE id='. $_GET['id'] ;
    $mysqli->query($sql) ;
        break;
    
    default:
        # code...
        break;
}


?>