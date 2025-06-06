<html>
    <head>
    <link href='../css/stylelist.css' rel='stylesheet'>
</head>
<body>
    <div class="head-bar-1">
        <p class="blood">Blood Bank Management System</p>

    </div>
    <div class="head-bar-2">
        <p class='user'>Name:Donor User</p>
    </div>
    <div class="head-bar-3">
        <ul class="nav">
            <li><a href="donor-dashboard.php" style='margin-left:50px;'> Dashboard<a></li>
            <li><a href="blood-donate.php">Donate<a></li>
            <li><a href="blood-request.php">Request</a></li>
            <li><a href="certificate.php">Print Certificate</a></li>
            <li><a href="../logout.php"> Logout</a></li>
    </div><br>
         
       <?php


session_start();
$a=$_SESSION['y'];

        echo"<h1>";
      echo"<p class='welcome'>Welcome $a!</p>";
      

   echo"</h1><hr>";
   
   if(isset($_SESSION['y'])==false){
    echo"<script>window.location='donor.php'</script>";
   }

         echo"<div class='list'>";
         echo"<p class='list-of-donors'>Donation Requests</p>";
         echo"</div>";
         echo"<div class='main-body'>";
         $con=mysqli_connect($servername,$username,$password,$database);
         $q="select * from donationreq";
         $rl=mysqli_query($con,$q);
     
         echo"<table class='table' style='margin-left:570px;'>";
         echo"<tr><td>S.No</td><td>Donation ID</td><td>Units(in ml)</td><td>Status</td><td>Action</td></tr>";
         while($row=mysqli_fetch_array($rl)){
             echo"<tr><td>$row[sno]</td><td> $row[donationid]</td><td>$row[unit]</td><td>$row[status]</td>";
             
             echo"<td><button class='edit'><a href='donor-edit.php?id=$row[sno]'>Edit</a></button></td> <td><button class='delete'><a href='donor-delete.php?id=$row[sno]'>Delete</a></button></td></tr>";
             
         }
 echo"</div>";
         echo"</table></div>";
       ?>

    <div class="footer">
    <p class="foot"> &copy;2022 CSETutorial.com</p>
</div>

</body>
</html>