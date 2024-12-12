<?php include "./includes/header.php"; ?>

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
              <li class="nav-item ">
                <a class="nav-link" href="index.php">Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="menu.php">Menu</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="about.php">About <span class="sr-only">(current)</span> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="book.php">Book Table</a>
              </li>
            </ul>
            <?php include "./includes/nav-header.php"; ?>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>
  
  <!-- about section -->

  <section class="about_section layout_padding pb-0" style="padding-top:80px;">
  <div class="container text-oranges">
    <?php 
      $select="SELECT * FROM `about_inner`";
      $query=mysqli_query($conn , $select);
      while($row=mysqli_fetch_assoc($query)):
    ?>
      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="Dashboard/upload/<?php echo $row['img_about_inner'] ?>" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                <?php echo $row['title_about_inner'] ?>
              </h2>
            </div>
            <p>
                <?php echo $row['discraption_about_inner'] ?>
            </p>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </section>

  <!-- end about section -->
 
  <?php include "./includes/footer.php"; ?>