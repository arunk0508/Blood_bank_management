<?php

$a=$_GET['t1'];
$b=$_GET['select'];
$c=$_GET['t2'];


$db=mysqli_connect($servername,$username,$password,$database);
// $ab="select * from patientrequest where name='$a'";
// $rl=mysqli_query($db,$ab);
// if($row=mysqli_fetch_array($rl)){
//     echo"<p class=i> Id alredy exsits</p>";
// }
// else{
$con="insert into patientreq value('$a','$b','$c')";
$r=mysqli_query($db,$con);
if($r)
echo"<p class=a>Save</p>";
else
echo"error";

            
?>