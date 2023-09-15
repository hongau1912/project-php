<?php
      require_once('../model/connect.php');
    $id = $_GET['id'];
    $sql = " DELETE FROM service WHERE id = $id" ;
    $result = mysqli_query($conn,$sql);
    if($result){
        header("location:all-product.php");
        exit();
    }
?>