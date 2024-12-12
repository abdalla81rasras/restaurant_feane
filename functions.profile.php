<?php
include "./Dashboard/inc/connection.php";

if(isset($_POST['btn-book-profile'])){
    $name_book_profile = mysqli_real_escape_string($conn , $_POST['name_book_profile'] );
    
    $phone_book_profile = mysqli_real_escape_string($conn , $_POST['phone_book_profile'] );
    preg_match('/^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?\s*$/', $phone_book_profile);
    
    $email_book_profile = mysqli_real_escape_string($conn , $_POST['email_book_profile'] );
    filter_var($email_book_profile, FILTER_VALIDATE_EMAIL);
    
    $person_book_profile = mysqli_real_escape_string($conn , $_POST['person_book_profile'] );
    
    $date_book_profile = mysqli_real_escape_string($conn , $_POST['date_book_profile'] );
    
    $sql="INSERT INTO `book_table_profile`(`name_book_profile`,`phone_book_profile`,`email_book_profile`,`person_book_profile`,`date_book_profile`) VALUES('$name_book_profile','$phone_book_profile','$email_book_profile','$person_book_profile','$date_book_profile')";
    
    if(mysqli_query($conn , $sql)){
        echo "<script type='text/javascript'>alert('Send Successfully'); window.top.location='profile.php';</script>";
    }else{
        "Error Query".mysqli_error($conn);
    }
}


