<?php 
$con=mysqli_connect("localhost","root","","vertex");
$id=$_GET['id'];
$sql="delete from testimonial where id='$id'";
if(mysqli_query($con,$sql))
{
    header('location:homepage.php');
}
?>