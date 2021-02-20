<?php
session_start();
$con=mysqli_connect('localhost:3306','root','','details');
//mysqli_select_db($con,'id8930489_spark');
$name1=$_SESSION['name'];
$q="select name from user where not name='$name1'";
$result=mysqli_query($con,$q);
//$var=$_POST['name'];

//echo $_SESSION['name'];
?>


<html>
<head>
   <title>
   viewUser
    </title>
    <link rel="stylesheet" href="customer.css">
    <link rel="stylesheet" href="user.css">
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
    <div class="view">
        <h1>Transfer Amount</h1>
        <form action="transfer.php" method="post" style="position: relative; left: 40%;">
       <table>
           <th><h3>Select Reciever to Transfer Amount</h3></th>
           <?php  
     while($row = $result->fetch_assoc()) { ?>

        
   <tr>
       <td > <input type="radio" name="transfer" value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></td>
      
   </tr>
<?php }
  ?>
       <tr>
          
           <td><input type="submit" value="Credit"></td>
           </tr>
        </table>
        </form>
        </div>
      </div>
    </body>
</html>