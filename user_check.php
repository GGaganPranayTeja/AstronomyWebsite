<?php
$a=$_POST["ID"];
$b=$_POST["psw"];
$conn=mysqli_connect("localhost","root","");
$user=mysqli_real_escape_string($conn,$a);
$pass=mysqli_real_escape_string($conn,$b);
$db=mysqli_select_db($conn,"astro");
$check=mysqli_query($conn,"select count(*) from login a where a.adminid='$user' and a.password='$pass' ");
$row=mysqli_fetch_row($check);
if($row[0]==1) {
header('location:framea.html');
} else {
print "wong username or password";
}
?>

