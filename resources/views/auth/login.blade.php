@extends('layout-home')

@section('content-home')

    <body class="page page-account-form" style="visibility: visible;">

    @include('header-site',['logo' => '/storage/assets/img/logo.svg'])
    <!-- start main -->
    <main>
        <div id="content">
            <div class="container-sm">
                <form action="{{ route('login.post') }}" method="POST" class="account-form form-validation-on-submit">
                    @csrf
                    <div class="app-bar">
                        <div class="app-bar-container">
                            <div class="leading"></div>
                            <div class="app-bar-title">
                                <h1>{{__('menu.Login')}}</h1>
                            </div>
                            <div class="actions"></div>
                        </div>
                    </div>
                    <div class="form-content">
                        <i class="icon-account-login"></i>
                        @if ($errors->has('email') || $errors->has('password'))
                            <div class="notifications-list active">
                                <div class="notification-item danger">
                                    <div class="notification-content">
                                        <i class="icon-alert-triangle notification-icon"></i>
                                        <div class="notification-inner-content">
                                            <div class="notification-title">
                                                @if ($errors->has('email'))
                                                    {{ $errors->first('email') }}
                                                @endif
                                                @if ($errors->has('email'))
                                                    {{ $errors->first('password') }}
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="form-description">
                            Please Enter Your Email and Password.
                        </div>
                        <div class="form-fields">
                            <div>
                                <div class="field field-type-nr-input" data-type="text" data-required="true"
                                     data-required-type="email">
                                    <div class="field-content">
                                        <label for="email">Email</label>
                                        <input type="email" placeholder="Entered Email" id="email"
                                               class="form-control" name="email" required>
                                    </div>
                                </div>
                                @if ($errors->has('email'))
                                    <div class="field-error-msg" id="field_error_email">{{ $errors->first('email') }}</div>
                                @endif
                                <div class="field-error-msg" id="field_error_email"></div>
                            </div>
                            <div>
                                <div class="field field-type-nr-input" data-type="text" data-required="true">
                                    <div class="field-content">
                                        <label for="password">Password</label>
                                        <input type="password" placeholder="Entered Password" id="password"
                                               class="form-control" name="password" required>
                                    </div>
                                    <i class="icon-eye field-show-password"></i>
                                </div>
                                @if ($errors->has('password'))
                                    <div class="field-error-msg" id="field_error_password">{{ $errors->first('password') }}</div>
                                @endif
                                <div class="field-error-msg" id="field_error_password"></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary btn-full btn-icon-right">
                            <span>
                                {{__('menu.Login')}}
                                <i class="icon-arrow-right-1"></i>
                            </span>
                        </button>
                        <a href="/forgot-password">Forgot Password</a>
                    </div>
                </form>
            </div>
        </div>

    </main>

    <!-- start scripts -->
    <script src="/storage/assets/js/env.js"></script>
    <script src="/storage/assets/js/lib/jQuery.min.js"></script>
    <script src="/storage/assets/js/lib/lazyload.min.js"></script>
    <script src="/storage/assets/js/lib/owl.carousel.min.js"></script>
    <script src="/storage/assets/js/super-slider.js"></script>
    <script src="/storage/assets/js/pro-validation.min.js"></script>
    <script src="/storage/assets/js/component.js"></script>
    <script src="/storage/assets/js/scripts.js"></script>

    </body>
@endsection
