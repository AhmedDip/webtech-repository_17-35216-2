<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
<header>
    <h1 style="text-align:left;">D Company</h1>
    <h5>logged in as     <?php
        session_start();
        echo $_SESSION['uname'];
    ?>
    </h5>
    <button onclick="location.href = 'home.php';" >Logout</button>
</header>
<nav>
    <h4>Account</h4>
    <a href="dashboard.php">dashboard</a>
    <a href="viewprofile.php">view profile</a>
    <a href="pp.php">change profile picture</a>
    <a href="changepassword.php">change password</a>
    <a href="home.php">Logout</a>
</nav>



</body>
</html>
