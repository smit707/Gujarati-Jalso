<?php

$fullname = $_POST['fullname'];
$no = $_POST['no'];
$date = $_POST['date'];
$phone = $_POST['phone'];
$AOR = $_POST['AOR'];

$conn = mysqli_connect('localhost','id15648436_smit','7ia^AO8=xV+kh?aG','id15648436_arp');
if($conn->connect_error)
{
    die('Connection failed:' .$conn->connect_error);
}

$sql1 = "INSERT INTO table_reserve(fullname,no,date,phone,AOR) VALUES ('$fullname', '$no', '$date', '$phone', '$AOR') ";
$inserted = $conn->query($sql1);
if($inserted == TRUE)
{
    echo "Registration successful-We will notify/call you on your phone number for furthur details.";
}
else
{
    echo "Someone already registered using this phone number .Try another phone number";
}

?>



