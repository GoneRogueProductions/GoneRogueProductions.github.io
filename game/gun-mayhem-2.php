<?php

$title = "Play Gun Mayhem 2 on GoneRogue";
$description = "Unleash explosive mayhem in Gun Mayhem 2, the action-packed sequel. Arm yourself with even more weapons, navigate dynamic maps, and dominate opponents in intense multiplayer battles.";
$game = "Gun Mayhem 2";
$long_desc = "None yet!\nHi!";
$code = "<script defer src=\"https://unpkg.com/@ruffle-rs/ruffle@0.1.0-nightly.2023.6.3/ruffle.js\"></script>
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

swfobject.embedSWF('/flash/gun_mayhem_2.swf', 'ruffle', w, h);

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