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
                        <h4 class="card-title">View All Book Table Home</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Phone Number</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Many Person</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php  
                                        $query="SELECT * FROM `book_table_home`";
                                        $result=mysqli_query($conn , $query);
                                        while($row=mysqli_fetch_assoc($result)): 
                                    ?>
                                    <tr>
                                        <td><?php echo $row['name_book_home']; ?></td>
                                        <td><?php echo $row['phone_book_home']; ?></td>
                                        <td><?php echo $row['email_book_home']; ?></td>
                                        <td><?php echo $row['person_book_home']; ?></td>
                                        <td><?php echo $row['date_book_home']; ?></td>
                                        <td>
                                            <span>
                                                <a href="./Add-footer.php?delete_table_home=<?php echo $row['id_book_table_home']; ?>" data-toggle="tooltip" data-placement="top" title="Close">
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