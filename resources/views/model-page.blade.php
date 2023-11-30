@extends('layout-home')

@section('content-home')

    <body style="visibility: visible;" class="page page-model">

    @include('header-site')
    <!-- start content -->
    <main>
        <div id="content">

            <!-- start page breadcrumb -->
            <div class="page-breadcrumb">
                <div class="container-xxl">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="home">{{__('menu.Home')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('menu.Profile')}}</li>
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
                                  content="/storage/assets/img/profile/profile-1/Thumbnail/profile-001.webp">
                            <img src="/storage/assets/img/3x4/{{$member->profile_image}}.webp" class="lazy lz-entered lz-loaded"
                                 data-src="/storage/assets/img/profile/profile-1/Thumbnail/profile-001.webp" width="410"
                                 height="548" alt="model name" data-ll-status="loaded">
                            <noscript>
                                <img src="/storage/assets/img/profile/profile-1/Thumbnail/profile-001.webp" width="410"
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
                                    <a href="/composite?id={{$member->id}}" target="_blank" aria-label="Model Composite">
                                        <i class="icon-document"></i>
                                        <span>Composite</span>
                                    </a>
                                    <a href="/composite2/{{$member->id}}" target="_blank" aria-label="Model Profile">
                                        <i class="icon-user-square"></i>
                                        <span>Profile</span>
                                    </a>
                                    <a href="/composite4/{{$member->id}}" target="_blank" aria-label="Model Profile">
                                        <i class="icon-user-square"></i>
                                        <span>PDF</span>
                                    </a>
                                    <a href="/composite5/{{$member->id}}" target="_blank" aria-label="Model Profile">
                                        <i class="icon-user-square"></i>
                                        <span>PDF2</span>
                                    </a>
                                    <a href="/composite6/{{$member->id}}" target="_blank" aria-label="Model Profile">
                                        <i class="icon-user-square"></i>
                                        <span>PDF3</span>
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
                                              content="/storage/assets/img/profile/profile-1/orginal/001.jpg">
                                        <a href="/storage/assets/img/profile/profile-1/orginal/001.jpg"
                                           aria-label="Photo" data-light-box="gallery_photo" data-light-box-type="image"
                                           itemprop="url" data-object-id="0">
                                            <meta itemprop="thumbnailUrl"
                                                  content="/storage/assets/img/profile/profile-1/3x4/001.webp">
                                            <img src="/storage/assets/img/profile/profile-1/3x4/001.webp" class="lazy lz-entered lz-loaded"
                                                 data-src="/storage/assets/img/profile/profile-1/3x4/001.webp"
                                                 width="192" height="262" alt="image" data-ll-status="loaded">
                                            <noscript>
                                                <img src="/storage/assets/img/profile/profile-1/3x4/001.webp" width="192"
                                                     height="262" alt="image">
                                            </noscript>


                                        </a>
                                    </div>
                                    <div class="grid-item" itemprop="item" itemscope=""
                                         itemtype="https://schema.org/ImageGallery">
                                        <meta itemprop="image"
                                              content="/storage/assets/img/profile/profile-1/orginal/002.jpg">
                                        <a href="/storage/assets/img/profile/profile-1/orginal/002.jpg"
                                           aria-label="Photo" data-light-box="gallery_photo" data-light-box-type="image"
                                           itemprop="url" data-object-id="1">
                                            <meta itemprop="thumbnailUrl"
                                                  content="/storage/assets/img/profile/profile-1/3x4/002.webp">
                                            <img src="/storage/assets/img/profile/profile-1/3x4/002.webp" class="lazy lz-entered lz-loaded"
                                                 data-src="/storage/assets/img/profile/profile-1/3x4/002.webp"
                                                 width="192" height="262" alt="image" data-ll-status="loaded">
                                            <noscript>
                                                <img src="/storage/assets/img/profile/profile-1/3x4/002.webp" width="192"
                                                     height="262" alt="image">
                                            </noscript>


                                        </a>
                                    </div>
                                    <div class="grid-item" itemprop="item" itemscope=""
                                         itemtype="https://schema.org/ImageGallery">
                                        <meta itemprop="image"
                                              content="/storage/assets/img/profile/profile-1/orginal/003.jpg">
                                        <a href="/storage/assets/img/profile/profile-1/orginal/003.jpg"
                                           aria-label="Photo" data-light-box="gallery_photo" data-light-box-type="image"
                                           itemprop="url" data-object-id="2">
                                            <meta itemprop="thumbnailUrl"
                                                  content="/storage/assets/img/profile/profile-1/3x4/003.webp">
                                            <img src="/storage/assets/img/profile/profile-1/3x4/003.webp" class="lazy lz-entered lz-loaded"
                                                 data-src="/storage/assets/img/profile/profile-1/3x4/003.webp"
                                                 width="192" height="262" alt="image" data-ll-status="loaded">
                                            <noscript>
                                                <img src="/storage/assets/img/profile/profile-1/3x4/003.webp" width="192"
                                                     height="262" alt="image">
                                            </noscript>


                                        </a>
                                    </div>
                                    <div class="grid-item" itemprop="item" itemscope=""
                                         itemtype="https://schema.org/ImageGallery">
                                        <meta itemprop="image"
                                              content="/storage/assets/img/profile/profile-1/orginal/004.jpg">
                                        <a href="/storage/assets/img/profile/profile-1/orginal/004.jpg"
                                           aria-label="Photo" data-light-box="gallery_photo" data-light-box-type="image"
                                           itemprop="url" data-object-id="3">
                                            <meta itemprop="thumbnailUrl"
                                                  content="/storage/assets/img/profile/profile-1/3x4/004.webp">
                                            <img src="/storage/assets/img/profile/profile-1/3x4/004.webp" class="lazy lz-entered lz-loaded"
                                                 data-src="/storage/assets/img/profile/profile-1/3x4/004.webp"
                                                 width="192" height="262" alt="image" data-ll-status="loaded">
                                            <noscript>
                                                <img src="/storage/assets/img/profile/profile-1/3x4/004.webp" width="192"
                                                     height="262" alt="image">
                                            </noscript>


                                        </a>
                                    </div>
                                    <div class="grid-item" itemprop="item" itemscope=""
                                         itemtype="https://schema.org/ImageGallery">
                                        <meta itemprop="image"
                                              content="/storage/assets/img/profile/profile-1/orginal/005.jpg">
                                        <a href="/storage/assets/img/profile/profile-1/orginal/005.jpg"
                                           aria-label="Photo" data-light-box="gallery_photo" data-light-box-type="image"
                                           itemprop="url" data-object-id="4">
                                            <meta itemprop="thumbnailUrl"
                                                  content="/storage/assets/img/profile/profile-1/3x4/005.webp">
                                            <img src="/storage/assets/img/profile/profile-1/3x4/005.webp" class="lazy lz-entered lz-loaded"
                                                 data-src="/storage/assets/img/profile/profile-1/3x4/005.webp"
                                                 width="192" height="262" alt="image" data-ll-status="loaded">
                                            <noscript>
                                                <img src="/storage/assets/img/profile/profile-1/3x4/005.webp" width="192"
                                                     height="262" alt="image">
                                            </noscript>


                                        </a>
                                    </div>
                                    <div class="grid-item" itemprop="item" itemscope=""
                                         itemtype="https://schema.org/ImageGallery">
                                        <meta itemprop="image"
                                              content="/storage/assets/img/profile/profile-1/orginal/006.jpg">
                                        <a href="/storage/assets/img/profile/profile-1/orginal/006.jpg"
                                           aria-label="Photo" data-light-box="gallery_photo" data-light-box-type="image"
                                           itemprop="url" data-object-id="5">
                                            <meta itemprop="thumbnailUrl"
                                                  content="/storage/assets/img/profile/profile-1/3x4/006.webp">
                                            <img src="/storage/assets/img/lazy-3x4.webp" class="lazy"
                                                 data-src="/storage/assets/img/profile/profile-1/3x4/006.webp"
                                                 width="192" height="262" alt="image">
                                            <noscript>
                                                <img src="/storage/assets/img/profile/profile-1/3x4/006.webp" width="192"
                                                     height="262" alt="image">
                                            </noscript>


                                        </a>
                                    </div>
                                    <div class="grid-item" itemprop="item" itemscope=""
                                         itemtype="https://schema.org/ImageGallery">
                                        <meta itemprop="image"
                                              content="/storage/assets/img/profile/profile-1/orginal/007.jpg">
                                        <a href="/storage/assets/img/profile/profile-1/orginal/007.jpg"
                                           aria-label="Photo" data-light-box="gallery_photo" data-light-box-type="image"
                                           itemprop="url" data-object-id="6">
                                            <meta itemprop="thumbnailUrl"
                                                  content="/storage/assets/img/profile/profile-1/3x4/007.webp">
                                            <img src="/storage/assets/img/lazy-3x4.webp" class="lazy"
                                                 data-src="/storage/assets/img/profile/profile-1/3x4/007.webp"
                                                 width="192" height="262" alt="image">
                                            <noscript>
                                                <img src="/storage/assets/img/profile/profile-1/3x4/007.webp" width="192"
                                                     height="262" alt="image">
                                            </noscript>


                                        </a>
                                    </div>
                                    <div class="grid-item" itemprop="item" itemscope=""
                                         itemtype="https://schema.org/ImageGallery">
                                        <meta itemprop="image"
                                              content="/storage/assets/img/profile/profile-1/orginal/008.jpg">
                                        <a href="/storage/assets/img/profile/profile-1/orginal/008.jpg"
                                           aria-label="Photo" data-light-box="gallery_photo" data-light-box-type="image"
                                           itemprop="url" data-object-id="7">
                                            <meta itemprop="thumbnailUrl"
                                                  content="/storage/assets/img/profile/profile-1/3x4/008.webp">
                                            <img src="/storage/assets/img/lazy-3x4.webp" class="lazy"
                                                 data-src="/storage/assets/img/profile/profile-1/3x4/008.webp"
                                                 width="192" height="262" alt="image">
                                            <noscript>
                                                <img src="/storage/assets/img/profile/profile-1/3x4/008.webp" width="192"
                                                     height="262" alt="image">
                                            </noscript>


                                        </a>
                                    </div>
                                    <div class="grid-item" itemprop="item" itemscope=""
                                         itemtype="https://schema.org/ImageGallery">
                                        <meta itemprop="image"
                                              content="/storage/assets/img/profile/profile-1/orginal/009.jpg">
                                        <a href="/storage/assets/img/profile/profile-1/orginal/009.jpg"
                                           aria-label="Photo" data-light-box="gallery_photo" data-light-box-type="image"
                                           itemprop="url" data-object-id="8">
                                            <meta itemprop="thumbnailUrl"
                                                  content="/storage/assets/img/profile/profile-1/3x4/009.webp">
                                            <img src="/storage/assets/img/lazy-3x4.webp" class="lazy"
                                                 data-src="/storage/assets/img/profile/profile-1/3x4/009.webp"
                                                 width="192" height="262" alt="image">
                                            <noscript>
                                                <img src="/storage/assets/img/profile/profile-1/3x4/009.webp" width="192"
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
                                            <a href="/storage/assets/video/video-001.mp4" data-light-box="gallery_video"
                                               data-light-box-type="video" aria-label="Video" itemprop="url"
                                               data-object-id="10">
                                                <div class="card-thumbnail">
                                                    <meta itemprop="thumbnail"
                                                          content="/storage/assets/img/video/video-001.webp">
                                                    <img src="/storage/assets/img/lazy-1.7x1.webp" class="lazy"
                                                         data-src="/storage/assets/img/video/video-001.webp" width="296"
                                                         height="168" alt="video">
                                                    <noscript>
                                                        <img src="/storage/assets/img/video/video-001.webp" width="296"
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
                                            <a href="/storage/assets/video/video-002.mp4" data-light-box="gallery_video"
                                               data-light-box-type="video" aria-label="Video" itemprop="url"
                                               data-object-id="11">
                                                <div class="card-thumbnail">
                                                    <meta itemprop="thumbnail"
                                                          content="/storage/assets/img/video/video-002.webp">
                                                    <img src="/storage/assets/img/lazy-1.7x1.webp" class="lazy"
                                                         data-src="/storage/assets/img/video/video-002.webp" width="296"
                                                         height="168" alt="video">
                                                    <noscript>
                                                        <img src="/storage/assets/img/video/video-002.webp" width="296"
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
                                            <a href="/storage/assets/video/video-003.mp4" data-light-box="gallery_video"
                                               data-light-box-type="video" aria-label="Video" itemprop="url"
                                               data-object-id="12">
                                                <div class="card-thumbnail">
                                                    <meta itemprop="thumbnail"
                                                          content="/storage/assets/img/video/video-003.webp">
                                                    <img src="/storage/assets/img/lazy-1.7x1.webp" class="lazy"
                                                         data-src="/storage/assets/img/video/video-003.webp" width="296"
                                                         height="168" alt="video">
                                                    <noscript>
                                                        <img src="/storage/assets/img/video/video-003.webp" width="296"
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
                                            <a href="/storage/assets/video/video-004.mp4" data-light-box="gallery_video"
                                               data-light-box-type="video" aria-label="Video" itemprop="url"
                                               data-object-id="13">
                                                <div class="card-thumbnail">
                                                    <meta itemprop="thumbnail"
                                                          content="/storage/assets/img/video/video-004.webp">
                                                    <img src="/storage/assets/img/lazy-1.7x1.webp" class="lazy"
                                                         data-src="/storage/assets/img/video/video-004.webp" width="296"
                                                         height="168" alt="video">
                                                    <noscript>
                                                        <img src="/storage/assets/img/video/video-004.webp" width="296"
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
                                        <meta itemprop="contentUrl" content="/storage/assets/music/music-001.mp3">
                                        <meta itemprop="encodingFormat" content="audio/mp3">
                                        <div class="audio-card" data-src="/storage/assets/music/music-001.mp3"
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
                                        <meta itemprop="contentUrl" content="/storage/assets/music/music-002.mp3">
                                        <meta itemprop="encodingFormat" content="audio/mp3">
                                        <div class="audio-card" data-src="/storage/assets/music/music-002.mp3"
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
                                        <meta itemprop="contentUrl" content="/storage/assets/music/music-003.mp3">
                                        <meta itemprop="encodingFormat" content="audio/mp3">
                                        <div class="audio-card" data-src="/storage/assets/music/music-003.mp3"
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


            @include('layouts.related-news')

        </div>
    </main>


    <!-- start scripts -->
    <script src="/storage/assets/js/env.js"></script>
    <script src="/storage/assets/js/lib/jQuery.min.js"></script>
    <script src="/storage/assets/js/lib/lazyload.min.js"></script>
    <script src="/storage/assets/js/component.js"></script>
    <script src="/storage/assets/js/scripts.js"></script>



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

    </body>
@endsection
