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
                    <img src="/storage/assets/img/logo-white.svg" class="lazy lz-entered lz-loaded"
                         data-src="/storage/assets/img/logo-white.svg" width="88" height="24" alt="liliana"
                         data-ll-status="loaded">
                    <noscript>
                        <img src="/storage/assets/img/logo-white.svg" width="88" height="24" alt="liliana">
                    </noscript>
                </a>
                <h1 class="app-bar-title-hidden">{{__('menu.Liliana Models')}}</h1>
            </div>
            <div class="actions">
                <div class="app-lang">
                    <a href="/?locale=ja" class="btn btn-icon
                     @if(App::getLocale() == 'ja')
                     active
                    @endif
                    " aria-label="Change Language To Japane">
                        JP
                    </a>
                    <div class="divider"></div>
                    <a href="/?locale=en" class="btn btn-icon
                     @if(App::getLocale() == 'en')
                     active
                    @endif
                    " aria-label="Change language To English">
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
                @guest
                @else
                    <a href="/dashboard-models/" class="user-dashboard">
                        <i class="icon-user"></i>
                        <!--                    <img src="/storage/assets/img/lazy-1x1.webp" class="lazy" data-src="/storage/assets/img/1x1/001.webp"-->
                        <!--                         width="80" height="80" alt="Model">-->
                        <!--                    <noscript>-->
                        <!--                        <img src="/storage/assets/img/1x1/001.webp" width="80" height="80" alt="Model">-->
                        <!--                    </noscript>-->
                    </a>
                @endguest
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
                            <li class="active"><a href="/">{{__('menu.Home')}}</a></li>
                            <li><a href="work">{{__('menu.Portfolio')}}</a></li>
                            <li><a href="news-category">{{__('menu.News')}}</a></li>
                            <li><a href="about-us">{{__('menu.About us')}}</a></li>
                            <li><a href="contact-us">{{__('menu.Contact us')}}</a></li>
                            <li><a href="company-profile">{{__('menu.Company Profile')}}</a></li>
                            <li><a href="privacy-policy">{{__('menu.Privacy Policy')}}</a></li>
                        </ul>
                    </nav>

                    <!-- menu categories -->
                    <div class="menu-categories">
                        <div class="category">
                            <div class="category-title">{{__('menu.Model')}}</div>
                            <ul class="category-content">
                                <li><a href="models-list">{{__('menu.All')}}</a></li>
                                <li><a href="models-list">{{__('menu.Women')}}</a></li>
                                <li><a href="models-list">{{__('menu.Men')}}</a></li>
                                <li><a href="models-list">{{__('menu.Kids & Babies')}}</a></li>
                                <li><a href="models-list">{{__('menu.Japanese')}}</a></li>
                                <li><a href="models-list">{{__('menu.Mixed')}}</a></li>
                                <li><a href="models-list">{{__('menu.International')}}</a></li>
                            </ul>
                        </div>
                        <div class="category">
                            <div class="category-title">{{__('menu.Talent')}}</div>
                            <ul class="category-content">
                                <li><a href="models-list">{{__('menu.All')}}</a></li>
                                <li><a href="models-list">{{__('menu.Women')}}</a></li>
                                <li><a href="models-list">{{__('menu.Men')}}</a></li>
                                <li><a href="models-list">{{__('menu.Kids')}}</a></li>
                                <li><a href="models-list">{{__('menu.Japanese')}}</a></li>
                                <li><a href="models-list">{{__('menu.Mixed')}}</a></li>
                                <li><a href="models-list">{{__('menu.International')}}</a></li>
                            </ul>
                        </div>
                        <div class="category">
                            <div class="category-title">{{__('menu.Actor')}}</div>
                            <ul class="category-content">
                                <li><a href="models-list">{{__('menu.All')}}</a></li>
                                <li><a href="models-list">{{__('menu.Actors')}}</a></li>
                                <li><a href="models-list">{{__('menu.Actresses')}}</a></li>
                                <li><a href="models-list">{{__('menu.Kids')}}</a></li>
                                <li><a href="models-list">{{__('menu.Japanese')}}</a></li>
                                <li><a href="models-list">{{__('menu.Mixed')}}</a></li>
                                <li><a href="models-list">{{__('menu.International')}}</a></li>
                            </ul>
                        </div>
                        <div class="category">
                            <div class="category-title">{{__('menu.Extra')}}</div>
                            <ul class="category-content">
                                <li><a href="models-list">{{__('menu.All')}}</a></li>
                                <li><a href="models-list">{{__('menu.Women')}}</a></li>
                                <li><a href="models-list">{{__('menu.Men')}}</a></li>
                                <li><a href="models-list">{{__('menu.Kids')}}</a></li>
                                <li><a href="models-list">{{__('menu.Japanese')}}</a></li>
                                <li><a href="models-list">{{__('menu.Mixed')}}</a></li>
                                <li><a href="models-list">{{__('menu.International')}}</a></li>
                            </ul>
                        </div>
                    </div>

                </div>

                <!-- menu size -->
                <div class="menu-right-side">

                    <!-- side action -->
                    <div class="side-action">
                        @guest
                            <a href="/register" class="btn btn-icon-left">
                            <span>
                                <i class="icon-add"></i>
                                {{__('menu.Become Liliana')}}
                            </span>
                            </a>
                            <a href="login" class="btn btn-primary btn-icon-left">
                            <span>
                                <i class="icon-log-in"></i>
                                {{__('menu.Login')}}
                            </span>
                            </a>
                        @else
                            <a href="/#" class="dashboard">
                            <span>
                               {{trans('adminlte.full_name')}} :  {{Auth::user()->name}}
                                <i class="icon-arrow-right"></i>
                            </span>
                            </a>
                            <a href="/logout" class="logout">
                            <span>
                                {{__('menu.Logout')}}
                                <i class="icon-logout"></i>
                            </span>
                            </a>
                        @endguest
                    </div>

                    <!-- side info -->
                    <div class="side-info">
                        <ul>
                            <li>
                                <i class="icon-call"></i>
                                <a href="tel:+81-3-6362-3355">@if(App::getLocale() != 'ja')
                                   +81-
                                @endif
                                3-6362-3355</a>
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
                                    {{__('menu.menu')}}
                                </li>
                                <li id="tab_header_categories">
                                    {{__('menu.categories')}}
                                </li>
                            </ul>
                            <div class="tabs-contents">
                                <div class="tab-content-item active" data-tab-target="tab_header_menu">
                                    <nav class="menu-nav">
                                        <ul>
                                            <li><a href="/">{{__('menu.Home')}}</a></li>
                                            <li><a href="work">{{__('menu.Portfolio')}}</a></li>
                                            <li><a href="news-category">{{__('menu.News')}}</a></li>
                                            <li><a href="about-us">{{__('menu.About us')}}</a></li>
                                            <li><a href="contact-us">{{__('menu.Contact us')}}</a></li>
                                            <li><a href="company-profile">{{__('menu.Company Profile')}}</a></li>
                                            <li><a href="privacy-policy">{{__('menu.Privacy Policy')}}</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="tab-content-item tab-category" data-tab-target="tab_header_categories">
                                    <div class="accordion">
                                        <div class="accordion-item">
                                            <button class="accordion-header">
                                                <span class="accordion-title">{{__('menu.Model')}}</span>
                                                <i class="icon-arrow-down"></i>
                                            </button>
                                            <div class="accordion-content" style="display: none;">
                                                <ul>
                                                    <li><a href="models-list">{{__('menu.All')}}</a></li>
                                                    <li><a href="models-list">{{__('menu.Women')}}</a></li>
                                                    <li><a href="models-list">{{__('menu.Men')}}</a></li>
                                                    <li><a href="models-list">{{__('menu.Kids & Babies')}}</a></li>
                                                    <li><a href="models-list">{{__('menu.Japanese')}}</a></li>
                                                    <li><a href="models-list">{{__('menu.Mixed')}}</a></li>
                                                    <li><a href="models-list">{{__('menu.International')}}</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <button class="accordion-header">
                                                <span class="accordion-title">{{__('menu.Talent')}}</span>
                                                <i class="icon-arrow-down"></i>
                                            </button>
                                            <div class="accordion-content" style="display: none;">
                                                <ul>
                                                    <li><a href="models-list">{{__('menu.All')}}</a></li>
                                                    <li><a href="models-list">{{__('menu.Women')}}</a></li>
                                                    <li><a href="models-list">{{__('menu.Men')}}</a></li>
                                                    <li><a href="models-list">{{__('menu.Kids')}}</a></li>
                                                    <li><a href="models-list">{{__('menu.Japanese')}}</a></li>
                                                    <li><a href="models-list">{{__('menu.Mixed')}}</a></li>
                                                    <li><a href="models-list">{{__('menu.International')}}</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <button class="accordion-header">
                                                <span class="accordion-title">{{__('menu.Actor')}}</span>
                                                <i class="icon-arrow-down"></i>
                                            </button>
                                            <div class="accordion-content" style="display: none;">
                                                <ul>
                                                    <li><a href="models-list">{{__('menu.All')}}</a></li>
                                                    <li><a href="models-list">{{__('menu.Actors')}}</a></li>
                                                    <li><a href="models-list">{{__('menu.Actresses')}}</a></li>
                                                    <li><a href="models-list">{{__('menu.Kids')}}</a></li>
                                                    <li><a href="models-list">{{__('menu.Japanese')}}</a></li>
                                                    <li><a href="models-list">{{__('menu.Mixed')}}</a></li>
                                                    <li><a href="models-list">{{__('menu.International')}}</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <button class="accordion-header">
                                                <span class="accordion-title">{{__('menu.Extra')}}</span>
                                                <i class="icon-arrow-down"></i>
                                            </button>
                                            <div class="accordion-content" style="display: none;">
                                                <ul>
                                                    <li><a href="models-list">{{__('menu.All')}}</a></li>
                                                    <li><a href="models-list">{{__('menu.Women')}}</a></li>
                                                    <li><a href="models-list">{{__('menu.Men')}}</a></li>
                                                    <li><a href="models-list">{{__('menu.Kids')}}</a></li>
                                                    <li><a href="models-list">{{__('menu.Japanese')}}</a></li>
                                                    <li><a href="models-list">{{__('menu.Mixed')}}</a></li>
                                                    <li><a href="models-list">{{__('menu.International')}}</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        @guest
                        @else
                            <div class="user-account-mini">
                                <img src="/storage/assets/img/lazy-1x1.webp" class="lazy"
                                     data-src="/storage/assets/img/1x1/001.webp" width="80" height="80" alt="Model">
                                <noscript>
                                    <img src="/storage/assets/img/1x1/001.webp" width="80" height="80" alt="Model">
                                </noscript>
                                <div class="user-content">
                                    <div class="user-display-name">{{trans('adminlte.full_name')}} : {{Auth::user()->name}}</div>
                                    <a href="/dashboard-models/">
                                        {{__('menu.Go to Dashboard')}}
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        @endguest
                        @guest
                            <a href="login" class="btn btn-primary btn-full">{{__('menu.Login')}}</a>
                            <a href="/register" class="btn btn-full">{{__('menu.Become Liliana')}}</a>
                        @endguest
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
                    <form action="{{ route('models-list') }}" method="post">
                        @csrf
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
                    {{__('menu.Undo')}}
                    <i class="icon-rotate-ccw-converted"></i>
                </button>
            </div>
            <div class="recent-search-section">
                <div class="recent-model-heading">
                    <span>{{__('menu.Recent Searches')}}</span>
                    <a href="/#" id="btn_clear_search_recent">{{__('menu.Clear All')}}</a>
                </div>
                <div class="recent-model">
                    <a href="model-page">
                        <img src="/storage/assets/img/slider/012.webp" class="lazy lz-entered lz-loaded"
                             data-src="/storage/assets/img/3x4/012.webp" width="120" height="160" alt="Model"
                             data-ll-status="loaded">
                        <noscript>
                            <img src="/storage/assets/img/3x4/012.webp" width="120" height="160" alt="Model">
                        </noscript>
                        <span>Maaya</span>
                    </a>
                    <a href="model-page">
                        <img src="/storage/assets/img/slider/011.webp" class="lazy lz-entered lz-loaded"
                             data-src="/storage/assets/img/3x4/011.webp" width="120" height="160" alt="Model"
                             data-ll-status="loaded">
                        <noscript>
                            <img src="/storage/assets/img/3x4/011.webp" width="120" height="160" alt="Model">
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
                        <img src="/storage/assets/img/slider/028.webp" class="lazy lz-entered lz-loaded"
                             data-src="/storage/assets/img/3x4/028.webp" width="120" height="160" alt="Model"
                             data-ll-status="loaded">
                        <noscript>
                            <img src="/storage/assets/img/3x4/028.webp" width="120" height="160" alt="Model">
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
                        <img src="/storage/assets/img/lazy-1x1.webp" class="lazy"
                             data-src="/storage/assets/img/1x1/003.webp" width="80" height="80" alt="model">
                        <noscript>
                            <img src="/storage/assets/img/1x1/005.webp" width="80" height="80" alt="model">
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
                        <img src="/storage/assets/img/slider/004.webp" class="lazy lz-entered lz-loaded"
                             data-src="/storage/assets/img/1x1/004.webp" width="80" height="80" alt="model"
                             data-ll-status="loaded">
                        <noscript>
                            <img src="/storage/assets/img/1x1/005.webp" width="80" height="80" alt="model">
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
                        <img src="/storage/assets/img/slider/005.webp" class="lazy lz-entered lz-loaded"
                             data-src="/storage/assets/img/1x1/005.webp" width="80" height="80" alt="model"
                             data-ll-status="loaded">
                        <noscript>
                            <img src="/storage/assets/img/1x1/005.webp" width="80" height="80" alt="model">
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
                {{__('menu.See All 25 Results')}}
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
                        <meta itemprop="image" content="/storage/assets/img/3x4/007.webp">
                        <img src="/storage/assets/img/slider/007.webp" class="lazy lz-entered lz-loaded"
                             data-src="/storage/assets/img/3x4/007.webp" width="200" height="260" alt="model"
                             data-ll-status="loaded">
                        <noscript>
                            <img src="/storage/assets/img/3x4/007.webp" width="200" height="260" alt="model">
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
                        <meta itemprop="image" content="/storage/assets/img/3x4/017.webp">
                        <img src="/storage/assets/img/slider/017.webp" class="lazy lz-entered lz-loaded"
                             data-src="/storage/assets/img/3x4/017.webp" width="200" height="260" alt="model"
                             data-ll-status="loaded">
                        <noscript>
                            <img src="/storage/assets/img/3x4/017.webp" width="200" height="260" alt="model">
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
                        <meta itemprop="image" content="/storage/assets/img/3x4/027.webp">
                        <img src="/storage/assets/img/slider/027.webp" class="lazy lz-entered lz-loaded"
                             data-src="/storage/assets/img/3x4/027.webp" width="200" height="260" alt="model"
                             data-ll-status="loaded">
                        <noscript>
                            <img src="/storage/assets/img/3x4/027.webp" width="200" height="260" alt="model">
                        </noscript>
                        <div class="card-metas">
                            <span class="meta-item">{{__('menu.New Face')}}</span>
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
                        <meta itemprop="image" content="/storage/assets/img/3x4/021.webp">
                        <img src="/storage/assets/img/slider/021.webp" class="lazy lz-entered lz-loaded"
                             data-src="/storage/assets/img/3x4/021.webp" width="200" height="260" alt="model"
                             data-ll-status="loaded">
                        <noscript>
                            <img src="/storage/assets/img/3x4/021.webp" width="200" height="260" alt="model">
                        </noscript>
                        <div class="card-metas">
                            <span class="meta-item">{{__('menu.New Face')}}</span>
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
                        <meta itemprop="image" content="/storage/assets/img/3x4/025.webp">
                        <img src="/storage/assets/img/slider/025.webp" class="lazy lz-entered lz-loaded"
                             data-src="/storage/assets/img/3x4/025.webp" width="200" height="260" alt="model"
                             data-ll-status="loaded">
                        <noscript>
                            <img src="/storage/assets/img/3x4/025.webp" width="200" height="260" alt="model">
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
                        <meta itemprop="image" content="/storage/assets/img/3x4/024.webp">
                        <img src="/storage/assets/img/slider/024.webp" class="lazy lz-entered lz-loaded"
                             data-src="/storage/assets/img/3x4/024.webp" width="200" height="260" alt="model"
                             data-ll-status="loaded">
                        <noscript>
                            <img src="/storage/assets/img/3x4/024.webp" width="200" height="260" alt="model">
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
            <a href="models-list" class="btn btn-full">{{__('menu.Hire Some Models')}}</a>
            <a href="bookmark-select-models" class="btn btn-primary btn-full">
                {{__('menu.Hire All Models')}}
            </a>
        </div>
    </div>

    <!-- start overlay -->
    <div class="overlay"></div>

</header>

