<?php 
session_start();
$con=mysqli_connect('localhost:3306','root','','details');
$name=$_POST['name'];
$q="select * from user where name='$name'";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
$_SESSION['name']=$name;
//echo $_SESSION['name'];

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
                            <a href="viewuser.php"><i class="fas fa-rupee-sign"></i>Select Reciever</a>
                      
                    <li class="nav-link">
                        <a href="selectuser.php"><i class="fas fa-users"></i>Back</a>
                      </li>


                        
                </ul>
            </div>
            
        </div>
    </nav>
    <div class="bg-image"></div>
    <div class="bg-text">
              <div class="view">
                <h1>User Details</h1>
                <table class="flat-table flat-table-1">
                   <table cellspacing=30px style="position: relative; left: 20%; color: white; background:indigo;">
          
           <th>Name</th>
           <th>Email</th>
           <th>Credit</th>
           <tr>
           <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["name"]; ?></td>
  <td><?php echo  $row["email"]; ?></td>
  <td><?php echo  $row["credit"]; ?></td>
   

           </tr>

         
        </table>

        </div>
        </div>
   </div>   
</body>
</html>
