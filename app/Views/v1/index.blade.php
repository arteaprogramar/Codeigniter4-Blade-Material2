@extends('v1.templates.material-toolbar')

@section('m-page_title', 'Toolbar')
@section('m-toolbar_elevation', 'shadow-1')
@section('m-toolbar_color', 'light-blue darken-4')
@section('m-toolbar_button_back', 'true')
@section('m-toolbar_button_back_color', 'text-white')
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
