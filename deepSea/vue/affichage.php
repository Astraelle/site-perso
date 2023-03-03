<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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

                t
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>