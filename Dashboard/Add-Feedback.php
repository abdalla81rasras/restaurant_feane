<?php 
include "inc/header.php";
include "inc/connection.php";
include "inc/Functions.php";

?>

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-md-6 p-md-0">
               <div class="welcome-text">
                    <?php if($update==true || $edit==true): ?>
                        <h4 class="welcome-text">Update New Feedback</h4>
                    <?php else: ?>
                        <h4 class="welcome-text">Add New Feedback</h4>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id_feeback" value="<?php echo $id_feeback; ?>">
            <div class="card mb-5">
                <div class="card-body">
                    <div class="basic-form">
                        <div class="form-row">
                            <div class="form-group col-md-12 mb-2 mt-2">
                                <h5 class="text-primary">About :</h5>
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="form-group col-md-7">
                                <label class="text-primary">Image :</label>
                                <div class="custom-file">
                                    <input type="file" class="form-control-file bg-white" accept="Image/*" name="img_feeback">
                                </div> 
                                <div class="text-danger mt-1"><?php echo $errors['img_feeback'] ?></div>
                                <div class="d-flex flex-column">
                                    <?php if($edit==true): ?>
                                        <p class="text-warning mb-0 mt-1"><?php echo $errors['edit_img_feeback'] ?></p><br>
                                        <div class="d-flex align-items-center">
                                        <p class="text-primary font-weight-bold mr-3 ">Old Image :  </p>
                                        <img src="upload/<?php echo $img_feeback ?>" title="<?php echo $img_feeback; ?>" alt="<?php echo $img_feeback; ?>" style="width:100px; height: 100px;">
                                        </div>
                                    <?php endif; ?>
                                </div>                           
                            </div>
                        </div> 
                        <div class="form-row mb-3">   
                            <div class="form-group col-md-7">
                                <label class="text-primary">Name :</label>
                                <input type="text" class="form-control" name="name_feedback" value="<?php echo htmlspecialchars($name_feedback); ?>" placeholder="Enter Name ...">
                                <div class="text-danger mt-1"><?php echo $errors['name_feedback'] ?></div>
                            </div>
                        </div>
                        <div class="form-row mb-3">   
                            <div class="form-group col-md-7">
                                <label class="text-primary">Discraption :</label>
                                <textarea name="discraption_feeback" class="form-control" cols="30" rows="10" placeholder="Enter Discraption ..."><?php echo htmlspecialchars($discraption_feeback); ?></textarea>
                                <div class="text-danger mt-1"><?php echo $errors['discraption_feeback'] ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-0">
                <div class="card-body">
                    <div class="basic-form">
                        <div class="form-row justify-content-around py-2">
                            <?php if($update==true): ?>
                                <button name="update_feeback" class="btn btn-primary">Update</button>
                            <?php else: ?>
                                <button name="save_feeback" class="btn btn-primary">Save</button>
                            <?php endif; ?>                            
                                <button class="btn btn-primary" name="cansel_feeback">Cansel</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<?php include "inc/footer.php" ?>