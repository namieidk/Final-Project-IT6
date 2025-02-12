<?php include 'database/database.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory & POS</title>
    <link href="statics/css/bootstrap.min.css" rel="stylesheet">
    <link href="statics/css/style.css" rel="stylesheet">
    <link href="statics/icons/css/all.css" rel="stylesheet">
     <script src="statics/js/bootstrap.js"></script>
</head>
<body>
    <div class="container" style="margin-top: 110px; background-color:rgb(140, 182, 227); color: #fff; padding: 20px; width: 65%; height: 70vh;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="d-flex align-items-stretch">
                    <img src="images/Logo.jpg" alt="Logo" class="mr-4" style="width: 61%; height: 100%; margin-right: 10px; margin-top: 40px;">
                    <form style="padding: 70px; background-color: #007bff; color: #fff; width: 100%; height: auto; margin-top: 40px; margin-left: -30px;" action="login.php" method="POST">
                        <h2 class="text-center">LOGIN</h2>
                        <div class="form-group">
                            <label style="margin-left: 10px;">Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Username" required style="width: 150%; height: 30px; margin-left: -25px;">
                        </div>
                        <div class="form-group">
                            <label style="margin-left: 10px;">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password" required style="width: 150%; height: 30px; margin-left: -25px;">
                        </div>
                        <button type="submit" class="btn btn-light btn-block" style="width: 100%; margin-top: 20px; ">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>