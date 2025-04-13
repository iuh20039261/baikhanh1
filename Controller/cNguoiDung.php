<?php
if (file_exists(__DIR__ . '/../Modal/mNguoiDung.php')) {
    include_once(__DIR__ . '/../Modal/mNguoiDung.php');
} else {
    die('Tệp Modal/mNguoiDung.php không tồn tại.');
}
class controlNguoiDung
{

    public function getNguoiDung($user, $pass)
    {
        $pass = md5($pass); // Mã hóa mật khẩu
        $p = new modelNguoiDung();
        $kq = $p->selectNguoiDung($user, $pass); // Gọi phương thức kiểm tra thông tin người dùng
        if (mysqli_num_rows($kq) > 0) {
            while ($r = mysqli_fetch_assoc($kq)) {
                session_start(); // Bắt đầu session
                $_SESSION["user"] = $r["user_name"]; // Lưu thông tin người dùng vào session
                echo "<script>alert('Đăng nhập thành công!');</script>";
                echo "<script>window.location.href = '/baikhanh1/index.php';</script>";
            }
        } else {
            echo "<script>alert('Đăng nhập thất bại! Tên tài khoản hoặc mật khẩu không đúng.');</script>";
            echo "<script>window.location.href = '/baikhanh1/View/login.php';</script>";
        }
    }
    public function themNguoiDung($username, $pass2)
    {
        $passMd5 = md5($pass2); // Mã hóa mật khẩu
        $p = new modelNguoiDung();
        $kq = $p->insertNguoiDung($username, $passMd5); // Gọi phương thức thêm người dùng
        if ($kq) {
            echo "<script>alert('Đăng ký thành công!');</script>";
            echo "<script>window.location.href = 'login.php';</script>"; // Chuyển hướng về login.php
        } else {
            echo "<script>alert('Đăng ký thất bại. Vui lòng thử lại!');</script>";
        }
    }
    public function kiemTraTaiKhoanTonTai($username)
    {
        $p = new modelNguoiDung();
        $kq = $p->kiemTraTaiKhoan($username); // Gọi phương thức kiểm tra tài khoản trong model
        if (mysqli_num_rows($kq) > 0) {
            return true; // Tài khoản đã tồn tại
        }
        return false;
    }
}
