<?php
include 'dbconnection.php';
if(isset($_POST['register'])){
$userid=$_POST['userid'];
$password=$_POST['password'];
$repassword=$_POST['repassword'];
$type=$_POST['type'];
if(!empty($userid) and !empty($password) and 
!empty($repassword) and !empty($type) and 
$password==$repassword){
$sql="INSERT INTO users VALUES(:a,:b,:c)";
$stmt=$conn->prepare($sql);
$stmt->execute(
  array(
  ':a'=>$userid,
  ':b'=>md5($password),
  ':c'=>$type
  )
);
header('Location:loginForm.php');
}
else
echo "<script>alert('Please make sure that 
you enter all value and retype the same password')</script>";
}
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Register Form </title>


     <link rel="stylesheet" href="style1.css">
            
    
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
                    
</head>
<body>
        <section class="container forms">
            <div class="form rigster">
                <div class="form-content">
                    <header>Register</header>
                    <form action="" method="post"   >
                        <div class="field input-field">
                            <input type="text" placeholder="userid" class="input" name="userid">
                            
                        </div>

                        <div class="field input-field">
                            <input type="password" placeholder="Password" class="password" name="password">
                            <i class='bx bx-hide eye-icon'></i>
                           
                        </div>

                        <div class="field input-field">
                            <input type="password" placeholder="Repassword" class="password"  name='repassword'>
                            <i class='bx bx-hide eye-icon'></i>
                           
                        </div>

                      <fieldset>
                       <legend>Please select your type:</legend>

                             <div>
                                <input type='radio' name='type' value='not admin'>Not admin
                       
                           </div>
                            </fieldset>

                        <div class="field button-field">
                            <input type='submit' name='register' value='Register' class="b1">
                        </div>
                    </form>

                    <div class="form-link">
                        <span>Click here if you already register <a href='loginForm.php' class="link signup-link">Login</a></span>
                    </div>
                </div>
 
        </section>

       
    </body>
</html>
