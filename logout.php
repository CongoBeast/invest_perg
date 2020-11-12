<?php include('admin/user.php') ?>
<?php

    unset($_SESSION['username']);
    //unset($_SESSION['image']);
    session_destroy();

    header("location: index.php");

  //  var_dump($_SESSION)

 ?>
