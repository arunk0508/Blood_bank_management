<?php
$a=$_GET['t1'];
$b=$_GET['t2'];

$con=mysqli_connect($servername,$username,$password,$database);
$q="select * from donorlogin where email='$a' and password='$b'";
$rl=mysqli_query($con,$q);
if($row=mysqli_fetch_array($rl)){
       session_start();
       $_SESSION['y']=$row['name']; 
    
    echo"<script>window.location='donor-dashboard.php'</script>";

}
else{
    echo"invalid";
}

?>