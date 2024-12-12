<?php 
include "Dashboard/inc/connection.php";

$warning=array("warning"=>"");

if(isset($_POST['add_cart'])){

    $id_user = $_SESSION['id_user'];
    $name_user = $_SESSION['name_user'];
    $img_toCart = mysqli_real_escape_string($conn , $_POST['img_toCart']);
    $title_toCart= mysqli_real_escape_string($conn , $_POST['title_toCart']);
    $price_toCart = mysqli_real_escape_string($conn , $_POST['price_toCart']);

    $sql_cart="SELECT * FROM `sopingcart` WHERE `title_toCart`='$title_toCart' AND `id_user`='$id_user' AND `name_user`='$name_user'";
    $result_cart=mysqli_query($conn , $sql_cart);

    if(mysqli_num_rows($result_cart) > 0){

        $warning['warning']="product already added to cart !";

    }else{

        $sql="INSERT INTO `sopingcart`(`id_user`,`name_user`,`img_toCart`,`title_toCart`,`price_toCart`) VALUES('$id_user', '$name_user','$img_toCart','$title_toCart','$price_toCart')";

        if(mysqli_query($conn , $sql)){
            header("Location: addcart.php");
        }else{
            echo "Error Query !" . mysqli_error($conn);
        }
        
    }
    
}
?>