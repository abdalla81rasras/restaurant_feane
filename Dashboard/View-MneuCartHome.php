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
                        <h4 class="card-title">View All Mneu Cart Home</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">Type Mneu</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Content</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $query="SELECT * FROM `mneu_home`";
                                        $result=mysqli_query($conn , $query);
                                        while($row=mysqli_fetch_array($result)): 
                                    ?>
                                    <tr>
                                        <td><?php echo $row['mneus_home']; ?></td>
                                        <td>
                                            <img src="./upload/<?php echo $row['img_MneuCart_home']; ?>" title="<?php echo $row['img_MneuCart_home']; ?>" alt="<?php echo $row['img_MneuCart_home']; ?>" width="50px" height="50px">
                                        </td>
                                        </td>
                                        <td><?php echo $row['name_MneuCart_home']; ?></td>
                                        <td><?php echo $row['content_MneuCart_home']; ?></td>
                                        <td><?php echo $row['price_MneuCart_home']; ?>$</td>
                                        <td>
                                            <span>
                                                <a href="Add-MneuCartHome.php?edit_MneuCart_home=<?php echo $row['id_MneuCart_home']; ?>" class="mr-4" data-toggle="tooltip"data-placement="top" title="Edit">
                                                    <i class="fa fa-pencil"></i> 
                                                </a>
                                                <a href="Add-MneuCartHome.php?delete_MneuCart_home=<?php echo $row['id_MneuCart_home']; ?>" data-toggle="tooltip" data-placement="top" title="Close">
                                                    <i class="fa fa-close"></i>
                                                </a>
                                            </span>
                                        </td>
                                    </tr>
                                    <?php endwhile; ?>
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