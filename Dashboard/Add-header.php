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
                        <h4 class="welcome-text">Update New Header</h4>
                    <?php else: ?>
                        <h4 class="welcome-text">Add New Header</h4>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id_header" value="<?php echo $id_header; ?>">
            <div class="card mb-5">
                <div class="card-body">
                    <div class="basic-form">
                        <div class="form-row">
                            <div class="form-group col-md-12 mb-2 mt-1">
                                <h5 class="text-primary">Tab Site :</h5>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="text-primary">Image Or Icon Tab :</label>
                                <div class="custom-file">
                                    <input type="file" class="form-control-file bg-white" accept="Image/*" name="img_tab">
                                </div>
                                <div class="text-danger mt-1"><?php echo $errors['img_tab'] ?></div>
                                <div class="d-flex flex-column">
                                    <?php if($edit==true): ?>
                                        <p class="text-warning mt-1 mb-0"><?php echo $errors['edit_img_tab'] ?></p> <br>
                                        <div class="d-flex align-items-center">
                                        <p class="text-primary font-weight-bold mr-3 ">Old Image :  </p>
                                        <img src="upload/<?php echo $img_tab ?>" title="<?php echo $img_tab; ?>" alt="Image-tab" style="width:100px; height: 100px;">
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="text-primary">Title Tab :</label>
                                <input type="text" class="form-control" name="title_tab" value="<?php echo htmlspecialchars($title_tab); ?>" placeholder="Enter Title Tab ...">
                                <div class="text-danger mt-1"><?php echo $errors['title_tab'] ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-5">
                <div class="card-body">
                    <div class="basic-form">
                        <div class="form-row">
                            <div class="form-group col-md-12 mb-2 mt-1">
                                <h5 class="text-primary">Header :</h5>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="text-primary">Name Logo :</label>
                                <input type="text" class="form-control" value="<?php echo htmlspecialchars($name_logo); ?>" name="name_logo" placeholder="Enter Name Logo ...">
                                <div class="text-danger mt-1"><?php echo $errors['name_logo'] ?></div>
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
                                <button name="update_head" class="btn btn-primary">Update</button>
                            <?php else: ?>
                                <button name="save_head" class="btn btn-primary">Save</button>
                            <?php endif; ?>
                                <button class="btn btn-primary" name="cansel_head">Cansel</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php include "inc/footer.php"; ?>