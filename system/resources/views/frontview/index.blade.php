<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daily Shop | Home</title>

    <link href="{{ url('public') }}/css/font-awesome.css" rel="stylesheet">
    <link href="{{ url('public') }}/css/bootstrap.css" rel="stylesheet">
    <link href="{{ url('public') }}/css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('public') }}/css/jquery.simpleLens.css">
    <link rel="stylesheet" type="text/css" href="{{ url('public') }}/css/slick.css">
    <link rel="stylesheet" type="text/css" href="{{ url('public') }}/css/nouislider.css">
    <link id="switcher" href="{{ url('public') }}/css/theme-color/default-theme.css" rel="stylesheet">
    <link href="{{ url('public') }}/css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">

    <link href="{{ url('public') }}/css/style.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Lato" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel='stylesheet' type='text/css'>


    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body>

    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>


    <header id="aa-header">
        <div class="aa-header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="aa-header-top-area">
                            <div class="aa-header-top-left">
                                <div class="aa-header-top-right">
                                    <ul class="aa-head-top-nav-right">
                                        <li><a href="{{ url('account') }}/#account">My Account</a></li>
                                        <li><a href="{{ url('login') }}">Login</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="aa-header-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="aa-header-bottom-area">
                                <div class="aa-logo">
                                    <a href="index.html">
                                        <span class="fa fa-shopping-cart"></span>
                                        <p>Shop<strong>Pink</strong> <span>Kebutuhan Anda Nomor 1</span></p>
                                    </a>
                                </div>
                                <div class="aa-cartbox">
                                    <a class="aa-cart-link" href="#">
                                        <span class="fa fa-shopping-basket"></span>
                                        <span class="aa-cart-title">SHOPPING CART</span>
                                        <span class="aa-cart-notify">2</span>
                                    </a>
                                    <div class="aa-cartbox-summary">
                                        <ul>
                                            <li>
                                                <a class="aa-cartbox-img" href="#"><img
                                                        src="{{ url('public') }}/img/woman-small-2.jpg"
                                                        alt="img"></a>
                                                <div class="aa-cartbox-info">
                                                    <h4><a href="#">Kaos Kaki Beruang</a></h4>
                                                    <p>Rp 9.000</p>
                                                </div>
                                                <a class="aa-remove-product" href="#"><span
                                                        class="fa fa-times"></span></a>
                                            </li>
                                            <li>
                                                <a class="aa-cartbox-img" href="#"><img
                                                        src="{{ url('public') }}/img/woman-small-1.jpg"
                                                        alt="img"></a>
                                                <div class="aa-cartbox-info">
                                                    <h4><a href="#">Kaos Kaki Lembut</a></h4>
                                                    <p>Rp 7.000</p>
                                                </div>
                                                <a class="aa-remove-product" href="#"><span
                                                        class="fa fa-times"></span></a>
                                            </li>
                                            <li>
                                                <span class="aa-cartbox-total-title">
                                                    Total
                                                </span>
                                                <span class="aa-cartbox-total-price">
                                                    Rp 16.000
                                                </span>
                                            </li>
                                        </ul>
                                        <a class="aa-cartbox-checkout aa-primary-btn" href="checkout.html">Checkout</a>
                                    </div>
                                </div>
                                <div class="aa-search-box">
                                    <form action="">
                                        <input type="text" name="" id=""
                                            placeholder="Search here ex. 'man' ">
                                        <button type="submit"><span class="fa fa-search"></span></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </header>
    <section id="menu">
        <div class="container">
            <div class="menu-area">
                <div class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="index.html">Home</a></li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
    </section>
    <section id="aa-slider">
        <div class="aa-slider-area">
            <div id="sequence" class="seq">
                <div class="seq-screen">
                    <ul class="seq-canvas">
                        <li>
                            <div class="seq-model">
                                <img data-seq src="{{ url('public') }}/img/slider/1.jpg" alt="Men slide img" />
                            </div>
                            <div class="seq-title">
                                <span data-seq>Diskon Sampai Dengan 50%</span>
                                <h2 data-seq>Koleksi Wanita</h2>
                                <p data-seq>Tambah Koleksi Kaos Kaki Kalian Dengan Belanja Disini.</p>
                                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">BELANJA
                                    SEKARANG</a>
                            </div>
                        </li>
                        <li>
                            <div class="seq-model">
                                <img data-seq src="{{ url('public') }}/img/slider/2.jpg"
                                    alt="Wristwatch slide img" />
                            </div>
                            <div class="seq-title">
                                <span data-seq>Hadir Dengan Diskon</span>
                                <h2 data-seq>Koleksi Terlaris</h2>
                                <p data-seq>Tambah Koleksi Kaos Kaki Kalian Dengan Belanja Disini.</p>
                                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">BELANJA
                                    SEKARANG</a>
                            </div>
                        </li>
                        <li>
                            <div class="seq-model">
                                <img data-seq src="{{ url('public') }}/img/slider/3.jpg"
                                    alt="Women Jeans slide img" />
                            </div>
                            <div class="seq-title">
                                <span data-seq>Koleksi Barang Terbaru</span>
                                <h2 data-seq>Koleksi Terbaru</h2>
                                <p data-seq>Tambah Koleksi Kaos Kaki Kalian Dengan Belanja Disini.</p>
                                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">BELANJA
                                    SEKARANG</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
                    <a type="button" class="seq-prev" aria-label="Previous"><span
                            class="fa fa-angle-left"></span></a>
                    <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
                </fieldset>
            </div>
        </div>
    </section>
    <section id="aa-product">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="aa-product-area">
                            <div class="aa-product-inner">
                                <ul class="nav nav-tabs aa-products-tab">
                                    <li class="active"><a href="#men" data-toggle="tab">Produk</a></li>
                                    <li><a href="#women" data-toggle="tab">Banyak Dicari</a></li>
                                    <li><a href="#sports" data-toggle="tab">Terbaru</a></li>
                                    <li><a href="#electronics" data-toggle="tab">Paling Digemari</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="men">
                                        <ul class="aa-product-catg">
                                            @foreach ($list_produk as $produk)
                                                <li>
                                                    <figure>
                                                        <a class="aa-product-img" href="#"><img
                                                                src="{{ url('public') }}/img/man/polo-shirt-2.png"
                                                                alt="polo shirt img"></a>
                                                        <a class="aa-add-card-btn" href="#"><span
                                                                class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                        <figcaption>
                                                            <h4 class="aa-product-title">
                                                                <a href="#">
                                                                    {{ $produk->nama_produk }}
                                                                </a>
                                                            </h4>
                                                            <span class="aa-product-price">{{ $produk->harga }}</span>
                                                            <span class="aa-product-price">
                                                                | {{ $produk->stok }} Ready
                                                            </span>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="aa-product-hvr-content">
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Add to Wishlist"><span
                                                                class="fa fa-heart-o"></span></a>
                                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                                            title="Compare"><span class="fa fa-exchange"></span></a>
                                                        <a href="#" data-toggle2="tooltip" data-placement="top"
                                                            title="Quick View" data-toggle="modal"
                                                            data-target="#quick-view-modal"><span
                                                                class="fa fa-search"></span></a>
                                                    </div>
                                                    <span class="aa-badge aa-sale" href="#"> Nama
                                                        Kategori</span>
                                                </li>
                                            @endforeach
                                        </ul>
                                        <a class="aa-browse-btn" href="#">Jelajahi semua Produk <span
                                                class="fa fa-long-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="aa-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="aa-banner-area">
                            <a href="#"><img src="{{ url('public') }}/img/fashion-banner.jpg"
                                    alt="fashion banner img"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="aa-subscribe">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-subscribe-area">
                        <h3>Ikuti Berita Terbaru Daily Shop</h3>
                        <p>Dengan Mengikutinya Anda Akan Menerima Berita Terbaru Dari Kami</p>
                        <form action="" class="aa-subscribe-form">
                            <input type="email" name="" id=""
                                placeholder="Silahkan Masukkan Email">
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="aa-footer">
        <div class="aa-footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="aa-footer-top-area">
                            <div class="row">
                                <div class="col-md-3 col-sm-6">
                                    <div class="aa-footer-widget">
                                        <h3>Main Menu</h3>
                                        <ul class="aa-footer-nav">
                                            <li><a href="#">Home</a></li>
                                            <li><a href="#">Our Services</a></li>
                                            <li><a href="#">Our Products</a></li>
                                            <li><a href="#">About Us</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="aa-footer-widget">
                                        <div class="aa-footer-widget">
                                            <h3>Knowledge Base</h3>
                                            <ul class="aa-footer-nav">
                                                <li><a href="#">Delivery</a></li>
                                                <li><a href="#">Returns</a></li>
                                                <li><a href="#">Services</a></li>
                                                <li><a href="#">Discount</a></li>
                                                <li><a href="#">Special Offer</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="aa-footer-widget">
                                        <div class="aa-footer-widget">
                                            <h3>Useful Links</h3>
                                            <ul class="aa-footer-nav">
                                                <li><a href="#">Site Map</a></li>
                                                <li><a href="#">Search</a></li>
                                                <li><a href="#">Advanced Search</a></li>
                                                <li><a href="#">Suppliers</a></li>
                                                <li><a href="#">FAQ</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="aa-footer-widget">
                                        <div class="aa-footer-widget">
                                            <h3>Contact Us</h3>
                                            <address>
                                                <p>Jl. Sepakat, Ketapang IND</p>
                                                <p><span class="fa fa-phone"></span>081234567890</p>
                                                <p><span class="fa fa-envelope"></span>dailyshop@gmail.com</p>
                                            </address>
                                            <div class="aa-footer-social">
                                                <a href="#"><span class="fa fa-facebook"></span></a>
                                                <a href="#"><span class="fa fa-twitter"></span></a>
                                                <a href="#"><span class="fa fa-google-plus"></span></a>
                                                <a href="#"><span class="fa fa-youtube"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="aa-footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="aa-footer-bottom-area">
                            <p>Designed by <a href="{{ url('public') }}/http://www.markups.io/">Anggun
                                    Safitri-2022</a></p>
                            <div class="aa-footer-payment">
                                <span class="fa fa-cc-mastercard"></span>
                                <span class="fa fa-cc-visa"></span>
                                <span class="fa fa-paypal"></span>
                                <span class="fa fa-cc-discover"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4>Login or Register</h4>
                    <form class="aa-login-form" action="">
                        <label for="">Username or Email address<span>*</span></label>
                        <input type="text" placeholder="Username or email">
                        <label for="">Password<span>*</span></label>
                        <input type="password" placeholder="Password">
                        <button class="aa-browse-btn" type="submit">Login</button>
                        <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Remember
                            me </label>
                        <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
                        <div class="aa-register-now">
                            Don't have an account?<a href="account.html">Register now!</a>
                        </div>
                    </form>
                </div>


            </div>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <script src="{{ url('public') }}/js/bootstrap.js"></script>
            <script type="text/javascript" src="{{ url('public') }}/js/jquery.smartmenus.js"></script>
            <script type="text/javascript" src="{{ url('public') }}/js/jquery.smartmenus.bootstrap.js"></script>
            <script src="{{ url('public') }}/js/sequence.js"></script>
            <script src="{{ url('public') }}/js/sequence-theme.modern-slide-in.js"></script>
            <script type="text/javascript" src="{{ url('public') }}/js/jquery.simpleGallery.js"></script>
            <script type="text/javascript" src="{{ url('public') }}/js/jquery.simpleLens.js"></script>
            <script type="text/javascript" src="{{ url('public') }}/js/slick.js"></script>
            <script type="text/javascript" src="{{ url('public') }}/js/nouislider.js"></script>
            <script src="{{ url('public') }}/js/custom.js"></script>

</body>

</html>
