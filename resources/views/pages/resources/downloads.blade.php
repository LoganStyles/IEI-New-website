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
                            <h4 style="font-weight: 400;">Download guidelines and forms to meet your Pension needs</h4>
                        </div>

                        <fieldset>
                            <div class="retirement-widget typography">
                                <div class="row">
                                    <div class="small-12 large-10 large-offset-1 columns">
                                        <!--- Begin Checklist Requirements Toggle -->
                                        <div class="toggle toggle-bg" data-state="open">
                                            <div class="togglet"><i class="toggle-closed icon-line-plus"></i><i class="toggle-open icon-line-cross"></i>Checklist Requirements</div>
                                            <ul class="forms accordion togglec">
                                                <li class="accordion-item is-active">
                                                    <div class="accordion-content" style="display: block;">
                                                        <div class="row small-collapse">
                                                            @foreach($checklist as $file)                                            
                                                            <!-- repeatable elements start -->
                                                            <div class="small-12 medium-6 columns end">
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
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                        <!--- Begin Data Re-capture Toggle -->
                                        <div class="toggle toggle-bg">
                                            <div class="togglet"><i class="toggle-closed icon-line-plus"></i><i class="toggle-open icon-line-cross"></i>Data Re-capture</div>
                                            <ul class="forms accordion togglec">
                                                <li class="accordion-item is-active">
                                                    <div class="accordion-content" style="display: block;">
                                                        <div class="row small-collapse">
                                                            @foreach($recapture as $file)                                            
                                                            <!-- repeatable elements start -->
                                                            <div class="small-12 medium-6 columns end">
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
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                        <!--- Begin Forms Toggle -->
                                        <div class="toggle toggle-bg">
                                            <div class="togglet"><i class="toggle-closed icon-line-plus"></i><i class="toggle-open icon-line-cross"></i>Forms</div>
                                            <ul class="forms accordion togglec">
                                                <li class="accordion-item is-active">
                                                    <div class="accordion-content" style="display: block;">
                                                        <div class="row small-collapse">
                                                            @foreach($forms as $file)                                            
                                                            <!-- repeatable elements start -->
                                                            <div class="small-12 medium-6 columns end">
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
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>                                        
                                        </div>

                                        <!--- Begin Guidelines Toggle -->
                                        <div class="toggle toggle-bg">
                                            <div class="togglet"><i class="toggle-closed icon-line-plus"></i><i class="toggle-open icon-line-cross"></i>Guidelines</div>
                                            <ul class="forms accordion togglec">
                                                <li class="accordion-item is-active">
                                                    <div class="accordion-content" style="display: block;">
                                                        <div class="row small-collapse">
                                                            @foreach($guidelines as $file)                                            
                                                            <!-- repeatable elements start -->
                                                            <div class="small-12 medium-6 columns end">
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
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>                                                
                                        </div>

                                        <!--- Begin Letters Toggle -->
                                        <div class="toggle toggle-bg">
                                            <div class="togglet"><i class="toggle-closed icon-line-plus"></i><i class="toggle-open icon-line-cross"></i>Letters</div>
                                            <ul class="forms accordion togglec">
                                                <li class="accordion-item is-active">
                                                    <div class="accordion-content" style="display: block;">
                                                        <div class="row small-collapse">
                                                            @foreach($letters as $file)                                            
                                                            <!-- repeatable elements start -->
                                                            <div class="small-12 medium-6 columns end">
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
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>                                                
                                        </div>

                                        <!--- Begin Multifund Toggle -->
                                        <div class="toggle toggle-bg">
                                            <div class="togglet"><i class="toggle-closed icon-line-plus"></i><i class="toggle-open icon-line-cross"></i>Multifund</div>
                                            <ul class="forms accordion togglec">
                                                <li class="accordion-item is-active">
                                                    <div class="accordion-content" style="display: block;">
                                                        <div class="row small-collapse">
                                                            @foreach($multifund as $file)                                            
                                                            <!-- repeatable elements start -->
                                                            <div class="small-12 medium-6 columns end">
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
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>                                                
                                        </div>

                                        <!--- Begin Newsletters Toggle -->
                                        <div class="toggle toggle-bg">
                                            <div class="togglet"><i class="toggle-closed icon-line-plus"></i><i class="toggle-open icon-line-cross"></i>Newsletters</div>
                                            <ul class="forms accordion togglec">
                                                <li class="accordion-item is-active">
                                                    <div class="accordion-content" style="display: block;">
                                                        <div class="row small-collapse">
                                                            @foreach($newsletters as $file)                                            
                                                            <!-- repeatable elements start -->
                                                            <div class="small-12 medium-6 columns end">
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
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>                                            
                                        </div>

                                        <!--- Begin Newsletters Toggle -->
                                        <div class="toggle toggle-bg">
                                            <div class="togglet"><i class="toggle-closed icon-line-plus"></i><i class="toggle-open icon-line-cross"></i>Corporate Governance Statement</div>
                                            <ul class="forms accordion togglec">
                                                <li class="accordion-item is-active">
                                                    <div class="accordion-content" style="display: block;">
                                                        <div class="row small-collapse">
                                                            @foreach($corporate_gov as $file)                                            
                                                            <!-- repeatable elements start -->
                                                            <div class="small-12 medium-6 columns end">
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
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>                                            
                                        </div>

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