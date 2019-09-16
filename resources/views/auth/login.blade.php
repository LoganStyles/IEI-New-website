@extends('layouts.app')

@section('content')
    <!-- Content ============================================= -->
    <section id="content" style="width: 100%; height: 100%; position: absolute; left: 0; top: 0; background: url({{ asset('/media/images/slider/2.jpg') }}) center center no-repeat; background-size: cover;">
        <div class="container login d-flex justify-content-center align-items-center mx-auto ">
            <div class="row">
                <div class="col-md-8 col-md-offset-2"style="min-width: 320px;">
                    <div class="panel panel-default">
                        <div class="center text-center">
                            <a href="{{ route('login') }}"><img src="{{ asset('/media/images/slider/login-logo.png') }}" alt="IEI Anchor Pensions"></a>
                        </div>

                        <div class="card divcenter noradius noborder" style="background-color: rgba(255,255,255,0.93);">
                            <div class="card-body">
                                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                    {{ csrf_field() }}
                                    <h4>Login to your Account</h4>

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email" class="col-md-12 control-label pl-0 pr-0">Email or Username</label>

                                        <div class="col-md-12 pl-0 pr-0">
                                            <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password" class="col-md-12 control-label pl-0 pr-0">Password</label>

                                        <div class="col-md-12 pl-0 pr-0">
                                            <input id="password" type="password" class="form-control" name="password" required>

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12 pl-0 pr-0">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12 pl-0 pr-0">
                                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                                        </div>
                                        <div class="col-md-12 pl-0 pr-0 pt-2">
                                            <!-- <button type="submit" class="btn btn-primary">Register</button> -->
                                            <!--<a class="btn btn-link" href="{{ route('password.request') }}">Forgot Your Password?</a>-->
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="line line-sm"></div>
                    <div class="center text-light pt-2"><small>Copyrights &copy; 2019 All Rights Reserved by IEI Anchor Pensions Inc.</small></div>
                </div>
            </div>
    </section><!-- #content end -->
@endsection
