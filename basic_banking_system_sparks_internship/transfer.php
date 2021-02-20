<?php
session_start();
$con=mysqli_connect('localhost:3306','root','','details');
//mysqli_select_db($con,'test');
$q="select name from user";
$result=mysqli_query($con,$q);
//echo $_POST["transfer"];
$_SESSION['to']=$_POST["transfer"];
?>
<html>
<head>
   <title>viewUser</title>
    <link rel="stylesheet" href="customer.css">
   <style>
     
         input[type=text]
        { 
            margin-top: 5px;
            width:10em;
            height:2em;
            font-size:15px;
           
            font-weight: bold;
        }
         input[type=submit]
        { 
            margin-top: 3px;
            width:6em;        
            height:2em;
            font-size:15px;
            background-color: deepskyblue;
            font-weight: bold;
            text-align: center;
        }
       
    </style>
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
    <div class="bg-image"></div>
    <div class="bg-text">
     <form action="checkcredit.php" method="post"  style="position: relative; top:20%;">
          <div class="view">
             <h1> <strong>Please Enter The Transfer Amount:</strong></h1>
          <br>
            <br>
          <input type="text" name="transfer"><br>
          <br>
          <center>
            <input type="Submit">
          </center>
        
        </div>
        </form>

     </div>   
    </body>
</html>
