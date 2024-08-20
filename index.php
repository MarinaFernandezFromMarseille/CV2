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
    <main>
        <section class = "container">

        <section class = "left">
        <img src="./ASSETS/Pictures/unnamed.jpg" alt="Profile Picture">
        <article>
            <h1>Mes infos</h1>
            <p><img class="icon" src = "./ASSETS/Pictures/icons8-smartphone-24.png" alt = "smartphone Picture"> 07.52.05.65.62</p>
            <p><img class="icon" src = "./ASSETS/Pictures/icons8-courrier-24.png" alt = "mail Picture"> marinafernandezproc@gmail.com</p>
            <p><img class="icon" src = "./ASSETS/Pictures/icons8-position-24.png" alt = "adress Picture"> 33 allée Léon Gambetta</p>
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
            <h1>Mes projets</h1>
            <a href= "#">Projet1</a>
            <a href = "#">Projet2</a>
            <a href = "#">Projet3</a>
        </article>
        </section>

        <section class = "right">
            <article>
            <h2>Marina Fernandez</h2>
            <h3>Etudiante en Dev Web Mobile</h3>
            </article>
        <fieldset>
            <legend><img class = "icon" src = "./ASSETS/Pictures/icons8-point-d'interrogation-24.png" alt = "home Picture">A propos de moi </legend>
            <p>Je suis actuellement étudiante chez la Plateforme, en Dev Web Mobile. J'ai pour projet de continuer mon cursus le plus loin possible afin d'acquérir le plus de compétences possibles 
                dans le but d'obtenir un niveau ingénieur et ainsi pouvoir par la suite travailler soit en entreprise, soit à mon compte. </p>
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