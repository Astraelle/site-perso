<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <?php 
    include "Connection/Bdd.php";
    include "Connection/verif.php";
    ?>
    <div id="seaKing">
        <p class="avertissement">Vous voici au plus profond de la mer... <br>Peut-être que vous ne devez pas être ici...</p>
        <form method="post">
            <label for="identifiant">Identifiant</label><br>
            <input type="text" name="identifiant" value="<?php if(isset($identifiant)){echo $identifiant;} ?>" id="identifiant" placeholder="Votre identifiant"><br>
            <?php if(isset($err_identifiant)){echo '<p>' . $err_identifiant . '</p>';} ?>
            <label for="mail">Mail</label><br>
            <input type="text" name="mail" id="mail" placeholder="Votre mail"><br>
            <?php if(isset($err_mail)){echo '<p>' . $err_mail . '</p>';} ?>
            <label for="mdp">Mot de passe</label><br>
            <input type="text" name="mdp" id="mdp" placeholder="Votre mot de passe"><br>
            <?php if(isset($err_mdp)){echo '<p>' . $err_mdp . '</p>';} ?>
            <button type="submit" name="submit">Se connecter</button>
        </form>
    </div>
</body>
</html>