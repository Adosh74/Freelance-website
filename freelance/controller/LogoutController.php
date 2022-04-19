<?php 

if(isset($_POST["submitLogout"])){
		include'../models/UsersClass.php';
		$user = new users();
		$user->logout();	
		}
		
?>