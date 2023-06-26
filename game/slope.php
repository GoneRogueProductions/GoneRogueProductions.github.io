<?php
session_start();
$_SESSION['game'] = ["Slope","/game/slope"];

$title = "Play Slope on GoneRogue";
$description = "Slope. Defy gravity and master the treacherous slopes in this thrilling game of skill. Keep your ball rolling and survive the twists and obstacles.";
$game = "Slope";
$long_desc = "<b>Controls:</b> use your arrow keys to guide the ball.

Slope is an exhilarating and fast-paced 3D endless running game that tests your reflexes, agility, and precision as you navigate a twisting, gravity-defying slope. Developed by RobKayS, Slope has gained popularity for its addictive gameplay and challenging mechanics.

In Slope, you control a sleek ball as it hurtles down a never-ending slope surrounded by vibrant, futuristic environments. The goal is to keep the ball rolling for as long as possible, avoiding obstacles and hazards that threaten to halt your progress. The unique twist in Slope is that the entire game world is tilted, and gravity constantly pulls the ball downward, making it increasingly difficult to maintain control.

The controls in Slope are simple yet responsive, allowing you to steer the ball left or right to avoid obstacles and navigate the treacherous slope. The challenge lies in the game's physics-based mechanics, requiring precise timing and quick reflexes to make split-second decisions and avoid falling off the edge or colliding with obstacles.

As you progress in Slope, the speed of the ball increases, adding an additional layer of difficulty. The game becomes a thrilling test of skill and concentration as you try to maintain control while the slope twists and turns at breakneck speeds. Every second counts, and one wrong move can send you tumbling off the edge, ending your run.

Slope features stunning 3D graphics that create a sense of depth and speed, immersing you in the fast-paced world of the game. The dynamic lighting effects and futuristic landscapes contribute to the game's visual appeal, while the upbeat soundtrack adds to the adrenaline-fueled atmosphere.

While Slope is primarily a single-player game, it offers a competitive element through online leaderboards. You can challenge yourself to achieve high scores and strive to climb the ranks, competing against other players from around the world. This adds a level of replayability as you aim to surpass your previous records and outperform other skilled players.

Overall, Slope offers an addictive and thrilling gaming experience for those seeking a fast-paced, reflex-driven challenge. Its simple controls, challenging mechanics, and eye-catching visuals make it a popular choice for players looking for an intense and immersive endless running game. So strap in, prepare for gravity-defying action, and see how far you can roll in Slope.";
$code = "<iframe src='https://slope.gonerogue.ml/' title='Slope' frameborder='0' style='border: none;'></iframe>";

require './game.php';

?>