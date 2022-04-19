<?php

if(isset($_POST["submit"])){


	if(isset($_FILES))
    {
		
		@$file = $_FILES["file"];
        $allowedExts = array("jpg", "png");
        $maxSize = 1024000;
        $destination = "../uploads/stdimg/";

		include '../models/UploadClass.php';
        $upload = new upload($file, $allowedExts, $maxSize, $destination);
		$info['photo'] = $upload->updateimg('file');

	}
	 else
	{		
		echo"error update img";
	}


    $info['username']=$_POST['c_username'];
    $info['password'] = $_POST['c_password'];
    $info['type'] = 'client';
    $info['fname'] = $_POST['c_fname'];
    $info['lname'] = $_POST['c_lname'];
	$info['phone'] = $_POST['c_phone'];
    $info['address'] = $_POST['c_address'];
    $info['email'] = $_POST['c_email'];
	$info['age'] = $_POST['c_age'];
	
	include'../models/UsersClass.php';
	$client = new users();
	$client = $client->addUser($info);

	if($client)
	{
		echo'Data is stored!';   
    }
    else 
    {
		echo 'Data is not stored!. The username is already used.';
	}
   
   
}
	
	
?>