<?php

if ($code == "" || $title == "") {
    header("Location: /");
}
$link = htmlspecialchars(preg_replace('/^(http(s)?)?:?\/*/u','',trim(strtok($_SERVER["REQUEST_URI"], '?'))), 11,'UTF-8',true);

echo '
<!DOCTYPE html>
<html>

<head>
    <title>'.$title.'</title>

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="white">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4739296020319725"
        crossorigin="anonymous"></script>
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">

    <meta charset="utf-8">
    <link rel="canonical" href="https://gonerogue.ml/'.$link.'">
    <meta name="description"
        content="'.$description.'">
    <meta name="keywords" content="gonerogue, gonerogue games, gonerogue productions, games, unblocked">
    <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta itemprop="name" content="GoneRogue Games">
    <meta itemprop="description"
        content="'.$description.'">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Social Media -->
    <meta name="og:description"
        content="'.$description.' Play in your browser.">
    <meta name="og:title" content="GoneRogue Games: the no-ads fullscreen games site">
    <meta name="og:type" content="website">
    <meta name="og:image" content="/social.png">
    <meta name="og:url" content="https://gonerogue.ml">
    <meta name="og:image:alt" content="GoneRogue\'s social cover, showing some of our games">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="/social.png">


    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="apple-mobile-web-app-title" content="GoneRogue">
    <meta name="application-name" content="GoneRogue">
    <meta name="msapplication-TileColor" content="#ffc40d">
    <meta name="theme-color" content="#ffffff">
    <link rel="preload" href="/bootstrap.min.css" as="style" onload="this.onload=null;this.rel=\'stylesheet\'">
    <noscript><link rel="stylesheet" href="/bootstrap.min.css"></noscript>
    <link rel="preload" href="/style.min.css" as="style" onload="this.onload=null;this.rel=\'stylesheet\'">
    <noscript><link rel="stylesheet" href="/style.min.css"></noscript>
    <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js"></script>
    <script defer src="/fontawesome.js" crossorigin="anonymous"></script>
   

    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "BreadcrumbList",
          "itemListElement": [{
            "@type": "ListItem",
            "position": 1,
            "name": "Games",
            "item": "https://gonerogue.ml"
          },
          {
            "@type": "ListItem",
            "position": 2,
            "name": "'.$game.'"
          },
          ]
        }
    </script>
</head>

<body id="darkTog">
    <div class="navbar" id="darkTog1">
        <h2 onclick="window.location.href=\'/\'" style="cursor: pointer; font-size: 2em;"><img src="https://gonerogue.ml/apple-touch-icon.png" style="border-radius: 10px; height: 75px;"
                alt="GoneRogue Favicon"> Gаmes</h2>
        <div class="right-cont">
            <div class="b-dark" id="b-dark" onclick="switchTheme();">
                <i class="fa-solid fa-moon"></i>
            </div>
            <div class="b-light" id="b-light" onclick="switchTheme();">
                <i class="fa-solid fa-sun-bright"></i>
            </div>
            <div class="search-container">
                <div class="search" id="search">
                    <i class="fa-solid fa-magnifying-glass search-icon"></i>
                    <input onkeyup="myFunction()" class="search-input" onclick="showContext()" type="text"
                        id="searchBox" placeholder="Search...">
                </div>
                <ul id="gamesList">
                    <li><a href="#">Run</a></li>
                    <li><a href="#">Slope</a></li>
                    <li><a href="#">Geometry Dash</a></li>
                    <li><a href="#">Learn To Fly</a></li>
                    <li><a href="#">Minecraft (1.5.2)</a> <a href="#">(1.8.8)</a></li>
                    <li><a href="#">Car Drawing Gаme</a></li>
                    <li><a href="#">Table Tanks</a></li>
                    <li><a href="#">Duck Life (v1)</a> <a href="#">(v2)</a> <a href="#">(v3)</a> <a href="#">(v4)</a>
                    </li>
                    <li><a href="#">Gun Mayhem (v1)</a> <a href="#">(v2)</a></li>
                    <li><a href="#">Papa\'s Pizzeria</a></li>
                    <li><a href="#">BitLife</a></li>
                    <li><a href="#">Pacman</a></li>
                    <li><a href="#">Flappy Bird</a></li>
                    <li><a href="#">Cookie Clicker</a></li>
                    <li><a href="#">Edge Surf</a></li>
                    <li><a href="#">MotoX3M</a></li>
                    <li><a href="#">Soccer Skills (Euro Cup \'21)</a></li>
                    <li><a href="#">Choppy Orc</a></li>
                </ul>
            </div>

        </div>
    </div>
    <style>
        .container {
            text-align: left;
        }
        .game-container {
            width: 100%;
            height: auto;
            max-width: 800px;
            aspect-ratio: 4 / 3;
            background: black;
            position: relative;
            border-radius: 1rem;
        }
        .loading-indicator {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            height: 100%;
            flex-direction: column;
            width: 100%;
            position: relative;
        }

        .loader {
            width: 48px;
            height: 48px;
            display: inline-block;
            position: relative;
        }
        .loader::after,
        .loader::before {
            content: \'\';  
            box-sizing: border-box;
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: #FFF;
            position: absolute;
            left: 0;
            top: 0;
            animation: animloader 2s linear infinite;
        }
        .loader::after {
            animation-delay: 1s;
            opacity: 0;
        }

        @keyframes animloader {
            0% {
                transform: scale(0);
                opacity: 1;
            }
            100% {
                transform: scale(1);
                opacity: 0;
            }
        }
        
        html {
            --game-border-radius: 1rem;
        }
    
        .full-screen {
            aspect-ratio: 1 / 1;
            background: white;
            color: rgb(24, 49, 83);
            position: absolute;
            bottom: 10px;
            right: 10px;
            border: 0;
            border-radius: 10px;
            height: 30px;
            width: 30px;
        }
        .full-screen:hover {
            filter: brightness(0.8);
        }
        .game {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: var(--game-border-radius);
        }
        .game iframe {
            border-radius: var(--game-border-radius);
        }
        .game * {
            height: 100%;
            width: 100%;
        }
        .description {
            background: rgba(255, 255, 255, 0.2);
            position: relative;
            border-radius: 1rem;
            padding: 25px;
            margin-top: 25px;
            max-width: 800px;
        }
    </style>
    <div class="container">
        <h1 id="title">'.$game.'</h1>
        <p id="description">Play '.$game.' on GoneRogue.</p>
        <div class="game-container" id="game-container">
            <div class="loading-indicator">
                <span class="loader"></span>
                <span style="margin-top: 25px; color: white;">Loading your gаme...</span>
            </div>
            <div class="game">
                '.$code.'
            </div>
            <button class="full-screen" aria-label="Enter fullscreen" onclick="fullScreen()">
                <i class="fa-solid fa-expand"></i>
            </button>
        </div>
        <div class="description">
            <h5>DESCRIPTION</h5>
            <p>'.nl2br($long_desc).'</p>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted" id="footer"
        style="padding-top: 25px; margin-top: 25px; ">
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            GoneRogue Gаmes
                        </h6>
                        <p>
                            <em>Hello from the other sideeeeeee......</em><br>
                            Welcome to the bottom of the page. There are some links in the bottom left that you might like to read. Have a great time! (P.S: we\'re still working on requesting gаmes.)
                        </p>
                    </div>
                    </div>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->

        </section>
        <!-- Section: Links  -->
        <a href="/termsandconditions">T&Cs</a>
        <a href="/about-us">About Us</a>
    </footer>
    <!-- Footer -->
    <script defer src="/main.min.js"></script>
    <script defer>

        console.log("%c WARNING!","font-size: 5em; color: red;");
        console.log("%c Do not paste ANYTHING inside here. They could steal your account, and furthermore, blacklisted modifications (aka cheats) are NOT ALLOWED. Using them may get you a ban from this website. Proceed cautiously!", "font-size: large;");
        let elem = document.getElementById("game-container");
        let inFS = false;
        /* else {
            window.location.href = "/";
        } */

        // Fullscreen stuff
        function fullScreen() {
            if (document.fullscreenElement) {
                console.log("hi");
                inFS = true;
            }
            if (document.webkitFullscreenElement) {
                console.log("hi");
                inFS = true;
            }
            if (document.msFullscreenElement) {
                inFS = true;
            }

            if (inFS === false) {
                if (elem.requestFullscreen) {
                    elem.requestFullscreen();
                } else if (elem.webkitRequestFullscreen) { /* Safari */
                    elem.webkitRequestFullscreen();
                } else if (elem.msRequestFullscreen) { /* IE11 */
                    elem.msRequestFullscreen();
                }
                $(".full-screen").html(\'<i class="fa-solid fa-compress"></i>\');
                $("html").css("--game-border-radius", "0");
            } else {
                console.log("hi1");
                if (document.exitFullscreen) {
                    document.exitFullscreen();
                }
                else if (document.webkitCancelFullScreen) {
                    document.webkitCancelFullScreen();
                }
                else if (document.msExitFullscreen) {
                    document.msExitFullscreen();
                }
                
                $(".full-screen").html(\'<i class="fa-solid fa-expand"></i>\');
                $("html").css("--game-border-radius", "1rem");
                inFS = false;
            }
        }

        
    </script>
</body>

</html>

';

/*      if (query == "Choppy Orc") {
            $(\'meta[name="description"]\').attr("content", "");
            $(".game").append("<iframe src=\'./choppy-orc/index.html\' title=\'Choppy Orc\' frameborder=\'0\' style=\'border: none;\'></iframe>");
            $(".game-container").css("aspect-ratio","16 / 9");
        }
        else if (query == "Slope") {
            $(\'meta[name="description"]\').attr("content", "");
            $(".game").append("");
            // $(".game-container").css("aspect-ratio", "16 / 9");
        }
        else if (query == "Run") {
            $(\'meta[name="description"]\').attr("content", "Can you run to the end? In Run, dodge obstacles, collect power-ups, and go the distance.");
            // ub code here
        }
        else if (query == "Geometry Dash") {
            $(\'meta[name="description"]\').attr("content", "");
            $(".game").append("<iframe src=\'https://gd.gonerogue.ml\' title=\'Geometry Dash\' frameborder=\'0\' style=\'border: none;\'></iframe>");
        }
        else if (query == "Gun Mayhem 2") {
            $(\'meta[name="description"]\').attr("content", "");
            $(".game").append("<iframe src='./gun_mayhem_2.html' title='Geometry Dash' frameborder='0' style='border: none;'></iframe>");
        }
        else if (query == "Gun Mayhem") {
            $('meta[name="description"]').attr("content", "");
            $(".game").append("<iframe src='./gun_mayhem.html' title='Geometry Dash' frameborder='0' style='border: none;'></iframe>");
        }
        else if (query == "Learn To Fly") {
            $('meta[name="description"]').attr("content", "");
            $(".game").append("<iframe src='./learn-to-fly.html' title='Geometry Dash' frameborder='0' style='border: none;'></iframe>");
        }
        else if (query == "Pacman") {
            $('meta[name="description"]').attr("content", "");
            $(".game").append("<iframe src='./pacman.html' title='Geometry Dash' frameborder='0' style='border: none;'></iframe>");
        }
        else if (query == "Soccer Skills") {
            $('meta[name="description"]').attr("content", "Showcase your finesse and precision in Soccer Skills, the exciting soccer game. Dribble, pass, and score goals with expert technique to become a soccer legend.");
            $(".game").append("<iframe src='./soccer.html' title='Geometry Dash' frameborder='0' style='border: none;'></iframe>");
        }
        else {
            $('meta[name="description"]').attr("content", "Embark on an unforgettable gaming adventure at GoneRogue. Immerse yourself in a captivating and ad-free gaming experience with our collection of exciting and diverse games.");
        } 
*/

/* <li><a href="#">Run</a></li>
                        <li><a href="#">Slope</a></li>
                        <li><a href="#">Geometry Dash</a></li>
                        <li><a href="#">Learn To Fly</a></li>
                        <li><a href="#">Minecraft (1.5.2)</a> <a href="#">(1.8.8)</a></li>
                        <li><a href="#">Car Drawing Gаme</a></li>
                        <li><a href="#">Table Tanks</a></li>
                        <li><a href="#">Duck Life (v1)</a> <a href="#">(v2)</a> <a href="#">(v3)</a> <a href="#">(v4)</a></li>
                        <li><a href="#">Gun Mayhem (v1)</a> <a href="#">(v2)</a></li>
                        <li><a href="#">Papa's Pizzeria</a></li>
                        <li><a href="#">BitLife</a></li>
                        <li><a href="#">Pacman</a></li>
                        <li><a href="#">Flappy Bird</a></li>
                        <li><a href="#">Cookie Clicker</a></li>
                        <li><a href="#">Edge Surf</a></li>
                        <li><a href="#">MotoX3M</a></li>
                        <li><a href="#">Soccer Skills (Euro Cup '21)</a></li>
                        <li><a href="#">Choppy Orc</a></li>

*/

?>