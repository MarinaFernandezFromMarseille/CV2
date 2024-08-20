<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./ASSETS/CSS/cv.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./ASSETS/CSS/bootstrap.css">
    <title>CV Fernandez Marina</title>
</head>
<body>
<div id="animated-text"></div>
<script src="script.js"></script>
    <main>
        <section class = "container">

        <section class = "left">
        <img src="./ASSETS/Pictures/unnamed.jpg" alt="Profile Picture">
        <article>
            <h1>Mes infos</h1>
            <p class = "phone"><img class="icon" src = "./ASSETS/Pictures/icons8-smartphone-24.png" alt = "smartphone Picture"> 07.52.05.65.62</p>
            <p class = "phone"><img class="icon" src = "./ASSETS/Pictures/icons8-courrier-24.png" alt = "mail Picture"> marinafernandezproc@gmail.com</p>
            <p class = "phone"><img class="icon" src = "./ASSETS/Pictures/icons8-position-24.png" alt = "adress Picture"> 33 allée Léon Gambetta</p>
            <p>13001 Marseille</p>
        </article>

        <br>

        <article>
            <h1>Mes competences</h1>
            <div class="skill-container">
                <div class="skill-bar" id="phpSkill">Php:50%</div>
            </div>
            <div class="skill-container">
                <div class="skill-bar" id="htmlSkill">Html:80%</div>
            </div>
            <div class="skill-container">
                <div class="skill-bar" id="cssSkill">Css:50%</div>
            </div>
            <div class="skill-container">
                <div class="skill-bar" id="jsSkill">js:10%</div>
            </div>
        </article>

        <br>

        <article>
            <h1>Mes liens</h1>
            <a class = "lien" href= "https://marina-fernandez.students-laplateforme.io/">Mon Plesk</a>
            <a class = "lien" href = "https://github.com/MarinaFernandezFromMarseille">Mon Github</a>
        <br>

        <article>
            <h1>Mes hobbies</h1>
            <ul>
                <li>Design</li>
                <li>Dessin</li>
                <li>Musique</li>
                <li>morbide stuff</li>
            </ul>
        </section>

        <section class = "right">
            <article>
            <h2>Marina Fernandez</h2>
            <h3>Etudiante en Dev Web Mobile</h3>
            </article>
        <fieldset>
            <legend><img class = "icon" src = "./ASSETS/Pictures/icons8-point-d'interrogation-24.png" alt = "home Picture">A propos de moi </legend>
            <p>n'ayant eu des expériences que dans la restauration et la vente auparavant, je suis actuellement étudiante chez la Plateforme, en Dev Web Mobile. J'ai pour projet de continuer mon cursus le plus loin possible afin d'acquérir le plus de compétences possibles 
                dans le but d'obtenir un niveau ingénieur et ainsi pouvoir par la suite travailler soit en entreprise, soit à mon compte. </p>
            </fieldset>

            <br>

            <fieldset>
            <legend><img class = "icon" src = "./ASSETS/Pictures/icons8-valise-24.png" alt = "valise Picture">Ce que je recherche</legend>
            <p> Je recherche une alternance pour préparer le titre pro de CDA, pour faire suite à mon parcours dans le dev web mobile. </p>
            </fieldset>

            <br>

            <fieldset>
            <legend><img class = "icon" src = "./ASSETS/Pictures/icons8-liste-24.png" alt = "list Picture">Mon parcours professionnel</legend>
            <fieldset class = "job">
            <p>Octobre 2022 – Marseille – Manpower interim
            gent de restauration collective • conditionnement • SODEXO
        </p>
        </fieldset>

        <br>

        <fieldset class = "job">
            <p>Novembre 2021 – Mars 2022 – Marseille
Serveuse petit déjeuner • Best Western Hôtel
</p>
        </fieldset>

        <br>

        <fieldset class = "job">
            <p>Novembre 2021 – Mars 2022 – Marseille
Serveuse petit déjeuner • Best Western Hôtel
</p>
        </fieldset>

        <br>

        <fieldset class = "job">
            <p>Février 2019 – Mars 2019 – Marseille – Actual intérim
            Employée de snack – Service et cuisine – Snack de la source</p>
        </fieldset>

        <br>

        <fieldset class = "job">
            <p>Août 2018 – Octobre 2018 – Marseille – Manpower intérim
Missions ponctuelles de serveuse, plonge, et restauration 
collective chez sodexo</p>
        </fieldset>

        <br>

        <fieldset class = "job">
            <p>Mars 2018 – Juillet 2018 – Marignane (Airbus ) – Actual intérim
Employée de restauration collective – ELIOR 
Vendeuse en boulangerie – PAUL Airbus</p>
        </fieldset>

 
            </fieldset>
           
        </section>

</section>

    </main>
    <footer>
    </footer>

    <script>
        function fillProgressBar(skillId, percentage, skill) {
            var elem = document.getElementById(skillId);
            var width = 0;
            var id = setInterval(frame, 10);
            function frame() {
                if (width >= percentage) {
                    clearInterval(id);
                } else {
                    width++;
                    elem.style.width = width + '%';
                    elem.innerHTML = skill + width + '%';
                }
            }
        }

        // Example usage: Fill the PHP skill bar to 50%
        fillProgressBar('phpSkill', 50, 'PHP:');
        fillProgressBar('htmlSkill', 80, 'HTML:');
        fillProgressBar('cssSkill', 50, 'CSS:');
        fillProgressBar('jsSkill', 10, 'JS:');
    </script>
</body>
</html>