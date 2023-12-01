@extends('layout-home')

@section('content-home')

    <body style="visibility: visible;" class="page page-become-a-model">

    @include('header-site')
    <!-- start main -->
    <main>
        <div id="content">

            <!-- start breadcrumb -->
            <div class="page-breadcrumb sz-space">
                <div class="container-xxxl">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./home">{{__('menu.Home')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('menu.Become Liliana')}}</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <!-- start page title -->
            <div class="page-title">
                <div class="container-xxl">
                    <h1>{{__('menu.Become Liliana')}}</h1>
                </div>
            </div>

            <!-- start content -->
            <div class="section section-content">
                <div class="container-lg">
                    <p>
                        Liliana Models is always on the lookout for individuals with big dreams. If your goal is to make
                        a mark in the entertainment world, then we're the right place for you. We believe in the
                        importance of trust and make it our mission to always back and support each of our members. When
                        you become part of our family, we take the time to understand what you're good at and what
                        interests you. This way, we can send job opportunities your way that align with your skills and
                        passions. We're not just about work; we want to see you grow, learn, and shine in what you do.
                        So, if you have a burning passion for the entertainment industry and are ready to shoot for the
                        stars, come and join us at Liliana Models. We're here to support and guide you every step of the
                        way, helping make your biggest dreams come true.
                    </p>
                </div>
            </div>

            <!-- start app steps -->
            <div class="section section-app-step">
                <div class="container-lg">
                    <h6>Application Steps:</h6>
                    <p>
                        1. Click the "APPLY" button at the bottom of the page and complete the application form on our
                        website.
                    </p>
                    <p>
                        2. After you submit, our team dives into every detail. Beyond just your talent, we're keen on
                        your passion and dedication. It helps us see if you're the right fit for the roles we offer.
                    </p>
                    <p>
                        3. Give us a few days, and we'll reach out. Whether through a call or an email, we're eager to
                        learn more about your aspirations and what drives you in the entertainment world.
                    </p>
                    <p>
                        4. If everything aligns and we see potential synergy, you'll be welcomed into the Liliana Models
                        family. It's here that your dream truly kicks off.
                    </p>
                    <p>
                        We see great potential in every applicant. If you're ever in doubt or have questions, just <a
                            href="./contact-us"><b>reach out</b></a>. We're here to guide and assist. Prepare to shine
                        with us!
                    </p>
                </div>
            </div>

            <!-- start apply as a model -->
            <div class="section section-apply-model">
                <div class="container-lg">
                    <a href="./register" class="btn btn-primary">
                        {{__('menu.Apply')}}
                    </a>
                </div>
            </div>

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
