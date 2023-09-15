<meta charset="utf-8">

<?php
require_once('../model/connect.php');
$target_file = "../upload/" . basename($_FILES["FileImage"]["name"]);
$uploadOk = 1;

if (isset($_POST['create'])){
    $keywordPr = '';
    $descriptPr = '';
    $status = 0;
    $image = basename($_FILES["FileImage"]["name"]);
    if ($image == null || $image = ''){
        $image = $_POST['image'];
        $uploadOk = 0;
    }
    else{
        $check = getimagesize($_FILES["FileImage"]["tmp_name"]);
        if($check !== false){
            $image = basename($_FILES["FileImage"]["name"]);
            $uploadOk = 1;
        }
        else{
            $image = '';
?>
            <script type = "text/javascript">
                window.location = 'product-add.php?notimage=notimage';
            </script>

<?php     
            $uploadOk=0;      
        }
    }

    //Upload Image
    if(file_exists($target_file)){
        $uploadOk = 0;
    }
    if($uploadOk == 0){

    }else{
        if(move_uploaded_file($_FILES["FileImage"]["tmp_name"],$target_file)){
            echo "The file" . basename($_FILES["FileImage"]["name"]) . " has been uploaded.";

        }else{

        }
    }
    if(isset($_POST['name'])){
        $name = $_POST['name'];
    }

    if (isset($_POST['content'])){
        $content = $_POST['content'];
    }

    if(isset($_POST['price'])){
        $price = $_POST['price'];
    }

    
    // truy van

    $sql = "INSERT INTO service (name, image, content, price, is_available )
            VALUES('$name', '$image','$content','$price',1)";
    $result = mysqli_query($conn,$sql);
    if($result){
        header("location:all-product.php?addps=success");
        exit();
    }
    else{
        header("lacation:all-product.php?addpf=fail");
        exit();
    }
}



?>