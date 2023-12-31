<!-- start header -->
<header id="header">

    <!-- start app bar -->
    <div class="app-bar">
        <div class="app-bar-container">
            <div class="leading">
                <button class="btn btn-icon app-bar-desktop" id="btn_appbar_menu" aria-label="Open Menu">
                    <i class="icon-menu"></i>
                </button>
                <a href="./news" class="btn btn-icon app-bar-mobile" aria-label="back">
                    <i class="icon-arrow-left-1"></i>
                </a>
            </div>
            <div class="app-bar-title">
                <a href="./home" class="app-logo" aria-label="Liliana">
                    <img src="/storage/assets/img/lazy-trp-1x1.webp" class="lazy"
                         data-src="/storage/assets/img/logo.svg" width="88"
                         height="24" alt="liliana">
                    <noscript>
                        <img src="/storage/assets/img/logo.svg" width="88" height="24" alt="liliana">
                    </noscript>
                </a>
                <span class="app-bar-mobile">News Single</span>
            </div>
            <div class="actions">
                <div class="app-lang app-bar-desktop">
                    <a href="?locale=ja" class="btn btn-icon" aria-label="Change Language To Japane">
                        JP
                    </a>
                    <div class="divider"></div>
                    <a href="?locale=en" class="btn btn-icon active" aria-label="Change language To English">
                        EN
                    </a>
                </div>
                <button class="btn btn-icon app-bar-desktop" id="btn_appbar_bookmark" aria-label="Open Bookmark">
                    <i class="icon-archive-add"></i>
                    <span class="badge">2</span>
                </button>
                <button class="btn btn-icon app-bar-desktop" id="btn_appbar_search" aria-label="Open Search">
                    <i class="icon-search-normal"></i>
                </button>
                <button class="btn btn-icon app-bar-mobile g-share-button" aria-label="Share" data-title="News Single"
                        data-text="I have been a full-time housewife for 25 years, but started Instagram 2 years ago and have over 50,000 followers. I hope to share..."
                        data-url="/news-single">
                    <i class="icon-share"></i>
                </button>
                @auth()
                    <a href="{{route('dashboard-models')}}" class="user-dashboard">
                        <i class="icon-user"></i>
                        <img src="/storage/assets/img/lazy-1x1.webp" class="lazy"
                             data-src="/storage/assets/img/1x1/001.webp"
                             width="80" height="80" alt="Model">
                        <noscript>
                            <img src="/storage/assets/img/1x1/001.webp" width="80" height="80" alt="Model">
                        </noscript>
                    </a>
                @endauth
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
                            <li class="active"><a href="./home">{{__('menu.Home')}}</a></li>
                            <li><a href="./work">{{__('menu.Portfolio')}}</a></li>
                            <li><a href="./news-category">{{__('menu.News')}}</a></li>
                            <li><a href="./about-us">{{__('menu.About us')}}</a></li>
                            <li><a href="./contact-us">{{__('menu.Contact us')}}</a></li>
                            <li><a href="./company-profile">{{__('menu.Company Profile')}}</a></li>
                            <li><a href="./privacy-policy">{{__('menu.Privacy Policy')}}</a></li>
                        </ul>
                    </nav>

                    <!-- menu categories -->
                    <div class="menu-categories">
                        <div class="category">
                            <div class="category-title">{{__('menu.Model')}}</div>
                            <ul class="category-content">
                                <li><a href="./models-list">{{__('menu.All')}}</a></li>
                                <li><a href="./models-list">{{__('menu.Women')}}</a></li>
                                <li><a href="./models-list">{{__('menu.Men')}}</a></li>
                                <li><a href="./models-list">{{__('menu.Kids & Babies')}}</a></li>
                                <li><a href="./models-list">{{__('menu.Japanese')}}</a></li>
                                <li><a href="./models-list">{{__('menu.Mixed')}}</a></li>
                                <li><a href="./models-list">{{__('menu.International')}}</a></li>
                            </ul>
                        </div>
                        <div class="category">
                            <div class="category-title">{{__('menu.Talent')}}</div>
                            <ul class="category-content">
                                <li><a href="./models-list">{{__('menu.All')}}</a></li>
                                <li><a href="./models-list">{{__('menu.Women')}}</a></li>
                                <li><a href="./models-list">{{__('menu.Men')}}</a></li>
                                <li><a href="./models-list">{{__('menu.Kids')}}</a></li>
                                <li><a href="./models-list">{{__('menu.Japanese')}}</a></li>
                                <li><a href="./models-list">{{__('menu.Mixed')}}</a></li>
                                <li><a href="./models-list">{{__('menu.International')}}</a></li>
                            </ul>
                        </div>
                        <div class="category">
                            <div class="category-title">{{__('menu.Actor')}}</div>
                            <ul class="category-content">
                                <li><a href="./models-list">{{__('menu.All')}}</a></li>
                                <li><a href="./models-list">{{__('menu.Actors')}}</a></li>
                                <li><a href="./models-list">{{__('menu.Actresses')}}</a></li>
                                <li><a href="./models-list">{{__('menu.Kids')}}</a></li>
                                <li><a href="./models-list">{{__('menu.Japanese')}}</a></li>
                                <li><a href="./models-list">{{__('menu.Mixed')}}</a></li>
                                <li><a href="./models-list">{{__('menu.International')}}</a></li>
                            </ul>
                        </div>
                        <div class="category">
                            <div class="category-title">{{__('menu.Extra')}}</div>
                            <ul class="category-content">
                                <li><a href="./models-list">{{__('menu.All')}}</a></li>
                                <li><a href="./models-list">{{__('menu.Women')}}</a></li>
                                <li><a href="./models-list">{{__('menu.Men')}}</a></li>
                                <li><a href="./models-list">{{__('menu.Kids')}}</a></li>
                                <li><a href="./models-list">{{__('menu.Japanese')}}</a></li>
                                <li><a href="./models-list">{{__('menu.Mixed')}}</a></li>
                                <li><a href="./models-list">{{__('menu.International')}}</a></li>
                            </ul>
                        </div>
                    </div>

                </div>

                <!-- menu size -->
                <div class="menu-right-side">

                    <!-- side action -->
                    <div class="side-action">
                        @guest
                            <a href="{{route('become-a-model')}}" class="btn btn-icon-left">
                            <span>
                                <i class="icon-add"></i>
                                {{__('menu.Become Liliana')}}
                            </span>
                            </a>
                            <a href="{{route('login')}}" class="btn btn-primary btn-icon-left">
                            <span>
                                <i class="icon-log-in"></i>
                                {{__('menu.Login')}}
                            </span>
                            </a>
                        @else
                            <a href="#" class="dashboard">
                            <span>
                                {{trans('adminlte.full_name')}} : {{Auth::user()->name}}
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
                                <li id="tab_header_menu">
                                    {{__('menu.menu')}}
                                </li>
                                <li id="tab_header_categories">
                                    {{__('menu.categories')}}
                                </li>
                            </ul>
                            <div class="tabs-contents">
                                <div class="tab-content-item" data-tab-target="tab_header_menu">
                                    <nav class="menu-nav">
                                        <ul>
                                            <li><a href="./home">{{__('menu.Home')}}</a></li>
                                            <li><a href="./work">{{__('menu.Portfolio')}}</a></li>
                                            <li><a href="./news-category">{{__('menu.News')}}</a></li>
                                            <li><a href="./about-us">{{__('menu.About us')}}</a></li>
                                            <li><a href="./contact-us">{{__('menu.Contact us')}}</a></li>
                                            <li><a href="./company-profile">{{__('menu.Company Profile')}}</a></li>
                                            <li><a href="./privacy-policy">{{__('menu.Privacy Policy')}}</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="tab-content-item tab-category"
                                     data-tab-target="tab_header_categories">
                                    <div class="accordion">
                                        <div class="accordion-item">
                                            <button class="accordion-header">
                                                <span class="accordion-title">{{__('menu.Model')}}</span>
                                                <i class="icon-arrow-down"></i>
                                            </button>
                                            <div class="accordion-content">
                                                <ul>
                                                    <li><a href="./models-list">{{__('menu.All')}}</a></li>
                                                    <li><a href="./models-list">{{__('menu.Women')}}</a></li>
                                                    <li><a href="./models-list">{{__('menu.Men')}}</a></li>
                                                    <li><a href="./models-list">{{__('menu.Kids & Babies')}}</a></li>
                                                    <li><a href="./models-list">{{__('menu.Japanese')}}</a></li>
                                                    <li><a href="./models-list">{{__('menu.Mixed')}}</a></li>
                                                    <li><a href="./models-list">{{__('menu.International')}}</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <button class="accordion-header">
                                                <span class="accordion-title">{{__('menu.Talent')}}</span>
                                                <i class="icon-arrow-down"></i>
                                            </button>
                                            <div class="accordion-content">
                                                <ul>
                                                    <li><a href="./models-list">{{__('menu.All')}}</a></li>
                                                    <li><a href="./models-list">{{__('menu.Women')}}</a></li>
                                                    <li><a href="./models-list">{{__('menu.Men')}}</a></li>
                                                    <li><a href="./models-list">{{__('menu.Kids')}}</a></li>
                                                    <li><a href="./models-list">{{__('menu.Japanese')}}</a></li>
                                                    <li><a href="./models-list">{{__('menu.Mixed')}}</a></li>
                                                    <li><a href="./models-list">{{__('menu.International')}}</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <button class="accordion-header">
                                                <span class="accordion-title">{{__('menu.Actor')}}</span>
                                                <i class="icon-arrow-down"></i>
                                            </button>
                                            <div class="accordion-content">
                                                <ul>
                                                    <li><a href="./models-list">{{__('menu.All')}}</a></li>
                                                    <li><a href="./models-list">{{__('menu.Actors')}}</a></li>
                                                    <li><a href="./models-list">{{__('menu.Actresses')}}</a></li>
                                                    <li><a href="./models-list">{{__('menu.Kids')}}</a></li>
                                                    <li><a href="./models-list">{{__('menu.Japanese')}}</a></li>
                                                    <li><a href="./models-list">{{__('menu.Mixed')}}</a></li>
                                                    <li><a href="./models-list">{{__('menu.International')}}</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <button class="accordion-header">
                                                <span class="accordion-title">{{__('menu.Extra')}}</span>
                                                <i class="icon-arrow-down"></i>
                                            </button>
                                            <div class="accordion-content">
                                                <ul>
                                                    <li><a href="./models-list">{{__('menu.All')}}</a></li>
                                                    <li><a href="./models-list">{{__('menu.Women')}}</a></li>
                                                    <li><a href="./models-list">{{__('menu.Men')}}</a></li>
                                                    <li><a href="./models-list">{{__('menu.Kids')}}</a></li>
                                                    <li><a href="./models-list">{{__('menu.Japanese')}}</a></li>
                                                    <li><a href="./models-list">{{__('menu.Mixed')}}</a></li>
                                                    <li><a href="./models-list">{{__('menu.International')}}</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        @auth()
                            <div class="user-account-mini">
                                <img src="/storage/assets/img/lazy-1x1.webp" class="lazy"
                                     data-src="/storage/assets/img/1x1/001.webp"
                                     width="80" height="80" alt="Model">
                                <noscript>
                                    <img src="/storage/assets/img/1x1/001.webp" width="80" height="80" alt="Model">
                                </noscript>
                                <div class="user-content">
                                    <div class="user-display-name">{{trans('adminlte.full_name')}}
                                        : {{Auth::user()->name}}</div>
                                    <a href="{{route('dashboard-models')}}">
                                        {{__('menu.Go to Dashboard')}}
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        @else
                            <a href="{{route('login')}}" class="btn btn-primary btn-full">{{__('menu.Login')}}</a>
                            <a href="{{route('become-a-model')}}" class="btn btn-full">{{__('menu.Become Liliana')}}</a>
                        @endauth
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
                <span>{{__('menu.All Recent Deleted')}}</span>
                <button type="button" id="btn_undo_search_recent">
                    {{__('menu.Undo')}}
                    <i class="icon-rotate-ccw-converted"></i>
                </button>
            </div>
            <div class="recent-search-section">
                <div class="recent-model-heading">
                    <span>{{__('menu.Recent Searches')}}</span>
                    <a href="#" id="btn_clear_search_recent">{{__('menu.Clear All')}}</a>
                </div>
                <div class="recent-model">
                    <a href="./model-page">
                        <img src="/storage/assets/img/lazy-3x4.webp" class="lazy"
                             data-src="/storage/assets/img/3x4/012.webp"
                             width="120" height="160" alt="Model">
                        <noscript>
                            <img src="/storage/assets/img/3x4/012.webp" width="120" height="160" alt="Model">
                        </noscript>
                        <span>Maaya</span>
                    </a>
                    <a href="./model-page">
                        <img src="/storage/assets/img/lazy-3x4.webp" class="lazy"
                             data-src="/storage/assets/img/3x4/011.webp"
                             width="120" height="160" alt="Model">
                        <noscript>
                            <img src="/storage/assets/img/3x4/011.webp" width="120" height="160" alt="Model">
                        </noscript>
                        <span>Soya</span>
                    </a>
                    <a href="./model-page">
                        <div class="replacement-box">
                            <i class="icon-gallery"></i>
                        </div>
                        <span>Mikel</span>
                    </a>
                    <a href="./model-page">
                        <img src="/storage/assets/img/lazy-3x4.webp" class="lazy"
                             data-src="/storage/assets/img/3x4/028.webp"
                             width="120" height="160" alt="Model">
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
                    <a href="./model-page">
                        <img src="/storage/assets/img/lazy-1x1.webp" class="lazy"
                             data-src="/storage/assets/img/1x1/003.webp"
                             width="80" height="80" alt="model">
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
                    <a href="./model-page">
                        <img src="/storage/assets/img/lazy-1x1.webp" class="lazy"
                             data-src="/storage/assets/img/1x1/004.webp"
                             width="80" height="80" alt="model">
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
                    <a href="./model-page">
                        <img src="/storage/assets/img/lazy-1x1.webp" class="lazy"
                             data-src="/storage/assets/img/1x1/005.webp"
                             width="80" height="80" alt="model">
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
            <a href="./models-list" class="more-result">
                See All 25 Results
                <i class="icon-arrow-right"></i>
            </a>
        </div>

    </div>

    <!-- start overlay -->
    <div class="overlay"></div>

</header>

