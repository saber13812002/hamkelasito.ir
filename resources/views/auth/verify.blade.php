@extends('layout-home')

@section('content-home')

    <body class="page page-account-form form-verify-email" style="visibility: visible;">

    @include('header-site',['logo' => '/storage/assets/img/logo.svg'])
    <body>
    <main>
        <article id="content">

            <div class="container-sm">
                <form action="{{ route('verification.resend') }}" method="POST" class="account-form form-validation-on-submit">
                    <div class="app-bar">
                        <div class="app-bar-container">
                            <div class="leading">
                                <a href="./forgot-password.html" class="btn btn-icon" aria-label="Button Label">
                                    <i class="icon-arrow-left-1"></i>
                                </a>
                            </div>
                            <div class="app-bar-title">
                                <h1>{{ __('Verify Your Email Address') }}</h1>
                            </div>
                            <div class="actions">
                                @if (session('resent'))
                                    <div class="alert alert-success" role="alert">
                                        {{ __('A fresh verification link has been sent to your email address.') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-content">
                        <i class="icon-account-forget-password-verify"></i>
                        <div class="form-description">
                            {{ __('Before proceeding, please check your email for a verification link.') }}
                            A verification Link has been sent to <b>liliana@info.com</b>. Please check your email.
                        </div>
                        <a href="./forgot-password.html" class="edit-email">
                            Liliana@info.com
                            <i class="icon-edit"></i>
                        </a>
                        <div class="form-fields">
                            <a href="https://liliana.asensive.ir/api/uploadphoto/" class="form-resend-timer">Send Again<span> After <span class="timer">2:00</span></span></a>
                        </div>
                    </div>
                </form>
            </div>

        </article>
    </main>

    <!-- start scripts -->
    <script src="/storage/assets/js/lib/jQuery.min.js"></script>
    <script src="/storage/assets/js/lib/lazyload.min.js"></script>
    <script src="/storage/assets/js/super-slider.js"></script>
    <script src="/storage/assets/js/component.js"></script>
    <script src="/storage/assets/js/scripts.js"></script>
    </body>
@endsection
