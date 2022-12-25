<?php
    session_start();
    include("ket_noi.php");
    function trang_truoc(){
        ?>
            <html><head>
              <meta charset="UTF-8">
              <title>Đang chuyển về trang trước</title></head>
            <body>
                <script type="text/javascript">
                    window.history.back();
                </script>   
            </body>
            </html>
        <?php
    }
    function thong_bao_html($chuoi_thong_bao)
    {
        $lien_ket_trang_truoc=$_SERVER['HTTP_REFERER'];
        ?>
            <html><head>
              <meta charset="UTF-8">
              <title>Thông báo</title></head>
            <body>
                <style type="text/css">
                a.trang_truoc_c8w{text-decoration:none;color:blue;font-size:36px;margin-left:50px}
                a.trang_truoc_c8w:hover{color:red;}
                </style>
                <br><br><br><br>
                <a href="<?php echo $lien_ket_trang_truoc; ?>" class="trang_truoc_c8w" >Bấm vào đây để trở về trang trước</a>
                <script type="text/javascript">
                    alert("<?php echo $chuoi_thong_bao; ?>");
                </script>
            </body>
            </html>
        <?php
        exit();
    }
    function thong_bao_html_roi_chuyen_trang($chuoi_thong_bao,$link_chuyen_trang)
    {
        $lien_ket_trang_truoc=$_SERVER['HTTP_REFERER'];
        ?>
            <html><head>
              <meta charset="UTF-8">
              <title>Thông báo</title></head>
            <body>
                <script type="text/javascript">
                    alert("<?php echo $chuoi_thong_bao; ?>");
                    window.location="<?php echo $link_chuyen_trang; ?>";
                </script>
            </body>
            </html>
        <?php
        exit();
    }
    if(isset($_POST['thong_tin_khach_hang']))
    {
        include("chuc_nang/gio_hang/thuc_hien_mua_hang.php");
    }
    if(isset($_POST['cap_nhat_gio_hang']))
    {
        include("chuc_nang/gio_hang/cap_nhat_gio_hang.php");
        trang_truoc();
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Web bán hàng</title>
        <link rel="stylesheet" type="text/css" href="giao_dien/giao_dien.css">
    </head>
    <body>
        <center>
            <table width="990px">
                <tr>
                    <td colspan="3"><img src="hinh_anh/banner.JPG" ></td>
                </tr>
                <tr>
                    <td colspan="3" height="50px" >
                        <?php
                            include("chuc_nang/menu_ngang/menu_ngang.php");
                        ?>
                    </td>
                </tr>
                <tr>
                    <td width="170px" valign="top" >
                    <?php
                        include("chuc_nang/menu_doc/menu_doc.php");
                    ?>
                    </td>
                    <td width="650px" valign="top" >
                        <?php
                            include("chuc_nang/dieu_huong.php");
                        ?>
                    </td>
                    <td width="170px" valign="top" >
                    <?php
                        include("chuc_nang/tim_kiem/vung_tim_kiem.php");
                    ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">Footer</td>
                </tr>
            </table>
        </center>
    </body>
</html>