<?php 

function redirection($url){
    header("location: $url");
}

function lien($controleur, $methode = "liste", $id = null){
    return "?controleur=$controleur&method=$methode" . ($id ? "&id=$id" : "");
}

function affichage($fichier, $variablesVue = []){
    extract($variablesVue);
    include "deepSea/$fichier";
}
?>