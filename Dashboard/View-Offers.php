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
                        <h4 class="card-title">View All Offers</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">Image</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Offer</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $query="SELECT * FROM `offers`";
                                        $result=mysqli_query($conn , $query);
                                        while($row=mysqli_fetch_array($result)): 
                                    ?>
                                    <tr>
                                        <td>
                                            <img src="./upload/<?php echo $row['img_offers']; ?>" title="<?php echo $row['img_offers']; ?>" alt="img-offer" width="50px" height="50px">
                                        </td>
                                        </td>
                                        <td><?php echo $row['title_offers']; ?></td>
                                        <td><?php echo $row['offer']; ?>%</td>
                                        <td>
                                            <span>
                                                <a href="Add-Offers.php?edit_offers=<?php echo $row['id_offers']; ?>" class="mr-4" data-toggle="tooltip"data-placement="top" title="Edit">
                                                    <i class="fa fa-pencil"></i> 
                                                </a>
                                                <a href="Add-Offers.php?delete_offers=<?php echo $row['id_offers']; ?>" data-toggle="tooltip" data-placement="top" title="Close">
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