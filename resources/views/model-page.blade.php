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
                    <a href="home" class="btn btn-icon app-bar-mobile" aria-label="Back" role="button">
                        <i class="icon-arrow-left-1"></i>
                    </a>
                </div>
                <div class="app-bar-title">
                    <a href="home" class="app-logo" aria-label="Liliana">
                        <img src="storage/assets/logo.svg" class="lazy lz-entered lz-loaded"
                             data-src="storage/assets/img/logo.svg" width="88" height="24" alt="liliana"
                             data-ll-status="loaded">
                        <noscript>
                            <img src="storage/assets/img/logo.svg" width="88" height="24" alt="liliana">
                        </noscript>
                    </a>
                    <span class="app-bar-mobile">Profile</span>
                </div>
                <div class="actions">
                    <div class="app-lang app-bar-desktop">
                        <a href="model-page?lng=jp" class="btn btn-icon" aria-label="Change Language To Japane">
                            JP
                        </a>
                        <div class="divider"></div>
                        <a href="model-page?lng=en" class="btn btn-icon active" aria-label="Change language To English">
                            EN
                        </a>
                    </div>
                    <button class="btn btn-icon app-bar-mobile g-share-button" aria-label="Share Profile"
                            data-title="{{$member->name}}"
                            data-text="{{$member->skills}}..."
                            data-url="model-page">
                        <i class="icon-share"></i>
                    </button>
                    <button class="btn btn-icon" id="btn_appbar_bookmark" aria-label="Open Bookmark">
                        <i class="icon-archive-add"></i>
                        <span class="badge">2</span>
                    </button>
                    <button class="btn btn-icon app-bar-desktop" id="btn_appbar_search" aria-label="Open Search">
                        <i class="icon-search-normal"></i>
                    </button>
                    <a href="/dashboard/models/" class="user-dashboard">
                        <i class="icon-user"></i>
                        <!--                    <img src="storage/assets/img/lazy-1x1.webp" class="lazy" data-src="storage/assets/img/1x1/{{$member->profile_image}}.webp"-->
                        <!--                         width="80" height="80" alt="Model">-->
                        <!--                    <noscript>-->
                        <!--                        <img src="storage/assets/img/1x1/{{$member->profile_image}}.webp" width="80" height="80" alt="Model">-->
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
                                <li class="active"><a href="home">Home</a></li>
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
                            <a href="model-page#" class="dashboard">
                            <span>
Miss Leslie Alexander
<i class="icon-arrow-right"></i>
                            </span>
                            </a>
                            <a href="model-page#" class="logout">
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
                                                <li><a href="home">Home</a></li>
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
                                    <a href="/dashboard/models/">
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
                        <a href="model-page#" id="btn_clear_search_recent">Clear All</a>
                    </div>
                    <div class="recent-model">
                        <a href="model-page">
                            <img src="storage/assets/012.webp" class="lazy lz-entered lz-loaded"
                                 data-src="storage/assets/img/3x4/012.webp" width="120" height="160" alt="Model"
                                 data-ll-status="loaded">
                            <noscript>
                                <img src="storage/assets/img/3x4/012.webp" width="120" height="160" alt="Model">
                            </noscript>
                            <span>Maaya</span>
                        </a>
                        <a href="model-page">
                            <img src="storage/assets/011.webp" class="lazy lz-entered lz-loaded"
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
                            <img src="storage/assets/028.webp" class="lazy lz-entered lz-loaded"
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
                            <img src="storage/assets/004.webp" class="lazy lz-entered lz-loaded"
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
                            <img src="storage/assets/005.webp" class="lazy lz-entered lz-loaded"
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
                <div class="bookmark-item" style="width: 295.833px;">
                    <article class="model-card item-bookmarked" itemscope="" itemtype="https://schema.org/Person">
                        <a href="model-page" itemprop="url">
                            <meta itemprop="image" content="storage/assets/img/3x4/007.webp">
                            <img src="storage/assets/007.webp" class="lazy lz-entered lz-loaded"
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
                <div class="bookmark-item" style="width: 295.833px;">
                    <article class="model-card item-bookmarked" itemscope="" itemtype="https://schema.org/Person">
                        <a href="model-page" itemprop="url">
                            <meta itemprop="image" content="storage/assets/img/3x4/017.webp">
                            <img src="storage/assets/017.webp" class="lazy lz-entered lz-loaded"
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
                <div class="bookmark-item" style="width: 295.833px;">
                    <article class="model-card item-bookmarked" itemscope="" itemtype="https://schema.org/Person">
                        <a href="model-page" itemprop="url">
                            <meta itemprop="image" content="storage/assets/img/3x4/027.webp">
                            <img src="storage/assets/027.webp" class="lazy lz-entered lz-loaded"
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
                <div class="bookmark-item" style="width: 295.833px;">
                    <article class="model-card item-bookmarked" itemscope="" itemtype="https://schema.org/Person">
                        <a href="model-page" itemprop="url">
                            <meta itemprop="image" content="storage/assets/img/3x4/021.webp">
                            <img src="storage/assets/021.webp" class="lazy lz-entered lz-loaded"
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
                <div class="bookmark-item" style="width: 295.833px;">
                    <article class="model-card item-bookmarked" itemscope="" itemtype="https://schema.org/Person">
                        <a href="model-page" itemprop="url">
                            <meta itemprop="image" content="storage/assets/img/3x4/025.webp">
                            <img src="storage/assets/025.webp" class="lazy lz-entered lz-loaded"
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
                <div class="bookmark-item" style="width: 295.833px;">
                    <article class="model-card item-bookmarked" itemscope="" itemtype="https://schema.org/Person">
                        <a href="model-page" itemprop="url">
                            <meta itemprop="image" content="storage/assets/img/3x4/024.webp">
                            <img src="storage/assets/024.webp" class="lazy lz-entered lz-loaded"
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

    <!-- start content -->
    <main>
        <div id="content">

            <!-- start page breadcrumb -->
            <div class="page-breadcrumb">
                <div class="container-xxl">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="home">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <!-- start model info -->
            <div class="section section-profile" itemscope="" itemtype="https://schema.org/Person">
                <div class="container-xxl">
                    <div class="model-info">
                        <div class="model-thumbnail">
                            <meta itemprop="image"
                                  content="storage/assets/img/profile/profile-1/Thumbnail/profile-001.webp">
                            <img src="storage/assets/img/3x4/{{$member->profile_image}}.webp" class="lazy lz-entered lz-loaded"
                                 data-src="storage/assets/img/profile/profile-1/Thumbnail/profile-001.webp" width="410"
                                 height="548" alt="model name" data-ll-status="loaded">
                            <noscript>
                                <img src="storage/assets/img/profile/profile-1/Thumbnail/profile-001.webp" width="410"
                                     height="548" alt="model name">
                            </noscript>
                            <div class="model-metas">
                                <span class="meta-item">New Face</span>
                            </div>
                        </div>
                        <div class="model-info-wrapper">
                            <div class="model-header">
                                <div class="model-header-content">
                                    <div class="model-id" itemprop="identifier">No. {{$member->no}}</div>
                                    <div class="model-name">
                                        <div class="model-primary-name">
                                            <h1 itemprop="name">{{$member->name}}<span class="model-in-town">in town</span></h1>
                                            <div class="model-id-inner">No. {{$member->no}}</div>
                                        </div>
                                        <h2 class="model-secondary-name" itemprop="additionalName">{{$member->alias}}</h2>
                                        <div class="model-categories mobile">
                                            <div class="model-category-item" itemscope=""
                                                 itemtype="https://schema.org/DefinedTerm">
                                                <a href="models-list" itemprop="url">
                                                    <span itemprop="name">Artist</span>
                                                </a>
                                            </div>
                                            <div class="model-category-item" itemscope=""
                                                 itemtype="https://schema.org/DefinedTerm">
                                                <a href="models-list" itemprop="url">
                                                    <span itemprop="name">Model</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="actions">
                                    <a href="model-page#" aria-label="Model Composite">
                                        <i class="icon-document"></i>
                                        <span>Composite</span>
                                    </a>
                                    <a href="model-page#" aria-label="Model Profile">
                                        <i class="icon-user-square"></i>
                                        <span>Profile</span>
                                    </a>
                                </div>
                            </div>
                            <div class="model-categories">
                                <div class="model-category-item" itemscope="" itemtype="https://schema.org/DefinedTerm">
                                    <a href="models-list" itemprop="url">
                                        <span itemprop="name">Artist</span>
                                    </a>
                                </div>
                                <div class="model-category-item" itemscope="" itemtype="https://schema.org/DefinedTerm">
                                    <a href="models-list" itemprop="url">
                                        <span itemprop="name">Model</span>
                                    </a>
                                </div>
                            </div>
                            <div class="model-meta">
                                <div class="model-meta-item">
                                    <div class="model-meta-name">{{__('Age')}}</div>
                                    <div class="model-meta-value">
                                        {{$member->age}}
                                    </div>
                                </div>
                                <div class="model-meta-item">
                                    <div class="model-meta-name">{{__('Height')}}</div>
                                    <div class="model-meta-value" itemprop="height">
                                        {{$member->height}} <span class="sub">cm</span>
                                    </div>
                                </div>
                                <div class="model-meta-item">
                                    <div class="model-meta-name">{{__('Bust')}}</div>
                                    <div class="model-meta-value">
                                        {{$member->bust}} <span class="sub">cm</span>
                                    </div>
                                </div>
                                <div class="model-meta-item">
                                    <div class="model-meta-name">{{__('Waist')}}</div>
                                    <div class="model-meta-value">
                                        {{$member->waist}} <span class="sub">cm</span>
                                    </div>
                                </div>
                                <div class="model-meta-item">
                                    <div class="model-meta-name">{{__('Hips')}}</div>
                                    <div class="model-meta-value">
                                        {{$member->hips}} <span class="sub">cm</span>
                                    </div>
                                </div>
                                <div class="model-meta-item">
                                    <div class="model-meta-name">{{__('Shoe Size')}}</div>
                                    <div class="model-meta-value">
                                        {{$member->show_size}}
                                    </div>
                                </div>
                            </div>
                            <div class="model-meta">
                                <div class="model-meta-item">
                                    <div class="model-meta-name">{{__('Hair Color')}}</div>
                                    <div class="model-meta-value">
                                        {{$member->hair_color}}
                                    </div>
                                </div>
                                <div class="model-meta-item">
                                    <div class="model-meta-name">{{__('Eye Color')}}</div>
                                    <div class="model-meta-value">
                                        {{$member->eye_color}}
                                    </div>
                                </div>
                                <div class="model-meta-item">
                                    <div class="model-meta-name">{{__('Nationality')}}</div>
                                    <div class="model-meta-value" itemprop="nationality">
                                        {{$member->nationality}}
                                    </div>
                                </div>
                                <div class="model-meta-item">
                                    <div class="model-meta-name">{{__('Language')}}</div>
                                    <div class="model-meta-value">
                                    <span itemprop="knowsLanguage">
    {{$member->language}}
                                    </span> /
                                        <span itemprop="knowsLanguage">
    Japanese
                                    </span> /
                                        <span itemprop="knowsLanguage">
    Persian
                                    </span>
                                        <!-- Russian / Japanese / Persian -->
                                    </div>
                                </div>
                            </div>
                            <div class="model-social-networks">
                                <div class="model-social-network-item">
                                    <a href="model-page#" aria-label="Instagram Followers 30.8K" itemprop="sameAs">
                                        <i class="icon-instagram"></i>
                                        <span>{{$member->instagram_page_follower_count}} M</span>
                                    </a>
                                </div>
                                <div class="model-social-network-item">
                                    <a href="model-page#" aria-label="Twitter Followers 30.8K" itemprop="sameAs">
                                        <i class="icon-twitter"></i>
                                        <span>{{$member->twitter_page_follower_count}} K</span>
                                    </a>
                                </div>
                                <div class="model-social-network-item">
                                    <a href="model-page#" aria-label="Facebook Followers 30.8K" itemprop="sameAs">
                                        <i class="icon-facebook"></i>
                                        <span>{{$member->facebook_page_follower_count}} K</span>
                                    </a>
                                </div>
                                <div class="model-social-network-item">
                                    <a href="model-page#" aria-label="Youtube Followers 30.8K" itemprop="sameAs">
                                        <i class="icon-youtube"></i>
                                        <span>{{$member->youtube_page_follower_count}} K</span>
                                    </a>
                                </div>
                                <div class="model-social-network-item">
                                    <a href="model-page#" aria-label="LinkedIn Followers 30.8K" itemprop="sameAs">
                                        <i class="icon-linkedin"></i>
                                        <span>{{$member->linkedin_page_follower_count}} K</span>
                                    </a>
                                </div>
                                <div class="model-social-network-item">
                                    <a href="model-page#" aria-label="TikTok Followers 30.8K" itemprop="sameAs">
                                        <i class="icon-Tiktok"></i>
                                        <span>{{$member->tiktok_page_follower_count}} K</span>
                                    </a>
                                </div>
                            </div>
                            <div class="model-actions">
                                <a href="tel:+81363623355" class="btn call">Call Now</a>
                                <a href="request-hiring" class="btn btn-primary">Request for Hiring</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- start skills -->
            <div class="section section-skills">
                <div class="container-xxl">
                    <div class="tabs" data-active="profile_biography">
                        <ul class="tabs-item">
                            <li id="profile_biography" class="active">
                                Biography
                            </li>
                            <li id="skills_career">
                                Career
                            </li>
                            <li id="skills_skills">
                                Skills
                            </li>
                        </ul>
                        <div class="tabs-contents">
                            <div class="tab-content-item active" data-tab-target="profile_biography">
                                <div class="biography-description read-more-element" data-length-desktop="500"
                                     data-length-mobile="250" data-detect="true">
                                    (Biography) {{$member->skills}}
                                    ...<span class="read-more-button">Read More</span></div>
                            </div>
                            <div class="tab-content-item" data-tab-target="skills_career">
                                <div class="model-skill-list">
                                    <div class="model-skill-title">Film</div>
                                    <ul>
                                        <li>
                                            <div class="skill-title">Career Title 1</div>
                                            <div class="skill-metas">
                                                <div class="skill-meta">
                                                    <div class="meta-value">2023/03</div>
                                                </div>
                                            </div>
                                            <div class="skill-description read-more-element" data-length-desktop="500"
                                                 data-length-mobile="250" data-detect="true">
                                                (Career) {{$member->skills}}
                                                yea...<span class="read-more-button">Read More</span></div>
                                        </li>
                                        <li>
                                            <div class="skill-title">Career Title 2</div>
                                            <div class="skill-metas">
                                                <div class="skill-meta">
                                                    <div class="meta-value">2023/03</div>
                                                </div>
                                            </div>
                                            <div class="skill-description read-more-element" data-length-desktop="500"
                                                 data-length-mobile="250" data-detect="true">
                                                (Career) {{$member->skills}}
                                                yea...<span class="read-more-button">Read More</span></div>
                                        </li>
                                        <li>
                                            <div class="skill-title">Career Title 3</div>
                                            <div class="skill-metas">
                                                <div class="skill-meta">
                                                    <div class="meta-value">2023/03</div>
                                                </div>
                                            </div>
                                            <div class="skill-description read-more-element" data-length-desktop="500"
                                                 data-length-mobile="250" data-detect="true">
                                                (Career) {{$member->skills}}
                                                yea...<span class="read-more-button">Read More</span></div>
                                        </li>
                                    </ul>
                                    <div class="model-skill-title">Tv Series</div>
                                    <ul>
                                        <li>
                                            <div class="skill-title">Career Title 1</div>
                                            <div class="skill-metas">
                                                <div class="skill-meta">
                                                    <div class="meta-value">2023/03</div>
                                                </div>
                                            </div>
                                            <div class="skill-description read-more-element" data-length-desktop="500"
                                                 data-length-mobile="250" data-detect="true">
                                                (Career) {{$member->skills}}
                                                yea...<span class="read-more-button">Read More</span></div>
                                        </li>
                                        <li>
                                            <div class="skill-title">Career Title 2</div>
                                            <div class="skill-metas">
                                                <div class="skill-meta">
                                                    <div class="meta-value">2023/03</div>
                                                </div>
                                            </div>
                                            <div class="skill-description read-more-element" data-length-desktop="500"
                                                 data-length-mobile="250" data-detect="true">
                                                (Career) {{$member->skills}}
                                                yea...<span class="read-more-button">Read More</span></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-content-item" data-tab-target="skills_skills">
                                <div class="model-skill-list">
                                    <ul>
                                        <li>
                                            <div class="skill-title">Sport</div>
                                            <div class="skill-metas">
                                                <div class="skill-meta">
                                                    <div class="meta-name">Skill Tags:</div>
                                                    <div class="meta-value">Football, Baseball, karate</div>
                                                </div>
                                            </div>
                                            <div class="skill-description read-more-element" data-length-desktop="500"
                                                 data-length-mobile="250" data-detect="true">
                                                (Skills) {{$member->skills}}
                                                yea...<span class="read-more-button">Read More</span></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- start gallery -->
            <section class="section section-gallery" itemscope="" itemtype="https://schema.org/ItemList">
                <div class="container-xxl">
                    <h2 class="gallery-title" itemprop="name">Gallery</h2>
                    <div class="tabs gallery-tab" data-active="gallery_pictures">
                        <ul class="tabs-item">
                            <li id="gallery_pictures" class="active">
                            <span>
                                <i class="icon-gallery"></i>
Photos
                            </span>
                            </li>
                            <li id="gallery_video">
                            <span>
                                <i class="icon-play-circle"></i>
Video
                            </span>
                            </li>
                            <li id="gallery_voice">
                            <span>
                                <i class="icon-microphone-2"></i>
Voice
                            </span>
                            </li>
                        </ul>
                        <div class="tabs-contents">
                            <div class="tab-content-item active" data-tab-target="gallery_pictures"
                                 itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                                <meta itemprop="name" content="Photos">
                                <div class="grid-photo">
                                    <div class="grid-item" itemprop="item" itemscope=""
                                         itemtype="https://schema.org/ImageGallery">
                                        <meta itemprop="image"
                                              content="storage/assets/img/profile/profile-1/orginal/001.jpg">
                                        <a href="storage/assets/img/profile/profile-1/orginal/001.jpg"
                                           aria-label="Photo" data-light-box="gallery_photo" data-light-box-type="image"
                                           itemprop="url" data-object-id="0">
                                            <meta itemprop="thumbnailUrl"
                                                  content="storage/assets/img/profile/profile-1/3x4/001.webp">
                                            <img src="storage/assets/001.webp" class="lazy lz-entered lz-loaded"
                                                 data-src="storage/assets/img/profile/profile-1/3x4/001.webp"
                                                 width="192" height="262" alt="image" data-ll-status="loaded">
                                            <noscript>
                                                <img src="storage/assets/img/profile/profile-1/3x4/001.webp" width="192"
                                                     height="262" alt="image">
                                            </noscript>


                                        </a>
                                    </div>
                                    <div class="grid-item" itemprop="item" itemscope=""
                                         itemtype="https://schema.org/ImageGallery">
                                        <meta itemprop="image"
                                              content="storage/assets/img/profile/profile-1/orginal/002.jpg">
                                        <a href="storage/assets/img/profile/profile-1/orginal/002.jpg"
                                           aria-label="Photo" data-light-box="gallery_photo" data-light-box-type="image"
                                           itemprop="url" data-object-id="1">
                                            <meta itemprop="thumbnailUrl"
                                                  content="storage/assets/img/profile/profile-1/3x4/002.webp">
                                            <img src="storage/assets/002.webp" class="lazy lz-entered lz-loaded"
                                                 data-src="storage/assets/img/profile/profile-1/3x4/002.webp"
                                                 width="192" height="262" alt="image" data-ll-status="loaded">
                                            <noscript>
                                                <img src="storage/assets/img/profile/profile-1/3x4/002.webp" width="192"
                                                     height="262" alt="image">
                                            </noscript>


                                        </a>
                                    </div>
                                    <div class="grid-item" itemprop="item" itemscope=""
                                         itemtype="https://schema.org/ImageGallery">
                                        <meta itemprop="image"
                                              content="storage/assets/img/profile/profile-1/orginal/003.jpg">
                                        <a href="storage/assets/img/profile/profile-1/orginal/003.jpg"
                                           aria-label="Photo" data-light-box="gallery_photo" data-light-box-type="image"
                                           itemprop="url" data-object-id="2">
                                            <meta itemprop="thumbnailUrl"
                                                  content="storage/assets/img/profile/profile-1/3x4/003.webp">
                                            <img src="storage/assets/003.webp" class="lazy lz-entered lz-loaded"
                                                 data-src="storage/assets/img/profile/profile-1/3x4/003.webp"
                                                 width="192" height="262" alt="image" data-ll-status="loaded">
                                            <noscript>
                                                <img src="storage/assets/img/profile/profile-1/3x4/003.webp" width="192"
                                                     height="262" alt="image">
                                            </noscript>


                                        </a>
                                    </div>
                                    <div class="grid-item" itemprop="item" itemscope=""
                                         itemtype="https://schema.org/ImageGallery">
                                        <meta itemprop="image"
                                              content="storage/assets/img/profile/profile-1/orginal/004.jpg">
                                        <a href="storage/assets/img/profile/profile-1/orginal/004.jpg"
                                           aria-label="Photo" data-light-box="gallery_photo" data-light-box-type="image"
                                           itemprop="url" data-object-id="3">
                                            <meta itemprop="thumbnailUrl"
                                                  content="storage/assets/img/profile/profile-1/3x4/004.webp">
                                            <img src="storage/assets/004(1).webp" class="lazy lz-entered lz-loaded"
                                                 data-src="storage/assets/img/profile/profile-1/3x4/004.webp"
                                                 width="192" height="262" alt="image" data-ll-status="loaded">
                                            <noscript>
                                                <img src="storage/assets/img/profile/profile-1/3x4/004.webp" width="192"
                                                     height="262" alt="image">
                                            </noscript>


                                        </a>
                                    </div>
                                    <div class="grid-item" itemprop="item" itemscope=""
                                         itemtype="https://schema.org/ImageGallery">
                                        <meta itemprop="image"
                                              content="storage/assets/img/profile/profile-1/orginal/005.jpg">
                                        <a href="storage/assets/img/profile/profile-1/orginal/005.jpg"
                                           aria-label="Photo" data-light-box="gallery_photo" data-light-box-type="image"
                                           itemprop="url" data-object-id="4">
                                            <meta itemprop="thumbnailUrl"
                                                  content="storage/assets/img/profile/profile-1/3x4/005.webp">
                                            <img src="storage/assets/005(1).webp" class="lazy lz-entered lz-loaded"
                                                 data-src="storage/assets/img/profile/profile-1/3x4/005.webp"
                                                 width="192" height="262" alt="image" data-ll-status="loaded">
                                            <noscript>
                                                <img src="storage/assets/img/profile/profile-1/3x4/005.webp" width="192"
                                                     height="262" alt="image">
                                            </noscript>


                                        </a>
                                    </div>
                                    <div class="grid-item" itemprop="item" itemscope=""
                                         itemtype="https://schema.org/ImageGallery">
                                        <meta itemprop="image"
                                              content="storage/assets/img/profile/profile-1/orginal/006.jpg">
                                        <a href="storage/assets/img/profile/profile-1/orginal/006.jpg"
                                           aria-label="Photo" data-light-box="gallery_photo" data-light-box-type="image"
                                           itemprop="url" data-object-id="5">
                                            <meta itemprop="thumbnailUrl"
                                                  content="storage/assets/img/profile/profile-1/3x4/006.webp">
                                            <img src="storage/assets/lazy-3x4.webp" class="lazy"
                                                 data-src="storage/assets/img/profile/profile-1/3x4/006.webp"
                                                 width="192" height="262" alt="image">
                                            <noscript>
                                                <img src="storage/assets/img/profile/profile-1/3x4/006.webp" width="192"
                                                     height="262" alt="image">
                                            </noscript>


                                        </a>
                                    </div>
                                    <div class="grid-item" itemprop="item" itemscope=""
                                         itemtype="https://schema.org/ImageGallery">
                                        <meta itemprop="image"
                                              content="storage/assets/img/profile/profile-1/orginal/007.jpg">
                                        <a href="storage/assets/img/profile/profile-1/orginal/007.jpg"
                                           aria-label="Photo" data-light-box="gallery_photo" data-light-box-type="image"
                                           itemprop="url" data-object-id="6">
                                            <meta itemprop="thumbnailUrl"
                                                  content="storage/assets/img/profile/profile-1/3x4/007.webp">
                                            <img src="storage/assets/lazy-3x4.webp" class="lazy"
                                                 data-src="storage/assets/img/profile/profile-1/3x4/007.webp"
                                                 width="192" height="262" alt="image">
                                            <noscript>
                                                <img src="storage/assets/img/profile/profile-1/3x4/007.webp" width="192"
                                                     height="262" alt="image">
                                            </noscript>


                                        </a>
                                    </div>
                                    <div class="grid-item" itemprop="item" itemscope=""
                                         itemtype="https://schema.org/ImageGallery">
                                        <meta itemprop="image"
                                              content="storage/assets/img/profile/profile-1/orginal/008.jpg">
                                        <a href="storage/assets/img/profile/profile-1/orginal/008.jpg"
                                           aria-label="Photo" data-light-box="gallery_photo" data-light-box-type="image"
                                           itemprop="url" data-object-id="7">
                                            <meta itemprop="thumbnailUrl"
                                                  content="storage/assets/img/profile/profile-1/3x4/008.webp">
                                            <img src="storage/assets/lazy-3x4.webp" class="lazy"
                                                 data-src="storage/assets/img/profile/profile-1/3x4/008.webp"
                                                 width="192" height="262" alt="image">
                                            <noscript>
                                                <img src="storage/assets/img/profile/profile-1/3x4/008.webp" width="192"
                                                     height="262" alt="image">
                                            </noscript>


                                        </a>
                                    </div>
                                    <div class="grid-item" itemprop="item" itemscope=""
                                         itemtype="https://schema.org/ImageGallery">
                                        <meta itemprop="image"
                                              content="storage/assets/img/profile/profile-1/orginal/009.jpg">
                                        <a href="storage/assets/img/profile/profile-1/orginal/009.jpg"
                                           aria-label="Photo" data-light-box="gallery_photo" data-light-box-type="image"
                                           itemprop="url" data-object-id="8">
                                            <meta itemprop="thumbnailUrl"
                                                  content="storage/assets/img/profile/profile-1/3x4/009.webp">
                                            <img src="storage/assets/lazy-3x4.webp" class="lazy"
                                                 data-src="storage/assets/img/profile/profile-1/3x4/009.webp"
                                                 width="192" height="262" alt="image">
                                            <noscript>
                                                <img src="storage/assets/img/profile/profile-1/3x4/009.webp" width="192"
                                                     height="262" alt="image">
                                            </noscript>


                                        </a>
                                    </div>

                                    <div class="grid-item">
                                        <a href="model-page#" class="btn btn-xxl btn-floating grid-item-more">
                                        <span>
                                            <span>+</span>
                                            <span>See</span>
                                            <span>All</span>
                                            <span>Photos</span>
                                        </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content-item" data-tab-target="gallery_video" itemprop="itemListElement"
                                 itemscope="" itemtype="https://schema.org/ListItem">
                                <meta itemprop="name" content="Video">
                                <div class="grid-video">
                                    <div class="grid-item" itemprop="item" itemscope=""
                                         itemtype="https://schema.org/VideoObject">
                                        <div class="video-card">
                                            <a href="storage/assets/video/video-001.mp4" data-light-box="gallery_video"
                                               data-light-box-type="video" aria-label="Video" itemprop="url"
                                               data-object-id="10">
                                                <div class="card-thumbnail">
                                                    <meta itemprop="thumbnail"
                                                          content="storage/assets/img/video-001.webp">
                                                    <img src="storage/assets/lazy-1.7x1.webp" class="lazy"
                                                         data-src="storage/assets/img/video-001.webp" width="296"
                                                         height="168" alt="video">
                                                    <noscript>
                                                        <img src="storage/assets/img/video-001.webp" width="296"
                                                             height="168"
                                                             alt="video">
                                                    </noscript>
                                                    <i class="icon-subtract"></i>
                                                </div>
                                                <div class="card-content">
                                                    <div class="card-title" itemprop="name">Video Title</div>
                                                    <meta itemprop="duration" content="PT0M12S">
                                                    <div class="card-time">0:12</div>
                                                </div>


                                            </a>
                                        </div>
                                    </div>
                                    <div class="grid-item" itemprop="item" itemscope=""
                                         itemtype="https://schema.org/VideoObject">
                                        <div class="video-card">
                                            <a href="storage/assets/video/video-002.mp4" data-light-box="gallery_video"
                                               data-light-box-type="video" aria-label="Video" itemprop="url"
                                               data-object-id="11">
                                                <div class="card-thumbnail">
                                                    <meta itemprop="thumbnail"
                                                          content="storage/assets/img/video-002.webp">
                                                    <img src="storage/assets/lazy-1.7x1.webp" class="lazy"
                                                         data-src="storage/assets/img/video-002.webp" width="296"
                                                         height="168" alt="video">
                                                    <noscript>
                                                        <img src="storage/assets/img/video-002.webp" width="296"
                                                             height="168"
                                                             alt="video">
                                                    </noscript>
                                                    <i class="icon-subtract"></i>
                                                </div>
                                                <div class="card-content">
                                                    <div class="card-title" itemprop="name">Video Title</div>
                                                    <meta itemprop="duration" content="PT0M10S">
                                                    <div class="card-time">0:10</div>
                                                </div>


                                            </a>
                                        </div>
                                    </div>
                                    <div class="grid-item" itemprop="item" itemscope=""
                                         itemtype="https://schema.org/VideoObject">
                                        <div class="video-card">
                                            <a href="storage/assets/video/video-003.mp4" data-light-box="gallery_video"
                                               data-light-box-type="video" aria-label="Video" itemprop="url"
                                               data-object-id="12">
                                                <div class="card-thumbnail">
                                                    <meta itemprop="thumbnail"
                                                          content="storage/assets/img/video-003.webp">
                                                    <img src="storage/assets/lazy-1.7x1.webp" class="lazy"
                                                         data-src="storage/assets/img/video-003.webp" width="296"
                                                         height="168" alt="video">
                                                    <noscript>
                                                        <img src="storage/assets/img/video-003.webp" width="296"
                                                             height="168"
                                                             alt="video">
                                                    </noscript>
                                                    <i class="icon-subtract"></i>
                                                </div>
                                                <div class="card-content">
                                                    <div class="card-title" itemprop="name">Video Title</div>
                                                    <meta itemprop="duration" content="PT0M9S">
                                                    <div class="card-time">0:09</div>
                                                </div>


                                            </a>
                                        </div>
                                    </div>
                                    <div class="grid-item" itemprop="item" itemscope=""
                                         itemtype="https://schema.org/VideoObject">
                                        <div class="video-card">
                                            <a href="storage/assets/video/video-004.mp4" data-light-box="gallery_video"
                                               data-light-box-type="video" aria-label="Video" itemprop="url"
                                               data-object-id="13">
                                                <div class="card-thumbnail">
                                                    <meta itemprop="thumbnail"
                                                          content="storage/assets/img/video-004.webp">
                                                    <img src="storage/assets/lazy-1.7x1.webp" class="lazy"
                                                         data-src="storage/assets/img/video-004.webp" width="296"
                                                         height="168" alt="video">
                                                    <noscript>
                                                        <img src="storage/assets/img/video-004.webp" width="296"
                                                             height="168"
                                                             alt="video">
                                                    </noscript>
                                                    <i class="icon-subtract"></i>
                                                </div>
                                                <div class="card-content">
                                                    <div class="card-title" itemprop="name">Video Title</div>
                                                    <meta itemprop="duration" content="PT0M17S">
                                                    <div class="card-time">0:17</div>
                                                </div>


                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content-item" data-tab-target="gallery_voice" itemprop="itemListElement"
                                 itemscope="" itemtype="https://schema.org/ListItem">
                                <meta itemprop="name" content="audio">
                                <div class="grid-audio">
                                    <div class="grid-item" itemprop="item" itemscope=""
                                         itemtype="https://schema.org/AudioObject">
                                        <meta itemprop="contentUrl" content="storage/assets/music/music-001.mp3">
                                        <meta itemprop="encodingFormat" content="audio/mp3">
                                        <div class="audio-card" data-src="storage/assets/music/music-001.mp3"
                                             data-detect="true">
                                            <div class="card-content">
                                                <div class="card-title" itemprop="name">Voice Title</div>
                                                <div class="card-time">
                                                    <meta itemprop="duration" content="T1M50S">
                                                    <span class="current-time">00:00</span> / <span>01:50</span>
                                                </div>
                                            </div>
                                            <div class="card-controllers">
                                                <button class="btn btn-icon play-btn" aria-label="Play Voice">
                                                    <i class="icon-play"></i>
                                                </button>
                                                <button class="btn btn-icon pause-btn" aria-label="Pause Voice">
                                                    <i class="icon-pause"></i>
                                                </button>
                                                <div class="slider-control">
                                                    <input type="range" min="0" max="100" value="0">
                                                    <div class="slider-track">
                                                        <div class="slider-track-process"></div>
                                                        <div class="slider-track-buffer"></div>
                                                    </div>
                                                </div>
                                                <div class="card-volume">
                                                    <div class="card-volume-progress">
                                                        <input type="range" min="0" max="1" step="0.01" value="1">
                                                        <div class="slider-track">
                                                            <div class="slider-track-process"
                                                                 style="width: 100%;"></div>
                                                            <div class="slider-track-buffer"></div>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-icon volume-mute-btn"
                                                            aria-label="Pause Voice">
                                                        <i class="icon-silence"></i>
                                                    </button>
                                                    <button class="btn btn-icon volume-on-btn" aria-label="Pause Voice">
                                                        <i class="icon-audio"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="card-loading">
                                                <div class="loader-mini"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid-item" itemprop="item" itemscope=""
                                         itemtype="https://schema.org/AudioObject">
                                        <meta itemprop="contentUrl" content="storage/assets/music/music-002.mp3">
                                        <meta itemprop="encodingFormat" content="audio/mp3">
                                        <div class="audio-card" data-src="storage/assets/music/music-002.mp3"
                                             data-detect="true">
                                            <div class="card-content">
                                                <div class="card-title" itemprop="name">Voice Title</div>
                                                <div class="card-time">
                                                    <meta itemprop="duration" content="T1M54S">
                                                    <span class="current-time">00:00</span> / <span>01:54</span>
                                                </div>
                                            </div>
                                            <div class="card-controllers">
                                                <button class="btn btn-icon play-btn" aria-label="Play Voice">
                                                    <i class="icon-play"></i>
                                                </button>
                                                <button class="btn btn-icon pause-btn" aria-label="Pause Voice">
                                                    <i class="icon-pause"></i>
                                                </button>
                                                <div class="slider-control">
                                                    <input type="range" min="0" max="100" value="0">
                                                    <div class="slider-track">
                                                        <div class="slider-track-process"></div>
                                                        <div class="slider-track-buffer"></div>
                                                    </div>
                                                </div>
                                                <div class="card-volume">
                                                    <div class="card-volume-progress">
                                                        <input type="range" min="0" max="1" step="0.01" value="1">
                                                        <div class="slider-track">
                                                            <div class="slider-track-process"
                                                                 style="width: 100%;"></div>
                                                            <div class="slider-track-buffer"></div>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-icon volume-mute-btn"
                                                            aria-label="Pause Voice">
                                                        <i class="icon-silence"></i>
                                                    </button>
                                                    <button class="btn btn-icon volume-on-btn" aria-label="Pause Voice">
                                                        <i class="icon-audio"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="card-loading">
                                                <div class="loader-mini"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid-item" itemprop="item" itemscope=""
                                         itemtype="https://schema.org/AudioObject">
                                        <meta itemprop="contentUrl" content="storage/assets/music/music-003.mp3">
                                        <meta itemprop="encodingFormat" content="audio/mp3">
                                        <div class="audio-card" data-src="storage/assets/music/music-003.mp3"
                                             data-detect="true">
                                            <div class="card-content">
                                                <div class="card-title" itemprop="name">Voice Title</div>
                                                <div class="card-time">
                                                    <meta itemprop="duration" content="T2M10S">
                                                    <span class="current-time">00:00</span> / <span>02:10</span>
                                                </div>
                                            </div>
                                            <div class="card-controllers">
                                                <button class="btn btn-icon play-btn" aria-label="Play Voice">
                                                    <i class="icon-play"></i>
                                                </button>
                                                <button class="btn btn-icon pause-btn" aria-label="Pause Voice">
                                                    <i class="icon-pause"></i>
                                                </button>
                                                <div class="slider-control">
                                                    <input type="range" min="0" max="100" value="0">
                                                    <div class="slider-track">
                                                        <div class="slider-track-process"></div>
                                                        <div class="slider-track-buffer"></div>
                                                    </div>
                                                </div>
                                                <div class="card-volume">
                                                    <div class="card-volume-progress">
                                                        <input type="range" min="0" max="1" step="0.01" value="1">
                                                        <div class="slider-track">
                                                            <div class="slider-track-process"
                                                                 style="width: 100%;"></div>
                                                            <div class="slider-track-buffer"></div>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-icon volume-mute-btn"
                                                            aria-label="Pause Voice">
                                                        <i class="icon-silence"></i>
                                                    </button>
                                                    <button class="btn btn-icon volume-on-btn" aria-label="Pause Voice">
                                                        <i class="icon-audio"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="card-loading">
                                                <div class="loader-mini"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="model-page#" id="btn_gallery_load_more">
                        Load More
                    </a>
                </div>
            </section>

            <!-- start news -->
            <section class="section section-news" itemscope="" itemtype="https://schema.org/Collection">
                <div class="container-xxl">
                    <div class="heading-box heading-news" data-auto-size="true" data-col="1.25">
                        <div class="heading">
                            <div class="top-area">
                                <div class="title-area">
                                    <h2 class="heading-title" itemprop="name">{{$member->name}} RELATED NEWS</h2>
                                </div>
                                <div class="action-area">
                                    <a href="news-result" itemprop="url">
                                        See All
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
                                        <a href="news-single">
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
                                        <h2 class="card-title" itemprop="name"><a href="news-single" itemprop="url">News
                                                Title</a></h2>
                                        <div class="card-author" itemprop="author">
                                            <i class="icon-user"></i>
                                            <a href="news-single">Admin</a>
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
                                        <a href="news-single">
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
                                        <h2 class="card-title" itemprop="name"><a href="news-single" itemprop="url">News
                                                Title</a></h2>
                                        <div class="card-author" itemprop="author">
                                            <i class="icon-user"></i>
                                            <a href="news-single">Admin</a>
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
                                        <a href="news-single">
                                            <img src="storage/assets//lazy-1.7x1.webp" class="card-thumbnail-image lazy"
                                                 data-src="storage/assets/img/news-005.webp" width="312" height="177"
                                                 alt="news title">
                                            <noscript>
                                                <img src="storage/assets/img/news-005.webp" class="card-thumbnail-image"
                                                     width="312" height="177" alt="news title">
                                            </noscript>
                                        </a>
                                    </div>
                                    <div class="card-content">
                                        <h2 class="card-title" itemprop="name"><a href="news-single" itemprop="url">News
                                                Title</a></h2>
                                        <div class="card-author" itemprop="author">
                                            <i class="icon-user"></i>
                                            <a href="news-single">Admin</a>
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
                                        <a href="news-single">
                                            <img src="storage/assets//lazy-1.7x1.webp" class="card-thumbnail-image lazy"
                                                 data-src="storage/assets/img/news-006.webp" width="312" height="177"
                                                 alt="news title">
                                            <noscript>
                                                <img src="storage/assets/img/news-006.webp" class="card-thumbnail-image"
                                                     width="312" height="177" alt="news title">
                                            </noscript>
                                        </a>
                                    </div>
                                    <div class="card-content">
                                        <h2 class="card-title" itemprop="name"><a href="news-single" itemprop="url">News
                                                Title</a></h2>
                                        <div class="card-author" itemprop="author">
                                            <i class="icon-user"></i>
                                            <a href="news-single">Admin</a>
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
                        <a href="model-page#" class="ft-site-logo">
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
                                        <li><a href="home">Home</a></li>
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
    <script src="storage/assets/component.min.js.download"></script>
    <script src="storage/assets/scripts.min.js.download"></script>



    <div id="torrent-scanner-popup" style="display: none;">
        <template shadowrootmode="open">
            <link rel="stylesheet" href="chrome-extension://aegnopegbbhjeeiganiajffnalhlkkjb/css/custom.css">
            <div id="yf-bt-wrapper" class="free">
                <div class="header"><img class="sts-logo"
                                         src="chrome-extension://aegnopegbbhjeeiganiajffnalhlkkjb/img/assets/ts-free-logo.png">
                    <div class="search-content"><input id="search-input" class="search-input" type="search"
                                                       placeholder="Start your search here..."><span id="search-btn"
                                                                                                     class="search-btn"></span>
                    </div>
                </div>
                <div class="container">
                    <div class="main-container">
                        <div id="torrent-data" class="torrent-content">
                            <div class="t-table">
                                <div class="t-header">
                                    <div class="t-name">Torrent search results</div>
                                </div>
                                <div id="checked-sites" class="checked-sites-section">
                                    <div class="left">Checked Sites</div>
                                    <div class="right"><span id="sites-count" class="sites-count">0</span></div>
                                </div>
                                <div id="table-body" class="t-body">
                                    <div id="loading" class="spinner">
                                        <div class="bounce1"></div>
                                        <div class="bounce2"></div>
                                        <div class="bounce3"></div>
                                    </div>
                                    <div class="table-message-container" id="table-message"><p>No items to list <br> Use
                                            the search bar above for instant results</p></div>
                                </div>
                            </div>
                        </div>
                        <div class="tooltip"><p class="tooltip-text">To see search results, type here and hit
                                `Enter`</p></div>
                        <div class="footer"><span><span id="numberScanned"
                                                        class="numberScanned">No results</span></span></div>
                        <div class="upgradeProPanel">
                            <div class="upgradeProPanelTitle">Try our Pro Versions to unlock:</div>
                            <div class="upgradeProPanelList">
                                <div><p>Faster Results</p></div>
                                <div><p>Secure Torrenting</p></div>
                                <div><p>Unlimited Search Results with detailed torrent info</p></div>
                                <div><p>1-YR Subscription to CyberGhost VPN <span
                                            style="font-size:8px;">(PRO+VPN only)</span></p></div>
                            </div>
                            <a class="upgrade-to-pro-button-2" id="buy-pro-vpn"
                               href="https://www.utorrent.com/webpro-offer/?utm_source=Lavasoft&amp;utm_medium=version_1.0&amp;utm_campaign=Scanner"
                               target="_blank">BUY PRO + VPN</a><a class="upgrade-to-pro-button-2" id="buy-pro"
                                                                   href="https://www.utorrent.com/webpro-offer/?utm_source=Lavasoft&amp;utm_medium=version_1.0&amp;utm_campaign=Scanner"
                                                                   target="_blank">BUY PRO</a></div>
                    </div>
                    <div class="sync-container nav-se-container">
                        <div class="nav-se-content"><img class="sync-icon nav-se-icon"
                                                         src="chrome-extension://aegnopegbbhjeeiganiajffnalhlkkjb/img/assets/icon-sync.svg">
                            <div class="nav-se-title">One more step to go before you start torrenting!</div>
                            <p class="nav-se-text">This extension can sync results with BitTorrent and/or uTorrent for
                                instant downloading.</p>
                            <p class="nav-se-text">To activate this feature, please click on the button below, and then
                                on the Chrome message to activate the 'Messaging Permission'.</p>
                            <button class="sync-permission-btn nav-se-btn">Activate Messaging Permission</button>
                        </div>
                        <div class="nav-se-content display-none"><img class="sync-icon nav-se-icon"
                                                                      src="chrome-extension://aegnopegbbhjeeiganiajffnalhlkkjb/img/assets/icon-sync.svg">
                            <div class="nav-se-title">Syncing...</div>
                            <p class="nav-se-text">Please allow Messaging Permissions in the proceeding Chrome
                                message.</p></div>
                        <div class="nav-se-content display-none"><img class="sync-icon nav-se-icon"
                                                                      src="chrome-extension://aegnopegbbhjeeiganiajffnalhlkkjb/img/assets/icon-success.svg">
                            <div class="nav-se-title">Sync Complete</div>
                            <p class="nav-se-text">You have successfully activated the “Messaging Permission” feature.
                                All your search results will sync with BitTorrent and/or uTorrent.</p></div>
                    </div>
                    <div class="license-container nav-se-container">
                        <div class="nav-se-content"><img class="nav-se-icon"
                                                         src="chrome-extension://aegnopegbbhjeeiganiajffnalhlkkjb/img/assets/icon-key2.svg">
                            <div class="nav-se-title">Enter License Key</div>
                            <p class="nav-se-text">Enter your license key and click on the activate button to start
                                using <span>µTorrent Web Pro.</span></p><input type="text" id="license-input-key"
                                                                               class="license-input-key"
                                                                               placeholder="Enter Key">
                            <div class="license-spinner">
                                <div class="bounce1"></div>
                                <div class="bounce2"></div>
                                <div class="bounce3"></div>
                            </div>
                            <button id="license-activate-button" class="license-activate-button nav-se-btn">Activate
                            </button>
                            <p>Don't have a license key? <a class="license-buy-link" target="_blank">Click here</a></p>
                        </div>
                        <div class="nav-se-content display-none"><img class="nav-se-icon"
                                                                      src="chrome-extension://aegnopegbbhjeeiganiajffnalhlkkjb/img/assets/icon-success.svg">
                            <div class="nav-se-title">Happy Torrenting!</div>
                            <p class="nav-se-text">You are now an active PRO user</p>
                            <p class="nav-se-text">Your key is valid until <span class="expiry-date"></span></p></div>
                        <div class="nav-se-content display-none"><img class="nav-se-icon"
                                                                      src="chrome-extension://aegnopegbbhjeeiganiajffnalhlkkjb/img/assets/icon-alert.svg">
                            <div class="nav-se-title">Your license key has expired</div>
                            <p class="nav-se-text">Looks like your license key has expired, to renew your PRO license
                                key, please select a license type:</p><a
                                class="upgrade-to-pro-button-2 buy-license-expiry-button"
                                href="https://www.utorrent.com/webpro-offer/?utm_source=Lavasoft&amp;utm_medium=version_1.0&amp;utm_campaign=Scanner"
                                target="_blank">Buy Pro + VPN</a><a
                                class="upgrade-to-pro-button-2 buy-license-expiry-button"
                                href="https://www.utorrent.com/webpro-offer/?utm_source=Lavasoft&amp;utm_medium=version_1.0&amp;utm_campaign=Scanner"
                                target="_blank">Buy Pro</a>
                            <p class="nav-se-text">Already have a license key? <a class="link" id="show-license-panel">Click
                                    here</a></p></div>
                        <div class="nav-se-content display-none"><img class="nav-se-icon"
                                                                      src="chrome-extension://aegnopegbbhjeeiganiajffnalhlkkjb/img/assets/icon-success.svg">
                            <div class="nav-se-title">Pro User</div>
                            <p class="nav-se-text">Your key is valid until <span class="expiry-date"></span></p>
                            <p class="nav-se-text">Your License Key:</p>
                            <p class="nav-se-text"></p>
                            <p class="nav-se-text margin-top-50">Switch back to Torrent Scanner Free?</p>
                            <button class="activate-free-btn nav-se-btn">Revert to Free Version</button>
                        </div>
                    </div>
                    <div class="feedback-container nav-se-container">
                        <div class="nav-se-content"><img class="nav-se-icon"
                                                         src="chrome-extension://aegnopegbbhjeeiganiajffnalhlkkjb/img/assets/icon-feedback.svg">
                            <div class="nav-se-title">Feedback</div>
                            <p class="nav-se-text">Help us improve Torrent Scanner, send us comments, bugs, feedback,
                                and suggestions.</p>
                            <button id="feedback-button" class="feedback-button nav-se-btn">Send Feedback</button>
                        </div>
                    </div>
                    <div class="settings-container nav-se-container">
                        <div class="nav-se-content">
                            <div class="settings-title">Settings</div>
                        </div>
                        <div class="s-table">
                            <div class="s-row">
                                <div class="s-title">FAQ
                                    <div class="s-arrow"><span class="arrow-down"></span></div>
                                </div>
                                <div class="s-content faq-content"><p class="faq-text">FAQ: <a
                                            href="chrome-extension://aegnopegbbhjeeiganiajffnalhlkkjb/faq"
                                            target="_blank">Click here</a></p></div>
                            </div>
                            <div class="s-row">
                                <div class="s-title">Rate the extension
                                    <div class="s-arrow"><span class="arrow-down"></span></div>
                                </div>
                                <div class="s-content"><p class="rate-text">How did you like the extension
                                        experience?</p>
                                    <div class="rating"><span class="rating-star">★</span><span
                                            class="rating-star">★</span><span class="rating-star">★</span><span
                                            class="rating-star">★</span><span class="rating-star">★</span></div>
                                    <button class="rating-btn nav-se-btn" disabled="">Submit</button>
                                </div>
                            </div>
                            <div class="s-row">
                                <div class="s-title">About
                                    <div class="s-arrow"><span class="arrow-down"></span></div>
                                </div>
                                <div class="s-content about-content">
                                    <div class="about-version">Version 1.3.0 <br><br> What's New</div>
                                    <div class="about-new"><p></p>
                                        <ul>
                                            <li>Experience a complete new User Interface of the extension. It is
                                                enhanced and user friendly now.
                                            </li>
                                            <li>Squashed some bugs.</li>
                                        </ul>
                                        <p></p></div>
                                </div>
                            </div>
                            <div class="s-row">
                                <div class="s-title">Privacy Policy
                                    <div class="s-arrow"><span class="arrow-down"></span></div>
                                </div>
                                <div class="s-content">
                                    <div class="policy-text">Adaware Software (7270356 Canada Inc.) is the operator of
                                        the Adaware products suites and related services (the “<b>Company</b>”,
                                        ”<b>we</b>” or “<b>us</b>”). We respect your privacy rights and we are committed
                                        to protecting them. This privacy policy (“<b>Privacy Policy</b>” or simply “<b>policy</b>”)
                                        governs our products, services and websites that link to this Privacy Policy,
                                        and describes our practices of processing data from you. By “<b>you</b>”, we
                                        refer to either or all of the following: (i) visitors to our websites that links
                                        to this Privacy Policy (“<b>Visitor</b>” and “<b>Website</b>”, respectively);
                                        (ii) our customers using our software products and Services (“<b>User</b>”); and
                                        (c) a business customer, a business partner that has a contractual relationship
                                        with us or a prospective customer that is yet to be engaged in a contract with
                                        us (“Business Customer”). Unless explicitly mentioned otherwise, the information
                                        in this Privacy Policy refers to any and all data subject types (“you” or
                                        “your’). <br><br> For the purpose of this policy, the “<b>Service(s)</b>” shall
                                        include any software licensed by the Company, including features offered by or
                                        within the installed software or additional software scripts available therein
                                        (either downloaded from one of our websites, pre-installed on your device,
                                        downloaded through a third party website, obtained on a physical medium, or
                                        otherwise), or services provided through and/or on top such software, services
                                        offered on our websites, communication forums, support services, account
                                        operation, updates, enhancements, new features, premium support, extended
                                        guarantees, online version and free versions of a software or additional
                                        services or features as we ay make available from time to time. <br><br> If you
                                        are a California resident, please also see our <a
                                            href="https://www.adaware.com/CCPA/" target="_blank">CCPA Notice</a>.
                                        <br><br> <a href="https://www.adaware.com/privacy-policy/" target="_blank">Read
                                            more</a></div>
                                </div>
                            </div>
                            <div class="s-row" style="display: none;">
                                <div class="s-title">Contact Us
                                    <div class="s-arrow"><span class="arrow-down"></span></div>
                                </div>
                                <div class="s-content">
                                    <div class="contact-text">For any payment and order-related support, please contact
                                        us at Email: <a href="mailto:support@torrentscanner.zendesk.com">support@torrentscanner.zendesk.com</a>
                                        or <a href="mailto:pcsoftwareinfo.com">pcsoftwareinfo.com</a><br><br>Phone: <a
                                            href="https://pcsoftwareinfo.com/contact.aspx" target="_blank">Click
                                            here</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nav">
                    <button id="btnSync" class="nav-btn">Sync</button>
                    <button id="btnLicense" class="nav-btn">License</button>
                    <button id="btnHome" class="nav-btn">Home</button>
                    <button id="btnFeedback" class="nav-btn">Feedback</button>
                    <button id="btnSettings" class="nav-btn">Settings</button>
                </div>
            </div>
        </template>
    </div>
    <div id="rememberry__extension__root" style="all: unset;">
        <template shadowrootmode="open">
            <main></main>
            <style>.rb_wrapper__ITM3k_JA {
                    position: absolute;
                    left: 0;
                    z-index: 1010;
                    width: 100vw;
                    opacity: 1;
                    transition: opacity 200ms cubic-bezier(0.18, 0.65, 0.26, 0.98), transform 200ms ease-out
                }

                .rb_wrapper__ITM3k_JA[data-popup-direction=downward] {
                    top: 0;
                    transform: translateY(9px)
                }

                .rb_wrapper__ITM3k_JA[data-popup-direction=downward] > .rb_translation-popup__RzSFKJJk > .rb_arrow__cNZuKx_h {
                    top: -8px;
                    transform: translateX(-50%) rotate(45deg);
                    background-color: #2ec4b6
                }

                .rb_wrapper__ITM3k_JA[data-popup-direction=downward] > .rb_translation-popup__RzSFKJJk:after {
                    top: 0
                }

                .rb_wrapper__ITM3k_JA[data-popup-direction=upward] {
                    bottom: 0;
                    transform: translateY(-8px)
                }

                .rb_wrapper__ITM3k_JA[data-popup-direction=upward] > .rb_translation-popup__RzSFKJJk > .rb_arrow__cNZuKx_h {
                    bottom: -8px;
                    transform: translateX(-50%) rotate(-135deg);
                    background-color: #fdfffc
                }

                .rb_wrapper__ITM3k_JA[data-popup-direction=upward] > .rb_translation-popup__RzSFKJJk:after {
                    bottom: 0
                }

                .rb_wrapper__ITM3k_JA:not([data-popup-direction=none]) > .rb_translation-popup__RzSFKJJk:after {
                    position: absolute;
                    transform: translateX(-50%);
                    width: 32px;
                    height: 16px;
                    background-color: #fdfffc;
                    content: ""
                }

                .rb_wrapper__ITM3k_JA:not([data-popup-direction=none]) > .rb_translation-popup__RzSFKJJk > .rb_arrow__cNZuKx_h {
                    position: absolute;
                    width: 16px;
                    height: 16px;
                    border-top: 1px solid #2ec4b6;
                    border-left: 1px solid #2ec4b6;
                    box-shadow: 0 0 8px rgba(1, 22, 39, .3)
                }

                .rb_wrapper__ITM3k_JA.rb_in__MyHdJs2q {
                    transform: translateY(0)
                }

                .rb_wrapper__ITM3k_JA.rb_in__MyHdJs2q, .rb_wrapper__ITM3k_JA.rb_out__Kymne38L {
                    opacity: 0
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk {
                    position: absolute;
                    display: flex;
                    min-width: 180px;
                    max-width: 360px;
                    border: 1px solid #2ec4b6;
                    border-radius: 4px;
                    box-shadow: 0 0 8px rgba(1, 22, 39, .3);
                    flex-direction: column;
                    color: #011627;
                    background-color: #fdfffc
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk[data-translate-x="-10%"] {
                    transform: translateX(-10%)
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk[data-translate-x="-10%"] > .rb_arrow__cNZuKx_h, .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk[data-translate-x="-10%"]:after {
                    left: 10%
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk[data-translate-x="-20%"] {
                    transform: translateX(-20%)
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk[data-translate-x="-20%"] > .rb_arrow__cNZuKx_h, .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk[data-translate-x="-20%"]:after {
                    left: 20%
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk[data-translate-x="-30%"] {
                    transform: translateX(-30%)
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk[data-translate-x="-30%"] > .rb_arrow__cNZuKx_h, .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk[data-translate-x="-30%"]:after {
                    left: 30%
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk[data-translate-x="-40%"] {
                    transform: translateX(-40%)
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk[data-translate-x="-40%"] > .rb_arrow__cNZuKx_h, .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk[data-translate-x="-40%"]:after {
                    left: 40%
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk[data-translate-x="-50%"] {
                    transform: translateX(-50%)
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk[data-translate-x="-50%"] > .rb_arrow__cNZuKx_h, .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk[data-translate-x="-50%"]:after {
                    left: 50%
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk[data-translate-x="-60%"] {
                    transform: translateX(-60%)
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk[data-translate-x="-60%"] > .rb_arrow__cNZuKx_h, .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk[data-translate-x="-60%"]:after {
                    left: 60%
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk[data-translate-x="-70%"] {
                    transform: translateX(-70%)
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk[data-translate-x="-70%"] > .rb_arrow__cNZuKx_h, .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk[data-translate-x="-70%"]:after {
                    left: 70%
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk[data-translate-x="-80%"] {
                    transform: translateX(-80%)
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk[data-translate-x="-80%"] > .rb_arrow__cNZuKx_h, .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk[data-translate-x="-80%"]:after {
                    left: 80%
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk[data-translate-x="-90%"] {
                    transform: translateX(-90%)
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk[data-translate-x="-90%"] > .rb_arrow__cNZuKx_h, .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk[data-translate-x="-90%"]:after {
                    left: 90%
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk > .rb_header__N29ZMB3H {
                    z-index: 1;
                    display: flex;
                    height: 30px;
                    background-color: #2ec4b6
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk > .rb_header__N29ZMB3H > .rb_btn__XLJNDDWF {
                    display: inline-block;
                    width: 30px;
                    height: 30px;
                    outline: none;
                    flex-shrink: 0;
                    color: #fdfffc;
                    font-size: 18px;
                    line-height: 30px;
                    text-align: center;
                    text-shadow: 0 1px #20897f
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk > .rb_header__N29ZMB3H > .rb_btn__XLJNDDWF:focus {
                    color: #cc7f16
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk > .rb_header__N29ZMB3H > .rb_btn__XLJNDDWF:active:not(.rb_disabled__UsYG2YB2) {
                    text-shadow: 0 -1px #20897f
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk > .rb_header__N29ZMB3H > .rb_btn__XLJNDDWF.rb_disabled__UsYG2YB2 {
                    color: #b8ebe6
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk > .rb_header__N29ZMB3H > .rb_languages__pgMdQGex {
                    vertical-align: top;
                    display: inline-flex;
                    margin: 5px 5px;
                    flex-grow: 1;
                    justify-content: center
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk > .rb_header__N29ZMB3H > .rb_languages__pgMdQGex > i {
                    margin-left: 2px;
                    color: #fdfffc
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk > .rb_header__N29ZMB3H > .rb_languages__pgMdQGex > .rb_container__B_HqgrcP {
                    position: relative;
                    display: inline-flex
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk > .rb_header__N29ZMB3H > .rb_languages__pgMdQGex > .rb_container__B_HqgrcP > select, .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk > .rb_header__N29ZMB3H > .rb_languages__pgMdQGex > .rb_container__B_HqgrcP > select:hover {
                    border: none;
                    box-shadow: rgba(1, 22, 39, .078) 0 1px 0, rgba(253, 255, 252, .74) 0 1px 2px inset;
                    border-radius: 5px;
                    color: #011627;
                    text-shadow: none;
                    background-image: none;
                    background-color: rgba(253, 255, 252, .9);
                    cursor: pointer;
                    -webkit-appearance: menulist;
                    font-size: 12px;
                    background-color: #fdfffc
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk > .rb_header__N29ZMB3H > .rb_languages__pgMdQGex > .rb_container__B_HqgrcP > select.rb_true-select__ubJCGEA0 {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    opacity: 0
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk > .rb_header__N29ZMB3H > .rb_languages__pgMdQGex > .rb_container__B_HqgrcP > select.rb_fake-select___gu9vAk0 {
                    vertical-align: top;
                    min-width: 40px;
                    pointer-events: none
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk > .rb_content-body__Rl04Y73f {
                    position: relative;
                    min-height: 30px;
                    padding: 16px 5px
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk > .rb_content-body__Rl04Y73f > .rb_translated-from__Rg3Z4nYm {
                    position: absolute;
                    top: 4px;
                    right: 8px;
                    color: #2ec4b6;
                    font-size: 12px;
                    cursor: help
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk > .rb_content-body__Rl04Y73f > .rb_original__hd5JpXWz {
                    max-height: 116px;
                    margin-bottom: 7px;
                    padding: 0 8px;
                    font-style: italic;
                    word-break: break-word;
                    overflow: auto
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk > .rb_content-body__Rl04Y73f > .rb_original__hd5JpXWz > .rb_pronunciation-btn__qAkUd2ko {
                    display: inline-block;
                    width: 22px;
                    margin-right: 8px
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk > .rb_content-body__Rl04Y73f > .rb_original__hd5JpXWz > .rb_transcription-loader__tv6jbH4N {
                    height: 21px;
                    text-align: center;
                    cursor: help
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk > .rb_content-body__Rl04Y73f > .rb_original__hd5JpXWz > .rb_transcription-loader__tv6jbH4N > i {
                    position: absolute;
                    margin-top: 5px
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk > .rb_content-body__Rl04Y73f > .rb_original__hd5JpXWz > .rb_transcription__P98orgcx {
                    margin-top: 5px;
                    margin-left: 30px;
                    font-style: italic
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk > .rb_content-body__Rl04Y73f > .rb_translations__NEwzDOF1 {
                    max-height: 250px;
                    padding: 0 8px;
                    overflow: auto
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk > .rb_content-body__Rl04Y73f > .rb_translations__NEwzDOF1 > .rb_pos-wrapper__YCAl5mr7:not(:first-child) {
                    margin-top: 10px
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk > .rb_content-body__Rl04Y73f > .rb_translations__NEwzDOF1 > .rb_pos-wrapper__YCAl5mr7 > .rb_pos-header__EJHCOtCn {
                    display: flex;
                    border-bottom: 1px dotted #b8ebe6;
                    justify-content: flex-end;
                    color: #73d7ce;
                    font-size: .9em;
                    font-style: italic
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk > .rb_content-body__Rl04Y73f > .rb_translations__NEwzDOF1 > .rb_pos-wrapper__YCAl5mr7 > .rb_pos-header__EJHCOtCn > .rb_expand-terms__uhOWHm1t {
                    flex-grow: 1;
                    text-align: left
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk > .rb_content-body__Rl04Y73f > .rb_translations__NEwzDOF1 > .rb_pos-wrapper__YCAl5mr7 > .rb_pos-header__EJHCOtCn > .rb_expand-terms__uhOWHm1t > i.rb_upside-down__WSqjkAme:before {
                    transform: rotate(180deg);
                    display: inline-block
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk > .rb_content-body__Rl04Y73f > .rb_translations__NEwzDOF1 > .rb_pos-wrapper__YCAl5mr7 > .rb_pos-header__EJHCOtCn > .rb_expand-terms__uhOWHm1t > i:before {
                    margin: 0
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk > .rb_content-body__Rl04Y73f > .rb_translations__NEwzDOF1 > .rb_pos-wrapper__YCAl5mr7 > .rb_pos-header__EJHCOtCn > .rb_expand-terms__uhOWHm1t:hover, .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk > .rb_content-body__Rl04Y73f > .rb_translations__NEwzDOF1 > .rb_pos-wrapper__YCAl5mr7 > .rb_pos-header__EJHCOtCn > .rb_expand-terms__uhOWHm1t:focus {
                    color: #2ec4b6
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk > .rb_content-body__Rl04Y73f > .rb_translations__NEwzDOF1 > .rb_pos-wrapper__YCAl5mr7 > .rb_pos-header__EJHCOtCn > .rb_expand-terms__uhOWHm1t:hover > i, .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk > .rb_content-body__Rl04Y73f > .rb_translations__NEwzDOF1 > .rb_pos-wrapper__YCAl5mr7 > .rb_pos-header__EJHCOtCn > .rb_expand-terms__uhOWHm1t:focus > i {
                    transform: scale(1.2);
                    display: inline-block
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk > .rb_content-body__Rl04Y73f > .rb_translations__NEwzDOF1 > .rb_pos-wrapper__YCAl5mr7 > .rb_term-line__UgsirTav {
                    display: flex;
                    min-height: 28px;
                    padding: 4px 0;
                    align-items: center;
                    cursor: pointer
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk > .rb_content-body__Rl04Y73f > .rb_translations__NEwzDOF1 > .rb_pos-wrapper__YCAl5mr7 > .rb_term-line__UgsirTav > .rb_checkbox__o45yZbLM {
                    display: inline-flex;
                    width: 14px;
                    height: 14px;
                    margin-right: 5px;
                    border: 1px solid #011627;
                    border-radius: 2px;
                    outline: none;
                    flex-shrink: 0;
                    justify-content: center;
                    align-items: center
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk > .rb_content-body__Rl04Y73f > .rb_translations__NEwzDOF1 > .rb_pos-wrapper__YCAl5mr7 > .rb_term-line__UgsirTav > .rb_checkbox__o45yZbLM > i {
                    display: none;
                    color: #011627;
                    font-size: 11px
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk > .rb_content-body__Rl04Y73f > .rb_translations__NEwzDOF1 > .rb_pos-wrapper__YCAl5mr7 > .rb_term-line__UgsirTav > .rb_checkbox__o45yZbLM > i:before {
                    margin: 0
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk > .rb_content-body__Rl04Y73f > .rb_translations__NEwzDOF1 > .rb_pos-wrapper__YCAl5mr7 > .rb_term-line__UgsirTav > .rb_checkbox__o45yZbLM:focus {
                    border-color: #cc7f16
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk > .rb_content-body__Rl04Y73f > .rb_translations__NEwzDOF1 > .rb_pos-wrapper__YCAl5mr7 > .rb_term-line__UgsirTav > .rb_checkbox__o45yZbLM.rb_checked__mliZ5TaM > i {
                    display: inline
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk > .rb_content-body__Rl04Y73f > .rb_translations__NEwzDOF1 > .rb_pos-wrapper__YCAl5mr7 > .rb_term-line__UgsirTav:hover > .rb_checkbox__o45yZbLM {
                    box-shadow: inset 0 0 4px #73d7ce
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk > .rb_content-body__Rl04Y73f > .rb_translations__NEwzDOF1 > .rb_pos-wrapper__YCAl5mr7 > .rb_term-line__UgsirTav > .rb_term__X8n1Cmk0 {
                    min-height: 20px;
                    max-height: 116px;
                    flex-grow: 1;
                    word-break: break-word;
                    overflow: auto
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk > .rb_content-body__Rl04Y73f > .rb_translations__NEwzDOF1 > .rb_pos-wrapper__YCAl5mr7 > .rb_term-line__UgsirTav > input {
                    text-overflow: ellipsis;
                    white-space: nowrap;
                    overflow: hidden;
                    width: 0;
                    padding: 0;
                    border: none;
                    flex-grow: 1;
                    font-size: 15px;
                    line-height: 20px
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk > .rb_content-body__Rl04Y73f > .rb_translations__NEwzDOF1 > .rb_add-custom__WYhGEpDg {
                    display: flex;
                    width: 14px;
                    height: 14px;
                    margin-top: 7px;
                    border: 1px solid #011627;
                    border-radius: 2px;
                    outline: none;
                    justify-content: center;
                    align-items: center
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk > .rb_content-body__Rl04Y73f > .rb_translations__NEwzDOF1 > .rb_add-custom__WYhGEpDg > i {
                    color: #1f837a;
                    font-size: 10px
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk > .rb_content-body__Rl04Y73f > .rb_translations__NEwzDOF1 > .rb_add-custom__WYhGEpDg > i:before {
                    margin: 0
                }

                .rb_wrapper__ITM3k_JA > .rb_translation-popup__RzSFKJJk > .rb_content-body__Rl04Y73f > .rb_translations__NEwzDOF1 > .rb_add-custom__WYhGEpDg:focus {
                    border-color: #cc7f16
                }</style>
            <style>.rb_btn__nIvjkmLX:not(.rb_keep-cursor__PY5uQj5n) {
                    cursor: pointer
                }

                .rb_btn__nIvjkmLX:not(.rb_keep-cursor__PY5uQj5n).rb_disabled__JhfcPKo5 {
                    cursor: not-allowed
                }</style>
            <style>.icon-pencil:before {
                    content: ""
                }

                .icon-ok:before {
                    content: ""
                }

                .icon-ccw:before {
                    content: ""
                }

                .icon-globe:before {
                    content: ""
                }

                .icon-info-circled:before {
                    content: ""
                }

                .icon-cancel:before {
                    content: ""
                }

                .icon-edit:before {
                    content: ""
                }

                .icon-plus:before {
                    content: ""
                }

                .icon-bookmark:before {
                    content: ""
                }

                .icon-settings:before {
                    content: ""
                }

                .icon-down-1:before {
                    content: ""
                }

                .icon-up-1:before {
                    content: ""
                }

                .icon-heart:before {
                    content: ""
                }

                .icon-export:before {
                    content: ""
                }

                .icon-keyboard-2:before {
                    content: ""
                }

                .icon-ok-circled:before {
                    content: ""
                }

                .icon-cancel-circled:before {
                    content: ""
                }

                .icon-translate:before {
                    content: ""
                }

                .icon-anki:before {
                    content: ""
                }

                .icon-anki-1:before {
                    content: ""
                }

                .icon-acc-basic:before {
                    content: ""
                }

                .icon-acc-subscriber:before {
                    content: ""
                }

                .icon-rb-ico:before {
                    content: ""
                }

                .icon-cog:before {
                    content: ""
                }

                .icon-login:before {
                    content: ""
                }

                .icon-logout:before {
                    content: ""
                }

                .icon-arrow-down-bold:before {
                    content: ""
                }

                .icon-scissors:before {
                    content: ""
                }

                .icon-home:before {
                    content: ""
                }

                .icon-mute:before {
                    content: ""
                }

                .icon-sound:before {
                    content: ""
                }

                .icon-left-bold:before {
                    content: ""
                }

                .icon-down:before {
                    content: ""
                }

                .icon-up:before {
                    content: ""
                }

                .icon-switch:before {
                    content: ""
                }

                .icon-graduation-cap-1:before {
                    content: ""
                }

                .icon-floppy:before {
                    content: ""
                }

                .icon-facebook:before {
                    content: ""
                }

                .icon-webstore:before {
                    content: ""
                }

                .icon-mail:before {
                    content: ""
                }

                .icon-graduation-cap:before {
                    content: ""
                }

                .icon-emo-happy:before {
                    content: ""
                }

                .icon-emo-unhappy:before {
                    content: ""
                }

                .icon-spin1:before {
                    content: ""
                }

                .icon-link-ext:before {
                    content: ""
                }

                .icon-bookmark-empty:before {
                    content: ""
                }

                .icon-filter:before {
                    content: ""
                }

                .icon-paste:before {
                    content: ""
                }

                .icon-angle-double-left:before {
                    content: ""
                }

                .icon-angle-double-right:before {
                    content: ""
                }

                .icon-angle-left:before {
                    content: ""
                }

                .icon-angle-right:before {
                    content: ""
                }

                .icon-angle-down:before {
                    content: ""
                }

                .icon-info:before {
                    content: ""
                }

                .icon-minus-squared:before {
                    content: ""
                }

                .icon-export-alt:before {
                    content: ""
                }

                .icon-expand-right:before {
                    content: ""
                }

                .icon-plus-squared:before {
                    content: ""
                }

                .icon-language:before {
                    content: ""
                }

                .icon-sliders:before {
                    content: ""
                }

                .icon-trash:before {
                    content: ""
                }

                .icon-clone:before {
                    content: ""
                }

                .icon-question-circle-o:before {
                    content: ""
                }

                .icon-user-circle:before {
                    content: ""
                }

                .icon-twitter:before {
                    content: ""
                }

                .icon-gplus:before {
                    content: ""
                }

                .icon-linkedin:before {
                    content: ""
                }

                [class^=icon-]:before, [class*=" icon-"]:before {
                    display: inline-block;
                    width: 1em;
                    margin-right: .2em;
                    margin-left: .2em;
                    font-family: "rbicon";
                    font-variant: normal;
                    font-weight: normal;
                    font-style: normal;
                    text-transform: none;
                    text-align: center;
                    text-decoration: inherit;
                    -webkit-font-smoothing: antialiased;
                    speak: none
                }</style>
            <style>@keyframes rb_spin__mStYih5c {
                       from {
                           transform: rotate(0deg)
                       }
                       to {
                           transform: rotate(360deg)
                       }
                   }

                .rb_spin__mStYih5c {
                    display: inline-block;
                    font-size: 14px
                }

                :root:not([e2e]) .rb_spin__mStYih5c {
                    animation: rb_spin__mStYih5c 1s infinite linear
                }</style>
            <style>.rb_loading__xdjtryhI, .rb_loading__xdjtryhI > i {
                    cursor: wait
                }</style>
            <style>@keyframes rb_zoom-in-out__GjODFPIN {
                       0% {
                           transform: translateX(-50%) scale(0.9)
                       }
                       50% {
                           transform: translateX(-50%) scale(1.1)
                       }
                       100% {
                           transform: translateX(-50%) scale(1)
                       }
                   }

                .rb_bubble__XG8tV_49 {
                    position: absolute;
                    z-index: 1009;
                    transform: translateX(-50%);
                    width: 28px;
                    height: 28px;
                    border-radius: 4px;
                    box-shadow: 0 0 8px rgba(1, 22, 39, .3);
                    background-color: #2ec4b6;
                    animation: rb_zoom-in-out__GjODFPIN 200ms ease-out;
                    transition: box-shadow 150ms ease-out
                }

                .rb_bubble__XG8tV_49 > i {
                    display: inline-block;
                    width: 100%;
                    height: 100%;
                    color: #fdfffc;
                    font-size: 18px;
                    line-height: 28px;
                    text-align: center;
                    text-shadow: 0 1px #20897f
                }

                .rb_bubble__XG8tV_49 > i:before {
                    margin: 0
                }

                .rb_bubble__XG8tV_49:active > i {
                    text-shadow: 0 -1px #20897f
                }</style>
            <style>::-webkit-scrollbar {
                    width: 8px
                }

                ::-webkit-scrollbar-thumb {
                    border-radius: 8px;
                    background-color: rgba(0, 0, 0, .45)
                }

                main {
                    all: initial;
                    font-size: 16px;
                    font-family: Georgia, Trebuchet MS, Helvetica, Helvetica Neue;
                    -webkit-font-smoothing: antialiased
                }

                main[data-e2e] * {
                    transition: none !important;
                    animation: none !important
                }

                * {
                    box-sizing: border-box
                }

                input, button, select {
                    outline: none;
                    font-family: Georgia, Trebuchet MS, Helvetica, Helvetica Neue;
                    -webkit-font-smoothing: antialiased
                }</style>
        </template>
    </div>

@endsection
