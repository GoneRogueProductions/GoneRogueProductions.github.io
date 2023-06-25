<?php

$title = "Play Pacman on GoneRogue";
$description = "Relive the arcade nostalgia with Pacman. Navigate the maze, eat pellets, and evade ghosts in the ultimate quest for high scores. Join Pacman and gobble up the fun!";
$game = "Pacman";
$long_desc = "<b>Controls:</b> Use your arrow keys to move your character.

Pac-Man is a legendary and iconic arcade game that has captivated players since its release in 1980. Developed by Namco, Pac-Man became a cultural phenomenon and one of the most recognizable video games of all time. With its simple yet addictive gameplay and memorable characters, Pac-Man has left an indelible mark on the gaming industry.

In Pac-Man, you control a yellow, circular character named Pac-Man, whose goal is to navigate a maze filled with pellets while avoiding colorful ghosts. The objective is to eat all the pellets in the maze to advance to the next level. However, the ghosts, named Blinky, Pinky, Inky, and Clyde, relentlessly pursue Pac-Man in an attempt to catch and end his journey.

The gameplay mechanics of Pac-Man are straightforward. You maneuver Pac-Man through the maze using a joystick or arrow keys, collecting pellets along the way. Eating larger, flashing pellets called power pellets allows Pac-Man to temporarily turn the tables on the ghosts, allowing him to chase and devour them for extra points. However, this power-up is only temporary, and the ghosts will eventually regenerate and resume their pursuit.

As the levels progress, the mazes become more complex, with additional obstacles and power-ups scattered throughout. Bonus fruits or items may appear for Pac-Man to collect, offering extra points and variety to the gameplay. The game also features different patterns and behaviors for the ghosts, adding strategic elements and requiring careful planning to outwit them.

Pac-Man's iconic visuals and sound effects have become synonymous with the game itself. The maze, featuring its distinct yellow color and intricate pathways, is instantly recognizable. The catchy background music and the sound effects accompanying Pac-Man's movement and interactions further enhance the game's charm.

Pac-Man's success has led to numerous sequels, spin-offs, and adaptations across various gaming platforms and media. The game's enduring popularity is a testament to its addictive gameplay, timeless design, and universal appeal. Pac-Man's legacy extends beyond the arcade, influencing pop culture and inspiring generations of game developers.

Whether you're a fan of classic arcade games or a newcomer to the world of Pac-Man, the game offers a nostalgic and enjoyable experience. Its simple yet challenging gameplay, memorable characters, and timeless design continue to captivate players even decades after its initial release. So, grab some power pellets, evade the ghosts, and immerse yourself in the timeless fun of Pac-Man!";
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