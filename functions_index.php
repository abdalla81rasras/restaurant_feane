<?php
if(isset($_POST['btn-book-home'])){

  $name_book_home = mysqli_real_escape_string($conn , $_POST['name_book_home'] );

  $phone_book_home = mysqli_real_escape_string($conn , $_POST['phone_book_home'] );
  preg_match('/^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?\s*$/', $phone_book_home);

  $email_book_home = mysqli_real_escape_string($conn , $_POST['email_book_home'] );
  filter_var($email_book_home, FILTER_VALIDATE_EMAIL);

  $person_book_home = mysqli_real_escape_string($conn , $_POST['person_book_home'] );

  $date_book_home = mysqli_real_escape_string($conn , $_POST['date_book_home'] );

  $sql="INSERT INTO `book_table_home`(`name_book_home`,`phone_book_home`,`email_book_home`,`person_book_home`,`date_book_home`) VALUES('$name_book_home','$phone_book_home','$email_book_home','$person_book_home','$date_book_home')";

  if(mysqli_query($conn , $sql)){
    echo "<script type='text/javascript'>alert('Send Successfully'); window.location='index.php';</script>";
  }else{
    "Error Query".mysqli_error($conn);
  }

}

?>