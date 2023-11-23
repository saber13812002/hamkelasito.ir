@extends('layout-home')

@section('content-home')

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
                            @foreach($sliders as $slider)
                                <div class="owl-item active" style="width: 1349px;">
                                    <div class="item slider-item-{{ $slider->order-1 }}" itemprop="item" itemscope=""
                                         itemtype="https://schema.org/Person" data-index="{{ $slider->order-1 }}">
                                        <div class="item-background">
                                            <picture>
                                                <source class="owl-lazy" media="(min-width: 1560px)"
                                                        data-srcset="/storage/assets/img/slider/{{ $slider->image_large }}"
                                                        srcset="/storage/assets/img/slider/{{ $slider->image_large }}">
                                                <source class="owl-lazy" media="(min-width: 576px)"
                                                        data-srcset="/storage/assets/img/slider/{{ $slider->image_medium }}"
                                                        srcset="/storage/assets/img/slider/{{ $slider->image_medium }}">
                                                <img class="owl-lazy"
                                                     data-src="/storage/assets/img/slider/{{ $slider->image_small }}"
                                                     alt="model" src="/storage/assets/{{ $slider->image_small }}"
                                                     style="opacity: 1;">
                                            </picture>
                                        </div>
                                        <meta itemprop="image"
                                              content="/storage/assets/img/3x4/{{ $slider->image_3x4 }}">

                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="owl-nav disabled">
                        <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span>
                        </button>
                        <button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span>
                        </button>
                    </div>
                    <div class="owl-dots">
                        @foreach($sliders as $slider)
                            <button role="button" class="owl-dot {{$slider->order-1==0?"active":""}}"><span></span>
                            </button>
                        @endforeach
                    </div>
                </div>
                <div class="overlay"></div>
                <div class="slider-view">
                    <div class="slider-contents">
                        @foreach($sliders as $slider)
                            <div class="item-content slider-content-{{ $slider->order-1 }} active"
                                 data-index="{{ $slider->order-1 }}">
                                <div class="item-title">
                                    <a href="model-page?id={{ $slider->member?$slider->member->id:"" }}" aria-label="{{ $slider->order-1 }}" itemprop="url"><span
                                            itemprop="name">{{ $slider->member?$slider->member->name:"" }}</span></a>
                                    <a {{$slider->video?"":"style=display:none"}} href="/storage/assets/video/{{ $slider->video }}"
                                       data-light-box="slide_{{ $slider->order-1 }}_video"
                                       data-light-box-type="video" aria-label="Video" class="item-btn-play"
                                       data-object-id="{{ $slider->order-1 }}">
                                        <i class="icon-subtract"></i>
                                    </a>
                                </div>
                                <div class="item-metas">
                                    <div class="item-meta">
                                        <div class="item-meta-label">HEIGHT</div>
                                        <div
                                            class="item-meta-value">{{ $slider->member?$slider->member->height:"" }}</div>
                                    </div>
                                    <div class="item-meta">
                                        <div class="item-meta-label">bust</div>
                                        <div
                                            class="item-meta-value">{{ $slider->member?$slider->member->bust:"" }}</div>
                                    </div>
                                    <div class="item-meta">
                                        <div class="item-meta-label">waist</div>
                                        <div
                                            class="item-meta-value">{{ $slider->member?$slider->member->waist:"" }}</div>
                                    </div>
                                    <div class="item-meta">
                                        <div class="item-meta-label">hips</div>
                                        <div
                                            class="item-meta-value">{{ $slider->member?$slider->member->hips:"" }}</div>
                                    </div>
                                    <div class="item-meta">
                                        <div class="item-meta-label">shoes</div>
                                        <div
                                            class="item-meta-value">{{ $slider->member?$slider->member->shoe_size:"" }}</div>
                                    </div>
                                    <div class="item-meta">
                                        <div class="item-meta-label">eye</div>
                                        <div
                                            class="item-meta-value">{{ $slider->member?$slider->member->eye_color:"" }}</div>
                                    </div>
                                    <div class="item-meta">
                                        <div class="item-meta-label">hair</div>
                                        <div
                                            class="item-meta-value">{{ $slider->member?$slider->member->hair_color:"" }}</div>
                                    </div>
                                    <div class="item-meta">
                                        <div class="item-meta-label">nationality</div>
                                        <div class="item-meta-value"
                                             itemprop="nationality">{{ $slider->member?$slider->member->nationality:"" }}</div>
                                    </div>
                                </div>
                                <div class="item-description">
                                    {{ $slider->member?$slider->description??$slider->member->biography:"" }}
                                </div>
                                <a href="model-page?id={{ $slider->member?$slider->member->id:"" }}"
                                   class="item-read-more" style="display: none;">
                                    <span>Read More</span>
                                    <i class="icon-arrow-right"></i>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="slider-thumbnails">
                        <div class="slider-thumbnails-wrapper">
                            @foreach($sliders as $slider)
                                <div class="item-thumbnail slider-thumbnail-{{ $slider->order-1 }} first"
                                     style="background-image: url(&quot;storage/assets/img/3x4/{{ $slider->image_3x4 }}&quot;); width: 292.5px; height: 390px; left: 0px; top: 0px; z-index: 0;"
                                     data-index="{{ $slider->order-1 }}">
                                </div>
                            @endforeach
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
                                <a href="models-list?category_id={{ $category->id }}" aria-label="{{ $category->name }} Category"
                                   itemprop="url">
                                    <img src="/storage/assets/img/category/{{ $category->image }}"
                                         class="lazy lz-entered lz-loaded"
                                         data-src="/storage/assets/img/category/{{ $category->image }}" width="298"
                                         height="438"
                                         alt="{{ $category->name }} Category" data-ll-status="loaded">
                                    <noscript>
                                        <img src="/storage/assets/img/category/{{ $category->image }}" width="298"
                                             height="438"
                                             alt="{{ $category->name }} Category">
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
                                        <a href="model-page?id={{ $member->id }}" itemprop="url">
                                            <meta itemprop="image"
                                                  content="/storage/assets/img/3x4/{{ $member->profile_image }}.webp">
                                            <img src="/storage/assets/img/lazy-3x4.webp" class="lazy"
                                                 data-src="/storage/assets/img/3x4/{{ $member->profile_image }}.webp"
                                                 width="200" height="260"
                                                 alt="model">
                                            <noscript>
                                                <img src="/storage/assets/img/3x4/{{ $member->profile_image }}.webp"
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
                                                    <div class="btn btn-icon btn-add-model-to-bookmark"
                                                         id="{{ $member->id }}">
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

            @include('layouts.related-news')

        </div>
    </main>


    <!-- start scripts -->
    <script src="/storage/assets/js/lib/jQuery.min.js"></script>
    <script src="/storage/assets/js/lib/lazyload.min.js"></script>
    <script src="/storage/assets/js/owl.carousel.min.js"></script>
    <script src="/storage/assets/js/super-slider.min.js"></script>
    <script src="/storage/assets/js/component.min.js"></script>
    <script src="/storage/assets/js/scripts.min.js"></script>


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
