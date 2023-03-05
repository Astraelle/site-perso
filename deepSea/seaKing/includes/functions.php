<?php 

function debug($variable) {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

function redirection($url){
    header("location: $url");
}

function affichage($fichier, $variablesVue = []){
    extract($variablesVue);
    include "vue/header.php";
    include "vue/$fichier";
    include "vue/footer.php";
}

function lien($controleur, $methode = "liste", $id = null){
    return "?controleur=$controleur&methode=$methode" . ($id ? "&id=$id" : "");
}
