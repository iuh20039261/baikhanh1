<?php
include_once("Controller/cSanpham.php");
class vSanpham
{
    public function xuatdssanpham()
    {
        $p = new cSanpham();
        $kq = $p->xuatdssp();
        if ($kq) {
            while ($r = mysqli_fetch_assoc($kq)) {
                echo '     <div class="col-lg-3">
                <div class="single_product">
                    <div class="product_thumb">
                        <a class="primary_img" href="?idSP=' . $r['product_id'] . '"><img
                                src="assets/image/' . $r['image'] . '" alt=""></a>
                        

                        <div class="quick_button">
                            <a href="?idSP=' . $r['product_id'] . '" title="quick_view">Xem sản phẩm</a>

                        </div>

                        
                    </div>
                    <div class="product_content">
                        <h3><a href="product-details.html">' . $r['name'] . '</a></h3>
                        <span class="current_price">' . $r['cost'] . 'VND</span>
                        <span class="old_price">' . $r['price'] . 'VND</span>
                    </div>
                </div>
            </div>';
            }
        }
    }
    public function xuatdssanphambyLoai($maloai)
    {
        $p = new cSanpham();
        $kq = $p->xuatdsspbyLoai($maloai);
        if ($kq) {
            while ($r = mysqli_fetch_assoc($kq)) {
                echo '     <div class="col-lg-3">
                <div class="single_product">
                    <div class="product_thumb">
                        <a class="primary_img" href="?idSP=' . $r['product_id'] . '"><img
                                src="assets/image/' . $r['image'] . '" alt=""></a>
                        

                        <div class="quick_button">
                            <a href="?idSP=' . $r['product_id'] . '" title="quick_view">Xem sản phẩm</a>

                        </div>

                        
                    </div>
                    <div class="product_content">
                        <h3><a href="product-details.php">' . $r['name'] . '</a></h3>
                        <span class="current_price">' . $r['cost'] . 'VND</span>
                        <span class="old_price">' . $r['price'] . 'VND</span>
                    </div>
                </div>
            </div>';
            }
        }
    }
    public function vSelectSPByName($name)
    {
        $p = new cSanpham();
        $kq = $p->cSelectSPByName($name);
        if ($kq) {
            while ($r = mysqli_fetch_assoc($kq)) {
                echo '     <div class="col-lg-3">
                <div class="single_product">
                    <div class="product_thumb">
                        <a class="primary_img" href="?idSP=' . $r['product_id'] . '"><img
                                src="assets/image/' . $r['image'] . '" alt=""></a>
                        

                        <div class="quick_button">
                            <a href="?idSP=' . $r['product_id'] . '" title="quick_view">Xem sản phẩm</a>

                        </div>

                        
                    </div>
                    <div class="product_content">
                        <h3><a href="product-details.php">' . $r['name'] . '</a></h3>
                        <span class="current_price">' . $r['cost'] . 'VND</span>
                        <span class="old_price">' . $r['price'] . 'VND</span>
                    </div>
                </div>
            </div>';
            }
        }
    }
}
