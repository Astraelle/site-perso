<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.min.css">
    <title>Document</title>
</head>
<body>
    <?php
    
    include "VerifForm/session.php";

    ?>
    <header>
        <a href="index.php"><img src="assets/img/logo_perso.png" alt="logo charlie pierre"></a>
        <nav>
            <ul>
                <li>
                    <a href="perso.php">Page personelle</a>
                </li>
                <li>
                    <a href="projet.php">Page projets</a>
                </li>
                <li>
                    <a href="illustr.php">Page design</a>
                </li>
                <li>
                    <a href="contact.php">Me contacter</a>
                </li>

                <li>
                    <a href="compte.php"><?php if($_SESSION){echo 'Se déconnecter';}else{echo 'Se connecter';} ?></a>
                </li>
            </ul>
        </nav>
    </header>