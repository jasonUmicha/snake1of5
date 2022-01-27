<?php

?>
<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/style.css">

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
            x : 6,
            y : 6
        }];
    let food;

    let cellWidth = canvas.width / cols;
    let cellHeight = canvas.height / rows;
    let direction_snakeOne = '';
    let direction_snakeTwo = '';

    // benötigt für die abfrage ob das Futter gefressen wurde,
    // um die schlange wachsen zulassen
    let foodCollected_snakeOne = false;
    let foodCollected_snakeTwo = false;

    placeFood();


    // aufruf pro sec. *100
    setInterval(gameLoop, 400);
    // wenn eine taste gedrückt wird soll func.keyDown ausgeführt werden
    document.addEventListener('keydown',keyDown);
    draw();


    // malen => funktion : schlange/-en u. futter
    function draw(){
        // Hintergrund (wieder holen damit es nicht aussieht als wenn man male)
        ctx.fillStyle = 'green';
        ctx.fillRect(0,0,canvas.width ,canvas.height);

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


    function testGameOverSnakeOne(){
        let firstPart = snakeOne[0];
        let otherParts = snakeOne.slice(1);
        let duplicatePart = otherParts.find(part=>part.x ===firstPart.x && part.y===firstPart.y);
        if(snakeOne[0].x<0||
            snakeOne[0].x>cols -1||
            snakeOne[0].y<0||
            snakeOne[0].y>rows -1||
            duplicatePart
        ){
            placeFood();
            snakeOne =[
                {
                    x : 5,
                    y : 5
                }];
             direction_snakeOne = '';

        }
}
    function testGameOverSnakeTwo(){
        let firstPart = snakeTwo[0];
        let otherParts = snakeTwo.slice(1);
        let duplicatePart = otherParts.find(part=>part.x ===firstPart.x && part.y===firstPart.y);
        if(snakeTwo[0].x<0||
            snakeTwo[0].x>cols -1||
            snakeTwo[0].y<0||
            snakeTwo[0].y>rows -1||
            duplicatePart
        ){
            placeFood();
            snakeTwo =[
                {
                    x : 6,
                    y : 6
                }];
            direction_snakeTwo = '';

        }
    }
    function placeFood(){
        let randomX = Math.floor(Math.random()* cols);
        let randomY =Math.floor(Math.random()* rows);
        food ={
            x: randomX, //=== snake.x ? randomX + cols : randomX,
            y: randomY //=== snake.y ? randomY + rows : randomY
        }
    }

    // futter u schlange/-en koordinaten einfügen (im Spielfeld platzieren)
    function add(x,y){
        ctx.fillRect(x * cellWidth,y * cellHeight, cellWidth, cellHeight);
    }

    // Wachstum : nach dem fressen, Futter schicht für
    // schicht durch reichen und hinten anhängen
    function shiftSnakeOne(){
        for (let i = snakeOne.length -1; i > 0; i--){
            const part = snakeOne[i];
            const lastPart = snakeOne[i -1];
            part.x = lastPart.x;
            part.y = lastPart.y;
        }
    }
    function shiftSnakeTow(){
        for (let i = snakeTwo.length -1; i > 0; i--){
            const part = snakeTwo[i];
            const lastPart = snakeTwo[i -1];
            part.x = lastPart.x;
            part.y = lastPart.y;
        }
    }
    // game schleife (bewegung aber auch ablaufs programmierung)
    function gameLoop(){
        testGameOverSnakeOne();
        testGameOverSnakeTwo();
        // abfragen ob futter gefressen wurde.
        // is das ergebnis (treu), wachstum.
        if (foodCollected_snakeOne){
            snakeOne = [{
                x: snakeOne[0].x,
                y: snakeOne[0].y
            }, ...snakeOne]; // um das Futterstück hinten anzuhängen

            // fressbestätigung wieder auf (false) setzen,
            // anhaltenden wachstum zu beenden.
            foodCollected_snakeOne = false ;
            // jetzt kackt er es gleich aus....
        }
        if (foodCollected_snakeTwo){
            snakeTwo = [{
                x: snakeTwo[0].x,
                y: snakeTwo[0].y
            }, ...snakeTwo]; // um das Futterstück hinten anzuhängen

            // fressbestätigung wieder auf (false) setzen,
            // anhaltenden wachstum zu beenden.
            foodCollected_snakeTwo = false ;
            // jetzt kackt er es gleich aus....
        }
        // wachstum : nach der futter bestätigung
        // damit die schlange langsam wächst anstatt
        // sofort zu wachsen.(flüssigere performances)
        shiftSnakeOne();
        shiftSnakeTow();
        // schlange EINS bewegungsabfrage

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

        // schlange ZWEI bewegungsabfrage
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

        // was passieren soll wenn schlange EINS auf futter trifft
        if (snakeOne[0].x === food.x &&
            snakeOne[0].y === food.y){
            // bestätigen das gefressen wurde (true),
            // benötigt für weiteren schritt (wachstum).
            foodCollected_snakeOne = true;
            // Futter einsammeln (suggerieren)
            placeFood();
        }
        // was passieren soll wenn schlange ZWEI auf futter trifft
        if (snakeTwo[0].x === food.x &&
            snakeTwo[0].y === food.y){
            // bestätigen das gefressen wurde (true),
            // benötigt für weiteren schritt (wachstum).
            foodCollected_snakeTwo = true;
            // Futter einsammeln (suggerieren)
            placeFood();
        }

    }
    // Steuerung
    function keyDown(e){
        // schlange EINS steuerung
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

        // schlange EINS steuerung
        if(e.keyCode === 65){ //A
            direction_snakeTwo = 'LEFT';
        }
        else if(e.keyCode === 87){ //W
            direction_snakeTwo = 'UP';
        }
        else if(e.keyCode === 68){ //D
            direction_snakeTwo = 'RIGHT';
        }
        else if(e.keyCode === 83){ //S
            direction_snakeTwo = 'DOWN';
        }
    }


</script>

</body>

</html>
