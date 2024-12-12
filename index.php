<?php
session_start();
if(!isset($_SESSION['name_user']) && !isset($_SESSION['id_user'])){

}

include "./includes/header.php"; 
include "./functions_index.php";
include "./function_mneu.php";
?>

<body>
  <div class="hero_area">
    <div class="bg-box">
      <?php 
         $select="SELECT `img_slidebar` FROM `slide_bar`";
         $query=mysqli_query($conn , $select);
         while($row=mysqli_fetch_assoc($query)):
      ?>
      <img src="Dashboard/upload/<?php echo $row['img_slidebar'] ?>" alt="">
      <?php endwhile; ?>
    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href=" ">
            <?php 
              $query = "SELECT * FROM `header`";
              $result = mysqli_query($conn , $query);
              while($row = mysqli_fetch_assoc($result)) :
            ?>
              <span>
                <?php echo $row['name_logo'] ?>
              </span>
            <?php endwhile; ?>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mx-auto ">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./menu.php">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./book.php">Book Table</a>
              </li>
            </ul>
            <?php include "./includes/nav-header.php"; ?>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section">
      <?php 
         $select="SELECT * FROM `slide_bar`";
         $query=mysqli_query($conn , $select);
         while($row=mysqli_fetch_assoc($query)):
      ?>
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">
                    <h1 class="text-oranges">
                      <?php echo $row['title_slidebar'] ?>
                    </h1>
                    <p class="text-oranges">
                      Doloremque, itaque aperiam facilis rerum, commodi, temporibus sapiente ad mollitia laborum quam quisquam esse error unde. Tempora ex doloremque, labore, sunt repellat dolore, iste magni quos nihil ducimus libero ipsam.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Order Now
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">
                    <h1 class="text-oranges">
                      <?php echo $row['title_slidebar2'] ?>
                    </h1>
                    <p class="text-oranges">
                      Doloremque, itaque aperiam facilis rerum, commodi, temporibus sapiente ad mollitia laborum quam quisquam esse error unde. Tempora ex doloremque, labore, sunt repellat dolore, iste magni quos nihil ducimus libero ipsam.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Order Now
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">
                    <h1 class="text-oranges">
                      <?php echo $row['title_slidebar3'] ?>
                    </h1>
                    <p class="text-oranges">
                      Doloremque, itaque aperiam facilis rerum, commodi, temporibus sapiente ad mollitia laborum quam quisquam esse error unde. Tempora ex doloremque, labore, sunt repellat dolore, iste magni quos nihil ducimus libero ipsam.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Order Now
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <ol class="carousel-indicators">
            <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
            <li data-target="#customCarousel1" data-slide-to="1"></li>
            <li data-target="#customCarousel1" data-slide-to="2"></li>
          </ol>
        </div>
      </div>
      <?php endwhile; ?>
    </section>
    <!-- end slider section -->
  </div>

  <!-- offer section -->
  <section class="offer_section layout_padding-bottom">
    <div class="offer_container">
      <div class="container">
        <div class="row">
          <?php 
                $select="SELECT * FROM `offers`";
                $query=mysqli_query($conn , $select);
                while($row=mysqli_fetch_assoc($query)):
          ?>
          <div class="col-md-6  ">
            <div class="box ">
              
              <div class="img-box">
                <img src="Dashboard/upload/<?php echo $row['img_offers'] ?>" alt="">
              </div>
              <div class="detail-box">
                <h5 class="text-oranges">
                  <?php echo $row['title_offers'] ?>
                </h5>
                <h6>
                  <span><?php echo $row['offer'] ?>%</span> Off
                </h6>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </section>
  <!-- end offer section -->

  <!-- food section -->
  <section class="food_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center">
        <h2 class="text-oranges">
          Our Menu
        </h2>
      </div>
      <div class="text-warning text-center mt-1"><?php echo $warning['warning']; ?></div>
      <ul class="filters_menu">
        <li class="active text-oranges" data-filter="*">All</li>
        <li data-filter=".burger" class="text-oranges">Burger</li>
        <li data-filter=".pizza" class="text-oranges">Pizza</li>
        <li data-filter=".pasta" class="text-oranges">Pasta</li>
        <li data-filter=".fries" class="text-oranges">Fries</li>
      </ul>

      <div class="filters-content">
        <div class="row grid">
          <?php 
            $select="SELECT * FROM `mneu_home` LIMIT 9";
            $query=mysqli_query($conn , $select);
            while($row=mysqli_fetch_assoc($query)):
          ?>
          <form action="" method="post">
            <div class="col-sm-6 col-lg-4 all <?php echo $row['mneus_home'] ?>">
              <div class="box">
                <div class="text-oranges">
                  <div class="img-box">
                    <img src="Dashboard/upload/<?php echo $row['img_MneuCart_home'] ?>" alt="">
                  </div>
                  <div class="detail-box">
                    <h5>
                      <?php echo $row['name_MneuCart_home'] ?>
                    </h5>
                    <p>
                      <?php echo $row['content_MneuCart_home'] ?>
                    </p>
                    <div class="options">
                      <h6>
                        <?php echo $row['price_MneuCart_home'] ?>$
                      </h6>
                      <input type="hidden" name="img_toCart" value="<?php echo $row['img_MneuCart_home'] ?>">
                      <input type="hidden" name="title_toCart" value="<?php echo $row['name_MneuCart_home'] ?>">
                      <input type="hidden" name="price_toCart" value="<?php echo $row['price_MneuCart_home'] ?>">
                      <?php if(!empty($_SESSION['id_user'])): ?>
                        <a>
                          <button class="btn" type="submit" name="add_cart">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                              <g>
                                <g>
                                  <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                              c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                                </g>
                              </g>
                              <g>
                                <g>
                                  <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                              C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                              c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                              C457.728,97.71,450.56,86.958,439.296,84.91z" />
                                </g>
                              </g>
                              <g>
                                <g>
                                  <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                              c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                                </g>
                              </g>
                            </svg>
                          </button>
                        </a>
                      <?php else: ?>
                        <a href="login.php">
                          <button class="btn"">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                              <g>
                                <g>
                                  <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                              c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                                </g>
                              </g>
                              <g>
                                <g>
                                  <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                              C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                              c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                              C457.728,97.71,450.56,86.958,439.296,84.91z" />
                                </g>
                              </g>
                              <g>
                                <g>
                                  <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                              c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                                </g>
                              </g>
                            </svg>
                          </button>
                        </a>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
          <?php endwhile; ?>
        </div>
      </div>
      <div class="btn-box">
        <a href="./menu.php">
          View More
        </a>
      </div>
    </div>
  </section>
  <!-- end food section -->

  <!-- about section -->
  <section class="about_section layout_padding">
    <div class="container text-oranges">
    <?php 
      $select="SELECT * FROM `about_home`";
      $query=mysqli_query($conn , $select);
      while($row=mysqli_fetch_assoc($query)):
    ?>
      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="Dashboard/upload/<?php echo $row['img_about_home'] ?>" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                <?php echo $row['title_about_home'] ?>
              </h2>
            </div>
            <p>
                <?php echo $row['discraption_about_home'] ?>
            </p>
            <a href="./about.php">
              Read More
            </a>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </section>
  <!-- end about section -->

  <!-- book section -->
  <section class="book_section layout_padding">
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
                <input type="text" name="name_book_home" class="form-control" placeholder="Your Name" required=""/>
              </div>
              <div>
                <input type="text" name="phone_book_home" class="form-control" placeholder="Phone Number" required=""/>
              </div>
              <div>
                <input type="email" name="email_book_home" class="form-control" placeholder="Your Email" required=""/>
              </div>
              <div>
                <select class="form-control nice-select wide" name="person_book_home" required="">
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
                <input type="date" class="form-control" name="date_book_home" required="">
              </div>
              <div class="btn_box">
                <button name="btn-book-home">
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

  <!-- client section -->
  <section class="client_section layout_padding-bottom">
    <div class="container ">
      <div class="heading_container heading_center psudo_white_primary mb_45">
        <h2 class="text-oranges">
          What Says Our Customers
        </h2>
      </div>
      <div class="carousel-wrap row ">
        <div class="owl-carousel client_owl-carousel">
          <?php 
            $select="SELECT * FROM `feedback`";
            $query=mysqli_query($conn , $select);
            while($row=mysqli_fetch_assoc($query)):
          ?>
            <div class="item">
              <div class="box">
                <div class="detail-box">
                  <p class="text-oranges">
                    <?php echo $row['discraption_feeback'] ?>
                  </p>
                  <h6 class="text-oranges">
                    <?php echo $row['name_feedback'] ?>
                  </h6>
                  <p class="text-oranges">
                    magna aliqua
                  </p>
                </div>
                <div class="img-box">
                  <img src="Dashboard/upload/<?php echo $row['img_feeback'] ?>" alt="" class="box-img">
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </section>
  <!-- end client section -->

 <?php include "./includes/footer.php"; ?>