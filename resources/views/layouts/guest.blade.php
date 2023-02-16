<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- ===== META TAGS ===== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- ===== CSS STYLESHEET ===== -->
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/leaflet.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/vendors.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

</head>

<body class="preloader-visible" data-barba="wrapper">
<!-- ===== PRELOADER START ===== -->
<div class="preloader js-preloader">
    <div class="preloader__bg"></div>
</div>

<!-- ===== MAIN CONTENT ===== -->
<main class="main-content  ">
    <!-- ===== NAVBAR HEADER ===== -->
    <header data-anim="fade" data-add-bg="bg-dark-1" class="header -type-1 js-header">
        <div class="header__container">
            <div class="row justify-between items-center">
                <div class="col-auto">
                    <div class="header-left">

                        <div class="header__logo ">
                            <a data-barba href="{{ route('index') }}">
                                <img style="width: 80px;" src="{{ asset('images/logo.png') }}" alt="logo">
                            </a>
                        </div>

                        <div class="header__explore text-green-1 ml-60 xl:ml-30 xl:d-none">
                            <div class="explore-content py-25 rounded-8 bg-white toggle-element js-explore-toggle">

                                <div class="explore__item">
                                    <a href="#" class="d-flex items-center justify-between text-dark-1">
                                        Architecture
                                        <div class="icon-chevron-right text-11"></div>
                                    </a>
                                    <div class="explore__subnav rounded-8">
                                        <a class="text-dark-1" href="courses-single-1.html">Web Design</a>
                                        <a class="text-dark-1" href="courses-single-2.html">Graphic Design</a>
                                        <a class="text-dark-1" href="courses-single-3.html">Design Tools</a>
                                        <a class="text-dark-1" href="courses-single-4.html">User Experience Design</a>
                                        <a class="text-dark-1" href="courses-single-5.html">Game Design</a>
                                        <a class="text-dark-1" href="courses-single-6.html">3D & Animation</a>
                                        <a class="text-dark-1" href="courses-single-1.html">Fashion Design</a>
                                        <a class="text-dark-1" href="courses-single-2.html">Interior Design</a>
                                    </div>
                                </div>

                                <div class="explore__item">
                                    <a href="#" class="d-flex items-center justify-between text-dark-1">
                                        Business<div class="icon-chevron-right text-11"></div>
                                    </a>
                                    <div class="explore__subnav rounded-8">
                                        <a class="text-dark-1" href="courses-single-1.html">Web Design</a>
                                        <a class="text-dark-1" href="courses-single-2.html">Graphic Design</a>
                                        <a class="text-dark-1" href="courses-single-3.html">Design Tools</a>
                                        <a class="text-dark-1" href="courses-single-4.html">User Experience Design</a>
                                        <a class="text-dark-1" href="courses-single-5.html">Game Design</a>
                                        <a class="text-dark-1" href="courses-single-6.html">3D & Animation</a>
                                        <a class="text-dark-1" href="courses-single-1.html">Fashion Design</a>
                                        <a class="text-dark-1" href="courses-single-2.html">Interior Design</a>
                                    </div>
                                </div>


                                <div class="explore__item">
                                    <a href="#" class="text-dark-1">Computer Programming</a>
                                </div>

                                <div class="explore__item">
                                    <a href="#" class="text-dark-1">Data Analysis</a>
                                </div>


                                <div class="explore__item">
                                    <a href="#" class="d-flex items-center justify-between text-dark-1">
                                        Design<div class="icon-chevron-right text-11"></div>
                                    </a>
                                    <div class="explore__subnav rounded-8">
                                        <a class="text-dark-1" href="courses-single-1.html">Web Design</a>
                                        <a class="text-dark-1" href="courses-single-2.html">Graphic Design</a>
                                        <a class="text-dark-1" href="courses-single-3.html">Design Tools</a>
                                        <a class="text-dark-1" href="courses-single-4.html">User Experience Design</a>
                                        <a class="text-dark-1" href="courses-single-5.html">Game Design</a>
                                        <a class="text-dark-1" href="courses-single-6.html">3D & Animation</a>
                                        <a class="text-dark-1" href="courses-single-1.html">Fashion Design</a>
                                        <a class="text-dark-1" href="courses-single-2.html">Interior Design</a>
                                    </div>
                                </div>

                                <div class="explore__item">
                                    <a href="courses-single-6.html" class="text-dark-1">Education</a>
                                </div>


                                <div class="explore__item">
                                    <a href="#" class="d-flex items-center justify-between text-dark-1">
                                        Electronics<div class="icon-chevron-right text-11"></div>
                                    </a>
                                    <div class="explore__subnav rounded-8">
                                        <a class="text-dark-1" href="courses-single-1.html">Web Design</a>
                                        <a class="text-dark-1" href="courses-single-2.html">Graphic Design</a>
                                        <a class="text-dark-1" href="courses-single-3.html">Design Tools</a>
                                        <a class="text-dark-1" href="courses-single-4.html">User Experience Design</a>
                                        <a class="text-dark-1" href="courses-single-5.html">Game Design</a>
                                        <a class="text-dark-1" href="courses-single-6.html">3D & Animation</a>
                                        <a class="text-dark-1" href="courses-single-1.html">Fashion Design</a>
                                        <a class="text-dark-1" href="courses-single-2.html">Interior Design</a>
                                    </div>
                                </div>

                                <div class="explore__item">
                                    <a href="#" class="d-flex items-center justify-between text-dark-1">
                                        Language<div class="icon-chevron-right text-11"></div>
                                    </a>
                                    <div class="explore__subnav rounded-8">
                                        <a class="text-dark-1" href="courses-single-1.html">Web Design</a>
                                        <a class="text-dark-1" href="courses-single-2.html">Graphic Design</a>
                                        <a class="text-dark-1" href="courses-single-3.html">Design Tools</a>
                                        <a class="text-dark-1" href="courses-single-4.html">User Experience Design</a>
                                        <a class="text-dark-1" href="courses-single-5.html">Game Design</a>
                                        <a class="text-dark-1" href="courses-single-6.html">3D & Animation</a>
                                        <a class="text-dark-1" href="courses-single-1.html">Fashion Design</a>
                                        <a class="text-dark-1" href="courses-single-2.html">Interior Design</a>
                                    </div>
                                </div>

                                <div class="explore__item">
                                    <a href="#" class="d-flex items-center justify-between text-dark-1">
                                        Marketing<div class="icon-chevron-right text-11"></div>
                                    </a>
                                    <div class="explore__subnav rounded-8">
                                        <a class="text-dark-1" href="courses-single-1.html">Web Design</a>
                                        <a class="text-dark-1" href="courses-single-2.html">Graphic Design</a>
                                        <a class="text-dark-1" href="courses-single-3.html">Design Tools</a>
                                        <a class="text-dark-1" href="courses-single-4.html">User Experience Design</a>
                                        <a class="text-dark-1" href="courses-single-5.html">Game Design</a>
                                        <a class="text-dark-1" href="courses-single-6.html">3D & Animation</a>
                                        <a class="text-dark-1" href="courses-single-1.html">Fashion Design</a>
                                        <a class="text-dark-1" href="courses-single-2.html">Interior Design</a>
                                    </div>
                                </div>


                                <div class="explore__item">
                                    <a href="#" class="text-dark-1">Music Arts</a>
                                </div>

                                <div class="explore__item">
                                    <a href="#" class="text-dark-1">Social Science</a>
                                </div>


                                <div class="explore__item">
                                    <a href="#" class="d-flex items-center justify-between text-dark-1">
                                        Photography & Video<div class="icon-chevron-right text-11"></div>
                                    </a>
                                    <div class="explore__subnav rounded-8">
                                        <a class="text-dark-1" href="courses-single-1.html">Web Design</a>
                                        <a class="text-dark-1" href="courses-single-2.html">Graphic Design</a>
                                        <a class="text-dark-1" href="courses-single-3.html">Design Tools</a>
                                        <a class="text-dark-1" href="courses-single-4.html">User Experience Design</a>
                                        <a class="text-dark-1" href="courses-single-5.html">Game Design</a>
                                        <a class="text-dark-1" href="courses-single-6.html">3D & Animation</a>
                                        <a class="text-dark-1" href="courses-single-1.html">Fashion Design</a>
                                        <a class="text-dark-1" href="courses-single-2.html">Interior Design</a>
                                    </div>
                                </div>

                                <div class="explore__item">
                                    <a href="courses-single-1.html" class="text-dark-1">IT & Software</a>
                                </div>

                                <div class="explore__item">
                                    <a href="courses-single-2.html" class="text-purple-1 underline">View All Courses</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="header-menu js-mobile-menu-toggle ">
                    <div class="header-menu__content">
                        <div class="mobile-bg js-mobile-bg"></div>

                        <div class="d-none xl:d-flex items-center px-20 py-20 border-bottom-light">
                            @if (Route::has('login'))
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="text-dark-1 ml-30">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="text-dark-1 ml-30">Giriş Yap</a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="text-dark-1 ml-30">Üye Ol</a>
                                    @endif
                                @endauth
                            @endif
                        </div>

                        <div class="menu js-navList">
                            <ul class="menu__nav text-white -is-active" style="width: 100%;">

                                <li>
                                    <a data-barba href="{{ route('index') }}">Anasayfa</a>
                                </li>

                                @foreach(App\Models\Category::all() as $category)
                                <li class="menu-item-has-children">
                                    <a data-barba href="#">
                                        {{ $category->categoryName }} <i class="icon-chevron-right text-13 ml-10"></i>
                                    </a>
                                    <ul class="subnav">
                                        @foreach($category->childs as $child)
                                            @if($child->childName)
                                            <li class="menu-item-has-children">
                                                <a href="#">{{ $child->childName }}<div class="icon-chevron-right text-11"></div></a>

                                                <ul class="subnav">
                                                    @foreach($child->ChildToChild as $childTo)
                                                        <li>
                                                            <a href="about-1.html">{{ $childTo->childName }}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </li>
                                @endforeach
                                <li>
                                    <a data-barba href="contact-1.html">Contact</a>
                                </li>
                            </ul>
                        </div>

                        <div class="mobile-footer px-20 py-20 border-top-light js-mobile-footer">
                            <div class="mobile-footer__number">
                                <div class="text-17 fw-500 text-dark-1">Call us</div>
                                <div class="text-17 fw-500 text-purple-1">800 388 80 90</div>
                            </div>

                            <div class="lh-2 mt-10">
                                <div>329 Queensberry Street,<br> North Melbourne VIC 3051, Australia.</div>
                                <div>hi@educrat.com</div>
                            </div>

                            <div class="mobile-socials mt-10">

                                <a href="#" class="d-flex items-center justify-center rounded-full size-40">
                                    <i class="fa fa-facebook"></i>
                                </a>

                                <a href="#" class="d-flex items-center justify-center rounded-full size-40">
                                    <i class="fa fa-twitter"></i>
                                </a>

                                <a href="#" class="d-flex items-center justify-center rounded-full size-40">
                                    <i class="fa fa-instagram"></i>
                                </a>

                                <a href="#" class="d-flex items-center justify-center rounded-full size-40">
                                    <i class="fa fa-linkedin"></i>
                                </a>

                            </div>
                        </div>
                    </div>

                    <div class="header-menu-close" data-el-toggle=".js-mobile-menu-toggle">
                        <div class="size-40 d-flex items-center justify-center rounded-full bg-white">
                            <div class="icon-close text-dark-1 text-16"></div>
                        </div>
                    </div>

                    <div class="header-menu-bg"></div>
                </div>


                <div class="col-auto">
                    <div class="header-right d-flex items-center">
                        <div class="header-right__icons text-white d-flex items-center">
                            <div class="d-none xl:d-block ml-20">
                                <button class="text-white items-center" data-el-toggle=".js-mobile-menu-toggle">
                                    <i class="text-11 icon icon-mobile-menu"></i>
                                </button>
                            </div>
                        </div>

                        <div class="header-right__buttons d-flex items-center ml-30 md:d-none">
                            @if (Route::has('login'))
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="button -sm -white text-dark-1 ml-30">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="button -sm -white text-dark-1 ml-30">Giriş Yap</a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="button -sm -white text-dark-1 ml-30">Üye Ol</a>
                                    @endif
                                @endauth
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </header>
    <div class="content-wrapper  js-content-wrapper">
        <!-- ===== BODY ===== -->
        {{ $slot }}

        <footer class="footer -type-1 bg-dark-1 -green-links">
            <div class="container">
                <div class="footer-header">
                    <div class="row y-gap-20 justify-between items-center">
                        <div class="col-auto">
                            <div class="footer-header__logo">
                                <img style="width: 150px;" src="{{ asset('images/logo.png') }}" alt="logo">
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="footer-header-socials">
                                <div class="footer-header-socials__title text-white">Follow us on social media</div>
                                <div class="footer-header-socials__list">
                                    <a href="#"><i class="icon-facebook"></i></a>
                                    <a href="#"><i class="icon-twitter"></i></a>
                                    <a href="#"><i class="icon-instagram"></i></a>
                                    <a href="#"><i class="icon-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer-columns">
                    <div class="row y-gap-30">
                        <div class="col-xl-2 col-lg-4 col-md-6">
                            <div class="text-17 fw-500 text-white uppercase mb-25">ABOUT</div>
                            <div class="d-flex y-gap-10 flex-column">
                                <a href="about-1.html">About Us</a>
                                <a href="blog-list-1.html">Learner Stories</a>
                                <a href="instructor-become.html">Careers</a>
                                <a href="blog-list-1.html">Press</a>
                                <a href="#">Leadership</a>
                                <a href="contact-1.html">Contact Us</a>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-8">
                            <div class="text-17 fw-500 text-white uppercase mb-25">CATEGORIES</div>
                            <div class="row justify-between y-gap-20">
                                <div class="col-md-6">
                                    <div class="d-flex y-gap-10 flex-column">
                                        <a href="courses-single-1.html">Development</a>
                                        <a href="courses-single-2.html">Business</a>
                                        <a href="courses-single-3.html">Finance & Accounting</a>
                                        <a href="courses-single-4.html">IT & Software</a>
                                        <a href="courses-single-5.html">Office Productivity</a>
                                        <a href="courses-single-6.html">Design</a>
                                        <a href="courses-single-1.html">Marketing</a>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="d-flex y-gap-10 flex-column">
                                        <a href="courses-single-1.html">Lifiestyle</a>
                                        <a href="courses-single-2.html">Photography & Video</a>
                                        <a href="courses-single-3.html">Health & Fitness</a>
                                        <a href="courses-single-4.html">Music</a>
                                        <a href="courses-single-5.html">UX Design</a>
                                        <a href="courses-single-6.html">Seo</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-2 offset-xl-1 col-lg-4 col-md-6">
                            <div class="text-17 fw-500 text-white uppercase mb-25">SUPPORT</div>
                            <div class="d-flex y-gap-10 flex-column">
                                <a href="terms.html">Documentation</a>
                                <a href="help-center.html">FAQS</a>
                                <a href="dashboard.html">Dashboard</a>
                                <a href="contact-1.html">Contact</a>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="text-17 fw-500 text-white uppercase mb-25">GET IN TOUCH</div>
                            <div class="footer-columns-form">
                                <div>We don’t send spam so don’t worry.</div>
                                <form action="https://creativelayers.net/themes/educrat-html/post">
                                    <div class="form-group">
                                        <input type="text" placeholder="Email...">
                                        <button type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="py-30 border-top-light-15">
                    <div class="row justify-between items-center y-gap-20">
                        <div class="col-auto">
                            <div class="d-flex items-center h-100 text-white">
                                © 2022 Educrat. All Right Reserved.
                            </div>
                        </div>

                        <div class="col-auto">
                            <div class="d-flex x-gap-20 y-gap-20 items-center flex-wrap">
                                <div>
                                    <div class="d-flex x-gap-15 text-white">
                                        <a href="help-center.html">Help</a>
                                        <a href="terms.html">Privacy Policy</a>
                                        <a href="terms.html">Cookie Notice</a>
                                        <a href="terms.html">Security</a>
                                        <a href="terms.html">Terms of Use</a>
                                    </div>
                                </div>

                                <div>
                                    <a href="#" class="button px-30 h-50 -dark-6 rounded-200 text-white">
                                        <i class="icon-worldwide text-20 mr-15"></i><span class="text-15">English</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</main>

<!-- JavaScript -->
<script src="{{ asset('js/leaflet.js') }}" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
<script src="{{ asset('js/vendors.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
