<?php  
  include "Dashboard/inc/connection.php";
?>
<!DOCTYPE html>
<html>
<head>
  <?php 
    $sql="SELECT * FROM `header`";
    $query = mysqli_query($conn , $sql);
    while($row=mysqli_fetch_array($query)):
  ?>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="Dashboard/upload/<?php echo $row['img_tab'] ?>" type="">

  <title><?php echo $row['title_tab'] ?></title>
  <?php endwhile; ?>
  <!-- bootstrap core css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="./css/styles.css">
  <!-- responsive style -->
  <link rel="stylesheet" href="css/Responsives.css">

</head>
