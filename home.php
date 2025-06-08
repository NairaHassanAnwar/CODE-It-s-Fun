<?php
session_start();
if(isset($_SESSION['courseid']))
//echo "Welcome ".$_SESSION['userid']."<br>";
?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="homestyle.css">
  <link rel="icon"  href="android-chrome-192x192.png" type="image/x-icon">
  <title="Home">
  <script type="text/javascript" language="javascript">
 </script>
<style>
.video-container {
  position: relative;
  width: 100%;
  height: 0;
  padding-bottom: 56.25%;
}

.video-container video {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
* {box-sizing: border-box;}
.mySlides {display: none;}
img {vertical-align: center;
float:reight;}

.slideshow-container {
  max-width: 9000px;
  margin: auto;
  position: absolute;
  top: 90;
  left:20;
  width: 100%;
  height: 100%;
  display: flex;
  animation: slideShow 50s infinite;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.ease-in-out {
  -webkit-animation-name: ease-in-out;
  -webkit-animation-duration: 1.5s;
  animation-name: ease-in-out;
  animation-duration: 4.5s;
}

@-webkit-keyframes ease-in-out{
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes ease-in-out{
  from {opacity: .4} 
  to {opacity: 1}
} 
.typewriter h1 {
	color: white;
   font-family:BlenderProThin;
   top:180px;
  right:50px;
  display:inline-block;
  position:absolute;
  overflow: hidden; /* Ensures the content is not revealed until the animation */
  border-right: .15em solid orange; /* The typwriter cursor */
  white-space: nowrap; /* Keeps the content on a single line */
  margin: 0 auto; /* Gives that scrolling effect as the typing happens */
  letter-spacing: .15em; /* Adjust as needed */
  animation: 
    typing 7s.5s steps(50, end) forwards,
    blink-caret .95s step-end infinite;
}

/* The typing effect */
@keyframes typing {
  from { width: 0 }
  to { width: 100% }
}

/* The typewriter cursor effect */
@keyframes blink-caret {
  from, to { border-color: transparent }
  50% { border-color: orange; }
}
#backdround {background-image:url(where-to-stay-1); background-position:top reight}
body{
background-color:#0A1828    ;
}
th{
     font-size:40px;
    background-color:#20b2aa;
    font-family:Arial,Sans-serif;
    COLOR:WHITE;
}
</style>
</head>
<body>
 <div class="header" >
<img class="logo" src="logo2.png" alt="pic" width="190"  style="padding-left: 0px; padding-top1px" > 
<div>
  <a href="loginForm.php" class="button">Login</a>
  </div>
  </div>
<div class="topnav">
  <a class="active" href="home.php">Home</a>
  <a href="about.php"target="_blank">About</a>
  <div class="dropdown">
    <button class="dropbtn">Tutorial  
    </button>
    <div class="dropdown-content">
      <a href=".html">HTML</a>
      <a href=".html">CSS</a>
      <a href="html">JavaScript</a>
	   <a href="phppg.php">PHP</a>
    </div>
  </div> 
  <a href="cont.php"target="_blank">Contact</a>
</div>
<br>
<div class="video-container">
  <video src="Technology Network Loop Background _ Blue Animated lines Backgrounds(720P_HD).mp4" autoplay loop muted></video>
  <div class="slideshow-container">

<div class="mySlides fade">
  <img src="img9.png" style="width:100%;padding-left=60px;top:60" height="60%;padding-bottom:2; margin-left:1;margin-top:0" top="20">
  <div class="typewriter">
  <h1> Welcome to <br>our Code Haven!  🚀</h1>
</div>
  </div>

<div class="mySlides fade">
  <img src="im.png" style="width:100%" height="60%; padding-bottom:2; margin-left:1">
  <div class="typewriter">
  <h1> From Zero to <br>Hero: Master<br> Web Development. 🌐</h1>
</div>
</div>

<div class="mySlides fade">
  <img src="img4.png" style="width:100%" height="60%; padding-bottom:2; margin-left:1">
    <div class="typewriter">
  <h1> Explore Our <br>Code Playground! 🎮</h1>
</div>
</div>
</div>
</div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  slides[slideIndex-1].style.display = "block";  
  setTimeout(showSlides, 3000); 
}
</script><br><br>
</body>
  </html>
<html>
<head>  
<style>
   body{
   background-color:#003153   ;
   }
   
  h2{
color:white;
 font-size: 28px;
 font-family: 'Poppins', sans-serif;
}
hr{
border: 10px solid blue;
 border-radius: 5px;
}
td{
    font-size:30px;
}
th{
    font-size:50px;
}
.center {
  margin-left: auto;
  margin-right: auto;
}
   </style>
  </head>
  <body>
<marquee style="font-family:Arial,Sans-serif;color:#ffde24;font-size:55"><i>Available  </i> 
<b style="font-family:Lucida Handwriting,Cursive;color:#ffde24;font-size:55"> 
<b style="color:#d600d6"> Courses </b>
</marquee>
<hr>
<table border="1" class="center" height="300" width="1200" style="background-color:white">
<tr><th>Course ID</th><th>Course Name</th><th>Description</th></tr>
<?php
include 'dbconnection.php';
$sql="SELECT * FROM course ";
$stmt=$conn->query($sql);
$rows=$stmt->fetchAll(PDO::FETCH_ASSOC);
foreach($rows as $row){
echo "<tr>";
echo "<td>{$row['courseid']}</td>";
echo "<td>{$row['coursename']}</td>";
echo "<td>{$row['description']}</td>";
echo "</tr>";
}
?>
</table>
</body>
</html>



















