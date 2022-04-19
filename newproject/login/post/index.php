<!DOCTYPE html>
<html>
<head>
	<title>Add Job</title>
	<style>
		body {
			display: flex;
			align-items: center;
			justify-content: center;
			min-height: 100vh;
			font-family: arial, sans-serif;
		}
		input, textarea {
			display: block;
			width: 300px;
			font-size: 18px;
			margin: 7px 0px;
		}
		label {
			display: block;
			padding: 2px 0px;
		}
        .edit{
    padding: 2 0 5 ;
    margin: 21 0 0 0;
    text-decoration: none;
}
a:visited{ background-color: brown;}
a:hover { background-color: rgb(56, 157, 240);}
	</style>
</head>
<body>
    <form method="post" action="send.php">
    	<label>Name:</label>
    	<input type="text" 
    	       name="name">
    
    	<label>Job Description</label>
    	<textarea name="message"></textarea>
	
		<label>Number</label>
    	<input type="mobile Number" 
    	       name="number">

			   <label>Job Type</label>
    	<input type="text" 
    	       name="jobs">
			   <label>job Budget</label>
    	<input type="number" 
    	       name="Budget">

    	<input type="submit" 
    	       name="btn"  value="Add Post">
               <a class="edit" href="../../../freelance/views/client_home.php">View My Profile</a>
    </form>
</body>
</html>