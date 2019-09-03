<!-- ##### Header Area Start ##### -->
<header class="header_area">
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
            <!-- Classy Menu -->
            <nav class="classy-navbar" id="essenceNav">
                <!-- Logo -->
                <a class="nav-brand" href="{{route('index')}}"><img src="{{URL::to('img/core-img/logo_mid.png')}}" alt=""></a>
                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>
                <!-- Menu -->
                <div class="classy-menu">
                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li><a href="{{route('shop.index')}}">Katalog</a>
                                <ul class="dropdown">
                                    <li><a href="index.html">Handphone</a></li>
                                    <li><a href="shop.html">Mi TV</a></li>
                                    <li><a href="single-product-details.html">Aksesoris</a></li>
                                </ul>
                            </li>
                            <li><a href="blog.html">Konfirmasi Pembayaran</a></li>
                            <li><a href="/contact">Informasi</a>
                                <ul class="dropdown">
                                    <li><a href="index.html">Syarat Ketentuan</a></li>
                                    <li><a href="shop.html">Kontak</a></li>
                                    <li><a href="single-product-details.html">FAQ</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>

            <!-- Header Meta Data -->
            <div class="header-meta d-flex clearfix justify-content-end">
                <!-- Search Area -->
                <div class="search-area">
                    <form action="#" method="post">
                        <input type="search" name="search" id="headerSearch" placeholder="Cari Produk Disini..">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
                <!-- Favourite Area -->
                <div class="favourite-area">
                    <a href="#"><img src="{{URL::to('img/core-img/heart.svg')}}" alt=""></a>
                </div>
                <!-- Cart Area -->
                <div class="cart-area">
                    <a href="#" id="essenceCartBtn"><img src="{{URL::to('img/core-img/bag.svg')}}" alt=""> <span>3</span></a>
                </div>
                <!-- User Login Info -->
                <div class="user-login-info">
                    <a href="#"><img src="{{URL::to('img/core-img/user.svg')}}" alt=""></a>
                </div>
                
            </div>

        </div>
    </header>
    <!-- ##### Header Area End ##### -->