<?php
include "./Dashboard/inc/connection.php";

$pass_user=$email_user=$U_P_Incorrent="";
$errors=array("pass_user"=>"" , "email_user"=>"" , "U_P_Incorrent"=>"");

if(isset($_POST['login'])){

    if(empty($_POST['email_user'])){
        $errors['email_user']="No Email !";
    }else{
        $email_user = $_POST['email_user'];
        if(!filter_var($email_user, FILTER_VALIDATE_EMAIL)){
            $errors['email_user'] = 'Email valid !';
        }
    }

    if(empty($_POST['pass_user'])){
        $errors['pass_user']="No Password !";
    }else{
        $pass_user = $_POST['pass_user'];
        if(!preg_match('/(?=.*[A-Za-z0-9])(?=.*\d)[A-Za-z\d]{8,}/',$pass_user)){
            $errors['pass_user']="must be password strong 8 characters (numbers & letters )";
        }
    }

    if(!array_filter($errors)){
        $email_user = mysqli_real_escape_string($conn , $_POST['email_user']);
        $pass_user = mysqli_real_escape_string($conn , $_POST['pass_user']);            

        $sql="SELECT * FROM `user` WHERE `email_user`='$email_user' && `pass_user`='$pass_user'";

        $query= mysqli_query($conn , $sql);

        $num_row = mysqli_num_rows($query);

        if($num_row > 0){ 
            $row= mysqli_fetch_assoc($query);
            $id_user = $row['id_user'];
            $name_user = $row['name_user'];

            session_start();
            $_SESSION['valid'] = true;
            $_SESSION['id_user'] = $id_user;
            $_SESSION['name_user'] = $name_user;

            header("Location:index.php");
        }else{
            $errors['U_P_Incorrent']="Email | Pssword Incorrent";
        }
        
    }
}


?>
