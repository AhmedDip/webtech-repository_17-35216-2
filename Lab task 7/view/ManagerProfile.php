<?php
session_start(); 
include('../model/model.php');
include('../control/updatecheck.php');
include('../control/deletecheck.php');

if(empty($_SESSION["userName"])) // Destroying All Sessions
{
header("Location: ../view/Login.php"); // Redirecting To Home Page
}

?>

<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="../css/style.css">

  </style>

</head>

<body>

<h1>ABC.COM</h1>

<ul>
  <li><a href="ManagerHome.php"> Home</a></li>
  <li><a href="ManagerProfile.php">My Profile</a></li>
  <li><a href="addProduct.php"> Add Product </a></li>
  <li><a href="viewOrderProduct.php">View Ordered Product </a></li>
  <li><a href="viewAllProduct.php">Product </a></li>
  <li><a href="Logout.php">Logout</a></li>
  <li></li>
  
</ul>

 


<?php
$radio1=$radio2=$radio3="";
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUsers($conobj,"users",$_SESSION["userName"],$_SESSION["password"]);

if ($userQuery->num_rows > 0) {
    echo "<form action='' method='post'>";
    // output data of each row
    while($row = $userQuery->fetch_assoc()) {

      
      echo "<br><br><table><tr><td>User Id :</td><td> <input type='text' name='id' value=".$row["id"]." disabled></td></tr>";
      
      echo "<tr><td>Firstname :</td><td> <input type='text' name='fname' value=".$row["firstname"]." ></td></tr>";

      echo "<tr><td>Lastname :</td><td> <input type='text' name='lname' value=".$row["lastname"]." ></td></tr>";
   
      echo "<tr><td>Email :</td><td> <input type='text' name='email' value=".$row["email"]." disabled></td></tr>";

      echo "<tr><td>Password :</td><td> <input type='text' name='password' value=".$row["userPassword"]." disabled></td></tr>";
    
      echo "<tr><td>Address :</td><td> <input type='text' name='address' value=".$row["homeAddress"]." ></td></tr>";

      echo "<tr><td>Phone :</td><td> <input type='text' name='phone' value=".$row["phone"]." ></td></tr>";
  
      if($row["gender"]=='female')
      {$radio1="checked";}
      else if($row["gender"]=='male')
      {$radio2="checked";}
      else {$radio3="checked";}

      echo "<tr><td>Gender :</td><td> <input type='radio' name='gender' value='female' $radio1>Female
      <input type='radio' name='gender' value='male' $radio2>Male
      <input type='radio' name='gender' value='other' $radio3>Other </td></tr></table>" ;

    

    }
    echo   "<br><br> <input name='update' type='submit' value='Update'>";
    echo "<br><br>Delete My Account";
    echo   "<br><br> <input name='delete' type='submit' value='Delete'></form>";
  } else {
    echo "0 results";
  }



?>



<br><br>

<a href="ManagerHome.php">Back</a>
</center>


<br><br>

<br>


  <div class="footer">

  <p><a href="AboutUs.php">About Us</a></p>
</div>
</body>
</html>