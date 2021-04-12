<?php
session_start(); 
if(empty($_SESSION["userName"])) 
{
header("Location: Login.php"); // Redirecting To Home Page
}
?>

<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 200px;
    background-color: #f1f1f1;
}

li a {
    display: block;
    color: #000;
    padding: 8px 0 8px 16px;
    text-decoration: none;
}

/* Change the link color on hover */
li a:hover {
    background-color: #555;
    color: white;
}
</style>
</head>
<body>

<h1>Manager Homepage</h1>


<?php 

    if (isset($_SESSION['userName'])) {
    echo "<h4> Logged in with ".$_SESSION['userName'].", Welcome to ABC.COM"."</h4>";

    }
    else{
    $msg="error";
    header("location:Login.php");
    // echo "<script>location.href='login.php'</script>";
    }

    ?>


<ul>
  <li><a href="ManagerHome.php"> Home</a></li>
  <li><a href="ManagerProfile.php">My Profile</a></li>
  <li><a href="addProduct.php"> Add Product </a></li>
  <li><a href="viewOrderProduct.php">View Ordered Product </a></li>
  <li><a href="viewAllProduct.php">Product </a></li>
  <li><a href="Logout.php">Logout</a></li>
  <li></li>
  
</ul>

</body>

</html>

<br>

<br><br>

  <div class="footer">
<h3> Copyright@</h3>


</div>
    </body>
</html>