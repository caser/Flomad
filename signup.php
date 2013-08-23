<?php

require_once 'cn.php';
require_once 'protect.php';

$email = protect($_POST['email']);
$time = time();

$sql = 'INSERT INTO waitinglist
	(email, time)
	VALUES
	("' . $email . '", ' . $time . ')';
$result = mysqli_query($cn, $sql) or 
	die(mysqli_error($cn));


?>

