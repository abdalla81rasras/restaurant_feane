<?php
session_start();
if(!isset($_SESSION['name_user']) && !isset($_SESSION['id_user'])){

}

include "./includes/header.php";
include "./function_mneu.php";

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
              <li class="nav-item active">
                <a class="nav-link" href="menu.php">Menu <span class="sr-only">(current)</span> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
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

  <!-- food section -->
  <section class="food_section layout_padding" style="padding-top: 55px;">
    <div class="container">
      <div class="heading_container heading_left">
        <h2 class="text-oranges">
          Our Menu
        </h2>
      </div>
      <div class="text-warning text-center"><?php echo $warning['warning']; ?></div>
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
            $select="SELECT * FROM `mneu_inner` LIMIT 9";
            $query=mysqli_query($conn , $select);
            if(mysqli_num_rows($query) > 0):
              while($row=mysqli_fetch_assoc($query)):
          ?>
            <form action="" method="POST">
              <div class="col-sm-6 col-lg-4 all <?php echo $row['mneus_inner'] ?>">
                <div class="box">
                  <div class="text-oranges">
                    <div class="img-box">
                      <img src="Dashboard/upload/<?php echo $row['img_MneuCart_inner'] ?>" alt="">
                    </div>
                    <div class="detail-box">
                      <h5>
                        <?php echo $row['name_MneuCart_inner'] ?>
                      </h5>
                      <p>
                        <?php echo $row['content_MneuCart_inner'] ?>
                      </p>
                      <div class="options">
                        <h6>
                          <?php echo $row['price_MneuCart_inner'] ?>$
                        </h6>
                        <input type="hidden" name="img_toCart" value="<?php echo $row['img_MneuCart_inner'] ?>">
                        <input type="hidden" name="title_toCart" value="<?php echo $row['name_MneuCart_inner'] ?>">
                        <input type="hidden" name="price_toCart" value="<?php echo $row['price_MneuCart_inner'] ?>">
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
                        <?php else:?>
                          <a href="login.php">
                            <button class="btn" type="submit">
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
          <?php 
            endwhile;
          endif;
          ?>
        </div>
      </div>

    </div>
  </section>
  <!-- end food section -->
  <?php include "./includes/footer.php"; ?>