<?php
$con =  new mysqli("192.168.234.129","prateek","redhat","dm");
if($con->connect_error)
{
   echo $con->connect_error;
   exit;
}
?>
