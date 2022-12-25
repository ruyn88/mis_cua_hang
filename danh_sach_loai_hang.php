
<html>
    <head>
        <title>Danh sách loại hàng</title>
        <meta charset="utf-8" http-equiv="content-type" />
        <script src="jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    </head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mis_cua_hang";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn -> connect_error)
{
    die("Connection failded:". $conn-> connect_error); // die giống echo
}

mysqli_query($conn,'set names utf8');
$sql = 'SELECT * FROM mis_loai_hang';
$ketquatruyvan = $conn->query($sql);
?>
<div class="container">
<table class="table table-striped table-bordered">
        <tr>
            <th>STT</th>
            <th>Tên loại hàng </th>
            <th>Mô tả</th>
            <th>Thao tác</th>
        
        </tr>
        <?php
        if($ketquatruyvan -> num_rows > 0)
        { $i = 1;
            while($loaihang = $ketquatruyvan -> fetch_assoc())
            {
        ?>
               <tr>
                <td><?php echo $i;?></td>
                <td><?php echo $loaihang['ten_loai_hang'];?></td>
                <td><?php echo $loaihang['mo_ta'];?></td>
                <td>
                    <a class="btn btn-info" href ="sua_loai_hang.php?id=<?php echo $loaihang['id'];?>" > Sửa</a>
                    <a class="btn btn-danger" href ="xoa_loai_hang.php?id=<?php echo $loaihang['id'];?>" > Xóa</a>
                </td>
        
        
               </tr>
        <?php
                $i++;
            }
        }
        ?>
        </table>
        <tr>
    <td colspan="3"><a class="btn btn-success" href="thuc_hien_them_loai_hang.php">Thêm mới</a></td>
</tr>
</div>
</body>
</html>
