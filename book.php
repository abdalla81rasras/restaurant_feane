<?php
include "./includes/header.php"; 

if(isset($_POST['btn-book-inner'])){

  $name_book_inner = mysqli_real_escape_string($conn , $_POST['name_book_inner'] );

  $phone_book_inner = mysqli_real_escape_string($conn , $_POST['phone_book_inner'] );
  preg_match('/^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?\s*$/', $phone_book_inner);

  $email_book_inner = mysqli_real_escape_string($conn , $_POST['email_book_inner'] );
  filter_var($email_book_inner, FILTER_VALIDATE_EMAIL);

  $person_book_inner = mysqli_real_escape_string($conn , $_POST['person_book_inner'] );

  $date_book_inner = mysqli_real_escape_string($conn , $_POST['date_book_inner'] );

  $sql="INSERT INTO `book_table_inner`(`name_book_inner`,`phone_book_inner`,`email_book_inner`,`person_book_inner`,`date_book_inner`) VALUES('$name_book_inner','$phone_book_inner','$email_book_inner','$person_book_inner','$date_book_inner')";

  if(mysqli_query($conn , $sql)){
    echo "<script type='text/javascript'>alert('Send Successfully'); window.location='book.php';</script>";
  }else{
    "Error Query".mysqli_error($conn);
  }

}
 
?>

<body class="sub_page">

  <div class="hero_area">
    <div class="bg-box">
      <img src="images/hero-bg.jpg" alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <span>
              Feane
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mx-auto ">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="menu.php">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="book.php">Book Table <span class="sr-only">(current)</span> </a>
              </li>
            </ul>
            <?php include "./includes/nav-header.php"; ?>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>
  <!-- book section -->
  <section class="book_section layout_padding" style="padding-top: 60px;">
    <div class="container text-oranges">
      <div class="heading_container">
        <h2>
          Book A Table
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
              <div>
                <input type="text" name="name_book_inner" class="form-control" placeholder="Your Name" required=""/>
              </div>
              <div>
                <input type="text" name="phone_book_inner" class="form-control" placeholder="Phone Number" required=""/>
              </div>
              <div>
                <input type="email" name="email_book_inner" class="form-control" placeholder="Your Email" required=""/>
              </div>
              <div>
                <select class="form-control nice-select wide" name="person_book_inner" required="">
                  <option value="" disabled selected>
                    How many persons?
                  </option>
                  <option value="2">
                    2
                  </option>
                  <option value="3">
                    3
                  </option>
                  <option value="4">
                    4
                  </option>
                  <option value="5">
                    5
                  </option>
                </select>
              </div>
              <div>
                <input type="date" class="form-control" name="date_book_inner" required="">
              </div>
              <div class="btn_box">
                <button name="btn-book-inner">
                  Book Now
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="map_container ">
            <div id="googleMap"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end book section -->

  <?php include "./includes/footer.php"; ?>