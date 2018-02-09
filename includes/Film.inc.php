<?php
if(isset($_POST["formulaire"])) {
    $tabErreur = array();
    $titre = $_POST['titre'];
    $actors = $_POST['actors'];
    $director = $_POST['director'];
    $producer = $_POST['producer'];
    $yearofprod = $_POST['yearofprod'];
    $language = $_POST['language'];
    $categorie = print($_POST['categorie']);
    $storyline = $_POST['storyline'];
    $video = $_POST['video'];



    if($_POST["titre"] == ""){
        array_push($tabErreur, "Veuillez saisir le titre du film");
    }

    if($_POST["actors"] == "" ){
        array_push($tabErreur, "Veuillez saisir le nom de l'acteur principal");
    }elseif ($actors !== filter_var($actors , FILTER_SANITIZE_STRING)){
        array_push($tabErreur , "Caracteres non autorisées");
    }

    if($_POST["director"] == "" ){
        array_push($tabErreur, "Veuillez saisir le nom du réalisateur");
    }elseif ($director !== filter_var($director , FILTER_SANITIZE_STRING)){
        array_push($tabErreur , "Caracteres non autorisées");
    }

    if($_POST["producer"] == "" ){
        array_push($tabErreur, "Veuillez saisir le nom du producteur");
    }elseif ($producer !== filter_var($producer , FILTER_SANITIZE_STRING)){
        array_push($tabErreur , "Caracteres non autorisées");
    }

    if($_POST["yearofprod"] == "" ){
        array_push($tabErreur, "Veuillez saisir l'année de production");
    }
    if(count($tabErreur) != 0) {
        $message = "<ul>";
        for($i = 0 ; $i < count($tabErreur) ; $i++) {
            $message .= "<li>" . $tabErreur[$i] . "</li>";
        }
        $message .= "</ul>";
        echo($message);
        include("./include/formInscription.php");
    }
}