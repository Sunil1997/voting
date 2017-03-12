<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Message relay</title>
	<?php include 'dbase.php'; ?>
</head>
<body>
<?php
	$result = mysql_query('update users set voted=true where username="'.$_SESSION['username'].'"',$link);
	echo 'database updated successfully';
?>

</body>
</html>