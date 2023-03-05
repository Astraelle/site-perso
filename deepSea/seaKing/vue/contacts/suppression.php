<body>
    <h1>Êtes vous sûr de vouloir supprimer le message n°<?= $contact->getId() ?> de la base de donnée ?</h1>

    <ul>
        <li>
            <strong>Nom : </strong> <?= $contact->getNom() ?>
        </li>
        <li>
            <strong>Prenom : </strong> <?= $contact->getPrenom() ?>
        </li>
        <li>
            <strong>Mail : </strong> <?= $contact->getMail() ?>
        </li>
        <li>
            <strong>Sujet : </strong> <?= $contact->getSujet() ?>
        </li>
        <li>
            <strong>Demande : </strong> <?= $contact->getDemande() ?>
        </li>
    </ul>

    <form method="post">
        <div>
            <button>Confirmer</button>
            <a href="<?= lien("contact") ?>">Annuler</a>
        </div>
    </form>
</body>
</html>