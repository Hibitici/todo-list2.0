<?php
//why is this important? why does local host have to be first?
$mysqli = new mysqli('localhost', 'root', 'root', 'todo-2.0');
//mysqli-> connect_error then we want it to die and have this messege
if ($mysqli->connect_error) {
	die('connect Error (' . $mysqli->connect_errno . ')'
		. $mysqli->connect_error);
}
else {
	echo "Connection made";
}
$mysqli->close();

?>