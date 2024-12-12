<?php 
include "./Dashboard/inc/connection.php";
include "./functions_signup.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login & signup</title>

    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    
    <link rel="stylesheet" href="./css/login&signup.css">

</head>
<body>

    <div class="container">
        <div class="card card-bg">
            <div class="card-body">
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                    <h2 class="card-title text-center text-primary2">Create Account</h2> <hr>
                    <div class="my-3">
                        <label for="InputName" class="text-primary2 font-weight-bold">Name :</label>
                        <input type="text" class="form-control bg-transparent" name="name_user" id="InputName" placeholder="Enter Name">
                        <div class="text-danger"><?php echo $errors['name_user'] ?></div>
                    </div>
                    <div class="my-3">
                        <label for="InputPasswordS" class="text-primary2 font-weight-bold">Password :</label>
                        <input type="password" class="form-control bg-transparent" name="pass_user" id="InputPasswordS" placeholder="Enter Password">
                        <i class="fa fa-eye-slash" id="ShowPassword2"></i>
                        <div class="text-danger"><?php echo $errors['pass_user']; ?></div>
                    </div>
                    <div class="my-3">
                        <label for="InputPhone" class="text-primary2 font-weight-bold">Phone Number :</label>
                        <input type="text" class="form-control bg-transparent" name="phone_user" id="InputPhone" placeholder="Enter Phone Number">
                        <div class="text-danger"><?php echo $errors['phone_user']; ?></div>
                    </div>
                    <div class="my-3">
                        <label for="InputAddress" class="text-primary2 font-weight-bold">Address :</label>
                        <input type="text" class="form-control bg-transparent" name="address_user" id="InputAddress" placeholder="Enter Address">
                        <div class="text-danger"><?php echo $errors['address_user']; ?></div>
                    </div>
                    <div class="my-3">
                        <label for="InputAddress" class="text-primary2 font-weight-bold">Email :</label>
                        <input type="text" class="form-control bg-transparent" name="email_user" id="InputAddress" placeholder="Enter Email">
                        <div class="text-danger"><?php echo $errors['email_user']; ?></div>
                    </div>
                    <div class="mt-4 text-center text-primary2">
                        <button class="btn btn-primary2 mb-3" name="signup">Signup</button>  
                        <p class="text-primary2 font-weight-bold mb-1"><a href="./login.php">have an account ? Login</a></p>
                    </div>
                </form>
            </div>
        </div>
        <script src="./js/signup.js"></script>
    </div>
</body>
</html>