<?php
include_once ("model/mSanpham.php");
class cSanpham
{
  public function xemsanpham()
  {
    $p = new mSanPham();
    $kq = $p->selectcasanpham();
    if ($kq) {
      while ($r = mysqli_fetch_assoc($kq)) {
        echo '<tr>
                    <th scope="row"><input type="checkbox" /></th>
                    <td class="tm-product-name"><a href="?idsp=' . $r['product_id'] . '">' . $r['name'] . '</a></td>
                    <td><a href="?idsp=' . $r['product_id'] . '">' . $r['price'] . '</a></td>
                    <td><a href="?idsp=' . $r['product_id'] . '">' . $r['cost'] . '</a></td>
                    <td><a href="?idsp=' . $r['product_id'] . '">' . $r['mota'] . '</a></td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>';
      }
    } else {
      echo '<tr>
                    <th scope="row"><input type="checkbox" /></th>
                    <td class="tm-product-name"> khong co san pham</td>
                    <td>null</td>
                    <td>null</td>
                    <td>
                      <a href="#" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>';
    }
  }

  public function laycot($sql)
  {
    $p = new mSanpham();
    $kq = $p->laydulieu($sql);
    $giatri = '';
    while ($row = mysqli_fetch_array($kq)) {
      $gt = $row[0];
      $giatri = $gt;

    }
    return $giatri;

  }
  public function loai_combobox($idloaisp)
  {

    $sql = 'Select * from type_of_product ';
    $p = new mSanpham();
    $ketqua = $p->combobox($sql);

    while ($row = mysqli_fetch_array($ketqua)) {

      $idloai = $row['type_id'];
      $type_name = $row['type_name'];
      if ($idloaisp != 0 && $idloaisp == $idloai) {
        echo '<option value="' . $idloai . '" selected>' . $type_name . '</option>';
      } else {
        echo '<option value="' . $idloai . '">' . $type_name . '</option>';
      }
    }
  }
  public function suasnapham($idsp,$name,$price,$cost,$mota,$type_id)
  {
    $p=new mSanpham();
    $kq=$p->modelsuasanpham($idsp,$name,$price,$cost,$mota,$type_id);
    if( $kq == true) {
      echo '<script>alert("Sua san pham thanh cong")</script>';
      echo '<script>
            window.location="../admin/index.php";
          </script>';
    }else{
      echo '<script>alert("Sua san pham that bai")</script>';
    }
  }
  public function themsanpham($name,$price,$cost,$mota,$type_id,$hinh)
  {
    $p=new mSanpham();
    $kq=$p->mthemsanpham($name,$price,$cost,$mota,$type_id,$hinh);
    if( $kq == true) {
      echo '<script>alert("Them san pham thanh cong")</script>';
      echo '<script>
            window.location="../admin/index.php";
          </script>';
    }else{
      echo '<script>alert("Them san pham that bai")</script>';
    }
  }
  public function uploadfille($name,$tmp_name,$folder)
		{
			if($name !='' && $folder !='')
			{
				$name = time()."".$name;
				$newname = $folder."/".$name;
				if(move_uploaded_file($tmp_name,$newname))
				{
					return $name ;
				}else
				{
					return 0;	
				}
			}else
			{
				return 0;
			}
			
			
		}

}
?>