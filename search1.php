<?php
$a=$_POST["searchbox"];
switch ($a)
{
case 'star': header('location:star.html');
         break;
case 'planets': header('location:planmain.html');
           break;
case  'mercury':header('location:mer.html');
break;
case  'venus':header('location:ven.html');
break;
case  'earth':header('location:earth.html');
break;
case  'mars':header('location:mars.html');
break;
case  'jupiter':header('location:jup.html');
break;
case  'saturn':header('location:sat.html');
break;
case  'uranus':header('location:uran.html');
break;
case  'galaxy':header('location:GALAXY.html');
break;
case  'blackhole':header('location:blackholep.html');
break;
case  'satellites':header('location:nob.html');
break;
case  'space station':header('location:nob.html');
break;
 default: print "The data you are searching is not present in the site";
break;
}
?>
