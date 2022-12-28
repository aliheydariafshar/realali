<!DOCTYPE html>
<html dir="rtl" lang="fa-IR">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content="سایت شخصی علی حیدری"/>

    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('assets/css/reset.css')}}" type="text/css">
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('assets/css/bootstrap-grid.min.css')}}"
          type="text/css">
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('assets/css/animations.css')}}"
          type="text/css">
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('assets/css/perfect-scrollbar.css')}}"
          type="text/css">
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('assets/css/owl.carousel.css')}}"
          type="text/css">
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('assets/css/magnific-popup.css')}}"
          type="text/css">
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('assets/css/dark-1.css')}}" type="text/css">
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('assets/css/rtl.css')}}" type="text/css">
    {!! htmlScriptTagJsApi([
               'action' => 'homepage',
               'callback_then' => 'callbackThen',
               'callback_catch' => 'callbackCatch'
           ]) !!}
    <link rel="shortcut icon" type="image/x-icon" href="{{\Illuminate\Support\Facades\URL::asset('assets/img/ali.png')}}"/>

    {{--    reCaptcha::htmlFormSnippet()--}}
</head>

<body>
<!-- Animated Background -->
<div class="lm-animated-bg transition"
     style="background-image: url('assets/img/main_bg.png'); background-position: calc(50% + 9.42109px) calc(50% + 1.14472px);"></div>
<!-- /Animated Background -->

<!-- Loading animation -->
{{--<div class="preloader">--}}
{{--    <div class="preloader-animation">--}}
{{--        <div class="preloader-spinner">--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- /Loading animation -->

<div class="page">
    @if(Session::has('success'))
        <div class="alert alert-success" style="margin-top: 50px">
            {{ Session::get('success') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger" style="margin-top: 50px">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="page-content">
        <header id="site_header" class="header mobile-menu-hide">
            <div class="header-content">
                <div class="header-photo">
                    <img src="{{\Illuminate\Support\Facades\URL::asset('assets/img/profile.jpeg')}}" alt="علی حیدری">
                </div>
                <div class="header-titles">
                    <h2>علی حیدری</h2>
                </div>
            </div>

            <ul class="main-menu">
                <li class="active">
                    <a href="#home" class="nav-anim">
                        <span class="menu-icon lnr lnr-home"></span>
                        <span class="link-text">خانه</span>
                    </a>
                </li>
                <li>
                    <a href="#about-me" class="nav-anim">
                        <span class="menu-icon lnr lnr-user"></span>
                        <span class="link-text">درباره من</span>
                    </a>
                </li>
                <li>
                    <a href="#resume" class="nav-anim">
                        <span class="menu-icon lnr lnr-graduation-hat"></span>
                        <span class="link-text">رزومه</span>
                    </a>
                </li>
                {{--                <li>--}}
                {{--                    <a href="#portfolio" class="nav-anim">--}}
                {{--                        <span class="menu-icon lnr lnr-briefcase"></span>--}}
                {{--                        <span class="link-text">نمونه کار</span>--}}
                {{--                    </a>--}}
                {{--                </li>--}}
                <li>
                    <a href="#blog" class="nav-anim">
                        <span class="menu-icon lnr lnr-book"></span>
                        <span class="link-text">بلاگ</span>
                    </a>
                </li>
                <li>
                    <a href="#contact" class="nav-anim">
                        <span class="menu-icon lnr lnr-envelope"></span>
                        <span class="link-text">تماس با من</span>
                    </a>
                </li>
            </ul>

            <div class="social-links">
                <ul>
                    <li><a href="https://www.linkedin.com/in/heydariali" target="_blank"><i
                                class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="https://github.com/aliheydariafshar" target="_blank"><i class="fab fa-github"></i></a>
                    </li>
                    <li><a href="https://t.me/heydari_ali" target="_blank"><i class="fab fa-telegram"></i></a></li>
                </ul>
            </div>

            <div class="header-buttons">
                <a href="{{\Illuminate\Support\Facades\URL::asset('assets/myfiles/resume.pdf')}}"
                   target="_blank"
                   class="btn btn-primary">دانلود رزومه</a>
            </div>

            {{--            <div class="copyrights">© تمام حقوق محفوظ می باشند - ارائه اختصاصی در راستچین</div>--}}
        </header>

        <!-- Mobile Navigation -->
        <div class="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <!-- End Mobile Navigation -->

        <!-- Arrows Nav -->
        <div class="lmpixels-arrows-nav">
            <div class="lmpixels-arrow-right"><i class="lnr lnr-chevron-left"></i></div>
            <div class="lmpixels-arrow-left"><i class="lnr lnr-chevron-right"></i></div>
        </div>
        <!-- End Arrows Nav -->

        <div class="content-area">
            <div class="animated-sections">
                <!-- Home Subpage -->
                <section data-id="home" class="animated-section start-page">
                    <div class="section-content vcentered">

                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="title-block">
                                    <img height="100" src="{{\Illuminate\Support\Facades\URL::asset('assets/img/ali.png')}}"
                                         alt="" style="margin-right: auto;margin-left: auto;">
                                    <div class="owl-carousel text-rotation">
                                        {{--                                        <div class="item">--}}
                                        {{--                                            <div class="sp-subtitle">طراح سایت</div>--}}
                                        {{--                                        </div>--}}
                                        <div class="item">
                                            <div class="sp-subtitle">Back End Developer</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <!-- End of Home Subpage -->

                <!-- About Me Subpage -->
                <section data-id="about-me" class="animated-section">
                    <div class="page-title">
                        <h2>درباره <span>من</span></h2>
                    </div>

                    <div class="section-content">
                        <!-- Personal Information -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-7">
                                <p>
                                    برنامه نویس و توسعه دهنده وب دارای تجربه در توسعه لایه های مختلف نرم‌افزار، پایبند به اصول مهندسی نرم‌افزار و clean code
                                    در توسعه اپلیکیشن ها
                                </p>
                            </div>

                            <div class="col-xs-12 col-sm-5">
                                <div class="info-list">
                                    <ul>
                                        <li>
                                            <span class="title">متولد</span>
                                            <span class="value">1375</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End of Personal Information -->

                        <div class="white-space-50"></div>

                        <!-- Services -->
                        {{--                        <div class="row">--}}
                        {{--                            <div class="col-xs-12 col-sm-12">--}}
                        {{--                                <div class="block-title">--}}
                        {{--                                    <h3>من <span>چیکار میکنم؟</span></h3>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}

                        {{--                        <div class="row">--}}
                        {{--                            <div class="col-xs-12 col-sm-6">--}}
                        {{--                                <div class="col-inner">--}}
                        {{--                                    <div class="info-list-w-icon">--}}
                        {{--                                        <div class="info-block-w-icon">--}}
                        {{--                                            <div class="ci-icon">--}}
                        {{--                                                <i class="fa fa-desktop"></i>--}}
                        {{--                                            </div>--}}
                        {{--                                            <div class="ci-text">--}}
                        {{--                                                <h4>برنامه نویسی وب با لاراول</h4>--}}
                        {{--                                                <p>--}}
                        {{--                                                    برنامه نویسی انواع سایت های فروشگاهی، شرکتی، خبری،...با فریمورک--}}
                        {{--                                                    لاراول--}}
                        {{--                                                </p>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                        <div class="info-block-w-icon">--}}
                        {{--                                            <div class="ci-icon">--}}
                        {{--                                                <i class="fa fa-mobile-alt"></i>--}}
                        {{--                                            </div>--}}
                        {{--                                            <div class="ci-text">--}}
                        {{--                                                <h4>api نویسی با لاراول</h4>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}

                        {{--                            <div class="col-xs-12 col-sm-6">--}}
                        {{--                                <div class="col-inner">--}}
                        {{--                                    <div class="info-block-w-icon">--}}
                        {{--                                        <div class="info-block-w-icon">--}}
                        {{--                                            <div class="ci-icon">--}}
                        {{--                                                <i class="fa fa-expand"></i>--}}
                        {{--                                            </div>--}}
                        {{--                                            <div class="ci-text">--}}
                        {{--                                                <h4>توسعه سایت</h4>--}}
                        {{--                                                <p>--}}
                        {{--                                                    توسعه انواع سایت های لاراولی و افزودن امکانات جدید--}}
                        {{--                                                </p>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                                <div class="col-inner">--}}
                        {{--                                    <div class="info-list-w-icon">--}}
                        {{--                                        <div class="info-block-w-icon">--}}
                        {{--                                            <div class="ci-icon">--}}
                        {{--                                                <i class="fa fa-wrench"></i>--}}
                        {{--                                            </div>--}}
                        {{--                                            <div class="ci-text">--}}
                        {{--                                                <h4>دیباگ</h4>--}}
                        {{--                                                <p>--}}
                        {{--                                                    دیباگ انواع سایت های لاراولی--}}
                        {{--                                                </p>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        <!-- End of Services -->

                        <div class="white-space-30"></div>

                        {{--                        <!-- Testimonials -->--}}
                        {{--                        <div class="row">--}}
                        {{--                            <div class="col-xs-12 col-sm-12">--}}
                        {{--                                <div class="block-title">--}}
                        {{--                                    <h3>نظر مشتریان</h3>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}

                        {{--                        <div class="row">--}}
                        {{--                            <div class="col-xs-12 col-sm-12">--}}
                        {{--                                <div class="testimonials owl-carousel">--}}
                        {{--                                    <!-- Testimonial 1 -->--}}
                        {{--                                    <div class="testimonial">--}}
                        {{--                                        <div class="img">--}}
                        {{--                                            <img src="{{asset('assets/img/testimonials/testimonial-1.jpg')}}" alt="علی حیدری">--}}
                        {{--                                        </div>--}}
                        {{--                                        <div class="text">--}}
                        {{--                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است </p>--}}
                        {{--                                        </div>--}}

                        {{--                                        <div class="author-info">--}}
                        {{--                                            <h4 class="author">هومن سیدی</h4>--}}
                        {{--                                            <h5 class="company">ابد و یک روز</h5>--}}
                        {{--                                            <div class="icon">--}}
                        {{--                                                <i class="fas fa-quote-right"></i>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                    <!-- End of Testimonial 1 -->--}}

                        {{--                                    <!-- Testimonial 2 -->--}}
                        {{--                                    <div class="testimonial">--}}
                        {{--                                        <div class="img">--}}
                        {{--                                            <img src="{{asset('assets/img/testimonials/testimonial-2.jpg')}}" alt="علی حیدری">--}}
                        {{--                                        </div>--}}
                        {{--                                        <div class="text">--}}
                        {{--                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است </p>--}}
                        {{--                                        </div>--}}

                        {{--                                        <div class="author-info">--}}
                        {{--                                            <h4 class="author">رامبد جوان</h4>--}}
                        {{--                                            <h5 class="company">برنامه خندوانه</h5>--}}
                        {{--                                            <div class="icon">--}}
                        {{--                                                <i class="fas fa-quote-right"></i>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                    <!-- End of Testimonial 2 -->--}}

                        {{--                                    <!-- Testimonial 3 -->--}}
                        {{--                                    <div class="testimonial">--}}
                        {{--                                        <div class="img">--}}
                        {{--                                            <img src="{{asset('assets/img/testimonials/testimonial-3.jpg')}}" alt="علی حیدری">--}}
                        {{--                                        </div>--}}
                        {{--                                        <div class="text">--}}
                        {{--                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است </p>--}}
                        {{--                                        </div>--}}

                        {{--                                        <div class="author-info">--}}
                        {{--                                            <h4 class="author">علی کشاورز</h4>--}}
                        {{--                                            <h5 class="company">فروشگاه جو</h5>--}}
                        {{--                                            <div class="icon">--}}
                        {{--                                                <i class="fas fa-quote-right"></i>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                    <!-- End of Testimonial 3 -->--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                        <!-- End of Testimonials -->--}}

                        <div class="white-space-50"></div>

                        {{--                        <!-- Clients -->--}}
                        {{--                        <div class="row">--}}
                        {{--                            <div class="col-xs-12 col-sm-12">--}}
                        {{--                                <div class="block-title">--}}
                        {{--                                    <h3>مشتریان</h3>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}

                        {{--                        <div class="row">--}}
                        {{--                            <div class="col-xs-12 col-sm-12">--}}
                        {{--                                <div class="clients owl-carousel">--}}

                        {{--                                    <div class="client-block">--}}
                        {{--                                        <a href="#" target="_blank" title="لوگو">--}}
                        {{--                                            <img src="{{asset('assets/img/clients/client-1.png')}}" alt="لوگو">--}}
                        {{--                                        </a>--}}
                        {{--                                    </div>--}}

                        {{--                                    <div class="client-block">--}}
                        {{--                                        <a href="#" target="_blank" title="لوگو">--}}
                        {{--                                            <img src="{{asset('assets/img/clients/client-2.png')}}" alt="لوگو">--}}
                        {{--                                        </a>--}}
                        {{--                                    </div>--}}

                        {{--                                    <div class="client-block">--}}
                        {{--                                        <a href="#" target="_blank" title="لوگو">--}}
                        {{--                                            <img src="{{asset('assets/img/clients/client-3.png')}}" alt="لوگو">--}}
                        {{--                                        </a>--}}
                        {{--                                    </div>--}}

                        {{--                                    <div class="client-block">--}}
                        {{--                                        <a href="#" target="_blank" title="لوگو">--}}
                        {{--                                            <img src="{{asset('assets/img/clients/client-4.png')}}" alt="لوگو">--}}
                        {{--                                        </a>--}}
                        {{--                                    </div>--}}

                        {{--                                    <div class="client-block">--}}
                        {{--                                        <a href="#" target="_blank" title="لوگو">--}}
                        {{--                                            <img src="{{asset('assets/img/clients/client-5.png')}}" alt="لوگو">--}}
                        {{--                                        </a>--}}
                        {{--                                    </div>--}}

                        {{--                                    <div class="client-block">--}}
                        {{--                                        <a href="#" target="_blank" title="لوگو">--}}
                        {{--                                            <img src="{{asset('assets/img/clients/client-6.png')}}" alt="لوگو">--}}
                        {{--                                        </a>--}}
                        {{--                                    </div>--}}

                        {{--                                    <div class="client-block">--}}
                        {{--                                        <a href="#" target="_blank" title="لوگو">--}}
                        {{--                                            <img src="{{asset('assets/img/clients/client-7.png')}}" alt="لوگو">--}}
                        {{--                                        </a>--}}
                        {{--                                    </div>--}}

                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                        <!-- End of Clients -->--}}

                        <div class="white-space-50"></div>

                        {{--                        <!-- Pricing -->--}}
                        {{--                        <div class="row">--}}
                        {{--                            <div class="col-xs-12 col-sm-12">--}}

                        {{--                                <div class="block-title">--}}
                        {{--                                    <h3>قیمت گذاری</h3>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}

                        {{--                        <div class="row">--}}
                        {{--                            <div class=" col-xs-12 col-sm-12 ">--}}
                        {{--                                <div class="fw-pricing clearfix row">--}}

                        {{--                                    <div class="fw-package-wrap col-md-6 ">--}}
                        {{--                                        <div class="fw-package">--}}
                        {{--                                            <div class="fw-heading-row">--}}
                        {{--                                                <span>برنز</span>--}}
                        {{--                                            </div>--}}

                        {{--                                            <div class="fw-pricing-row">--}}
                        {{--                                                <span>65000</span>--}}
                        {{--                                                <small>ماهانه</small>--}}
                        {{--                                            </div>--}}

                        {{--                                            <div class="fw-button-row">--}}
                        {{--                                                <a href="#" target="_self" class="btn btn-secondary">امتحان رایگان</a>--}}
                        {{--                                            </div>--}}

                        {{--                                            <div class="fw-default-row">10GB فضای ذخیره سازی</div>--}}
                        {{--                                            <div class="fw-default-row">پهنای باند نامحدود</div>--}}
                        {{--                                            <div class="fw-default-row">پشتیبانی  6 ماهه</div>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}

                        {{--                                    <div class="fw-package-wrap col-md-6 highlight-col ">--}}
                        {{--                                        <div class="fw-package">--}}
                        {{--                                            <div class="fw-heading-row">--}}
                        {{--                                                <span>طلایی</span>--}}
                        {{--                                            </div>--}}

                        {{--                                            <div class="fw-pricing-row">--}}
                        {{--                                                <span>128000</span>--}}
                        {{--                                                <small>ماهانه</small>--}}
                        {{--                                            </div>--}}

                        {{--                                            <div class="fw-button-row">--}}
                        {{--                                                <a href="#" target="_self" class="btn btn-primary">امتحان رایگان</a>--}}
                        {{--                                            </div>--}}

                        {{--                                            <div class="fw-default-row">100GB فضای ذخیره سازی</div>--}}
                        {{--                                            <div class="fw-default-row">پهنای باند نامحدود</div>--}}
                        {{--                                            <div class="fw-default-row">پشتیبانی  12 ماهه</div>--}}
                        {{--                                            <div class="fw-default-row">ترافیک نیم بها</div>--}}
                        {{--                                            <div class="fw-default-row"></div>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}

                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                        <!-- End of Pricing -->--}}

                        <div class="white-space-50"></div>

                        {{--                        <!-- Fun Facts -->--}}
                        {{--                        <div class="row">--}}
                        {{--                            <div class="col-xs-12 col-sm-12">--}}

                        {{--                                <div class="block-title">--}}
                        {{--                                    <h3>واقعیت های <span>جالب</span></h3>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}

                        {{--                        <div class="row">--}}
                        {{--                            <div class="col-xs-12 col-sm-4">--}}
                        {{--                                <div class="fun-fact gray-default">--}}
                        {{--                                    <i class="lnr lnr-heart"></i>--}}
                        {{--                                    <h4>مشتریان خوشحال</h4>--}}
                        {{--                                    <span class="fun-fact-block-value">578</span>--}}
                        {{--                                    <span class="fun-fact-block-text"></span>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}

                        {{--                            <div class="col-xs-12 col-sm-4">--}}
                        {{--                                <div class="fun-fact gray-default">--}}
                        {{--                                    <i class="lnr lnr-clock"></i>--}}
                        {{--                                    <h4>ساعت های کاری</h4>--}}
                        {{--                                    <span class="fun-fact-block-value">4,780</span>--}}
                        {{--                                    <span class="fun-fact-block-text"></span>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}

                        {{--                            <div class="col-xs-12 col-sm-4 ">--}}
                        {{--                                <div class="fun-fact gray-default">--}}
                        {{--                                    <i class="lnr lnr-star"></i>--}}
                        {{--                                    <h4>جایزه های دریافتی</h4>--}}
                        {{--                                    <span class="fun-fact-block-value">15</span>--}}
                        {{--                                    <span class="fun-fact-block-text"></span>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                        <!-- End of Fun Facts -->--}}

                    </div>
                </section>
                <!-- End of About Me Subpage -->

                <!-- Resume Subpage -->
                <section data-id="resume" class="animated-section">
                    <div class="page-title">
                        <h2>رزومه</h2>
                    </div>

                    <div class="section-content">

                        <div class="row">
                            <div class="col-xs-12 col-sm-7">

                                <div class="block-title">
                                    <h3>تحصیلات</h3>
                                </div>

                                <div class="timeline timeline-second-style clearfix">
                                    <div class="timeline-item clearfix">
                                        <div class="left-part">
                                            <h5 class="item-period">1394-1398</h5>
                                            <span class="item-company">فارغ التحصیل رشته مهندسی نقشه برداری از دانشگاه تهران</span>
                                        </div>
                                        <div class="divider"></div>
                                        {{--                                        <div class="right-part">--}}
                                        {{--                                            <h4 class="item-title">مهندسی نرم افزار</h4>--}}
                                        {{--                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است </p>--}}
                                        {{--                                        </div>--}}
                                    </div>

                                    <div class="timeline-item clearfix">
                                        {{--                                        <div class="left-part">--}}
                                        {{--                                            <h5 class="item-period">1398</h5>--}}
                                        {{--                                            <span class="item-company">مهندسی نقشه برداری</span>--}}
                                        {{--                                        </div>--}}
                                        <div class="divider"></div>
                                        {{--                                        <div class="right-part">--}}
                                        {{--                                            <h4 class="item-title">طراحی گرافیک</h4>--}}
                                        {{--                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است </p>--}}
                                        {{--                                        </div>--}}
                                    </div>
                                </div>

                                <div class="white-space-50"></div>

                                <div class="block-title">
                                    <h3>تجربیات</h3>
                                </div>

                                <div class="timeline timeline-second-style clearfix">
                                    <div class="timeline-item clearfix">
                                        <div class="left-part">
                                            <h5 class="item-period">آذر 1401 -</h5>
                                            <span class="item-company">پارس پک</span>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="right-part">
                                            <h4 class="item-title">senior backend developer</h4>
                                            <p dir="ltr">
                                                - Analysis and design of system software based on network, virtualization and Linux
                                                <br>
                                                - Providing suitable solutions for system structure, databases and information storage
                                                <br>
                                                - Providing creative and optimal solutions for system testing
                                                <br>
                                                - Implementation of reusable modules
                                                <br>
                                                - Clean coding
                                                <br>
                                                - Check and debug the system to find possible problems
                                                <br>
                                                - Collaborate with FrontEnd developer to use APIs
                                            </p>
                                        </div>
                                    </div>
                                    <div class="timeline-item clearfix">
                                        <div class="left-part">
                                            <h5 class="item-period">مهر 1399-آبان 1401</h5>
                                            <span class="item-company">سایمان دیجیتال</span>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="right-part">
                                            <h4 class="item-title">back end & front end web developer</h4>
                                            <p>توسعه سیستم ایکامرس شرکت مبتنی بر فریم ورک لاراول با قابلیت های مارکت پلیس با فروش بیش از 20
                                                هزار محصول
                                            </p>
                                        </div>
                                    </div>

                                    <div class="timeline-item clearfix">
                                        <div class="left-part">
                                            <h5 class="item-period"> تیر و مرداد و شهریور 1399</h5>
                                            <span class="item-company">دینوک</span>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="right-part">
                                            <h4 class="item-title">back end & front end web developer</h4>
                                            <p>توسعه وب سایت مبتنی بر فریم ورک لاراول فروشگاه اینترنتی دینوک</p>
                                        </div>
                                    </div>

                                    <div class="timeline-item clearfix">
                                        <div class="left-part">
                                            <h5 class="item-period">خرداد 1399</h5>
                                            <span class="item-company">برنامه تلویزیونی شهروند و مافیا</span>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="right-part">
                                            <h4 class="item-title">back end & front end web developer</h4>
                                            <p>توسعه وب سایت مبتنی بر فریم ورک لاراول برنامه شهروندمافیا</p>
                                        </div>
                                    </div>

                                    <div class="timeline-item clearfix">
                                        <div class="left-part">
                                            <h5 class="item-period">اردیبهشت 1399</h5>
                                            <span class="item-company">پایگاه مطالعاتی کلام امامیه</span>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="right-part">
                                            <h4 class="item-title">back end & front end web developer</h4>
                                            <p>توسعه وب سایت مبتنی بر فریم ورک لاراول وب سایت پایگاه مطالعاتی کلام امامیه</p>
                                        </div>
                                    </div>
                                    <div class="timeline-item clearfix">
                                        <div class="left-part">
                                            <h5 class="item-period">فروردین 1399</h5>
                                            <span class="item-company">مامعین</span>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="right-part">
                                            <h4 class="item-title">back end & front end web developer</h4>
                                            <p>maemaeen توسعه وب سایت مبتنی بر فریم ورک لاراول وب سایت</p>
                                        </div>
                                    </div>
                                    <div class="timeline-item clearfix">
                                        <div class="left-part">
                                            <h5 class="item-period">اسفند 1398</h5>
                                            <span class="item-company">برنجکار</span>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="right-part">
                                            <h4 class="item-title">back end & front end web developer</h4>
                                            <p>berenjkar توسعه وب سایت مبتنی بر فریم ورک لاراول وب سایت</p>
                                        </div>
                                    </div>
                                    <div class="timeline-item clearfix">
                                        <div class="left-part">
                                            <h5 class="item-period">مهر تا بهمن1398</h5>
                                            <span class="item-company">موسسه زیتون</span>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="right-part">
                                            <h4 class="item-title">back end & front end web developer</h4>
                                            <p>توسعه پروژه های مبتنی بر فریم ورک لاراول شرکت زیتون</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- Skills & Certificates -->
                            <div class="col-xs-12 col-sm-5">
                                {{--                                <!-- Design Skills -->--}}
                                {{--                                <div class="block-title">--}}
                                {{--                                    <h3>مهارت <span>طراحی</span></h3>--}}
                                {{--                                </div>--}}

                                {{--                                <div class="skills-info skills-second-style">--}}
                                {{--                                    <!-- Skill 1 -->--}}
                                {{--                                    <div class="skill clearfix">--}}
                                {{--                                        <h4>طراحی سایت</h4>--}}
                                {{--                                        <div class="skill-value">95%</div>--}}
                                {{--                                    </div>--}}
                                {{--                                    <div class="skill-container skill-1">--}}
                                {{--                                        <div class="skill-percentage"></div>--}}
                                {{--                                    </div>--}}
                                {{--                                    <!-- End of Skill 1 -->--}}

                                {{--                                    <!-- Skill 2 -->--}}
                                {{--                                    <div class="skill clearfix">--}}
                                {{--                                        <h4>طراحی چاپ</h4>--}}
                                {{--                                        <div class="skill-value">65%</div>--}}
                                {{--                                    </div>--}}
                                {{--                                    <div class="skill-container skill-2">--}}
                                {{--                                        <div class="skill-percentage"></div>--}}
                                {{--                                    </div>--}}
                                {{--                                    <!-- End of Skill 2 -->--}}

                                {{--                                    <!-- Skill 3 -->--}}
                                {{--                                    <div class="skill clearfix">--}}
                                {{--                                        <h4>طراحی لوگو</h4>--}}
                                {{--                                        <div class="skill-value">80%</div>--}}
                                {{--                                    </div>--}}
                                {{--                                    <div class="skill-container skill-3">--}}
                                {{--                                        <div class="skill-percentage"></div>--}}
                                {{--                                    </div>--}}
                                {{--                                    <!-- End of Skill 3 -->--}}

                                {{--                                    <!-- Skill 4 -->--}}
                                {{--                                    <div class="skill clearfix">--}}
                                {{--                                        <h4>طراحی گرافیک</h4>--}}
                                {{--                                        <div class="skill-value">90%</div>--}}
                                {{--                                    </div>--}}
                                {{--                                    <div class="skill-container skill-4">--}}
                                {{--                                        <div class="skill-percentage"></div>--}}
                                {{--                                    </div>--}}
                                {{--                                    <!-- End of Skill 4 -->--}}

                                {{--                                </div>--}}
                                {{--                                <!-- End of Design Skills -->--}}

                                <div class="white-space-10"></div>

                                <!-- Coding Skills -->
                                <div class="block-title">
                                    <h3>مهارت ها</h3>
                                </div>

                                <div class="skills-info skills-second-style">
                                    <!-- Skill 6 -->
                                    <div class="skill clearfix">
                                        <h4>PHP</h4>
                                        <div class="skill-value">100%</div>
                                    </div>
                                    <div class="skill-container skill-6">
                                        <div class="skill-percentage" style="width: 100%"></div>
                                    </div>
                                    <!-- End of Skill 6 -->
                                    <!-- Skill 5 -->
                                    <div class="skill clearfix">
                                        <h4>Laravel</h4>
                                        <div class="skill-value">100%</div>
                                    </div>
                                    <div class="skill-container skill-5">
                                        <div class="skill-percentage" style="width: 100%"></div>
                                    </div>
                                    <!-- Skill 13 -->
                                    <div class="skill clearfix">
                                        <h4> Sql </h4>
                                        <div class="skill-value">100%</div>
                                    </div>
                                    <div class="skill-container skill-9">
                                        <div class="skill-percentage" style="width: 100%"></div>
                                    </div>
                                    <!-- End of Skill 13 -->
                                    <!-- Skill 13 -->
                                    <div class="skill clearfix">
                                        <h4> Mysql </h4>
                                        <div class="skill-value">100%</div>
                                    </div>
                                    <div class="skill-container skill-9">
                                        <div class="skill-percentage" style="width: 100%"></div>
                                    </div>
                                    <!-- End of Skill 13 -->
                                    <!-- Skill 13 -->
                                    <div class="skill clearfix">
                                        <h4> Postgresql </h4>
                                        <div class="skill-value">100%</div>
                                    </div>
                                    <div class="skill-container skill-9">
                                        <div class="skill-percentage" style="width: 100%"></div>
                                    </div>
                                    <!-- End of Skill 13 -->
                                    <!-- Skill 14 -->
                                    <div class="skill clearfix">
                                        <h4>Redis </h4>
                                        <div class="skill-value">100%</div>
                                    </div>
                                    <div class="skill-container skill-9">
                                        <div class="skill-percentage" style="width: 100%"></div>
                                    </div>
                                    <!-- End of Skill 14 -->

                                    <!-- End of Skill 5 -->
                                    <!-- Skill 24 -->
                                    <div class="skill clearfix">
                                        <h4>Lumen </h4>
                                        <div class="skill-value">100%</div>
                                    </div>
                                    <div class="skill-container skill-9">
                                        <div class="skill-percentage" style="width: 100%"></div>
                                    </div>
                                    <!-- End of Skill 24 -->
                                    <!-- Skill 18 -->
                                    <div class="skill clearfix">
                                        <h4>Javascript</h4>
                                        <div class="skill-value">100%</div>
                                    </div>
                                    <div class="skill-container skill-9">
                                        <div class="skill-percentage" style="width: 100%"></div>
                                    </div>
                                    <!-- End of Skill 18 -->
                                    <!-- Skill 7 -->
                                    <div class="skill clearfix">
                                        <h4>HTML/CSS</h4>
                                        <div class="skill-value">100%</div>
                                    </div>
                                    <div class="skill-container skill-7">
                                        <div class="skill-percentage"></div>
                                    </div>
                                    <!-- End of Skill 7 -->
                                    <!-- Skill 19 -->
                                    <div class="skill clearfix">
                                        <h4>SASS </h4>
                                        <div class="skill-value">100%</div>
                                    </div>
                                    <div class="skill-container skill-9">
                                        <div class="skill-percentage" style="width: 100%"></div>
                                    </div>
                                    <!-- End of Skill 19 -->
                                    <!-- Skill 8 -->
                                    <div class="skill clearfix">
                                        <h4>bootstrap</h4>
                                        <div class="skill-value">100%</div>
                                    </div>
                                    <div class="skill-container skill-8">
                                        <div class="skill-percentage" style="width: 100%"></div>
                                    </div>
                                    <!-- End of Skill 8 -->
                                    <!-- Skill 17 -->
                                    <div class="skill clearfix">
                                        <h4>Ajax </h4>
                                        <div class="skill-value">100%</div>
                                    </div>
                                    <div class="skill-container skill-9">
                                        <div class="skill-percentage" style="width: 100%"></div>
                                    </div>
                                    <!-- End of Skill 17 -->
                                    <!-- Skill 12 -->
                                    <div class="skill clearfix">
                                        <h4>Vuejs</h4>
                                        <div class="skill-value">40%</div>
                                    </div>
                                    <div class="skill-container skill-9">
                                        <div class="skill-percentage" style="width: 40%"></div>
                                    </div>
                                    <div class="skill clearfix">
                                        <h4>Nuxt</h4>
                                        <div class="skill-value">40%</div>
                                    </div>
                                    <div class="skill-container skill-9">
                                        <div class="skill-percentage" style="width: 40%"></div>
                                    </div>
                                    <!-- End of Skill 12 -->
                                    <!-- Skill 9 -->
                                    <div class="skill clearfix">
                                        <h4>Jquery </h4>
                                        <div class="skill-value">100%</div>
                                    </div>
                                    <div class="skill-container skill-9">
                                        <div class="skill-percentage" style="width: 100%"></div>
                                    </div>
                                    <!-- End of Skill 9 -->

                                    <!-- Skill 16 -->
                                    <div class="skill clearfix">
                                        <h4> Git </h4>
                                        <div class="skill-value">80%</div>
                                    </div>
                                    <div class="skill-container skill-9">
                                        <div class="skill-percentage" style="width: 80%"></div>
                                    </div>
                                    <!-- End of Skill 16 -->

                                    <!-- Skill 11 -->
                                    <div class="skill clearfix">
                                        <h4>OOP </h4>
                                        <div class="skill-value">100%</div>
                                    </div>
                                    <div class="skill-container skill-9">
                                        <div class="skill-percentage" style="width: 100%"></div>
                                    </div>
                                    <!-- End of Skill 11 -->
                                    <!-- Skill 10 -->
                                    <div class="skill clearfix">
                                        <h4>MVC </h4>
                                        <div class="skill-value">100%</div>
                                    </div>
                                    <div class="skill-container skill-9">
                                        <div class="skill-percentage" style="width: 100%"></div>
                                    </div>
                                    <!-- End of Skill 10 -->
                                    <!-- Skill 23 -->
                                    <div class="skill clearfix">
                                        <h4>Restfull Api </h4>
                                        <div class="skill-value">100%</div>
                                    </div>
                                    <div class="skill-container skill-9">
                                        <div class="skill-percentage" style="width: 100%"></div>
                                    </div>
                                    <!-- End of Skill 23 -->
                                    <!-- Skill 23 -->
                                    <div class="skill clearfix">
                                        <h4>Docker</h4>
                                        <div class="skill-value">40%</div>
                                    </div>
                                    <div class="skill-container skill-9">
                                        <div class="skill-percentage" style="width: 40%"></div>
                                    </div>
                                    <!-- End of Skill 23 -->
                                    <!-- Skill 23 -->
                                    <div class="skill clearfix">
                                        <h4>Linux</h4>
                                        <div class="skill-value">40%</div>
                                    </div>
                                    <div class="skill-container skill-9">
                                        <div class="skill-percentage" style="width: 40%"></div>
                                    </div>
                                    <div class="skill clearfix">
                                        <h4>Python</h4>
                                        <div class="skill-value">40%</div>
                                    </div>
                                    <div class="skill-container skill-9">
                                        <div class="skill-percentage" style="width: 40%"></div>
                                    </div>
                                    <!-- End of Skill 23 -->
                                </div>
                                <!-- End of Coding Skills -->

                                <div class="white-space-10"></div>

                                {{--                                <!-- Knowledges -->--}}
                                {{--                                <div class="block-title">--}}
                                {{--                                    <h3>دانش</h3>--}}
                                {{--                                </div>--}}

                                {{--                                <ul class="knowledges">--}}
                                {{--                                    <li>بازاریابی</li>--}}
                                {{--                                    <li>چاپ</li>--}}
                                {{--                                    <li>طراحی دیجیتال</li>--}}
                                {{--                                    <li>رسانه های اجتماعی</li>--}}
                                {{--                                    <li>مدیریت زمان</li>--}}
                                {{--                                    <li>ارتباطات</li>--}}
                                {{--                                    <li>حل مسئله</li>--}}
                                {{--                                    <li>شبکه اجتماعی</li>--}}
                                {{--                                    <li>انعطاف پذیری</li>--}}
                                {{--                                </ul>--}}
                                {{--                                <!-- End of Knowledges -->--}}
                            </div>
                            <!-- End of Skills & Certificates -->
                        </div>

                        <div class="white-space-50"></div>

                        <!-- Certificates -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="block-title">
                                    <h3>گواهینامه ها</h3>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Certificate 1 -->
                            <div class="col-xs-12 col-sm-6">
                                <div class="certificate-item clearfix">
                                    <div class="certi-logo">
                                        <img
                                            src="https://amanjacademy.com/wp-content/uploads/2020/02/amanj-logo-type-w-full.svg"
                                            alt="لوگو">
                                    </div>

                                    <div class="certi-content">
                                        <div class="certi-title">
                                            <h4>آموزش laravel</h4>
                                        </div>
                                        {{--                                        <div class="certi-id">--}}
                                        {{--                                            <span>شناسه عضویت: XXXX</span>--}}
                                        {{--                                        </div>--}}
                                        <div class="certi-date">
                                            <span> شهریور 1398</span>
                                        </div>
                                        <div class="certi-company">
                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Certificate 1 -->

                            <!-- Certificate 2 -->
                            <div class="col-xs-12 col-sm-6">
                                <div class="certificate-item clearfix">
                                    <div class="certi-logo">
                                        <img
                                            src="https://amanjacademy.com/wp-content/uploads/2020/02/amanj-logo-type-w-full.svg"
                                            alt="لوگو">
                                    </div>

                                    <div class="certi-content">
                                        <div class="certi-title">
                                            <h4>آموزش جامع وردپرس</h4>
                                        </div>
                                        {{--                                        <div class="certi-id">--}}
                                        {{--                                            <span>شناسه عضویت: XXXX</span>--}}
                                        {{--                                        </div>--}}
                                        <div class="certi-date">
                                            <span> تیر 1397</span>
                                        </div>
                                        <div class="certi-company">
                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Certificate 2 -->

                        </div>
                        <!-- End of Certificates -->
                    </div>
                </section>
                <!-- End of Resume Subpage -->

                <!-- Portfolio Subpage -->
                <section data-id="portfolio" class="animated-section">
                    <div class="page-title">
                        <h2>نمونه کار</h2>
                    </div>

                    <div class="section-content">

                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <!-- Portfolio Content -->
                                <div class="portfolio-content">

                                    <ul class="portfolio-filters">
                                        <li class="active">
                                            <a class="filter btn btn-sm btn-link" data-group="category_all">همه</a>
                                        </li>
                                        <li>
                                            <a class="filter btn btn-sm btn-link" data-group="category_detailed">توضیح
                                                شده</a>
                                        </li>
                                        <li>
                                            <a class="filter btn btn-sm btn-link" data-group="category_mockups">مدل
                                                ها</a>
                                        </li>
                                        <li>
                                            <a class="filter btn btn-sm btn-link" data-group="category_soundcloud">ساندکلود</a>
                                        </li>
                                        <li>
                                            <a class="filter btn btn-sm btn-link" data-group="category_vimeo-videos">ویدیوهای
                                                ویمو</a>
                                        </li>
                                        <li>
                                            <a class="filter btn btn-sm btn-link" data-group="category_youtube-videos">ویدیو
                                                های یوتیوب</a>
                                        </li>
                                    </ul>

                                    <!-- Portfolio Grid -->
                                    <div class="portfolio-grid three-columns">

                                        <figure class="item lbaudio"
                                                data-groups='["category_all", "category_soundcloud"]'>
                                            <div class="portfolio-item-img">
                                                <img src="img/portfolio/1.jpg" alt="صدا ساندکلود" title=""/>
                                                <a href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/221650664&#038;color=%23ff5500&#038;auto_play=false&#038;hide_related=false&#038;show_comments=true&#038;show_user=true&#038;show_reposts=false&#038;show_teaser=true&#038;visual=true"
                                                   class="lightbox mfp-iframe" title="صدا ساندکلود"></a>
                                            </div>

                                            <i class="fa fa-volume-up"></i>
                                            <h4 class="name">صدا ساندکلود</h4>
                                            <span class="category">ساندکلود</span>
                                        </figure>

                                        <figure class="item standard"
                                                data-groups='["category_all", "category_detailed"]'>
                                            <div class="portfolio-item-img">
                                                <img src="img/portfolio/2.jpg" alt="پروژه رسانه 2" title=""/>
                                                <a href="portfolio-1.html" class="ajax-page-load"></a>
                                            </div>

                                            <i class="far fa-file-alt"></i>
                                            <h4 class="name">پروژه تفصیلی 2</h4>
                                            <span class="category">توضیح شده</span>
                                        </figure>

                                        <figure class="item lbvideo"
                                                data-groups='["category_all", "category_vimeo-videos"]'>
                                            <div class="portfolio-item-img">
                                                <img src="img/portfolio/3.jpg" alt="ویدیو ویمو 1" title=""/>
                                                <a href="https://player.vimeo.com/video/158284739"
                                                   class="lightbox mfp-iframe" title="ویدیو ویمو 1"></a>
                                            </div>

                                            <i class="fas fa-video"></i>
                                            <h4 class="name">ویدیو ویمو 1</h4>
                                            <span class="category">ویدیوهای ویمو</span>
                                        </figure>

                                        <figure class="item standard"
                                                data-groups='["category_all", "category_detailed"]'>
                                            <div class="portfolio-item-img">
                                                <img src="img/portfolio/4.jpg" alt="پروژه رسانه 1" title=""/>
                                                <a href="portfolio-1.html" class="ajax-page-load"></a>
                                            </div>

                                            <i class="far fa-file-alt"></i>
                                            <h4 class="name">پروژه تفصیلی 1</h4>
                                            <span class="category">توضیح شده</span>
                                        </figure>

                                        <figure class="item lbimage" data-groups='["category_all", "category_mockups"]'>
                                            <div class="portfolio-item-img">
                                                <img src="img/portfolio/5.jpg" alt="طراحی مدل 1" title=""/>
                                                <a class="lightbox" title="طراحی مدل 1"
                                                   href="img/portfolio/full/5.jpg"></a>
                                            </div>

                                            <i class="far fa-image"></i>
                                            <h4 class="name">طراحی مدل 1</h4>
                                            <span class="category">مدل ها</span>
                                        </figure>

                                        <figure class="item lbvideo"
                                                data-groups='["category_all", "category_youtube-videos"]'>
                                            <div class="portfolio-item-img">
                                                <img src="img/portfolio/6.jpg" alt="ویدیو یوتیوب 1" title=""/>
                                                <a href="https://www.youtube.com/embed/bg0gv2YpIok"
                                                   class="lightbox mfp-iframe" title="ویدیو یوتیوب 1"></a>
                                            </div>

                                            <i class="fas fa-video"></i>
                                            <h4 class="name">ویدیو یوتیوب 1</h4>
                                            <span class="category">ویدیو های یوتیوب</span>
                                        </figure>
                                    </div>
                                </div>
                                <!-- End of Portfolio Content -->
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End of Portfolio Subpage -->

                <!-- Blog Subpage -->
                <section data-id="blog" class="animated-section">
                    <div class="page-title">
                        <h2>بلاگ</h2>
                    </div>

                    <div class="section-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="blog-masonry two-columns clearfix">
                                    <div class="item post-1">
                                        <div class="blog-card">
                                            <div class="media-block">
                                                <a href="https://heydariali.medium.com/laravel-clean-code-2-6d87c34b06b0?source=user_profile---------0----------------------------" target="_blank">
                                                    <img src="{{\Illuminate\Support\Facades\URL::asset('assets/img/laravel.png')}}"
                                                         class="size-blog-masonry-image-two-c"
                                                         alt="Laravel Clean Code (2)" title=""/>
                                                    <div class="mask"></div>
                                                </a>
                                            </div>
                                            <div class="post-info">
                                                <div class="post-date">13 شهریور 1401</div>
                                                <a href="https://heydariali.medium.com/laravel-clean-code-2-6d87c34b06b0?source=user_profile---------0----------------------------" target="_blank">
                                                    <h4 class="blog-item-title">Laravel Clean Code (2)</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item post-1">
                                        <div class="blog-card">
                                            <div class="media-block">
                                                <a href="https://heydariali.medium.com/laravel-clean-code-1-74d7a76e2eab?source=user_profile---------0----------------------------" target="_blank">
                                                    <img src="{{\Illuminate\Support\Facades\URL::asset('assets/img/laravel.png')}}"
                                                         class="size-blog-masonry-image-two-c"
                                                         alt="Laravel Clean Code (1)" title=""/>
                                                    <div class="mask"></div>
                                                </a>
                                            </div>
                                            <div class="post-info">
                                                <div class="post-date">10 شهریور 1401</div>
                                                <a href="https://heydariali.medium.com/laravel-clean-code-1-74d7a76e2eab?source=user_profile---------0----------------------------" target="_blank">
                                                    <h4 class="blog-item-title">Laravel Clean Code (1)</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item post-1">
                                        <div class="blog-card">
                                            <div class="media-block">
                                                <a href="https://heydariali.medium.com/laravel-clean-code-3-370c845f1a83?source=user_profile---------0----------------------------" target="_blank">
                                                    <img src="{{\Illuminate\Support\Facades\URL::asset('assets/img/laravel.png')}}"
                                                         class="size-blog-masonry-image-two-c"
                                                         alt="Laravel Clean Code (3)" title=""/>
                                                    <div class="mask"></div>
                                                </a>
                                            </div>
                                            <div class="post-info">
                                                <div class="post-date">13 مهر 1401</div>
                                                <a href="https://heydariali.medium.com/laravel-clean-code-3-370c845f1a83?source=user_profile---------0----------------------------" target="_blank">
                                                    <h4 class="blog-item-title">Laravel Clean Code (3)</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </section>
                <!-- End of Blog Subpage -->

                <!-- Contact Subpage -->
                <section data-id="contact" class="animated-section">
                    <div class="page-title">
                        <h2>تماس</h2>
                    </div>

                    <div class="section-content">

                        <div class="row">
                            <!-- Contact Info -->
                            <div class="col-xs-12 col-sm-4">
                                <div class="lm-info-block gray-default">
                                    <i class="lnr lnr-map-marker"></i>
                                    <h4>همه جا</h4>
                                    <span class="lm-info-block-value"></span>
                                    <span class="lm-info-block-text"></span>
                                </div>

                                <div class="lm-info-block gray-default">
                                    <i class="lnr lnr-phone-handset"></i>
                                    <h4>09197304278</h4>
                                    <span class="lm-info-block-value"></span>
                                    <span class="lm-info-block-text"></span>
                                </div>

                                <div class="lm-info-block gray-default">
                                    <i class="lnr lnr-envelope"></i>
                                    <h4><a href="#">heydariali.it@gmail.com</a></h4>
                                    <span class="lm-info-block-value"></span>
                                    <span class="lm-info-block-text"></span>
                                </div>

                                {{--                                <div class="lm-info-block gray-default">--}}
                                {{--                                    <i class="lnr lnr-checkmark-circle"></i>--}}
                                {{--                                    <h4>فریلنس دردسترس</h4>--}}
                                {{--                                    <span class="lm-info-block-value"></span>--}}
                                {{--                                    <span class="lm-info-block-text"></span>--}}
                                {{--                                </div>--}}


                            </div>
                            <!-- End of Contact Info -->

                            <!-- Contact Form -->
                            <div class="col-xs-12 col-sm-8">
                                {{--                                <div id="map" class="map"></div>--}}
                                <div class="block-title">
                                    <h3>چطور میتونم <span>کمکتون کنم؟</span></h3>
                                </div>

                                <form class="contact-form" action="{{route('message.store')}}" method="Post">
                                    @csrf
                                    <div class="messages"></div>

                                    <div class="controls two-columns">
                                        <div class="fields clearfix">
                                            <div class="left-column">
                                                <div class="form-group form-group-with-icon">
                                                    <input id="form_name" type="text" name="name" class="form-control"
                                                           placeholder="" data-error="نام الزامی می باشد." required>
                                                    <label>نام کامل</label>
                                                    <div class="form-control-border"></div>
                                                    <div class="help-block with-errors"></div>
                                                </div>

                                                <div class="form-group form-group-with-icon">
                                                    <input id="form_email" type="email" name="email"
                                                           class="form-control" placeholder=""
                                                           data-error="ایمیل معتبر الزامی می باشد." required>
                                                    <label>آدرس ایمیل</label>
                                                    <div class="form-control-border"></div>
                                                    <div class="help-block with-errors"></div>
                                                </div>

                                                <div class="form-group form-group-with-icon">
                                                    <input id="form_subject" type="text" name="subject"
                                                           class="form-control" placeholder=""
                                                           data-error="موضوع الزامی می باشد." required>
                                                    <label>موضوع</label>
                                                    <div class="form-control-border"></div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="right-column">
                                                <div class="form-group form-group-with-icon">
                                                    <textarea id="form_message" name="content" class="form-control"
                                                              placeholder="" rows="7"
                                                              data-error="لطفا، یک پیام بنویسید." required></textarea>
                                                    <label>پیام</label>
                                                    <div class="form-control-border"></div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="g-recaptcha"
                                             data-sitekey="6LfstqAhAAAAAET-ODvgE8dizF9Zt-FHtddapYKD"></div>

                                        <input type="submit" class="button btn-send" value="ارسال پیام">
                                    </div>
                                </form>
                            </div>
                            <!-- End of Contact Form -->
                        </div>

                    </div>
                </section>
                <!-- End of Contact Subpage -->
            </div>
        </div>

    </div>
</div>
<script src="{{\Illuminate\Support\Facades\URL::asset('assets/js/modernizr.custom.js')}}"></script>
<script data-cfasync="false"
        src="https://lmpixels.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('assets/js/jquery-2.1.3.min.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('assets/js/modernizr.custom.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('assets/js/animating.js')}}"></script>

<script src="{{\Illuminate\Support\Facades\URL::asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>

<script src='{{\Illuminate\Support\Facades\URL::asset('assets/js/perfect-scrollbar.min.js')}}'></script>
<script src='{{\Illuminate\Support\Facades\URL::asset('assets/js/jquery.shuffle.min.js')}}'></script>
<script src='{{\Illuminate\Support\Facades\URL::asset('assets/js/masonry.pkgd.min.js')}}'></script>
<script src='{{\Illuminate\Support\Facades\URL::asset('assets/js/owl.carousel.min.js')}}'></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('assets/js/jquery.magnific-popup.min.js')}}"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCrDf32aQTCVENBhFJbMBKOUTiUAABtC2o"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('assets/js/jquery.googlemap.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('assets/js/validator.js')}}"></script>
<script src="{{\Illuminate\Support\Facades\URL::asset('assets/js/main.js')}}"></script>
{{--<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>--}}
<script>
    // swal("آفرین!", "پیام شما با موفقیت ثبت شد.", "success");
</script>
</body>
</html>
