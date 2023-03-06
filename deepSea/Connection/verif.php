<?php 

use Connection\Bdd;
include "seaKing/includes/functions.php";

if(isset($_POST['submit'])){
    extract($_POST);
    $valid = true;
    $identifiant = trim($_POST['identifiant']);
    $mail = trim($_POST['mail']);
    $mdp = trim($_POST['mdp']);
    
    if(empty($identifiant)){
        $valid = false;
        $err_identifiant = "Ce champ ne doit pas être vide";
    }

    if(!preg_match('/^[^<>\'"!?]+$/', $identifiant)){
        $valid = false;
        $err_identifiant = "Ce champ ne doit pas contenir de caractères spéciaux";
    }

    if(empty($mail)){
        $valid = false;
        $err_mail = "Ce champ ne doit pas être vide";
    }

    if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
        $valid = false;
        $err_mail = "La composition du mail est invalide";
    }

    if(empty($mdp)){
        $valid = false;
        $err_mdp = "Ce champ ne doit pas être vide";
    }

    if($valid){
        $req = "SELECT * FROM comptes WHERE identifiant = :identifiant";
        $req = Bdd::pdo()->prepare($req);
        $req->execute(array(
            ':identifiant' => $identifiant
        ));
        $req = $req->fetch();

        if(isset($req['mdp'])){
            if(!($req['mail'] == $mail)){
                $valid = false;
                $err_mail = "L'adresse mail est incorrect";
            }
            if(!password_verify($mdp, $req['mdp'])){
                $valid = false;
                $err_mdp = "Le mot de passe est incorrect";
            }
            if($valid){
                redirection("seaKing/");
            }
        }else{
            $valid = false;
            $err_identifiant = "L'identifiant est incorrect";
        }
    }




}

?>