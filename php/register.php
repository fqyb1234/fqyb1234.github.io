<?php
include './conn.php';
   
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
       }

$name = $_POST['user-name'];
$password = $_POST['user-password'];
$email = $_POST['user-email'];

$sql = "INSERT INTO user_login (name, password, email)
VALUES ('$name', '$password', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "新记录插入成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
$conn->close();

    
   