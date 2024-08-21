<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./ASSETS/CSS/cv.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./ASSETS/CSS/bootstrap.css">
</head>

<body>

    <main>
        <section class="container">

            <section class="left">
                <img class="profilepic" src="./ASSETS/Pictures/unnamed.jpg" alt="Profile Picture">
                <article>
                    <h1>Mes infos</h1>
                    <p class="phone"><img class="icon" src="./ASSETS/Pictures/icons8-iphone14-pro.gif"
                            alt="smartphone Picture"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;07.52.05.65.62</p>
                    <p class="phone"><img class="icon" src="./ASSETS/Pictures/icons8-message.gif" alt="mail Picture">
                        &nbsp;&nbsp;&nbsp;&nbsp;marinafernandezproc@gmail.com</p>
                    <p class="phone"><img class="icon" src="./ASSETS/Pictures/icons8-position.gif" alt="adress Picture">
                        &nbsp;&nbsp;&nbsp;&nbsp;v33 allée Léon Gambetta</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;13001
                        Marseille</p>
                </article>

                <br>

                <article>
                    <h1>Mes competences</h1>
                    <div class="skill-container">
                        <div class="skill-bar" id="phpSkill">Php</div>
                    </div>
                    <div class="skill-container">
                        <div class="skill-bar" id="htmlSkill">Html</div>
                    </div>
                    <div class="skill-container">
                        <div class="skill-bar" id="cssSkill">Css</div>
                    </div>
                    <div class="skill-container">
                        <div class="skill-bar" id="jsSkill">jS</div>
                    </div>
                </article>

                <br>

                <article>
                    <h1>Mes liens</h1>
                    <a class="lien" href="https://marina-fernandez.students-laplateforme.io/">Mon Plesk</a>
                    <a class="lien" href="https://github.com/MarinaFernandezFromMarseille">Mon Github</a>
                    <br>

                    <article>
                        <h1>Mes hobbies</h1>
                        <p><img class="icon2" src="./ASSETS/Pictures/icons8-balance-3d.gif"
                                alt="design Picture">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Design</p>
                        <p>&nbsp;<img class="icon" src="./ASSETS/Pictures/icons8-illustrateur.gif"
                                alt="dessin Picture">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dessin</p>
                        <p><img class="icon" src="./ASSETS/Pictures/icons8-coeur-de-musique.gif"
                                alt="musique Picture">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Musique</p>
                    </article>

                    <article>
                        <h1>Mes formations</h1>
                        <ul>
                            <li>Dev Web Mobile - Plateforme (en cours)</li>
                            <li>Apple foundation program - Simplon (février 2024)</li>
                            <li>CAP Esthétique - Maestris(2014)</li>
                        </ul>

                        <br>

                    </article>
                    <h1>Langues</h1>
                    <ul>
                        <li>Anglais - niveau avancé</li>
                        <li>Italien - niveau courant</li>
                    </ul>
                </article>


            </section>

            <section class="right">
                <article>
                    <h2 class="pinyon-script-regular">Marina Fernandez</h2>
                    <h3>Etudiante en Dev Web Mobile</h3>
                </article>
                <fieldset>
                    <legend><img class="icon" src="./ASSETS/Pictures/icons8-point-d'interrogation-24.png"
                            alt="home Picture">A propos de moi </legend>
                    <p></p>Ayant eu des expériences dans la restauration et la vente auparavant, je suis actuellement en
                    reconversion étudiante chez la Plateforme, en Dev Web Mobile. J'ai pour projet de continuer mon
                    cursus afin d'acquérir le plus de compétences possibles
                    dans le but d'obtenir un niveau ingénieur et ainsi pouvoir par la suite travailler aussi bien en
                    entreprise qu'à mon compte. J'ai déja eu l'occasion d'imaginer et de concevoir une application
                    mobile IOS lors de mon Apple foundation program avec Simplon.</p>
                </fieldset>

                <br>

                <fieldset>
                    <legend><img class="icon" src="./ASSETS/Pictures/icons8-valise-24.png" alt="valise Picture">Mon
                        objectif</legend>
                    <p> Je recherche une alternance pour préparer le titre pro de CDA, pour faire suite à mon parcours
                        dans le dev web mobile. </p>
                </fieldset>

                <br>

                <fieldset>
                    <legend><img class="icon" src="./ASSETS/Pictures/icons8-liste-24.png" alt="list Picture">Mon
                        parcours professionnel</legend>
                    <fieldset class="job">
                        <p>Octobre 2022 – Marseille – Manpower interim -
                            agent de restauration collective • conditionnement • SODEXO
                        </p>
                    </fieldset>

                    <br>

                    <fieldset class="job">
                        <p>Novembre 2021 – Mars 2022 – Marseille -
                            Serveuse petit déjeuner • Best Western Hôtel
                        </p>
                    </fieldset>

                    <br>

                    <fieldset class="job">
                        <p>Novembre 2021 – Mars 2022 – Marseille
                            Serveuse petit déjeuner • Best Western Hôtel
                        </p>
                    </fieldset>

                    <br>

                    <fieldset class="job">
                        <p>Février 2019 – Mars 2019 – Marseille – Actual intérim
                            Employée de snack – Service et cuisine – Snack de la source</p>
                    </fieldset>

                    <br>

                    <fieldset class="job">
                        <p>Août 2018 – Octobre 2018 – Marseille – Manpower intérim
                            Missions ponctuelles de serveuse, plonge, et restauration
                            collective chez sodexo</p>
                    </fieldset>

                    <br>

                    <fieldset class="job">
                        <p>Mars 2018 – Juillet 2018 – Marignane (Airbus ) – Actual intérim
                            Employée de restauration collective – ELIOR
                            Vendeuse en boulangerie – PAUL Airbus</p>
                    </fieldset>


                </fieldset>

                <p class="myButton" id="myButton" onclick="handlePrint()">Imprimer</p>

                <script>
                    function handlePrint() {
                        window.print();
                        var button = document.getElementById("myButton");
                        button.classList.toggle("clicked");
                    }
                </script>
            </section>



        </section>



    </main>

    <script>
        // Function to fill a progress bar
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