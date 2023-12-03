@extends('layout-home')

@section('content-home')

    <body style="visibility: visible;" class="page page-about-us">

    @include('header-site')
    <!-- start content -->
    <main>
        <div id="content" itemscope itemtype="https://schema.org/AboutPage">

            <!-- start page breadcrumb -->
            <div class="page-breadcrumb">
                <div class="container-xxxl">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./home">{{__('Home')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <!-- start page title -->
            <div class="page-title">
                <div class="container-xxl">
                    <h1>About Us</h1>
                </div>
            </div>

            <section class="section section-content" itemprop="mainContentOfPage">
                <div class="container-lg">
                    <p>
                        Welcome to Liliana Models, your trusted partner in the entertainment arena. Beyond being an
                        agency, we represent a vast community of diverse Members ranging from babies, kids, men, women,
                        to the elderly, and individuals from various nationalities.
                    </p>
                    <p>
                        For clients scouting for the perfect face or talent for their next project, our roster offers an
                        unparalleled range of options. Our carefully curated catalog ensures that every client can find
                        the exact fit for their needs, whether it's a youthful energy, seasoned elegance, or
                        international flair.
                    </p>
                    <p>
                        While we cherish and nurture the unique beauty and potential of every individual, our primary
                        mission is to seamlessly connect fresh talents with clients. With our commitment to discovering
                        and fostering hidden talents, we offer rigorous training, workshops, and continuous support.
                    </p>
                    <p>
                        Navigating the expansive entertainment landscape, let Liliana Models be your beacon. We pride
                        ourselves on efficiency, promptly presenting a plethora of portfolios and ensuring top-tier
                        talents for every project.
                    </p>
                    <p>
                        With our multilingual managers spanning the country, our reach is both vast and inclusive. At
                        Liliana Models, we not only respect individuality, but we also offer the diversity that today's
                        global projects demand. Join our community and experience a world where excellence meets
                        variety.
                    </p>
                </div>
            </section>

            <section class="section section-our-services" itemscope itemtype="https://schema.org/Service">
                <meta itemprop="serviceType" content="INTERNATIONAL MODEL AGENCY">
                <meta itemprop="areaServed" content="INTERNATIONAL">
                <div class="container-lg">
                    <h6 itemprop="name">{{__('menu.Our Services')}}</h6>
                    <div class="our-services" itemprop="hasOfferCatalog" itemscope
                         itemtype="https://schema.org/OfferCatalog">
                        <div class="card" itemprop="itemListElement" itemscope itemtype="https://schema.org/Offer">
                            <i class="icon-woman"></i>
                            <div class="card-title" itemprop="itemOffered" itemscope
                                 itemtype="https://schema.org/Service">
                                <span itemprop="name">{{__('menu.Model')}}</span>
                            </div>
                            <div
                                class="card-content">{{__('menu.We provide the optimal model selection tailored to your specific requirements.')}}
                            </div>
                        </div>
                        <div class="card" itemprop="itemListElement" itemscope itemtype="https://schema.org/Offer">
                            <i class="icon-creativity"></i>
                            <div class="card-title" itemprop="itemOffered" itemscope
                                 itemtype="https://schema.org/Service">
                                <span itemprop="name">{{__('menu.Talent')}}</span>
                            </div>
                            <div
                                class="card-content">{{__('menu.Uniting events and exhibitions with the perfect talent to ensure a remarkable experience')}}
                            </div>
                        </div>
                        <div class="card" itemprop="itemListElement" itemscope itemtype="https://schema.org/Offer">
                            <i class="icon-actors"></i>
                            <div class="card-title" itemprop="itemOffered" itemscope
                                 itemtype="https://schema.org/Service">
                                <span itemprop="name">{{__('menu.Actor')}}</span>
                            </div>
                            <div
                                class="card-content">{{__('menu.Delivering a myriad of actor types, ready to fulfill every performance requirement')}}
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section page-more-links">
                <div class="container-lg">
                    <div class="link-item">
                        <h2>Company Profile</h2>
                        <span>Our company profile can be see <a href="./company-profile">here.</a></span>
                    </div>
                    <div class="link-item">
                        <h2>Contact Us</h2>
                        <span>You can contact us <a href="./contact-us">here.</a></span>
                    </div>
                    <div class="link-item">
                        <h2>Privacy Policy</h2>
                        <span>Our privacy policy can be see <a href="./privacy-policy">here.</a></span>
                    </div>
                </div>
            </section>

        </div>
    </main>

    <!-- start scripts -->
    <script src="/storage/assets/js/lib/jQuery.min.js"></script>
    <script src="/storage/assets/js/lib/lazyload.min.js"></script>
    <script src="/storage/assets/js/super-slider.js"></script>
    <script src="/storage/assets/js/component.js"></script>
    <script src="/storage/assets/js/scripts.js"></script>

    </body>
@endsection
