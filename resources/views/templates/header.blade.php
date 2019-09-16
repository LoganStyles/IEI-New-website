<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        @if(isset($description)  && !empty($description))
        <meta name="description" content="{{ $description }}">
        @endif
        @if(isset($keywords)  && !empty($keywords))
        <meta name="keywords" content="{{ $keywords }}">
        @endif
        @if(isset($author)  && !empty($author))
        <meta name=" author" content="{{ $author }}">
        @endif
        <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('/css/dark.css') }}" rel="stylesheet" type="text/css"/>
        @if ((strpos($title, 'Welcome') !== false || strpos($title, 'Home') !== false) == "Home")
        <link href="{{ asset('/css/fonts.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('/css/updated-price.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('/css/swiper.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('/css/my-styles.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('/css/colors.css') }}" rel="stylesheet" type="text/css"/>
        @else
        <link href="{{ asset('/css/team_style.css') }}" rel="stylesheet" type="text/css"/>
        @endif
        @if (strpos($title, 'Team') !== false)
        <link type="text/css" href="{{ asset('/css/team/default.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/team/styles.css') }}" rel="stylesheet" id="colors">
        @endif
        @if (strpos($title, 'Downloads') !== false || strpos($title, 'Financial Report') !== false)
        <link type="text/css" href="{{ asset('/css/downloads.css') }}" rel="stylesheet">
        @endif
        <link href="{{ asset('/css/services.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('/css/responsive.css') }}" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap Data Table Plugin -->
        <link href="{{ asset('/css/components/bs-datatable.css') }}" rel="stylesheet" type="text/css" />
        <!-- Date & Time Picker CSS -->
        <link href="{{ asset('/css/components/datepicker.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/css/components/timepicker.css') }}" rel="stylesheet"  type="text/css" />
        <!-- Bootstrap File Upload CSS -->
        <link href="{{ asset('/css/components/bs-filestyle.css') }}" rel="stylesheet"  type="text/css" />
        <link href="{{ asset('/css/font-icons.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('/css/animate.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('/css/magnific-popup.css') }}" rel="stylesheet" type="text/css"/>
        
        
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans:300,400,700" rel="stylesheet" type="text/css"/>
        <title>IEI Anchor Pension Managers Ltd  - {{$title}}</title>
    </head>
    <body class="stretched" data-loader="12">
        <div id="wrapper" class="clearfix">
        <header id="header" class="{{ (strpos($title, 'Welcome') !== false || strpos($title, 'Home') !== false) ? 'transparent-header no-sticky dark clearfix' : 'full-header' }}">
            <div id="header-wrap">
                <div class="container clearfix">
                    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
                    <!-- Logo ============================================= -->
                    <div id="logo">
                        @if ((strpos($title, 'Welcome') !== false || strpos($title, 'Home') !== false) == "Home")
                        <!-- //the logo for the home page -->
                        <a href="{{ url('')}}" class="standard-logo" data-dark-logo="{{ asset('/media/images/logo-dark.png') }}"><img src="{{ asset('/media/images/logo.png') }}" alt="IEI Anchor Pension Logo"></a>
                        <a href="{{ url('')}}" class="retina-logo" data-dark-logo="{{ asset('/media/images/logo-dark@2x.png') }}"><img src="{{ asset('/media/images/logo@2x.png') }}" alt="IEI Anchor Pension Logo"></a>
                        @else
                        <!-- the logo for the other pages -->
                        <a href="{{ url('')}}" class="standard-logo" data-dark-logo="{{ asset('/media/images/logo-dark.png') }}"><img src="{{ asset('/media/images/logo.png') }}" alt="IEI Anchor Pension Logo"></a>
						<a href="{{ url('')}}" class="retina-logo" data-dark-logo="{{ asset('/media/images/logo.png') }}"><img src="{{ asset('/media/images/logo.png') }}" alt="IEI Anchor Pension Logo"></a>
                        @endif</a>
                    </div><!-- #logo end -->
                    <!-- Primary Navigation ============================================= -->
                    <nav id="primary-menu">
                        <ul>
                            @foreach($navigation as $nav)
                                @if($nav->slug=='rsa')
                                <li><a href="{{ (strpos($nav->url, 'http') !== false)?$nav->url: url('').'/'.$nav->url }}" target="_blank" title="{{ $nav->page }}"><i class="icon-user-lock"></i>{{ $nav->page }}</a></li>
                                @elseif($nav->slug=='epccos')
                                <li><a class="login-button" href="{{ (strpos($nav->url, 'http') !== false)?$nav->url: url('').'/'.$nav->url }}" target="_blank" title="" itemprop="url"><i class="icon-user-lock"></i>{{ $nav->page }}</a></li>
                                @else
                                <li class=" {{ request()->is('')? 'current' : '' }}"><a href="{{ (strpos($nav->url, 'http') !== false  || $nav->url=='#' )?$nav->url: url('').'/'.$nav->url }}"><div>{{ $nav->page }} {!! ($nav->sub)?'<i class="icon-caret-down1"></i>':'' !!}</div></a>
                                    @if($nav->sub)
                                    <ul>
                                        @foreach($nav->menu as $sub)
                                        <li><a href="{{ (strpos($sub->url, 'http') !== false)?$sub->url: url('').'/'.$sub->url }}" target="{{ (strpos($sub->url, 'http') !== false)?'_blank':'self' }}"><div>{{ $sub->page }}</div></a></li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </li>
                                @endif
                            @endforeach
                            
                        </ul>
                        <!-- Top Search ============================================= -->
                        <!--div id="top-search">
                            <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
                            <form action="search" method="get">
                                <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
                            </form>
                        </div> #top-search end -->
                    </nav><!-- #primary-menu end -->
                </div>
            </div>
        </header><!-- #header end -->        
