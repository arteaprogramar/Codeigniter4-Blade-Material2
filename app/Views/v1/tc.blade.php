@extends('v1.templates.material-toolbar-collapse')

@section('m-page_title', 'Toolbar Collapse')
@section('m-toolbar_color', 'light-blue darken-4')
@section('m-toolbar_button_navdrawer', 'true')
@section('m-toolbar_back_url', '#')
@section('m-toolbar_title', $title)
@section('m-toolbar_menu')
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link white-text" href="#">Active</a>
        </li>
        <li class="nav-item">
            <a class="nav-link white-text" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link white-text" href="#">Link</a>
        </li>
    </ul>
@endsection

@section('m-navdrawer')
    <div class="navdrawer-content">
        <div class="navdrawer-header">
            <a class="navbar-brand px-0" href="javascript:void(0)">Navdrawer header</a>
        </div>
        <nav class="navdrawer-nav">
            <a class="nav-item nav-link active" href="javascript:void(0)">Active</a>
            <a class="nav-item nav-link disabled" href="javascript:void(0)">Disabled</a>
            <a class="nav-item nav-link" href="javascript:void(0)">Link</a>
        </nav>
        <div class="navdrawer-divider"></div>
        <p class="navdrawer-subheader">Navdrawer subheader</p>
        <ul class="navdrawer-nav">
            <li class="nav-item">
                <a class="nav-link active" href="javascript:void(0)"><i class="material-icons mr-3">alarm_on</i> Active with icon</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="javascript:void(0)"><i class="material-icons mr-3">alarm_off</i> Disabled with icon</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)"><i class="material-icons mr-3">link</i> Link with icon</a>
            </li>
        </ul>
    </div>
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-12">
            <h3>What is Lorem Ipsum?</h3>

            <p class="text-justify">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </div>
    </div>
@endsection
