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
                <div class="col-md-12 w3ls_banner_bottom_left w3ls_courses_left">
                    <div class="w3ls_courses_left_grids">
                        
                        <div class="w3ls_courses_left_grid">
                            
                        </div>
                    </div>

                    <div>
                        <h2></h2>
                        <div style="background-color: #042948; margin-top: 40px; border-top-left-radius: 10px; border-top-right-radius: 10px;"> <p class="product_icon_title" style="color:#fff; font-weight:600; font-size:1.5em;">RSA</p></div>
                        <table id="rsa_fund_table" class="datatable" style="width: 100%; margin-top: -30px;">
                            <thead>
                                <tr>
                                    <th class="text-left">Date</th>
                                    <th class="text-left">Annual Rate of Return</th>
                                    <th class="text-left">3 Year Rolling Average Return</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($rsa as $rate)
                                <tr>
                                    <td>{{ $rate->date }}</td>
                                    <td>{{ $rate->annual }}</td>
                                    <td>{{ $rate->triannual }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot></tfoot>
                        </table>
                    </div>
                    
                    <div style="margin-top: 3%;">
                        <div style="background-color: #042948; margin-top: 40px; border-top-left-radius: 10px; border-top-right-radius: 10px;"> <p class="product_icon_title" style="color:#fff; font-weight:600; font-size:1.5em;">Retiree</p></div>
                        <table id="retiree_fund_table" class="datatable" style="width: 100%; margin-top: -30px;">
                            <thead><tr>
                                    <th class="text-left">Date</th>
                                    <th class="text-left">Annual Rate of Return</th>
                                    <th class="text-left">3 Year Rolling Average Return</th>
                                </tr></thead>
                            <tbody>
                                @foreach($retiree as $rate)
                                <tr>
                                    <td>{{ $rate->date }}</td>
                                    <td>{{ $rate->annual }}</td>
                                    <td>{{ $rate->triannual }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot></tfoot>
                        </table>
                    </div>
                </div>
                            
                <div class="clearfix"> </div>
            </div>
        </div>
    </section><!-- #content end -->
@stop