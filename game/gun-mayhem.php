<?php

$title = "Play Gun Mayhem on GoneRogue";
$description = "Arm yourself and dominate the battlefield in Gun Mayhem, the explosive multiplayer shooter. Outgun your opponents, strategize your moves, and claim victory in the ultimate gunfight.";
$game = "Gun Mayhem";
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

swfobject.embedSWF('/flash/gun_mayhem.swf', 'ruffle', w, h);

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