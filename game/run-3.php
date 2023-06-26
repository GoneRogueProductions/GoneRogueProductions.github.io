<?php
session_start();
$_SESSION['game'] = ["Run 3","/game/run-3"];

$title = "Play Run 3 on GoneRogue";
$description = "Jump your way through falling tiles and obstacles all the way to the last level. Explore sub-tunnels and unlock new characters.";
$game = "Run 3";
$long_desc = "<b>Controls:</b> Use your arrow keys to move the creature. Use Space or the Up arrow key to jump.

Run 3 is a captivating and adrenaline-pumping endless runner game that takes you on a gravity-defying adventure through an intricate series of tunnels and platforms. Developed by Joseph Cloutier, Run 3 is the third installment in the popular Run series and has garnered a loyal following for its challenging gameplay and immersive atmosphere.

In Run 3, you control a character navigating through a vast and ever-changing space tunnel filled with gaps, obstacles, and deadly edges. The objective is to keep running for as long as possible while avoiding falling into the abyss or colliding with the walls. What sets Run 3 apart is its unique twist on the traditional endless runner genre: the ability to alter gravity.

The game offers a variety of playable characters, each with their own unique skills and abilities. Some characters can jump higher, while others can run faster or even defy gravity for longer periods. These different attributes add a strategic element to the gameplay, allowing you to choose the character that best suits your playstyle and the challenges you face.

As you progress through the tunnels, the levels become increasingly complex and challenging. New obstacles, including crumbling tiles, rotating platforms, and shifting gravity fields, are introduced, testing your reflexes and ability to adapt quickly. The game keeps you on your toes as you navigate the constantly shifting environment, making split-second decisions to avoid hazards and continue your endless run.

In addition to the endless mode, Run 3 offers a selection of level-based challenges. These levels introduce specific objectives and puzzles that require careful planning and precise movements to complete. They provide a welcome change of pace from the endless mode and add a sense of progression to the game.

Run 3 features minimalist yet stylish graphics that contribute to the immersive atmosphere of the game. The tunnels and platforms have a sleek and futuristic design, while the ambient soundtrack adds to the sense of tension and excitement.

With its challenging gameplay, innovative gravity mechanics, and captivating visuals, Run 3 offers an addictive and thrilling endless running experience. Whether you're a casual player looking for a quick gaming session or a dedicated gamer aiming to conquer the highest levels, Run 3 provides hours of fun and excitement as you navigate the twisting tunnels and defy gravity in your endless run.";
$code = "<iframe src='/run3/index.html' title='Run 3' frameborder='0' style='border: none;'></iframe>";

require './game.php';

?>