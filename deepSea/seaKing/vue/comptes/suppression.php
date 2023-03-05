<body>
    <h1>Êtes vous sûr de vouloir supprimer le compte n°<?= $compte->getId() ?> de la base de donnée ?</h1>

    <ul>
        <li>
            <strong>Identifiant : </strong> <?= $compte->getIdentifiant() ?>
        </li>
        <li>
            <strong>Mail : </strong> <?= $compte->getMail() ?>
        </li>
        <li>
            <strong>Mot de passe : </strong> <?= $compte->getMdp() ?>
        </li>
    </ul>

    <form method="post">
        <div>
            <button>Confirmer</button>
            <a href="<?= lien("compte") ?>">Annuler</a>
        </div>
    </form>
</body>
</html>