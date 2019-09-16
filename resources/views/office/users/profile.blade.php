@extends('layouts.app')
@section('content')
<div class="card border-light mb-3 mt-3">
    <div class="card-header"><strong>Profile</strong></div>
        <div class="card-body">
            <div class="row">
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
                <form class="form-horizontal  col-md-12" method="POST" action="{{ route('office.users.profile') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('firstName') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-12 control-label pl-0">First Name</label>

                        <div class="">
                            <input id="firstName" type="text" class="form-control" name="firstName" value="{{ $users->firstName }}" required autofocus>

                            @if ($errors->has('firstName'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('firstName') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('lastName') ? ' has-error' : '' }}">
                        <label for="lastName" class="col-md-12 control-label pl-0">Last Name</label>
                        <input id="lastName" type="text" class="form-control" name="lastName" value="{{ $users->lastName }}" required>
                        @if ($errors->has('lastName'))
                            <span class="help-block">
                                <strong>{{ $errors->first('lastName') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-12 control-label pl-0">E-Mail Address</label>
                        <input id="email" type="email" class="form-control" name="email" value="{{ $users->email }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    
                    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                        <label for="username" class="col-md-12 control-label pl-0">Username</label>
                        <input id="username" type="text" class="form-control" name="username" value="{{ $users->username }}" required>
                        @if ($errors->has('username'))
                            <span class="help-block">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="row">
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} col-md-6">
                            <label for="password" class="col-md-12 control-label pl-0">Password</label>
                            <input id="password" type="password" class="form-control" name="password">
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
    
                        <div class="form-group col-md-6">
                            <label for="password-confirm" class="col-md-12 control-label pl-0">Confirm Password</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                        </div>
                    </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Save Profile</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
