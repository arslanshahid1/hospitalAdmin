<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/script.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-6 mx-auto">
            <h5>
                <?php
                if(!empty ($_POST['error'])){
                    echo $_POST['error'];
                }
                ?>
            </h5>
                <form action="action/loginaction.php" method="post">
                    <div class="form-group ">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Enter username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>