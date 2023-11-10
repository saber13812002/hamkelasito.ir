@extends('dashboard.layout')

@section('content-dashboard')

    <body class="page-dashboard">

    @include('dashboard.header')

    <!-- content -->
    <main id="main">
        @include('dashboard.sidebar')
        <div id="ds_content">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="white-box">
                            <div class="white-box-content content-mixing">
                                <div class="notifications-list">
                                    <div class="notification-item warning">
                                        <div class="notification-content">
                                            <i class="icon-alert-triangle notification-icon"></i>
                                            <div class="notification-inner-content">
                                                <div class="notification-title">Photos Replaced Successfully</div>
                                                <div class="notification-description">
                                                    Your photos have been successfully replaced. Your new job experience
                                                    has been successfully verified and registered.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="notification-actions">
                                            <a href="#" class="notification-read-more"
                                               data-label="Photos Replaced Successfully" data-status="warning"
                                               data-content="Your photos have been successfully replaced. Your new job experience has been successfully verified and registered. Your photos have been successfully replaced. Your new job experience has been successfully verified and registered. Your photos have been successfully replaced. Your new job experience has been successfully verified and registered. Your photos have been successfully replaced. Your new job experience has been successfully verified and registered. Your photos have been successfully replaced. Your new job experience has been successfully verified and registered. Your photos have been successfully replaced. Your new job experience has been successfully verified and registered.">
                                                <span>Read More</span>
                                                <i class="icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-bar-box">
                                    <div class="progress-bar-header">
                                        <div class="mini-circle-progress" data-num="80" data-value="0%"></div>
                                        <div class="progress-bar-header-content">
                                            <div class="progress-bar-title">
                                                Account Status
                                                <button type="button" aria-label="info">
                                                    <i class="icon-info"></i>
                                                </button>
                                            </div>
                                            <div class="progress-bar-description">
                                                Please be aware that some fields in your dashboard are still unfilled.
                                                Kindly complete the missing information to benefit from more special
                                                services
                                                and features. If you need assistance, our support team is ready to help.
                                            </div>
                                        </div>
                                        <div class="progress-bar-actions">
                                            <a href="/dashboard-models/user-info">
                                                <span>See what’s not completed</span>
                                                <i class="icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="white-box">
                            <div class="white-box-header">
                                <div class="white-box-title">Notifications</div>
                                <div class="white-box-actions">
                                    <a href="/dashboard-models/notifications">
                                        <span>See All</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="white-box-content">
                                <div class="notifications-list">
                                    <div class="notification-item success">
                                        <div class="notification-content">
                                            <i class="icon-tick notification-icon"></i>
                                            <div class="notification-inner-content">
                                                <div class="notification-title">Photos Replaced Successfully</div>
                                                <div class="notification-description">
                                                    Your photos have been successfully replaced. Your new job experience
                                                    has been successfully verified and registered.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="notification-actions">
                                            <a href="#" class="notification-read-more"
                                               data-label="Photos Replaced Successfully" data-status="success"
                                               data-content="Your photos have been successfully replaced. Your new job experience has been successfully verified and registered. Your photos have been successfully replaced. Your new job experience has been successfully verified and registered. Your photos have been successfully replaced. Your new job experience has been successfully verified and registered. Your photos have been successfully replaced. Your new job experience has been successfully verified and registered. Your photos have been successfully replaced. Your new job experience has been successfully verified and registered. Your photos have been successfully replaced. Your new job experience has been successfully verified and registered.">
                                                <span>Read More</span>
                                                <i class="icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="notification-item danger">
                                        <div class="notification-content">
                                            <i class="icon-alert-triangle notification-icon"></i>
                                            <div class="notification-inner-content">
                                                <div class="notification-title">Photos Replaced Successfully</div>
                                                <div class="notification-description">
                                                    Your photos have been successfully replaced. Your new job experience
                                                    has been successfully verified and registered.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="notification-actions">
                                            <a href="#" class="notification-read-more"
                                               data-label="Photos Replaced Successfully" data-status="danger"
                                               data-content="Your photos have been successfully replaced. Your new job experience has been successfully verified and registered. Your photos have been successfully replaced. Your new job experience has been successfully verified and registered. Your photos have been successfully replaced. Your new job experience has been successfully verified and registered. Your photos have been successfully replaced. Your new job experience has been successfully verified and registered. Your photos have been successfully replaced. Your new job experience has been successfully verified and registered. Your photos have been successfully replaced. Your new job experience has been successfully verified and registered.">
                                                <span>Read More</span>
                                                <i class="icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="notification-item info">
                                        <div class="notification-content">
                                            <i class="icon-info notification-icon"></i>
                                            <div class="notification-inner-content">
                                                <div class="notification-title">Photos Replaced Successfully</div>
                                                <div class="notification-description">
                                                    Your photos have been successfully replaced. Your new job experience
                                                    has been successfully verified and registered.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="notification-actions">
                                            <a href="#" class="notification-read-more"
                                               data-label="Photos Replaced Successfully" data-status="info"
                                               data-content="Your photos have been successfully replaced. Your new job experience has been successfully verified and registered. Your photos have been successfully replaced. Your new job experience has been successfully verified and registered. Your photos have been successfully replaced. Your new job experience has been successfully verified and registered. Your photos have been successfully replaced. Your new job experience has been successfully verified and registered. Your photos have been successfully replaced. Your new job experience has been successfully verified and registered. Your photos have been successfully replaced. Your new job experience has been successfully verified and registered.">
                                                <span>Read More</span>
                                                <i class="icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="notification-item warning">
                                        <div class="notification-content">
                                            <i class="icon-alert-triangle notification-icon"></i>
                                            <div class="notification-inner-content">
                                                <div class="notification-title">Photos Replaced Successfully</div>
                                                <div class="notification-description">
                                                    Your photos have been successfully replaced. Your new job experience
                                                    has been successfully verified and registered.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="notification-actions">
                                            <a href="#" class="notification-read-more"
                                               data-label="Photos Replaced Successfully" data-status="warning"
                                               data-content="Your photos have been successfully replaced. Your new job experience has been successfully verified and registered. Your photos have been successfully replaced. Your new job experience has been successfully verified and registered. Your photos have been successfully replaced. Your new job experience has been successfully verified and registered. Your photos have been successfully replaced. Your new job experience has been successfully verified and registered. Your photos have been successfully replaced. Your new job experience has been successfully verified and registered. Your photos have been successfully replaced. Your new job experience has been successfully verified and registered.">
                                                <span>Read More</span>
                                                <i class="icon-arrow-right"></i>
                                            </a>
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

@endsection
