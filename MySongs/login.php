<?php
 include "start.php";
//check for already loged in users and redirect 
?>
<html>
<head>
</head>
<body style =" background-color:black; color:white; ">
<?php

	$username = $_POST['username'];
	$password = $_POST['password'];
	$get = mysql_query("select * from bi97n_users where username='$username' || email = '$username'");
	if(mysql_num_rows($get)==1){
		$opassword = mysql_result($get,0,'password');
		$key = end(explode(':',$opassword));
		$password = md5($password.$key).":$key";
		if($password == $opassword){
			$_SESSION['user_id'] = mysql_result($get,0,'id');
			echo '<meta http-equiv="REFRESH" content="0;url=dash.php">';//redirect
		}else kick("Invalid Password!");
	}else kick("Invalid Username!");
?>
</body>
</html>
<?php
 include "end.php";
?>
