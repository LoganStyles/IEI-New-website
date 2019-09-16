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
        <div id="faq" class="content-wrap">
            <div class="container clearfix">
                <h3>{!! $page->content_title !!}</h3>
                <div class="divider"><i class="icon-circle"></i></div>
                <div class="col_half nobottommargin">

                    <h4>General FAQs <small>({{ count($general) }})</small></h4>
                    <div class="accordion accordion-border clearfix" data-state="closed">
                        @foreach($general as $faq)
                        <div class="acctitle"><i class="acc-closed icon-question-sign"></i><i class="acc-open icon-question-sign"></i>{!! $faq->question !!}</div>
                        <div class="acc_content clearfix">{!! $faq->answer !!}</div>
                        @endforeach 
                    </div>



                    <h4 class="topmargin">My Retirement Savings Account <small>({{ count($savings) }})</small></h4>
                    <div class="accordion accordion-border nobottommargin clearfix" data-state="closed">
                        @foreach($savings as $faq)
                        <div class="acctitle"><i class="acc-closed icon-question-sign"></i><i class="acc-open icon-question-sign"></i>{!! $faq->question !!}</div>
                        <div class="acc_content clearfix">{!! $faq->answer !!}</div>
                        @endforeach 
                    </div>

                </div>

                <div class="col_half nobottommargin col_last">
                    <h4>About My Retirement <small>({{ count($retirement) }})</small></h4>

                    <div class="accordion accordion-border clearfix" data-state="closed">
                        @foreach($retirement as $faq)
                        <div class="acctitle"><i class="acc-closed icon-question-sign"></i><i class="acc-open icon-question-sign"></i>{!! $faq->question !!}</div>
                        <div class="acc_content clearfix">{!! $faq->answer !!}</div>
                        @endforeach 
                    </div>

                    <h4 class="topmargin">Multi Funds <small>({{ count($multifunds) }})</small></h4>
                    <div class="accordion accordion-border nobottommargin clearfix" data-state="closed">
                        @foreach($multifunds as $faq)
                        <div class="acctitle"><i class="acc-closed icon-question-sign"></i><i class="acc-open icon-question-sign"></i>{!! $faq->question !!}</div>
                        <div class="acc_content clearfix">{!! $faq->answer !!}</div>
                        @endforeach                         
                    </div>



                    <h4 class="topmargin">Micro Pension Funds <small>({{ count($pension) }})</small></h4>
                    <div class="accordion accordion-border nobottommargin clearfix" data-state="closed">
                        @foreach($pension as $faq)
                        <div class="acctitle"><i class="acc-closed icon-question-sign"></i><i class="acc-open icon-question-sign"></i>{!! $faq->question !!}</div>
                        <div class="acc_content clearfix">{!! $faq->answer !!}</div>
                        @endforeach 
                    </div>

                </div>

            </div>
        </div>
    </section><!-- #content end -->
@stop