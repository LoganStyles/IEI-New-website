@php $title="$homes->title"; @endphp
@php $author="$homes->author"; @endphp
@php $keywords="$homes->keywords"; @endphp
@php $description="$homes->description"; @endphp
@extends('layouts.default')
@section('content')
    <!-- Slider ============================================= -->
    <section id="slider" class="slider-element full-screen clearfix">
        <!-- Flex Slide ============================================= -->
        <div class="fslider full-screen" data-speed="1500" data-autoplay="true" data-pause="6000" data-animation="fade" data-arrows="false" data-pagi="false" data-hover="false" data-touch="false">
            <div class="flexslider">
                <div class="slider-wrap">
                <div class="slide full-screen" style="background: url({{ asset('/media/images/slider/') }}/{{ $homes->slide_one_image }}) center center; background-size: cover;">
                        <div class="vertical-middle">
                            <div class="container dark clearfix">
                                <div class="row justify-content-center clearfix">
                                    <div class="col-md-7">
                                        <div class="heading-block nobottomborder parallax nobottommargin" data-0="opacity: 1;margin-top:0px" data-800="opacity: 0.2;margin-top:150px">
                                            <p>{{ $homes->slide_one_p }}</p>
                                            <h2 class="mb-4">{{ $homes->slide_one_h2 }}</h2>
                                            @if(!empty($homes->slide_one_url))
                                            <a href="{{ (strpos($homes->slide_one_url, 'http') !== false)?'': url('').'/' }}{{ $homes->slide_one_url }}" class="button button-border button-circle button-fill fill-from-bottom button-white button-light nott t400"><span>View Details</span></a>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-5 align-self-lg-center align-self-md-baseline">
                                        <a href="#" class="" data-lightbox="iframe"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="slide full-screen" style="background: url({{ asset('/media/images/slider/') }}/{{ $homes->slide_two_image }}) center center; background-size: cover;">
                        <div class="vertical-middle">
                            <div class="container dark clearfix">
                                <div class="row justify-content-center clearfix">
                                    <div class="col-md-7">
                                        <div class="heading-block nobottomborder parallax nobottommargin" data-0="opacity: 1;margin-top:0px" data-800="opacity: 0.2;margin-top:150px">
                                            <p>{{ $homes->slide_two_p }}</p>
                                            <h2 class="mb-4">{{ $homes->slide_two_h2 }}</h2>                                            
                                            @if(!empty($homes->slide_two_url))
                                            <a href="{{ (strpos($homes->slide_two_url, 'http') !== false)?'': url('').'/' }}{{ $homes->slide_two_url }}" class="button button-border button-circle button-fill fill-from-bottom button-white button-light nott t400"><span>View Details</span></a>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-5 align-self-lg-center align-self-md-baseline">
                                        <a href="#" class="" data-lightbox="iframe"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide full-screen" style="background: url({{ asset('/media/images/slider/') }}/{{ $homes->slide_three_image }}) center center; background-size: cover;">
                        <div class="vertical-middle">
                            <div class="container dark clearfix">
                                <div class="row justify-content-center clearfix">
                                    <div class="col-md-7">
                                        <div class="heading-block nobottomborder parallax nobottommargin" data-0="opacity: 1;margin-top:0px" data-800="opacity: 0.2;margin-top:150px">
                                            <p>{{ $homes->slide_three_p }}</p>
                                            <h2 class="mb-4">{{ $homes->slide_three_h2 }}</h2>
                                            @if(!empty($homes->slide_three_url))
                                            <a href="{{ (strpos($homes->slide_three_url, 'http') !== false)?'': url('').'/' }}{{ $homes->slide_three_url }}" class="button button-border button-circle button-fill fill-from-bottom button-white button-light nott t400"><span>View Details</span></a>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-5 align-self-lg-center align-self-md-baseline">
                                        <a href="" class="" data-lightbox="iframe"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if(!empty($homes->slide_four_image))
                    <div class="slide full-screen" style="background: url({{ asset('/media/images/slider/') }}/{{ $homes->slide_four_image }}) center center; background-size: cover;">
                        <div class="vertical-middle">
                            <div class="container dark clearfix">
                                <div class="row justify-content-center clearfix">
                                    <div class="col-md-7">
                                        <div class="heading-block nobottomborder parallax nobottommargin" data-0="opacity: 1;margin-top:0px" data-800="opacity: 0.2;margin-top:150px">
                                            <p>{{ $homes->slide_four_p }}</p>
                                            <h2 class="mb-4">{{ $homes->slide_four_h2 }}</h2>
                                            @if(!empty($homes->slide_four_url))
                                            <a href="{{ (strpos($homes->slide_four_url, 'http') !== false)?'': url('').'/' }}{{ $homes->slide_four_url }}" class="button button-border button-circle button-fill fill-from-bottom button-white button-light nott t400"><span>View Details</span></a>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-5 align-self-lg-center align-self-md-baseline">
                                        <a href="" class="" data-lightbox="iframe"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if(!empty($homes->slide_five_image))
                    <div class="slide full-screen" style="background: url({{ asset('/media/images/slider/') }}/{{ $homes->slide_five_image }}) center center; background-size: cover;">
                        <div class="vertical-middle">
                            <div class="container dark clearfix">
                                <div class="row justify-content-center clearfix">
                                    <div class="col-md-7">
                                        <div class="heading-block nobottomborder parallax nobottommargin" data-0="opacity: 1;margin-top:0px" data-800="opacity: 0.2;margin-top:150px">
                                            <p>{{ $homes->slide_five_p }}</p>
                                            <h2 class="mb-4">{{ $homes->slide_five_h2 }}</h2>
                                            @if(!empty($homes->slide_five_url))
                                            <a href="{{ (strpos($homes->slide_five_url, 'http') !== false)?'': url('').'/' }}{{ $homes->slide_five_url }}" class="button button-border button-circle button-fill fill-from-bottom button-white button-light nott t400"><span>View Details</span></a>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-5 align-self-lg-center align-self-md-baseline">
                                        <a href="" class="" data-lightbox="iframe"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <!-- Slider Bottom Content
        ============================================= -->
        <div class="slider-product-desc dark">
            <div class="row nomargin d-none d-md-flex clearfix">
                <div class="col-md-6" style="border-right: 1px dotted rgba(255,255,255,0.5);">
                    <div class="feature-box fbox-dark fbox-plain nobottommargin">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-money"></i></a>
                        </div>
                        <h3 class="t400 mb-3">{{ $homes->widget_one_title }}</h3>
                        <p class="d-none d-lg-block">{!! $homes->widget_one_desc !!}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="feature-box fbox-dark fbox-plain nobottommargin">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-wallet1"></i></a>
                        </div>
                        <h3 class="t400 mb-3">{{ $homes->widget_two_title }}</h3>
                        <ul class="d-none d-lg-block">
                        <li class="latest_unit">RSA Fund I: <span id="price_fund1"></span></li>
                        <li class="latest_unit">RSA Fund II: <span id="price_fund2"></span></li>
                        <li class="latest_unit">RSA Fund III: <span id="price_fund3"></span></li>
                        <li class="latest_unit">RSA Fund IV: <span id="price_fund4"></span></li>
                        <li><a class="btn btn-primary" href="{{url('/resources/prices')}}">View History</a></li>                        
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CORE SERVICES -->
    <section id="iei-services">
        <div class="spacing pt-5">
            <div class="container">
                <div class="sec-tl2 text-center">
                    <i>CORE SERVICES</i>
                    <h2 class="no-bf" itemprop="headline">{!! $homes->services_title !!}</h2>
                </div>
                <div class="remove-ext3">
                    <div class="row">
                        @foreach($services as $service)
                        <div class="col-md-4 col-sm-6 col-lg-4">
                            <div class="fea-bx">
                                <img src="{{ asset('/media/images/misc/').'/'.$service->image }}" alt="Collecting for Retirment" itemprop="image" height="60"> 
                                <div class="fea-bx-inf">
                                    <a href="{{ (strpos($service->link, 'http') !== false)?$service->link: url('').'/'.$service->link }}"><h4 itemprop="headline">{{$service->title}}</h4></a>
                                    <p itemprop="description">{{$service->description}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- #content end -->
    <!--================================ START ADDITIONAL SERVICES AREA =================================-->
    <section class="think-area responsive-content think--area area-padding" style="background-image:url({{ asset('/media/images/mesh-bg2.png') }});">
    <div class="think-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="iei-heading inspire-title2 mb-40px">
                    <h2 class="iei__title third__title ">{!! $homes->work_with_title !!}</h2>
                </div><!-- end avivon-heading -->
                <div class="iei-btn">
                    <a href="{{ (strpos($homes->work_with_url, 'http') !== false)?'': url('').'/' }}{{ $homes->work_with_url }}" class="iei__btn">Get started <span class="fontello icon-angle-double-right"></span></a>
                </div><!-- end avivon-btn -->
            </div><!-- end col-md-12 -->
        </div><!-- end row -->
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="think-column-box boxed-bg-3" style="background-image: url({{ asset('/media/images/') }}/{{ $homes->work_with_one_image }}">
                    <div class="think-boxed">
                        <h3 class="boxed__title">{{$homes->work_with_widget_one}}</h3>
                        <a href="{{ url('pension/schemes') }}" class="boxed__btn">read more
                            <span class="fontello icon-angle-double-right"></span>
                        </a>
                    </div><!-- end think-boxed -->
                </div><!-- end think-column -->
            </div><!-- end col-md-6 -->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="think-column-box boxed-bg-4" style="background-image: url({{ asset('/media/images/') }}/{{ $homes->work_with_two_image }}">
                    <div class="think-boxed">
                        <h3 class="boxed__title">{{$homes->work_with_widget_two}}</h3>
                        <a href="{{ url('investment/strategy') }}" class="boxed__btn">read more
                            <span class="fontello icon-angle-double-right"></span>
                        </a>
                    </div><!-- end think-boxed -->
                </div><!-- end think-column -->
            </div><!-- end col-md-6 -->
        </div><!-- end row -->
    </div><!-- end container -->
    </div><!-- end think-fluid -->
    </section><!-- end think-area -->
    <!--================================ END ADDITIONAL SERVICES AREA=================================-->

    <!-- IEI TESTIMONIALS Content ============================================= -->
    <section id="content" style="background-color: #F9F9F9; padding: 20px;">
            <div class="container clearfix">
                <h3 class="center">{{$homes->testimonial_title}}</h3>

                <div id="oc-testi" class="owl-carousel testimonials-carousel carousel-widget" data-margin="20" data-items-sm="1" data-items-md="2" data-items-xl="3">
                    @foreach($testimonials as $testimony)                    
                    <div class="oc-item">
                        <div class="testimonial">
                            <div class="testi-image">
                                <a href="#"><img src="{{ asset('/media/images/testimonials/') }}/{{$testimony->image}}" alt="{{$testimony->name}} Testimony"></a>
                            </div>
                            <div class="testi-content">
                                <p>{!!$testimony->testimony!!}</p>
                                <div class="testi-meta">{{$testimony->name}}
                                    <span>{{$testimony->company}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <a href="#" data-toggle="modal" data-target="#testimonyModal" class="button button-3d button-rounded button-blue center reviewing">leave a review</a>
            </div>
    </section><!-- end iei testimonials -->

    <!-- begin iei awards ============================================= -->
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">

                <div class="fancy-title title-center title-dotted-border topmargin-sm">
                    <h3>{{$homes->award_title}}</h3>
                </div>

                <div class="owl-carousel image-carousel carousel-widget flip-card-wrapper clearfix" data-margin="20" data-nav="true" data-pagi="false" data-items-xs="2" data-items-sm="2" data-items-md="2" data-items-lg="3" data-items-xl="3" style="overflow: visible;">
                    @foreach($awards as $award)
                    <div class="flip-card">
                        <div class="flip-card-front dark" style="background-image: url({{ asset('/media/images/awards/') }}/{{$award->image}})">
                            <div class="flip-card-inner">
                                <div class="card nobg noborder">
                                    <div class="card-body">
                                        <h3 class="card-title mb-0">{{$award->title}}</h3>
                                        <span class="font-italic">{{$award->award}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card-back bg-warning no-after">
                            <div class="flip-card-inner">
                                <p class="mb-2 text-white">{{$award->description}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section><!-- end iei awards section -->

    <!-- CAVEAT MODAL ============================================= -->
    <section id="content">
        <div class="{{ (session()->has('success') || session()->has('error'))?'':'modal-on-load' }}" data-target="#myModal1"></div>

        <!-- Modal -->
        <div class="modal1 mfp-hide" id="myModal1">
            <div class="block divcenter" style="background-color: #FFF; max-width: 500px;">
                <div class="center" style="padding: 50px;">
                    <h3 style="color: #f1222a;">{!! $homes->notice_title !!}</h3>
                    <p class="nobottommargin">{!! $homes->notice_body !!}</p>
                </div>
                <div class="section center nomargin" style="padding: 30px;">
                    <a href="#" class="button button-large button-rounded ccaveat" onClick="$.magnificPopup.close();return false;">Close</a>
                </div>
            </div>
        </div>
    </section><!-- end CAVEAT MODAL -->

  <!-- Modal Contact Form ============================================= -->
    <section>
        <div class="modal fade {{ (session()->has('success') || session()->has('error')? 'show':'') }}" style="{{ (session()->has('success') || session()->has('error')? 'padding-right: 17px; display: block;':'') }}" id="testimonyModal" tabindex="-1" role="dialog" aria-labelledby="testimonyModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="testimonyModalLabel">Send Us your feedback</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        @if (session()->has('success'))
                            <div class="alert alert-success w-100">
                                @if(is_array(session()->get('success')))
                                <ul>
                                    @foreach (session()->get('success') as $message)
                                        <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                                @else
                                    {{ session()->get('success') }}
                                @endif
                            </div>
                        @endif
                        @if (session()->has('error'))
                            <div class="alert alert-danger w-100">
                                @if(is_array(session()->get('error')))
                                <ul>
                                    @foreach (session()->get('error') as $message)
                                        <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                                @else
                                    {{ session()->get('error') }}
                                @endif
                            </div>
                        @endif
                        <div class="contact-widget">
                            <div class="contact-form-result"></div>
                            <form class="nobottommargin" id="iei-testimony" name="iei-testimony" action="" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-process"></div>
                                <div class="col_half">
                                    <label for="iei-testimony-name">Name <small>*</small></label>
                                    <input type="text" id="iei-testimony-name" name="name" value="{{ old('name') }}" required="required" class="sm-form-control required" />
                                </div>

                                <div class="col_half col_last">
                                    <label for="iei-testimony-email">Email <small>*</small></label>
                                    <input type="email" id="iei-testimonyemail" name="email" value="{{ old('email') }}" required="required" class="required email sm-form-control" />
                                </div>

                                <div class="clear"></div>

                                <div class="col_half">
                                    <label for="iei-testimony-phone">Phone</label>
                                    <input type="text" id="iei-testimony-phone" name="mobile" value="{{ old('mobile') }}" required="required" class="sm-form-control" />
                                </div>

                                <div class="col_half col_last">
                                    <label for="iei-testimony-org">Organization/Title <small>*</small></label>
                                    <input type="text" id="iei-testimony-org" name="company" value="{{ old('company') }}" required="required" class="required sm-form-control" />
                                </div>

                                <div class="clear"></div>
                                <div class="col_full">
                                    <label for="iei-testimony-message">Upload Photo <small>*</small></label>
                                    <input type="file" id="iei-testimony-file" name="image" required="required" class="required sm-form-control file" data-show-preview="false"/>
                                </div>

                                <div class="clear"></div>

                                <div class="col_full">
                                    <label for="iei-testimony-message">Feedback <small>*</small></label>
                                    <textarea class="required sm-form-control" id="iei-testimony-message" required="required" name="testimony" rows="6" cols="30">{{ old('testimony') }}</textarea>
                                </div>
                                <div class="col_full">
                                    <button class="button button-3d nomargin" type="submit" id="iei-testimony-submit" value="submit">Publish Testimony</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- Modal Contact Form End -->
    </section><!-- end iei testimonials -->
@stop