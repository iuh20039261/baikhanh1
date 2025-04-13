<?php
    include_once("Controller/cLoaiSP.php");
    class vLoaiSP
    {
        public function xuatloaisp()
        {
            $p= new cLoaiSP();
            $kq=$p->xuatloaisp();
            if($kq)
            {
                while($r= mysqli_fetch_assoc($kq))
                {
                    echo '
                    <li>
                         <a class="active"  href="?Loai='.$r['type_id'].'" role="tab"
                                        aria-controls="clothing" aria-selected="true">'.$r['type_name'].'</a>
                     </li>
                    ';
                }
            }
        }
    }
?>