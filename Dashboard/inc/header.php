<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    
    <link href="./vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./vendor/bootstrap/dist/css/files.min.css">
    <link rel="stylesheet" href="./css/s.css">
    <link rel="stylesheet" href="./css/custom.css">

    <!-- Daterange picker -->
    <link href="./vendor/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Clockpicker -->
    <link href="./vendor/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
    <!-- asColorpicker -->
    <link href="./vendor/jquery-asColorPicker/css/asColorPicker.min.css" rel="stylesheet">
    <!-- Material color picker -->
    <link href="./vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
    <!-- Pick date -->
    <link rel="stylesheet" href="./vendor/pickadate/themes/default.css">
    <link rel="stylesheet" href="./vendor/pickadate/themes/default.date.css">
</head>

<style>

</style>

<body class="bg-dark">
    <div id="main-wrapper">
        <div class="nav-header">
            <a href="index.php" class="brand-logo">
                <img class="logo-abbr" src="./images/Website Logo.png" alt="">
                <h3 class="logo-compact mt-2">Dashboard</h3>
                <h3 class="brand-title mt-2">Dashboard</h3>
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <button class="search_icon p-3 c-pointer" onclick="return ToSearch();"><i class="mdi mdi-magnify"></i></button>
                                <div class="dropdown-menu p-0 m-0">
                                    <div>
                                        <input class="form-control ml-2" id="search" type="search" placeholder="Search" aria-label="Search">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link text-white" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-bell"></i>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="list-unstyled">
                                        <?php 
                                           $query="SELECT `name_book_home` FROM `book_table_home`";
                                           $result=mysqli_query($conn , $query);
                                           while($row=mysqli_fetch_assoc($result)):
                                        ?>
                                        <li class="media dropdown-item">
                                            <span class="danger"><i class="fa fa-comment"></i></span>
                                            <div class="media-body">
                                                <a href="View-bookTableHome.php">
                                                    <p><?php echo $row['name_book_home']; ?>
                                                    </p>
                                                </a>
                                            </div>
                                        </li>
                                        <?php endwhile;?>
                                        <?php 
                                           $query="SELECT `name_book_inner` FROM `book_table_inner`";
                                           $result=mysqli_query($conn , $query);
                                           while($row=mysqli_fetch_assoc($result)):
                                        ?>
                                        <li class="media dropdown-item">
                                            <span class="danger"><i class="fa fa-comment"></i></span>
                                            <div class="media-body">
                                                <a href="View-BookTableInner.php">
                                                    <p><?php echo $row['name_book_inner']; ?>
                                                    </p>
                                                </a>
                                            </div>
                                        </li>
                                        <?php endwhile;?>
                                        <?php 
                                           $query="SELECT `name_book_profile` FROM `book_table_profile`";
                                           $result=mysqli_query($conn , $query);
                                           while($row=mysqli_fetch_assoc($result)):
                                        ?>
                                        <li class="media dropdown-item">
                                            <span class="danger"><i class="fa fa-comment"></i></span>
                                            <div class="media-body">
                                                <a href="View-BookedTableProfilr.php">
                                                    <p><?php echo $row['name_book_profile']; ?>
                                                    </p>
                                                </a>
                                            </div>
                                        </li>
                                        <?php endwhile;?>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link text-white" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Header & Footer</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                           class="mdi mdi-page-layout-header"></i><span class="nav-text">Header</span></a>
                        <ul aria-expanded="false">
                            <li><a href="Add-header.php">Add New</a></li>
                            <li><a href="View-header.php">View All</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                           class="mdi mdi-page-layout-footer"></i><span class="nav-text">Footer</span></a>
                        <ul aria-expanded="false">
                            <li><a href="Add-footer.php">Add New</a></li>
                            <li><a href="View-footer.php">View All</a></li>
                        </ul>
                    </li>
                    <div class="dropdown-divider"></div>
                    <li class="nav-label">Home Page</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                           class="fa fa-sliders"></i><span class="nav-text">Slide Bar</span></a>
                        <ul aria-expanded="false">
                            <li><a href="Add-slidebar.php">Add New</a></li>
                            <li><a href="View-slidebar.php">View All</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                           class="fa fa-percent"></i><span class="nav-text">Offers</span></a>
                        <ul aria-expanded="false">
                            <li><a href="Add-Offers.php">Add New</a></li>
                            <li><a href="View-Offers.php">View All</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                           class="fa fa-shopping-cart"></i><span class="nav-text">Mneu Cart</span></a>
                        <ul aria-expanded="false">
                            <li><a href="Add-MneuCartHome.php">Add New</a></li>
                            <li><a href="View-MneuCartHome.php">View All</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                           class="fa fa-info-circle"></i><span class="nav-text">About As</span></a>
                        <ul aria-expanded="false">
                            <li><a href="Add-AboutHome.php">Add New</a></li>
                            <li><a href="View-AboutHome.php">View All</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                           class="fa fa-list"></i><span class="nav-text">Book Table</span></a>
                        <ul aria-expanded="false">
                            <li><a href="View-bookTableHome.php">View All</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                           class="fa fa-comments"></i><span class="nav-text">Feedback Customers</span></a>
                        <ul aria-expanded="false">
                            <li><a href="Add-Feedback.php">Add New</a></li>
                            <li><a href="View-Feedback.php">View All</a></li>
                        </ul>
                    </li>
                    <div class="dropdown-divider"></div>
                    <li class="nav-label">Mneu Cart</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                           class="fa fa-shopping-cart"></i><span class="nav-text">Mneu</span></a>
                        <ul aria-expanded="false">
                            <li><a href="Add-MnewCartInner.php">Add New</a></li>
                            <li><a href="View-MnewCartInner.php">View All</a></li>
                        </ul>
                    </li>
                    <div class="dropdown-divider"></div>
                    <li class="nav-label">About</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="fa fa-info-circle"></i><span class="nav-text">About</span></a>
                        <ul aria-expanded="false">
                            <li><a href="Add-aboutInner.php">Add New</a></li>
                            <li><a href="View-aboutInner.php">View All</a></li>
                        </ul>
                    </li>
                    <div class="dropdown-divider"></div>
                    <li class="nav-label">Book Table</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-list"></i><span class="nav-text">Book a Table</span></a>
                        <ul aria-expanded="false">
                            <li><a href="View-BookTableInner.php">View All</a></li>
                        </ul>
                    </li>
                    <div class="dropdown-divider"></div>
                    <li class="nav-label">Profile</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="fa fa-address-card"></i><span class="nav-text">Users</span></a>
                        <ul aria-expanded="false">
                            <li><a href="View-users.php">View All</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="fa fa-list"></i><span class="nav-text">Booked Tables</span></a>
                        <ul aria-expanded="false">
                            <li><a href="View-BookedTableProfilr.php">View All</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="ti ti-receipt"></i><span class="nav-text">Orders</span></a>
                        <ul aria-expanded="false">
                            <li><a href="View-orders.php">View All</a></li>
                        </ul>
                    </li>
                    <div class="dropdown-divider"></div>
                    <li class="nav-label">Add To Cart</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="fa fa-shopping-cart"></i><span class="nav-text">Add Cart</span></a>
                        <ul aria-expanded="false">
                            <li><a href="View-Addcart.php">View All</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
