<?php
session_start();
$_SESSION['game'] = ["Table Tanks","/game/table-tanks"];

$title = "Play Table Tanks on GoneRogue";
$description = "Shoot all the enemy tanks in Table Tanks, but there is s twist. It's all on a 2D table with walls and only 3 pieces of ammo. Pick up boxes to restore it, but risk your life.";
$game = "Table Tanks";
$long_desc = "<b>Controls:</b> Use the arrow keys to drive. Use Space to fire. Use Shift to dash.

Table Tanks is an exciting tabletop strategy game that combines the elements of war and strategy with the fun and nostalgia of playing with miniature tanks on a virtual battlefield. Table Tanks offers a unique gaming experience that appeals to both casual players and seasoned strategists.

In Table Tanks, players take on the role of commanders, controlling a fleet of miniature tanks and battling against opponents on a virtual table. The game utilizes a grid-based system where each tank is assigned specific movement and attack abilities. The objective is to strategically position your tanks, anticipate your opponent's moves, and ultimately defeat their tanks.

The game offers a variety of tanks, each with its own strengths, weaknesses, and special abilities. From heavy tanks that excel in dealing damage to fast and nimble tanks that can quickly maneuver across the battlefield, there are numerous strategies to explore and master. Additionally, the game features different types of terrain and obstacles that can affect movement and provide tactical advantages or disadvantages.

Table Tanks provides various gameplay modes to keep players engaged. You can choose to play against AI-controlled opponents in single-player campaigns or challenge friends in local multiplayer matches. The multiplayer mode allows for intense head-to-head battles, where strategic thinking and careful planning are crucial to gain the upper hand and emerge victorious.

The game's intuitive controls make it easy to learn and play, while the visually appealing graphics and charming animations bring the miniature tanks to life on the virtual tabletop. The sound effects and background music add to the immersive experience, creating an engaging atmosphere that draws players into the world of tabletop tank warfare.

One of the highlights of Table Tanks is its emphasis on strategy and decision-making. Players must carefully analyze the battlefield, plan their moves, and anticipate their opponent's actions. With each turn, players must consider the strengths and weaknesses of their tanks, adapt their strategies on the fly, and make calculated decisions to outmaneuver and outsmart their opponents.

Whether you're a fan of strategy games or simply enjoy the thrill of virtual warfare, Table Tanks offers a captivating and entertaining experience. With its blend of strategic gameplay, customizable tanks, and engaging multiplayer battles, the game is sure to provide hours of tabletop tank warfare fun for players of all ages.";
$code = "<script defer>document.querySelector('.game-container').style.aspectRatio = '16 / 9';</script><iframe src='/table-tanks/index.html' title='Table Tanks' frameborder='0' style='border: none;'></iframe>";

require './game.php';

?>