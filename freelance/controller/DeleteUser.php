<?php
header('Content-Type: application/json');

$id = $_POST['id'];

include '../include/DatabaseClass.php';	
$db = new database();

$sql = "DELETE FROM user WHERE id = '$id'";
$db->delete($sql);
echo json_encode(array('result' => 1));
?>