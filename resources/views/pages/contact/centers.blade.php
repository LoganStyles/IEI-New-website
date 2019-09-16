@php $title="$page->title"; @endphp
@extends('layouts.default')
@section('content')    
    <!-- Page Title ============================================= -->
    <section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url({{ asset('/media/images/'.$page->breadcrumbs_background) }}); repeat: no-repeat; padding: 120px 0;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
        <div class="container clearfix text-white">
            <h1>{{ $page->title }}</h1>
            <span>{{ $page->subtitle }}</span>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                @if (!empty($page->parent))
                <li class="breadcrumb-item" aria-current="page">{{ $page->parent }}</li>
                @endif
                <li class="breadcrumb-item active" aria-current="page">{{ $page->title }}</li>
            </ol>
        </div>
    </section><!-- #page-title end -->
    <!-- Page Sub Menu =============================================
    <div id="page-menu">
        <div id="page-menu-wrap">
            <div class="container clearfix">
                <div class="menu-title"> <span>{{ $page->alias }}</span></div>
                <div id="page-submenu-trigger"><i class="icon-reorder"></i></div>
            </div>
        </div>
    </div> #page-menu end -->
    <!-- Content ============================================= -->
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                <div class="clear"></div>
                <!-- Service centers Info ============================================= -->
                <div id="serv-centr" class="row clear-bottommargin">
                    @foreach($branches as $branch)
                    <div class="col-lg-3 col-md-6 bottommargin clearfix">
                        <div class="feature-box fbox-center fbox-bg fbox-plain">
                            <div class="fbox-icon">
                                <a href="#"><i class="icon-map-marker2"></i></a>
                            </div>
                            <h3>{{ $branch->title }}<span class="subtitle">{{ $branch->state }}</span></h3>
                            <div class="">
                                <address> 
                                    <strong>Personnel: <span class="subtitle">{{ $branch->personnel }}</span></strong><br>
                                    {!! $branch->address !!}
                                </address>
                                <abbr title="Phone Number"><strong>Phone:</strong></abbr> {{ $branch->mobile }}<br>
                                @if(!empty($branch->phone))
                                <abbr title="Phone Number"><strong>Phone:</strong></abbr> {{ $branch->phone }}<br>
                                @endif
                            </div><!-- .address end -->
                        </div>
                    </div>
                    @endforeach 
            </div>
        </div>
    </section><!-- #content end -->
@stop