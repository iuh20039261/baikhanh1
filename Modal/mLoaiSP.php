<?php
    include_once("connect.php");
 class mLoaisp
 {
    public function dsloaisanpham()
    {
        $p= new conn();
        $con= $p->ketnoi();
        if($con -> connect_errno){
            return false;
        }else{
            $sql = "select * from type_of_product ";	
            $kq = mysqli_query($con, $sql);
        
            return $kq;
        }
    }
 }
?>