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
    <div class="iei_team_wrapper">
        <div class="line"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!--ul id="myTab2" class="nav nav-pills boot-tabs btc_team_indx_tabs">
                            <li class="active"><a data-toggle="tab" href="#home2">Directors</a></li>
                            <li><a data-toggle="tab" href="#profile2">Management</a></li>
                    </ul-->
                    <div class="center-holder">
                        <ul id="myTab2" class="nav nav-pills boot-tabs">
                            <li class="nav-item"><a class="nav-link" href="#home2" data-toggle="tab">DIRECTORS</a></li>
                            <li class="nav-item"><a class="nav-link active" href="#profile2" data-toggle="tab">MANAGEMENT TEAM</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div  class="tab-content">
                            <div class="tab-pane fade" id="home2">
                                <!-- Team Members START -->
                                <div class="section-block-grey">
                                    <div class="container">
                                        <div class="section-heading center-holder">
                                            <span>Directors</span>
                                            <h3>Executive1 Committee</h3>
                                            <div class="section-heading-line"></div>
                                            <p>We responsibly provide financial services that enable growth and economic progress.</p>
                                        </div>			
                                        <div class="row mt-50">
                                            @foreach($directors as $team)
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <div class="team-box">
                                                    <div class="team-img">
                                                        <img src="{{ asset('/media/images/team/') }}/{{$team->image}}" alt="img">
                                                    </div>
                                                    <div class="team-info">
                                                        <span>{{$team->position}}</span>
                                                        <h4><a href="#">{{$team->name}}</a></h4>
                                                        <p>{{$team->profile}}</p>
                                                    </div>
                                                    <div class="team-social-icons">
                                                        <ul> 	
                                                            <li> <a href="#"><i class="fa fa-facebook"></i></a></li>
                                                            <li> <a href="#"><i class="fa fa-twitter"></i></a></li>	
                                                            <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                                            <li> <a href="#"><i class="fa fa-skype"></i></a></li>	
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach                                                                            
                                        </div>
                                    </div>
                                </div>
                                <!-- Team Members END -->
                            </div>
                            <div class="tab-pane fade show active" id="profile2">
                                <!-- Team Members START -->
                                <div class="section-block-grey">
                                    <div class="container">
                                        <div class="section-heading center-holder">
                                            <span>Management Team</span>
                                            <h3>HEADS OF DEPARTMENT</h3>
                                            <div class="section-heading-line"></div>
                                        </div>			
                                        <div class="row mt-50">
                                            
                                            @foreach($management as $team)
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <div class="team-box">
                                                    <div class="team-img">
                                                        <img src="{{ asset('/media/images/team/') }}/{{$team->image}}" alt="img">
                                                    </div>
                                                    <div class="team-info">
                                                        <span>{{$team->position}}</span>
                                                        <h4><a href="#">{{$team->name}}</a></h4>
                                                        <p>{{$team->profile}}</p>
                                                    </div>
                                                    <div class="team-social-icons">
                                                        <ul> 	
                                                            <li> <a href="#"><i class="fa fa-facebook"></i></a></li>
                                                            <li> <a href="#"><i class="fa fa-twitter"></i></a></li>	
                                                            <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                                            <li> <a href="#"><i class="fa fa-skype"></i></a></li>	
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <!-- Team Members END -->
                            </div>
                        </div>
                </div>
            </div>
        </div>
</div>
@stop