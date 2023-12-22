<?php
$YourName = $_POST['YourName'];
$YourEmail = $_POST['YourEmail'];
$Subject = $_POST['Subject'];
$Message = $_POST['Message'];

//Database connection

$conn = new mysqli('localhost','root','','agriculture');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into contact_us(YourName,YourEmail,Subject,Message) values(?,?,?,?)");
    $stmt->bind_param("ssss",$YourName,$YourEmail,$Subject,$Message);
    $stmt->execute();
    echo"contact_us Successfully...";
    $stmt->close();
    $conn->close();
}
?>