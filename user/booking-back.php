<!-- <meta charset="utf-8"> -->

<?php
require_once('../model/connect.php');
$data = json_decode(file_get_contents("php://input"));

// Check if the 'selectedHour' property exists in the JSON data
if (isset($data->selectedHour)) {
    $selectedHour = $data->selectedHour;
    echo $selectedHour;
    echo "hello";
    // Use $selectedHour in your SQL queries or other processing
}

$phone = $_GET['phone'];

if (isset($_POST['name'])) {
    $name = $_POST['name'];
}
if (isset($_POST['gmail'])) {
    $gmail = $_POST['gmail'];
}
if (isset($_POST['date'])) {
    $date = $_POST['date'];
}
if (isset($_POST['time'])) {
    $time = $_POST['time'];
}

if (!isset($_POST['data'])) {
    header("location:date.php?id=$id");
    exit();
}

// truy van booking
$sql = "INSERT INTO booking (name, phone_number, date_booking, time_booking, status, gmail ) 
        VALUES ('$name', '$phone', '$date', '$time:00:00', 'Đang chờ', '$gmail') ";
$result = mysqli_query($conn, $sql);
$id = mysqli_insert_id($conn);
// truy van lay id booking
// $sql1 = "SELECT id FROM booking WHERE phone_number = $phone";
// $result1 = mysqli_query($conn,$sql1);
// $kq = mysqli_fetch_assoc($result1);
// $id_booking=$kq['id'];

// echo $id_booking;



if(isset($_POST['submit'])){
    $datas = $_POST['data'];
    $alldata = implode($datas);

}
$dem = strlen($alldata);
$dataString = (string)$alldata;
for($i=0; $i<$dem; $i++){
    $dataa=$dataString[$i];
    // echo $dataa;
    $sql2 = "INSERT INTO booking_service (id_booking, id_service) 
            VALUES ('$id', '$dataa')";
    $result2 = mysqli_query($conn,$sql2);

}

if ($result) {
    header("location:booking-confirm.php?id=$id");
    exit();
} else {
    header("lacation:update-service.php?addpf=fail");
    exit();
}

?>
<script>
    if(!getInnerText()){
    alert("moi ban chon gio");
}
</script>