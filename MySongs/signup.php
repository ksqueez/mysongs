<?php 
require_once "start.php";
if(isset($_POST['username'])){
	unset($error);
	if($_POST['password'] != $_POST['password2'])
	$error = "3";
	$check = mysql_query("select * from bi97n_users where email='".$_POST['email']."'");
	if(mysql_num_rows($check)>0)
	$error = "2";
	$check = mysql_query("select * from bi97n_users where username='".$_POST['username']."'");
	if(mysql_num_rows($check)>0)
	$error = "1";

	if(!isset($error)){
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
	$key = md5(time());
	$password = md5($password.$key).":".$key;
	mysql_query("insert into bi97n_users set username='".$_POST['username']."', password='$password', name='".$_POST['name']."', email='".$_POST['email']."', registerDate='".date("Y-m-d H:i:s")."'");
	$id = mysql_insert_id();
	$_SESSION['user_id'] = $id;
				echo '<meta http-equiv="REFRESH" content="0;url=dash.php">';//redirect
	mysql_query("insert into bi97n_community_users set userid='$id'");
	}else { echo "<meta http-equiv='REFRESH' content='0;url=sign-up.php?error=$error'>";//redirect 
	}
}
require_once "end.php";

?>
