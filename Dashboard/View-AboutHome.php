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
                        <h4 class="card-title">View All About Home</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">Image</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Discraption</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $query="SELECT * FROM `about_home`";
                                        $result=mysqli_query($conn , $query);
                                        while($row=mysqli_fetch_array($result)): 
                                    ?>
                                    <tr>
                                        <td>
                                            <img src="./upload/<?php echo $row['img_about_home']; ?>" title="<?php echo $row['img_about_home']; ?>" alt="<?php echo $row['img_about_home']; ?>" width="50px" height="50px">
                                        </td>
                                        </td>
                                        <td><?php echo $row['title_about_home']; ?></td>
                                        <td><?php echo $row['discraption_about_home']; ?></td>
                                        <td>
                                            <span>
                                                <a href="Add-AboutHome.php?edit_about_home=<?php echo $row['id_about_home']; ?>" class="mr-4" data-toggle="tooltip"data-placement="top" title="Edit">
                                                    <i class="fa fa-pencil"></i> 
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