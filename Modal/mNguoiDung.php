<?php
include_once ("connect.php");
class modelNguoiDung
{
   public function selectNguoiDung($user, $pass)
   {
      $p = new conn();
      $con = $p->ketnoi();
      if ($con->connect_errno) {
         return false;
      } else {
         $sql = "select * from user where user_name = '$user' and pass = '$pass'";
         $kq = mysqli_query($con, $sql);

         return $kq;
      }
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
}

?>