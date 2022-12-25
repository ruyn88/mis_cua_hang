<?php
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

?>
<html>
        <head>
            <title>Thêm loại hàng</title>
            <meta charset="utf-8" />
            <script src="jquery.min.js"></script>
            <script src="bootstrap/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />

        </head>
        <body>
        <div class="container">

            <h2>Thêm mới loại hàng</h2>
            <form method="post" class="form form-horizontal" action ="them_hang.php">
            <div class="form-group">
                <label class="control-label col-sm-2">Tên loại hàng: </label>
                <div class="col-sm-10">
                    <input class="form-control" name="ten_loai_hang" type="text"/><br><br>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Mô tả:</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="mo_ta" rows="5" cols="40"></textarea>
                </div>
            </div>
            <div class="form-group">
            <div class="col-sm-2"></div>
                    <div class="col-sm-10">
                        <input type="submit" value ="Lưu"/>
                    </div>
            </div>
            </form>
        </body>
</html>