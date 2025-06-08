<head>
<style>
    body{
   font-family: Arial, sans-serif;
  background-color: #095c91;
  color: #333;
   }
.form { 
   max-width: 600px;
  margin: 0 auto;
  padding: 60px;
}
</style>
</head>
<?php
include 'dbconnection.php';
try{
if(isset($_POST['register'])){
$userid=$_POST['userid'];
$password=$_POST['password'];
$sql="UPDATE users SET userid=:a,password=:b where userid='".$_GET['userid']."'";

$stmt=$conn->prepare($sql);
$stmt->execute(array(
  ':a'=>$userid,
  ':b'=>md5($password),
));
header("Location:admin.php");
}
}
catch(PDOException $e){
echo "Cannot insert record:".$e->getMessage();	
}
$conn=null;


?>
<section class="container forms" >
            <div class="form rigster">
                <div class="form-content">
                    <header style="color:white;font-size:30px;text-align:center">Update Users</header><br>
                    <form action="" method="post"  class="form" >
                        <div class="field input-field">
                            <input type="text" placeholder="userid" class="input" name="userid" value="<?php if(isset($_GET['userid'])) echo $_GET['userid']; ?>" >
                            
                        </div>

                        <div class="field input-field">
                            <input type="password" placeholder="Password" class="password" name="password" value="<?php if(isset($_GET['password'])) echo $_GET['password']; ?>" >
                            <i class='bx bx-hide eye-icon'></i>
                           
                        </div>

                        <div class="field input-field">
                            <input type="password" placeholder="Repassword" class="password"  name='repassword' value="<?php if(isset($_GET['repassword'])) echo $_GET['repassword']; ?>" >
                            <i class='bx bx-hide eye-icon'></i>
                           
                        </div> <br>

                        <div class="field button-field">
                            <input type='submit' name='register' value='UPDATE' class="b1">
                        </div>
                    </form>
                </div>
 
        </section>


