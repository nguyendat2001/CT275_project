<?php 
session_start();
?>
<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>JEWLLERY</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" href="img/favicon.png">

    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" type="text/css" href="/isocms/skin/css/bootstrap.min.css" />
    <script src="js/jquery.validate.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/jquery.header.js"></script>
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu" style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.php" style="max-width: 120px;"> <img src="img/logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Trang Ch???</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.php">Th??ng tin</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="product_list.php">S???n Ph???m</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="blog.php">B??i ????ng</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php if( !isset($_SESSION['user']) || $_SESSION['user'] != "admin@gmail.com"){ echo "invisible";}?>" href="view_acc.php">xem t??i kho???n</a>
                                </li>
                            </ul>
                        </div>
                        <div class=" d-flex align-items-left">
                            <a href="
                            <?php if( !isset($_SESSION['user'])){ echo " login.php ";
                            }else{
                                echo "logout.php ";
                            }?>" class="btn btn-light ">
                                <?php if( isset($_SESSION['user'])){ echo "????ng xu???t";
                            }else{
                                echo "????ng nh???p";
                            }?>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
<div class="body_posi">
    <section class="breadcrumb_part" style="background-image:url('img/backgroud/ring.png'); width: 100%;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <h2 style="text-shadow: black 0.1em 0.1em 0.2em">Th??ng tin h??nh c???a website</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="about_us padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="about_us_content">
                        <h5>m???t v??i th??ng tin ch??nh c???a wedsite</h5>
                        <h3>trang wed ???????c th??nh l???p v??o ng??y 10-4-2022. Wedsite ???????c x??y d???ng tr??n n???n code HTML, CSS, Javascript, PHP, Jquery. Wedsite g???m c?? c??c trang nh?? l??: Trang ch???, Trang th??ng tin, Trang s???n ph???m, Trang B??i ????ng, Trang ????ng k??, ????ng
                            nh???p
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product list part end-->

    <section class="about_us ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 border border-dark">
                    <div class="about_us_content">
                        <img src="img/trangsuc/Backgound1.jpg" class="img-thumbnail">
                        <h5 style="text-align: center" class="text-dark">Wedsite kinh doanh c??c d??ng s???n ph???m li??n quan v??? m???t h??ng d??y chuy???n.</h5>
                    </div>
                </div>
                <div class="col-lg-4 border border-dark">
                    <div class="about_us_content ">
                        <img src="img/trangsuc/background2.jpg">
                        <h5 style="text-align: center" class="text-dark">Wedsite kinh doanh c??c d??ng s???n ph???m li??n quan v??? m???t h??ng v??? nh???n.</h5>
                    </div>
                </div>
                <div class="col-lg-4 border border-dark">
                    <div class="about_us_content">
                        <img src="img/trangsuc/background3.jpg">
                        <h5 style="text-align: center" class="text-dark">Wedsite kinh doanh c??c d??ng s???n ph???m li??n quan v??? m???t h??ng v??? khuy??n tai.</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- feature part here -->
    <section class="feature_part section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="feature_part_tittle">
                        <h3><strong>JEWLLERY</strong> lu??n t??? h??o l?? th????ng hi???u trang s???c ??i ?????u trong l??nh v???c Th????ng M???i ??i???n T???</h3>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5">
                    <div class="feature_part_content">
                        <p>V???i s??? ??a d???ng v??? ch???ng lo???i, ?????c ????o v??? ki???u d??ng, d???n ?????u v??? xu h?????ng v?? t???o ???????c s??? tin t?????ng v?? y??u m???n c???a kh??ch h??ng trong v?? ngo??i n?????c. N??t tinh x???o l???p l??nh c???a c??c s???n ph???m ???????c thi???t k??? v?? ch??? t??c c??ng phu b???ng c??ng
                            ngh??? ti??n ti???n hi???n ?????i v?? ki???u d??ng th???i trang qu???c t???. S???n ph???m trang s???c ph??? ki???n s??? l??m th??ng hoa n??t duy??n d??ng, v??? qu?? ph??i cho qu?? kh??ch h??ng, d?? ??? b???t c??? n??i ????u. S???n ph???m ???????c thi???t k??? tinh t???, phong c??ch sang tr???ng,
                            ch???t l?????ng cao c???p v???i gi?? th??nh t???t nh???t</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_part">
                        <img src="img/icon/feature_icon_1.svg" alt="#">
                        <h4>Credit Card Support</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_part">
                        <img src="img/icon/feature_icon_2.svg" alt="#">
                        <h4>Online Order</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_part">
                        <img src="img/icon/feature_icon_3.svg" alt="#">
                        <h4>Free Delivery</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_part">
                        <img src="img/icon/feature_icon_4.svg" alt="#">
                        <h4>Product with Gift</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature part end -->

    <!-- subscribe part here -->
    <section class="subscribe_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="subscribe_part_content">
                        <h2>Nh???n ??u ????i & c???p nh???t</h2>
                        <p>Nh???p v??o email ????? tr??? th??nh m???t trong nh???ng ng?????i nh???n th??ng tin v?? ??u ????i s???m nh???t.</p>
                        <div class="subscribe_form">
                            <input type="email" placeholder="Nh???p email">
                            <a href="#" class="btn_1">????ng k??</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe part end -->

    <!--::footer_part start::-->
    <footer class="footer_part">
        <div class="footer_iner">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-8">
                        <div class="footer_menu">
                            <div class="footer_logo">
                                <a href="index.php"><img src="img/logo.png" alt="#"></a>
                            </div>
                            <div class="footer_menu_item">
                                <a href="index.php">trang ch???</a>
                                <a href="about.php">Th??ng tin</a>
                                <a href="product_list.php">S???n ph???m</a>
                                <a href="blog.php">B??i ????ng</a>
    
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="social_icon">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright_part">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-12">
                        <div class="copyright_text">
                            <P>
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            </P>
                            <div class="copyright_link">
                                <a href="#">Turms & Conditions</a>
                                <a href="#">FAQ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>

</html>