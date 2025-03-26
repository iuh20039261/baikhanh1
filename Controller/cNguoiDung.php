<?php
include_once ("Modal/mNguoiDung.php");
    class controlNguoiDung
    {
    public function getNguoiDung($user, $pass)
    {
        $pass = md5($pass);
        $p = new modelNguoiDung();
        $kq = $p->selectNguoiDung($user, $pass);
        if (mysqli_num_rows($kq) > 0) {
            while ($r = mysqli_fetch_assoc($kq)) {
                $_SESSION["user"] = $r["user_name"];
                echo "<script>alert('Đăng nhập thành công!')</script>";
                echo "<script> window.location.href = 'index.php';</script>";
            }
        }else {
            echo "<script>alert('Đăng nhập thất bại!')</script>";
            echo "<script> window.location.href = 'login.php';</script>";
        }
    }
    public function themNguoiDung($username, $pass2)
    {
        $passMd5 = md5($pass2);
        $p = new modelNguoiDung();
        $kq = $p->insertNguoiDung($username, $passMd5);
        if($kq) {
                echo "<script>alert('Đăng ký thành công!')</script>";
        }
        }
    }
?>