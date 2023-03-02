<?php include "header.php"; ?>

<div id="contact">
    <form action="" method="post" enctype="multipart/form-data">
        <label for="nom">Nom</label><br>
        <input type="text" name="nom" id="nom">
        <br>
        <label for="prenom">Prenom</label><br>
        <input type="text" name="prenom" id="prenom">
        <br>
        <label for="mail">Mail</label><br>
        <input type="text" name="mail" id="mail">
        <br>
        <label for="sujet">Sujet</label><br>
        <input type="text" name="sujet" id="sujet">
        <br>
        <label for="demande">Demande</label><br>
        <textarea name="demande" id="demande" cols="30" rows="10"></textarea>
        <br>
        <button type="submit">Envoyer</button>
    </form>
</div>

<?php include "footer.php"; ?>