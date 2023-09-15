<meta charset="utf-8">

<?php
require_once('../model/connect.php');

// truy van
$id = $_GET['id'];
$sql = "UPDATE booking SET status ='Đã duyệt' WHERE id =  $id";
$result = mysqli_query($conn, $sql);
if ($result) {
    header("location:order-list.php");
    exit();
} else {
    header("lacation:order-list.php?confirmf=fail");
    exit();
}

?>