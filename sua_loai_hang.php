<?php
$id = $_GET['id'];
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
$sql = "SELECT * FROM mis_loai_hang WHERE id= ".$id;
$ketquatruyvan = $conn ->query($sql);
if($ketquatruyvan -> num_rows > 0)
{
    while($loaihang = $ketquatruyvan -> fetch_assoc())
    {
        $tenloaihang =  $loaihang ['ten_loai_hang'];
        $mota = $loaihang['mo_ta'];
    }
}
?>
<html>
    <head>
        <title>Sửa loại hàng</title>
        <meta charset="utf-8" http-equiv="content-type" />
        <script src="jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />

    </head>
    <body>
        <div class= "container">
        <h2>Sửa loại hàng</h2>
        <form  class="form form-horizontal" method = "post" action="thuc_hien_sua_loai_hang.php">
            <label class="form-label">Tên loại hàng: </label>
            <input  class="form-control" name="ten_loai_hang" type="text" value="<?php echo $tenloaihang;?>"/><br><br>
            <label class="form-label">Mô tả:</label>
            <input  class="form-control" name="mo_ta" type="text" value="<?php echo $mota;?>"/><br><br>
            <input name="id" type="text" value="<?php echo $id;?>" type="hidden"/><br>
            <input type="submit" value="Lưu">
            </div>
        </form>
    </body>
</html>
