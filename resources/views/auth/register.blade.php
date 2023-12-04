@extends('layout-home')
@section('content-home')
    <body class="page page-account-form form-email form-email-model" style="visibility: visible;">

    @include('header-site')
    <!-- start main -->
    <main>
        <div id="content">
            <div class="container-sm">
                <form action="{{ route('register') }}" method="POST" class="account-form form-validation-on-submit">
                    @csrf
                    <div class="app-bar">
                        <div class="app-bar-container">
                            <div class="leading"></div>
                            <div class="app-bar-title">
                                <h1>{{ __('Register') }}</h1>
                            </div>
                            <div class="actions"></div>
                        </div>
                    </div>
                    <div class="form-content">
                        <i class="icon-account-email"></i>
                        @if ($errors->has('email') || $errors->has('password') || $errors->has('name'))
                            <div class="notifications-list active">
                                <div class="notification-item danger">
                                    <div class="notification-content">
                                        <i class="icon-alert-triangle notification-icon"></i>
                                        <div class="notification-inner-content">
                                            <div class="notification-title">
                                                @if ($errors->has('email'))
                                                    {{ $errors->first('email') }}
                                                @endif
                                                @if ($errors->has('password'))
                                                    {{ $errors->first('password') }}
                                                @endif
                                                @if ($errors->has('name'))
                                                    {{ $errors->first('name') }}
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="form-description">
                            Please Enter Your Email.
                        </div>
                        <div class="form-fields">
                            <div>
                                <div class="field field-type-nr-input" data-type="text" data-required="true"
                                     data-required-type="name">
                                    <div class="field-content">
                                        <label for="email">{{ __('Name') }}</label>
                                        <input type="text" placeholder="Entered Name" id="name"
                                               class="form-control" name="name" value="{{ old('name') }}">
                                        @error('name')
                                            <div class="field-error-msg" id="field_error_name">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="field-error-msg" id="field_error_name"></div>
                            </div>
                            <div>
                                <div class="field field-type-nr-input" data-type="text" data-required="true"
                                     data-required-type="email">
                                    <div class="field-content">
                                        <label for="email">{{ __('Email Address') }}</label>
                                        <input type="email" placeholder="Entered Email" id="email"
                                               class="form-control" name="email">
                                        @error('email')
                                            <div class="field-error-msg" id="field_error_name">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="field-error-msg" id="field_error_email"></div>
                            </div>
                            <div>
                                <div class="field field-type-nr-input" data-type="text" data-required="true">
                                    <div class="field-content">
                                        <label for="password">{{ __('Password') }}</label>
                                        <input type="password" placeholder="Entered Password" id="password"
                                               class="form-control" name="password">
                                        @error('password')
                                            <div class="field-error-msg" id="field_error_password">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <i class="icon-eye field-show-password"></i>
                                </div>
                                <div class="field-error-msg" id="field_error_password"></div>
                            </div>
                            <div>
                                <div class="field field-type-nr-input" data-type="text" data-required="true">
                                    <div class="field-content">
                                        <label for="password">{{ __('Password') }}</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-footer">
                        <button type="submit"
                                class="btn btn-primary btn-full ">{{ __('adminlte.register') }}</button>
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
