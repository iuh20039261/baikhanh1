<?php
    include_once("ketnoi.php");
    class mNguoiDung{
        public function Select01user($username, $password){
            $p = new ketnoi();
            $con = $p ->moketnoi();
            $truyvan = "select * from user where user_name = '$username' and pass = '$password'";
            $kq = mysqli_query($con, $truyvan);
            $p -> dongketnoi($con);
            return $kq;
        }

    }
?>