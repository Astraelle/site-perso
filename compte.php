<?php include "header.php"; ?>

<div id="comptes">

    <?php 
    include "deepSea/seaKing/includes/functions.php";
    if($_SESSION){
        session_destroy();
        redirection("./index.php");
    }
    include "VerifForm/BddConnect.php";
    include "VerifForm/verifCompte.php";
    
    ?>
    <form method="post">
        <label for="identifiant">Identifiant</label><br>
        <input type="text" name="identifiant" value="<?php if(isset($identifiant)){echo $identifiant;} ?>" id="identifiant">
        <?php if(isset($err_identifiant)){echo '<p>' .$err_identifiant . '</p>';} ?>
        <br>
        <label for="mail">Mail</label><br>
        <input type="text" name="mail" value="<?php if(isset($mail)){echo $mail;} ?>" id="mail">
        <?php if(isset($err_mail)){echo '<p>' .$err_mail . '</p>';} ?>
        <br>
        <label for="mdp">Mot de passe</label><br>
        <input type="text" name="mdp" value="<?php if(isset($mdp)){echo $mdp;} ?>" id="mdp">
        <?php if(isset($err_mdp)){echo '<p>' .$err_mdp . '</p>';} ?>
        <br>
        <button type="submit" name="connexion" id="connexion">Se connecter</button><br>
        <a id="link" href="creation.php">Vous n'avez pas de compte ? Cliquez ici pour en créer un maintenant</a>
    </form>
</div>

<?php include "footer.php"; ?>