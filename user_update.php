<?php
$conn=mysqli_connect("localhost","root","");

$db=mysqli_select_db($conn,"astro");
$roll=$_POST["ID"];
$nam=$_POST["Field"];
$city=$_POST["val"];

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
<html>
<style>
button {
    background-color: black;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 10%;
}
</style>
<body> 
<a href="up.php" target="blank"><button type="button">UPDATE MORE</button></a></br>
<a href="home.htm" target="blank"><button type="button">HOME</button></a></br>


</html>