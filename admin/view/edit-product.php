<!DOCTYPE html>
<?php
include_once ("controller/cSanpham.php");
$p = new cSanpham();
?>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Edit Product - Dashboard Admin Template</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700" />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
    <!-- http://api.jqueryui.com/datepicker/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!--
  Product Admin CSS Template
  https://templatemo.com/tm-524-product-admin
  -->
</head>

<body>
    <nav class="navbar navbar-expand-xl">
        <div class="container h-100">
            <a class="navbar-brand" href="index.html">
                <h1 class="tm-site-title mb-0">Product Admin</h1>
            </a>
            <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars tm-nav-icon"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto h-100">
                    <li class="nav-item">
                        <a class="nav-link" href="../admin/index.php">
                            <i class="fas fa-tachometer-alt"></i> Dashboard
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="../index.php" id="" role="button"
                                data-toggle="" aria-haspopup="true" aria-expanded="false">
                                <i class="far fa-file-alt"></i>
                                <span>
                                    Home Store
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?products">
                                <i class="fas fa-shopping-cart"></i>
                                Products
                            </a>
                        </li>

                        <li class="nav-item">

                            <a class="nav-link" href="?accounts">
                                <i class="far fa-user"></i>
                                Accounts
                            </a>
                        </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-cog"></i>
                            <span> Settings <i class="fas fa-angle-down"></i> </span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Profile</a>
                            <a class="dropdown-item" href="#">Billing</a>
                            <a class="dropdown-item" href="#">Customize</a>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav">
                <li class="nav-item">
              <?php

                            if (isset($_SESSION["dn"])) {

                                echo '<a class="nav-link d-block" href="?dangxuat"><i class="far fa-user"></i>Admin, <b>Logout</b></a>';
                                if (isset($_REQUEST['dangxuat'])) {
                                    session_destroy();

                                    echo "<script> window.location.href = 'login.php';</script>";
                                }
                            } else {
                                echo '<a class="nav-link d-block" href="login.php"><i class="far fa-user"></i><b> Login</b></a>';
                            }
                            ?>
              </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container tm-mt-big tm-mb-big">
        <div class="row">
            <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
                <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tm-block-title d-inline-block">Edit Product</h2>
                        </div>
                    </div>
                    <div class="row tm-edit-product-row">
                        <div class="col-xl-6 col-lg-6 col-md-12">

                            <?php
              $idsp = $_REQUEST['idsp'];
              $name = $p->laycot('Select name from product where product_id=' . $idsp . ' limit 1');
              $mota = $p->laycot('Select mota from product where product_id=' . $idsp . ' limit 1');
              $price = $p->laycot('Select price from product where product_id=' . $idsp . ' limit 1');
              $cost = $p->laycot('Select cost from product where product_id=' . $idsp . ' limit 1');
              ?>
                            <form action="" method="post" class="tm-edit-product-form">
                                <div class="form-group mb-3">
                                    <label for="name">Product Name
                                    </label>
                                    <input id="name" name="name" type="text" value="<?php echo $name; ?>"
                                        class="form-control validate" />
                                </div>
                                <div class="form-group mb-3">
                                    <label for="description">Description</label>
                                    <textarea class="form-control validate tm-small" name="mota" rows="5"
                                        required><?php echo $mota ?></textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="category">Category</label>
                                    <select class="custom-select tm-select-accounts" id="category" name="loaisanpham">
                                        <?php
                    $idloaisp = $p->laycot('Select type_id from product where product_id=' . $idsp . ' limit 1');
                    $p->loai_combobox($idloaisp);
                    ?>

                                    </select>
                                </div>
                                <div class="row">
                                    <div class="form-group mb-3 col-xs-12 col-sm-6">
                                        <label for="stock">Price
                                        </label>
                                        <input id="stock" name="price" type="text"
                                            value="<?php echo $price ?> " class="form-control validate"
                                            data-large-mode="" />
                                    </div><?php //echo $as; ?>
                                    <div class="form-group mb-3 col-xs-12 col-sm-6">
                                        <label for="stock">Cost
                                        </label>
                                        <input id="stock" name="cost" type="text" value="<?php echo $cost ?>"
                                            class="form-control validate" />
                                    </div>
                                </div>

                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                            <div class="tm-product-img-edit mx-auto">
                                <?php
                $hinh = $p->laycot('Select image from product where product_id=' . $idsp . ' limit 1');
                ?>
                                <img src="../assets/image/<?php echo $hinh ?>" alt="Product image"
                                    class="img-fluid d-block mx-auto">
                                <i class="fas fa-cloud-upload-alt tm-upload-icon"
                                    onclick="document.getElementById('fileInput').click();"></i>
                            </div>
                       
                        </div>
                        <div class="col-12">
                            <button type="submit" name="btnsua" class="btn btn-primary btn-block text-uppercase">Update Now</button>
                        </div>
                        </form>
                        <?php
                        if(isset($_REQUEST['btnsua']))
                        {
                            
                            $idloaisp=$_REQUEST['loaisanpham'];
                            $tensp= $_REQUEST['name'];
                            $gia= $_REQUEST['price'];
                            $giaban = $_REQUEST['cost'];
                            $mota= $_REQUEST['mota'];
                            $p->suasnapham($idsp,$tensp,$gia,$giaban,$mota,$idloaisp);
                            
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="tm-footer row tm-mt-small">
        <div class="col-12 font-weight-light">
            <p class="text-center text-white mb-0 px-4 small">
                Copyright &copy; <b>2018</b> All rights reserved.

                Design: <a rel="nofollow noopener" href="https://templatemo.com" class="tm-footer-link">Template Mo</a>
            </p>
        </div>
    </footer>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
    $(function() {
        $("#expire_date").datepicker({
            defaultDate: "10/22/2020"
        });
    });
    </script>
</body>

</html>