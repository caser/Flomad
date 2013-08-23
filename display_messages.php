<?php
require_once 'cn.php';

$sql = 'SELECT
	username, message_content, message_time
	FROM
	story
	ORDER BY
	message_time';

$result = mysqli_query($cn, $sql) or
	die(mysqli_error($cn));
	
	echo '&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ';
	
while ($row = mysqli_fetch_assoc($result)) {
	echo $row['message_content'] ;
}

?>
	
 