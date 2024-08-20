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
        <img src="./ASSETS/Pictures/unnamed.jpg" alt="Profile Picture">
        <article>
            <h1>Mes infos</h1>
            <p>07.52.05.65.62</p>
            <p>marinafernandezproc@gmail.com</p>
            <p>33 allée Léon Gambetta</p>
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