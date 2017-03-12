<!DOCTYPE html>
<html>
<head>
	<title>database haldler</title>
</head>
<body>
<?php
	$user = "root";
	$pass = '';
	$link = mysql_connect('localhost', $user, $pass);
	mysql_select_db('voter_db');
?>
</body>
</html>