<!doctype html>
<html>
<head>
    <style>
        body{ background-color:white; }
        #canvas{border:1px solid red; }
    </style>
    <script>
        window.onload=(function(){

            // canvas related variables
            var canvas=document.getElementById("canvas");
            var ctx=canvas.getContext("2d");

            // stroke using a CSS color: named, RGB, HSL, etc
            ctx.fillStyle='red';
            ctx.fillRect(50,50,100,50);

            // stroke using a linear gradient
            var gradient = ctx.createLinearGradient(225,50,300,50);
            gradient.addColorStop(0,'red');
            gradient.addColorStop(1,'green');
            ctx.fillStyle=gradient;
            ctx.fillRect(200,50,100,50);

            // stroke using a radial gradient
            var gradient = ctx.createRadialGradient(100,175,5,100,175,30);
            gradient.addColorStop(0,'red');
            gradient.addColorStop(1,'green');
            ctx.fillStyle=gradient;
            ctx.fillRect(50,150,100,50);

            // stroke using a pattern
            var patternImage=new Image();
            patternImage.onload=function(){
                var pattern = ctx.createPattern(patternImage,'repeat');
                ctx.fillStyle=pattern;
                ctx.fillRect(200,150,100,50);
            }
            patternImage.src='https://media.istockphoto.com/vectors/military-camouflage-seamless-pattern-hexagonal-grid-background-snake-vector-id848909448';

            // for demo only, draw labels by each stroke
            ctx.fillStyle='black';
            ctx.textAlign='center';
            ctx.textBaseline='middle';
            ctx.font='14px arial';
            ctx.fillText('CSS color',100,40);
            ctx.fillText('Linear Gradient color',250,40);
            ctx.fillText('Radial Gradient color',100,140);
            ctx.fillText('Pattern color',250,140);

        }); // end window.onload
    </script>
</head>
<body>
<canvas id="canvas" width=350 height=250></canvas>
</body>
</html>