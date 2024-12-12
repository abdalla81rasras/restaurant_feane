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
                        <h4 class="welcome-text">Update New Mneu Cart</h4>
                    <?php else: ?>
                        <h4 class="welcome-text">Add New Mneu Cart</h4>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id_MneuCart_inner" value="<?php echo $id_MneuCart_inner; ?>">
            <div class="card mb-5">
                <div class="card-body">
                    <div class="basic-form">
                        <div class="form-row">
                            <div class="form-group col-md-12 mb-2 mt-2">
                                <h5 class="text-primary">Mneu Cart :</h5>
                            </div>
                        </div>
                        <div class="form-row mb-3">   
                            <div class="form-group col-md-7">
                                <label class="text-primary">Select Type Mneu :</label>
                                    <select name="mneus_inner" class="form-control" id="">
                                        <option>Select type mneu</option>
                                        <?php 
                                            $sql_mneu="SELECT mneus_inner FROM `mneu_inner` WHERE `id_MneuCart_inner`='$id_MneuCart_inner'";
                                            $result=mysqli_query($conn , $sql_mneu);
                                            $row_mneus=mysqli_fetch_assoc($result);
                                            if($update==true && $edit==true): 
                                        ?>
                                            <option selected><?php echo $row_mneus['mneus_inner'] ?></option>
                                        <?php endif; ?>
                                        <option value="burger">Burger</option>
                                        <option value="pizza">Pizza</option>
                                        <option value="pasta">Pasta</option>
                                        <option value="fries">Fries</option>
                                    </select>
                                <div class="text-danger mt-1"><?php echo $errors['mneus_inner'] ?></div>
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="form-group col-md-7">
                                <label class="text-primary">Image :</label>
                                <div class="custom-file">
                                    <input type="file" class="form-control-file bg-white" accept="Image/*" name="img_MneuCart_inner">
                                </div> 
                                <div class="text-danger mt-1"><?php echo $errors['img_MneuCart_inner'] ?></div>
                                <div class="d-flex flex-column">
                                    <?php if($edit==true): ?>
                                        <p class="text-warning mb-0 mt-1"><?php echo $errors['edit_img_MneuCart_inner'] ?></p> <br>
                                        <div class="d-flex align-items-center">
                                        <p class="text-primary font-weight-bold mr-3 ">Old Image :  </p>
                                        <img src="upload/<?php echo $img_MneuCart_inner ?>" title="<?php echo $img_MneuCart_inner; ?>" alt="<?php echo $img_MneuCart_inner; ?>" style="width:100px; height: 100px;">
                                        </div>  
                                    <?php endif; ?>
                                </div>                           
                            </div>
                        </div> 
                        <div class="form-row mb-3">   
                            <div class="form-group col-md-7">
                                <label class="text-primary">Name of recipe :</label>
                                <input type="text" class="form-control" name="name_MneuCart_inner" value="<?php echo htmlspecialchars($name_MneuCart_inner); ?>" placeholder="Enter Name ...">
                                <div class="text-danger mt-1"><?php echo $errors['name_MneuCart_inner'] ?></div>
                            </div>
                        </div>
                        <div class="form-row mb-3">   
                            <div class="form-group col-md-7">
                                <label class="text-primary">Content of Recipe :</label>
                                <textarea name="content_MneuCart_inner" class="form-control" cols="30" rows="10" placeholder="Enter Content ..."><?php echo htmlspecialchars($content_MneuCart_inner); ?></textarea>
                                <div class="text-danger mt-1"><?php echo $errors['content_MneuCart_inner'] ?></div>
                            </div>
                        </div>
                        <div class="form-row mb-3">   
                            <div class="form-group col-md-7">
                                <label class="text-primary">Price : $</label>
                                <input type="number" min="0" step="0.00001" class="form-control" name="price_MneuCart_inner" value="<?php echo htmlspecialchars($price_MneuCart_inner); ?>" placeholder="Enter Price ...">
                                <div class="text-danger mt-1"><?php echo $errors['price_MneuCart_inner'] ?></div>
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
                                <button name="update_MneuCart_inner" class="btn btn-primary">Update</button>
                            <?php else: ?>
                                <button name="save_MneuCart_inner" class="btn btn-primary">Save</button>
                            <?php endif; ?>                            
                                <button class="btn btn-primary" name="cansel_MneuCart_inner">Cansel</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<?php include "inc/footer.php" ?>