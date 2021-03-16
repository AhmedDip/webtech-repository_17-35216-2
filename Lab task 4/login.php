<!DOCTYPE html>
<html>
<head>
<title>login </title>

<link rel = "stylesheet" href = "CSS/styles.css">
</style>
</head>
<body>


<header>
  <?php include 'header\header.php';?>
</header>
<br>

<?php

  $usernameErr=$passErr="";
  $username=$pass="";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["username"])) {
      $usernameErr = "UserName is required";
    } else {
  
       $username =$_POST["username"];
  
      if (!preg_match("/^[a-zA-Z-'._ ]*$/",$username)) {
        $usernameErr = "Only alpha numeric characters, period, dash or underscore allowed";
        $username="";
  
      }
  
      else if(strlen($username)<3)
      {
         $usernameErr = "At least three charecters needed";
         $username="";
      }
     
  
    }
  
    if(empty($_POST["password"])){
      $passErr="Password is required";
    }
    else {
  
         $pass =$_POST["password"];
        
  
      }
  
    }


?>

  <?php
  session_start();

$username="Dip";
$pass="manager";


if (isset($_POST['username'])) {
  if ($_POST['username']==$username && $_POST['password']==$pass) {
    $_SESSION['username'] = $username;
    header("location:dashboard.php");
  }
  else{
    $msg="username or password is invalid ";
   
  }

}



  ?>



<span>  
   
    <img src="image/cover.png" alt="ABC.COM" id="login">
     <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id >
                <fieldset>
                <legend><b>LOGIN</b></legend>  
                User Name: <input type="text" name="username">
                <span class="error">* <?php echo $usernameErr;?></span>
                <br><br>
                Password: <input type="password" name="password">
                <span class="error">*<?php echo $passErr;?></span>
                <br><br>
                <input type="checkbox" id="rm" name="rememberMe">
                <label for="rm"> Remember Me</label><br>
                <br>
                <input type="submit" name="submit" value="Submit">
                <a href="">Forgot Password?</a>
                </fieldset>

    </form>
    
        
</span>

        </body>
</html>
