<?php
require_once 'cn.php';

$sql = 'SELECT
	username, message_time
	FROM
	story
	ORDER BY
	message_time';

$result = mysqli_query($cn, $sql) or
	die(mysqli_error($cn));
	
echo '<b><span id="contributors">Contributors:</span></b><br />';

while ($row = mysqli_fetch_assoc($result)) {	
	echo $row['username'] . '<br />' ;
}
?>
	
 