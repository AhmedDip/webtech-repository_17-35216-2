<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Document</title>
    <link rel = "stylesheet" href = "CSS/styles.css">
    
 
</head>
<body>

<header>
  <?php
  session_start();

   include 'header\header.php';?>
</header>

<h1>Category</h1>
<img  id="cat" src="image/cover.png" alt="">

<ul>
              
                <li><a href="products.php">Laptop</a></li>
                <li><a href="products.php">Mobile Phone</a></li>
                <li><a href="products.php">Smart Tv</a></li>
                <li><a href="products.php">Air Conditionar</a></li>
                <li><a href="products.php">Washing Machine</a></li>

                
            
            </ul>

            <h3><a href='dashboard.php'>Go to Dashboard</a>


</ul>
    
</body>
</html>