<?php                
include "./Dashboard/inc/connection.php";
include "./functions_login.php";

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
                    <h2 class="card-title text-center text-primary2">Login</h2> <hr>
                    <div class="text-danger text-center"><?php echo $errors['U_P_Incorrent'] ?></div>
                    <div class="my-4">
                        <label for="InputEmail" class="text-primary2 font-weight-bold">Email :</label>
                        <input type="email" class="form-control bg-transparent" name="email_user" id="InputEmail" placeholder="Enter Email">
                        <div class="text-danger"><?php echo $errors['email_user'] ?></div>
                    </div>
                    <div class="my-4">
                        <label for="InputPassword" class="text-primary2 font-weight-bold">Password :</label>
                        <input type="password" class="form-control bg-transparent" name="pass_user" id="InputPassword" placeholder="Enter Password">
                        <i class="fa fa-eye-slash" id="ShowPassword"></i>
                        <div class="text-danger"><?php echo $errors['pass_user'] ?></div>
                    </div>
                    <div class="mt-4 mb-3 text-center">
                        <button class="btn btn-primary2 mb-3" name="login">Login</button> 
                        <p class="text-primary2 font-weight-bold"><a href="./signup.php">Don't have an account ? Sginup</a></p>
                    </div>
                    <div class="back float-start">
                        <a href="javascript:void(0);" onclick="Back()">
                            <i class="fa fa-arrow-left"></i>
                            <small style="font-size: 23px;" class="mb-0 pb-0">Back</small>
                        </a>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
    <script src="js/back.js"></script>
    <script src="js/login.js"></script>
</body>
</html>