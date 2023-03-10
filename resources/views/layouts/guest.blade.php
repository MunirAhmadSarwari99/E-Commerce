<!DOCTYPE html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> .:: {{ config('app.name', 'MAS E-commerce') }} ::. </title>
    <meta name="keywords" content="apparel, catalog, clean, ecommerce, ecommerce HTML, electronics, fashion, html eCommerce, html store, minimal, multipurpose, multipurpose ecommerce, online store, responsive ecommerce template, shops" />
    <meta name="description" content="Best ecommerce html template for single and multi vendor store.">
    <meta name="author" content="ashishmaraviya">

    <!-- site Favicon -->
    <link rel="icon" href="{{ asset('images/favicon.png') }}" sizes="32x32" />
    <link rel="apple-touch-icon" href="{{ asset('images/favicon.png') }}" />
    <meta name="msapplication-TileImage" content="{{ asset('images/favicon.png') }}" />

    <!-- css Icon Font -->
    <link href="{{ asset('MaterialIconic/material-design-iconic-font.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('MaterialIconic/materialadmin.css') }}" rel="stylesheet"/>
    <link href="{{ asset('MaterialIconic/materialadmin_demo.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('css/css/vendor/ecicons.min.css') }}" />

    <!-- css All Plugins Files -->
    <link rel="stylesheet" href="{{ asset('css/css/plugins/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/css/plugins/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/css/plugins/jquery-ui.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/css/plugins/countdownTimer.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/css/plugins/slick.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/css/plugins/nouislider.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/css/plugins/bootstrap.css') }}" />

    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('css/css/demo1.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/jquery.rateyo.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/sweetalert2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <!-- Background css -->
    <link rel="stylesheet" id="bg-switcher-css" href="{{ asset('css/css/backgrounds/bg-4.css') }}">
    @vite(['resources/js/app.js'])
    </script><script src="{{ asset('js/vendor/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery.rateyo.min.js') }}"></script>
    @livewireStyles
</head>
<body>
<div id="ec-overlay">
    <span class="loader_img"></span>
</div>

<!-- Header start  -->
<header class="ec-header">
    <!--Ec Header Top Start -->
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <!-- Header Top social Start -->
                <div class="col text-left header-top-left d-none d-lg-block">
                    <div class="header-top-social">
                        <span class="social-text text-upper">Follow us on:</span>
                        <ul class="mb-0">
                            <li class="list-inline-item"><a class="hdr-facebook" href="#"><i class="ecicon eci-facebook"></i></a></li>
                            <li class="list-inline-item"><a class="hdr-twitter" href="#"><i class="ecicon eci-twitter"></i></a></li>
                            <li class="list-inline-item"><a class="hdr-instagram" href="#"><i class="ecicon eci-instagram"></i></a></li>
                            <li class="list-inline-item"><a class="hdr-linkedin" href="#"><i class="ecicon eci-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Header Top social End -->
                <!-- Header Top responsive Action -->
                <div class="col d-lg-none ">
                    <div class="ec-header-bottons">
                        <!-- Header User Start -->
                        <div class="ec-header-user dropdown">
                            <button class="dropdown-toggle" data-bs-toggle="dropdown">
                                <img src="{{ asset('images/icons/user.svg') }}" class="svg_img header_svg" alt="" />
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                @if (Route::has('login'))
                                    @auth
                                        @foreach(Auth::user()->roles as $role)
                                            @if($role->roleName == 'Admin')
                                                <li><a class="dropdown-item" href="{{ url('/dashboard') }}">Dashboard</a></li>
                                            @elseif($role->roleName == 'Seller')
                                                <li><a class="dropdown-item" href="{{ route('SellerDashboard.index') }}">Dashboard</a></li>
                                            @else
                                                <li><a class="dropdown-item" href="{{ route('CustomerDashboard.index') }}">Dashboard</a></li>
                                            @endif
                                        @endforeach
                                    @else
                                        <li><a class="dropdown-item" href="{{ route('login') }}">Giri?? Yap</a></li>
                                        @if (Route::has('register'))
                                            <li><a class="dropdown-item" href="{{ route('register') }}">??ye Ol</a></li>
                                        @endif
                                    @endauth
                                @endif
                            </ul>
                        </div>
                        <!-- Header User End -->
                        <a href="{{ route('Wishlist.index') }}" class="ec-header-btn ec-header-wishlist">
                            <div class="header-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -28 512.001 512" src="{{ asset('images/icons/wishlist.svg') }}" class="svg_img header_svg" alt="">
                                    <path d="m256 455.515625c-7.289062 0-14.316406-2.640625-19.792969-7.4375-20.683593-18.085937-40.625-35.082031-58.21875-50.074219l-.089843-.078125c-51.582032-43.957031-96.125-81.917969-127.117188-119.3125-34.644531-41.804687-50.78125-81.441406-50.78125-124.742187 0-42.070313 14.425781-80.882813 40.617188-109.292969 26.503906-28.746094 62.871093-44.578125 102.414062-44.578125 29.554688 0 56.621094 9.34375 80.445312 27.769531 12.023438 9.300781 22.921876 20.683594 32.523438 33.960938 9.605469-13.277344 20.5-24.660157 32.527344-33.960938 23.824218-18.425781 50.890625-27.769531 80.445312-27.769531 39.539063 0 75.910156 15.832031 102.414063 44.578125 26.191406 28.410156 40.613281 67.222656 40.613281 109.292969 0 43.300781-16.132812 82.9375-50.777344 124.738281-30.992187 37.398437-75.53125 75.355469-127.105468 119.308594-17.625 15.015625-37.597657 32.039062-58.328126 50.167969-5.472656 4.789062-12.503906 7.429687-19.789062 7.429687zm-112.96875-425.523437c-31.066406 0-59.605469 12.398437-80.367188 34.914062-21.070312 22.855469-32.675781 54.449219-32.675781 88.964844 0 36.417968 13.535157 68.988281 43.882813 105.605468 29.332031 35.394532 72.960937 72.574219 123.476562 115.625l.09375.078126c17.660156 15.050781 37.679688 32.113281 58.515625 50.332031 20.960938-18.253907 41.011719-35.34375 58.707031-50.417969 50.511719-43.050781 94.136719-80.222656 123.46875-115.617188 30.34375-36.617187 43.878907-69.1875 43.878907-105.605468 0-34.515625-11.605469-66.109375-32.675781-88.964844-20.757813-22.515625-49.300782-34.914062-80.363282-34.914062-22.757812 0-43.652344 7.234374-62.101562 21.5-16.441406 12.71875-27.894532 28.796874-34.609375 40.046874-3.453125 5.785157-9.53125 9.238282-16.261719 9.238282s-12.808594-3.453125-16.261719-9.238282c-6.710937-11.25-18.164062-27.328124-34.609375-40.046874-18.449218-14.265626-39.34375-21.5-62.097656-21.5zm0 0"></path>
                                </svg>
                            </div>
                            @if(Auth::check())
                                @foreach(Auth::user()->roles as $role)
                                    @if($role->roleName == 'Customer')
                                        <span class="ec-header-count">
                                            {{ \App\Models\Wishlist::where('user_id', Auth::user()->id)->count() }}
                                        </span>
                                    @endif
                                @endforeach
                            @endif
                        </a>
                        <!-- Header Cart Start -->
                        <a href="{{ route('Cart.index') }}" class="ec-header-btn">
                            <div class="header-icon">
                                <img src="{{ asset('images/icons/cart.svg') }}" class="svg_img header_svg" alt="" />
                                @if(Auth::check())
                                    @foreach(Auth::user()->roles as $role)
                                        @if($role->roleName == 'Customer')
                                            <span class="ec-header-count cart-count-lable CartCounter">
                                                {{ \App\Models\Cart::where('user_id', Auth::user()->id)->sum('quantity') }}
                                            </span>
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                        </a>
                        <!-- Header Cart End -->
                        <!-- Header menu Start -->
                        <a href="#ec-mobile-menu" class="ec-header-btn ec-side-toggle d-lg-none">
                            <img src="{{ asset('images/icons/menu.svg') }}" class="svg_img header_svg" alt="icon" />
                        </a>
                        <!-- Header menu End -->
                    </div>
                </div>
                <!-- Header Top responsive Action -->
            </div>
        </div>
    </div>
    <!-- Ec Header Top  End -->
    <!-- Ec Header Bottom  Start -->
    <div class="ec-header-bottom d-none d-lg-block">
        <div class="container position-relative">
            <div class="row">
                <div class="ec-flex">
                    <!-- Ec Header Logo Start -->
                    <div class="align-self-center">
                        <div class="header-logo">
                            <a href="{{ route('index') }}">
                                <img src="{{ asset('images/logo.png') }}" alt="Site Logo" />
                            </a>
                        </div>
                    </div>
                    <!-- Ec Header Logo End -->

                    <!-- Ec Header Search Start -->
                    <div class="align-self-center">
                        <div class="header-search">
                            <form class="ec-btn-group-form" action="#">
                                <input class="form-control" placeholder="Enter Your Product Name..." type="text">
                                <button class="submit" type="submit">
                                    <img src="{{ asset('images/icons/search.svg') }}" class="svg_img header_svg" alt="" />
                                </button>
                            </form>
                        </div>
                    </div>
                    <!-- Ec Header Search End -->

                    <!-- Ec Header Button Start -->
                    <div class="align-self-center">
                        <div class="ec-header-bottons">

                            <!-- Header User Start -->
                            <div class="ec-header-user dropdown">
                                <button class="dropdown-toggle" data-bs-toggle="dropdown">
                                    <img src="{{ asset('images/icons/user.svg') }}" class="svg_img header_svg" alt="" />
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    @if (Route::has('login'))
                                        @auth
                                            @foreach(Auth::user()->roles as $role)
                                                @if($role->roleName == 'Admin')
                                                    <li><a class="dropdown-item" href="{{ url('/dashboard') }}">Dashboard</a></li>
                                                @elseif($role->roleName == 'Seller')
                                                    <li><a class="dropdown-item" href="{{ route('SellerDashboard.index') }}">Dashboard</a></li>
                                                @else
                                                    <li><a class="dropdown-item" href="{{ route('CustomerDashboard.index') }}">Dashboard</a></li>
                                                @endif
                                            @endforeach

                                        @else
                                            <li><a class="dropdown-item" href="{{ route('login') }}">Giri?? Yap</a></li>
                                            @if (Route::has('register'))
                                                <li><a class="dropdown-item" href="{{ route('register') }}">??ye Ol</a></li>
                                            @endif
                                        @endauth
                                    @endif

                                </ul>
                            </div>
                            <!-- Header User End -->
                            <a href="{{ route('Wishlist.index') }}" class="ec-header-btn ec-header-wishlist">
                                <div class="header-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -28 512.001 512" src="assets/images/icons/wishlist.svg" class="svg_img header_svg" alt="">
                                        <path d="m256 455.515625c-7.289062 0-14.316406-2.640625-19.792969-7.4375-20.683593-18.085937-40.625-35.082031-58.21875-50.074219l-.089843-.078125c-51.582032-43.957031-96.125-81.917969-127.117188-119.3125-34.644531-41.804687-50.78125-81.441406-50.78125-124.742187 0-42.070313 14.425781-80.882813 40.617188-109.292969 26.503906-28.746094 62.871093-44.578125 102.414062-44.578125 29.554688 0 56.621094 9.34375 80.445312 27.769531 12.023438 9.300781 22.921876 20.683594 32.523438 33.960938 9.605469-13.277344 20.5-24.660157 32.527344-33.960938 23.824218-18.425781 50.890625-27.769531 80.445312-27.769531 39.539063 0 75.910156 15.832031 102.414063 44.578125 26.191406 28.410156 40.613281 67.222656 40.613281 109.292969 0 43.300781-16.132812 82.9375-50.777344 124.738281-30.992187 37.398437-75.53125 75.355469-127.105468 119.308594-17.625 15.015625-37.597657 32.039062-58.328126 50.167969-5.472656 4.789062-12.503906 7.429687-19.789062 7.429687zm-112.96875-425.523437c-31.066406 0-59.605469 12.398437-80.367188 34.914062-21.070312 22.855469-32.675781 54.449219-32.675781 88.964844 0 36.417968 13.535157 68.988281 43.882813 105.605468 29.332031 35.394532 72.960937 72.574219 123.476562 115.625l.09375.078126c17.660156 15.050781 37.679688 32.113281 58.515625 50.332031 20.960938-18.253907 41.011719-35.34375 58.707031-50.417969 50.511719-43.050781 94.136719-80.222656 123.46875-115.617188 30.34375-36.617187 43.878907-69.1875 43.878907-105.605468 0-34.515625-11.605469-66.109375-32.675781-88.964844-20.757813-22.515625-49.300782-34.914062-80.363282-34.914062-22.757812 0-43.652344 7.234374-62.101562 21.5-16.441406 12.71875-27.894532 28.796874-34.609375 40.046874-3.453125 5.785157-9.53125 9.238282-16.261719 9.238282s-12.808594-3.453125-16.261719-9.238282c-6.710937-11.25-18.164062-27.328124-34.609375-40.046874-18.449218-14.265626-39.34375-21.5-62.097656-21.5zm0 0"></path>
                                    </svg>
                                </div>
                                @if(Auth::check())
                                    @foreach(Auth::user()->roles as $role)
                                        @if($role->roleName == 'Customer')
                                            <span class="ec-header-count">
                                                {{ \App\Models\Wishlist::where('user_id', Auth::user()->id)->count() }}
                                            </span>
                                        @endif
                                    @endforeach
                                @endif
                            </a>
                            <!-- Header Cart Start -->
                            <a href="{{ route('Cart.index') }}" class="ec-header-btn">
                                <div class="header-icon">
                                    <img src="{{ asset('images/icons/cart.svg') }}" class="svg_img header_svg" alt="" />
                                    @if(Auth::check())
                                        @foreach(Auth::user()->roles as $role)
                                            @if($role->roleName == 'Customer')
                                                <span class="ec-header-count cart-count-lable CartCounter">
                                                    {{ \App\Models\Cart::where('user_id', Auth::user()->id)->sum('quantity') }}
                                                </span>
                                            @endif
                                        @endforeach
                                    @endif
                                </div>
                            </a>
                            <!-- Header Cart End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec Header Button End -->
    <!-- Header responsive Bottom  Start -->
    <div class="ec-header-bottom d-lg-none">
        <div class="container position-relative">
            <div class="row ">

                <!-- Ec Header Logo Start -->
                <div class="col">
                    <div class="header-logo">
                        <a href="{{ route('index') }}">
                            <img src="{{ asset('images/logo.png') }}" alt="Site Logo" />
                        </a>
                    </div>
                </div>
                <!-- Ec Header Logo End -->
                <!-- Ec Header Search Start -->
                <div class="col">
                    <div class="header-search">
                        <form class="ec-btn-group-form" action="#">
                            <input class="form-control" placeholder="Enter Your Product Name..." type="text">
                            <button class="submit" type="submit">
                                <img src="{{ asset('images/icons/search.svg') }}" class="svg_img header_svg" alt="icon" />
                            </button>
                        </form>
                    </div>
                </div>
                <!-- Ec Header Search End -->
            </div>
        </div>
    </div>
    <!-- Header responsive Bottom  End -->
    <!-- EC Main Menu Start -->
    <div id="ec-main-menu-desk" class="d-none d-lg-block sticky-nav">
        <div class="container position-relative">
            <div class="row">
                <div class="col-md-12 align-self-center">
                    <div class="ec-main-menu">
                        <ul>
                            @foreach(App\Models\Category::all() as $category)
                                <li class="dropdown"><a href="/Categories/{{{ $category->id }}}">{{ $category->categoryName }}</a>
                                <ul class="sub-menu">
                                    @foreach($category->childs as $child)
                                        <li class="dropdown position-static">
                                            <a href="/ChildCategory/{{{ $child->id }}}">
                                                {{ $child->childName }}
                                                <i class="ecicon eci-angle-right"></i>
                                            </a>
                                            <ul class="sub-menu sub-menu-child">
                                                @foreach($child->tags as $childTo)
                                                <li>
                                                    <a href="/Tag/{{{ $childTo->id }}}">
                                                        {{ $childTo->tagName }}
                                                    </a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec Main Menu End -->
    <!-- ekka Mobile Menu Start -->
    <div id="ec-mobile-menu" class="ec-side-cart ec-mobile-menu">
        <div class="ec-menu-title">
            <span class="menu_title">Men??</span>
            <button class="ec-close">??</button>
        </div>
        <div class="ec-menu-inner">
            <div class="ec-menu-content">
                <ul>
                    <li><a href="{{ route('index') }}">Home</a></li>
                    @foreach(App\Models\Category::all() as $category)
                        <li><a href="javascript:void(0)">{{ $category->categoryName }}</a>
                        <ul class="sub-menu">
                            @foreach($category->childs as $child)
                                <li>
                                    <a href="javascript:void(0)">{{ $child->childName }}</a>
                                    <ul class="sub-menu">
                                        @foreach($child->tags as $childTo)
                                            <li><a href="shop-left-sidebar-col-3.html">{{ $childTo->tagName }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <!-- ekka mobile Menu End -->
</header>
<!-- Header End  -->
{{ $slot }}
<!-- Footer Start -->
<footer class="ec-footer section-space-mt">
    <div class="footer-container">
        <div class="footer-offer">
            <div class="container">
                <div class="row">
                    <div class="text-center footer-off-msg">
                        <span>Win a contest! Get this limited-editon</span>
                        <a href="#" target="_blank">
                            View Detail
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-top section-space-footer-p">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-3 ec-footer-contact">
                        <div class="ec-footer-widget">
                            <div class="ec-footer-logo">
                                <a href="#">
                                    <img src="{{ asset('images/footer-logo.png') }}" alt="">
                                </a>
                            </div>
                            <h4 class="ec-footer-heading">Contact us</h4>
                            <div class="ec-footer-links">
                                <ul class="align-items-center">
                                    <li class="ec-footer-link">71 Pilgrim Avenue Chevy Chase, east california.</li>
                                    <li class="ec-footer-link"><span>Call Us:</span><a href="tel:+440123456789">+44
                                            0123 456 789</a></li>
                                    <li class="ec-footer-link"><span>Email:</span><a href="https://loopinfosol.in/cdn-cgi/l/email-protection#1f7a677e726f737a5f7a7c327a727e7673317c7072"><span class="__cf_email__" data-cfemail="3d1658455c504d51587d585e1058505c5451135e5250">[email&#160;protected]</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-2 ec-footer-info">
                        <div class="ec-footer-widget">
                            <h4 class="ec-footer-heading">Information</h4>
                            <div class="ec-footer-links">
                                <ul class="align-items-center">
                                    <li class="ec-footer-link"><a href="about-us.html">About us</a></li>
                                    <li class="ec-footer-link"><a href="faq.html">FAQ</a></li>
                                    <li class="ec-footer-link"><a href="track-order.html">Delivery Information</a></li>
                                    <li class="ec-footer-link"><a href="contact-us.html">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-2 ec-footer-account">
                        <div class="ec-footer-widget">
                            <h4 class="ec-footer-heading">Account</h4>
                            <div class="ec-footer-links">
                                <ul class="align-items-center">
                                    <li class="ec-footer-link"><a href="user-profile.html">My Account</a></li>
                                    <li class="ec-footer-link"><a href="track-order.html">Order History</a></li>
                                    <li class="ec-footer-link"><a href="wishlist.html">Wish List</a></li>
                                    <li class="ec-footer-link"><a href="offer.html">Specials</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-2 ec-footer-service">
                        <div class="ec-footer-widget">
                            <h4 class="ec-footer-heading">Services</h4>
                            <div class="ec-footer-links">
                                <ul class="align-items-center">
                                    <li class="ec-footer-link"><a href="track-order.html">Discount Returns</a></li>
                                    <li class="ec-footer-link"><a href="privacy-policy.html">Policy & policy </a></li>
                                    <li class="ec-footer-link"><a href="terms-condition.html">Customer Service</a></li>
                                    <li class="ec-footer-link"><a href="terms-condition.html">Term & condition</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 ec-footer-news">
                        <div class="ec-footer-widget">
                            <h4 class="ec-footer-heading">Newsletter</h4>
                            <div class="ec-footer-links">
                                <ul class="align-items-center">
                                    <li class="ec-footer-link">
                                        Get instant updates about our new products and special promos!
                                    </li>
                                </ul>
                                <div class="ec-subscribe-form">
                                    <form id="ec-newsletter-form" name="ec-newsletter-form" method="post" action="#">
                                        <div id="ec_news_signup" class="ec-form">
                                            <input class="ec-email" type="email" required="" placeholder="Enter your email here..." name="ec-email" value="" />
                                            <button id="ec-news-btn" class="button btn-primary" type="submit" name="subscribe" value="">
                                                <i class="ecicon eci-paper-plane-o" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Footer social Start -->
                    <div class="col text-left footer-bottom-left">
                        <div class="footer-bottom-social">
                            <span class="social-text text-upper">Follow us on:</span>
                            <ul class="mb-0">
                                <li class="list-inline-item"><a class="hdr-facebook" href="#"><i class="ecicon eci-facebook"></i></a></li>
                                <li class="list-inline-item"><a class="hdr-twitter" href="#"><i class="ecicon eci-twitter"></i></a></li>
                                <li class="list-inline-item"><a class="hdr-instagram" href="#"><i class="ecicon eci-instagram"></i></a></li>
                                <li class="list-inline-item"><a class="hdr-linkedin" href="#"><i class="ecicon eci-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer social End -->
                    <!-- Footer Copyright Start -->
                    <div class="col text-center footer-copy">
                        <div class="footer-bottom-copy ">
                            <div class="ec-copy">
                                Copyright ?? 2023
                                <a class="site-name text-upper" href="#">
                                    ekka <span>.</span>
                                </a>
                                . All Rights Reserved
                            </div>
                        </div>
                    </div>
                    <!-- Footer Copyright End -->
                    <!-- Footer payment -->
                    <div class="col footer-bottom-right">
                        <div class="footer-bottom-payment d-flex justify-content-end">
                            <div class="payment-link">
                                <img src="{{ asset('images/icons/payment.png') }}" alt="">
                            </div>

                        </div>
                    </div>
                    <!-- Footer payment -->
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End -->



<!-- Footer navigation panel for responsive display -->
<div class="ec-nav-toolbar">
    <div class="container">
        <div class="ec-nav-panel">
            <div class="ec-nav-panel-icons">
                <a href="#ec-mobile-menu" class="navbar-toggler-btn ec-header-btn ec-side-toggle">
                    <img src="{{ asset('images/icons/menu.svg') }}" class="svg_img header_svg" alt="icon" />
                </a>
            </div>
            <div class="ec-nav-panel-icons">
                <a href="{{ route('Cart.index') }}" class="toggle-cart ec-header-btn">
                    <img src="{{ asset('images/icons/cart.svg') }}" class="svg_img header_svg" alt="icon" />
                    @if(Auth::check())
                        @foreach(Auth::user()->roles as $role)
                            @if($role->roleName == 'Customer')
                                <span class="ec-cart-noti ec-header-count cart-count-lable CartCounter">
                                    {{ \App\Models\Cart::where('user_id', Auth::user()->id)->sum('quantity') }}
                                </span>
                            @endif
                        @endforeach
                    @endif
                </a>
            </div>
            <div class="ec-nav-panel-icons">
                <a href="{{ route('index') }}" class="ec-header-btn">
                    <img src="{{ asset('images/icons/home.svg') }}" class="svg_img header_svg" alt="icon" />
                </a>
            </div>
            <div class="ec-nav-panel-icons">
                <a href="{{ route('Wishlist.index') }}" class="ec-header-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -28 512.001 512" src="assets/images/icons/wishlist.svg" class="svg_img header_svg" alt="icon">
                        <path d="m256 455.515625c-7.289062 0-14.316406-2.640625-19.792969-7.4375-20.683593-18.085937-40.625-35.082031-58.21875-50.074219l-.089843-.078125c-51.582032-43.957031-96.125-81.917969-127.117188-119.3125-34.644531-41.804687-50.78125-81.441406-50.78125-124.742187 0-42.070313 14.425781-80.882813 40.617188-109.292969 26.503906-28.746094 62.871093-44.578125 102.414062-44.578125 29.554688 0 56.621094 9.34375 80.445312 27.769531 12.023438 9.300781 22.921876 20.683594 32.523438 33.960938 9.605469-13.277344 20.5-24.660157 32.527344-33.960938 23.824218-18.425781 50.890625-27.769531 80.445312-27.769531 39.539063 0 75.910156 15.832031 102.414063 44.578125 26.191406 28.410156 40.613281 67.222656 40.613281 109.292969 0 43.300781-16.132812 82.9375-50.777344 124.738281-30.992187 37.398437-75.53125 75.355469-127.105468 119.308594-17.625 15.015625-37.597657 32.039062-58.328126 50.167969-5.472656 4.789062-12.503906 7.429687-19.789062 7.429687zm-112.96875-425.523437c-31.066406 0-59.605469 12.398437-80.367188 34.914062-21.070312 22.855469-32.675781 54.449219-32.675781 88.964844 0 36.417968 13.535157 68.988281 43.882813 105.605468 29.332031 35.394532 72.960937 72.574219 123.476562 115.625l.09375.078126c17.660156 15.050781 37.679688 32.113281 58.515625 50.332031 20.960938-18.253907 41.011719-35.34375 58.707031-50.417969 50.511719-43.050781 94.136719-80.222656 123.46875-115.617188 30.34375-36.617187 43.878907-69.1875 43.878907-105.605468 0-34.515625-11.605469-66.109375-32.675781-88.964844-20.757813-22.515625-49.300782-34.914062-80.363282-34.914062-22.757812 0-43.652344 7.234374-62.101562 21.5-16.441406 12.71875-27.894532 28.796874-34.609375 40.046874-3.453125 5.785157-9.53125 9.238282-16.261719 9.238282s-12.808594-3.453125-16.261719-9.238282c-6.710937-11.25-18.164062-27.328124-34.609375-40.046874-18.449218-14.265626-39.34375-21.5-62.097656-21.5zm0 0"></path>
                    </svg>
                    @if(Auth::check())
                        @foreach(Auth::user()->roles as $role)
                            @if($role->roleName == 'Customer')
                                <span class="ec-cart-noti">
                                    {{ \App\Models\Wishlist::where('user_id', Auth::user()->id)->count() }}
                                </span>
                            @endif
                        @endforeach
                    @endif
                </a>
            </div>
            <div class="ec-nav-panel-icons">
                @if (Route::has('login'))
                    @auth
                        @foreach(Auth::user()->roles as $role)
                            @if($role->roleName == 'Admin')
                                <a href="{{ url('/dashboard') }}" class="ec-header-btn">
                                    <img src="{{ asset('images/icons/user.svg') }}" class="svg_img header_svg" alt="icon" />
                                </a>
                            @elseif($role->roleName == 'Seller')
                                <a href="{{ route('SellerDashboard.index') }}" class="ec-header-btn">
                                    <img src="{{ asset('images/icons/user.svg') }}" class="svg_img header_svg" alt="icon" />
                                </a>
                            @else
                                <a href="{{ route('CustomerDashboard.index') }}" class="ec-header-btn">
                                    <img src="{{ asset('images/icons/user.svg') }}" class="svg_img header_svg" alt="icon" />
                                </a>
                            @endif
                        @endforeach
                    @else
                        <a href="{{ route('login') }}" class="ec-header-btn">
                            <img src="{{ asset('images/icons/user.svg') }}" class="svg_img header_svg" alt="icon" />
                        </a>
                    @endauth
                @endif
            </div>

        </div>
    </div>
</div>

<!-- Footer navigation panel for responsive display end -->

<!-- Cart Floating Button -->
<div class="ec-cart-float">
    <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
        <div class="header-icon">
            <img src="{{ asset('images/icons/cart.svg') }}" class="svg_img header_svg" alt="cart" />
        </div>
    </a>
</div>
<!-- Cart Floating Button end -->


<!-- Vendor JS -->
@livewireScripts

<script src="{{ asset('js/vendor/popper.min.js') }}"></script>
<script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
<script src="{{ asset('js/vendor/modernizr-3.11.2.min.js') }}"></script>

<!--Plugins JS-->
<script src="{{ asset('js/plugins/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('js/plugins/countdownTimer.min.js') }}"></script>
<script src="{{ asset('js/plugins/scrollup.js') }}"></script>
<script src="{{ asset('js/plugins/jquery.zoom.min.js') }}"></script>
<script src="{{ asset('js/plugins/slick.min.js') }}"></script>
<script src="{{ asset('js/plugins/infiniteslidev2.js') }}"></script>
<script src="{{ asset('js/vendor/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/plugins/jquery.sticky-sidebar.js') }}"></script>

<!-- Main Js -->
<script src="{{ asset('js/vendor/index.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
<script src="{{ asset('js/PublicApp.js') }}"></script>
<script src="{{ asset('js/Ajax.js') }}"></script>
<script>
    $(function () {
        $("#rateYo").rateYo({
            spacing: "5px",
            onChange: function (rating, rateYoInstance) {
                $('input[name=rating]').val(rating);
            }
        });
    });
</script>
</body>
</html>
