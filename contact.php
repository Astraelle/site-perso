<?php include "header.php"; ?>

<div id="contact">

    <?php 
    
    include "VerifForm/BddConnect.php";
    include "VerifForm/verifContact.php";

    ?>
    <p class="intro"> Vous voulez me laisser une impression ou me demander quelque chose ?<br>n'hésitez pas à me le faire savoir !</p>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="nom">Nom</label><br>
        <input type="text" name="nom" value="<?php if(isset($nom)){echo $nom;} ?>" id="nom">
        <?php if(isset($err_nom)){echo '<p>' . $err_nom . '</p>';} ?>
        <br>
        <label for="prenom">Prenom</label><br>
        <input type="text" name="prenom" value="<?php if(isset($prenom)){echo $prenom;} ?>" id="prenom">
        <?php if(isset($err_prenom)){echo '<p>' . $err_prenom . '</p>';} ?>
        <br>
        <label for="mail">Mail</label><br>
        <input type="text" name="mail" value="<?php if(isset($mail)){echo $mail;} ?>" id="mail">
        <?php if(isset($err_mail)){echo '<p>' . $err_mail . '</p>';} ?>
        <br>
        <label for="sujet">Sujet</label><br>
        <input type="text" name="sujet" value="<?php if(isset($sujet)){echo $sujet;} ?>" id="sujet">
        <?php if(isset($err_sujet)){echo '<p>' . $err_sujet . '</p>';} ?>
        <br>
        <label for="demande">Demande</label><br>
        <textarea name="demande" id="demande" cols="30" rows="10"></textarea>
        <?php if(isset($err_demande)){echo '<p>' . $err_demande . '</p>';} ?>
        <?php if(isset($err_bdd)){echo '<p>' . $err_bdd . '</p>';} ?>
        <br>
        <button type="submit" name="envoi" id="envoi">Envoyer la demande</button>
    </form>
</div>

<?php include "footer.php"; ?>