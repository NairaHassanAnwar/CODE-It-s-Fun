<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="homestyle.css">
  <link rel="icon"  href="android-chrome-192x192.png" type="image/x-icon">
  <style>
    * {box-sizing: border-box}
    body {font-family: "Lato", sans-serif;}

    /* Style the tab */
    .tab {
      float: left;
      border: 1px solid #ccc;
      background-color: #f1f1f1;
      width: 15%;
      height: 700px;
    }

    /* Style the buttons inside the tab */
    .tab button {
      display: block;
      background-color: inherit;
      color: fcc200 ;
      padding: 22px 16px;
      width: 100%;
      border: none;
      outline: none;
      text-align: left;
      cursor: pointer;
      transition: 0.3s;
      font-size: 17px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
      background-color: #ddd;
    }

    /* Create an active/current "tab button" class */
    .tab button.active {
      background-color: #fcc200 ;
    }

    /* Style the tab content */
    .tabcontent {
      float: left;
      padding: 0px 12px;
      border: 1px solid #ccc;
      width: 85%;
      border-left: none;
      height: 700px;
    }
    h2{
        color:white;
    }
    p{
        color:white;
        font-size: 24px;
    }
    h1{
        color:#ff8c69 ;
    }
    ul.custom {
  list-style-image: url('bullet.png');
  color: white;
   }
   li{
        color:white;
        font-size: 24px;
   }
    hr{
        color:#f0f8ff  ;
    }
  </style>
</head>
<body>
  <div class="header" >
  <img class="logo" src="logo2.png" alt="pic" width="190"  style="padding-left: 0px; padding-top1px" > 
  <div>
     <!-- Login button -->
  <a href="loginForm.php" class="button">Login</a>
  <!-- Signup button -->
  <a href="register.php" class="button">Sign Up</a>
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

  <div class="tab">
    <button class="tablinks" onclick="openLesson(event, 'PHP Intro')" id="defaultOpen">PHP Intro</button>
    <button class="tablinks" onclick="openLesson(event, 'PHP Syntax')">PHP Syntax</button>
    <button class="tablinks" onclick="openLesson(event, 'PHP Data Types')">PHP Data Types</button>
  </div>

  <div id="PHP Intro" class="tabcontent">
    <h1>PHP Introduction</h1>
    <h2>What is PHP?</h2>
       <p> &nbsp;   &nbsp; 1) PHP is an acronym for "PHP: Hypertext Preprocessor"<br>
           &nbsp;   &nbsp; 2) PHP is a widely-used, open source scripting language<br>
           &nbsp;   &nbsp; 3) PHP scripts are executed on the server<br>
           &nbsp;   &nbsp; 4) PHP is free to download and use</p> <hr>
        <h2>What Can PHP Do?</h2>
        <ul class="circle">
        <li> PHP can generate dynamic page content</li>
        <li> PHP can create, open, read, write, delete, and close files on the server</li>
        <li> PHP can collect form data</li>
        <li> PHP can send and receive cookies</li>
        <li> PHP can add, delete, modify data in your database</li>
        <li> PHP can be used to control user-access</li>
        <li> PHP can encrypt data</li></ul>
        <p> With PHP you are not limited to output HTML. You can output images or PDF files. 
        You can also output any text, such as XHTML and XML.</p>
  </div>

    <div id="PHP Syntax" class="tabcontent">
       <h1>PHP Syntax</h1>
       <h2>Basic PHP Syntax</h2>
       <p>&nbsp;   &nbsp; A PHP script can be placed anywhere in the document.</p>
       <p>&nbsp;   &nbsp; A PHP script starts with <?php</p>
        <p>&nbsp;   &nbsp; ends with ?></p>
       <p>&nbsp;   &nbsp; The default file extension for PHP files is ".php".</p>
       <p>&nbsp;   &nbsp; A PHP file normally contains HTML tags, and some PHP scripting code.</p>
       <p><b style="color:red">Note:</b>PHP statements end with a semicolon (;).</p>
    </div>
  
  <div id="PHP Data Types" class="tabcontent">
    <h1>PHP Data Types</h1>
    <p>&nbsp;   &nbsp; Variables can store data of different types, and different data types can do different things.</p>
    <p>&nbsp;   &nbsp; PHP supports the following data types:</p>
    <ul class="circle">
        <li> String</li>
        <li> Integer</li>
        <li> Float (floating point numbers - also called double)</li>
        <li> Boolean</li>
        <li> Array</li>
        <li> Object</li>
        <li> NULL</li></ul>
  </div>

  <script>
    function openLesson(evt, lesson) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(lesson).style.display = "block";
      evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
  </script>
</body>
</html>
<?php

?>
