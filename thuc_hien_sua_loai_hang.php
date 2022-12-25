<?php
$tenloaihang = $_POST['ten_loai_hang'];
$mota = $_POST['mo_ta'];
$id = $_POST['id'];

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
$sql = "UPDATE `mis_loai_hang` SET `ten_loai_hang`='".$tenloaihang."',`mo_ta`='".$mota."' WHERE `id` = ".$id;           
if($conn->query($sql))
{
    echo "Sửa thành công";
}
else
{
    echo "Sửa thất bại";
}
?>