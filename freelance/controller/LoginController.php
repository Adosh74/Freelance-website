<?php 
/*require_once("connect.php");*/

if(isset($_POST["submit"])){
		include'../models/UsersClass.php';
	if(!empty($_POST['username']) && !empty($_POST['password'])) {
		$username=$_POST['username'];
		$password=$_POST['password'];
		$user = new users();
		$true = $user->login($username, $password);
		
		if ($true == true) 
		{
			@$type=  $_SESSION['type'];
			if($type=='admin') {
				header("location: ../views/admin_home.php");
			}
			elseif($type=='client') {
				header("location: ../views/client_home.php");

			}
		}
		else 
		{
			$param = "false";
			header("location: ../index.php?id=$param");
		}
	}
}
		
?>