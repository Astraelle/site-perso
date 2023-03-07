<?php 

use VerifForm\Bdd;

if(isset($_SESSION['id'])){
    redirection("index.php");
}

// Vérification des champs
if(isset($_POST['creation'])){
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

    // Vérification des données
    if($valid){
        $verif = "SELECT identifiant FROM comptes WHERE identifiant = :identifiant";
        $verif = Bdd::pdo()->prepare($verif);
        $verif->execute(array(
        ':identifiant' => $identifiant
        ));
        $verif = $verif->fetch();
        if($verif['identifiant'] == $identifiant){
            $valid = false;
            $err_identifiant = "Ce nom d'identifiant est déjà utilisé";
        }else{
            $mdp = password_hash($mdp, PASSWORD_BCRYPT);
            var_dump($mdp);
            $crea = "INSERT INTO comptes (identifiant, mail, mdp) VALUES (?, ?, ?)";
            var_dump($crea);
            $crea = Bdd::pdo()->prepare($crea);
            $crea->execute(array($identifiant, $mail, $mdp));
        }
        

        if($valid){
            $req = "SELECT * FROM comptes WHERE identifiant = :identifiant";
            $req = Bdd::pdo()->prepare($req);
            $req->execute(array(
            ':identifiant' => $identifiant
            ));
            $req = $req->fetch();
            $_SESSION['id'] = $req['id'];
            $_SESSION['identifiant'] = $req['identifiant'];
            $_SESSION['mail'] = $req['mail'];
            $_SESSION['mdp'] = $req['mdp'];
            redirection("index.php");
        }
    }else{
        $valid = false;
        $err_bdd = "erreur";
    }
}

?>