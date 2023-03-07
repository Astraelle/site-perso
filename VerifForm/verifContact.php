<?php 

use VerifForm\Bdd;
include "deepSea/seaKing/includes/functions.php";

if(isset($_POST['envoi'])){
    extract($_POST);
    $valid = true;
    $nom = trim($_POST['nom']);
    $prenom = trim($_POST['prenom']);
    $mail = trim($_POST['mail']);
    $sujet = trim($_POST['sujet']);
    $demande = $_POST['demande'];

    if(empty($nom)){
        $valid = false;
        $err_nom = "Le champ suivant doit être remplit";
    }
    if(!preg_match('/^[^<>\"!?]+$/', $nom)){
        $valid = false;
        $err_nom = "Ce champ ne doit pas contenir de caractères spéciaux";
    }
    if(strlen($nom) > 75){
        $valid = false;
        $err_nom = "Le nom est trop long";
    }
    if(empty($prenom)){
        $valid = false;
        $err_prenom = "Le champ suivant doit être remplit";
    }
    if(!preg_match('/^[^<>\"!?]+$/', $prenom)){
        $valid = false;
        $err_prenom = "Ce champ ne doit pas contenir de caractères spéciaux";
    }
    if(strlen($prenom) > 75){
        $valid = false;
        $err_prenom = "Le prenom est trop long";
    }
    if(empty($mail)){
        $valid = false;
        $err_mail = "Le champ suivant doit être remplit";
    }
    if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
        $valid = false;
        $err_mail = "La composition du mail est invalide";
    }
    if(empty($sujet)){
        $valid = false;
        $err_sujet = "Le champ suivant doit être remplit";
    }
    if(!preg_match('/^[^<>\"!]+$/', $sujet)){
        $valid = false;
        $err_sujet = "Ce champ ne doit pas contenir de caractères spéciaux";
    }
    if(strlen($sujet) > 75){
        $valid = false;
        $err_sujet = "Le sujet de la demande est trop long";
    }
    
    // if(empty($demande)){
    //     $valid = false;
    //     $err_demande = "Le champ suivant doit être remplit";
    // }
    var_dump($demande);
    if($valid){

        $req = "INSERT INTO contact (nom, prenom, mail, sujet, demande) VALUES (?, ?, ?, ?, ?)";
        $req = Bdd::pdo()->prepare($req);
        $req->execute(array($nom, $prenom, $mail, $sujet, $demande));
        if($valid){
            redirection("#");
        }
    }else{
        $valid = false;
        $err_bdd = "Vérifiez que vous avez correctement remplit les champs";
    }
}

?>