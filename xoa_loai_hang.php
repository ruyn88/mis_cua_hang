<?php
// gán biến id
$id=$_GET['id'];
// thực hiện kết nối csdl
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mis_cua_hang";

$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_query($conn,'set names utf8');
if($conn -> connect_error)
{
    die("Connection failded:". $conn-> connect_error); // die giống echo
}
// viết câu truy vấn thực hiện xóa bản ghi có id = $id
$sql = "DELETE FROM `mis_loai_hang` WHERE id =".$id;
// Thực hiện câu truy vấn
if ($conn -> query($sql))
{
    echo "Xóa thành công";
}
else
{
    echo "Không xóa được";
}
?>
<head>
    <title>Danh sách loại hàng</title>
    <meta charset="utf-8" http-equiv="content_type"/>
    <script src= "jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
</head>
