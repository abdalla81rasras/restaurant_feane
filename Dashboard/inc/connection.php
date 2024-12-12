<?php

$conn=mysqli_connect('localhost','root','','feane');

if(!$conn):
    die("Error Connection !!" . mysqli_connect_error($conn));
endif;

?>