<?php
    include_once("Modal/mLoaiSP.php");
    class cLoaiSP
    {
        public function xuatloaisp()
        {
            $p = new mLoaisp();
			$kq = $p -> dsloaisanpham();
			if(mysqli_num_rows($kq) > 0){
				return $kq;
			}else{
				echo "<script>alert('Khong co du lieu!')</script>";
			}
        }
    }
?>