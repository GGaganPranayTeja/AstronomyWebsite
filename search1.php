<?php
$a=$_POST["searchbox"];
$conn=mysqli_connect("localhost","root","");
$user=mysqli_real_escape_string($conn,$a);
$db=mysqli_select_db($conn,"astro");
$check=mysqli_query($conn,"select page from search a where a.page='$user');
$row=mysqli_fetch_row($check);
if(!empty($row)) {
header('location:$row[0].html');
} else {
print " The data you are searching for is not present in the site.";
}
?>

