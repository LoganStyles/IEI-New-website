@php $title="Online Statements"; @endphp
@extends('layouts.default')
@section('content')    
    <!-- Page Title ============================================= -->
    <section id="page-title" style="background-image: url({{ asset('/media/images/'.$page->breadcrumbs_background) }}); background-size:cover; repeat: no-repeat; padding: 120px 0;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
        <div class="container clearfix text-white">
            <h1>Online Statements</h1>
            <span>Online Statements</span>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                <li class="breadcrumb-item" aria-current="page">Resources</li>
                <li class="breadcrumb-item active" aria-current="page">Online Statements</li>
            </ol>
        </div>
    </section><!-- #page-title end -->
    <!-- Page Sub Menu ============================================= -->
    <div id="page-menu">
        <div id="page-menu-wrap">
            <div class="container clearfix">
                <div class="menu-title"> <span>Online Statements</span></div>
                <div id="page-submenu-trigger"><i class="icon-reorder"></i></div>
            </div>
        </div>
    </div><!-- #page-menu end -->
    <!-- Content ============================================= -->
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
               
            </div>
        </div>
    </section><!-- #content end -->
@stop