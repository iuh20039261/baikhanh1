<?php
class ketnoi
{
    public function moketnoi()
    {
        $con = mysqli_connect("localhost", "root", "", "pkdt");
        return $con;
    }
    public function dongketnoi($con)
    {
        $con = mysqli_close($con);
    }
}
?>