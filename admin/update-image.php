<meta charset="utf-8">

<?php
require_once('../model/connect.php');
$target_file = "../upload/" . basename($_FILES["FileImage"]["name"]);
$uploadOk = 1;

if (isset($_POST['save'])) {
    $keywordPr = '';
    $descriptPr = '';
    $status = 0;
    $image = basename($_FILES["FileImage"]["name"]);
    if ($image == null || $image = '') {
        $image = $_POST['image'];
        $uploadOk = 0;
    } else {
        $check = getimagesize($_FILES["FileImage"]["tmp_name"]);
        if ($check !== false) {
            $image = basename($_FILES["FileImage"]["name"]);
            $uploadOk = 1;
        } else {
            $image = '';
?>
            <script type="text/javascript">
                window.location = 'update-image.php?notimage=notimage';
            </script>

<?php
            $uploadOk = 0;
        }
    }

    //Upload Image
    if (file_exists($target_file)) {
        $uploadOk = 0;
    }
    if ($uploadOk == 0) {
    } else {
        if (move_uploaded_file($_FILES["FileImage"]["tmp_name"], $target_file)) {
            echo "The file" . basename($_FILES["FileImage"]["name"]) . " has been uploaded.";
        } else {
        }
    }

    // truy van
    $id = $_GET['id'];
    $sql = "UPDATE service SET image ='$image' WHERE id =  $id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location:update-service.php?id=$id");
        exit();
    } else {
        header("lacation:update-service.php?addpf=fail");
        exit();
    }
}

?>