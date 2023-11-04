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

                            </div>
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
