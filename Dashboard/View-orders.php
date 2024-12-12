<?php 
include "inc/header.php";
include "inc/connection.php";

?>

<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">View All Orders</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Name of Reicpe</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $sql="SELECT * FROM `sopingcart`" ;
                                    $result= mysqli_query($conn,$sql);
                                    while($row=mysqli_fetch_assoc($result)):
                                ?>
                                    <tr>
                                        <td style="padding-top:29px;"><?php echo $row['name_user'] ?></td>
                                        <td>
                                            <img src="./upload/<?php echo $row['img_toCart']; ?>" title="<?php echo $row['img_toCart']; ?>" alt="<?php echo $row['img_toCart']; ?>" width="50px" height="50px">
                                        </td>                                        
                                        <td><?php echo $row['title_toCart']; ?></td>
                                        <td><?php echo $row['price_toCart']; ?></td>
                                        <td>
                                            <span>
                                                <a href="Add-footer.php?delete_toCart=<?php echo $row['id_toCart']; ?>" data-toggle="tooltip" data-placement="top" title="Close">
                                                    <i class="fa fa-close"></i>
                                                </a>
                                            </span>
                                        </td>
                                    </tr>
                                    <?php endwhile ; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "inc/footer.php" ?>