<?php
$tenloaihang=$_POST['ten_loai_hang'];
$mota=$_POST['mo_ta'];

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
$sql = "INSERT INTO `mis_loai_hang`(`ten_loai_hang`, `mo_ta`) VALUES ('".$tenloaihang . "','". $mota . "')";
            //echo $sql;
if($conn->query($sql))
{
    echo "Thêm mới thành công";
}
else
{
    echo "Không thêm mới được";
}
?>
