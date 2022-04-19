<?php
session_start();
if ($_SESSION['username'] && $_SESSION['type'] == "admin") { ?>

    <head>
        <link rel="stylesheet" href="../css/bootstrap-4.6.1-dist/css/bootstrap.min.css">
    </head>

    <body>
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="#">
                
                Welecome.. <?php echo $_SESSION['fname'] . " " . $_SESSION['lname']; ?>

            </a>
            <a href="../views/admin_view_clients.php" class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submitLogout">View Clients</a>
            <a href="../views/admin_view_freelancer.php" class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submitLogout">View Freelancers</a>
            <a href="../views/admin_add_freelancer.php" class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submitLogout">Add Freelancer</a>
            <a href="../views/admin_view_posts.php" class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submitLogout">View Posts</a>
            <form action="../controller/LogoutController.php" method="post" class="form-inline" style="margin:0;">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submitLogout">Logout</button>
            </form>
        </nav>

        <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
            <h1 class="text-right">Add New Client</h1>
            
                <div class="col-md-12 border-right border-left">
                    <div class="p-3 py-5">
                        
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile Information</h4>
                        </div>

                        <form action="../controller/AddUserController.php" method="post" enctype="multipart/form-data">

                            <div class="row mt-2">
                                <div class="col-md-6"><label class="labels">Name</label><input type="text" name="c_fname" class="form-control"></div>
                                <div class="col-md-6"><label class="labels">Surname</label><input type="text" name="c_lname" class="form-control"></div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-12"><label class="labels">Username</label><input type="text" name="c_username" class="form-control"></div>
                                <div class="col-md-12"><label class="labels">Password</label><input type="password" name="c_password" class="form-control"></div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-12"><label class="labels">Email</label><input type="text" name="c_email" class="form-control"></div>
                                <div class="col-md-12"><label class="labels">Age</label><input type="text" name="c_age" class="form-control"></div>
                                <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" name="c_phone" class="form-control"></div>
                                <div class="col-md-12"><label class="labels">Address</label><input type="text" name="c_address" class="form-control"></div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-12"><input type="file" name="file"></div>
                            </div>
                            <div class="mt-5 text-center"><input class="btn btn-primary profile-button" type="submit" value="Add Client" name="submit"></div>
                    </div>
                </div>

            </div>
        </div>
    </body>


<?php
} else {
    header("location:../index.php");
}
?>