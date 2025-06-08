<?php
session_start();
if(isset($_SESSION['courseid']))
?>
<html>
<head>  
<style>
   body{
   font-family: Arial, sans-serif;
  background-color: #095c91;
  color: #333;
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
    font-size:40px;
    background-color:#20b2aa;
    font-family:Arial,Sans-serif;
    COLOR:WHITE;
}
.center {
  margin-left: auto;
  margin-right: auto;
}
   </style>
  </head>
  <body>
<div style="height:60">
<marquee style="font-family:Arial,Sans-serif;color:#ffde24;font-size:55"><i>List of  </i> 
<b style="font-family:Lucida Handwriting,Cursive;color:#ffde24;font-size:55"> 
<b style="color:#d600d6"> Courses </b>
</marquee>
</div>
<hr>
<table border='1' class="center" height="300" width="1000" style="background-color:white">
<tr><th>Course ID</th><th>Course Name</th><th>Description</th><th></th><th></th></tr>
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
echo "<td><a href='deletecourse.php?
courseid={$row['courseid']}'>DELETE</a></td>";
echo "<td><a href='updatecourse.php?
courseid={$row['courseid']}&coursename={$row['coursename']}&description={$row['description']}'>UPDATE</a></td>";

echo "</tr>";
}
?>
</table><br>
<a href='admin.php' style="color:#ffdf00;font-size:20px">View Users</a><br>
