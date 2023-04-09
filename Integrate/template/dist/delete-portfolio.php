<?php 
$con=mysqli_connect("localhost","root","","vertex");
$id=$_GET['id'];
$sql="delete from portfolio where id='$id'";
if(mysqli_query($con,$sql))
{
    header('location:application-chat.php');
}
?>