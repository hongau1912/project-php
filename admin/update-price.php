<meta charset="utf-8">

<?php
require_once('../model/connect.php');
if (isset($_POST['price'])) {
    $price = $_POST['price'];
}
// truy van
$id = $_GET['id'];
$sql = "UPDATE service SET price ='$price' WHERE id =  $id";
$result = mysqli_query($conn, $sql);
if ($result) {
    header("location:update-service.php?id=$id");
    exit();
} else {
    header("lacation:update-service.php?addpf=fail");
    exit();
}

?>