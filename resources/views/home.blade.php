@extends('layout-home')

@section('content-home')

    <!-- start header -->
    <header id="header">

        <!-- start app bar -->
        <div class="app-bar">
            <div class="app-bar-container">
                <div class="leading">
                    <button class="btn btn-icon" id="btn_appbar_menu" aria-label="Open Menu">
                        <i class="icon-menu"></i>
                    </button>
                </div>
                <div class="app-bar-title">
                    <a href="/" class="app-logo" aria-label="Liliana">
                        <img src="storage/assets/logo-white.svg" class="lazy lz-entered lz-loaded"
                             data-src="storage/assets/img/logo-white.svg" width="88" height="24" alt="liliana"
                             data-ll-status="loaded">
                        <noscript>
                            <img src="storage/assets/img/logo-white.svg" width="88" height="24" alt="liliana">
                        </noscript>
                    </a>
                    <h1 class="app-bar-title-hidden">Liliana Models</h1>
                </div>
                <div class="actions">
                    <div class="app-lang">
                        <a href="/?lng=jp" class="btn btn-icon" aria-label="Change Language To Japane">
                            JP
                        </a>
                        <div class="divider"></div>
                        <a href="/?lng=en" class="btn btn-icon active" aria-label="Change language To English">
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
                    <a href="/dashboard/models/" class="user-dashboard">
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
                                <li class="active"><a href="/">Home</a></li>
                                <li><a href="work">Portfolio</a></li>
                                <li><a href="news-category">News</a></li>
                                <li><a href="about-us">About us</a></li>
                                <li><a href="contact-us">Contact us</a></li>
                                <li><a href="company-profile">Company Profile</a></li>
                                <li><a href="privacy-policy">Privacy Policy</a></li>
                            </ul>
                        </nav>

                        <!-- menu categories -->
                        <div class="menu-categories">
                            <div class="category">
                                <div class="category-title">Model</div>
                                <ul class="category-content">
                                    <li><a href="models-list">All</a></li>
                                    <li><a href="models-list">Women</a></li>
                                    <li><a href="models-list">Men</a></li>
                                    <li><a href="models-list">Kids &amp; Babies</a></li>
                                    <li><a href="models-list">Japanese</a></li>
                                    <li><a href="models-list">Mixed</a></li>
                                    <li><a href="models-list">International</a></li>
                                </ul>
                            </div>
                            <div class="category">
                                <div class="category-title">Talent</div>
                                <ul class="category-content">
                                    <li><a href="models-list">All</a></li>
                                    <li><a href="models-list">Women</a></li>
                                    <li><a href="models-list">Men</a></li>
                                    <li><a href="models-list">Kids</a></li>
                                    <li><a href="models-list">Japanese</a></li>
                                    <li><a href="models-list">Mixed</a></li>
                                    <li><a href="models-list">International</a></li>
                                </ul>
                            </div>
                            <div class="category">
                                <div class="category-title">Actor</div>
                                <ul class="category-content">
                                    <li><a href="models-list">All</a></li>
                                    <li><a href="models-list">Actors</a></li>
                                    <li><a href="models-list">Actresses</a></li>
                                    <li><a href="models-list">Kids</a></li>
                                    <li><a href="models-list">Japanese</a></li>
                                    <li><a href="models-list">Mixed</a></li>
                                    <li><a href="models-list">International</a></li>
                                </ul>
                            </div>
                            <div class="category">
                                <div class="category-title">Extra</div>
                                <ul class="category-content">
                                    <li><a href="models-list">All</a></li>
                                    <li><a href="models-list">Women</a></li>
                                    <li><a href="models-list">Men</a></li>
                                    <li><a href="models-list">Kids</a></li>
                                    <li><a href="models-list">Japanese</a></li>
                                    <li><a href="models-list">Mixed</a></li>
                                    <li><a href="models-list">International</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <!-- menu size -->
                    <div class="menu-right-side">

                        <!-- side action -->
                        <div class="side-action">
                            <a href="become-a-model" class="btn btn-icon-left">
                            <span>
                                <i class="icon-add"></i>
                                Become Liliana
                            </span>
                            </a>
                            <a href="login" class="btn btn-primary btn-icon-left">
                            <span>
                                <i class="icon-log-in"></i>
                                Login
                            </span>
                            </a>
                            <a href="/#" class="dashboard">
                            <span>
                                Miss Leslie Alexander
                                <i class="icon-arrow-right"></i>
                            </span>
                            </a>
                            <a href="/#" class="logout">
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
                                    <li id="tab_header_menu" class="active">
                                        menu
                                    </li>
                                    <li id="tab_header_categories">
                                        categories
                                    </li>
                                </ul>
                                <div class="tabs-contents">
                                    <div class="tab-content-item active" data-tab-target="tab_header_menu">
                                        <nav class="menu-nav">
                                            <ul>
                                                <li><a href="/">Home</a></li>
                                                <li><a href="work">Portfolio</a></li>
                                                <li><a href="news-category">News</a></li>
                                                <li><a href="about-us">About us</a></li>
                                                <li><a href="contact-us">Contact us</a></li>
                                                <li><a href="company-profile">Company Profile</a></li>
                                                <li><a href="privacy-policy">Privacy Policy</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="tab-content-item tab-category" data-tab-target="tab_header_categories">
                                        <div class="accordion">
                                            <div class="accordion-item">
                                                <button class="accordion-header">
                                                    <span class="accordion-title">Model</span>
                                                    <i class="icon-arrow-down"></i>
                                                </button>
                                                <div class="accordion-content" style="display: none;">
                                                    <ul>
                                                        <li><a href="models-list">All</a></li>
                                                        <li><a href="models-list">Women</a></li>
                                                        <li><a href="models-list">Men</a></li>
                                                        <li><a href="models-list">Kids &amp; Babies</a></li>
                                                        <li><a href="models-list">Japanese</a></li>
                                                        <li><a href="models-list">Mixed</a></li>
                                                        <li><a href="models-list">International</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <button class="accordion-header">
                                                    <span class="accordion-title">Talent</span>
                                                    <i class="icon-arrow-down"></i>
                                                </button>
                                                <div class="accordion-content" style="display: none;">
                                                    <ul>
                                                        <li><a href="models-list">All</a></li>
                                                        <li><a href="models-list">Women</a></li>
                                                        <li><a href="models-list">Men</a></li>
                                                        <li><a href="models-list">Kids</a></li>
                                                        <li><a href="models-list">Japanese</a></li>
                                                        <li><a href="models-list">Mixed</a></li>
                                                        <li><a href="models-list">International</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <button class="accordion-header">
                                                    <span class="accordion-title">Actor</span>
                                                    <i class="icon-arrow-down"></i>
                                                </button>
                                                <div class="accordion-content" style="display: none;">
                                                    <ul>
                                                        <li><a href="models-list">All</a></li>
                                                        <li><a href="models-list">Actors</a></li>
                                                        <li><a href="models-list">Actresses</a></li>
                                                        <li><a href="models-list">Kids</a></li>
                                                        <li><a href="models-list">Japanese</a></li>
                                                        <li><a href="models-list">Mixed</a></li>
                                                        <li><a href="models-list">International</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <button class="accordion-header">
                                                    <span class="accordion-title">Extra</span>
                                                    <i class="icon-arrow-down"></i>
                                                </button>
                                                <div class="accordion-content" style="display: none;">
                                                    <ul>
                                                        <li><a href="models-list">All</a></li>
                                                        <li><a href="models-list">Women</a></li>
                                                        <li><a href="models-list">Men</a></li>
                                                        <li><a href="models-list">Kids</a></li>
                                                        <li><a href="models-list">Japanese</a></li>
                                                        <li><a href="models-list">Mixed</a></li>
                                                        <li><a href="models-list">International</a></li>
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
                                <img src="storage/assets/lazy-1x1.webp" class="lazy"
                                     data-src="storage/assets/img/1x1/001.webp" width="80" height="80" alt="Model">
                                <noscript>
                                    <img src="storage/assets/img/1x1/001.webp" width="80" height="80" alt="Model">
                                </noscript>
                                <div class="user-content">
                                    <div class="user-display-name">Miss Leslie Alexander</div>
                                    <a href="/dashboard/models/index">
                                        Go to Dashboard
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <a href="login" class="btn btn-primary btn-full">Login</a>
                            <a href="become-a-model" class="btn btn-full">Become Liliana</a>
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
                        <form action="models-list" method="post">
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
                        <a href="/#" id="btn_clear_search_recent">Clear All</a>
                    </div>
                    <div class="recent-model">
                        <a href="model-page">
                            <img src="storage/assets/img/slider/012.webp" class="lazy lz-entered lz-loaded"
                                 data-src="storage/assets/img/3x4/012.webp" width="120" height="160" alt="Model"
                                 data-ll-status="loaded">
                            <noscript>
                                <img src="storage/assets/img/3x4/012.webp" width="120" height="160" alt="Model">
                            </noscript>
                            <span>Maaya</span>
                        </a>
                        <a href="model-page">
                            <img src="storage/assets/img/slider/011.webp" class="lazy lz-entered lz-loaded"
                                 data-src="storage/assets/img/3x4/011.webp" width="120" height="160" alt="Model"
                                 data-ll-status="loaded">
                            <noscript>
                                <img src="storage/assets/img/3x4/011.webp" width="120" height="160" alt="Model">
                            </noscript>
                            <span>Soya</span>
                        </a>
                        <a href="model-page">
                            <div class="replacement-box">
                                <i class="icon-gallery"></i>
                            </div>
                            <span>Mikel</span>
                        </a>
                        <a href="model-page">
                            <img src="storage/assets/img/slider/028.webp" class="lazy lz-entered lz-loaded"
                                 data-src="storage/assets/img/3x4/028.webp" width="120" height="160" alt="Model"
                                 data-ll-status="loaded">
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
                        <a href="model-page">
                            <img src="storage/assets/lazy-1x1.webp" class="lazy"
                                 data-src="storage/assets/img/1x1/003.webp" width="80" height="80" alt="model">
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
                        <a href="model-page">
                            <img src="storage/assets/img/slider/004.webp" class="lazy lz-entered lz-loaded"
                                 data-src="storage/assets/img/1x1/004.webp" width="80" height="80" alt="model"
                                 data-ll-status="loaded">
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
                        <a href="model-page">
                            <img src="storage/assets/img/slider/005.webp" class="lazy lz-entered lz-loaded"
                                 data-src="storage/assets/img/1x1/005.webp" width="80" height="80" alt="model"
                                 data-ll-status="loaded">
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
                <a href="models-list" class="more-result">
                    See All 25 Results
                    <i class="icon-arrow-right"></i>
                </a>
            </div>

        </div>

        <!-- start bookmark -->
        <div class="bookmark">
            <div class="empty-bookmark" style="display: none;">
                <p>You have not added any models to the list yet.</p>
                <a href="models-list" class="btn btn-xl btn-icon-left btn-full">
                    + Add Models
                </a>
            </div>
            <div class="bookmark-items">
                <div class="bookmark-item" style="width: 203.5px;">
                    <article class="model-card item-bookmarked" itemscope="" itemtype="https://schema.org/Person">
                        <a href="model-page" itemprop="url">
                            <meta itemprop="image" content="storage/assets/img/3x4/007.webp">
                            <img src="storage/assets/img/slider/007.webp" class="lazy lz-entered lz-loaded"
                                 data-src="storage/assets/img/3x4/007.webp" width="200" height="260" alt="model"
                                 data-ll-status="loaded">
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
                <div class="bookmark-item" style="width: 203.5px;">
                    <article class="model-card item-bookmarked" itemscope="" itemtype="https://schema.org/Person">
                        <a href="model-page" itemprop="url">
                            <meta itemprop="image" content="storage/assets/img/3x4/017.webp">
                            <img src="storage/assets/img/slider/017.webp" class="lazy lz-entered lz-loaded"
                                 data-src="storage/assets/img/3x4/017.webp" width="200" height="260" alt="model"
                                 data-ll-status="loaded">
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
                <div class="bookmark-item" style="width: 203.5px;">
                    <article class="model-card item-bookmarked" itemscope="" itemtype="https://schema.org/Person">
                        <a href="model-page" itemprop="url">
                            <meta itemprop="image" content="storage/assets/img/3x4/027.webp">
                            <img src="storage/assets/img/slider/027.webp" class="lazy lz-entered lz-loaded"
                                 data-src="storage/assets/img/3x4/027.webp" width="200" height="260" alt="model"
                                 data-ll-status="loaded">
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
                <div class="bookmark-item" style="width: 203.5px;">
                    <article class="model-card item-bookmarked" itemscope="" itemtype="https://schema.org/Person">
                        <a href="model-page" itemprop="url">
                            <meta itemprop="image" content="storage/assets/img/3x4/021.webp">
                            <img src="storage/assets/img/slider/021.webp" class="lazy lz-entered lz-loaded"
                                 data-src="storage/assets/img/3x4/021.webp" width="200" height="260" alt="model"
                                 data-ll-status="loaded">
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
                <div class="bookmark-item" style="width: 203.5px;">
                    <article class="model-card item-bookmarked" itemscope="" itemtype="https://schema.org/Person">
                        <a href="model-page" itemprop="url">
                            <meta itemprop="image" content="storage/assets/img/3x4/025.webp">
                            <img src="storage/assets/img/slider/025.webp" class="lazy lz-entered lz-loaded"
                                 data-src="storage/assets/img/3x4/025.webp" width="200" height="260" alt="model"
                                 data-ll-status="loaded">
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
                <div class="bookmark-item" style="width: 203.5px;">
                    <article class="model-card item-bookmarked" itemscope="" itemtype="https://schema.org/Person">
                        <a href="model-page" itemprop="url">
                            <meta itemprop="image" content="storage/assets/img/3x4/024.webp">
                            <img src="storage/assets/img/slider/024.webp" class="lazy lz-entered lz-loaded"
                                 data-src="storage/assets/img/3x4/024.webp" width="200" height="260" alt="model"
                                 data-ll-status="loaded">
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
                <a href="models-list" class="btn btn-full">Hire Some Models</a>
                <a href="bookmark-select-models" class="btn btn-primary btn-full">
                    Hire All Models
                </a>
            </div>
        </div>

        <!-- start overlay -->
        <div class="overlay"></div>

    </header>

    <!-- start main -->
    <main>
        <div id="content">

            <!-- super slider -->
            <div class="super-slider win-full-height" itemscope="" itemtype="https://schema.org/ItemList"
                 style="height: 651px;">
                <div class="owl-carousel owl-loaded owl-drag" itemprop="itemListElement" itemscope=""
                     itemtype="https://schema.org/ListItem">


                    <div class="owl-stage-outer">
                        <div class="owl-stage"
                             style="transform: translate3d(-5396px, 0px, 0px); transition: all 0.25s ease 0s; width: 20235px;">
                            <div class="owl-item cloned" style="width: 1349px;">
                                <div class="item slider-item-3" itemprop="item" itemscope=""
                                     itemtype="https://schema.org/Person" data-index="3">
                                    <div class="item-background">
                                        <picture>
                                            <source class="owl-lazy" media="(min-width: 1560px)"
                                                    data-srcset="storage/assets/img/slider/004-l.webp"
                                                    srcset="storage/assets/img/slider/004-l.webp">
                                            <source class="owl-lazy" media="(min-width: 576px)"
                                                    data-srcset="storage/assets/img/slider/004-m.webp"
                                                    srcset="storage/assets/img/slider/004-m.webp">
                                            <img class="owl-lazy" data-src="storage/assets/img/slider/004-s.webp"
                                                 alt="model" src="storage/assets/004-s.webp" style="opacity: 1;">
                                        </picture>
                                    </div>
                                    <meta itemprop="image" content="storage/assets/img/3x4/040.webp">


                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 1349px;">
                                <div class="item slider-item-4" itemprop="item" itemscope=""
                                     itemtype="https://schema.org/Person" data-index="4">
                                    <div class="item-background">
                                        <picture>
                                            <source class="owl-lazy" media="(min-width: 1560px)"
                                                    data-srcset="storage/assets/img/slider/005-l.webp"
                                                    srcset="storage/assets/img/slider/005-l.webp">
                                            <source class="owl-lazy" media="(min-width: 576px)"
                                                    data-srcset="storage/assets/img/slider/005-m.webp"
                                                    srcset="storage/assets/img/slider/005-m.webp">
                                            <img class="owl-lazy" data-src="storage/assets/img/slider/005-s.webp"
                                                 alt="model" src="storage/assets/005-s.webp" style="opacity: 1;">
                                        </picture>
                                    </div>
                                    <meta itemprop="image" content="storage/assets/img/3x4/041.webp">


                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 1349px;">
                                <div class="item slider-item-5" itemprop="item" itemscope=""
                                     itemtype="https://schema.org/Person" data-index="5">
                                    <div class="item-background">
                                        <picture>
                                            <source class="owl-lazy" media="(min-width: 1560px)"
                                                    data-srcset="storage/assets/img/slider/006-l.webp"
                                                    srcset="storage/assets/img/slider/006-l.webp">
                                            <source class="owl-lazy" media="(min-width: 576px)"
                                                    data-srcset="storage/assets/img/slider/006-m.webp"
                                                    srcset="storage/assets/img/slider/006-m.webp">
                                            <img class="owl-lazy" data-src="storage/assets/img/slider/006-s.webp"
                                                 alt="model" src="storage/assets/006-s.webp" style="opacity: 1;">
                                        </picture>
                                    </div>
                                    <meta itemprop="image" content="storage/assets/img/3x4/042.webp">


                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 1349px;">
                                <div class="item slider-item-6" itemprop="item" itemscope=""
                                     itemtype="https://schema.org/Person" data-index="6">
                                    <div class="item-background">
                                        <picture>
                                            <source class="owl-lazy" media="(min-width: 1560px)"
                                                    data-srcset="storage/assets/img/slider/007-l.webp"
                                                    srcset="storage/assets/img/slider/007-l.webp">
                                            <source class="owl-lazy" media="(min-width: 576px)"
                                                    data-srcset="storage/assets/img/slider/007-m.webp"
                                                    srcset="storage/assets/img/slider/007-m.webp">
                                            <img class="owl-lazy" data-src="storage/assets/img/slider/007-s.webp"
                                                 alt="model" src="storage/assets/img/slider/007-s.webp"
                                                 style="opacity: 1;">
                                        </picture>
                                    </div>
                                    <meta itemprop="image" content="storage/assets/img/3x4/043.webp">


                                </div>
                            </div>
                            <div class="owl-item active" style="width: 1349px;">
                                <div class="item slider-item-0" itemprop="item" itemscope=""
                                     itemtype="https://schema.org/Person" data-index="0">
                                    <div class="item-background">
                                        <picture>
                                            <source class="owl-lazy" media="(min-width: 1560px)"
                                                    data-srcset="storage/assets/img/slider/001-l.webp"
                                                    srcset="storage/assets/img/slider/001-l.webp">
                                            <source class="owl-lazy" media="(min-width: 576px)"
                                                    data-srcset="storage/assets/img/slider/001-m.webp"
                                                    srcset="storage/assets/img/slider/001-m.webp">
                                            <img class="owl-lazy" data-src="storage/assets/img/slider/001-s.webp"
                                                 alt="model" src="storage/assets/001-s.webp" style="opacity: 1;">
                                        </picture>
                                    </div>
                                    <meta itemprop="image" content="storage/assets/img/3x4/037.webp">


                                </div>
                            </div>
                            <div class="owl-item" style="width: 1349px;">
                                <div class="item slider-item-1" itemprop="item" itemscope=""
                                     itemtype="https://schema.org/Person" data-index="1">
                                    <div class="item-background">
                                        <picture>
                                            <source class="owl-lazy" media="(min-width: 1560px)"
                                                    data-srcset="storage/assets/img/slider/002-l.webp"
                                                    srcset="storage/assets/img/slider/002-l.webp">
                                            <source class="owl-lazy" media="(min-width: 576px)"
                                                    data-srcset="storage/assets/img/slider/002-m.webp"
                                                    srcset="storage/assets/img/slider/002-m.webp">
                                            <img class="owl-lazy" data-src="storage/assets/img/slider/002-s.webp"
                                                 alt="model" src="storage/assets/002-s.webp" style="opacity: 1;">
                                        </picture>
                                    </div>
                                    <meta itemprop="image" content="storage/assets/img/3x4/038.webp">


                                </div>
                            </div>
                            <div class="owl-item" style="width: 1349px;">
                                <div class="item slider-item-2" itemprop="item" itemscope=""
                                     itemtype="https://schema.org/Person" data-index="2">
                                    <div class="item-background">
                                        <picture>
                                            <source class="owl-lazy" media="(min-width: 1560px)"
                                                    data-srcset="storage/assets/img/slider/003-l.webp"
                                                    srcset="storage/assets/img/slider/003-l.webp">
                                            <source class="owl-lazy" media="(min-width: 576px)"
                                                    data-srcset="storage/assets/img/slider/003-m.webp"
                                                    srcset="storage/assets/img/slider/003-m.webp">
                                            <img class="owl-lazy" data-src="storage/assets/img/slider/003-s.webp"
                                                 alt="model" src="storage/assets/003-s.webp" style="opacity: 1;">
                                        </picture>
                                    </div>
                                    <meta itemprop="image" content="storage/assets/img/3x4/039.webp">


                                </div>
                            </div>
                            <div class="owl-item" style="width: 1349px;">
                                <div class="item slider-item-3" itemprop="item" itemscope=""
                                     itemtype="https://schema.org/Person" data-index="3">
                                    <div class="item-background">
                                        <picture>
                                            <source class="owl-lazy" media="(min-width: 1560px)"
                                                    data-srcset="storage/assets/img/slider/004-l.webp"
                                                    srcset="storage/assets/img/slider/004-l.webp">
                                            <source class="owl-lazy" media="(min-width: 576px)"
                                                    data-srcset="storage/assets/img/slider/004-m.webp"
                                                    srcset="storage/assets/img/slider/004-m.webp">
                                            <img class="owl-lazy" data-src="storage/assets/img/slider/004-s.webp"
                                                 alt="model" src="storage/assets/004-s.webp" style="opacity: 1;">
                                        </picture>
                                    </div>
                                    <meta itemprop="image" content="storage/assets/img/3x4/040.webp">


                                </div>
                            </div>
                            <div class="owl-item" style="width: 1349px;">
                                <div class="item slider-item-4" itemprop="item" itemscope=""
                                     itemtype="https://schema.org/Person" data-index="4">
                                    <div class="item-background">
                                        <picture>
                                            <source class="owl-lazy" media="(min-width: 1560px)"
                                                    data-srcset="storage/assets/img/slider/005-l.webp"
                                                    srcset="storage/assets/img/slider/005-l.webp">
                                            <source class="owl-lazy" media="(min-width: 576px)"
                                                    data-srcset="storage/assets/img/slider/005-m.webp"
                                                    srcset="storage/assets/img/slider/005-m.webp">
                                            <img class="owl-lazy" data-src="storage/assets/img/slider/005-s.webp"
                                                 alt="model" src="storage/assets/005-s.webp" style="opacity: 1;">
                                        </picture>
                                    </div>
                                    <meta itemprop="image" content="storage/assets/img/3x4/041.webp">


                                </div>
                            </div>
                            <div class="owl-item" style="width: 1349px;">
                                <div class="item slider-item-5" itemprop="item" itemscope=""
                                     itemtype="https://schema.org/Person" data-index="5">
                                    <div class="item-background">
                                        <picture>
                                            <source class="owl-lazy" media="(min-width: 1560px)"
                                                    data-srcset="storage/assets/img/slider/006-l.webp"
                                                    srcset="storage/assets/img/slider/006-l.webp">
                                            <source class="owl-lazy" media="(min-width: 576px)"
                                                    data-srcset="storage/assets/img/slider/006-m.webp"
                                                    srcset="storage/assets/img/slider/006-m.webp">
                                            <img class="owl-lazy" data-src="storage/assets/img/slider/006-s.webp"
                                                 alt="model" src="storage/assets/006-s.webp" style="opacity: 1;">
                                        </picture>
                                    </div>
                                    <meta itemprop="image" content="storage/assets/img/3x4/042.webp">


                                </div>
                            </div>
                            <div class="owl-item" style="width: 1349px;">
                                <div class="item slider-item-6" itemprop="item" itemscope=""
                                     itemtype="https://schema.org/Person" data-index="6">
                                    <div class="item-background">
                                        <picture>
                                            <source class="owl-lazy" media="(min-width: 1560px)"
                                                    data-srcset="storage/assets/img/slider/007-l.webp"
                                                    srcset="storage/assets/img/slider/007-l.webp">
                                            <source class="owl-lazy" media="(min-width: 576px)"
                                                    data-srcset="storage/assets/img/slider/007-m.webp"
                                                    srcset="storage/assets/img/slider/007-m.webp">
                                            <img class="owl-lazy" data-src="storage/assets/img/slider/007-s.webp"
                                                 alt="model" src="/assets/img/slider/007-s.webp" style="opacity: 1;">
                                        </picture>
                                    </div>
                                    <meta itemprop="image" content="storage/assets/img/3x4/043.webp">


                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 1349px;">
                                <div class="item slider-item-0" itemprop="item" itemscope=""
                                     itemtype="https://schema.org/Person" data-index="0">
                                    <div class="item-background">
                                        <picture>
                                            <source class="owl-lazy" media="(min-width: 1560px)"
                                                    data-srcset="storage/assets/img/slider/001-l.webp"
                                                    srcset="storage/assets/img/slider/001-l.webp">
                                            <source class="owl-lazy" media="(min-width: 576px)"
                                                    data-srcset="storage/assets/img/slider/001-m.webp"
                                                    srcset="storage/assets/img/slider/001-m.webp">
                                            <img class="owl-lazy" data-src="storage/assets/img/slider/001-s.webp"
                                                 alt="model" src="storage/assets/001-s.webp" style="opacity: 1;">
                                        </picture>
                                    </div>
                                    <meta itemprop="image" content="storage/assets/img/3x4/037.webp">


                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 1349px;">
                                <div class="item slider-item-1" itemprop="item" itemscope=""
                                     itemtype="https://schema.org/Person" data-index="1">
                                    <div class="item-background">
                                        <picture>
                                            <source class="owl-lazy" media="(min-width: 1560px)"
                                                    data-srcset="storage/assets/img/slider/002-l.webp"
                                                    srcset="storage/assets/img/slider/002-l.webp">
                                            <source class="owl-lazy" media="(min-width: 576px)"
                                                    data-srcset="storage/assets/img/slider/002-m.webp"
                                                    srcset="storage/assets/img/slider/002-m.webp">
                                            <img class="owl-lazy" data-src="storage/assets/img/slider/002-s.webp"
                                                 alt="model" src="storage/assets/002-s.webp" style="opacity: 1;">
                                        </picture>
                                    </div>
                                    <meta itemprop="image" content="storage/assets/img/3x4/038.webp">


                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 1349px;">
                                <div class="item slider-item-2" itemprop="item" itemscope=""
                                     itemtype="https://schema.org/Person" data-index="2">
                                    <div class="item-background">
                                        <picture>
                                            <source class="owl-lazy" media="(min-width: 1560px)"
                                                    data-srcset="storage/assets/img/slider/003-l.webp"
                                                    srcset="storage/assets/img/slider/003-l.webp">
                                            <source class="owl-lazy" media="(min-width: 576px)"
                                                    data-srcset="storage/assets/img/slider/003-m.webp"
                                                    srcset="storage/assets/img/slider/003-m.webp">
                                            <img class="owl-lazy" data-src="storage/assets/img/slider/003-s.webp"
                                                 alt="model" src="storage/assets/003-s.webp" style="opacity: 1;">
                                        </picture>
                                    </div>
                                    <meta itemprop="image" content="storage/assets/img/3x4/039.webp">


                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 1349px;">
                                <div class="item slider-item-3" itemprop="item" itemscope=""
                                     itemtype="https://schema.org/Person" data-index="3">
                                    <div class="item-background">
                                        <picture>
                                            <source class="owl-lazy" media="(min-width: 1560px)"
                                                    data-srcset="storage/assets/img/slider/004-l.webp"
                                                    srcset="storage/assets/img/slider/004-l.webp">
                                            <source class="owl-lazy" media="(min-width: 576px)"
                                                    data-srcset="storage/assets/img/slider/004-m.webp"
                                                    srcset="storage/assets/img/slider/004-m.webp">
                                            <img class="owl-lazy" data-src="storage/assets/img/slider/004-s.webp"
                                                 alt="model" src="storage/assets/004-s.webp" style="opacity: 1;">
                                        </picture>
                                    </div>
                                    <meta itemprop="image" content="storage/assets/img/3x4/040.webp">


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-nav disabled">
                        <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span>
                        </button>
                        <button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span>
                        </button>
                    </div>
                    <div class="owl-dots">
                        <button role="button" class="owl-dot active"><span></span></button>
                        <button role="button" class="owl-dot"><span></span></button>
                        <button role="button" class="owl-dot"><span></span></button>
                        <button role="button" class="owl-dot"><span></span></button>
                        <button role="button" class="owl-dot"><span></span></button>
                        <button role="button" class="owl-dot"><span></span></button>
                        <button role="button" class="owl-dot"><span></span></button>
                    </div>
                </div>
                <div class="overlay"></div>
                <div class="slider-view">
                    <div class="slider-contents">
                        <div class="item-content slider-content-0 active" data-index="0">
                            <div class="item-title">
                                <a href="model-page" aria-label="MIYU" itemprop="url"><span itemprop="name">MIYU</span></a>
                                <a href="storage/assets/video/video-001.mp4" data-light-box="slide_1_video"
                                   data-light-box-type="video" aria-label="Video" class="item-btn-play"
                                   data-object-id="0">
                                    <i class="icon-subtract"></i>
                                </a>
                            </div>
                            <div class="item-metas">
                                <div class="item-meta">
                                    <div class="item-meta-label">HEIGHT</div>
                                    <div class="item-meta-value">167</div>
                                </div>
                                <div class="item-meta">
                                    <div class="item-meta-label">bust</div>
                                    <div class="item-meta-value">82</div>
                                </div>
                                <div class="item-meta">
                                    <div class="item-meta-label">waist</div>
                                    <div class="item-meta-value">60</div>
                                </div>
                                <div class="item-meta">
                                    <div class="item-meta-label">hips</div>
                                    <div class="item-meta-value">82</div>
                                </div>
                                <div class="item-meta">
                                    <div class="item-meta-label">shoes</div>
                                    <div class="item-meta-value">24</div>
                                </div>
                                <div class="item-meta">
                                    <div class="item-meta-label">eye</div>
                                    <div class="item-meta-value">Black</div>
                                </div>
                                <div class="item-meta">
                                    <div class="item-meta-label">hair</div>
                                    <div class="item-meta-value">Black</div>
                                </div>
                                <div class="item-meta">
                                    <div class="item-meta-label">nationality</div>
                                    <div class="item-meta-value" itemprop="nationality">Japan</div>
                                </div>
                            </div>
                            <div class="item-description">I am Vegan and passionate about Ethical Living, the way to
                                live without harming any people, Animal and our mother Earth. Therefore, I mostly model
                                for ethical/ vegan/ sustainable jobs.
                            </div>
                            <a href="model-page" class="item-read-more" style="display: none;">
                                <span>Read More</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div>
                        <div class="item-content slider-content-1" data-index="1">
                            <div class="item-title">
                                <a href="model-page" aria-label="YURIKA" itemprop="url"><span
                                        itemprop="name">YURIKA</span></a>
                                <a href="storage/assets/video/video-001.mp4" data-light-box="slide_2_video"
                                   data-light-box-type="video" aria-label="Video" class="item-btn-play"
                                   data-object-id="1">
                                    <i class="icon-subtract"></i>
                                </a>
                            </div>
                            <div class="item-metas">
                                <div class="item-meta">
                                    <div class="item-meta-label">HEIGHT</div>
                                    <div class="item-meta-value">161</div>
                                </div>
                                <div class="item-meta">
                                    <div class="item-meta-label">bust</div>
                                    <div class="item-meta-value">78</div>
                                </div>
                                <div class="item-meta">
                                    <div class="item-meta-label">waist</div>
                                    <div class="item-meta-value">58</div>
                                </div>
                                <div class="item-meta">
                                    <div class="item-meta-label">hips</div>
                                    <div class="item-meta-value">89</div>
                                </div>
                                <div class="item-meta">
                                    <div class="item-meta-label">shoes</div>
                                    <div class="item-meta-value">23.5</div>
                                </div>
                                <div class="item-meta">
                                    <div class="item-meta-label">eye</div>
                                    <div class="item-meta-value">Black</div>
                                </div>
                                <div class="item-meta">
                                    <div class="item-meta-label">hair</div>
                                    <div class="item-meta-value">Black</div>
                                </div>
                                <div class="item-meta">
                                    <div class="item-meta-label">nationality</div>
                                    <div class="item-meta-value" itemprop="nationality">Japan</div>
                                </div>
                            </div>
                            <div class="item-description">I have been modeling for 12 years. I have done over 200 shoots
                                a year, so companies that are concerned about direction can also rely on me. [my
                                experience] I have experience in beauty, bridal, kimono, business, travel, and family ad
                                shoots, apparel e-commerce shoots, magazines, stock photo shoots, video, reporter, and
                                live-streaming corporate projects. I'm also able to provide the following services.
                                ・Clothing size: size 7, S-M ・Shoe size: 23.5cm, size M Various outfits are available.
                                (suits, office casual, yoga/training wear, loungewear, casual wear, accessories, etc.)
                                Hair and makeup can be arranged if necessary. I can also do your hair without makeup.
                                Nails are not provided. [Appeal Points] 1) I'm confident in our teeth and appreciate a
                                natural smile. I am also good at posing for brand images and situations. 2) I can be
                                entrusted with self hair and makeup for photoshoots. I am particular about beauty, and I
                                also deliver beauty and makeup-related services through live-streaming for major
                                manufacturers. I am also particular about skin care and have received favorable reviews
                                for the lack of retouching. I am also a professional photographer, and I am always ready
                                to respond flexibly on site.
                            </div>
                            <a href="model-page" class="item-read-more" style="display: inline;">
                                <span>Read More</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div>
                        <div class="item-content slider-content-2" data-index="2">
                            <div class="item-title">
                                <a href="model-page" aria-label="MATTHIEU" itemprop="url"><span
                                        itemprop="name">MATTHIEU</span></a>
                                <a href="storage/assets/video/video-001.mp4" data-light-box="slide_3_video"
                                   data-light-box-type="video" aria-label="Video" class="item-btn-play"
                                   data-object-id="2">
                                    <i class="icon-subtract"></i>
                                </a>
                            </div>
                            <div class="item-metas">
                                <div class="item-meta">
                                    <div class="item-meta-label">HEIGHT</div>
                                    <div class="item-meta-value">181</div>
                                </div>
                                <div class="item-meta">
                                    <div class="item-meta-label">bust</div>
                                    <div class="item-meta-value">94</div>
                                </div>
                                <div class="item-meta">
                                    <div class="item-meta-label">waist</div>
                                    <div class="item-meta-value">80</div>
                                </div>
                                <div class="item-meta">
                                    <div class="item-meta-label">hips</div>
                                    <div class="item-meta-value">95</div>
                                </div>
                                <div class="item-meta">
                                    <div class="item-meta-label">shoes</div>
                                    <div class="item-meta-value">28.5</div>
                                </div>
                                <div class="item-meta">
                                    <div class="item-meta-label">eye</div>
                                    <div class="item-meta-value">Hazel</div>
                                </div>
                                <div class="item-meta">
                                    <div class="item-meta-label">hair</div>
                                    <div class="item-meta-value">Brown</div>
                                </div>
                                <div class="item-meta">
                                    <div class="item-meta-label">nationality</div>
                                    <div class="item-meta-value" itemprop="nationality">France</div>
                                </div>
                            </div>
                            <div class="item-description">I'm a French native speaker living in Tokyo. I have a great
                                passion for fashion, movies, and photography. I have done some modeling/acting gigs with
                                companies like NHK, 7-11, Netflix, Nisshin, and others. I love to bring my energy and
                                passion for every project.
                            </div>
                            <a href="model-page" class="item-read-more" style="display: inline;">
                                <span>Read More</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div>
                        <div class="item-content slider-content-3" data-index="3">
                            <div class="item-title">
                                <a href="model-page" aria-label="VERONIKA" itemprop="url"><span
                                        itemprop="name">VERONIKA</span></a>
                                <a href="storage/assets/video/video-001.mp4" data-light-box="slide_4_video"
                                   data-light-box-type="video" aria-label="Video" class="item-btn-play"
                                   data-object-id="3">
                                    <i class="icon-subtract"></i>
                                </a>
                            </div>
                            <div class="item-metas">
                                <div class="item-meta">
                                    <div class="item-meta-label">HEIGHT</div>
                                    <div class="item-meta-value">167</div>
                                </div>
                                <div class="item-meta">
                                    <div class="item-meta-label">bust</div>
                                    <div class="item-meta-value">90</div>
                                </div>
                                <div class="item-meta">
                                    <div class="item-meta-label">waist</div>
                                    <div class="item-meta-value">65</div>
                                </div>
                                <div class="item-meta">
                                    <div class="item-meta-label">hips</div>
                                    <div class="item-meta-value">88</div>
                                </div>
                                <div class="item-meta">
                                    <div class="item-meta-label">shoes</div>
                                    <div class="item-meta-value">25.5</div>
                                </div>
                                <div class="item-meta">
                                    <div class="item-meta-label">eye</div>
                                    <div class="item-meta-value">Blue</div>
                                </div>
                                <div class="item-meta">
                                    <div class="item-meta-label">hair</div>
                                    <div class="item-meta-value">Brown</div>
                                </div>
                                <div class="item-meta">
                                    <div class="item-meta-label">nationality</div>
                                    <div class="item-meta-value" itemprop="nationality">Czech Republic</div>
                                </div>
                            </div>
                            <div class="item-description">I am a 28 year old woman born in Czech Republic. I have a
                                Bachelor’s degree in Teaching of Physical education and English. After my studies I
                                moved to Japan to teach tennis in the International tennis school in Tokyo. Currently I
                                am a stay-home mum of a 2 year old daughter. Things I love doing: (Aerial) yoga, Hula
                                dance, reading, traveling, learning about Japanese traditions like kimono, ikebana, tea
                                ceremony.., Visiting Japanese beauty salons, learning about fashion, health and beauty,
                                taking photos &amp; videos of places in Japan, arts &amp; crafts.
                            </div>
                            <a href="model-page" class="item-read-more" style="display: inline;">
                                <span>Read More</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div>
                        <div class="item-content slider-content-4" data-index="4">
                            <div class="item-title">
                                <a href="model-page" aria-label="TOYA" itemprop="url"><span itemprop="name">TOYA</span></a>
                                <a href="storage/assets/video/video-001.mp4" data-light-box="slide_5_video"
                                   data-light-box-type="video" aria-label="Video" class="item-btn-play"
                                   data-object-id="4">
                                    <i class="icon-subtract"></i>
                                </a>
                            </div>
                            <div class="item-metas">
                                <div class="item-meta">
                                    <div class="item-meta-label">HEIGHT</div>
                                    <div class="item-meta-value">186</div>
                                </div>
                                <div class="item-meta">
                                    <div class="item-meta-label">bust</div>
                                    <div class="item-meta-value">89</div>
                                </div>
                                <div class="item-meta">
                                    <div class="item-meta-label">waist</div>
                                    <div class="item-meta-value">73</div>
                                </div>
                                <div class="item-meta">
                                    <div class="item-meta-label">hips</div>
                                    <div class="item-meta-value">90</div>
                                </div>
                                <div class="item-meta">
                                    <div class="item-meta-label">shoes</div>
                                    <div class="item-meta-value">28</div>
                                </div>
                                <div class="item-meta">
                                    <div class="item-meta-label">eye</div>
                                    <div class="item-meta-value">Brown</div>
                                </div>
                                <div class="item-meta">
                                    <div class="item-meta-label">hair</div>
                                    <div class="item-meta-value">Black</div>
                                </div>
                                <div class="item-meta">
                                    <div class="item-meta-label">nationality</div>
                                    <div class="item-meta-value" itemprop="nationality">Japan</div>
                                </div>
                            </div>
                            <div class="item-description">I would like to be involved in a wide range of work from
                                fashion to advertising. I am looking forward to working with you.
                            </div>
                            <a href="model-page" class="item-read-more" style="display: none;">
                                <span>Read More</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div>
                        <div class="item-content slider-content-5" data-index="5">
                            <div class="item-title">
                                <a href="model-page" aria-label="MARIKO" itemprop="url"><span
                                        itemprop="name">MARIKO</span></a>
                                <a href="storage/assets/video/video-001.mp4" data-light-box="slide_6_video"
                                   data-light-box-type="video" aria-label="Video" class="item-btn-play"
                                   data-object-id="5">
                                    <i class="icon-subtract"></i>
                                </a>
                            </div>
                            <div class="item-metas">
                                <div class="item-meta">
                                    <div class="item-meta-label">HEIGHT</div>
                                    <div class="item-meta-value">162</div>
                                </div>
                                <div class="item-meta">
                                    <div class="item-meta-label">bust</div>
                                    <div class="item-meta-value">32</div>
                                </div>
                                <div class="item-meta">
                                    <div class="item-meta-label">waist</div>
                                    <div class="item-meta-value">55</div>
                                </div>
                                <div class="item-meta">
                                    <div class="item-meta-label">hips</div>
                                    <div class="item-meta-value">34</div>
                                </div>
                                <div class="item-meta">
                                    <div class="item-meta-label">shoes</div>
                                    <div class="item-meta-value">23.5</div>
                                </div>
                                <div class="item-meta">
                                    <div class="item-meta-label">eye</div>
                                    <div class="item-meta-value">Brown</div>
                                </div>
                                <div class="item-meta">
                                    <div class="item-meta-label">hair</div>
                                    <div class="item-meta-value">Black</div>
                                </div>
                                <div class="item-meta">
                                    <div class="item-meta-label">nationality</div>
                                    <div class="item-meta-value" itemprop="nationality">Japan</div>
                                </div>
                            </div>
                            <div class="item-description">Hi,I'm Mariko!I'm working as a model in Korea right now but
                                I'll start modeling in Japan from September this year.I have a lot of modeling
                                experiences in Korea and I'm looking forward to making new ones in Japan as well.
                            </div>
                            <a href="model-page" class="item-read-more" style="display: none;">
                                <span>Read More</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div>
                        <div class="item-content slider-content-6" data-index="6">
                            <div class="item-title">
                                <a href="model-page" aria-label="REZA" itemprop="url"><span itemprop="name">REZA</span></a>
                                <a href="storage/assets/video/video-001.mp4" data-light-box="slide_7_video"
                                   data-light-box-type="video" aria-label="Video" class="item-btn-play"
                                   data-object-id="6">
                                    <i class="icon-subtract"></i>
                                </a>
                            </div>
                            <div class="item-metas">
                                <div class="item-meta">
                                    <div class="item-meta-label">HEIGHT</div>
                                    <div class="item-meta-value">174</div>
                                </div>
                                <div class="item-meta">
                                    <div class="item-meta-label">bust</div>
                                    <div class="item-meta-value">89</div>
                                </div>
                                <div class="item-meta">
                                    <div class="item-meta-label">waist</div>
                                    <div class="item-meta-value">75</div>
                                </div>
                                <div class="item-meta">
                                    <div class="item-meta-label">hips</div>
                                    <div class="item-meta-value">91</div>
                                </div>
                                <div class="item-meta">
                                    <div class="item-meta-label">shoes</div>
                                    <div class="item-meta-value">26.5</div>
                                </div>
                                <div class="item-meta">
                                    <div class="item-meta-label">eye</div>
                                    <div class="item-meta-value">Green</div>
                                </div>
                                <div class="item-meta">
                                    <div class="item-meta-label">hair</div>
                                    <div class="item-meta-value">Black</div>
                                </div>
                                <div class="item-meta">
                                    <div class="item-meta-label">nationality</div>
                                    <div class="item-meta-value" itemprop="nationality">Iran</div>
                                </div>
                            </div>
                            <div class="item-description">Hi I’m Reza, I was born in Tehran and raised in Japan. I can
                                speak 3 languages(Persian,English,Japanese). I have experience in theater and have
                                worked with several great directors. Also had the pleasure to do MC on “gakitsuka”.
                            </div>
                            <a href="model-page" class="item-read-more" style="display: none;">
                                <span>Read More</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="slider-thumbnails">
                        <div class="slider-thumbnails-wrapper">
                            <div class="item-thumbnail slider-thumbnail-0 first"
                                 style="background-image: url(&quot;storage/assets/img/3x4/037.webp&quot;); width: 292.5px; height: 390px; left: 0px; top: 0px; z-index: 0;"
                                 data-index="0"></div>
                            <div class="item-thumbnail slider-thumbnail-1 middle"
                                 style="background-image: url(&quot;storage/assets/img/3x4/038.webp&quot;); width: 234px; height: 312px; left: 324.5px; top: 39px; z-index: 1;"
                                 data-index="1"></div>
                            <div class="item-thumbnail slider-thumbnail-2 middle"
                                 style="background-image: url(&quot;storage/assets/img/3x4/039.webp&quot;); width: 234px; height: 312px; left: 590.5px; top: 39px; z-index: 2;"
                                 data-index="2"></div>
                            <div class="item-thumbnail slider-thumbnail-3 middle"
                                 style="background-image: url(&quot;storage/assets/img/3x4/040.webp&quot;); width: 234px; height: 312px; left: 856.5px; top: 39px; z-index: 3;"
                                 data-index="3"></div>
                            <div class="item-thumbnail slider-thumbnail-4 middle"
                                 style="background-image: url(&quot;storage/assets/img/3x4/041.webp&quot;); width: 234px; height: 312px; left: 1122.5px; top: 39px; z-index: 4;"
                                 data-index="4"></div>
                            <div class="item-thumbnail slider-thumbnail-5 middle"
                                 style="background-image: url(&quot;storage/assets/img/3x4/042.webp&quot;); width: 234px; height: 312px; left: 1388.5px; top: 39px; z-index: 5;"
                                 data-index="5"></div>
                            <div class="item-thumbnail slider-thumbnail-6 end"
                                 style="background-image: url(&quot;storage/assets/img/3x4/043.webp&quot;); width: 234px; height: 312px; left: 1654.5px; top: 39px; z-index: 6;"
                                 data-index="6"></div>
                        </div>
                    </div>
                </div>
                <div class="navigations">
                    <button type="button" class="slider-nav-prev"><i class="icon-arrow-left"></i></button>
                    <button type="button" class="slider-nav-next"><i class="icon-arrow-right"></i></button>
                </div>
                <div class="slide-number">
                    <span>01</span>
                </div>
                <button type="button" class="btn btn-icon" id="intro_arrow_navigation" aria-label="Scroll Down">
                    <i class="icon-arrow-down"></i>
                </button>
            </div>

            <!-- start home categories -->
            <div class="home-categories">
                <div class="container-xxl">
                    <div class="home-categories-content">
                        @foreach($categories as $category)
                            <div class="home-categories-item" itemscope="" itemtype="https://schema.org/DefinedTerm">
                                <a href="models-list?id={{ $category->id }}" aria-label="Woman Category" itemprop="url">
                                    <img src="storage/assets/{{ $category->image }}" class="lazy lz-entered lz-loaded"
                                         data-src="storage/assets/img/{{ $category->image }}" width="298" height="438"
                                         alt="Woman Category" data-ll-status="loaded">
                                    <noscript>
                                        <img src="storage/assets/img/{{ $category->image }}" width="298" height="438"
                                             alt="Woman Category">
                                    </noscript>
                                    <div class="home-categories-title">
                                        <span itemprop="name">{{ $category->name }}</span>
                                        <div class="arrow"></div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- start our services -->
            <section class="home-our-services" itemscope="" itemtype="https://schema.org/Service">
                <meta itemprop="serviceType" content="INTERNATIONAL MODEL AGENCY">
                <meta itemprop="areaServed" content="INTERNATIONAL">
                <div class="container-xxl">

                    <div class="heading">
                        <div class="top-area">
                            <div class="title-area">
                                <h2 class="heading-title" itemprop="name">OUR SERVICES</h2>
                            </div>
                        </div>
                    </div>

                    <div class="home-our-services-grid" itemprop="hasOfferCatalog" itemscope=""
                         itemtype="https://schema.org/OfferCatalog">
                        <div class="card" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/Offer">
                            <i class="icon-woman"></i>
                            <div class="card-title" itemprop="itemOffered" itemscope=""
                                 itemtype="https://schema.org/Service">
                                <span itemprop="name">Model</span>
                            </div>
                            <div class="card-content">We provide the optimal model selection tailored to your specific
                                requirements.
                            </div>
                        </div>
                        <div class="card" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/Offer">
                            <i class="icon-creativity"></i>
                            <div class="card-title" itemprop="itemOffered" itemscope=""
                                 itemtype="https://schema.org/Service">
                                <span itemprop="name">Talent</span>
                            </div>
                            <div class="card-content">Uniting events and exhibitions with the perfect talent to ensure a
                                remarkable experience
                            </div>
                        </div>
                        <div class="card" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/Offer">
                            <i class="icon-actors"></i>
                            <div class="card-title" itemprop="itemOffered" itemscope=""
                                 itemtype="https://schema.org/Service">
                                <span itemprop="name">Actor</span>
                            </div>
                            <div class="card-content">Delivering a myriad of actor types, ready to fulfill every
                                performance requirement
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <!-- start top models -->
            <section class="home-top-models" itemscope="" itemtype="https://schema.org/ItemList">
                <div class="container-xxl">

                    <div class="heading-box heading-item-col-4 filter-area" data-auto-size="true" data-col="2"
                         data-active-filter="international">
                        <div class="heading">
                            <div class="top-area">
                                <div class="title-area">
                                    <h2 class="heading-title" itemprop="name">TOP MODELS</h2>
                                    <div class="heading-filters desktop">
                                        <ul>
                                            <li>
                                                <a href="/#" class="filter-option" data-filter="japanese"
                                                   aria-label="Filter Japanese Top Models">
                                                    Japanese
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/#" class="filter-option" data-filter="mixed"
                                                   aria-label="Filter Mixed Top Models">
                                                    Mixed
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/#" class="filter-option active" data-filter="international"
                                                   aria-label="Filter International Top Models">
                                                    International
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="action-area">
                                    <a href="models-list" itemprop="url">
                                        <span>See All</span>
                                    </a>
                                </div>
                            </div>
                            <ul class="heading-filters mobile">
                                <li>
                                    <a href="/#" class="filter-option" data-filter="japanese"
                                       aria-label="Filter Japanese Top Models">
                                        Japanese
                                    </a>
                                </li>
                                <li>
                                    <a href="/#" class="filter-option" data-filter="mixed"
                                       aria-label="Filter Mixed Japanese Top Models">
                                        Mixed
                                    </a>
                                </li>
                                <li>
                                    <a href="/#" class="filter-option active" data-filter="international"
                                       aria-label="Filter International Top Models">
                                        International
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="heading-content" itemprop="itemListElement" itemscope=""
                             itemtype="https://schema.org/ListItem">
                            @foreach($members as $member)
                                <div class="filter-item" data-filter="{{ $member->type }}" style="width: auto;">
                                    <article class="model-card" itemprop="item" itemscope=""
                                             itemtype="https://schema.org/Person">
                                        <a href="model-page" itemprop="url">
                                            <meta itemprop="image"
                                                  content="storage/assets/img/3x4/{{ $member->profile_image }}.webp">
                                            <img src="storage/assets/lazy-3x4.webp" class="lazy"
                                                 data-src="storage/assets/img/3x4/{{ $member->profile_image }}.webp"
                                                 width="200" height="260"
                                                 alt="model">
                                            <noscript>
                                                <img src="storage/assets/img/3x4/{{ $member->profile_image }}.webp"
                                                     width="200" height="260"
                                                     alt="model">
                                            </noscript>
                                            <div class="card-metas">
                                                <span class="meta-item">{{ $member->name }}</span>
                                            </div>
                                            <div class="card-content">
                                                <div class="card-inner-content">
                                                    <h2 class="card-primary-title"
                                                        itemprop="name">{{ $member->name }}</h2>
                                                    <div class="card-content-item"
                                                         itemprop="nationality">{{ $member->town }}
                                                    </div>
                                                    <div class="card-content-item">In Town {{ $member->town }}</div>
                                                    <div class="card-content-item">{{ $member->height }}
                                                        / {{ $member->bust }} / {{ $member->waist }}
                                                        / {{ $member->hips }} / {{ $member->shoe_size }}</div>
                                                    <div class="card-content-item">{{ $member->hair_color }}</div>
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
                            <div class="see-more" style="width: auto;">
                                <a href="models-list" class="btn btn-xxl btn-floating">
                                    <span>See All</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <!-- start news -->
            <section class="home-news" itemscope="" itemtype="https://schema.org/Collection">
                <div class="container-xxl">

                    <div class="heading-box heading-news" data-auto-size="true" data-col="1.25">
                        <div class="heading">
                            <div class="top-area">
                                <div class="title-area">
                                    <h2 class="heading-title" itemprop="name">NEWS</h2>
                                </div>
                                <div class="action-area">
                                    <a href="news-category" itemprop="url">
                                        <span>See All</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="heading-content">
                            <div style="width: auto;">
                                <article class="news-card" itemscope="" itemtype="https://schema.org/NewsArticle"
                                         itemprop="hasPart">
                                    <div class="card-thumbnail">
                                        <meta itemprop="thumbnailUrl" content="storage/assets/img/news-003.webp">
                                        <a href="news-single-company">
                                            <img src="storage/assets/lazy-1.7x1.webp" class="card-thumbnail-image lazy"
                                                 data-src="storage/assets/img/news-003.webp" width="312" height="177"
                                                 alt="news title">
                                            <noscript>
                                                <img src="storage/assets/img/news-003.webp" class="card-thumbnail-image"
                                                     width="312" height="177" alt="news title">
                                            </noscript>
                                        </a>
                                    </div>
                                    <div class="card-content">
                                        <h2 class="card-title" itemprop="name"><a href="news-single-company"
                                                                                  itemprop="url">News Title</a></h2>
                                        <div class="card-author" itemprop="author">
                                            <i class="icon-user"></i>
                                            <a href="news-single-company">Admin</a>
                                        </div>
                                        <div class="card-date">
                                            <i class="icon-clock"></i>
                                            <meta itemprop="datePublished" content="2022-04-29">
                                            <time datetime="2022-04-29">29th April 2022</time>
                                        </div>
                                        <div class="card-description" itemprop="description">
                                            I have been a full-time housewife for 25 years, but started Instagram 2
                                            years
                                            ago and have over 50,000 followers. I hope to share with young girls and.
                                        </div>
                                        <div class="card-category">
                                            <a href="news-category">Fashion</a>
                                            <a href="news-category">Modeling</a>
                                            <a href="news-category">New Face</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div style="width: auto;">
                                <article class="news-card" itemscope="" itemtype="https://schema.org/NewsArticle"
                                         itemprop="hasPart">
                                    <div class="card-thumbnail">
                                        <meta itemprop="thumbnailUrl" content="storage/assets/img/news-004.webp">
                                        <a href="news-single-company">
                                            <img src="storage/assets/lazy-1.7x1.webp" class="card-thumbnail-image lazy"
                                                 data-src="storage/assets/img/news-004.webp" width="312" height="177"
                                                 alt="news title">
                                            <noscript>
                                                <img src="storage/assets/img/news-004.webp" class="card-thumbnail-image"
                                                     width="312" height="177" alt="news title">
                                            </noscript>
                                        </a>
                                    </div>
                                    <div class="card-content">
                                        <h2 class="card-title" itemprop="name"><a href="news-single-company"
                                                                                  itemprop="url">News Title</a></h2>
                                        <div class="card-author" itemprop="author">
                                            <i class="icon-user"></i>
                                            <a href="news-single-company">Admin</a>
                                        </div>
                                        <div class="card-date">
                                            <i class="icon-clock"></i>
                                            <meta itemprop="datePublished" content="2022-04-29">
                                            <time datetime="2022-04-29">29th April 2022</time>
                                        </div>
                                        <div class="card-description" itemprop="description">
                                            I have been a full-time housewife for 25 years, but started Instagram 2
                                            years
                                            ago and have over 50,000 followers. I hope to share with young girls and.
                                        </div>
                                        <div class="card-category">
                                            <a href="news-category">Fashion</a>
                                            <a href="news-category">Modeling</a>
                                            <a href="news-category">New Face</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div style="width: auto;">
                                <article class="news-card" itemscope="" itemtype="https://schema.org/NewsArticle"
                                         itemprop="hasPart">
                                    <div class="card-thumbnail">
                                        <meta itemprop="thumbnailUrl" content="storage/assets/img/news-005.webp">
                                        <a href="news-single-company">
                                            <img src="storage/assets/lazy-1.7x1.webp" class="card-thumbnail-image lazy"
                                                 data-src="storage/assets/img/news-005.webp" width="312" height="177"
                                                 alt="news title">
                                            <noscript>
                                                <img src="storage/assets/img/news-005.webp" class="card-thumbnail-image"
                                                     width="312" height="177" alt="news title">
                                            </noscript>
                                        </a>
                                    </div>
                                    <div class="card-content">
                                        <h2 class="card-title" itemprop="name"><a href="news-single-company"
                                                                                  itemprop="url">News Title</a></h2>
                                        <div class="card-author" itemprop="author">
                                            <i class="icon-user"></i>
                                            <a href="news-single-company">Admin</a>
                                        </div>
                                        <div class="card-date">
                                            <i class="icon-clock"></i>
                                            <meta itemprop="datePublished" content="2022-04-29">
                                            <time datetime="2022-04-29">29th April 2022</time>
                                        </div>
                                        <div class="card-description" itemprop="description">
                                            I have been a full-time housewife for 25 years, but started Instagram 2
                                            years
                                            ago and have over 50,000 followers. I hope to share with young girls and.
                                        </div>
                                        <div class="card-category">
                                            <a href="news-category">Fashion</a>
                                            <a href="news-category">Modeling</a>
                                            <a href="news-category">New Face</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div style="width: auto;">
                                <article class="news-card" itemscope="" itemtype="https://schema.org/NewsArticle"
                                         itemprop="hasPart">
                                    <div class="card-thumbnail">
                                        <meta itemprop="thumbnailUrl" content="storage/assets/img/news-006.webp">
                                        <a href="news-single-company">
                                            <img src="storage/assets/lazy-1.7x1.webp" class="card-thumbnail-image lazy"
                                                 data-src="storage/assets/img/news-006.webp" width="312" height="177"
                                                 alt="news title">
                                            <noscript>
                                                <img src="storage/assets/img/news-006.webp" class="card-thumbnail-image"
                                                     width="312" height="177" alt="news title">
                                            </noscript>
                                        </a>
                                    </div>
                                    <div class="card-content">
                                        <h2 class="card-title" itemprop="name"><a href="news-single-company"
                                                                                  itemprop="url">News Title</a></h2>
                                        <div class="card-author" itemprop="author">
                                            <i class="icon-user"></i>
                                            <a href="news-single-company">Admin</a>
                                        </div>
                                        <div class="card-date">
                                            <i class="icon-clock"></i>
                                            <meta itemprop="datePublished" content="2022-04-29">
                                            <time datetime="2022-04-29">29th April 2022</time>
                                        </div>
                                        <div class="card-description" itemprop="description">
                                            I have been a full-time housewife for 25 years, but started Instagram 2
                                            years
                                            ago and have over 50,000 followers. I hope to share with young girls and.
                                        </div>
                                        <div class="card-category">
                                            <a href="news-category">Fashion</a>
                                            <a href="news-category">Modeling</a>
                                            <a href="news-category">New Face</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="see-more" style="width: auto;">
                                <a href="news" class="btn btn-xxl btn-floating" itemprop="url">
                                    <span>See All</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

        </div>
    </main>

    <!-- start loading -->
    <div class="page-loading">
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
                        <a href="/#" class="ft-site-logo">
                            <img src="storage/assets/lazy-trp-1x1.webp" class="lazy lz-dark"
                                 data-src="storage/assets/img/logo-white.svg" width="88" height="24" alt="Liliana">
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
                            <div class="accordion-content" style="display: none;">
                                <div class="ft-menu">
                                    <ul>
                                        <li><a href="/">Home</a></li>
                                        <li><a href="work">Portfolio</a></li>
                                        <li><a href="news-category">News</a></li>
                                        <li><a href="about-us">About us</a></li>
                                        <li><a href="contact-us">Contact us</a></li>
                                        <li><a href="company-profile">Company Profile</a></li>
                                        <li><a href="privacy-policy">Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button class="accordion-header">
                                <span class="accordion-title">Categories</span>
                                <i class="icon-arrow-down"></i>
                            </button>
                            <div class="accordion-content" style="display: none;">
                                <div class="ft-categories">
                                    <ul>
                                        <li><a href="models-list">Model</a></li>
                                        <li><a href="models-list">Talent</a></li>
                                        <li><a href="models-list">Actor</a></li>
                                        <li><a href="models-list">Extra</a></li>
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
    <script src="storage/assets/jQuery.min.js.download"></script>
    <script src="storage/assets/lazyload.min.js.download"></script>
    <script src="storage/assets/owl.carousel.min.js.download"></script>
    <script src="storage/assets/super-slider.min.js.download"></script>
    <script src="storage/assets/component.min.js.download"></script>
    <script src="storage/assets/scripts.min.js.download"></script>



    <style type="text/css" class="L-GoogleBookmarkOptOut">
        .LGoogleBookmarkContainer {
            display: none !important;
        }</style>
    <style type="text/css" class="L-GooglePBLOptOut">
        .liner-picked-search-result-bar, .GooglePBLScrapCnt {
            display: none !important;
        }</style>
    <style type="text/css" class="L-YoutubeBookmarkOptOut">
        .LytbBookmarkAbsWrapper {
            display: none !important;
        }</style>
    <style type="text/css" class="L-YoutubeHighlightOptOut">
        .lytb-highlighter-in-control, .lytb-highlighter, .lytb-highlighter-optOutBox {
            display: none !important;
        }

        .L-TimestampToLeft {
            left: 0 !important;
        }
    </style>
    <style type="text/css" class="L-YoutubePBLOptOut">
        .PblIndicator {
            display: none !important;
        }
    </style>
    <style type="text/css" class="L-PDFCopilotOptOut">
        .liner-mini-button {
            display: none !important;
        }</style>
    <div class="liner-scroll-points-container"></div>
    <div id="mttContainer" class="bootstrapiso notranslate" data-html="true" data-original-title="" title=""
         style="transform: translate(129px, 650px);"></div>

@endsection
