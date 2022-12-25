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
        <title>Thêm mặt hàng</title>
        <meta charset="utf-8" />
        <script src="jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    </head>
    <body>
      
        <div class="container">
            <h1>Thêm mặt hàng</h1>
            <form class="form form-horizontal" method="post" action="thuc_hien_them_mat_hang.php">
                <div class="form-group">
                    <label class="control-label col-sm-2">Tên mặt hàng </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="ten_mat_hang" placeholder="Tên loại hàng">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Mô tả</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" name="mo_ta"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Hình ảnh </label>
                    <div class="col-sm-10">
                      <input type="file" class="form-control" name="hinh_anh" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Giá bán </label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" name="gia_ban" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2">Loại hàng </label>
                    <div class="col-sm-10">
                      <select class="form-control" name="id">
                        <option value="0">Chọn loại hàng</option>
                        <?php
                        $sql="select * from mis_loai_hang";
                        $ketQuaTruyVan=$conn->query($sql);
                        if($ketQuaTruyVan->num_rows > 0){
                            while($loaiHang = $ketQuaTruyVan->fetch_assoc()){
                        ?>
                        <option value="<?php echo $loaiHang['id'] ?>"><?php echo $loaiHang['ten_loai_hang']?></option>
                        <?php
                            }
                        }
                        ?>
                      </select>
                    </div>
                </div>

                </div>
                <div class="form-group">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-10">
                    <input class="btn btn-success" type="submit" value="Lưu" />
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>