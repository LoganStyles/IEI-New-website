@extends('layouts.app')
@section('content')
    <div class="card border-light mb-3 mt-3">
        <div class="card-header"><strong>Dashboard</strong></div>
            <div class="card-body">
                <div class="row">
                    <h5 class="card-title">IEI Anchor Pension</h5>
                    <p class="card-text">Welcome to IEI Back Office</p>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!

                    @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
                </div>
            </div>
        </div>
    </div>
@endsection
