<!DOCTYPE html>
<html lang="en">
<head>

<style>
    img{
        width:95px;
    }
    h1{
        font-family:verdana;    
        color :indigo;
    text-align: center;  
    background-color:lavender;
    }
    h3{
        font-family:verdana; 
    }
    
    </style>
    
    <title>Document</title>
</head>
<body>

<h1>Delivery Status</h1>

<header>
<?php 

session_start();

 ?>
 </header>

 
<section>
  <?php 



if (isset($_SESSION['username'])) {
  echo "  
  <nav>
    <hr>
    <ul>

        <li><a href='dashboard.php'>Dashboard For Manager</a></li>
        <li><a href='category.php'>Category</a></li>
        <li><a href='products.php'>Products</a></li>
        <li><a href='vds.php'>View Delivery Status</a></li>
        <li><a href='adc.php'>Add Coupon Code</a></li>
        <li><a href='viewprofile.php'>View Profile</a></li>
        <li><a href='editprofile.php'>Edit Profile</a></li>
        <li><a href='chngprofilepic.php'>Change Profile Picture</a></li>
        <li><a href='changepassword.php'>Change Password</a></li>
        <li><a href='logout.php'>Log Out</a></li>

    </ul>
  </nav>";


}
else{
    $msg="error";
    header("location:login.php");
    // echo "<script>location.href='login.php'</script>";
  }

 ?>




<img src="products/1.png" alt="" ;>
<h3>Delivery Status for product 1</h3>
<input type="text" name="" id="" value="Ongoing">
<br> <br>

<img src="products/2.png" alt="" ;>
<h3>Delivery Status for product 1</h3>
<input type="text" name="" id="" value="Confirmed">
<br> <br>
<img src="products/3.png" alt="" ;>
<h3>Delivery Status for product 1</h3>
<input type="text" name="" id="" value="Received">
<br> <br>

<input type="button" value="Change Status">



    
</body>
</html>