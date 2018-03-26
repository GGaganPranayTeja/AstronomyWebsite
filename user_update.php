<?php
$conn=mysqli_connect("localhost","root","");

$db=mysqli_select_db($conn,"astro");
$roll=$_POST["ID"];
$nam=$_POST["f"];
$city=$_POST["v"];

$r=mysqli_real_escape_string($conn,$roll);

$n=mysqli_real_escape_string($conn,$nam);

$c=mysqli_real_escape_string($conn,$city);


$sql=mysqli_query($conn,"update reg set $n='$c' where username='$r'");
if(!$sql) {
print "user not updated";
} else {
print "Your data is updated Sucessfully!";
}
?>
<!DOCTYPE html>
<body > 
<a href="up.html" target="blank"><button type="button">UPDATE MORE</button></a></br>
<a href="home.html" target="blank"><button type="button">HOME</button></a></br>


</html>