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
    <!--================================ PENSION SCHEME SERVICE AREA =================================-->
    <section class="single-area responsive-content area-padding">
        <div class="service-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="single-content">
                        <div class="toggle toggle-border">
                                <div class="togglet"><i class="toggle-closed icon-ok-circle"></i><i class="toggle-open icon-remove-circle"></i>{!! $schemes->advisory_service_title !!}</div>
                                <div class="togglec">
                                    <h5>{!! $schemes->advisory_service_sub !!}</h5>
                                    <ul class="plan__list">
                                        {!! $schemes->advisory_service_desc !!}
                                    </ul>
                                </div>
                            </div>

                            <div class="toggle toggle-border">
                                <div class="togglet"><i class="toggle-closed icon-ok-circle"></i><i class="toggle-open icon-remove-circle"></i>{!! $schemes->contribution_scheme_title !!}</div>
                                <div class="togglec">{!! $schemes->contribution_scheme_desc !!}</div>
                            </div>


                            <div class="iei-heading">
                                <h2 class="iei__title">{!! $schemes->planning_service_title !!}</h2>
                                <p class="iei__desc mt-30px mb-40px">{!! $schemes->planning_service_desc !!}</p>
                            </div><!-- end iei-heading -->
                            <div class="single__img mb-50px">
                                <img src="{{ asset('/media/images/') }}/{{ $schemes->service_scheme_image }}" alt="service image" class="img-single">
                            </div><!-- end single__img -->
                                <div class="schemes">
                                    <div class="iei-heading iei-btb">
                                        <h2 class="iei__title">{!! $schemes->when_retired_title !!}</h2>
                                        <p class="iei__desc singlecases__desc mt-30px mb-70px">{!! $schemes->when_retired_desc !!}</p>
                                    </div><!-- end iei-heading -->
                                </div>
                                <div class="schemes">
                                    <div class="iei-heading iei-btb">
                                        <h2 class="iei__title">{!! $schemes->what_activity_title !!}</h2>
                                        <p class="iei__desc mt-25px mb-50px">{!! $schemes->what_activity_desc !!}</p>
                                    </div><!-- end iei-heading -->
                                </div>

                                <div class="schemes">
                                        <div class="iei-heading iei-btb">
                                            <h2 class="iei__title">{!! $schemes->what_income_title !!}</h2>
                                            <p class="iei__desc singlecases__desc2 mt-25px mb-30px">{!! $schemes->what_income_desc !!}</p>
                                        </div><!-- end iei-heading -->
                                </div>
                                <div class="schemes">
                                    <div class="iei-heading iei-btb">
                                        <h2 class="iei__title">{!! $schemes->income_expect_title !!}</h2>
                                        <p class="iei__desc mt-25px mb-50px">{!! $schemes->income_expect_desc !!}</h2></p>
                                    </div><!-- end iei-heading -->
                                </div>

                        </div><!-- end single-content -->
                    </div><!-- end col-md-8 -->

                    <div class="col-md-4">
                        <div class="side-bar">
                            <div class="side__shared help__shared help__bg mb-30px">
                                <div class="iei__help-center">
                                    <h3 class="side__bar-title__title">{!! $schemes->need_help_title !!}</h3>
                                    <p class="iei__help-desc__desc">
                                    {!! $schemes->need_help_desc !!}</p>
                                </div>
                            </div>
                            <div class="download__btn">
                                <a href="{{ url('resources/downloads') }}" class="download__btn-btn">
                                    Download Page <span class="fontello icon-angle-double-right"></span>
                                </a>
                            </div>
                        </div>
                    </div><!-- end col-md-4 -->
                </div><!-- end row -->
            </div><!-- container -->
        </div><!-- end service-fluid -->
    </section><!-- end service-area -->
    <!--================================
            END SERVICE AREA
    =================================-->
@stop