<html>
    <head>
        <link href="../css/stylecertificate.css" rel='stylesheet'>
    </head>
    <body>
    <?php
session_start();
$a=$_SESSION['y'];

        echo"<h1>";
      echo"<p class='welcome'>Welcome $a!</p>";
      

   echo"</h1>";
   
   if(isset($_SESSION['y'])==false){
    echo"<script>window.location='donor.php'</script>";
   }
?>

<div class="blood-certification"><br>
    <p class="blood-certificate">
        Blood Donation Certificate
    </p>
<br>
    <p class="reward">REWARDED TO:-Donor Name 5</p><hr>
    <p class="reward">ORGANIZED BY:- XYZ ORGANIZATION</p><hr>
    <p class="note">
        I EXTEND OUR APPRECITATION OF YOUR DONATION IN THIS
    </p>
    <p class='date'>DATE:</p>
    <p class='chairman'>CHAIRMAN:</p>
    
</div>
</body>
</html>
