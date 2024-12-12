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
                        <h4 class="card-title">View All Footer</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">Facebook</th>
                                        <th scope="col">Twitter</th>
                                        <th scope="col">Instagram</th>
                                        <th scope="col">Location</th>
                                        <th scope="col">Phone Number</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Name Site</th>
                                        <th scope="col">Slogin</th>
                                        <th scope="col">Time Open</th>
                                        <th scope="col">Time Close</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                       $query="SELECT * FROM `footer`";
                                       $result=mysqli_query($conn , $query);
                                       while($row=mysqli_fetch_array($result)): 
                                    ?>
                                    <tr>
                                        <td><?php echo $row['facebook_footer'] ?></td>
                                        <td><?php echo $row['twitter_footer'] ?></td>
                                        <td><?php echo $row['instagram_footer'] ?></td>
                                        <td><?php echo $row['location_footer'] ?></td>
                                        <td><?php echo $row['phone_footer'] ?></td>
                                        <td><?php echo $row['email_footer'] ?></td>
                                        <td><?php echo $row['Name_footer'] ?></td>
                                        <td><?php echo $row['slogin'] ?></td>
                                        <td><?php echo $row['time_open'] ?></td>
                                        <td><?php echo $row['time_close'] ?></td>
                                        <td>
                                            <span>
                                                <a href="Add-footer.php?edit_footer=<?php echo $row['id_footer']; ?>" class="mr-4" data-toggle="tooltip"data-placement="top" title="Edit">
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