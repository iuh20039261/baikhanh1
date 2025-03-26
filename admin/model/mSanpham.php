<?php
include_once ("ketnoi.php");
class mSanpham
{
    public function selectcasanpham()
    {
        $p = new ketnoi();
        $con = $p->moketnoi();
        $truyvan = "select * from product order by type_id asc";
        $kq = mysqli_query($con, $truyvan);
        $p->dongketnoi($con);
        return $kq;
    }
    public function selectType()
    {
        $p = new ketnoi();
        $con = $p->moketnoi();
        $truyvan = "select type_name from type_of_product";
        $kq = mysqli_query($con, $truyvan);
        $p->dongketnoi($con);
        return $kq;
    }
    public function laydulieu($sql)
    {
        $p = new ketnoi();
        $con = $p->moketnoi();
        $kq = mysqli_query($con, $sql);
        $p->dongketnoi($con);
        return $kq;
    }
    public function combobox($sql)
    {
        $p = new ketnoi();
        $con = $p->moketnoi();
        $kq = mysqli_query($con, $sql);
        $p->dongketnoi($con);
        return $kq;
    }
    public function modelsuasanpham($idsp,$name,$price,$cost,$mota,$type_id)
    {
        $p = new ketnoi();
        $con = $p->moketnoi();
        $sql="UPDATE product SET name='$name', price='$price',mota='$mota',cost='$cost',type_id='$type_id' where product_id='$idsp'";
        $kq = mysqli_query($con, $sql);
        if($kq)
        {
            return true;
        }else{
            return false;
        }
        $p->dongketnoi($con);
       
    }
    public function mthemsanpham($name,$price,$cost,$mota,$type_id, $hinh)
    {
        $p = new ketnoi();
        $con = $p->moketnoi();
        $sql="INSERT INTO product (name, price, cost, mota, image) values (N'$name', '$price', '$cost', '$mota', $hinh)";
        $kq = mysqli_query($con, $sql);
        if($kq)
        {
            return true;
        }else{
            return false;
        }
        $p->dongketnoi($con);
       
    }
   

    
        
    
    
}

?>