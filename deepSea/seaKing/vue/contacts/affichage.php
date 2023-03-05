    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Mail</th>
                <th>Sujet</th>
                <th>Demande</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($contacts as $contact): ?>
            <tr>
                <td>
                    <?= $contact->getId() ?>
                </td>
                <td>
                    <?= $contact->getNom() ?>
                </td>
                <td>
                    <?= $contact->getPrenom() ?>
                </td>
                <td>
                    <?= $contact->getMail() ?>
                </td>
                <td>
                    <?= $contact->getSujet() ?>
                </td>
                <td>
                    <?= $contact->getDemande() ?>
                </td>

                <td>
                    <a href="<?= lien("contact", "delete", $contact->getId()) ?>">Supprimer</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
