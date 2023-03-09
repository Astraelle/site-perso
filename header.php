<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="icon" href="assets/img//favicon.webp" type="image/webp">
    <title>Charlie Pierre : Développeur web débutant</title>
</head>
<body>
    <?php
    
    include "VerifForm/session.php";

    ?>
    <header>
        <a href="./"><img src="assets/img/logo_perso.webp" alt="logo charlie pierre"></a>
        <div id="hamburger">
            <div id="content">
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
            </div>
            <button id="burger-button">&#9776;</button>
            <div id="sidebar">
                <div id="hamburger-sidebar-header">Menu</div>
                <div id="hamburger-sidebar-body"></div>
            </div>
            <div id="overlay"></div>
        </div>
    </header>