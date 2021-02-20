<?php
$con=mysqli_connect('localhost:3306','root','','details');
//mysqli_select_db($con,'id8930489_spark');
$q="select name from user";
$result=mysqli_query($con,$q);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Select User</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
                        <li class="nav-link">
                        
                </ul>
            </div>
            
            
        </div>
    </nav>
     <div class="bg-image"></div>
       <div class="bg-text"> 
     
               

                <form  action="userdetail.php" method="post">
                  
                   <table class="flat-table flat-table-1">




    <?php 
session_start();
$con=mysqli_connect('localhost:3306','root','','details');

$q="select * from user ";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
//echo $_SESSION['name'];

?>       
<div class="view">

  <table cellspacing=30px style="position: relative; left: 20%; background: deepskyblue;">
  <tr>
      <td> <h2>Select User For Transaction: </h2></td>
   
<td>

<?php
$con=mysqli_connect('localhost:3306','root','','details');
//mysqli_select_db($con,'id8930489_spark');
$q="select name from user";
$result=mysqli_query($con,$q);
?>


  <select name="name" onchange="this.form.submit()">
      <option>--Select--</option>
   <?php  
     while($row = $result->fetch_assoc()) { ?>

      <option value="<?php echo $row['name']; ?>"> <?php echo $row["name"]; ?></option>

<?php }
  ?>
  
        </select>
      </td>
    </tr>

       <tr>
           <td></td>
           <!--<td><input type="submit" value="submit"></td>-->
    </tr>
        </table>
</div>
    </form> 
</div>
</div>
</body>
</html>
