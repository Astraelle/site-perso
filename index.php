<?php include "header.php";?>
    <div id="home">
        <img src="assets/img/hero.jpg" alt="image d'accueil">
        <p class="homeIntro"><?php if($_SESSION){echo 'Bienvenue ' . $_SESSION['identifiant'] . '<br>sur le site de <br>Charlie PIERRE';}else{echo 'Charlie PIERRE <br>Développeur web débutant';}?></p>
    </div>
    <main id="homeSea">
        <div id="prez">
            <div class="description">
                <h2>Qui suis-je ?</h2>
                <hr>
                <p><b>Bonjour !</b><br> Je m'appelle Charlie et je suis actuellement <br> première année de développement web <br>à Digital Campus.</p>
                <a href="perso.php">Page perso</a>
            </div>
            <img src="assets/img/charlie_pierre.jpg" alt="Image de Charlie PIERRE">
        </div>

        <div id="projet">
        <img src="assets/img/mario_pixel.png" alt="image d'un projet">
            <div class="dev">
                <h2>Mes projets</h2>
                <hr>
                <p>Durant mes années d'apprentissage, <br>j'ai appris à utiliser de nombreux langages de programmation, <br>qui m'ont permit de réaliser différents projets.</p>
                <a href="projet.php">Page perso</a>
            </div>
        </div>

        <div id="design">
            <div class="illustr">
                <h2>Mes design</h2>
                <hr>
                <p>Mes capacités ne se résument pas uniquement au développement web ! J'ai aussi appris à utiliser des logiciels de design.</p>
                <a href="illustr.php">Page perso</a>
            </div>
            <img src="assets/img/projet_illustr.jpg" alt="">
        </div>
    </main>

<?php include "footer.php";?>