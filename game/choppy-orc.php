<?php
session_start();
$_SESSION['game'] = ["Choppy Orc","/game/choppy-orc"];

$title = "Play Choppy Orc on GoneRogue";
$description = "In Choppy Orc, tep into the shoes of a orc warrior in this thrilling adventure. Use your axe to get through to the final level.";
$game = "Choppy Orc";
$long_desc = "<b>Controls:</b> Move the Orc with your arrow keys. Jump with the up arrow key. Press space to release his axe.\nChoppy Orc is an exhilarating 2D precision/puzzle platformer that immerses players in an extraordinary adventure as they step into the stout shoes of a valiant Orc.\n
This captivating game transports players into the heart of a perilous journey, fraught with danger and teeming with monstrous creatures, as they strive to escape treacherous caves and valiantly rescue their captured comrades. With its charmingly retro aesthetics, Choppy Orc evokes a nostalgic sense of gaming while delivering a fresh and engrossing experience.\n
As players traverse the intricately designed levels, they are confronted with a myriad of challenges that demand precise movements and quick thinking. The pixel-perfect controls empower players to navigate treacherous platforms, avoid menacing traps, and engage in thrilling combat encounters against the terrifying denizens of the caves. The mesmerizing world of Choppy Orc pulsates with vibrant colors, richly detailed environments, and meticulously crafted animations.\n
Each level presents a unique puzzle, requiring players to strategically utilize their wits and agility to progress. Whether it's manipulating levers to open hidden passages, timing jumps with impeccable precision, or solving intricate riddles, every step forward in the game is a testament to the player's skill and perseverance.\n
As the epic narrative unfolds, players uncover the plight of their captured companions, further fueling their determination to overcome any obstacle that stands in their way. The deep sense of camaraderie and heroism permeates the game, adding an emotional depth that resonates with players on their courageous quest. Choppy Orc also boasts a captivating soundtrack that harmoniously complements the on-screen action, heightening the tension and immersion. The melodic tunes intertwine with the gameplay, enhancing the overall experience and creating an unforgettable journey for players to embark upon.";
$code = "<script defer>document.querySelector('.game-container').style.aspectRatio = '16 / 9';</script><iframe src='https://orc.gonerogue.ml/' title='Choppy Orc' frameborder='0' style='border: none;'></iframe>";

require './game.php';

?>