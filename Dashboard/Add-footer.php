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
                        <h4 class="welcome-text">Update New Footer</h4>
                    <?php else: ?>
                        <h4 class="welcome-text">Add New Footer</h4>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id_footer" value="<?php echo $id_footer; ?>">
            <div class="card mb-5">
                <div class="card-body">
                    <div class="basic-form">
                        <div class="form-row mt-3">
                            <div class="form-group col-md-12">
                                <h5 class="text-primary">Social Accountes :</h5>
                            </div>
                        </div>
                        <div class="form-row mb-4">
                            <div class="form-group col-md-7">
                                <label class="text-primary">Facebook :</label>
                                <input type="text" class="form-control" name="facebook_footer" value="<?php echo htmlspecialchars($facebook_footer); ?>" placeholder="Copy Link https: ...">
                                <div class="text-danger mt-1"><?php echo $errors['facebook_footer'] ?></div>    
                            </div>
                        </div> 
                        <div class="form-row mb-4">   
                            <div class="form-group col-md-7">
                                <label class="text-primary">Twitter :</label>
                                <input type="text" class="form-control" name="twitter_footer" value="<?php echo htmlspecialchars($twitter_footer); ?>" placeholder="Copy Link https: ...">
                                <div class="text-danger mt-1"><?php echo $errors['twitter_footer'] ?></div>    
                            </div>
                        </div>
                        <div class="form-row mb-2">    
                            <div class="form-group col-md-7">
                                <label class="text-primary">Instagram :</label>
                                <input type="text" class="form-control" name="instagram_footer" value="<?php echo htmlspecialchars($instagram_footer); ?>" placeholder="Copy Link https: ...">
                                <div class="text-danger mt-1"><?php echo $errors['instagram_footer'] ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="basic-form">
                        <div class="form-row mt-3">
                            <div class="form-group col-md-12">
                                <h5 class="text-primary">Contact Info :</h5>
                            </div>
                        </div>
                        <div class="form-row mb-4">
                            <div class="form-group col-md-7">
                                <label class="text-primary">Location :</label>
                                <input type="text" class="form-control" name="location_footer" value="<?php echo htmlspecialchars($location_footer); ?>" placeholder="Enter Location">
                                <div class="text-danger mt-1"><?php echo $errors['location_footer'] ?></div>    
                            </div>
                        </div> 
                        <div class="form-row mb-4">   
                            <div class="form-group col-md-7">
                                <label class="text-primary">Phone Number :</label>
                                <input type="text" class="form-control" name="phone_footer" value="<?php echo htmlspecialchars($phone_footer); ?>" placeholder="Enter Phone Nunber">
                                <div class="text-danger mt-1"><?php echo $errors['phone_footer'] ?></div>    
                            </div>
                        </div>
                        <div class="form-row mb-2">    
                            <div class="form-group col-md-7">
                                <label class="text-primary">Email :</label>
                                <input type="email" class="form-control" name="email_footer" value="<?php echo htmlspecialchars($email_footer); ?>" placeholder="Copy Link https: ...">
                                <div class="text-danger mt-1"><?php echo $errors['email_footer'] ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="basic-form">
                        <div class="form-row mt-3">
                            <div class="form-group col-md-12">
                                <h5 class="text-primary">Name of Website & Slogin :</h5>
                            </div>
                        </div>
                        <div class="form-row mb-4">
                            <div class="form-group col-md-6">
                                <label class="text-primary">Name :</label>
                                <input type="text" class="form-control" name="Name_footer" value="<?php echo htmlspecialchars($Name_footer); ?>" placeholder="Enter Name">
                                <div class="text-danger mt-1"><?php echo $errors['Name_footer'] ?></div>    
                            </div>
                        </div>
                        <div class="form-row mb-4">
                            <div class="form-group col-md-6">
                                <label class="text-primary">Slogin :</label>
                                <textarea name="slogin" class="form-control" cols="30" rows="10" placeholder="Enter Slogin ..."><?php echo htmlspecialchars($slogin); ?></textarea>
                                <div class="text-danger mt-1"><?php echo $errors['slogin'] ?></div>    
                            </div>
                        </div> 
                    </div>
                </div>  
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="basic-form">
                        <div class="form-row mt-3">
                            <div class="form-group col-md-12">
                                <h5 class="text-primary">Opening Houres :</h5>
                            </div>
                        </div>
                        <div class="form-row mb-4">
                            <div class="form-group col-md-6">
                                <label class="text-primary">Open Time :   PM | AM</label>
                                <input type="time" class="form-control" name="time_open" value="<?php echo htmlspecialchars($time_open); ?>">
                                <div class="text-danger mt-1"><?php echo $errors['time_open'] ?></div>    
                            </div>
                            <div class="form-group col-md-6">
                                <label class="text-primary">Close Time :   PM | AM</label>
                                <input type="time" class="form-control" name="time_close" value="<?php echo htmlspecialchars($time_close); ?>">
                                <div class="text-danger mt-1"><?php echo $errors['time_close'] ?></div>     
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
                            <button name="update_foot" class="btn btn-primary">Update</button>
                        <?php else: ?>
                            <button name="save_foot" class="btn btn-primary">Save</button>
                        <?php endif; ?>
                            <button class="btn btn-primary" name="cansel_foot">Cansel</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php include "inc/footer.php"; ?>