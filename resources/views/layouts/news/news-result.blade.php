@extends('layouts.news.layout-news')

@section('content-news')


    <!-- start main -->
    <main>
        <div id="content">

            <!-- start breadcrumb -->
            <div class="page-breadcrumb">
                <div class="container-xxl">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./home">{{__('menu.Home')}}</a></li>
                            <li class="breadcrumb-item"><a href="./news-category">{{__('menu.news')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Aline R News</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <!-- start page title -->
            <div class="page-title">
                <div class="container-xxl">
                    <h1>Aline R News</h1>
                </div>
            </div>

            <!-- start news -->
            <section class="section section-news" itemscope itemtype="https://schema.org/Collection">
                <div class="container-xxl">
                    <div class="heading-box heading-news filter-area" data-active-filter="all" data-auto-size="true" data-col="1.25">
                        <div class="heading-content" id="result_news_content">
                            <div class="filter-item" data-filter="model,talent">
                                <article class="news-card" itemscope itemtype="https://schema.org/NewsArticle"
                                         itemprop="hasPart">
                                    <div class="card-thumbnail">
                                        <meta itemprop="thumbnailUrl" content="/storage/assets/img/news/news-003.webp">
                                        <a href="./news-single">
                                            <img src="/storage/assets/img/lazy-1.7x1.webp" class="card-thumbnail-image lazy"
                                                 data-src="/storage/assets/img/news/news-003.webp" width="312" height="177"
                                                 alt="news title">
                                            <noscript>
                                                <img src="/storage/assets/img/news/news-003.webp" class="card-thumbnail-image"
                                                     width="312" height="177" alt="news title">
                                            </noscript>
                                        </a>
                                    </div>
                                    <div class="card-content">
                                        <h2 class="card-title" itemprop="name"><a href="./news-single" itemprop="url">News Title</a></h2>
                                        <div class="card-author" itemprop="author">
                                            <i class="icon-user"></i>
                                            <a href="./news-single">Admin</a>
                                        </div>
                                        <div class="card-date">
                                            <i class="icon-clock"></i>
                                            <meta itemprop="datePublished" content="2022-04-29">
                                            <time datetime="2022-04-29">29th April 2022</time>
                                        </div>
                                        <div class="card-description" itemprop="description">
                                            I have been a full-time housewife for 25 years, but started Instagram 2 years
                                            ago and have over 50,000 followers. I hope to share with young girls and.
                                        </div>
                                        <div class="card-category">
                                            <a href="./news-category">Fashion</a>
                                            <a href="./news-category">Modeling</a>
                                            <a href="./news-category">New Face</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="filter-item" data-filter="model">
                                <article class="news-card" itemscope itemtype="https://schema.org/NewsArticle"
                                         itemprop="hasPart">
                                    <div class="card-thumbnail">
                                        <meta itemprop="thumbnailUrl" content="/storage/assets/img/news/news-004.webp">
                                        <a href="./news-single">
                                            <img src="/storage/assets/img/lazy-1.7x1.webp" class="card-thumbnail-image lazy"
                                                 data-src="/storage/assets/img/news/news-004.webp" width="312" height="177"
                                                 alt="news title">
                                            <noscript>
                                                <img src="/storage/assets/img/news/news-004.webp" class="card-thumbnail-image"
                                                     width="312" height="177" alt="news title">
                                            </noscript>
                                        </a>
                                    </div>
                                    <div class="card-content">
                                        <h2 class="card-title" itemprop="name"><a href="./news-single" itemprop="url">News Title</a></h2>
                                        <div class="card-author" itemprop="author">
                                            <i class="icon-user"></i>
                                            <a href="./news-single">Admin</a>
                                        </div>
                                        <div class="card-date">
                                            <i class="icon-clock"></i>
                                            <meta itemprop="datePublished" content="2022-04-29">
                                            <time datetime="2022-04-29">29th April 2022</time>
                                        </div>
                                        <div class="card-description" itemprop="description">
                                            I have been a full-time housewife for 25 years, but started Instagram 2 years
                                            ago and have over 50,000 followers. I hope to share with young girls and.
                                        </div>
                                        <div class="card-category">
                                            <a href="./news-category">Fashion</a>
                                            <a href="./news-category">Modeling</a>
                                            <a href="./news-category">New Face</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="filter-item" data-filter="model,talent">
                                <article class="news-card" itemscope itemtype="https://schema.org/NewsArticle"
                                         itemprop="hasPart">
                                    <div class="card-thumbnail">
                                        <meta itemprop="thumbnailUrl" content="/storage/assets/img/news/news-005.webp">
                                        <a href="./news-single">
                                            <img src="/storage/assets/img/lazy-1.7x1.webp" class="card-thumbnail-image lazy"
                                                 data-src="/storage/assets/img/news/news-005.webp" width="312" height="177"
                                                 alt="news title">
                                            <noscript>
                                                <img src="/storage/assets/img/news/news-005.webp" class="card-thumbnail-image"
                                                     width="312" height="177" alt="news title">
                                            </noscript>
                                        </a>
                                    </div>
                                    <div class="card-content">
                                        <h2 class="card-title" itemprop="name"><a href="./news-single" itemprop="url">News Title</a></h2>
                                        <div class="card-author" itemprop="author">
                                            <i class="icon-user"></i>
                                            <a href="./news-single">Admin</a>
                                        </div>
                                        <div class="card-date">
                                            <i class="icon-clock"></i>
                                            <meta itemprop="datePublished" content="2022-04-29">
                                            <time datetime="2022-04-29">29th April 2022</time>
                                        </div>
                                        <div class="card-description" itemprop="description">
                                            I have been a full-time housewife for 25 years, but started Instagram 2 years
                                            ago and have over 50,000 followers. I hope to share with young girls and.
                                        </div>
                                        <div class="card-category">
                                            <a href="./news-category">Fashion</a>
                                            <a href="./news-category">Modeling</a>
                                            <a href="./news-category">New Face</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="filter-item" data-filter="model">
                                <article class="news-card" itemscope itemtype="https://schema.org/NewsArticle"
                                         itemprop="hasPart">
                                    <div class="card-thumbnail">
                                        <meta itemprop="thumbnailUrl" content="/storage/assets/img/news/news-006.webp">
                                        <a href="./news-single">
                                            <img src="/storage/assets/img/lazy-1.7x1.webp" class="card-thumbnail-image lazy"
                                                 data-src="/storage/assets/img/news/news-006.webp" width="312" height="177"
                                                 alt="news title">
                                            <noscript>
                                                <img src="/storage/assets/img/news/news-006.webp" class="card-thumbnail-image"
                                                     width="312" height="177" alt="news title">
                                            </noscript>
                                        </a>
                                    </div>
                                    <div class="card-content">
                                        <h2 class="card-title" itemprop="name"><a href="./news-single" itemprop="url">News Title</a></h2>
                                        <div class="card-author" itemprop="author">
                                            <i class="icon-user"></i>
                                            <a href="./news-single">Admin</a>
                                        </div>
                                        <div class="card-date">
                                            <i class="icon-clock"></i>
                                            <meta itemprop="datePublished" content="2022-04-29">
                                            <time datetime="2022-04-29">29th April 2022</time>
                                        </div>
                                        <div class="card-description" itemprop="description">
                                            I have been a full-time housewife for 25 years, but started Instagram 2 years
                                            ago and have over 50,000 followers. I hope to share with young girls and.
                                        </div>
                                        <div class="card-category">
                                            <a href="./news-category">Fashion</a>
                                            <a href="./news-category">Modeling</a>
                                            <a href="./news-category">New Face</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="filter-item" data-filter="model,talent">
                                <article class="news-card" itemscope itemtype="https://schema.org/NewsArticle"
                                         itemprop="hasPart">
                                    <div class="card-thumbnail">
                                        <meta itemprop="thumbnailUrl" content="/storage/assets/img/news/news-007.webp">
                                        <a href="./news-single">
                                            <img src="/storage/assets/img/lazy-1.7x1.webp" class="card-thumbnail-image lazy"
                                                 data-src="/storage/assets/img/news/news-007.webp" width="312" height="177"
                                                 alt="news title">
                                            <noscript>
                                                <img src="/storage/assets/img/news/news-007.webp" class="card-thumbnail-image"
                                                     width="312" height="177" alt="news title">
                                            </noscript>
                                        </a>
                                    </div>
                                    <div class="card-content">
                                        <h2 class="card-title" itemprop="name"><a href="./news-single" itemprop="url">News Title</a></h2>
                                        <div class="card-author" itemprop="author">
                                            <i class="icon-user"></i>
                                            <a href="./news-single">Admin</a>
                                        </div>
                                        <div class="card-date">
                                            <i class="icon-clock"></i>
                                            <meta itemprop="datePublished" content="2022-04-29">
                                            <time datetime="2022-04-29">29th April 2022</time>
                                        </div>
                                        <div class="card-description" itemprop="description">
                                            I have been a full-time housewife for 25 years, but started Instagram 2 years
                                            ago and have over 50,000 followers. I hope to share with young girls and.
                                        </div>
                                        <div class="card-category">
                                            <a href="./news-category">Fashion</a>
                                            <a href="./news-category">Modeling</a>
                                            <a href="./news-category">New Face</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="filter-item" data-filter="model">
                                <article class="news-card" itemscope itemtype="https://schema.org/NewsArticle"
                                         itemprop="hasPart">
                                    <div class="card-thumbnail">
                                        <meta itemprop="thumbnailUrl" content="/storage/assets/img/news/news-008.webp">
                                        <a href="./news-single">
                                            <img src="/storage/assets/img/lazy-1.7x1.webp" class="card-thumbnail-image lazy"
                                                 data-src="/storage/assets/img/news/news-008.webp" width="312" height="177"
                                                 alt="news title">
                                            <noscript>
                                                <img src="/storage/assets/img/news/news-008.webp" class="card-thumbnail-image"
                                                     width="312" height="177" alt="news title">
                                            </noscript>
                                        </a>
                                    </div>
                                    <div class="card-content">
                                        <h2 class="card-title" itemprop="name"><a href="./news-single" itemprop="url">News Title</a></h2>
                                        <div class="card-author" itemprop="author">
                                            <i class="icon-user"></i>
                                            <a href="./news-single">Admin</a>
                                        </div>
                                        <div class="card-date">
                                            <i class="icon-clock"></i>
                                            <meta itemprop="datePublished" content="2022-04-29">
                                            <time datetime="2022-04-29">29th April 2022</time>
                                        </div>
                                        <div class="card-description" itemprop="description">
                                            I have been a full-time housewife for 25 years, but started Instagram 2 years
                                            ago and have over 50,000 followers. I hope to share with young girls and.
                                        </div>
                                        <div class="card-category">
                                            <a href="./news-category">Fashion</a>
                                            <a href="./news-category">Modeling</a>
                                            <a href="./news-category">New Face</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="filter-item" data-filter="model,actor">
                                <article class="news-card" itemscope itemtype="https://schema.org/NewsArticle"
                                         itemprop="hasPart">
                                    <div class="card-thumbnail">
                                        <meta itemprop="thumbnailUrl" content="/storage/assets/img/news/news-002.webp">
                                        <a href="./news-single">
                                            <img src="/storage/assets/img/lazy-1.7x1.webp" class="card-thumbnail-image lazy"
                                                 data-src="/storage/assets/img/news/news-002.webp" width="312" height="177"
                                                 alt="news title">
                                            <noscript>
                                                <img src="/storage/assets/img/news/news-002.webp" class="card-thumbnail-image"
                                                     width="312" height="177" alt="news title">
                                            </noscript>
                                        </a>
                                    </div>
                                    <div class="card-content">
                                        <h2 class="card-title" itemprop="name"><a href="./news-single" itemprop="url">News Title</a></h2>
                                        <div class="card-author" itemprop="author">
                                            <i class="icon-user"></i>
                                            <a href="./news-single">Admin</a>
                                        </div>
                                        <div class="card-date">
                                            <i class="icon-clock"></i>
                                            <meta itemprop="datePublished" content="2022-04-29">
                                            <time datetime="2022-04-29">29th April 2022</time>
                                        </div>
                                        <div class="card-description" itemprop="description">
                                            I have been a full-time housewife for 25 years, but started Instagram 2 years
                                            ago and have over 50,000 followers. I hope to share with young girls and.
                                        </div>
                                        <div class="card-category">
                                            <a href="./news-category">Fashion</a>
                                            <a href="./news-category">Modeling</a>
                                            <a href="./news-category">New Face</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="filter-item" data-filter="model">
                                <article class="news-card" itemscope itemtype="https://schema.org/NewsArticle"
                                         itemprop="hasPart">
                                    <div class="card-thumbnail">
                                        <meta itemprop="thumbnailUrl" content="/storage/assets/img/news/news-003.webp">
                                        <a href="./news-single">
                                            <img src="/storage/assets/img/lazy-1.7x1.webp" class="card-thumbnail-image lazy"
                                                 data-src="/storage/assets/img/news/news-003.webp" width="312" height="177"
                                                 alt="news title">
                                            <noscript>
                                                <img src="/storage/assets/img/news/news-003.webp" class="card-thumbnail-image"
                                                     width="312" height="177" alt="news title">
                                            </noscript>
                                        </a>
                                    </div>
                                    <div class="card-content">
                                        <h2 class="card-title" itemprop="name"><a href="./news-single" itemprop="url">News Title</a></h2>
                                        <div class="card-author" itemprop="author">
                                            <i class="icon-user"></i>
                                            <a href="./news-single">Admin</a>
                                        </div>
                                        <div class="card-date">
                                            <i class="icon-clock"></i>
                                            <meta itemprop="datePublished" content="2022-04-29">
                                            <time datetime="2022-04-29">29th April 2022</time>
                                        </div>
                                        <div class="card-description" itemprop="description">
                                            I have been a full-time housewife for 25 years, but started Instagram 2 years
                                            ago and have over 50,000 followers. I hope to share with young girls and.
                                        </div>
                                        <div class="card-category">
                                            <a href="./news-category">Fashion</a>
                                            <a href="./news-category">Modeling</a>
                                            <a href="./news-category">New Face</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="filter-item" data-filter="model,actor">
                                <article class="news-card" itemscope itemtype="https://schema.org/NewsArticle"
                                         itemprop="hasPart">
                                    <div class="card-thumbnail">
                                        <meta itemprop="thumbnailUrl" content="/storage/assets/img/news/news-004.webp">
                                        <a href="./news-single">
                                            <img src="/storage/assets/img/lazy-1.7x1.webp" class="card-thumbnail-image lazy"
                                                 data-src="/storage/assets/img/news/news-004.webp" width="312" height="177"
                                                 alt="news title">
                                            <noscript>
                                                <img src="/storage/assets/img/news/news-004.webp" class="card-thumbnail-image"
                                                     width="312" height="177" alt="news title">
                                            </noscript>
                                        </a>
                                    </div>
                                    <div class="card-content">
                                        <h2 class="card-title" itemprop="name"><a href="./news-single" itemprop="url">News Title</a></h2>
                                        <div class="card-author" itemprop="author">
                                            <i class="icon-user"></i>
                                            <a href="./news-single">Admin</a>
                                        </div>
                                        <div class="card-date">
                                            <i class="icon-clock"></i>
                                            <meta itemprop="datePublished" content="2022-04-29">
                                            <time datetime="2022-04-29">29th April 2022</time>
                                        </div>
                                        <div class="card-description" itemprop="description">
                                            I have been a full-time housewife for 25 years, but started Instagram 2 years
                                            ago and have over 50,000 followers. I hope to share with young girls and.
                                        </div>
                                        <div class="card-category">
                                            <a href="./news-category">Fashion</a>
                                            <a href="./news-category">Modeling</a>
                                            <a href="./news-category">New Face</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="filter-item" data-filter="model">
                                <article class="news-card" itemscope itemtype="https://schema.org/NewsArticle"
                                         itemprop="hasPart">
                                    <div class="card-thumbnail">
                                        <meta itemprop="thumbnailUrl" content="/storage/assets/img/news/news-005.webp">
                                        <a href="./news-single">
                                            <img src="/storage/assets/img/lazy-1.7x1.webp" class="card-thumbnail-image lazy"
                                                 data-src="/storage/assets/img/news/news-005.webp" width="312" height="177"
                                                 alt="news title">
                                            <noscript>
                                                <img src="/storage/assets/img/news/news-005.webp" class="card-thumbnail-image"
                                                     width="312" height="177" alt="news title">
                                            </noscript>
                                        </a>
                                    </div>
                                    <div class="card-content">
                                        <h2 class="card-title" itemprop="name"><a href="./news-single" itemprop="url">News Title</a></h2>
                                        <div class="card-author" itemprop="author">
                                            <i class="icon-user"></i>
                                            <a href="./news-single">Admin</a>
                                        </div>
                                        <div class="card-date">
                                            <i class="icon-clock"></i>
                                            <meta itemprop="datePublished" content="2022-04-29">
                                            <time datetime="2022-04-29">29th April 2022</time>
                                        </div>
                                        <div class="card-description" itemprop="description">
                                            I have been a full-time housewife for 25 years, but started Instagram 2 years
                                            ago and have over 50,000 followers. I hope to share with young girls and.
                                        </div>
                                        <div class="card-category">
                                            <a href="./news-category">Fashion</a>
                                            <a href="./news-category">Modeling</a>
                                            <a href="./news-category">New Face</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="filter-item" data-filter="model,actor">
                                <article class="news-card" itemscope itemtype="https://schema.org/NewsArticle"
                                         itemprop="hasPart">
                                    <div class="card-thumbnail">
                                        <meta itemprop="thumbnailUrl" content="/storage/assets/img/news/news-006.webp">
                                        <a href="./news-single">
                                            <img src="/storage/assets/img/lazy-1.7x1.webp" class="card-thumbnail-image lazy"
                                                 data-src="/storage/assets/img/news/news-006.webp" width="312" height="177"
                                                 alt="news title">
                                            <noscript>
                                                <img src="/storage/assets/img/news/news-006.webp" class="card-thumbnail-image"
                                                     width="312" height="177" alt="news title">
                                            </noscript>
                                        </a>
                                    </div>
                                    <div class="card-content">
                                        <h2 class="card-title" itemprop="name"><a href="./news-single" itemprop="url">News Title</a></h2>
                                        <div class="card-author" itemprop="author">
                                            <i class="icon-user"></i>
                                            <a href="./news-single">Admin</a>
                                        </div>
                                        <div class="card-date">
                                            <i class="icon-clock"></i>
                                            <meta itemprop="datePublished" content="2022-04-29">
                                            <time datetime="2022-04-29">29th April 2022</time>
                                        </div>
                                        <div class="card-description" itemprop="description">
                                            I have been a full-time housewife for 25 years, but started Instagram 2 years
                                            ago and have over 50,000 followers. I hope to share with young girls and.
                                        </div>
                                        <div class="card-category">
                                            <a href="./news-category">Fashion</a>
                                            <a href="./news-category">Modeling</a>
                                            <a href="./news-category">New Face</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="filter-item" data-filter="model">
                                <article class="news-card" itemscope itemtype="https://schema.org/NewsArticle"
                                         itemprop="hasPart">
                                    <div class="card-thumbnail">
                                        <meta itemprop="thumbnailUrl" content="/storage/assets/img/news/news-007.webp">
                                        <a href="./news-single">
                                            <img src="/storage/assets/img/lazy-1.7x1.webp" class="card-thumbnail-image lazy"
                                                 data-src="/storage/assets/img/news/news-007.webp" width="312" height="177"
                                                 alt="news title">
                                            <noscript>
                                                <img src="/storage/assets/img/news/news-007.webp" class="card-thumbnail-image"
                                                     width="312" height="177" alt="news title">
                                            </noscript>
                                        </a>
                                    </div>
                                    <div class="card-content">
                                        <h2 class="card-title" itemprop="name"><a href="./news-single" itemprop="url">News Title</a></h2>
                                        <div class="card-author" itemprop="author">
                                            <i class="icon-user"></i>
                                            <a href="./news-single">Admin</a>
                                        </div>
                                        <div class="card-date">
                                            <i class="icon-clock"></i>
                                            <meta itemprop="datePublished" content="2022-04-29">
                                            <time datetime="2022-04-29">29th April 2022</time>
                                        </div>
                                        <div class="card-description" itemprop="description">
                                            I have been a full-time housewife for 25 years, but started Instagram 2 years
                                            ago and have over 50,000 followers. I hope to share with young girls and.
                                        </div>
                                        <div class="card-category">
                                            <a href="./news-category">Fashion</a>
                                            <a href="./news-category">Modeling</a>
                                            <a href="./news-category">New Face</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="more-news">
                        <a href="#" class="btn btn-full btn-icon-left btn-load-more" id="btn_load_more_result_news" data-page="1" data-query="aline-r">
                        <span>
                            <i class="icon-add"></i>
                            10 {{__('menu.More News')}}
                        </span>
                        </a>
                    </div>
                </div>
            </section>

        </div>
    </main>


@endsection
