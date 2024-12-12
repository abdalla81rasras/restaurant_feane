<?php 
session_start();
if(!isset($_SESSION['name_user']) && !isset($_SESSION['id_user'])){
  header("Location: login.php");
}

include "./includes/header.php"; 
include "./functions_login.php";
include "./functions.profile.php";

$id_user = $_SESSION['id_user'];
$name_user= $_SESSION['name_user'];
$name_user=$pass_user=$phone_user=$address_user=$email_user="";
$errors=array("name_user"=>"" , "pass_user"=>"" , "phone_user"=>"" , "address_user"=>"" , "email_user"=>"");

if(isset($_POST['update_profile'])){

    if(empty($_POST['name_user'])){
        $errors['name_user']="No Name !";
    }else{
        $name_user = $_POST['name_user'];
        if(!preg_match('/^.{5,}$/' , $name_user)){
            $errors['name_user']="username must be at least 5 characters";
        }
    }

    if(empty($_POST['pass_user'])){
        $errors['pass_user']="No Password !";
    }else{
        $pass_user = $_POST['pass_user'];
        if(!preg_match('/(?=.*[A-Za-z0-9])(?=.*\d)[A-Za-z\d]{8,}/',$pass_user)){
            $errors['pass_user']="must be password strong 8 characters";
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
        $email_user = $_POST['email_user'];
        if(!filter_var($email_user, FILTER_VALIDATE_EMAIL)){
            $errors['email_user'] = 'Email valid !';
        }
    }

    if(!array_filter($errors)){
        $name_user = mysqli_real_escape_string($conn , $_POST['name_user']); 
        $pass_user = mysqli_real_escape_string($conn , $_POST['pass_user']);
        $phone_user = mysqli_real_escape_string($conn , $_POST['phone_user']);
        $address_user = mysqli_real_escape_string($conn , $_POST['address_user']);
        $email_user = mysqli_real_escape_string($conn , $_POST['email_user']);

        $sql="UPDATE `user` SET `name_user`='$name_user' , `pass_user`='$pass_user' , `phone_user`='$phone_user' , `address_user`='$address_user' , `email_user`='$email_user' WHERE `id_user`='$id_user'" ;

        if(mysqli_query($conn , $sql)){
            header("Location: profile.php");
        }else{
            echo "Query Error !" . mysqli_error($conn);
        }
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

    <section class="profile_information_section" style="padding-top:55px">
        <div class="container text-oranges">
            <div class="heading_container heading_center">
                <h2>
                Profile
                </h2>
            </div>
            <div class="form_container">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <?php 
                    $sql="SELECT * FROM `user` WHERE `id_user`='$id_user'";
                    $query = mysqli_query($conn , $sql);
                    $row = mysqli_fetch_assoc($query);
                ?>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div>
                                <label>Name :</label>
                                <input type="text" class="form-control mb-0" name="name_user" value="<?php echo $row['name_user'] ?>" placeholder="Your Name" />
                                <div class="text-danger"><?php echo $errors['name_user'] ?></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <label>Password :</label>
                                <input type="text" class="form-control mb-0" name="pass_user" value="<?php echo $row['pass_user'] ?>"  placeholder="Your Password"/>
                                <div class="text-danger"><?php echo $errors['pass_user']; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div>
                                <label>Phone Number :</label>
                                <input type="text" class="form-control mb-0" name="phone_user" value="<?php echo $row['phone_user'] ?>" placeholder="Your Phone"/>
                                <div class="text-danger"><?php echo $errors['phone_user']; ?></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <label>Address :</label>
                                <input type="text" class="form-control mb-0" name="address_user" value="<?php echo $row['address_user'] ?>" placeholder="Your Address"/>
                                <div class="text-danger"><?php echo $errors['address_user']; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <div>
                                <label>Email :</label>
                                <input type="email" class="form-control mb-0" name="email_user" value="<?php echo $row['email_user'] ?>" placeholder="Your Email"/>
                                <div class="text-danger"><?php echo $errors['email_user']; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="btn_box text-center d-flex justify-content-around">
                        <button name="update_profile">
                            Update
                        </button>
                        
                        <a href="./logout.php" class="btn btn-danger">Logout</a>
                    </div>
                    <?php  ?>
                </form>
            </div>
        </div>
    </section>

    <section class="book_section layout_padding">
        <div class="container text-oranges">
            <div class="heading_container heading_center">
                <h2>
                Book A Table
                </h2>
            </div>
            <div class="form_container">
                <form action="" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <label>name :</label>
                            <input type="text" name="name_book_profile" class="form-control" placeholder="Your Name" required=""/>
                        </div>
                        <div class="col-md-6">
                            <label>Phone Number :</label>
                            <input type="text" name="phone_book_profile" class="form-control" placeholder="Phone Number" required=""/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Email:</label>
                            <input type="email" name="email_book_profile" class="form-control" placeholder="Your Email" required=""/>
                        </div>
                        <div class="col-md-6">
                            <label>Pooking Person :</label>
                            <select class="form-control nice-select wide" name="person_book_profile" required="">
                                <option value="" disabled selected>How many persons?</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Booking Date :</label>
                            <input type="date" class="form-control" name="date_book_profile" required="">
                        </div>
                    </div>
                    <div class="btn_box text-center">
                        <button name="btn-book-profile">
                            Book Now
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="shoppcart_section layout_padding-bottom">
        <div class="container text-oranges">
            <div class="heading_container heading_center">
                <h2>
                    Shopping Cart
                </h2>
            </div>
            <div>
                <table class="table text-oranges">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name of recipe</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $sql="SELECT * FROM `sopingcart` WHERE `id_user`='$id_user'" ;
                        $result= mysqli_query($conn,$sql);
                        while($row=mysqli_fetch_assoc($result)):
                    ?>
                        <tr>
                            <td style="vertical-align:initial;">
                                <img src="Dashboard/upload/<?php echo $row['img_toCart'] ?>" title="<?php echo $row['img_toCart'] ?>" alt="<?php echo $row['img_toCart'] ?>" width="60px" height="60px">
                            </td>
                            <td style="vertical-align:initial;"><?php echo $row['title_toCart'] ?></td>
                            <td style="vertical-align:initial;"><?php echo $row['price_toCart'] ?>$</td>
                        </tr>
                    <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
  <?php include "./includes/footer.php"; ?>