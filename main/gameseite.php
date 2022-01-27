<?php

?>
<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/css/style.css">

    <title>Snake 1 of 5</title>
</head>

<body>

<main>
    <canvas id="canvas" width="600" height="600"  ></canvas>
</main>

<script>

    let canvas = document.getElementById('canvas');
    let ctx = canvas.getContext('2d');
    let rows = 15;
    let cols = 15;
    let snakeOne =[
        {
            x : 5,
            y : 5
        }];
    let snakeTwo =[
        {
            x : 5,
            y : 5
        }];
    let food = {
        x : 2,
        y : 1
    };

    let cellWidth = canvas.width / cols;
    let cellHeight = canvas.height / rows;
    let direction_snakeOne = '';
    let direction_snakeTwo = '';

    // aufruf pro sec. *100
    setInterval(gameLoop, 400);
    // wenn eine taste gedrückt wird soll func.keyDown ausgeführt werden
    document.addEventListener('keydown',keyDown);
    draw();

    // malen => funktion : schlange/-en u. futter
    function draw(){
        // Hintergrund (wieder holen damit es nicht aussieht als wenn man male)
        ctx.fillStyle = 'green';
        ctx.fillRect(0,0,canvas.width ,canvas.height );

        // Snake one
        ctx.fillStyle = 'navy';
        snakeOne.forEach(part => add(part.x, part.y));

        // Snake two
        ctx.fillStyle = 'Maroon';
        snakeTwo.forEach(part => add(part.x, part.y));

        // Futter(food) oder auch happen
        ctx.fillStyle = 'yellow';
        add(food.x,food.y); // Food(Happen)

        // ständiger wieder aufruf der func.draw(bewegter Ablauf)
        requestAnimationFrame(draw);
    }

    //futter u schlange/-en koordinaten einfügen (im Spielfeld platzieren)
    function add(x,y){
        ctx.fillRect(x * cellWidth,y * cellHeight, cellWidth, cellHeight);
    }

    function gameLoop(){
        
        if(direction_snakeOne === 'LEFT'){
            snakeOne[0].x--;
        }
        else if(direction_snakeOne === 'UP'){
            snakeOne[0].y--;
        }
        else if(direction_snakeOne === 'RIGHT'){
            snakeOne[0].x++;
        }
        else if(direction_snakeOne === 'DOWN'){
            snakeOne[0].y++;
        }

         if(direction_snakeTwo === 'LEFT'){
            snakeTwo[0].x--;
        }
        else if(direction_snakeTwo === 'UP'){
            snakeTwo[0].y--;
        }
        else if(direction_snakeTwo === 'RIGHT'){
            snakeTwo[0].x++;
        }
        else if(direction_snakeTwo === 'DOWN'){
            snakeTwo[0].y++;
        }

    }

    function keyDown(e){
        
        if(e.keyCode === 37){//pfeil links
            direction_snakeOne = 'LEFT';
        }
        else if(e.keyCode === 38){//pfeil hoch
            direction_snakeOne = 'UP';
        }
        else if(e.keyCode === 39){//pfeil rechts
            direction_snakeOne = 'RIGHT';
        }
        else if(e.keyCode === 40){//pfeil runter
            direction_snakeOne = 'DOWN';
        }

        if(e.keyCode === 65){ //A
            direction_snakeTwo = 'LEFT';
        }
        else if(e.keyCode === 87){//W
            direction_snakeTwo = 'UP';
        }
        else if(e.keyCode === 68){//D
            direction_snakeTwo = 'RIGHT';
        }
        else if(e.keyCode === 83){//S
            direction_snakeTwo = 'DOWN';
        }
    }

// 11.uhr test
</script>

</body>

</html>
