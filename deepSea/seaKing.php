<?php
include "includes/init.inc.php";

$methode = $_GET["methode"] ?? "liste";
$controleur = $_GET["controleur"] ?? "contact";
$id = $_GET["id"] ?? null;

$nomClasse = "Controleurs\\" . ucfirst($controleur) . "Controleur";
$controleur = new $nomClasse;
$controleur->$methode($id);