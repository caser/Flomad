<?php
/*connection info:
Usr: opim416teamc
Pwd: flomad
The host for the connection can be either localhost, opim.wharton.upenn.edu or 128.91.90.162. The database name is the same as the username.
*/
$cn = mysqli_connect('opim.wharton.upenn.edu', 'opim416teamc', 'flomad') or
	die('Unable to connect to server');
mysqli_select_db($cn, 'opim416teamc') or
	die(mysqli_error($cn));
	
?>
	