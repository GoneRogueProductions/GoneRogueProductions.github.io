<?php
session_start();
$_SESSION['game'] = ["Papa's Pizzeria","/game/papas-pizza"];

$title = "Play Papa's Pizzeria on GoneRogue";
$description = "Manage your Papa's Pizzeria while he's away. Every day, serve orders. Make sure to get the toppings just right and the cutting on par with the order, or else you'll be left with a heart-wrenching tip!";
$game = "Papa's Pizzeria";
$long_desc = "Papa's Pizzeria is a popular and addictive online cooking game that puts you in the role of a pizzeria chef. Developed by Flipline Studios, Papa's Pizzeria offers a delightful gaming experience where you get to create delicious pizzas, serve customers, and manage your own virtual restaurant.

In Papa's Pizzeria, you step into the shoes of a chef working at Papa Louie's renowned pizzeria. Your goal is to satisfy customers by taking their orders, preparing customized pizzas with a wide range of toppings, baking them to perfection, and serving them promptly. The game focuses on time management, accuracy, and customer satisfaction, challenging you to deliver the best pizzas possible while handling multiple orders simultaneously.

The gameplay is divided into different stages, starting with taking customer orders. Each customer has unique preferences and requests, ranging from specific toppings to desired levels of crispiness. It's essential to pay close attention to these details and create pizzas exactly to their liking to earn higher scores and tips.

After taking orders, you move to the pizza preparation station. Here, you choose the crust, sauce, cheese, and an assortment of toppings according to the customer's specifications. The game offers a variety of ingredients, allowing you to get creative and experiment with different combinations to cater to various tastes.

Once the pizza is prepared, it's time to bake it in the oven. Timing is crucial, as you must monitor the pizzas closely to ensure they are cooked to perfection without burning. The game challenges your multitasking skills, as you need to keep an eye on multiple pizzas in the oven while handling other customer orders.

Finally, you serve the freshly baked pizzas to the customers. Speed and accuracy are essential to ensure prompt service and maximize customer satisfaction. Happy customers leave generous tips, which can be used to upgrade your pizzeria and unlock new ingredients, equipment, and decorations to enhance your restaurant's appeal.

Papa's Pizzeria features charming and colorful graphics, with detailed character designs and mouth-watering depictions of pizzas. The game also offers a range of customization options, allowing you to personalize your chef's appearance and decorate your pizzeria to create a unique and inviting atmosphere.

With its addictive gameplay, time management challenges, and enjoyable cooking mechanics, Papa's Pizzeria provides an immersive and entertaining experience for players of all ages. So, put on your chef's hat, fire up the oven, and get ready to serve up delicious pizzas in Papa's Pizzeria!";
$code = "<style>ruffle-player {width:100%;height:100%;}</style><script defer src=\"https://unpkg.com/@ruffle-rs/ruffle@0.1.0-nightly.2023.6.3/ruffle.js\"></script>
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

swfobject.embedSWF('/flash/pizza.swf', 'ruffle', w, h);

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