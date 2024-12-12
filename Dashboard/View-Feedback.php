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
                        <h4 class="card-title">View Feedbaks</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">Image</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Discraption</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $query="SELECT * FROM `feedback`";
                                        $result=mysqli_query($conn , $query);
                                        while($row=mysqli_fetch_array($result)):
                                    ?>
                                    <tr>
                                        <td>
                                            <img src="./upload/<?php echo $row['img_feeback']; ?>" title="<?php echo $row['img_feeback']; ?>" alt="<?php echo $row['img_feeback']; ?>" width="50px" height="50px">
                                        </td>
                                        </td>
                                        <td><?php echo $row['name_feedback']; ?></td>
                                        <td><?php echo $row['discraption_feeback']; ?></td>
                                        <td>
                                            <span>
                                                <a href="Add-Feedback.php?edit_feeback=<?php echo $row['id_feeback']; ?>" class="mr-4" data-toggle="tooltip"data-placement="top" title="Edit">
                                                    <i class="fa fa-pencil"></i> 
                                                </a>
                                                <a href="Add-Feedback.php?delete_feeback=<?php echo $row['id_feeback']; ?>" data-toggle="tooltip" data-placement="top" title="Close">
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