<?php
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"astro");

$result = mysqli_query($conn,"select * from reg");
print " 
<table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\" id=\"AutoNumber2\" ><tr> 
<td color:white width=10>name</td> 
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
?>
<!DOCTYPE html>
<body background="admin.jpg">
<form action="user_delete.php" method="post">
UserID:
<input type="text" name="ID" >
<input type="submit" value="submit">
</form>
</body>
</html> 