<?php
    include_once("connect.php");
    class mSanPham
    {
        public function xuatdsSanpham()
        {
            $p= new conn();
            $con=$p->ketnoi();
            if($con -> connect_errno){
				return false;
			}else{
				$sql = "select * from product ";	
				$kq = mysqli_query($con, $sql);
			
				return $kq;
			}
        }
        public function xuatdsSanphambyType($maloai)
        {
            $p= new conn();
            $con=$p->ketnoi();
            if($con -> connect_errno){
				return false;
			}else{
				$sql = "select * from product where type_id = $maloai";	
				$kq = mysqli_query($con, $sql);
			
				return $kq;
			}
        }
        public function selectSPByName($name)
        {
            $p= new conn();
            $con=$p->ketnoi();
            if($con -> connect_errno){
				return false;
			}else{
				$sql = "select * from product where name like N'%$name%'";
				$kq = mysqli_query($con, $sql);
			
				return $kq;
			}
        }
        public function xuatChiTietSanpham($masp)
        {
            $p= new conn();
            $con=$p->ketnoi();
            if($con -> connect_errno){
				return false;
			}else{
				$sql = "select * from product where product_id=$masp";	
				$kq = mysqli_query($con, $sql);
			
				return $kq;
			}
        }
    }
?>