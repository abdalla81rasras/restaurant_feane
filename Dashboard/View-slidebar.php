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
                        <h4 class="card-title">View All Slide Bar</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">Image</th>
                                        <th scope="col">Title 1</th>
                                        <th scope="col">Title 2</th>
                                        <th scope="col">Title 3</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $query="SELECT * FROM `slide_bar`";
                                        $result=mysqli_query($conn , $query);                                    
                                        while($row=mysqli_fetch_assoc($result)): 
                                    ?>
                                    <tr>
                                        <td>
                                            <img src="./upload/<?php echo $row['img_slidebar']; ?>" title="<?php echo $row['img_slidebar']; ?>" alt="icon-tab" width="50px" height="50px">
                                        </td>
                                        <td><?php echo $row['title_slidebar']; ?></td>
                                        <td><?php echo $row['title_slidebar2']; ?></td>
                                        <td><?php echo $row['title_slidebar3']; ?></td>
                                        <td>
                                            <span>
                                                <a href="Add-slidebar.php?edit_slidebar=<?php echo $row['id_slidebar']; ?>" class="mr-4" data-toggle="tooltip"data-placement="top" title="Edit">
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