<div id="sidebar">
    <div class="user-box">
        <div class="user-info">
            <img src="/storage/assets/img/lazy-1x1.webp" class="user-avatar lazy" id="user_level"
                 data-src="/storage/assets/img/profile/profile-1/Thumbnail/profile-001.webp" width="40" height="40"
                 alt="image user profile">
            <noscript>
                <img src="/storage/assets/img/profile/profile-1/Thumbnail/profile-001.webp" class="user-avatar"
                     width="40" height="40" alt="image user profile">
            </noscript>
            <div class="user-display-name">{{Auth::user()->name}}</div>
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
                <a href="/dashboard-models/" id="dashboard-models">
                    <i class="icon-bar-chart-2"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="/dashboard-models/role" id="role">
                    <i class="icon-terms"></i>
                    <span>Role</span>
                </a>
            </li>
            <li>
                <a href="/dashboard-models/user-info" id="user-info">
                    <i class="icon-user"></i>
                    <span>User info</span>
                </a>
            </li>
            <li>
                <a href="/dashboard-models/gallery" id="gallery">
                    <i class="icon-gallery"></i>
                    <span>Photo Gallery</span>
                </a>
            </li>
            <li>
                <a href="/dashboard-models/video-gallery" id="video-gallery">
                    <i class="icon-play-circle"></i>
                    <span>Video Gallery</span>
                </a>
            </li>
            <li>
                <a href="/dashboard-models/voice-gallery" id="voice-gallery">
                    <i class="icon-microphone-2"></i>
                    <span>Voice Gallery</span>
                </a>
            </li>
            <li>
                <a href="/dashboard-models/security-privacy" id="security-privacy">
                    <i class="icon-shield"></i>
                    <span>Security & Privacy</span>
                </a>
            </li>
            <li>
                <a href="/dashboard-models/account-info" id="account-info">
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

<script src="/storage/assets/js/dashboard-menu-active-class.js"></script>
