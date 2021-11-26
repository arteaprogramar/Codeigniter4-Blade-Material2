<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('m-page_title')</title>

    <!-- Add Material font (Roboto) and Material icon as needed -->
    <link href="{{css_url('material/material-icons.min.css')}}" rel="stylesheet">

    <!-- Material CSS -->
    <link href="{{css_url('material/material.min.css')}}" rel="stylesheet">
    <link href="{{css_url('custom/custom.min.css')}}" rel="stylesheet">

    <!-- CSS Extras add, example : material/material-plugins.min.css -->
    @yield('m-css-extras')
</head>
<body>
    <style>
        .jumbotron-background {
            @if(!@empty(trim($this->yieldContent('m-toolbar_collapse_img'))))
                background-image: url("@yield('m-toolbar_collapse_img')");
            @else
                background-image: url('https://djibe.github.io/material/docs/images/doc-jumbotron-bg.jpg');
            @endif
            background-color:  #6200ee;
            background-position: 50% 50%;
            background-repeat: no-repeat;
            background-size: cover;
            color: #FAFAFA;
            margin-bottom: 0;
            padding-top: 7rem;
        }
    </style>

    <!--
        m-toolbar_elevation : define elevation
        m-toolbar_color: define toolbar background color
    -->
    <header class="navbar navbar-dark material-navbar-permanent fixed-top toolbar-waterfall">
        <button data-breakpoint="lg" aria-controls="nav" aria-expanded="false" aria-label="Toggle Navdrawer" class="navbar-toggler" data-target="#nav" data-toggle="navdrawer" data-type="permanent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- m-toolbar_title : define toolbar title -->
        <span class="navbar-brand mr-auto">@yield('m-toolbar_title')</span>
        <div class="ml-3">

            <!-- m-toolbar_menu : define menus -->
            @yield('m-toolbar_menu')

        </div>
    </header>

    <div aria-hidden="true" class="navdrawer navdrawer-permanent-lg" data-type="persistent" id="nav" tabindex="-1">
        <!-- m-navdrawer: create NavDrawer view -->
        @yield('m-navdrawer')
    </div>

    <!--
        toolbar_collapse_img : Toolbar background img
        toolbar_color : Toolbar background color
        toolbar_collapse_content: Require view content or text
    -->


    <div class="jumbotron jumbotron-fluid jumbotron-background material-jumbotron px-lg-3 mb-5 @yield('m-toolbar_color')">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-8">
                    @yield('m-toolbar_collapse_content')
                </div>
            </div>
        </div>
    </div>

    <!-- Content -->
    <main class="px-md-3 material-main">
        <div class="container">

            <!-- m-content: require view or text, this is page content -->
            @yield('content')

        </div>
    </main>

    <!-- jQuery, Bootstrap Bundle (includes Popper) and Material -->
    <script type="application/javascript" src="{{js_url('material/jquery.min.js')}}"></script>
    <script type="application/javascript" src="{{js_url('material/bootstrap.bundle.min.js')}}"></script>
    <script type="application/javascript" src="{{js_url('material/material.min.js')}}"></script>
    <script type="application/javascript" src="{{js_url('material/material-init.min.js')}}"></script>
    <script type="application/javascript" src="{{js_url('lib/browser/history.min.js')}}"></script>
    <script type="application/javascript">
        $(function () {
            History.Adapter.onDomLoad(function(){
                setTimeout(function () {
                    History.pushState(null, null, location.href);
                    History.go(1);
                }, 50);
            });

            $(window).scroll(function () {
                if($(window).scrollTop() > 0){
                    $(".toolbar-waterfall").addClass("waterfall").addClass("@yield('m-toolbar_color')");
                } else {
                    $(".toolbar-waterfall").removeClass("waterfall").removeClass("@yield('m-toolbar_color')");
                }
            });
        });
    </script>
    <!-- m-js_extras: JS Extras add -->
    @yield('m-js_extras')
</body>
</html>