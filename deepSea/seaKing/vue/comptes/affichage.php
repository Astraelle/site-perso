<table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Identifiant</th>
                <th>Mail</th>
                <th>Mot de passe</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($comptes as $compte): ?>
            <tr>
                <td>
                    <?= $compte->getId() ?>
                </td>
                <td>
                    <?= $compte->getIdentifiant() ?>
                </td>
                <td>
                    <?= $compte->getMail() ?>
                </td>
                <td>
                    <?= $compte->getMdp() ?>
                </td>
                <td>
                    <a href="<?= lien("compte", "delete", $compte->getId()) ?>">Supprimer</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>