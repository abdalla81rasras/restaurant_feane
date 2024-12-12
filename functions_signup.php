<?php
include "./Dashboard/inc/connection.php";
        
$name_user=$pass_user=$phone_user=$address_user=$email_user="";
$errors=array("name_user"=>"" , "pass_user"=>"" , "phone_user"=>"" , "address_user"=>"" , "email_user"=>"");

if(isset($_POST['signup'])){

    if(empty($_POST['name_user'])){
        $errors['name_user']="No Name";
      }else{
        $name_user = $_POST['name_user'];
        if(!preg_match('/^.{5,}$/' , $name_user)){
            $errors['name_user']="username must be at least 5 characters";
        }
    }
    
    if(empty($_POST['pass_user'])){
        $errors['pass_user']="No Password";
      }else{
        $pass_user = $_POST['pass_user'];
        if(!preg_match('/(?=.*[A-Za-z0-9])(?=.*\d)[A-Za-z\d]{8,}/',$pass_user)){
            $errors['pass_user']="must be password strong 8 characters ( numbers & letters )";
        }
    }

    if(empty($_POST['phone_user'])){
        $errors['phone_user']="No Phone Number !";
      }else{
        $phone_user = $_POST['phone_user'];
        if(!preg_match('/^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?\s*$/',$phone_user)){
            $errors['phone_user']="phone number must be 10 digit";
        }
    }

    if(empty($_POST['address_user'])){
        $errors['address_user']="No Address !";
      }else{
        $address_user = $_POST['address_user'];
    }

    if(empty($_POST['email_user'])){
        $errors['email_user']="No Email !";
      }else{
        $address_user = $_POST['email_user'];
        if(!filter_var($address_user, FILTER_VALIDATE_EMAIL)){
            $errors['email_user'] = 'Email valid !';
        } 
    }

    if(!array_filter($errors)){
        $name_user = mysqli_real_escape_string($conn , $_POST['name_user']); 
        $pass_user = mysqli_real_escape_string($conn , $_POST['pass_user']);
        $phone_user = mysqli_real_escape_string($conn ,  $_POST['phone_user']);
        $address_user = mysqli_real_escape_string($conn , $_POST['address_user']);
        $email_user = mysqli_real_escape_string($conn , $_POST['email_user']);

        $sql= "INSERT INTO `user`(`name_user`,`pass_user`,`phone_user`,`address_user`,`email_user`) VALUES('$name_user','$pass_user','$phone_user','$address_user','$email_user')";
        
        if(mysqli_query($conn , $sql)){
            
            session_start();
            $_SESSION['name_user'] = $name_user;
            echo "<script type='text/javascript'>alert('Send Successfully');
                                window.location='login.php';</script>";
            
        }else{
            echo 'query error !' . mysqli_error($conn);
        }
    }
} 



?>