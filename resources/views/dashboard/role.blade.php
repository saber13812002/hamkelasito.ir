@extends('dashboard.layout')

@section('content-dashboard')

    <!-- content -->
    <main id="main">
        <div id="sidebar">
            <div class="user-box">
                <div class="user-info">
                    <img src="storage/assets/img/lazy-1x1.webp" class="user-avatar lazy" id="user_level"
                         data-src="storage/assets/img/profile/profile-1/Thumbnail/profile-001.webp" width="40" height="40"
                         alt="image user profile">
                    <noscript>
                        <img src="storage/assets/img/profile/profile-1/Thumbnail/profile-001.webp" class="user-avatar"
                             width="40" height="40" alt="image user profile">
                    </noscript>
                    <div class="user-display-name">Olivia Rhye</div>
                    <div class="user-stage-name">Batman</div>
                    <div class="user-id">No. 2123</div>
                </div>
                <div class="user-categories">
                    <a href="#">Influencer</a>
                    <a href="#">Model</a>
                </div>
            </div>
            <div class="menu hidden-scrollbar">
                <ul>
                    <li>
                        <a href="/dashboard-models/" class="active">
                            <i class="icon-bar-chart-2"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard-models/role">
                            <i class="icon-terms"></i>
                            <span>Role</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard-models/user-info">
                            <i class="icon-user"></i>
                            <span>User info</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard-models/gallery">
                            <i class="icon-gallery"></i>
                            <span>Photo Gallery</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard-models/video-gallery">
                            <i class="icon-play-circle"></i>
                            <span>Video Gallery</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard-models/voice-gallery">
                            <i class="icon-microphone-2"></i>
                            <span>Voice Gallery</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard-models/security-privacy">
                            <i class="icon-shield"></i>
                            <span>Security & Privacy</span>
                        </a>
                    </li>
                    <li>
                        <a href="/dashboard-models/account-info" id="account_info">
                            <i class="icon-info"></i>
                            <span>Account info</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="sidebar-actions">
                <a href="/logout" class="danger">
                    <i class="icon-logout"></i>
                    <span>Log out</span>
                </a>
            </div>
            <div class="sidebar-mobile-actions">
                <a href="#" class="btn btn-primary btn-full btn-icon-right">
                <span>
                    Go to lilianamodels.com
                    <i class="icon-arrow-right-1"></i>
                </span>
                </a>
            </div>
        </div>
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
