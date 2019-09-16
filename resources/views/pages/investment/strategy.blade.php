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
    <!--================================ START SERVICE AREA =================================-->
    <section class="single-area responsive-content area-padding">
        <div class="service-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="single-content single--content">
                            <div class="single__img mb-50px">
                                <img src="{{ asset('/media/images/') }}/{{ $strategy->image }}" alt="service image" class="img-single">
                            </div><!-- end single__img -->
                            <div class="iei-heading">
                                <h2 class="iei__title">{!! $page->content_title !!}</h2>
                                <p class="iei__desc audit-title mt-30px mb-40px">{!! $page->content !!}</p>
                            </div><!-- end iei-heading -->
                            <div class="single__img clearfix iei-single iei--single">
                                <div class="single__img-img" style="background-image: url({{ asset('/media/images/') }}/{{ $strategy->selection_criteria_image }}); padding: 120px 0;"></div><!-- end single__img-img -->
                                <div class="iei-heading">
                                    <h2 class="iei__title ml-5">{!! $strategy->selection_criteria_title !!}</h2>
                                    <p class="iei__desc mt-20px ml-5">{!! $strategy->selection_criteria_desc !!}</p>
                                </div>
                            </div><!-- end single__img -->
                            
                            
                            <div class="single__img clearfix mt-60px">
                                <div class="iei-heading single__service chart__title">
                                    <h2 class="iei__title">{!! $strategy->exit_strategy_title !!}</h2>
                                    <p class="iei__desc singlecases__desc2 mt-25px mb-30px">{!! $strategy->exit_strategy_desc !!}</p>
                                </div><!-- end iei-heading -->
                                <div class="single__chart line__chart" style="background-image: url({{ asset('/media/images/') }}/{{ $strategy->exit_strategy_image }}); padding: 120px 0;">
                                </div><!-- end single__chart -->
                            </div><!-- end single__img -->



                        </div><!-- end single-content -->
                    </div><!-- end col-md-8 -->


                    <div class="col-md-4">
                        <div class="side-bar">
                            <div class="side__shared mb-30px">
                                <h3 class="side__bar-title">Business Services</h3>
                                <ul class="side__bar-links">
                                    <li>
                                        <a href="{{ url('pension/schemes') }}">Retirement Advisory Service</a>
                                        <span class="fontello icon-angle-double-right"></span>
                                    </li>
                                    <li>
                                        <a href="{{ url('pension/schemes') }}">Retirement planning Service</a>
                                        <span class="fontello icon-angle-double-right"></span>
                                    </li>
                                    <li>
                                        <a href="{{ url('pension/schemes') }}">Voluntary Contribution Scheme</a>
                                        <span class="fontello icon-angle-double-right"></span>
                                    </li>
                                    
                                </ul>
                            </div><!-- end side__shared -->
                            <div class="side__shared help__shared help__bg mb-30px">
                                <div class="iei__help-center">
                                    <h3 class="side__bar-title__title">{!! $strategy->need_help_title !!}</h3>
                                    <p class="iei__help-desc__desc">
                                    {!! $strategy->need_help_desc !!}</p>
                                </div>
                            </div>
                            <div class="download__btn">
                                <a href="{{ url('resources/downloads') }}" class="download__btn-btn">
                                    Download Page <span class="fontello icon-angle-double-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================================ END SERVICE AREA =================================-->
@stop