@php $title="$page->title"; @endphp
@extends('layouts.default')
@section('content')    
    <!-- Page Title ============================================= -->
    <section id="page-title" class="page-title-parallax" style="background-image: url({{ asset('/media/images/'.$page->breadcrumbs_background) }}); repeat: no-repeat; padding: 120px 0;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
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
                <!-- Postcontent ============================================= -->
                <div class="postcontent nobottommargin">
                    <h3>{!! $page->content_title !!}</h3>
                    <div class="contact-widget">
                        <div class="contact-form-result"></div>
                        
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
                        <form class="nobottommargin" id="iei-contactform" name="iei-contactform" method="post">
                            {{ csrf_field() }}
                            <div class="form-process"></div>
                            <div class="col_one_third">
                                <label for="iei-contactform-name">Name <small>*</small></label>
                                <input type="text" id="iei-contactform-name" name="name" value="{{ old('name') }}" required="required" class="sm-form-control required" />
                                @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="col_one_third">
                                <label for="iei-contactform-email">Email <small>*</small></label>
                                <input type="email" id="iei-contactform-email" name="email" value="{{ old('email') }}" required="required" class="required email sm-form-control" />
                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="col_one_third col_last">
                                <label for="iei-contactform-phone">Phone</label>
                                <input type="text" id="iei-contactform-phone" name="mobile" value="{{ old('mobile') }}" required="required" class="sm-form-control" />
                                @if ($errors->has('mobile'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('mobile') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="clear"></div>
                            <div class="col_one_third">
                                <label for="iei-contactform-name">PIN <small>*</small></label>
                                <input type="text" id="iei-contactform-pin" name="pin" value="{{ old('pin') }}" required="required" class="sm-form-control required" />
                                @if ($errors->has('pin'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('pin') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="col_one_third">
                                <label for="iei-contactform-employer">Employer <small>*</small></label>
                                <input type="text" id="iei-contactform-employer" name="employer" value="{{ old('employer') }}" required="required" class="sm-form-control required" />
                                @if ($errors->has('employer'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('employer') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="clear"></div>
                            <div class="col_two_third">
                                <label for="iei-contactform-subject">Subject <small>*</small></label>
                                <input type="text" id="iei-contactform-subject" name="subject" value="{{ old('subject') }}" required="required" class="required sm-form-control" />
                                @if ($errors->has('subject'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('subject') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="col_one_third col_last">
                                <label for="iei-contactform-service">Feedback Type</label>
                                <select id="iei-contactform-service" name="type" class="sm-form-control" required="required">
                                    <option>-- Select One --</option>
                                    <option value="Issue">Issue</option>
                                    <option value="Suggestion">Suggestion</option>
                                    <option value="Enquiry">Enquiry</option>
                                </select>
                                @if ($errors->has('type'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('type') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="clear"></div>
                            <div class="col_full">
                                <label for="iei-contactform-message">Message <small>*</small></label>
                                <textarea class="required sm-form-control" id="iei-contactform-message" required="required" name="message" rows="6" cols="30">{{ old('message') }}</textarea>
                                @if ($errors->has('message'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('message') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="col_full hidden">
                                <input type="text" id="iei-contactform-botcheck" class="sm-form-control" />
                            </div>
                            <div class="col_full">
                                <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                                <div class="g-recaptcha" data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}"></div>
                            </div>
                            <div class="col_full">
                                <button class="button button-3d nomargin" type="submit" id="iei-contactform-submit" value="submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div><!-- .postcontent end -->
                <!-- Sidebar ============================================= -->
                <div class="sidebar col_last nobottommargin">
                    <address> 
                        <strong>Headquarters:</strong><br>
                        22, Otukpo Street,<br>
                        Off Gimbiya Street, <br>
                        Area 11, Garki, <br>
                        Abuja, Nigeria 
                    </address>
                    
                    <address> 
                        <strong>Bank: UBA</strong><br>
                        <abbr title="Account Name"><strong>Account Name:</strong></abbr> UPCL/IEI-ANCHOR PENSIONS RSA CONTRIBUTION <br>
                         <abbr title="IEI Account Number"><strong>Account No:</strong></abbr> 1006236132 <br>
                    </address>
                    
                    <abbr title="Phone Number"><strong>Phone:</strong></abbr> (234) 0816 5722 731<br>
                    <abbr title="Phone Number"><strong>Phone:</strong></abbr> (234) 0813 9882 060<br>
                    <abbr title="Email Address"><strong>Email:</strong></abbr> cservice@ieianchorpensions.com
                    <div class="widget noborder notoppadding">
                        <a href="https://web.facebook.com/anchorpensions?_rdc=1&_rdr" class="social-icon si-small si-dark si-facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>
                        <a href="https://twitter.com/ieiapensionmgrs" class="social-icon si-small si-dark si-twitter">
                            <i class="icon-twitter"></i>
                            <i class="icon-twitter"></i>
                       </a>
                        <a href="https://ng.linkedin.com/company/iei-anchor-pension-managers-limited" class="social-icon si-small si-dark si-linkedin">
                            <i class="icon-linkedin"></i>
                            <i class="icon-linkedin"></i>
                        </a>

                    </div>
                </div><!-- .sidebar end -->
            </div>
        </div>
    </section><!-- #content end -->
@stop