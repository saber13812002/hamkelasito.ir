@extends('layout-home')

@section('content-home')
    <!-- start content -->


    <!-- start content -->
    <main>
        <div id="content" itemscope itemtype="https://schema.org/ContactPage">

            <!-- start page breadcrumb -->
            <div class="page-breadcrumb">
                <div class="container-xxxl">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./home">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <!-- start page title -->
            <div class="page-title">
                <div class="container-xxl">
                    <h1>Contact Us</h1>
                </div>
            </div>

            <section class="section section-contact-us">
                <div class="container-xxxl">
                    <div class="row contact-links-content">
                        <div class="col-12 col-md-6 col-lg-5">
                            <p class="contact-notice">
                                For work requests, other questions, inquiries, etc., please contact us using the form in
                                this page
                            </p>
                            <ul class="list-link-contact" itemscope itemtype="https://schema.org/Organization">
                                <li>
                                    <i class="icon-call"></i>
                                    <a href="tel:+81-3-6362-3355"><span itemprop="telephone">+81-3-6362-3355</span></a>
                                </li>
                                <li>
                                    <i class="icon-fax"></i>
                                    <a href="fax:+81-3-6323-0195"><span itemprop="faxNumber">+81-3-6323-0195</span></a>
                                </li>
                                <li>
                                    <i class="icon-sms"></i>
                                    <a href="mailto:info@lilianamodels.com">
                                        <span itemprop="email">info@lilianamodels.com</span>
                                    </a>
                                </li>
                                <li>
                                    <i class="icon-location"></i>
                                    <div itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                                        <span itemprop="streetAddress">2nd floor, Vort Akasaka II, 4-4-8 Akasaka, Minato-ku, Tokyo 107-0052</span>
                                    </div>
                                </li>
                            </ul>
                            <iframe class="company-location lazy"
                                    data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.1356560764652!2d139.73462039999998!3d35.673661599999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188d4617c09ce9%3A0xf264b8c38e953f06!2sLiliana%20Inc.!5e0!3m2!1sen!2sjp!4v1693107674836!5m2!1sen!2sjp"
                                    height="227" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <div class="social-network">
                                <span>On Social Media:</span>
                                <div class="social-links">
                                    <a href="https://www.facebook.com/liliana.modeling/" class="btn btn-icon"
                                       aria-label="Facebook Link" itemprop="sameAs">
                                        <i class="icon-facebook"></i>
                                    </a>
                                    <a href="https://www.instagram.com/Liliana.models/" class="btn btn-icon"
                                       aria-label="Instagram Link" itemprop="sameAs">
                                        <i class="icon-instagram"></i>
                                    </a>
                                    <a href="https://www.tiktok.com/@lilianamodels" class="btn btn-icon"
                                       aria-label="Tiktok Link" itemprop="sameAs">
                                        <i class="icon-Tiktok"></i>
                                    </a>
                                    <a href="https://twitter.com/lilianamodels" class="btn btn-icon"
                                       aria-label="Twitter Link" itemprop="sameAs">
                                        <i class="icon-twitter"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/company/liliana-modeling" class="btn btn-icon"
                                       aria-label="LinkedIn Link" itemprop="sameAs">
                                        <i class="icon-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="page-more-links visible-desktop">
                                <div class="link-item">
                                    <h2>About Us</h2>
                                    <span>You can read about us <a href="./about-us">here.</a></span>
                                </div>
                                <div class="link-item">
                                    <h2>Company Profile</h2>
                                    <span>Our company profile can be see <a href="./company-profile">here.</a></span>
                                </div>
                                <div class="link-item">
                                    <h2>Privacy Policy</h2>
                                    <span>Our privacy policy can be see <a href="./privacy-policy">here.</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <h2>Contact Support:</h2>
                            <form action="{{ route('contact-us') }}" method="post">
                                @csrf
                                <div class="row">

                                    <!-- name -->
                                    <div class="col-12 col-sm-6">
                                        <div class="field field-type-nr-input" data-type="text" data-required="true"
                                             data-required-type="firstname">
                                            <div class="field-content">
                                                <label for="field_name">Name <span class="field-required-star">*</span></label>
                                                <input type="text" name="name" id="field_name">
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_field_name"></div>
                                    </div>

                                    <!-- company -->
                                    <div class="col-12 col-sm-6">
                                        <div class="field field-type-nr-input" data-type="text">
                                            <div class="field-content">
                                                <label for="field_company">Company Name</label>
                                                <input type="text" name="company" id="field_company">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- email -->
                                    <div class="col-12 col-sm-6">
                                        <div class="field field-type-nr-input" data-type="text" data-required="true"
                                             data-required-type="email">
                                            <div class="field-content">
                                                <label for="field_mail">Email <span class="field-required-star">*</span></label>
                                                <input type="email" name="mail" id="field_mail">
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_field_mail"></div>
                                    </div>

                                    <!-- phone number -->
                                    <div class="col-12 col-sm-6">
                                        <div class="field field-type-nr-input" data-type="text" data-required="true"
                                             data-required-type="mobile">
                                            <div class="field-content">
                                                <label for="field_phone">Phone Number <span class="field-required-star">*</span></label>
                                                <input type="tel" name="phone" id="field_phone">
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_field_phone"></div>
                                    </div>

                                    <!-- category -->
                                    <div class="col-12">
                                        <div class="field field-type-select" data-field-defualt-text=" "
                                             data-required="true" data-btn-submit-text="Select" data-type="select">
                                            <div class="field-content">
                                                <label for="field_category">Select Category <span
                                                        class="field-required-star">*</span></label>
                                                <select name="category" id="field_category">
                                                    <option value="introduction_to_liliana">Introduction to Liliana
                                                    </option>
                                                    <option value="joining_liliana">Joining Liliana</option>
                                                    <option value="member_support">Member Support</option>
                                                    <option value="customer_support">Customer Support</option>
                                                    <option value="starting_a_new_project">Starting a New Project
                                                    </option>
                                                    <option value="miscellaneous">Other</option>
                                                </select>
                                                <i class="icon-arrow-down"></i>
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_field_category"></div>
                                    </div>

                                    <!-- message -->
                                    <div class="col-12">
                                        <div class="field field-type-text-area" data-type="textarea"
                                             data-required="true" data-max-length="1500">
                                            <div class="field-content">
                                                <label for="field_message">Message <span
                                                        class="field-required-star">*</span></label>
                                                <textarea name="message" id="field_message" rows="7"></textarea>
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_field_message"></div>
                                    </div>

                                    <!-- send button -->
                                    <div class="col-12 col-sm-6">
                                        <button class="btn btn-primary btn-full btn-contact-send-support">
                                            Send
                                        </button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section page-more-links visible-mobile">
                <div class="container-xxl">
                    <div class="link-item">
                        <h2>About Us</h2>
                        <span>You can read about us <a href="./about-us">here.</a></span>
                    </div>
                    <div class="link-item">
                        <h2>Company Profile</h2>
                        <span>Our company profile can be see <a href="./company-profile">here.</a></span>
                    </div>
                    <div class="link-item">
                        <h2>Privacy Policy</h2>
                        <span>Our privacy policy can be see <a href="./privacy-policy">here.</a></span>
                    </div>
                </div>
            </section>

        </div>
    </main>


@endsection
