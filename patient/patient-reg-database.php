<?php

$a=$_GET['t1'];
$b=$_GET['t2'];
$c=$_GET['t3'];
$d=$_GET['t4'];

$db=mysqli_connect($servername,$username,$password,$database);
$ab="select * from patientlogin where name='$a'";
$rl=mysqli_query($db,$ab);
if($row=mysqli_fetch_array($rl)){
    echo"<p class=i> Id alredy exsits</p>";
}
else{
$con="insert into patientlogin value('$a','$b','$c','$d')";
$r=mysqli_query($db,$con);
if($r)
echo"<p class=a>Save</p>";
else
echo"error";
}
            
?>