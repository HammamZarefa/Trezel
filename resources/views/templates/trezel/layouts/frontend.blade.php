<!doctype html>
<html @if(session()->get('lang')=='ar') lang="ar" dir="RTL" @else lang="en" @endif itemscope
      itemtype="http://schema.org/WebPage">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('partials.seo')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/bootstrap.min.css')}}">
    <!-- bootstrap 4  -->
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'css/plugins.css') }}">
    <!-- bootstrap toggle css -->
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'revolution/css/settings.css')}}">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'revolution/css/layers.css')}}">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'revolution/css/navigation.css')}}">
    <!-- fontawesome 5  -->
    <!-- line-awesome webfont -->
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'type/type.css')}}">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/font/font2.css')}}">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/color/red.css')}}">
    @if(session()->get('lang') =='ar')
        <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/style-ar.css')}}">
    @endif
    @if(session()->get('lang') =='en')
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/style.css')}}">
    @endif
        

<!-- favicon  -->
    <link rel="shortcut icon" href="{{getImage(imagePath()['logoIcon']['path'] .'/favicon.png')}}" type="image/x-icon">
    {{--<link rel="stylesheet"--}}
    {{--href="{{asset($activeTemplateTrue.'css/color.php?color='.$general->base_color.'&secondColor='.$general->secondary_color)}}">--}}
    {{--@stack('style-lib')--}}
    {{--@stack('style')--}}
</head>
<body>
    <div class="content-wrapper">
    <a class="whatsapp" href="https://wa.me/{{$address->data_values->whatsapp}}" target="_blank">
        <i class="jam jam-whatsapp"></i>
    </a>
    <nav class="navbar absolute transparent navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
                <a style="display: flex;
          flex-direction: column;" href="{{route('home')}}">
                    <img class="logo logo-animation" src="#" srcset="{{asset($activeTemplateTrue.'images/logo1.jpeg')}}" alt=""/>
                    <img class="logo" src="#" srcset="{{asset($activeTemplateTrue.'images/logo2.jpeg')}} 1x" alt="" />
                </a></div>
            <div class="navbar-other ml-auto order-lg-3">
                <ul class="navbar-nav flex-row align-items-center" data-sm-skip="true">
                    <li class="nav-item">
                        <div class="navbar-hamburger d-lg-none d-xl-none ml-auto"><button class="hamburger animate plain" data-toggle="offcanvas-nav"><span></span></button></div>
                    </li>
                    <li class="dropdown search-dropdown position-static nav-item">
                        <a href="#" role="button" class="collapse-toggle" data-toggle="collapse" data-target=".search-dropdown-menu" aria-haspopup="true" aria-expanded="false"><i class="jam jam-search"></i></a>
                        <div class="dropdown-menu search-dropdown-menu w-100 collapse">
                            <div class="form-wrapper">
                                <form class="inverse-text">
                                    <input type="text" class="form-control" placeholder="@lang('Search something')">
                                </form>
                                <!-- /.search-form -->
                                <i class="dropdown-close jam jam-close"></i>
                            </div>
                            <!-- /.form-wrapper -->
                        </div>
                    </li>
                    <li class="nav-item"><button class="plain" data-toggle="offcanvas-info"><i class="jam jam-info"></i></button></li>
                </ul>
                <!-- /.navbar-nav -->
            </div>
            <!-- /.navbar-other -->
            <div class="navbar-collapse offcanvas-nav">
                <div class="offcanvas-header d-lg-none d-xl-none">
                    <a href="{{route('home')}}"><img style="width: 90px;" src="#" srcset="{{asset($activeTemplateTrue.'images/FINAL-LOGO1.png 1x, images/logo-light@2x.png 2x')}}" alt="" /></a>
                    <button class="plain offcanvas-close offcanvas-nav-close"><i class="jam jam-close"></i></button>
                </div>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="{{route('home')}}">@lang('Home')</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('about')}}">@lang('About')</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('services')}}">@lang('Services')</a></li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="{{route('home')}}#portfolio">@lang('Portfolio')</a></li>
                    {{--<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="{{route('blog.details')}}">@lang('Blog')</a></li>--}}
                    <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">@lang('Contact')</a></li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#!">
                            <i class="jam jam-world"></i></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('lang','en')}}">En</a></li>
                            <li><a class="dropdown-item" href="{{route('lang','ar')}}">Ar</a></li>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-nav -->
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
    <!-- /.navbar -->
    <div class="offcanvas-info inverse-text">
        <button class="plain offcanvas-close offcanvas-info-close"><i class="jam jam-close"></i></button>
        <a href="index.html">
            <img style="width: 90px;" src="#" srcset="{{asset($activeTemplateTrue.'images/FINAL-LOGO1.png 1x, style/images/logo-light@2x.png 2x')}}" alt="" />
        </a>
        <div class="space30"></div>
        <p>{{$about->data_values->content}}</p>
        <div class="space20"></div>
        <div class="widget">
            <h5 class="widget-title">@lang('Contact Info')</h5>
            <address> {!!   $address->data_values->address !!} <div class="space20"></div>
                <a href="mailto:{{ __(@$address->data_values->email) }}" class="nocolor">{{ $address->data_values->email }}</a><br /> {{ __(@$address->data_values->phone) }} </address>
        </div>
        <!-- /.widget -->
        <div class="widget">
            <h3 class="widget-title">@lang('Learn More')</h3>
            <ul class="list-unstyled">
                <li><a href="{{route('about')}}" class="nocolor">@lang('Our Story')</a></li>
                {{--<li><a href="#" class="nocolor">Terms of Use</a></li>--}}
                {{--<li><a href="#" class="nocolor">Privacy Policy</a></li>--}}
                <li><a href="{{route('contact')}}" class="nocolor">@lang('Contact Us')</a></li>
            </ul>
        </div>
        <!-- /.widget -->
        <div class="widget">
            <h3 class="widget-title">@lang('Follow Us')</h3>
            <ul class="social social-mute social-s ml-auto">
                <li><a href="#"><i class="jam jam-twitter"></i></a></li>
                <li><a href="#"><i class="jam jam-facebook"></i></a></li>
                <li><a href="#"><i class="jam jam-instagram"></i></a></li>
                <li><a href="#"><i class="jam jam-vimeo"></i></a></li>
                <li><a href="#"><i class="jam jam-youtube"></i></a></li>
            </ul>
        </div>
        <!-- /.widget -->
    </div>
 @yield('content')
    <!-- /.wrapper -->
    <footer class="dark-wrapper inverse-text">
        <div class="container inner">
            <div class="row">
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <img style="width: 120px;" src="{{asset($activeTemplateTrue.'images/FINAL-LOGO1.png')}}"  alt="" />
                        <div class="space40"></div>
                        <p>© 2022 Trezel. <br class="d-none d-lg-block" />All rights reserved.</p>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <h3 class="widget-title">@lang('Get in Touch')</h3>
                        <address>{{getContentTranslation($address->data_values,'address' )}}</address>
                        <a href="mailto:{{$address->data_values->email}}">{{$address->data_values->email}}</a><br /> {{$address->data_values->phone}}
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <h3 class="widget-title">@lang('Learn More')</h3>
                        <ul class="list-unstyled">
                            @foreach($extra_pages as $page)
                            <li><a href="{{route('extra.details',['id'=>$page->id])}}" class="nocolor">{{$page->data_values->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="space30 d-none d-md-block d-lg-none"></div>
                <div class="col-md-12 col-lg-3">
                    <div class="widget">
                        <h3 class="widget-title">@lang('Our Newsletter')</h3>
                        <p>@lang('Subscribe to our newsletter to get our news & deals delivered to your inbox')!</p>
                        <div class="space10"></div>
                        <div class="newsletter-wrapper">
                            <form action="{{route('subscribe')}}" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                @csrf
                                <div id="mc_embed_signup_scroll" class="input-group">
                                    <input type="email" value="" name="email" class="email form-control mb-0 mr-2 mb-sm-0" id="mce-EMAIL" placeholder="@lang('Email Address')" required>
                                    <button type="submit" name="subscribe" id="mc-embedded-subscribe" class="btn btn-rounded btn-default mr-0 mb-0 pull-right">@lang('Join')</button>
                                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                        <input type="text" name="b_ddc180777a163e0f9f66ee014_056957de28" tabindex="-1" value="">
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                        <!-- /.newsletter-wrapper -->
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </footer>
</div>

<!-- jQuery library -->
<script src="{{asset($activeTemplateTrue.'js/jquery.min.js')}}"></script>
<script src="{{asset($activeTemplateTrue.'js/popper.min.js')}}"></script>
<!-- bootstrap js -->
<script src="{{asset($activeTemplateTrue.'js/bootstrap.min.js')}}"></script>
<!-- revolution -->
<script src="{{asset($activeTemplateTrue.'revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset($activeTemplateTrue.'revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset($activeTemplateTrue.'revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset($activeTemplateTrue.'revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{ asset($activeTemplateTrue.'revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{asset($activeTemplateTrue.'revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset($activeTemplateTrue.'revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset($activeTemplateTrue.'revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset($activeTemplateTrue.'revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script src="{{asset($activeTemplateTrue.'revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script src="{{ asset($activeTemplateTrue.'revolution/js/extensions/revolution.extension.video.min.js') }}"></script>

    <script src="{{asset($activeTemplateTrue.'js/plugins.js')}}"></script>
    <script src="{{asset($activeTemplateTrue.'js/scripts.js')}}"></script>
@stack('script-lib')

@stack('script')

@include('partials.plugins')

@include('admin.partials.notify')


<script>
    (function ($) {
        "use strict";
        $(document).on("change", ".langSel", function () {
            window.location.href = "{{url('/')}}/change/" + $(this).val();
        });
    })(jQuery);
</script>
</body>
</html>
