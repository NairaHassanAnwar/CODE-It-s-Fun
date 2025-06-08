<?php
session_start();
include ('dbconnection.php');
if(isset($_POST['login'])){
$userid=$_POST['userid'];
$password=md5($_POST['password']);
$sql="SELECT * FROM users WHERE
userid='$userid' AND password='$password'";
$stmt=$conn->query($sql);
$rows=$stmt->fetchAll(PDO::FETCH_ASSOC);
$n=$stmt->rowCount();
if($n==1)
{
$_SESSION['userid']=$userid;
if($rows[0]['type']=='admin')
header('Location:admin.php');
if($rows[0]['type']=='not admin')
header('Location:home.php');
}
else
echo "<script>alert('Wrong userid or password')</script>";
}
?>

<!DOCTYPE html>

    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Login Form </title>

    
         <link rel="stylesheet" href="style1.css">
                
        
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
                        
    </head>
    <body>
        <section class="container forms">
            <div class="form login">
                <div class="form-content">
                    <header>Login</header>
                    <form action="" method="post">
                        <div class="field input-field">
                            <input type="text" placeholder="userid" class="input" name="userid">
                            
                        </div>

                        <div class="field input-field">
                            <input type="password" placeholder="Password" class="password" name="password">
                            <i class='bx bx-hide eye-icon'></i>
                           
                        </div>

                        <div class="form-link">
                            <a href="#" class="forgot-pass">Forgot password?</a>
                        </div>

                        <div class="field button-field">
                            <input type='submit' name='login' value='LOGIN' class="b1">
                        </div>
                    </form>

                    <div class="form-link">
                        <span>Don't have an account? <a href="register.php" class="link signup-link">Register</a></span>
                    </div>
                </div>

                <div class="line"></div>

                <div class="media-options">
                    <a href="https://www.facebook.com/" class="field facebook">
                        <i class='bx bxl-facebook facebook-icon'></i>
                        <span>Login with Facebook</span>
                    </a>
                </div>

                <div class="media-options">
                    <a href="https://www.google.com/" class="field google">
                        <img src="google.png" alt="" class="google-img">
                        <span>Login with Google</span>
                    </a>
                </div>

            </div>

            

                   
              
        </section>

       
    </body>
</html>
