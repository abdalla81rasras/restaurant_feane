<?php
include "connection.php";
include "incFun.php";

//header
if(isset($_POST['save_head'])){

   if(empty($_FILES['img_tab']['name'])){
      $errors['img_tab']="No Selected Image !";
   }else{
      $img_tab = $_FILES['img_tab']['name'];
      $img_tabTamp = $_FILES["img_tab"]["tmp_name"];
      $folderimg_tab ="upload/" . $img_tab ;
      move_uploaded_file($img_tabTamp , $folderimg_tab);
   }

   if(empty($_POST['title_tab'])){
      $errors['title_tab']="No Title !";
   }else{
      $title_tab = $_POST['title_tab'];
   }

   if(empty($_POST['name_logo'])){
      $errors['name_logo']="No Name Logo !";
   }else{
      $name_logo = $_POST['name_logo'];
   }

   if(!array_filter($errors)){
      $img_tab = mysqli_real_escape_string($conn , $_FILES['img_tab']['name']);
      $title_tab = mysqli_real_escape_string($conn , $_POST['title_tab']);
      $name_logo = mysqli_real_escape_string($conn , $_POST['name_logo']);
      
      $sql="UPDATE `header` SET `img_tab`='$img_tab' ,`title_tab`='$title_tab' ,`name_logo`='$name_logo'";

      if(mysqli_query($conn , $sql)){
         echo "<script type='text/javascript'>window.top.location='View-header.php';</script>"; 
         exit;
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   }
}

if(isset($_GET['edit_header'])){
   $id_header=$_GET['edit_header'];

   $update=true;
   $edit=true;

   $sql="SELECT * FROM `header` WHERE `id_header`='$id_header'";

   $query=mysqli_query($conn,$sql);

   while ($row=mysqli_fetch_assoc($query)) {   
      $img_tab = $row['img_tab'];
      $title_tab = $row['title_tab'];
      $name_logo = $row['name_logo'];
   }

   if(empty($_FILES['img_tab']['name'])){
      $errors['edit_img_tab']="Be selected Old image when updating data !!";
   }
}

if(isset($_POST['update_head'])){
   $id_header=$_POST['id_header'];

   if(empty($_FILES['img_tab']['name'])){
      $errors['img_tab']="No update image , or the original image must be selected when updating data !!";
   }else{
      $img_tab = $_FILES['img_tab']['name'];
      $img_tabTamp = $_FILES["img_tab"]["tmp_name"];
      $folderimg_tab ="upload/" . $img_tab ;
      move_uploaded_file($img_tabTamp , $folderimg_tab);
   }

   if(empty($_POST['title_tab'])){
      $errors['title_tab']="No Update Title !";
   }else{
      $title_tab = $_POST['title_tab'];
   }

   if(empty($_POST['name_logo'])){
      $errors['name_logo']="No Update Name Logo !";
   }else{
      $name_logo = $_POST['name_logo'];
   }

   $update=true;

   if(!array_filter($errors)){
      $img_tab = mysqli_real_escape_string($conn , $_FILES['img_tab']['name']);
      $title_tab = mysqli_real_escape_string($conn , $_POST['title_tab']);
      $name_logo = mysqli_real_escape_string($conn , $_POST['name_logo']);
      
      $sql="UPDATE `header` SET `img_tab`='$img_tab' ,`title_tab`='$title_tab' ,`name_logo`='$name_logo' WHERE `id_header`='$id_header'";

      if(mysqli_query($conn , $sql)){
         echo "<script type='text/javascript'>window.top.location='View-header.php';</script>"; 
         exit;
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   } 
}

//footer
if(isset($_POST['save_foot'])){
	
   if(empty($_POST['facebook_footer'])){
      $errors['facebook_footer']="No Link !";
   }else{
      $facebook_footer = $_POST['facebook_footer'];
   }

   if(empty($_POST['twitter_footer'])){
      $errors['twitter_footer']="No Link !";
   }else{
      $twitter_footer = $_POST['twitter_footer'];
   }

   if(empty($_POST['instagram_footer'])){
      $errors['instagram_footer']="No Link !";
   }else{
      $instagram_footer = $_POST['instagram_footer'];
   }

   if(empty($_POST['location_footer'])){
      $errors['location_footer']="No Location !";
   }else{
      $location_footer = $_POST['location_footer'];
   }

   if(empty($_POST['phone_footer'])){
      $errors['phone_footer']="No Phone Number !";
   }else{
      $phone_footer = $_POST['phone_footer'];
      if(!preg_match('/^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?\s*$/', $phone_footer)){
          $errors['phone_footer'] = 'Phone Incorrent !';
      }
   }

   if(empty($_POST['email_footer'])){
      $errors['email_footer']="No Email !";
   }else{
      $email_footer = $_POST['email_footer'];
      if(!filter_var($email_footer, FILTER_VALIDATE_EMAIL)){
          $errors['email_footer'] = 'Email Incorrent !';
      }    
   }

   if(empty($_POST['Name_footer'])){
      $errors['Name_footer']="No Name !";
   }else{
      $Name_footer = $_POST['Name_footer'];
   }

   if(empty($_POST['slogin'])){
      $errors['slogin']="No Slogin !";
   }else{
      $slogin = $_POST['slogin'];
   }

   if(empty($_POST['time_open'])){
      $errors['time_open']="No Time !";
   }else{
      $time_open = $_POST['time_open'];
   }

   if(empty($_POST['time_close'])){
      $errors['time_close']="No Time !";
   }else{
      $time_close = $_POST['time_close'];
   }

   if(!array_filter($errors)){
      $facebook_footer = mysqli_real_escape_string($conn , $_POST['facebook_footer']);
      $twitter_footer = mysqli_real_escape_string($conn , $_POST['twitter_footer']);
      $instagram_footer = mysqli_real_escape_string($conn , $_POST['instagram_footer']);
      $location_footer = mysqli_real_escape_string($conn , $_POST['location_footer']);
      $phone_footer = mysqli_real_escape_string($conn , $_POST['phone_footer']);
      $email_footer = mysqli_real_escape_string($conn , $_POST['email_footer']);
      $Name_footer = mysqli_real_escape_string($conn , $_POST['Name_footer']);
      $slogin = mysqli_real_escape_string($conn , $_POST['slogin']);
      $time_open = mysqli_real_escape_string($conn , $_POST['time_open']);
      $time_close = mysqli_real_escape_string($conn , $_POST['time_close']);

      $sql="UPDATE `footer` SET `facebook_footer`='$facebook_footer' ,`twitter_footer`='$twitter_footer' , `instagram_footer`='$instagram_footer' , `location_footer`='$location_footer' , `phone_footer`='$phone_footer' , `email_footer`='$email_footer' , `Name_footer`='$Name_footer' , `slogin`='$slogin' , `time_open` = '$time_open' , `time_close` = '$time_close'";

      if(mysqli_query($conn , $sql)){
         echo "<script type='text/javascript'>window.top.location='View-footer.php';</script>"; 
         exit;
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   }
}

if(isset($_GET['edit_footer'])){
   $id_footer=$_GET['edit_footer'];

   $update=true;

   $sql="SELECT * FROM `footer` WHERE `id_footer`='$id_footer'";

   $query=mysqli_query($conn,$sql);

   while ($row=mysqli_fetch_assoc($query)) {   
      $facebook_footer = $row['facebook_footer'];
      $twitter_footer = $row['twitter_footer'];
      $instagram_footer = $row['instagram_footer'];
      $location_footer = $row['location_footer'];
      $phone_footer = $row['phone_footer'];
      $email_footer = $row['email_footer'];
      $Name_footer = $row['Name_footer'];
      $slogin = $row['slogin'];
      $time_open = $row['time_open'];
      $time_close = $row['time_close'];
   }
}

if(isset($_POST['update_foot'])){
   $id_footer=$_POST['id_footer'];

   if(empty($_POST['facebook_footer'])){
      $errors['facebook_footer']="No Update Link !";
   }else{
      $facebook_footer = $_POST['facebook_footer'];
   }

   if(empty($_POST['twitter_footer'])){
      $errors['twitter_footer']="No Update Link !";
   }else{
      $twitter_footer = $_POST['twitter_footer'];
   }

   if(empty($_POST['instagram_footer'])){
      $errors['instagram_footer']="No Update Link !";
   }else{
      $instagram_footer  = $_POST['instagram_footer'];
   }

   if(empty($_POST['location_footer'])){
      $errors['location_footer']="No Update Location !";
   }else{
      $location_footer = $_POST['location_footer'];
   }
   
   if(empty($phone_footer = $_POST['phone_footer'])){
      $errors['phone_footer']="No Update Phone Number !";
   }else{
      $phone_footer = $_POST['phone_footer'];
      if(!preg_match('/^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?\s*$/', $phone_footer)){
         $errors['phone_footer'] = 'Phone Incorrent !';
      }
   }

   if(empty($_POST['email_footer'])){
      $errors['email_footer']="No Update Email !";
   }else{
      $email_footer = $_POST['email_footer'];
      if(!filter_var($email_footer, FILTER_VALIDATE_EMAIL)){
          $errors['email_footer'] = 'Email Incorrent !';
      }    
   }

   if(empty($_POST['Name_footer'])){
      $errors['Name_footer']="No Update Name !";
   }else{
      $Name_footer = $_POST['Name_footer'];    
   }

   if(empty($_POST['slogin'])){
      $errors['slogin']="No Update Slogin !";
   }else{
      $slogin = $_POST['slogin'];
   }

   if(empty($_POST['time_open'])){
      $errors['time_open']="No Update Time !";
   }else{
      $time_open = $_POST['time_open'];
   }

   if(empty($_POST['time_close'])){
      $errors['time_close']="No Update Time !";
   }else{
      $time_close = $_POST['time_close'];
   }

   $update=true;

   if(!array_filter($errors)){
      $facebook_footer = mysqli_real_escape_string($conn , $_POST['facebook_footer']);
      $twitter_footer = mysqli_real_escape_string($conn , $_POST['twitter_footer']);
      $instagram_footer = mysqli_real_escape_string($conn , $_POST['instagram_footer']);
      $location_footer = mysqli_real_escape_string($conn , $_POST['location_footer']);
      $phone_footer = mysqli_real_escape_string($conn , $_POST['phone_footer']);
      $email_footer = mysqli_real_escape_string($conn , $_POST['email_footer']);
      $Name_footer = mysqli_real_escape_string($conn , $_POST['Name_footer']);
      $slogin = mysqli_real_escape_string($conn , $_POST['slogin']);
      $time_open = mysqli_real_escape_string($conn , $_POST['time_open']);
      $time_close = mysqli_real_escape_string($conn , $_POST['time_close']);

      $sql="UPDATE `footer` SET `facebook_footer`='$facebook_footer' , `twitter_footer`='$twitter_footer' , `instagram_footer`='$instagram_footer' , `location_footer`='$location_footer' , `phone_footer`='$phone_footer' , `email_footer`='$email_footer' , `Name_footer`='$Name_footer' , `slogin`='$slogin' , `time_open` = '$time_open' , `time_close` = '$time_close' WHERE `id_footer`= '$id_footer'";
      
      if(mysqli_query($conn , $sql)){
         echo "<script type='text/javascript'>window.top.location='View-footer.php';</script>"; 
         exit;
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   } 
}

//slid bar
if(isset($_POST['save_slidebar'])){
	
   if(empty($_FILES['img_slidebar']['name'])){
      $errors['img_slidebar']="No Selected Image !";
   }else{
      $img_slidebar = $_FILES['img_slidebar']['name'];
      $img_slidebarTamp=$_FILES["img_slidebar"]["tmp_name"];
      $folderimg_slidebar ="upload/" . $img_slidebar ;
      move_uploaded_file($img_slidebarTamp , $folderimg_slidebar);
   }

   if(empty($_POST['title_slidebar'])){
       $errors['title_slidebar']="No Title !";
    }else{
       $title_slidebar = $_POST['title_slidebar'];
   }

   if(empty($_POST['title_slidebar2'])){
      $errors['title_slidebar2']="No Title !";
    }else{
      $title_slidebar2 = $_POST['title_slidebar2'];
   }

   if(empty($_POST['title_slidebar3'])){
       $errors['title_slidebar3']="No Title !";
    }else{
       $title_slidebar3 = $_POST['title_slidebar3'];
   }

   if(!array_filter($errors)){
      $img_slidebar = mysqli_real_escape_string($conn , $_FILES['img_slidebar']['name']);
      $title_slidebar = mysqli_real_escape_string($conn , $_POST['title_slidebar']);
      $title_slidebar2 = mysqli_real_escape_string($conn , $_POST['title_slidebar2']);
      $title_slidebar3 = mysqli_real_escape_string($conn , $_POST['title_slidebar3']);

      $sql="UPDATE `slide_bar` SET `img_slidebar`='$img_slidebar' ,`title_slidebar`='$title_slidebar' ,`title_slidebar2`='$title_slidebar2' ,`title_slidebar3`='$title_slidebar3'";

      if(mysqli_query($conn , $sql)){
         echo "<script type='text/javascript'>window.top.location='View-slidebar.php';</script>"; 
         exit;
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   }
}

if(isset($_GET['edit_slidebar'])){
   $id_slidebar=$_GET['edit_slidebar'];

   $update=true;
   $edit=true;

   $sql="SELECT * FROM `slide_bar` WHERE `id_slidebar`='$id_slidebar'";

   $query=mysqli_query($conn,$sql);

   while ($row=mysqli_fetch_assoc($query)) {   
      $img_slidebar = $row['img_slidebar'];
      $title_slidebar = $row['title_slidebar'];
      $title_slidebar2 = $row['title_slidebar2'];
      $title_slidebar3 = $row['title_slidebar3'];
   }

   if(empty($_FILES['img_slidebar']['name'])){
      $errors['edit_img_slidebar']="Be selected Old image when updating data !!";
   }
}

if(isset($_POST['update_slidebar'])){
   $id_slidebar=$_POST['id_slidebar'];

   $update=true;

   if(empty($_FILES['img_slidebar']['name'])){
      $errors['img_slidebar']="No update image , or the original image must be selected when updating data !!";
   }else{
      $img_slidebar = $_FILES['img_slidebar']['name'];
      $img_slidebarTamp=$_FILES["img_slidebar"]["tmp_name"];
      $folderimg_slidebar ="upload/" . $img_slidebar ;
      move_uploaded_file($img_slidebarTamp , $folderimg_slidebar);
   }

   if(empty($_POST['title_slidebar'])){
       $errors['title_slidebar']="No Update Title !";
    }else{
       $title_slidebar = $_POST['title_slidebar'];
   }

   if(empty($_POST['title_slidebar2'])){
      $errors['title_slidebar2']="No Update Title !";
    }else{
      $title_slidebar2 = $_POST['title_slidebar2'];
   }

   if(empty($_POST['title_slidebar3'])){
       $errors['title_slidebar3']="No Update Title !";
    }else{
       $title_slidebar3 = $_POST['title_slidebar3'];
   }

   if(!array_filter($errors)){
      $img_slidebar = mysqli_real_escape_string($conn , $_FILES['img_slidebar']['name']);
      $title_slidebar = mysqli_real_escape_string($conn , $_POST['title_slidebar']);
      $title_slidebar2 = mysqli_real_escape_string($conn , $_POST['title_slidebar2']);
      $title_slidebar3 = mysqli_real_escape_string($conn , $_POST['title_slidebar3']);

      $sql="UPDATE `slide_bar` SET `img_slidebar`='$img_slidebar' ,`title_slidebar`='$title_slidebar' ,`title_slidebar2`='$title_slidebar2' ,`title_slidebar3`='$title_slidebar3' WHERE `id_slidebar`= '$id_slidebar'";

      if(mysqli_query($conn , $sql)){
         echo "<script type='text/javascript'>window.top.location='View-slidebar.php';</script>"; 
         exit;
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   } 
}

//offers
if(isset($_POST['save_offerss'])){

	if(empty($_FILES['img_offers']['name'])){
        $errors['img_offers']="No Selected Image !";
     }else{
        $img_offers =$_FILES['img_offers']['name'];
        $img_offersTamp=$_FILES["img_offers"]["tmp_name"];
        $folderimg_offers="upload/" . $img_offers;
        move_uploaded_file($img_offersTamp , $folderimg_offers);
   }

   if(empty($_POST['title_offers'])){
       $errors['title_offers']="No Title !";
    }else{
       $title_offers = $_POST['title_offers'];
   }

   if(empty($_POST['offer'])){
       $errors['offer']="No Offer !";
    }else{
       $offer = $_POST['offer'];
   }

   if(!array_filter($errors)){
      $img_offers= mysqli_real_escape_string($conn , $_FILES['img_offers']['name']);
      $title_offers = mysqli_real_escape_string($conn , $_POST['title_offers']);
      $offer = mysqli_real_escape_string($conn , $_POST['offer']);
      
      $sql="INSERT INTO `offers`(`img_offers`,`title_offers`,`offer`) VALUES('$img_offers','$title_offers','$offer')";

      if(mysqli_query($conn , $sql)){
         echo "<script type='text/javascript'>window.top.location='View-Offers.php';</script>"; 
         exit;
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   }
}

if(isset($_GET['delete_offers'])){
   $id_offers=$_GET['delete_offers'];

   $sql="DELETE FROM `offers` WHERE `id_offers`='$id_offers'";

   if(mysqli_query($conn, $sql)){

   } else {
      echo 'query error: '. mysqli_error($conn);
   }
   
   echo "<script type='text/javascript'>window.top.location='View-Offers.php';</script>"; 
   exit;
}

if(isset($_GET['edit_offers'])){
   $id_offers=$_GET['edit_offers'];

   $update=true;
   $edit=true;

   $sql="SELECT * FROM `offers` WHERE `id_offers`='$id_offers'";

   $query=mysqli_query($conn,$sql);

   while ($row=mysqli_fetch_assoc($query)) {   
      $img_offers = $row['img_offers'];
      $title_offers = $row['title_offers'];
      $offer = $row['offer'];
   }

   if(empty($_FILES['img_offers']['name'])){
      $errors['edit_img_offers']="Be selected Old image when updating data !!";
   }
}

if(isset($_POST['update_offerss'])){
   $id_offers=$_POST['id_offers'];

   $update=true;

   if(empty($_FILES['img_offers']['name'])){
        $errors['img_offers']="No update image , or the original image must be selected when updating data !!";
     }else{
        $img_offers =$_FILES['img_offers']['name'];
        $img_offersTamp=$_FILES["img_offers"]["tmp_name"];
        $folderimg_offers="upload/" . $img_offers;
        move_uploaded_file($img_offersTamp , $folderimg_offers);
   }

   if(empty($_POST['title_offers'])){
       $errors['title_offers']="No Update Title !";
    }else{
       $title_offers = $_POST['title_offers'];
   }

   if(empty($_POST['offer'])){
       $errors['offer']="No Update Offer !";
    }else{
       $offer = $_POST['offer'];
   }

   if(!array_filter($errors)){
      $img_offers= mysqli_real_escape_string($conn , $_FILES['img_offers']['name']);
      $title_offers = mysqli_real_escape_string($conn , $_POST['title_offers']);
      $offer = mysqli_real_escape_string($conn , $_POST['offer']);

      $sql="UPDATE `offers` SET `img_offers`='$img_offers' ,`title_offers`='$title_offers' ,`offer`='$offer'  WHERE `id_offers`= '$id_offers'";

      if(mysqli_query($conn , $sql)){
         echo "<script type='text/javascript'>window.top.location='View-Offers.php';</script>"; 
         exit;
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   } 
}

//mneu cart home
if(isset($_POST['save_MneuCart_home'])){

	if(empty($img_MneuCart_home = $_FILES['img_MneuCart_home']['name'])){
        $errors['img_MneuCart_home']="No Selected Image !";
     }else{
        $img_MneuCart_home =$_FILES['img_MneuCart_home']['name'];
        $img_MneuCart_homeTamp=$_FILES["img_MneuCart_home"]["tmp_name"];
        $folderimg_MneuCart_home="upload/" . $img_MneuCart_home;
        move_uploaded_file($img_MneuCart_homeTamp , $folderimg_MneuCart_home);
   }

   if(empty($_POST['name_MneuCart_home'])){
       $errors['name_MneuCart_home']="No Name !";
    }else{
       $name_MneuCart_home = $_POST['name_MneuCart_home'];
   }

   if(empty($_POST['content_MneuCart_home'])){
       $errors['content_MneuCart_home']="No Content !";
    }else{
       $content_MneuCart_home = $_POST['content_MneuCart_home'];
   }

   if(empty($_POST['price_MneuCart_home'])){
       $errors['price_MneuCart_home']="No Price !";
    }else{
       $price_MneuCart_home = $_POST['price_MneuCart_home'];
   }

   if(empty($_POST['mneus_home'])){
       $errors['mneus_home']="No Selected !";
    }else{
       $mneus_home = $_POST['mneus_home'];
   }
   
   if(!array_filter($errors)){
      $img_MneuCart_home = mysqli_real_escape_string($conn , $_FILES['img_MneuCart_home']['name']);
      $name_MneuCart_home = mysqli_real_escape_string($conn , $_POST['name_MneuCart_home']);
      $content_MneuCart_home = mysqli_real_escape_string($conn , $_POST['content_MneuCart_home']);
      $price_MneuCart_home = mysqli_real_escape_string($conn , $_POST['price_MneuCart_home']);
      $mneus_home = mysqli_real_escape_string($conn , $_POST['mneus_home']);

      $sql="INSERT INTO `mneu_home`(`img_MneuCart_home`,`name_MneuCart_home`,`content_MneuCart_home`,`price_MneuCart_home`,`mneus_home`) VALUES('$img_MneuCart_home','$name_MneuCart_home','$content_MneuCart_home','$price_MneuCart_home','$mneus_home')";

      if(mysqli_query($conn , $sql)){
         echo "<script type='text/javascript'>window.top.location='View-MneuCartHome.php';</script>"; 
         exit;
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   }
}

if(isset($_GET['delete_MneuCart_home'])){
   $id_MneuCart_home=$_GET['delete_MneuCart_home'];

   $sql="DELETE FROM `mneu_home` WHERE `id_MneuCart_home`='$id_MneuCart_home'";

   if(mysqli_query($conn, $sql)){

   } else {
      echo 'query error: '. mysqli_error($conn);
   }
   
   echo "<script type='text/javascript'>window.top.location='View-MneuCartHome.php';</script>"; 
   exit;
}

if(isset($_GET['edit_MneuCart_home'])){
   $id_MneuCart_home=$_GET['edit_MneuCart_home'];

   $update=true;
   $edit=true;

   $sql="SELECT * FROM `mneu_home` WHERE `id_MneuCart_home`='$id_MneuCart_home'";

   $query=mysqli_query($conn,$sql);

   while($row=mysqli_fetch_assoc($query)) {   
      $img_MneuCart_home = $row['img_MneuCart_home'];
      $name_MneuCart_home = $row['name_MneuCart_home'];
      $content_MneuCart_home = $row['content_MneuCart_home'];
      $price_MneuCart_home = $row['price_MneuCart_home'];
      $mneus_home = $row['mneus_home'];
   }

   if(empty($_FILES['img_MneuCart_home']['name'])){
      $errors['edit_img_MneuCart_home']="Be selected Old image when updating data !!";
   }
}

if(isset($_POST['update_MneuCart_home'])){
   $id_MneuCart_home=$_POST['id_MneuCart_home'];

   $update=true;

   if(empty($_FILES['img_MneuCart_home']['name'])){
      $errors['img_MneuCart_home']="No update image , or the original image must be selected when updating data !!";
   }else{
        $img_MneuCart_home =$_FILES['img_MneuCart_home']['name'];
        $img_MneuCart_homeTamp=$_FILES["img_MneuCart_home"]["tmp_name"];
        $folderimg_MneuCart_home="upload/" . $img_MneuCart_home;
        move_uploaded_file($img_MneuCart_homeTamp , $folderimg_MneuCart_home);
   }

   if(empty($_POST['name_MneuCart_home'])){
       $errors['name_MneuCart_home']="No Update Name !";
    }else{
       $name_MneuCart_home = $_POST['name_MneuCart_home'];
   }

   if(empty($_POST['content_MneuCart_home'])){
       $errors['content_MneuCart_home']="No Update Content !";
    }else{
       $content_MneuCart_home = $_POST['content_MneuCart_home'];
   }

   if(empty($_POST['price_MneuCart_home'])){
       $errors['price_MneuCart_home']="No Price !";
    }else{
       $price_MneuCart_home = $_POST['price_MneuCart_home'];
   }

   if(empty($_POST['mneus_home'])){
       $errors['mneus_home']="No Selected !";
    }else{
       $mneus_home = $_POST['mneus_home'];
   }
   
   if(!array_filter($errors)){
      $img_MneuCart_home = mysqli_real_escape_string($conn , $_FILES['img_MneuCart_home']['name']);
      $name_MneuCart_home = mysqli_real_escape_string($conn , $_POST['name_MneuCart_home']);
      $content_MneuCart_home = mysqli_real_escape_string($conn , $_POST['content_MneuCart_home']);
      $price_MneuCart_home = mysqli_real_escape_string($conn , $_POST['price_MneuCart_home']);
      $mneus_home = mysqli_real_escape_string($conn , $_POST['mneus_home']);

      $sql="UPDATE `mneu_home` SET `img_MneuCart_home`='$img_MneuCart_home' , `name_MneuCart_home`='$name_MneuCart_home' , `content_MneuCart_home`='$content_MneuCart_home' , `price_MneuCart_home`='$price_MneuCart_home' , `mneus_home`='$mneus_home'  WHERE `id_MneuCart_home`= '$id_MneuCart_home'";

      if(mysqli_query($conn , $sql)){
         echo "<script type='text/javascript'>window.top.location='View-MneuCartHome.php';</script>"; 
         exit;
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   } 
}

//About home
if(isset($_POST['save_about_home'])){

	if(empty($_FILES['img_about_home']['name'])){
        $errors['img_about_home']="No Selected Image !";
     }else{
        $img_about_home = $_FILES['img_about_home']['name'];
        $img_about_homeTamp = $_FILES["img_about_home"]["tmp_name"];
        $folderimg_about_home = "upload/" . $img_about_home;
        move_uploaded_file($img_about_homeTamp , $folderimg_about_home);
   }

   if(empty($_POST['title_about_home'])){
       $errors['title_about_home']="No Title !";
    }else{
       $title_about_home = $_POST['title_about_home'];
   }

   if(empty($_POST['discraption_about_home'])){
       $errors['discraption_about_home']="No Discraption !";
    }else{
       $discraption_about_home = $_POST['discraption_about_home'];
   }

   if(!array_filter($errors)){
      $img_about_home = mysqli_real_escape_string($conn , $_FILES['img_about_home']['name']);
      $title_about_home = mysqli_real_escape_string($conn , $_POST['title_about_home']);
      $discraption_about_home = mysqli_real_escape_string($conn , $_POST['discraption_about_home']);

      $sql="UPDATE `about_home` SET `img_about_home`='$img_about_home' ,`title_about_home`='$title_about_home'  ,`discraption_about_home`='$discraption_about_home'";

      if(mysqli_query($conn , $sql)){
         echo "<script type='text/javascript'>window.top.location='View-AboutHome.php';</script>"; 
         exit;
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   }
}

if(isset($_GET['edit_about_home'])){
   $id_about_home=$_GET['edit_about_home'];

   $update=true;
   $edit=true;

   $sql="SELECT * FROM `about_home` WHERE `id_about_home`='$id_about_home'";

   $query=mysqli_query($conn,$sql);

   while ($row=mysqli_fetch_assoc($query)) {   
      $img_about_home = $row['img_about_home'];
      $title_about_home = $row['title_about_home'];
      $discraption_about_home = $row['discraption_about_home'];
   }

   if(empty($_FILES['img_about_home']['name'])){
      $errors['edit_img_about_home']="Be selected Old image when updating data !!";
   }
}

if(isset($_POST['update_about_home'])){
   $id_about_home=$_POST['id_about_home'];

   $update=true;

   if(empty($_FILES['img_about_home']['name'])){
      $errors['img_about_home']="No update image , or the original image must be selected when updating data !!";
   }else{
        $img_about_home = $_FILES['img_about_home']['name'];
        $img_about_homeTamp = $_FILES["img_about_home"]["tmp_name"];
        $folderimg_about_home = "upload/" . $img_about_home;
        move_uploaded_file($img_about_homeTamp , $folderimg_about_home);
   }

   if(empty($_POST['discraption_about_home'])){
      $errors['discraption_about_home']="No Update Discraption !";
   }else{
      $discraption_about_home = $_POST['discraption_about_home'];
  }

   if(empty($_POST['title_about_home'])){
       $errors['title_about_home']="No Update Title !";
    }else{
       $title_about_home = $_POST['title_about_home'];
   }

   if(!array_filter($errors)){
      $img_about_home = mysqli_real_escape_string($conn , $_FILES['img_about_home']['name']);
      $title_about_home = mysqli_real_escape_string($conn , $_POST['title_about_home']);
      $discraption_about_home = mysqli_real_escape_string($conn , $_POST['discraption_about_home']);

      $sql="UPDATE `about_home` SET `img_about_home`='$img_about_home' ,`title_about_home`='$title_about_home'  ,`discraption_about_home`='$discraption_about_home' WHERE `id_about_home`= '$id_about_home'";

      if(mysqli_query($conn , $sql)){
         echo "<script type='text/javascript'>window.top.location='View-AboutHome.php';</script>"; 
         exit;
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   } 
}

//feedback
if(isset($_POST['save_feeback'])){

	if(empty($_FILES['img_feeback']['name'])){
        $errors['img_feeback']="No Selected Image !";
     }else{
        $img_feeback =$_FILES['img_feeback']['name'];
        $img_feebackTamp=$_FILES["img_feeback"]["tmp_name"];
        $folderimg_feeback="Upload/" . $img_feeback;
        move_uploaded_file($img_feebackTamp , $folderimg_feeback);
   }

   if(empty($_POST['name_feedback'])){
       $errors['name_feedback']="No Name !";
    }else{
       $name_feedback = $_POST['name_feedback'];
   }

   if(empty($_POST['discraption_feeback'])){
       $errors['discraption_feeback']="No Discraption !";
    }else{
       $discraption_feeback = $_POST['discraption_feeback'];
   }

   if(!array_filter($errors)){
      $img_feeback= mysqli_real_escape_string($conn , $_FILES['img_feeback']['name']);
      $name_feedback = mysqli_real_escape_string($conn , $_POST['name_feedback']);
      $discraption_feeback = mysqli_real_escape_string($conn , $_POST['discraption_feeback']);

      $sql="INSERT INTO `feedback`(`img_feeback`,`name_feedback`,`discraption_feeback`) VALUES('$img_feeback','$name_feedback','$discraption_feeback')";

      if(mysqli_query($conn , $sql)){
         echo "<script type='text/javascript'>window.top.location='View-Feedback.php';</script>"; 
         exit;
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   }
}

if(isset($_GET['delete_feeback'])){
   $id_feeback=$_GET['delete_feeback'];

   $sql="DELETE FROM `feedback` WHERE `id_feeback`='$id_feeback'";

   if(mysqli_query($conn, $sql)){

   } else {
      echo 'query error: '. mysqli_error($conn);
   }
   
   echo "<script type='text/javascript'>window.top.location='View-Feedback.php';</script>"; 
   exit;
}

if(isset($_GET['edit_feeback'])){
   $id_feeback=$_GET['edit_feeback'];

   $update=true;
   $edit=true;

   $sql="SELECT * FROM `feedback` WHERE `id_feeback`='$id_feeback'";

   $query=mysqli_query($conn,$sql);

   while ($row=mysqli_fetch_assoc($query)) {   
      $img_feeback = $row['img_feeback'];
      $name_feedback = $row['name_feedback'];
      $discraption_feeback = $row['discraption_feeback'];
   }

   if(empty($_FILES['img_feeback']['name'])){
      $errors['edit_img_feeback']="Be selected Old image when updating data !!";
   }
}

if(isset($_POST['update_feeback'])){
   $id_feeback=$_POST['id_feeback'];

   $update=true;

   if(empty($_FILES['img_feeback']['name'])){
      $errors['img_feeback']="No update image , or the original image must be selected when updating data !!";
   }else{
        $img_feeback =$_FILES['img_feeback']['name'];
        $img_feebackTamp=$_FILES["img_feeback"]["tmp_name"];
        $folderimg_feeback="Upload/" . $img_feeback;
        move_uploaded_file($img_feebackTamp , $folderimg_feeback);
   }

   if(empty($_POST['name_feedback'])){
       $errors['name_feedback']="No Update Name !";
    }else{
       $name_feedback = $_POST['name_feedback'];
   }

   if(empty($_POST['discraption_feeback'])){
       $errors['discraption_feeback']="No Update Discraption !";
    }else{
       $discraption_feeback = $_POST['discraption_feeback'];
   }

   if(!array_filter($errors)){
      $img_feeback= mysqli_real_escape_string($conn , $_FILES['img_feeback']['name']);
      $name_feedback = mysqli_real_escape_string($conn , $_POST['name_feedback']);
      $discraption_feeback = mysqli_real_escape_string($conn , $_POST['discraption_feeback']);

      $sql="UPDATE `feedback` SET `img_feeback`='$img_feeback' ,`name_feedback`='$name_feedback' ,`discraption_feeback`='$discraption_feeback'  WHERE `id_feeback`= '$id_feeback'";

      if(mysqli_query($conn , $sql)){
         echo "<script type='text/javascript'>window.top.location='View-Feedback.php';</script>"; 
         exit;
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   } 
}

//form us
if(isset($_GET['delete_form_us'])){
   $id_form_us=$_GET['delete_form_us'];

   $sql="DELETE FROM `form_us` WHERE `id_form_us`='$id_form_us'";

   if(mysqli_query($conn, $sql)){

   } else {
       echo 'query error: '. mysqli_error($conn);
   }
   
   echo "<script type='text/javascript'>window.top.location='View-send-us.php';</script>"; 
   exit;
}

//inner mneu cart
if(isset($_POST['save_MneuCart_inner'])){

	if(empty($img_MneuCart_inner = $_FILES['img_MneuCart_inner']['name'])){
        $errors['img_MneuCart_inner']="No Selected Image !";
     }else{
        $img_MneuCart_inner =$_FILES['img_MneuCart_inner']['name'];
        $img_MneuCart_innerTamp=$_FILES["img_MneuCart_inner"]["tmp_name"];
        $folderimg_MneuCart_inner="upload/" . $img_MneuCart_inner;
        move_uploaded_file($img_MneuCart_innerTamp , $folderimg_MneuCart_inner);
   }

   if(empty($_POST['name_MneuCart_inner'])){
       $errors['name_MneuCart_inner']="No Name !";
    }else{
       $name_MneuCart_inner = $_POST['name_MneuCart_inner'];
   }

   if(empty($_POST['content_MneuCart_inner'])){
       $errors['content_MneuCart_inner']="No Content !";
    }else{
       $content_MneuCart_inner = $_POST['content_MneuCart_inner'];
   }

   if(empty($_POST['price_MneuCart_inner'])){
       $errors['price_MneuCart_inner']="No Price !";
    }else{
       $price_MneuCart_inner = $_POST['price_MneuCart_inner'];
   }

   if(empty($_POST['mneus_inner'])){
       $errors['mneus_inner']="No Selected !";
    }else{
       $mneus_inner = $_POST['mneus_inner'];
   }
   
   if(!array_filter($errors)){
      $img_MneuCart_inner = mysqli_real_escape_string($conn , $_FILES['img_MneuCart_inner']['name']);
      $name_MneuCart_inner = mysqli_real_escape_string($conn , $_POST['name_MneuCart_inner']);
      $content_MneuCart_inner = mysqli_real_escape_string($conn , $_POST['content_MneuCart_inner']);
      $price_MneuCart_inner = mysqli_real_escape_string($conn , $_POST['price_MneuCart_inner']);
      $mneus_inner = mysqli_real_escape_string($conn , $_POST['mneus_inner']);

      $sql="INSERT INTO `mneu_inner`(`img_MneuCart_inner`,`name_MneuCart_inner`,`content_MneuCart_inner`,`price_MneuCart_inner`,`mneus_inner`) VALUES('$img_MneuCart_inner','$name_MneuCart_inner','$content_MneuCart_inner','$price_MneuCart_inner','$mneus_inner')";

      if(mysqli_query($conn , $sql)){
         echo "<script type='text/javascript'>window.top.location='View-MnewCartInner.php';</script>"; 
         exit;
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   }
}

if(isset($_GET['delete_MneuCart_inner'])){
   $id_MneuCart_inner=$_GET['delete_MneuCart_inner'];

   $sql="DELETE FROM `mneu_inner` WHERE `id_MneuCart_inner`='$id_MneuCart_inner'";

   if(mysqli_query($conn, $sql)){

   } else {
      echo 'query error: '. mysqli_error($conn);
   }
   
   echo "<script type='text/javascript'>window.top.location='View-MnewCartInner.php';</script>"; 
   exit;
}

if(isset($_GET['edit_MneuCart_inner'])){
   $id_MneuCart_inner=$_GET['edit_MneuCart_inner'];

   $update=true;
   $edit=true;

   $sql="SELECT * FROM `mneu_inner` WHERE `id_MneuCart_inner`='$id_MneuCart_inner'";

   $query=mysqli_query($conn,$sql);

   while($row=mysqli_fetch_assoc($query)) {   
      $img_MneuCart_inner = $row['img_MneuCart_inner'];
      $name_MneuCart_inner = $row['name_MneuCart_inner'];
      $content_MneuCart_inner = $row['content_MneuCart_inner'];
      $price_MneuCart_inner = $row['price_MneuCart_inner'];
      $mneus_inner = $row['mneus_inner'];
   }

   if(empty($_FILES['img_MneuCart_inner']['name'])){
      $errors['edit_img_MneuCart_inner']="Be selected Old image when updating data !!";
   }
}

if(isset($_POST['update_MneuCart_inner'])){
   $id_MneuCart_inner=$_POST['id_MneuCart_inner'];

   $update=true;

   if(empty($_FILES['img_MneuCart_inner']['name'])){
      $errors['img_MneuCart_inner']="No update image , or the original image must be selected when updating data !!";
   }else{
        $img_MneuCart_inner =$_FILES['img_MneuCart_inner']['name'];
        $img_MneuCart_innerTamp=$_FILES["img_MneuCart_inner"]["tmp_name"];
        $folderimg_MneuCart_inner="upload/" . $img_MneuCart_inner;
        move_uploaded_file($img_MneuCart_innerTamp , $folderimg_MneuCart_inner);
   }

   if(empty($_POST['name_MneuCart_inner'])){
       $errors['name_MneuCart_inner']="No Update Name !";
    }else{
       $name_MneuCart_inner = $_POST['name_MneuCart_inner'];
   }

   if(empty($_POST['content_MneuCart_inner'])){
       $errors['content_MneuCart_inner']="No Update Content !";
    }else{
       $content_MneuCart_inner = $_POST['content_MneuCart_inner'];
   }

   if(empty($_POST['price_MneuCart_inner'])){
       $errors['price_MneuCart_inner']="No Price !";
    }else{
       $price_MneuCart_inner = $_POST['price_MneuCart_inner'];
   }

   if(empty($_POST['mneus_inner'])){
       $errors['mneus_inner']="No Selected !";
    }else{
       $mneus_inner = $_POST['mneus_inner'];
   }
   
   if(!array_filter($errors)){
      $img_MneuCart_inner = mysqli_real_escape_string($conn , $_FILES['img_MneuCart_inner']['name']);
      $name_MneuCart_inner = mysqli_real_escape_string($conn , $_POST['name_MneuCart_inner']);
      $content_MneuCart_inner = mysqli_real_escape_string($conn , $_POST['content_MneuCart_inner']);
      $price_MneuCart_inner = mysqli_real_escape_string($conn , $_POST['price_MneuCart_inner']);
      $mneus_inner = mysqli_real_escape_string($conn , $_POST['mneus_inner']);

      $sql="UPDATE `mneu_inner` SET `img_MneuCart_inner`='$img_MneuCart_inner' , `name_MneuCart_inner`='$name_MneuCart_inner' , `content_MneuCart_inner`='$content_MneuCart_inner' , `price_MneuCart_inner`='$price_MneuCart_inner' , `mneus_inner`='$mneus_inner'  WHERE `id_MneuCart_inner`= '$id_MneuCart_inner'";

      if(mysqli_query($conn , $sql)){
         echo "<script type='text/javascript'>window.top.location='View-MnewCartInner.php';</script>"; 
         exit;
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   } 
}

//inner about
if(isset($_POST['save_about_inner'])){

	if(empty($_FILES['img_about_inner']['name'])){
        $errors['img_about_inner']="No Selected Image !";
     }else{
        $img_about_inner = $_FILES['img_about_inner']['name'];
        $img_about_innerTamp = $_FILES["img_about_inner"]["tmp_name"];
        $folderimg_about_inner = "upload/" . $img_about_inner;
        move_uploaded_file($img_about_innerTamp , $folderimg_about_inner);
   }

   if(empty($_POST['title_about_inner'])){
       $errors['title_about_inner']="No Title !";
    }else{
       $title_about_inner = $_POST['title_about_inner'];
   }

   if(empty($_POST['discraption_about_inner'])){
       $errors['discraption_about_inner']="No Discraption !";
    }else{
       $discraption_about_inner = $_POST['discraption_about_inner'];
   }

   if(!array_filter($errors)){
      $img_about_inner = mysqli_real_escape_string($conn , $_FILES['img_about_inner']['name']);
      $title_about_inner = mysqli_real_escape_string($conn , $_POST['title_about_inner']);
      $discraption_about_inner = mysqli_real_escape_string($conn , $_POST['discraption_about_inner']);

      $sql="UPDATE `about_inner` SET `img_about_inner`='$img_about_inner' ,`title_about_inner`='$title_about_inner'  ,`discraption_about_inner`='$discraption_about_inner'";

      if(mysqli_query($conn , $sql)){
         echo "<script type='text/javascript'>window.top.location='View-aboutInner.php';</script>"; 
         exit;
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   }
}

if(isset($_GET['edit_about_inner'])){
   $id_about_inner=$_GET['edit_about_inner'];

   $update=true;
   $edit=true;

   $sql="SELECT * FROM `about_inner` WHERE `id_about_inner`='$id_about_inner'";

   $query=mysqli_query($conn,$sql);

   while ($row=mysqli_fetch_assoc($query)) {   
      $img_about_inner = $row['img_about_inner'];
      $title_about_inner = $row['title_about_inner'];
      $discraption_about_inner = $row['discraption_about_inner'];
   }

   if(empty($_FILES['img_about_inner']['name'])){
      $errors['edit_img_about_inner']="Be selected Old image when updating data !!";
   }
}

if(isset($_POST['update_about_inner'])){
   $id_about_inner=$_POST['id_about_inner'];

   $update=true;

   if(empty($_FILES['img_about_inner']['name'])){
      $errors['img_about_inner']="No update image , or the original image must be selected when updating data !!";
   }else{
        $img_about_inner = $_FILES['img_about_inner']['name'];
        $img_about_innerTamp = $_FILES["img_about_inner"]["tmp_name"];
        $folderimg_about_inner = "upload/" . $img_about_inner;
        move_uploaded_file($img_about_innerTamp , $folderimg_about_inner);
   }

   if(empty($_POST['discraption_about_inner'])){
      $errors['discraption_about_inner']="No Update Discraption !";
   }else{
      $discraption_about_inner = $_POST['discraption_about_inner'];
  }

   if(empty($_POST['title_about_inner'])){
       $errors['title_about_inner']="No Update Title !";
    }else{
       $title_about_inner = $_POST['title_about_inner'];
   }

   if(!array_filter($errors)){
      $img_about_inner = mysqli_real_escape_string($conn , $_FILES['img_about_inner']['name']);
      $title_about_inner = mysqli_real_escape_string($conn , $_POST['title_about_inner']);
      $discraption_about_inner = mysqli_real_escape_string($conn , $_POST['discraption_about_inner']);

      $sql="UPDATE `about_inner` SET `img_about_inner`='$img_about_inner' ,`title_about_inner`='$title_about_inner'  ,`discraption_about_inner`='$discraption_about_inner' WHERE `id_about_inner`= '$id_about_inner'";

      if(mysqli_query($conn , $sql)){
         echo "<script type='text/javascript'>window.top.location='View-aboutInner.php';</script>"; 
         exit;
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   } 
}

//book table home
if(isset($_GET['delete_table_home'])){
   $id_book_table_home=$_GET['delete_table_home'];

   $sql="DELETE FROM `book_table_home` WHERE `id_book_table_home`='$id_book_table_home'";

   if(mysqli_query($conn, $sql)){

   } else {
       echo 'query error: '. mysqli_error($conn);
   }
   
   echo "<script type='text/javascript'>window.top.location='View-bookTableHome.php';</script>"; 
   exit;
}

//book table inner
if(isset($_GET['delete_table_inner'])){
   $id_book_table_inner=$_GET['delete_table_inner'];

   $sql="DELETE FROM `book_table_inner` WHERE `id_book_table_inner`='$id_book_table_inner'";

   if(mysqli_query($conn, $sql)){

   } else {
      echo 'query error: '. mysqli_error($conn);
   }
   
   echo "<script type='text/javascript'>window.top.location='View-BookTableInner.php';</script>"; 
   exit;
}

//users
if(isset($_GET['delete_user'])){
   $id_user=$_GET['delete_user'];

   $sql="DELETE FROM `user` WHERE `id_user`='$id_user'";

   if(mysqli_query($conn, $sql)){

   } else {
       echo 'query error: '. mysqli_error($conn);
   }
   
   echo "<script type='text/javascript'>window.top.location='View-users.php';</script>"; 
   exit;
}

//book table profile
if(isset($_GET['delete_table_profile'])){
   $id_user_profile=$_GET['delete_table_profile'];

   $sql="DELETE FROM `book_table_profile` WHERE `id_user_profile`='$id_user_profile'";

   if(mysqli_query($conn, $sql)){

   } else {
       echo 'query error: '. mysqli_error($conn);
   }
   
   echo "<script type='text/javascript'>window.top.location='View-BookedTableProfilr.php';</script>"; 
   exit;
}

//orders
if(isset($_GET['delete_ord'])){
   $id_ord=$_GET['delete_ord'];

   $sql="DELETE FROM `order` WHERE `id_ord`='$id_ord'";

   if(mysqli_query($conn, $sql)){

   } else {
       echo 'query error: '. mysqli_error($conn);
   }
   
   echo "<script type='text/javascript'>window.top.location='View-orders.php';</script>"; 
   exit;
}

//add to cart
if(isset($_GET['delete_toCart'])){
   $id_toCart=$_GET['delete_toCart'];

   $sql="DELETE FROM `sopingcart` WHERE `id_toCart`='$id_toCart'";

   if(mysqli_query($conn, $sql)){

   } else {
       echo 'query error: '. mysqli_error($conn);
   }
   
   echo "<script type='text/javascript'>window.top.location='View-Addcart.php';</script>"; 
   exit;
}
?>