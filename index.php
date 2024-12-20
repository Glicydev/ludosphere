<?php
require_once './util/elements.php'
?>
<!DOCTYPE html>
<!-- 
 Created by Ludovic, if you read this, you have to know that you can't just copy my work, thank you.
 -->
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site personnel</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/base.css">
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js" defer></script>
    <script src="./js/script.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"
        defer></script>
    <meta name="description" content="An website about myself">
    <link rel="shortcut icon" href="https://cdn.ludosphere.ch/img/logo.png" type="image/png" />
</head>

<body>
    <?= placeBase() ?>
    <main>
        <button id="goToTop" onclick="window.scrollTo({top: 0, behavior: 'smooth'});">
            <img src="https://cdn.ludosphere.ch/img/arrowTop.png" draggable="false"></img>
        </button>
        <div id="dessusBareFlotaison">
            <img src="https://cdn.ludosphere.ch/img/circle.png" alt="circleOne" class="circleOne" draggable="false">
            <div class="title">
                <h2 id="whoAmI">
                    <span>W</span><span>h</span><span>o</span>
                    <span>a</span><span>m</span>
                    <span>I</span>
                    <span class="inter">?</span>
                </h2>
            </div>
            <img src="https://cdn.ludosphere.ch/img/circle.png" alt="circleTwo" class="circleTwo" draggable="false">
            <div class="arrowContainer">
                <div class="squareForArrow" onclick="firstArrowScroll()">
                    <div class="arrow"></div>
                </div>
            </div>
        </div>
        <div class="dessous row-9 d-flex flex-column align-items-center">
            <div class="item col-5 presentation">
                <h3>Hello !</h3>
                <p>I am Ludovic, I'm actually 16 years old and I study in CFPT-I in Geneva.</p>
            </div>
            <div class="item col-5 imagesIn">
                <h4>There are the languages that i know&nbsp;:</h4>
                <div class="images">
                    <div class="row d-flex align-items-center">
                        <div class="imgContainer col">
                            <img src="https://cdn.ludosphere.ch/img/languages/csharp.png" alt="csharp" draggable="false">
                        </div>
                        <div class="imgContainer col">
                            <img src="https://cdn.ludosphere.ch/img/languages/javascript.png" alt="js" draggable="false">
                        </div>
                        <div class="imgContainer col">
                            <img src="https://cdn.ludosphere.ch/img/languages/html.png" alt="html" draggable="false">
                        </div>
                        <div class="imgContainer col">
                            <img src="https://cdn.ludosphere.ch/img/languages/css.png" alt="css" draggable="false">
                        </div>
                        <div class="imgContainer col">
                            <img src="https://cdn.ludosphere.ch/img/languages/php.png" alt="php" draggable="false">
                        </div>
                    </div>
                    <div class="row">
                        <div class="imgContainer col">
                            <img src="https://cdn.ludosphere.ch/img/languages/mysql.png" alt="mysql" draggable="false">
                        </div>
                        <div class="imgContainer col">
                            <img src="https://cdn.ludosphere.ch/img/languages/react.png" alt="react" draggable="false">
                        </div>
                        <div class="imgContainer col">
                            <img src="https://cdn.ludosphere.ch/img/languages/typescript.png" alt="typscript" draggable="false">
                        </div>
                        <div class="imgContainer col">
                            <img src="https://cdn.ludosphere.ch/img/languages/mariadb.png" alt="mariadb" draggable="false">
                        </div>
                        <div class="imgContainer col">
                            <img src="https://cdn.ludosphere.ch/img/languages/cpp.png" alt="cpp" draggable="false">
                        </div>
                        <div class="imgContainer col">
                            <img src="https://cdn.ludosphere.ch/img/languages/nodejs.png" alt="nodejs" draggable="false">
                        </div>
                    </div>
                </div>
            </div>
            <div class="item col-5 imagesIn">
                <h4>There are the technologies i use&nbsp;:</h4>
                <div class="images">
                    <div class="row d-flex align-items-center">
                        <div class="imgContainer col">
                            <img src="https://cdn.ludosphere.ch/img/tech/visualStudioCode.png" alt="vsCode" draggable="false">
                        </div>
                        <div class="imgContainer col">
                            <img src="https://cdn.ludosphere.ch/img/tech/visualStudio2022.png" alt="vs2022" draggable="false">
                        </div>
                        <div class="imgContainer col">
                            <img src="https://cdn.ludosphere.ch/img/tech/linux.png" alt="linux" draggable="false">
                        </div>
                        <div class="imgContainer col">
                            <img src="https://cdn.ludosphere.ch/img/tech/bash.png" alt="bash" draggable="false">
                        </div>
                        <div class="imgContainer col">
                            <img src="https://cdn.ludosphere.ch/img/tech/docker.png" alt="docker" draggable="false">
                        </div>
                        <div class="imgContainer col">
                            <img src="https://cdn.ludosphere.ch/img/tech/xampp.png" alt="xampp" draggable="false">
                        </div>
                    </div>
                </div>
            </div>
            <div class="projects row d-flex flex-wrap flex-column align-items-center">
                <h1 id="projectsTitle">Here you can see my projects :</h1>
                <div class="project col-4 projectFromLeft">
                    <div class="doing">Under construction</div>
                    <h3 class="projectTitle">Mellowize</h3>
                    <img src="https://cdn.ludosphere.ch/img/projets/mellowize.PNG" alt="Mellowize">
                    <div class="desc">An advanced website / application where you can hear & upload songs to calm, made
                        to have more experience in projects</div>
                    <div class="date">27-06-2024</div>
                </div>
                <div class="project col-4 projectFromRight projectWithLink">
                    <div class="finished">Finished</div>
                    <h3 class="projectTitle">Website about Servette FC</h3>
                    <img src="https://cdn.ludosphere.ch/img/projets/servette.PNG" alt="servette FC">
                    <div class="desc">An basic website about Servette FC that I made for a school project</div>
                    <div class="date">27-06-2024</div>
                    <a href="https://ludoit.ch/servette" target="_blank" class="goToPage">
                        <img draggable="false" src="https://cdn.ludosphere.ch/img/newPage.png" alt="">
                    </a>
                </div>
                <div class="project col-4 projectFromLeft">
                    <div class="finished">Finished</div>
                    <h3 class="projectTitle">Wirewolf game</h3>
                    <img src="https://cdn.ludosphere.ch/img/projets/servette.PNG" alt="wirewolf">
                    <div class="desc">An wirewolf game made in c# windows form, using classes for an school project.
                    </div>
                    <div class="date">24-06-2024</div>
                </div>
            </div>
            <div class="topGsap"></div>
            <div class="bottomGsap"></div>
            <div class="insideGsapMenu">
                <div id="h">More about me</div>
                <div class="p">- I'm Ludovic, im swiss (from Geneva and from Jura)</div>
                <div class="p">- My favourite part in programmation is frontend</div>
                <div class="p">- I'm actually in my 2nd grade</div>
                <div class="p">- I love Italian and Swiss food</div>
            </div>
            <div id="end">
                <div class="p text">That's all! i hope you liked my website! If you did, you can contact me down here &darr;</div>
                <div class="p endContact"><a href="contact.php">Contact me</a></div>
            </div>
        </div>
    </main>
    <footer>
        <p id="footerText"></p>
    </footer>
</body>

</html>