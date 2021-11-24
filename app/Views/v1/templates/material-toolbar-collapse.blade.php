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

    <!--
        m-toolbar_elevation : define elevation
        m-toolbar_color: define toolbar background color
    -->
    <header class="navbar navbar-dark fixed-top toolbar-waterfall @yield('m-toolbar_elevation') @yield('m-toolbar_color')">

        <!-- m-toolbar_button_back:
            If m-toolbar_button_back has been called, then the back button will be shown, otherwise the Navbar button will be shown
        -->
        @if(!@empty(trim($this->yieldContent('m-toolbar_button_back'))))

            <!-- m-toolbar_back_url: define url previous -->
            <a href="@yield('m-toolbar_back_url')" class="btn btn-icon btn-sm">
                <span class="material-icons-outlined">arrow_back</span>
            </a>

        @else

            @if(!@empty(trim($this->yieldContent('m-toolbar_button_navdrawer'))))
                <button aria-controls="nav" aria-expanded="false" aria-label="tn" class="navbar-toggler" data-target="#nav" data-toggle="navdrawer">
                    <span class="navbar-toggler-icon"></span>
                </button>
            @endif

        @endif

        <!-- m-toolbar_title : define toolbar title -->
        <span class="navbar-brand mr-auto">@yield('m-toolbar_title')</span>
        <div class="ml-3">

            <!-- m-toolbar_menu : define menus -->
            @yield('m-toolbar_menu')

        </div>
    </header>
    <div aria-hidden="true" class="navdrawer" id="nav" tabindex="-1">

        <!-- m-navdrawer: create NavDrawer view -->
        @yield('m-navdrawer')

    </div>

    <!--
        toolbar_collapse_img : Toolbar background img
        toolbar_collapse_color : Toolbar background color
        toolbar_collapse_content: Require view content or text
    -->
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

    <div class="jumbotron jumbotron-fluid jumbotron-background mb-5 @yield('m-toolbar_collapse_color')">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-8">
                    @yield('m-toolbar_collapse_content')
                </div>
            </div>
        </div>
    </div>

    <!-- Content -->
    <div style="padding-top: 1rem; display: block">
        <div class="container">

            <!-- m-content: require view or text, this is page content -->
            @yield('m-content')

        </div>
    </div>

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
        });
    </script>
    <!-- m-js_extras: JS Extras add -->
    @yield('m-js_extras');
</body>
</html>