@extends('layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-4">
                                     <button type="button" class="btn btn-primary btn-block">rtl/ltr</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Check Your Locale
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">English</a>
                            <a class="dropdown-item" href="#">Arabic</a>
                        </div>
                    </div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                            You are Logged In
                        @else
                            You need login. please click <a href="{{ route('login') }}"> here to login </a> or <a href="{{ route('register') }}"> here to register </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
