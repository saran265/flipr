<?php
$n=$_POST['uname1'];
$e=$_POST['email'];
$p=$_POST['upswd2'];
$con=mysqli_connect("localhost","root","","stform");
$sql="INSERT INTO register(name,email,password) values('$n','$e','$p')";
$r=mysqli_query($con,$sql);
if($r)
{
    echo "Added Successfully";
}
else{
    echo "Details NOT added";
}
?>