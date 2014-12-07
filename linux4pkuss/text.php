<?php
$mysqli=new mysqli('127.0.0.1','root','596702','linux4pkuss') ;//or die("Connect Error".$mysqli->connect_error);
/* check connection */
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
printf("Host information: %s\n", $mysqli->host_info);
/* close connection */

$mysqli->close();