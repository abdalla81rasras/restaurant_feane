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
                        <h4 class="card-title">View All Logo Header & Tab</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">Icon Tab</th>
                                        <th scope="col">Title Tab</th>
                                        <th scope="col">Logo Header</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php  
                                            $query = "SELECT * FROM `header`";
                                            $result = mysqli_query($conn , $query);
                                            while($row = mysqli_fetch_assoc($result)) :
                                        ?>
                                        <td>
                                            <img src="./upload/<?php echo $row['img_tab']; ?>" title="<?php echo $row['img_tab']; ?>" alt="icon-tab" width="50px" height="50px">
                                        </td>
                                        <td><?php echo $row['title_tab']; ?></td>
                                        <td><?php echo $row['name_logo']; ?></td>
                                        <td>
                                            <span>
                                                <a href="Add-header.php?edit_header=<?php echo $row['id_header']; ?>" class="mr-4" data-toggle="tooltip"data-placement="top" title="Edit">
                                                    <i class="fa fa-pencil"></i> 
                                                </a>
                                            </span>
                                        </td>
                                        <?php endwhile; ?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "inc/footer.php"; ?>