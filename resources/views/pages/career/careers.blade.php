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
                @if(count($jobs)>=1)
                <div class="col_three_fifth nobottommargin">

                    @foreach($jobs as $job)
                    <div class="col-12">
                        <div class="fancy-title title-bottom-border">
                            <h3>{{ $job->title }}</h3>
                        </div>
                        <p>{!! $job->description !!}</p>
                        <div class="accordion accordion-bg clearfix">
                            <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>Requirements</div>
                            <div class="acc_content clearfix">
                                <ul class="iconlist iconlist-color nobottommargin">
                                    {!! $job->requirements !!}
                                </ul>
                            </div>
                            <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>What we Expect from you?</div>
                            <div class="acc_content clearfix">
                                <ul class="iconlist iconlist-color nobottommargin">
                                    {!! $job->roles !!}
                                </ul>
                            </div>
                            <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i class="acc-open icon-remove-circle"></i>What you've got?</div>
                            <div class="acc_content clearfix">{!! $job->needs !!}</div>
                        </div>
                        <a href="#" data-scrollto="#job-apply" class="button button-3d button-black nomargin">Apply Now</a>
                        <div class="divider divider-short"><i class="icon-star3"></i></div>
                    </div>
                    @endforeach  
                </div>

                <div class="col_two_fifth nobottommargin col_last">
                    <div id="job-apply" class="heading-block highlight-me">
                        <h2>{!! $page->content_title !!}</h2>
                        <span>{!! $page->content !!}</span>
                    </div>
                    
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
                    <form method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-process"></div>
                        <div class="col_half">
                            <label for="iei-jobform-fname">First Name <small>*</small></label>
                            <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}" required="required" class="sm-form-control required" />
                            @if ($errors->has('first_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('first_name') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="col_half col_last">
                            <label for="iei-jobform-lname">Last Name <small>*</small></label>
                            <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}" required="required" class="sm-form-control required" />
                            @if ($errors->has('last_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('last_name') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="clear"></div>
                        <div class="col_full">
                            <label for="iei-jobform-email">Email <small>*</small></label>
                            <input type="email" id="iei-jobform-email" name="email" value="{{ old('email') }}" required="required" class="required email sm-form-control" />
                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="col_full">
                            <label for="iei-jobform-email">Phone <small>*</small></label>
                            <input type="mobile" id="iei-jobform-mobile" name="mobile" value="{{ old('mobile') }}" required="required" class="required email sm-form-control" />
                            @if ($errors->has('mobile'))
                            <span class="help-block">
                                <strong>{{ $errors->first('mobile') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="col_half travel-date-group">
                            <label for="iei-jobform-age">Date of Birth</label>
                            <input name="birthday" id="birthday" type="text" value="{{ old('birthday') }}" required="required" class="form-control tleft past-enabled sm-form-control required" placeholder="DD/MM/YYYY">
                            @if ($errors->has('birthday'))
                            <span class="help-block">
                                <strong>{{ $errors->first('birthday') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="col_half col_last">
                            <label for="iei-jobform-service">State of Origin <small>*</small></label>
                            <select name="state" id="iei-jobform-position"  tabindex="9" class="form-control required" required="required">
                                <option disabled>-- Select State --</option>
                                <option value="Abia">Abia</option>
                                <option value="Adamawa">Adamawa</option>
                                <option value="Anambra">Anambra</option>
                                <option value="Akwa Ibom">Akwa Ibom</option>
                                <option value="Bauchi">Bauchi</option>
                                <option value="Bayelsa">Bayelsa</option>
                                <option value="Benue">Benue</option>
                                <option value="Borno">Borno</option>
                                <option value="Cross River">Cross River</option>
                                <option value="Delta">Delta</option>
                                <option value="Ebonyi">Ebonyi</option>
                                <option value="Enugu">Enugu</option>
                                <option value="Edo">Edo</option>
                                <option value="Ekiti">Adamawa</option>
                                <option value="FCT - Abuja">FCT - Abuja</option>
                                <option value="Gombe">Gombe</option>
                                <option value="Imo">Imo</option>
                                <option value="Jigawa">Jigawa</option>
                                <option value="Kaduna">Kaduna</option>
                                <option value="Kano">Kano</option>
                                <option value="Katsina">Katsina</option>
                                <option value="Kebbi">Kebbi</option>
                                <option value="Kogi">Kogi</option>
                                <option value="Kwara">Kwara</option>
                                <option value="Lagos">Lagos</option>
                                <option value="Nasarawa">Nasarawa</option>
                                <option value="Niger">Niger</option>
                                <option value="Ogun">Ogun</option>
                                <option value="Ondo">Ondo</option>
                                <option value="Osun">Osun</option>
                                <option value="Oyo">Oyo</option>
                                <option value="Plateau">Plateau</option>
                                <option value="Rivers">Rivers</option>
                                <option value="Sokoto">Sokoto</option>
                                <option value="Taraba">Taraba</option>
                                <option value="Yobe">Yobe</option>
                                <option value= "Zamfara">Yobe</option>
                            </select>
                            @if ($errors->has('state'))
                            <span class="help-block">
                                <strong>{{ $errors->first('state') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="clear"></div>
                        <div class="col_full">
                            <label for="iei-jobform-service">Position <small>*</small></label>
                            <input type="text" name="position" value="{{ old('position') }}" id="iei-jobform-salary" size="22" required="required" tabindex="6" class="sm-form-control" />
                            @if ($errors->has('position'))
                            <span class="help-block">
                                <strong>{{ $errors->first('position') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="col_half">
                            <label for="iei-jobform-salary">Expected Salary</label>
                            <input type="text" name="salary" value="{{ old('salary') }}" id="iei-jobform-salary" size="22" required="required" tabindex="6" class="sm-form-control" />
                            @if ($errors->has('salary'))
                            <span class="help-block">
                                <strong>{{ $errors->first('salary') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="col_half col_last travel-date-group">
                            <label for="iei-jobform-start">Start Date</label>
                            <input name="resumption" id="iei-jobform-start" value="{{ old('resumption') }}"  type="text" required="required" class="form-control tleft today sm-form-control" placeholder="DD/MM/YYYY">
                            @if ($errors->has('resumption'))
                            <span class="help-block">
                                <strong>{{ $errors->first('resumption') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="clear"></div>
                        <div class="col_full">
                            <label for="iei-jobform-experience">Upload CV (MAX 2MB)</label>
                            <input id="input-1" name="cv" type="file" class="file" data-show-preview="false">
                            @if ($errors->has('cv'))
                            <span class="help-block">
                                <strong>{{ $errors->first('cv') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="col_full">
                            <label for="iei-jobform-experience">Upload Cover Letter (MAX 2MB)</label>
                            <input id="input-2" name="letter" type="file" class="file" data-show-preview="false">
                            @if ($errors->has('letter'))
                            <span class="help-block">
                                <strong>{{ $errors->first('letter') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="col_full hidden">
                            <input type="text" id="iei-jobform-botcheck" class="sm-form-control" />
                        </div>
                        <div class="col_full">
                            <button class="button button-3d button-large btn-block nomargin" type="submit" value="apply">Send Application</button>
                        </div>
                    </form>
                </div>
            @else
            <h2>There is no opening currently, kindly check later</h2>
            @endif
            </div>
        </div>
    </section><!-- #content end -->
@stop