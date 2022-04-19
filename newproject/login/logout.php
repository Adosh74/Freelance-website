<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['user_name'])){


?>
<html>
    <head>
    <link rel="stylesheet" href="../style.css">
    </head>
    <body >
<h1 class="cc"> Hello , <?php  echo $_SESSION['name']; ?></h1>
<a class="bb" href="adm_log.php"> logout</a>
    </body>
</html>
<?php
}else{
    header("Location: adm_log.php");
    exit();
}


?>