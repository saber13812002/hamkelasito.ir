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
                            <li class="breadcrumb-item"><a href="./home">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">News</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <!-- start page title -->
            <div class="page-title">
                <div class="container-xxl">
                    <h1>News</h1>
                </div>
            </div>

            <!-- start special news -->
            <section class="section section-special-news" itemscope itemtype="https://schema.org/Collection">
                <div class="container-xxl">
                    <div class="heading">
                        <div class="top-area">
                            <div class="title-area">
                                <h2 class="heading-title" itemprop="name">SPECIAL NEWS</h2>
                            </div>
                            <div class="action-area">
                                <button type="button" class="btn btn-icon" id="special_news_prev">
                                    <i class="icon-arrow-left-1"></i>
                                </button>
                                <button type="button" class="btn btn-icon" id="special_news_next">
                                    <i class="icon-arrow-right-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="swiper new-special-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <article class="special-news-card" itemprop="hasPart" itemscope
                                         itemtype="https://schema.org/NewsArticle">
                                    <a href="./news-single" itemprop="url">
                                        <div class="card-content lazy">
                                            <meta itemprop="thumbnailUrl" content="/storage/assets/img/1x1/001.webp">
                                            <img src="/storage/assets/img/lazy-1x1.webp" class="lazy"
                                                 data-src="/storage/assets/img/1x1/001.webp" width="226" height="226"
                                                 alt="news title">
                                            <noscript>
                                                <img src="/storage/assets/img/1x1/001.webp" width="226" height="226"
                                                     alt="news title">
                                            </noscript>
                                            <h2 class="card-inner-content" itemprop="name">
                                                LOUISE ROBERT FOR ZARA BY BRYAN LISTON
                                            </h2>
                                        </div>
                                    </a>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="special-news-card" itemprop="hasPart" itemscope
                                         itemtype="https://schema.org/NewsArticle">
                                    <a href="./news-single" itemprop="url">
                                        <div class="card-content lazy">
                                            <meta itemprop="thumbnailUrl" content="/storage/assets/img/1x1/002.webp">
                                            <img src="/storage/assets/img/lazy-1x1.webp" class="lazy"
                                                 data-src="/storage/assets/img/1x1/002.webp" width="226" height="226"
                                                 alt="news title">
                                            <noscript>
                                                <img src="/storage/assets/img/1x1/002.webp" width="226" height="226"
                                                     alt="news title">
                                            </noscript>
                                            <h2 class="card-inner-content" itemprop="name">
                                                LOUISE ROBERT FOR ZARA BY BRYAN LISTON
                                            </h2>
                                        </div>
                                    </a>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="special-news-card" itemprop="hasPart" itemscope
                                         itemtype="https://schema.org/NewsArticle">
                                    <a href="./news-single" itemprop="url">
                                        <div class="card-content lazy">
                                            <meta itemprop="thumbnailUrl" content="/storage/assets/img/1x1/003.webp">
                                            <img src="/storage/assets/img/lazy-1x1.webp" class="lazy"
                                                 data-src="/storage/assets/img/1x1/003.webp" width="226" height="226"
                                                 alt="news title">
                                            <noscript>
                                                <img src="/storage/assets/img/1x1/003.webp" width="226" height="226"
                                                     alt="news title">
                                            </noscript>
                                            <h2 class="card-inner-content" itemprop="name">
                                                LOUISE ROBERT FOR ZARA BY BRYAN LISTON
                                            </h2>
                                        </div>
                                    </a>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="special-news-card" itemprop="hasPart" itemscope
                                         itemtype="https://schema.org/NewsArticle">
                                    <a href="./news-single" itemprop="url">
                                        <div class="card-content lazy">
                                            <meta itemprop="thumbnailUrl" content="/storage/assets/img/1x1/004.webp">
                                            <img src="/storage/assets/img/lazy-1x1.webp" class="lazy"
                                                 data-src="/storage/assets/img/1x1/004.webp" width="226" height="226"
                                                 alt="news title">
                                            <noscript>
                                                <img src="/storage/assets/img/1x1/004.webp" width="226" height="226"
                                                     alt="news title">
                                            </noscript>
                                            <h2 class="card-inner-content" itemprop="name">
                                                LOUISE ROBERT FOR ZARA BY BRYAN LISTON
                                            </h2>
                                        </div>
                                    </a>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="special-news-card" itemprop="hasPart" itemscope
                                         itemtype="https://schema.org/NewsArticle">
                                    <a href="./news-single" itemprop="url">
                                        <div class="card-content lazy">
                                            <meta itemprop="thumbnailUrl" content="/storage/assets/img/1x1/005.webp">
                                            <img src="/storage/assets/img/lazy-1x1.webp" class="lazy"
                                                 data-src="/storage/assets/img/1x1/005.webp" width="226" height="226"
                                                 alt="news title">
                                            <noscript>
                                                <img src="/storage/assets/img/1x1/005.webp" width="226" height="226"
                                                     alt="news title">
                                            </noscript>
                                            <h2 class="card-inner-content" itemprop="name">
                                                LOUISE ROBERT FOR ZARA BY BRYAN LISTON
                                            </h2>
                                        </div>
                                    </a>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="special-news-card" itemprop="hasPart" itemscope
                                         itemtype="https://schema.org/NewsArticle">
                                    <a href="./news-single" itemprop="url">
                                        <div class="card-content lazy">
                                            <meta itemprop="thumbnailUrl" content="/storage/assets/img/1x1/006.webp">
                                            <img src="/storage/assets/img/lazy-1x1.webp" class="lazy"
                                                 data-src="/storage/assets/img/1x1/006.webp" width="226" height="226"
                                                 alt="news title">
                                            <noscript>
                                                <img src="/storage/assets/img/1x1/006.webp" width="226" height="226"
                                                     alt="news title">
                                            </noscript>
                                            <h2 class="card-inner-content" itemprop="name">
                                                LOUISE ROBERT FOR ZARA BY BRYAN LISTON
                                            </h2>
                                        </div>
                                    </a>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- start modeling 1 -->
            <section class="section section-news" itemscope itemtype="https://schema.org/Collection">
                <div class="container-xxl">
                    <div class="heading-box heading-news filter-area" data-active-filter="all" data-auto-size="true" data-col="1.25">
                        <div class="heading">
                            <div class="top-area">
                                <div class="title-area">
                                    <h2 class="heading-title" itemprop="name">LILIANA NEWS</h2>
                                    <ul class="heading-filters desktop" id="filter_liliana_news">
                                        <li>
                                            <a href="#" class="filter-option" data-filter="all">All</a>
                                        </li>
                                        <li>
                                            <a href="#" class="filter-option" data-filter="item_1">Item 1</a>
                                        </li>
                                        <li>
                                            <a href="#" class="filter-option" data-filter="item_2">Item 2</a>
                                        </li>
                                        <li>
                                            <a href="#" class="filter-option" data-filter="item_3">Item 3</a>
                                        </li>
                                        <li>
                                            <a href="#" class="filter-option" data-filter="item_4">Item 4</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="action-area">
                                    <div class="field field-type-select" data-field-defualt-text="Select Item">
                                        <i class="icon-sort"></i>
                                        <div class="field-content">
                                            <label for="sort_liliana_news">Sort</label>
                                            <select name="sort_liliana_news" id="sort_liliana_news">
                                                <option value="newest">Newest</option>
                                                <option value="oldest">Oldest</option>
                                                <option value="name">Name</option>
                                                <option value="date">Date</option>
                                            </select>
                                            <i class="icon-arrow-down"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="heading-filters mobile">
                                <li>
                                    <a href="#" class="filter-option" data-filter="all">All</a>
                                </li>
                                <li>
                                    <a href="#" class="filter-option" data-filter="item_1">Item 1</a>
                                </li>
                                <li>
                                    <a href="#" class="filter-option" data-filter="item_2">Item 2</a>
                                </li>
                                <li>
                                    <a href="#" class="filter-option" data-filter="item_3">Item 3</a>
                                </li>
                                <li>
                                    <a href="#" class="filter-option" data-filter="item_4">Item 4</a>
                                </li>
                            </ul>
                        </div>
                        <div class="heading-content" id="liliana_news_content">
                            <div class="filter-item" data-filter="item_1,item_4">
                                <article class="news-card" itemscope itemtype="https://schema.org/NewsArticle"
                                         itemprop="hasPart">
                                    <div class="card-thumbnail">
                                        <meta itemprop="thumbnailUrl" content="/storage/assets/img/news/news-003.webp">
                                        <a href="./news-single-company">
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
                                        <h2 class="card-title" itemprop="name"><a href="./news-single-company" itemprop="url">News Title</a></h2>
                                        <div class="card-author" itemprop="author">
                                            <i class="icon-user"></i>
                                            <a href="./news-single-company">Admin</a>
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
                            <div class="filter-item" data-filter="item_1">
                                <article class="news-card" itemscope itemtype="https://schema.org/NewsArticle"
                                         itemprop="hasPart">
                                    <div class="card-thumbnail">
                                        <meta itemprop="thumbnailUrl" content="/storage/assets/img/news/news-004.webp">
                                        <a href="./news-single-company">
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
                                        <h2 class="card-title" itemprop="name"><a href="./news-single-company" itemprop="url">News Title</a></h2>
                                        <div class="card-author" itemprop="author">
                                            <i class="icon-user"></i>
                                            <a href="./news-single-company">Admin</a>
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
                            <div class="filter-item" data-filter="item_1,item_3">
                                <article class="news-card" itemscope itemtype="https://schema.org/NewsArticle"
                                         itemprop="hasPart">
                                    <div class="card-thumbnail">
                                        <meta itemprop="thumbnailUrl" content="/storage/assets/img/news/news-005.webp">
                                        <a href="./news-single-company">
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
                                        <h2 class="card-title" itemprop="name"><a href="./news-single-company" itemprop="url">News Title</a></h2>
                                        <div class="card-author" itemprop="author">
                                            <i class="icon-user"></i>
                                            <a href="./news-single-company">Admin</a>
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
                            <div class="filter-item" data-filter="item_1">
                                <article class="news-card" itemscope itemtype="https://schema.org/NewsArticle"
                                         itemprop="hasPart">
                                    <div class="card-thumbnail">
                                        <meta itemprop="thumbnailUrl" content="/storage/assets/img/news/news-006.webp">
                                        <a href="./news-single-company">
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
                                        <h2 class="card-title" itemprop="name"><a href="./news-single-company" itemprop="url">News Title</a></h2>
                                        <div class="card-author" itemprop="author">
                                            <i class="icon-user"></i>
                                            <a href="./news-single-company">Admin</a>
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
                            <div class="filter-item" data-filter="item_1,item_3">
                                <article class="news-card" itemscope itemtype="https://schema.org/NewsArticle"
                                         itemprop="hasPart">
                                    <div class="card-thumbnail">
                                        <meta itemprop="thumbnailUrl" content="/storage/assets/img/news/news-007.webp">
                                        <a href="./news-single-company">
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
                                        <h2 class="card-title" itemprop="name"><a href="./news-single-company" itemprop="url">News Title</a></h2>
                                        <div class="card-author" itemprop="author">
                                            <i class="icon-user"></i>
                                            <a href="./news-single-company">Admin</a>
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
                            <div class="filter-item" data-filter="item_1,item_2">
                                <article class="news-card" itemscope itemtype="https://schema.org/NewsArticle"
                                         itemprop="hasPart">
                                    <div class="card-thumbnail">
                                        <meta itemprop="thumbnailUrl" content="/storage/assets/img/news/news-008.webp">
                                        <a href="./news-single-company">
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
                                        <h2 class="card-title" itemprop="name"><a href="./news-single-company" itemprop="url">News Title</a></h2>
                                        <div class="card-author" itemprop="author">
                                            <i class="icon-user"></i>
                                            <a href="./news-single-company">Admin</a>
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
                            <div class="filter-item" data-filter="item_1,item_3">
                                <article class="news-card" itemscope itemtype="https://schema.org/NewsArticle"
                                         itemprop="hasPart">
                                    <div class="card-thumbnail">
                                        <meta itemprop="thumbnailUrl" content="/storage/assets/img/news/news-002.webp">
                                        <a href="./news-single-company">
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
                                        <h2 class="card-title" itemprop="name"><a href="./news-single-company" itemprop="url">News Title</a></h2>
                                        <div class="card-author" itemprop="author">
                                            <i class="icon-user"></i>
                                            <a href="./news-single-company">Admin</a>
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
                            <div class="filter-item" data-filter="item_1">
                                <article class="news-card" itemscope itemtype="https://schema.org/NewsArticle"
                                         itemprop="hasPart">
                                    <div class="card-thumbnail">
                                        <meta itemprop="thumbnailUrl" content="/storage/assets/img/news/news-003.webp">
                                        <a href="./news-single-company">
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
                                        <h2 class="card-title" itemprop="name"><a href="./news-single-company" itemprop="url">News Title</a></h2>
                                        <div class="card-author" itemprop="author">
                                            <i class="icon-user"></i>
                                            <a href="./news-single-company">Admin</a>
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
                            <div class="filter-item" data-filter="item_1,item_2,item_3">
                                <article class="news-card" itemscope itemtype="https://schema.org/NewsArticle"
                                         itemprop="hasPart">
                                    <div class="card-thumbnail">
                                        <meta itemprop="thumbnailUrl" content="/storage/assets/img/news/news-004.webp">
                                        <a href="./news-single-company">
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
                                        <h2 class="card-title" itemprop="name"><a href="./news-single-company" itemprop="url">News Title</a></h2>
                                        <div class="card-author" itemprop="author">
                                            <i class="icon-user"></i>
                                            <a href="./news-single-company">Admin</a>
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
                            <div class="filter-item" data-filter="item_1,item_2">
                                <article class="news-card" itemscope itemtype="https://schema.org/NewsArticle"
                                         itemprop="hasPart">
                                    <div class="card-thumbnail">
                                        <meta itemprop="thumbnailUrl" content="/storage/assets/img/news/news-005.webp">
                                        <a href="./news-single-company">
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
                                        <h2 class="card-title" itemprop="name"><a href="./news-single-company" itemprop="url">News Title</a></h2>
                                        <div class="card-author" itemprop="author">
                                            <i class="icon-user"></i>
                                            <a href="./news-single-company">Admin</a>
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
                            <div class="filter-item" data-filter="item_1,item_3">
                                <article class="news-card" itemscope itemtype="https://schema.org/NewsArticle"
                                         itemprop="hasPart">
                                    <div class="card-thumbnail">
                                        <meta itemprop="thumbnailUrl" content="/storage/assets/img/news/news-006.webp">
                                        <a href="./news-single-company">
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
                                        <h2 class="card-title" itemprop="name"><a href="./news-single-company" itemprop="url">News Title</a></h2>
                                        <div class="card-author" itemprop="author">
                                            <i class="icon-user"></i>
                                            <a href="./news-single-company">Admin</a>
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
                            <div class="filter-item" data-filter="item_1">
                                <article class="news-card" itemscope itemtype="https://schema.org/NewsArticle"
                                         itemprop="hasPart">
                                    <div class="card-thumbnail">
                                        <meta itemprop="thumbnailUrl" content="/storage/assets/img/news/news-007.webp">
                                        <a href="./news-single-company">
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
                                        <h2 class="card-title" itemprop="name"><a href="./news-single-company" itemprop="url">News Title</a></h2>
                                        <div class="card-author" itemprop="author">
                                            <i class="icon-user"></i>
                                            <a href="./news-single-company">Admin</a>
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
                        <a href="#" class="btn btn-full btn-icon-left btn-load-more" id="btn_load_more_liliana_news" data-page="1">
                        <span>
                            <i class="icon-add"></i>
                            10 {{__('menu.More News')}}
                        </span>
                        </a>
                    </div>
                </div>
            </section>

            <!-- start member news -->
            <section class="section section-news" itemscope itemtype="https://schema.org/Collection">
                <div class="container-xxl">
                    <div class="heading-box heading-news filter-area" data-active-filter="all" data-auto-size="true" data-col="1.25">
                        <div class="heading">
                            <div class="top-area">
                                <div class="title-area">
                                    <h2 class="heading-title" itemprop="name">MEMBER NEWS</h2>
                                    <ul class="heading-filters desktop" id="filter_member_news">
                                        <li>
                                            <a href="#" class="filter-option" data-filter="all">All</a>
                                        </li>
                                        <li>
                                            <a href="#" class="filter-option" data-filter="model">Model</a>
                                        </li>
                                        <li>
                                            <a href="#" class="filter-option" data-filter="talent">Talent</a>
                                        </li>
                                        <li>
                                            <a href="#" class="filter-option" data-filter="actor">Actor</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="action-area">
                                    <div class="field field-type-select" data-field-defualt-text="Select Item">
                                        <i class="icon-sort"></i>
                                        <div class="field-content">
                                            <label for="sort_member_news">Sort</label>
                                            <select name="sort_member_news" id="sort_member_news">
                                                <option value="newest">Newest</option>
                                                <option value="oldest">Oldest</option>
                                                <option value="name">Name</option>
                                                <option value="date">Date</option>
                                            </select>
                                            <i class="icon-arrow-down"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="heading-filters mobile">
                                <li>
                                    <a href="#" class="filter-option" data-filter="all">All</a>
                                </li>
                                <li>
                                    <a href="#" class="filter-option" data-filter="model">Model</a>
                                </li>
                                <li>
                                    <a href="#" class="filter-option" data-filter="talent">Talent</a>
                                </li>
                                <li>
                                    <a href="#" class="filter-option" data-filter="actor">Actor</a>
                                </li>
                            </ul>
                        </div>
                        <div class="heading-content" id="member_news_content">
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
                        <a href="#" class="btn btn-full btn-icon-left btn-load-more" id="btn_load_more_member_news" data-page="1">
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
