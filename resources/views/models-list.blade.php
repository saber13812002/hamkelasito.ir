@extends('layout-home')

@section('content-home')

    <!-- start header -->
    <header id="header">

        <!-- start app bar -->
        <div class="app-bar">
            <div class="app-bar-container">
                <div class="leading">
                    <button class="btn btn-icon app-bar-desktop" id="btn_appbar_menu" aria-label="Open Menu">
                        <i class="icon-menu"></i>
                    </button>
                    <a href="./home" class="btn btn-icon app-bar-mobile" aria-label="Back" role="button">
                        <i class="icon-arrow-left-1"></i>
                    </a>
                </div>
                <div class="app-bar-title">
                    <a href="./home" class="app-logo" aria-label="Liliana">
                        <img src="storage/assets/img/lazy-trp-1x1.webp" class="lazy"
                             data-src="storage/assets/img/logo.svg" width="88"
                             height="24" alt="liliana">
                        <noscript>
                            <img src="storage/assets/img/logo.svg" width="88" height="24" alt="liliana">
                        </noscript>
                    </a>
                    <span class="app-bar-mobile">Models</span>
                </div>
                <div class="actions">
                    <div class="app-lang app-bar-desktop">
                        <a href="?lng=jp" class="btn btn-icon" aria-label="Change Language To Japane">
                            JP
                        </a>
                        <div class="divider"></div>
                        <a href="?lng=en" class="btn btn-icon active" aria-label="Change language To English">
                            EN
                        </a>
                    </div>
                    <button class="btn btn-icon" id="btn_appbar_bookmark" aria-label="Open Bookmark">
                        <i class="icon-archive-add"></i>
                        <span class="badge">2</span>
                    </button>
                    <button class="btn btn-icon app-bar-desktop" id="btn_appbar_search" aria-label="Open Search">
                        <i class="icon-search-normal"></i>
                    </button>
                    <button class="btn btn-icon app-bar-mobile" id="btn_appbar_sort" aria-label="Open Sort">
                        <i class="icon-sort"></i>
                    </button>
                    <button class="btn btn-icon app-bar-mobile" id="btn_appbar_filter" aria-label="Open Filter">
                        <i class="icon-filter"></i>
                    </button>
                    <a href="../dashboard/models/index.html" class="user-dashboard">
                        <i class="icon-user"></i>
                        <!--                    <img src="storage/assets/img/lazy-1x1.webp" class="lazy" data-src="storage/assets/img/1x1/001.webp"-->
                        <!--                         width="80" height="80" alt="Model">-->
                        <!--                    <noscript>-->
                        <!--                        <img src="storage/assets/img/1x1/001.webp" width="80" height="80" alt="Model">-->
                        <!--                    </noscript>-->
                    </a>
                </div>
            </div>
        </div>

        <!-- start menu -->
        <div class="menu" role="menu">
            <div class="menu-content">

                <!-- start menu desktop -->
                <div class="menu-desktop">

                    <!-- menu content -->
                    <div class="menu-inner-content">

                        <!-- menu nav -->
                        <nav class="menu-nav">
                            <ul>
                                <li class="active"><a href="./home">Home</a></li>
                                <li><a href="./work">Portfolio</a></li>
                                <li><a href="./news-category">News</a></li>
                                <li><a href="./about-us">About us</a></li>
                                <li><a href="./contact-us">Contact us</a></li>
                                <li><a href="./company-profile">Company Profile</a></li>
                                <li><a href="./privacy-policy">Privacy Policy</a></li>
                            </ul>
                        </nav>

                        <!-- menu categories -->
                        <div class="menu-categories">
                            <div class="category">
                                <div class="category-title">Model</div>
                                <ul class="category-content">
                                    <li><a href="./models-list">All</a></li>
                                    <li><a href="./models-list">Women</a></li>
                                    <li><a href="./models-list">Men</a></li>
                                    <li><a href="./models-list">Kids & Babies</a></li>
                                    <li><a href="./models-list">Japanese</a></li>
                                    <li><a href="./models-list">Mixed</a></li>
                                    <li><a href="./models-list">International</a></li>
                                </ul>
                            </div>
                            <div class="category">
                                <div class="category-title">Talent</div>
                                <ul class="category-content">
                                    <li><a href="./models-list">All</a></li>
                                    <li><a href="./models-list">Women</a></li>
                                    <li><a href="./models-list">Men</a></li>
                                    <li><a href="./models-list">Kids</a></li>
                                    <li><a href="./models-list">Japanese</a></li>
                                    <li><a href="./models-list">Mixed</a></li>
                                    <li><a href="./models-list">International</a></li>
                                </ul>
                            </div>
                            <div class="category">
                                <div class="category-title">Actor</div>
                                <ul class="category-content">
                                    <li><a href="./models-list">All</a></li>
                                    <li><a href="./models-list">Actors</a></li>
                                    <li><a href="./models-list">Actresses</a></li>
                                    <li><a href="./models-list">Kids</a></li>
                                    <li><a href="./models-list">Japanese</a></li>
                                    <li><a href="./models-list">Mixed</a></li>
                                    <li><a href="./models-list">International</a></li>
                                </ul>
                            </div>
                            <div class="category">
                                <div class="category-title">Extra</div>
                                <ul class="category-content">
                                    <li><a href="./models-list">All</a></li>
                                    <li><a href="./models-list">Women</a></li>
                                    <li><a href="./models-list">Men</a></li>
                                    <li><a href="./models-list">Kids</a></li>
                                    <li><a href="./models-list">Japanese</a></li>
                                    <li><a href="./models-list">Mixed</a></li>
                                    <li><a href="./models-list">International</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <!-- menu size -->
                    <div class="menu-right-side">

                        <!-- side action -->
                        <div class="side-action">
                            <a href="./become-a-model.html" class="btn btn-icon-left">
                            <span>
                                <i class="icon-add"></i>
                                Become Liliana
                            </span>
                            </a>
                            <a href="./login.html" class="btn btn-primary btn-icon-left">
                            <span>
                                <i class="icon-log-in"></i>
                                Login
                            </span>
                            </a>
                            <a href="#" class="dashboard">
                            <span>
                                Miss Leslie Alexander
                                <i class="icon-arrow-right"></i>
                            </span>
                            </a>
                            <a href="#" class="logout">
                            <span>
                                Logout
                                <i class="icon-logout"></i>
                            </span>
                            </a>
                        </div>

                        <!-- side info -->
                        <div class="side-info">
                            <ul>
                                <li>
                                    <i class="icon-call"></i>
                                    <a href="tel:+81-3-6362-3355">+81-3-6362-3355</a>
                                </li>
                                <li>
                                    <i class="icon-sms"></i>
                                    <a href="mailto:info@lilianamodels.com">info@lilianamodels.com</a>
                                </li>
                            </ul>
                        </div>

                    </div>

                </div>

                <!-- start menu mobile -->
                <div class="menu-mobile">
                    <div class="row">
                        <div class="col">
                            <div class="tabs" data-active="tab_header_menu">
                                <ul class="tabs-item">
                                    <li id="tab_header_menu">
                                        menu
                                    </li>
                                    <li id="tab_header_categories">
                                        categories
                                    </li>
                                </ul>
                                <div class="tabs-contents">
                                    <div class="tab-content-item" data-tab-target="tab_header_menu">
                                        <nav class="menu-nav">
                                            <ul>
                                                <li><a href="./home">Home</a></li>
                                                <li><a href="./work">Portfolio</a></li>
                                                <li><a href="./news-category">News</a></li>
                                                <li><a href="./about-us">About us</a></li>
                                                <li><a href="./contact-us">Contact us</a></li>
                                                <li><a href="./company-profile">Company Profile</a></li>
                                                <li><a href="./privacy-policy">Privacy Policy</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="tab-content-item tab-category"
                                         data-tab-target="tab_header_categories">
                                        <div class="accordion">
                                            <div class="accordion-item">
                                                <button class="accordion-header">
                                                    <span class="accordion-title">Model</span>
                                                    <i class="icon-arrow-down"></i>
                                                </button>
                                                <div class="accordion-content">
                                                    <ul>
                                                        <li><a href="./models-list">All</a></li>
                                                        <li><a href="./models-list">Women</a></li>
                                                        <li><a href="./models-list">Men</a></li>
                                                        <li><a href="./models-list">Kids & Babies</a></li>
                                                        <li><a href="./models-list">Japanese</a></li>
                                                        <li><a href="./models-list">Mixed</a></li>
                                                        <li><a href="./models-list">International</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <button class="accordion-header">
                                                    <span class="accordion-title">Talent</span>
                                                    <i class="icon-arrow-down"></i>
                                                </button>
                                                <div class="accordion-content">
                                                    <ul>
                                                        <li><a href="./models-list">All</a></li>
                                                        <li><a href="./models-list">Women</a></li>
                                                        <li><a href="./models-list">Men</a></li>
                                                        <li><a href="./models-list">Kids</a></li>
                                                        <li><a href="./models-list">Japanese</a></li>
                                                        <li><a href="./models-list">Mixed</a></li>
                                                        <li><a href="./models-list">International</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <button class="accordion-header">
                                                    <span class="accordion-title">Actor</span>
                                                    <i class="icon-arrow-down"></i>
                                                </button>
                                                <div class="accordion-content">
                                                    <ul>
                                                        <li><a href="./models-list">All</a></li>
                                                        <li><a href="./models-list">Actors</a></li>
                                                        <li><a href="./models-list.html">Actresses</a></li>
                                                        <li><a href="./models-list.html">Kids</a></li>
                                                        <li><a href="./models-list.html">Japanese</a></li>
                                                        <li><a href="./models-list.html">Mixed</a></li>
                                                        <li><a href="./models-list.html">International</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <button class="accordion-header">
                                                    <span class="accordion-title">Extra</span>
                                                    <i class="icon-arrow-down"></i>
                                                </button>
                                                <div class="accordion-content">
                                                    <ul>
                                                        <li><a href="./models-list.html">All</a></li>
                                                        <li><a href="./models-list.html">Women</a></li>
                                                        <li><a href="./models-list.html">Men</a></li>
                                                        <li><a href="./models-list.html">Kids</a></li>
                                                        <li><a href="./models-list.html">Japanese</a></li>
                                                        <li><a href="./models-list.html">Mixed</a></li>
                                                        <li><a href="./models-list.html">International</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="user-account-mini">
                                <img src="storage/assets/img/lazy-1x1.webp" class="lazy"
                                     data-src="storage/assets/img/1x1/001.webp"
                                     width="80" height="80" alt="Model">
                                <noscript>
                                    <img src="storage/assets/img/1x1/001.webp" width="80" height="80" alt="Model">
                                </noscript>
                                <div class="user-content">
                                    <div class="user-display-name">Miss Leslie Alexander</div>
                                    <a href="../dashboard/models/index.html">
                                        Go to Dashboard
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <a href="./login.html" class="btn btn-primary btn-full">Login</a>
                            <a href="./become-a-model.html" class="btn btn-full">Become Liliana</a>
                            <ul class="menu-contact-us">
                                <li>
                                    <i class="icon-sms"></i>
                                    <a href="mailto:info@lilianamodels.com">
                                        info@lilianamodels.com
                                    </a>
                                </li>
                                <li>
                                    <i class="icon-call"></i>
                                    <a href="tel:+81-3-6362-3355">
                                        +81-3-6362-3355
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- start search -->
        <div class="search">
            <div class="app-bar">
                <div class="app-bar-container">
                    <div class="leading">
                        <button class="btn btn-icon app-bar-mobile" aria-label="Close Search" id="btn_search_back">
                            <i class="icon-arrow-left-1"></i>
                        </button>
                    </div>
                    <div class="app-bar-title">
                        <form action="./models-list.html" method="post">
                            <button class="btn btn-icon" aria-label="Search">
                                <i class="icon-search-normal"></i>
                            </button>
                            <input type="search" id="inp_saerch" placeholder="Type your word...">
                        </form>
                    </div>
                    <div class="actions"></div>
                </div>
            </div>

            <!-- start search recent -->
            <div class="search-recent">
                <div class="recent-cleared-message">
                    <span>All Recent Deleted</span>
                    <button type="button" id="btn_undo_search_recent">
                        Undo
                        <i class="icon-rotate-ccw-converted"></i>
                    </button>
                </div>
                <div class="recent-search-section">
                    <div class="recent-model-heading">
                        <span>Recent Searches</span>
                        <a href="#" id="btn_clear_search_recent">Clear All</a>
                    </div>
                    <div class="recent-model">
                        <a href="./model-page.html">
                            <img src="storage/assets/img/lazy-3x4.webp" class="lazy"
                                 data-src="storage/assets/img/3x4/012.webp"
                                 width="120" height="160" alt="Model">
                            <noscript>
                                <img src="storage/assets/img/3x4/012.webp" width="120" height="160" alt="Model">
                            </noscript>
                            <span>Maaya</span>
                        </a>
                        <a href="./model-page.html">
                            <img src="storage/assets/img/lazy-3x4.webp" class="lazy"
                                 data-src="storage/assets/img/3x4/011.webp"
                                 width="120" height="160" alt="Model">
                            <noscript>
                                <img src="storage/assets/img/3x4/011.webp" width="120" height="160" alt="Model">
                            </noscript>
                            <span>Soya</span>
                        </a>
                        <a href="./model-page.html">
                            <div class="replacement-box">
                                <i class="icon-gallery"></i>
                            </div>
                            <span>Mikel</span>
                        </a>
                        <a href="./model-page.html">
                            <img src="storage/assets/img/lazy-3x4.webp" class="lazy"
                                 data-src="storage/assets/img/3x4/028.webp"
                                 width="120" height="160" alt="Model">
                            <noscript>
                                <img src="storage/assets/img/3x4/028.webp" width="120" height="160" alt="Model">
                            </noscript>
                            <span>Nycoli</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- start search result -->
            <div class="search-result">
                <!--            <div class="not-found-result">Not Found Result</div>-->
                <ul>
                    <li>
                        <a href="./model-page.html">
                            <img src="storage/assets/img/lazy-1x1.webp" class="lazy"
                                 data-src="storage/assets/img/1x1/003.webp"
                                 width="80" height="80" alt="model">
                            <noscript>
                                <img src="storage/assets/img/1x1/005.webp" width="80" height="80" alt="model">
                            </noscript>
                            <div>
                                <div class="item-title">Cameron Williamson</div>
                                <div class="tags">
                                    <span>Model</span>
                                    <span>Artist</span>
                                    <span>Athlete</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="./model-page.html">
                            <img src="storage/assets/img/lazy-1x1.webp" class="lazy"
                                 data-src="storage/assets/img/1x1/004.webp"
                                 width="80" height="80" alt="model">
                            <noscript>
                                <img src="storage/assets/img/1x1/005.webp" width="80" height="80" alt="model">
                            </noscript>
                            <div>
                                <div class="item-title">Cameron Alexander</div>
                                <div class="tags">
                                    <span>Artist</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="./model-page.html">
                            <img src="storage/assets/img/lazy-1x1.webp" class="lazy"
                                 data-src="storage/assets/img/1x1/005.webp"
                                 width="80" height="80" alt="model">
                            <noscript>
                                <img src="storage/assets/img/1x1/005.webp" width="80" height="80" alt="model">
                            </noscript>
                            <div>
                                <div class="item-title">Cameron Fox</div>
                                <div class="tags">
                                    <span>Athlete</span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
                <a href="./models-list.html" class="more-result">
                    See All 25 Results
                    <i class="icon-arrow-right"></i>
                </a>
            </div>

        </div>

        <!-- start sort mobile -->
        <div class="sort-mobile">
            <div class="app-bar">
                <div class="app-bar-container">
                    <div class="leading">
                        <button class="btn btn-icon" aria-label="Sort">
                            <i class="icon-sort"></i>
                        </button>
                    </div>
                    <div class="app-bar-title">
                        <span>Sort</span>
                    </div>
                    <div class="actions">
                        <button class="btn btn-icon" id="btn_close_sort" aria-label="Close Sort">
                            <i class="icon-arrow-up"></i>
                        </button>
                    </div>
                </div>
            </div>
            <ul id="sort_mobile_archive_page">
                <li><a data-option="newest">Newest</a></li>
                <li><a data-option="oldest">Oldest</a></li>
                <li><a data-option="name">Name</a></li>
            </ul>
        </div>

        <!-- start filter mobile -->
        <div class="filter-mobile">
            <div class="app-bar">
                <div class="app-bar-container">
                    <div class="leading">
                        <button class="btn btn-icon" aria-label="Filters">
                            <i class="icon-filter"></i>
                        </button>
                    </div>
                    <div class="app-bar-title">
                        <span>Filter</span>
                    </div>
                    <div class="actions">
                        <a href="#" id="clear_mobile_filter">Reset</a>
                        <button class="btn btn-icon" id="btn_close_filter" aria-label="Close Sort">
                            <i class="icon-arrow-up"></i>
                        </button>
                    </div>
                </div>
            </div>
            <ul>

                <!-- no. -->
                <li>
                    <a href="#">
                        <div>
                            <span>Member No.</span>
                        </div>
                        <i class="icon-arrow-right"></i>
                    </a>
                    <div class="filter-mobile-sub-item">
                        <div class="app-bar">
                            <div class="app-bar-container">
                                <div class="leading">
                                    <button class="btn btn-icon btn-back" aria-label="Filters">
                                        <i class="icon-arrow-left-1"></i>
                                    </button>
                                </div>
                                <div class="app-bar-title">
                                    <span>Member No.</span>
                                </div>
                            </div>
                        </div>
                        <div class="filter-mobile-inner-content">
                            <div class="field field-type-nr-input" data-type="number">
                                <div class="field-content">
                                    <label for="member_no">Member No.</label>
                                    <input type="number" name="member_no" id="member_no"
                                           class="filter-member-no-controller" min="1">
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- first name -->
                <li>
                    <a href="#">
                        <div>
                            <span>Name/Stage Name (Talent Name)</span>
                        </div>
                        <i class="icon-arrow-right"></i>
                    </a>
                    <div class="filter-mobile-sub-item">
                        <div class="app-bar">
                            <div class="app-bar-container">
                                <div class="leading">
                                    <button class="btn btn-icon btn-back" aria-label="Filters">
                                        <i class="icon-arrow-left-1"></i>
                                    </button>
                                </div>
                                <div class="app-bar-title">
                                    <span>Name/Stage Name (Talent Name)</span>
                                </div>
                            </div>
                        </div>
                        <div class="filter-mobile-inner-content">
                            <div class="field field-type-nr-input" data-type="text">
                                <div class="field-content">
                                    <label for="member_name">Name/Stage Name (Talent Name)</label>
                                    <input type="text" name="member_name" id="member_name">
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- gender -->
                <li>
                    <a href="#">
                        <div>
                            <span>Gender</span>
                        </div>
                        <i class="icon-arrow-right"></i>
                    </a>
                    <div class="filter-mobile-sub-item">
                        <div class="app-bar">
                            <div class="app-bar-container">
                                <div class="leading">
                                    <button class="btn btn-icon btn-back" aria-label="Filters">
                                        <i class="icon-arrow-left-1"></i>
                                    </button>
                                </div>
                                <div class="app-bar-title">
                                    <span>Gender</span>
                                </div>
                                <div class="actions">
                                    <div class="field field-type-checkbox items-selector">
                                        <div class="field-content">
                                            <label>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="filter-mobile-inner-content">
                            <li>
                                <div class="field field-type-checkbox" data-field-validation="bool">
                                    <div class="field-content">
                                        <label>
                                            <span class="field-label">Male</span>
                                            <input type="checkbox" name="gender" value="male">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="field field-type-checkbox" data-field-validation="bool">
                                    <div class="field-content">
                                        <label>
                                            <span class="field-label">Female</span>
                                            <input type="checkbox" name="gender" value="female">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="field field-type-checkbox" data-field-validation="bool">
                                    <div class="field-content">
                                        <label>
                                            <span class="field-label">Other</span>
                                            <input type="checkbox" name="gender" value="other">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- age group -->
                <li>
                    <a href="#">
                        <div>
                            <span>Age Group</span>
                        </div>
                        <i class="icon-arrow-right"></i>
                    </a>
                    <div class="filter-mobile-sub-item">
                        <div class="app-bar">
                            <div class="app-bar-container">
                                <div class="leading">
                                    <button class="btn btn-icon btn-back" aria-label="Filters">
                                        <i class="icon-arrow-left-1"></i>
                                    </button>
                                </div>
                                <div class="app-bar-title">
                                    <span>Age Group</span>
                                </div>
                                <div class="actions">
                                    <div class="field field-type-checkbox items-selector">
                                        <div class="field-content">
                                            <label>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="filter-mobile-inner-content">
                            <li>
                                <div class="field field-type-checkbox" data-field-validation="bool">
                                    <div class="field-content">
                                        <label>
                                        <span class="field-label">
                                            Baby
                                        </span>
                                            <input type="checkbox" name="age_group" value="baby">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="field field-type-checkbox" data-field-validation="bool">
                                    <div class="field-content">
                                        <label>
                                        <span class="field-label">
                                            Kids
                                        </span>
                                            <input type="checkbox" name="age_group" value="kids">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="field field-type-checkbox" data-field-validation="bool">
                                    <div class="field-content">
                                        <label>
                                        <span class="field-label">
                                            Teenager
                                        </span>
                                            <input type="checkbox" name="age_group" value="teenager">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="field field-type-checkbox" data-field-validation="bool">
                                    <div class="field-content">
                                        <label>
                                        <span class="field-label">
                                            Young Adult
                                        </span>
                                            <input type="checkbox" name="age_group" value="young">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="field field-type-checkbox" data-field-validation="bool">
                                    <div class="field-content">
                                        <label>
                                        <span class="field-label">
                                            Adult
                                        </span>
                                            <input type="checkbox" name="age_group" value="adult">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="field field-type-checkbox" data-field-validation="bool">
                                    <div class="field-content">
                                        <label>
                                        <span class="field-label">
                                            Middle-Aged
                                        </span>
                                            <input type="checkbox" name="age_group" value="middle">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="field field-type-checkbox" data-field-validation="bool">
                                    <div class="field-content">
                                        <label>
                                        <span class="field-label">
                                            Senior
                                        </span>
                                            <input type="checkbox" name="age_group" value="senior">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- nationality -->
                <li class="filter-nationality" data-name-prefix="nationality">
                    <a href="#">
                        <div>
                            <span>Nationality</span>
                        </div>
                        <i class="icon-arrow-right"></i>
                    </a>
                    <div class="filter-mobile-sub-item">
                        <div class="app-bar">
                            <div class="app-bar-container">
                                <div class="leading">
                                    <button class="btn btn-icon btn-back" aria-label="Filters">
                                        <i class="icon-arrow-left-1"></i>
                                    </button>
                                </div>
                                <div class="app-bar-title">
                                    <span>Nationality</span>
                                </div>
                                <div class="actions">
                                    <div class="field field-type-checkbox items-selector">
                                        <div class="field-content">
                                            <label>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-mobile-inner-content">
                            <div class="field field-type-nr-input field-ignore" data-type="text">
                                <i class="icon-search-normal"></i>
                                <div class="field-content">
                                    <label>Search</label>
                                    <input type="text">
                                </div>
                            </div>
                            <ul></ul>
                        </div>
                    </div>
                </li>

                <!-- native languages -->
                <li class="filter-language" data-name-prefix="language">
                    <a href="#">
                        <div>
                            <span>Language</span>
                        </div>
                        <i class="icon-arrow-right"></i>
                    </a>
                    <div class="filter-mobile-sub-item">
                        <div class="app-bar">
                            <div class="app-bar-container">
                                <div class="leading">
                                    <button class="btn btn-icon btn-back" aria-label="Filters">
                                        <i class="icon-arrow-left-1"></i>
                                    </button>
                                </div>
                                <div class="app-bar-title">
                                    <span>Language</span>
                                </div>
                                <div class="actions">
                                    <div class="field field-type-checkbox items-selector">
                                        <div class="field-content">
                                            <label>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-mobile-inner-content">
                            <div class="field field-type-nr-input field-ignore" data-type="text">
                                <i class="icon-search-normal"></i>
                                <div class="field-content">
                                    <label>Search</label>
                                    <input type="text">
                                </div>
                            </div>
                            <ul></ul>
                        </div>
                    </div>
                </li>

                <!-- body size -->
                <li>
                    <a href="#">
                        <div>
                            <span>Body Size</span>
                        </div>
                        <i class="icon-arrow-right"></i>
                    </a>
                    <div class="filter-mobile-sub-item active-labels" data-status="Changed">
                        <div class="app-bar">
                            <div class="app-bar-container">
                                <div class="leading">
                                    <button class="btn btn-icon btn-back" aria-label="Filters">
                                        <i class="icon-arrow-left-1"></i>
                                    </button>
                                </div>
                                <div class="app-bar-title">
                                    <span>Body Size</span>
                                </div>
                                <div class="actions"></div>
                            </div>
                        </div>
                        <div class="filter-mobile-inner-content">
                            <div class="field field-type-multi-slider" data-label="Height" data-sub-fix="Cm">
                                <div class="field-content">
                                    <label>Height</label>
                                    <div class="slider-control">
                                        <input type="range" min="0" max="220" step="10" value="0"
                                               name="filter_height_min">
                                        <input type="range" min="0" max="220" step="10" value="220"
                                               name="filter_height_max">
                                        <div class="slider-track"></div>
                                    </div>
                                    <div class="slider-values-text">
                                        <div class="slider-min-text">
                                            0 Cm
                                        </div>
                                        <div class="slider-max-text">
                                            220 Cm
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="field field-type-multi-slider" data-label="Bust" data-sub-fix="Cm">
                                <div class="field-content">
                                    <label>Bust</label>
                                    <div class="slider-control">
                                        <input type="range" min="0" max="220" step="10" value="0"
                                               name="filter_bust_min">
                                        <input type="range" min="0" max="220" step="10" value="220"
                                               name="filter_bust_max">
                                        <div class="slider-track"></div>
                                    </div>
                                    <div class="slider-values-text">
                                        <div class="slider-min-text">
                                            0 Cm <br>
                                            (Min Bust Size)
                                        </div>
                                        <div class="slider-max-text">
                                            220 Cm <br>
                                            (Max Bust Size)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="field field-type-multi-slider" data-label="Waist" data-sub-fix="Cm">
                                <div class="field-content">
                                    <label>Waist</label>
                                    <div class="slider-control">
                                        <input type="range" min="0" max="220" step="10" value="0"
                                               name="filter_waist_min">
                                        <input type="range" min="0" max="220" step="10" value="220"
                                               name="filter_waist_max">
                                        <div class="slider-track"></div>
                                    </div>
                                    <div class="slider-values-text">
                                        <div class="slider-min-text">
                                            0 Cm <br>
                                            (Min Waist Size)
                                        </div>
                                        <div class="slider-max-text">
                                            220 Cm <br>
                                            (Max Waist Size)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="field field-type-multi-slider" data-label="Hips" data-sub-fix="Cm">
                                <div class="field-content">
                                    <label>Hips</label>
                                    <div class="slider-control">
                                        <input type="range" min="0" max="220" step="10" value="0"
                                               name="filter_hips_min">
                                        <input type="range" min="0" max="220" step="10" value="220"
                                               name="filter_hips_max">
                                        <div class="slider-track"></div>
                                    </div>
                                    <div class="slider-values-text">
                                        <div class="slider-min-text">
                                            0 Cm <br>
                                            (Min Hips Size)
                                        </div>
                                        <div class="slider-max-text">
                                            220 Cm <br>
                                            (Max Hips Size)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- hair color -->
                <li>
                    <a href="#">
                        <div>
                            <span>Hair Color</span>
                        </div>
                        <i class="icon-arrow-right"></i>
                    </a>
                    <div class="filter-mobile-sub-item">
                        <div class="app-bar">
                            <div class="app-bar-container">
                                <div class="leading">
                                    <button class="btn btn-icon btn-back" aria-label="Filters">
                                        <i class="icon-arrow-left-1"></i>
                                    </button>
                                </div>
                                <div class="app-bar-title">
                                    <span>Hair Color</span>
                                </div>
                                <div class="actions">
                                    <div class="field field-type-checkbox items-selector">
                                        <div class="field-content">
                                            <label>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="filter-mobile-inner-content">
                            <li>
                                <div class="field field-type-checkbox">
                                    <div class="field-content">
                                        <label>
                                            <span class="filter-color-icon" style="background-color: #000000;"></span>
                                            <span class="field-label">Black</span>
                                            <input type="checkbox" name="filter_hair_color" value="Black">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="field field-type-checkbox">
                                    <div class="field-content">
                                        <label>
                                            <span class="filter-color-icon" style="background-color: #964B00;"></span>
                                            <span class="field-label">Brown</span>
                                            <input type="checkbox" name="filter_hair_color" value="Brown">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="field field-type-checkbox">
                                    <div class="field-content">
                                        <label>
                                            <span class="filter-color-icon" style="background-color: #faf0be;"></span>
                                            <span class="field-label">Blonde</span>
                                            <input type="checkbox" name="filter_hair_color" value="Blonde">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="field field-type-checkbox">
                                    <div class="field-content">
                                        <label>
                                            <span class="filter-color-icon" style="background-color: #a52a2a;"></span>
                                            <span class="field-label">Auburn</span>
                                            <input type="checkbox" name="filter_hair_color" value="Auburn">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="field field-type-checkbox">
                                    <div class="field-content">
                                        <label>
                                            <span class="filter-color-icon" style="background-color: #954535;"></span>
                                            <span class="field-label">Chestnut</span>
                                            <input type="checkbox" name="filter_hair_color" value="Chestnut">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="field field-type-checkbox">
                                    <div class="field-content">
                                        <label>
                                            <span class="filter-color-icon" style="background-color: #FF0000;"></span>
                                            <span class="field-label">Red</span>
                                            <input type="checkbox" name="filter_hair_color" value="Red">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="field field-type-checkbox">
                                    <div class="field-content">
                                        <label>
                                            <span class="filter-color-icon" style="background-color: #D6D5CB;"></span>
                                            <span class="field-label">Gray and White</span>
                                            <input type="checkbox" name="filter_hair_color" value="Gray and White">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="field field-type-checkbox">
                                    <div class="field-content">
                                        <label>
                                            <span class="filter-color-icon" style="background-color: #008000;"></span>
                                            <span class="field-label">Green</span>
                                            <input type="checkbox" name="filter_hair_color" value="Green">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="field field-type-checkbox">
                                    <div class="field-content">
                                        <label>
                                            <span class="filter-color-icon" style="background-color: #0000FF;"></span>
                                            <span class="field-label">Blue</span>
                                            <input type="checkbox" name="filter_hair_color" value="Blue">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="field field-type-checkbox">
                                    <div class="field-content">
                                        <label>
                                            <span class="filter-color-icon" style="background-color: #D9D9D9;"></span>
                                            <span class="field-label">Other</span>
                                            <input type="checkbox" name="filter_hair_color" value="Other">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- eye color -->
                <li>
                    <a href="#">
                        <div>
                            <span>Eye Color</span>
                        </div>
                        <i class="icon-arrow-right"></i>
                    </a>
                    <div class="filter-mobile-sub-item">
                        <div class="app-bar">
                            <div class="app-bar-container">
                                <div class="leading">
                                    <button class="btn btn-icon btn-back" aria-label="Filters">
                                        <i class="icon-arrow-left-1"></i>
                                    </button>
                                </div>
                                <div class="app-bar-title">
                                    <span>Eye Color</span>
                                </div>
                                <div class="actions">
                                    <div class="field field-type-checkbox items-selector">
                                        <div class="field-content">
                                            <label>
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="filter-mobile-inner-content">
                            <li>
                                <div class="field field-type-checkbox">
                                    <div class="field-content">
                                        <label>
                                            <span class="filter-color-icon" style="background-color: #FFBF00;"></span>
                                            <span class="field-label">Amber</span>
                                            <input type="checkbox" name="filter_eye_color" value="Amber">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="field field-type-checkbox">
                                    <div class="field-content">
                                        <label>
                                            <span class="filter-color-icon" style="background-color: #0000FF;"></span>
                                            <span class="field-label">Blue</span>
                                            <input type="checkbox" name="filter_eye_color" value="Blue">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="field field-type-checkbox">
                                    <div class="field-content">
                                        <label>
                                            <span class="filter-color-icon" style="background-color: #964B00;"></span>
                                            <span class="field-label">Brown</span>
                                            <input type="checkbox" name="filter_eye_color" value="Brown">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="field field-type-checkbox">
                                    <div class="field-content">
                                        <label>
                                            <span class="filter-color-icon" style="background-color: #808080;"></span>
                                            <span class="field-label">Grey</span>
                                            <input type="checkbox" name="filter_eye_color" value="Grey">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="field field-type-checkbox">
                                    <div class="field-content">
                                        <label>
                                            <span class="filter-color-icon" style="background-color: #008000;"></span>
                                            <span class="field-label">Green</span>
                                            <input type="checkbox" name="filter_eye_color" value="Green">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="field field-type-checkbox">
                                    <div class="field-content">
                                        <label>
                                            <span class="filter-color-icon" style="background-color: #8E7618;"></span>
                                            <span class="field-label">Hazel</span>
                                            <input type="checkbox" name="filter_eye_color" value="Hazel">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="field field-type-checkbox">
                                    <div class="field-content">
                                        <label>
                                            <span class="filter-color-icon" style="background-color: #000000;"></span>
                                            <span class="field-label">Black</span>
                                            <input type="checkbox" name="filter_eye_color" value="Black">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="field field-type-checkbox">
                                    <div class="field-content">
                                        <label>
                                            <span class="filter-color-icon" style="background-color: #D9D9D9;"></span>
                                            <span class="field-label">Heterochromia</span>
                                            <input type="checkbox" name="filter_eye_color" value="Heterochromia">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>
            <div class="bottom-actions">
                <button type="button" class="btn btn-full btn-primary" id="btn_set_filters">
                    See Result
                </button>
            </div>
        </div>

        <!-- start bookmark -->
        <div class="bookmark">
            <div class="empty-bookmark" style="display: none;">
                <p>You have not added any models to the list yet.</p>
                <a href="./models-list.html" class="btn btn-xl btn-icon-left btn-full">
                    + Add Models
                </a>
            </div>
            <div class="bookmark-items">
                <div class="bookmark-item">
                    <article class="model-card item-bookmarked" itemscope itemtype="https://schema.org/Person">
                        <a href="./model-page.html" itemprop="url">
                            <meta itemprop="image" content="storage/assets/img/3x4/007.webp">
                            <img src="storage/assets/img/lazy-3x4.webp" class="lazy"
                                 data-src="storage/assets/img/3x4/007.webp"
                                 width="200" height="260" alt="model">
                            <noscript>
                                <img src="storage/assets/img/3x4/007.webp" width="200" height="260" alt="model">
                            </noscript>
                            <div class="card-metas">
                                <span class="meta-item">New Face</span>
                            </div>
                            <div class="card-content">
                                <div class="card-inner-content">
                                    <h2 class="card-primary-title" itemprop="name">Model Name</h2>
                                    <div class="card-content-item" itemprop="nationality">Country Name</div>
                                    <div class="card-content-item">In Town</div>
                                    <div class="card-content-item">170 / 80 / 55 / 80 / 23</div>
                                    <div class="card-content-item">Model</div>
                                </div>
                                <div class="card-action">
                                    <div class="btn btn-icon btn-add-model-to-bookmark">
                                        <i class="icon-archive-add"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </article>
                </div>
                <div class="bookmark-item">
                    <article class="model-card item-bookmarked" itemscope itemtype="https://schema.org/Person">
                        <a href="./model-page.html" itemprop="url">
                            <meta itemprop="image" content="storage/assets/img/3x4/017.webp">
                            <img src="storage/assets/img/lazy-3x4.webp" class="lazy"
                                 data-src="storage/assets/img/3x4/017.webp"
                                 width="200" height="260" alt="model">
                            <noscript>
                                <img src="storage/assets/img/3x4/017.webp" width="200" height="260" alt="model">
                            </noscript>
                            <div class="card-metas">
                                <span class="meta-item">New Face</span>
                            </div>
                            <div class="card-content">
                                <div class="card-inner-content">
                                    <h2 class="card-primary-title" itemprop="name">Model Name</h2>
                                    <div class="card-content-item" itemprop="nationality">Country Name</div>
                                    <div class="card-content-item">In Town</div>
                                    <div class="card-content-item">170 / 80 / 55 / 80 / 23</div>
                                    <div class="card-content-item">Model</div>
                                </div>
                                <div class="card-action">
                                    <div class="btn btn-icon btn-add-model-to-bookmark">
                                        <i class="icon-archive-add"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </article>
                </div>
                <div class="bookmark-item">
                    <article class="model-card item-bookmarked" itemscope itemtype="https://schema.org/Person">
                        <a href="./model-page.html" itemprop="url">
                            <meta itemprop="image" content="storage/assets/img/3x4/027.webp">
                            <img src="storage/assets/img/lazy-3x4.webp" class="lazy"
                                 data-src="storage/assets/img/3x4/027.webp"
                                 width="200" height="260" alt="model">
                            <noscript>
                                <img src="storage/assets/img/3x4/027.webp" width="200" height="260" alt="model">
                            </noscript>
                            <div class="card-metas">
                                <span class="meta-item">New Face</span>
                            </div>
                            <div class="card-content">
                                <div class="card-inner-content">
                                    <h2 class="card-primary-title" itemprop="name">Model Name</h2>
                                    <div class="card-content-item" itemprop="nationality">Country Name</div>
                                    <div class="card-content-item">In Town</div>
                                    <div class="card-content-item">170 / 80 / 55 / 80 / 23</div>
                                    <div class="card-content-item">Model</div>
                                </div>
                                <div class="card-action">
                                    <div class="btn btn-icon btn-add-model-to-bookmark">
                                        <i class="icon-archive-add"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </article>
                </div>
                <div class="bookmark-item">
                    <article class="model-card item-bookmarked" itemscope itemtype="https://schema.org/Person">
                        <a href="./model-page.html" itemprop="url">
                            <meta itemprop="image" content="storage/assets/img/3x4/021.webp">
                            <img src="storage/assets/img/lazy-3x4.webp" class="lazy"
                                 data-src="storage/assets/img/3x4/021.webp"
                                 width="200" height="260" alt="model">
                            <noscript>
                                <img src="storage/assets/img/3x4/021.webp" width="200" height="260" alt="model">
                            </noscript>
                            <div class="card-metas">
                                <span class="meta-item">New Face</span>
                            </div>
                            <div class="card-content">
                                <div class="card-inner-content">
                                    <h2 class="card-primary-title" itemprop="name">Model Name</h2>
                                    <div class="card-content-item" itemprop="nationality">Country Name</div>
                                    <div class="card-content-item">In Town</div>
                                    <div class="card-content-item">170 / 80 / 55 / 80 / 23</div>
                                    <div class="card-content-item">Model</div>
                                </div>
                                <div class="card-action">
                                    <div class="btn btn-icon btn-add-model-to-bookmark">
                                        <i class="icon-archive-add"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </article>
                </div>
                <div class="bookmark-item">
                    <article class="model-card item-bookmarked" itemscope itemtype="https://schema.org/Person">
                        <a href="./model-page.html" itemprop="url">
                            <meta itemprop="image" content="storage/assets/img/3x4/025.webp">
                            <img src="storage/assets/img/lazy-3x4.webp" class="lazy"
                                 data-src="storage/assets/img/3x4/025.webp"
                                 width="200" height="260" alt="model">
                            <noscript>
                                <img src="storage/assets/img/3x4/025.webp" width="200" height="260" alt="model">
                            </noscript>
                            <div class="card-metas">
                                <span class="meta-item">New Face</span>
                            </div>
                            <div class="card-content">
                                <div class="card-inner-content">
                                    <h2 class="card-primary-title" itemprop="name">Model Name</h2>
                                    <div class="card-content-item" itemprop="nationality">Country Name</div>
                                    <div class="card-content-item">In Town</div>
                                    <div class="card-content-item">170 / 80 / 55 / 80 / 23</div>
                                    <div class="card-content-item">Model</div>
                                </div>
                                <div class="card-action">
                                    <div class="btn btn-icon btn-add-model-to-bookmark">
                                        <i class="icon-archive-add"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </article>
                </div>
                <div class="bookmark-item">
                    <article class="model-card item-bookmarked" itemscope itemtype="https://schema.org/Person">
                        <a href="./model-page.html" itemprop="url">
                            <meta itemprop="image" content="storage/assets/img/3x4/024.webp">
                            <img src="storage/assets/img/lazy-3x4.webp" class="lazy"
                                 data-src="storage/assets/img/3x4/024.webp"
                                 width="200" height="260" alt="model">
                            <noscript>
                                <img src="storage/assets/img/3x4/024.webp" width="200" height="260" alt="model">
                            </noscript>
                            <div class="card-metas">
                                <span class="meta-item">New Face</span>
                            </div>
                            <div class="card-content">
                                <div class="card-inner-content">
                                    <h2 class="card-primary-title" itemprop="name">Model Name</h2>
                                    <div class="card-content-item" itemprop="nationality">Country Name</div>
                                    <div class="card-content-item">In Town</div>
                                    <div class="card-content-item">170 / 80 / 55 / 80 / 23</div>
                                    <div class="card-content-item">Model</div>
                                </div>
                                <div class="card-action">
                                    <div class="btn btn-icon btn-add-model-to-bookmark">
                                        <i class="icon-archive-add"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </article>
                </div>
            </div>
            <div class="bookmark-actions">
                <a href="./models-list.html" class="btn btn-full">Hire Some Models</a>
                <a href="./bookmark-select-models.html" class="btn btn-primary btn-full">
                    Hire All Models
                </a>
            </div>
        </div>

        <!-- start overlay -->
        <div class="overlay"></div>

    </header>

    <!-- start content -->
    <main>
        <div id="content">

            <!-- start page breadcrumb -->
            <div class="page-breadcrumb">
                <div class="container-xxl">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./home">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Models</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <!-- start page title -->
            <div class="page-title">
                <div class="container-xxl">
                    <h1>Models</h1>
                </div>
            </div>

            <!-- page message -->
            <div class="container-xxl filter-message" id="message_archive_page">There is no results for <b>“Franchescooo”</b>.
                You can try another word.
            </div>

            <!-- global filter -->
            <div class="global-filter">
                <div class="container-xxl">
                    <ul>
                        <li>
                            <a href="./models-list?global=all" class="active">
                                All
                            </a>
                        </li>
                        <li>
                            <a href="./models-list?global=japanese">
                                Japanese
                            </a>
                        </li>
                        <li>
                            <a href="./models-list?global=mixed">
                                Mixed
                            </a>
                        </li>
                        <li>
                            <a href="./models-list?global=international">
                                International
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- section filter -->
            <div class="section section-filter">
                <div class="container-xxl">
                    <div class="section-filter-actions">
                        <div class="filter-actions-wrapper">
                            <button type="button" id="btn_filter_professional">
                                <i class="icon-filter"></i>
                                <span>Filters</span>
                                <i class="icon-arrow-down"></i>
                            </button>
                            <div class="filtered"></div>
                        </div>
                        <div class="field field-type-select field-sort" data-field-defualt-text="Select Item"
                             data-field-search="false">
                            <i class="icon-sort"></i>
                            <div class="field-content">
                                <label for="sort_archive_page">Sort</label>
                                <select name="sort" id="sort_archive_page">
                                    <option value="newest">Newest</option>
                                    <option value="oldest">Oldest</option>
                                    <option value="name">Name</option>
                                </select>
                                <i class="icon-arrow-down"></i>
                            </div>
                        </div>
                    </div>
                    <div class="filter-box">
                        <div class="filter-box-content">
                            <div class="row">

                                <div class="col-12">
                                    <div class="row">

                                        <!-- no. filter -->
                                        <div class="col-6 col-md-4 col-lg-3 group-filter" data-group-name="No"
                                             data-group-id="no">
                                            <div class="field field-type-nr-input" data-type="number">
                                                <div class="field-content">
                                                    <label for="member_no">Member No.</label>
                                                    <input type="number" name="member_no" id="member_no"
                                                           class="filter-member-no-controller" min="1">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- first name filter -->
                                        <div class="col-6 col-md-4 col-lg-3 group-filter" data-group-name="First Name"
                                             data-group-id="firstname">
                                            <div class="field field-type-nr-input" data-type="text">
                                                <div class="field-content">
                                                    <label for="member_name">Name/Stage Name (Talent Name)</label>
                                                    <input type="text" name="member_name" id="member_name">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <!-- gender filter -->
                                <div class="col-6 col-md-4 col-lg-3 group-filter" data-group-name="Gender"
                                     data-group-id="gender" data-status="label_filter_gender">
                                    <div class="field field-type-select" data-type="select" data-field-search="false">
                                        <div class="field-content">
                                            <label for="filter_gender" id="label_filter_gender">Gender</label>
                                            <select name="filter_gender" id="filter_gender" multiple>
                                                <option value="women">Women</option>
                                                <option value="men">Men</option>
                                                <option value="other">Other</option>
                                            </select>
                                            <i class="icon-arrow-down"></i>
                                        </div>
                                    </div>
                                </div>

                                <!-- age group -->
                                <div class="col-6 col-md-4 col-lg-3 group-filter" data-group-name="Age Group"
                                     data-group-id="age_group" data-status="label_filter_age_group">
                                    <div class="field field-type-select" data-type="select" data-field-search="false">
                                        <div class="field-content">
                                            <label for="filter_age_group" id="label_filter_age_group">Age Group</label>
                                            <select name="filter_age_group" id="filter_age_group" multiple>
                                                <option value="baby">Baby</option>
                                                <option value="kids">Kids</option>
                                                <option value="teenager">Teenager</option>
                                                <option value="young">Young Adult</option>
                                                <option value="adult">Adult</option>
                                                <option value="middle">Middle-Aged</option>
                                                <option value="senior">Senior</option>
                                            </select>
                                            <i class="icon-arrow-down"></i>
                                        </div>
                                    </div>
                                </div>

                                <!-- nationality -->
                                <div class="col-6 col-md-4 col-lg-3 group-filter" data-group-name="Nationality"
                                     data-group-id="nationality" data-status="label_filter_nationality">
                                    <div class="field field-type-select multiple" data-type="select"
                                         data-source="https://liliana.asensive.ir/api/country/"
                                         data-field-search="true">
                                        <div class="field-content">
                                            <label for="filter_nationality"
                                                   id="label_filter_nationality">Nationality</label>
                                            <select name="filter_nationality" id="filter_nationality" multiple></select>
                                            <i class="icon-arrow-down"></i>
                                        </div>
                                    </div>
                                </div>

                                <!-- language -->
                                <div class="col-6 col-md-4 col-lg-3 group-filter" data-group-name="Language"
                                     data-group-id="language" data-status="label_filter_language">
                                    <div class="field field-type-select multiple" data-type="select"
                                         data-source="https://liliana.asensive.ir/api/languages/"
                                         data-field-search="true">
                                        <div class="field-content">
                                            <label for="filter_language" id="label_filter_language">Language</label>
                                            <select name="filter_language" id="filter_language" multiple></select>
                                            <i class="icon-arrow-down"></i>
                                        </div>
                                    </div>
                                </div>

                                <!-- body size -->
                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="field field-type-select" data-custom-html="true"
                                         data-field-search="false">
                                        <div class="field-content">
                                            <label id="label_body_size">Body Size</label>
                                            <i class="icon-arrow-down"></i>
                                        </div>
                                        <div class="custom-html group-filter" data-group-name="Body Size"
                                             data-group-id="body_size" data-status="label_body_size">
                                            <div class="field field-type-multi-slider" data-label="Height"
                                                 data-field-label="Height" data-cunit="Cm"
                                                 data-sub-fix="Cm">
                                                <div class="field-content">
                                                    <label>Height</label>
                                                    <div class="slider-control">
                                                        <input type="range" min="0" max="220" step="10" value="0"
                                                               name="filter_height_min">
                                                        <input type="range" min="0" max="220" step="10" value="220"
                                                               name="filter_height_max">
                                                        <div class="slider-track"></div>
                                                    </div>
                                                    <div class="slider-values-text">
                                                        <div class="slider-min-text">
                                                            0 Cm
                                                        </div>
                                                        <div class="slider-max-text">
                                                            220 Cm
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="field field-type-multi-slider" data-label="Bust"
                                                 data-field-label="Bust" data-cunit="Cm"
                                                 data-sub-fix="Cm">
                                                <div class="field-content">
                                                    <label>Bust</label>
                                                    <div class="slider-control">
                                                        <input type="range" min="0" max="220" step="10" value="0"
                                                               name="filter_bust_min">
                                                        <input type="range" min="0" max="220" step="10" value="220"
                                                               name="filter_bust_max">
                                                        <div class="slider-track"></div>
                                                    </div>
                                                    <div class="slider-values-text">
                                                        <div class="slider-min-text">
                                                            0 Cm <br>
                                                            (Min Bust Size)
                                                        </div>
                                                        <div class="slider-max-text">
                                                            220 Cm <br>
                                                            (Max Bust Size)
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="field field-type-multi-slider" data-label="Waist"
                                                 data-field-label="Waist" data-cunit="Cm"
                                                 data-sub-fix="Cm">
                                                <div class="field-content">
                                                    <label>Waist</label>
                                                    <div class="slider-control">
                                                        <input type="range" min="0" max="220" step="10" value="0"
                                                               name="filter_waist_min">
                                                        <input type="range" min="0" max="220" step="10" value="220"
                                                               name="filter_waist_max">
                                                        <div class="slider-track"></div>
                                                    </div>
                                                    <div class="slider-values-text">
                                                        <div class="slider-min-text">
                                                            0 Cm <br>
                                                            (Min Waist Size)
                                                        </div>
                                                        <div class="slider-max-text">
                                                            220 Cm <br>
                                                            (Max Waist Size)
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="field field-type-multi-slider" data-label="Hips"
                                                 data-field-label="Hips" data-cunit="Cm"
                                                 data-sub-fix="Cm">
                                                <div class="field-content">
                                                    <label>Hips</label>
                                                    <div class="slider-control">
                                                        <input type="range" min="0" max="220" step="10" value="0"
                                                               name="filter_hips_min">
                                                        <input type="range" min="0" max="220" step="10" value="220"
                                                               name="filter_hips_max">
                                                        <div class="slider-track"></div>
                                                    </div>
                                                    <div class="slider-values-text">
                                                        <div class="slider-min-text">
                                                            0 Cm <br>
                                                            (Min Hips Size)
                                                        </div>
                                                        <div class="slider-max-text">
                                                            220 Cm <br>
                                                            (Max Hips Size)
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- hair color -->
                                <div class="col-6 col-md-4 col-lg-3 group-filter" data-group-name="Hair Color"
                                     data-group-id="hair_color" data-status="label_filter_hair_color">
                                    <div class="field field-type-select multiple" data-field-search="false">
                                        <div class="field-content">
                                            <label for="filter_hair_color" id="label_filter_hair_color">Hair
                                                Color</label>
                                            <select name="filter_hair_color" id="filter_hair_color" multiple>
                                                <option value="Black" data-color="#000000">Black</option>
                                                <option value="Brown" data-color="#964B00">Brown</option>
                                                <option value="Blonde" data-color="#faf0be">Blonde</option>
                                                <option value="Auburn" data-color="#a52a2a ">Auburn</option>
                                                <option value="Chestnut" data-color="#954535">Chestnut</option>
                                                <option value="Red" data-color="#FF0000">Red</option>
                                                <option value="Gray and White" data-color="#D6D5CB">Gray and White
                                                </option>
                                                <option value="Green" data-color="#008000">Green</option>
                                                <option value="Blue" data-color="#0000FF">Blue</option>
                                                <option value="Other" data-color="#D9D9D9">Other</option>
                                            </select>
                                            <i class="icon-arrow-down"></i>
                                        </div>
                                    </div>
                                </div>

                                <!-- eye color -->
                                <div class="col-6 col-md-4 col-lg-3 group-filter" data-group-name="Eye Color"
                                     data-group-id="eye_color" data-status="label_filter_eye_color">
                                    <div class="field field-type-select multiple" data-field-search="false">
                                        <div class="field-content">
                                            <label for="filter_eye_color" id="label_filter_eye_color">Eye Color</label>
                                            <select name="filter_eye_color" id="filter_eye_color" multiple>
                                                <option value="Amber" data-color="#FFBF00">Amber</option>
                                                <option value="Blue" data-color="#0000FF">Blue</option>
                                                <option value="Brown" data-color="#964B00">Brown</option>
                                                <option value="Grey" data-color="#808080">Grey</option>
                                                <option value="Green" data-color="#008000">Green</option>
                                                <option value="Hazel" data-color="#8E7618">Hazel</option>
                                                <option value="Black" data-color="#000000">Black</option>
                                                <option value="Heterochromia" data-color="#D9D9D9">Heterochromia
                                                </option>
                                            </select>
                                            <i class="icon-arrow-down"></i>
                                        </div>
                                    </div>
                                </div>

                                <!-- action -->
                                <div class="col-6 col-md-8 col-lg-3">
                                    <button type="button" class="btn btn-full btn-primary" id="btn_desk_set_filters">
                                        Set Filters
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- start section models -->
            <section class="section section-models">
                <div class="container-xxl">
                    <div class="grid-photo" id="models_archive_page">
                        @foreach($members as $member)
                            <div class="grid-item">
                                <article class="model-card" itemscope
                                         itemtype="https://schema.org/Person">
                                    <a href="./model-page.html" itemprop="url">
                                        <meta itemprop="image"
                                              content="storage/assets/img/3x4/{{ $member->profile_image}}.webp">
                                        <img src="storage/assets/img/lazy-3x4.webp" class="lazy"
                                             data-src="storage/assets/img/3x4/{{ $member->profile_image}}.webp"
                                             width="200" height="260" alt="model">
                                        <noscript>
                                            <img src="storage/assets/img/3x4/{{ $member->profile_image}}.webp"
                                                 width="200" height="260"
                                                 alt="model">
                                        </noscript>
                                        @if($member->isNew)
                                            <div class="card-metas">
                                                <span class="meta-item">NEW FACE</span>
                                            </div>
                                        @endif
                                        <div class="card-content">
                                            <div class="card-inner-content">
                                                <h2 class="card-primary-title" itemprop="name">{{ $member->name}}</h2>
                                                <div class="card-content-item"
                                                     itemprop="nationality">{{ $member->nationality}}</div>
                                                <div class="card-content-item">{{ $member->town}}</div>
                                                <div class="card-content-item">{{ $member->height}} / {{ $member->bust}}
                                                    / {{ $member->waist}} / {{ $member->hips}} / {{ $member->age}}</div>
                                                <div class="card-content-item">{{ $member->model_categories}}</div>
                                            </div>
                                            <div class="card-action">
                                                <div class="btn btn-icon btn-add-model-to-bookmark">
                                                    <i class="icon-archive-add"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </article>
                            </div>
                        @endforeach
                        <div class="end-actions">
                            <button class="btn btn-icon-left load-more" id="btn_load_more_models_archive_page"
                                    data-page="2">
                        <span>
                            <i class="icon-add"></i>
                            Load More
                        </span>
                            </button>
                        </div>
                    </div>
            </section>

        </div>
    </main>

    <!-- start loading -->
    <div class="page-loading visible">
        <div class="loading-content">
            <img
                src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAyNC4xLjIsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiDQoJIHZpZXdCb3g9IjAgMCA2MTUuMiAzMzEuNCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNjE1LjIgMzMxLjQ7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+DQoJLnN0MHtmaWxsOiMwMjAzMDI7fQ0KPC9zdHlsZT4NCjxnPg0KCTxnPg0KCQk8Zz4NCgkJCTxnPg0KCQkJCTxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik00OC44LDE5OC4ySDMzLjN2LTE1MmgwYzguNiwwLDE1LjUsNi45LDE1LjUsMTUuNVYxOTguMnoiLz4NCgkJCTwvZz4NCgkJCTxnPg0KCQkJCTxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik0xMzkuMSwxOTguMmgtMTUuNXYtMTUyaDBjOC42LDAsMTUuNSw2LjksMTUuNSwxNS41VjE5OC4yeiIvPg0KCQkJPC9nPg0KCQkJPHBhdGggY2xhc3M9InN0MCIgZD0iTTMwMiw4OC40djE1LjhjLTEwLjctMTEuNC0yNS45LTE4LjQtNDIuOC0xOC4xYy0zMCwwLjUtNTQuNywyNC42LTU2LjEsNTQuNWMtMS41LDMyLjgsMjQuNyw2MCw1Ny4yLDYwDQoJCQkJYzE2LjQsMCwzMS4zLTcsNDEuNy0xOC4xdjE1LjhoMTUuNXYtOTQuM0MzMTcuNSw5NS4zLDMxMC41LDg4LjQsMzAyLDg4LjRMMzAyLDg4LjR6IE0yNjQuMSwxODQuOGMtMjYsMi4zLTQ3LjctMTkuNC00NS4zLTQ1LjMNCgkJCQljMS44LTE5LjksMTcuOC0zNiwzNy43LTM3LjdjMjYtMi4zLDQ3LjcsMTkuNCw0NS4zLDQ1LjNDMzAwLDE2NywyODQsMTgzLjEsMjY0LjEsMTg0Ljh6Ii8+DQoJCQk8cGF0aCBjbGFzcz0ic3QwIiBkPSJNNTU1LjksODguNHYxNS44Yy0xMC43LTExLjQtMjUuOS0xOC40LTQyLjgtMTguMWMtMzAsMC41LTU0LjcsMjQuNi01Ni4xLDU0LjVjLTEuNSwzMi44LDI0LjcsNjAsNTcuMiw2MA0KCQkJCWMxNi40LDAsMzEuMy03LDQxLjctMTguMXYxNS44aDE1LjV2LTk0LjNDNTcxLjQsOTUuMyw1NjQuNSw4OC40LDU1NS45LDg4LjRMNTU1LjksODguNHogTTUxOCwxODQuOGMtMjYsMi4zLTQ3LjctMTkuNC00NS4zLTQ1LjMNCgkJCQljMS44LTE5LjksMTcuOC0zNiwzNy43LTM3LjdjMjYtMi4zLDQ3LjcsMTkuNCw0NS4zLDQ1LjNDNTUzLjksMTY3LDUzNy45LDE4My4xLDUxOCwxODQuOHoiLz4NCgkJCTxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik0zODkuNSw4Ni4xYy0yNy4zLDAuNS00OC45LDIzLjQtNDguOSw1MC42djYxLjVoMTUuNXYtNjEuNmMwLTE5LjIsMTUuNy0zNS4zLDM0LjktMzUNCgkJCQljMTguNiwwLjMsMzMuNywxNS42LDMzLjcsMzQuM3Y2Mi4zaDE1LjV2LTYyLjNDNDQwLjMsMTA4LjEsNDE3LjQsODUuNSwzODkuNSw4Ni4xeiIvPg0KCQkJPGc+DQoJCQkJPGc+DQoJCQkJCTxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik05NCwxOTguMkg3OC40Vjg4LjRoMGM4LjYsMCwxNS41LDYuOSwxNS41LDE1LjVWMTk4LjJ6Ii8+DQoJCQkJPC9nPg0KCQkJCTxnPg0KCQkJCQk8Y2lyY2xlIGNsYXNzPSJzdDAiIGN4PSI4Ni4yIiBjeT0iNjAiIHI9IjEzLjkiLz4NCgkJCQk8L2c+DQoJCQk8L2c+DQoJCQk8Zz4NCgkJCQk8Zz4NCgkJCQkJPHBhdGggY2xhc3M9InN0MCIgZD0iTTE4NC4zLDE5OC4yaC0xNS41Vjg4LjRoMGM4LjYsMCwxNS41LDYuOSwxNS41LDE1LjVWMTk4LjJ6Ii8+DQoJCQkJPC9nPg0KCQkJCTxnPg0KCQkJCQk8Y2lyY2xlIGNsYXNzPSJzdDAiIGN4PSIxNzYuNiIgY3k9IjYwIiByPSIxMy45Ii8+DQoJCQkJPC9nPg0KCQkJPC9nPg0KCQk8L2c+DQoJCTxnPg0KCQkJPHBhdGggY2xhc3M9InN0MCIgZD0iTTMzLjMsMjg4LjRsNy44LTQ5LjZsMTgsMzkuN2wxOC40LTM5LjhsNy4zLDQ5LjdoLTUuNGwtNC40LTMyLjdsLTE2LDM0LjdsLTE1LjgtMzQuN2wtNC43LDMyLjdIMzMuM3oiLz4NCgkJCTxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik0xNTEsMjY0LjljMC0xNCwxMC45LTI0LjMsMjQuNS0yNC4zczI0LjUsMTAuMywyNC41LDI0LjNjMCwxNC0xMC45LDI0LjMtMjQuNSwyNC4zDQoJCQkJQzE2MS45LDI4OS4yLDE1MSwyNzguOSwxNTEsMjY0Ljl6IE0xNTYuNCwyNjQuOWMwLDEwLjgsOC41LDE5LjQsMTkuMSwxOS40czE5LjEtOC42LDE5LjEtMTkuNGMwLTEwLjgtOC41LTE5LjQtMTkuMS0xOS40DQoJCQkJUzE1Ni40LDI1NC4xLDE1Ni40LDI2NC45eiIvPg0KCQkJPHBhdGggY2xhc3M9InN0MCIgZD0iTTI2Ny4zLDI0MS40aDkuNmM0LjcsMCwxMS40LDAuNSwxNy4zLDUuNWM0LjMsMy42LDgsOS42LDgsMThjMCw5LjktNC45LDE1LjItOC4yLDE4DQoJCQkJYy00LjMsMy43LTguOCw1LjQtMTcuMiw1LjRoLTkuNVYyNDEuNHogTTI3Mi41LDI4My40aDQuNmMzLjcsMCw4LjktMC40LDEzLjUtNC4yYzMuNS0zLDYuMy03LjYsNi4zLTE0LjMNCgkJCQljMC0xMS4zLTcuOS0xOC42LTE5LjgtMTguNmgtNC42VjI4My40eiIvPg0KCQkJPHBhdGggY2xhc3M9InN0MCIgZD0iTTM5NC4xLDI0Ni4zaC0xOS4ydjE0aDE4LjZ2NC45aC0xOC42djE4LjNoMTkuMnY0LjloLTI0LjR2LTQ3aDI0LjRWMjQ2LjN6Ii8+DQoJCQk8cGF0aCBjbGFzcz0ic3QwIiBkPSJNNDY2LjcsMjQxLjR2NDIuMWgxM3Y0LjloLTE4LjJ2LTQ3SDQ2Ni43eiIvPg0KCQkJPHBhdGggY2xhc3M9InN0MCIgZD0iTTU2NS41LDI1MC43Yy0wLjYtMS4zLTEuNy0yLjctMi43LTMuNWMtMC45LTAuNy0yLjYtMS42LTUuMy0xLjZjLTQuNywwLTcuOSwyLjktNy45LDcuMw0KCQkJCWMwLDEuOCwwLjUsMi45LDEuOCw0LjFjMS40LDEuNCwzLjIsMi4yLDQuOSwzbDQuNSwyYzMsMS4zLDUuOCwyLjcsNy44LDVjMS45LDIuMiwyLjgsNS4xLDIuOCw4YzAsOC43LTYuNCwxNC40LTE0LjksMTQuNA0KCQkJCWMtMy4xLDAtNy0wLjYtMTAuMi0zLjhjLTIuMy0yLjMtMy43LTUuNS00LjQtOC4zbDUuMS0xLjRjMC40LDIuNSwxLjUsNC42LDIuOCw2YzIsMiw0LjQsMi42LDYuOCwyLjZjNi40LDAsOS40LTQuNiw5LjQtOS4zDQoJCQkJYzAtMi4xLTAuNi0zLjktMi4zLTUuNWMtMS4zLTEuMy0zLjItMi4xLTUuNi0zLjJsLTQuMi0yYy0xLjgtMC44LTQuMi0xLjgtNi4zLTMuOWMtMi0yLTMuMi00LjItMy4yLTcuNw0KCQkJCWMwLTcuMyw1LjYtMTIuMSwxMy4yLTEyLjFjMi45LDAsNS4yLDAuNiw3LjUsMi4xYzEuOSwxLjMsMy41LDMuMiw0LjYsNS4yTDU2NS41LDI1MC43eiIvPg0KCQk8L2c+DQoJPC9nPg0KCTxnPg0KCQk8cGF0aCBjbGFzcz0ic3QwIiBkPSJNNTg0LjksNDYuNWM3LjQsMCwxMy41LDYuMSwxMy41LDEzLjVzLTYuMSwxMy41LTEzLjUsMTMuNXMtMTMuNS02LjEtMTMuNS0xMy41UzU3Ny41LDQ2LjUsNTg0LjksNDYuNXoNCgkJCSBNNTg0LjksNzEuNWM2LjMsMCwxMS41LTUuMiwxMS41LTExLjVzLTUuMi0xMS41LTExLjUtMTEuNXMtMTEuNSw1LjItMTEuNSwxMS41UzU3OC42LDcxLjUsNTg0LjksNzEuNXogTTU4MCw1Mi4xaDYNCgkJCWMxLjMsMCw0LjUsMC41LDQuNSw0LjNjMCwyLjctMi4zLDQuMi00LjEsNC4ySDU4Nmw1LDcuNGgtM2wtNC44LTcuM2gtMC43djcuM0g1ODBWNTIuMXogTTU4Mi41LDU4LjZoMi4yYzIuNSwwLDMtMSwzLTIuMg0KCQkJcy0wLjQtMi4yLTIuNy0yLjJoLTIuNlY1OC42eiIvPg0KCTwvZz4NCjwvZz4NCjwvc3ZnPg0K"
                class="loading-logo" width="277" height="76" alt="liliana">
            <span class="loader"></span>
        </div>
    </div>

    <!-- start footer -->
    <footer id="footer">
        <div class="container-xxl">
            <div class="row">

                <!-- start about us -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="ft-about-us">
                        <a href="#" class="ft-site-logo">
                            <img src="storage/assets/img/lazy-trp-1x1.webp" class="lazy lz-dark"
                                 data-src="storage/assets/img/logo-white.svg" width="88"
                                 height="24" alt="Liliana">
                            <noscript>
                                <img src="storage/assets/img/logo-white.svg" width="88" height="24" alt="Liliana">
                            </noscript>
                        </a>
                        <p>
                            We celebrate your uniqueness, help you achieve dreams, and support your creative journey at
                            every step.
                        </p>
                    </div>
                    <div class="social-link">
                        <a href="https://www.facebook.com/liliana.modeling/" class="btn btn-icon"
                           aria-label="Facebook Link">
                            <i class="icon-facebook"></i>
                        </a>
                        <a href="https://www.instagram.com/Liliana.models/" class="btn btn-icon"
                           aria-label="Instagram Link">
                            <i class="icon-instagram"></i>
                        </a>
                        <a href="https://www.tiktok.com/@lilianamodels" class="btn btn-icon" aria-label="Tiktok Link">
                            <i class="icon-Tiktok"></i>
                        </a>
                        <a href="https://twitter.com/lilianamodels" class="btn btn-icon" aria-label="Twitter Link">
                            <i class="icon-twitter"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/liliana-modeling" class="btn btn-icon"
                           aria-label="LinkedIn Link">
                            <i class="icon-linkedin"></i>
                        </a>
                    </div>
                </div>

                <!-- start contact us -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="ft-contact-us">
                        <ul>
                            <li>
                                <i class="icon-call"></i>
                                <a href="tel:+81-3-6362-3355">+81-3-6362-3355</a>
                            </li>
                            <li>
                                <i class="icon-fax"></i>
                                <a href="fax:+81-3-6323-0195">+81-3-6323-0195</a>
                            </li>
                            <li>
                                <i class="icon-sms"></i>
                                <a href="mailto:info@lilianamodels.com">info@lilianamodels.com</a>
                            </li>
                            <li>
                                <i class="icon-location"></i>
                                <span>
                                2nd floor, Vort Akasaka II, 4-4-8 Akasaka, Minato-ku, Tokyo 107-0052
                            </span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- start menu and categories link -->
                <div class="col-12 col-sm-12 col-lg-4 footer-more-links">
                    <div class="accordion">
                        <div class="accordion-item">
                            <button class="accordion-header">
                                <span class="accordion-title">Menu</span>
                                <i class="icon-arrow-down"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="ft-menu">
                                    <ul>
                                        <li><a href="./home">Home</a></li>
                                        <li><a href="./work.html">Portfolio</a></li>
                                        <li><a href="./news-category.html">News</a></li>
                                        <li><a href="./about-us.html">About us</a></li>
                                        <li><a href="./contact-us.html">Contact us</a></li>
                                        <li><a href="./company-profile.html">Company Profile</a></li>
                                        <li><a href="./privacy-policy.html">Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button class="accordion-header">
                                <span class="accordion-title">Categories</span>
                                <i class="icon-arrow-down"></i>
                            </button>
                            <div class="accordion-content">
                                <div class="ft-categories">
                                    <ul>
                                        <li><a href="./models-list.html">Model</a></li>
                                        <li><a href="./models-list.html">Talent</a></li>
                                        <li><a href="./models-list.html">Actor</a></li>
                                        <li><a href="./models-list.html">Extra</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- start social link mobile -->
                <div class="col-12">
                    <div class="social-link">
                        <a href="https://www.facebook.com/liliana.modeling/" class="btn btn-icon"
                           aria-label="Facebook Link">
                            <i class="icon-facebook"></i>
                        </a>
                        <a href="https://www.instagram.com/Liliana.models/" class="btn btn-icon"
                           aria-label="Instagram Link">
                            <i class="icon-instagram"></i>
                        </a>
                        <a href="https://www.tiktok.com/@lilianamodels" class="btn btn-icon" aria-label="Tiktok Link">
                            <i class="icon-Tiktok"></i>
                        </a>
                        <a href="https://twitter.com/lilianamodels" class="btn btn-icon" aria-label="Twitter Link">
                            <i class="icon-twitter"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/liliana-modeling" class="btn btn-icon"
                           aria-label="LinkedIn Link">
                            <i class="icon-linkedin"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <div class="copyright">
            ©2023 Liliana Entertainment Agency, All Rights Reserved.
        </div>
    </footer>

    <!-- start scripts -->
    {{--    TODO Saber --}}
    <script src="storage/assets/js/lib/jQuery.min.js"></script>
    <script src="storage/assets/js/lib/lazyload.min.js"></script>
    <script src="storage/assets/js/app-screen.min.js"></script>
    <script src="storage/assets/js/modal-screen.min.js"></script>
    <script src="storage/assets/js/api-request-manager.min.js"></script>
    <script src="storage/assets/js/pro-validation.min.js"></script>
    <script src="storage/assets/js/component.min.js"></script>
    <script src="storage/assets/js/scripts.min.js"></script>

@endsection