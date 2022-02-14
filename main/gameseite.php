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
    <script>
        let ei_sound = new Audio("audio/sound_test1.mp3");
        let radio = new Audio("http://rs11.stream24.org:8270/listen.pls");
        ei_sound.volume=0.8;//lautstärke von 0.1-1
        radio.volume=0.2;
    </script>
    <title>Snake 1 of 5</title>
</head>

<body>
<button type="button" onclick="start()" >Start</button>
<button type="button" onclick="back()" >Back</button>
<button onclick="openFullscreen();">Open Fullscreen</button>
<button onclick="closeFullscreen();">Close Fullscreen</button>
<main>
<table id="tabelle">
    <thead>
    <tr>
        <th><p>Player one</p></th>
        <th><p>Player two</p></th>
        <th><p>Player three</p></th>
        <th><p>Player four</p></th>
        <th><p>Player five</p></th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>
            <input id="snake_one" class="snake_name" type="text" placeholder="name" >
        </td>
        <td>
            <input id="snake_two" class="snake_name" type="text" placeholder="name">
        </td>
        <td>
            <input id="snake_three" class="snake_name" type="text" placeholder="name">
        </td>
        <td>
            <input id="snake_four" class="snake_name" type="text" placeholder="name">
        </td>
        <td>
            <input id="snake_five" class="snake_name" type="text" placeholder="name">
        </td>
    </tr>
    <tr>
        <td >
            <div class="dropdown">
                <button id="snake_one_color" class="dropbtn">Color</button>
                <div  class="dropdown-content">
                    <button class="snake_one_color" id="color_DA00EC" type="submit" style="background-color: #DA00EC" >#1</button>
                    <button class="snake_one_color" id="color_AA09FF" type="submit" style="background-color: #AA09FF" >#2</button>
                    <button class="snake_one_color" id="color_6861FF" type="submit" style="background-color: #6861FF" >#3</button>
                    <button class="snake_one_color" id="color_009AFF" type="submit" style="background-color: #009AFF" >#4</button>
                    <button class="snake_one_color" id="color_00C9EB" type="submit" style="background-color: #00C9EB" >#5</button>
                    <button class="snake_one_color" id="color_00EACF" type="submit" style="background-color: #00EACF" >#6</button>
                    <button class="snake_one_color" id="color_00FE9A" type="submit" style="background-color: #00FE9A" >#7</button>
                    <button class="snake_one_color" id="color_00FF53" type="submit" style="background-color: #00FF53" >#8</button>
                    <button class="snake_one_color" id="color_BEE800" type="submit" style="background-color: #BEE800" >#9</button>
                    <button class="snake_one_color" id="color_FF6155" type="submit" style="background-color: #FF6155" >#10</button>
                    <button class="snake_one_color" id="color_FF009C" type="submit" style="background-color: #FF009C" >#11</button>
                    <button class="snake_one_color" id="color_F100CD" type="submit" style="background-color: #F100CD" >#12</button>
                </div>
            </div>
        </td>
        <td>
            <div class="dropdown">
                <button id="snake_two_color" class="dropbtn">Color</button>
                <div  class="dropdown-content">
                    <button class="snake_two_color" id="color_DA00EC" type="submit" style="background-color: #DA00EC" >#1</button>
                    <button class="snake_two_color" id="color_AA09FF" type="submit" style="background-color: #AA09FF" >#2</button>
                    <button class="snake_two_color" id="color_6861FF" type="submit" style="background-color: #6861FF" >#3</button>
                    <button class="snake_two_color" id="color_009AFF" type="submit" style="background-color: #009AFF" >#4</button>
                    <button class="snake_two_color" id="color_00C9EB" type="submit" style="background-color: #00C9EB" >#5</button>
                    <button class="snake_two_color" id="color_00EACF" type="submit" style="background-color: #00EACF" >#6</button>
                    <button class="snake_two_color" id="color_00FE9A" type="submit" style="background-color: #00FE9A" >#7</button>
                    <button class="snake_two_color" id="color_00FF53" type="submit" style="background-color: #00FF53" >#8</button>
                    <button class="snake_two_color" id="color_BEE800" type="submit" style="background-color: #BEE800" >#9</button>
                    <button class="snake_two_color" id="color_FF6155" type="submit" style="background-color: #FF6155" >#10</button>
                    <button class="snake_two_color" id="color_FF009C" type="submit" style="background-color: #FF009C" >#11</button>
                    <button class="snake_two_color" id="color_F100CD" type="submit" style="background-color: #F100CD" >#12</button>
                </div>
            </div>
        </td>
        <td>
            <div class="dropdown">
                <button id="snake_three_color" class="dropbtn">Color</button>
                <div  class="dropdown-content">
                    <button class="snake_three_color" id="color_DA00EC" type="submit" style="background-color: #DA00EC" >#1</button>
                    <button class="snake_three_color" id="color_AA09FF" type="submit" style="background-color: #AA09FF" >#2</button>
                    <button class="snake_three_color" id="color_6861FF" type="submit" style="background-color: #6861FF" >#3</button>
                    <button class="snake_three_color" id="color_009AFF" type="submit" style="background-color: #009AFF" >#4</button>
                    <button class="snake_three_color" id="color_00C9EB" type="submit" style="background-color: #00C9EB" >#5</button>
                    <button class="snake_three_color" id="color_00EACF" type="submit" style="background-color: #00EACF" >#6</button>
                    <button class="snake_three_color" id="color_00FE9A" type="submit" style="background-color: #00FE9A" >#7</button>
                    <button class="snake_three_color" id="color_00FF53" type="submit" style="background-color: #00FF53" >#8</button>
                    <button class="snake_three_color" id="color_BEE800" type="submit" style="background-color: #BEE800" >#9</button>
                    <button class="snake_three_color" id="color_FF6155" type="submit" style="background-color: #FF6155" >#10</button>
                    <button class="snake_three_color" id="color_FF009C" type="submit" style="background-color: #FF009C" >#11</button>
                    <button class="snake_three_color" id="color_F100CD" type="submit" style="background-color: #F100CD" >#12</button>
                </div>
            </div>
        </td>
        <td>
            <div class="dropdown">
                <button id="snake_four_color" class="dropbtn">Color</button>
                <div  class="dropdown-content">
                    <button class="snake_four_color" id="color_DA00EC" type="submit" style="background-color: #DA00EC" >#1</button>
                    <button class="snake_four_color" id="color_AA09FF" type="submit" style="background-color: #AA09FF" >#2</button>
                    <button class="snake_four_color" id="color_6861FF" type="submit" style="background-color: #6861FF" >#3</button>
                    <button class="snake_four_color" id="color_009AFF" type="submit" style="background-color: #009AFF" >#4</button>
                    <button class="snake_four_color" id="color_00C9EB" type="submit" style="background-color: #00C9EB" >#5</button>
                    <button class="snake_four_color" id="color_00EACF" type="submit" style="background-color: #00EACF" >#6</button>
                    <button class="snake_four_color" id="color_00FE9A" type="submit" style="background-color: #00FE9A" >#7</button>
                    <button class="snake_four_color" id="color_00FF53" type="submit" style="background-color: #00FF53" >#8</button>
                    <button class="snake_four_color" id="color_BEE800" type="submit" style="background-color: #BEE800" >#9</button>
                    <button class="snake_four_color" id="color_FF6155" type="submit" style="background-color: #FF6155" >#10</button>
                    <button class="snake_four_color" id="color_FF009C" type="submit" style="background-color: #FF009C" >#11</button>
                    <button class="snake_four_color" id="color_F100CD" type="submit" style="background-color: #F100CD" >#12</button>
                </div>
            </div>
        </td>
        <td>
            <div class="dropdown">
                <button id="snake_five_color" class="dropbtn">Color</button>
                <div  class="dropdown-content">
                    <button class="snake_five_color" id="color_DA00EC" type="submit" style="background-color: #DA00EC" >#1</button>
                    <button class="snake_five_color" id="color_AA09FF" type="submit" style="background-color: #AA09FF" >#2</button>
                    <button class="snake_five_color" id="color_6861FF" type="submit" style="background-color: #6861FF" >#3</button>
                    <button class="snake_five_color" id="color_009AFF" type="submit" style="background-color: #009AFF" >#4</button>
                    <button class="snake_five_color" id="color_00C9EB" type="submit" style="background-color: #00C9EB" >#5</button>
                    <button class="snake_five_color" id="color_00EACF" type="submit" style="background-color: #00EACF" >#6</button>
                    <button class="snake_five_color" id="color_00FE9A" type="submit" style="background-color: #00FE9A" >#7</button>
                    <button class="snake_five_color" id="color_00FF53" type="submit" style="background-color: #00FF53" >#8</button>
                    <button class="snake_five_color" id="color_BEE800" type="submit" style="background-color: #BEE800" >#9</button>
                    <button class="snake_five_color" id="color_FF6155" type="submit" style="background-color: #FF6155" >#10</button>
                    <button class="snake_five_color" id="color_FF009C" type="submit" style="background-color: #FF009C" >#11</button>
                    <button class="snake_five_color" id="color_F100CD" type="submit" style="background-color: #F100CD" >#12</button>
                </div>
            </div>
        </td>
    </tr>
    </tbody>
</table>
<!--</main>-->
<!---->
<!--<main >-->

    <div id="overDiv" hidden >
    <canvas id="canvas" width="600" height="600" moz-opaque ></canvas>
        <div id="divScore">
            <h1 id="h1" class="font-effect-fire" > 1 Vs 1 TopServer Score </h1>
            <input id="height_score" type="text" value="100000000" readonly> <br>
            <h3 id="h3" class="font-effect-neon"> Top Round Score </h3>
            <input id="top_score" type="text" value="" readonly> <br>
            <br>
            <h5 class="font-effect-neon" id="p1Name"></h5>
            <input id="snake_one_score" type="text" value="" readonly> <br>
            <h5 class="font-effect-neon" id="p2Name"></h5>
            <input  id="snake_two_score"  value="00" type="text" readonly>
            <h5 class="font-effect-neon" id="p3Name"></h5>
            <input id="snake_three_score" type="text" value="" readonly> <br>
            <h5 class="font-effect-neon" id="p4Name"></h5>
            <input  id="snake_four_score"  value="00" type="text" readonly>
            <h5 class="font-effect-neon" id="p5Name"></h5>
            <input id="snake_five_score" type="text" value="" readonly> <br>
            <br>
            <input  id="radioAn"  value="Musik An" onclick="radio.play(),radioAn()" type="text" readonly>
            <input  id="radioAus"  hidden value="Musik Aus" onclick="radio.pause(),radioAus()" type="text" readonly>
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
    let direction_snakeThree = '';
    let direction_snakeFour = '';
    let direction_snakeFive = '';
    // benötigt für die abfrage ob das Futter gefressen wurde,
    // um die schlange wachsen zulassen
    let foodCollected_snakeOne = false;
    let foodCollected_snakeTwo = false;
    let foodCollected_snakeThree = false;
    let foodCollected_snakeFour = false;
    let foodCollected_snakeFive = false;
    let inGame_snakeOne = false;
    let inGame_snakeTwo = false;
    let inGame_snakeThree = false;
    let inGame_snakeFour = false;
    let inGame_snakeFive = false;
    let food;
    let snake_one_color = '#FF00D5';
    let snake_two_color = '#00EACF';
    let snake_three_color = '#FF00D5';
    let snake_four_color = '#FF00D5';
    let snake_five_color = '#FF00D5';
    let elem = document.documentElement;
    let snakeOne=[
        {
            x: -14,
            y: -15
        }];
    let snakeTwo=[
        {
            x: -12,
            y: -12
        }];
    let snakeThree=[
        {
            x: -11,
            y: -11
        }];
    let snakeFour=[
        {
            x: -18,
            y: -18
        }];
    let snakeFive=[
        {
            x: -10,
            y: -10
        }];
    if(inGame_snakeOne) {
        snakeOne = [
            {
                x: 12,
                y: 12
            }];
    }
    if(inGame_snakeTwo) {
        snakeTwo = [
            {
                x: 2,
                y: 2
            }];
    }
    if(inGame_snakeThree) {
        snakeThree = [
            {
                x: 22,
                y: 22
            }];
    }
    if(inGame_snakeFour) {
        snakeFour = [
            {
                x: 22,
                y: 2
            }];
    }
    if(inGame_snakeFive) {
        snakeFive = [
            {
                x: 2,
                y: 22
            }];
    }
    document.getElementById('snake_one').addEventListener('input',namensGebung);
    document.getElementById('snake_two').addEventListener('input',namensGebung);
    document.getElementById('snake_three').addEventListener('input',namensGebung);
    document.getElementById('snake_four').addEventListener('input',namensGebung);
    document.getElementById('snake_five').addEventListener('input',namensGebung);

    for (let i=0;i<document.getElementsByClassName('snake_one_color').length;i++) {
        document.getElementsByClassName('snake_one_color')[i].addEventListener('click', farbwahl);
    }
    for (let i=0;i<document.getElementsByClassName('snake_two_color').length;i++) {
        document.getElementsByClassName('snake_two_color')[i].addEventListener('click', farbwahl);
    }
    for (let i=0;i<document.getElementsByClassName('snake_three_color').length;i++) {
        document.getElementsByClassName('snake_three_color')[i].addEventListener('click', farbwahl);
    }
    for (let i=0;i<document.getElementsByClassName('snake_four_color').length;i++) {
        document.getElementsByClassName('snake_four_color')[i].addEventListener('click', farbwahl);
    }
    for (let i=0;i<document.getElementsByClassName('snake_five_color').length;i++) {
        document.getElementsByClassName('snake_five_color')[i].addEventListener('click', farbwahl);
    }

    placeFood();
    // aufruf pro sec. *100
    setInterval(gameLoop, 200);
    // wenn eine taste gedrückt wird soll func.keyDown ausgeführt werden
    document.addEventListener('keydown',keyDown);
    draw();

    function openFullscreen() {
        if (elem.requestFullscreen) {
            elem.requestFullscreen();
        }
    }

    function closeFullscreen() {
        if (document.exitFullscreen) {
            document.exitFullscreen();
        }
    }
    function namensGebung(){
        if (this.id === 'snake_one') {
            document.getElementById('p1Name').innerHTML = this.value
            inGame_snakeOne=true;
        }else if (this.id === 'snake_two'){
            document.getElementById('p2Name').innerHTML = this.value
            inGame_snakeTwo=true;
        }else if (this.id === 'snake_three'){
            document.getElementById('p3Name').innerHTML = this.value
            inGame_snakeThree=true;
        }else if (this.id === 'snake_four'){
            document.getElementById('p4Name').innerHTML = this.value
            inGame_snakeFour=true;
        }else if (this.id === 'snake_five'){
            document.getElementById('p5Name').innerHTML = this.value
            inGame_snakeFive=true;
        }

    }
    function back(){
        snakeOne=[
            {
                x: -14,
                y: -15
            }];
        snakeTwo=[
            {
                x: -12,
                y: -12
            }];
        snakeThree=[
            {
                x: -11,
                y: -11
            }];
        snakeFour=[
            {
                x: -18,
                y: -18
            }];
        snakeFive=[
            {
                x: -10,
                y: -10
            }];
        direction_snakeOne = '';
        direction_snakeTwo = '';
        direction_snakeThree = '';
        direction_snakeFour = '';
        direction_snakeFive = '';
        inGame_snakeOne = false;
        inGame_snakeTwo = false;
        inGame_snakeThree = false;
        inGame_snakeFour = false;
        inGame_snakeFive = false;
        document.getElementById('tabelle').hidden=false;
        document.getElementById('overDiv').hidden=true;
        clearInterval();

    }
    function start(){
        document.getElementById('tabelle').hidden=true;
        document.getElementById('overDiv').hidden=false
    }
    function radioAn(){
        document.getElementById('radioAn').hidden=true;
        document.getElementById('radioAus').hidden=false;
    }
    function radioAus(){
        document.getElementById('radioAn').hidden=false;
        document.getElementById('radioAus').hidden=true;
    }
    function farbwahl(){
        // console.log(this.className);
        document.getElementById(this.className).style.backgroundColor=this.style.backgroundColor;
        if (this.className === 'snake_one_color'){
            snake_one_color=this.style.backgroundColor;
            document.getElementById('snake_one').style.backgroundColor=this.style.backgroundColor;
            document.getElementById('snake_one').style.color='black';
            document.getElementById('snake_one_score').style.backgroundColor=this.style.backgroundColor;
            document.getElementById('p1Name').style.color=this.style.backgroundColor;
        }else if (this.className === 'snake_two_color'){
            snake_two_color=this.style.backgroundColor;
            document.getElementById('snake_two').style.backgroundColor=this.style.backgroundColor;
            document.getElementById('snake_two').style.color='black';
            document.getElementById('snake_two_score').style.backgroundColor=this.style.backgroundColor;
            document.getElementById('p2Name').style.color=this.style.backgroundColor;
        }else if (this.className === 'snake_three_color'){
            snake_three_color=this.style.backgroundColor;
            document.getElementById('snake_three').style.backgroundColor=this.style.backgroundColor;
            document.getElementById('snake_three').style.color='black';
            document.getElementById('snake_three_score').style.backgroundColor=this.style.backgroundColor;
            document.getElementById('p2Name').style.color=this.style.backgroundColor;
        }else if (this.className === 'snake_four_color'){
            snake_four_color=this.style.backgroundColor;
            document.getElementById('snake_four').style.backgroundColor=this.style.backgroundColor;
            document.getElementById('snake_four').style.color='black';
            document.getElementById('snake_four_score').style.backgroundColor=this.style.backgroundColor;
            document.getElementById('p4Name').style.color=this.style.backgroundColor;
        }else if (this.className === 'snake_five_color'){
            snake_five_color=this.style.backgroundColor;
            document.getElementById('snake_five').style.backgroundColor=this.style.backgroundColor;
            document.getElementById('snake_five').style.color='black';
            document.getElementById('snake_five_score').style.backgroundColor=this.style.backgroundColor;
            document.getElementById('p5Name').style.color=this.style.backgroundColor;
        }

    }
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

        if (inGame_snakeOne) {
            // Snake one
            ctx.fillStyle = snake_one_color;
            snakeOne.forEach(part => add(part.x, part.y, ctx.fillStyle));
        }
        if (inGame_snakeTwo) {
            // Snake two
            ctx.fillStyle = snake_two_color;
            snakeTwo.forEach(part => add(part.x, part.y, ctx.fillStyle));
        }
        if (inGame_snakeThree) {
            // Snake three
            ctx.fillStyle = snake_three_color;
            snakeThree.forEach(part => add(part.x, part.y, ctx.fillStyle));
        }
        if (inGame_snakeFour) {
            // Snake four
            ctx.fillStyle = snake_four_color;
            snakeFour.forEach(part => add(part.x, part.y, ctx.fillStyle));
        }
        if (inGame_snakeFive) {
            // Snake five
            ctx.fillStyle = snake_five_color;
            snakeFive.forEach(part => add(part.x, part.y, ctx.fillStyle));
        }
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

        let firstPart_snakeThree = snakeThree[0];
        let otherParts_snakeThree = snakeThree.slice(1);

        let firstPart_snakeFour = snakeFour[0];
        let otherParts_snakeFour = snakeFour.slice(1);

        let firstPart_snakeFive = snakeFive[0];
        let otherParts_snakeFive = snakeFive.slice(1);

        //  schlange EINS: wenn sich die Schlange selbst berührt o. die andere schlange = respawn(treu)
        let duplicatePart_snakeOne = otherParts_snakeOne.find(part => // kopf trifft auf eigenen körper
                part.x === firstPart_snakeOne.x && part.y === firstPart_snakeOne.y) ||
            otherParts_snakeTwo.find(part => // kopf trifft fremden körper
                part.x === firstPart_snakeOne.x && part.y === firstPart_snakeOne.y) ||
            otherParts_snakeThree.find(part => // kopf trifft fremden körper
                part.x === firstPart_snakeOne.x && part.y === firstPart_snakeOne.y) ||
            otherParts_snakeFour.find(part => // kopf trifft fremden körper
                part.x === firstPart_snakeOne.x && part.y === firstPart_snakeOne.y) ||
            otherParts_snakeFive.find(part => // kopf trifft fremden körper
                part.x === firstPart_snakeOne.x && part.y === firstPart_snakeOne.y) ||
            // kopf trifft fremde kopf
            firstPart_snakeOne.x === firstPart_snakeTwo.x && firstPart_snakeOne.y === firstPart_snakeTwo.y ||
            firstPart_snakeOne.x === firstPart_snakeThree.x && firstPart_snakeOne.y === firstPart_snakeThree.y ||
            firstPart_snakeOne.x === firstPart_snakeFour.x && firstPart_snakeOne.y === firstPart_snakeFour.y ||
            firstPart_snakeOne.x === firstPart_snakeFive.x && firstPart_snakeOne.y === firstPart_snakeFive.y ;

        //  schlange Zwei
        let duplicatePart_snakeTwo = otherParts_snakeTwo.find(part => // kopf trifft auf eigenen körper
                part.x === firstPart_snakeTwo.x && part.y === firstPart_snakeTwo.y) ||
            otherParts_snakeThree.find(part => // kopf trifft fremden körper
                part.x === firstPart_snakeTwo.x && part.y === firstPart_snakeTwo.y) ||
            otherParts_snakeFour.find(part => // kopf trifft fremden körper
                part.x === firstPart_snakeTwo.x && part.y === firstPart_snakeTwo.y) ||
            otherParts_snakeFive.find(part => // kopf trifft fremden körper
                part.x === firstPart_snakeTwo.x && part.y === firstPart_snakeTwo.y) ||
            otherParts_snakeOne.find(part => // kopf trifft fremden körper
                part.x === firstPart_snakeTwo.x && part.y === firstPart_snakeTwo.y) ||
            // kopf trifft fremde kopf
            firstPart_snakeTwo.x === firstPart_snakeOne.x && firstPart_snakeTwo.y === firstPart_snakeOne.y ||
            firstPart_snakeTwo.x === firstPart_snakeThree.x && firstPart_snakeTwo.y === firstPart_snakeThree.y ||
            firstPart_snakeTwo.x === firstPart_snakeFour.x && firstPart_snakeTwo.y === firstPart_snakeFour.y ||
            firstPart_snakeTwo.x === firstPart_snakeFive.x && firstPart_snakeTwo.y === firstPart_snakeFive.y ;

        //  schlange Drei
        let duplicatePart_snakeThree = otherParts_snakeThree.find(part => // kopf trifft auf eigenen körper
                part.x === firstPart_snakeThree.x && part.y === firstPart_snakeThree.y) ||
            otherParts_snakeTwo.find(part => // kopf trifft fremden körper
                part.x === firstPart_snakeThree.x && part.y === firstPart_snakeThree.y) ||
            otherParts_snakeOne.find(part => // kopf trifft fremden körper
                part.x === firstPart_snakeThree.x && part.y === firstPart_snakeThree.y) ||
            otherParts_snakeFour.find(part => // kopf trifft fremden körper
                part.x === firstPart_snakeThree.x && part.y === firstPart_snakeThree.y) ||
            otherParts_snakeFive.find(part => // kopf trifft fremden körper
                part.x === firstPart_snakeThree.x && part.y === firstPart_snakeThree.y) ||
            // kopf trifft fremde kopf
            firstPart_snakeThree.x === firstPart_snakeTwo.x && firstPart_snakeThree.y === firstPart_snakeTwo.y ||
            firstPart_snakeThree.x === firstPart_snakeOne.x && firstPart_snakeThree.y === firstPart_snakeOne.y ||
            firstPart_snakeThree.x === firstPart_snakeFour.x && firstPart_snakeThree.y === firstPart_snakeFour.y ||
            firstPart_snakeThree.x === firstPart_snakeFive.x && firstPart_snakeThree.y === firstPart_snakeFive.y ;
        //  schlange Vier
        let duplicatePart_snakeFour = otherParts_snakeFour.find(part => // kopf trifft auf eigenen körper
                part.x === firstPart_snakeFour.x && part.y === firstPart_snakeFour.y) ||
            otherParts_snakeTwo.find(part => // kopf trifft fremden körper
                part.x === firstPart_snakeFour.x && part.y === firstPart_snakeFour.y) ||
            otherParts_snakeThree.find(part => // kopf trifft fremden körper
                part.x === firstPart_snakeFour.x && part.y === firstPart_snakeFour.y) ||
            otherParts_snakeOne.find(part => // kopf trifft fremden körper
                part.x === firstPart_snakeFour.x && part.y === firstPart_snakeFour.y) ||
            otherParts_snakeFive.find(part => // kopf trifft fremden körper
                part.x === firstPart_snakeFour.x && part.y === firstPart_snakeFour.y) ||
            // kopf trifft fremde kopf
            firstPart_snakeFour.x === firstPart_snakeTwo.x && firstPart_snakeFour.y === firstPart_snakeTwo.y ||
            firstPart_snakeFour.x === firstPart_snakeThree.x && firstPart_snakeFour.y === firstPart_snakeThree.y ||
            firstPart_snakeFour.x === firstPart_snakeOne.x && firstPart_snakeFour.y === firstPart_snakeOne.y ||
            firstPart_snakeFour.x === firstPart_snakeFive.x && firstPart_snakeFour.y === firstPart_snakeFive.y ;
        //  schlange Fünf
        let duplicatePart_snakeFive = otherParts_snakeFive.find(part => // kopf trifft auf eigenen körper
                part.x === firstPart_snakeFive.x && part.y === firstPart_snakeFive.y) ||
            otherParts_snakeTwo.find(part => // kopf trifft fremden körper
                part.x === firstPart_snakeFive.x && part.y === firstPart_snakeFive.y) ||
            otherParts_snakeThree.find(part => // kopf trifft fremden körper
                part.x === firstPart_snakeFive.x && part.y === firstPart_snakeFive.y) ||
            otherParts_snakeFour.find(part => // kopf trifft fremden körper
                part.x === firstPart_snakeFive.x && part.y === firstPart_snakeFive.y) ||
            otherParts_snakeFive.find(part => // kopf trifft fremden körper
                part.x === firstPart_snakeFive.x && part.y === firstPart_snakeFive.y) ||
            // kopf trifft fremde kopf
            firstPart_snakeFive.x === firstPart_snakeTwo.x && firstPart_snakeFive.y === firstPart_snakeTwo.y ||
            firstPart_snakeFive.x === firstPart_snakeThree.x && firstPart_snakeFive.y === firstPart_snakeThree.y ||
            firstPart_snakeFive.x === firstPart_snakeFour.x && firstPart_snakeFive.y === firstPart_snakeFour.y ||
            firstPart_snakeFive.x === firstPart_snakeOne.x && firstPart_snakeFive.y === firstPart_snakeOne.y ;
        // 1. schlange
         if (
             duplicatePart_snakeOne
        ){  // schlange zurücksetzen / alle stücken entfernt
            snakeOne =[
                {
                    x : 12,
                    y : 12
                }];
            direction_snakeOne = '';

        }
        // 2. schlange
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
        // 3. schlange
        if (
            duplicatePart_snakeThree
        ){  // schlange zurücksetzen / alle stücken entfernt
            snakeThree =[
                {
                    x : 22,
                    y : 22
                }];
            direction_snakeThree = '';
        }
        // 4. schlange
        if (
            duplicatePart_snakeFour
        ){  // schlange zurücksetzen / alle stücken entfernt
            snakeFour =[
                {
                    x : 22,
                    y : 2
                }];
            direction_snakeFour = '';
        }
        // 5. schlange
        if (
            duplicatePart_snakeFive
        ){  // schlange zurücksetzen / alle stücken entfernt
            snakeFive =[
                {
                    x : 2,
                    y : 22
                }];
            direction_snakeFive = '';
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
        let allParts_SnakeThree;
        let allParts_SnakeFour;
        let allParts_SnakeFive;
        let belegteFelder;//= allParts_SnakeOne.find(part =>
            //part.x === randomX && part.y === randomY) ;
        //let snake_part_two;//= allParts_SnakeTwo.find(part =>
            //part.x === randomX && part.y === randomY) ;

        do {
            allParts_SnakeTwo = snakeTwo.slice();
            allParts_SnakeOne = snakeOne.slice();
            allParts_SnakeThree = snakeThree.slice();
            allParts_SnakeFour = snakeFour.slice();
            allParts_SnakeFive = snakeFive.slice();
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
                allParts_SnakeThree.find(part =>
                    part.x === randomArray[0].x && part.y === randomArray[0].y) ||
                allParts_SnakeFour.find(part =>
                    part.x === randomArray[0].x && part.y === randomArray[0].y) ||
                allParts_SnakeFive.find(part =>
                    part.x === randomArray[0].x && part.y === randomArray[0].y) ||
                false ;

            // snake_part_two = allParts_SnakeTwo.find(part =>
            //     part.x === randomArray.x && part.y === randomArray.y) ;
            //  console.log('#2',randomArray[0].x,' ',randomArray[0].y) ;//,snake_part_two);
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
        document.getElementById('snake_one_score').value=punkte.toString() ;
        if(punkte > document.getElementById('snake_two_score').value &&
            punkte > document.getElementById('snake_three_score').value &&
            punkte > document.getElementById('snake_four_score').value &&
            punkte > document.getElementById('snake_five_score').value &&
            punkte>document.getElementById('top_score').value
        ){
            document.getElementById('top_score').value=punkte.toString();
            document.getElementById('top_score').style.backgroundColor=snake_one_color;
            document.getElementById('h3').style.color=snake_one_color;
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
        document.getElementById('snake_two_score').value= punkte.toString() ;
        if (punkte  > document.getElementById('snake_one_score').value &&
            punkte > document.getElementById('snake_three_score').value &&
            punkte > document.getElementById('snake_four_score').value &&
            punkte > document.getElementById('snake_five_score').value &&
            punkte  > document.getElementById('top_score').value)
        {
            document.getElementById('top_score').value=punkte.toString();
            document.getElementById('top_score').style.backgroundColor=snake_two_color;
            document.getElementById('h3').style.color=snake_two_color;
        }

    }
    function shiftSnakeThree(){
        for (let i = snakeThree.length -1; i > 0; i--){
            const part = snakeThree[i];
            const lastPart = snakeThree[i -1];
            part.x = lastPart.x;
            part.y = lastPart.y;
        }
        let punkte= (snakeThree.length -1) * 10;
        document.getElementById('snake_three_score').value= punkte.toString() ;
        if (punkte  > document.getElementById('snake_one_score').value &&
            punkte > document.getElementById('snake_two_score').value &&
            punkte > document.getElementById('snake_four_score').value &&
            punkte > document.getElementById('snake_five_score').value &&
            punkte  > document.getElementById('top_score').value)
        {
            document.getElementById('top_score').value=punkte.toString();
            document.getElementById('top_score').style.backgroundColor=snake_three_color;
            document.getElementById('h3').style.color=snake_three_color;
        }

    }
    function shiftSnakeFour(){
        for (let i = snakeFour.length -1; i > 0; i--){
            const part = snakeFour[i];
            const lastPart = snakeFour[i -1];
            part.x = lastPart.x;
            part.y = lastPart.y;
        }
        let punkte= (snakeFour.length -1) * 10;
        document.getElementById('snake_four_score').value= punkte.toString() ;
        if (punkte  > document.getElementById('snake_one_score').value &&
            punkte > document.getElementById('snake_three_score').value &&
            punkte > document.getElementById('snake_two_score').value &&
            punkte > document.getElementById('snake_five_score').value &&
            punkte  > document.getElementById('top_score').value)
        {
            document.getElementById('top_score').value=punkte.toString();
            document.getElementById('top_score').style.backgroundColor=snake_four_color;
            document.getElementById('h3').style.color=snake_four_color;
        }

    }
    function shiftSnakeFive(){
        for (let i = snakeFive.length -1; i > 0; i--){
            const part = snakeFive[i];
            const lastPart = snakeFive[i -1];
            part.x = lastPart.x;
            part.y = lastPart.y;
        }
        let punkte= (snakeFive.length -1) * 10;
        document.getElementById('snake_five_score').value= punkte.toString() ;
        if (punkte  > document.getElementById('snake_one_score').value &&
            punkte > document.getElementById('snake_three_score').value &&
            punkte > document.getElementById('snake_four_score').value &&
            punkte > document.getElementById('snake_two_score').value &&
            punkte  > document.getElementById('top_score').value)
        {
            document.getElementById('top_score').value=punkte.toString();
            document.getElementById('top_score').style.backgroundColor=snake_five_color;
            document.getElementById('h3').style.color=snake_five_color;
        }

    }

    // function crossWalls(){  ---------------------eine function für alle
    //     if (snakeOne[0].x <= 0 )
    //     { snakeOne[0].x += rows ;}
    //     if(snakeOne[0].y <= 0 )
    //     {snakeOne[0].y +=  cols ;}
    //     if(snakeOne[0].y >= cols)
    //     {snakeOne[0].y += - cols ;}
    //     if (snakeOne[0].x >= rows )
    //     {snakeOne[0].x += - rows ;}
    // }
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
        // schlange drei
        if (snakeThree[0].x <= 0 )
        { snakeThree[0].x += rows ;}
        if(snakeThree[0].y <= 0 )
        {snakeThree[0].y +=  cols ;}
        if(snakeThree[0].y >= cols)
        {snakeThree[0].y += - cols ;}
        if (snakeThree[0].x >= rows  )
        {snakeThree[0].x += - rows ;}
        // schlange vier
        if (snakeFour[0].x <= 0 )
        { snakeFour[0].x += rows ;}
        if(snakeFour[0].y <= 0 )
        {snakeFour[0].y +=  cols ;}
        if(snakeFour[0].y >= cols)
        {snakeFour[0].y += - cols ;}
        if (snakeFour[0].x >= rows  )
        {snakeFour[0].x += - rows ;}
        // schlange fünf
        if (snakeFive[0].x <= 0 )
        { snakeFive[0].x += rows ;}
        if(snakeFive[0].y <= 0 )
        {snakeFive[0].y +=  cols ;}
        if(snakeFive[0].y >= cols)
        {snakeFive[0].y += - cols ;}
        if (snakeFive[0].x >= rows  )
        {snakeFive[0].x += - rows ;}
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
        if (foodCollected_snakeThree){
            snakeThree = [{
                x: snakeThree[0].x,
                y: snakeThree[0].y
            }, ...snakeThree]; // um das Futterstück hinten anzuhängen
            // fressbestätigung wieder auf (false) setzen,
            // anhaltenden wachstum zu beenden.
            foodCollected_snakeThree = false ;
        }
        if (foodCollected_snakeFour){
            snakeFour = [{
                x: snakeFour[0].x,
                y: snakeFour[0].y
            }, ...snakeFour]; // um das Futterstück hinten anzuhängen
            // fressbestätigung wieder auf (false) setzen,
            // anhaltenden wachstum zu beenden.
            foodCollected_snakeFour = false ;
        }
        if (foodCollected_snakeFive){
            snakeFive = [{
                x: snakeFive[0].x,
                y: snakeFive[0].y
            }, ...snakeFive]; // um das Futterstück hinten anzuhängen
            // fressbestätigung wieder auf (false) setzen,
            // anhaltenden wachstum zu beenden.
            foodCollected_snakeFive = false ;
        }
        // wachstum : nach der futter bestätigung
        // damit die schlange langsam wächst anstatt
        // sofort zu wachsen.(flüssigere performances)
        shiftSnakeOne();
        shiftSnakeTwo();
        shiftSnakeThree();
        shiftSnakeFour();
        shiftSnakeFive();

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
        // schlange DREI bewegungsabfrage
        if(direction_snakeThree === 'LEFT' && direction_snakeThree !== 'RIGHT'){

            snakeThree[0].x--;
        }
        else if(direction_snakeThree === 'UP' && direction_snakeThree !== 'DOWN'){
            snakeThree[0].y--;
        }
        else if(direction_snakeThree === 'RIGHT' && direction_snakeThree !== 'LEFT'){
            snakeThree[0].x++;
        }
        else if(direction_snakeThree === 'DOWN' && direction_snakeThree !== 'UP'){
            snakeThree[0].y++;
        }
// schlange VIER bewegungsabfrage
        if(direction_snakeFour === 'LEFT' && direction_snakeFour !== 'RIGHT'){

            snakeFour[0].x--;
        }
        else if(direction_snakeFour === 'UP' && direction_snakeFour !== 'DOWN'){
            snakeFour[0].y--;
        }
        else if(direction_snakeFour === 'RIGHT' && direction_snakeFour !== 'LEFT'){
            snakeFour[0].x++;
        }
        else if(direction_snakeFour === 'DOWN' && direction_snakeFour !== 'UP'){
            snakeFour[0].y++;
        }
// schlange FÜNF bewegungsabfrage
        if(direction_snakeFive === 'LEFT' && direction_snakeFive !== 'RIGHT'){

            snakeFive[0].x--;
        }
        else if(direction_snakeFive === 'UP' && direction_snakeFive !== 'DOWN'){
            snakeFive[0].y--;
        }
        else if(direction_snakeFive === 'RIGHT' && direction_snakeFive !== 'LEFT'){
            snakeFive[0].x++;
        }
        else if(direction_snakeFive === 'DOWN' && direction_snakeFive !== 'UP'){
            snakeFive[0].y++;
        }


        // was passieren soll wenn schlange EINS auf futter trifft
        if (snakeOne[0].x === food.x &&
            snakeOne[0].y === food.y){
            // bestätigen das gefressen wurde (true),
            // benötigt für weiteren schritt (wachstum).
            foodCollected_snakeOne = true;
            ei_sound.play();
            // Futter einsammeln (suggerieren)
            placeFood();
        }
        // was passieren soll wenn schlange ZWEI auf futter trifft
        if (snakeTwo[0].x === food.x &&
            snakeTwo[0].y === food.y){
            // bestätigen das gefressen wurde (true),
            // benötigt für weiteren schritt (wachstum).
            foodCollected_snakeTwo = true;
            ei_sound.play();
            // Futter einsammeln (suggerieren)
            placeFood();
        }
        // was passieren soll wenn schlange DREI auf futter trifft
        if (snakeThree[0].x === food.x &&
            snakeThree[0].y === food.y){
            // bestätigen das gefressen wurde (true),
            // benötigt für weiteren schritt (wachstum).
            foodCollected_snakeThree = true;
            ei_sound.play();
            // Futter einsammeln (suggerieren)
            placeFood();
        }
        // was passieren soll wenn schlange VIER auf futter trifft
        if (snakeFour[0].x === food.x &&
            snakeFour[0].y === food.y){
            // bestätigen das gefressen wurde (true),
            // benötigt für weiteren schritt (wachstum).
            foodCollected_snakeFour = true;
            ei_sound.play();
            // Futter einsammeln (suggerieren)
            placeFood();
        }
        // was passieren soll wenn schlange FÜNF auf futter trifft
        if (snakeFive[0].x === food.x &&
            snakeFive[0].y === food.y){
            // bestätigen das gefressen wurde (true),
            // benötigt für weiteren schritt (wachstum).
            foodCollected_snakeFive = true;
            ei_sound.play();
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
        // schlange ZWEI steuerung + verhindern von rückwärts fahren.
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
        // schlange DREI steuerung + verhindern von rückwärts fahren.
        if(e.keyCode === 100 && direction_snakeThree !== 'RIGHT'){ //NUM4
            direction_snakeThree = 'LEFT';
        }
        else if(e.keyCode === 104 && direction_snakeThree !== 'DOWN'){ //NUM8
            direction_snakeThree = 'UP';
        }
        else if(e.keyCode === 102 && direction_snakeThree !== 'LEFT'){ //NUM6
            direction_snakeThree = 'RIGHT';
        }
        else if(e.keyCode === 101 && direction_snakeThree !== 'UP'){ //NUM5
            direction_snakeThree = 'DOWN';
        }
        // schlange VIER steuerung + verhindern von rückwärts fahren.
        if(e.keyCode === 74 && direction_snakeFour !== 'RIGHT'){ //J
            direction_snakeFour = 'LEFT';
        }
        else if(e.keyCode === 73 && direction_snakeFour !== 'DOWN'){ //I
            direction_snakeFour = 'UP';
        }
        else if(e.keyCode === 76 && direction_snakeFour !== 'LEFT'){ //L
            direction_snakeFour = 'RIGHT';
        }
        else if(e.keyCode === 75 && direction_snakeFour !== 'UP'){ //K
            direction_snakeFour = 'DOWN';
        }
        // schlange FÜNF steuerung + verhindern von rückwärts fahren.
        if(e.keyCode === 86 && direction_snakeFive !== 'RIGHT'){ //V
            direction_snakeFive = 'LEFT';
        }
        else if(e.keyCode === 71 && direction_snakeFive !== 'DOWN'){ //G
            direction_snakeFive = 'UP';
        }
        else if(e.keyCode === 78 && direction_snakeFive !== 'LEFT'){ //N
            direction_snakeFive = 'RIGHT';
        }
        else if(e.keyCode === 66 && direction_snakeFive !== 'UP'){ //B
            direction_snakeFive = 'DOWN';
        }
    }


</script>

</body>

</html>
