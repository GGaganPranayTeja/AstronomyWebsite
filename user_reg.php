<?php
$conn=mysqli_connect("localhost","root","");

$db=mysqli_select_db($conn,"astro");
$roll=$_POST["name"];
$nam=$_POST["phno"];
$city=$_POST["email"];
$phno=$_POST["ins"];
$dnam=$_POST["cou"];
$did=$_POST["un"];
$atten=$_POST["psw"];
$r=mysqli_real_escape_string($conn,$roll);

$n=mysqli_real_escape_string($conn,$nam);

$c=mysqli_real_escape_string($conn,$city);

$p=mysqli_real_escape_string($conn,$phno);

$d=mysqli_real_escape_string($conn,$dnam);

$di=mysqli_real_escape_string($conn,$did);
$a=mysqli_real_escape_string($conn,$atten);
$sql=mysqli_query($conn,"insert into reg values ('$r','$n','$c','$p','$d','$di','$a') ");
if(!$sql) {
print "query not executed";
} else {
header('location:home.html');
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
    width: 20%;
}
</style>
<body> 
<a href="index.html" target="blank"><button type="button">HOME</button></a></br>

</html>