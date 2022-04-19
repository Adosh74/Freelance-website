<?php  


if (isset($_POST['name']) && isset($_POST['message']) && isset($_POST['number']) && isset($_POST['jobs']) && isset($_POST['Budget'])) {
	include 'db_conn.php';

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$name = validate($_POST['name']);
	$message = validate($_POST['message']);
    $number = validate($_POST['number']);
	$jobs = validate($_POST['jobs']);
	$bud= validate($_POST['Budget']);


	if (empty($message) || empty($name) || empty($number) || empty($jobs) || empty($bud)) {
		header("Location: index.html");
	}else {

		$sql = "INSERT INTO test(name, message, number, jobs, Budget) VALUES('$name', '$message','$number', '$jobs', '$bud')";
		$res = mysqli_query($conn, $sql);

		if ($res) {
			echo "Your post was sent successfully!";
		}else {
			echo "Your post could not be sent!";
		}
	}

}else {
	header("Location: index.html");
}