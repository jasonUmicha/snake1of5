<?php
?>
<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Snake 1 of 5</title>
</head>

<body>
    <canvas id="canvas" width="800" height="600"  ></canvas>

<script>

    let canvas = document.getElementById('canvas');
    let ctx = canvas.getContext('2d');
    let rows = 10;
    let cols = 13;
    let snake =[
        {
        x : 2,
        y : 3
    }];
    let food = {
        x : 4,
        y : 5
    };
    let cellWidth = canvas.width / cols;
    let cellHeight = canvas.height / rows;
    let direction = 'LEFT';

    draw();

    //malen => funktion : schlange/-en u. futter
    function draw(){
        ctx.fillStyle = 'green';
        ctx.fillRect(0,0,canvas.width ,canvas.height );

        ctx.fillStyle = 'white';
        snake.forEach(part => add(part.x, part.y));

        ctx.fillStyle = 'yellow';
        add(food.x,food.y); // Food(Happen)
    }

    //futter u schlange/-en koordinaten einfügen (im spielfeld platzieren)
    function add(x,y){
        ctx.fillRect(x * cellWidth,y * cellHeight, cellWidth, cellHeight);
    }

    function gameLoop(){}

</script>

</body>

</html>
