<?php
    session_start();
    require_once('../model/connect.php');

    if (isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = " SELECT * FROM admin WHERE username = '$username' AND password = '$password' ";
        $res = mysqli_query($conn,$sql);

        $row = mysqli_num_rows($res);
        if ($row >0 ){
            $_SESSION['usernameAdmin'] = $username; // khoi tao session
            while($row = mysqli_fetch_assoc( $res)){
                $_SESSION['id-Admin'] = $row['id'];
            }
            header('Location:../admin/order-list.php');
        }else{
            header("location:login.php?rf=fail");           
            exit();
        }
    }

?>