<html>
    <head>
        <link href="../css/styledashboard.css" rel="stylesheet">
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
           echo" <p class='welcome'>Welcome $a!</p>";
           echo"</h1>";
           if(isset($_SESSION['x'])==false){
            echo"<script>window.location='admin.php'</script>";
            
           }
            ?><br><br><br>
             <div class="main-container">
             <div class="item">
        <p class="blood-group">
            A
        </p>
        <p class="units">
            Blood Available<br>
            Total:5 units
        </p>

        </div>
        <div class="item">
        <p class="blood-group">
            A+
        </p>
        <p class="units">
            Blood Available<br>
            Total:11 units
        </p>

        </div>
        <div class="item">
        <p class="blood-group">
            A-
        </p>
        <p class="units">
            Blood Available<br>
            Total:22 units
        </p>

        </div>
        <div class="item">
        <p class="blood-group">
            B
        </p>
        <p class="units">
            Blood Available<br>
            Total:30 units
        </p>
        </div>
        <div class="item">
        <p class="blood-group">
            B+
        </p>
        <p class="units">
            Blood Available<br>
            Total:15 units
        </p>
        </div>
        <div class="item">
        <p class="blood-group">
            B-
        </p>
        <p class="units">
            Blood Available<br>
            Total:0 units
        </p>
        </div>
        <div class="item">
        <p class="blood-group">
            AB+
        </p>
        <p class="units">
            Blood Available<br>
            Total:15 units
        </p>
        </div>
        <div class="item">
        <p class="blood-group">
            AB-
        </p>
        <p class="units">
            Blood Available<br>
            Total:0 units
        </p>
        </div>
        <div class="item">
        <p class="blood-group">
            O+
        </p>
        <p class="units">
            Blood Available<br>
            Total:23 units
        </p>
        </div>
        <div class="item">
        <p class="blood-group">
            O-
        </p>
        <p class="units">
            Blood Available<br>
            Total:0 units
        </p>
        </div>
        
    </div>
    <div class="footer">
    <p class="foot"> &copy;2022 CSETutorial.com</p>
</div>

</body>
</html>