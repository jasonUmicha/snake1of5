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
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Nosifer&effect=neon|outline|emboss|shadow-multiple|fire">

    <title>Snake 1 of 5</title>
</head>

<body>

<main>
<table>
    <thead>
    <tr>

        <th ><p>Player one</p></th>

        <th><p>Player two</p></th>

        <th><p>Player three</p></th>


        <th><p>Player four</p></th>


        <th><p>Player five</p></th>

    </tr>
    </thead>
    <tbody>
    <tr>
        <td>
            <input type="text" aria-label="name">
        </td>
        <td>
            <input type="text" aria-label="name">
        </td>
        <td>
            <input type="text" aria-label="name">
        </td>
        <td>
            <input type="text" placeholder="name">
        </td>
        <td>
            <input type="text" aria-label="name">
        </td>
    </tr>
    <tr>
        <td>
            <input type="color" >
        </td>
        <td>
            <input type="color" >
        </td>
        <td>
            <input type="color" >
        </td>
        <td>
            <input type="color" >
        </td>
        <td>
            <input type="color" >
        </td>
    </tr>
    </tbody>
</table>
</main>

<main >
    <div id="overDiv" hidden>
    <canvas id="canvas" width="600" height="600" moz-opaque ></canvas>
        <div id="divScore">
            <h1 id="h1" class="font-effect-fire" > 1 Vs 1 TopServer Score </h1>
            <input id="height_score" type="text" value="100000000" readonly> <br>
            <h3 id="h3" class="font-effect-neon"> Top Round Score </h3>
            <input id="top_score" type="text" value="" readonly> <br>
            <br><br>
            <h5 class="font-effect-neon" id="p1Name">123</h5>
            <input id="snake_one_score" type="text" value="" readonly> <br>
            <h5 class="font-effect-neon" id="p2Name">123</h5>
            <input id="snake_two_score" type="text" value="" readonly> <br>
        </div>
    </div>
</main>

<script>

    let canvas = document.getElementById('canvas');
    let ctx = canvas.getContext('2d');
    let rows = 25;
    let cols = 25;
    let cellWidth = canvas.width / cols;
    let cellHeight = canvas.height / rows;
    // steuer richtung festlegen
    let direction_snakeOne = '';
    let direction_snakeTwo = '';
    // benötigt für die abfrage ob das Futter gefressen wurde,
    // um die schlange wachsen zulassen
    let foodCollected_snakeOne = false;
    let foodCollected_snakeTwo = false;
    let food;

    let snakeOne =[
        {
            x : 2,
            y : 2
        }];
    let snakeTwo =[
        {
            x : 2,
            y : 2
        }];




    placeFood();

    // aufruf pro sec. *100
    setInterval(gameLoop, 200);
    // wenn eine taste gedrückt wird soll func.keyDown ausgeführt werden
    document.addEventListener('keydown',keyDown);
    draw();

    // malen => funktion : schlange/-en u. futter
    function draw(){
        // Hintergrund (wieder holen damit es nicht aussieht als wenn man male)
        let patternImage=new Image();
        patternImage.onload=function(){
            let pattern = ctx.createPattern(patternImage,'repeat');
            ctx.fillStyle=pattern;
            ctx.fillRect(0,0,canvas.width ,canvas.height);
        }
        patternImage.src='bilder/sky.jpg';

        // ctx.fillStyle = 'green';
        // ctx.fillRect(0,0,canvas.width ,canvas.height);

        // Snake one
//#00feca,#08f7fe,#ff85ea

        ctx.fillStyle = '#FF00D5';
        //ctx.fillStyle = 'navy';
        snakeOne.forEach(part => add(part.x, part.y,ctx.fillStyle));

        // Snake two

        ctx.fillStyle = '#00EACF';
        snakeTwo.forEach(part => add(part.x, part.y,ctx.fillStyle));

        // Futter(food) oder auch happen
        // ctx.fillStyle = 'yellow';
        addFood(food.x,food.y); // Food(Happen)

        // ständiger wieder aufruf der func.draw(bewegter Ablauf)
        requestAnimationFrame(draw);
    }
    function addFood(x,y){
        let image = new Image(cellWidth,cellHeight);
        ctx.shadowBlur= 22.5;
        ctx.shadowColor= '#00FF53';
        image.src = 'bilder/egg.png';
        ctx.drawImage(image,x * cellWidth,y * cellHeight, cellWidth ,cellHeight );

    }
    function testGameOver(){
        // var. benötigt zum abfragen der selbst berührung o. andere schlange
        let firstPart_snakeOne = snakeOne[0];
        let otherParts_snakeOne = snakeOne.slice(1);
        let firstPart_snakeTwo = snakeTwo[0];
        let otherParts_snakeTwo = snakeTwo.slice(1);
        //  schlange EINS: wenn sich die Schlange selbst berührt o. die andere schlange = respawn(treu)
        let duplicatePart_snakeOne = otherParts_snakeOne.find(part => // kopf trifft auf eigenen körper
                part.x === firstPart_snakeOne.x && part.y === firstPart_snakeOne.y) ||
            otherParts_snakeTwo.find(part => // kopf trifft fremden körper
                part.x === firstPart_snakeOne.x && part.y === firstPart_snakeOne.y) ||
            // kopf trifft fremde kopf
            firstPart_snakeOne.x === firstPart_snakeTwo.x && firstPart_snakeOne.y === firstPart_snakeTwo.y ;
        //  schlange ZWEI: wenn sich die Schlange selbst berührt o. die andere schlange = respawn(treu)
        let duplicatePart_snakeTwo = otherParts_snakeTwo.find(part =>
                part.x === firstPart_snakeTwo.x && part.y === firstPart_snakeTwo.y) ||
            otherParts_snakeOne.find(part => // kopf trifft fremden körper
                part.x === firstPart_snakeTwo.x && part.y === firstPart_snakeTwo.y) ||
            // kopf trifft fremde kopf
            firstPart_snakeTwo.x === firstPart_snakeOne.x && firstPart_snakeTwo.y === firstPart_snakeOne.y ;
        // console.log('#1',duplicatePart_snakeOne,duplicatePart_snakeTwo);
        // 1. schlange fährt gegen die wand = respawn
         if (//snakeOne[0].x < 0 ||
        //     snakeOne[0].x > cols -1 ||
        //     snakeOne[0].y < 0 ||
        //     snakeOne[0].y > rows -1 ||
             duplicatePart_snakeOne
        ){  // schlange zurücksetzen / alle stücken entfernt
            snakeOne =[
                {
                    x : 12,
                    y : 12
                }];
            direction_snakeOne = '';

        }
        // 2. schlange fährt gegen die wand = respawn / wurde geändert
        if (
            duplicatePart_snakeTwo
        ){  // schlange zurücksetzen / alle stücken entfernt
            snakeTwo =[
                {
                    x : 2,
                    y : 2
                }];
            direction_snakeTwo = '';
        }
    }
    // Futterstück irgendwo (random) erscheinen lassen.
    // (x,y) zufällig zu ordnen
    function placeFood(){
        // zufalls zahl, mal -/zeilen o. -/spalten und abrunden.
        let randomX ;
        let randomY ;
        let allParts_SnakeOne;// = snakeOne.slice(0);
        let allParts_SnakeTwo;// = snakeTwo.slice(0);
        let belegteFelder;//= allParts_SnakeOne.find(part =>
            //part.x === randomX && part.y === randomY) ;
        //let snake_part_two;//= allParts_SnakeTwo.find(part =>
            //part.x === randomX && part.y === randomY) ;

        do {
            allParts_SnakeTwo = snakeTwo.slice();
            allParts_SnakeOne = snakeOne.slice();
            randomX = Math.floor(Math.random()* (cols-2))+1;
            randomY =Math.floor(Math.random()* (rows-2))+1;
            let randomArray=[{
                x: randomX ,
                y: randomY
            }];

            // koordinaten abgleichen, TRUE wenn random einem schlangen part entspricht
            belegteFelder = allParts_SnakeOne.find(part =>
                part.x === randomArray[0].x && part.y === randomArray[0].y) ||
                allParts_SnakeTwo.find(part =>
                part.x === randomArray[0].x && part.y === randomArray[0].y) ||
                false ;

            // snake_part_two = allParts_SnakeTwo.find(part =>
            //     part.x === randomArray.x && part.y === randomArray.y) ;
             console.log('#2',randomArray[0].x,' ',randomArray[0].y) ;//,snake_part_two);
        } while (belegteFelder !== false);//&& snake_part_two



        food = {// Futterstück soll nicht in der schlange spawnen
            x: randomX,//snake_part_one || snake_part_two ? Math.floor(Math.random()* cols)
            y: randomY//snake_part_one || snake_part_two ? Math.floor(Math.random()* rows)
        };

    }

    // futter u schlange/-en koordinaten einfügen (im Spielfeld platzieren)
    function add(x,y,color){
        ctx.shadowBlur= 22.5;
        ctx.shadowColor= color;
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
        let punkte =(snakeOne.length -1)*10;
        document.getElementById('p1Name').innerHTML=' player 1';
        document.getElementById('snake_one_score').value=punkte.toString() ;
        if(punkte > document.getElementById('snake_two_score').value &&
            punkte>document.getElementById('top_score').value
        ){
            document.getElementById('top_score').value=punkte.toString();
            document.getElementById('top_score').style.backgroundColor='#FF00D5';
            document.getElementById('h3').style.color='#FF00D5';
        }

    }
    function shiftSnakeTwo(){
        for (let i = snakeTwo.length -1; i > 0; i--){
            const part = snakeTwo[i];
            const lastPart = snakeTwo[i -1];
            part.x = lastPart.x;
            part.y = lastPart.y;
        }
        let punkte= (snakeTwo.length -1) * 10;
        document.getElementById('p2Name').innerHTML=' player 2';
        document.getElementById('snake_two_score').value= punkte.toString() ;
        if (punkte  > document.getElementById('snake_one_score').value &&
            punkte  > document.getElementById('top_score').value)
        {
            document.getElementById('top_score').value=punkte.toString();
            document.getElementById('top_score').style.backgroundColor='#00EACF';
            document.getElementById('h3').style.color='#00EACF';
        }
    }
    // game schleife (bewegung aber auch ablaufs programmierung)
    function gameLoop(){
        // respawn bei spieler berührung //--wand berührung
        testGameOver();
        // schlange eins fahrt durch die wand ;)
        if (snakeOne[0].x <= 0 )
        { snakeOne[0].x += rows ;}
        if(snakeOne[0].y <= 0 )
        {snakeOne[0].y +=  cols ;}
        if(snakeOne[0].y >= cols)
        {snakeOne[0].y += - cols ;}
        if (snakeOne[0].x >= rows )
        {snakeOne[0].x += - rows ;}
        // schlange zwei fahrt durch die wand ;)
        if (snakeTwo[0].x <= 0 )
        { snakeTwo[0].x += rows ;}
        if(snakeTwo[0].y <= 0 )
        {snakeTwo[0].y +=  cols ;}
        if(snakeTwo[0].y >= cols)
        {snakeTwo[0].y += - cols ;}
        if (snakeTwo[0].x >= rows  )
        {snakeTwo[0].x += - rows ;}
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
        }
        if (foodCollected_snakeTwo){
            snakeTwo = [{
                x: snakeTwo[0].x,
                y: snakeTwo[0].y
            }, ...snakeTwo]; // um das Futterstück hinten anzuhängen
            // fressbestätigung wieder auf (false) setzen,
            // anhaltenden wachstum zu beenden.
            foodCollected_snakeTwo = false ;
        }
        // wachstum : nach der futter bestätigung
        // damit die schlange langsam wächst anstatt
        // sofort zu wachsen.(flüssigere performances)
        shiftSnakeOne();
        shiftSnakeTwo();
        // schlange EINS bewegungsabfrage
        if(direction_snakeOne === 'LEFT' && direction_snakeOne !== 'RIGHT'){
            snakeOne[0].x--;
        }
        else if(direction_snakeOne === 'UP' && direction_snakeOne !== 'DOWN'){
            snakeOne[0].y--;
        }
        else if(direction_snakeOne === 'RIGHT' && direction_snakeOne !== 'LEFT'){
            snakeOne[0].x++;
        }
        else if(direction_snakeOne === 'DOWN' && direction_snakeOne !== 'UP'){
            snakeOne[0].y++;
        }

        // schlange ZWEI bewegungsabfrage
        if(direction_snakeTwo === 'LEFT' && direction_snakeTwo !== 'RIGHT'){

            snakeTwo[0].x--;
        }
        else if(direction_snakeTwo === 'UP' && direction_snakeTwo !== 'DOWN'){
            snakeTwo[0].y--;
        }
        else if(direction_snakeTwo === 'RIGHT' && direction_snakeTwo !== 'LEFT'){
            snakeTwo[0].x++;
        }
        else if(direction_snakeTwo === 'DOWN' && direction_snakeTwo !== 'UP'){
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
        // schlange EINS steuerung + verhindern von rückwärts fahren.
        if(e.keyCode === 37 && direction_snakeOne !== 'RIGHT'){//pfeil links
            direction_snakeOne = 'LEFT';
        }
        else if(e.keyCode === 38 && direction_snakeOne !== 'DOWN'){//pfeil hoch
            direction_snakeOne = 'UP';
        }
        else if(e.keyCode === 39 && direction_snakeOne !== 'LEFT'){//pfeil rechts
            direction_snakeOne = 'RIGHT';
        }
        else if(e.keyCode === 40 && direction_snakeOne !== 'UP'){//pfeil runter
            direction_snakeOne = 'DOWN';
        }

        // schlange EINS steuerung + verhindern von rückwärts fahren.
        if(e.keyCode === 65 && direction_snakeTwo !== 'RIGHT'){ //A
            direction_snakeTwo = 'LEFT';
        }
        else if(e.keyCode === 87 && direction_snakeTwo !== 'DOWN'){ //W
            direction_snakeTwo = 'UP';
        }
        else if(e.keyCode === 68 && direction_snakeTwo !== 'LEFT'){ //D
            direction_snakeTwo = 'RIGHT';
        }
        else if(e.keyCode === 83 && direction_snakeTwo !== 'UP'){ //S
            direction_snakeTwo = 'DOWN';
        }
    }


</script>

</body>

</html>
