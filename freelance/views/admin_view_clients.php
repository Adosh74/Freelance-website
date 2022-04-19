<?php 
session_start();
if($_SESSION['username'] && $_SESSION['type'] == "admin")
{?>

<?php 
	include_once '../include/DatabaseClass.php';		
	$db = new database();
	
	$sql = "SELECT * FROM user WHERE type = 'client'";
	$result = $db->display($sql);
	$numrows = $db->check($sql);

	?>
	
<head>
	<link rel="stylesheet" href="../css/bootstrap-4.6.1-dist/css/bootstrap.min.css">
</head>

<body>
	<nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            
            Welcome.. <?php echo $_SESSION['fname'] . " " . $_SESSION['lname']; ?>

        </a>
		<form action="admin_home.php" method="post" class="form-inline" style="margin:0;">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submitLogout">Home</button>
		</form>
		<form action="../controller/LogoutController.php" method="post" class="form-inline" style="margin:0;">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submitLogout">Logout</button>
		</form>
    </nav>

	<div class="alert alert-success" style="display:none;" id="success">
		<strong>removed from database</strong>
	</div>
	
	<div class="container mt-5">
<?php 

    if (!$numrows) {
        echo '<p>No results found.</p>';
    }
	else {
    ?>
		<table class="table">
		  <thead>
			<tr>
			  <th scope="col">First name</th>
			  <th scope="col">Last name</th>
			  <th scope="col">email</th>
			  <th scope="col">delete</th>

			</tr>
		  </thead>
		  <tbody>
		    <?php for ($x = 0; $x < $numrows; $x++) { ?>
			<tr id="record_<?php echo $result[$x]['id']; ?>">
			  <td><?php echo $result[$x]['fname']; ?></td>
			  <td><?php echo $result[$x]['lname']; ?></td>
			  <td><?php echo $result[$x]['email']; ?></td>
			  <td><button type="button" id="delete" class="btn btn-success" onclick="DeleteUser(<?php echo $result[$x]['id']; ?>)">Delete</button></td>
			  <!--<td><a href="student_details.php?id=<?php echo $result[$x]['id']; ?>">Details</a></td>-->
			</tr>
			<?php } ?>
		  </tbody>
		</table>
		<?php
		} 
		$db->conn->close();
		?>
	<div>
	
	<script src="../js/jquery-3.6.0.min.js"></script>
	<script src="../css/bootstrap-4.6.1-dist/js/bootstrap.min.js"></script>
	
	<script>
	function DeleteUser(studentid) {
            $.ajax({
                type: "POST",
				data: {id: studentid},
                url: "../controller/DeleteUser.php",
				dataType: 'json',
                success: function (response) {
					console.log(response);

					if (response.result == 1) {
                        $("#record_" + studentid).remove();
                        $("#success").slideDown(500);
                        $("#success").delay(3000);
                        $("#success").slideUp(500);

                    }
                },
				error: function(jqXHR, textStatus, errorThrown) {
				   console.log(textStatus, errorThrown);
				}
            });
        }
	</script>
</body>


<?php 
}
else
{
	header("location:../index.php");
}
?>