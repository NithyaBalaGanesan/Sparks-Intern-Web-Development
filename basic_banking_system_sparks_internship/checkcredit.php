<?php
session_start();
$con=mysqli_connect('localhost:3306','root','','details');
//mysqli_select_db($con,'id8930489_spark');
$name1=$_SESSION['name'];
$q="select credit from user where name='$name1'";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
$var=$row['credit'];
$from=$_SESSION['name'];
//echo $var;
//echo $_POST["transfer"];
//echo $_SESSION['to'];
$to=$_SESSION['to'];
//echo $_SESSION['name'];
$q1="select credit from user where name='$to'";
$result1=mysqli_query($con,$q1);
$row=mysqli_fetch_array($result1);
$var1=$row['credit'];
session_destroy();
if ( $var1 > $_POST["transfer"] )
{
    $sub=$var-$_POST["transfer"];
    $q="update user set credit='$sub' where name='$from' ";
    $result=mysqli_query($con,$q);
    $sum=$var1+$_POST["transfer"];
    $q="update user set credit='$sum' where name='$to' ";
    $result=mysqli_query($con,$q);
    
        $message="Successful transfer";
   echo"<script type='text/javascript'>alert('$message');
   </script>";
    include 'index.php';
    
}
else
{
    $message="Sorry! Your Balance is Insufficient.";
   echo"<script type='text/javascript'>alert('$message');
   </script>";
    
    include 'index.php';

}
?>

<html>
<head>
    <title>Banking</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <link rel="stylesheet" href="customer.css">
</head>

<body>

    <nav class="nav">
        <div class="nav-menu flex-row">
            <div class="nav-brand">
                <a href="#" class="text-gray">Basic Banking System</a>
            </div>
            <div class="toggle-collapse">
                <div class="toggle-icons">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            <div>
                <ul class="nav-items">
                  <li class="nav-link">
                        <a href="index.php"><i class="fas fa-home"></i>Home</a>
                  </li>
                </ul>
            </div>
            
        </div>
    </nav>
  </body>
  </html>