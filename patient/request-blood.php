<html>
    <head>
        <link href="../css/styleresult.css" rel="stylesheet">
</head>
<body>
    <form action="req-blood-data.php">
    <div class="head-bar-1">
        <p class="blood">Blood Bank Management System</p>

    </div>
    <div class="head-bar-2">
        <p class='user'>Name:Patient User</p>
    </div>
    <div class="head-bar-3">
        <ul class="nav">
            <li><a href="patient-dashboard.php" style="margin-left:50px;"> Dashboard<a></li>
            <li><a href="request-blood.php">Request Blood<a></li>
            <li><a href="request-history.php">Request History</a></li>
            <li><a href="../logout.php"> Logout</a></li>
    </div><br>
       
         <?php
            session_start();
            $a=$_SESSION['y'];
            echo"<h1>";
            echo"<p class='welcome'>Welcome $a!</p>";
            echo"</h1>";
            if(isset($_SESSION['y'])==false){
                echo"<script>window.location='patient.php'</script> ";
            }

            ?>
              
       <div class="blood-donate-form">
         <div class="blood-form">
            <p class="page">Blood Request Form</p>
            <hr class="underline">
            <p class="text">No of Units.</p>
            <input type="textarea" name="t1" placeholder="No of units(in ml)" class="text-box">
            <br>
         
        
         <p class="text">Blood group</p>
            <select name="select" class="text-box">
                <option>--select--</option>
                <option>A</option>
                <option>A</option>
            </select>
            <br>
         <p class="text">Reason</p>
         <textarea id="mytextarea" name="t2" row='4' cols='5' placeholder="Mention the reason" class="text-box"></textarea>
         <br>

         
         <input type="submit" value="Request" class="request">
       </div>
</div>
    <div class="footer">
    <p class="foot"> &copy;2022 CSETutorial.com</p>
</div>

</form>
</body>
</html>