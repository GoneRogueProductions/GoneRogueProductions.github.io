<?php

$title = "Play Pacman on GoneRogue";
$description = "Relive the arcade nostalgia with Pacman. Navigate the maze, eat pellets, and evade ghosts in the ultimate quest for high scores. Join Pacman and gobble up the fun!";
$game = "Pacman";
$long_desc = "None yet!\nHi!";
$code = "<script defer src=\"https://unpkg.com/@ruffle-rs/ruffle@0.1.0-nightly.2023.6.3/ruffle.js\"></script>
        <div id='ruffle'></div>
        <script>
var h = window.innerHeight;
var w = (h/9) * 14;


var swfobject = {};

swfobject.embedSWF = function(url, cont, width, height){
    var ruffle = window.RufflePlayer.newest(),
        player = Object.assign(document.getElementById(cont).appendChild(ruffle.createPlayer()), {
            width: width,
            height: height,
            style: 'width: ' + 800 + 'px; height: ' + 600 + 'px',
        });
    
    player.load({ url: url });
}

swfobject.embedSWF('/flash/pacman.swf', 'ruffle', w, h);

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