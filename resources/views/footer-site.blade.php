<!-- start footer -->
<footer id="footer">
    <div class="container-xxl">
        <div class="row">

            <!-- start about us -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="ft-about-us">
                    <a href="/#" class="ft-site-logo">
                        <img src="/storage/assets/img/logo-white.svg" class="lazy lz-dark"
                             data-src="/storage/assets/img/logo-white.svg" width="88" height="24" alt="Liliana">
                        <noscript>
                            <img src="/storage/assets/img/logo-white.svg" width="88" height="24" alt="Liliana">
                        </noscript>
                    </a>
                    <p>
                        {{__('menu.We celebrate your uniqueness, help you achieve dreams, and support your creative journey at every step').'.'}}
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
                            <a href="tel:+81-3-6362-3355">@if(App::getLocale() != 'ja')
                                   +81-
                                @endif
                                3-6362-3355</a>
                        </li>
                        <li>
                            <i class="icon-fax"></i>
                            <a href="fax:+81-3-6323-0195">@if(App::getLocale() != 'ja')
                                    +81-
                                @endif
                                3-6323-0195</a>
                        </li>
                        <li>
                            <i class="icon-sms"></i>
                            <a href="mailto:info@lilianamodels.com">info@lilianamodels.com</a>
                        </li>
                        <li>
                            <i class="icon-location"></i>
                            <span>
                                {{__('menu.2nd floor, Vort Akasaka II, 4-4-8 Akasaka, Minato-ku, Tokyo 107-0052')}}
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
                            <span class="accordion-title">{{__('menu.Menu')}}</span>
                            <i class="icon-arrow-down"></i>
                        </button>
                        <div class="accordion-content" style="display: none;">
                            <div class="ft-menu">
                                <ul>
                                    <li><a href="/">{{__('menu.Home')}}</a></li>
                                    <li><a href="work">{{__('menu.Portfolio')}}</a></li>
                                    <li><a href="news-category">{{__('menu.News')}}</a></li>
                                    <li><a href="about-us">{{__('menu.About us')}}</a></li>
                                    <li><a href="contact-us">{{__('menu.Contact us')}}</a></li>
                                    <li><a href="company-profile">{{__('menu.Company Profile')}}</a></li>
                                    <li><a href="privacy-policy">{{__('menu.Privacy Policy')}}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button class="accordion-header">
                            <span class="accordion-title">{{__('menu.Categories')}}</span>
                            <i class="icon-arrow-down"></i>
                        </button>
                        <div class="accordion-content" style="display: none;">
                            <div class="ft-categories">
                                <ul>
                                    <li><a href="models-list">{{__('menu.Model')}}</a></li>
                                    <li><a href="models-list">{{__('menu.Talent')}}</a></li>
                                    <li><a href="models-list">{{__('menu.Actor')}}</a></li>
                                    <li><a href="models-list">{{__('menu.Extra')}}</a></li>
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
        {{__('menu.©2023 Liliana Entertainment Agency, All Rights Reserved')}}.
    </div>
</footer>
