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
                            <h1>{{ $page->content_title }}</h1>
                            <div>
                                <h4 style="font-weight: 400;">{{ $page->content }}</h4>
                            </div>
                        </div>
                        
                            <form method="post">
                                {{ csrf_field() }}
                                <fieldset>
                                    <div class="retirement-widget">
                                        <div class="row">
                                            <div class="left-section gender-label-align">
                                                GENDER
                                            </div>
                                            <div class="right-section align-left">
                                                <span class="radio-align">MALE</span>
                                                <span class="radio-check">
                                                    <input id="input-gender-male" name="gender" type="radio" value="M" tabindex="1" checked="checked">
                                                </span>
                                                <span class="radio-check">FEMALE</span>
                                                <span class="radio-check">
                                                    <input id="input-gender-female" name="gender" type="radio" value="F" tabindex="2">
                                                </span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="left-section">
                                                YEARS LEFT TO RETIRE
                                            </div>
                                            <div class="right-section">
                                                <input type="text" placeholder="YEARS" class="form-control year" id="input-current-age" name="age" min="1" max="100" step="1" tabindex="3" title="How old are you now?" validation="required number">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="left-section">
                                                CURRENT RSA BALANCE?
                                            </div>
                                            <div class="right-section">
                                                <input type="text" placeholder="0.00" class="form-control padding-control" id="input-monthly-income" name="income" tabindex="4" title="How much do you currently earn every month?" validation="required number"><span class="currency">₦</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="left-section checkbox-label-align">
                                                I HAVE AN EMPLOYEE PENSION
                                            </div>
                                            <div class="right-section align-left">
                                                <input type="checkbox" class="form-control ie-checkbox" id="input-pension-yn" name="pension" tabindex="5" title="Do you contribute to a pension fund each month?">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="left-section padding-two-rows">
                                                YOUR TOTAL MONTHLY CONTRIBUTION <span style="color: #007bff;">(Employer + Employee)</span>
                                            </div>
                                            <div class="right-section">
                                                <input type="text" class="form-control padding-control" placeholder="0.00" id="input-monthly-ra-contributions" name="contribution" tabindex="6" title="The amount you contribute to a retirement annuity each month over and above your pension fund contributions." validation="required number"><span class="currency">₦</span>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="left-section padding-two-rows">
                                                EXPECTED RETURNS ON YOUR PENSION CONTRIBUTION
                                            </div>
                                            <div class="right-section">

                                                <input type="text" class="form-control padding-control" placeholder="0.00" id="input-savings-value" name="return" tabindex="7" title="How much have you already saved?" validation="required number"><span class="currency">₦</span>
                                            </div>
                                        </div>
                                        <div class="col_full nobottommargin">
                                            <button id="button-action"  class="button button-3d button-black nomargin" id="register-form-submit" name="register-form-submit" value="register">CALCULATE</button>
                                        </div>
                                        @if(isset($result))
                                        <!-- CALCULATOR RESULT -->
                                        <div style="text-align: center;">
                                            <div id="form-calculator-output" class="funds om-output" style="display: inline-block;">
                                                <div class="calculator_result">
                                                    <h2>Result</h2>
                                                    <div class="estimated_result estimated_result_top_margin">
                                                        <h4>What will you get at retirement?</h4>
                                                        <span id="money-at-retirement" class="money">₦  {{ $result["total_package"] }}</span>
                                                    </div>
                                                    <div class="estimated_result">
                                                        <h4>Do I qualify for lumpsum payment?</h4>
                                                        <span class="money" id="lumpsum-qualification">{{ $result["qualify_for_lumpsum"] }}</span>
                                                    </div>
                                                    <div class="estimated_result">
                                                        <h4>My total lumpsum package</h4>
                                                        <span class="money" id="total-lumpsum">₦  {{ $result["lumpsum"] }}</span>
                                                    </div>
                                                    <div class="estimated_result">
                                                        <h4>Do I qualify for programmed redrawal?</h4>
                                                        <span class="money" id="program-withdrawal"><strong>{{ $result["qualify_for_programmed_withdrawal"] }}</strong></span>
                                                    </div>
                                                    <div class="estimated_result estimated_result_top_margin">
                                                        <h4>My monthly pension allowance</h4>
                                                        <span id="monthly-pension-allowance" class="money">₦  {{ $result["monthly_pension"] }}</span>
                                                    </div>
                                                </div>
                                            </div><!-- form-calculator-output -->
                                        </div>
                                        @endif
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                        <div class="promo promo-center">
							<h3>Call us today at <span>+234.081.65722731,</span> <span>+234.081.39882060</span> or Email us at <span>cservice@ieianchorpensions.com </span></h3>
							<span>We strive to provide Our Customers with Top Notch Support to make their Retirement Wonderful</span>
					    </div>
            </div>
        </div>
    </section>
@stop