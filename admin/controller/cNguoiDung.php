<?php
    //session_start();
    include_once("model/mNguoiDung.php");
    class cNguoiDung{
        public function get01user($username, $password){
        $password = md5($password);
        $p = new mNguoiDung();
        $kq = $p-> Select01user($username, $password);
        if(mysqli_num_rows($kq)>0){
            while($r=mysqli_fetch_assoc($kq)){                
                if($r['role_id'] == '1'){
                    $_SESSION["dn"]= $r["role_id"];
                    echo "<script>alert('Đăng nhập với tư cách Admin thành công!')</script>";
                    echo "<script> window.location.href = '../admin/index.php';</script>";
                }else{  
                    echo "<script>alert('Bạn không phải Admin!')</script>";
                    echo "<script> window.location.href = '../admin/login.php';</script>";
                }
            }
        }else{  
            echo "<script>alert('Sai thông tin đăng nhập')</script>";
            echo "<script> window.location.href = '../admin/login.php';</script>";
        }
    }
    
}
?>
