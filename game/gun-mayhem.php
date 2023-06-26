<?php
session_start();
$_SESSION['game'] = ["Gun Mayhem","/game/gun-mayhem"];

$title = "Play Gun Mayhem on GoneRogue";
$description = "Arm yourself and dominate the battlefield in Gun Mayhem, the explosive multiplayer shooter. Outgun your opponents, strategize your moves, and claim victory in the ultimate gunfight.";
$game = "Gun Mayhem";
$long_desc = "<b>Controls:</b> For Player 1, use your arrow keys to guide the player and use [ to shoot and ] to lay a bomb. For Player 2, use the WASD keys to move the character and the T key to shoot and the Y key to lay a bomb.

Gun Mayhem is an exhilarating and fast-paced shooting game that delivers explosive action and intense multiplayer battles. Created by Kevin Gu, it has gained significant popularity among gamers of all ages for its addictive gameplay and thrilling gunfights.

In Gun Mayhem, you find yourself in a dynamic arena filled with platforms, obstacles, and various power-ups. Your mission is to eliminate your opponents and emerge as the last one standing. The game offers multiple game modes, including campaign, custom game, and challenges, each providing a unique gaming experience.

The campaign mode takes you through a series of increasingly difficult levels, pitting you against AI-controlled opponents. As you progress, you'll encounter different environments and face off against diverse enemy characters, each with their own strengths and weaknesses. Completing the campaign unlocks new weapons, maps, and customization options, adding depth and variety to the gameplay.

One of the standout features of Gun Mayhem is its robust multiplayer mode. You can engage in intense battles with friends or players from around the world in both local and online multiplayer. The multiplayer matches are fast-paced and chaotic, offering an adrenaline-fueled experience as you and your opponents unleash a barrage of bullets while dodging environmental hazards. The customizable game settings allow you to tailor the matches to your preferences, creating endless opportunities for unique and thrilling encounters.

Gun Mayhem's intuitive controls and smooth mechanics make it easy to pick up and play, even for newcomers to the genre. The game's colorful and vibrant graphics, accompanied by energetic sound effects and a catchy soundtrack, further enhance the overall experience, immersing you in the heart-pounding action.

With its addictive gameplay, challenging levels, and multiplayer mayhem, Gun Mayhem is a must-play for shooting game enthusiasts. So gear up, grab your weapons, and prepare for non-stop, explosive battles as you strive for victory in Gun Mayhem.";
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