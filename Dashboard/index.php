<?php 
include "inc/header.php";
include "inc/connection.php";
?>

<style>
    .contents{
        display: grid;
        align-items: center;
        justify-content: center;
        min-height: 75vh;
    }

    .contents .img-logo {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .contents .img-logo img {
        width: 130px;
    }

    .contents h2 {
        text-align: center;
    }
</style>

<div class="content-body">
    <div class="container-fluid">
        <div class="contents">
            <div class="row">
                <div class="col-lg-12">
                    <div class="img-logo">
                        <img src="./images/Website Logo.png" alt="img">
                    </div>
                    <h2 class="pt-1 text-white">Dashboard Feane</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "inc/footer.php" ?>