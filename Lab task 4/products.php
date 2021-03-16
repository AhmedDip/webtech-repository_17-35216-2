<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
        li{
            color :indigo;
        }

        h1{
            color :indigo;
            text-align:center;
            background-color:lavender;
           
        }
    </style>
  
</head>
<body>
<h1>Products</h1>

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
   
  }

 ?>




<h4>Search Products: <input type="text" name="" id=""></h4>
<input type="button" value="Submit">


 
              
              <ul>
                  <li> <img src="products/1.png" alt=""><h2>Mobile Phone</h2></li>
                  <li> <img src="products/2.png" alt=""><h2>Laptop</h2></li>
                  <li> <img src="products/3.png" alt=""><h2>Smart Tv</h2></li>
              </ul>
              
            


<h4>Add Products: <input type="button" value="ADD"></h4>
<h4>Delete Products: <input type="button" value="DELETE"></h4>

              
          
        
    
</body>
</html>