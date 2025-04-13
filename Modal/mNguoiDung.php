<?php
include_once("connect.php");
class modelNguoiDung
{

   public function selectNguoiDung($user, $pass)
   {
      $p = new conn();
      $con = $p->ketnoi();
      $sql = "SELECT * FROM user WHERE user_name = '$user' AND pass = '$pass'";
      $kq = mysqli_query($con, $sql);
      $p->dongketnoi($con); // Đóng kết nối sau khi thực hiện truy vấn
      return $kq;
   }
   public function insertNguoiDung($username, $pass2)
   {
      $p = new conn();
      $con = $p->ketnoi();
      if ($con->connect_errno) {
         return false;
      } else {
         $sql = "insert into user (user_name, pass, role_id) values (N'$username', '$pass2', 2)";
         $kq = mysqli_query($con, $sql);

         return $kq;
      }
   }
   public function kiemTraTaiKhoan($username)
   {
      $p = new conn();
      $con = $p->ketnoi();
      $sql = "SELECT * FROM user WHERE user_name = '$username'";
      $kq = mysqli_query($con, $sql);
      $p->ketnoi($con);
      return $kq;
   }
}
