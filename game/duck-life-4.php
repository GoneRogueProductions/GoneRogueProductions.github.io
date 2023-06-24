<?php

$title = "Play Duck Life 4 on GoneRogue";
$description = "Hatch your very own duck and tain it to be MASTER DUCK in Duck Life 4! Do training and race against other ducks to prepare yourself for the competition.";
$game = "Duck Life 4";
$long_desc = "None yet!\nHi!";
$code = "<style>.game-container {aspect-ratio:14/9!important;}</style><script defer src=\"https://unpkg.com/@ruffle-rs/ruffle@0.1.0-nightly.2023.6.3/ruffle.js\"></script>
        <div id='ruffle'></div>
        <script defer>
var h = window.innerHeight;
var w = (h/9) * 14;


var swfobject = {};
window.RufflePlayer.config = {
    \"autoplay\": \"auto\",
    \"splashScreen\": false,
};

swfobject.embedSWF = function(url, cont, width, height){
    var ruffle = window.RufflePlayer.newest();
        player = Object.assign(document.getElementById(cont).appendChild(ruffle.createPlayer()), {
            width: width,
            height: height,
            style: 'width: 100%; height: 100%; border-radius: var(--game-border-radius);'
        });
    
    player.load({ url: url });
}

swfobject.embedSWF('/flash/DuckLife4.swf', 'ruffle', w, h);

    a = document.querySelector(\"ruffle-player\");
    b = document.querySelector('.game');
    function updateCanvas() {
        a.style.width = b.offsetWidth.toString() + \"px\";
        a.style.height = b.offsetHeight.toString() + \"px\";
    }
    setInterval(updateCanvas, 500);
        </script>";

require './game.php';

?>