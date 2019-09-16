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
    <section id="pension-calculator">
        <div class="content-wrap">
            <div class="container clearfix">
                <div class=" promo-center bottommargin">
                    <div class="pension-cal-widget">
                        <div class="promo promo-center">
                        <h4 style="font-weight: 400;">View and download our yearly reports and financial statements</h4>
                        </div>

                        <fieldset>
                            <div class="retirement-widget typography">
                                <div class="row">
                                    <div class="small-12 large-10 large-offset-1 columns">
                                    <div class="line"><span style="color:#007bff;font-weight:600;">STATEMENTS</span></div>
                                    
                                    @foreach($statements as $file)                                            
                                        <!-- repeatable elements start -->
                                        <div class="small-12 medium-6 columns end" style="margin-bottom:20px;padding-bottom:40px;">
                                            <div class="row">
                                                <div class="show-for-medium medium-3 large-2 columns">
                                                    <img src="{{ asset('/media/images/misc/images/') }}/{{ $file->icon }}" alt="" width="84">
                                                </div>
                                                <div class="small-12 medium-9 large-10 columns">
                                                    <div class="content js-forms-content" style="height: 197px;">
                                                        <h4><a href="{{ asset('/uploads/documents/') }}/{{ strtolower(str_ireplace(' ','-',$file->category)) }}/{{ $file->file }}" target="_blank">{{ $file->title }}</a></h4>
                                                        <p>{!! $file->description !!}</p>
                                                        <div>
                                                            <a class="button primary" href="{{ asset('/uploads/documents/') }}/{{ strtolower(str_ireplace(' ','-',$file->category)) }}/{{ $file->file }}" target="_blank">Download</a>
                                                            <small>File size: <strong>({{ $file->size }} KB)</strong></small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--row-->
                                            </div>
                                        </div>                                                           
                                        @endforeach
                                        
                                        <div class="line"><span style="color:#007bff;font-weight:600;">RSA REPORTS (2014-2017)</span></div>


                                        @foreach($reportsrsa as $file)                                            
                                        <!-- repeatable elements start -->
                                        <div class="small-12 medium-6 columns end" style="margin-bottom:20px;padding-bottom:40px;">
                                            <div class="row">
                                                <div class="show-for-medium medium-3 large-2 columns">
                                                    <img src="{{ asset('/media/images/misc/images/') }}/{{ $file->icon }}" alt="" width="84">
                                                </div>
                                                <div class="small-12 medium-9 large-10 columns">
                                                    <div class="content js-forms-content" style="height: 197px;">
                                                        <h4><a href="{{ asset('/uploads/documents/') }}/{{ strtolower(str_ireplace(' ','-',$file->category)) }}/{{ $file->file }}" target="_blank">{{ $file->title }}</a></h4>
                                                        <p>{!! $file->description !!}</p>
                                                        <div>
                                                            <a class="button primary" href="{{ asset('/uploads/documents/') }}/{{ strtolower(str_ireplace(' ','-',$file->category)) }}/{{ $file->file }}" target="_blank">Download</a>
                                                            <small>File size: <strong>({{ $file->size }} KB)</strong></small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--row-->
                                            </div>
                                        </div>                                                               
                                        @endforeach

                                        <div class="line"><span style="color:#007bff;font-weight:600;">RETIREE REPORTS (2014-2017)</span></div>
                                        @foreach($reports as $file)                                            
                                        <!-- repeatable elements start -->
                                        <div class="small-12 medium-6 columns end" style="margin-bottom:20px;padding-bottom:40px;">
                                            <div class="row">
                                                <div class="show-for-medium medium-3 large-2 columns">
                                                    <img src="{{ asset('/media/images/misc/images/') }}/{{ $file->icon }}" alt="" width="84">
                                                </div>
                                                <div class="small-12 medium-9 large-10 columns">
                                                    <div class="content js-forms-content" style="height: 197px;">
                                                        <h4><a href="{{ asset('/uploads/documents/') }}/{{ strtolower(str_ireplace(' ','-',$file->category)) }}/{{ $file->file }}" target="_blank">{{ $file->title }}</a></h4>
                                                        <p>{!! $file->description !!}</p>
                                                        <div>
                                                            <a class="button primary" href="{{ asset('/uploads/documents/') }}/{{ strtolower(str_ireplace(' ','-',$file->category)) }}/{{ $file->file }}" target="_blank">Download</a>
                                                            <small>File size: <strong>({{ $file->size }} KB)</strong></small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--row-->
                                            </div>
                                        </div>                                                               
                                        @endforeach

                                        <div class="line"><span style="color:#007bff;font-weight:600;">FUND REPORTS (2018)</span></div>
                                        @foreach($fundsreport as $file)                                            
                                        <!-- repeatable elements start -->
                                        <div class="small-12 medium-6 columns end" style="margin-bottom:20px;padding-bottom:40px;">
                                            <div class="row">
                                                <div class="show-for-medium medium-3 large-2 columns">
                                                    <img src="{{ asset('/media/images/misc/images/') }}/{{ $file->icon }}" alt="" width="84">
                                                </div>
                                                <div class="small-12 medium-9 large-10 columns">
                                                    <div class="content js-forms-content" style="height: 197px;">
                                                        <h4><a href="{{ asset('/uploads/documents/') }}/{{ strtolower(str_ireplace(' ','-',$file->category)) }}/{{ $file->file }}" target="_blank">{{ $file->title }}</a></h4>
                                                        <p>{!! $file->description !!}</p>
                                                        <div>
                                                            <a class="button primary" href="{{ asset('/uploads/documents/') }}/{{ strtolower(str_ireplace(' ','-',$file->category)) }}/{{ $file->file }}" target="_blank">Download</a>
                                                            <small>File size: <strong>({{ $file->size }} KB)</strong></small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--row-->
                                            </div>
                                        </div>                                                               
                                        @endforeach
                                        <div class="line"></div>
                                        
                                        

                                    </div>
                                </div>
                            </div>
                        </fieldset>

                    </div>

                    <div class="promo promo-center">
                        <h3>Call us today at <span>+234.081.65722731,</span> <span>+234.081.39882060</span> or Email us at <span>cservice@ieianchorpensions.com </span></h3>
                        <span>We strive to provide Our Customers with Top Notch Support to make their Retirement Wonderful</span>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
@stop