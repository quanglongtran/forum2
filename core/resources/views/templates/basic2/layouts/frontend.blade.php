<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @include('partials.seo')

    <title>{{ $general->sitename(__($pageTitle)) }}</title>
    <!-- jQuery library -->
    <script src="{{ asset($activeTemplateTrue. 'js/lib/jquery-3.6.0.min.js') }}"></script>

    <!-- bootstrap 5  -->
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue. 'css/lib/bootstrap.min.css') }}">
    <!-- fontawesome 5  -->
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue. 'css/all.min.css') }}">
    <!-- lineawesome font -->
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue. 'css/line-awesome.min.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue. 'css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/templates/basic2/css/main.css') }}">
    <link rel="stylesheet" href="/assets/templates/basic2/css/main-mobile.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700&family=Roboto:wght@100;300;400;500;700&display=swap');
    </style>

    {{--
    <link rel="stylesheet" href="/node_modules/owl.carousel/dist/assets/owl.carousel.min.css" />

    <link rel="stylesheet" href="/bower_components/owl.carousel/dist/assets/owl.carousel.min.css" /> --}}

    <link rel="stylesheet"
        href="{{ asset($activeTemplateTrue. 'css/color.php?color='.$general->base_color.'&secondColor='.$general->secondary_color) }}">

    @stack('style-lib')

    @stack('style')

</head>

<body>
    {{-- <div class="container"> --}}
        {{-- <div class="row"> --}}
            @stack('fbComment')

            <!-- scroll-to-top start -->
            <div class="scroll-to-top">
                <span class="scroll-icon">
                    <i class="las la-arrow-up"></i>
                </span>
            </div>
            <!-- scroll-to-top end -->

            <div class="preloader-holder">
                <div class="preloader">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>

            @include('templates.basic2.partials2.header')

            {{-- <div class="row"> --}}
                {{-- <div class="main-wrapper col-12"> --}}

                    <!-- board section start -->
                    {{-- <section class="pt-50 pb-50 px-xxl-5">
                        <div class="container-fluid">
                            <div class="row">

                                @include($activeTemplate. 'partials.left_bar')

                                <main class="xxxl-8 col-lg-6 px-lg-4"> --}}
                                    @yield('content')
                                    {{-- </main>

                                @include($activeTemplate. 'partials.right_bar')

                            </div>
                        </div>
                    </section> --}}
                    <!-- board section end -->

                    {{--
                </div> --}}
                @include('templates.basic2.partials2.footer')
                {{-- </div><!-- main-wrapper end --> --}}


            <!-- bootstrap js -->
            <script src="{{ asset($activeTemplateTrue. 'js/lib/bootstrap.bundle.min.js') }}"></script>
            <!-- main js -->
            <script src="{{ asset($activeTemplateTrue. 'js/app.js') }}"></script>

            <script src="{{asset('assets/templates/basic2/js/app.js')}}"></script>

            <script type="">
                // import 'owl.carousel/dist/assets/owl.carousel.css';
                // import 'owl.carousel';
            </script>

            @stack('script-lib')

            @stack('script')

            @include('partials.plugins')

            @include('partials.notify')

            {{--
        </div> --}}
        {{-- </div> --}}

    <script>
        (function ($) {
                    "use strict";

                    $(".langSel").on("change", function() {
                        window.location.href = "{{route('forum.index')}}/change/"+$(this).val() ;
                    });

                    $('.ajaxCount').on('click',function(){
                    var id = $(this).data('id');
                    $.get("{{ route('ad.count.ajax') }}",{id:id},function(response){
                        console.log(response);
                    });

                    });

                })(jQuery);

    </script>
</body>

</html>