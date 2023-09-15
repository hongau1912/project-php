<meta charset="utf-8">

<?php
require_once('../model/connect.php');
if (isset($_POST['name'])) {
    $name = $_POST['name'];
}
// truy van
$id = $_GET['id'];
$sql = "UPDATE service SET name ='$name' WHERE id =  $id";
$result = mysqli_query($conn, $sql);
if ($result) {
    header("location:update-service.php?id=$id");
    exit();
} else {
    header("lacation:update-service.php?addpf=fail");
    exit();
}

?>