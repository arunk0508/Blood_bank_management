<html>
    <head>
    <link href="../css/styledashboard.css" rel="stylesheet">
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
            <li><a href="donor-dashboard.php" style="margin-left:50px;"> Dashboard<a></li>
            <li><a href="blood-donate.php">Donate<a></li>
            <li><a href="blood-request.php">Request</a></li>
            <li><a href="certificate.php">Print Certificate</a></li>
            <li><a href="../logout.php"> Logout</a></li>
    </div><br>


        <?php
session_start();
$a=$_SESSION['y'];

        echo"<h1>";
      echo"<p class='welcome' >Welcome $a!</p>";
      

   echo"</h1>";
   
   if(isset($_SESSION['y'])==false){
    echo"<script>window.location='donor.php'</script>";
   }
?><br><br><br>
    <div class="main-container">
    <div class="item">
            <p class="blood-donate"> Blood donated</p>
            <p class="units">
            Total:0 units</p>
        

        </div>
        <div class="item">
        <p class="blood-donate"> Total Requests</p>
            <p class="units">
            Total:0 </p>
        

        </div>
        <div class="item">
        <p class="blood-donate"> Request Pending</p>
            <p class="units">
            Total:0 </p>
        

        </div>
        <div class="item">
        <p class="blood-donate"> Request Accepted</p>
            <p class="units">
            Total:0 </p>
        </div>
        <div class="item">
        <p class="blood-donate"> Request Rejected</p>
            <p class="units">
            Total:0 </p>
        </div>
             
    </div>
    <div class="footer">
    <p class="foot"> &copy;2022 CSETutorial.com</p>
</div>

</body>
</html>