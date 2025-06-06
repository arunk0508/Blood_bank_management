<html>
    <head>
        <link href="../css/stylelist.css" rel="stylesheet">
</head>
<body>
<div class="head-bar-1">
        <p class="blood">Blood Bank Management System</p>

    </div>
    <div class="head-bar-2">
        <p class="user">Name:Admin User</p>
    </div>
    <div class="head-bar-3">
        <ul class="nav">
            <li><a href="admin-dashboard.php" style="margin-left:50px;"> Dashboard<a></li>
            <li><a href="donor-list.php">Donors<a></li>
            <li><a href="patient-list.php"> Patients</a></li>
            <li><a href="donation-request.php"> Donations</a></li>
            <li><a href="blood-request.php"> Requests</a></li>
            <li><a href="../logout.php"> Logout</a></li>
    </div><br>
    
    
    <?php
         
         session_start();
        $a=$_SESSION['x'];
        echo"<h1>";
        echo"<p class='welcome'>Welcome $a!</p>";
        echo"</h1><hr>";
        if(isset($_SESSION['x'])==false){
         echo"<script>window.location='admin.php'</script>";
        }

      echo"  <div class='list'>";
        echo"<p class='list-of-donors'>List of all Donors</p>";
    echo"</div>";
         
    echo"<div class='main-body'>";
    $con=mysqli_connect($servername,$username,$password,$database);
    $q="select * from donor";
    $rl=mysqli_query($con,$q);

    echo"<table  class='table' >";
    echo"<tr><td>S.No</td><td>Donor ID</td><td>Donor Name</td><td>Donor Email</td><td>Mobile No.</td><td>Action</td></tr>";
    
    while($row=mysqli_fetch_array($rl)){
        
        echo"<tr><td>$row[sno]</td><td> $row[donorid]</td><td> $row[donorname]</td> <td>$row[donoremail]</td><td> $row[mobileno]</td>";
        
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