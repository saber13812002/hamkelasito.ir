@extends('dashboard.layout')

@section('content-dashboard')

    <body class="page-security-privacy enable-page-actions edit-page">

    @include('dashboard.header')

    <!-- content -->
    <main id="main">
        @include('dashboard.sidebar')
        <div id="ds_content">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="white-box">
                            <div class="white-box-header">
                                <div class="white-box-title">Security & Privacy</div>
                            </div>
                            <div class="white-box-content">

                                <!-- account visibility group -->
                                <div class="form-section">
                                    <div class="form-section-label">Privacy</div>
                                    <div class="form-section-content">
                                        <div>
                                            <div class="field field-type-checkbox" data-type="checkbox">
                                                <div class="field-content">
                                                    <label>
                                                        <input type="checkbox" name="account_visibility" id="account_visibility" checked>
                                                        <span class="field-label">Account Visibility</span>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="field-hint">To display your profile on the website, please ensure this box is checked.</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- change password group -->
                                <div class="form-section">
                                    <div class="form-section-label">Change Password</div>
                                    <div class="form-section-content">
                                        <div>
                                            <div class="field field-type-nr-input" data-type="text" data-required="false">
                                                <div class="field-content">
                                                    <label for="current_password">Current Password</label>
                                                    <input type="password" placeholder="Entered Password" name="current_password" id="current_password" autocomplete="off">
                                                </div>
                                                <i class="icon-eye field-show-password"></i>
                                            </div>
                                            <div class="field-error-msg" id="field_error_current_password"></div>
                                        </div>
                                        <div>
                                            <div class="field field-type-nr-input" data-type="text" data-required="false"
                                                 data-required-type="password" data-target="confirm_new_password">
                                                <div class="field-content">
                                                    <label for="new_password">New Password</label>
                                                    <input type="password" placeholder="Entered Password" name="new_password" id="new_password" autocomplete="new-password">
                                                </div>
                                                <i class="icon-eye field-show-password"></i>
                                            </div>
                                            <ul class="list minimal" id="password_hint_new_password">
                                                <li>Minimum of 8 characters</li>
                                                <li>Include at least one uppercase letter</li>
                                                <li>Include at least one lowercase letter</li>
                                            </ul>
                                            <div class="field-error-msg" id="field_error_new_password"></div>
                                        </div>
                                        <div class="password-strength" id="password_strength_new_password">
                                            <div class="strength-indicator">
                                                <div class="strength-steps">
                                                    <span></span><span></span><span></span><span></span>
                                                </div>
                                                <div class="strength-status">
                                                    --
                                                    <i class="icon-alert-triangle"></i>
                                                </div>
                                            </div>
                                            <div class="notifications-list">
                                                <div class="notification-item warning">
                                                    <div class="notification-content">
                                                        <i class="icon-alert-triangle notification-icon"></i>
                                                        <div class="notification-inner-content">
                                                            <div class="notification-title">
                                                                a strong password must be including at least one uppercase letter, one symbol like @#$, and one number.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="field field-type-nr-input" data-type="text" data-required="false"
                                                 data-required-type="confirm_password" data-target="new_password">
                                                <div class="field-content">
                                                    <label for="confirm_new_password">Confirm New Password</label>
                                                    <input type="password" placeholder="Entered Confirm Password" name="confirm_new_password" id="confirm_new_password" autocomplete="new-password">
                                                </div>
                                                <i class="icon-eye field-show-password"></i>
                                            </div>
                                            <div class="field-error-msg" id="field_error_confirm_new_password"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="page-actions">
        <button type="button" class="btn btn-primary btn-save-edit-form" data-page="security-privacy">
            Save
        </button>
    </div>
@endsection
