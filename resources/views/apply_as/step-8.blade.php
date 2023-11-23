@extends('apply_as.layout')

@section('content-apply')

    <body class="page page-apply-model-form">


    <!-- start header -->
    @include('apply_as.header')

    <!-- start main -->
    <main>
        <div id="content">
            <input id="token" type="hidden" value="{{$token}}">

            <div class="section">
                <div class="container-lg">
                    <div class="req-message">
                        <div class="req-message-content">
                            <h2>Welcome to Liliana Family</h2>
                            <i class="icon-tick req-message-icon"></i>
                            <div class="req-message-title">Congratulation!</div>
                            <div class="req-message-description">Thank you for submitting your primary details. We'll review the information and aim to respond within 2 business days for confirmation.</div>
                            <div class="req-message-actions">
                                <a href="/dashboard-models" class="btn btn-primary btn-full">
                                    Go Home
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

@endsection
