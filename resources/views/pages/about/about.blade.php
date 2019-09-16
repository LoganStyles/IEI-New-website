@php $title="$page->title"; @endphp
@extends('layouts.default')
@section('content')    
    <!-- Page Title ============================================= -->
    <section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url({{ asset('/media/images/'.$page->breadcrumbs_background) }} ); padding: 120px 0;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
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
    		
    <!--================================ START OFFER AREA =================================-->
    <section class="offer-area responsive-content inspire-area area-padding">
        <div class="offer-fluid">
            <div class="container">
                <div class="row offer-content">
                    <div class="inspire-list-box">
                        <div class="inspire-img mb-30px" style="background-image: url({{ asset('/media/images/'.$about->image) }}); padding: 120px 0;"></div><!-- end inspire-img -->
                        <div class="story-content">
                            <div class="top-story">
                                <span class="fontello icon-achievement success__icon"><img src="{{ asset('/media/images/misc/images/'.$about->success_icon) }}" alt="Collecting for Retirment" itemprop="image" width="50"> </span>
                                <span class="story__numbr counter">{{ $about->success_count }}</span>
                                <span class="story__numbr">+</span>
                            </div><!-- end top-story -->
                            <p class="success__desc">{!! $about->success_desc !!}</p>
                        </div><!-- end story-content -->
                    </div><!-- end col-md-6 -->
                    <div class="offer-list-box">
                        <div class="offer-list-">
                            <div class="iei-heading">
                                <h2 class="iei__title inspire-title">{!! $page->content_title !!}</h2>
                                {!! $page->content !!}
                                <a href="{{ (strpos($about->url, 'http') !== false)?'': url('').'/' }}{{ $about->url }}" class="get__btn">get started
                                    <span class="fontello icon-angle-double-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================================ END OFFER AREA =================================-->

    <!-- Content ============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div class="row bottommargin-lg common-height" style="padding: 10px 0;">

                <div class="col-lg-4 dark col-padding ohidden" style="background-color: #1abc9c;">
                    <div>
                        <h3 class="uppercase" style="font-weight: 600;">{!! $about->vision_title !!}</h3>
                        <p style="line-height: 1.8;">{!! $about->vision_desc !!}</p>
                        
                        <i class="{{ $about->vision_icon }} bgicon"></i>
                    </div>
                </div>

                <div class="col-lg-4 dark col-padding ohidden" style="background-color: #34495e;">
                    <div>
                        <h3 class="uppercase" style="font-weight: 600;">{!! $about->mission_title !!}</h3>
                        <p style="line-height: 1.8;">{!! $about->mission_desc !!}</p>
                        
                        <i class="{{ $about->mission_icon }} bgicon"></i>
                    </div>
                </div>

                <div class="col-lg-4 dark col-padding ohidden" style="background-color: rgb(229, 106, 84);">
                    <div>
                        <h3 class="uppercase" style="font-weight: 600;">{!! $about->ownership_title !!}</h3>
                        <p style="line-height: 1.8;">{!! $about->ownership_desc !!}</p>
                        <i class="{{ $about->mission_icon }} bgicon"></i>
                    </div>
                </div>

            </div>

            <div class="container clearfix">

                <div class="col_one_third">
                    <div class="feature-box fbox-effect">
                        <div class="fbox-icon">
                            <a href=""><img src="{{ asset('/media/images/misc/images/') }}/{{ $about->feature_one_icon }}" itemprop="image" width="50"></a>
                        </div>
                        <h3>{!! $about->feature_one_title !!}</h3>
                        <p>{!! $about->feature_one_desc !!}</p>
                    </div>
                </div>

                <div class="col_one_third">
                    <div class="feature-box fbox-effect">
                        <div class="fbox-icon">
                            <a href=""><img src="{{ asset('/media/images/misc/images/') }}/{{ $about->feature_two_icon }}" itemprop="image" width="50"></a>
                        </div>
                        <h3>{!! $about->feature_two_title !!}</h3>
                        <p>{!! $about->feature_two_desc !!}</p>
                    </div>
                </div>

                <div class="col_one_third col_last">
                    <div class="feature-box fbox-effect">
                        <div class="fbox-icon">
                            <a href=""><img src="{{ asset('/media/images/misc/images/') }}/{{ $about->feature_three_icon }}" itemprop="image" width="50"></a>
                        </div>
                        <h3>{!! $about->feature_three_title !!}</h3>
                        <p>{!! $about->feature_three_desc !!}</p>
                    </div>
                </div>

                <div class="clear"></div>

                <div class="col_one_third nobottommargin">
                    <div class="feature-box fbox-effect">
                        <div class="fbox-icon">
                            <a href=""><img src="{{ asset('/media/images/misc/images/') }}/{{ $about->feature_four_icon }}" itemprop="image" width="50"></a>
                        </div>
                        <h3>{!! $about->feature_four_title !!}</h3>
                        <p>{!! $about->feature_four_desc !!}</p>
                    </div>
                </div>

                <div class="col_one_third nobottommargin">
                    <div class="feature-box fbox-effect">
                        <div class="fbox-icon">
                            <a href=""><img src="{{ asset('/media/images/misc/images/') }}/{{ $about->feature_five_icon }}" itemprop="image" width="50"></a>
                        </div>
                        <h3>{!! $about->feature_five_title !!}</h3>
                        <p>{!! $about->feature_five_desc !!}</p>
                    </div>
                </div>

                <!-- <div class="col_one_third nobottommargin">
                    <div class="feature-box fbox-effect">
                        <div class="fbox-icon">
                            <a href=""><img src="{{ asset('/media/images/misc/images/') }}/{{ $about->feature_six_icon }}" itemprop="image" width="50"></a>
                        </div>
                        <h3>{!! $about->feature_six_title !!}</h3>
                        <p>{!! $about->feature_six_desc !!}</p>
                    </div>
                </div> -->
            </div>

            <a href="{{ $about->help_call_link }}" class="button button-full center tright topmargin footer-stick">
                <div class="container clearfix">
                {!! $about->help_call_action !!} <strong>Start here</strong> <i class="icon-caret-right" style="top:4px;"></i>
                </div>
            </a>

        </div>

    </section><!-- #content end -->
@stop