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
    <header class="navbar navbar-dark fixed-top material-navbar-permanent @yield('m-toolbar_elevation') @yield('m-toolbar_color')">
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

    <!-- Content -->
    <main class="px-md-3 material-main" style="margin-top: 4rem">
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
        });
    </script>
    <!-- m-js_extras: JS Extras add -->
    @yield('m-js_extras')
</body>
</html>