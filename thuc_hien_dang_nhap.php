<?php
session_start(); // Muốn làm việc với SESSION luôn phải dùng hàm khởi tạo này
$_SESSION["login"] = 1;
$_SESSION["ten_dang_nhap"] = $tenNguoiDung;
$_SESSION["gio_hang"]["mat_hang"] = array();
$_SESSION["gio_hang"]["tong_so"] = 0;
$_SESSION['userId'] = $nguoiDung['id'];
$_SESSION['admin'] = $nguoiDung['admin'];
?>
<a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <span class="glyphicon glyphicon-user"></span> 
                <?php
                session_start();
                if(isset($_SESSION['login']) && $_SESSION['login'] == 1){
                    echo "Xin chào ".$_SESSION['ten_dang_nhap'];
                }
                else{
                    echo "Tài khoản";
                }
                ?>
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <?php                
                if(isset($_SESSION['login']) && $_SESSION['login'] == 1){
                ?>
                <li><a href="#">Thông tin tài khoản</a></li>
                <li><a href="dang_xuat.php">Đăng xuất</a></li> 
                <?php
                }
                else{
                ?>
                <li><a href="dang_nhap.php">Đăng nhập</a></li>
                <li><a href="dang_ky.php">Đăng ký</a></li> 
                <?php    
                }
                ?>                        
            </ul>
            <a href="#">
                <span class="glyphicon glyphicon-shopping-cart"></span> Giỏ hàng
                <?php                
                if(isset($_SESSION['login']) && $_SESSION['login'] == 1){
                    echo "(".$_SESSION['gio_hang']['so_luong'].")";
                }
                ?>
            </a>
                
