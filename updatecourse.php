<head>
<style>
    body{
      font-family: Arial, sans-serif;
    background-color: #4682b4;
    color: #333;
   }
   h1 {
  text-align: center;
  color: #4CAF50;
  margin-top: 50px;
}

form {
  max-width: 600px;
  margin: 0 auto;
  background-color: white;
  padding: 60px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0,0,0,0.1);
}
input[type=text], textarea {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  background-color: #0171d3;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}
</style>
</head>
<?php
include ('dbconnection.php');
try{
if(isset($_POST['b1'])){
$courseid=$_POST['courseid'];
$coursename=$_POST['coursename'];
$description=$_POST['description'];
$sql="UPDATE course SET courseid=:a,coursename=:b,description=:c where courseid='".$_GET['courseid']."'";

$stmt=$conn->prepare($sql);
$stmt->execute(array(
  ':a'=>$courseid,
  ':b'=>$coursename,
  ':c'=>$description
));
header("Location:admincourse.php");
}
}
catch(PDOException $e){
echo "Cannot insert record:".$e->getMessage();	
}
$conn=null;
?>
<form action="" method="post">
courseid:<input type='text' name='courseid'><br>
Course Name:<input type='text' name='coursename'><br>

description:<textarea name='description' rows='3' cols='15'>
</textarea><br>

<input type='submit' name='b1' value='Update Course'>
</form>
<a href="admincourse.php" style="color:#ffdf00;font-size:20px">Click here to view courses </a>
</body>
</html>
