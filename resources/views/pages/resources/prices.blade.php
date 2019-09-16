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
                <div class="col_three_fifth nobottommargin">
                    <div id="job-apply" class="heading-block highlight-me">
                        <h2>{{ $page->content_title }}</h2>
                        <span>{{ $page->content }}</span>
                    </div>
                    
                </div>

                <div class="table-responsive">
                    <table id="datatable1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>RSA Fund I</th>
                                <th>RSA Fund II</th>
                                <th>RSA Fund III</th>
                                <th>RSA Fund IV</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Date</th>
                                <th>RSA Fund I</th>
                                <th>RSA Fund II</th>
                                <th>RSA Fund III</th>
                                <th>RSA Fund IV</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($prices as $price)
                            <tr>
                                <td>{{ $price->report_date }}</td>
                                <td>{{ $price->fund1 }}</td>
                                <td>{{ $price->fund2 }}</td>
                                <td>{{ $price->fund3 }}</td>
                                <td>{{ $price->fund4 }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section><!-- #content end -->
@stop