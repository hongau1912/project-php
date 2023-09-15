<meta charset="utf-8">

<?php
require_once('../model/connect.php');
    $cars = $_POST['cars'];
// truy van
$id = $_GET['id'];
$sql = "UPDATE service SET is_available ='$cars' WHERE id =  $id";
$result = mysqli_query($conn, $sql);
if ($result) {
    header("location:update-service.php?id=$id");
    exit();
} else {
    header("lacation:update-service.php?addpf=fail");
    exit();
}

?>