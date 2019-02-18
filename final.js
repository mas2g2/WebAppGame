
var myGamePiece;
var myObstacle = [];
var myScore;
var gamePaused = false;
function startGame() {
    $("h1").addClass("nice");
    $("h2").addClass("nice");
    //$("#restart").hide();	
    myGameArea.start();
    myGamePiece = new component(30, 30, "flappy.jpg" ,10, 120,"image");
    myScore = new component("30px","Consolas","black",10,20,"text");
    //myObstacle = new component(10,200,"green",300,120);
}

var myGameArea = {
    canvas : document.createElement("canvas"),
    start : function() {
        this.canvas.width = 480;
        this.canvas.height = 270;
        this.context = this.canvas.getContext("2d");
        document.body.insertBefore(this.canvas, document.body.childNodes[0]);
	this.frameNo = 0;
	this.interval = setInterval(updateGameArea, 20);
	window.addEventListener('keydown', function (e) {
            myGameArea.keys = (myGameArea.keys || []);
            myGameArea.keys[e.keyCode] = true;
        })
        window.addEventListener('keyup', function (e) {
            myGameArea.keys[e.keyCode] = false; 
        })
    },
    clear : function (){
    	this.context.clearRect(0,0,this.canvas.width,this.canvas.height);
    },
    stop : function() {
	
        clearInterval(this.interval);
    }
}

function component(width, height, color, x, y,type) {
    this.type = type;
    if(type == "image"){
                this.image = new Image();
                this.image.src = color;
    }
    this.width = width;
    this.height = height;
    this.speedX = 0;
    this.speedY = 0;
    this.gravity = 0.05;	
    this.gravitySpeed = 0;
    this.x = x;
    this.y = y;    
    this.update = function(){
    	ctx = myGameArea.context;
	if(this.type == "text"){
		ctx.font = this.width + " " + this.height;
		ctx.fillStyle = color;
    		ctx.fillText(this.text,this.x,this.y);
	} else if(this.type == "image"){
		ctx.drawImage(this.image, 
        	this.x, 
        	this.y,
        	this.width, this.height);
	}else{
		ctx.fillStyle = color;
      		ctx.fillRect(this.x, this.y, this.width, this.height);
	}
    }
    this.newPos = function(){
//	this.gravitySpeed += this.gravity;
    	this.x += this.speedX;
	this.y += this.speedY;
	this.hitBottom();
    }
    this.hitBottom = function (){
    	var rockbottom = myGameArea.canvas.height - this.height;
	
        if (this.y > rockbottom) {
            this.y = rockbottom;
        } 
    }
    this.crashWith = function(otherobj) {
        var myleft = this.x;
        var myright = this.x + (this.width);
        var mytop = this.y;
        var mybottom = this.y + (this.height);
        var otherleft = otherobj.x;
        var otherright = otherobj.x + (otherobj.width);
        var othertop = otherobj.y;
        var otherbottom = otherobj.y + (otherobj.height);
        var crash = true;
        if ((mybottom < othertop) ||
               (mytop > otherbottom) ||
               (myright < otherleft) ||
               (myleft > otherright)) {
           crash = false;
        }
        return crash;
    }
}

function everyinterval(n) {
    if ((myGameArea.frameNo / n) % 1 == 0) {return true;}
    return false;
}
function updateGameArea(){
    var score = myGameArea.frameNo/10;
    myGameArea.clear();
    myGamePiece.speedX = 0;
    myGamePiece.speedY = 0; 
    if (myGameArea.keys && myGameArea.keys[37]) {myGamePiece.speedX = -1; }
    if (myGameArea.keys && myGameArea.keys[39]) {myGamePiece.speedX = 1; }
    if (myGameArea.keys && myGameArea.keys[38]) {myGamePiece.speedY = -1; this.gravitySpeed = 0; this.gravity = 0;}
    if (myGameArea.keys && myGameArea.keys[40]) {myGamePiece.speedY = 1; this.gravitySpeed = 0; this.gravity = 0;}
   //myGamePiece.newPos(); 
    //myGamePiece.update();
    var x, y;
    for (i = 0; i < myObstacle.length; i += 1) {
        if (myGamePiece.crashWith(myObstacle[i])) {
            myGameArea.stop(); 
	    $("#score").html("Final Score: " + score);
	    callPHP(score);
            return;
        } 
    }
    myGameArea.clear();
    myGameArea.frameNo += 1;
    if (myGameArea.frameNo == 1 || everyinterval(150)) {
        x = myGameArea.canvas.width;
	minHeight = 20;
        maxHeight = 200;
        height = Math.floor(Math.random()*(maxHeight-minHeight+1)+minHeight);
        minGap = 50;
        maxGap = 200;
        gap = Math.floor(Math.random()*(maxGap-minGap+1)+minGap);
        myObstacle.push(new component(10, height, "green", x, 0));
        myObstacle.push(new component(10, x - height - gap, "green", x, height + gap));
    }
    for (i = 0; i < myObstacle.length; i += 1) {
        myObstacle[i].x += -1;
        myObstacle[i].update();
    }
    
    myScore.text="SCORE: " + score;
    myScore.update();
    myGamePiece.newPos();    
    myGamePiece.update();
}
function callPHP(data){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if(this.readyState = 4 && this.status == 200){
	//		var score = parseFloat(data);			
		}
	};
	xhttp.open("GET","game_data.php?score="+data,true);
	xhttp.send();
}
function moveUp(){
	myGamePiece.speedY -= 1;
}
function moveDown(){
	myGamePiece.speedY += 1;
}
function stopMove(){
	myGamePiece.speedX = 0;
	myGamePiece.speedY = 0;
}
