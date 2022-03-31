<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Romain VITALIS Développeur Web à Marseille">

    <link href="css/accueil.css" rel="stylesheet" type="text/css">
    <title>Développeur web</title>
</head>
<body class="parallax">
    <header class="header">
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <ul class="menu">
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#apropos">A propos</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </header>
    <main>
        <div id="intro">
            <h1>Romain VITALIS <br>
            Développeur Web à Marseille</h1>
            <br>
            <p>
                Découvrez mon Portfolio <a href="#portfolio">ici</a> <br>
                Recherche d'alternance pour Septembre 2022, <br>
                contactez-moi <a href="#contact">ici</a>
            </p>
        </div>

        <div id="portfolio">
            <h2>portfolio</h2>
            <br>
            <section id="projets">
                <!-- Projets réalisés 6 max -->
                <div class="projet">
                    <img src="images/projet_boutique.JPG"
                            alt="Projet Boutique en ligne, réalisé en php par Romain VITALIS">
                    <p>Boutique en ligne <br>
                    Projet PHP</p>
                </div>
                <div class="projet">
                    <img src="images/blog.jpg"
                         alt="Projet BLOG, réalisé en PHP par Romain VITALIS">
                    <p>BLOG <br>
                        PHP</p>
                </div>
                <div class="projet">
                    <img src="images/projet_roombooking.JPG"
                         alt="Projet module de connexion , réalisé en php par Romain VITALIS">
                    <p>Module de connexion<br>
                        Projet PHP</p><br>
                </div>
                <div class="projet">
                    <img src="images/projet_appfavorite.JPG"
                         alt="Projet BTP, réalisé en HTML/CSS par Romain VITALIS">
                    <p>BTP<br>
                        Projet HTML/CSS</p>
                </div>
                <div class="projet">
                    <img src="images/villemarseille.jpg"
                         alt="Projet VILLE de Marseille.">
                    <p>VILLE de Marseille<br>
                        Projet HTML/CSS</p>
                </div>
               
                <div class="projet"><img><p style="color: white">Projets JavaScript en cours d'apprentissage</p></div>
                <a href="https://github.com/romain-vitalis?tab=repositories">GITHUB</a>
            </section>
        </div>

        <div id="apropos">
            <h2>Qui suis-je ?</h2>
            <br>
            <section id="moi">
                <p>Je m'appelle Romain VITALIS,j'ai 24 ans  et je vis à Marseille.
                    je suis actuellement en 1ère année de formation  à l'école
                    <a href="https://laplateforme.io/">La Plateforme_</a> au sein de la <a href="https://laplateforme.io/coding-school/">Coding School</a>.

                    <br>Je suis à la recherche d'une alternance pour septembre 2022  pour la deuxième année.
                </p>
                <br>
            </section>

            <section id="competences">
                <p>Cette année de formation m'a permis de développer les bases du développement : <br>
                    HTML/CSS dans un premier temps, avec des projets tels que BTP  ou VILLE de Marseille que vous pouvez voir dans mon portfolio. <br>
                    PHP /MySQL, pour la partie back-end, avec des projet tel que Boutique en ligne. <br>
                    Nous avons aussi travaillé avec Bootstrap, Materialize,Github. <br>
                    Js/ Jquery et sass pour la partie front-end, avec des projet tel que mon portfolio, d'autres projets arrivent, cette unit de formatin est toujours en cours :)
                </p>
                <section id="skillsimg">
                    <img src="images/logo_html.png" alt="html logo">
                    <img src="images/logo_css.png" alt="css logo">
                    <img src="images/logo_php.png" alt="php logo">
                    <img src="images/logo_sql.png" alt="sql logo">
                    <img src="images/logo_javascript.png" alt="javascript logo">
                </section>
            </section>
        </div>

        <div id="contact">
            <h2>Me contacter : </h2>
            <p>par email : <a href="mailto:romain.vitalis@laplateforme.io">romain.vitalis@laplateforme.io</a>
            </p>
        </div>

    </main>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>