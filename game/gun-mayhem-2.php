<?php

$title = "Play Gun Mayhem 2 on GoneRogue";
$description = "Unleash explosive mayhem in Gun Mayhem 2, the action-packed sequel. Arm yourself with even more weapons, navigate dynamic maps, and dominate opponents in intense multiplayer battles.";
$game = "Gun Mayhem 2";
$long_desc = "<b>Controls:</b> For Player 1, use your arrow keys to move and the Z key to shoot and the X key to lay a bomb. For Player 2, use the WASD keys to move and the T key to shoow and the Y key to lay a bomb.\nGun Mayhem 2 is an action-packed shooting game that pits players against AI opponents or friends in a chaotic battle arena.\n
With a wide array of weapons at their disposal, players must use strategic maneuvers and quick reflexes to blast their way to victory.\n
The game offers a variety of game modes and customizable options, ensuring endless hours of explosive fun.\n

In Gun Mayhem 2, players step into the shoes of skilled fighters who find themselves in a series of intense combat scenarios.\n
They must navigate dynamic arenas filled with platforms, hazards, and power-ups while engaging in fierce gunfights.\n
The fast-paced gameplay requires players to react swiftly to the ever-changing battlefield, making split-second decisions to outwit and outgun their opponents.\n

What sets Gun Mayhem 2 apart is its vast arsenal of weapons, ranging from traditional firearms to unconventional and zany armaments.\n
Players can wield shotguns, machine guns, rocket launchers, and even more exotic tools of destruction.\n
Each weapon has its own unique characteristics, allowing players to tailor their playstyle to their preferences.\n

The game offers a variety of game modes to keep the action fresh and exciting.\n
From the classic Deathmatch mode, where players strive to eliminate opponents and reach a specific kill count, to Last Man Standing, where survival is paramount, Gun Mayhem 2 provides diverse and thrilling challenges.\n
Players can also test their skills in the Campaign mode, battling through a series of increasingly difficult levels and encountering formidable boss fights along the way.\n

Gun Mayhem 2's multiplayer mode is a standout feature, enabling players to compete against their friends in intense local or online matches.\n
The ability to customize game settings, including map selection, item frequency, and player modifiers, adds depth and replayability.\n
The multiplayer battles are often a chaotic blend of explosive firepower, strategic positioning, and unexpected twists, creating a lively and engaging experience for all participants.\n

With its addictive gameplay, wide selection of weapons, and a variety of game modes, Gun Mayhem 2 delivers an adrenaline-pumping shooting experience that will keep players on the edge of their seats.\n
Prepare for intense battles, epic explosions, and non-stop action as you strive to emerge victorious in the wild and unpredictable world of Gun Mayhem 2.";
$code = "<style>.game-container { aspect-ratio: 4 / 2.7!important; }</style><script defer src=\"https://unpkg.com/@ruffle-rs/ruffle@0.1.0-nightly.2023.6.3/ruffle.js\"></script>
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