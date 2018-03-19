<?php
$conn=mysqli_connect("localhost","root","");

$db=mysqli_select_db($conn,"astro");
$roll=$_POST["n"];
$nam=$_POST["pn"];
$city=$_POST["e"];
$phno=$_POST["ins"];
$dnam=$_POST["co"];
$did=$_POST["uid"];
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
print "Data Entered Sucessfully!";
$result = mysqli_query($conn,"select * from reg");
print " 
<table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\" id=\"AutoNumber2\" bgcolor=\"#C0C0C0\"><tr> 
<td width=10>name</td> 
<td width=10>phno</td> 
<td width=10>email</td>
<td width=10>institution</td>
<td width=10>country</td>
<td width=10>username</td>
<td width=10>password</td>


</tr>"; 

while($row = mysqli_fetch_array($result, MYSQLI_NUM)) 
{ 
print "<tr>"; 
print "<td>" . $row[0] . "</td>"; 
print "<td>" . $row[1] . "</td>"; 
print "<td>" . $row[2] . "</td>";
print "<td>" . $row[3] . "</td>";
print "<td>" . $row[4] . "</td>";
print "<td>" . $row[5] . "</td>";
print "<td>" . $row[6] . "</td>";
print "</tr>"; 
} 
print "</table>";
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