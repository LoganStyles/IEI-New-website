<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>IEI Anchor Pension Managers Ltd </title>
    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/theme.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/components/bs-datatable.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/scripts/plugins/texteditor/jquery-te-1.4.0.css') }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome JS -->
    <script src="{{ asset('/scripts/jquery.js') }}" type="text/javascript"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>
<body>
    <div id="app">
    <!-- {{ (request()->is('office/login*')) ? 'active' : ''}} -->
        @if (!request()->is('office/login'))
        <nav class=" navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ url('/office') }}">{{ config('app.name', 'Application') }}</a>
            <button class="navbar-toggler d-block d-lg-block border-0" type="button" data-toggle="collapse" data-target="" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/') }}" target="_blank">Home <span class="sr-only">(current)</span></a>
                    </li>
                </ul>                

                <ul class="navbar-nav ml-auto">
                    @guest
                    @else
                    <li class="nav-item dropdown border-0">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-heart"></i> {{ Auth::user()->firstName }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li class="dropdown-item">
                                <a class="nav-link" href="{{ url('/office/profile') }}">Profile</a>
                            </li>
                            <li class="dropdown-item active">
                                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                    @endguest
                </ul>
            </div>
        </nav>
        @endif
        <!-- Bootstrap row -->
        <section class="row" id="body-row">
