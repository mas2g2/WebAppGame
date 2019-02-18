<!--
        name : Milesh Shah
        date : 12/07/2018
        pawprint : mas2g2
-->
<?php
        if(!isset($_COOKIE["ID"])){

                header("Location: index.php");
        }


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Home</title>
<style>
label {
	font-size : 14pt;
	margin-left : 10px;
	color : orange;
        text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}
body {
    margin: 0;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: auto;
    background-color: orange;
    position: fixed;
    height: 100%;
    overflow: auto;
    box-shadow : -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}

li a {
    text-align : center;
    font-size : 20pt;
    font-family : Arial;
    display: block;
    color: white;
    padding: 8px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: white;
    color: orange;
}

#content{
	border : 5px solid orange;
	color : orange;
	box-shadow : -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
        text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
	border-radius: 5%;
	width :480px;
	height : 270px;
	/*top : 0;
	position : fixed;
	top : 0;*/
	margin-left : 383px;	
	margin-top: 0;
	background-color : aqua;
	padding :10px;
}

#search {
	margin-top : 10px;
	border : 5px solid orange;
	box-shadow : -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
        width : 75%;
        height : 324px;
        margin-left : 125px;
	border-radius : 5%;
}

#search input[type=text]{
	padding : 6px;
	margin-top : 8px;
	margin-bottom :8px;
	font-size : 17px;
	border : 2px solid orange;
	margin-left : 25px;
}

#search button{
	height : 35px;
	background-color : orange;
	color : white;
	border: none;
	border-radius : 15%;
}

#search button:hover{
	background-color : white;
	color : orange;
}

body{
        margin : 0;
        background-image : url('background.png');
        height : 100%;
        background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

form{
	border:5px solid orange;
	margin-top : 10px;
	margin-left : 10px;
	border-radius : 15%;
	width : 45%;
}
iframe {
	margin-left : 250px;
	margin-bottom : 100px;
	
}
h1{
	text-align : center;
}
#video{
	float : left;
	width : 20px;
	height : auto;
	border: 5px solid orange;
	border-radius : 15%;
	padding : 50px;
	margin-left : 150px;
}
#droppable{
	width : 175px;
	height : 175px;
	margin : auto;
	border : 5px solid orange;
	
}
h4{
	text-align:center;
}
button:hover{
        color : orange;
        background-color : white;
}
.nice{
        color : orange;
        text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}
button {
	margin-top : 3px;
        border : none;
        border-radius : 15%;
        background-color : orange;
        color : white;
}
a:link,a:visited{
        text-decoration : none;
}
iframe{
	display : block;
	position : fixed;
	top : 20px;
	left : 300px;	
	width : 175px;
	height : 175px; 
	box-sizing: border-box;
}
#videoflappy,#videoplague,#videomoderncombat,#videopubg{
	width : 44px;
	height :auto;
}
img{
	width : 40px;
	height : 40px;
}
.bg{
	/* margin : auto;
                padding : 30px;
/*              border : 5px solid orange;*/
                width :600px;
        /*      border-radius : 25%;*/
                height : 150px;
		
}
.nice{
	text-align : center;
	margin : auto;	
        color : orange;
        text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}
#sub{
	width : 100%;
	margin-left : 365px;	
}
</style>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript">
/*window.onload = function() {
    if (window.jQuery) {  
        // jQuery is loaded  
        alert("Yeah!");
    } else {
        // jQuery is not loaded
        alert("Doesn't Work");
    }
}*/
$(function(){
	$("#videoflappy,#videoplague,#videomoderncombat,#videopubg").draggable();
	$("#content").droppable({
		drop: function(event,ui){
			console.log("Hello");
			alert("Dropped");
			console.dir(ui);
			$(this).find("iframe").attr("src",ui.draggable[0].dataset.info);
		}
});
});
</script>

</head>
<body>
<!--<ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="game.php">Game</a></li>
  <li><a href="index.php?logout=true">Logout</a></li>
</ul>--> 
<div class="bg">
<div id="content">
<!--<h1>Required Youtube Video</h1>-->
<div id="droppable">
<h4>Drag Images Over Here</h4>
<iframe width="300" height="200"></iframe>
</div>
</div>
<div id="sub">
<h1 class="nice">Required Youtube Video</h1>
<button id="restart"><a href="game.php">Game</a></button>
<button id="home"><a href="home.php">Home</a></button>
<button id="logout"><a href="index.php?logout=true">Logout</a></button>
</div>
</div>
<div id="videoflappy" data-info="https://www.youtube.com/embed/L07i4g-zhDA">
	<img src="flappy.jpg" alt="Flappy">	
</div>
<div id="videoplague" data-info="https://www.youtube.com/embed/Mk_7hTmPyu4">
        <img src="plague.jpg" alt="Flappy">
</div>
<div id="videomoderncombat" data-info="https://www.youtube.com/embed/XeEgSF_k-xE">
        <img src="moderncombat.jpg" alt="Flappy">
</div>
<div id="videopubg" data-info="https://www.youtube.com/embed/4rG9noTfb4A">
        <img src="pubg.jpg" alt="Flappy">
</div>
</div>
<!--
<button id="restart"><a href="game.php">Game</a></button>
<button id="home"><a href="home.php">Home</a></button>
<button id="logout"><a href="index.php?logout=true">Logout</a></button>i-->
</body>
</html>
