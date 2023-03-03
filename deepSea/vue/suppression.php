<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Êtes vous sûr de vouloir supprimer le message n°<?php $contact->getId() ?>de la base de donnée ?</h1>

    <ul>
        <li>
            <strong>Nom : </strong> <?php $contact->getNom() ?>
        </li>
        <li>
            <strong>Prenom : </strong> <?php $contact->getPrenom() ?>
        </li>
        <li>
            <strong>Mail : </strong> <?php $contact->getMail() ?>
        </li>
        <li>
            <strong>Sujet : </strong> <?php $contact->getSujet() ?>
        </li>
        <li>
            <strong>Demande : </strong> <?php $contact->getDemande() ?>
        </li>
    </ul>

    <form method="post">
        <div>
            <button>Confirmer</button>
            <a href="<?php lien("contact") ?>">Annuler</a>
        </div>
    </form>
</body>
</html>