@extends('dashboard.layout')

@section('content-dashboard')

    <body class="page-user-info-edit edit-page edit-page-contact enable-page-actions">

    @include('dashboard.header')

    <!-- content -->
    <main id="main">
        @include('dashboard.sidebar')
        <div id="ds_content">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="white-box">
                            <div class="white-box-header">
                                <div class="white-box-title">Contact Info</div>
                            </div>
                            <div class="white-box-content">

                                <!-- contact group -->
                                <div class="form-section">
                                    <div class="form-section-label">Contact</div>
                                    <div class="form-section-content">

                                        <!-- mobile -->
                                        <div class="row row-gap-8 gap-1">
                                            <div class="col col-country-code">
                                                <div class="field field-type-select"
                                                     data-source="https://liliana.asensive.ir/api/numcode/" data-btn-submit-text="Select"
                                                     data-field-defualt-text="Select Item" data-field-search="true"
                                                     data-required="true" data-type="select">
                                                    <div class="field-content">
                                                        <label for="country_code_mobile">Country <span class="field-required-star">*</span></label>
                                                        <select name="country_code_mobile" id="country_code_mobile" data-value="JPN" data-default-value="JPN"></select>
                                                        <i class="icon-arrow-down"></i>
                                                    </div>
                                                </div>
                                                <div class="field-error-msg" id="field_error_country_code_mobile"></div>
                                            </div>
                                            <div class="col">
                                                <div class="field field-type-nr-input" data-type="number" data-required="true"
                                                     data-required-type="mobile">
                                                    <div class="field-content">
                                                        <label for="mobile_number">Mobile Number (Verified) <span class="field-required-star">*</span></label>
                                                        <input type="tel" name="mobile_number" id="mobile_number" value="32005765">
                                                    </div>
                                                </div>
                                                <div class="field-error-msg" id="field_error_mobile_number"></div>
                                            </div>
                                            <div class="col-12 col-sm-auto">
                                                <button type="button" class="btn btn-full btn-social-verify" data-type="mobilenumber" data-target="#mobile_number" data-target-2="#country_code_mobile">Verify</button>
                                            </div>
                                        </div>

                                        <!-- phone -->
                                        <div class="row gap-1">
                                            <div class="col col-country-code">
                                                <div class="field field-type-select"
                                                     data-source="https://liliana.asensive.ir/api/numcode/" data-btn-submit-text="Select"
                                                     data-field-defualt-text="Select Item" data-field-search="true" data-type="select">
                                                    <div class="field-content">
                                                        <label for="country_code_phone">Country</label>
                                                        <select name="country_code_phone" id="country_code_phone" data-value="JPN" data-default-value="JPN"></select>
                                                        <i class="icon-arrow-down"></i>
                                                    </div>
                                                </div>
                                                <div class="field-error-msg" id="field_error_country_code_phone"></div>
                                            </div>
                                            <div class="col">
                                                <div class="field field-type-nr-input" data-type="number" data-required-type="mobile">
                                                    <div class="field-content">
                                                        <label for="phone_number">Phone Number</label>
                                                        <input type="tel" name="phone_number" id="phone_number" value="32249999">
                                                    </div>
                                                </div>
                                                <div class="field-error-msg" id="field_error_phone_number"></div>
                                            </div>
                                        </div>

                                        <!-- line account method -->
                                        <div class="field field-type-select" data-field-defualt-text=" " data-btn-submit-text="Select"
                                             data-required="true" data-type="select">
                                            <div class="field-content">
                                                <label for="line_account_type">Add Line Account by <span class="field-required-star">*</span></label>
                                                <select name="line_account_type" id="line_account_type">
                                                    <option value="Phone Number">Phone Number</option>
                                                    <option value="Line ID" selected>Line ID</option>
                                                    <option value="Line URL">Line URL</option>
                                                </select>
                                                <i class="icon-arrow-down"></i>
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_line_account_type"></div>

                                        <!-- line id -->
                                        <div data-dependency="#line_account_type" data-dependency-value="Line ID">
                                            <div class="row row-gap-8 gap-1">
                                                <div class="col-12 col-sm">
                                                    <div class="field field-type-nr-input" data-type="text" data-required="true" data-required-type="lineID">
                                                        <div class="field-content">
                                                            <label for="line_id">Line ID <span class="field-required-star">*</span></label>
                                                            <input type="text" name="line_id" id="line_id" value="Michael.K">
                                                        </div>
                                                        <i class="icon-line"></i>
                                                    </div>
                                                    <div class="field-error-msg" id="field_error_line_id"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- line url -->
                                        <div data-dependency="#line_account_type" data-dependency-value="Line URL">
                                            <div class="row row-gap-8 gap-1">
                                                <div class="col-12 col-sm">
                                                    <div class="field field-type-nr-input" data-type="text" data-required="true" data-required-type="url">
                                                        <div class="field-content">
                                                            <label for="line_url">Line URL <span class="field-required-star">*</span></label>
                                                            <input type="text" name="line_url" id="line_url" value="Michael.K">
                                                        </div>
                                                        <i class="icon-line"></i>
                                                    </div>
                                                    <div class="field-error-msg" id="field_error_line_url"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- line phone number -->
                                        <div class="row row-gap-8 gap-1" data-dependency="#line_account_type" data-dependency-value="Phone Number">
                                            <div class="col col-country-code">
                                                <div class="field field-type-select"
                                                     data-source="https://liliana.asensive.ir/api/numcode/" data-btn-submit-text="Select"
                                                     data-field-defualt-text="Select Item" data-field-search="true" data-type="select">
                                                    <div class="field-content">
                                                        <label for="line_code_phone">Country <span class="field-required-star">*</span></label>
                                                        <select name="line_code_phone" id="line_code_phone" data-value="JPN" data-default-value="JPN"></select>
                                                        <i class="icon-arrow-down"></i>
                                                    </div>
                                                </div>
                                                <div class="field-error-msg" id="field_error_line_code_phone"></div>
                                            </div>
                                            <div class="col">
                                                <div class="field field-type-nr-input" data-type="number" data-required="true" data-required-type="mobile">
                                                    <div class="field-content">
                                                        <label for="line_phone_number">Line Phone Number <span class="field-required-star">*</span></label>
                                                        <input type="tel" name="line_phone_number" id="line_phone_number" value="32249999">
                                                    </div>
                                                </div>
                                                <div class="field-error-msg" id="field_error_line_phone_number"></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <!-- social links group -->
                                <div class="form-section">
                                    <div class="form-section-label">Social Links</div>
                                    <div class="form-section-content">

                                        <!-- instagram -->
                                        <div class="row row-gap-8 gap-1">
                                            <div class="col-12 col-sm">
                                                <div class="field field-type-nr-input" data-type="text" data-required="structure" data-required-type="instagramID">
                                                    <div class="field-content">
                                                        <label for="instagram_id">Instagram ID (Verified)</label>
                                                        <input type="text" name="instagram_id" id="instagram_id" value="Michael.K">
                                                    </div>
                                                    <i class="icon-instagram"></i>
                                                </div>
                                                <div class="field-error-msg" id="field_error_instagram_id"></div>
                                            </div>
                                        </div>

                                        <!-- youtube -->
                                        <div class="row row-gap-8 gap-1">
                                            <div class="col-12 col-sm">
                                                <div class="field field-type-nr-input" data-type="text" data-required="structure" data-required-type="youtubeID">
                                                    <div class="field-content">
                                                        <label for="youtube_id">Youtube ID</label>
                                                        <input type="text" name="youtube_id" id="youtube_id" value="Michael.K">
                                                    </div>
                                                    <i class="icon-youtube"></i>
                                                </div>
                                                <div class="field-error-msg" id="field_error_youtube_id"></div>
                                            </div>
                                        </div>

                                        <!-- tiktok -->
                                        <div class="row row-gap-8 gap-1">
                                            <div class="col-12 col-sm">
                                                <div class="field field-type-nr-input" data-type="text" data-required="structure" data-required-type="tiktokID">
                                                    <div class="field-content">
                                                        <label for="tiktok_id">Tiktok ID</label>
                                                        <input type="text" name="tiktok_id" id="tiktok_id" value="Michael.K">
                                                    </div>
                                                    <i class="icon-Tiktok"></i>
                                                </div>
                                                <div class="field-error-msg" id="field_error_tiktok_id"></div>
                                            </div>
                                        </div>

                                        <!-- twitter -->
                                        <div class="row row-gap-8 gap-1">
                                            <div class="col-12 col-sm">
                                                <div class="field field-type-nr-input" data-type="text" data-required="structure" data-required-type="twitterID">
                                                    <div class="field-content">
                                                        <label for="twitter_id">Twitter ID</label>
                                                        <input type="text" name="twitter_id" id="twitter_id" value="Michael.K">
                                                    </div>
                                                    <i class="icon-twitter"></i>
                                                </div>
                                                <div class="field-error-msg" id="field_error_twitter_id"></div>
                                            </div>
                                        </div>

                                        <!-- facebook -->
                                        <div class="row row-gap-8 gap-1">
                                            <div class="col-12 col-sm">
                                                <div class="field field-type-nr-input" data-type="text" data-required="structure" data-required-type="facebookID">
                                                    <div class="field-content">
                                                        <label for="facebook_id">Facebook ID</label>
                                                        <input type="text" name="facebook_id" id="facebook_id" value="Michael.K">
                                                    </div>
                                                    <i class="icon-facebook"></i>
                                                </div>
                                                <div class="field-error-msg" id="field_error_facebook_id"></div>
                                            </div>
                                        </div>

                                        <!-- linkedin -->
                                        <div class="row row-gap-8 gap-1">
                                            <div class="col-12 col-sm">
                                                <div class="field field-type-nr-input" data-type="text" data-required="structure" data-required-type="linkedinID">
                                                    <div class="field-content">
                                                        <label for="linkedin_id">Linkedin ID</label>
                                                        <input type="text" name="linkedin_id" id="linkedin_id" value="Michael.K">
                                                    </div>
                                                    <i class="icon-linkedin"></i>
                                                </div>
                                                <div class="field-error-msg" id="field_error_linkedin_id"></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <!-- address group -->
                                <div class="form-section">
                                    <div class="form-section-label">Address</div>
                                    <div class="form-section-content">

                                        <!-- country -->
                                        <div class="field field-type-select"
                                             data-source="https://liliana.asensive.ir/api/country/" data-btn-submit-text="Select"
                                             data-field-defualt-text="Select Item" data-field-search="true"
                                             data-required="true" data-type="select">
                                            <div class="field-content">
                                                <label for="country">Country <span class="field-required-star">*</span></label>
                                                <select name="country" id="country" data-value="Japan" data-default-value="Japan"></select>
                                                <i class="icon-arrow-down"></i>
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_country"></div>

                                        <!-- zipcode -->
                                        <div class="field field-type-nr-input" data-type="number" data-required="true"
                                             data-required-type="zipcode">
                                            <div class="field-content">
                                                <label for="zipcode">Zip Code <span class="field-required-star">*</span></label>
                                                <input type="number" name="zipcode" id="zipcode" value="0100450">
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_zipcode"></div>

                                        <!-- state and city -->
                                        <div class="row gap-1">
                                            <div class="col-6">
                                                <div class="field field-type-select" data-field-defualt-text="Select Item" data-btn-submit-text="Select" data-field-search="true"
                                                     data-required="true" data-type="select">
                                                    <div class="field-content">
                                                        <label for="state">State <span class="field-required-star">*</span></label>
                                                        <select name="state" id="state" data-value="jps3" data-default-value="jps3"></select>
                                                        <i class="icon-arrow-down"></i>
                                                    </div>
                                                </div>
                                                <div class="field-error-msg" id="field_error_state"></div>
                                            </div>
                                            <div class="col-6">
                                                <div class="field field-type-select" data-field-defualt-text="Select Item" data-btn-submit-text="Select" data-field-search="true"
                                                     data-required="true" data-type="select">
                                                    <div class="field-content">
                                                        <label for="city">City <span class="field-required-star">*</span></label>
                                                        <select name="city" id="city" data-value="jpc1" data-default-value="jpc1"></select>
                                                        <i class="icon-arrow-down"></i>
                                                    </div>
                                                </div>
                                                <div class="field-error-msg" id="field_error_city"></div>
                                            </div>
                                        </div>

                                        <!-- area -->
                                        <div class="field field-type-nr-input" data-type="text" data-required="true">
                                            <div class="field-content">
                                                <label for="area">Area <span class="field-required-star">*</span></label>
                                                <input type="text" name="area" id="area" value="Shinuya">
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_area"></div>

                                        <!-- address -->
                                        <div class="field field-type-nr-input" data-type="text" data-required="true">
                                            <div class="field-content">
                                                <label for="address">Address <span class="field-required-star">*</span></label>
                                                <input type="text" name="address" id="address" value="Address 1">
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_address"></div>

                                        <!-- apartment -->
                                        <div class="field field-type-nr-input" data-type="text" data-required="true">
                                            <div class="field-content">
                                                <label for="address_2">Apartment,Suite,etc. Name & Number <span class="field-required-star">*</span></label>
                                                <input type="text" name="address_2" id="address_2" value="Address 2">
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_address_2"></div>

                                        <!-- station -->
                                        <div class="field field-type-nr-input" data-type="text" data-required="true">
                                            <div class="field-content">
                                                <label for="nearest_station">Nearest JR/Subway Station <span class="field-required-star">*</span></label>
                                                <input type="text" name="nearest_station" id="nearest_station" value="">
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_nearest_station"></div>

                                    </div>
                                </div>

                                <!-- manager group -->
                                <div class="form-section">
                                    <div class="form-section-label align-top">
                                        <div>
                                            <span>Do you have manager? <span class="field-required-star">*</span></span>
                                            <div class="field-hint">We will contact our member's manager about the offer instead of contacting the member directly if this field is filled out.</div>
                                        </div>
                                    </div>
                                    <div class="form-section-content">

                                        <!-- manager radio -->
                                        <div class="field-group-validations" data-group-validation-relation="and">
                                            <div class="row align-items-center">
                                                <div class="col-auto">

                                                    <!-- Yes -->
                                                    <div class="field field-type-radio" data-required="true" data-type="radio">
                                                        <div class="field-content">
                                                            <label>
                                                                <input type="radio" value="yes" name="have_manager" class="have_manager" >
                                                                <span class="checkmark"></span>
                                                                Yes
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-auto">

                                                    <!-- no -->
                                                    <div class="field field-type-radio" data-required="true" data-type="radio">
                                                        <div class="field-content">
                                                            <label>
                                                                <input type="radio" value="no" name="have_manager" class="have_manager">
                                                                <span class="checkmark"></span>
                                                                No
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="field-error-msg"></div>
                                        </div>

                                        <!-- name -->
                                        <div data-dependency=".have_manager" data-dependency-value="yes">
                                            <div class="field field-type-nr-input" data-type="text" data-required="true">
                                                <div class="field-content">
                                                    <label for="manager_name">Manager Name <span class="field-required-star">*</span></label>
                                                    <input type="text" name="manager_name" id="manager_name" value="Mike Oldmann">
                                                </div>
                                            </div>
                                            <div class="field-error-msg" id="field_error_manager_name"></div>
                                        </div>

                                        <!-- relationship -->
                                        <div data-dependency=".have_manager" data-dependency-value="yes">
                                            <div class="field field-type-select " data-field-defualt-text=" " data-btn-submit-text="Select"
                                                 data-required="true" data-type="select">
                                                <div class="field-content">
                                                    <label for="manager_relationship">Relationship <span class="field-required-star">*</span></label>
                                                    <select name="manager_relationship" id="manager_relationship">
                                                        <option value="couple">Couple</option>
                                                        <option value="spouse">Spouse</option>
                                                        <option value="sibling">Sibling</option>
                                                        <option value="parent" selected>Parent</option>
                                                        <option value="child">Child</option>
                                                        <option value="friend">Friend</option>
                                                        <option value="relative">Relative</option>
                                                        <option value="agent">Agent</option>
                                                    </select>
                                                    <i class="icon-arrow-down"></i>
                                                </div>
                                            </div>
                                            <div class="field-error-msg" id="field_error_manager_relationship"></div>
                                        </div>

                                        <!-- email -->
                                        <div data-dependency=".have_manager" data-dependency-value="yes">
                                            <div class="field field-type-nr-input" data-type="text" data-required="true" data-required-type="email">
                                                <div class="field-content">
                                                    <label for="manager_email">Manager's Email <span class="field-required-star">*</span></label>
                                                    <input type="text" name="manager_email" id="manager_email" value="Mike@gmail.com">
                                                </div>
                                            </div>
                                            <div class="field-error-msg" id="field_error_manager_email"></div>
                                        </div>

                                        <!-- country code and mobile -->
                                        <div class="row gap-1" data-dependency=".have_manager" data-dependency-value="yes">
                                            <div class="col col-country-code">
                                                <div class="field field-type-select top-options"
                                                     data-source="https://liliana.asensive.ir/api/numcode/" data-btn-submit-text="Select"
                                                     data-field-defualt-text="Select Item" data-field-search="true"
                                                     data-required="true" data-type="select">
                                                    <div class="field-content">
                                                        <label for="country_code_manager_mobile">Country <span class="field-required-star">*</span></label>
                                                        <select name="country_code_manager_mobile" id="country_code_manager_mobile" data-value="JPN" data-default-value="JPN"></select>
                                                        <i class="icon-arrow-down"></i>
                                                    </div>
                                                </div>
                                                <div class="field-error-msg" id="field_error_country_code_manager_mobile"></div>
                                            </div>
                                            <div class="col">
                                                <div class="field field-type-nr-input" data-type="number" data-required="true"
                                                     data-required-type="mobile">
                                                    <div class="field-content">
                                                        <label for="manager_mobile_number">Manager's Mobile <span class="field-required-star">*</span></label>
                                                        <input type="tel" name="manager_mobile_number" id="manager_mobile_number" value="8032000000">
                                                    </div>
                                                </div>
                                                <div class="field-error-msg" id="field_error_manager_mobile_number"></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <!-- emergency contact group -->
                                <div class="form-section">
                                    <div class="form-section-label">Emergency Contact</div>
                                    <div class="form-section-content">

                                        <!-- name -->
                                        <div class="field field-type-nr-input" data-type="text" data-required-type="firstname" data-required="true">
                                            <div class="field-content">
                                                <label for="full_name_emergency_contact">Full Name of the emergency contact in Japan <span class="field-required-star">*</span></label>
                                                <input type="text" name="full_name_emergency_contact" id="full_name_emergency_contact" value="Mike">
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_full_name_emergency_contact"></div>

                                        <!-- relationship -->
                                        <div class="field field-type-select top-options" data-btn-submit-text="Select" data-field-defualt-text=" "
                                             data-required="true" data-type="select">
                                            <div class="field-content">
                                                <label for="relationship_emergency_contact">Relationship <span class="field-required-star">*</span></label>
                                                <select name="relationship_emergency_contact" id="relationship_emergency_contact">
                                                    <option value="couple">Couple</option>
                                                    <option value="spouse">Spouse</option>
                                                    <option value="sibling" selected>Sibling</option>
                                                    <option value="parent">Parent</option>
                                                    <option value="child">Child</option>
                                                    <option value="friend">Friend</option>
                                                    <option value="relative">Relative</option>
                                                    <option value="agent">Agent</option>
                                                </select>
                                                <i class="icon-arrow-down"></i>
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_relationship_emergency_contact"></div>

                                        <!-- mobile number -->
                                        <div class="row gap-1">
                                            <div class="col col-country-code">
                                                <div class="field field-type-select top-options"
                                                     data-source="https://liliana.asensive.ir/api/numcode/" data-btn-submit-text="Select"
                                                     data-field-defualt-text="Select Item" data-field-search="true"
                                                     data-required="true" data-type="select">
                                                    <div class="field-content">
                                                        <label for="country_code_emergency_contact">Country <span class="field-required-star">*</span></label>
                                                        <select name="country_code_emergency_contact" id="country_code_emergency_contact" data-value="JPN" data-default-value="JPN"></select>
                                                        <i class="icon-arrow-down"></i>
                                                    </div>
                                                </div>
                                                <div class="field-error-msg" id="field_error_country_code_emergency_contact"></div>
                                            </div>
                                            <div class="col">
                                                <div class="field field-type-nr-input" data-type="number" data-required="true"
                                                     data-required-type="mobile">
                                                    <div class="field-content">
                                                        <label for="mobile_number_emergency_contact">Mobile Number <span class="field-required-star">*</span></label>
                                                        <input type="tel" name="mobile_number_emergency_contact" id="mobile_number_emergency_contact" value="5544112233">
                                                    </div>
                                                </div>
                                                <div class="field-error-msg" id="field_error_mobile_number_emergency_contact"></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="page-actions">
        <a href="./user-info" class="btn">
            Cancel
        </a>
        <button type="button" class="btn btn-primary btn-save-edit-form" data-page="user-info-contact">
            Save
        </button>
    </div>

@endsection
