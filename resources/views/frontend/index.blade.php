<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Onii Chan Shop</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="/backend/dist/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="/backend/dist/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/backend/dist/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="/backend/dist/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="/backend/dist/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/backend/dist/css/custom.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<!-- Start Main Top -->
<div class="main-top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="custom-select-box">
                    <select id="basic" class="selectpicker show-tick form-control" data-placeholder="$ USD">

                        <option>$ USD</option>
                        <option>$ VND</option>
                    </select>
                </div>
                <div class="right-phone-box">
                    <p>Liên hệ: 089856269</p>
                </div>

            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="login-box">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </div>
                <div class="text-slid-box">
                    <div id="offer-box" class="carouselTicker">
                        <ul class="offer-box">
                            <li>
                                <i class="fab fa-opencart"></i> Giảm 20% cho toàn bộ giao dịch mua Mã khuyến mãi: offT80
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> 27/7
                                Giảm giá 50% - 80% cho rau
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Giảm 10%! Mua rau
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Giảm giá 50%! Mua ngay
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Giảm 10%! Mua rau
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Giảm giá 50% - 80% cho rau
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Giảm 20% cho toàn bộ giao dịch mua Mã khuyến mãi: offT30
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Giảm giá 50%! Mua ngay
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main Top -->

<!-- Start Main Top -->
<header class="main-header">
    <!-- Start Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
        <div class="container">
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#"><img src="/backend/dist/images/logo.png" class="logo" alt=""></a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="nav-item active"><a class="nav-link" href="/backend/dist/index.html">Trang Chủ</a></li>

                    <li class="dropdown">
                        <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">Danh Mục</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Cơm</a></li>
                            <li><a href="#">Đùi gà</a></li>
                            <li><a href="#">Bò</a></li>
                            <li><a href="#">Bánh mì</a></li>
                            <li><a href="#">Đồ ăn vặt</a></li>

                        </ul>
                    </li>


                    <li class="nav-item"><a class="nav-link" href="contact-us.html">Bình Luận</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->

            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul>
                    <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                    <li class="side-menu">
                        <a href="#">
                            <i class="fa fa-shopping-bag"></i>
                            <span class="badge">3</span>
                            <p> Giỏ Hàng</p>
                        </a>
                    </li>
                    @can('admin-user')
                    <li class="nav-item">
                        <a href="{{route('user.index')}}" class="nav-link">Admin</a>
                    </li>
                    @endcan
                </ul>
            </div>
            <!-- End Atribute Navigation -->
        </div>
        <!-- Start Side Menu -->
        <div class="side">
            <a href="#" class="close-side"><i class="fa fa-times"></i></a>
            <li class="cart-box">
                <ul class="cart-list">
                    <li>
                        <a href="#" class="photo"><img src="/backend/dist/images/img-pro-01.jpg" class="cart-thumb" alt="" /></a>
                        <h6><a href="#">Delica omtantur </a></h6>
                        <p>1x - <span class="price">$80.00</span></p>
                    </li>
                    <li>
                        <a href="#" class="photo"><img src="/backend/dist/images/img-pro-02.jpg" class="cart-thumb" alt="" /></a>
                        <h6><a href="#">Omnes ocurreret</a></h6>
                        <p>1x - <span class="price">$60.00</span></p>
                    </li>
                    <li>
                        <a href="#" class="photo"><img src="/backend/dist/images/img-pro-03.jpg" class="cart-thumb" alt="" /></a>
                        <h6><a href="#">Agam facilisis</a></h6>
                        <p>1x - <span class="price">$40.00</span></p>
                    </li>
                    <li class="total">
                        <a href="#" class="btn btn-default hvr-hover btn-cart" style="color: yellow !important">Xem giỏ Hàng</a>
                        <span class="float-right"><strong>Total</strong>: $180.00</span>
                    </li>
                </ul>
            </li>
        </div>
        <!-- End Side Menu -->
    </nav>
    <!-- End Navigation -->
</header>
<!-- End Main Top -->

<!-- Start Top Search -->
<div class="top-search">
    <div class="container">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-search"></i></span>
            <input type="text" class="form-control" placeholder="Search" style="border: 1px solid white; margin-left: 10px; margin-right: 10px;">
            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
        </div>
    </div>
</div>
<!-- End Top Search -->

<!-- Start Slider -->
<div id="slides-shop" class="cover-slides">
    <ul class="slides-container">
        <li class="text-center">
            <img src="/backend/dist/images/banner-01.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Chào mừng tới với <br> OniiChan Shop</strong></h1>
                        <p class="m-b-40">Chào mừng quý khách tới với website bán đồ ăn - Onii Chan shop hân hạnh phục vụ</p>
                        <p><a class="btn hvr-hover btn-nav" href="#" style="color: yellow!important">Onii Chan</a></p>
                    </div>
                </div>
            </div>
        </li>
        <li class="text-center">
            <img src="/backend/dist/images/banner-02.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Chào mừng tới với <br> OniiChan Shop</strong></h1>
                        <p class="m-b-40">Chào mừng quý khách tới với website bán đồ ăn - Onii Chan shop hân hạnh phục vụ</p>
                        <p><a class="btn hvr-hover btn-nav" href="#" style="color: yellow!important">Onii Chan</a></p>
                    </div>
                </div>
            </div>
        </li>
        <li class="text-center">
            <img src="/backend/dist/images/banner-03.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Chào mừng tới với <br> OniiChan Shop</strong></h1>
                        <p class="m-b-40">Chào mừng quý khách tới với website bán đồ ăn - Onii Chan shop hân hạnh phục vụ</p>
                        <p><a class="btn hvr-hover btn-nav" href="#" style="color: yellow!important">Onii Chan</a></p>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    <div class="slides-navigation">
        <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
        <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
    </div>
</div>
<!-- End Slider -->

<!-- Start Categories  -->
<div class="categories-shop">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="shop-cat-box">
                    <img class="img-fluid" src="/backend/dist/images/categories_img_01.jpg" alt="" />
                    <a class="btn hvr-hover" href="#">Lorem ipsum dolor</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="shop-cat-box">
                    <img class="img-fluid" src="/backend/dist/images/categories_img_02.jpg" alt="" />
                    <a class="btn hvr-hover" href="#">Lorem ipsum dolor</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="shop-cat-box">
                    <img class="img-fluid" src="/backend/dist/images/categories_img_03.jpg" alt="" />
                    <a class="btn hvr-hover" href="#">Lorem ipsum dolor</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Categories -->

<div class="box-add-products">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="offer-box-products">
                    <img class="img-fluid" src="/backend/dist/images/add-img-01.jpg" alt="" />
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="offer-box-products">
                    <img class="img-fluid" src="/backend/dist/images/add-img-02.jpg" alt="" />
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Start Products  -->

<div class="products-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-all text-center">
                    <h1>Fruits & Vegetables</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="special-menu text-center">
                    <div class="button-group filter-button-group">
                        <button class="active" data-filter="*">Tất Cả</button>
                        <button data-filter=".top-featured">Bán Chạy Nhất</button>
                        <button data-filter=".best-seller">Giảm Giá</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row special-list">
            <div class="col-lg-3 col-md-6 special-grid best-seller">
                <div class="products-single fix">
                    <div class="box-img-hover">
                        <div class="type-lb">
                            <p class="sale">Sale</p>
                        </div>
                        <img src="/backend/dist/images/img-pro-01.jpg" class="img-fluid" alt="Image">
                        <div class="mask-icon">
                            <ul>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="<p>Add to Wishlist</p>"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <a class="cart" href="#">Thêm vào giỏ hàng</a>
                        </div>
                    </div>
                    <div class="why-text">
                        <h4>Lorem ipsum dolor sit amet</h4>
                        <h5> $7.79</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 special-grid top-featured">
                <div class="products-single fix">
                    <div class="box-img-hover">
                        <div class="type-lb">
                            <p class="sale">New</p>
                        </div>
                        <img src="/backend/dist/images/img-pro-02.jpg" class="img-fluid" alt="Image">
                        <div class="mask-icon">
                            <ul>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <a class="cart" href="#">Thêm vào giỏ hàng</a>
                        </div>
                    </div>
                    <div class="why-text">
                        <h4>Lorem ipsum dolor sit amet</h4>
                        <h5> $9.79</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 special-grid top-featured">
                <div class="products-single fix">
                    <div class="box-img-hover">
                        <div class="type-lb">
                            <p class="sale">Sale</p>
                        </div>
                        <img src="/backend/dist/images/img-pro-03.jpg" class="img-fluid" alt="Image">
                        <div class="mask-icon">
                            <ul>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <a class="cart" href="#">Thêm vào giỏ hàng</a>
                        </div>
                    </div>
                    <div class="why-text">
                        <h4>Lorem ipsum dolor sit amet</h4>
                        <h5> $10.79</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 special-grid best-seller">
                <div class="products-single fix">
                    <div class="box-img-hover">
                        <div class="type-lb">
                            <p class="sale">Sale</p>
                        </div>
                        <img src="/backend/dist/images/img-pro-04.jpg" class="img-fluid" alt="Image">
                        <div class="mask-icon">
                            <ul>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <a class="cart" href="#">Thêm vào giỏ hàng</a>
                        </div>
                    </div>
                    <div class="why-text">
                        <h4>Lorem ipsum dolor sit amet</h4>
                        <h5> $15.79</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Products  -->

<!-- Start Blog  -->
<div class="latest-blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-all text-center">
                    <h1>Món được yêu thích</h1>
                    <p>Các món được yêu thích của shop.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 col-xl-4">
                <div class="blog-box">
                    <div class="blog-img">
                        <img class="img-fluid" src="/backend/dist/images/blog-img.jpg" alt="" />
                    </div>
                    <div class="blog-content">
                        <div class="title-blog">
                            <h3>Fusce in augue non nisi fringilla</h3>
                            <p>Nulla ut urna egestas, porta libero id, suscipit orci. Quisque in lectus sit amet urna dignissim feugiat. Mauris molestie egestas pharetra. Ut finibus cursus nunc sed mollis. Praesent laoreet lacinia elit id lobortis.</p>
                        </div>
                        <ul class="option-blog">
                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                            <li><a href="#"><i class="fas fa-eye"></i></a></li>
                            <li><a href="#"><i class="far fa-comments"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4">
                <div class="blog-box">
                    <div class="blog-img">
                        <img class="img-fluid" src="/backend/dist/images/blog-img-01.jpg" alt="" />
                    </div>
                    <div class="blog-content">
                        <div class="title-blog">
                            <h3>Fusce in augue non nisi fringilla</h3>
                            <p>Nulla ut urna egestas, porta libero id, suscipit orci. Quisque in lectus sit amet urna dignissim feugiat. Mauris molestie egestas pharetra. Ut finibus cursus nunc sed mollis. Praesent laoreet lacinia elit id lobortis.</p>
                        </div>
                        <ul class="option-blog">
                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                            <li><a href="#"><i class="fas fa-eye"></i></a></li>
                            <li><a href="#"><i class="far fa-comments"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4">
                <div class="blog-box">
                    <div class="blog-img">
                        <img class="img-fluid" src="/backend/dist/images/blog-img-02.jpg" alt="" />
                    </div>
                    <div class="blog-content">
                        <div class="title-blog">
                            <h3>Fusce in augue non nisi fringilla</h3>
                            <p>Nulla ut urna egestas, porta libero id, suscipit orci. Quisque in lectus sit amet urna dignissim feugiat. Mauris molestie egestas pharetra. Ut finibus cursus nunc sed mollis. Praesent laoreet lacinia elit id lobortis.</p>
                        </div>
                        <ul class="option-blog">
                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                            <li><a href="#"><i class="fas fa-eye"></i></a></li>
                            <li><a href="#"><i class="far fa-comments"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Blog  -->


<!-- Start Instagram Feed  -->
<div class="instagram-box">
    <div class="main-instagram owl-carousel owl-theme">
        <div class="item">
            <div class="ins-inner-box">
                <img src="/backend/dist/images/instagram-img-01.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="/backend/dist/images/instagram-img-02.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="/backend/dist/images/instagram-img-03.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="/backend/dist/images/instagram-img-04.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="/backend/dist/images/instagram-img-05.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="/backend/dist/images/instagram-img-06.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="/backend/dist/images/instagram-img-07.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="/backend/dist/images/instagram-img-08.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="/backend/dist/images/instagram-img-09.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="/backend/dist/images/instagram-img-05.jpg" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Instagram Feed  -->


<!-- Start Footer  -->
<footer>
    <div class="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-top-box">
                        <h3>Thời gian mở cửa</h3>
                        <ul class="list-time">
                            <li>
                                Từ 7h30 sáng tới 10h tối các ngày trong tuần
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-top-box">
                        <h3>Gửi bình luận</h3>
                        <form class="newsletter-box">
                            <div class="form-group">
                                <input class="" type="email" name="Email" placeholder="Email Address*" />
                                <i class="fa fa-envelope"></i>
                            </div>
                            <button class="btn hvr-hover" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-top-box">
                        <h3>Sự kiện</h3>
                        <p>Hiện chưa có sự kiện nào</p>
                        <ul>
                            <li><a href="#" style="color: yellow!important"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#" style="color: yellow!important"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-widget">
                        <h4>OniiChan Shop</h4>
                        <p>Nơi cung cấp dịch vụ order đồ ăn.</p>
                        <p>Đồ ăn tại OniiChan được đảm bảo vệ sinh an toàn thực phẩm, với tiêu chí ngon và lành, bảo vệ sực khỏe của khách hàng. Giao hàng nhanh trong 15 phút. Onii Chan shop luôn có những đợt giảm giá hấp dẫn cho thực khách. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-link">
                        <h4>Danh Mục</h4>
                        <ul>
                            <li><a href="#" class="danhmuc">  Cơm</a></li>
                            <li><a href="#" class="danhmuc">  Đùi gà</a></li>
                            <li><a href="#" class="danhmuc">  Bò</a></li>
                            <li><a href="#" class="danhmuc">  Bánh mì</a></li>
                            <li><a href="#" class="danhmuc"> Đồ ăn vặt</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-link-contact">
                        <h4>Địa chỉ</h4>
                        <ul>
                            <li>
                                <p><i class="fas fa-map-marker-alt"></i>Số 88 đường Hoàng Mai- Hà Nội </p>
                            </li>
                            <li>
                                <p><i class="fas fa-phone-square"></i>Phone: 0898562269</p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope"></i>Email: hunglq.dev@gmail.com</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer  -->

<!-- Start copyright  -->
<div class="footer-copyright">
    <p class="footer-company">Sản xuất và thiết kế bởi <a href="" style="color:#BB0000">Lê quang hùng </a>developer</p>
</div>
<!-- End copyright  -->

<div class="back-to-top"><i class="fa fa-arrow-up" aria-hidden="true"></i></div>

<!-- ALL JS FILES -->
<script src="/backend/dist/js/jquery-3.2.1.min.js"></script>
<script src="/backend/dist/js/popper.min.js"></script>
<script src="/backend/dist/js/bootstrap.min.js"></script>
<!-- ALL PLUGINS -->
<script src="/backend/dist/js/jquery.superslides.min.js"></script>
<script src="/backend/dist/js/bootstrap-select.js"></script>
<script src="/backend/dist/js/inewsticker.js"></script>
<script src="/backend/dist/js/bootsnav.js."></script>
<script src="/backend/dist/js/images-loded.min.js"></script>
<script src="/backend/dist/js/isotope.min.js"></script>
<script src="/backend/dist/js/owl.carousel.min.js"></script>
<script src="/backend/dist/js/baguetteBox.min.js"></script>
<script src="/backend/dist/js/form-validator.min.js"></script>
<script src="/backend/dist/js/contact-form-script.js"></script>
<script src="/backend/dist/js/custom.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(window).scroll(function(event){
            var pos_body = $('html,body').scrollTop();
            if(pos_body>100){
                $('.back-to-top').addClass('hien-ra');
            }else{
                $('.back-to-top').removeClass('hien-ra');
            }

        });
        $('.back-to-top').click(function(){
            $('html, body').animate({scrollTop : 0}, 800);
        });
    });
</script>
</body>

</html>
