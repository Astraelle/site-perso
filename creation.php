<?php include "header.php"; ?>

<div id="comptes">

    <?php 
    include "deepSea/seaKing/includes/functions.php";
    include "VerifForm/BddConnect.php";
    include "VerifForm/verifCreation.php";
    
    ?>
    <form method="post">
        <label for="identifiant">Identifiant</label><br>
        <input type="text" name="identifiant" value="<?php if(isset($identifiant)){echo $identifiant;} ?>" id="identifiant">
        <?php if(isset($err_identifiant)){echo '<p>' . $err_identifiant . '</p>';} ?>
        <br>
        <label for="mail">Mail</label><br>
        <input type="text" name="mail" value="<?php if(isset($mail)){echo $mail;} ?>" id="mail">
        <?php if(isset($err_mail)){echo '<p>' . $err_mail . '</p>';} ?>
        <br>
        <label for="mdp">Mot de passe</label><br>
        <input type="text" name="mdp" value="<?php if(isset($mdp)){echo $mdp;} ?>" id="mdp">
        <?php if(isset($err_mdp)){echo '<p>' . $err_mdp . '</p>';} ?>
        <br>
        <button type="submit" name="creation" id="creation">Créer son compte</button>
        <?php if(isset($err_bdd)){echo '<p>' . $err_bdd . '</p>';} ?>
    </form>
</div>

<?php include "footer.php"; ?>