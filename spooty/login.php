<?php
if(!isset($_POST['submit'])){
$n=$_POST['uname1'];
$p=$_POST['upswd2'];
$con=mysqli_connect("localhost","root","","stform");
$sql="SELECT * from register WHERE name='$n' AND password='$p'";
$r=mysqli_query($con,$sql);
$rc=mysqli_num_rows($r);
if($rc>0)
{
    include 'main.html';
}
else{
    include 'login.html';
}}
?>