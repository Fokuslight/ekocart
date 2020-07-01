<!DOCTYPE html>
<html lang="en">
<head>

    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="keywords" content="bootstrap 4, premium, multipurpose, sass, scss, saas"/>
    <meta name="description" content="Bootstrap 4 Landing Page Template"/>
    <meta name="author" content="www.themeht.com"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Ekocart - Multi-purpose E-commerce Html5 Template</title>

    <!-- Favicon Icon -->


    <link rel="shortcut icon" href="{{ url('/favicon.ico') }}" type="image/x-icon">

    <!-- inject css start -->

    <link href="{{ url('assets/css/theme-plugin.css') }}" rel="stylesheet"/>
    <link href="{{ url('assets/css/theme.min.css') }}" rel="stylesheet"/>

    <!-- inject css end -->

</head>

<body>

<!-- page wrapper start -->

<div class="page-wrapper">

    <!-- preloader start -->

    <div id="ht-preloader">
        <div class="loader clear-loader">
            <img class="img-fluid" src="{{ url('assets/images/loader.gif') }}" alt="">
        </div>
    </div>

    <!-- preloader end -->


    <!--header start-->

    <header class="site-header">
        @include('layouts.header.top-nav')
        <div class="py-md-3 py-2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 d-none d-md-flex align-items-center">
                        @include('layouts.header.logo')
                        <div class="media ml-lg-11"><i
                                class="las la-mobile-alt ic-2x bg-white rounded p-2 shadow-sm mr-2 text-primary"></i>
                            <div class="media-body"><span class="mb-0 d-block">Call Us</span>
                                <a class="text-muted" href="tel:+912345678900">+91-234-567-8900</a>
                            </div>
                        </div>
                    </div>
                @include('layouts.header.search')
                <!--menu end-->
                </div>
            </div>
        </div>
        <div id="header-wrap" class="shadow-sm">
            <div class="container">
                <div class="row">
                    <!--menu start-->
                    <div class="col">
                        <nav class="navbar navbar-expand-lg navbar-light position-static">
                            <a class="navbar-brand logo d-lg-none" href="index.html">
                                <img class="img-fluid" src="{{ url('assets/images/logo.png') }}" alt="">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                                    aria-expanded="false" aria-label="Toggle navigation"><span
                                    class="navbar-toggler-icon"></span>
                            </button>
                            @include('layouts.header.nav')
                            @include('layouts.header.personal-nav')
                        </nav>
                    </div>
                    <!--menu end-->
                </div>
            </div>
        </div>
    </header>

    <!--header end-->

@yield('content')

<!--footer start-->

    <footer class="py-11 bg-dark">
        <div class="container">
            <div class="row">
                @include('layouts.footer.description')
                <div class="col-12 col-lg-6 mt-6 mt-lg-0">
                    <div class="row">
                        @include('layouts.footer.quick-links')
                        @include('layouts.footer.top-products')
                        @include('layouts.footer.features')
                    </div>
                </div>
                @include('layouts.footer.about')
            </div>
            <hr class="my-8">
            @include('layouts.footer.footer-bottom')
        </div>
    </footer>

    <!--footer end-->

</div>

<!-- page wrapper end -->

<!-- Cart Modal -->
@include('layouts.footer.modals.cartmodal')

<!-- Quick View Modal -->
@include('layouts.footer.modals.quickview')

<!-- Subscribe Modal -->
@include('layouts.footer.modals.subscribe')

<!--back-to-top start-->

<div class="scroll-top"><a class="smoothscroll" href="#top"><i class="las la-angle-up"></i></a></div>

<!--back-to-top end-->

<!-- inject js start -->
<script>
    var imageUrl = '{{ url('/storage') }}';
</script>


<script src="{{ url('assets/js/theme-plugin.js') }}"></script>
<script src="{{ url('assets/js/theme-script.js') }}"></script>
<script src="{{ url('js/app.js') }}"></script>
<script src="{{ url('assets/js/ajax.js') }}"></script>

<!-- inject js end -->

</body>
</html>
