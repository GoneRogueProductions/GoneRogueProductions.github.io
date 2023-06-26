<?php
session_start();
$_SESSION['game'] = ["Duck Life 4","/game/duck-life-4"];

$title = "Play Duck Life 4 on GoneRogue";
$description = "Hatch your very own duck and tain it to be MASTER DUCK in Duck Life 4! Do training and race against other ducks to prepare yourself for the competition.";
$game = "Duck Life 4";
$long_desc = "<b>Controls:</b> Use your arrow keys to guide the duck.

Duck Life 4 is an exciting and addictive online game that takes you on a thrilling adventure in the world of competitive duck racing. Developed by Wix Games, it is the fourth installment in the popular Duck Life series, which has garnered a massive fan base worldwide.

In Duck Life 4, you start your journey as a young, inexperienced duckling with big dreams of becoming the ultimate champion. The game introduces you to a vibrant and colorful world filled with various challenges and opportunities. Your main objective is to train your duckling in different skills, improve its abilities, and guide it towards victory in intense races against other skilled ducks.

The game offers a wide range of activities to enhance your duck's abilities. You can engage in rigorous training sessions to boost your duckling's running, swimming, flying, and climbing skills. As you progress, you'll also have the chance to participate in mini-games that focus on specific attributes, such as reflexes and reaction time. Winning these mini-games rewards you with valuable coins, which can be used to purchase upgrades, accessories, and food for your duck.

Moreover, Duck Life 4 features an immersive tournament system, where you can test your duck's prowess against formidable opponents from different regions. Each tournament presents a unique set of challenges and obstacles, pushing you to strategize and adapt your training techniques accordingly. By triumphing over these challenges, you'll unlock new areas and races, providing you with even greater opportunities to showcase your duck's skills.

The game's charming graphics, catchy sound effects, and smooth controls contribute to its overall appeal, creating an enjoyable and immersive gaming experience. Whether you're a casual gamer or a dedicated player seeking to dominate the leaderboards, Duck Life 4 offers countless hours of entertainment and excitement.

So, prepare to embark on an extraordinary adventure, train your duckling to perfection, and strive for glory as you participate in thrilling races in Duck Life 4.";
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