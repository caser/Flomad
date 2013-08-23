<?php
require_once 'cn.php';
require_once 'protect.php';

$username = protect($_POST['username']);
$uncutmessage = protect($_POST['message']);
$time = time();

$cutmessage = rtrim($uncutmessage);
$message = $cutmessage . ' ';

$sql = 'INSERT INTO  story
	(username, message_content, message_time)
	VALUES
	("' . $username . '",
	"' . $message . '",
	' . $time . ')';
	
$results = mysqli_query($cn, $sql) or
	die(mysqli_error($cn));
	
?>
	
 