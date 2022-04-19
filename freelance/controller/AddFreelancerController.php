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


    $info['username']=$_POST['f_username'];
    $info['password'] = $_POST['f_password'];
    $info['type'] = 'freelancer';
    $info['fname'] = $_POST['f_fname'];
    $info['lname'] = $_POST['f_lname'];
	$info['phone'] = $_POST['f_phone'];
    $info['address'] = $_POST['f_address'];
    $info['email'] = $_POST['f_email'];
	$info['age'] = $_POST['f_age'];
	
	include'../models/FreelancerClass.php';
	$freelancer = new users();
	$freelancer = $freelancer->addUser($info);

	if($freelancer)
	{
		echo'Data is stored!';   
    }
    else 
    {
		echo 'Data is not stored!. The username is already used.';
	}
   
   
}
	
	
?>