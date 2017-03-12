<?php session_start() ?>

<!DOCTYPE html>
<html>
<head>
	<title>login action</title>
	<?php include 'dbase.php'; ?>
</head>
<body>
<?php
	
	$username = "";
	$password = "";

	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$username = $_REQUEST['username'];
		$password = $_POST['password'];
		#echo $username."<br>";

		$result = mysql_query('select * from users where username = "'.$username.'"',$link);
		if(!$result){
			echo "coudnt execute query";
			exit();
		}
		#echo mysql_num_rows($result);
		if(mysql_num_rows($result) == 1){
			$docs = mysql_fetch_assoc($result);
				if($docs['voted'] == true){
					echo "Already voted, no need to vote again";
					include 'login.php';
				}
				else if($username == $docs['password']){
					$_SESSION['username'] = $username;
					include 'vote.php';
					
				}else{
					echo 'Wrong password';
					include 'login.php';
				}
			
		}else if(mysql_num_rows($result) == 0){
			echo "User doesn't exist...";
			include 'login.php';

		}else{
			echo "error ocuured...";
			exit();
		}
	}
?>

</body>
</html>