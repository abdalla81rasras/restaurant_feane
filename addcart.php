<?php 
session_start();
if(!isset($_SESSION['name_user']) && !isset($_SESSION['id_user'])){
  header("Location: login.php");
}

include "./includes/header.php";

$id_user=$_SESSION['id_user'];
$name_user=$_SESSION['name_user'];

if(isset($_GET['delete_toCart'])){
  $id_toCart=$_GET['delete_toCart'];

  $sql="DELETE FROM `sopingcart` WHERE `id_toCart`='$id_toCart'";

  if(mysqli_query($conn, $sql)){

  } else {
      echo 'query error: '. mysqli_error($conn);
  }
  
  header('Location: addcart.php');
}
?>

<section class="shopping-cart my-5">
  <div class="content">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="card">
            <div class="card-header">
              <i class="card-title text-bold">
                Shopping Bag
              </i>
            </div>
            <div class="card-body">
              <div class="table-responsive">
              <table class="table text-oranges">
                <thead>
                  <th>Delete</th>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Qty</th>
                  <th>Price</th>
                </thead>
                <tbody>
                  <?php
                    $sql="SELECT * FROM `sopingcart` WHERE `id_user`='$id_user' AND `name_user`='$name_user'" ;
                    $result= mysqli_query($conn,$sql);
                    while($row=mysqli_fetch_assoc($result)):
                  ?>
                    <tr>
                      <td style="vertical-align:initial;">
                        <a href="./addcart.php?delete_toCart=<?php echo $row['id_toCart']; ?>"> 
                          <div class="buttons">
                            <span class="delete-btn"><i class="fa fa-close"></i></span>
                          </div>
                        </a>
                      </td>
                      <td style="vertical-align:initial;">
                        <img src="./Dashboard/upload/<?php echo $row['img_toCart']; ?>" width="65px" alt="" />
                      </td>
                      <td style="vertical-align:initial;"><?php echo $row['title_toCart']; ?></td>
                      <td style="vertical-align:initial;"><input type="number" class="text-center" name="name" value="1" min="1" max="100"></td>
                      <td style="vertical-align:initial;"><?php echo $row['price_toCart']; ?>$</td>
                    </tr>
                  <?php endwhile;?>
                </tbody>
              </table>
            </div>
            </div>
          </div>
            
        </div>
      </div>
    </div>
  </div>
</section>