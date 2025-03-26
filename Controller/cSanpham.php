<?php
    include_once("Modal/mSanpham.php");
    class cSanpham
    {
        public function xuatdssp()
        {
            $p = new mSanPham();
			$kq = $p -> xuatdsSanpham();
			if(mysqli_num_rows($kq) > 0){
				return $kq;
			}else{
				echo "<script>alert('Khong co du lieu!')</script>";
			}
        }
        public function xuatdsspbyLoai($maloai)
        {
            $p = new mSanPham();
			$kq = $p -> xuatdsSanphambyType($maloai);
			if(mysqli_num_rows($kq) > 0){
				return $kq;
			}else{
				echo "<script>alert('Khong co du lieu!')</script>";
			}
        }
        public function cSelectSPByName($name)
        {
            $p = new mSanPham();
			$kq = $p -> selectSPByName($name);
			if(mysqli_num_rows($kq) > 0){
				return $kq;
			}else{
				echo "<script>alert('Khong co du lieu!')</script>";
			}
        }
		public function xuatchitietsp($masp)
        {
            $p = new mSanPham();
			$kq = $p -> xuatChiTietSanpham($masp);
			if(mysqli_num_rows($kq) > 0){
				return $kq;
			}else{
				echo "<script>alert('Khong co du lieu!')</script>";
			}
        }
    }
?>