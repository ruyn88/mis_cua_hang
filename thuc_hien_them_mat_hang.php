<?php
$tenMatHang=$_POST['ten_mat_hang'];
$moTa=$_POST['mo_ta'];
$hinhAnh=$_POST['hinh_anh'];
$giaBan=$_POST['gia_ban'];
$loaiHang=$_POST['id'];

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
$sql = " INSERT INTO `mis_mat_hang`(`ten_mat_hang`, `mo_ta`, `hinh_anh`, `gia_ban`, `id`) 
            VALUE ('" .$tenMatHang."','".$moTa."', '" .$hinhAnh."', '" .$giaBan."', '" .$loaiHang."')";

if($conn->query($sql)){
    echo "Thêm mới thành công";
    echo "
        <script>
        window.location = 'danh_sach_mat_hang.php';
        </script>
    ";
}
 else {
    echo "Không thêm được";
    echo "
        <script>
        window.location = 'danh_sach_mat_hang.php';
        </script>
    ";
 }
?>
