<!DOCTYPE html>
<html>
<head>
	<title>Please Vote</title>
	<?php include 'dbase.php'; ?>
</head>
<body>

<?php

	if(!isset($_SESSION['username'])){
		echo 'you are not logged in, Please login first...';
		include 'login.php';
		exit();
	}else{
		?>
		<form method=post action="make_vote.php">
		<table>
		<?php
		$result = mysql_query("select * from candidate",$link);
		$i=0;
		for($i=0;$i<mysql_num_rows($result);$i++){
			$docs = mysql_fetch_assoc($result);
			echo "<tr>";
			echo "<td cellpadding=5px >".$docs['name']."</td>";
			echo "<td><input type=radio name=mychoice  value=".$docs['name']." ></td>";
			echo "</tr>";
		}
		?>	
		</table>
		<input type=submit value=Vote >
		</form>
		<?php
	}
	

?>

</body>
</html>