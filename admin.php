<?php
session_start();
if(isset($_SESSION['userid']))
//echo "Welcome ".$_SESSION['userid']."<br>";
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
<b style="color:#d600d6"> Users </b>
</marquee>
<hr><BR>
<table border='1' class="center" height="100" width="600" style="background-color:white">
<tr><th>Userid</th><th>User Type</th><th></th><th></th></tr>
<?php
include 'dbconnection.php';
$sql="SELECT * FROM users WHERE type!='admin'";
$stmt=$conn->query($sql);
$rows=$stmt->fetchAll(PDO::FETCH_ASSOC);
foreach($rows as $row){
echo "<tr>";
echo "<td>{$row['userid']}</td>";
echo "<td>{$row['type']}</td>";
echo "<td><a href='del.php?userid={$row['userid']}'>DELETE</a></td>";
echo "<td><a href='up.php?userid={$row['userid']}&type={$row['type']}'>UPDATE</a></td>";

echo "</tr>";
}
?>
</table><br><br>
<table>
<tr><td><a href='logout.php' style="color:#ffdf00;font-size:20px">Click here to logout</a></td></tr>
<tr><td><a href='addcourse.php' style="color:#ffdf00;font-size:20px">Click here to add course</a></td></tr>
</table>
</body>
  </html>
