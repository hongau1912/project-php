<meta charset="utf-8">

<?php
require_once('../model/connect.php');
$id = $_GET['id'];

if (isset($_POST['phone'])) {
    $phone = $_POST['phone'];
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
// update booking
$sql = "UPDATE booking
        SET phone_number = '$phone', gmail = '$gmail', date_booking = '$date', time_booking = '$time:00:00'
        WHERE id = '$id'";
$result = mysqli_query($conn, $sql);


if(isset($_POST['submit'])){
    $datas = $_POST['data'];
    $alldata = implode($datas);

}

$dem = strlen($alldata);
$dataString = (string)$alldata;

// Xóa các dịch vụ cũ cho chọn
$sqlDelete = "DELETE FROM booking_service WHERE id_booking = '$id'";
mysqli_query($conn, $sqlDelete);

// Thêm lại các dịch vụ mới
for ($i = 0; $i < $dem; $i++) {
    $dataa = $dataString[$i];
    $sqlInsert = "INSERT INTO booking_service (id_booking, id_service) 
                  VALUES ('$id', '$dataa')";
    mysqli_query($conn, $sqlInsert);
}
header("Location: http://localhost/Man-Hair-Salon/user/booking-confirm.php?id=" . urlencode($id));


?>