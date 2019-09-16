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
                <div style="background-color: #042948; margin-top: 40px; border-top-left-radius: 10px; border-top-right-radius: 10px;"> <p class="product_icon_title" style="color:#fff;">&nbsp;RSA</p></div>
                <table id="rsaTable" class="datatable" style=" width: 100%;">
                    <thead>
                        <tr>
                            <td>RSA</td>
                            <td>2018-04-17</td>
                            <td>2018-04-16</td>
                            <td>2018-04-15</td>
                            <td>2018-04-14</td>
                            <td>2018-04-13</td>
                            <td>2018-04-12</td>
                            <td>2018-04-11</td>                                
                        </tr>
                    </thead>
                            <tbody>
                                <tr>
                                    <td style="text-align:left; color: #c59825;">CASH</td>
                                    <td style="text-align:left;">0.6%</td>
                                    <td style="text-align:left;">0.63%</td>
                                    <td style="text-align:left;">0.49%</td>
                                    <td style="text-align:left;">0.49%</td>
                                    <td style="text-align:left;">0.49%</td>
                                    <td style="text-align:left;">0.64%</td>
                                    <td style="text-align:left;">0.56%</td>
                                </tr>
                                <tr>
                                    <td style="text-align:left; color: #c59825;">MUTUAL FUNDS</td>
                                    <td style="text-align:left;">0.33%</td>
                                    <td style="text-align:left;">0.33%</td>
                                    <td style="text-align:left;">0.33%</td>
                                    <td style="text-align:left;">0.33%</td>
                                    <td style="text-align:left;">0.33%</td>
                                    <td style="text-align:left;">0.33%</td>
                                    <td style="text-align:left;">0.33%</td>
                                </tr>
                                <tr>
                                    <td style="text-align:left; color: #c59825;">EQUITIES</td>
                                    <td style="text-align:left;">5.84%</td>
                                    <td style="text-align:left;">5.54%</td>
                                    <td style="text-align:left;">5.48%</td>
                                    <td style="text-align:left;">5.48%</td>
                                    <td style="text-align:left;">5.48%</td>
                                    <td style="text-align:left;">5.33%</td>
                                    <td style="text-align:left;">5.29%</td>
                                </tr>
                                <tr>
                                    <td style="text-align:left; color: #c59825;">COMM. PAPERS-U</td>
                                    <td style="text-align:left;">1.9%</td>
                                    <td style="text-align:left;">1.9%</td>
                                    <td style="text-align:left;">1.9%</td>
                                    <td style="text-align:left;">1.9%</td>
                                    <td style="text-align:left;">1.9%</td>
                                    <td style="text-align:left;">1.9%</td>
                                    <td style="text-align:left;">1.9%</td>
                                </tr>
                                <tr>
                                    <td style="text-align:left; color: #c59825;">CORPORATE BONDS</td>
                                    <td style="text-align:left;">7.03%</td>
                                    <td style="text-align:left;">7.01%</td>
                                    <td style="text-align:left;">7.03%</td>
                                    <td style="text-align:left;">7.03%</td>
                                    <td style="text-align:left;">7.03%</td>
                                    <td style="text-align:left;">7.03%</td>
                                    <td style="text-align:left;">7.03%</td>
                                </tr>
                                <tr>
                                    <td style="text-align:left;color: #c59825;">FIXED DEPOSIT</td>
                                    <td style="text-align:left;">18.67%</td>
                                    <td style="text-align:left;">19.05%</td>
                                    <td style="text-align:left;">19.09%</td>
                                    <td style="text-align:left;">19.09%</td>
                                    <td style="text-align:left;">19.09%</td>
                                    <td style="text-align:left;">19.09%</td>
                                    <td style="text-align:left;">19.09%</td>
                                </tr>
                                <tr>
                                    <td style="text-align:left; color: #c59825;">INFRASTRUCTURE BOND</td>
                                    <td style="text-align:left;">0.64%</td>
                                    <td style="text-align:left;">0.64%</td>
                                    <td style="text-align:left;">0.64%</td>
                                    <td style="text-align:left;">0.64%</td>
                                    <td style="text-align:left;">0.64%</td>
                                    <td style="text-align:left;">0.64%</td>
                                    <td style="text-align:left;">0.64%</td>
                                </tr>
                                <tr>
                                    <td style="text-align:left;color: #c59825;">FGN BOND</td>
                                    <td style="text-align:left;">48.59%</td>
                                    <td style="text-align:left;">48.52%</td>
                                    <td style="text-align:left;">48.63%</td>
                                    <td style="text-align:left;">48.63%</td>
                                    <td style="text-align:left;">48.63%</td>
                                    <td style="text-align:left;">48.65%</td>
                                    <td style="text-align:left;">48.64%</td>
                                </tr>
                                <tr>
                                    <td style="text-align:left; color: #c59825;">TREASURY BILLS</td>
                                    <td style="text-align:left;">11.7%</td>
                                    <td style="text-align:left;">11.68%</td>
                                    <td style="text-align:left;">11.7%</td>
                                    <td style="text-align:left;">11.7%</td>
                                    <td style="text-align:left;">11.7%</td>
                                    <td style="text-align:left;">11.7%</td>
                                    <td style="text-align:left;">11.7%</td>
                                </tr>
                                <tr>
                                    <td style="text-align:left; color: #c59825;">STATE GOVT BONDS</td>
                                    <td style="text-align:left;">11.7%</td>
                                    <td style="text-align:left;">11.68%</td>
                                    <td style="text-align:left;">11.7%</td>
                                    <td style="text-align:left;">11.7%</td>
                                    <td style="text-align:left;">11.7%</td>
                                    <td style="text-align:left;">11.7%</td>
                                    <td style="text-align:left;">11.7%</td>
                                </tr>
                            </tbody>
                    <tfoot><tr style="font-weight:600; color: #0d65d8;"><td>TOTAL</td><td>100%</td><td>100%</td><td>100%</td><td>100%</td><td>100%</td><td>100%</td><td>100%</td></tr></tfoot>
                </table>

                <div style="margin-top: 3%;">
                    <div style="background-color: #042948; border-top-left-radius: 10px; border-top-right-radius: 10px;"> <p class="product_icon_title" style="color:#fff;">&nbsp;Retiree</p></div>
                    <table id="retireeTable" class="datatable" style=" width: 100%;">
                        <thead>
                            <tr>
                                <td>RETIREE</td>
                                <td>2018-04-17</td>
                                <td>2018-04-16</td>
                                <td>2018-04-15</td>
                                <td>2018-04-14</td>
                                <td>2018-04-13</td>
                                <td>2018-04-12</td>
                                <td>2018-04-11</td>                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                        <td style="text-align:left; color: #c59825;">CASH</td>
                                        <td style="text-align:left;">1.9%</td>
                                        <td style="text-align:left;">1.98%</td>
                                        <td style="text-align:left;">1.7%</td>
                                        <td style="text-align:left;">1.7%</td>
                                        <td style="text-align:left;">1.7%</td>
                                        <td style="text-align:left;">1.7%</td>
                                        <td style="text-align:left;">1.7%</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:left; color: #c59825;">CORPORATE BONDS</td>
                                        <td style="text-align:left;">6.32%</td>
                                        <td style="text-align:left;">6.31%</td>
                                        <td style="text-align:left;">6.33%</td>
                                        <td style="text-align:left;">6.33%</td>
                                        <td style="text-align:left;">6.33%</td>
                                        <td style="text-align:left;">6.33%</td>
                                        <td style="text-align:left;">6.33%</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:left; color: #c59825;">COMM.PAPERS-U</td>
                                        <td style="text-align:left;">2.38%</td>
                                        <td style="text-align:left;">2.37%</td>
                                        <td style="text-align:left;">2.38%</td>
                                        <td style="text-align:left;">2.38%</td>
                                        <td style="text-align:left;">2.38%</td>
                                        <td style="text-align:left;">2.38%</td>
                                        <td style="text-align:left;">2.38%</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:left; color: #c59825;">FIXED DEPOSIT</td>
                                        <td style="text-align:left;">19.52%</td>
                                        <td style="text-align:left;">19.51%</td>
                                        <td style="text-align:left;">19.56%</td>
                                        <td style="text-align:left;">19.56%</td>
                                        <td style="text-align:left;">19.56%</td>
                                        <td style="text-align:left;">19.56%</td>
                                        <td style="text-align:left;">19.56%</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:left; color: #c59825;">TREASURY BILLS</td>
                                        <td style="text-align:left;">11.69%</td>
                                        <td style="text-align:left;">11.67%</td>
                                        <td style="text-align:left;">11.71%</td>
                                        <td style="text-align:left;">11.71%</td>
                                        <td style="text-align:left;">11.7%</td>
                                        <td style="text-align:left;">11.7%</td>
                                        <td style="text-align:left;">11.7%</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:left; color: #c59825;">FGN BONDS</td>
                                        <td style="text-align:left;">58.2%</td>
                                        <td style="text-align:left;">58.15%</td>
                                        <td style="text-align:left;">58.32%</td>
                                        <td style="text-align:left;">58.32%</td>
                                        <td style="text-align:left;">58.32%</td>
                                        <td style="text-align:left;">58.33%</td>
                                        <td style="text-align:left;">58.33%</td>
                                    </tr>
                        </tbody>
                        <tfoot>
                            <tr style="font-weight:600; color: #0d65d8;"><td>TOTAL</td><td>100%</td><td>100%</td><td>100%</td><td>100%</td><td>100%</td><td>100%</td><td>100%</td></tr>
                        </tfoot>
                    </table>
                
                </div>
            </div>
        </div>
    </section><!-- #content end -->
@stop